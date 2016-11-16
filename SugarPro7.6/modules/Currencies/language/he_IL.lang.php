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
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'מטבעות',
  'LBL_MODULE_NAME_SINGULAR' => 'מטבע:',
  'LBL_LIST_FORM_TITLE' => 'מטבעות',
  'LBL_CURRENCY' => 'מטבע:',
  'LBL_ADD' => 'Add [Alt+C]',
  'LBL_MERGE' => 'מזג',
  'LBL_MERGE_TXT' => 'Please select the currencies you would like to map to the selected currency. This will delete all the currencies with a checkmark and reassign any value associated with them to the selected currency.',
  'LBL_US_DOLLAR' => 'דולר ארצות-הברית',
  'LBL_DELETE' => 'Delete',
  'LBL_LIST_SYMBOL' => 'סימול מטבע',
  'LBL_LIST_NAME' => 'שם מטבע',
  'LBL_LIST_ISO4217' => 'ISO 4217 קוד',
  'LBL_LIST_ISO4217_HELP' => 'Enter a three-letter ISO 4217 code that defines the currency name and currency symbol.',
  'LBL_UPDATE' => 'עדכן',
  'LBL_LIST_RATE' => 'שער חליפין',
  'LBL_LIST_RATE_HELP' => 'A Conversion Rate of 0.5 for Euro means that 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Status',
  'LNK_NEW_CONTACT' => 'איש קשר חדש',
  'LNK_NEW_ACCOUNT' => 'חשבון חדש',
  'LNK_NEW_OPPORTUNITY' => 'הזדמנות חדשה',
  'LNK_NEW_CASE' => 'אירוע חדש',
  'LNK_NEW_NOTE' => 'צור פתק או צרופה',
  'LNK_NEW_CALL' => 'שיחת טלפון חדשה',
  'LNK_NEW_EMAIL' => 'דואר אלקטרוני חדש',
  'LNK_NEW_MEETING' => 'פגישה חדשה',
  'LNK_NEW_TASK' => 'צור משימה',
  'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record? Any record using this currency will be converted to the system default currency when they are accessed. It may be better to set the status to inactive.',
  'LBL_BELOW_MIN' => 'Conversion rate has to be above 0',
  'currency_status_dom' => 
  array (
    'Active' => 'פעיל',
    'Inactive' => 'לא פעיל',
  ),
  'LBL_CREATED_BY' => 'נוצר על ידי',
  'LBL_EDIT_LAYOUT' => 'ערוך תצורה' /*for 508 compliance fix*/,
  'LBL_ADMIN_ONLY' => 'מנהלים בלבד',
);
?>
