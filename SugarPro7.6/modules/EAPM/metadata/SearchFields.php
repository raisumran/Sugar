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
$module_name = 'EAPM';
$searchFields[$module_name] =
	array (
		'type' => array( 'query_type'=>'default'),
		'name' => array( 'query_type'=>'default'),
		'application' => array( 'query_type'=>'application'),
		'validated' => array( 'query_type'=>'default'),
		'current_user_only'=> array('query_type'=>'default','db_field'=>array('assigned_user_id'),'my_items'=>true, 'vname' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
		'assigned_user_id'=> array('query_type'=>'default'),
		'favorites_only' => array(
            'query_type'=>'format',
			'operator' => 'subquery',
			'subquery' => 'SELECT sugarfavorites.record_id FROM sugarfavorites
			                    WHERE sugarfavorites.deleted=0
			                        and sugarfavorites.module = "'.$module_name.'"
			                        and sugarfavorites.assigned_user_id = "{0}"',
			'db_field'=>array('id')),
	);
?>
