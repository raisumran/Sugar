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
  'LBL_MODULE_NAME' => 'Sale',
  'LBL_MODULE_TITLE' => 'מכירה: דף הבית',
  'LBL_SEARCH_FORM_TITLE' => 'חפש מכירה',
  'LBL_VIEW_FORM_TITLE' => 'צפה המכירה',
  'LBL_LIST_FORM_TITLE' => 'רשימת מכירות',
  'LBL_SALE_NAME' => 'שם מכירה:',
  'LBL_SALE' => 'מכירה:',
  'LBL_NAME' => 'שם מכירה',
  'LBL_LIST_SALE_NAME' => 'Name',
  'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
  'LBL_LIST_AMOUNT' => 'כמות',
  'LBL_LIST_DATE_CLOSED' => 'סגור',
  'LBL_LIST_SALE_STAGE' => 'שלב במכירות',
  'LBL_ACCOUNT_ID'=>'חשבון ID',
  'LBL_TEAM_ID' =>'צוות זהות',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'מכירה - עדכון מטבע',
  'UPDATE_DOLLARAMOUNTS' => 'עדכן שער חליפין לדולר',
  'UPDATE_VERIFY' => 'וודא שער חליפין',
  'UPDATE_VERIFY_TXT' => 'וודא שהסכומים במכירה מכילים ספרות בלבד(0-9) וחלקי שקל מופרשים ב(.)',
  'UPDATE_FIX' => 'שער חליפין קבוע',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'עדכן את סכון המכירה בדולרים בהתבסס על שער החליפין שהוזן למערכת. ערך זה בשימושם של גרפים שמציגים שער שקל ושער דולר על בסיס שער החליפין שהוזן למערכת.',
  'UPDATE_CREATE_CURRENCY' => 'יוצר מטבע חדש:',
  'UPDATE_VERIFY_FAIL' => 'רשומה נכלשה בעדכון:',
  'UPDATE_VERIFY_CURAMOUNT' => 'שער חליפין:',
  'UPDATE_VERIFY_FIX' => 'הרצת תיקון תאפשר',
  'UPDATE_INCLUDE_CLOSE' => 'לכלול רשומות שנסגרו',
  'UPDATE_VERIFY_NEWAMOUNT' => 'שער חליפין חדש:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'מטבע חדש:',
  'UPDATE_DONE' => 'Done',
  'UPDATE_BUG_COUNT' => 'נמצא באג ונסיתי לפתור אותו:',
  'UPDATE_BUGFOUND_COUNT' => 'באגים נמצאו:',
  'UPDATE_COUNT' => 'רשומות שעודכנו:',
  'UPDATE_RESTORE_COUNT' => 'רשומות שערי חליפין ששוחזרו:',
  'UPDATE_RESTORE' => 'שחזר שער חליפין',
  'UPDATE_RESTORE_TXT' => 'שחזר שערי חליפין מגבוי שבוצע תוך כדי תיקון.',
  'UPDATE_FAIL' => 'לא הצלחתי לעדכן -',
  'UPDATE_NULL_VALUE' => 'הכמות היא NULL ותוגדר כ-0',
  'UPDATE_MERGE' => 'מזג מטבעות',
  'UPDATE_MERGE_TXT' => 'אחד מטבעות כפולות למטבע אחד. אם ישנן רשומות כפולות לאותו מטבע, תאחד אותם לאחד. האיחוד ישפיע על מטבעות במודולים אחרים.',
  'LBL_ACCOUNT_NAME' => 'שם חשבון:',
  'LBL_AMOUNT' => 'סכום:',
  'LBL_AMOUNT_USDOLLAR' => 'סכום ב USD:',
  'LBL_CURRENCY' => 'מטבע',
  'LBL_DATE_CLOSED' => 'תאריך סגירה צפוי:',
  'LBL_TYPE' => 'סוג:',
  'LBL_CAMPAIGN' => 'קמפיין:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'פרויקטים',  
  'LBL_NEXT_STEP' => 'שלב הבא',
  'LBL_LEAD_SOURCE' => 'מקור הליד:',
  'LBL_SALES_STAGE' => 'שלב במכירות:',
  'LBL_PROBABILITY' => 'הסתברות (%):',
  'LBL_DESCRIPTION' => 'תיאור:',
  'LBL_DUPLICATE' => 'ככל הנראה מכירה כפולה',
  'MSG_DUPLICATE' => 'המכירה שאתה עומד לעשות היא מכירה כפולה של מכירה שכבר קיימת. ישנה מכירה בשם זהה והיא רשומה מטה.<br>הקש על שמירה כדי לשמור המכירה או ביטול וחזרה למודול ללא שינויים.',
  'LBL_NEW_FORM_TITLE' => 'צור מכירה',
  'LNK_NEW_SALE' => 'צור מכירה',
  'LNK_SALE_LIST' => 'Sale',
  'ERR_DELETE_RECORD' => 'למחיקת המכירה הזו עליך לציין מספר רשומה.',
  'LBL_TOP_SALES' => 'המכיאות העליונות שלי',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'אתה בטוח שברצונך למחוק איש קשר זה ממכירה זו?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'אתה טוח שברצונך למחוק מכירה זו מהפרוייקט?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sale',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'פעילויות',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'היסטוריה',
    'LBL_RAW_AMOUNT'=>'סכום גלמי',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'משתמש:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'הוקצה למשתמש',
  'LBL_MY_CLOSED_SALES' => 'המכירות הסגורות שלי',
  'LBL_TOTAL_SALES' => 'סך-בכל מכירות',
  'LBL_CLOSED_WON_SALES' => 'מכירות שנסגרו בהצלחה',
  'LBL_ASSIGNED_TO_ID' =>'הוקצה עבור ID',
  'LBL_CREATED_ID'=>'נוצר על ידי זהות',
  'LBL_MODIFIED_ID'=>'שונה על ידי זהות',
  'LBL_MODIFIED_NAME'=>'שונה על ידי שם משתמש',
  'LBL_SALE_INFORMATION'=>'מידע כל המכירה',
  'LBL_CURRENCY_ID'=>'מטבע ID',
  'LBL_CURRENCY_NAME'=>'שם מטבע',
  'LBL_CURRENCY_SYMBOL'=>'סימול מטבע',
  'LBL_EDIT_BUTTON' => 'Edit',
   'LBL_REMOVE' => 'הסר',


);

