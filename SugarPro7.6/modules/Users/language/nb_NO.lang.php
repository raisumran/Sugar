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

 * Description:	Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_ASSIGN_PRIVATE_TEAM'			=> '(privat gruppe lagres)',
	'LBL_ASSIGN_TEAM'					=> 'Tilknytt til gruppe',
	'LBL_DEFAULT_TEAM_TEXT'				=> 'Forhåndsinnstilt gruppe for nye registre',
	'LBL_DEFAULT_TEAM'					=> 'Forhåndsinnstilt gruppe',
    'LBL_DEFAULT_PRIMARY_TEAM'          => 'Standard Primærgruppe',
	'LBL_LIST_DESCRIPTION'				=> 'Beskrivelse',
	'LBL_MY_TEAMS'						=> 'Mine grupper',
	'LBL_PRIVATE_TEAM_FOR'				=> 'Privat gruppe for',
	'LNK_EDIT_TABS'						=> 'Redigér',
	'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION'	=> 'Er du sikker på at du vil fjerne denne brukeren/-es medlemsskap?',
	'LBL_TEAMS'							=> 'Grupper',
	'LBL_TEAM_UPLINE'					=> 'Medlem rapporterer - til',
	'LBL_TEAM_UPLINE_EXPLICIT'			=> 'Medlem',
    'LBL_TEAM_MEMBERSHIP'               => 'Gruppe-medlemsskap',
    'LBL_TEAM_SET'                      => 'Gruppe-sett',

    'LBL_DELETE_USER_CONFIRM'           => 'When the User record is deleted, the corresponding Employee record will also be deleted. After the user is deleted, any workflow definitions and reports involving the user might need to be updated.<br/><br/>'.
                                                'Deleting a User record cannot be undone.',
	'LBL_DELETE_GROUP_CONFIRM'          => 'Er du sikker på at du vil slette denne Gruppe Bruker? Klikk OK for å slette Bruker-posten.<br />Etter å ha klikket OK, vil du få muligheten til å overføre poster tilordnet Gruppe Bruker til en annen bruker.',
	'LBL_DELETE_PORTAL_CONFIRM'         => 'Er du sikker på at du vil slette denne Portal API Bruker? Klikk OK for å slette Bruker-posten.',

	'LNK_IMPORT_USERS'                 => 'Importer brukere',
	'ERR_DELETE_RECORD'					=> 'Et registernummer må oppgis for å slette kontoen.',
	'ERR_EMAIL_INCORRECT'				=> 'Oppgi en gyldig e-postadresse for å opprette og sende passordet.',
	'ERR_EMAIL_NO_OPTS'					=> 'De optimale innstillingene for innkommende e-post ble ikke funnet.',
	'ERR_ENTER_CONFIRMATION_PASSWORD'	=> 'Vennligst bekreft valgt passord.',
	'ERR_ENTER_NEW_PASSWORD'			=> 'Vennligst oppgi et nytt passord.',
	'ERR_ENTER_OLD_PASSWORD'			=> 'Vennligst oppgi ditt forrige passord.',
	'ERR_IE_FAILURE1'					=> '[Klikk her for å komme tilbake]',
	'ERR_IE_FAILURE2'					=> 'Det oppsto et problem ved tilkobling til e-postserveren. Vennligst kontroller innstillingene dine og prøv igjen.',
	'ERR_IE_MISSING_REQUIRED'			=> "Innstillingene for innkommende e-post mangler nødvendig informasjon. Vennligst kontroller innstillingene og prøv igjen. Hvis du ikke mente å forandre innstillingene for innkommende e-post, vennligst tøm alle feltene i den seksjonen.",
	'ERR_INVALID_PASSWORD'				=> 'Du må oppgi et gyldig brukernavn og passord.',
	'ERR_NO_LOGIN_MOBILE'				=> 'Din første pålogging til dette programmet må väre gjort med en ikke- mobil browser eller gjort i normal modus. Vennligst gå tilbake med en full browser eller klikk på den normale linken under. Vi beklager eventuelle ulemper dette medfører.',
	'ERR_LAST_ADMIN_1'					=> 'Brukernavnet "',
	'ERR_LAST_ADMIN_2'					=> '" er den seneste brukeren med administratortilgang. Minst en bruker må være administrator.',
	'ERR_PASSWORD_CHANGE_FAILED_1'		=> 'Bytte av passord mislyktes for',
	'ERR_PASSWORD_CHANGE_FAILED_2'		=> 'mislyktes. Et nytt passord må velges.',
	'ERR_PASSWORD_CHANGE_FAILED_3'		=> '.	Det nye passordet er ugyldig.',
	'ERR_PASSWORD_INCORRECT_OLD_1'		=> 'Ugyldig passord for bruker',
	'ERR_PASSWORD_INCORRECT_OLD_2'		=> '. Bekreft passordet.',
	'ERR_PASSWORD_MISMATCH'				=> 'Passordene stemmer ikke overens.',
	'ERR_PASSWORD_USERNAME_MISSMATCH'   => 'Du må oppgi et gyldig brukernavn og e-postadresse.',
	'ERR_PASSWORD_LINK_EXPIRED'         => 'Din lenke har utløpt, du må generere en ny',
	'ERR_REENTER_PASSWORDS'				=> 'Vennligst oppgi passordene igjen. De oppgitte verdiene for \\"nytt passord\\" og \\"bekreft passord\\" stemmer ikke overens.',
	'ERR_REPORT_LOOP'					=> 'Systemet oppdaget en rapporteringsløkke. En bruker kan ikke rapportere til seg selv, ei heller kan brukerens leder rapportere til brukeren selv.',
	'ERR_RULES_NOT_MET'                 => 'Passordet du skrev oppfyller ikke kravene til passord. Vennligst prøv igjen.',
	'ERR_USER_INFO_NOT_FOUND'			=> 'Brukerinformasjon ikke funnet',
	'ERR_USER_NAME_EXISTS_1'			=> 'Brukernavnet',
	'ERR_USER_NAME_EXISTS_2'			=> 'finnes allerede. Doble brukernavn er ikke tillatt. Bytt brukernavnet til noe som er unikt.',
	'ERR_USER_IS_LOCKED_OUT'			=> 'Denne brukeren er stengt ute av Sugar og kan ikke logge inn med sitt eksisterende passord.',

	'LBL_PASSWORD_SENT'                => 'Passord oppdatert',
	'LBL_CANNOT_SEND_PASSWORD'         => 'Kan ikke sende passord',
	'ERR_EMAIL_NOT_SENT_ADMIN'			=> 'Systemet kan ikke behandle forespørselen. Vennligst sjekk:',
	'ERR_SMTP_URL_SMTP_PORT'			=> 'SMTP Server URL og Port',
	'ERR_SMTP_USERNAME_SMTP_PASSWORD'	=> 'SMTP Brukernavn og SMTP Passord',
	'ERR_RECIPIENT_EMAIL'				=> 'Mottakers e-postadresse',
	'ERR_SERVER_STATUS'					=> 'Din server status',
	'ERR_SERVER_SMTP_EMPTY'				=> 'Systemet kan ikke sende en epost til brukeren. Vennligst sjekk konfigurasjinen for utgående e-post  i<a href="index.php?module=EmailMan&action=config">e-post innstillinger</a>.',

    'LBL_EMAIL_ADDRESS'                 => 'E-postadresse',

	'LBL_ADDRESS_CITY'					=> 'Adresseby',
	'LBL_ADDRESS_COUNTRY'				=> 'Adresseland',
	'LBL_ADDRESS_INFORMATION'			=> 'Adresseinformasjon',
	'LBL_ADDRESS_POSTALCODE'			=> 'Adressepostnummer',
	'LBL_ADDRESS_STATE'					=> 'Adressestat',
	'LBL_ADDRESS_STREET'				=> 'Adressegate',
	'LBL_ADDRESS_STREET_2'				=> 'Gateadresse 2',
	'LBL_ADDRESS_STREET_3'				=> 'Gateadresse 3',
	'LBL_ADDRESS'						=> 'Adresse',
	'LBL_ADMIN_USER'					=> 'Systemadmin bruker',

	'LBL_ADMIN_DESC'					=> 'Brukeren kan få tilgang til all informasjon på Administrasjonssiden, uansett team sikkerhet.',
	'LBL_REGULAR_DESC'					=> 'Brukeren kan få tilgang til moduler og poster basert på team sikkerhet og roller.',
	'LBL_ADMIN'							=> 'Administrator',
	'LBL_ADVANCED'                     => 'Avansert',
    'LBL_ANY_ADDRESS'                  => 'Enhver adresse:',
	'LBL_ANY_EMAIL'						=> 'Vilkårlig e-postadresse',
	'LBL_ANY_PHONE'						=> 'Vilkårlig telefonnummer',
	'LBL_BUTTON_CREATE'					=> 'Skap',
	'LBL_BUTTON_EDIT'					=> 'Redigér',
	'LBL_CALENDAR_OPTIONS'				=> 'Kalendervalg',
	'LBL_CHANGE_PASSWORD'               => 'Endre passord',
	'LBL_CHANGE_SYSTEM_PASSWORD'		=> 'Vennligst oppgi et nytt passord.',
	'LBL_CHANGE_PASSWORD_TITLE'         => 'Passord:',
    'LBL_CHOOSE_A_KEY'					=> 'Velg en tast for å forhindre andre fra å se din kalender',
    'LBL_NO_KEY'                        => 'Nøkkel er ikke satt. Vennligst angi nøkkelen for å aktivere publisering.',
	'LBL_CHOOSE_WHICH'					=> 'Velg hvilke etiketter som er synlige',
	'LBL_CITY'							=> 'By',

	'LBL_CLEAR_BUTTON_TITLE'			=> 'Slett',


	'LBL_CONFIRM_PASSWORD'				=> 'Bekreft passord',
	'LBL_CONFIRM_REGULAR_USER'			=> 'Du har endret brukertype fra System Administrator Bruker til vanlig bruker. Når du har lagret denne endringen vil brukeren ikke lenger ha systemadministrator rettigheter. \\n\\nClick OK for å fortsette. \\ nClick Cancel for å gå tilbake til posten.',
	'LBL_COUNTRY'						=> 'Land',
	'LBL_CURRENCY_TEXT'					=> 'Velg forhåndsinnstilt valuta',
	'LBL_CURRENCY'						=> 'Valuta',
	'LBL_CURRENCY_EXAMPLE'				=> 'Vis eksempel på valuta',
	'LBL_SYSTEM_SIG_DIGITS'				=> 'System Significant Digits',
	'LBL_SYSTEM_SIG_DIGITS_DESC' 		=> 'Number of decimal places to show for decimals and floats throughout the system, such as currency and average in Reports.',
    'LBL_CURRENCY_SHOW_PREFERRED'       => 'Vis foretrukket valuta',
    'LBL_CURRENCY_SHOW_PREFERRED_TEXT'  => 'Konverter basisvalutaen til brukerens foretrukne fra listen og registrer visninger',
	'LBL_NUMBER_GROUPING_SEP'			=> 'Tusendels separator',
	'LBL_NUMBER_GROUPING_SEP_TEXT'		=> 'Tegn som brukes for å separere tusener',
	'LBL_DECIMAL_SEP'					=> 'Symbol for desimal',
	'LBL_DECIMAL_SEP_TEXT'				=> 'Tegn som brukes for å separere desimaldeler',
	'LBL_FDOW'					=> 'Første dag i Uken',
	'LBL_FDOW_TEXT'				=> 'Første dag som vises i Uke-, Måneds- og Års-visning',
	'LBL_DATE_FORMAT_TEXT'				=> 'Velg visningsformat for datostempler',
	'LBL_DATE_FORMAT'					=> 'Datoformat',
	'LBL_DEFAULT_SUBPANEL_TITLE'		=> 'Brukere',
	'LBL_DEPARTMENT'					=> 'Avdelning',
	'LBL_DESCRIPTION'					=> 'Beskrivelse',
	'LBL_DISPLAY_TABS'					=> 'Vis etiketter',
	'LBL_DOWNLOADS'                    => 'Nedlastinger',
	'LBL_DST_INSTRUCTIONS'				=> '(+DST) viser observasjonen av Daylight Savings Time',
	'LBL_EDIT_TABS'						=> 'Redigér etiketter',
	'LBL_EDIT'							=> 'Redigér',
	'LBL_USER_HASH'						=> 'Passord:',
	'LBL_AUTHENTICATE_ID'				=> 'Godkjenning ID',
	'LBL_ACCOUNT_NAME'					=> 'Kontonavn',
	'LBL_USER_PREFERENCES'				=> 'Brukerinnstillinger',
	'LBL_EXT_AUTHENTICATE'				=> 'Ekstern godkjenning',
	'LBL_EMAIL_OTHER'					=> 'E-post 2',
	'LBL_EMAIL'							=> 'E-postadresse',
	'LBL_EMAIL_CHARSET'					=> 'Utgående tegnoppsett',
	'LBL_EMAIL_EDITOR_OPTION'			=> 'Skap format',
	'LBL_EMAIL_GMAIL_DEFAULTS'			=> 'Forutbestem Gmail-instillinger',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-post-klient',

    'LBL_EMAIL_LINK_TYPE_HELP'			=> 'Sugar Mail klient: Send e-post ved hjelp av e-postklienten i Sugar.<br />Ekstern Mail klient: Send e-post med en e-postklient utenfor Sugar, for eksempel Microsoft Outlook.',

    'LBL_EMAIL_NOT_SENT'                => 'Systemet kan ikke behandle forespørselen. Vennligst kontakt systemadministrator.',
    'LBL_EMAIL_PROVIDER'               => 'E-post leverandør',
	'LBL_EMAIL_SHOW_COUNTS'				=> 'Vis e-postkontoer?',
	'LBL_EMAIL_SIGNATURE_ERROR1'		=> 'Denne signaturen krever et navn.',
    'LBL_EMAIL_SMTP_SSL'				=> 'Muliggjør SMTP over SSL',
    'LBL_EMAIL_TEMPLATE_MISSING'            => 'Ingen e-postmal er valgt for e-post med passord som sendest til brukeren. Velg en e-postmal på Passord administrasjonssiden.',
    'LBL_EMPLOYEE_STATUS'				=> 'Status for ansettelse',
    'LBL_EMPLOYEE_INFORMATION'         => 'Ansattinformasjon',
	'LBL_ERROR'							=> 'Feil',
	'LBL_EXPORT_CHARSET'				=> 'Importér/Eksportér tegnsett',
	'LBL_EXPORT_CHARSET_DESC'			=> 'Velg hvilket tegnsett som skal brukes som ditt eget. Disse innstillingene vil bli brukt for dataimport, utgående e-post, .csv-eksportering,  PDF-opprettelse og ved opprettelse av vCard.',
	'LBL_EXPORT_DELIMITER'				=> 'Eskportér avgrensning',
	'LBL_EXPORT_DELIMITER_DESC'			=> 'Spesifisér hvilke tegn som brukes for å avgrense eksporterte data.',
	'LBL_FAX_PHONE'						=> 'Faks',
	'LBL_FAX'							=> 'Faks',
	'LBL_FIRST_NAME'					=> 'Fornavn',
    'LBL_GENERATE_PASSWORD_BUTTON_KEY'  => 'G',
    'LBL_SYSTEM_GENERATED_PASSWORD'     =>'Systemgenerert passord',
    'LBL_GENERATE_PASSWORD_BUTTON_LABEL'   => 'Tilbakestill passord',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE'   => 'Tilbakestill passord',
    'LBL_GENERATE_PASSWORD'             => 'Tilbakestill passord',
	'LBL_GROUP_DESC'					=> 'Opptre som gruppebruker. Denne brukeren kan ikke logge inn via Sugars webgrensesnitt. Denne brukeren brukes kun for å tilknytte ting til en gruppe ved hjelp av innkommende e-post-funksjonen.',
	'LBL_GROUP_USER_STATUS'				=> 'Gruppebruker',
	'LBL_GROUP_USER'					=> 'Gruppebruker',
	'LBL_HIDE_TABS'						=> 'Gjem etiketter',
	'LBL_HOME_PHONE'					=> 'Hustelefonnummer',
	'LBL_INBOUND_TITLE'					=> 'Kontoinformasjon',
	'LBL_IS_ADMIN'						=> 'Er administrator',
	'LBL_LANGUAGE'						=> 'Språk',
	'LBL_LAST_NAME'						=> 'Etternavn',
    'LBL_LAST_NAME_SLASH_NAME'			=> 'Etternavn/navn',
    'LBL_LAYOUT_OPTIONS'                => 'Oppsettsinnstillinger',
	'LBL_LDAP'							=> 'LDAP',
	'LBL_LDAP_AUTHENTICATION'			=> 'LDAP Godkjenning:',
	'LBL_LIST_ACCEPT_STATUS'			=> 'Akseptér status',
	'LBL_LIST_ADMIN'					=> 'Admin',
	'LBL_LIST_DEPARTMENT'				=> 'Avdelning',
	'LBL_LIST_EMAIL'					=> 'Vilkårlig e-postadresse',
	'LBL_LIST_FORM_TITLE'				=> 'Brukere',
	'LBL_LIST_GROUP'					=> 'Gruppe',
	'LBL_LIST_LAST_NAME'				=> 'Etternavn',
	'LBL_LIST_MEMBERSHIP'				=> 'Medlemsskap',
	'LBL_LIST_NAME'						=> 'Navn',
	'LBL_LIST_PRIMARY_PHONE'			=> 'Hovedtelefonnummer',
	'LBL_LIST_PASSWORD'					=> 'Passord:',
	'LBL_LIST_STATUS'					=> 'Status',
	'LBL_LIST_TITLE'					=> 'Tittel',
	'LBL_LIST_USER_NAME'				=> 'Brukernavn',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'	=> 'Format for navnvisning',
	'LBL_LOCALE_DESC_FIRST'				=> '[Først]',
	'LBL_LOCALE_DESC_LAST'				=> '[Sist]',
	'LBL_LOCALE_DESC_SALUTATION'		=> '[Hilsen]',
	'LBL_LOCALE_DESC_TITLE'				=> '[Tittel]',
	'LBL_PICTURE_FILE'					=> 'Bilde',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'	=> 'Eksempel',
	'LBL_LOCALE_NAME_FORMAT_DESC'		=> 'Still inn hvordan navn vil vises',
	'LBL_LOCALE_NAME_FORMAT_DESC_2'	=> '<i>"s" Hilsen<br>"f" Fornavn<br>"l" Etternavn</i>',
    'LBL_SAVED_SEARCH'                  => 'Lagrede søk og oppsett',
	// LOGIN PAGE STRINGS
	'LBL_LOGIN_BUTTON_KEY'				=> 'L',
	'LBL_LOGIN_BUTTON_LABEL'			=> 'Logg inn',
	'LBL_LOGIN_BUTTON_TITLE'			=> 'Logg inn',
	'LBL_LOGIN_WELCOME_TO'				=> 'Velkommen til',
	'LBL_LOGIN_OPTIONS'					=> 'Innstillinger',
    'LBL_LOGIN_FORGOT_PASSWORD'         => 'Glemt Passord?',
    'LBL_LOGIN_SUBMIT'      		    => 'Send',
    'LBL_LOGIN_ATTEMPTS_OVERRUN'        => 'For mange mislykkede innloggingsforsøk.',
    'LBL_LOGIN_LOGIN_TIME_ALLOWED'      => 'Du kan prøve å logge inn på nytt om',
    'LBL_LOGIN_LOGIN_TIME_DAYS'     	=> 'dager.',
    'LBL_LOGIN_LOGIN_TIME_HOURS'    	=> 't.',
    'LBL_LOGIN_LOGIN_TIME_MINUTES'      => 'min.',
   	'LBL_LOGIN_LOGIN_TIME_SECONDS'      => 'sek.',
    'LBL_LOGIN_ADMIN_CALL'              => 'Vennligst kontakt systemadministrator.',
	// END LOGIN PAGE STRINGS
    'LBL_LOGGED_OUT_1' => 'Du har blitt logget av. For å logge inn igjen vennligst klikk',
    'LBL_LOGGED_OUT_2' => 'her',
    'LBL_LOGGED_OUT_3' => '.',
	'LBL_MAIL_FROMADDRESS'				=> 'Svarsadresse',
	'LBL_MAIL_FROMNAME'					=> 'Svarsnavn',
	'LBL_MAIL_OPTIONS_TITLE'			=> 'E-post-innstillinger',
	'LBL_MAIL_SENDTYPE'					=> 'Agent for e-post-overføring',
	'LBL_MAILMERGE_TEXT'				=> 'Muliggjør e-post-fusjoner (e-post-fusjoner må også godkjennes av systemadministratoren under Konfigureringsinnstillinger)',
	'LBL_MAILMERGE'						=> 'E-post-fusjon',
	'LBL_MAX_TAB'						=> 'Antall etiketter',
    'LBL_MAX_TAB_DESCRIPTION'           => 'Antall etiketter som vises på toppen av hver side før overløpsmenyen kommer til syne.',
    'LBL_MAX_SUBTAB'                    => 'Antall underetiketter',
    'LBL_MAX_SUBTAB_DESCRIPTION'        => 'Antall underetiketter som vises før en overløpsmeny kommer til syne.',
	'LBL_MESSENGER_ID'					=> 'IM navn',
	'LBL_MESSENGER_TYPE'				=> 'IM type',
	'LBL_MOBILE_PHONE'					=> 'Mobiltelefonnummer',
	'LBL_MODIFIED_BY'                  =>'Endret av:',
	'LBL_CREATED_BY_NAME' => 'Opprettet av', //bug 48978
    'LBL_MODIFIED_BY_ID'               =>'Endret av ID',
    'LBL_MODULE_NAME'					=> 'Brukere',
    'LBL_MODULE_NAME_SINGULAR'				=> 'Bruker',
	'LBL_MODULE_TITLE'					=> 'Brukere: Hjem',
    'LBL_NAME'							=> 'Fullt navn',
    'LBL_SIGNATURE_NAME'                                        =>  'Navn',
    'LBL_NAVIGATION_PARADIGM'           => 'Navigering',
    'LBL_USE_GROUP_TABS'                => 'Grupperte moduler',
	'LBL_NEW_FORM_TITLE'				=> 'Ny bruker',
	'LBL_NEW_PASSWORD'					=> 'Nytt passord',
	'LBL_NEW_PASSWORD1'					=> 'Passord:',
	'LBL_NEW_PASSWORD2'					=> 'Bekreft passord',
	'LBL_NEW_USER_PASSWORD_1'			=> 'Passordet ble endret.',
	'LBL_NEW_USER_PASSWORD_2'			=> 'En e-post ble sendt til brukeren med et system-generert passord.',
	'LBL_NEW_USER_PASSWORD_3'			=> 'Passordet ble opprettet.',
	'LBL_NEW_USER_BUTTON_KEY'			=> 'N',
	'LBL_NEW_USER_BUTTON_LABEL'			=> 'Ny bruker',
	'LBL_NEW_USER_BUTTON_TITLE'			=> 'Ny bruker',
	'LBL_NORMAL_LOGIN'					=> 'Bytt til normal visning',
	'LBL_NOTES'							=> 'Noteringer',
	'LBL_OFFICE_PHONE'					=> 'Telefonnummer til kontor',
	'LBL_OLD_PASSWORD'					=> 'Gammelt passord',
	'LBL_OTHER_EMAIL'					=> 'Andre e-postadresser',
	'LBL_OTHER_PHONE'					=> 'Andre telefonnumre',
	'LBL_OTHER'							=> 'Andre',
	'LBL_PASSWORD'						=> 'Passord:',
    'LBL_PASSWORD_GENERATED'            => 'Nytt passord opprettet.',
    'LBL_PASSWORD_EXPIRATION_LOGIN'     => 'Passordet ditt er utløpt. Vennligst oppgi et nytt passord.',
    'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Ditt passord er system-generert',
    'LBL_PASSWORD_EXPIRATION_TIME'      => 'Passordet ditt er utløpt. Vennligst oppgi et nytt passord.',

	'LBL_PSW_MODIFIED'                  => 'passord sist endret',
    'LBL_PHONE'							=> 'Telefonnummer',
	'LBL_PICK_TZ_WELCOME'				=> 'Velkommen til Sugar.',
	'LBL_PICK_TZ_DESCRIPTION'           => 'Før du fortsetter, vennligst bekreft din tidssone. Velg en passende tidssone fra listen nedenfor, og klikk på Lagre for å fortsette. Tidssonen kan endres når som helst i "Min konto"',
	'LBL_PORTAL_ONLY_DESC'				=> 'Brukes for Portal API. Denne typen kan ikke logge inn via Sugar webgrensesnitt.',
	'LBL_PORTAL_ONLY_USER'					=> 'Portal API Bruker',
	'LBL_POSTAL_CODE'					=> 'Postnummer',
	'LBL_PRIMARY_ADDRESS'				=> 'Hovedadresse',
	'LBL_PROMPT_TIMEZONE_TEXT'			=> 'Kryss her for å aktivere bekreftelse av tidssone ved pålogging.',
	'LBL_PROMPT_TIMEZONE'				=> 'Påkrevd tidssone',
	'LBL_PROVIDE_USERNAME_AND_EMAIL' 	=> 'Oppgi både et brukernavn og en e-post adresse.',
    'LBL_FORGOTPASSORD_NOT_ENABLED' 	=> 'Denne valuta er for øyeblikket ikke aktivert. Vennligst kontakt din administrator.',
	'LBL_PUBLISH_KEY'					=> 'Publisér nøkkel',

    'LBL_QUOTAS'                        => 'Budsjetter',
    'LBL_FORECASTS'                     => 'Prognoser',
    'LBL_WORKSHEETS'                    => 'Regneark',
	'LBL_RECAPTCHA_NEW_CAPTCHA'         => 'Få en annen CAPTCHA',
	'LBL_RECAPTCHA_SOUND'				=> 'Bytt til lyd',
	'LBL_RECAPTCHA_IMAGE'				=> 'Bytt til bilde',
	'LBL_RECAPTCHA_INSTRUCTION'         => 'Skriv de to ordene under',
	'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE'=> 'Skriv de to ordene til høyre',
	'LBL_RECAPTCHA_FILL_FIELD'			=> 'Skriv inn teksten som vises i bildet.',
	'LBL_RECAPTCHA_INVALID_PRIVATE_KEY'	=> 'Ugyldig Recaptcha privatnøkkel',
	'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE'=> 'Den spesielle parameteren for å verifisere Recaptcha scriptet var feil.',
	'LBL_RECAPTCHA_UNKNOWN'				=> 'Ukjent Recaptcha feil',

	'LBL_RECEIVE_NOTIFICATIONS_TEXT'	=> 'Motta en e-post når en registrering tildeles deg.',
	'LBL_RECEIVE_NOTIFICATIONS'			=> 'Underrett ved tildeling',
	'LBL_REGISTER'                      => 'Ny bruker? Vennligst registrer deg.',
	'LBL_REGULAR_USER'                  => 'Vanlig bruker',
	'LBL_REMINDER_TEXT'					=> 'Skap en påminnelse for en kommende samtale eller et møte',
	'LBL_REMINDER'						=> 'Vis påminnelse?',
	'LBL_REMINDER_POPUP' => 'Popup',
	'LBL_REMINDER_EMAIL' => 'Vilkårlig e-postadresse',
    'LBL_REMINDER_EMAIL_ALL_INVITEES'   => 'Send epost til alle inviterte',
	'LBL_REMOVED_TABS'					=> 'Admin fjern etiketter',
	'LBL_REPORTS_TO_NAME'				=> 'Rapporterer til',
	'LBL_REPORTS_TO'					=> 'Rapporterer til',
    'LBL_REPORTS_TO_ID'                => 'Rapporterer til ID:',
	'LBL_REQUEST_SUBMIT'				=> 'Din forespørsel er sendt.',
	'LBL_RESET_TO_DEFAULT'				=> 'Nullstill tilbake til forhåndsvalg',
	'LBL_RESET_PREFERENCES'				=> 'Brukerpreferanser',
    'LBL_RESET_PREFERENCES_WARNING'     => 'Er du sikker på at du vil nullstille alle dine brukerpreferanser? Advarsel: Dette vil også føre til at du logges ut fra tjenesten.',
    'LBL_RESET_PREFERENCES_WARNING_USER' => 'Er du sikker på at du vil tilbakestille alle innstillingene for denne brukeren?',
    'LBL_RESET_DASHBOARD'               => 'Instrumentpanel',
	'LBL_SALUTATION'                    => 'Hilsen',
    'LBL_ROLES_SUBPANEL_TITLE'			=> 'Roller',
	'LBL_SEARCH_FORM_TITLE'				=> 'Brukersøk',
	'LBL_SEARCH_URL'					=> 'Søk plassering',
	'LBL_SELECT_CHECKED_BUTTON_LABEL'	=> 'Velg markerte brukere',
	'LBL_SELECT_CHECKED_BUTTON_TITLE'	=> 'Velg markerte brukere',
	'LBL_SETTINGS_URL_DESC'				=> 'Use this URL when establishing login settings for the Sugar Plug-in for Microsoft® Outlook® and the Sugar Plug-in for Microsoft® Word®.',
	'LBL_SETTINGS_URL'					=> 'Link',
	'LBL_SIGNATURE'						=> 'Signatur',
	'LBL_SIGNATURE_HTML'				=> 'HTML-signatur',
	'LBL_SIGNATURE_DEFAULT'				=> 'Bruk signatur?',
	'LBL_SIGNATURE_PREPEND'				=> 'Signatur over svar?',
	'LBL_SIGNATURES'					=> 'Signaturer',
	'LBL_STATE'							=> 'Stand',
	'LBL_STATUS'						=> 'Status',
    'LBL_SUBPANEL_LINKS'                => 'Lenker til underetiketter',
    'LBL_SUBPANEL_LINKS_DESCRIPTION'    => 'Ved detaljevisning, vis også en rekke med lenker til Underpaneler.',
    'LBL_SUGAR_LOGIN'					=> 'Er Sugar-bruker',
    'LBL_SUPPORTED_THEME_ONLY'          => 'Påvirker kun temaer som støtter dette valget.',
    'LBL_SWAP_LAST_VIEWED_DESCRIPTION'  => 'Vis den senest viste bommen på siden, hvis sjekket. Hvis ikke vises den på toppen.',
    'LBL_SWAP_SHORTCUT_DESCRIPTION'     => 'Vis Snarvei-etiketten på toppen hvis sjekket. Hvis ikke vises den på siden.',
    'LBL_SWAP_LAST_VIEWED_POSITION'     => 'Seneste vist på siden',
    'LBL_SWAP_SHORTCUT_POSITION'        => 'Snarveier på toppen',
	'LBL_TAB_TITLE_EMAIL'				=> 'E-post-innstillinger',
	'LBL_TAB_TITLE_USER'				=> 'Brukerinnstilinger',
	'LBL_THEME'							=> 'Tema',
	'LBL_THEME_COLOR'					=> 'Farge',
	'LBL_THEME_FONT'					=> 'Font',
	'LBL_TIME_FORMAT_TEXT'				=> 'Faststill visningsformatet for tidsstempler',
	'LBL_TIME_FORMAT'					=> 'Tidsformat',
	'LBL_TIMEZONE_DST_TEXT'				=> 'Observer dagslys-besparelsen',
	'LBL_TIMEZONE_DST'					=> 'Dagslys-besparelser',
	'LBL_TIMEZONE_TEXT'					=> 'Velg den nåværende tidssonen',
	'LBL_TIMEZONE'						=> 'Tidssone',
	'LBL_TITLE'							=> 'Tittel',
	'LBL_USE_REAL_NAMES'				=> 'Vis fullt navn',
	'LBL_USE_REAL_NAMES_DESC'			=> 'Vis en brukers fulle navn istedenfor innloggings-navn',
	'LBL_USER_INFORMATION'				=> 'Brukerinformasjon',
	'LBL_USER_LOCALE'					=> 'Lokale innsitllinger',
	'LBL_USER_NAME'						=> 'Brukernavn',
	'LBL_USER_SETTINGS'					=> 'Brukerinnstilinger',
	'LBL_USER_TYPE'		   			    => 'Brukertype',
	'LBL_USER_ACCESS'                  => 'Tilgang',
	'LBL_USER'							=> 'Brukere',
	'LBL_WORK_PHONE'					=> 'Telefonnummer på kontor',
	'LBL_YOUR_PUBLISH_URL'				=> 'Publisér på min plassering',
    'LBL_ICAL_PUB_URL'                  => 'Nettadresse for iCal-integrasjon',
    'LBL_ICAL_PUB_URL_HELP'             => 'Bruk denne nettadressen for å abonnere på Sugar-kalenderen med iCal.',
	'LBL_YOUR_QUERY_URL'				=> 'Din forespurte URL',
	'LNK_NEW_USER'						=> 'Opprett ny bruker',
	'LNK_NEW_PORTAL_USER'				=> 'Opprett ny Portal API bruker',
	'LNK_NEW_GROUP_USER'				=> 'Opprett ny gruppe bruker',
	'LNK_USER_LIST'						=> 'Brukere',
	'LNK_REASSIGN_RECORDS'				=> 'Omplassér registre',
    'LBL_PROSPECT_LIST'                 => 'Prospect liste',
    'LBL_EMAILS'                        => 'E-post',
    'LBL_PROCESSING'                    => 'Prosessering',
    'LBL_UPDATE_FINISH'                 => 'Oppdatering fullført',
    'LBL_AFFECTED'                      => 'berørte',

    'LBL_USER_NAME_FOR_ROLE'            =>'Brukere/Team/Roller',
    'LBL_SESSION_EXPIRED'               => 'Du er logget av fordi din sesjon har utløpt.',

    'LBL_TOO_MANY_CONCURRENT'           => 'Denne session er avsluttet fordi en annen session er startet med samme brukernavn.',
// MASS REASSIGNMENT SCRIPT STRINGS
	'LBL_REASS_SCRIPT_TITLE'			=> 'Omplassér registre',
	'LBL_REASS_DESC_PART1'				=> 'Dette kommer til å finne alle registreringer (i de valgte modulene) som er tildelt en bruker, og tillater at du omplasserer dem til en annen bruker',
        'LBL_REASS_DESC_PART2'=>                    'Velg moduler for å kjøre arbeidsflyt, sende oppdragsmeldinger og revidere overføringer. Klikk Neste for å fortsette og overføre poster. Klikk Omstart for å starte på nytt.',
	'LBL_REASS_STEP2_TITLE'				=> 'Gruppe-omplassering',
	'LBL_REASS_STEP2_DESC'				=> 'Gruppene som listes nedenfor var tilgjengelige i fra-brukerens gruppe, men ikke i til-brukerens gruppe. Alle registreringer i fra-brukerens gruppe er ikke synlig i til-brukerens gruppe med mindre gruppenes verdier er markerte.',
	'LBL_REASS_USER_FROM_TEAM'			=> 'Fra-brukergruppe:',
	'LBL_REASS_USER_TO_TEAM'			=> 'Til-brukergruppe:',
	'LBL_REASS_USER_FROM'				=> 'Fra bruker:',
	'LBL_REASS_USER_TO'					=> 'Til bruker:',
	'LBL_REASS_TEAM_TO'					=> 'Sett gruppe til:',
	'LBL_REASS_TEAMS_GOOD_MSG'			=> 'Til-brukeren har tilgang til alle fra-brukerens grupper. Ingen markering er nødvendig. Videresender deg til neste side om fem sekunder.',
	'LBL_REASS_TEAM_NO_CHANGE'			=> '-- Ingen endring --',
	'LBL_REASS_NOT_PROCESSED' 			=> 'kunne ikke gjennomføres:',
	'LBL_REASS_MOD_REASSIGN' 			=> 'Moduler som omfattes av omplasseringen',
	'LBL_REASS_FILTERS'					=> 'Filtere',
	'LBL_REASS_NOTES_TITLE'				=> 'Notater:',
	'LBL_REASS_NOTES_THREE'				=> 'Selv om du ikke inkluderer Auditing, vil fortsatt Endringsdato og Endret av fortsatt oppdateres.',
	'LBL_REASS_NOTES_ONE'				=> 'Å tildele registre til deg selv vil ikke utløse tildelingsmeldinger.',
	'LBL_REASS_NOTES_TWO'				=> 'Hvis du inkluderer Workflow, Meldinger og Audit-sporing i omplassering kommer det til å ta betydelig lenger tid.',
	'LBL_REASS_VERBOSE_OUTPUT'			=> 'Ordrik gjengivelse (gjelder kun de omplasseringer som inkluderer workflows)',
        'LBL_REASS_VERBOSE_HELP'                     =>  'Velg dette alternativet for å vise detaljert informasjon om oppgave omdisponering som involverer arbeidsflyt.',
	'LBL_REASS_ASSESSING'				=> 'Vudrerer',
	'LBL_REASS_RECORDS_FROM'			=> 'registre fra',
	'LBL_REASS_WILL_BE_UPDATED'			=> 'vil bli oppdatert.',
	'LBL_REASS_WORK_NOTIF_AUDIT' => 'Inkludér Workflow/Meldinger/Audit (betydelig saktere)',
	'LBL_REASS_SUCCESS_ASSIGN'			=> 'Vellykket tildeling',
	'LBL_REASS_FROM'					=> 'fra',
	'LBL_REASS_TO'						=> 'til',
	'LBL_REASS_TEAM_SET_TO'				=> 'og gruppen ble satt til',
	'LBL_REASS_FAILED_SAVE'				=> 'Mislyktes i å lagre for register',
	'LBL_REASS_THE_FOLLOWING'			=> 'Det følgende',
	'LBL_REASS_HAVE_BEEN_UPDATED'		=> 'has blitt oppdatert:',
    'LBL_REASS_CANNOT_PROCESS'		    => 'kunne ikke gjennomføres:',
	'LBL_REASS_NONE'					=> 'Ingen',
	'LBL_REASS_UPDATE_COMPLETE'			=> 'Oppdatering fullført',
	'LBL_REASS_SUCCESSFUL'				=> 'Vellykket',
	'LBL_REASS_FAILED'					=> 'Mislyktes',
	'LBL_REASS_BUTTON_SUBMIT' 			=> 'Send',
	'LBL_REASS_BUTTON_CLEAR' 			=> 'Slett',
	'LBL_REASS_BUTTON_CONTINUE'			=> 'Fortsett',
    'LBL_REASS_BUTTON_REASSIGN'         => 'Tildele',
	'LBL_REASS_BUTTON_GO_BACK' 			=> 'Gå tilbake',
	'LBL_REASS_BUTTON_RESTART' 			=> 'Start på nytt',
	'LBL_REASS_BUTTON_RETURN' 			=> 'Gå tilbake',
	// js
	'LBL_REASS_CONFIRM_REASSIGN'		=> 'Vil du omplassere alle denne brukerens registreringer?',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Ja',
  'LBL_REASS_CONFIRM_REASSIGN_NO'    => 'Nei',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE'    => 'Tildel på nytt',
	// end js
	'ERR_REASS_SELECT_MODULE'			=> 'Vennligst gå tilbake og velg minst en modul.',
	'ERR_REASS_DIFF_USERS'				=> 'Vennligst velg en Flytt til-bruker som er en annen enn Flytt fra-brukeren.',
// END MASS REASSIGNMENT SCRIPT STRINGS


// INBOUND EMAIL STRINGS
	'LBL_APPLY_OPTIMUMS'				=> 'Bruk optimum',
	'LBL_ASSIGN_TO_USER'				=> 'Tildel til bruker',
	'LBL_BASIC'							=> 'Innkommende oppsett',
	'LBL_CERT_DESC'						=> 'Tving frem validering av serverens Sikkerhetssertifikat - ikke bruk hvis egensignering er på.',
	'LBL_CERT'							=> 'Validér sertifikat',
	'LBL_FIND_OPTIMUM_KEY'				=> 'f',
	'LBL_FIND_OPTIMUM_MSG'				=> '<br>Finner optimale tilkoblingsvariabler.',
	'LBL_FIND_OPTIMUM_TITLE'			=> 'Finn optimal konfigurering',
	'LBL_FORCE'							=> 'Tving negativ',
	'LBL_FORCE_DESC'					=> 'Noen IMAP/POP3-servere krever spesielle brytere. Prøv å tving en negativ bryter når du kobler til (f.eks., /notls)',
	'LBL_FOUND_OPTIMUM_MSG'				=> '<br>Fant optimale innstillinger. Trykk på knappen herunder for å knytte dem til din E-postkasse.',
	'LBL_EMAIL_INBOUND_TITLE'			=> 'Innstillinger for innkommende e-post',
	'LBL_EMAIL_OUTBOUND_TITLE'			=> 'Innstillinger for utgående e-post',
	'LBL_LOGIN'							=> 'Brukernavn',
	'LBL_MAILBOX_DEFAULT'				=> 'INNBOKS',
	'LBL_MAILBOX_SSL_DESC'				=> 'Use SSL when connecting. If this does not work, check that your PHP installation included "--with-imap-ssl" in the configuration.',
	'LBL_MAILBOX'						=> 'Overvåket mappe',
	'LBL_MAILBOX_TYPE'					=> 'Mulige handlinger',
	'LBL_MARK_READ_NO'					=> 'E-post markert som slettet etter import',
	'LBL_MARK_READ_YES'					=> 'E-post som ble igjen på serveren etter import',
	'LBL_MARK_READ_DESC'				=> 'Importér og markér meldinger som er leste på e-postserveren, ikke slett.',
	'LBL_MARK_READ'						=> 'La meldingene bli på serveren',
	'LBL_ONLY_SINCE_NO'					=> 'Nei. Sjekk henimot alle e-postmeldinger på serveren.',
	'LBL_ONLY_SINCE_YES'				=> 'Ja.',
	'LBL_ONLY_SINCE_DESC'				=> 'PHP kan ikke skjelne Nye fra Uleste meldinger når du bruker POP3. Marker dette flagget for å granske meldinger siden sist gang e-postkontoen ble avstemt. Dette vil betraktelig øke kapasiteten hvis din e-postserver ikke støtter IMAP.',
	'LBL_ONLY_SINCE'					=> 'Importer kun siden forrige sjekk',
	'LBL_PORT'							=> 'Port for e-postserver',
	'LBL_SERVER_OPTIONS'				=> 'Avanserte innstilinger',
	'LBL_SERVER_TYPE'					=> 'Protokoll for e-postserver',
	'LBL_SERVER_URL'					=> 'Adresse til e-postserver',
	'LBL_SSL'							=> 'Bruk SSL',
	'LBL_SSL_DESC'						=> 'Bruk sikret holder når du kobler til e-postserveren.',
	'LBL_TEST_BUTTON_KEY'				=> 't',
	'LBL_TEST_BUTTON_TITLE'				=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'					=> 'Testinnstillinger',
	'LBL_TEST_SUCCESSFUL'				=> 'Tilkoblingen ble utført vellykket.',
	'LBL_TLS_DESC'						=> 'Bruk transportlager-sikkerhet når du kobler til e.postserveren - men kun hvis din e-postserver støtter denne protokollen.',
	'LBL_TLS'							=> 'Bruk TLS',
	'LBL_TOGGLE_ADV'					=> 'Vis avanserte',
    'LBL_OWN_OPPS'                      => 'Ingen muligheter',
	'LBL_EXTERNAL_AUTH_ONLY'			=> 'Verifisere denne brukeren bare gjennom',
	'LBL_ONLY'							=> 'Bare',
    'LBL_OWN_OPPS_DESC'                 => 'Sette denne innstillingen til sann hvis brukeren ikke vil bli tildelt muligheter. Du kan ignorere dette flagget for brukere som ikke er managere og som ikke er involvert i salgsaktiviteter. Brukes av en prognosemodul.',
// END INBOUND EMAIL STRINGS
	'LBL_LDAP_ERROR' => 'LDAP-feil: Vennligst kontakt din administrator',
	'LBL_LDAP_EXTENSION_ERROR' => 'LDAP-feil: Forlengelsen ble ikke ladet opp',

// PROJECT RESOURCES STRINGS
	'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Brukerferier',
	'LBL_RESOURCE_NAME' => 'Navn',
	'LBL_RESOURCE_TYPE' => 'Type',

	'LBL_PDF_SETTINGS'  =>  'PDF-innstillinger',
	'LBL_PDF_PAGE_FORMAT'  =>  'Sideformat',
	'LBL_PDF_PAGE_FORMAT_TEXT'  =>  'Formatet som brukes for sider',
	'LBL_PDF_PAGE_ORIENTATION'  =>  'Sideorientering',
	'LBL_PDF_PAGE_ORIENTATION_TEXT'  =>  '',
	'LBL_PDF_PAGE_ORIENTATION_P'  =>  'Stående',
	'LBL_PDF_PAGE_ORIENTATION_L'  =>  'Liggende',
	'LBL_PDF_MARGIN_HEADER'  =>  'Topptekst margin',
	'LBL_PDF_MARGIN_HEADER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_FOOTER'  =>  'Bunntekst margin',
	'LBL_PDF_MARGIN_FOOTER_TEXT'  =>  '',
	'LBL_PDF_MARGIN_TOP'  =>  'Topp margin',
	'LBL_PDF_MARGIN_TOP_TEXT'  =>  '',
	'LBL_PDF_MARGIN_BOTTOM'  =>  'Bunn margin',
	'LBL_PDF_MARGIN_BOTTOM_TEXT'  =>  '',
	'LBL_PDF_MARGIN_LEFT'  =>  'Venstre margin',
	'LBL_PDF_MARGIN_LEFT_TEXT'  =>  '',
	'LBL_PDF_MARGIN_RIGHT'  =>  'Høyre margin',
	'LBL_PDF_MARGIN_RIGHT_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_MAIN'  =>  'Skrift for Topptekst og Innhold',
	'LBL_PDF_FONT_NAME_MAIN_TEXT'  =>  'Den valgte skrifttypen vil bli brukt for toppteksten og innholdet av PDF-dokumentet',
	'LBL_PDF_FONT_SIZE_MAIN'  =>  'Hoved Skriftstørrelse',
	'LBL_PDF_FONT_SIZE_MAIN_TEXT'  =>  '',
	'LBL_PDF_FONT_NAME_DATA'  =>  'Skrift for bunntekst',
	'LBL_PDF_FONT_NAME_DATA_TEXT'  =>  'Den valgte skrifttypen vil bli brukt for bunnteksten i PDF-dokumentet',
	'LBL_PDF_FONT_SIZE_DATA'  =>  'Data skriftstørrelse',
	'LBL_PDF_FONT_SIZE_DATA_TEXT'  =>  '',
	'LBL_LAST_ADMIN_NOTICE' => 'Du har valgt selv. Du kan ikke selv endre Bruker Type eller Status.',
	'LBL_SMTP_SERVER_HELP' => 'SMTP e-post serveren kan brukes for utgående e-post. Legg inn brukernavn og passord for e-postkontoen for å bruke e-postserveren.',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrator har ennå ikke konfigurert standard utgående konto. Kan ikke sende test e-post.',
    'LBL_MAIL_SMTPAUTH_REQ'				=> 'Vil du bruke SMTP-attestering?',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP-passord',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP-port',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP-server',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP-brukernavn',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP Server Type:',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP server spesifikasjon',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Velg din e-postleverandør',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! e-post passord',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! e-post ID:',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail passord:',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail e-postadresse:',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange passord:',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange brukernavn:',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Serverport:',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Server:',
        'LBL_OK'   =>'OK',
        'LBL_CANCEL'    => 'Avbryt',
        'LBL_DELETE_USER' => 'Slett bruker',
	// Wizard
	'LBL_WIZARD_TITLE' => 'Brukerveiviser',
    'LBL_WIZARD_WELCOME_TAB' => 'Velkommen',
    'LBL_WIZARD_WELCOME_TITLE' => 'Velkommen tilSugar!',
    'LBL_WIZARD_WELCOME' => 'Klikk Neste for å konfigurere noen grunnleggende innstillinger for bruk av Sugar.',
    'LBL_WIZARD_WELCOME_NOSMTP' => 'Klikk Neste for å konfigurere noen grunnleggende innstillinger for bruk av Sugar.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Fortsett',
    'LBL_WIZARD_BACK_BUTTON' => 'Gå tilbake',
    'LBL_WIZARD_SKIP_BUTTON' => 'Hopp',
    'LBL_WIZARD_FINISH_BUTTON' => 'Avslutt',
    'LBL_WIZARD_FINISH_TAB' => 'Avslutt',
    'LBL_WIZARD_FINISH_TITLE' => 'Du er klar til å bruke Sugar!',

    'LBL_WIZARD_FINISH' => 'Klikk Avslutt under for å lagre dine endringer og begynne å bruke Sugar. For mer informasjon om bruken av Sugar:<br />Sugar University<br />Sluttbruker- og systemadministrator-opplæring og -ressurser<br />Kunnskapsdatabase<br />Tips fra SugarCRM Support rundt utførelsen av vanlige oppgaver og prosesser i Sugar<br />Forum<br />Fora for Sugar-samfunnet for å diskutere interessante temaer med hverandre og med SugarCRM-utviklere',

    'LBL_WIZARD_FINISH1' => 'Hva ønsker du å gjøre nå?',
    'LBL_WIZARD_FINISH2' => 'Kom i gang med Sugar',
    'LBL_WIZARD_FINISH3' => 'Importér data',
    'LBL_WIZARD_FINISH4' => 'Importér data fra eksterne kilder og inn i applikasjonen.',
    'LBL_WIZARD_FINISH5' => 'Opprett brukere',
    'LBL_WIZARD_FINISH6' => 'Opprett nye brukerkonti for å gi tilgang til applikasjonen.',
    'LBL_WIZARD_FINISH7' => 'Vis og administrér Programvareoppsett',
    'LBL_WIZARD_FINISH8' => 'Administrér avanserte valg, inklusive standard applikasjonsoppsett.',
    'LBL_WIZARD_FINISH9' => 'Konfigurér applikasjonen',
    'LBL_WIZARD_FINISH10' => 'Bruk Studio for å opprette og endre felter og utseende.',
    'LBL_WIZARD_FINISH11' => 'Bsøk Sugar University',
    'LBL_WIZARD_FINISH12' => 'Finn materiell og kurs som vil hjelpe deg i gang som systemadministrator eller sluttbruker.',
    'LBL_WIZARD_FINISH14' => 'Dokumentasjon',
    'LBL_WIZARD_FINISH15' => 'Produktguider og Release Notes',
    'LBL_WIZARD_FINISH16' => 'Kunnskapsdatabase',
    'LBL_WIZARD_FINISH17' => 'Tips fra SugarCRM Support om å utføre vanlige oppgaver og prosesser i Sugar',
    'LBL_WIZARD_FINISH18' => 'Fora',
    'LBL_WIZARD_FINISH19' => 'Fora for Sugar-samfunnet for å diskutere interessante temaer med hverandre og med SugarCRM-utviklere',
    'LBL_WIZARD_FINISH2DESC' => 'Gå rett til applikasjonens Hjemmeside.',
    'LBL_WIZARD_PERSONALINFO' => 'Din Informasjon',
    'LBL_WIZARD_LOCALE' => 'Din Locale',
    'LBL_WIZARD_SMTP' => 'Din e-post konto',
    'LBL_WIZARD_PERSONALINFO_DESC' => 'Gi informasjon om deg selv. Den informasjonen du gir om deg selv vil være synlig for andre Sugar brukere. <br />Felter merket med <span class="required">*</span> er påkrevd.',
    'LBL_WIZARD_LOCALE_DESC' => 'Oppgi din tidssone og hvordan du ønsker datoer, valutaer og navn skal vises i Sugar.',
    'LBL_WIZARD_SMTP_DESC' => 'Angi ditt brukernavn og passord for e-postkontoen for den standard utgående e-postserveren.',
	'LBL_EAPM_SUBPANEL_TITLE' => 'Eksterne konto',

	'LBL_EDITLAYOUT' => 'Redigér Oppsett' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Hjelp' /*for 508 compliance fix*/,
	'LBL_CHECKMARK' => 'Sjekkpunkt' /*for 508 compliance fix*/,
	'LBL_THEMEPREVIEW' => 'Forhåndsvisning' /*for 508 compliance fix*/,

    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => "OAuth Access Tokens",

    //For export labels
    'LBL_MODIFIED_USER_ID' => 'Endret bruker-ID',
    'LBL_PHONE_HOME' => 'Hjemmetelefon',
    'LBL_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_PHONE_WORK' => 'Telefon arbeid',
    'LBL_PHONE_OTHER' => 'Annen telefon',
    'LBL_PHONE_FAX' => 'Telefon/faks',
    'LBL_PORTAL_ONLY' => 'Kun portal',
    'LBL_SHOW_ON_EMPLOYEES' => 'Vis Ansatt-profil',
    'LBL_IS_GROUP' => 'Er Gruppe',
    'LBL_EXPORT_CREATED_BY' => 'Opprettet Av ID',

    'LBL_DATE_MODIFIED' => 'Endret Dato',
    'LBL_DATE_ENTERED' => 'Lagt inn Dato',
    'LBL_DELETED' => 'Slettet',
    'LBL_HIDEOPTIONS' => 'Skjul Valg',
    'LBL_SHOWOPTIONS' => 'Vis valg',

    'LBL_FILTER_USERS_REPORTS' => 'Brukernes rapporter',
    'LBL_CONTACTS_SYNC' => 'Contacts',

); // END STRINGS DEFS

?>