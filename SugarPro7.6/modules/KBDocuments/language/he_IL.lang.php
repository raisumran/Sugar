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
	//module
	'LBL_MODULE_NAME' => 'מרכז מידע',
    'LBL_MODULE_NAME_SINGULAR' => 'מסמך KB',
	'LBL_MODULE_TITLE' => 'מאמר במרכז המידע',
	'LNK_NEW_ARTICLE' => 'צור מאמר',
	'LNK_KBDOCUMENT_LIST'=> 'צפה במסמכים',
	'LBL_DOC_REV_HEADER' => 'רויזיה למסמכים',
	'LBL_SEARCH_FORM_TITLE'=> 'חפש מסמכים',
	'LBL_SEND_EMAIL'  => 'שלח דואר',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'בחר',
	'LBL_EMBEDED_IMAGES' => 'תמונות משובצות:',
	'LBL_SHOW_MORE' => 'הצג מאמרים נוספים',
	'LBL_SHOW_ARTICLE_DETAILS' => 'הצג פרטים נוספים',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Hide Details',
	'LBL_TAGS' => 'תגיות:',
	'LBL_NOT_AN_ADMIN_USER' => 'אינך משתמש ברמת אדמין',
	'LBL_NOT_A_VALID_FILE' => 'קובץ לא חוקי',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'צור תגית חדשה',
    'LBL_NEW_TAG_NAME' => 'שם לתגת חדשה:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'מסמך Id',
	'LBL_ARTICLE_TITLE' => 'תואר:',
	'LBL_ARTICLE_AUTHOR' => 'Author:',
	'LBL_ARTICLE_APPROVED_BY' =>'מאשר:',
	'LBL_ARTICLE_BODY' => 'גוף המאמר:',
	'LBL_NAME' => 'שם מסמך',
	'LBL_DESCRIPTION' => 'Description',
	'LBL_CATEGORY' => 'קטגוריה',
	'LBL_SUBCATEGORY' => 'קטגוריית משנה',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'נוצר על ידי',
	'LBL_DATE_ENTERED'=> 'נוצר בתאריך',
	'LBL_DATE_MODIFIED'=> 'שונה בתאריך',
	'LBL_DELETED' => 'נמחק',
	'LBL_MODIFIED'=> 'שונה על ידי id',
	'LBL_MODIFIED_USER' => 'שונה על ידי',
	'LBL_CREATED'=> 'נוצר על ידי',
	'LBL_RELATED_DOCUMENT_ID'=>'מסמך מקושר Id',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'רויזיה למשמך מקושר Id',
	'LBL_IS_TEMPLATE'=>'מדובר בתבנית',
	'LBL_TEMPLATE_TYPE'=>'סוג מסמך',
    'LBL_PARENT_TYPE'=>'סוג הורה',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'סטאטוס איש קשר:',
    'LBL_LINKED_ID'=>'קישור ID',
    'LBL_VIEWS_NUMBER'=>'מספר צפיות',

	'LBL_REVISION_NAME' => 'רויזיה מספר',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDocument רויזיה מספר',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'רויזיה',
	'LBL_DOCUMENT' => 'מסמך מקושר',
	'LBL_LATEST_REVISION' => 'הרויזיה האחרונה Id',
    'LBL_LATEST_REVISION_NAME' => 'שם הרויזיה האחרונה',
    'LBL_SELECTED_REVISION_NAME' => 'שם רויזיה אחרונה שנבחרה',
    'LBL_SELECTED_REVISION_ID' => 'ID בדיקה מחדש שנבחרה',
    'LBL_SELECTED_REVISION_FILENAME' => 'שם קובץ של הבדיקה המחדש',
	'LBL_CHANGE_LOG'=> 'יומן שינויים',
	'LBL_ACTIVE_DATE'=> 'תאריך פרסום',
	'LBL_EXPIRATION_DATE' => 'תאריך תפוגה',
	'LBL_FILE_EXTENSION'  => 'סיומת קובץ',
    'LBL_KBDOC_APPROVER_NAME' => 'שם מאשר',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'מרכז מידע',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'מנהל מרכז הידע',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'נהל את מרכז הידע',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'לא מוגדר',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'תגיות:',
	'LBL_KBDOC_BODY' => 'Body:',
	'LBL_KBDOC_APPROVED_BY' =>'אושר על ידי:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_צרופה',
	'LBL_KBDOC_ATTS_TITLE' =>'הורד קבצים מצורפים:',
	'LBL_DOC_NAME' => 'שם מסמך',
	'LBL_FILENAME' => 'שם קובץ',
	'LBL_DOC_VERSION' => 'גירסה',
	'LBL_CATEGORY_VALUE' => 'קטגוריה:',
	'LBL_SUBCATEGORY_VALUE'=> 'קטגוריית משנה:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'רויזיה נוצרה על ידי:',
	'LBL_LAST_REV_DATE' => 'תאריך הרויזיה:',
	'LBL_DOWNNLOAD_FILE'=> 'צרופות:',
	'LBL_DET_RELATED_DOCUMENT'=>'מסמכים קשורים:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"רויזיות של מסמכים קשורים:",
	'LBL_DET_IS_TEMPLATE'=>'תבנית:',
	'LBL_DET_TEMPLATE_TYPE'=>'סוג מסמך:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'מאמר חיצוני? :',
	'LBL_SHOW_TAGS' => 'הצג תגיות נוספות',
    'LBL_HIDE_TAGS' => 'הסתר תגיות',
	'LBL_TEAM'=> 'צוות:',
	'LBL_DOC_DESCRIPTION'=>'תיאור:',
	'LBL_KBDOC_SUBJECT' =>'Subject:',
	'LBL_DOC_ACTIVE_DATE'=> 'פורסם בתאריך:',
	'LBL_DOC_EXP_DATE'=> 'תאריך תפוגה:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'צפייה במאמרים',
	'LBL_LIST_FORM_TITLE' => 'רשימת מסמכים',
	'LBL_LIST_DOCUMENT' => 'מסמך',
	'LBL_LIST_CATEGORY' => 'קטגוריה',
	'LBL_LIST_SUBCATEGORY' => 'קטגוריית משנה',
	'LBL_LIST_REVISION' => 'רויזיה',
	'LBL_LIST_LAST_REV_CREATOR' => 'פורסם על ידי',
	'LBL_LIST_LAST_REV_DATE' => 'תאריך הרויזיה',
	'LBL_LIST_VIEW_DOCUMENT'=>'צפה',
    'LBL_LIST_DOWNLOAD'=> 'הורד',
	'LBL_LIST_ACTIVE_DATE' => 'תאריך פרסום',
	'LBL_LIST_EXP_DATE' => 'תאריך תפוגה',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'מחבר:',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'המאמרים בניצפים ביותר',
	'LBL_LIST_MOST_RECENT' => 'המאמרים האחרונים',
    'LBL_LIST_APPROVED_BY' => 'אושר על ידי:',
	//document search form.
	'LBL_SF_DOCUMENT' => 'שם מסמך',
	'LBL_SF_CATEGORY' => 'קטגוריה:',
	'LBL_SF_SUBCATEGORY'=> 'קטגוריית משנה:',
	'LBL_SF_ACTIVE_DATE' => 'פורסם בתאריך:',
	'LBL_SF_EXP_DATE'=> 'תאריך תפוגה:',

	'DEF_CREATE_LOG' => 'המסמך נוצר',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'חיפוש',
    'LBL_TAB_BROWSE' => 'דפדף',
    'LBL_TAB_ADVANCED' => 'Advanced Search',
    'LBL_MENU_FTS' => 'חיפוש לפי מלל מלא',
    'LBL_FTS_EMPTY_STRING' =>  'לא ניתן לחפש מלל מלא על משפט ריק',
    'LBL_SEARCH_WITHIN' => 'חפש בתוך:',      
    'LBL_CONTAINING_THESE_WORDS' => 'מכיל מילים אלה:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'אינו מכיל מילים אלה:',  
    'LBL_UNDER_THIS_TAG' => 'משתמש בתגיות אלה:',
    'LBL_PUBLISHED' => 'פורסם:',
    'LBL_EXPIRES' => 'פג תוקף:',
    'LBL_TIMES_VIEWED' => 'תדירות צפיות:',    
    'LBL_ATTACHMENTS' => 'צרופות:',
    'LBL_SAVE_SEARCH_AS' => 'שמור חיפוס זה בשם:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'ישמרו ההגדרות שהיזנת כחיפוס בבסיס בידע.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'חיפושים שמורים קודמים:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'ערוך או מחק חיפוש שמור קודם.',
    'LBL_UPDATE' => 'עדכן',
    'LBL_DELETE' => 'Delete',
    'LBL_SHOW_OPTIONS' => 'אפשרויות נוספות',
    'LBL_AND' => 'וגם',
    'LBL_SEARCH' => 'חיפוש',
    'LBL_CLEAR' => 'Clear',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'שם מאשר',
    'LBL_LIST_VIEWING_FREQUENCY' => 'תדירות',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'צפייה מקודמת איננה אפשרית, המסמך שמבוקש לא נמצא.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'צפייה מוקדמת לא פאשרית, המסמך נמצא אבל ,ככל הנראה, הוא ללא מידע.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'מאמר ללא תגיות',
    'LBL_TOP_TEN_LIST_TITLE' => 'עשרת המאמרים הנצפים ביותר',
    'LBL_SHOW_SYNTAX_HELP' => 'עזרה בתחביר',
    'LBL_MISMATCH_QUOTES_ERR' => 'השאילתא שלך לא תעבוד כפי הוזנה.  עליך לסגור בגרשיים כל משפט שנפתח בגרשיים.  אם ברצונך לחפש מחרוזת במוצבת בין גרשיים, סיים את במחרוזת ב (\\")', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B>עזרה בחיבור שאילתות:</b><P><br />        <ol><br /><li>הסימן פלוס (+) מצביע על כך שהתוצאה חייבת לכלול מונח זה.</li><br /><li>הסימן מינוס (-) מצביע על כך שהתוצאה לא תכיל את המונח.  הסימן מינוס (-) איננו נדרש אם החיפוש איננו מעוניין להכיל את ההמחרוזת המבוקשת.</li><br /><li>מספר מילים בתוך גרשיים ("דוגמא דוגמא2") יטופלו למחרוזת בודדת. כדי שהחיפוש יופעל הוא חייב להכיל גרשיים פותחות וגרשיים סוגרות.<br>כדי לחפש מחרוזת שמכילה סוגריים השתמש ב  (\\") במקום גרשיים.</li><br /><li>גרש (&#39;) יבצע חיפוש כפי שהוא ולא יחפש מחרוזת.</li></ol><br /><br />        </p><br /><br />        <p><b>דוגמא: </b><br><br><br />        לחפש בכל המסמכים המכילים את המילה "שוגר" או  "מערכת שמכילים את המילה "בסיס הידע" וגם  "נחמד," אך אינם מכילים את המילה "דמו" או "בעבר," זן את המחרוזת הבאה:<br>&nbsp;&nbsp;&nbsp;&nbsp;שוגר מערכת +"בסיס הידע" +נחמד -דוגמא -"בעבר"</p><br><br /><br />        <p><b>Notes: </b><br><br /><ol><li>אדיש לאותיות גדולות.</li><br /><li>רווחים או פסיקים מקובלים כמסימי משפט.</li><br /><li>אל תכניס רווח בין הסימנים פלוס (+) או מינוס (-) והמילים הצמודות להן.</li></ol><br /></p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'תגית בן',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'תגיות בן',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'מאמר',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'מאמרים',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'תגית זו מכילה',
    
	//error messages
	'ERR_DOC_NAME'=>'שם מסמך',
	'ERR_DOC_ACTIVE_DATE'=>'תאריך פרסום',
	'ERR_DOC_EXP_DATE'=> 'תאריך תפוגה',
	'ERR_FILENAME'=> 'שם קובץ',
	'ERR_DOC_VERSION'=> 'מסמך בגרסה',
	'ERR_DELETE_CONFIRM'=> 'אתה רוצה למחוק רויזיה של המסמך?',
	'ERR_DELETE_LATEST_VERSION'=> 'אינך מוסמך למחוק את הרויזיה האחרונה של המסמך.',
	'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'תבנית מיזוג דואר:',
	'ERR_FILESIZE' => 'הקובץ גדול מדי. גודל מקסימלי הוא:',

	'LBL_TREE_TITLE' => 'מסמכים',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'שם מסמך',
	'LBL_CONTRACT_NAME'=>'שם איש קשר:',
	'LBL_LIST_IS_TEMPLATE'=>'תבנית?',
	'LBL_LIST_TEMPLATE_TYPE'=>'סוג מסמך',
	'LBL_LIST_SELECTED_REVISION'=>'רויזיה שנבחרה',
	'LBL_LIST_LATEST_REVISION'=>'הרויזיה האחרונה',
	'LBL_CASES_SUBPANEL_TITLE'=>'אירועים קשורים',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Rדברי דואר קשורים',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'חוזים קשורים',
	'LBL_LAST_REV_CREATE_DATE'=>'תאריך יצירת הרויזיה האחרונה',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'מילות מפתח:',
    'LBL_CASES' =>'אירועים',
    'LBL_CASE_ID' => 'פניית שירות ID',
    'LBL_CASE'    => 'פניית שירות',
    'LBL_EMAILS' =>'דואר אלקטרוני',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'בחר פעולה מהרשימה הנגללת',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'בחר תגית אב מהעץ',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'בחר תגית או תגיות למחיקה מהעץ',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'בחר תגית מהעץ לשם שינוי שמה',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'תגיות כבר קיימות',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'הזן את שם התגית החדשה',
    'LBL_SAVING_THE_TAG' => 'שומר את התגית...',
    'LBL_CREATING_NEW_TAG' => 'יוצר תגית חדשה...',
    'LBL_TAGS_ROOT_LABEL' => 'תגיות',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'תגיות שאלות ותשובות לא ניתנות לשינוי שם',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'ראשית בחר מאמרים',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'בחר מאמרים שהתגיות האלה יתיחסו אליהם',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'ראשית בחר מאמרים',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'בחר תגית מעץ',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'בחר תגית מעץ',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'מזיז מאמרים לתגיות...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'מיישם תגיות על מאמרים ...',
    'LBL_ROOT_TAG_MESSAGE' => 'תגיות השורש לא ניתנות לבחירה או שיוך למאמרים',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'לא ניתן להסיר תגיות שורש',
    'LBL_TYPE_NEW_NODE_NAME'=>'הזן בבקשה שם תגית',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'תגית המקור והמטרה זיהות',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'מחק תגית',
    'LBL_SELECT_TAG'  => 'בחר תגית',
    'LBL_APPLY_TAG'  =>  'הפעל תגית',
    'LBL_MOVE'  =>   'הזז',
    'LBL_LAUNCHING_TAG_BROWSING' => 'מפעיל דפדוף בתגיות ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'אירעה שגיאה בטיפול הבקשה לתגיות.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'שגיאה: לא אלמנט לפלט של קובץ',
    'LBL_CREATE_NEW_TAG'  => 'צור תגית חדשה',
    'LBL_SEARCH_TAG'  => 'חיפוש',
    'LBL_TAG_NAME'  =>'שם תגית:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'בחר תגית למחיקה',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'הזן שם תגית לחיפושה',
    'LBL_KB_NOTIFICATION' => 'המסמך פורסם',
    'LBL_KB_PUBLISHED_REQUEST' => 'היקצה מסמך עבורך לאישור או לפרסום.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'סטאטוס מסמך שונה חזרה לטיוטה',  
    'LBL_CONTRACTS' => 'חוזים',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'בחר תגית אב מהעץ',
	'LBL_CLICK_APPLY_TAG' => 'קליק להפעלת התג',	
	'LBL_HEAD_TAGS' => 'תגיות',
	'LBL_REMOVE' => 'הסר' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'פניית שירות',
    'LBL_SELECT_NODE' => 'אנא בחר צומת',
    'LBL_ARTICLE_EXISTS' => 'המאמר כבר קיים',


);
?>
