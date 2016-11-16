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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Vastutavad meeskonnad',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Login või parool on ebakorrektne',
	'ERR_BODY_TOO_LONG'		=> '\\rKehatekst on liiga pikk, et mahutuda kogu e-kirja. Lõigatud.',
	'ERR_INI_ZLIB'			=> 'Could not turn off Zlib compression temporarily. "Test Settings" may fail.',
	'ERR_MAILBOX_FAIL'		=> 'Ei leia e-posti kontosid.',
	'ERR_NO_IMAP'			=> 'IMAP andmekogusid ei leitud. Lahenda see enne sissetulevate e-kirjadega jätkamist.',
	'ERR_NO_OPTS_SAVED'		=> 'Saabuvate Emailide konto andmed puuduvad või pole korrektsed. Palun vaata sätted üle.',
	'ERR_TEST_MAILBOX'		=> 'Kontrolli oma sätteid ning proovi uuesti.',
    'ERR_DELETE_FOLDER' => 'Could not delete folder.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Could not unsubscribe from folder before deletion.',

	'LBL_APPLY_OPTIMUMS'	=> 'Rakenda optimaalsed',
	'LBL_ASSIGN_TO_USER'	=> 'Määra kasutaja',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Automaatvastuse suvandid',
	'LBL_AUTOREPLY'			=> 'Automaatvastuse mall',
	'LBL_AUTOREPLY_HELP'	=> 'Vali automaatvastus e-kirja saatjatele vastuse kättesaamise kohta.',
	'LBL_BASIC'				=> 'E-posti konto info',
	'LBL_CASE_MACRO'		=> 'Juhtumi makro',
	'LBL_CASE_MACRO_DESC'	=> 'Set the macro which will be parsed and used to link imported email to a Case.',
	'LBL_CASE_MACRO_DESC2'	=> 'Set this to any value, but preserve the "%1".',
	'LBL_CERT_DESC'			=> 'Force validation of the mail server\'s Security Certificate - do not use if self-signing.',
	'LBL_CERT'				=> 'Kinnita sertifikaat',
	'LBL_CLOSE_POPUP'		=> 'Sulge aken',
	'LBL_CREATE_NEW_GROUP'	=> '--Create Group On Save--',
	'LBL_CREATE_TEMPLATE'	=> 'Loo',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Telli kaustad',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Vaikimisi:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Vaikimisi:',
	'LBL_DELETE_SEEN'		=> 'Kustuta Loetud e-kirjad pärast importimist',
	'LBL_EDIT_TEMPLATE'		=> 'Redigeeri',
	'LBL_EMAIL_OPTIONS'		=> 'E-maili käsitlemissuvandid',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Tõrjutud e-kirjade käsitlemise suvandid',
	'LBL_FILTER_DOMAIN_DESC'=> 'Täpsusta domeeni, millele automaatvastuseid ei saadeta.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Vali automaatne e-kirjade kirjete loomine Sugaris kõigi sissetulevate e-kirjade jaoks.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Juhtumi loomise suvandi jaoks on vaja valida Grupi kaust',
	'LBL_FILTER_DOMAIN'		=> 'Sellele domeenile ära saada automaatvastuseid',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Optimalse ühenduse muutuja leidmine.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Leia optimaalne konfiguratsioon',
	'LBL_FIND_SSL_WARN'		=> 'SLL testimine võib võtta aega. Ole kannatlik.',
	'LBL_FORCE_DESC'		=> 'Some IMAP/POP3 servers require special switches. Check to force a negative switch when connecting (i.e., /notls)',
	'LBL_FORCE'				=> 'Force Negative',
	'LBL_FOUND_MAILBOXES'	=> 'Leia järgmised kasutatavad kaustad.<br />Valimiseks kliki ühte:',
	'LBL_FOUND_OPTIMUM_MSG'	=> 'Leitud optimaalsed sätted. Klikka allolevat nuppu nende kohaldamiseks sinu postkastile.',
	'LBL_FROM_ADDR'			=> '"Kellelt" aadress',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.",
	'LBL_FROM_NAME_ADDR'	=> 'Nimelt/e-postilt',
	'LBL_FROM_NAME'			=> '"Kellelt" nimi:',
	'LBL_GROUP_QUEUE'		=> 'Määra grupile',
    'LBL_HOME'              => 'Avaleht',
	'LBL_LIST_MAILBOX_TYPE'	=> 'E-posti konto kasutamine',
	'LBL_LIST_NAME'			=> 'Nimi:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Type',
	'LBL_LIST_SERVER_URL'	=> 'Meiliserver',
	'LBL_LIST_STATUS'		=> 'Olek',
	'LBL_LOGIN'				=> 'Kasutajanimi',
	'LBL_MAILBOX_DEFAULT'	=> 'Postkast',
	'LBL_MAILBOX_SSL_DESC'	=> 'Use SSL when connecting. If this does not work, check that your PHP installation included "--with-imap-ssl" in the configuration.',
	'LBL_MAILBOX_SSL'		=> 'Use SSL',
	'LBL_MAILBOX_TYPE'		=> 'Võimalikud tegevused',
	'LBL_DISTRIBUTION_METHOD' => 'Distributsiooni meetod',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Uue juhtumi automaatvastuse mall',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Vali automaatne vastus e-kirja saatja teavitamiseks, et juhtum on loodud. E-kiri sisaldab juhtumi numbrit Teema väljal, mis liitub Juhtumi makro sätetega. See vastus saadetakse vaid juhul, kui esimene e-kiri on saajalt saadud.',
	'LBL_MAILBOX'			=> 'Monitooritud kaustad',
	'LBL_TRASH_FOLDER'		=> 'Prügikasti kaust',
	'LBL_GET_TRASH_FOLDER'	=> 'Hangi prügikasti kaust',
	'LBL_SENT_FOLDER'		=> 'Saadetud kaust',
	'LBL_GET_SENT_FOLDER'	=> 'Hangi kaust Saadetud',
	'LBL_SELECT'				=> 'Valitud',
	'LBL_MARK_READ_DESC'	=> 'Märgi sõnumid importimisel loetuks mailiserveris, ära kustuta.',
	'LBL_MARK_READ_NO'		=> 'E-kiri on märgitud pärast importi kustutatuks',
	'LBL_MARK_READ_YES'		=> 'E-kiri on jäetud pärast importi serverisse',
	'LBL_MARK_READ'			=> 'Jäta teated serverisse',
	'LBL_MAX_AUTO_REPLIES'	=> 'Automaatvastuste arv',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Määra maksimaalne automaatvastuste arv, mida saata 24 tunni jooksul unikaalsele e-posti aadressile.',
	'LBL_PERSONAL_MODULE_NAME' => 'Personaalne e-posti konto',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Personaalne e-posti konto',
	'LBL_CREATE_CASE'      => 'Loo juhtum e-kirjast',
	'LBL_CREATE_CASE_HELP'  => 'Vali Sugaris sissetulevatest e-kirjadest juhtumi kirjete automaatne loomine.',
	'LBL_MODULE_NAME'		=> 'Grupi e-posti konto',
	'LBL_MODULE_NAME_SINGULAR' => 'Grupi e-posti konto',
	'LBL_BOUNCE_MODULE_NAME' => 'Tõrjutud e-posti käsitlemine',
	'LBL_MODULE_TITLE'		=> 'Grupi e-posti konto',
	'LBL_NAME'				=> 'Nimi',
    'LBL_NONE'              => 'None',
	'LBL_NO_OPTIMUMS'		=> 'Ei leia seadeid, palun kontrolli oma sätteid ja proovi uuesti.',
	'LBL_ONLY_SINCE_DESC'	=> 'Kasutades POP3, PHP ei filtreeri Uusi/Lugemata sõnumeid. See lipp lubab sõnumi kontrollimise taotlusi alatest ajast, mis e-posti konto oli viimati pollitud. See parandab märkimisväärselt teostamist, kui sinu mailiserver ei toeta IMAP-i.',
	'LBL_ONLY_SINCE_NO'		=> 'Ei. Kontrolli e-kirju meiliserveris.',
	'LBL_ONLY_SINCE_YES'	=> 'Jah.',
	'LBL_ONLY_SINCE'		=> 'Impordi ainult alates viimasest kontrollist:',
	'LBL_OUTBOUND_SERVER'	=> 'Väljamineva e-posti server',
	'LBL_PASSWORD_CHECK'	=> 'Parooli kontorll',
	'LBL_PASSWORD'			=> 'Salasõna',
	'LBL_POP3_SUCCESS'		=> 'Sinu POP3 testühendus oli edukas.',
	'LBL_POPUP_FAILURE'		=> 'Testühendus ebaõnnestus. Viga on näidatud allpool.',
	'LBL_POPUP_SUCCESS'		=> 'Testühendus õnnestus. Sinu sätted toimivad.',
	'LBL_POPUP_TITLE'		=> 'Testi sätteid',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Kaustade loendi hankimine',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Vali tellitud kaust(ad)',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Vali prügikasti kaust',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Vali Saadetud kaust',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Järgnevad kaust(ad) %s ei eksisteeri või on serverist kustutatud',
	'LBL_PORT'				=> 'Mail Server Port',
	'LBL_QUEUE'				=> 'E-posti konto ootejärjekord',
	'LBL_REPLY_NAME_ADDR'	=> 'Vasta nimi/e-kiri',
	'LBL_REPLY_TO_NAME'		=> '"Vasta" nimi:',
	'LBL_REPLY_TO_ADDR'		=> '"Vasta" aadress:',
	'LBL_SAME_AS_ABOVE'		=> 'Nimelt/Aadressilt kasutamine',
	'LBL_SAVE_RAW'			=> 'Salvesta rea allikas',
	'LBL_SAVE_RAW_DESC_1'	=> 'Vali "Jah", kui soovid rea allikat iga imporditud e-kirja jaoks säilitada.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Suured manused võivad põhjustada ebaõnnestumist konservatiivselt või valesti konfigureeritud andmebaasidega.',
	'LBL_SERVER_OPTIONS'	=> 'Laiendatud installimine',
	'LBL_SERVER_TYPE'		=> 'Mail Server Protocol',
	'LBL_SERVER_URL'		=> 'Mail Server Address',
	'LBL_SSL_DESC'			=> 'Kui sinu e-posti server toetab turvalisusaukude ühendusi, siis selle lubamine tekitab SSL ühendusi e-posti importimisel.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Valitud meeskonnal on juurdepääs e-posti kontole.',
	'LBL_SSL'				=> 'Use SSL',
	'LBL_STATUS'			=> 'Olek',
	'LBL_SYSTEM_DEFAULT'	=> 'System Default',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Testi sätteid',
	'LBL_TEST_SUCCESSFUL'	=> 'Ühendus on edukalt lõpuleviidud.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Üks hetk palun...',
	'LBL_TLS_DESC'			=> 'Use Transport Layer Security when connecting to the mail server - only use this if your mail server supports this protocol.',
	'LBL_TLS'				=> 'Use TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Sissetulev e-post pole lubatud',
	'LBL_WARN_IMAP'			=> 'Hoiatused:',
	'LBL_WARN_NO_IMAP'		=> 'Sissetulev e-post ei saa funktsioneerida ilma IMAP c-kliendi andmekoguta lubatud/koostatud PHP mooduliga. Palun kontakteeru oma administraatoriga selle probleemi lahendamiseks.',

	'LNK_CREATE_GROUP'		=> 'Loo uus grupp',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Uus grupi e-posti konto',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Uus tõrjutud e-post käsitlemise konto',
	'LNK_LIST_MAILBOXES'	=> 'Kõik e-posti kontod',
	'LNK_LIST_QUEUES'		=> 'Kõik ootelolevad',
	'LNK_LIST_SCHEDULER'	=> 'Ajakavad',
	'LNK_LIST_TEST_IMPORT'	=> 'Testi e-kirja importi',
	'LNK_NEW_QUEUES'		=> 'Loo uus järjekord',
	'LNK_SEED_QUEUES'		=> 'Paiguta meeskondade järjekorrad tabelisse',
	'LBL_GROUPFOLDER_ID'	=> 'Grupi kausta Id',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Vastutaja grupi kaust',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Luba kasutajatel saata e-kirju kasutades "Kellelt" nime ja aadressi Vasta aadressina.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
    'LBL_STATUS_ACTIVE'     => 'Aktiivne',
    'LBL_STATUS_INACTIVE'   => 'Mitteaktiivne',
    'LBL_IS_PERSONAL' => 'personaalne',
    'LBL_IS_GROUP' => 'grupp',
    'LBL_ENABLE_AUTO_IMPORT' => 'Impordi e-kirjad automaatselt',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Hoiatus: Sa muudad oma automaatse impordi sätteid, mis võib põhjustada andmete kaotamist.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Hoiatus: Automaatne importimine peab olema lubatud automaatsete juhtumite loomisel.',
	'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
?>
