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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
 $mod_strings = array (
  'LBL_MODULE_NAME' => 'Affaire',
  'LBL_MODULE_TITLE' => 'Ventes',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher',
  'LBL_VIEW_FORM_TITLE' => 'Ventes',
  'LBL_LIST_FORM_TITLE' => 'Listes des Ventes',
  'LBL_SALE_NAME' => 'Nom de la Vente:',
  'LBL_SALE' => 'Vente :',
  'LBL_NAME' => 'Name',
  'LBL_LIST_SALE_NAME' => 'Nom',
  'LBL_LIST_ACCOUNT_NAME' => 'Nom du compte',
  'LBL_LIST_AMOUNT' => 'Montant',
  'LBL_LIST_DATE_CLOSED' => 'Fermer',
  'LBL_LIST_SALE_STAGE' => 'Phase de vente',
  'LBL_ACCOUNT_ID'=>'Compte (ID) :',
  'LBL_TEAM_ID' =>'Equipe (ID)',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Ventes - Devise Mise à Jour',
  'UPDATE_DOLLARAMOUNTS' => 'Mise à jour des montants en devise par défaut',
  'UPDATE_VERIFY' => 'Vérifier les montants',
  'UPDATE_VERIFY_TXT' => 'Vérifier la valeur des Montant : chiffre uniquement et séparateur decimal (.)',
  'UPDATE_FIX' => 'Réparer les montants',
  'UPDATE_FIX_TXT' => 'Tentative de correction des montants invalides. Les anciens montants seront sauvegardés en base dans le champ amount_backup. Si vous constatez des dysfonctionnement ne l’exécuter pas une seconde fois car vous perdriez votre backup du champ.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Mise à  Jour des montants en devise par défaut',
  'UPDATE_CREATE_CURRENCY' => 'Créer une devise:',
  'UPDATE_VERIFY_FAIL' => 'Echec de Verification de cet enregistrement:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Montant actuel:',
  'UPDATE_VERIFY_FIX' => 'Lancer la réparation',
  'UPDATE_INCLUDE_CLOSE' => 'Inclure enregistrements clos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nouveau Montant:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nouvelle devise:',
  'UPDATE_DONE' => 'Terminer',
  'UPDATE_BUG_COUNT' => 'Bugs trouvés, tentative de correction:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs trouvés:',
  'UPDATE_COUNT' => 'Enregistrement mis à jour:',
  'UPDATE_RESTORE_COUNT' => 'Montants enregistrés restaurés:',
  'UPDATE_RESTORE' => 'Restaurer les montants',
  'UPDATE_RESTORE_TXT' => 'Restaurer les montants depuis le backup créé lors de la réparation.',
  'UPDATE_FAIL' => 'Impossible de mettre à jour -',
  'UPDATE_NULL_VALUE' => 'Le montant est NULL et remplacé par 0 -',
  'UPDATE_MERGE' => 'Fusionner les devises',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Nom du Compte :',
  'LBL_AMOUNT' => 'Montant:',
  'LBL_AMOUNT_USDOLLAR' => 'Montant (Devise par défaut) :',
  'LBL_CURRENCY' => 'Devise :',
  'LBL_DATE_CLOSED' => 'Date de Clôture:',
  'LBL_TYPE' => 'Type:',
  'LBL_CAMPAIGN' => 'Campagne:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',  
  'LBL_NEXT_STEP' => 'Prochaine étape :',
  'LBL_LEAD_SOURCE' => 'Origine Principale:',
  'LBL_SALES_STAGE' => 'Phase de vente :',
  'LBL_PROBABILITY' => 'Probabilité (%) :',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DUPLICATE' => 'Possibilité de duplication des Ventes',
  'MSG_DUPLICATE' => 'Possibilité de doublon des Ventes. Vous pouvez soit selectionner une Affaire dans la liste ci dessous ou cliquer sur "Sauvegarder" pour poursuivre la création.',
  'LBL_NEW_FORM_TITLE' => 'Créer une Vente',
  'LNK_NEW_SALE' => 'Créer une Vente',
  'LNK_SALE_LIST' => 'Affaire',
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'LBL_TOP_SALES' => 'Top des Ventes',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Etes-vous sûr(e) de vouloir supprimer ce Contact pour cette Affaire ?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Etes-vous sûr(e) de vouloir supprimer cette Vente de ce Projet ?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Affaire',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activités à Réaliser',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historique',
    'LBL_RAW_AMOUNT'=>'Montant Brut',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_MY_CLOSED_SALES' => 'Mes Ventes cloturées',
  'LBL_TOTAL_SALES' => 'Total des Ventes',
  'LBL_CLOSED_WON_SALES' => 'Ventes cloturés et gagnés',
  'LBL_ASSIGNED_TO_ID' =>'Assigné à (ID)',
  'LBL_CREATED_ID'=>'Créé par (ID)',
  'LBL_MODIFIED_ID'=>'Modifié par (ID)',
  'LBL_MODIFIED_NAME'=>'Modifié par',
  'LBL_SALE_INFORMATION'=>'Informations de Ventes',
  'LBL_CURRENCY_ID'=>'Devise (ID)',
  'LBL_CURRENCY_NAME'=>'Devise',
  'LBL_CURRENCY_SYMBOL'=>'Symbole de la devise',
  'LBL_EDIT_BUTTON' => 'Editer',
   'LBL_REMOVE' => 'Supprimer',


);

