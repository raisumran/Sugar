<?php

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

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldEnum extends SugarFieldBase {
   
	function getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
		if(!empty($vardef['function']['returns']) && $vardef['function']['returns']== 'html')
		{
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return "<span id='{$vardef['name']}'>" . $this->fetch($this->findTemplate('DetailViewFunction')) . "</span>";
    	} else {
    		  return parent::getDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    	}
    }
    
    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {

    	if(empty($displayParams['size'])) {
		   $displayParams['size'] = 6;
		}
    	
    	if(isset($vardef['function']) && !empty($vardef['function']['returns']) && $vardef['function']['returns']== 'html'){
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('EditViewFunction'));
    	}else{
    		  return parent::getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    	}
    }
    
    function getWirelessDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
    	if ( is_array($vardef['options']) )
            $this->ss->assign('value', $vardef['options'][$vardef['value']]);
        else
            $this->ss->assign('value', $GLOBALS['app_list_strings'][$vardef['options']][$vardef['value']]);
		if(!empty($vardef['function']['returns']) && $vardef['function']['returns']== 'html'){
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('WirelessDetailViewFunction'));
    	}else{
    		  return parent::getWirelessDetailViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    	}
    }
    
    function getWirelessEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex){
    	$this->ss->assign('field_options', is_array($vardef['options']) ? $vardef['options'] : $GLOBALS['app_list_strings'][$vardef['options']]);
    	$this->ss->assign('selected', isset($vardef['value'])?$vardef['value']:'');
    	if(!empty($vardef['function']['returns']) && $vardef['function']['returns']== 'html'){
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('WirelessEditViewFunction'));
    	}else{
    		  return parent::getWirelessEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    	}
    }
    
	function getSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
		
		if(empty($displayParams['size'])) {
		   $displayParams['size'] = 6;
		}
		
    	if(!empty($vardef['function']['returns']) && $vardef['function']['returns']== 'html'){
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('EditViewFunction'));
    	}else{
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('SearchView'));
    	}
    }
    
    function getWirelessSearchViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) {
    	if(!empty($vardef['function']['returns']) && $vardef['function']['returns']== 'html'){
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('EditViewFunction'));
    	}else{
    		  $this->setup($parentFieldArray, $vardef, $displayParams, $tabindex);
        	  return $this->fetch($this->findTemplate('SearchView'));
    	}
    }

    /**
     * Can return a smarty template for the current view type.
     * {@inheritdoc}
     */
    public function displayFromFunc($displayType, $parentFieldArray, $vardef, $displayParams, $tabindex = 0)
    {
        if ( isset($vardef['function']['returns']) && $vardef['function']['returns'] == 'html' ) {
            return parent::displayFromFunc($displayType, $parentFieldArray, $vardef, $displayParams, $tabindex);
        }

        $displayTypeFunc = 'get'.$displayType.'Smarty';
        return $this->$displayTypeFunc($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
    
    /**
     * @see SugarFieldBase::importSanitize()
     */
    public function importSanitize(
        $value,
        $vardef,
        $focus,
        ImportFieldSanitize $settings
        )
    {
        global $app_list_strings;
        
        // Bug 27467 - Trim the value given
        $value = trim($value);
        
        if ( isset($vardef['options'])
                && isset($app_list_strings[$vardef['options']])
                && !isset($app_list_strings[$vardef['options']][$value]) ) {
            // Bug 23485/23198 - Check to see if the value passed matches the display value
            if ( in_array($value,$app_list_strings[$vardef['options']]) )
                $value = array_search($value,$app_list_strings[$vardef['options']]);
            // Bug 33328 - Check for a matching key in a different case
            elseif ( in_array(strtolower($value), array_keys(array_change_key_case($app_list_strings[$vardef['options']]))) ) {
                foreach ( $app_list_strings[$vardef['options']] as $optionkey => $optionvalue )
                    if ( strtolower($value) == strtolower($optionkey) )
                        $value = $optionkey;
            }
            // Bug 33328 - Check for a matching value in a different case
            elseif ( in_array(strtolower($value), array_map('strtolower', $app_list_strings[$vardef['options']])) ) {
                foreach ( $app_list_strings[$vardef['options']] as $optionkey => $optionvalue )
                    if ( strtolower($value) == strtolower($optionvalue) )
                        $value = $optionkey;
            }
            else
                return false;
        }
        
        return $value;
    }
    
	public function formatField($rawField, $vardef){
		global $app_list_strings;
		
		if(!empty($vardef['options'])){
			$option_array_name = $vardef['options'];
			
			if(!empty($app_list_strings[$option_array_name][$rawField])){
				return $app_list_strings[$option_array_name][$rawField];
			}else {
				return $rawField;
			}
		} else {
			return $rawField;
		}
    }


    /*
     * @see SugarFieldBase::getEmailTemplateValue()
     */
    public function getEmailTemplateValue($inputField, $vardef, $context = null) {

        //if function is defined then call the function value and retrieve the input field string
        if(!empty($vardef['function'])) {
            // figure out the bean we should be using
            $bean = (isset($vardef['function_bean']) && !empty($vardef['function_bean'])) ? $vardef['function_bean'] : null;
            return getFunctionValue($bean, $vardef['function'], $args = array('selectID' => $inputField));
        }
        
        // call format field to return value
        return $this->formatField($inputField,$vardef);
    }
}
