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
	'LBL_SEND_DATE_TIME'						=> 'Дата на изпращане',
	'LBL_IN_QUEUE'								=> 'В опашката?',
	'LBL_IN_QUEUE_DATE'							=> 'Дата на прехвърляне към опашката',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Възможно е въвеждане само на цели числа в "Брой на писма в пакет"',

	'LBL_ATTACHMENT_AUDIT'						=> 'бяха изпратени.  It was not duplicated locally to conserve disk usage.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Конфигуриране',
	'LBL_CUSTOM_LOCATION'						=> 'Ръчна настройка',
	'LBL_DEFAULT_LOCATION'						=> 'По подразбиране',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Добавяне на уведомление за конфиденциалност към всяко писмо',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Съдържание на уведомлението',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Внимание: Писмото се изпраща до строго определен кръг от получатели и може да съдържа конфиденциална информация. Всеки неправомерен прочит, употреба или разпространение са забранени. В случай че не сте посочен като получател за това писмо, моля, унищожете всички копия на оригиналното съобщение и уведомете подателя. Благодарим Ви.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Използване на този знаков набор при писане на съобщение',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Използване на този клиент при писане на писмо',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Изтриване на прикачените файлове и бележки заедно с писмата',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Настройки по подразбиране от Gmail',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Брой писма в пакет:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Криптиране чрез SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Настройка на пощенска кутия по подразбиране',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Конфигурация на изходяща поща',
	'LBL_EMAILS_PER_RUN'						=> 'Брой писма в пакет:',
	'LBL_ID'									=> 'Идентификатор',
	'LBL_LIST_CAMPAIGN'							=> 'Кампания',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Обработени',
	'LBL_LIST_FORM_TITLE'						=> 'Опашка',
	'LBL_LIST_FROM_EMAIL'						=> 'Адрес на подателя',
	'LBL_LIST_FROM_NAME'						=> 'Подател',
	'LBL_LIST_IN_QUEUE'							=> 'В опашката?',
	'LBL_LIST_MESSAGE_NAME'						=> 'Маркетингово съобщение',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Електронен адрес',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Получател',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Опити за изпращане',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Изпратено на',
	'LBL_LIST_USER_NAME'						=> 'Потребител',
	'LBL_LOCATION_ONLY'							=> 'Местоположение',
	'LBL_LOCATION_TRACK'						=> 'Местоположение на файловете за проследяване на потребителската активност (campaign_tracker.php, ...)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Съхраняване на копия от изпратените съобщения:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Искате ли да се съхраняват копия от <bold>всички</bold> съобщения изпратени през кампании?  <bold>Нашата препоръка е това да не се прави и стойността по подразбиране е не</bold>.  Така ще се съхраняват единствено шаблоните на маркетинговите послания и необходимите променливи, които позволяват да се възстанови конкретно съобщение.',
	'LBL_MAIL_SENDTYPE'							=> 'Начин на предаване:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Изисква идентификация',
	'LBL_MAIL_SMTPPASS'							=> 'Парола за идентификация:',
	'LBL_MAIL_SMTPPORT'							=> 'Порт:',
	'LBL_MAIL_SMTPSERVER'						=> 'Сървър за електронна поща:',
	'LBL_MAIL_SMTPUSER'							=> 'Потребител:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Доставчик на електронна поща:',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Парола',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Идентификатор',
	'LBL_GMAIL_SMTPPASS'					=> 'Парола',
	'LBL_GMAIL_SMTPUSER'					=> 'Адрес',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Парола',
	'LBL_EXCHANGE_SMTPUSER'					=> 'потребител',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Порт',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Сървър',
	'LBL_EMAIL_LINK_TYPE'				=> 'Пощенски клиент',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>System Default Mail Client</b> : default email client set by the system adminstrator.<br><b>SugarCRM Mail Client</b> : email client in the Sugar Emails module.<br><b>External Mail Client</b> : other email client, such as Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Послание',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Настройки на електронна поща',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Настройки на електронна поща',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Конфигурация на настройките за електронна поща на кампанията',
	'LBL_MODULE_TITLE'							=> 'Изходящи електронни съобщения от опашката',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Изпращане на писмо с уведомление при присвояване на запис.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Адрес на подателя:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Подател:',
	'LBL_NOTIFY_ON'								=> 'Включени уведомления?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Изпращане на уведомления по подразбиране за нови потребители?',
	'LBL_NOTIFY_TITLE'							=> 'Опции при изпращане',
	'LBL_OLD_ID'								=> 'Предишно Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Опции при изпращане на електронна поща',
	'LBL_RELATED_ID'							=> 'Идентификатор на свързания запис',
	'LBL_RELATED_TYPE'							=> 'Свързан тип',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Запиши електронната поща.',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Processed Search',
	'LBL_SEARCH_FORM_TITLE'						=> 'Търсене в опашка',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'View Processed Emails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Преглед на опашките',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'config.php->site_url',
	'TXT_REMOVE_ME_ALT'							=> 'За да се отпишете от тази целева група',
	'TXT_REMOVE_ME_CLICK'						=> 'натиснете тук',
	'TXT_REMOVE_ME'								=> 'За да се отпишете от тази целева група',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Изпращане на уведомления от пощенския адрес на потребителя?',

	'LBL_SECURITY_TITLE'						=> 'Настройка на сигурността',
	'LBL_SECURITY_DESC'							=> 'Изберете следните тагове, които да не се показват във Входящата поща и в модул "Електонна поща".',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Form tag',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Изберете по подразбиране на системата,  минималните подразбрани  настройки за Outlook (грешките се изписват на обособения за това екран/панел/площ)',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Маркиране на всички тагове',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Да',
    'LBL_NO'                                    => 'Не',
    'LBL_PREPEND_TEST'                          => '[Тествай]:',
	'LBL_SEND_ATTEMPTS'							=> 'Опити за изпращане',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Конфигуриране на системен SMTP сървър за изходяща поща.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Потребителите могат да използват кутията за изходяща поща:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Когато тази опция е избрана, всички потребители на системата, ще могат да изпращат електронни писма през тази пощенска кутия.  Ако опцията не е избрана, потребителите ще могат да използват сървъра за изходяща поща, като си въведат собствена пощенска кутия.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Когато е включено, името на потребителя \\ "и електроненния адрес, ще бъдат включени в полетата на електронната поща. Тази функция може да не работи със сървър SMTP, който не позволява изпращането от друг имейл акаунт от сървъра.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Обмени' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Помощ' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Неразрешен достъп до панел Администриране',
    'LBL_INVALID_ENTRY_POINT' => 'Невалидно начало',
);
