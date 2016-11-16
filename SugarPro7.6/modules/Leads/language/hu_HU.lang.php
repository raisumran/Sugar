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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'Vezetéknév',
    'db_first_name' => 'Keresztnév',
    'db_title' => 'Beosztás',
    'db_email1' => 'Email',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'Email',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót az ajánlás törléséhez!',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Kliens leírása',
    'LBL_ACCOUNT_ID'=>'Kliens azonosítója',
    'LBL_ACCOUNT_NAME' => 'Kliens neve:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Tevékenységek',
    'LBL_ADD_BUSINESSCARD' => 'Névjegykártya hozzáadása',
    'LBL_ADDRESS_INFORMATION' => 'Cím Információ',
    'LBL_ALT_ADDRESS_CITY' => 'Másodlagos cím, város:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Másodlagos cím, ország:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Másodlagos cím, irányítószám:',
    'LBL_ALT_ADDRESS_STATE' => 'Másodlagos cím, állam:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Másodlagos cím, utca 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Másodlagos cím, utca 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Másodlagos cím',
    'LBL_ALTERNATE_ADDRESS' => 'További cím:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_EMAIL' => 'További Email:',
    'LBL_ANY_PHONE' => 'További telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó:',
    'LBL_BACKTOLEADS' => 'Vissza az ajánlásokhoz',
    'LBL_BUSINESSCARD' => 'Ajánlás konvertálása',
    'LBL_CITY' => 'Város:',
    'LBL_CONTACT_ID' => 'Kapcsolat azonosítója',
    'LBL_CONTACT_INFORMATION' => 'Feladat áttekintése',
    'LBL_CONTACT_NAME' => 'Ajánlás neve:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Ajánlás-lehetőség:',
    'LBL_CONTACT_ROLE' => 'Szerep:',
    'LBL_CONTACT' => 'Ajánlás:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Konvertálás',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Mentés és konvertálás',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(opcionális)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Önnek nincs megfelelő hozzáférése a modulokhoz az ajánlások konvertálásához: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Többszörös előfordulások keresése...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Figyelmen kívül hagy és új létrehozása',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Vissza a többszörös előfordulásokhoz',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Új létrehozása',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Keresés',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} többszörös előfordulás található',
    'LBL_CONVERT_CREATE_NEW' => 'Új {{moduleName}}',
    'LBL_CONVERT_ASSOCIATE_MODULE' => '{{moduleName}} összekapcsolása',
    'LBL_CONVERT_ASSOCIATED_MODULE' => 'Kapcsolt {{moduleName}}',
    'LBL_CONVERT_MODULE_ASSOCIATED' => '{{moduleName}} összekapcsolva',
    'LBL_CONVERT_MODULE_ASSOCIATED_NEW_SUCCESS' => 'Ön sikeresen összekapcsolta az alábbiakat: {{moduleNameLower}} {{recordName}. A létrehozás csak mentés után történik meg.',
    'LBL_CONVERT_MODULE_ASSOCIATED_SUCCESS' => 'Ön sikeresen összekapcsolta az alábbiakat: {{moduleNameLower}} {{recordName}. Az összekapcsolás csak mentés után lép életbe.',
    'LBL_CONVERT_RESET_PANEL' => 'Alapbeállítás',
    'LBL_CONVERTED_ACCOUNT'=>'Konvertált kliens:',
    'LBL_CONVERTED_CONTACT' => 'Konvertált kapcsolat:',
    'LBL_CONVERTED_OPP'=>'Konvertált lehetőség:',
    'LBL_CONVERTED'=> 'Konvertált',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Ajánlás konvertálása',
    'LBL_CONVERTLEAD' => 'Ajánlás konvertálása',
    'LBL_CONVERTLEAD_WARNING' => 'Figyelem: a konvertálni kívánt ajánlás állapota jelenleg is konvertált. Elképzelhető, hogy az ajánlásból kapcsolati vagy kliens adatokat tárolt el a rendszer. Ha így is folytatni szeretné a konvertálás folyamatát, kattintson a Mentés gombra! Az ajánláshoz való visszatéréshez nyomja meg a Mégsem gombot.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Lehetséges kapcsolat:',
    'LBL_CONVERTLEAD_ERROR' => 'Ajánlás konvertálása sikertelen',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Ön sikeresen konvertálta az alábbi ajánlást: {{leadName}}, ugyanakkor probléma lépett fel a mellékletek feltöltése során.',
    'LBL_CONVERTLEAD_SUCCESS' => 'Ön sikeresen konvertálta az alábbi ajánlást: {{leadName}}',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_CREATED_NEW' => 'Létrehozva egy új',
	'LBL_CREATED_ACCOUNT' => 'Új kliens létrehozva',
    'LBL_CREATED_CALL' => 'Új hívás létrehozva',
    'LBL_CREATED_CONTACT' => 'Új kapcsolat létrehozva',
    'LBL_CREATED_MEETING' => 'Új találkozó létrehozva',
    'LBL_CREATED_OPPORTUNITY' => 'Új lehetőség létrehozva',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ajánlások',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_DESCRIPTION_INFORMATION' => 'Információ leírása',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DO_NOT_CALL' => 'Nem szabad felhívni:',
    'LBL_DUPLICATE' => 'Hasonló ajánlások',
    'LBL_EMAIL_ADDRESS' => 'Email cím:',
    'LBL_EMAIL_OPT_OUT' => 'Leiratkozva az emailről:',
    'LBL_EXISTING_ACCOUNT' => 'Létező klienst használt',
    'LBL_EXISTING_CONTACT' => 'Létező kapcsolatot használt',
    'LBL_EXISTING_OPPORTUNITY' => 'Egy létező lehetőséget használt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_FULL_NAME' => 'Teljes név:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Előzmény',
    'LBL_HOME_PHONE' => 'Otthoni telefon:',
    'LBL_IMPORT_VCARD' => 'vCard importálása',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Ajánlás sikeresen létrehozva vCard alapján',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatikusan hozzon létre egy ajánlást vCard fájlrendszerből történő importálása során.',
    'LBL_INVALID_EMAIL'=>'Érvénytelen email:',
    'LBL_INVITEE' => 'Közvetlen jelentések',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Ajánlás forrásának leírása:',
    'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
    'LBL_LIST_ACCEPT_STATUS' => 'Státusz elfogadás',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliens neve',
    'LBL_LIST_CONTACT_NAME' => 'Ajánlás neve',
    'LBL_LIST_CONTACT_ROLE' => 'Szerepkör',
    'LBL_LIST_DATE_ENTERED' => 'Kezdés dátuma',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail:',
    'LBL_LIST_FIRST_NAME' => 'Keresztnév',
    'LBL_VIEW_FORM_TITLE' => 'Ajánlás nézet',
    'LBL_LIST_FORM_TITLE' => 'Ajánláslista',
    'LBL_LIST_LAST_NAME' => 'Vezetéknév',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Ajánlás forrásának leírása',
    'LBL_LIST_LEAD_SOURCE' => 'Ajánlás forrása',
    'LBL_LIST_MY_LEADS' => 'Saját ajánlásaim',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_PHONE' => 'Irodai telefon',
    'LBL_LIST_REFERED_BY' => 'Hivatkozva',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_TITLE' => 'Beosztás',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Ajánlások',
    'LBL_MODULE_NAME_SINGULAR' => 'Ajánlás',
    'LBL_MODULE_TITLE' => 'Ajánlások: Főoldal',
    'LBL_NAME' => 'Név:',
    'LBL_NEW_FORM_TITLE' => 'Új ajánlás',
    'LBL_NEW_PORTAL_PASSWORD' => 'Új portál jelszó:',
    'LBL_OFFICE_PHONE' => 'Munkahelyi telefon:',
    'LBL_OPP_NAME' => 'Lehetőség neve:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Lehetőség összege:',
    'LBL_OPPORTUNITY_ID'=>'Lehetőség azonosítója',
    'LBL_OPPORTUNITY_NAME' => 'Lehetőség neve:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'További email:',
    'LBL_OTHER_PHONE' => 'További telefon:',
    'LBL_PHONE' => 'Telefonszám:',
    'LBL_PORTAL_ACTIVE' => 'Portál aktív:',
    'LBL_PORTAL_APP'=> 'Portál alkalmazás',
    'LBL_PORTAL_INFORMATION' => 'Portál információ',
    'LBL_PORTAL_NAME' => 'Portál neve:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portál jelszó beállítva:',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_STREET' => 'Utca',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Elsődleges cím, város',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Elsődleges cím, ország',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Elsődleges cím, irányítószám',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Elsődleges cím, állam',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Elsődleges cím, utca 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Elsődleges cím, utca 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Elsődleges cím, utca',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Létrehozás sikeres: {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
    'LBL_REFERED_BY' => 'Hivatkozva:',
    'LBL_REPORTS_TO_ID'=>'Felettes azonosítója',
    'LBL_REPORTS_TO' => 'Jelentést tesz neki:',
    'LBL_REPORTS_FROM' => 'Jelentés innen:',
    'LBL_SALUTATION' => 'Megszólítás',
    'LBL_MODIFIED'=>'Módosította',
	'LBL_MODIFIED_ID'=>'Módosító azonosítója',
	'LBL_CREATED'=>'Létrehozta',
	'LBL_CREATED_ID'=>'Létrehozó azonosítója',
    'LBL_SEARCH_FORM_TITLE' => 'Ajánlás keresése',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Ellenőrzött ajánlások kiválasztása',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Ellenőrzött ajánlások kiválasztása',
    'LBL_STATE' => 'Állam:',
    'LBL_STATUS_DESCRIPTION' => 'Állapot leírása:',
    'LBL_STATUS' => 'Állapot:',
    'LBL_TITLE' => 'Titulus:',
    'LBL_UNCONVERTED'=> 'Nem konvertált',
    'LNK_IMPORT_VCARD' => 'Ajánlás létrehozása vCard állományból',
    'LNK_LEAD_LIST' => 'Ajánlások megtekintése',
    'LNK_NEW_ACCOUNT' => 'Kliens létrehozása',
    'LNK_NEW_APPOINTMENT' => 'Megbeszélés létrehozása',
    'LNK_NEW_CONTACT' => 'Kapcsolat létrehozása',
    'LNK_NEW_LEAD' => 'Ajánlás létrehozása',
    'LNK_NEW_NOTE' => 'Jegyzet létrehozása',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_NEW_CASE' => 'Új eset létrehozása',
    'LNK_NEW_CALL' => 'Hívás naplózása',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_OPPORTUNITY' => 'Új lehetőség lérehozása',
	'LNK_SELECT_ACCOUNTS' => 'VAGY válasszon klienst',
    'LNK_SELECT_CONTACTS' => '<b>VAGY</b> kapcsolat kiválasztása',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Másodlagos cím másolása az elsődleges cím helyére',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Elsődleges cím másolása a másodlagos cím helyére',
    'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törölni kívánja ezt rekordot?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Ajánlás létrehozásához rendelkezni kell egy klienssel.\\n Kérem, hozzon létre egy új klienst, vagy válasszon a meglévők közül!',
    'NTC_REMOVE_CONFIRMATION' => 'Biztosan el akarja távolítani az ajánlást az esettől?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Biztosan el akarja távolítani ezt tételt, mint közvetlen jelentést?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Kampánynapló',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Sikeres kampány',
    'LBL_TARGET_BUTTON_LABEL'=>'Célzott',
    'LBL_TARGET_BUTTON_TITLE'=>'Célzott',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Kampány:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_PROSPECT_LIST' => 'Lehetséges vevők listája',
    'LBL_PROSPECT' => 'Cél',
    'LBL_CAMPAIGN_LEAD' => 'Kampányok',
	'LNK_LEAD_REPORTS' => 'Ajánlás jelentések megtekintése',
    'LBL_BIRTHDATE' => 'Születési dátum:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Köszönjük az ajánlat beküldését.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Sajnálatos módon a szerver jelenleg nem elérhető, kérem, próbálja meg később!',
    'LBL_ASSISTANT_PHONE' => 'Aszisztens telefonja',
    'LBL_ASSISTANT' => 'Aszisztens',
    'LBL_REGISTRATION' => 'Regisztráció',
    'LBL_MESSAGE' => 'Kérjük, adja meg az alábbi adatokat! Az információk/kliens véglegesítéséhez szükség lesz az Ön jóváhagyására.',
    'LBL_SAVED' => 'Köszönjük a regisztrációt! Fiókját hamarosan létrehozzuk és felvesszük Önnel a kapcsolatot.',
    'LBL_CLICK_TO_RETURN' => 'Vissza a Portálba',
    'LBL_CREATED_USER' => 'Létrehozott felhasználó',
    'LBL_MODIFIED_USER' => 'Módosított felhasználó',
    'LBL_CAMPAIGNS' => 'Kampányok',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampányok',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Modul',
    'LBL_CONVERT_REQUIRED' => 'Szükséges',
    'LBL_CONVERT_SELECT' => 'Kiválasztás engedélyezése',
    'LBL_CONVERT_COPY' => 'Adat másolása',
    'LBL_CONVERT_EDIT' => 'Szerkeszt',
    'LBL_CONVERT_DELETE' => 'Törlés',
    'LBL_CONVERT_ADD_MODULE' => 'Modul hozzáadása',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Konvertálási felület szerkesztése',
    'LBL_CREATE' => 'Létrehozás',
    'LBL_SELECT' => 'VAGY válassza ki',
	'LBL_WEBSITE' => 'Honlap',
	'LNK_IMPORT_LEADS' => 'Ajánlások importálása',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Megjegyzés: az aktuális ajánlás konvertálása-nézet egyéni mezőket tartalmaz. Amikor ezt a megjelenítést szerkeszti a Stúdióban, egyéni mezőket kell hozzáadnia. A korábbiakkal ellentétben, ezek a mezők nem fognak automatikusan megjelenni az elrendezésben.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Modul az új rekord létrehozásához.',
	'LBL_REQUIRED_TIP' 	=> 'A kötelező modulokat létre kell hozni vagy a meglévőkből ki kell választani, mielőtt az ajánlást konvertálni lehetne.',
	'LBL_COPY_TIP'		=> 'Ha be van jelölve, a rendszer az ajánlásokban lévő mezőkről készít egy másolatot ugyanazzal a névvel az újonnan létrehozott rekordokban.',
	'LBL_SELECTION_TIP' => 'A kapcsolati információkkal rendelkező modulokat az ajánlás konvertálása során ki lehet választani; azokat nem kell létrehozni.',
	'LBL_EDIT_TIP'		=> 'Módosítsa a konvertálási elrendezést ebben a modulban!',
	'LBL_DELETE_TIP'	=> 'Távolítsa el ezt a modult a konvertálási elrendezésből!',

    'LBL_ACTIVITIES_MOVE'   => 'Több feladat ehhez:',
    'LBL_ACTIVITIES_COPY'   => 'Feladatok másolása ide:',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Válassza ki azt a rekordot, amelyhez hozzá kívánja rendelni az Ajánlás feladatait! A hívások, találkozók, jegyzetek és emailek mind a kijelölt rekordhoz lesznek hozzárendelve.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Válassza ki azt a rekordot, amelyhez másolással hozzá kívánja rendelni az Ajánlás feladatait! Az új feladatok, hívások, találkozók és jegyzetek másolatai a kijelölt rekordhoz lesznek hozzárendelve. A rendszer az emaileket a megadott rekordhoz fogja kapcsolni.",
    //For export labels
    'LBL_PHONE_HOME' => 'Otthoni telefon',
    'LBL_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_PHONE_WORK' => 'Munkahelyi telefon',
    'LBL_PHONE_OTHER' => 'Egyéb telefon',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'Kampány Azonosító',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Felelős felhasználó neve',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Felelős felhasználói azonosító',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Módosító azonosítója',
    'LBL_EXPORT_CREATED_BY' => 'Létrehozó azonosítója',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobiltelefon',
    'LBL_EXPORT_EMAIL2'=>'További email címek',
	'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Írja be a dátumot' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Betöltés' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Szerkeszt' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B Elsődleges Azonosító',
    'LBL_DNB_BAL_PREVIEW' => 'Ajánlások Előnézete',
    'LBL_DNB_BAL_RSLT_CNT' => 'Ajánlások',
    'LBL_DNB_BAL_RSLT_HEADER' => 'D&B: Ajánlási Információ',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Feljegyzés',

    'LBL_HELP_CONVERT_TITLE' => '{{module_name}} konvertálása',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'A {{plural_module_name}} modul olyan személyeket listáz, akik érdekeltek lehetnek az Ön cége által nyújtott szolgáltatásokban, vagy termékekben. Amennyiben a bejegyzés értékesítési lehetőségnek minősül, a tétel konvertálható a Kapcsolatok, Lehetőségek vagy Kliensek modul egyikébe. Új tétel létrehozása történhet hozzáadással, kettőzéssel, importálással, illetve egyéb módokon is. Az új bejegyzések adatait rekord nézetben van lehetősége szerkeszteni.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'A {{plural_module_name}} modul olyan személyeket listáz, akik érdekeltek lehetnek az Ön cége által nyújtott szolgáltatásokban, vagy termékekben. - Szerkessze ennek a rekordnak a mezőit külön-külön, vagy kattintson a Szerkesztés gombra! Tekintse meg, vagy szerkessze a linkeket a bal alsó "Adatnézet" kapcsoló használatával! Olvassa el, vagy írjon felhasználói hozzászólásokat a "Tevékenységfolyam" opcióval! A rekord neve mellett található ikonok segítségével jelölje be kedvencének a tartalmat, vagy kövesse annak utóéletét! Egyéb tevékenységek a Szerkesztés gombtól jobbra szereplő műveleti gomb legördülő menüjében találhatók.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'A {{plural_module_name}} modul olyan személyeket listáz, akik érdekeltek lehetnek az Ön cége által nyújtott szolgáltatásokban, vagy termékekben. Amennyiben a bejegyzés értékesítési lehetőségnek minősül, a tétel konvertálható a Kapcsolatok, Lehetőségek vagy Kliensek modul egyikébe.{{module_name}} létrehozásához: 1. töltse ki a mezőket! A kötelező mezők kitöltése nélkül mentés nem lehetséges. Ha Önnek hiányzó mezőt talál, kattintson a "Több mutatása" opcióra a ráadás mezők felfedéséhez! 2. Kattintson a "Mentés" gombra a rekord mentéséhez és a korábbi nézetre való visszatéréshez! Amennyiben a "Mentés és megjelenítés" opciót választja, a {{module_name}} rekordnézetben fog megjelenni. A "Mentés és új létrehozása" paranccsal közvetlen új {{module_name}} létrehozatali oldalára továbbítódik.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'A Sugar lehetővé teszi, hogy a {{plural_module_name}} modul elemeit kapcsolatokká, vagy kliensekké konvertáljuk, amennyiben elegendő információval rendelkezünk. Ha a Hozzárendelés gomb megnyomása után a Sugar úgy találja, hogy a rendszer már tartalmaz bejegyzést a megadott névvel, Önnek lehetősége van a továbbiakban másolattal dolgozni, de létrehozhat új tételt is a "Mentés és konvertálás" opció kiválasztásával.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Sznkronizálás ehhez: Marketo®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',
    'LBL_MKTO_LEAD_SCORE' => 'Lead Score',

    'LBL_FILTER_LEADS_REPORTS' => 'Ajánlások jelentései',
);
