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
	'LBL_SEND_DATE_TIME'						=> 'Skickat datum',
	'LBL_IN_QUEUE'								=> 'I kö?',
	'LBL_IN_QUEUE_DATE'							=> 'Kö datum',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Endast siffror är tillåtna för Antal epostmeddelanden som skickas per batch',

	'LBL_ATTACHMENT_AUDIT'						=> 'skickades. Det duplicerades inte lokalt för att spara diskutrymme.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigurera',
	'LBL_CUSTOM_LOCATION'						=> 'Användardefinierat',
	'LBL_DEFAULT_LOCATION'						=> 'Standard',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Lägg till standardtext till alla epost meddelanden',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Standardtextsinnehåll',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Det här meddelandet är endast avsett för den avsedda (de avsedda) mottagarna och kan innehålla konfidentiell information. All oauktoriserat användande av informationen är förbjuden. Om du inte är en av de avsedda mottagarna, vänligen radera alla kopior av meddelandet och meddela avsändaren så att våra adressregister kan uppdateras. Tack så mycket.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Skapa epostmeddelanden med denna teckenuppsättning',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Skapa epost med denna klient',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Radera relaterade anteckningar & bifogade filer med raderade epostmeddelanden',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Fyll i Gmail inställningar',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Antal epostmeddelanden som skickas per batch:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Aktivera SMTP över SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Användarens epost standarder',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Utgående epost konfigurering',
	'LBL_EMAILS_PER_RUN'						=> 'Antal epostmeddelanden som skickas per batch:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Kampanj',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Bearbetade',
	'LBL_LIST_FORM_TITLE'						=> 'Kö',
	'LBL_LIST_FROM_EMAIL'						=> 'Från epost',
	'LBL_LIST_FROM_NAME'						=> 'Avsändarnamn',
	'LBL_LIST_IN_QUEUE'							=> 'I kö?',
	'LBL_LIST_MESSAGE_NAME'						=> 'Epost utskick',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Mottagar epost',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Mottagarnamn',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Antal försök att skicka',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Skicka på',
	'LBL_LIST_USER_NAME'						=> 'Användarnamn',
	'LBL_LOCATION_ONLY'							=> 'Placering',
	'LBL_LOCATION_TRACK'						=> 'Placering av kampanj trackerfiler (som campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Spara kopior av kampanjmeddelanden:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Vill du spara fullständiga kopior av <bold>ALLA</bold> epost-meddelanden som sänds under alla kampanjer? <bold>Vi rekomenderar och default är nej</bold> Om du väljer nej kommer bara mallen och dom behövda variablerna för att återskapa dom individuella meddelandena att sparas.',
	'LBL_MAIL_SENDTYPE'							=> 'Agent för skickande av epost:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Använd SMTP autentifiering?',
	'LBL_MAIL_SMTPPASS'							=> 'Lösenord:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP port',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP server:',
	'LBL_MAIL_SMTPUSER'							=> 'SMTP användarnamn:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Välj din Epost leverantör',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail Lösenord',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Lösenord',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Epost Adress',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Lösenord',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Användarnamn',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Server port',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'Epostklient',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar Epost kient:</B> Skicka epost genom epost klienten i Sugar CRM.<br /><b>Extern Epost klient:</b> Skicka epost genom en klient utanför Sugar CRM, t.ex Microsoft Outlook',
	'LBL_MARKETING_ID'							=> 'Marketing Id',
    'LBL_MODULE_ID'                             => 'Epostutskick',
	'LBL_MODULE_NAME'							=> 'Epostalternativ',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Epostalternativ',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfigurera kampanj epost inställningar',
	'LBL_MODULE_TITLE'							=> 'Utgående epostkö hantering',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Skickar notifieringsepost vid tilldelning av en post.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Avsändar" adress:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Avsändar" namn:',
	'LBL_NOTIFY_ON'								=> 'Notifieringar på?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Skicka notifieringar som standard för nya användare?',
	'LBL_NOTIFY_TITLE'							=> 'Epost notifieringsalternativ',
	'LBL_OLD_ID'								=> 'Gammalt Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Utgående epost alternativ',
	'LBL_RELATED_ID'							=> 'Relaterad Id',
	'LBL_RELATED_TYPE'							=> 'Relaterad typ',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Spara utgående originalmeddelanden',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Genomför sökning',
	'LBL_SEARCH_FORM_TITLE'						=> 'Snabbsökning',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Visa skickade epostmeddelanden',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Se köade epostmeddelanden',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Värdet av Config.php inställningen site_url',
	'TXT_REMOVE_ME_ALT'							=> 'För att ta bort dig själv från epostlistan gå till',
	'TXT_REMOVE_ME_CLICK'						=> 'klicka här',
	'TXT_REMOVE_ME'								=> 'För att ta bort dig själv från epostlistan',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Skicka en notifiering från tilldelade användarens epost adress?',

	'LBL_SECURITY_TITLE'						=> 'Säkerhetsinställningar för epost',
	'LBL_SECURITY_DESC'							=> 'Kryssa i följande som INTE ska vara tillåtna via Inkommade Epost eller visade i Epost modulen.',
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
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Välj minimi säkerhetsinställningar för Outlook (fel visas på sidan av korrekt)',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Toggle All Options',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nej',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Antal försök att skicka',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurera default utgående epost server för att skicka epost varningar, arbetsflödes varningar.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Tillåt användare att använda detta konto för utgående epost:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'När denna är vald kommer alla användare att kunna skicka epost från samma utgående epost konto som används för att skicka system notiser och varningar. Om den inte är vald kan användare fortfarande använda den utgående epost servern efter att ha angivit sin egna konto information.',
    'LBL_FROM_ADDRESS_HELP'                     => 'När den är aktiverad, angivet användarnamn och epostadress kommer att inkluderas i från fältet på epostmeddelandet. Denna funktion kommer förmodligen inte att fungera på SMPT servrar som inte tillåter att skicka från andra konton än server kontot.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Utbyte' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hjälp' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Obehörig åtkomst till administrationen.',
    'LBL_INVALID_ENTRY_POINT' => 'Inte en giltig entry point',
);
