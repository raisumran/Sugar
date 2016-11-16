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
	'DESC_MODULES_INSTALLED'					=> 'Die folgenden Module wurden installiert:',
	'DESC_MODULES_QUEUED'						=> 'Die folgenden Module können installiert werden:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Gruppe kann nicht bestimmt werden',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Besitzer kann nicht bestimmt werden',
	'ERR_UW_CONFIG_WRITE'						=> 'Fehler beim Aktualisieren der config.php mit neuen Versionsinformationen.',
	'ERR_UW_CONFIG'								=> 'Bitte setzten Sie Schreibrechte für die config.php Datei und laden Sie diese Seite erneut.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Verzeichnis nicht beschreibbar',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Datei nicht kopiert',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem beim Entfernen eines Paketes',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Datei kann nicht gelesen werden.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Datei kann nicht verschoben oder geschrieben werden',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Edition:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM System Edition:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log konnte nicht erstellt/geschrieben werden. Bitte überprüfen Sie die Berechtigungen in Ihrem Sugar Verzeichnis.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload ist höher als 1. Bitte in der php.ini ändern und danach den Webserver neu starten.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM benötigt MySQL Version 4.1.2 oder neuer. Gefunden:',
	'ERR_UW_OCI8_VERSION'				        => 'Ihre Oracle Version ist mit Sugar nicht kompatibel. Bitte eine kompatible Version installieren. Bitte die Compatabilty Matrix in der Release Notes anschauen.',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Bitte geben Sie eine Datei an und versuchen Sie es erneut!',
	'ERR_UW_NO_FILES'							=> 'Ein Fehler ist aufgetreten, keine Dateien für die Überprüfung gefunden.',
	'ERR_UW_NO_MANIFEST'						=> 'In der zip Datei fehlt die manifest.php Datei. Kann nicht fortsetzen.',
	'ERR_UW_NO_VIEW'							=> 'Ungültige Ansicht angegeben.',
	'ERR_UW_NO_VIEW2'							=> 'Sicht nicht definiert. Bitte gehen Sie auf die Administrations Home Ansicht um auf diese Seite zu gelangen.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Kein gültiges Upload.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Das temporäre Verzeichnis konnte nicht erstellt werden. Dateiberechtigungen überprüfen.',
	'ERR_UW_ONLY_PATCHES'						=> 'Auf dieser Seite können Sie nur Patches hochladen.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Fehler gefunden während den letzten Kontrollen',
	'ERR_UW_UPLOAD_ERR'							=> 'Beim Upload der Datei ist ein Fehler aufgetreten, bitte versuchen Sie es erneut!<br>\\n',
	'ERR_UW_VERSION'							=> 'SugarCRM System Version:',
    'ERR_UW_WRONG_TYPE'							=> 'Diese Seite ist nicht zum Anzeigen',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Die hochgeladene Datei ist größer als upload_max_filesize in php.ini.',
													2 => 'Die hochgeladene Datei ist größer als die MAX_FILE_SIZE Direktive, die im HTML Fomular angegeben wurde.',
													3 => 'Die hochgeladene Datei wurde nur teilweise hochgeladen.',
													4 => 'Keine Datei hochgeladen.',
													5 => 'Unbekannter Fehler.',
													6 => 'Ein temporäres Verzeichnis fehlt.',
													7 => 'Datei konnte nicht geschrieben werden.',
													8 => 'Datei-Upload gestoppt wegen Datei Erweiterung.',
),

    'ERROR_HT_NO_WRITE'                         => 'Datei: %s kann nicht geschrieben werden',
    'ERROR_MANIFEST_TYPE'                       => 'Die Manifest-Datei muss den Typ der Anwendung spezifizieren.',
    'ERROR_PACKAGE_TYPE'                        => 'Manifest-Datei spezifiziert einen unbekannten Anwendungstyp: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Die geladene Datei ist nicht mit dieser Sugar Version kompatibel:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Die hochgeladene Datei ist nicht kompatibel mit dieser Sugar Edition (Community Edition, Professional oder Enterprise).:',

    'ERROR_UW_CONFIG_DB'                        => 'Fehler beim Abspeichern des Konfigurationswertes %s in die Datenbank (key %s, value %s).',
    'ERR_NOT_ADMIN'                             => "Nicht authorisierter Zugriff auf die Administration",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Sie haben nicht die entsprechenden Benutzerrechte um diese Seite zu sehen',

    'LBL_BUTTON_BACK'							=> 'Zurückgehen',
	'LBL_BUTTON_CANCEL'							=> 'Abbrechen',
	'LBL_BUTTON_DELETE'							=> 'Paket löschen',
	'LBL_BUTTON_DONE'							=> 'Fertig',
	'LBL_BUTTON_EXIT'							=> 'Logout',
	'LBL_BUTTON_INSTALL'						=> 'Letzte Kontrollen',
	'LBL_BUTTON_NEXT'							=> 'Fortfahren',
	'LBL_BUTTON_RECHECK'						=> 'Nachprüfung',
	'LBL_BUTTON_RESTART'						=> 'Neustart',

	'LBL_UPLOAD_UPGRADE'						=> 'Upgrade hochladen:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Upload Datei nicht gefunden',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Datei Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Gesicherte Dateien von diesem Upgrade finden Sie in',
	'LBL_UW_BACKUP'								=> 'Datei BACKUP',
	'LBL_UW_CANCEL_DESC'						=> 'Der Aktualisierungs Assistent wurde abgebrochen. Alle temporären Dateien und die hochgeladene zip Datei wurden gelöscht.<br><br>Klicken Sie auf &#39;Fertig&#39; um den Aktualisierungs Assistenten neu zu starten.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Zeichensatz Schema Änderungen',
	'LBL_UW_CHECK_ALL'							=> 'Alle markieren',
	'LBL_UW_CHECKLIST'							=> 'Upgrade Schritte',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Sicherungen der überschriebenen Dateien sind in folgendem Verzeichnis:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Führen Sie die folgenden Dateien manuell zusammen:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Upgrade Prozess: Dateien manuell zusammenführen',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Bitte benutzen Sie eine vertraute Methode um diese Dateien zusammenzuführen. Bis dieser Schritt fertig ist, ist Ihre SugarCRM Installation in einem instabilen Zustand und die Aktualisierung ist nicht beendet.',
	'LBL_UW_COMPLETE'							=> 'Fertig',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Diese Sugar Version enthält eine neue Lizenzvereinbarung. Wollen Sie fortfahren?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Alle erforderlichen System Einstellungen erfüllt',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Einstellungen: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL Modul',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP Modul',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Modul',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP Einstellungen: Memory Limit',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Einstellung: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimale MySQL Version',
    'LBL_UW_COMPLIANCE_DB'                      => 'Mindest Datenbank Version',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Speicherort der php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Minimale PHP Version',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP Einstellungen: Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Server Einstellungen Check',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Gefundene Einstellungen',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML Parsing',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Unterstützung',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Dateien erfolgreich kopiert',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Eigene Tabellen Schema Änderungen',

	'LBL_UW_DB_CHOICE1'							=> 'Aktualisierungs Assistent führt SQL durch',
	'LBL_UW_DB_CHOICE2'							=> 'Manuelle SQL Abfragen',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT fehlgeschlagen - verglichene Resultate unterschiedlich',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Datenbank Berechtigungen',
	'LBL_UW_DB_ISSUES'							=> 'Datenbank Issues',
	'LBL_UW_DB_METHOD'							=> 'Datenbank Aktualisierungsmethode',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Alle Berechtigungen verfügbar',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Notwendige Berechtigungen',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Die folgenden Upgrades wurden installiert:',
	'LBL_UW_END_DESC'							=> 'Gratulation, Ihr System ist jetzt aktualisiert.',
	'LBL_UW_END_DESC2'							=> 'Falls Sie einige Schritte manuell durchzuführen - wie Dateizusammenführungen oder SQL Abfragen - tun Sie dies jetzt. Ihr System ist in einem instabilen Zustand bis Sie diese Schritte durchgeführt haben.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Der Update ist fertig',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Fertig auswählen um den Update Assistent zu verlassen',
	'LBL_UW_END_LOGOUT'							=> 'Bitte melden Sie sich von Ihrem Konto ab, falls Sie planen weiter als dieser Patch/Upgarde Level zu aktualisieren.',
	'LBL_UW_END_LOGOUT2'						=> 'Abmelden',
	'LBL_UW_REPAIR_INDEX'						=> 'Für eine verbesserte Leistung der Datenbank, führen Sie bitte das <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> Script aus.',

	'LBL_UW_FILE_DELETED'						=> "wurde entfernt.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Gruppe',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Datei Berechtigungen',
	'LBL_UW_FILE_ISSUES'						=> 'Datei Issues',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Datei benötigt manuellen Vergleich',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Alle Dateien schreibbar</b>',
	'LBL_UW_FILE_OWNER'							=> 'Eigentümer',
	'LBL_UW_FILE_PERMS'							=> 'Berechtigungen',
	'LBL_UW_FILE_UPLOADED'						=> 'wurde hochgeladen',
	'LBL_UW_FILE'								=> 'Dateiname',
	'LBL_UW_FILES_QUEUED'						=> 'Die folgenden Upgrades können lokal installiert werden:',
	'LBL_UW_FILES_REMOVED'						=> "Die folgenden Dateien werden aus dem System entfernt:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "Drücken sie auf Weiter um das Upgrade Paket hochzuladen",
	'LBL_UW_FROZEN'								=> 'Die erforderlichen Schritte müssen beendet werden bevor Sie weitermachen können.',
	'LBL_UW_HIDE_DETAILS'						=> 'Details verstecken',
	'LBL_UW_IN_PROGRESS'						=> 'In Bearbeitung',
	'LBL_UW_INCLUDING'							=> 'Einschließend',
	'LBL_UW_INCOMPLETE'							=> 'Unvollständig',
	'LBL_UW_INSTALL'							=> 'Datei INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Datei zusammenführen',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Das Modul kann nun de-installiert werden. Klicken Sie auf \\&#39;Ausführen\\&#39; um mit der Installation fortzufahren.<br>",
	'LBL_UW_MODULE_READY'						=> "Das Modul kann nun installiert werden. Klicken Sie auf \\&#39;Ausführen\\&#39; um mit der Installation fortzufahren.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Keine aufgezeichneten Upgrades gefunden.',
	'LBL_UW_NONE'								=> 'nichts',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nicht verfügbar',
	'LBL_UW_OVERWRITE_DESC'						=> "Alle geänderten Dateien werden überschrieben - inklusive allfälliger Anpassungen am Code und an den Vorlagen. Sind Sie sicher dass Sie fortfahren wollen?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Alle Datein überschreiben',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuelles Zusammenführen - Alle behalten',
	'LBL_UW_OVERWRITE_FILES'					=> 'Zusammenführungsmethode',
	'LBL_UW_PATCH_READY'						=> 'Der Patch ist bereit durchgeführt zu werden. Klicken Sie auf &#39;Ausführen&#39; um den Aktualisierungsprozess abzuschließen.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Hinweis: Angepasste Layouts gefunden</h2><br />Die folgende(n) Datei(en) besitzen neue Felder oder es wurden im Studio Layouts verändert. Der Patch den Sie gerade installieren enthält Änderungen für diese Datei(en). Für <u>jede Datei</u> können Sie:<br><ul><li>[<b>Standard</b>] Behalten Sie Ihre Version in dem Sie das Kästchen nicht anhaken. Die Modifikationen durch den Patch werden ignoriert.</li>oder<li>Akzeptieren Sie die Änderungen in dem Sie das Kästchen markieren. Ihre Layouts müssen im Studio angepasst werden.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Aufgabe für manuelles Zusammenführen erstellen?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Letzte Kontrollen',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differenziert',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Sich selbst eine Erinnerung für das manuelle Zusammenführen e-mailen?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Die unten angeführten Dateien wurden verändert. Entfernen SIe die Markierung bei Positionen die einen manuellen Abgleich erfordern. <i><i>Gefundene Änderungen an Layouts werden automatisch deaktiviert; wählen Sie die aus, die überschrieben werden sollen.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Keine manuelle Dateizusammenführung erforderlich.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nicht benötigt.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-erhaltende Dateien:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Alle Kontrollen erfolgreich bestanden. Klicken Sie auf &#39;Weiter&#39; um die Änderungen durchzuführen.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Drücken Sie auf Weiter um die aktualisierten Dateien auf das System zu kopieren',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Beachten Sie bitte</b>, dass der gesamte Upgrade Prozess <b>verpflichtend</b> durchzuführen ist. Wenn Sie nicht fortfahren wollen drücken Sie "Abbrechen".',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Alle Dateien de-/aktivieren',

	'LBL_UW_REBUILD_TITLE'						=> 'Rebuild Resultat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schema Änderungen',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Gefundene Einstellungen anzeigen',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Fehlende Datenbank Berechtigungen anzeigen',
	'LBL_UW_SHOW_DETAILS'						=> 'Details zeigen',
	'LBL_UW_SHOW_DIFFS'							=> 'Dateien anzeigen, die manuell zusammengeführt werden müssen',
	'LBL_UW_SHOW_NW_FILES'						=> 'Dateien mit falschen Berechtigungen anzeigen',
	'LBL_UW_SHOW_SCHEMA'						=> 'Schema Änderungsskript anzeigen',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Falsche Abfragen anzeigen',
	'LBL_UW_SHOW'								=> 'Zeigen',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Übersprungene Dateien',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Datei überschreiben übersprungen - Manuelle Zusammenführung gewählt',
	'LBL_UW_SQL_RUN'							=> 'Überprüfen Sie wann SQL manuell gelaufen ist',
	'LBL_UW_START_DESC'							=> 'Willkommen beim SugarCRM Aktualisierungs Assistent. Dieser Assistent wurde entwickelt, um Administratoren bei der Aktualisierung der SugarCRM Instanz zu helfen. Bitte folgen Sie den Anweisungen genau.',
	'LBL_UW_START_DESC2'						=> 'Wir empfehlen dringend, die Aktualisierung auf einer geklonten Instanz des Produktionservers durchzuführen. Bitte sichern Sie die Datenbank und die Systemdateien (alle Dateien im SugarCRM Verzeichnis), bevor Sie die Aktualisierung durchführen.',
	'LBL_UW_START_DESC3'						=> 'Um die Systemprüfung für den Upgrade durchzuführen, drücken Sie auf Weiter. Die Prüfung umfasst Zugriffsberechtigungen, Datenbankrechte und Servereinstellungen.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Der neue Aktualisierungs Assistent wird nun den Aktualisierungsprozess fortsetzen.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Willkommen beim neuen Aktualisierungs Assistent',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Überprüfe, bitte warten. Dies kann bis zu 30 Sekunden dauern.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Alle passenden Dateien für den Check finden',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Dateien',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Gefunden',

	'LBL_UW_TITLE_CANCEL'						=> 'Abbrechen',
	'LBL_UW_TITLE_COMMIT'						=> 'Upgrade ausführen',
	'LBL_UW_TITLE_END'							=> 'Nachkontrolle',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Letzte Kontrollen',
	'LBL_UW_TITLE_START'						=> 'Start',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'System Checks',
	'LBL_UW_TITLE_UPLOAD'						=> 'Upgrade hochladen',
	'LBL_UW_TITLE'								=> 'Aktualisierungs Assistent',
	'LBL_UW_UNINSTALL'							=> 'Deinstallieren',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Lizenz annehmen',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Lizenz umwandeln',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Upgrade/Eigene Module',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Die folgende Module sind selbst entwickelt und werden beibehalten',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Die folgende Module sind mit Studio angepasst worden und wurden aktualisiert',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Startvorgang in Arbeit',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'System wird überprüft',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Lizenzen werden überprüft',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight Check im Gang',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Die Dateien werden kopiert',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade im Gang',
    'LBL_UW_COMMIT_DESC'						=> 'Für zusätzliche Upgrade-Scripts, drücken Sie auf Weiter',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Upgrade-Script wird durchgeführt',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Upgrade Zusammenfassung wird erstellt',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'im Gang',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Zeit abgelaufen',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Aktualisierung Cancel und Cleanup im Gange',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Das Upgrade kann einige Zeit dauern',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Upload Checks im Gang',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Upgrade Paket wird hochgeladen...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Wollen Sie dass Sugar die alten 451 Schemata entfernt?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Aktualisierungs Assistent entfernt das alte 451 Schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Drop Schema Post Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Altes Schema Lösch Methode',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Zeige altes Schema das entfernt werden kann',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Übersprungene Abfragen',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php Version 5 oder später wird benötigt.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Ihre PHP Version wird von Sugar nicht unterstützt. Sie müssen eine kompatible Version installieren. Bitte überprüfen Sie dazu die Kompatibilitätsmatrix in den Release Notes. Ihre Version ist',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Rückwärts Kompatibilitätsmodus ist eingeschaltet. Setzen Sie den zend.ze1_compatibility_mode auf Off um fortzufahren.',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Aktion',
    'LBL_ML_CANCEL'             => 'Abbrechen',
    'LBL_ML_COMMIT'=>'Durchführen',
    'LBL_ML_DESCRIPTION' => 'Beschriftung',
    'LBL_ML_INSTALLED' => 'Installiert am',
    'LBL_ML_NAME' => 'Name',
    'LBL_ML_PUBLISHED' => 'Veröffentlicht am',
    'LBL_ML_TYPE' => 'Typ:',
    'LBL_ML_UNINSTALLABLE' => 'Deinstallierbar',
    'LBL_ML_VERSION' => 'Version',
	'LBL_ML_INSTALL'=>'Installieren',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker',
	'LBL_CURRENT_PHP_VERSION' => '(Deine derweilige PHP Version ist',
	'LBL_RECOMMENDED_PHP_VERSION' => 'Empfohlene PHP vesion ist 5.2.1 oder höher',
	'LBL_MODULE_NAME' => 'Upgrade Werkzeug',
	'LBL_MODULE_NAME_SINGULAR' => 'Upgrade Werkzeug',
	'LBL_UPLOAD_SUCCESS' => 'Upgrade Paket wurde erfolgreich geladen. Drücken Sie Weiter für die finale Überprüfung',
	'LBL_UW_TITLE_LAYOUTS' => 'Layouts bestätigen',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'Als Bestandteil des Upgrades wurden neue Felder hinzugefügt und können automatisch zu den existierenden Layouts/Masken angefügt werden. Nähere Informationen über hinzugefügte Felder entnehmen Sie bitte den Release Notes der Upgrade Version.<br /><br />Sollten Sie die neuen Felder nicht hinzugefügt werden, deselektieren Sie bitte das entsprechende Modul und Ihre Layouts/Masken bleiben unverändert. Die Felder sind nach dem Upgrade im Studio verfügbar',
	'LBL_LAYOUT_MERGE_TITLE' => 'Bestätigen Sie die Änderungen mit Weiter um den Upgrade zu finalisieren.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Drücken Sie auf Weiter um den Upgrade zu finalisieren',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Layouts bestätigen',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Bestätigen der Layout Ergebnisse',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Folgende Layouts wurden erfolgreich zusammengeführt',
	'LBL_SELECT_FILE' => 'Datei auswählen:',
	'LBL_LANGPACKS' => 'Sprachpaket' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Module verwalten' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Ptach Upgrades' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Design' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Aktualisieren:' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Bearbeitung' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Global sichtbar',
);
