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
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Uzinstalēti sekojoši moduļi:',
	'DESC_MODULES_QUEUED'						=> 'Sekojoši moduļi ir gatavi instalēšanai:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nevar identificēt grupu',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Nevar identificēt īpašnieku',
	'ERR_UW_CONFIG_WRITE'						=> 'Kļūda, atjauninot versijas informāciju config.php datnē.',
	'ERR_UW_CONFIG'								=> 'Lūdzu atļaujiet rakstīšanu config.php failā un pārlādējiet šo lapu.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Nav rakstīšanas tiesību katalogā',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Fails nav nokopēts',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Pakotnes dzēšanas problēma',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Failu nevar nolasīt.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Nav atļauts failā rakstīt vai pārvietot failu',
	'ERR_UW_FLAVOR_2'							=> 'Jauninājuma paveids:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM sistēmas paveids:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log failu nevar izveidot/rakstīt tajā. Lūdzu izlabojiet pieejas tiesības jūsu SugarCRM katalogam.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload vērtību norādiet lielāku par 1. Lūdzu samainiet to savā php.ini failā un pārstartējiet web serveri.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM nepieciešama MySQL versija 4.1.2 vai jaunāka.  Atrasta:',
	'ERR_UW_OCI8_VERSION'				        => 'Sugar neatbalsta Jūsu Oracle versiju. Jums ir jāuzstāda ar Sugar programmām saderīga versija. Lūdzu skatīt Oracle versiju saderības matricu laidiena piezīmēs. Pašreizējā versija ir:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Lūdzu norādiet failu un mēģiniet vēlreiz!',
	'ERR_UW_NO_FILES'							=> 'Kļūda - nav atrasti faili pārbaudei.',
	'ERR_UW_NO_MANIFEST'						=> 'Nevar turpināt - zip arhīvā nav atrodams manifest.php fails.',
	'ERR_UW_NO_VIEW'							=> 'Norādīts nederīgs skats.',
	'ERR_UW_NO_VIEW2'							=> 'Skats nav definēts. Dodieties uz Administrēšanas lapu lai nokļūtu šajā lapā.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Ielādētā datne nav derīga.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Nevar izveidot temp katalogu. Pārbaudiet failu pieejas tiesības.',
	'ERR_UW_ONLY_PATCHES'						=> 'Šajā lapā var ielādēt tikai labojumu atjauninājumus.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Sākotnējās pārbaudes laikā atklātās kļūdas',
	'ERR_UW_UPLOAD_ERR'							=> 'Faila ielādes laikā konstatēta kļūda, mēģiniet vēlreiz!<br>\\n',
	'ERR_UW_VERSION'							=> 'SugarCRM versija:',
    'ERR_UW_WRONG_TYPE'							=> 'Šī lapa nav paredzēta izpildei',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Augšupielādētais fails pārsniedz upload_max_filesize ierobežojumu php.ini failā.',
													2 => 'Augšupielādētais fails pārsniedz MAX_FILE_SIZE ierobežojumu, kurš norādīts HTML formā.',
													3 => 'Augšupielādētais fails tika augšupielādēts tikai daļēji.',
													4 => 'Netika augšupielādēts neviens fails.',
													5 => 'Nezināma kļūda.',
													6 => 'Iztrūkst pagaidu katalogs.',
													7 => 'Kļūda, rakstot failu uz diska.',
													8 => 'Faila augšupielāde apturēta paplašinājuma dēļ.',
),

    'ERROR_HT_NO_WRITE'                         => 'Nevar rakstīt failā : %s',
    'ERROR_MANIFEST_TYPE'                       => 'Manifesta failā jābūt norādītam pakotnes veidam.',
    'ERROR_PACKAGE_TYPE'                        => 'Manifesta fails norāda uz neatpazītu pakotnes veidu: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Augšupielādētais fails nav saderīgs ar šo Sugar versiju:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Augšupielādētais fails nav saderīgs ar šo Sugar( Community Edition, Professional vai Enterprise) versiju.',

    'ERROR_UW_CONFIG_DB'                        => 'Error saving %s config var to the db (key %s, value %s).',
    'ERR_NOT_ADMIN'                             => "Neautorizēta piekļuve administratora funkcijām.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Jums nav atļauts piekļūt šai lapai.',

    'LBL_BUTTON_BACK'							=> 'Atgriezties',
	'LBL_BUTTON_CANCEL'							=> 'Atcelt',
	'LBL_BUTTON_DELETE'							=> 'Dzēst pakotni',
	'LBL_BUTTON_DONE'							=> 'Darīts',
	'LBL_BUTTON_EXIT'							=> 'Iziet',
	'LBL_BUTTON_INSTALL'						=> 'Jauninājuma pārbaude',
	'LBL_BUTTON_NEXT'							=> 'Turpināt',
	'LBL_BUTTON_RECHECK'						=> 'ATkārtot pārbaudi',
	'LBL_BUTTON_RESTART'						=> 'Restartēt',

	'LBL_UPLOAD_UPGRADE'						=> 'Ielādēt jauninājuma pakotni',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Augšupielādes fails nav atrasts',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Failu dublējums',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Šī jaununājuma failu dublējums atrodas',
	'LBL_UW_BACKUP'								=> 'Faila rezerves kopēšana',
	'LBL_UW_CANCEL_DESC'						=> 'Atjaunināšana ir atcelta. Visi nokopētie pagaidu un ielādētie jauninājuma faili ir izdzēsti.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Rakstzīmju kopas shēmas izmaiņas',
	'LBL_UW_CHECK_ALL'							=> 'Pārbaudīt visu',
	'LBL_UW_CHECKLIST'							=> 'Atjauninājuma soļi',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Pārrakstīto failu dublējums atrodas sekojošā katalogā:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Manuāli sapludināt sekojošus failus:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Atjaunināšanas process: Manuāla failu sapludināšana',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Variet lietot jebkuru jums pazīstamu salīdzināšanas metodi, lai sapludinātu šos failus. Kamēr tas nebūs izdarīts, jūsu SugarCRM instalācija būs nenoteiktā stāvoklī un atjaunināšana nebūs pabeigta.',
	'LBL_UW_COMPLETE'							=> 'Pabeigts',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Šai Sugar versijai ir jauns licences līgumu. Vai vēlaties to apskatīt?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Visas sistēmas uzstādījumu prasības ir izpildītas',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP uzstādijums: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL modulis',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP modulis',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings modulis',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload parametrs',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP iestatījums: Atmiņas limits',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP iestatījums: Plūsma',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimālā MySQL versija',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimālā datubāzes versija',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'php.ini atrašanās vieta',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimālā PHP versija',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP iestatījums: Drošais režīms',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Servera uzstādījumu pārbaude',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Atrastie uzstādījumi',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML parsēšana',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip atbalsts',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Faili veiksmīgi nokopēti',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Pielāgoto tabulu shēmas izmaiņas',

	'LBL_UW_DB_CHOICE1'							=> 'Atjauninājuma vednis izpilda SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Manuāli SQL vaicājumi',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT nenostrādāja - salīdzinātie rezultāti atšķiras',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Datubāzes tiesības',
	'LBL_UW_DB_ISSUES'							=> 'Datubāzes problēmas',
	'LBL_UW_DB_METHOD'							=> 'Datubāzes atjaunināšanas metode',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Visas tiesības pieejamas',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Nepieciešamās tiesības',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Ir uzstādītas sekojošas atjauninājumu pakotnes:',
	'LBL_UW_END_DESC'							=> 'Sistēma ir atjaunināta.',
	'LBL_UW_END_DESC2'							=> 'Ja esat izvēlējies manuāli izpildīt jebkādus soļus, piemēram, failu sapludināšanu vai SQL vaicājumus, dariet to tagad. Jūsu sistēma būs nestabila, kamēr šie soļi nebūs pabeigti.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Atjaunināšana ir pabeigta.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Spiediet Beigt, lai izietu no atjaunināšanas vedņa.',
	'LBL_UW_END_LOGOUT'							=> 'Ja vēlaties uzstādīt vēl kādu atjauninājuma pakotni, izmantojot atjaunināšanas vedni, vispirms izejiet no sistēmas un piesakieties vēlreiz.',
	'LBL_UW_END_LOGOUT2'						=> 'Iziet',
	'LBL_UW_REPAIR_INDEX'						=> 'Datubāzes veiktspējas uzlabošanai, izpildiet <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> skriptu.',

	'LBL_UW_FILE_DELETED'						=> "ir izņemts.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupa',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Failu pieejas tiesības',
	'LBL_UW_FILE_ISSUES'						=> 'Failu problēmas',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Failiem nepieciešama manuāla salīdzināšana',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Atļauts rakstīt visos failos</b>',
	'LBL_UW_FILE_OWNER'							=> 'Īpašnieks',
	'LBL_UW_FILE_PERMS'							=> 'Tiesības',
	'LBL_UW_FILE_UPLOADED'						=> 'ir ielādēts',
	'LBL_UW_FILE'								=> 'Faila nosaukums',
	'LBL_UW_FILES_QUEUED'						=> 'Sekojošas jauninājumu pakotnes ir gatavas uzstādīšanai:',
	'LBL_UW_FILES_REMOVED'						=> "Sekojoši faili tiks izņemti no sistēmas:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Spiediet Turpināt, lai ielādētu atjaunināšanas pakotni</b>",
	'LBL_UW_FROZEN'								=> 'Ielādējiet pakotni pirms turpināt.',
	'LBL_UW_HIDE_DETAILS'						=> 'Slēpt detaļas',
	'LBL_UW_IN_PROGRESS'						=> 'Procesā',
	'LBL_UW_INCLUDING'							=> 'Iekļaujot',
	'LBL_UW_INCOMPLETE'							=> 'Nepabeigts',
	'LBL_UW_INSTALL'							=> 'File INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Failu sapludināšana',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modulis ir gatavs atinstalēšanai. Spiediet \"Apstiprināt\", lai turpinātu atinstalēšanu.<br>",
	'LBL_UW_MODULE_READY'						=> "Modulis ir gatavs instalēšanai. Spiediet \"Apstiprināt\" lai turpinātu instalēšanu.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nav atrasti ieraksti par jauninājumiem.',
	'LBL_UW_NONE'								=> 'Neviens',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nav pieejams',
	'LBL_UW_OVERWRITE_DESC'						=> "Visi mainītie faili tiks pārrakstīti, tai skaitā arī visas koda izmaiņas un veidnēs veiktās izmaiņas. Vai esat drošs ka vēlaties turpināt?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Pārrakstīt visus failus',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuālā sapludināšana - Aizsargāt visu',
	'LBL_UW_OVERWRITE_FILES'					=> 'Sapludināšanas metode',
	'LBL_UW_PATCH_READY'						=> 'Labojums ir gatavs izpildei. Spiediet "Apstiprināt", lai pabeigtu atjaunināšanas procesu.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Paziņojums: Atrasti pielāgotie izkārtojumi</h2><br />Sekojošs fails(i) satur jaunus laukus vai ar Studio modificētus ekrāna izkārtojumus. Ielāps, kuru instalējat arī satur izmaiņas failos.<u>Katram failam</u> iespējamst:<br><ul><li>[<b>Noklusēts</b>] Paturēt esošo versiju, atstājot rūtiņu tukšu. Ielāpa modifikācijas tiks ignorētas.</li>vai<li>Pieņemt atjaunotos failus, atzīmējot rūtiņu. Jūsu izkārtojumi ir atkārtoti jāizmaina, lietojot Studio</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Vai izveidot uzdevumu manuālai sapludināšanai?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Sākotnējā pārbaude',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Ir atšķirības',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Vai nosūtīt jums atgādinājuma e-pastu par manuālu sapludināšanu?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Zemāk redzamie faili tiks modificēti. Noņemiet atzīmi failiem, kurus jāsapludina manuāli. <i>Ikvienai atrastai izkārtojuma izmaiņai atzīme automātiski ir noņemta; atzīmējiet tās, kuras nepieciešams pārrakstīt.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Manuāla sapludināšana nav nepieciešama.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nav nepieciešams.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automātiski aizsargāti faili:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Visas sākotnējās pārbaudes ir izpildītas.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Spiediet Tālāk, lai sistēmā iekopētu atjauninājuma failus.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Piezīme: </b> Visi turpmākie atjaunināšanas soļi ir obligāti un, izvēloties Turpināt, process ir jāizpilda līdz galam. Ja nevēlaties turpināt, spiediet Atcelt.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Pārslēgt visus failus',

	'LBL_UW_REBUILD_TITLE'						=> 'Pārģenerēt rezultātu',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Shēmas izmaiņas',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Parādīt atrastos uzstādījumus',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Parādīt trūkstošās datubāzes tiesības',
	'LBL_UW_SHOW_DETAILS'						=> 'Rādīt detaļas',
	'LBL_UW_SHOW_DIFFS'							=> 'Rādīt manuāli sapludināmos failus',
	'LBL_UW_SHOW_NW_FILES'						=> 'Rādīt failus ar nepareizām tiesībām',
	'LBL_UW_SHOW_SCHEMA'						=> 'Rādīt shēmas izmaiņu skriptu',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Rādīt nederīgus vaicājumus',
	'LBL_UW_SHOW'								=> 'Rādīt',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Izlaistie faili',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Izlaižam faila pārrakstīšanu - atzīmēta manuāla sapludināšana.',
	'LBL_UW_SQL_RUN'							=> 'Pārbaudīt, kad manuāli tiek palaisti SQL',
	'LBL_UW_START_DESC'							=> 'Vednis jums palīdzēs atjaunināt Sugar instanci.',
	'LBL_UW_START_DESC2'						=> 'Piezīme: Iesakām pirms produkcijas sistēmas atjaunināšanas izveidot dublējumu Sugar datu bāzei un sistēmas failiem (visiem failiem, kas atrodas SugarCRM katalogā). Stingri iesakām vispirms izmēģināt atjaunināšanu ar produkcijas sistēmas kopiju.',
	'LBL_UW_START_DESC3'						=> 'Spiediet Turpināt, lai sāktu sistēmas pārbaudi, kas nepieciešama, lai pārliecinātos, ka sistēma ir gatava atjaunināšanai. Tiks pārbaudītas tiesības uz failiem, datubāzes tiesības un servera iestatījumi.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Jaunais atjauninājumu vednis tūlīt atsāks procesu. Lūdzu turpiniet atjaunināšanu.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Sveicināti jaunajā atjaunināšanas vednī',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Notiek pārbaude, lūdzu uzgaidiet. Tā var turpināties līdz pat 30 sekundēm.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Tiek meklēti visi pārbaudei atbilstošie faili',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Faili',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Atrasts',

	'LBL_UW_TITLE_CANCEL'						=> 'Atcelt',
	'LBL_UW_TITLE_COMMIT'						=> 'Apstiprināt atjaunināšanu',
	'LBL_UW_TITLE_END'							=> 'Iztaujāt',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Sākotnējā pārbaude',
	'LBL_UW_TITLE_START'						=> 'Sveiki',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Sistēmas pārbaude',
	'LBL_UW_TITLE_UPLOAD'						=> 'Ielādēt pakotni',
	'LBL_UW_TITLE'								=> 'Atjauninājuma vednis',
	'LBL_UW_UNINSTALL'							=> 'Atinstalēt',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Akceptēt licenci',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Konvertēt licenci',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Atjauninātie/Modificētie moduļi',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Sekojošos moduļos ir konstatētas modifikācijas un tie ir pasargāti no izmaiņām',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Sekojošos moduļos ir konstatētas ar Studio veiktas modifikācijas un tie tiks atjaunināti',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Notiek atjaunināšanas uzsākšana',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Notiek sistēmas pārbaude',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Notiek licences pārbaude',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Notiek sākotnējā pārbaude',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Kopē failus',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Notiek atjauninājumu apstiprināšana',
    'LBL_UW_COMMIT_DESC'						=> 'Spiediet Turpināt, lai palaistu atjauninājuma papildus skriptus.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Izpilda atjauninājuma skriptus',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Veido atjauninājuma kopsavilkumu',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'procesā',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Laiks, kas pagājis',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Atjaunināšana atcelta un notiek sakopšana',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Atjaunināšana var aizņemt noteiktu laiku',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Notiek augšupielādes pārbaudes',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Notiek jauninājuma pakotnes ielāde',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Vai vēlaties, lai Sugar izdzēš novecojušo 451 shēmu?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Atjauninājuma vednis dzēš veco 451 shēmu',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Manuāla shēmu dzēšana pēc atjaunināšanas',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Veco shēmu dzēšanas metode',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Parādīt vecās shēmas, kas var tikt izdzēstas',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Izlaistie vaicājumi',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Ir nepieciešama PHP 5. versija vai jaunāka.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Sugar neatbalsta jūsu PHP versiju. Jums ir jāuzstāda Sugar programmai atbilstoša versija. Lūdzu skatīties PHP atbilstības matricu laidiena piezīmēs. Jūsu pašreizējā versija ir',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php lejupsaderība ar iepriekšējām versijām ir aktivizēta. Uzstādiet zend.ze1_compatibility_mode uz Off, lai turpinātu',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Darbība',
    'LBL_ML_CANCEL'             => 'Atcelt',
    'LBL_ML_COMMIT'=>'Izpildīt',
    'LBL_ML_DESCRIPTION' => 'Apraksts',
    'LBL_ML_INSTALLED' => 'Instalēšanas datums',
    'LBL_ML_NAME' => 'Nosaukums',
    'LBL_ML_PUBLISHED' => 'Publicēšanas datums',
    'LBL_ML_TYPE' => 'Tips',
    'LBL_ML_UNINSTALLABLE' => 'Atinstalējams',
    'LBL_ML_VERSION' => 'Versija',
	'LBL_ML_INSTALL'=>'Instalēt',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Sekotājs',
	'LBL_CURRENT_PHP_VERSION' => '(Jūsu pašreizējā php versija ir',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Ieteicamā php versija ir  5.2.1 vai jaunāka)',
	'LBL_MODULE_NAME' => 'Jauninājuma vednis',
	'LBL_MODULE_NAME_SINGULAR' => 'Jauninājuma vednis',
	'LBL_UPLOAD_SUCCESS' => 'Jauninājuma pakotne veiksmīgi ielādēta. Spiediet turpināt, lai veiktu nobeiguma pārbaudi.',
	'LBL_UW_TITLE_LAYOUTS' => 'Apstiprināt izkārtojumus',
	'LBL_LAYOUT_MODULE_TITLE' => 'Izkārtojumi',
	'LBL_LAYOUT_MERGE_DESC' => 'Ir pieejami jauni lauki, kuri ir pievienoti kā daļa no jauninājuma, un var tikt pievienoti esošajiem moduļu izkārtojumiem.  Lai uzzinātu vairāk par jaunajiem laukiem, lūdzu aplūkojiet laidiena piezīmes versijai uz kuru jūs veicat uzlabošanu.<br><br> Ja nevēlaties pievienot jaunos laukus, lūdzu neatzīmējiet moduli, un jūsu pielāgotie izkārtojumi paliks neizmainīti. Pēc jauninājuma uzstādīšanas lauki būs pieejami Studio. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Spiediet turpināt, lai apstiprinātu izmaiņas un pabeigtu atjaunināšanu.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Spiediet turpināt, lai pabeigtu atjaunināšanu.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Apstiprināt izkārtojumus',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Apstiprināt izkārtojuma rezultātus',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Sekojoši izkārtojumi ir veiksmīgi sapludināti:',
	'LBL_SELECT_FILE' => 'Izvēlieties failu:',
	'LBL_LANGPACKS' => 'Valodas pakas' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Moduļa ielādētājs' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Labojumi' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Tēmas' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Darbplūsma' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Atjaunināšana' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Apstrāde' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globāli redzams',
);
