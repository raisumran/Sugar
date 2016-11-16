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
	'DESC_MODULES_INSTALLED'					=> 'Nämä moduulit on asennettu:',
	'DESC_MODULES_QUEUED'						=> 'Nämä moduulit ovat valmiina asennettavaksi:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Ei pystytä määrittämään ryhmää',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Ei pystytä määrittämään omistajaa',
	'ERR_UW_CONFIG_WRITE'						=> 'Virhe päivitettäessä config.php:tä uudella versiotiedolla.',
	'ERR_UW_CONFIG'								=> 'Varmista, että config.php on kirjoitettavissa ja päivitä tämä sivu.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Hakemisto ei ole kirjoitettavissa',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Tiedostoa ei kopioitu',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Ongelma paketin poistossa',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Tiedostoa ei pystytty lukemaan.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Tiedostoon ei voida kirjoittaa tai siirtää',
	'ERR_UW_FLAVOR_2'							=> 'Päivitä versio:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM -järjestelmän versio:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log -tiedostoa ei voitu luoda tai siihen ei voitu kirjoittaa. Korjaa SugarCRM-hakemistosi tiedosto-oikeudet.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload -arvo on suurempi kuin 1. Korjaa tämä php.ini -tiedostossasi ja käynnistä web-palvelin uudestaan.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM vaatii MySQL-version 4.1.2 tai uudemman. Löydettiin:',
	'ERR_UW_OCI8_VERSION'				        => 'Sugar ei tue sinun Oracle-versiotasi. Sinun pitää asentaa versio Sugarin kanssa yhteensopiva versio. Katso julkaisutiedoissa oleva yhteensopivuusmatriisi. Nykyinen versio:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Määritä tiedosto ja yritä uudestaan!',
	'ERR_UW_NO_FILES'							=> 'Tapahtui virhe, ei löydetty tarkistettavia tiedostoja.',
	'ERR_UW_NO_MANIFEST'						=> 'Zip-tiedostosta puuttuu manifest.php-tiedosto. Ei voida jatkaa.',
	'ERR_UW_NO_VIEW'							=> 'Virheellinen näkymä määritetty.',
	'ERR_UW_NO_VIEW2'							=> 'Näkymää ei ole määritetty. Mene hallinnan etusivulle navigoidaksesi tälle sivulle.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Kelpaamaton lataus.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Ei voitu luoda väliaikaishakemistoa. Varmista tiedosto-oikeudet.',
	'ERR_UW_ONLY_PATCHES'						=> 'Voit ladata vain korjaustiedostoja tällä sivulla.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Havaittiin virheitä Preflight-tarkistuksen aikana',
	'ERR_UW_UPLOAD_ERR'							=> 'Tiedoston lataamisessa tapahtui virhe. Yritä myöhemmin uudelleen!<br/>',
	'ERR_UW_VERSION'							=> 'SugarCRM-järjestelmän versio:',
    'ERR_UW_WRONG_TYPE'							=> 'Tämä sivu ei ole suoritusta varten',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Ladattu tiedosto ylittää suurimman php.ini:n upload_max_filesize -asetuksessa määritetyn tiedostokoon.',
													2 => 'Ladattu tiedosto ylittää suurimman HTML-sivun MAX_FILE_SIZE -ohjearvossa määritetyn tiedostokoon.',
													3 => 'Ladattava tiedosto ladattiin palvelimelle vain osittain.',
													4 => 'Tiedostoa ei ladattu.',
													5 => 'Tuntematon virhe',
													6 => 'Puuttuva väliaikaishakemisto.',
													7 => 'Levylle kirjoittaminen epäonnistui.',
													8 => 'Lisäosa pysäytti lataamisen.',
),

    'ERROR_HT_NO_WRITE'                         => 'Ei pystytä kirjoittamaan tiedostoon %s',
    'ERROR_MANIFEST_TYPE'                       => 'Manifestitiedoston tulee määrittää pakkaustyyppi.',
    'ERROR_PACKAGE_TYPE'                        => 'Manifestitiedosto määrittää tuntemattoman pakkaustyypin ‘%s’',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Ladattu tiedosto ei ole yhteensopiva tämän Sugarin version kanssa:&nbsp;%s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Ladattu tiedosto ei ole yhteensopiva tämän Sugarin version (Community Edition, Professional tai Enterprise) kanssa:&nbsp;%s',

    'ERROR_UW_CONFIG_DB'                        => 'Tapahtui virhe tallennettaessa konfigurointiarvoa %s tietokantaan (avain %s, arvo %s).',
    'ERR_NOT_ADMIN'                             => "Ylläpitoliittymään pääsy estetty.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Sinulla ei ole oiketta päästä tälle sivulle.',

    'LBL_BUTTON_BACK'							=> '&larr; Takaisin',
	'LBL_BUTTON_CANCEL'							=> 'Peruuta',
	'LBL_BUTTON_DELETE'							=> 'Poista pakkaus',
	'LBL_BUTTON_DONE'							=> 'Tehty',
	'LBL_BUTTON_EXIT'							=> 'Poistu',
	'LBL_BUTTON_INSTALL'						=> 'Preflight -päivitys',
	'LBL_BUTTON_NEXT'							=> 'Seuraava &rarr;',
	'LBL_BUTTON_RECHECK'						=> 'Tarkista uudelleen',
	'LBL_BUTTON_RESTART'						=> 'Aloita alusta',

	'LBL_UPLOAD_UPGRADE'						=> 'Lataa päivityspakkaus',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Ladattavaa tiedostoa ei löytynyt',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Tiedostojen varmuuskopiointi',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Tämän päivityksen varmuuskopioidut tiedostot löytyvät polusta',
	'LBL_UW_BACKUP'								=> 'Tiedosto VARMUUSKOPIO',
	'LBL_UW_CANCEL_DESC'						=> 'Päivitykset on peruutettu. Mahdollisesti kopioidut tilapäistiedostot ja ladatut päivitystiedostot on poistettu.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Merkistön skeemamuutokset',
	'LBL_UW_CHECK_ALL'							=> 'Tarkista kaikki',
	'LBL_UW_CHECKLIST'							=> 'Päivityksen vaiheet',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Ylikirjoitettujen tiedostojen varmuuskopiot ovat seuraavassa kansiossa:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Yhdistä seuraavat tiedostot käsin:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Asennusprosessi: manuaalisesti yhdistä tiedostoja',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Käytä sinulle tutuinta diff-menetelmää näiden tiedostojen yhdistämiseen. Kunnes tämä on valmis, SugarCRM-asennuksesi on epävarmassa tilassa ja asennus kesken.',
	'LBL_UW_COMPLETE'							=> 'Valmis',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Tämä Sugarin uusi versio sisältää uuden lisenssisopimuksen. Jatketaanko?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Kaikki järjestelmävaatimukset tyydytetty.',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP-asetus: kutsunaikainen parametrin anto viitteenä (call time pass by reference)',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL-moduuli',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP-moduuli',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings-moduuli',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload -parametri',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP-asetus: muistirajoitus',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP-asetus: stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic-Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimi MySQL-versio',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimi tietokantaversio',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'php.ini -tiedoston sijainti',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'PHP:n minimiversio',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP-asetus: vikasietotila',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Palvelimen asetusten tarkistus',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Havaittiin asetukset',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML-jäsennys',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip-tuki',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Tiedostot kopioitiin',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Mukautetun taulun skeema muuttuu',

	'LBL_UW_DB_CHOICE1'							=> 'Päivitystyökalu suorittaa SQL:n',
	'LBL_UW_DB_CHOICE2'							=> 'Manuaaliset SQL-kyselyt',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT epäonnistui - verratut tulokset poikkeavat',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Tietokannan oikeudet',
	'LBL_UW_DB_ISSUES'							=> 'Tietokannan ongelmat',
	'LBL_UW_DB_METHOD'							=> 'Tietokannan päivitysmenetelmä',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Kaikki oikeudet saatavilla',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Vaadittu etuoikeus',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Seuraavat päivityspaketit on asennettu:',
	'LBL_UW_END_DESC'							=> 'Järjestelmä on päivitetty.',
	'LBL_UW_END_DESC2'							=> 'Jos valitsit tehdä manuaalisesti jotkin vaiheet, kuten tiedostojen yhdistämisen tai SQL-kyselyt, tee ne nyt. Järjestelmäsi on epävakaassa tilassa kunnes nuo vaiheet on tehty.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Päivitys on valmis.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Napsauta Valmis poistuaksesi päivitystyökalusta.',
	'LBL_UW_END_LOGOUT'							=> 'Jos aiot päivitää toisen paketin päivitystyökalulla, kirjaudu ulos ja kirjaudu jälleen sisään ennen kuin teet niin.',
	'LBL_UW_END_LOGOUT2'						=> 'Kirjaudu ulos',
	'LBL_UW_REPAIR_INDEX'						=> 'Tietokannan suorituskyvyn parantamiseksi, suorita <a href=&#39;index.php?module=Administration&action=RepairIndex&#39; target=&#39;_blank&#39;>Korjaa indeksi</a> -skripti.',

	'LBL_UW_FILE_DELETED'						=> "on poistettu.<br/>",
	'LBL_UW_FILE_GROUP'							=> 'Ryhmä',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Tiedosto-oikeudet',
	'LBL_UW_FILE_ISSUES'						=> 'Tiedosto-ongelmat',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Tiedosto vaatii manuaalisen diff:auksen',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Kaikki tiedostot kirjoitettavissa</b>',
	'LBL_UW_FILE_OWNER'							=> 'Omistaja',
	'LBL_UW_FILE_PERMS'							=> 'Oikeudet',
	'LBL_UW_FILE_UPLOADED'						=> 'on ladattu',
	'LBL_UW_FILE'								=> 'Tiedostonimi',
	'LBL_UW_FILES_QUEUED'						=> 'Seuraavat päivityspaketit ovat valmiina asennettaviksi:',
	'LBL_UW_FILES_REMOVED'						=> "Seuraavat tiedostot tullaan poistamaan järjestelmästä:<br/>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Paina Seuraava jatkaaksesi pakettien päivittämistä.</b>",
	'LBL_UW_FROZEN'								=> 'Lataa paketti ennen jatkamista.',
	'LBL_UW_HIDE_DETAILS'						=> 'Piilota tiedot',
	'LBL_UW_IN_PROGRESS'						=> 'Käynnissä',
	'LBL_UW_INCLUDING'							=> 'Mukaan lukien',
	'LBL_UW_INCOMPLETE'							=> 'Kesken',
	'LBL_UW_INSTALL'							=> 'Tiedosto ASENNUS',
	'LBL_UW_MANUAL_MERGE'						=> 'Tiedoston yhdistys',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Moduuli on valmis poistettavaksi. Napsauta ‘Commit’ jatkaaksesi poistamista.<br/>",
	'LBL_UW_MODULE_READY'						=> "Moduuli on valmis asennettavaksi. Napsauta ‘Commit’ jatkaaksesi asentamista.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Ei havaittu kirjattuja päivityksiä.',
	'LBL_UW_NONE'								=> 'Ei mitään',
	'LBL_UW_NOT_AVAILABLE'						=> 'Ei saatavilla',
	'LBL_UW_OVERWRITE_DESC'						=> "Kaikki muuttuneet tiedostot ylikirjoitetaan, mukaanlukien kaikki koodimuutokset ja mallien muutokset, jotka olet tehnyt. Oletko varma, että haluat jatkaa?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Korvaa kaikki tiedostot',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuaalinen yhdistäminen - Säilytä kaikki',
	'LBL_UW_OVERWRITE_FILES'					=> 'Yhdistämisen menetelmä',
	'LBL_UW_PATCH_READY'						=> 'Korjaus on valmiina jatkamaan. Paina ‘Commit’-painiketta päättääksesi päivitysprosessin.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Huomautus: Mukautettuja asetteluja löydetty<h2><br />Seuraavissa tiedostoissa on uusia kenttiä tai muuttuneita asetteluja, jotka luotiin Studiossa. Korjaus, jonka aiot asentaa, muuttaa näitä tiedostoja. <u>Jokaiselle tiedostolle</u> voit:<br><ul><li>[<b>Oletus</b>] Säilyttää oman versiosi jättämällä valintaruudun tyhjäksi. Korjaustiedoston muutokset ohitetaan.</li>tai <li>Hyväksyä päivitetyt tiedostot valitsemalla valintaruutu. Muutoksesi pitää luoda uudestaan Studion kautta.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Luo tehtävämerkintä manuaaliselle tiedostojen yhdistämiselle?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Preflight-tarkistus',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Eriytetyt',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Lähetä itsellesi muistutus manuaalisesta tiedostojen yhdistämisestä?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Alla olevia tiedostoja on muutettu. Poista merkintä niistä kohteista, jotka vaativat manuaalisen tiedostonyhdistyksen. <i>Kaikki havaitut asettelumuutokset jätetään automaattisesti merkitsemättä. Merkitse ne, jotka tulisi korvata.</i>',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Manuaalista tiedostojen yhdistämistä ei tarvita.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Ei tarvita.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automaattisesti säilytetyt tiedostot:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Kaikki Preflight-testit päättyivät.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Klikkaa Seuraava kopioidaksesi päivitetyt tiedostot järjestelmään.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Huomaa: </b> Loput päivitysprosessista on pakko suorittaa, ja painamalla Seuraava joudut suorittamaan prosessin loppuun saakka. Jos et halua jatkaa, klikkaa Peruuta.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Muuta kaikkien tiedostojen valintaa.',

	'LBL_UW_REBUILD_TITLE'						=> 'Jälleenrakenna tulos',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Skeeman muutokset',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Näytä havaitut asetukset',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Näytä puuttuvat tietokantaoikeudet',
	'LBL_UW_SHOW_DETAILS'						=> 'Näytä yksityiskohdat',
	'LBL_UW_SHOW_DIFFS'							=> 'Näytä manuaalista yhdistämistä vaativat tiedostot',
	'LBL_UW_SHOW_NW_FILES'						=> 'Näytä tiedostot, joilla on virheelliset oikeudet',
	'LBL_UW_SHOW_SCHEMA'						=> 'Näytä skeeman muutosskripti',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Näytä kelpaamattomat kyselyt',
	'LBL_UW_SHOW'								=> 'Näytä',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Ohitetut tiedostot',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Ohitetaan tiedoston korvaamiset - manuaalinen tiedostonyhdistys valittu.',
	'LBL_UW_SQL_RUN'							=> 'Tarkista, kun SQL on ajettu manuaalisesti.',
	'LBL_UW_START_DESC'							=> 'Tämä työkalu auttaa sinua tämän Sugar-instanssin päivittämisessä.',
	'LBL_UW_START_DESC2'						=> 'Huomaa: Suosittelemme, että varmuuskopioit Sugar-tietokannan ja järjestelmätiedostot (kaikki tiedostot SugarCRM kansiossa) ennen tuotantojärjestelmän päivitystä. Suosittelemme vahvasti, että suoritat testipäivityksen tuotantojärjestelmästäsi kloonatulla instanssilla.',
	'LBL_UW_START_DESC3'						=> 'Klikkaa Seuraava suorittaaksesi järestelmätarkistuksen, jotta voidaan varmistaa, että järjestelmä on valmiina päivitykseen. Järjestelmätarkistus tarkistaa tiedosto-oikeudet, tietokantaoikeudet ja palvelinasetukset.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Päivitystyökalu jatkaa nyt päivitystä. Jatka päivitystäsi.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Tervetuloa uuteen päivitystyökaluun',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Tarkastetaan nyt, odota. Tämä voi kestää 30 sekuntia.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Haetaan kaikki olennaiset tiedostot tarkistettaviksi.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Tiedostoa',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Löytyi',

	'LBL_UW_TITLE_CANCEL'						=> 'Peruuta',
	'LBL_UW_TITLE_COMMIT'						=> 'Committaa päivitys',
	'LBL_UW_TITLE_END'							=> 'Tiedota',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Preflight-tarkistus',
	'LBL_UW_TITLE_START'						=> 'Tervetuloa',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Järjestelmätarkistus',
	'LBL_UW_TITLE_UPLOAD'						=> 'Lataa Paketti',
	'LBL_UW_TITLE'								=> 'Päivitystyökalu',
	'LBL_UW_UNINSTALL'							=> 'Poista',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Hyväksy lisenssi',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Muunna lisenssi',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Päivitetyt/mukautetut moduulit',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Seuraavat moduulit havaittiin muuttuneiksi ja säilytettiin',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Seuraavat moduulit tunnistettiin Studiossa muokatuiksi ja on päivitetty',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Käynnistys käynnissä',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Järjestelmän tarkistus käynnissä',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Lisenssitarkistus käynnissä',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight-tarkistus käynnissä',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Tiedoston kopiointi käynnissä',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Päivityksen commitointi käynnissä',
    'LBL_UW_COMMIT_DESC'						=> 'Klikkaa Seuraava suorittaaksesi lisää päivitysskriptejä.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Päivitysskriptit käynnissä',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Päivityksen yhteenveto käynnissä',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'käynnissä',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Kulunut aika',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Päivityksen peruutus ja siivous käynnissä',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Päivitys voi kestää jonkin aikaa',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Latauksen tarkistus käynnissä',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Ladataan päivityspakettia',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Haluaisitko Sugarin pudottavan vanhentuneen 451-skeeman?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Päivitystyökalu pudottaa vanhan 451-skeeman',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Pudota skeema manuaalisesti asennuksen jälkeen',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Vanha skeeman pudottamismenetelmä',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Näytä vanhat skeemat, jotka voitaisiin poistaa',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Ohitetut kyselyt',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'PHP:n versio 5 tai uudempi vaaditaan.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Sugar ei tue PHP-versiotasi. Sinun pitää asentaa versio Sugarin kanssa yhteensopiva versio. Katso julkaisutiedoissa olevaa yhteensopivuusmatriisia tuetuille PHP-versioille. Sinun versiosi on',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'PHP:n taaksepäin-yhteensopivuustila on päällä. Aseta zend.ze1_compatibility_mode arvoon Off, jotta voit jatkaa',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Toiminto',
    'LBL_ML_CANCEL'             => 'Peruuta',
    'LBL_ML_COMMIT'=>'Commit',
    'LBL_ML_DESCRIPTION' => 'Kuvaus',
    'LBL_ML_INSTALLED' => 'Asennuspäivämäärä',
    'LBL_ML_NAME' => 'Nimi',
    'LBL_ML_PUBLISHED' => 'Julkaisupäivämäärä',
    'LBL_ML_TYPE' => 'Tyyppi',
    'LBL_ML_UNINSTALLABLE' => 'Poistettavissa',
    'LBL_ML_VERSION' => 'Versio',
	'LBL_ML_INSTALL'=>'Asenna',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Seuraaja',
	'LBL_CURRENT_PHP_VERSION' => '(Nykyinen PHP-versiosi on',
	'LBL_RECOMMENDED_PHP_VERSION' => '. Suositeltu PHP:n versio on 5.2.1 tai uudempi)',
	'LBL_MODULE_NAME' => 'Päivitystyökalu',
	'LBL_MODULE_NAME_SINGULAR' => 'Päivitystyökalu',
	'LBL_UPLOAD_SUCCESS' => 'Päivityspakkaus ladattiin. Klikkaa Seuraava suorittaaksesi viimeisen tarkistuksen.',
	'LBL_UW_TITLE_LAYOUTS' => 'Vahvista asettelut',
	'LBL_LAYOUT_MODULE_TITLE' => 'Asettelut',
	'LBL_LAYOUT_MERGE_DESC' => 'Saatavilla on uusia kenttiä, jotka lisättiin osana tätä päivitystä, ja jotka voidaan automaattisesti liittää moduuliesi asetteluihin. Saadaksesi lisätietoja näistä uusista kentistä katso päivitettävän version Julkaisutiedot.<br/><br/>Jos et halua liittää uusia kenttiä, poista moduulin valinta, ja asettelusi säilyvät muuttumattomina. Kentät ovat saatavilla Studiossa päivityksen jälkeen.<br/><br/>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Klikkaa Seuraava vahvistaaksesi muutokset ja päättääksesi päivityksen.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Klikkaa Seuraava päättääksesi päivityksen.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Vahvista asettelut',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Vahvista asettelun tulokset',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Seuraavat asettelut yhdistettiin:&nbsp;',
	'LBL_SELECT_FILE' => 'Valitse tiedosto:',
	'LBL_LANGPACKS' => 'Kielipaketit' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Moduulilataaja' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Korjauspäivitykset' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Teema:' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Work flow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Päivitys' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Käsitellään' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globaalisti näkyvä',
);
