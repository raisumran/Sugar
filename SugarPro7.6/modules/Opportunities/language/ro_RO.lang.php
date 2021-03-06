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
    'LBL_MODULE_NAME' => 'Oportunitati',
    'LBL_MODULE_NAME_SINGULAR' => 'Oportunitate',
    'LBL_MODULE_TITLE' => 'Oportunitati :Acasa',
    'LBL_SEARCH_FORM_TITLE' => 'Cautare oportunitate',
    'LBL_VIEW_FORM_TITLE' => 'Vizualizare Oportunitati',
    'LBL_LIST_FORM_TITLE' => 'Lista oportunitati',
    'LBL_OPPORTUNITY_NAME' => 'Nume Oportunitate:',
    'LBL_OPPORTUNITY' => 'Oportunitati',
    'LBL_NAME' => 'Nume oportunitate',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Valute',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nume',
    'LBL_LIST_ACCOUNT_NAME' => 'Numele Contului',
    'LBL_LIST_DATE_CLOSED' => 'Data estimata de inchidere',
    'LBL_LIST_AMOUNT' => 'Previzibil',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Cantitate Totala',
    'LBL_ACCOUNT_ID' => 'ID cont',
    'LBL_CURRENCY_RATE' => 'Curs de schimb',
    'LBL_CURRENCY_ID' => 'ID valuta',
    'LBL_CURRENCY_NAME' => 'Nume valuta',
    'LBL_CURRENCY_SYMBOL' => 'Simbol valuta',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Vanzari - Actualizare Moneda',
    'UPDATE_DOLLARAMOUNTS' => 'Update Sume Dolari U. S.',
    'UPDATE_VERIFY' => 'Verifica sumele',
    'UPDATE_VERIFY_TXT' => 'Verifică dacă valorile in suma de vânzări sunt valabile numerele zecimale  numai cu caractere numerice (0-9) şi numărul de zecimale (.)',
    'UPDATE_FIX' => 'Sume fixe',
    'UPDATE_FIX_TXT' => 'Încercările de a rezolva orice sume incorecte, prin crearea unui zecimal valid din valoarea actuală. Orice sumă modificata este susţinuta în domeniul baza de date amount_backup . Dacă rulaţi acest anunţ şi observati probleme, nu-l rulaţi din nou fără restaurarea din backup, deoarece se poate suprascrie  cu noile date incorecte.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualizaţi sumele pentru dolarul american pentru vânzări pe baza ratelor actuale valutar stabilite. Această valoare este folosită pentru a calcula grafice şi Lista Vizualizare Sume valutare.',
    'UPDATE_CREATE_CURRENCY' => 'Creaza moneda noua',
    'UPDATE_VERIFY_FAIL' => 'Verificare a inregistrarii esuata',
    'UPDATE_VERIFY_CURAMOUNT' => 'Cantitate suma:',
    'UPDATE_VERIFY_FIX' => 'Efectuand Depanare ne va da',
    'UPDATE_INCLUDE_CLOSE' => 'Include si Inregistrarile Inchise',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Suma Noua:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Moneda noua:',
    'UPDATE_DONE' => 'Terminat',
    'UPDATE_BUG_COUNT' => 'Probleme gasite si incercate sa fie rezolvate',
    'UPDATE_BUGFOUND_COUNT' => 'Probleme gasite:',
    'UPDATE_COUNT' => 'Inregistrari actualizate',
    'UPDATE_RESTORE_COUNT' => 'Inregistrari sume restaurate',
    'UPDATE_RESTORE' => 'Restabileste sume',
    'UPDATE_RESTORE_TXT' => 'Restabileste valoarea sumelor din valorile de rezerva create in timpul depanarii',
    'UPDATE_FAIL' => 'Nu au fost putut fi actualizate -',
    'UPDATE_NULL_VALUE' => 'Suma este NULA sabilind-o 0 -',
    'UPDATE_MERGE' => 'Imbina monede',
    'UPDATE_MERGE_TXT' => 'Îmbina mai multe monede într-o monedă unică. Dacă există mai multe înregistrări monedă pentru aceeaşi monedă, imbina împreună. Acest lucru va imbina, de asemenea, monedele din toate celelalte module.',
    'LBL_ACCOUNT_NAME' => 'Nume cont:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Data la care se asteapta sa se inchida',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Data estimata de inchidere (data si ora)',
    'LBL_TYPE' => 'Tip',
    'LBL_CAMPAIGN' => 'Campanie',
    'LBL_NEXT_STEP' => 'Pasul urmator:',
    'LBL_LEAD_SOURCE' => 'Sursa prospect',
    'LBL_SALES_STAGE' => 'Stadiu vanzare',
    'LBL_SALES_STATUS' => 'Statut',
    'LBL_PROBABILITY' => 'Probabilitate (%)',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DUPLICATE' => 'Posibila Oportunitate Duplicata',
    'MSG_DUPLICATE' => 'Inregistrarea oportunitatii ce sunteti pe cale sa o creati poate fi un duplicat al unei inregistrari de oportunitate care exista deja. Inregistrarile de oportunitate care contin nume si/sau adrese de email similare sunt listate mai jos. Dati click pe Salvare pentru a continua sa creati aceasta noua oportunitate, sau dati click pe Revocare pentru a reveni la modul fara ca oportunitatea sa fie creata.',
    'LBL_NEW_FORM_TITLE' => 'Creeaza Oportunitate',
    'LNK_NEW_OPPORTUNITY' => 'Creeaza Oportunitate',
    'LNK_CREATE' => 'Creaza caz',
    'LNK_OPPORTUNITY_LIST' => 'Vezi oportunitati',
    'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge oportunitatea',
    'LBL_TOP_OPPORTUNITIES' => 'Topul celor mai deschise oportunitati',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Sunteti sigur ca vreti sa stergeti acest contact din oportunitate?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sunteti sigur ca vreti sa stergeti aceasta oportunitate din proiect?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunitati',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitati',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istoric',
    'LBL_RAW_AMOUNT' => 'Suma Bruta',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospecti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documente',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiecte',
    'LBL_ASSIGNED_TO_NAME' => 'Atrbuit lui',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator Atribuit',
    'LBL_LIST_SALES_STAGE' => 'Stadiu vanzare',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Oportunitatile mele inchise',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunitatile totale',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunitatile castigate inchise',
    'LBL_ASSIGNED_TO_ID' => 'Utilizator Atribuit:',
    'LBL_CREATED_ID' => 'Creata de ID',
    'LBL_MODIFIED_ID' => 'Modificata de ID',
    'LBL_MODIFIED_NAME' => 'Modificata de Nume',
    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Utilizator modificat',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanii',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiecte',
    'LABEL_PANEL_ASSIGNMENT' => 'Sarcina',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importa oportunitati',
    'LBL_EDITLAYOUT' => 'Editeaza Plan General' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID campanie',
    'LBL_OPPORTUNITY_TYPE' => 'Tip Oportunitate',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Alocat utilizatorului',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Alocat utilizatorului ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat de ID-ul',
    'LBL_EXPORT_CREATED_BY' => 'Creat de ID',
    'LBL_EXPORT_NAME' => 'Nume',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Contacte Email Asociate',
    'LBL_FILENAME' => 'Atasament',
    'LBL_PRIMARY_QUOTE_ID' => 'Citat principal',
    'LBL_CONTRACTS' => 'Contracte',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contracte',
    'LBL_PRODUCTS' => 'Elemente din ofertă',
    'LBL_RLI' => 'Elemente venit',
    'LNK_OPPORTUNITY_REPORTS' => 'Vezi rapoarte oportunitati',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotatii',
    'LBL_TEAM_ID' => 'ID Echipa:',
    'LBL_TIMEPERIODS' => 'Perioade de timp:',
    'LBL_TIMEPERIOD_ID' => 'Perioada de timp',
    'LBL_COMMITTED' => 'Alocat',
    'LBL_FORECAST' => 'Include in Previziuni',
    'LBL_COMMIT_STAGE' => 'Stadiu asumare',
    'LBL_WORKSHEET' => 'Foaie de lucru',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Cotatii',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Ierarhie oportunităţi',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Setează câmpul Data previzionată de închidere din înregistrările de oportunitate rezultate la datele de închidere cele mai recente sau cele mai îndepărtate din elementele de venit',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Totalul oportunităţilor de vânzări este',

    'LBL_OPPORTUNITY_ROLE'=>'Rol Oportunitate',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Note',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Făcând clic pe Confirmare, veţi şterge TOATE datele cu previzionări şi veţi modifica Fereastra Oportunităţi. Dacă nu asta aţi dorit, faceţi clic pe Anulare pentru a reveni la setările anterioare.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Dacă toate elementele de venit sunt încheiate şi cel puţin unul a fost câştigat,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'Stadiul de vânzări din Oportunităţi este setat la „Încheiat cu succes”.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Dacă toate elementele de venit sunt în stadiul de vânzări „Încheiat în pierdere”,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'Stadiul de vânzări din Oportunităţi este setat la „Încheiat în pierdere”.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Dacă mai este deschis vreun element de venit,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'Oportunitatea va fi marcată cu Stadiul de vânzări cel mai puţin avansat.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Modulul {{plural_module_name}} vă permite să monitorizaţi vânzările individuale şi elementele de linie ce aparţin respectivelor vânzări de la început până la sfârşit. Fiecare înregistrare {{module_name}} reprezintă un antet pentru un grup de{{revenuelineitems_module}}, dar relaţionează şi cu alte înregistrări importante, cum ar fi {{quotes_module}}, {{contacts_module}} etc. Fiecare {{revenuelineitems_singular_module}} reprezintă vânzarea propriu-zisă a unui anumit produs şi cuprinde date relevante de vânzare. Fiecare {{revenuelineitems_singular_module}} va parcurge diferite Stadii de vânzări până când este marcat drept „Încheiat cu succes" sau „Încheiat în pierdere". Înregistrarea {{module_name}} reflectă suma şi data aşteptată de încheiere a {{revenuelineitems_module}}. {{plural_module_name}} şi {{revenuelineitems_module}} pot fi trecute mai departe în alt stadiu, utilizând modulul Sugar {{forecasts_singular_module}} pentru a înţelege şi previziona tendinţele de vânzări, precum şi pentru a îndrepta munca spre obţinerea ofertelor de vânzare.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Modulul {{plural_module_name}} vă permite să monitorizaţi vânzările individuale şi elementele de linie ce aparţin respectivelor vânzări de la început până la sfârşit. Fiecare înregistrare {{module_name}} reprezintă un antet pentru un grup de{{revenuelineitems_module}}, dar relaţionează şi cu alte înregistrări importante, cum ar fi {{quotes_module}}, {{contacts_module}} etc. Editează câmpurile acestei înregistrări apăsând pe fiecare câmp individual sau pe butonul Editare. - Vizualizează sau modifică linkuri către alte înregistrări in panourile secundare, trecând fereastra din stânga jos în stadiul "Vizualizare Date". - Creează şi vizualizează comentariile altor utilizatori şi istoricul modificărilor în {{activitystream_singular_module}} trecând fereastra din stânga jos în stadiul "Flux de activitate". - Urmăreşte sau marchează ca favorit această înregistrare folosind pictogramele din dreapta numelui înregistrării. - Sunt disponibile acţiuni suplimentare în meniul cu listă derulantă Acţiuni din dreapta butonului Editare.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Modulul {{plural_module_name}} vă permite să monitorizaţi vânzările individuale şi elementele de linie ce aparţin respectivelor vânzări de la început până la sfârşit. Fiecare înregistrare {{module_name}} reprezintă un antet pentru un grup de{{revenuelineitems_module}}, dar relaţionează şi cu alte înregistrări importante, cum ar fi {{quotes_module}}, {{contacts_module}} etc. Pentru a crea {{module_name}}: 1. Completează valori în câmpurile dorite. - Câmpurile marcate "Obligatoriu" trebuie să fie completate înainte de a salva. - Apasă butonul "Afişează mai mult" pentru a vedea câmpuri adiţionale dacă este necesar. 2. Apasă "Salvează" pentru a finaliza noua înregistrare şi pentru a reveni la pagina anterioară. - Apasă "Salvează şi vizualizează" pentru a deschide noul (noua) {{module_name}} în fereastra de vizualizare a înregistrărilor. - Apasă "Salvează şi creează o înregistrare nouă" pentru a crea imediat un nou (o nouă) {{module_name}}. 3. După salvare, utilizaţi panoul secundar {{revenuelineitems_module}} pentru a adăuga elemente de linie la {{module_name}}',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizare către Marketo®',
    'LBL_MKTO_ID' => 'ID parte introductivă Marketo',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 Oportunităţi de vânzări',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Afişează top zece Oportunităţi într-o diagramă cu bule.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Oportunităţile mele',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Oportunităţile echipei mele",
);
