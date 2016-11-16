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
	'LBL_MODULE_NAME' => 'База знаний',
    'LBL_MODULE_NAME_SINGULAR' => 'Документ базы знаний',
	'LBL_MODULE_TITLE' => 'База знаний: статья',
	'LNK_NEW_ARTICLE' => 'Создать статью',
	'LNK_KBDOCUMENT_LIST'=> 'Обзор документов',
	'LBL_DOC_REV_HEADER' => 'Ревизии документов',
	'LBL_SEARCH_FORM_TITLE'=> 'Найти документ',
	'LBL_SEND_EMAIL'  => 'Отослать по электронной почте',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Выбрать',
	'LBL_EMBEDED_IMAGES' => 'Вложенные изображения:',
	'LBL_SHOW_MORE' => 'Показать больше статей',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Подробнее',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Скрыть подробности',
	'LBL_TAGS' => 'Теги:',
	'LBL_NOT_AN_ADMIN_USER' => 'Не является администратором',
	'LBL_NOT_A_VALID_FILE' => 'Недействительный файл',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Создать новую метку',
    'LBL_NEW_TAG_NAME' => 'Название нового тега',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Id документа',
	'LBL_ARTICLE_TITLE' => 'Должность',
	'LBL_ARTICLE_AUTHOR' => 'Автор:',
	'LBL_ARTICLE_APPROVED_BY' =>'Проверил:',
	'LBL_ARTICLE_BODY' => 'Текст статьи:',
	'LBL_NAME' => 'Название документа:',
	'LBL_DESCRIPTION' => 'Описание',
	'LBL_CATEGORY' => 'Категория',
	'LBL_SUBCATEGORY' => 'Подкатегория',
	'LBL_STATUS' => 'Статус',
	'LBL_CREATED_BY'=> 'Создано',
	'LBL_DATE_ENTERED'=> 'Дата создания',
	'LBL_DATE_MODIFIED'=> 'Дата изменения',
	'LBL_DELETED' => 'Удалено',
	'LBL_MODIFIED'=> 'Изменено (ID)',
	'LBL_MODIFIED_USER' => 'Изменено',
	'LBL_CREATED'=> 'Создано',
	'LBL_RELATED_DOCUMENT_ID'=>'ID связанного документа',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Ревизия связанного документа',
	'LBL_IS_TEMPLATE'=>'Является шаблоном',
	'LBL_TEMPLATE_TYPE'=>'Тип документа',
    'LBL_PARENT_TYPE'=>'Тип изначальной записи',
	'LBL_NUMBER'    =>  'Номер',
    'LBL_TEXT_BODY' =>  'Текст',
    'LBL_CREATED_BY_NAME' => 'Создано (Имя)',
    'LBL_TAG_ID' => 'Код тега',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Статус контракта',
    'LBL_LINKED_ID'=>'Связанный Id',
    'LBL_VIEWS_NUMBER'=>'Количество просмотров',

	'LBL_REVISION_NAME' => 'Номер ревизии',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Номер ревизии документа базы знаний',
	'LBL_MIME' => 'Тип MIME',
	'LBL_REVISION' => 'Ревизия',
	'LBL_DOCUMENT' => 'Связанный документ',
	'LBL_LATEST_REVISION' => 'Последняя ревизия',
    'LBL_LATEST_REVISION_NAME' => 'Название последней ревизии',
    'LBL_SELECTED_REVISION_NAME' => 'Название выбранной ревизии',
    'LBL_SELECTED_REVISION_ID' => 'Id последнего исправления',
    'LBL_SELECTED_REVISION_FILENAME' => 'Имя файла последнего исправления',
	'LBL_CHANGE_LOG'=> 'История изменений',
	'LBL_ACTIVE_DATE'=> 'Дата публикации',
	'LBL_EXPIRATION_DATE' => 'Срок действия',
	'LBL_FILE_EXTENSION'  => 'Расширение файла',
    'LBL_KBDOC_APPROVER_NAME' => 'Утверждено',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'База знаний',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Администратор базы знаний',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Администрирование базы знаний',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Неопределенный',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Теги:',
	'LBL_KBDOC_BODY' => 'Текст сообщеия:',
	'LBL_KBDOC_APPROVED_BY' =>'Утверждено:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attahment',
	'LBL_KBDOC_ATTS_TITLE' =>'Загрузить вложения:',
	'LBL_DOC_NAME' => 'Название документа:',
	'LBL_FILENAME' => 'Имя файла:',
	'LBL_DOC_VERSION' => 'Версия:',
	'LBL_CATEGORY_VALUE' => 'Категория:',
	'LBL_SUBCATEGORY_VALUE'=> 'Подкатегория:',
	'LBL_DOC_STATUS'=> 'Статус:',
	'LBL_LAST_REV_CREATOR' => 'Ревизия создана:',
	'LBL_LAST_REV_DATE' => 'Ревизия от:',
	'LBL_DOWNNLOAD_FILE'=> 'Вложения:',
	'LBL_DET_RELATED_DOCUMENT'=>'Связанный документ:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Ревизия связанного документа:",
	'LBL_DET_IS_TEMPLATE'=>'Шаблон? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Тип документа:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Публичная статья? :',
	'LBL_SHOW_TAGS' => 'Показать все теги',
    'LBL_HIDE_TAGS' => 'Скрыть теги',
	'LBL_TEAM'=> 'Команда',
	'LBL_DOC_DESCRIPTION'=>'Описание:',
	'LBL_KBDOC_SUBJECT' =>'Тема:',
	'LBL_DOC_ACTIVE_DATE'=> 'Дата публикации:',
	'LBL_DOC_EXP_DATE'=> 'Срок действия:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Обзор статей',
	'LBL_LIST_FORM_TITLE' => 'Список документов',
	'LBL_LIST_DOCUMENT' => 'Документ',
	'LBL_LIST_CATEGORY' => 'Категория',
	'LBL_LIST_SUBCATEGORY' => 'Подкатегория',
	'LBL_LIST_REVISION' => 'Ревизия',
	'LBL_LIST_LAST_REV_CREATOR' => 'Опубликовано',
	'LBL_LIST_LAST_REV_DATE' => 'Дата ревизии',
	'LBL_LIST_VIEW_DOCUMENT'=>'Просмотр',
    'LBL_LIST_DOWNLOAD'=> 'Загрузить',
	'LBL_LIST_ACTIVE_DATE' => 'Дата публикации',
	'LBL_LIST_EXP_DATE' => 'Срок действия',
	'LBL_LIST_STATUS'=>'Статус',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Автор',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Статьи с наибольшим количеством просмотров',
	'LBL_LIST_MOST_RECENT' => 'Последние статьи',
    'LBL_LIST_APPROVED_BY' => 'Утверждено',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Название документа:',
	'LBL_SF_CATEGORY' => 'Категория:',
	'LBL_SF_SUBCATEGORY'=> 'Подкатегория:',
	'LBL_SF_ACTIVE_DATE' => 'Дата публикации:',
	'LBL_SF_EXP_DATE'=> 'Срок действия:',

	'DEF_CREATE_LOG' => 'Документ создан',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Поиск',
    'LBL_TAB_BROWSE' => 'Обзор',
    'LBL_TAB_ADVANCED' => 'Расширенный поиск',
    'LBL_MENU_FTS' => 'Полнотекстовой поиск',
    'LBL_FTS_EMPTY_STRING' =>  'Невозможно произвести полнотекстовой поиск из пустой строки',
    'LBL_SEARCH_WITHIN' => 'Искать в:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Содержит слова:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Не содержит слова:',  
    'LBL_UNDER_THIS_TAG' => 'Помечено тегом:',
    'LBL_PUBLISHED' => 'Опубликовано:',
    'LBL_EXPIRES' => 'Срок действия:',
    'LBL_TIMES_VIEWED' => 'Количество просмотров',    
    'LBL_ATTACHMENTS' => 'Вложения:',
    'LBL_SAVE_SEARCH_AS' => 'Сохранить условия поиска как:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Это действие сохранит выбранные элементы как сохраненный фильтр поиска для базы знаний.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Сохраненные ранее условия поиска:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Удаление или редактирование существующих условий поиска.',
    'LBL_UPDATE' => 'Обновить',
    'LBL_DELETE' => 'Удалить',
    'LBL_SHOW_OPTIONS' => 'Еще опции',
    'LBL_AND' => 'и',
    'LBL_SEARCH' => 'Поиск',
    'LBL_CLEAR' => 'Очистить',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Утверждено',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Количество просмотров',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Просмотр невозможен, документ не найден.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Просмотр невозможен, документ существует, но он еще пуст.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Статьи без меток',
    'LBL_TOP_TEN_LIST_TITLE' => 'Десять самых популярных по количеству просмотров статей',
    'LBL_SHOW_SYNTAX_HELP' => 'Подсказка по синтаксису',
    'LBL_MISMATCH_QUOTES_ERR' => 'Введенный запрос не сработает. После каждой открывающей двойной кавычки должна быть парная ей закрывающая двойная кавычка. Для поиска строки с двойной кавычкой, необходимо экранировать используя (\\").', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        'Помощь по синтаксису запросов:<br /><br />1. Знак плюса (+) означает, что в результаты _должны_ содержать эту фразу.<br />2. Знак минуса (-) означает, что результаты _не должны содержать_ эту фразу. Если вы использует соседнее поле для исключения слов из запроса, знак минуса использовать не обязательно.<br />3. Несколько слов, заключённые в кавычки ("пример1 пример2") получают значение единого поискового запроса. Заключение в кавычки с обоих сторон обязательно, иначе поиск не будет выполнен. Чтобы использовать кавычки в качестве поискового запроса, используйте вместе с ними знак обратного слэша (\\").<br />4. В случае использования знака одиночной кавычки (&#39;) поиск будет производиться как есть, без группировки слов.<br /><br />Пример:<br /><br />Запрос на поиск всех статей, содержащих слова "Sugar" или "CRM", а так же "Knowledge Base" и "крутая", но не содержащих слова "демо" и "прошедшее время", должен выглядеть так: Sugar CRM +"Knowledge Base" +крутая -демо -"прошедшее время"<br /><br />Примечания:<br /><br />1. Регистр значения не имеет.<br />2. И пробелы, и запятые являются приемлемыми разделителями.<br />3. Не ставьте пробел между знаками плюса (+) и минуса (-) и словом, к которому они относятся.',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Производная метка',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Производные метки',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Статья',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Статьи',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Эта метка содержит',
    
	//error messages
	'ERR_DOC_NAME'=>'Название документа',
	'ERR_DOC_ACTIVE_DATE'=>'Дата публикации',
	'ERR_DOC_EXP_DATE'=> 'Срок действия',
	'ERR_FILENAME'=> 'Имя файла',
	'ERR_DOC_VERSION'=> 'Ревизия документа',
	'ERR_DELETE_CONFIRM'=> 'Вы хотите удалить эту ревизию документа?',
	'ERR_DELETE_LATEST_VERSION'=> 'Вы не имеете права удалять последнюю ревизию документа.',
	'LNK_NEW_MAIL_MERGE' => 'Слияние почты',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Шаблон объединения почты:',
	'ERR_FILESIZE' => 'Файл слишком большой. Max размер файла:',

	'LBL_TREE_TITLE' => 'Документы',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Название документа',
	'LBL_CONTRACT_NAME'=>'Название контракта:',
	'LBL_LIST_IS_TEMPLATE'=>'Шаблон?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Тип документа',
	'LBL_LIST_SELECTED_REVISION'=>'Действующая ревизия',
	'LBL_LIST_LATEST_REVISION'=>'Последняя ревизия',
	'LBL_CASES_SUBPANEL_TITLE'=>'Соотнесённые обращения',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Соотнесённые E-mail-сообщения',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Связанные контракты',
	'LBL_LAST_REV_CREATE_DATE'=>'Дата создания последней ревизии',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Ключевые слова:',
    'LBL_CASES' =>'Обращения',
    'LBL_CASE_ID' => 'ID Обращения',
    'LBL_CASE'    => 'Обращение:',
    'LBL_EMAILS' =>'E-mail',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Выберите',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Выберите родительскую метку из дерева',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Выберите метку (-и) для удаления из дерева',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Выберите из дерева метку, которую хотите переименовать',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Метка уже существует',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Ввести новое имя тега',
    'LBL_SAVING_THE_TAG' => 'Сохранение тега...',
    'LBL_CREATING_NEW_TAG' => 'Создание нового тега...',
    'LBL_TAGS_ROOT_LABEL' => 'Метки',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Метка Часто Задаваемые Вопросы не может быть переименована',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Сначала выберите статьи',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Выберите статьи для применения меток',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Сначала выберите статьи',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Выберите метку из дерева',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Выберите теги из дерева',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Перемещение статей в метку...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Применение меток к статьям...',
    'LBL_ROOT_TAG_MESSAGE' => 'Родительская метка не может быть выбрана/ присоединена к статье',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Основную метку нельзя переименовать',
    'LBL_TYPE_NEW_NODE_NAME'=>'Пожалуйста, введите название тега',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Исходная и целевая метка - одинаковые',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Удалить метку',
    'LBL_SELECT_TAG'  => 'Выбрать метку',
    'LBL_APPLY_TAG'  =>  'Применить метку',
    'LBL_MOVE'  =>   'Переместить',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Запуск просмотра меток...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Произошла ошибка при обработке этого запроса для меток.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Ошибка: Не является входным элементом файла',
    'LBL_CREATE_NEW_TAG'  => 'Создать новую метку',
    'LBL_SEARCH_TAG'  => 'Поиск',
    'LBL_TAG_NAME'  =>'Название тега:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Выберите теги для удаления',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Введите название метки для поиска',
    'LBL_KB_NOTIFICATION' => 'Документ был опубликован',
    'LBL_KB_PUBLISHED_REQUEST' => 'назначил Вам документ для утверждения и публикации.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Статус документа снова изменен установлен как черновик',  
    'LBL_CONTRACTS' => 'Контракты',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Выберите родительскую метку, из дерева',
	'LBL_CLICK_APPLY_TAG' => 'Нажмите на Применить метку',	
	'LBL_HEAD_TAGS' => 'Метки',
	'LBL_REMOVE' => 'Удалить' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Правка' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Текст ссылки по умолчанию',
    'LBL_SELECT_NODE' => 'Пожалуйста, выберите узел',
    'LBL_ARTICLE_EXISTS' => 'Статья уже существует',


);
?>
