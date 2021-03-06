<?php

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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Affärsmöjligheter',
    'LBL_MODULE_NAME_SINGULAR' => 'Affärsmöjlighet',
    'LBL_MODULE_TITLE' => 'Affärsmöjligheter: Hem',
    'LBL_SEARCH_FORM_TITLE' => 'Sök affärsmöjligheter',
    'LBL_VIEW_FORM_TITLE' => 'Visa affärsmöjlighet',
    'LBL_LIST_FORM_TITLE' => 'Lista affärsmöjligheter',
    'LBL_OPPORTUNITY_NAME' => 'Affärsmöjlighet namn:',
    'LBL_OPPORTUNITY' => 'Affärsmöjlighet:',
    'LBL_NAME' => 'Namn på affärsmöjligheten',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Valutor',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Namn',
    'LBL_LIST_ACCOUNT_NAME' => 'Företagsnamn',
    'LBL_LIST_DATE_CLOSED' => 'Förväntat slutdatum',
    'LBL_LIST_AMOUNT' => 'Summa',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Totalt belopp',
    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_CURRENCY_RATE' => 'Valutakurs',
    'LBL_CURRENCY_ID' => 'Valuta ID',
    'LBL_CURRENCY_NAME' => 'Valutanamn',
    'LBL_CURRENCY_SYMBOL' => 'Valuta symbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Affärsmöjlighet - Valuta uppdatering',
    'UPDATE_DOLLARAMOUNTS' => 'Uppdatera summor',
    'UPDATE_VERIFY' => 'Verifiera summor',
    'UPDATE_VERIFY_TXT' => 'Verifierar att summans värde i affärsmöjligheterna har giltiga decimalsiffror, endast numeriska tecken (0-9) och decimaler (.)',
    'UPDATE_FIX' => 'Fixa summor',
    'UPDATE_FIX_TXT' => 'Försöker fixa ogiltiga summor genom att skapa ett giltigt decimaltal baserat på den aktuella valutan. Alla modifierade summor backupas till databasfältet amount_backup. Om du kör den här funktionen och noterar någon bugg, kör i så fall inte om funktionen innan du återställt data från backupen, eftersom du annars riskerar att skriva över backupen med ny ogiltig data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Uppdatera beloppet som angivits i US Dollar för de aktuella affärsmöjligheterna med den nya valutakonverteringsfaktorn. Detta värde används för att skapa grafer och lista summor.',
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
    'UPDATE_MERGE_TXT' => 'Slå samman flera valutor till en valuta. Om det finns flera valutaposter angivna för samma valuta slås de samman. Denna funktion slår även samman valutorna för alla andra moduler.',
    'LBL_ACCOUNT_NAME' => 'Account namn:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Förväntat avslutsdatum:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Förväntad slutdatum tidsstämpel',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampanj:',
    'LBL_NEXT_STEP' => 'Nästa steg:',
    'LBL_LEAD_SOURCE' => 'Lead källa',
    'LBL_SALES_STAGE' => 'Säljnivå',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Sannolikhet (%)',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DUPLICATE' => 'Möjlig kopia av affärsmöjligheten',
    'MSG_DUPLICATE' => 'Den affärsmöjlighet du försöker skapa kan vara en kopia på en existerande affärsmöjlighet. Affärsmöjligheter med liknande namn listas nedan.<br> Klicka på Spara för att ändå spara den nya affärsmöjligheten eller klicka Avbryt för att återvända till modulen utan att skapa affärsmöjligheten.',
    'LBL_NEW_FORM_TITLE' => 'Skapa affärsmöjlighet',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjlighet',
    'LNK_CREATE' => 'Skapa ärende',
    'LNK_OPPORTUNITY_LIST' => 'Affärsmöjligheter',
    'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera affärsmöjligheten.',
    'LBL_TOP_OPPORTUNITIES' => 'Mina mest intressanta affärsmöjligheter',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Är du säker på att du vill ta bort kontakten från affärsmöjligheten?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Är du säker på att du vill ta bort affärsmöjligheten från projektet?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Affärsmöjligheter',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_RAW_AMOUNT' => 'Belopp',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_LIST_SALES_STAGE' => 'Säljnivå',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mina stängda affärsmöjligheter',
    'LBL_TOTAL_OPPORTUNITIES' => 'Alla affärsmöjligheter',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Stängda vunna affärsmöjligheter',
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad till ID',
    'LBL_CREATED_ID' => 'Skapad av ID',
    'LBL_MODIFIED_ID' => 'Redigerad av ID',
    'LBL_MODIFIED_NAME' => 'Redigerad av användarnamn',
    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_MODIFIED_USER' => 'Ändrad användare',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjer',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
    'LABEL_PANEL_ASSIGNMENT' => 'Tilldelning',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importera affärsmöjligheter',
    'LBL_EDITLAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanj ID',
    'LBL_OPPORTUNITY_TYPE' => 'Typ av Affärsmöjlighet',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tilldelat Användarnamn',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad Användar ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Ändrad av ID',
    'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
    'LBL_EXPORT_NAME' => 'Namn',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterad Kontakts Emails',
    'LBL_FILENAME' => 'Bilaga',
    'LBL_PRIMARY_QUOTE_ID' => 'Primär offert',
    'LBL_CONTRACTS' => 'Kontakter',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_PRODUCTS' => 'Produkter',
    'LBL_RLI' => 'Intäktsposter',
    'LNK_OPPORTUNITY_REPORTS' => 'Affärsmöjlighet rapporter',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerter',
    'LBL_TEAM_ID' => 'Team ID',
    'LBL_TIMEPERIODS' => 'Tidsperioder',
    'LBL_TIMEPERIOD_ID' => 'Tidsperiod ID',
    'LBL_COMMITTED' => 'Committed',
    'LBL_FORECAST' => 'Inkludera i prognos',
    'LBL_COMMIT_STAGE' => 'Commit fas',
    'LBL_WORKSHEET' => 'Arbetsark',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Offerter',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Affärsmöjlighet Hierarki',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Set the Expected Close Date field on the resulting Opportunity records to be the earliest or latest close dates of the existing Revenue Line Items',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipelinen Totalt är',

    'LBL_OPPORTUNITY_ROLE'=>'Affärsmöjlighetsroll',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Anteckningar',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'By clicking Confirm, you will be erasing ALL Forecasts data and changing your Opportunities View. If this is not what you intended, click cancel to return to previous settings.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'If all Revenue Line Items are closed and at least one was won,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'Affärsmöjlighetens säljfas är satt till "Stängd vunnen".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'If all Revenue Line Items are in the "Closed Lost" Sales Stage,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'Affärsmöjlighetens säljfas är satt till "Stängd förlorad"',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'If any Revenue Line Items are still open,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'the Opportunity will be marked with the least-advanced Sales Stage.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Med {plural_module_name}}-modulen kan du spåra individuella försäljningar och de artiklar som hör till denna försäljning från början till slut. Varje {{module}}post utgör en rubrik för en grupp av {{revenuelineitems_module}} samt avseende på andra viktiga poster som t.ex. {{quotes_module}}, {{contacts_module}}, etc. Varje {{revenuelineitems_singular_module}} är en blivande försäljning av en viss produkt och innehåller relevanta försäljningsuppgifter. Varje {{revenuelineitems_singular_module}} följer försljningsprocesses tills den är märkt antingen "Closed Won" eller "Closed Lost". 
{{modul}}vyn återspeglar beloppet och förväntade avslut för dess {{revenuelineitems_module}}. 
{{plural_module_name}} och {{revenuelineitems_module}} kan utnyttjas ytterligare genom att använda Sugars {{forecasts_singular_module}}modul för att förstå och förutsäga försäljningsutvecklingen samt fokusera arbete för att uppnå försäljningskvoter.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Med {plural_module_name}}-modulen kan du spåra individuella försäljningar och de artiklar som hör till denna försäljning från början till slut.  Redigera denna postens fält genom att klicka ett enskilt fält eller på knappen Redigera. - Visa eller ändra länkar till andra poster i underpaneler, även {{campaigns_singular_module}} mottagare, genom att växla den nedre vänstra rutan till "Data View". 
- Utför och se användarkommentarer och eller se förändringar i {{activitystream_singular_module}} genom att växla den nedre vänstra rutan på "Activity Stream". - Följ som favorit med hjälp av ikonerna till höger om namnet. - Ytterligare åtgärder finns i dropdown menyn Åtgärder till höger om knappen Redigera.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Med {plural_module_name}}-modulen kan du spåra individuella försäljningar och de artiklar som hör till denna försäljning från början till slut. För att skapa en {{modul}}: 1 För in värden för fälten som önskat. 
- Fält markerade ""Required"" måste fyllas i innan du sparar. - Klicka på "Visa mer" för att visa ytterligare fält vid behov. 2 Klicka på "Spara" för att spara och återgå till föregående sidan. - Välj "Spara och visa" för att öppna den nya {{modul}}. - Välj "Spara och skapa ny" för att omedelbart skapa en annan ny {{modul}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sync to Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Topp 10 Affärsmöjligheter',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Visar topp tio Affärsmöjligheter i ett bubbeldiagram.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Mina Affärsmöjligheter',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Mitt Teams Affärsmöjligheter",
);
