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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'יש לספק מספר רשומה על מנת למחוק את הליד.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'תיאור החשבון',
    'LBL_ACCOUNT_ID'=>'חשבון ID',
    'LBL_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'פעילויות',
    'LBL_ADD_BUSINESSCARD' => 'הוסף כרטיס ביקור',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'עיר אלטרנטיבית',
    'LBL_ALT_ADDRESS_COUNTRY' => 'מחוז אלטרנטיבי',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'מיקוד אלטרנטיבי',
    'LBL_ALT_ADDRESS_STATE' => 'מדינה אלטרנטיבית',
    'LBL_ALT_ADDRESS_STREET_2' => 'רחוב אלטרנטיבי 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'רחוב אלטרנטיבי 3',
    'LBL_ALT_ADDRESS_STREET' => 'רחוב אלטרנטיבי',
    'LBL_ALTERNATE_ADDRESS' => 'כתובת אחרת:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'דואר אלקטרוני כלשהו:',
    'LBL_ANY_PHONE' => 'טלפון נוסף:',
    'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור',
    'LBL_ASSIGNED_TO_ID' => 'הוקצה למשתמש:',
    'LBL_BACKTOLEADS' => 'חזרה ללידים',
    'LBL_BUSINESSCARD' => 'המר ליד',
    'LBL_CITY' => 'עיר:',
    'LBL_CONTACT_ID' => 'איש קשר ID',
    'LBL_CONTACT_INFORMATION' => 'סקירת משימות',
    'LBL_CONTACT_NAME' => 'שם הליד:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'ליד-בזדמנות:',
    'LBL_CONTACT_ROLE' => 'תפקיד:',
    'LBL_CONTACT' => 'ליד:',
    'LBL_CONVERT_BUTTON_LABEL' => 'המר',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'שמור והמר',
    'LBL_CONVERT_PANEL_OPTIONAL' => 'אופציונאלי',
    'LBL_CONVERT_ACCESS_DENIED' => 'אין לך גישה לאפשרות עריכה של המודולים הדרושים להמרת ליד  {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'מחפש כפילויות',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'התעלם וצור חדש',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'חזרה לכפילויות',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Create New',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'חיפוש',
    'LBL_CONVERT_DUPLICATES_FOUND' => 'נמצאו {{duplicateCount}}  כפילויות',
    'LBL_CONVERT_CREATE_NEW' => '{{moduleName}} חדש',
    'LBL_CONVERT_ASSOCIATE_MODULE' => 'קשר  {{moduleName}}',
    'LBL_CONVERT_ASSOCIATED_MODULE' => '{{moduleName}} מקושר',
    'LBL_CONVERT_MODULE_ASSOCIATED' => '{{moduleName}} מקושר',
    'LBL_CONVERT_MODULE_ASSOCIATED_NEW_SUCCESS' => 'קישרת את ה-{{moduleNameLower}} {{recordName}} אבל הוא לא יווצר לפני שתסיים ותשמור.',
    'LBL_CONVERT_MODULE_ASSOCIATED_SUCCESS' => 'קישרת את ה-{{moduleNameLower}} {{recordName}} אבל הוא לא יקושר לפני שתסיים ותשמור.',
    'LBL_CONVERT_RESET_PANEL' => 'Reset',
    'LBL_CONVERTED_ACCOUNT'=>'המר חשבון:',
    'LBL_CONVERTED_CONTACT' => 'אנשי קשר שהומרו:',
    'LBL_CONVERTED_OPP'=>'הזדמנויות שהומרו:',
    'LBL_CONVERTED'=> 'הומר',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'המר ליד',
    'LBL_CONVERTLEAD' => 'המר ליד',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: This status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'איש קשר אפשרי:',
    'LBL_CONVERTLEAD_ERROR' => 'לא ניתן להמיר את הליד',
    'LBL_CONVERTLEAD_FILE_WARN' => 'המרת בהצלחה את הליד {{leadName}}, אך הייתה בעיה בטעינת קבצים מצורפים ברשומה אחת או יותר',
    'LBL_CONVERTLEAD_SUCCESS' => 'המרת בהצלחה את הליד {{leadName}}',
    'LBL_COUNTRY' => 'מדינה:',
    'LBL_CREATED_NEW' => 'נוצר חדש',
	'LBL_CREATED_ACCOUNT' => 'צור חשבון חדש',
    'LBL_CREATED_CALL' => 'תזמן שיחת טלפון חדשה',
    'LBL_CREATED_CONTACT' => 'צור איש קשר חדש',
    'LBL_CREATED_MEETING' => 'צור פגישה',
    'LBL_CREATED_OPPORTUNITY' => 'צור הזדמנות חדשה',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'לידים',
    'LBL_DEPARTMENT' => 'מחלקה:',
    'LBL_DESCRIPTION_INFORMATION' => 'תיאור המידע',
    'LBL_DESCRIPTION' => 'תיאור:',
    'LBL_DO_NOT_CALL' => 'נא לא להתקשר:',
    'LBL_DUPLICATE' => 'לידים דומים',
    'LBL_EMAIL_ADDRESS' => 'כתובת דואר אלקטרוני:',
    'LBL_EMAIL_OPT_OUT' => 'דואר Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'השתמש בחשבון קיים',
    'LBL_EXISTING_CONTACT' => 'השתמש באיש קשר קיים',
    'LBL_EXISTING_OPPORTUNITY' => 'השתמש בהזדמנות קיימת',
    'LBL_FAX_PHONE' => 'פקס:',
    'LBL_FIRST_NAME' => 'שם פרטי:',
    'LBL_FULL_NAME' => 'שם מלא:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'היסטוריה',
    'LBL_HOME_PHONE' => 'טלפון בבית:',
    'LBL_IMPORT_VCARD' => 'ייבוא מ vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'ליד מ-vCard נוצר בהצלחה',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'תיצר אוטומטית ליד חדש על ידי ייבוא vCard ממערכת הקבצים.',
    'LBL_INVALID_EMAIL'=>'דוא"ל לא תקין:',
    'LBL_INVITEE' => 'דוחות ישירים',
    'LBL_LAST_NAME' => 'שם משפחה:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'תיאור מקור הליד:',
    'LBL_LEAD_SOURCE' => 'מקור הליד:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'שם הליד',
    'LBL_LIST_CONTACT_ROLE' => 'תפקיד',
    'LBL_LIST_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_LIST_EMAIL_ADDRESS' => 'Any Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_VIEW_FORM_TITLE' => 'צפייה בליד',
    'LBL_LIST_FORM_TITLE' => 'רשימת לידים',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'תיאור מקור הליד',
    'LBL_LIST_LEAD_SOURCE' => 'מקור הליד',
    'LBL_LIST_MY_LEADS' => 'הלידים שלי',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'הופנה על ידי',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'כותרת',
    'LBL_MOBILE_PHONE' => 'נייד:',
    'LBL_MODULE_NAME' => 'לידים',
    'LBL_MODULE_NAME_SINGULAR' => 'ליד',
    'LBL_MODULE_TITLE' => 'לידים: דף ראשי',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'ליד חדש',
    'LBL_NEW_PORTAL_PASSWORD' => 'סיסמא חדשה לפורטל:',
    'LBL_OFFICE_PHONE' => 'טלפון במשרד:',
    'LBL_OPP_NAME' => 'שם ההזדמנות:',
    'LBL_OPPORTUNITY_AMOUNT' => 'ערך ההזדמנות:',
    'LBL_OPPORTUNITY_ID'=>'ID ההזדמנות',
    'LBL_OPPORTUNITY_NAME' => 'שם ההזדמנות:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'דואר אלקטרוני אחר:',
    'LBL_OTHER_PHONE' => 'טלפון אחר:',
    'LBL_PHONE' => 'טלפון:',
    'LBL_PORTAL_ACTIVE' => 'פעיל בפןרטל:',
    'LBL_PORTAL_APP'=> 'פורטל אפליקציות',
    'LBL_PORTAL_INFORMATION' => 'פורטל מידע',
    'LBL_PORTAL_NAME' => 'שם פורטל:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'סיסמא הפורטל שנקבעה:',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_STREET' => 'רחוב',
    'LBL_PRIMARY_ADDRESS_CITY' => 'עיר',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'מחוז',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'מיקוד',
    'LBL_PRIMARY_ADDRESS_STATE' => 'מדינה',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'רחוב 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'רחוב 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'רחוב',
    'LBL_PRIMARY_ADDRESS' => 'כתובת ראשית:',
    'LBL_RECORD_SAVED_SUCCESS' => 'יצרת בהצלחה את {{moduleSingularLower}} {{full_name}}.',
    'LBL_REFERED_BY' => 'הופנה על ידי:',
    'LBL_REPORTS_TO_ID'=>'מדווח אל זהות',
    'LBL_REPORTS_TO' => 'מדווח אל:',
    'LBL_REPORTS_FROM' => 'דוחות מאת:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED'=>'Modified By',
	'LBL_MODIFIED_ID'=>'שונה על ידי Id',
	'LBL_CREATED'=>'נוצר על ידי',
	'LBL_CREATED_ID'=>'נוצר על ידי Id',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש ליד',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'בחר בלידים שסומנו',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'בחר בלידים שסומנו',
    'LBL_STATE' => 'ארץ:',
    'LBL_STATUS_DESCRIPTION' => 'תיאור הסטאטוס:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'תואר:',
    'LBL_UNCONVERTED'=> 'לא מומר',
    'LNK_IMPORT_VCARD' => 'צור ליד מ - vCard',
    'LNK_LEAD_LIST' => 'צפייה בלידים',
    'LNK_NEW_ACCOUNT' => 'צור חשבון',
    'LNK_NEW_APPOINTMENT' => 'צור פגישה',
    'LNK_NEW_CONTACT' => 'צור איש קשר',
    'LNK_NEW_LEAD' => 'צור ליד',
    'LNK_NEW_NOTE' => 'צור פתק',
    'LNK_NEW_TASK' => 'צור משימה',
    'LNK_NEW_CASE' => 'צור אירוע',
    'LNK_NEW_CALL' => 'יומן שיחת טלפון',
    'LNK_NEW_MEETING' => 'תזמן פגישה',
    'LNK_NEW_OPPORTUNITY' => 'צור הזדמנות',
	'LNK_SELECT_ACCOUNTS' => '<b>או</b> בחר חשבון',
    'LNK_SELECT_CONTACTS' => '<b>או</b> בחר איש קשר',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'היתק כתובת משנית לכתובת ראשית',
    'NTC_COPY_PRIMARY_ADDRESS' => 'העתק כתובת ראשית לכתובת משנית',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'יצירת הזדמנות דורשת חשבון.\\n אנא צור חשבון חדש או בחר חשבון קיים.',
    'NTC_REMOVE_CONFIRMATION' => 'אתה בטוח שברצונך להסיר ליד זה מאירוע זה?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'אתה בטוח שברצונך להסיר רשומה זו מדוחות ישירים?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'יומן קמפיין',
    'LBL_TARGET_OF_CAMPAIGNS'=>'קמפיין מוצלח:',
    'LBL_TARGET_BUTTON_LABEL'=>'נקבעה מטרה',
    'LBL_TARGET_BUTTON_TITLE'=>'נקבעה מטרה',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'קמפיין:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'הוקצה למשתמש',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_PROSPECT' => 'מטרה',
    'LBL_CAMPAIGN_LEAD' => 'קמפיינים',
	'LNK_LEAD_REPORTS' => 'צפה בדוחות על לידים',
    'LBL_BIRTHDATE' => 'תאריך לידה:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'תודה לך על ההגשה.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'צר לי, השרת איננו זמין כרגע אנא נסה במועד מאוחר יותר.',
    'LBL_ASSISTANT_PHONE' => 'טלפון של העוזר',
    'LBL_ASSISTANT' => 'עוזר',
    'LBL_REGISTRATION' => 'רישום',
    'LBL_MESSAGE' => 'אנא הזן למטה את המידע. מידע או חשבון יווצרו לאחר אישור תלוי ועומד עבורך.',
    'LBL_SAVED' => 'תודה על ההרשמה. החשבון שלך יווצר ומשהו מטעמנו יור איתך קשר בהקדם האפשרי.',
    'LBL_CLICK_TO_RETURN' => 'חזור לפורטל',
    'LBL_CREATED_USER' => 'משתמש שנוצר',
    'LBL_MODIFIED_USER' => 'משתמש ששונה',
    'LBL_CAMPAIGNS' => 'קמפיינים',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'קמפיינים',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'חובה',
    'LBL_CONVERT_SELECT' => 'אפשר בחירה',
    'LBL_CONVERT_COPY' => 'העתק נתונים',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'הוסף מודול',
    'LBL_CONVERT_EDIT_LAYOUT' => 'ערוך תוכנית המרה',
    'LBL_CREATE' => 'Create',
    'LBL_SELECT' => '<b>או</b> בחר',
	'LBL_WEBSITE' => 'אתר אינטרנט',
	'LNK_IMPORT_LEADS' => 'ייבא לידים',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notice: The current Convert Lead screen contains custom fields. When you customize the Convert Lead screen in Studio for the first time, you will need to add custom fields to the layout, as necessary. The custom fields will not automatically appear in the layout, as they did previously.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'המודול ליצירת רשומה חדשה ב-',
	'LBL_REQUIRED_TIP' 	=> 'Required modules must be created or selected before the lead can be converted.',
	'LBL_COPY_TIP'		=> 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
	'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
	'LBL_EDIT_TIP'		=> 'Modify the convert layout for this module.',
	'LBL_DELETE_TIP'	=> 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE'   => 'העבר פעיליות עבור:',
    'LBL_ACTIVITIES_COPY'   => 'העתק פעיליות אל:',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Select the record to which to move the Lead&#39;s activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP'   => "Select the record(s) for which to create copies of the Lead&#39;s activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_PHONE_HOME' => 'טלפון בבית',
    'LBL_PHONE_MOBILE' => 'טלפון נייד',
    'LBL_PHONE_WORK' => 'טלפון בעבודה',
    'LBL_PHONE_OTHER' => 'טלפון אחר',
    'LBL_PHONE_FAX' => 'טלאפקס',
    'LBL_CAMPAIGN_ID' => 'קמפיין ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'הוקצה למשתמש ששמו',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'הוקצה למשתמש ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'נוצר על ידי ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'טלפון נייד',
    'LBL_EXPORT_EMAIL2'=>'כצתובת דואר אלקטרוני אחרת',
	'LBL_EDITLAYOUT' => 'ערוך תצורה' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'הכנס תאריך' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'טוען ...' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B Id עיקרי',
    'LBL_DNB_BAL_PREVIEW' => 'תצוגה מקדימה לידים',
    'LBL_DNB_BAL_RSLT_CNT' => 'לידים',
    'LBL_DNB_BAL_RSLT_HEADER' => 'D&B: פרטי יצירת קשר לליד',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'הזדמנויות',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',

    'LBL_HELP_CONVERT_TITLE' => 'המר {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module consists of individual prospects who may be interested in a product or service your organization provides. Once the {{module_name}} is qualified as a sales {{opportunities_singular_module}}, {{plural_module_name}} can be converted into {{contacts_module}}, {{opportunities_module}}, and {{accounts_module}}. There are various ways you can create {{plural_module_name}} in Sugar such as via the {{plural_module_name}} module, duplication, importing {{plural_module_name}}, etc. Once the {{module_name}} record is created, you can view and edit information pertaining to the {{module_name}} via the {{plural_module_name}} record view.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'The {{plural_module_name}} module consists of individual prospects who may be interested in a product or service your organization provides.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'The {{plural_module_name}} module consists of individual prospects who may be interested in a product or service your organization provides. Once the {{module_name}} is qualified as a sales {{opportunities_singular_module}}, it can be converted into a {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}}, or other record.

To create a {{module_name}}:
1. Provide values for the fields as desired.
 - Fields marked "Required" must be completed prior to saving.
 - Click "Show More" to expose additional fields if necessary.
2. Click "Save" to finalize the new record and return to the previous page.
 - Choose "Save and view" to open the new {{module_name}} in record view.
 - Choose "Save and create new" to immediately create another new {{module_name}}.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar enables you to convert {{plural_module_name}} into {{contacts_module}}, {{accounts_module}}, and other modules once the {{module_name}} meets your qualification criteria.

Step through each module by modifying fields then confirming the new record’s values by clicking each Associate button.

If Sugar detects an existing record that matches your {{module_name}}’s information, you have the option to choose a duplicate and confirm the selection with the Associate button or to click "Ignore and create new" and proceed normally.

After confirming each required and desired module, click the Save and Convert button at the top to finalize the conversion.',

    //Marketo
    'LBL_MKTO_SYNC' => 'סנכרן עם Marketo®',
    'LBL_MKTO_ID' => 'Marketo® ליד ID',
    'LBL_MKTO_LEAD_SCORE' => 'ציון ליד',

    'LBL_FILTER_LEADS_REPORTS' => 'דוחות לליד',
);
