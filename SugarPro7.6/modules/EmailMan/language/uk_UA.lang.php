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
	'LBL_SEND_DATE_TIME'						=> 'Дата відправки',
	'LBL_IN_QUEUE'								=> 'У процесі',
	'LBL_IN_QUEUE_DATE'							=> 'Дата переміщення в чергу',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Тільки цілі значення дозволені для зазначення кількості листів, що відправляються одночасно при пакетної розсилці',

	'LBL_ATTACHMENT_AUDIT'						=> 'було надіслано. Копія на локальний комп&#39;ютер не була зроблена з метою економії вільного місця на жорсткому диску.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Системні установки E-mail',
	'LBL_CUSTOM_LOCATION'						=> 'Задається користувачем',
	'LBL_DEFAULT_LOCATION'						=> 'За умовчанням',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Додавати повідомлення про конфіденційність листа до кожного E-mail-повідомленням.',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Зміст повідомлення про конфіденційність листа',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Повідомлення: Цей електронний лист призначається суто зазначеним одержувачам і може містити конфіденційну інформацію. Будь який  недозволений перегляд, використання, розголошення або розповсюдження заборонено. Якщо Ви не є одержувачем, якому лист було адресовано, знищіть, будь ласка, всі копії цього повідомлення і повідомите відправника, щоб ми змогли внести зміни в адресну книгу. Дякуємо!',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Створити електронний лист у даному кодуванні',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Створити електронний лист у даному кодуванні використовуючи цього клієнта',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Видаляти відповідні замітки і вкладення при видаленні E-mail-повідомлень',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Використовувати налаштування Gmail™',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Кількість e-mail-повідомлень, відправлених в пакеті:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Ввімкнути шифрування (SSL)',
	'LBL_EMAIL_USER_TITLE'						=> 'Використовувати налаштування E-mail за замовчуванням',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Налаштування сервера вихідної пошти',
	'LBL_EMAILS_PER_RUN'						=> 'Кількість e-mail-повідомлень, відправлених в пакеті:',
	'LBL_ID'									=> 'Id:',
	'LBL_LIST_CAMPAIGN'							=> 'Маркетингова кампанія',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Опрацьовано',
	'LBL_LIST_FORM_TITLE'						=> 'Черга',
	'LBL_LIST_FROM_EMAIL'						=> 'Від (Адреса Email)',
	'LBL_LIST_FROM_NAME'						=> 'Від (і&#39;мя)',
	'LBL_LIST_IN_QUEUE'							=> 'У процесі',
	'LBL_LIST_MESSAGE_NAME'						=> 'Маркетингове повідомлення',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Адреса Email одержувача',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Ім&#39;я одержувача',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Кількість спроб відправки',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Відправити',
	'LBL_LIST_USER_NAME'						=> 'Ім&#39;я користувача',
	'LBL_LOCATION_ONLY'							=> 'Місце:',
	'LBL_LOCATION_TRACK'						=> 'Розташування файлів відслідковавання маркетингової кампанії (типу campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Зберігати копії повідомлень розсилок:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Ви бажаєте зберігати повні копії КОЖНОГО відправленого Еmail-повідомлення по кожній маркетингової кампанії? Ми не рекомендуємо цього робити. Якщо ви оберете "ні", то будуть зберігатися лише шаблони відправлених повідомлень і Ви можете скористатися системними змінними для відтворення необхідних повідомлень.',
	'LBL_MAIL_SENDTYPE'							=> 'Відправка пошти за допомогою',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Використовувати аутентифікацію SMTP?',
	'LBL_MAIL_SMTPPASS'							=> 'Пароль:',
	'LBL_MAIL_SMTPPORT'							=> 'Порт SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Сервер SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Ім&#39;я користувача SMTP:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Виберіть постачальника послуг вашої електронної пошти:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Пароль електронної пошти:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Пошта (ID):',
	'LBL_GMAIL_SMTPPASS'					=> 'Пароль Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Email-адреса Gmail:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Пароль:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Ім&#39;я користувача:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Порт сервера:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Сервер:',
	'LBL_EMAIL_LINK_TYPE'				=> 'Поштовий клієнт',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b> Поштовий клієнт Sugar: </ b> - відправка електронних листів за допомогою вбудованого в Sugar поштового клієнта. <br> Ця опція доступна, лише якщо адміністратор налаштував параметри електронної пошти. Будь ласка, зверніться до адміністратора, якщо у вас є які-небудь питання.<br><b> Зовнішній поштовий клієнт: </ b> - будь-який інший поштовий клієнт, наприклад Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Кампанія (Id)',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Налаштування Email',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Налаштування Email',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Параметри налаштування E-mail-розсилки',
	'LBL_MODULE_TITLE'							=> 'Управління чергою вихідних повідомлень',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Якщо опція активна, користувачам відправляються повідомлення, коли за ними закріплюються записи.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Від" Адреса:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Від" І&#39;мя:',
	'LBL_NOTIFY_ON'								=> 'Повідомлення про призначення',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Надсилати повідомлення новим користувачам',
	'LBL_NOTIFY_TITLE'							=> 'Параметри електронної пошти',
	'LBL_OLD_ID'								=> 'Старий Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Опції вихідних E-mail розсилок',
	'LBL_RELATED_ID'							=> 'Пов&#39;язаний з (Id)',
	'LBL_RELATED_TYPE'							=> 'Пов&#39;язаний тип',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Зберігати початковий текст вихідних повідомлень',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Опрацьований пошук',
	'LBL_SEARCH_FORM_TITLE'						=> 'Швидкий пошук',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Перегляд опрацьованих повідомлень',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Перегляд повідомлень у черзі',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Значення параметра site_url у файлі config.php',
	'TXT_REMOVE_ME_ALT'							=> 'Для того, щоб видалити себе з цього списку розсилки, перейдіть на',
	'TXT_REMOVE_ME_CLICK'						=> 'натисніть тут',
	'TXT_REMOVE_ME'								=> 'Для того, щоб видалити себе з цього списку розсилки',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Посилати повідомлення з e-mail-адреси користувача',

	'LBL_SECURITY_TITLE'						=> 'Налаштування безпеки E-mail',
	'LBL_SECURITY_DESC'							=> 'Виберіть HTML-теги, заборонені до використання при відправці і відображенні листів в модулі E-mail.',
	'LBL_SECURITY_APPLET'						=> 'Увімкнення аплету',
	'LBL_SECURITY_BASE'							=> 'Тег <base>',
	'LBL_SECURITY_EMBED'						=> 'Увімкнення об&#39;єкта',
	'LBL_SECURITY_FORM'							=> 'Форми',
	'LBL_SECURITY_FRAME'						=> 'Фрейм',
	'LBL_SECURITY_FRAMESET'						=> 'Набір фреймів',
	'LBL_SECURITY_IFRAME'						=> 'Плаваючий фрейм',
	'LBL_SECURITY_IMPORT'						=> 'Запити імпорту',
	'LBL_SECURITY_LAYER'						=> 'Шари',
	'LBL_SECURITY_LINK'							=> 'Посилання',
	'LBL_SECURITY_OBJECT'						=> 'Об&#39;єкти',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Оберіть мінімальні налаштування безпеки Outlook (помилки з боку коректного відображення).',
	'LBL_SECURITY_SCRIPT'						=> 'Скрипт',
	'LBL_SECURITY_STYLE'						=> 'Стилі користувача',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Ввімкнути всі опції',
	'LBL_SECURITY_XMP'							=> 'Xmp-об&#39;екти',
    'LBL_YES'                                   => 'Так',
    'LBL_NO'                                    => 'Ні',
    'LBL_PREPEND_TEST'                          => '[Тест]:',
	'LBL_SEND_ATTEMPTS'							=> 'Кількість спроб відправки',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Налаштувати сервер вихідної пошти за замовчуванням для відправлення e-mail-повідомлень, вмикаючи сповіщення робочого процесу.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Дозволити користувачам використовувати цей обліковий запис для вихідних повідомлень:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'При виборі даної опції всі користувачі зможуть відправляти електронну пошту (включаючи автоматичні повідомлення про призначення записів і системні повідомлення) з використанням зазначеного тут стандартного сервера вихідної пошти. В іншому випадку кожному користувачеві при налаштуванні облікового запису електронної пошти необхідно вручну ввести налаштування сервера вихідної пошти.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Коли опція ввімкнена, призначувані ім&#39;я користувача (-ів) та електронні адреси будуть включені в полі "Від" створюваного електронного листа. Ця опція може не працювати з серверами SMTP, які не дозволяють відправку з облікового запису, що відрізняється від облікового запису сервера.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Пошта Yahoo' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Довідка' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'У Вас немає доступу до адміністрування.',
    'LBL_INVALID_ENTRY_POINT' => 'Недійсна точка входу',
);
