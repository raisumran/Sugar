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
    'LBL_MODULE_NAME' => 'Muligheter',
    'LBL_MODULE_NAME_SINGULAR' => 'Salgsmulighet',
    'LBL_MODULE_TITLE' => 'Opportunities: Hjem',
    'LBL_SEARCH_FORM_TITLE' => 'Salgsmulighet søk',
    'LBL_VIEW_FORM_TITLE' => 'Opportunity visning',
    'LBL_LIST_FORM_TITLE' => 'Opportunity liste',
    'LBL_OPPORTUNITY_NAME' => 'Mulighetsnavn:',
    'LBL_OPPORTUNITY' => 'Opportunity:',
    'LBL_NAME' => 'Salgsmulighet navn:',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Valuta',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Navn',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonavn',
    'LBL_LIST_DATE_CLOSED' => 'Forventet lukkedato',
    'LBL_LIST_AMOUNT' => 'Mengde',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Totalt beløp',
    'LBL_ACCOUNT_ID' => 'Bedrift-ID',
    'LBL_CURRENCY_RATE' => 'Valutakurs',
    'LBL_CURRENCY_ID' => 'Valuta ID',
    'LBL_CURRENCY_NAME' => 'Valuta navn',
    'LBL_CURRENCY_SYMBOL' => 'Valutasymbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Opportunity - valutaoppdatering',
    'UPDATE_DOLLARAMOUNTS' => 'Oppdatér U.S. Dollar-beløp',
    'UPDATE_VERIFY' => 'Bekreft beløp',
    'UPDATE_VERIFY_TXT' => 'Bekrefter att verdien i Opportunities er gyldige desimaltall som kun inneholder numeriske tegn (0-9) og desimaler (.)',
    'UPDATE_FIX' => 'Ordne beløp',
    'UPDATE_FIX_TXT' => 'Prøver å ordne det slik at ugyldige beløp blir gitt en gyldig desimal fra den nåværende beløp. Alle endrede beløp får oppbakking via mengde_backup databasefeltet. Hvis du utfører denne handlingen og oppdager feil, vennligst ikke prøv igjen før du har gjenopprettet ved hjelp av backupen. Hvis ikke kan backup-dataene overskrives med nye ugyldige data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Oppdatér U.S. Dollar-beløpet for Opportunities basert på den nåværende valutakursen. Denne verdien brukes for å kalkulere Grafer og Listevisning av Valutabeløp.',
    'UPDATE_CREATE_CURRENCY' => 'Oppretter ny valuta:',
    'UPDATE_VERIFY_FAIL' => 'Registerkontrollen mislyktes:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Nåværende beløp:',
    'UPDATE_VERIFY_FIX' => 'Å kjøre ordningen ville gitt',
    'UPDATE_INCLUDE_CLOSE' => 'Inkluderer lukkede registre',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nytt beløp:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Ny valuta:',
    'UPDATE_DONE' => 'Ferdigstilt',
    'UPDATE_BUG_COUNT' => 'Bug ble funnet og prøvd løst:',
    'UPDATE_BUGFOUND_COUNT' => 'Bug funnet:',
    'UPDATE_COUNT' => 'Registre ble oppdatert:',
    'UPDATE_RESTORE_COUNT' => 'Registermengder ble gjenopprettet:',
    'UPDATE_RESTORE' => 'Gjenopprett beløp',
    'UPDATE_RESTORE_TXT' => 'Gjenopprett beløp fra backup som ble til ved opprettingen.',
    'UPDATE_FAIL' => 'Kunne ikke oppdatere -',
    'UPDATE_NULL_VALUE' => 'Mengden er NULL som gir 0 -',
    'UPDATE_MERGE' => 'Fusjonér valutaer',
    'UPDATE_MERGE_TXT' => 'Fusjonér multiplume valutaer til en enkelt valuta. Hvis det finnes flere oppføringer for samme valuta, kan du slå de sammen til én. Dette vil også slå sammen valutaene for alle andre moduler.',
    'LBL_ACCOUNT_NAME' => 'Bedriftnavn:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Forventet avslutningsdato:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Forventet lukkedato tidsstempel',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Kampanje:',
    'LBL_NEXT_STEP' => 'Neste skritt',
    'LBL_LEAD_SOURCE' => 'Lead-kilde',
    'LBL_SALES_STAGE' => 'Salgsfase',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Sannsynlighet (%)',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_DUPLICATE' => 'Mulig dobbeltOpportunity',
    'MSG_DUPLICATE' => 'Denne Opportunity oppføringen som du er iferd med å opprette kan være en kopi av en Opportunity som allerede finnes. Opportunity oppføringer med lignende navn listes nedenfor.<br>Klikk på lagre for å fortsette med opprettelsen av denne Opportunity, eller klikk på Avbryt for å gå tilbake uten å opprette en ny Opportunity.',
    'LBL_NEW_FORM_TITLE' => 'Opprett mulighet',
    'LNK_NEW_OPPORTUNITY' => 'Opprett mulighet',
    'LNK_CREATE' => 'Opprett avtale',
    'LNK_OPPORTUNITY_LIST' => 'Vis Opportunities',
    'ERR_DELETE_RECORD' => 'Et registernummer må oppgis for å slette denne Opportunity.',
    'LBL_TOP_OPPORTUNITIES' => 'Mine topp ti salgsmuligheter',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Er du sikker på at du vil fjerne denne Kontakten fra den valgte Opportunity?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Er du sikker på at du vil fjerne denne Opportunity fra det valgte prosjektet?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Muligheter',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historikk',
    'LBL_RAW_AMOUNT' => 'Råmengde',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Prosjekter',
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
    'LBL_LIST_SALES_STAGE' => 'Salgsfase',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mine lukkede salgsmuligheter',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totalt antall salgsmuligheter',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lukkede Vunnet Salgsmuligheter',
    'LBL_ASSIGNED_TO_ID' => 'Tildelt ID:',
    'LBL_CREATED_ID' => 'Opprettet av ID',
    'LBL_MODIFIED_ID' => 'Endret av ID',
    'LBL_MODIFIED_NAME' => 'Endret av brukernavn',
    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_MODIFIED_USER' => 'Endret bruker',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjer',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Prosjekter',
    'LABEL_PANEL_ASSIGNMENT' => 'Tildeling',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importer salgsmuligheter',
    'LBL_EDITLAYOUT' => 'Redigér Oppsett' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanje-ID',
    'LBL_OPPORTUNITY_TYPE' => 'Salgsmulighets-type',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt Brukernavn',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt Bruker-ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Endret av ID',
    'LBL_EXPORT_CREATED_BY' => 'Opprettet Av ID',
    'LBL_EXPORT_NAME' => 'Navn',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Relaterte Kontakters Eposter',
    'LBL_FILENAME' => 'Vedlegg',
    'LBL_PRIMARY_QUOTE_ID' => 'Primært tilbud',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontrakter',
    'LBL_PRODUCTS' => 'Produkter',
    'LBL_RLI' => 'Omsetning linjeelementer',
    'LNK_OPPORTUNITY_REPORTS' => 'Vis Opportunity rapporter',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
    'LBL_TEAM_ID' => 'Gruppe-ID',
    'LBL_TIMEPERIODS' => 'Tidsperioder',
    'LBL_TIMEPERIOD_ID' => 'Tidsperiode-ID',
    'LBL_COMMITTED' => 'Forpliktet',
    'LBL_FORECAST' => 'Inkluder i prognose',
    'LBL_COMMIT_STAGE' => 'Forpliktet stadie',
    'LBL_WORKSHEET' => 'Regneark',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tilbud',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Salgsmuligheter Hiraki',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Still Forventet Lukk Dato feltet på de resulterende Salgsmuligheter poster for å være de tidligste eller seneste nære datoene for de eksisterende Revenue Linjeelementer',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline Total is ',

    'LBL_OPPORTUNITY_ROLE'=>'Salgsmulighetens rolle',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Noteringer',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Ved å klikke på Bekreft , vil du bli slettet alle prognoser data og endre Salgsmuliheter. Hvis dette er ikke hva du mente , trykk Avbryt for å gå tilbake til tidligere innstillinger .',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Hvis alle Revenue Linjeelementer er lukker og minst en er satt til Vunnet',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'Salgsmuligheten er satt til Vunnet',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Hvis alle Revenue Linjeelementer er satt til Tapt i Salgsmulighet Status',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'Salgsmulighet status er satt til "Tapt"',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Hvis noen Revenue Line Items fortsatt er åpne',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'Salgsmuligheten vil bli markert med seneste Salgsmulighet status',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Den {{plural_module_name}} modulen kan du spore individuelle salg og linjeelementer som tilhører disse salgene fra start til slutt. Hver {{module_name}} registrering representerer en header for en gruppe av {{revenuelineitems_module}} samt andre viktige poster som {{quotes_module}}, {{contacts_module}}, etc. Hver {{revenuelineitems_singular_module}} er det potensielle salg av et bestemt produkt, og inkluderer relevante salg data. Hver {{revenuelineitems_singular_module}} vil typisk gå gjennom flere salgstrinn inntil den er merket enten "Lukket Vunnet" eller "Lukket Mistet". Den {{module_name}} post reflekterer mengden og forventet lukkedato for {{revenuelineitems_module}}. {{plural_module_name}} og {{revenuelineitems_module}} kan utnyttes ytterligere ved hjelp av Sugers {{forecasts_singular_module}} ing modul for å forstå og forutsi salgstrender samt fokus arbeid for å oppnå salg kvoter.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Den {{plural_module_name}} modulen kan du spore individuelle salg og linjeelementene som tilhører disse salgene fra start til slutt. Hver {{module_name}} registrering representerer en header for en gruppe av {{revenuelineitems_module}} samt andre viktige poster som {{quotes_module}}, {{contacts_module}}, etc. - Rediger dette registreringsfelt ved å klikke et enkelt felt eller rediger-knappen. - Vis eller endre lenker til andre poster i underpaneler, inkludert {{revenuelineitems_module}}, ved å veksle nedre venstre rute til "Data View". - Lag og vis brukerkommentarer og postendring historie i {{activitystream_singular_module}} ved å veksle nedre venstre ruten til "Activity Stream". - Følg eller favoritt denne posten ved hjelp av ikonene til høyre for registrering navn. - Ytterligere tiltak er tilgjengelig i dropdown menyen Handlinger til høyre på Rediger-knappen.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Den {{plural_module_name}} modulen kan du spore individuelle salg og linjeelementene som tilhører disse salgene fra start til slutt. Hver {{module_name}} registrering representerer en header for en gruppe av {{revenuelineitems_module}} samt andre viktige poster som {{quotes_module}}, {{contacts_module}}, osv. For å lage en {{module_name} }: 1. Gi verdier til feltene som ønsket. - Felt som er merket "kreves" må fullføres før du lagrer. - Klikk "Vis mer" for å avsløre flere felt hvis det er nødvendig. 2. Klikk "Lagre" for å sluttføre den nye posten og gå tilbake til forrige side. - Velg "Lagre og vis" for å åpne den nye {{module_name}} i postvisning. - Velg "Lagre og skape nye" for umiddelbart å opprette en ny {{module_name}}. 3. Etter lagring, bruk {{revenuelineitems_module}} underpanelet for å legge til linjeelementer til {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sync to Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Topp 10 Salgsmuligheter',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Viser Topp 10 Salgsmuligheter i et boblediagram.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Mine Salgsmuligheterr',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Mitt teams TOP 10 Salgsmuligheter",
);
