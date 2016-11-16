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
  'LBL_MODULE_NAME' => 'Sale',
  'LBL_MODULE_TITLE' => 'Försäljning: Hem',
  'LBL_SEARCH_FORM_TITLE' => 'Sök försäljning',
  'LBL_VIEW_FORM_TITLE' => 'Försäljningsvy',
  'LBL_LIST_FORM_TITLE' => 'Försäljningslista',
  'LBL_SALE_NAME' => 'Försäljningsnamn:',
  'LBL_SALE' => 'Försäljning:',
  'LBL_NAME' => 'Försäljningsnamn',
  'LBL_LIST_SALE_NAME' => 'Namn',
  'LBL_LIST_ACCOUNT_NAME' => 'Företagsnamn',
  'LBL_LIST_AMOUNT' => 'Summa',
  'LBL_LIST_DATE_CLOSED' => 'Stäng',
  'LBL_LIST_SALE_STAGE' => 'Säljnivå',
  'LBL_ACCOUNT_ID'=>'Account ID',
  'LBL_TEAM_ID' =>'Team ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Försäljning - Valuta uppdatering',
  'UPDATE_DOLLARAMOUNTS' => 'Uppdatera summor',
  'UPDATE_VERIFY' => 'Verifiera summor',
  'UPDATE_VERIFY_TXT' => 'Verifiera att summan i försäljningen har giltiga decimaler med endast numeriska tecken (0-9) och av separerare (.)',
  'UPDATE_FIX' => 'Fixa summor',
  'UPDATE_FIX_TXT' => 'Försöker fixa ogiltiga summor genom att skapa ett giltigt decimaltal baserat på den aktuella valutan. Alla modifierade summor backupas till databasfältet amount_backup. Om du kör den här funktionen och noterar någon bugg, kör i så fall inte om funktionen innan du återställt data från backupen, eftersom du annars riskerar att skriva över backupen med ny ogiltig data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Uppdatera summan av U.S. Dollars för försäljning baserat på den nuvarande valutakursen. Detta värde används för att räkna ut grafer och ListVy valuta summan.',
  'UPDATE_CREATE_CURRENCY' => 'Skapa ny valuta:',
  'UPDATE_VERIFY_FAIL' => 'Objektet misslyckades vid verifieringen:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Aktuell summa:',
  'UPDATE_VERIFY_FIX' => 'Genomför fix skulle ge',
  'UPDATE_INCLUDE_CLOSE' => 'Inkludera stängda poster',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Ny summa:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
  'UPDATE_DONE' => 'Klar',
  'UPDATE_BUG_COUNT' => 'Buggar hittades och en lösning håller på att tas fram:',
  'UPDATE_BUGFOUND_COUNT' => 'Hittade buggar:',
  'UPDATE_COUNT' => 'Uppdaterade poster:',
  'UPDATE_RESTORE_COUNT' => 'Objektets summa återställd:',
  'UPDATE_RESTORE' => 'Återställ summor',
  'UPDATE_RESTORE_TXT' => 'Återställer summorna från backuperna som skapdes under fixen.',
  'UPDATE_FAIL' => 'Kunde inte uppdatera -',
  'UPDATE_NULL_VALUE' => 'Summan är NULL sätter det till 0 -',
  'UPDATE_MERGE' => 'Slå samman valutor',
  'UPDATE_MERGE_TXT' => 'Slå ihop multipla valutor till en valuta. Om det finns flera valuta-poster för samma valuta slår du ihop dom. Detta kommer också att slå ihop valutor för alla andra moduler.',
  'LBL_ACCOUNT_NAME' => 'Account namn:',
  'LBL_AMOUNT' => 'Summa:',
  'LBL_AMOUNT_USDOLLAR' => 'Summa USD:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DATE_CLOSED' => 'Förväntat avslutsdatum:',
  'LBL_TYPE' => 'Typ:',
  'LBL_CAMPAIGN' => 'Kampanj:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',  
  'LBL_NEXT_STEP' => 'Nästa steg:',
  'LBL_LEAD_SOURCE' => 'Leadkälla:',
  'LBL_SALES_STAGE' => 'Försäljningsstage:',
  'LBL_PROBABILITY' => 'Trolighet (%):',
  'LBL_DESCRIPTION' => 'Beskrivning:',
  'LBL_DUPLICATE' => 'Möjlig duplicerad försäljning',
  'MSG_DUPLICATE' => 'Försäljningsposten du håller på att skapa kan vara en dublett av en redan existerande post. Försäljningar med liknande namn är listade nedan.<br>Klicka Spara för att fortsätta att skapa denna nya försäljning, eller klicka Avbryt för att återgå till modulen utan att skapa försäljningen.',
  'LBL_NEW_FORM_TITLE' => 'Skapa försäljning',
  'LNK_NEW_SALE' => 'Skapa försäljning',
  'LNK_SALE_LIST' => 'Sale',
  'ERR_DELETE_RECORD' => 'Ett postnummer måste vara specifierat för att ta bort denna försäljning.',
  'LBL_TOP_SALES' => 'Mina topp öpnna-försäljningar',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Är du säker att du vill ta bort denna kontakt från försäljningen?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Är du säker att du vill ta bort denna försäljning från detta projekt?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sale',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historik',
    'LBL_RAW_AMOUNT'=>'Belopp',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
  'LBL_MY_CLOSED_SALES' => 'Mina stängda försäljningar',
  'LBL_TOTAL_SALES' => 'Total försäljning',
  'LBL_CLOSED_WON_SALES' => 'Stängda vunna försäljningar',
  'LBL_ASSIGNED_TO_ID' =>'Tilldelad till ID',
  'LBL_CREATED_ID'=>'Skapad av ID',
  'LBL_MODIFIED_ID'=>'Redigerad av ID',
  'LBL_MODIFIED_NAME'=>'Redigerad av användarnamn',
  'LBL_SALE_INFORMATION'=>'Försäljningsinformation',
  'LBL_CURRENCY_ID'=>'Valuta ID',
  'LBL_CURRENCY_NAME'=>'Valutanamn',
  'LBL_CURRENCY_SYMBOL'=>'Valuta symbol',
  'LBL_EDIT_BUTTON' => 'Redigera',
   'LBL_REMOVE' => 'Radera',


);

