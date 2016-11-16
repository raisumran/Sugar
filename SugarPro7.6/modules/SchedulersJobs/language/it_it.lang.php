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
'LBL_NAME' => 'Funzione',
'LBL_EXECUTE_TIME'			=> 'Tempo Esecuzione',
'LBL_SCHEDULER_ID' 	=> 'Schedulatore',
'LBL_STATUS' 	=> 'Stato',
'LBL_RESOLUTION' 	=> 'Risultato',
'LBL_MESSAGE' 	=> 'Messaggi',
'LBL_DATA' 	=> 'Data Job',
'LBL_REQUEUE' 	=> 'Riprova in caso di errore',
'LBL_RETRY_COUNT' 	=> 'Numero massimo di tentativi',
'LBL_FAIL_COUNT' 	=> 'Errori',
'LBL_INTERVAL' 	=> 'Intervallo minimo tra tentativi',
'LBL_CLIENT' 	=> 'Cliente proprietario',
'LBL_PERCENT'	=> 'Percentuale completata',
'LBL_JOB_GROUP' => 'Gruppo Job',
// Errors
'ERR_CALL' 	=> "Impossibile eseguire la funzione: %s",
'ERR_CURL' => "Nessun CURL - impossibile  eseguire URL jobs",
'ERR_FAILED' => "Interruzione imprevista, si pregs di controllare i log PHP e sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "Nessun ID utente specificato per il job",
'ERR_NOSUCHUSER' => "Impossibile trovare User ID %",
'ERR_JOBTYPE' 	=> "Tipo job non specificato: %",
'ERR_TIMEOUT' => "Fallimento forzato su timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) failed in CRON run',
);
