<?php
 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Update custom conector configuration files to remove copyright symbols that
 * have broken some connector connections. Valid for any upgrades coming from
 * 7.6.0 and below to 7.6.1 and above.
 */
class SugarUpgradeRepairConnectorNames extends UpgradeScript
{
    public $order = 2150;
    public $type = self::UPGRADE_ALL;

    /**
     * List of files that need to be inspected for repair.
     *
     * @var array
     */
    public $configsToRepair = array();

    /**
     * The metadata file used to store connector metadata
     *
     * @var string
     */
    public $metadataFile = 'custom/modules/Connectors/metadata/connectors.php';

    public function run()
    {
        if (version_compare($this->from_version, '7.6.1', '<') && version_compare($this->to_version, '7.6.1', '>=')) {
            $this->setConfigsToRepair();
            $this->repairConfigs();
        }
    }

    /**
     * Looks for and sets the list of files that may need repair
     */
    public function setConfigsToRepair()
    {
        // Look for custom configs to update, for example:
        // custom/modules/Connectors/connectors/sources/ext/rest/twitter/config.php
        $this->configsToRepair = glob('custom/modules/Connectors/connectors/sources/ext/*/*/config.php');
    }

    /**
     * Handles the actual repairing of the files
     */
    public function repairConfigs()
    {
        $this->removeCopyrightsFromConfigs();
        $this->removeCopyrightsFromMetadata();
    }

    /**
     * Runs through the list of configs and sanitizes each file, saving the file
     * after it is cleansed.
     */
    public function removeCopyrightsFromConfigs()
    {
        foreach ($this->configsToRepair as $path) {
            // Get the data in the file
            require $path;

            // Handle cleansing of the name property
            if (isset($config) && is_array($config) && isset($config['name'])) {
                $config['name'] = str_replace('&#169;', '', $config['name']);
            }

            if (!$this->saveUpdatedConfigFile($config, $path)) {
                $this->log("CONNECTOR CONFIG UPGRADE: Could not save $path");
            }
        }
    }

    /**
     * Handles sanitization of the name elements in the metadata
     */
    public function removeCopyrightsFromMetadata()
    {
        if (file_exists($this->metadataFile)) {
            require $this->metadataFile;
            if (isset($connectors) && is_array($connectors)) {
                foreach ($connectors as $name => $data) {
                    if (isset($data['name'])) {
                        $data['name'] = str_replace('&#169;', '', $data['name']);
                    }
                    $connectors[$name] = $data;
                }

                if (!write_array_to_file('connectors', $connectors, $this->metadataFile)) {
                    $this->log("CONNECTOR UPGRADE: Could not save updated connector metadata");
                }
            }
        }
    }

    /**
     * Writes the config data to the custom file from whence it came
     *
     * @param array $config The config data to save
     * @param string $file The file name to save
     * @return int The amount of data saved to the file
     */
    public function saveUpdatedConfigFile($config, $file)
    {
        $write = "<?php\n/***CONNECTOR SOURCE***/\n";
        foreach ($config as $key => $val) {
            if (!empty($val)) {
                $write .= override_value_to_string_recursive2('config', $key, $val, false);
            }
        }

        return file_put_contents($file, $write);
    }
}
