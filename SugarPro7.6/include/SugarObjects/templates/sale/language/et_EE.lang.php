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
  'LBL_MODULE_NAME' => 'Müük',
  'LBL_MODULE_TITLE' => 'Müük: Avaleht',
  'LBL_SEARCH_FORM_TITLE' => 'Müügi otsing',
  'LBL_VIEW_FORM_TITLE' => 'Müügi vaade',
  'LBL_LIST_FORM_TITLE' => 'Müügi loend',
  'LBL_SALE_NAME' => 'Müügi nimi:',
  'LBL_SALE' => 'Müük:',
  'LBL_NAME' => 'Müügi nimi',
  'LBL_LIST_SALE_NAME' => 'Nimi',
  'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi',
  'LBL_LIST_AMOUNT' => 'Amount',
  'LBL_LIST_DATE_CLOSED' => 'Sulge',
  'LBL_LIST_SALE_STAGE' => 'Sales Stage',
  'LBL_ACCOUNT_ID'=>'Account ID',
  'LBL_TEAM_ID' =>'Meeskonna ID:',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Müük - valuuta uuendamine',
  'UPDATE_DOLLARAMOUNTS' => 'Uuenda USD summasid',
  'UPDATE_VERIFY' => 'Kontrolli summasid',
  'UPDATE_VERIFY_TXT' => 'Kontrollib, et müügi koguväärtused on kehtivad kümnendmurdudes ainult numbrisümbolites (0-9) ja kümnendikes(.)',
  'UPDATE_FIX' => 'Fix summad',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Uue valuuta loomine:',
  'UPDATE_VERIFY_FAIL' => 'Kirje ebaõnnestumise kontroll:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Praegune summa:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Lisa suletud kirjed',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Uus summa:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Uus valuuta:',
  'UPDATE_DONE' => 'Tehtud',
  'UPDATE_BUG_COUNT' => 'Bugid on leitud ja neid üritatakse lahendada:',
  'UPDATE_BUGFOUND_COUNT' => 'Leitud bugid:',
  'UPDATE_COUNT' => 'Uuendatud kirjed:',
  'UPDATE_RESTORE_COUNT' => 'Kirje summad taastatud:',
  'UPDATE_RESTORE' => 'Taasta summad',
  'UPDATE_RESTORE_TXT' => 'Restores amount values from the backups created during fix.',
  'UPDATE_FAIL' => 'Ei saa uuendada -',
  'UPDATE_NULL_VALUE' => 'Amount is NULL setting it to 0 -',
  'UPDATE_MERGE' => 'Mesti valuutad',
  'UPDATE_MERGE_TXT' => 'Mesti erinevad valuutad üheks valuutaks. Kui on erinevaid valuutakirjeid ühe valuuta kohta, siis mesti need kokku. See mestib valuutad ka kõigi teiste moodulite jaoks.',
  'LBL_ACCOUNT_NAME' => 'Account Name:',
  'LBL_AMOUNT' => 'Summa:',
  'LBL_AMOUNT_USDOLLAR' => 'Summa USD:',
  'LBL_CURRENCY' => 'Currency:',
  'LBL_DATE_CLOSED' => 'Oodatav sulgemiskuupäev:',
  'LBL_TYPE' => 'Tüüp:',
  'LBL_CAMPAIGN' => 'Kampaania:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',  
  'LBL_NEXT_STEP' => 'Next Step:',
  'LBL_LEAD_SOURCE' => 'Müügivihje allikas:',
  'LBL_SALES_STAGE' => 'Müügistaadium:',
  'LBL_PROBABILITY' => 'Tõenäosus (%)',
  'LBL_DESCRIPTION' => 'Kirjeldus:',
  'LBL_DUPLICATE' => 'Võimalik topeltmüük',
  'MSG_DUPLICATE' => 'Loodav müügikirje võib olla juba eksisteeriv duplikaat müügikirje. Müügikirjed, mis sisaldavad sarnaseid nimesid on väljatoodud allpool. Kliki Salvesta selle uue müügi loomiseks või kliki Tühista moodulisse tagasisiirdumiseks ilma müüki loomata.',
  'LBL_NEW_FORM_TITLE' => 'Loo müük',
  'LNK_NEW_SALE' => 'Loo müük',
  'LNK_SALE_LIST' => 'Müük',
  'ERR_DELETE_RECORD' => 'Müügi kustutamiseks täpsusta kirje numbrit.',
  'LBL_TOP_SALES' => 'Minu TOP avatud müügid',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Oled kindel, et soovid selle kontakti müügist eemaldada?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Oled kindel, et soovid selle müügi projektist eemaldada?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Müük',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Tegevused',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Ajalugu',
    'LBL_RAW_AMOUNT'=>'Rea summa',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Kasutaja:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
  'LBL_MY_CLOSED_SALES' => 'Minu suletud müük',
  'LBL_TOTAL_SALES' => 'Müük kokku',
  'LBL_CLOSED_WON_SALES' => 'Suletud Võidetud müügid',
  'LBL_ASSIGNED_TO_ID' =>'Vastutaja ID:',
  'LBL_CREATED_ID'=>'Looja Id',
  'LBL_MODIFIED_ID'=>'Muutja Id',
  'LBL_MODIFIED_NAME'=>'Muutja nime järgi',
  'LBL_SALE_INFORMATION'=>'Müügiinfo',
  'LBL_CURRENCY_ID'=>'Currency ID',
  'LBL_CURRENCY_NAME'=>'Currency Name',
  'LBL_CURRENCY_SYMBOL'=>'Currency Symbol',
  'LBL_EDIT_BUTTON' => 'Redigeeri',
   'LBL_REMOVE' => 'Eemalda',


);

