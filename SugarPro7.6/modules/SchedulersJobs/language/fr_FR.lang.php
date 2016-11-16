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
'LBL_NAME' => 'Nom du Job',
'LBL_EXECUTE_TIME'			=> 'Date d&#39;execution',
'LBL_SCHEDULER_ID' 	=> 'Planificateur',
'LBL_STATUS' 	=> 'Statut',
'LBL_RESOLUTION' 	=> 'Résultat',
'LBL_MESSAGE' 	=> 'Messages',
'LBL_DATA' 	=> 'Données du job',
'LBL_REQUEUE' 	=> 'Réessayer suite échec',
'LBL_RETRY_COUNT' 	=> 'Tentatives max.',
'LBL_FAIL_COUNT' 	=> 'Echecs',
'LBL_INTERVAL' 	=> 'Intervalle min. entre chaque essai',
'LBL_CLIENT' 	=> 'Client propriétaire',
'LBL_PERCENT'	=> 'Pourcentage accompli',
'LBL_JOB_GROUP' => 'Groupe de jobs',
// Errors
'ERR_CALL' 	=> "Ne peut pas appeler la fonction : %s",
'ERR_CURL' => "cURL non présent - exécution des jobs URL impossible",
'ERR_FAILED' => "Echec inattendu, veuillez vérifier les logs PHP et sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s sur % à la ligne %d",
'ERR_NOUSER' => "Pas d&#39;ID d&#39;utilisateur précisé pour le job",
'ERR_NOSUCHUSER' => "ID utilisateur %s non trouvé",
'ERR_JOBTYPE' 	=> "Type de job inconnu : %s",
'ERR_TIMEOUT' => "Forcé l&#39;échec sur timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) en échec au lancement du CRON',
);
