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
	'LBL_SEND_DATE_TIME'						=> 'Send dato',
	'LBL_IN_QUEUE'								=> 'Startet',
	'LBL_IN_QUEUE_DATE'							=> 'I kø den',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Brug kun heltalsværdier til at angive antallet af e-mails sendt pr. batch',

	'LBL_ATTACHMENT_AUDIT'						=> 'blev sendt. Det var ikke duplikeret lokalt for at bevare diskens anvendelighed.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigurer e-mail-indstillinger',
	'LBL_CUSTOM_LOCATION'						=> 'Brugerdefineret',
	'LBL_DEFAULT_LOCATION'						=> 'Standard',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Vedhæft meddelelse om videregivelse til alle e-mails',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Indhold af videregivelse',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'BEMÆRK! Denne e-mail er alene til brug for den eller de tilsigtede modtagere og kan indeholde fortrolige og beskyttede oplysninger. Uautoriseret gennemgang, brug, videregivelse eller distribution er forbudt. Hvis du ikke er den tilsigtede modtager, skal du destruere alle kopier af den oprindelige meddelelse og underrette afsenderen, så vores adressepost kan blive korrigeret. På forhånd tak.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Opret e-mails med dette tegnsæt',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Opret e-mail ved hjælp af denne klient',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Slet relaterede noter og vedhæftede filer med slettede e-mails',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Angiv Gmail som standard',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Antal e-mails sendt pr. batch:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Aktivér SMTP via SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Bruger-e-mail-standarder',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Konfiguration af udgående e-mail',
	'LBL_EMAILS_PER_RUN'						=> 'Antal e-mails sendt pr. batch:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Kampagne',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Behandlet',
	'LBL_LIST_FORM_TITLE'						=> 'Kø',
	'LBL_LIST_FROM_EMAIL'						=> 'Fra e-mail',
	'LBL_LIST_FROM_NAME'						=> 'Fra navn',
	'LBL_LIST_IN_QUEUE'							=> 'Startet',
	'LBL_LIST_MESSAGE_NAME'						=> 'Markedsføringsmeddelelse',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Modtagers e-mail',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Modtagers navn',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Send forsøg',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Send ved',
	'LBL_LIST_USER_NAME'						=> 'Brugernavn',
	'LBL_LOCATION_ONLY'							=> 'Placering',
	'LBL_LOCATION_TRACK'						=> 'Placering af kampagnesporingsfiler "f.eks. campaign_tracker.php"',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Behold kopier af kampagnemeddelelser:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Vil du gemme hele kopier af <bold>HVER</bold> e-mail, der sendes under alle kampagner? <bold>Vi anbefaler og bruger som standard nej</bold>. Når du vælger nej, gemmes kun den skabelon, der er sendt, og de nødvendige variabler til at genskabe den enkelte meddelelse.',
	'LBL_MAIL_SENDTYPE'							=> 'E-mail-overførselsagent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Brug SMTP-godkendelse:',
	'LBL_MAIL_SMTPPASS'							=> 'Adgangskode:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP-port',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP-e-mail-server:',
	'LBL_MAIL_SMTPUSER'							=> 'Brugernavn:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Vælg din e-mail-udbyder',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail adgangskode',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail id',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail adgangskode',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail e-mail-adresse',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange adgangskode',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange brugernavn',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange serverport',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange server',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-mail-klient',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar-e-mail-klient:</b> Send e-mails ved hjælp af e-mail-klienten i Sugar-programmet.<br><b>Ekstern e-mail-klient:</b> Send e-mail ved hjælp af en e-mail-klient uden for Sugar-programmet, f.eks. Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Markedsførings-id',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'E-mail-indstillinger',
	'LBL_MODULE_NAME_SINGULAR'						=> 'E-mail-indstillinger',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfigurer kampagne e-mail-indstillinger',
	'LBL_MODULE_TITLE'							=> 'Administration af udgående e-mail-kø',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Når den er aktiveret, sendes e-mails til brugere, når de er tildelt poster.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Fra adresse:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Fra navn:',
	'LBL_NOTIFY_ON'								=> 'Tildelingsmeddelelser',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Send meddelelser til nye brugere',
	'LBL_NOTIFY_TITLE'							=> 'E-mail-indstillinger',
	'LBL_OLD_ID'								=> 'Gammelt id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Indstillinger for udgående e-mail',
	'LBL_RELATED_ID'							=> 'Relateret id',
	'LBL_RELATED_TYPE'							=> 'Relateret type',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Gem udgående rå e-mails',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Søg efter behandlet',
	'LBL_SEARCH_FORM_TITLE'						=> 'Søg efter kø',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Vis behandlede e-mails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Vis e-mails i kø',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Værdi af Config.php-indstillingens site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Hvis du vil fjerne dig selv fra denne e-mail-liste, skal du gå til',
	'TXT_REMOVE_ME_CLICK'						=> 'klik her',
	'TXT_REMOVE_ME'								=> 'Hvis du vil fjerne dig selv fra denne e-mail-liste',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Send meddelelse fra tildeling af brugerens e-mail adresse',

	'LBL_SECURITY_TITLE'						=> 'Indstillinger for e-mail-sikkerhed',
	'LBL_SECURITY_DESC'							=> 'Kontrollér følgende, som IKKE må være tilladt i via InboundEmail eller vises i modulet E-mails.',
	'LBL_SECURITY_APPLET'						=> 'Applet-mærke',
	'LBL_SECURITY_BASE'							=> 'Basismærke',
	'LBL_SECURITY_EMBED'						=> 'Integrer mærke',
	'LBL_SECURITY_FORM'							=> 'Formularmærke',
	'LBL_SECURITY_FRAME'						=> 'Billedmærke',
	'LBL_SECURITY_FRAMESET'						=> 'Rammesætmærke',
	'LBL_SECURITY_IFRAME'						=> 'iFrame-mærke',
	'LBL_SECURITY_IMPORT'						=> 'Importmærke',
	'LBL_SECURITY_LAYER'						=> 'Lagmærke',
	'LBL_SECURITY_LINK'							=> 'Linkmærke',
	'LBL_SECURITY_OBJECT'						=> 'Objektmærke',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Vælg Outlooks standard minimumsikkerhedsindstillinger "fejl i siden af korrekt visning".',
	'LBL_SECURITY_SCRIPT'						=> 'Scriptmærke',
	'LBL_SECURITY_STYLE'						=> 'Typografimærke',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Slå alle indstillinger til/fra',
	'LBL_SECURITY_XMP'							=> 'Xmp-mærke',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nej',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Send forsøg',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurer den udgående standard-e-mail-server til at sende e-mail-meddelelser, herunder arbejdsgangbeskeder.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Tillad, at brugerne bruger denne konto til udgående e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Når denne indstilling er valgt, kan alle brugere sende e-mails ved hjælp af den samme udgående <br>e-mail-konto, som bruges til at sende systemmeddelelser og -beskeder. Hvis indstillingen ikke er valgt,<br> kan brugerne stadig bruge den udgående e-mail-server, når de har angivet deres kontooplysninger.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Når aktiveret, vil den tildelte brugers navn og email adresse være inkluderet i Fra felter i emailen. Denne funktion vil muligvis ikke virke på SMTP servere som ikke tillader afsendelse fra en anden email konto end server kontoen.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hjælp' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Uautoriseret adgang til administration.',
    'LBL_INVALID_ENTRY_POINT' => 'Ikke en gyldig indgangspunkt',
);
