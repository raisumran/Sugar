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
    'LBL_MODULE_NAME' => 'Obchody',
    'LBL_MODULE_NAME_SINGULAR' => 'Příležitost',
    'LBL_MODULE_TITLE' => 'Obchody: Hlavní stránka',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat obchody',
    'LBL_VIEW_FORM_TITLE' => 'Přehled obchodů',
    'LBL_LIST_FORM_TITLE' => 'Seznam obchodů',
    'LBL_OPPORTUNITY_NAME' => 'Jméno obchodu:',
    'LBL_OPPORTUNITY' => 'Obchody:',
    'LBL_NAME' => 'Název příležitosti',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Měny',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Název',
    'LBL_LIST_ACCOUNT_NAME' => 'Jméno společnosti',
    'LBL_LIST_DATE_CLOSED' => 'Předpokládané datum uzavření',
    'LBL_LIST_AMOUNT' => 'Pravděpodobně',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Celková hodnota',
    'LBL_ACCOUNT_ID' => 'ID společnosti',
    'LBL_CURRENCY_RATE' => 'Kurz měny',
    'LBL_CURRENCY_ID' => 'ID měny',
    'LBL_CURRENCY_NAME' => 'Název měny',
    'LBL_CURRENCY_SYMBOL' => 'Symbol měny',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Obchod- Aktualizace měny',
    'UPDATE_DOLLARAMOUNTS' => 'Aktualizace CZK částek',
    'UPDATE_VERIFY' => 'Ověření částek',
    'UPDATE_VERIFY_TXT' => 'Ověří, že číselná pole zadané v obchodem jsou platná desetinná čísla - obsahují pouze číslice (0-9) and desetinou tečku(.)',
    'UPDATE_FIX' => 'Opravit částky',
    'UPDATE_FIX_TXT' => 'Pokus o opravu neplatné částky vytvořením platného čísla ze zadaných částek. Pro modifikované částky bude vytvořena záloha v databázovém poli amount_backup. Pokud zjistíte, že je tato procedura chybná, nespouštějte ji znovu bez předchozího obnovení částek ze zálohy, jinak byste mohli přepsat zazálohované částky neplatnými údaji.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Aktualizovat částky CZK na základě současných kurzů měn. Tato částka je použitá pro výpočet grafů a v seznamu Zobrazit částky v cizí měně.',
    'UPDATE_CREATE_CURRENCY' => 'Vytvoření nové měny:',
    'UPDATE_VERIFY_FAIL' => 'Ověření záznamu selhalo:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Aktuální částka:',
    'UPDATE_VERIFY_FIX' => 'Spuštění opravy znamená',
    'UPDATE_INCLUDE_CLOSE' => 'Včetně uzavřených záznamů',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nová částka:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nová měna:',
    'UPDATE_DONE' => 'Dokončeno',
    'UPDATE_BUG_COUNT' => 'Byly nalezeny chyby a proběhla snaha je opravit:',
    'UPDATE_BUGFOUND_COUNT' => 'Počet nalezených chyb:',
    'UPDATE_COUNT' => 'Aktualizováno záznamů:',
    'UPDATE_RESTORE_COUNT' => 'Obnoveno záznamů:',
    'UPDATE_RESTORE' => 'Obnovit částky',
    'UPDATE_RESTORE_TXT' => 'Obnovit hodnoty částek ze zálohy vytvořené během opravy.',
    'UPDATE_FAIL' => 'Není možno aktualizovat -',
    'UPDATE_NULL_VALUE' => 'Částka je NULL - nastavena na 0 -',
    'UPDATE_MERGE' => 'Sloučit měny',
    'UPDATE_MERGE_TXT' => 'Sloučit různé měny do jedné. Pokud zjistíte, že existují pro stejnou měnu různé záznamy, můžete je sloučit dohromady. Měny budou sloučeny také ve všech ostatních modulech.',
    'LBL_ACCOUNT_NAME' => 'Název společnosti:',
    'LBL_CURRENCY' => 'Měna:',
    'LBL_DATE_CLOSED' => 'Předpokládané datum uzavření:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Předpokládané datum a čas uzavření',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampaň:',
    'LBL_NEXT_STEP' => 'Další krok:',
    'LBL_LEAD_SOURCE' => 'Zdrojový zájemce',
    'LBL_SALES_STAGE' => 'Fáze prodeje:',
    'LBL_SALES_STATUS' => 'Stav',
    'LBL_PROBABILITY' => 'Pravděpodobnost (%)',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DUPLICATE' => 'Možnost kopírovat obchody',
    'MSG_DUPLICATE' => 'Vytvořením tohoto obchodu můžete potencionálně vytvořit duplicitní obchod. Můžete buď vybrat obchod ze seznamu nebo můžete kliknout na Přidat nový obchod pro vytvoření nového obchodu s předchozími údaji.',
    'LBL_NEW_FORM_TITLE' => 'Vytvořit obchod',
    'LNK_NEW_OPPORTUNITY' => 'Vytvořit obchod',
    'LNK_CREATE' => 'Vytvořit obchod',
    'LNK_OPPORTUNITY_LIST' => 'Obchody',
    'ERR_DELETE_RECORD' => 'Pro smazání obchodu musí být zadáno číslo záznamu.',
    'LBL_TOP_OPPORTUNITIES' => 'Rozpracované obchody',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Opravdu chcete smazat tento kontakt z tohoto obchodu?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Opravdu chcete smazat tento obchod z projektu?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Obchody',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_RAW_AMOUNT' => 'hrubá částka',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Zájemci',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno (komu):',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zodpovědný uživatel',
    'LBL_LIST_SALES_STAGE' => 'Fáze prodeje:',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Uzavřené obchody',
    'LBL_TOTAL_OPPORTUNITIES' => 'Celkem obchodů',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Uzavřené vyhrané obchody',
    'LBL_ASSIGNED_TO_ID' => 'Přiřazeno:',
    'LBL_CREATED_ID' => 'Vytvořeno podle ID',
    'LBL_MODIFIED_ID' => 'Změněno podle ID',
    'LBL_MODIFIED_NAME' => 'Změněno podle už. jména',
    'LBL_CREATED_USER' => 'Vytvořil',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampaně',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LABEL_PANEL_ASSIGNMENT' => 'Přidělování',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importovat obchody',
    'LBL_EDITLAYOUT' => 'Úprava rozvržení' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID kampaně',
    'LBL_OPPORTUNITY_TYPE' => 'Typ obchodu',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Přiřazený uživatel',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID přiřazeného uživatele',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'ID modifikátora',
    'LBL_EXPORT_CREATED_BY' => 'Vytvořeno od ID:',
    'LBL_EXPORT_NAME' => 'Název',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Přiřazené kontaktní email. adresy',
    'LBL_FILENAME' => 'Příloha',
    'LBL_PRIMARY_QUOTE_ID' => 'Primární nabídka',
    'LBL_CONTRACTS' => 'Smlouvy',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Smlouvy',
    'LBL_PRODUCTS' => 'Položky nabídky',
    'LBL_RLI' => 'Řádky obchodu',
    'LNK_OPPORTUNITY_REPORTS' => 'Zobrazit reporty obchodů',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Nabídky',
    'LBL_TEAM_ID' => 'ID týmu',
    'LBL_TIMEPERIODS' => 'Časové periody',
    'LBL_TIMEPERIOD_ID' => 'ID časového období',
    'LBL_COMMITTED' => 'Schválený',
    'LBL_FORECAST' => 'Zahrnout do předpovědi',
    'LBL_COMMIT_STAGE' => 'Fáze schválení',
    'LBL_WORKSHEET' => 'List',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Nabídky',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Hierarchie obchodní příležitosti',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Hodnoty kalkulované z obchodní položky do obchodní příležitosti',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Sumář zásobníku je',

    'LBL_OPPORTUNITY_ROLE'=>'Role příležitosti',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Poznámky',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Pokud zmáčknete potvrdit, vymažete veškerá data obchodních předpovědi a změníte celkový přehled o obchodních příležitostech. Jestliže toto nezamýšlíte, klikněte na tlačítko zrušit a vrátíte se k předchozímu nastavení.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Pokud všechny položky obchodní předpovědi jsou uzavřené a alespoň jedna je vyhraná,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'fáze obchodní předpovědi je určena jako "vyhraná"',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Pokud všechny položky obchodní příležitosti jsou označeny jako "prohráno",',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'fáze obchodní příležitosti je označena jako "prohráno"',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Jestliže jakákoliv položky obchodní příležitosti je stále otevřená,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'obchodní příležitost bude označena tou nejnižší fází, ve které se nachází.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Modul Obchody vám dovoluje od začátku do konce sledovat jednotlivé obchody a k nim náležející řádky. Každý záznam obchodu představuje hlavičku pro skupinu řádků stejně jako pro navazování ostatních důležitých záznamů jako například nabídek, kontaktů atd. Každý řádek představuje potenciální prodej určitého produktu a zahrnuje relevantní prodejní data. Každý řádek typicky projde několika prodejními fázemi, než je označen buďto "Uzavřeno - vyhráno" nebo "Uzavřeno - prohráno". Záznam obchodu reflektuje hodnotu a očekávané datum uzavření jeho řádků. Obchody a řádky mohou být ještě více využity pomocí modulu předpovědí k pochopení a predikci obchodních trendů jako i soustředit práci k dosažení prodejních kvót.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Modul Obchody vám umožňuje sledovat od počátku do konce jednotlivé prodeje a řádky náležící k těmto prodejům. Každý záznam obchodu reprezentuje hlavičku pro skupinu řádek a váže se také na další důležité záznamy jako nabídky, kontakty atd. 

- Upravte pole záznamu kliknutím na jednotlivá pole nebo na tlačítko Upravit.
- Zobrazte nebo upravte vazby na ostatní záznamy v subpanelech, včetně řádků obchodu, tím, že přepnete spodní levý panel na "Data View".
- Vytvořte a prohlédněte si uživatelské komentáře a historii změn záznamu v Přehledu aktivit tím, že přepnete spodní levý panel na Přehled aktivit.
- Označte záznam jako Sledovaný nebo Oblíbený pomocí ikon vpravo od názvu záznamu.
- Další akce jsou dostupné v rozbalovacím menu Akce vpravo vedle tlačítka Opravit.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Modul Obchody umožňuje sledovat jednotlivé prodeje a řádkové položky, které do těchto prodejů patří, od začátku do konce. Každý Obchod představuje záhlaví pro skupinu Řádkových tržeb, jakož i návaznost k ostatním důležitým záznamům jako jsou Nabídky, Kontakty atp.  Chceteli vytvořit Obchod: 1. Vyplňte hodnoty polí dle potřeby. - Pole oznařená “Povinné” musejí být vyplněné před uložením. - Pokud bude potřeba, klikněte na “Zobrazit více” pro zobrazení dalších polí. 2. Klikněte na tlačítko “Uložit” pro dokončení nového záznamu a navrácení na předchozí stránku. - Zvolte “Uložit a zobrazit” pro otevření přehledu nově vytvořeného Obchodu. - Zvolte “Uložit a vytvořit nový” v případě, že chcete pokračovat vytvářením dalšího Obchodu.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Synchronizovat do Marketo®',
    'LBL_MKTO_ID' => 'Marketo ID leada',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Nejlepších 10 obchodních příležitostí',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Zobrazuje nejlepších deset příležitostí v bublinkovém grafu',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Moje příležitosti',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Příležitosti mého týmu",
);
