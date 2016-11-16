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
	'LBL_SEND_DATE_TIME'						=> 'Küldés dátuma',
	'LBL_IN_QUEUE'								=> 'Feldolgozás alatt',
	'LBL_IN_QUEUE_DATE'							=> 'Sorba állítás dátuma',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Csak egész értékeket adjon meg a kötegben küldendő emailek számára',

	'LBL_ATTACHMENT_AUDIT'						=> 'elküldve. A tárhelyhasználat csökkentése érdekében nem készült helyi másolat.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Email beállítások konfigurálása',
	'LBL_CUSTOM_LOCATION'						=> 'Felhasználó által definiált',
	'LBL_DEFAULT_LOCATION'						=> 'Alapértelmezett',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Közlemény hozzáfűzése minden levélhez',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Közlemények tartalma',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'FIGYELMEZTETÉS: jelen email üzenet kizárólagosan a címzett(ek) számára íródott, így bizalmas és privát információkat tartalmazhat. A jogosulatlan megtekintés, felhasználás, közlés, vagy terjesztés tilos. Ha Ön nem tartozik a címzettek közé, kérem, semmisítse meg az eredeti üzenetet és értesítse a feladót, hogy javíthassa a címlistáját. Köszönöm.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Email írása ezzel a karakterkészlettel',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Email írása jelen kliens használatával',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Törölt emailekhez kapcsolódó megjegyzések és mellékletek törlése',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Alapértelmezett Gmail beállítások kitöltése',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Egy kötegben elküldött emailek száma:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Engedélyezi az SMTP-SSL-t?',
	'LBL_EMAIL_USER_TITLE'						=> 'Felhasználói email alapbeállítások',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Kimenő levelek beállítása',
	'LBL_EMAILS_PER_RUN'						=> 'Egy kötegben elküldött emailek száma:',
	'LBL_ID'									=> 'Azonosító',
	'LBL_LIST_CAMPAIGN'							=> 'Kampány',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Feldolgozott',
	'LBL_LIST_FORM_TITLE'						=> 'Sor',
	'LBL_LIST_FROM_EMAIL'						=> 'Feladó Email',
	'LBL_LIST_FROM_NAME'						=> 'Feladó neve',
	'LBL_LIST_IN_QUEUE'							=> 'Feldolgozás alatt',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing üzenet',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Email címzettje',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Címzett neve',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Küldés kísérletek',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Továbbítás',
	'LBL_LIST_USER_NAME'						=> 'Felhasználó név',
	'LBL_LOCATION_ONLY'							=> 'Helyszín',
	'LBL_LOCATION_TRACK'						=> 'Kampánykövető fájlok helye (mint a campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Kampányüzenetek másolatainak megtartása:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Szeretné eltárolni a teljes másolatát minden egyes kampány alatt küldött email üzenetnek? Nyomatékosan ajánljuk hogy állítsa alapértelmezetten nem-re! Ha a nem-et választja, akkor csak a sablonok kerülnek eltárolásra a szükséges változókkal, amikből vissza lehet állítani minden egyes üzenet tartalmát.',
	'LBL_MAIL_SENDTYPE'							=> 'Mail transzfer ágens',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'SMTP hitelesítés:',
	'LBL_MAIL_SMTPPASS'							=> 'Jelszó:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP port:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP mail szerver:',
	'LBL_MAIL_SMTPUSER'							=> 'Felhasználónév:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Válassza ki email szolgáltatóját',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail jelszó',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail azonosító',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail jelszó',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail email címe',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange jelszó',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange felhasználónév',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange szerver port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange szerver',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-mail kliens',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> 'Sugar mail kliens: email küldése a Sugar email kliensével.<br />Külső mail kliens: email küldése külső email klienssel, mint pl: Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing azonosító',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Email beállítások',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Email beállítások',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Kampány email beállítások konfigurálása',
	'LBL_MODULE_TITLE'							=> 'Várakozó kimenő üzenetek kezelése',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Ha engedélyezi, a felhasználók értesítést fognak kapni minden hozzájuk rendelt rekordról.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Feladó címe:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Feladó neve:',
	'LBL_NOTIFY_ON'								=> 'Megbízás értesítések',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Értesítés küldése az új felhasználók számára',
	'LBL_NOTIFY_TITLE'							=> 'Email beállítások',
	'LBL_OLD_ID'								=> 'Régi azonosító',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Kimenő email beállítások',
	'LBL_RELATED_ID'							=> 'Kapcsolódó azonosító',
	'LBL_RELATED_TYPE'							=> 'Kapcsolódó típus',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Kimenő feldolgozatlan emailek mentése',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Feldolgozott keresés',
	'LBL_SEARCH_FORM_TITLE'						=> 'Sor keresés',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Feldolgozott emailek megjelenítése',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Várakozó emailek megjelenítése',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Config.php site_url beállításának értéke',
	'TXT_REMOVE_ME_ALT'							=> 'Ha el akarja távolítani magát erről az email listáról, lépjen tovább a(z)',
	'TXT_REMOVE_ME_CLICK'						=> 'Kattintson ide',
	'TXT_REMOVE_ME'								=> 'Ha el akarja távolítani magát erről az email listáról,',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Értesítés küldése a hozzárendelő email címéről',

	'LBL_SECURITY_TITLE'						=> 'Email biztonsági beállítások',
	'LBL_SECURITY_DESC'							=> 'Ellenőrizze, hogy a következők nincsenek engedélyezve a bejövő emaileknél vagy az email modulban.',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Űrlap címke',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Outlook alapértelmezett minimális biztonsági beállításainak kiválasztása (hibázhat a helyes megjelenítés oldalán).',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Minden beállítás bekapcsolása',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Igen',
    'LBL_NO'                                    => 'Nem',
    'LBL_PREPEND_TEST'                          => '[Teszt]:',
	'LBL_SEND_ATTEMPTS'							=> 'Küldés kísérletek',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Az alapértelmezett kimenő mail szerver beállítása az értesítések és a riasztások küldéséhez.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Engedélyezze a felhasználóknak ezen kimenő email fiók használatát:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Ha ezt a beállítást választja, akkor minden felhasználó képes lesz üzeneteket küldeni ugyanazzal a kimenő email fiók hozzáféréssel, amin keresztül a rendszerértesítések és riasztások történnek. Kiválasztás hiányában a felhasználók továbbra is képesek lesznek a kimenő fiók használatára, amennyiben megadják saját kliensük információit.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Engedélyezés esetén a kijelölő felhasználó neve és email címe meg fog jelenni az email feladó mezőjében. Lehetséges, hogy ez a funkció nem fog működni azokon az SMTP szervereken, amelyek nem támogatják a szerverétől eltérő levelező fiókok használatát.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Segítség' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Nem engedélyezett hozzáférés az adminisztrációs felületen.',
    'LBL_INVALID_ENTRY_POINT' => 'Érvénytelen belépési pont',
);