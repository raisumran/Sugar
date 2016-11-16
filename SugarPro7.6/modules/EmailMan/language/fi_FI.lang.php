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
	'LBL_SEND_DATE_TIME'						=> 'Lähetyspäivämäärä',
	'LBL_IN_QUEUE'								=> 'Meneillään',
	'LBL_IN_QUEUE_DATE'							=> 'Jonossa lähtien',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Käytä vain kokonaislukuja määrittääksesi erässä lähetettävien viestien määrän',

	'LBL_ATTACHMENT_AUDIT'						=> 'lähetettiin. Sitä ei kahdennettu paikallisesti levytilan säästämiseksi.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Määritä sähköpostiasetukset',
	'LBL_CUSTOM_LOCATION'						=> 'Käyttäjän määrittämä',
	'LBL_DEFAULT_LOCATION'						=> 'Oletus',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Lisää paljastusviesti jokaisen viestin loppuun',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Paljastusviestin sisältö',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'HUOMAUTUS: Tämä sähköpostiviesti on tarkoitettu yksinomaan aiotun vastaanottajan käytettäväksi ja saattaa sisältää luottamuksellista tietoa. Luvaton viestin tarkastelu, käyttö, luovuttaminen tai jakelu on kielletty. Jos et ole tarkoitettu vastaanottaja, tuhoa kaikki alkuperäisen viestin kopiot ja ilmoitta asiasta lähettäjälle, jotta osoitetietomme voidaan korjata. Kiitos. <br />NOTICE: This email message is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use, disclosure, or distribution is prohibited. If you are not the intended recipient, please destroy all copies of the original message and notify the sender so that our address record can be corrected. Thank you.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Kirjoita sähköpostiviestit tällä merkistöllä',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Kirjoita sähköpostit tällä asiakasohjelmalla',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Poista sähköpostien lisäksi niihin liittyvät merkinnät ja liitteet',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Esitäytä Gmail-oletukset',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Erässä lähetettyjen sähköpostien määrä:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Ota käyttöön SSL:llä suojattu SMTP',
	'LBL_EMAIL_USER_TITLE'						=> 'Käyttäjän sähköpostin oletukset',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Lähtevien viestien asetukset',
	'LBL_EMAILS_PER_RUN'						=> 'Erässä lähetettyjen sähköpostien määrä:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampanja',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Käsitelty',
	'LBL_LIST_FORM_TITLE'						=> 'Jono',
	'LBL_LIST_FROM_EMAIL'						=> 'Lähettäjän sähköpostiosoite',
	'LBL_LIST_FROM_NAME'						=> 'Lähettäjän nimi',
	'LBL_LIST_IN_QUEUE'							=> 'Meneillään',
	'LBL_LIST_MESSAGE_NAME'						=> 'Markkinointiviesti',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Vastaanottajan osoite',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Vastaanottajan nimi',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Lähetysyrityksiä',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Lähetä tähän aikaan:',
	'LBL_LIST_USER_NAME'						=> 'Käyttäjätunnus',
	'LBL_LOCATION_ONLY'							=> 'Sijainti',
	'LBL_LOCATION_TRACK'						=> 'Kampanjaseurantatiedostojen (kuten campaign_tracker.php) sijainti',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Pidä kopiot kampanjaviesteistä:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Haluatko tallentaa kopion <strong>JOKAISESTA</strong> kampanjaviestistä? <strong>Oletuksena ja suosituksena on ei.</strong> Valitsemalla ei tallennetaan vain viestin malli ja tarvittavat muuttujat yksittäisten viestien luomiseen.',
	'LBL_MAIL_SENDTYPE'							=> 'Mail Transfer Agent:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Käytä SMTP-todennusta:',
	'LBL_MAIL_SMTPPASS'							=> 'Salasana:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP portti:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP-viestipalvelin:',
	'LBL_MAIL_SMTPUSER'							=> 'Käyttäjätunnus:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Valitse sähköpostipalvelun tarjoaja',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! Mail -salasana',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! Mail -tunnus',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail -salasana',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail -sähköpostiosoite',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange -salasana',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange -läyttäjätunnus',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange -palvelinportti',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange-palvelin',
	'LBL_EMAIL_LINK_TYPE'				=> 'Sähköpostiohjelma',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar Mail Client:</b> Lähetä sähköposteja käyttäen Sugarissa olevaa viestiohjelmaa.<br /><b>Ulkoinen viestiohjelma:</b> Lähetä sähköpostia käyttäen Sugarin ulkopuolella olevaa ohjelmaa, kuten Microsoft Outlookia.',
	'LBL_MARKETING_ID'							=> 'Markkinointitunnus',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Sähköpostin asetukset',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Sähköpostin asetukset',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Määritä kampanjasähköpostien asetukset',
	'LBL_MODULE_TITLE'							=> 'Lähtevien sähköpostien jonon hallinta',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Kun käytössä, sähköpostit lähetetään käyttäjille, kun niille annetaan tietueita.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Lähettäjän osoite:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Lähettäjän nimi:',
	'LBL_NOTIFY_ON'								=> 'Tehtäväilmoitukset',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Lähetä ilmoituksia uusille käyttäjille',
	'LBL_NOTIFY_TITLE'							=> 'Sähköpostiasetukset',
	'LBL_OLD_ID'								=> 'Vanha tunnus',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Lähtevien sähköpostien asetukset',
	'LBL_RELATED_ID'							=> 'Liittyvät tunnukset',
	'LBL_RELATED_TYPE'							=> 'Kantatyyppi',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Tallenna lähtevät raa&#39;at sähköpostit',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Käsiteltyjen haku',
	'LBL_SEARCH_FORM_TITLE'						=> 'Jonohaku',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Näytä käsitellyt sähköpostit',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Näytä jonossa olevat sähköpostit',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'config.php:n site_url -asetuksen arvo',
	'TXT_REMOVE_ME_ALT'							=> 'Poistaaksesi itsesi tältä postituslistalta mene osoitteeseen',
	'TXT_REMOVE_ME_CLICK'						=> 'klikkaa tästä',
	'TXT_REMOVE_ME'								=> 'poistaaksesi itsesi tältä postituslistalta',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Lähetä muistutus vastuukäyttäjän sähköpostiosoitteesta.',

	'LBL_SECURITY_TITLE'						=> 'Sähköpostin suojausasetukset',
	'LBL_SECURITY_DESC'							=> 'Merkitse tagit, joita <strong>ei</strong> pitäisi päästää sisään InboundEmailin kautta tai näyttää Sähköpostit-moduulissa.',
	'LBL_SECURITY_APPLET'						=> 'Applet',
	'LBL_SECURITY_BASE'							=> 'Base',
	'LBL_SECURITY_EMBED'						=> 'Embed',
	'LBL_SECURITY_FORM'							=> 'Form',
	'LBL_SECURITY_FRAME'						=> 'Frame',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset',
	'LBL_SECURITY_IFRAME'						=> 'iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Import',
	'LBL_SECURITY_LAYER'						=> 'Layer',
	'LBL_SECURITY_LINK'							=> 'Link',
	'LBL_SECURITY_OBJECT'						=> 'Object',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Valitse Outlookin oletusarvoiset minimisuojausasetukset (pitää etusijalla oikeampaa viestin näyttämistä).',
	'LBL_SECURITY_SCRIPT'						=> 'Script',
	'LBL_SECURITY_STYLE'						=> 'Style',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Valitse kaikki vaihtoehdot',
	'LBL_SECURITY_XMP'							=> 'Xmp',
    'LBL_YES'                                   => 'Kyllä',
    'LBL_NO'                                    => 'Ei',
    'LBL_PREPEND_TEST'                          => '[Testi]:',
	'LBL_SEND_ATTEMPTS'							=> 'Lähetysyrityksiä',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Määritä oletusarvoinen lähtevä viestipalvelin sähköpostihuomautuksien (mukaan lukien work flow -huomautusten) lähettämiseen.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Salli käyttäjien käyttää tätä tiliä lähtevälle sähköpostille:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => '<p>Kun tämä valinta on valittu, kaikki käyttäjät voivat lähettää sähköposteja käyttäen samaa lähtevää viestipalvelinta, jota käytetään järjestelmätiedotteiden ja -huomautusten lähetykseen.</p><p>Jos valintaa ei ole valittu, käyttäjät voivat käyttää lähtevää viestipalvelinta omien tilitietojensa syöttämisen jälkeen.</p>',
    'LBL_FROM_ADDRESS_HELP'                     => 'Kun tämä on valittu, vastuukäyttäjän (assigning user) nimi ja sähköpostiosoite sisällytetään sähköpostin Lähettäjä-kenttään. Tämä ominaisuus ei välttämättä toimi SMTP-palvelimien kanssa, jotka eivät salli viestien lähtevän muusta kuin palvelimen tilille asettamasta osoitteesta.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ohje' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Ylläpitoliittymään pääsy estetty.',
    'LBL_INVALID_ENTRY_POINT' => 'Kelpaamaton entry point',
);
