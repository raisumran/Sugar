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
'LBL_NAME' => 'Jobbnavn',
'LBL_EXECUTE_TIME'			=> 'Utførelsetid',
'LBL_SCHEDULER_ID' 	=> 'Planlegger',
'LBL_STATUS' 	=> 'Status',
'LBL_RESOLUTION' 	=> 'Resultat',
'LBL_MESSAGE' 	=> 'Meldinger',
'LBL_DATA' 	=> 'Data',
'LBL_REQUEUE' 	=> 'Forsøk på nytt ved feil',
'LBL_RETRY_COUNT' 	=> 'Maks antall nye forsøk',
'LBL_FAIL_COUNT' 	=> 'Feil',
'LBL_INTERVAL' 	=> 'Minimumsintervall mellom forsøk',
'LBL_CLIENT' 	=> 'Tilhørende klient',
'LBL_PERCENT'	=> 'Prosent ferdig',
'LBL_JOB_GROUP' => 'Jobb gruppe',
// Errors
'ERR_CALL' 	=> "Kan ikke kjøre funksjon: %s",
'ERR_CURL' => "Ingen CURL - kan ikke kjøre URL-jobber",
'ERR_FAILED' => "Det har oppstått en feil, vennligst sjekk PHP-logger og sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s i %s på linje %d",
'ERR_NOUSER' => "Ingen Bruker-ID definert for jobben",
'ERR_NOSUCHUSER' => "Bruker-ID %s ikke funnet",
'ERR_JOBTYPE' 	=> "Ukjent jobbtype: %s",
'ERR_TIMEOUT' => "Tvunget feil på tidsavbrudd",
'ERR_JOB_FAILED_VERBOSE' => 'Jobb %1$s (%2$s) feilet i CRON-kjøring',
);
