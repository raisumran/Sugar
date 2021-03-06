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
	'LBL_MODULE_NAME' => 'База знань',
    'LBL_MODULE_NAME_SINGULAR' => 'Документ бази знань',
	'LBL_MODULE_TITLE' => 'Стаття бази знань',
	'LNK_NEW_ARTICLE' => 'Створити статтю',
	'LNK_KBDOCUMENT_LIST'=> 'Переглянути документи',
	'LBL_DOC_REV_HEADER' => 'Редакції документа',
	'LBL_SEARCH_FORM_TITLE'=> 'Пошук документів',
	'LBL_SEND_EMAIL'  => 'Надіслати Email-повідомлення',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Вибрати',
	'LBL_EMBEDED_IMAGES' => 'Вбудовані зображення',
	'LBL_SHOW_MORE' => 'Показати більше статтей',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Показати детальніше',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Приховати деталі',
	'LBL_TAGS' => 'Теги:',
	'LBL_NOT_AN_ADMIN_USER' => 'Не є користувачем з правами адміністратора',
	'LBL_NOT_A_VALID_FILE' => 'Не є припустимим файлом',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Створити новий тег',
    'LBL_NEW_TAG_NAME' => 'Нова назва тегу:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Документ (Id)',
	'LBL_ARTICLE_TITLE' => 'Посада:',
	'LBL_ARTICLE_AUTHOR' => 'Автор:',
	'LBL_ARTICLE_APPROVED_BY' =>'Затверджувач:',
	'LBL_ARTICLE_BODY' => 'Тіло статті:',
	'LBL_NAME' => 'Назва документа:',
	'LBL_DESCRIPTION' => 'Опис',
	'LBL_CATEGORY' => 'Категорія',
	'LBL_SUBCATEGORY' => 'Підкатегорія',
	'LBL_STATUS' => 'Статус',
	'LBL_CREATED_BY'=> 'Створено',
	'LBL_DATE_ENTERED'=> 'Дата створення',
	'LBL_DATE_MODIFIED'=> 'Дата змінення',
	'LBL_DELETED' => 'Видалено',
	'LBL_MODIFIED'=> 'Змінено (id)',
	'LBL_MODIFIED_USER' => 'Змінено',
	'LBL_CREATED'=> 'Створено',
	'LBL_RELATED_DOCUMENT_ID'=>'Id пов&#39;язаного документа',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Пов&#39;язана редакція документа (ID)',
	'LBL_IS_TEMPLATE'=>'Є шаблоном',
	'LBL_TEMPLATE_TYPE'=>'Тип документа',
    'LBL_PARENT_TYPE'=>'Тип батьківського запису',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Статус контракта',
    'LBL_LINKED_ID'=>'Пов&#39;язаний документ (id)',
    'LBL_VIEWS_NUMBER'=>'Кількість переглядів',

	'LBL_REVISION_NAME' => 'Номер редакції',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Номер редакції документа Бази знань',
	'LBL_MIME' => 'Тип Mime',
	'LBL_REVISION' => 'Редакція',
	'LBL_DOCUMENT' => 'Пов&#39;язаний документ',
	'LBL_LATEST_REVISION' => 'Остання редакція (Id)',
    'LBL_LATEST_REVISION_NAME' => 'Назва останньої редакції',
    'LBL_SELECTED_REVISION_NAME' => 'Обрана назва редакції',
    'LBL_SELECTED_REVISION_ID' => 'Обрана редакція (Id)',
    'LBL_SELECTED_REVISION_FILENAME' => 'Назва файлу обраної редації',
	'LBL_CHANGE_LOG'=> 'Журнал змін',
	'LBL_ACTIVE_DATE'=> 'Дата публікації',
	'LBL_EXPIRATION_DATE' => 'Дата закінчення строку',
	'LBL_FILE_EXTENSION'  => 'Розширення файлу',
    'LBL_KBDOC_APPROVER_NAME' => 'Ім&#39;я затверджувача',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'База знань',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Адміністратор Бази знань',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Адміністрування Бази знань',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Не вказано',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Теги:',
	'LBL_KBDOC_BODY' => 'Текст:',
	'LBL_KBDOC_APPROVED_BY' =>'Затверджено:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attahment',
	'LBL_KBDOC_ATTS_TITLE' =>'Завантажити вкладення:',
	'LBL_DOC_NAME' => 'Назва документа:',
	'LBL_FILENAME' => 'Назва файлу:',
	'LBL_DOC_VERSION' => 'Редакція:',
	'LBL_CATEGORY_VALUE' => 'Категорія:',
	'LBL_SUBCATEGORY_VALUE'=> 'Підкатегорія:',
	'LBL_DOC_STATUS'=> 'Статус:',
	'LBL_LAST_REV_CREATOR' => 'Редакція створена:',
	'LBL_LAST_REV_DATE' => 'Дата редакції:',
	'LBL_DOWNNLOAD_FILE'=> 'Вкладення:',
	'LBL_DET_RELATED_DOCUMENT'=>'Пов&#39;язаний документ:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Редакція пов&#39;язаного документа:",
	'LBL_DET_IS_TEMPLATE'=>'Шаблон? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Тип документа:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Публічна стаття? :',
	'LBL_SHOW_TAGS' => 'Показати більше тегів',
    'LBL_HIDE_TAGS' => 'Приховати теги',
	'LBL_TEAM'=> 'Команда:',
	'LBL_DOC_DESCRIPTION'=>'Опис:',
	'LBL_KBDOC_SUBJECT' =>'Тема:',
	'LBL_DOC_ACTIVE_DATE'=> 'Дата публікації:',
	'LBL_DOC_EXP_DATE'=> 'Дата закінчення строку:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Переглянути статті',
	'LBL_LIST_FORM_TITLE' => 'Список документів',
	'LBL_LIST_DOCUMENT' => 'Документ',
	'LBL_LIST_CATEGORY' => 'Категорія',
	'LBL_LIST_SUBCATEGORY' => 'Підкатегорія',
	'LBL_LIST_REVISION' => 'Редакція',
	'LBL_LIST_LAST_REV_CREATOR' => 'Опубліковано',
	'LBL_LIST_LAST_REV_DATE' => 'Дата редакції',
	'LBL_LIST_VIEW_DOCUMENT'=>'Переглянути',
    'LBL_LIST_DOWNLOAD'=> 'Завантажити',
	'LBL_LIST_ACTIVE_DATE' => 'Дата публікації',
	'LBL_LIST_EXP_DATE' => 'Дата закінчення строку',
	'LBL_LIST_STATUS'=>'Статус',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Автор',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Найпопулярніші статті',
	'LBL_LIST_MOST_RECENT' => 'Останні статті',
    'LBL_LIST_APPROVED_BY' => 'Затверджено',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Назва документа:',
	'LBL_SF_CATEGORY' => 'Категорія:',
	'LBL_SF_SUBCATEGORY'=> 'Підкатегорія:',
	'LBL_SF_ACTIVE_DATE' => 'Дата публікації:',
	'LBL_SF_EXP_DATE'=> 'Дата закінчення строку:',

	'DEF_CREATE_LOG' => 'Створено документ',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Пошук',
    'LBL_TAB_BROWSE' => 'Огляд',
    'LBL_TAB_ADVANCED' => 'Розширений пошук',
    'LBL_MENU_FTS' => 'Повнотекстовий пошук',
    'LBL_FTS_EMPTY_STRING' =>  'Неможливо провести повнотекстової пошук з порожнього рядка',
    'LBL_SEARCH_WITHIN' => 'Пошук в межах:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Містять ці слова:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Без урахування цих слів:',  
    'LBL_UNDER_THIS_TAG' => 'Використовуючи цей тег:',
    'LBL_PUBLISHED' => 'Опубліковано:',
    'LBL_EXPIRES' => 'Термін дії:',
    'LBL_TIMES_VIEWED' => 'Частота перегляду:',    
    'LBL_ATTACHMENTS' => 'Вкладення:',
    'LBL_SAVE_SEARCH_AS' => 'Зберегти пошук як:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Ця дія збереже вибрані елементи як збережений фільтр пошуку для бази знань.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Попередні збережені пошуки',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Редагувати або Видалити існуючий збережений пошук.',
    'LBL_UPDATE' => 'Оновлення',
    'LBL_DELETE' => 'Видалити',
    'LBL_SHOW_OPTIONS' => 'Додаткові параметри',
    'LBL_AND' => 'та',
    'LBL_SEARCH' => 'Пошук',
    'LBL_CLEAR' => 'Очистити',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Ім&#39;я затверджувача',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Частота',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Попередній перегляд недоступний, запис документа не був знайдений.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Перегляд неможливий, документ не знайдений.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Статті без тегів',
    'LBL_TOP_TEN_LIST_TITLE' => 'Топ 10 найбільш популярних статтей',
    'LBL_SHOW_SYNTAX_HELP' => 'Синтаксис. Довідка.',
    'LBL_MISMATCH_QUOTES_ERR' => 'Введений запит не спрацює. Після кожної відкритої подвійної лапки повинна бути парна їй лапка. Для пошуку рядка з подвійною лапками, необхідно екранувати використовуючи (\\ ").', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        'Допомога по синтаксису запитів: <br/> <br/> 1. Знак плюса (+) означає, що в результати "повинні" містити цю фразу. <br/> 2. Знак мінуса (-) означає, що результати "не повинні" містити цю фразу. Якщо ви використовує сусіднє поле для виключення слів із запиту, знак мінуса використовувати не обов&#39;язково. <br/> 3. Кілька слів, укладені в лапки ("Приклад1 Приклад2") отримують значення єдиного пошукового запиту. Об&#39;єднання в лапки з обох сторін обов&#39;язково, інакше запит не буде виконаний. Якщо використовувати лапки в якості  пошукового запиту, використовуйте разом з ними знак зворотного слеша (\\ "). <br/> 4. У разі використання знака одиночній лапки (&#39;) пошук буде проводитися як є, без угруповання слів. <br/> < br/> Приклад: <br/> <br/> Запит на пошук всіх статей, що містять слова "Sugar" або "CRM", а так само "Knowledge Base" і "крута", але не містять слова "демо" і " минулий час ", має виглядати так: Sugar CRM +" Knowledge Base "+ крута -демо -" минулий час "<br/> <br/> Примітки: <br/> <br/> 1. Регістр значення не має. < br/> 2. І пробіли і коми є прийнятними роздільниками. <br/> 3. Не ставте пробіл між знаками плюса (+) і мінуса (-) і словом, до якого вони належать.',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Дочірній тег',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Дочірні теги',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Стаття',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Статті',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Цей тег містить',
    
	//error messages
	'ERR_DOC_NAME'=>'Назва документа',
	'ERR_DOC_ACTIVE_DATE'=>'Дата публікації',
	'ERR_DOC_EXP_DATE'=> 'Дата закінчення строку',
	'ERR_FILENAME'=> 'Назва файлу',
	'ERR_DOC_VERSION'=> 'Версія документа',
	'ERR_DELETE_CONFIRM'=> 'Ви бажаєте видалити цю редакцію документа?',
	'ERR_DELETE_LATEST_VERSION'=> 'Ви не можете видалити останню редакцію документа.',
	'LNK_NEW_MAIL_MERGE' => 'Злиття пошти',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Шаблон злиття пошти:',
	'ERR_FILESIZE' => 'Файл занадто великий. Максимальний розмір файлу:',

	'LBL_TREE_TITLE' => 'Документи',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Назва документа',
	'LBL_CONTRACT_NAME'=>'Назва контракту:',
	'LBL_LIST_IS_TEMPLATE'=>'Шаблон?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Тип документа',
	'LBL_LIST_SELECTED_REVISION'=>'Обрана редакція',
	'LBL_LIST_LATEST_REVISION'=>'Остання редакція',
	'LBL_CASES_SUBPANEL_TITLE'=>'Пов&#39;язані звернення',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Пов&#39;язані Email-повідомлення',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Пов&#39;язані контракти',
	'LBL_LAST_REV_CREATE_DATE'=>'Дата створення останньої редакції',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Ключові слова:',
    'LBL_CASES' =>'Звернення',
    'LBL_CASE_ID' => 'Звернення (ID)',
    'LBL_CASE'    => 'Звернення:',
    'LBL_EMAILS' =>'Emails',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Виберіть дію зі спадаючого списку',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Виберіть батьківську мітку з дерева',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Виберіть мітку (-і) для видалення з дерева',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Виберіть мітку (-і) для видалення з дерева',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Тег вже існує',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Введіть нову назву тегу',
    'LBL_SAVING_THE_TAG' => 'Збереження тегу...',
    'LBL_CREATING_NEW_TAG' => 'Створення нового тегу...',
    'LBL_TAGS_ROOT_LABEL' => 'Теги',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Мітка Питань, що часто задаються, не може бути перейменована',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Спочатку виберіть статті',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Виберіть статті для застосування міток',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Спочатку виберіть статті',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Виберіть мітку з дерева',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Виберіть мітки з дерева',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Переміщення статей в мітку ...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Застосування міток до статей ...',
    'LBL_ROOT_TAG_MESSAGE' => 'Батьківська мітка не може бути обрана / приєднана до статті',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Основний тег не може бути перейменований',
    'LBL_TYPE_NEW_NODE_NAME'=>'Будь ласка, введіть назву тегу',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Теги джерела та теги цільової аудиторії споживачів однакові',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Видалити тег',
    'LBL_SELECT_TAG'  => 'Обрати тег',
    'LBL_APPLY_TAG'  =>  'Застосувати тег',
    'LBL_MOVE'  =>   'Перемістити',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Запуск перегляду міток ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Сталася помилка при обробці цього запиту для міток.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Помилка: Чи не є вхідним елементом файлу',
    'LBL_CREATE_NEW_TAG'  => 'Створити новий тег',
    'LBL_SEARCH_TAG'  => 'Пошук',
    'LBL_TAG_NAME'  =>'Назва тегу:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Обрати теги для видалення',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Введіть назву тега для пошуку',
    'LBL_KB_NOTIFICATION' => 'Документ був опублікований',
    'LBL_KB_PUBLISHED_REQUEST' => 'призначив Вам документ для затвердження та публікації.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Статус документа знову змінений встановлений як чернетку',  
    'LBL_CONTRACTS' => 'Контракти',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Виберіть батьківську мітку, з дерева',
	'LBL_CLICK_APPLY_TAG' => 'Натисніть кнопку Застосувати тег',	
	'LBL_HEAD_TAGS' => 'Теги',
	'LBL_REMOVE' => 'Видалити' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Редагувати' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Текст посилання за замовчуванням',
    'LBL_SELECT_NODE' => 'Будь ласка, виберіть вузол',
    'LBL_ARTICLE_EXISTS' => 'Стаття вже існує',


);
?>
