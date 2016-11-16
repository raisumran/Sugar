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
'LBL_NAME' => 'Nimi',
'LBL_EXECUTE_TIME'			=> 'Suoritusaika',
'LBL_SCHEDULER_ID' 	=> 'Ajastin',
'LBL_STATUS' 	=> 'Tila:',
'LBL_RESOLUTION' 	=> 'Tulos',
'LBL_MESSAGE' 	=> 'Viestit',
'LBL_DATA' 	=> 'Tehtävän data',
'LBL_REQUEUE' 	=> 'Yritä uudelleen virhetilanteessa',
'LBL_RETRY_COUNT' 	=> 'Uudelleenyritysten enimmäismäärä',
'LBL_FAIL_COUNT' 	=> 'Epäonnistumisia',
'LBL_INTERVAL' 	=> 'Minimiaika yritysten välissä',
'LBL_CLIENT' 	=> 'Omistava käyttäjä',
'LBL_PERCENT'	=> 'Prosenttia valmiina',
'LBL_JOB_GROUP' => 'Ryhmä',
// Errors
'ERR_CALL' 	=> "Ei voida kutsua funktiota: %s",
'ERR_CURL' => "Ei CURL:a - ei voida ajaa URL-tehtäviä",
'ERR_FAILED' => "Odottamaton virhe, tarkista PHP:n lokitiedostot ja sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s tiedostossa %s rivillä %d",
'ERR_NOUSER' => "Käyttäjätunnusta ei ole määritelty tehtävälle",
'ERR_NOSUCHUSER' => "Käyttäjätunnusta %s ei löytynyt",
'ERR_JOBTYPE' 	=> "Tuntematon tehtävätyyppi: %s",
'ERR_TIMEOUT' => "Pakotettu epäonnistuminen aikakatkaisun vuoksi",
'ERR_JOB_FAILED_VERBOSE' => 'Tehtävä %1$s (%2$s) epäonnistui CRON-ajossa',
);
