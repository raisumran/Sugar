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
    'LBL_MODULE_NAME' => 'Lehetőségek',
    'LBL_MODULE_NAME_SINGULAR' => 'Lehetőség',
    'LBL_MODULE_TITLE' => 'Lehetőségek: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Lehetőségek keresése',
    'LBL_VIEW_FORM_TITLE' => 'Lehetőségek megtekintése',
    'LBL_LIST_FORM_TITLE' => 'Lehetőségek listája',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség neve:',
    'LBL_OPPORTUNITY' => 'Lehetőség:',
    'LBL_NAME' => 'Lehetőség neve',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Pénznemek',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Név',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliens neve',
    'LBL_LIST_DATE_CLOSED' => 'Lezárás várható dátuma',
    'LBL_LIST_AMOUNT' => 'Valószínű',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Teljes összeg',
    'LBL_ACCOUNT_ID' => 'Kliens azonosítója',
    'LBL_CURRENCY_RATE' => 'Árfolyam',
    'LBL_CURRENCY_ID' => 'Pénznem azonosítója',
    'LBL_CURRENCY_NAME' => 'Pénznem neve',
    'LBL_CURRENCY_SYMBOL' => 'Pénznem szimbóluma',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Lehetőség - Pénznem frissítése',
    'UPDATE_DOLLARAMOUNTS' => 'USA dollár összegek frissítése',
    'UPDATE_VERIFY' => 'Összegek ellenőrzése',
    'UPDATE_VERIFY_TXT' => 'Ellenőrzi, hogy az összegek érvényes decimális(,) vagy numerikus(0-9) karakterek-e.',
    'UPDATE_FIX' => 'Javított összegek',
    'UPDATE_FIX_TXT' => 'Megkísérli kijavítani az érvénytelen értékeket valós decimális értékekre. Minden módosított összeg biztonsági mentés adatbázisban tárolódik. Ha futás közben hibát észlel, ne futtassa újra helyreállítás nélkül a biztonsági mentést, mert a régit felül fogja írni az érvénytelen új adattal.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Frissíti az USA dollár összegeket a beállított napi árfolyamok alapján. Az összegek a grafikonokban és a Pénznem értékek lista nézetében fognak megjelenni.',
    'UPDATE_CREATE_CURRENCY' => 'Új pénznem létrehozása:',
    'UPDATE_VERIFY_FAIL' => 'Az ellenőrzés során hibát jelentő rekord:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Jelenlegi összeg:',
    'UPDATE_VERIFY_FIX' => 'A hibajavítás a következőt végzi el',
    'UPDATE_INCLUDE_CLOSE' => 'Zárt rekordokkal együtt',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Új összeg:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Új pénznem:',
    'UPDATE_DONE' => 'Kész',
    'UPDATE_BUG_COUNT' => 'Talált hibák, amelyeket a rendszer megpróbált kijavítani:',
    'UPDATE_BUGFOUND_COUNT' => 'Talált hibák:',
    'UPDATE_COUNT' => 'Frissített rekordok:',
    'UPDATE_RESTORE_COUNT' => 'Rekord összegei helyreállítva:',
    'UPDATE_RESTORE' => 'Összegek helyreállítása',
    'UPDATE_RESTORE_TXT' => 'Az összeg értékeinek helyreállítása biztonsági mentésből.',
    'UPDATE_FAIL' => 'Nem sikerült frissíteni -',
    'UPDATE_NULL_VALUE' => 'Összeg NULL beállítása 0-ra',
    'UPDATE_MERGE' => 'Pénznemek egyesítése',
    'UPDATE_MERGE_TXT' => 'Több pénznem egyesítése egy pénznemre. Ha több pénznem tartozik ugyanahhoz a pénznemhez, egyesíthetjük őket. A parancs a többi modul számára is egyesíteni fogja a pénznemeket.',
    'LBL_ACCOUNT_NAME' => 'Kliens neve:',
    'LBL_CURRENCY' => 'Pénznem:',
    'LBL_DATE_CLOSED' => 'Várható lezárása dátuma:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Lezárás várható dátuma időbélyegző',
    'LBL_TYPE' => 'Típus:',
    'LBL_CAMPAIGN' => 'Kampány:',
    'LBL_NEXT_STEP' => 'Következő lépés:',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása',
    'LBL_SALES_STAGE' => 'Értékesítési szint',
    'LBL_SALES_STATUS' => 'Állapot',
    'LBL_PROBABILITY' => 'Valószínűség (%)',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_DUPLICATE' => 'Elképzelhető, hogy kettőzött lehetőség',
    'MSG_DUPLICATE' => 'A lehetőség bejegyzés, amit épp létrehozni kíván, elképzelhető, hogy egy korábbi bejegyzés ismétlése. A hasonló névvel szereplő bejegyzések lentebb láthatók. Kattintson a Mentés gombra, ha folytatni kívánja a lehetőség létrehozását, vagy kattintson a Mégsem gombra, hogy visszatérjen a lehetőség létrehozása nélkül a modulba.',
    'LBL_NEW_FORM_TITLE' => 'Új lehetőség lérehozása',
    'LNK_NEW_OPPORTUNITY' => 'Új lehetőség lérehozása',
    'LNK_CREATE' => 'Megegyezés létrehozása',
    'LNK_OPPORTUNITY_LIST' => 'Lehetőségek megtekintése',
    'ERR_DELETE_RECORD' => 'Ki kell jelölni egy rekordot a lehetőség törléséhez.',
    'LBL_TOP_OPPORTUNITIES' => 'Legjobb nyitott lehetőségeim',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Biztosan el akarja távolítani ezt a személyt a lehetőségtől?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Biztosan el akarja távolítani ezt a lehetőséget a projekttől?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Lehetőségek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény',
    'LBL_RAW_AMOUNT' => 'Nyers összeg',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Ajánlások',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_LIST_SALES_STAGE' => 'Értékesítési szint',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Lezárt lehetőségeim',
    'LBL_TOTAL_OPPORTUNITIES' => 'Lehetőségek összesen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Lezárt, megnyert lehetőségek',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó:',
    'LBL_CREATED_ID' => 'Létrehozva azonosító alapján',
    'LBL_MODIFIED_ID' => 'Módosítva azonosító alapján',
    'LBL_MODIFIED_NAME' => 'Módosítva felhasználó neve szerint',
    'LBL_CREATED_USER' => 'Létrehozott felhasználó',
    'LBL_MODIFIED_USER' => 'Módosított felhasználó',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampányok',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LABEL_PANEL_ASSIGNMENT' => 'Feladat',
    'LNK_IMPORT_OPPORTUNITIES' => 'Lehetőségek importálása',
    'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampány Azonosító',
    'LBL_OPPORTUNITY_TYPE' => 'Lehetőség típusa',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős felhasználó neve',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős felhasználói azonosító',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Módosító azonosítója',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozó azonosítója',
    'LBL_EXPORT_NAME' => 'Név',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Kontakszemélyek emailjei',
    'LBL_FILENAME' => 'Csatolmány',
    'LBL_PRIMARY_QUOTE_ID' => 'Elsődleges ajánlat',
    'LBL_CONTRACTS' => 'Szerződések',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Szerződések',
    'LBL_PRODUCTS' => 'Idézett tételsorok',
    'LBL_RLI' => 'Bevételi sor tételek',
    'LNK_OPPORTUNITY_REPORTS' => 'Lehetőségek jelentéseinek megtekintése',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Árajánlatok',
    'LBL_TEAM_ID' => 'Csoport azonosító',
    'LBL_TIMEPERIODS' => 'Időszakok',
    'LBL_TIMEPERIOD_ID' => 'Időperiódus azonosítója',
    'LBL_COMMITTED' => 'Hozzárendelve',
    'LBL_FORECAST' => 'Belefoglal az előjelzésbe',
    'LBL_COMMIT_STAGE' => 'Elköteleződés szintje',
    'LBL_WORKSHEET' => 'Munkalap',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Árajánlatok',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Lehetőségek hierarchiája',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Adja meg a Várható Zárási Dátummezőt az ebből következő Lehetőségi adatban, úgy hogy az a legkorábban, legkésőbb legyen a meglévő Bevételi Sortételek zárási dátumaihoz',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'A Pipeline Teljes értéke',

    'LBL_OPPORTUNITY_ROLE'=>'Lehetőség szerepe',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Feljegyzés',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'A Visszaigazolás gombra kattintva Ön ki fog törölni MINDEN Előrejelző adatot a Lehetőségek Nézetéből. Ha Ön nem ezt akarta, kattintson a Vissza gombra, hogy visszatérhessen az előző oldal beállításaihoz.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Ha minden Bevételi Sortétel be van zárva és legalább egy megnyert tétel van,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'a Lehetőségi Eladások Státusza a "Bezárva Megnyerve" értéket veszi fel.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Ha minden Bevételi Sortétel Eladási Státusza a "Bezárva Elveszítve" értéket veszi fel,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'akkor a Lehetőségi Eladások Státuszát a "Bezárva Elveszítve" értékre kell állítani.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Ha minden Bevételi Sortétel még nyitva van,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'akkor a Lehetőség az Eladások legutolsó előremeneteli Állapotával lesz jelezve.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'A {{plural_module_name}} modul az eladásokkal foglalkozik. A bejegyzések {{revenuelineitems_module}} csoportokat tartalmaznak, amelyek többek között tételeket listáznak az árajánlat, vagy a kapcsolati modulokból. Minden {{revenuelineitems_module}} egy önálló értékesítési lehetőséget szimbolizál, magába foglalva a releváns adatokat. Minden {{revenuelineitems_module}} élettartam a "Lezárt, megnyert", vagy a "Lezárt, elvesztett" címke eléréséig tart. A várható zárás dátumát egy {{module_name}} rekord tartalmazza. A származtatott adatok feldolgozhatók az Előrejelzések modulban is.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'A {{plural_module_name}} modul az eladásokkal foglalkozik. A bejegyzések {{revenuelineitems_module}} csoportokat tartalmaznak, amelyek többek között tételeket listáznak az árajánlat, vagy a kapcsolati modulokból. - Szerkessze ennek a rekordnak a mezőit külön-külön, vagy kattintson a Szerkesztés gombra! Tekintse meg, vagy szerkessze a linkeket a bal alsó "Adatnézet" kapcsoló használatával! Olvassa el, vagy írjon felhasználói hozzászólásokat a "Tevékenységfolyam" opcióval! A rekord neve mellett található ikonok segítségével jelölje be kedvencének a tartalmat, vagy kövesse annak utóéletét! Egyéb tevékenységek a Szerkesztés gombtól jobbra szereplő műveleti gomb legördülő menüjében találhatók.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'A {{plural_module_name}} modul az eladásokkal foglalkozik. A bejegyzések {{revenuelineitems_module}} csoportokat tartalmaznak, amelyek többek között tételeket listáznak az árajánlat, vagy a kapcsolati modulokból. {{module_name}} létrehozásához: 1. töltse ki a mezőket! A kötelező mezők kitöltése nélkül mentés nem lehetséges. Ha Önnek hiányzó mezőt talál, kattintson a "Több mutatása" opcióra a ráadás mezők felfedéséhez! 2. Kattintson a "Mentés" gombra a rekord mentéséhez és a korábbi nézetre való visszatéréshez! Amennyiben a "Mentés és megjelenítés" opciót választja, a {{module_name}} rekordnézetben fog megjelenni. A "Mentés és új létrehozása" paranccsal közvetlen új {{module_name}} létrehozatali oldalára továbbítódik.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sznkronizálás ehhez: Marketo®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Tíz legjobb Eladási Lehetőség Termékei',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'A tíz legjobb Eladási Lehetőség Termékeit jeleníti meg egy diagramon.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Lehetőségeim',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Csoportom Lehetőségei",
);
