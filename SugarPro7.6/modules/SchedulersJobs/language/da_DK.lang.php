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
$mod_strings = array (
'LBL_NAME' => 'Jobnavn',
'LBL_EXECUTE_TIME'			=> 'Udfør tid',
'LBL_SCHEDULER_ID' 	=> 'Planlægger',
'LBL_STATUS' 	=> 'Job status',
'LBL_RESOLUTION' 	=> 'Løsning',
'LBL_MESSAGE' 	=> 'Meddelelser',
'LBL_DATA' 	=> 'Job data',
'LBL_REQUEUE' 	=> 'Forsøg igen ved fejl',
'LBL_RETRY_COUNT' 	=> 'Maksimum antal forsøg',
'LBL_FAIL_COUNT' 	=> 'Fejl',
'LBL_INTERVAL' 	=> 'Minimum interval mellem forsøg',
'LBL_CLIENT' 	=> 'Ejer',
'LBL_PERCENT'	=> 'Procent færdig',
'LBL_JOB_GROUP' => 'Jobgruppe',
// Errors
'ERR_CALL' 	=> "Kan ikke kalde funktionen: %s",
'ERR_CURL' => "Ingen CURL - kan ikke køre URL jobs",
'ERR_FAILED' => "Uventet fejl. Venligst tjek PHP logs og sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s i %s på linie %d",
'ERR_NOUSER' => "Intet bruger id angivet for jobbet",
'ERR_NOSUCHUSER' => "Bruger id %s ikke fundet",
'ERR_JOBTYPE' 	=> "Ukendt job type: %s",
'ERR_TIMEOUT' => "Fejl pga. timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) fejlede under CRON kørsel',
);
