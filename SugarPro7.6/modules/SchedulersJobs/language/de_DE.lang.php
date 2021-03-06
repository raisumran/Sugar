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
$mod_strings = array (
'LBL_NAME' => 'Job Name',
'LBL_EXECUTE_TIME'			=> 'Ausführungszeit',
'LBL_SCHEDULER_ID' 	=> 'Zeitplaner',
'LBL_STATUS' 	=> 'Status:',
'LBL_RESOLUTION' 	=> 'Lösung:',
'LBL_MESSAGE' 	=> 'Nachrichten',
'LBL_DATA' 	=> 'Daten',
'LBL_REQUEUE' 	=> 'Bei Fehler erneut versuchen',
'LBL_RETRY_COUNT' 	=> 'Maximale Neuverscuhe',
'LBL_FAIL_COUNT' 	=> 'Misserfolg',
'LBL_INTERVAL' 	=> 'Minimum Intervalle zwischen Versuche',
'LBL_CLIENT' 	=> 'Owning client',
'LBL_PERCENT'	=> 'Prozent fertig',
'LBL_JOB_GROUP' => 'Jobgruppe',
// Errors
'ERR_CALL' 	=> "Kann Funktion  %s nicht aufrufen",
'ERR_CURL' => "Kein CURL - kann URL Jobs nicht ausführen",
'ERR_FAILED' => "Unerwarteter Fehler. Bitte Ihre PHP Log bzw. sugarcrm.log Datei überprüfen.",
'ERR_PHP' => "%s [%d]: %s in %s auf Zeile %d",
'ERR_NOUSER' => "Kein UserID für diesen Job spezifiziert",
'ERR_NOSUCHUSER' => "User ID %s nicht gefunden",
'ERR_JOBTYPE' 	=> "Unbekannter Jobtyp: %s",
'ERR_TIMEOUT' => "Forced failure on timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) in CRON Lauf fehlgeschlagen',
);
