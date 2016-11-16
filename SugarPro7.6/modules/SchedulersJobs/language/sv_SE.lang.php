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
'LBL_NAME' => 'Jobbnamn',
'LBL_EXECUTE_TIME'			=> 'Exekveringstid',
'LBL_SCHEDULER_ID' 	=> 'Schemaläggare',
'LBL_STATUS' 	=> 'Jobbstatus',
'LBL_RESOLUTION' 	=> 'Resultat',
'LBL_MESSAGE' 	=> 'Meddelanden',
'LBL_DATA' 	=> 'Jobb Data',
'LBL_REQUEUE' 	=> 'Försök igen om misslyckat',
'LBL_RETRY_COUNT' 	=> 'Maximal återförsök',
'LBL_FAIL_COUNT' 	=> 'Misslyckanden',
'LBL_INTERVAL' 	=> 'Minsta intervall mellan försök',
'LBL_CLIENT' 	=> 'Äger klient',
'LBL_PERCENT'	=> 'Procent klart',
'LBL_JOB_GROUP' => 'Jobb grupp',
// Errors
'ERR_CALL' 	=> "Kan inte anropa funktion: %s",
'ERR_CURL' => "Ingen CURL - kan inte köra URL jobb",
'ERR_FAILED' => "Oväntat fel, vänligen kolla PHP loggar och sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s i %s på rad %d",
'ERR_NOUSER' => "Ingen specificerad AnvändarID för jobbet",
'ERR_NOSUCHUSER' => "AnvändarID %s hittades inte",
'ERR_JOBTYPE' 	=> "Okänd jobbtyp: %s",
'ERR_TIMEOUT' => "Forcerat misslyckande av timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Jobb %1$s (%2$s) misslyckades i CRON körningen',
);
