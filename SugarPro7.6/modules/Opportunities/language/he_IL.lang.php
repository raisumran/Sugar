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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'הזדמנויות',
    'LBL_MODULE_NAME_SINGULAR' => 'הזדמנות',
    'LBL_MODULE_TITLE' => 'הזדמנויות: דף הבית',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש הזדמנויות',
    'LBL_VIEW_FORM_TITLE' => 'צפייה בהזדמנות',
    'LBL_LIST_FORM_TITLE' => 'רשימת הזדמנויות',
    'LBL_OPPORTUNITY_NAME' => 'שם ההזדמנות:',
    'LBL_OPPORTUNITY' => 'הזדמנות:',
    'LBL_NAME' => 'שם ההזדמנות',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'מטבעות',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Name',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_DATE_CLOSED' => 'תאריך סגירה צפוי:',
    'LBL_LIST_AMOUNT' => 'סכום ההזדמנות',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'סך-הכל הצעת המחיר',
    'LBL_ACCOUNT_ID' => 'חשבון ID',
    'LBL_CURRENCY_RATE' => 'שער מטבע',
    'LBL_CURRENCY_ID' => 'מטבע ID',
    'LBL_CURRENCY_NAME' => 'שם מטבע',
    'LBL_CURRENCY_SYMBOL' => 'סימול מטבע',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Opportunity - עדכון מטבע',
    'UPDATE_DOLLARAMOUNTS' => 'עדכן שער חליפין לדולר',
    'UPDATE_VERIFY' => 'וודא שער חליפין',
    'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in opportunities are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
    'UPDATE_FIX' => 'שער חליפין קבוע',
    'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for opportunities based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
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
    'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_CURRENCY' => 'מטבע',
    'LBL_DATE_CLOSED' => 'תאריך סגירה צפוי:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'תאריך סיום מצופה',
    'LBL_TYPE' => 'סוג:',
    'LBL_CAMPAIGN' => 'קמפיין:',
    'LBL_NEXT_STEP' => 'שלב הבא',
    'LBL_LEAD_SOURCE' => 'מקור הליד',
    'LBL_SALES_STAGE' => 'שלב במכירות',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'הסתברות (%):',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DUPLICATE' => 'ככל הנראה הזדמנות כפולה',
    'MSG_DUPLICATE' => 'The opportunity record you are about to create might be a duplicate of a opportunity record that already exists. Opportunity records containing similar names are listed below.<br>Click Save to continue creating this new opportunity, or click Cancel to return to the module without creating the opportunity.',
    'LBL_NEW_FORM_TITLE' => 'צור הזדמנות',
    'LNK_NEW_OPPORTUNITY' => 'צור הזדמנות',
    'LNK_CREATE' => 'צור עסקה',
    'LNK_OPPORTUNITY_LIST' => 'צפה בהזדמנויות',
    'ERR_DELETE_RECORD' => 'יש לציין מספר רשומה על מנת למחוק את ההזדמנות.',
    'LBL_TOP_OPPORTUNITIES' => 'ההזדמנויות הבשלות שלי',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'האם אתה בטוח שברצונך להסיר איש קשר זה מההזדמנות?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'האם אתה בטוח שברצונך להסיר הזדמנות זו מהפרוייקט?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'הזדמנויות',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'היסטוריה',
    'LBL_RAW_AMOUNT' => 'סכום גלמי',
    'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'מסמכים',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'פרויקטים',
    'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'הוקצה למשתמש',
    'LBL_LIST_SALES_STAGE' => 'שלב במכירות',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'ההזדמנויות הסגורות שלי',
    'LBL_TOTAL_OPPORTUNITIES' => 'סך-בכל הזדמנויות',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'הזדמנויות שנסגרו בהרכשה',
    'LBL_ASSIGNED_TO_ID' => 'הוקצה למשתמש:',
    'LBL_CREATED_ID' => 'נוצר על ידי זהות',
    'LBL_MODIFIED_ID' => 'שונה על ידי זהות',
    'LBL_MODIFIED_NAME' => 'שונה על ידי שם משתמש',
    'LBL_CREATED_USER' => 'משתמש שנוצר',
    'LBL_MODIFIED_USER' => 'משתמש ששונה',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'קמפיינים',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'פרויקטים',
    'LABEL_PANEL_ASSIGNMENT' => 'מטלה',
    'LNK_IMPORT_OPPORTUNITIES' => 'ייבוא הזדמנויות',
    'LBL_EDITLAYOUT' => 'ערוך תצורה' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'קמפיין ID',
    'LBL_OPPORTUNITY_TYPE' => 'סוג הזדמנות',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'הוקצה למשתמש ששמו',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'הוקצה למשתמש ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'נוצר על ידי ID',
    'LBL_EXPORT_NAME' => 'Name',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'קשור לדואר אלקטרוני של איש קשר',
    'LBL_FILENAME' => 'Attachment',
    'LBL_PRIMARY_QUOTE_ID' => 'תהצעת מחיר ראשי',
    'LBL_CONTRACTS' => 'חוזים',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'חוזים',
    'LBL_PRODUCTS' => 'פרטי שורה מצוטטים',
    'LBL_RLI' => 'שורות פרטי הכנסה',
    'LNK_OPPORTUNITY_REPORTS' => 'צפייה בדוחות על הזדמנויות',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'הצעות מחיר',
    'LBL_TEAM_ID' => 'צוות זהות',
    'LBL_TIMEPERIODS' => 'משכי זמן',
    'LBL_TIMEPERIOD_ID' => 'תקופת זמן ID',
    'LBL_COMMITTED' => 'מחוייב',
    'LBL_FORECAST' => 'כלול בתחזית',
    'LBL_COMMIT_STAGE' => 'שלב חיוב',
    'LBL_WORKSHEET' => 'גיליון עבודה',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'הצעות מחיר',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'היררכיית הזדמנות',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'קבע את שדה תאריך סגירה מצופה של רשומות ההזדמנות כתאריכי סגירה מוקדמים או מאוחרים ביותר של שורות פרטי הרווח הקיימים',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'סך הכל לצינור מכירות',

    'LBL_OPPORTUNITY_ROLE'=>'תפקיד הזדמנות',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'בלחיצה על אישור, ימחקו כל נתוני התחזית וכל תצוגות ההזדמנויות ימחקו.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => ', אם כל שורות פרטי הרווח סגורים ולפחות אחד זכה',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'שלב ההזדמנות הוא "נסגר בנצחון"',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => ', אם כל שורות פרטי הרווח בשלב מכירה סגור בהפסד',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'שלב המכירה של ההזדמנות הוגדר כסגור ואבוד',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => ', אם יד שורות פרטי רווח פתוחות',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'ההזדמנות תסומן כשלב המכירה המתקדם מעט ביותר',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module allows you to track individual sales and the line items belonging to those sales from start to finish. Each {{module_name}} record represents a header for a group of {{revenuelineitems_module}} as well as relating to other important records such as {{quotes_module}}, {{contacts_module}}, etc. Each {{revenuelineitems_singular_module}} is the prospective sale of a particular product and includes relevant sale data. Each {{revenuelineitems_singular_module}} will typically progress through several Sales Stages until it is marked either "Closed Won" or "Closed Lost". The {{module_name}} record reflects the amount and expected close date of its {{revenuelineitems_module}}. {{plural_module_name}} and {{revenuelineitems_module}} can be leveraged even further by using Sugar&#39;s {{forecasts_singular_module}}ing module to understand and predict sales trends as well as focus work to achieve sales quotas.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'The {{plural_module_name}} module allows you to track individual sales and the line items belonging to those sales from start to finish. Each {{module_name}} record represents a header for a group of {{revenuelineitems_module}} as well as relating to other important records such as {{quotes_module}}, {{contacts_module}}, etc.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels, including {{revenuelineitems_module}}, by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'The {{plural_module_name}} module allows you to track individual sales and the line items belonging to those sales from start to finish. Each {{module_name}} record represents a header for a group of {{revenuelineitems_module}} as well as relating to other important records such as {{quotes_module}}, {{contacts_module}}, etc.

To create an {{module_name}}:
1. Provide values for the fields as desired.
 - Fields marked "Required" must be completed prior to saving.
 - Click "Show More" to expose additional fields if necessary.
2. Click "Save" to finalize the new record and return to the previous page.
 - Choose "Save and view" to open the new {{module_name}} in record view.
 - Choose "Save and create new" to immediately create another new {{module_name}}.
3. After saving, use the {{revenuelineitems_module}} subpanel to add line items to the {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'סנכרן עם Marketo®',
    'LBL_MKTO_ID' => 'Marketo® ליד ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '10 שורות פרטי רווח הטובים ביותר',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'מציג 10 שורות פרטי רווח הטובים ביותר בתרשים בועות',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'ההזדמנויות שלי',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "ההזדמנויות של הצוות שלי",
);
