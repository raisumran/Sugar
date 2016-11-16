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
  'LBL_MODULE_TITLE' => 'Verkoop: Start',
  'LBL_SEARCH_FORM_TITLE' => 'Verkoop: Zoeken',
  'LBL_VIEW_FORM_TITLE' => 'Verkoop: Bekijken',
  'LBL_LIST_FORM_TITLE' => 'Verkoop: Lijst',
  'LBL_SALE_NAME' => 'Verkoopnaam:',
  'LBL_SALE' => 'Verkoop:',
  'LBL_NAME' => 'Verkoopnaam',
  'LBL_LIST_SALE_NAME' => 'Naam',
  'LBL_LIST_ACCOUNT_NAME' => 'Account Naam',
  'LBL_LIST_AMOUNT' => 'Bedrag',
  'LBL_LIST_DATE_CLOSED' => 'Sluiten',
  'LBL_LIST_SALE_STAGE' => 'Verkoopstadium',
  'LBL_ACCOUNT_ID'=>'Organisatie ID',
  'LBL_TEAM_ID' =>'Team ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Verkoop - Valuta Update',
  'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar bedragen',
  'UPDATE_VERIFY' => 'Controleer bedragen',
  'UPDATE_VERIFY_TXT' => 'Verifieert dat de bedragen in verkoop geldige decimale getallen zijn met alleen numerieke tekens (0-9) en decimalen (.)',
  'UPDATE_FIX' => 'Herstel bedragen',
  'UPDATE_FIX_TXT' => 'Probeert ongeldige waarden te herstellen door hiervan een decimale waarde te maken. De originele waarden worden gebackup-ed in het database veld "amount_backup". Wanneer u deze functie gebruikt en u stuit op fouten, start de actie dan pas opnieuw nadat u de backup terug hebt gezet. Anders zal de backup overschreven kunnen worden met nieuwe ongeldige data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update van de US Dollar bedragen voor de verkoop op basis van de huidige wisselkoersen. Deze waarde wordt gebruikt om grafieken en lijstweergave valuta bedragen te berekenen.',
  'UPDATE_CREATE_CURRENCY' => 'Nieuwe valuta aanmaken:',
  'UPDATE_VERIFY_FAIL' => 'Controle van record mislukt:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Huidig bedrag:',
  'UPDATE_VERIFY_FIX' => 'Na herstel wordt dit',
  'UPDATE_INCLUDE_CLOSE' => 'Inclusief gesloten records',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nieuw bedrag:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nieuwe Valuta:',
  'UPDATE_DONE' => 'Klaar',
  'UPDATE_BUG_COUNT' => 'Fouten gevonden en geprobeerd op te lossen:',
  'UPDATE_BUGFOUND_COUNT' => 'Gevonden fouten:',
  'UPDATE_COUNT' => 'Bijgewerkte records:',
  'UPDATE_RESTORE_COUNT' => 'Records waarvan bedragen zijn teruggezet:',
  'UPDATE_RESTORE' => 'Bedragen terugzetten',
  'UPDATE_RESTORE_TXT' => 'Zet bedragen terug uit de backup die is gemaakt gedurende het herstel.',
  'UPDATE_FAIL' => 'Kon niet bijwerken -',
  'UPDATE_NULL_VALUE' => 'Bedrag is NULL, bezig met instellen op 0 -',
  'UPDATE_MERGE' => 'Valuta samenvoegen',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Organisatienaam:',
  'LBL_AMOUNT' => 'Bedrag:',
  'LBL_AMOUNT_USDOLLAR' => 'Bedrag USD:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DATE_CLOSED' => 'Verwachte afsluitdatum:',
  'LBL_TYPE' => 'Type:',
  'LBL_CAMPAIGN' => 'Campagne:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',  
  'LBL_NEXT_STEP' => 'Volgende stap:',
  'LBL_LEAD_SOURCE' => 'Bron voor lead:',
  'LBL_SALES_STAGE' => 'Verkoopstadium:',
  'LBL_PROBABILITY' => 'Waarschijnlijkheid (%):',
  'LBL_DESCRIPTION' => 'Omschrijving:',
  'LBL_DUPLICATE' => 'Mogelijke dubbele verkoop',
  'MSG_DUPLICATE' => 'The Sale record you are about to create might be a duplicate of a sale record that already exists. Sale records containing similar names are listed below.<br>Click Save to continue creating this new Sale, or click Cancel to return to the module without creating the sale.',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe Verkoop',
  'LNK_NEW_SALE' => 'Nieuwe Verkoop',
  'LNK_SALE_LIST' => 'Sale',
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the sale.',
  'LBL_TOP_SALES' => 'Mijn Top Openstaande Verkopen',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Ben je zeker dat je deze contactpersoon wil verwijderen uit de verkoop?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Ben je zeker dat je deze verkoop wil verwijderen uit het project?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sale',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activiteiten',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'History',
    'LBL_RAW_AMOUNT'=>'Ruw Bedrag',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_MY_CLOSED_SALES' => 'Mijn gewonnen verkopen',
  'LBL_TOTAL_SALES' => 'Totale Verkopen',
  'LBL_CLOSED_WON_SALES' => 'Gewonnen Verkopen',
  'LBL_ASSIGNED_TO_ID' =>'Toegewezen aan ID',
  'LBL_CREATED_ID'=>'Aangemaakt door ID',
  'LBL_MODIFIED_ID'=>'Gewijzigd door ID',
  'LBL_MODIFIED_NAME'=>'Gewijzigd door Gebruikersnaam',
  'LBL_SALE_INFORMATION'=>'Verkoopinformatie',
  'LBL_CURRENCY_ID'=>'Valuta ID',
  'LBL_CURRENCY_NAME'=>'Valutanaam',
  'LBL_CURRENCY_SYMBOL'=>'Valutasymbool',
  'LBL_EDIT_BUTTON' => 'Wijzigen',
   'LBL_REMOVE' => 'Verwijder',


);

