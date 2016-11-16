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
	'LBL_SEND_DATE_TIME'						=> 'Verzenddatum',
	'LBL_IN_QUEUE'								=> 'In behandeling',
	'LBL_IN_QUEUE_DATE'							=> 'Datum in behandeling genomen',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Alleen een geheel getal is toegestaan voor &#39;aantal e-mails per batch&#39;',

	'LBL_ATTACHMENT_AUDIT'						=> '&nbsp;is verzonden. Er is geen lokale kopie gemaakt om schijfruimte te besparen.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configureer e-mailinstellingen',
	'LBL_CUSTOM_LOCATION'						=> 'Zelfgedefinieerd',
	'LBL_DEFAULT_LOCATION'						=> 'Default',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Voeg e-mailvoorwaarden toe aan elke e-mail.',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Inhoud e-mailvoorwaarden',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'DISCLAIMER: Deze e-mail, inclusief meegezonden bestanden, bevat mogelijk vertrouwelijke informatie en is alleen bedoeld voor de beoogde ontvanger. Openbaarmaking, vermenigvuldiging, verspreiding en/of verstrekking van de in de e-mail ontvangen informatie aan derden is niet toegestaan, tenzij hiervoor nadrukkelijk toestemming is verleend door de verzender. Indien u niet de beoogde ontvanger bent, gelieve contact op te nemen met de verzender per e-mail door te antwoorden op deze e-mail, voorts dient u de e-mail inclusief meegezonden files van uw computer(systeem) verwijderen. Bij voorbaat dank.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Stel berichten op in deze tekenset',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Stel berichten op met deze client',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Verwijder gerelateerde notities en bijlagen bij verwijderde e-mailberichten',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Gmail standaard instellingen invullen',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Aantal e-mails verstuurd per batch:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SMTP via SSL inschakelen?',
	'LBL_EMAIL_USER_TITLE'						=> 'Standaard gebruikersinstellingen voor e-mail',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Uitgaande e-mail instellingen',
	'LBL_EMAILS_PER_RUN'						=> 'Aantal e-mails verstuurd per batch:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campagne',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Verwerkt',
	'LBL_LIST_FORM_TITLE'						=> 'Wachtrij',
	'LBL_LIST_FROM_EMAIL'						=> 'E-mail afzender',
	'LBL_LIST_FROM_NAME'						=> 'Van naam',
	'LBL_LIST_IN_QUEUE'							=> 'In behandeling',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketing bericht',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'E-mailontvanger',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Naam ontvanger',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Verzendpogingen',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Verstuur op',
	'LBL_LIST_USER_NAME'						=> 'Gebruikersnaam',
	'LBL_LOCATION_ONLY'							=> 'Locatie',
	'LBL_LOCATION_TRACK'						=> 'Locatie van de campagne tracking bestanden (bijvoorbeeld campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Bewaar kopieën van campagne berichten:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Weet u zeker dat uw kopieën van <b>ALLE<b> verzonden e-mailberichten van campagnes wilt bewaren? <b>We raden aan dit niet standaard te doen<b>. Kiest u ervoor niet alle berichten te bewaren, dan wordt enkel het sjabloon met de bijbehorende variabelen bewaard zodat u, indien gewenst, altijd nog handmatig een bericht kunt nasturen.',
	'LBL_MAIL_SENDTYPE'							=> 'Mail Transfer Agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Gebruik SMTP authenticatie?',
	'LBL_MAIL_SMTPPASS'							=> 'Wachtwoord:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Poort',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Server:',
	'LBL_MAIL_SMTPUSER'							=> 'SMTP gebruikersnaam:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Kies uw e-mailprovider',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! e-mail wachtwoord',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! e-mail ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail wachtwoord',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail e-mailadres',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange wachtwoord',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange gebruikersnaam',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange serverpoort',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-mail Client',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar e-mail client:</b> Verstuur e-mails vanuit de ingebouwde e-mail client in Sugar.<br>Deze optie is alleen beschikbaar als uw administrator dit geconfigureerd heeft. Neem contact op met uw administrator als u hierover vragen heeft.<br><b>Externe e-mail client:</b> Verstuur e-mails met een e-mail client buiten Sugar, bijvoorbeeld Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Marketing ID',
    'LBL_MODULE_ID'                             => 'E-mail',
	'LBL_MODULE_NAME'							=> 'E-mailinstellingen',
	'LBL_MODULE_NAME_SINGULAR'						=> 'E-mailinstellingen',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configureer de campagne e-mailinstellingen',
	'LBL_MODULE_TITLE'							=> 'Beheer uitgaande e-mailwachtrij',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Indien aangevinkt: verzend e-mailnotificaties aan gebruikers wanneer records worden toegewezen.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '&#39;Van&#39; adres:',
	'LBL_NOTIFY_FROMNAME' 						=> '&#39;Van&#39; naam:',
	'LBL_NOTIFY_ON'								=> 'Notificaties aan?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Verstuur notificaties naar nieuwe gebruikers',
	'LBL_NOTIFY_TITLE'							=> 'E-mail opties',
	'LBL_OLD_ID'								=> 'Oude ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Uitgaande e-mail opties',
	'LBL_RELATED_ID'							=> 'Gerelateerd ID',
	'LBL_RELATED_TYPE'							=> 'Gerelateerd Type',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Uitgaande ruwe e-mails opslaan',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Zoekopdracht voltooid',
	'LBL_SEARCH_FORM_TITLE'						=> 'Zoekopdracht in wachtrij',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Bekijk verwerkte e-mails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Bekijk de e-mail in de wachtrij',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Waarde van config.php instelling site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Om jezelf af te melden van deze e-maillijst ga naar',
	'TXT_REMOVE_ME_CLICK'						=> 'klik hier',
	'TXT_REMOVE_ME'								=> 'Om jezelf af te melden van deze e-maillijst',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Verstuurd mededeling vanaf toegewezen gebruiker&#39;s e-mailadres',

	'LBL_SECURITY_TITLE'						=> 'E-mail beveiligingsinstellingen',
	'LBL_SECURITY_DESC'							=> 'Vink de tags aan die NIET toegestaan zouden moeten worden via de Inkomende E-mail of getoond worden in de e-mails module.',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Formulier tag',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Kies de standaard minimale beveiliging instellingen oovr Outlook (i.v.m. juiste weergave).',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Vink alle opties aan',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nee',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Verzendpogingen',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configureer de standaard uitgaande e-mailserver voor het versturen van e-mailnotificaties en workflow-meldingen.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Sta gebruikers toe dit account te gebruiken voor uitgaande e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Als deze optie ingeschakeld is, kunnen alle gebruikers e-mails versturen met hetzelfde uitgaande e-mailaccount die gebruikt wordt voor het versturen van e-mail-mededelingen en meldingen. Is deze optie niet geselecteerd, dan kunnen gebruikers altijd nog uitgaande e-mail versturen via hun eigen ingestelde uitgaande e-mailaccount.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Wanneer ingeschakeld, zal de naam en e-mailadres van de gebruiker worden opgenomen in het Van-veld van de e-mail. Deze functie werkt mogelijk niet met SMTP-servers die niet toestaan dat e-mails verzonden worden vanuit een ander e-mailaccount dan de server account.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Ongeoorloofde toegang tot beheer.',
    'LBL_INVALID_ENTRY_POINT' => 'Geen geldig Entry Point',
);
