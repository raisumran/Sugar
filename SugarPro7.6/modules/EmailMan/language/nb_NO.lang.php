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
	'LBL_SEND_DATE_TIME'						=> 'Sendedato',
	'LBL_IN_QUEUE'								=> 'I kø?',
	'LBL_IN_QUEUE_DATE'							=> 'Kø-dato',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Kun verdier i heltall er tillatt for e-poster sendt i partier',

	'LBL_ATTACHMENT_AUDIT'						=> 'ble sendt. Den ble ikke doblet lokalt for å bevare diskbruken.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigurér',
	'LBL_CUSTOM_LOCATION'						=> 'Brukerdefinert',
	'LBL_DEFAULT_LOCATION'						=> 'Forhåndsinnstilt',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Legg til offentliggjøringsmelding til alle e-postmeldinger',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Offentliggjør innhold',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'MERK: Denne e-postmeldingen er kun ment for den valgte mottakeren og kan inneholde hemmelige og sensitive opplysninger. Uautorisert bruk er forbudt. Hvis du ikke er den mente mottakeren, vennligst slett alle kopier av meldingen og meld fra til senderen slik at adresseregistrene kan bli oppdatert. Takk.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Opprett e-postmeldinger med dette tegnsettet',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Opprett e-postmelding med denne klienten',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Slett beslektede Notater & vedlegg med slettede E-postmeldinger',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Forutbestem Gmail-instillinger',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Antall e-postmeldinger per parti:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Muliggjør SMTP over SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Brukerinnstillinger for e-post',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Konfigurasjon utgående post',
	'LBL_EMAILS_PER_RUN'						=> 'Antall e-postmeldinger per parti:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Kampanje',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Prosessert',
	'LBL_LIST_FORM_TITLE'						=> 'Kø',
	'LBL_LIST_FROM_EMAIL'						=> 'Fra e-post',
	'LBL_LIST_FROM_NAME'						=> 'Fra-navn',
	'LBL_LIST_IN_QUEUE'							=> 'I kø?',
	'LBL_LIST_MESSAGE_NAME'						=> 'Markedsføringsmelding',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Mottakerens e-post',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Mottakerens navn',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Sendte forsøk',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Sendt på',
	'LBL_LIST_USER_NAME'						=> 'Brukernavn',
	'LBL_LOCATION_ONLY'							=> 'Plassering',
	'LBL_LOCATION_TRACK'						=> 'Plassering for kampanjeforfølgelsefiler (som campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Spar kopier av kampanjemeldinger',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Ønsker du å lagre ferdige kopier av <bold> hver </bold> e-postmelding sendt under alle kampanjene? Vi anbefaler og standard til nei </bold>. Hvis du velger nei, vil kun de sendte malene,og de nødvendige variabler for å gjenskape den enkelte melding lagres.',
	'LBL_MAIL_SENDTYPE'							=> 'Agent for e-postoverføring:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Bruk STMP-attestering?',
	'LBL_MAIL_SMTPPASS'							=> 'Passord:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP-port',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP-server:',
	'LBL_MAIL_SMTPUSER'							=> 'SMTP-brukernavn:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Velg din e-postleverandør',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! e-post passord',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! e-post ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail passord',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail e-postadresse',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange passord',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange brukernavn',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Serverport:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server:',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-post-klient',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> 'Sugar Mail Client: send e-post med e-postklienten i SugarCRM.<br />External Mail Client: send e-post med en e-postklient utenfor SugarCRM som for eksempel Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Markedsførings-ID:',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'E-post-innstillinger',
	'LBL_MODULE_NAME_SINGULAR'						=> 'E-post-innstillinger',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Konfigurer kampanje e-postinnstillinger',
	'LBL_MODULE_TITLE'							=> 'Administrasjon av kø for utgående e-post',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Send melding når registre blir tildelt.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Fra"-adresse:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Fra"-navn:',
	'LBL_NOTIFY_ON'								=> 'Meldinger på?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Skal det være forhåndsinnstilt å sende meldinger til nye brukere?',
	'LBL_NOTIFY_TITLE'							=> 'Innstillinger for e-postmeldinger',
	'LBL_OLD_ID'								=> 'Gammel ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Utgående e-postinnstillinger',
	'LBL_RELATED_ID'							=> 'Beslektet ID',
	'LBL_RELATED_TYPE'							=> 'Beslektet Type',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Lagre utgående e-postutkast',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Prossesert søk',
	'LBL_SEARCH_FORM_TITLE'						=> 'Søkekø',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Se prosesserte e-postmeldinger',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Se e-postmeldinger i kø',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Value of Config.php setting site_url',
	'TXT_REMOVE_ME_ALT'							=> 'For å fjerne deg selv fra denne e-postlisten, gå til',
	'TXT_REMOVE_ME_CLICK'						=> 'klikk her',
	'TXT_REMOVE_ME'								=> 'For å fjerne deg selv fra denne e-postlisten',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Vil du sende melding fra tildelt brukers e-postadresse?',

	'LBL_SECURITY_TITLE'						=> 'Sikkerhetsinnstillinger for e-post',
	'LBL_SECURITY_DESC'							=> 'Sjekk det følgende som IKKE skal tillates via inngående e-post eller vises i e-postmodulen.',
	'LBL_SECURITY_APPLET'						=> 'Applet-etikett',
	'LBL_SECURITY_BASE'							=> 'Baseetikett',
	'LBL_SECURITY_EMBED'						=> 'Innkapslet etikett',
	'LBL_SECURITY_FORM'							=> 'Formgi etikett',
	'LBL_SECURITY_FRAME'						=> 'Innram etikett',
	'LBL_SECURITY_FRAMESET'						=> 'Rammesett etikett',
	'LBL_SECURITY_IFRAME'						=> 'iFrame etikett',
	'LBL_SECURITY_IMPORT'						=> 'Importér etikett',
	'LBL_SECURITY_LAYER'						=> 'Lag-etikett',
	'LBL_SECURITY_LINK'							=> 'Lenke etikett',
	'LBL_SECURITY_OBJECT'						=> 'Objektetiekett',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Velg Outlooks minste antall forholdsregler (feil ved siden av den korrekte visningen).',
	'LBL_SECURITY_SCRIPT'						=> 'Skriptetikett',
	'LBL_SECURITY_STYLE'						=> 'Stiletikett',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Toggle alle valgmuligheter',
	'LBL_SECURITY_XMP'							=> 'Xmp-etikett',
    'LBL_YES'                                   => 'Ja',
    'LBL_NO'                                    => 'Nei',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Sendte forsøk',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Konfigurer standard utgående e-postserver for å sende e-post meldinger inkludert arbeidsflyt varsler',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Tillat brukere å benytte denne kontoen for utgående e-post:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Når dette alternativet velges kan alle brukere sende e-post fra samme utgående e-post konto som brukes til å sende system-meldinger og -varsler. Hvis alternativet ikke velges, kan brukerne fortsatt benytte den utgående e-postserveren etter å ha lagt inn sin egen kontoinformasjon.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Når dette er aktivert vil den angitte brukerens navn og e-postadresse stå i Fra-feltet i e-posten. Denne funksjonen vil muligens ikke fungere med SMTP-servere som ikke tillater å sende fra en annen e-postkonto enn serverkontoen.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hjelp' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Uautorisert tilgang til administrasjon.',
    'LBL_INVALID_ENTRY_POINT' => 'Ikke et gyldig Entry Point',
);
