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
  'LBL_MODULE_NAME' => 'Venta',
  'LBL_MODULE_TITLE' => 'Vendes: Inici',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca de Vendes',
  'LBL_VIEW_FORM_TITLE' => 'Vista de Vendes',
  'LBL_LIST_FORM_TITLE' => 'Llista de Vendes',
  'LBL_SALE_NAME' => 'Nom de Venta:',
  'LBL_SALE' => 'Venta:',
  'LBL_NAME' => 'Nom de Venta',
  'LBL_LIST_SALE_NAME' => 'Nom',
  'LBL_LIST_ACCOUNT_NAME' => 'Nom de Compte',
  'LBL_LIST_AMOUNT' => 'Quantitat',
  'LBL_LIST_DATE_CLOSED' => 'Tancar',
  'LBL_LIST_SALE_STAGE' => 'Etapa de Vendes',
  'LBL_ACCOUNT_ID'=>'ID Compte',
  'LBL_TEAM_ID' =>'ID Equip',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Venta - Actualització de Moneda',
  'UPDATE_DOLLARAMOUNTS' => 'Actualitzar Quantitats Dólar EEUU',
  'UPDATE_VERIFY' => 'Verificar Quantitats',
  'UPDATE_VERIFY_TXT' => 'Verifica que els valors de les quantitats en les ventdes son números decimals vàlids amb només caràcters numérics (0-9) i decimals(.)',
  'UPDATE_FIX' => 'Corregir Quantitats',
  'UPDATE_FIX_TXT' => 'Intenta corregir qualsevol quantitat no vàlida creant un número decimal vàlid a partir de la quantitat actual. Abans faci una còpia de seguretat de totes les quantitats modificades en el camp de la base de dades amount_backup. Si una vegada la correcció detecta problemes, no torni a realitzar aquesta operació sense restaurar els valors previs desde la còpia de seguretat, ja que si no, tornaria a escriure al damunt de la còpia de seguretat amb noves dades no vàlides.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualitza les quantitats en Dólars EEUU per les vendes basades en el conjunt actual de canvis de moneda. Aquest valor s´usa per calcular gràfiques i vistes de llistes de quantitats monetàries.',
  'UPDATE_CREATE_CURRENCY' => 'Creació de nova moneda:',
  'UPDATE_VERIFY_FAIL' => 'Error de verificació de el registre:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Quantitat actual:',
  'UPDATE_VERIFY_FIX' => 'La correcció donaría',
  'UPDATE_INCLUDE_CLOSE' => 'Registres tancats inclòsos',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nova quantitat:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova moneda:',
  'UPDATE_DONE' => 'Fet',
  'UPDATE_BUG_COUNT' => 'Problemes detectats i suposadament corregits:',
  'UPDATE_BUGFOUND_COUNT' => 'Problemes detectats:',
  'UPDATE_COUNT' => 'Registres actualitzats:',
  'UPDATE_RESTORE_COUNT' => 'Registres amb quantitats restaurades:',
  'UPDATE_RESTORE' => 'Restaurar Quantitats',
  'UPDATE_RESTORE_TXT' => 'Restaura els valors de les quantitas desde la còpia de seguretat creada durant la correcció.',
  'UPDATE_FAIL' => 'No s´ha pogut actualitzar -',
  'UPDATE_NULL_VALUE' => 'La quantitat es NULL, establint-la a 0 -',
  'UPDATE_MERGE' => 'Unificar Monedes',
  'UPDATE_MERGE_TXT' => 'Unifica múltiples monedes en una única moneda. Si detecta que hi ha múltiples registres de tipus de moneda per la mateixa moneda, pot unificarles. Això també unificarà les monedes per el reste de mòduls.',
  'LBL_ACCOUNT_NAME' => 'Nom del Compte:',
  'LBL_AMOUNT' => 'Quantitat:',
  'LBL_AMOUNT_USDOLLAR' => 'Quantitat en Dólars EEUU:',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_DATE_CLOSED' => 'Data de tancament:',
  'LBL_TYPE' => 'Tipus:',
  'LBL_CAMPAIGN' => 'Campanya:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectes',  
  'LBL_NEXT_STEP' => 'Proper pas:',
  'LBL_LEAD_SOURCE' => 'Presa de contacte',
  'LBL_SALES_STAGE' => 'Etapa de Vendes:',
  'LBL_PROBABILITY' => 'Probabilitat (%):',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DUPLICATE' => 'Possible Venta Duplicada',
  'MSG_DUPLICATE' => 'El registre per a la venta que va a crear podría ser un duplicat en un altre registe de venta existent. Els registres de venta amb noms similares es llisten a continuació.<br>Faci clic en Guardar per continuar amb la creació dáquesta venta, o en Cancelar per tornar al mòdul sense crear la venta.',
  'LBL_NEW_FORM_TITLE' => 'Nova Venta',
  'LNK_NEW_SALE' => 'Nova Venta',
  'LNK_SALE_LIST' => 'Venta',
  'ERR_DELETE_RECORD' => 'Té que especifícar un número de registre per eliminar la venta.',
  'LBL_TOP_SALES' => 'Les Meves Principals Vendes Obertes',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Està segur de que vol eliminar aquest contacte de la venta?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Està segur de que vol eliminar aquesta venda del projecte?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Venta',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activitats',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Històrial',
    'LBL_RAW_AMOUNT'=>'Quantitat Bruta',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_MY_CLOSED_SALES' => 'Les Meves Vendes Tancades',
  'LBL_TOTAL_SALES' => 'Vendes Totals',
  'LBL_CLOSED_WON_SALES' => 'Vendes Guanyades',
  'LBL_ASSIGNED_TO_ID' =>'Assignada a ID',
  'LBL_CREATED_ID'=>'Creada per ID',
  'LBL_MODIFIED_ID'=>'Modificada per ID',
  'LBL_MODIFIED_NAME'=>'Modificada per Usuari',
  'LBL_SALE_INFORMATION'=>'Informació sobre la Venta',
  'LBL_CURRENCY_ID'=>'ID Moneda',
  'LBL_CURRENCY_NAME'=>'Nom de Moneda',
  'LBL_CURRENCY_SYMBOL'=>'Símbol de Moneda',
  'LBL_EDIT_BUTTON' => 'Editar',
   'LBL_REMOVE' => 'Treure',


);

