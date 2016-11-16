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
    'LBL_MODULE_NAME' => 'Salgsmuligheder',
    'LBL_MODULE_NAME_SINGULAR' => 'Salgsmulighed',
    'LBL_MODULE_TITLE' => 'Salgsmuligheder: Startside',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter salgsmulighed',
    'LBL_VIEW_FORM_TITLE' => 'Vis salgsmulighed',
    'LBL_LIST_FORM_TITLE' => 'Salgsmulighedsliste',
    'LBL_OPPORTUNITY_NAME' => 'Salgsmuligheds navn:',
    'LBL_OPPORTUNITY' => 'Salgsmulighed:',
    'LBL_NAME' => 'Salgsmuligheds navn',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Valutaer',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Navn',
    'LBL_LIST_ACCOUNT_NAME' => 'Virksomhedsnavn',
    'LBL_LIST_DATE_CLOSED' => 'Forventet lukkedato:',
    'LBL_LIST_AMOUNT' => 'Beløb',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Total beløb',
    'LBL_ACCOUNT_ID' => 'Virksomheds-id:',
    'LBL_CURRENCY_RATE' => 'Valutakurs',
    'LBL_CURRENCY_ID' => 'Ekspert valuta ID',
    'LBL_CURRENCY_NAME' => 'Valutanavn',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Salgsmulighed - valutaopdatering',
    'UPDATE_DOLLARAMOUNTS' => 'Opdater USD-beløb',
    'UPDATE_VERIFY' => 'Bekræft beløb',
    'UPDATE_VERIFY_TXT' => 'Kontrollerer, at beløbsværdierne i salgsmuligheder er gyldige decimaltal med kun numeriske tegn "0-9" og decimaler "."',
    'UPDATE_FIX' => 'Ret beløb',
    'UPDATE_FIX_TXT' => 'Forsøg på at rette ugyldige beløb ved at oprette en gyldig decimal ud fra det nuværende beløb. Ændrede beløb sikkerhedskopieres i databasefeltet amount_backup. Hvis du kører denne og får fejl, skal du ikke køre den igen uden at gendanne sikkerhedskopien, da det kan overskrive sikkerhedskopien med nye ugyldige data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Opdater USD-beløb for salgsmuligheder baseret på de aktuelle valutakurser. Denne værdi bruges til at beregne diagrammer og vise valutabeløb.',
    'UPDATE_CREATE_CURRENCY' => 'Opretter ny valuta:',
    'UPDATE_VERIFY_FAIL' => 'Registrer mislykket verifikation:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Aktuelt beløb:',
    'UPDATE_VERIFY_FIX' => 'Kørsel af rettelse vil give',
    'UPDATE_INCLUDE_CLOSE' => 'Medtag lukkede poster',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nyt beløb:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
    'UPDATE_DONE' => 'Udført',
    'UPDATE_BUG_COUNT' => 'Der blev fundet fejl og gjort forsøg på at løse dem:',
    'UPDATE_BUGFOUND_COUNT' => 'Der blev fundet fejl:',
    'UPDATE_COUNT' => 'Poster opdateret:',
    'UPDATE_RESTORE_COUNT' => 'Postbeløb gendannet:',
    'UPDATE_RESTORE' => 'Gendan beløb',
    'UPDATE_RESTORE_TXT' => 'Gendanner beløbsværdier ud fra de sikkerhedskopier, der blev oprettet under rettelsen.',
    'UPDATE_FAIL' => 'Kunne ikke opdatere -',
    'UPDATE_NULL_VALUE' => 'Beløbet er NULL. Angiver det til 0 -',
    'UPDATE_MERGE' => 'Flet valutaer',
    'UPDATE_MERGE_TXT' => 'Fletter flere valutaer til en fælles valuta. Hvis der er flere valutaposter for samme valuta, skal du flette dem. Derved flettes også valutaerne for alle andre moduler.',
    'LBL_ACCOUNT_NAME' => 'Virksomhedsnavn:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Forventet lukkedato:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Dato lukket tidsstempel',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_NEXT_STEP' => 'Næste trin:',
    'LBL_LEAD_SOURCE' => 'Kilde til kundeemne',
    'LBL_SALES_STAGE' => 'Salgsfase',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Sandsynlighed',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DUPLICATE' => 'Mulig identisk salgsmulighed',
    'MSG_DUPLICATE' => 'Den salgsmulighedspost, du er ved at oprette, kan være en dublet af en salgsmulighedspost, der allerede findes. Salgsmulighedsposter, der indeholder lignende navne, er angivet nedenfor.<br>Klik på Gem for at fortsætte med at oprette denne nye salgsmulighed, eller klik på Annuller for at vende tilbage til modulet uden at oprette salgsmuligheden.',
    'LBL_NEW_FORM_TITLE' => 'Opret salgsmulighed',
    'LNK_NEW_OPPORTUNITY' => 'Opret salgsmulighed',
    'LNK_CREATE' => 'Opret sag',
    'LNK_OPPORTUNITY_LIST' => 'Salgsmuligheder',
    'ERR_DELETE_RECORD' => 'Der skal angives et postnummer for at slette salgsmuligheden.',
    'LBL_TOP_OPPORTUNITIES' => 'Mine bedste åbne salgsmuligheder',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på, at du vil fjerne denne kontakt fra salgsmuligheden?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på, at du vil fjerne denne salgsmulighed fra projektet?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Salgsmuligheder',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historik',
    'LBL_RAW_AMOUNT' => 'Bruttobeløb',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Kundeemner',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekter',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruger',
    'LBL_LIST_SALES_STAGE' => 'Salgsfase',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mine lukkede salgsmuligheder',
    'LBL_TOTAL_OPPORTUNITIES' => 'Samlede salgsmuligheder',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lukkede vundne salgsmuligheder',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt til id:',
    'LBL_CREATED_ID' => 'Oprettet af id',
    'LBL_MODIFIED_ID' => 'Ændret af id',
    'LBL_MODIFIED_NAME' => 'Ændret af brugernavn',
    'LBL_CREATED_USER' => 'Oprettet bruger',
    'LBL_MODIFIED_USER' => 'Ændret bruger',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagner',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekter',
    'LABEL_PANEL_ASSIGNMENT' => 'Tildeling',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importér salgsmuligheder',
    'LBL_EDITLAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampagne-id',
    'LBL_OPPORTUNITY_TYPE' => 'Salgsmulighedstype',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt brugernavn',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt bruger-id',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Ændret af id',
    'LBL_EXPORT_CREATED_BY' => 'Oprettet af id',
    'LBL_EXPORT_NAME' => 'Navn',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterede kontakters e-mail-adresser',
    'LBL_FILENAME' => 'Vedhæftet fil',
    'LBL_PRIMARY_QUOTE_ID' => 'Primært tilbud',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakter',
    'LBL_PRODUCTS' => 'Produkter',
    'LBL_RLI' => 'Omsætningsposter',
    'LNK_OPPORTUNITY_REPORTS' => 'Salgsmulighedsrapporter',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
    'LBL_TEAM_ID' => 'Team-id',
    'LBL_TIMEPERIODS' => 'Tidsperioder',
    'LBL_TIMEPERIOD_ID' => 'Tidsperiode-id',
    'LBL_COMMITTED' => 'Forpligted',
    'LBL_FORECAST' => 'Prognose',
    'LBL_COMMIT_STAGE' => 'Forpligtet fase',
    'LBL_WORKSHEET' => 'Regneark',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tilbud',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Opportunity Hierarchy',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Set the Expected Close Date field on the resulting Opportunity records to be the earliest or latest close dates of the existing Revenue Line Items',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline Total is ',

    'LBL_OPPORTUNITY_ROLE'=>'Salgsmuligheds rolle:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Noter',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'By clicking Confirm, you will be erasing ALL Forecasts data and changing your Opportunities View. If this is not what you intended, click cancel to return to previous settings.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'If all Revenue Line Items are closed and at least one was won,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'the Opportunity Sales Stage is set to "Closed Won".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'If all Revenue Line Items are in the "Closed Lost" Sales Stage,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'the Opportunity Sales Stage is set to "Closed Lost".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'If any Revenue Line Items are still open,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'the Opportunity will be marked with the least-advanced Sales Stage.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Den {{plural_module_name}} modul giver dig mulighed for at spore individuelle salg og linjeposterne tilhører disse salg fra start til slut. Hver {{MODULE_NAME}} post repræsenterer en overskrift for en gruppe af {{revenuelineitems_module}} samt vedrørende andre vigtige poster såsom {{quotes_module}}, {{contacts_module}}, osv. Hver {{revenuelineitems_singular_module}} vil typisk avancere i flere salgsfaser indtil det er mærket enten "Closed Won" eller "Closed Lost". Den {{MODULE_NAME}} post afspejler mængden og forventet Close dato for dens {{revenuelineitems_module}}. {{plural_module_name}} og {{revenuelineitems_module}} kan udnyttes yderligere ved at bruge Sugars {{forecasts_singular_module}} ing modul til at forstå og forudsige salgstendenser samt fokus arbejde for at opnå salgskvoter.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Den {{plural_module_name}} modul giver dig mulighed for at spore individuelle salg og linjeposterne tilhører disse salg fra start til slut. Hver {{MODULE_NAME}} post repræsenterer en overskrift for en gruppe af {{revenuelineitems_module}} samt vedrørende andre vigtige poster såsom {{quotes_module}}, {{contacts_module}} osv. - Rediger denne posts felter ved at klikke et enkelt felt eller på knappen Rediger. - Se eller ændre links til andre poster i underpaneler, herunder {{revenuelineitems_module}}, ved at skifte det nederste venstre rude til"Data View". - Foretag og vis brugernes kommentarer og post ændringshistorie i {{activitystream_singular_module}} ved at skifte det nederste venstre rude til "Activity Stream". - Følg eller favourite denne post med ikonerne til højre for posten navn. - Yderligere handlinger er tilgængelige i dropdown menuen Handlinger til højre for knappen Rediger.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Den {{plural_module_name}} modul giver dig mulighed for at spore individuelle salg og linjeposterne tilhører disse salg fra start til slut. Hver {{MODULE_NAME}} post repræsenterer en overskrift for en gruppe af {{revenuelineitems_module}} samt vedrørende andre vigtige poster såsom {{quotes_module}}, {{contacts_module}} osv. For at skabe en {{MODULE_NAME} }:. 1. Give værdier for de felter som ønsket. - Felter mærket "Påkrævet" skal være afsluttet, før du gemmer. - Klik på "Vis mere" for at eksponere yderligere felter, hvis det er nødvendigt. 2.. Klik på "Gem" for at færdiggøre den nye post og vende tilbage til den forrige side. - Vælg "Gem og vis" for at åbne den nye {{MODULE_NAME}} listevisning. - Vælg "Gem og skabe nye" til straks at oprette et nyt {{MODULE_NAME}}. 3.. Efter lagring, skal du bruge {{revenuelineitems_module}} undertavle at føje poster til {{MODULE_NAME}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Synkroniser til Marketo ®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 Sales Opportunities',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Displays top ten Opportunities in a bubble chart.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'My Opportunities',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "My Team's Opportunities",
);
