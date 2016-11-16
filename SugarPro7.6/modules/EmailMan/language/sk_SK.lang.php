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
	'LBL_SEND_DATE_TIME'						=> 'Odoslať dátum',
	'LBL_IN_QUEUE'								=> 'V priebehu',
	'LBL_IN_QUEUE_DATE'							=> 'dátum vo fronte',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Pre zadanie počtu správ v dávke použite len celočíselné hodnoty',

	'LBL_ATTACHMENT_AUDIT'						=> 'bola odoslaná. Nebola duplikovaná lokálne pre ušetrenie miesta na disku.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigurujte celo-systémové nadstavenia',
	'LBL_CUSTOM_LOCATION'						=> 'Definované užívateľom',
	'LBL_DEFAULT_LOCATION'						=> 'Prednastavený',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Pripojiť Poučenie Správa každý e-mail',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'zverejnený Obsah',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'UPOZORNENIE: Táto e-mailová správa je určená pre použitie iba určeného príjemcu (ov) a môže obsahovať dôverné a privilegované informácie. Akékoľvek neoprávnené hodnotenia, využívanie, poskytovanie alebo distribúcie je zakázané. Ak nie ste zamýšľaný príjemca, prosím, zničiť všetky kópie pôvodnej správy a informuje o tom odosielateľa tak, aby naša adresa záznam opraviť. Ďakujem.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Napísať správy v tejto sade znakov',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Napísať správu s použitím tohto klienta',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Vymazať súvisiace poznámky a prílohy spolu s vymazanými správami',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Predvyplniť Gmail&#153; Defaults',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Počet správ odoslaných v dávke:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Povoliť SMTP cez SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Prednastavenia správ užívateľa',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Nastavenia odchádzajúcej pošty',
	'LBL_EMAILS_PER_RUN'						=> 'Počet správ odoslaných v dávke:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampaň',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Spracované',
	'LBL_LIST_FORM_TITLE'						=> 'Fronta',
	'LBL_LIST_FROM_EMAIL'						=> 'Z emailu',
	'LBL_LIST_FROM_NAME'						=> 'Od meno:',
	'LBL_LIST_IN_QUEUE'							=> 'V priebehu',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketingová správa',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Správa príjemcu',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Meno príjemcu',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Odoslať pokusy',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Odoslať na',
	'LBL_LIST_USER_NAME'						=> 'Užívateľské meno',
	'LBL_LOCATION_ONLY'							=> 'Umiestnenie',
	'LBL_LOCATION_TRACK'						=> 'Umiestnenie',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Zachovať kópie správ kampane:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Prajete si uložiť kompletné kópie VŠETKÝCH správ poslaných počas všetkých kampaní? Odporúčame a prednastavujeme nie. Vybraním nie bude uložená iba odoslaná šablóna a potrebné premenné pre opätovné vytvorenie jednotlivých správ.',
	'LBL_MAIL_SENDTYPE'							=> 'Agent prenosu pošty.',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Použiť SMTP verifikáciu?',
	'LBL_MAIL_SMTPPASS'							=> 'Heslo:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Port:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP poštový server:',
	'LBL_MAIL_SMTPUSER'							=> 'Užívateľské meno:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Vyberte si poskytovateľa pošty',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Heslo pošty',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! ID pošty:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail heslo',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail adresa správy:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Zmena hesla',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Zmena užívateľského mena',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Zmena portu servera',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Zmena servera',
	'LBL_EMAIL_LINK_TYPE'				=> 'Email klient',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar poštový klient:</b> Odosielať správy pomocou poštového klienta v aplikácii Sugar.<br /><b>Vonkajší poštový klient:</b> Odoslať správu pomocou poštového klienta mimo aplikácie Sugar, ako napríklad Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketingové ID',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Nadstavenia Emailu',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Nadstavenia Emailu',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfigurovať nastavenia pošty kampane',
	'LBL_MODULE_TITLE'							=> 'mažment odchádzajúcich emailov na front',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Ak je povolené, sú e-maily odoslané užívateľom pri záznamy k nim priradené.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Od" adresy:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Od" mena:',
	'LBL_NOTIFY_ON'								=> 'Hlásenia úloh',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Poslať hlásenia novým užívateľom',
	'LBL_NOTIFY_TITLE'							=> 'Možnosti pošty',
	'LBL_OLD_ID'								=> 'Staré ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Možnosti odchádzajúcej pošty',
	'LBL_RELATED_ID'							=> 'Súvisiace ID',
	'LBL_RELATED_TYPE'							=> 'Viazané na modul',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Uložiť Odchádzajúci hrubé e-maily',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Spracované vyhľadávanie',
	'LBL_SEARCH_FORM_TITLE'						=> 'Vyhľadávanie vo fronte',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Zobraziť spracované správy',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Zobraziť správy vo fronte',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Hodnota Config.php nastavuje site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Ak sa chcete odstrániť zo zoznamu tejto správy prejdite na',
	'TXT_REMOVE_ME_CLICK'						=> 'kliknite tu',
	'TXT_REMOVE_ME'								=> 'Ak sa chcete odstrániť zo zoznamu tejto správy',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Poslať upozornenia z priradenej užívateľovej adresy',

	'LBL_SECURITY_TITLE'						=> 'Bezpečnostné nastavenia správy',
	'LBL_SECURITY_DESC'							=> 'Skontrolujte nasledujúce, ktorá by mala byť zakázané cez InboundEmail alebo zobrazená v e-mailoch modulu.',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Základný stítok',
	'LBL_SECURITY_EMBED'						=> 'vložiť štítok',
	'LBL_SECURITY_FORM'							=> 'štítok formulára',
	'LBL_SECURITY_FRAME'						=> 'rámový štítok',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset štítok',
	'LBL_SECURITY_IFRAME'						=> 'rámový štítok',
	'LBL_SECURITY_IMPORT'						=> 'importovaný štítok',
	'LBL_SECURITY_LAYER'						=> 'vrstvový štítok',
	'LBL_SECURITY_LINK'							=> 'linkový štítok',
	'LBL_SECURITY_OBJECT'						=> 'štítok objektu',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Vyberte Outlook predvolené nastavenie minimálneho zabezpečenia (chybuje na strane správne zobrazenie).',
	'LBL_SECURITY_SCRIPT'						=> 'skriptový štítok',
	'LBL_SECURITY_STYLE'						=> 'štítok štýlu',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Prepnúť všetky možnosti',
	'LBL_SECURITY_XMP'							=> 'Xmp štítok',
    'LBL_YES'                                   => 'Áno',
    'LBL_NO'                                    => 'Nie',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Odoslať pokusy',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurácia predvoleného servera odchádzajúcej pošty pre zasielanie e-mailových upozornení, vrátane  záznamov toku práce.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Povoliť užívateľom používať tento účet pre odchádzajúce správy:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Pokiaľ je vybraná táto možnosť, všetci užívatelia budú môcť posielať správy pomocou jedného účtu odchádzajúcej pošty, používaného pre odosielanie systémových  hlásení a upozornení. Ak možnosť nie je vybraná, užívatelia stále môžu používať server pre odchádzajúcu poštu po poskytnutí ich vlastných informácii o účte.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Ak je povolené, bude priradenie používateľa \\ &#39;s meno a e-mailovú adresu zahrnuté v poli Od e-mailu. Táto funkcia nemusí pracovať s SMTP serverov, ktoré neumožňujú zaslanie z iného e-mailového konta, než na serveri účet.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo pošta' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Zmena' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Pomoc' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Unauthorized access to administration.',
    'LBL_INVALID_ENTRY_POINT' => 'Nie je platný vstupný bod',
);