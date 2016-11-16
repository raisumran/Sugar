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
  'LBL_MODULE_NAME' => 'Értékesítés',
  'LBL_MODULE_TITLE' => 'Eladás: Főoldal',
  'LBL_SEARCH_FORM_TITLE' => 'Keresés az eladásban',
  'LBL_VIEW_FORM_TITLE' => 'Eladás nézet',
  'LBL_LIST_FORM_TITLE' => 'Eladás lista',
  'LBL_SALE_NAME' => 'Eladás neve:',
  'LBL_SALE' => 'Eladás:',
  'LBL_NAME' => 'Eladás neve',
  'LBL_LIST_SALE_NAME' => 'Név',
  'LBL_LIST_ACCOUNT_NAME' => 'Kliens neve',
  'LBL_LIST_AMOUNT' => 'Mennyiség',
  'LBL_LIST_DATE_CLOSED' => 'Zárás',
  'LBL_LIST_SALE_STAGE' => 'Értékesítési szint',
  'LBL_ACCOUNT_ID'=>'Kliens azonosítója',
  'LBL_TEAM_ID' =>'Csoport azonosító',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Eladás - Pénznem frissítése',
  'UPDATE_DOLLARAMOUNTS' => 'USA dollár összegek frissítése',
  'UPDATE_VERIFY' => 'Összegek ellenőrzése',
  'UPDATE_VERIFY_TXT' => 'Ellenőrzi, hogy az összegek érvényes decimális(.) vagy numerikus(0-9) karakterek-e.',
  'UPDATE_FIX' => 'Javított összegek',
  'UPDATE_FIX_TXT' => 'Megkísérli kijavítani az érvénytelen értékeket valós decimális értékekre. Minden módosított összeg biztonsági mentés adatbázisban tárolódik. Ha futás közben hibát észlel, ne futtassa újra helyreállítás nélkül a biztonsági mentést, mert a régit felül fogja írni az érvénytelen új adattal.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Frissíti az USA dollár összegeket a beállított napi árfolyamok alapján. Ezen érték felhasználható a Grafikonok és a Lista Nézet Pénznem Értékek menüpontban.',
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
  'UPDATE_MERGE_TXT' => 'Több pénzem egyesítése eggyé. Ha több pénzem rekord található egy pénznemhez, a rendszer egyesíti őket. Az egyesítés az összes modulra nézve érvényes lesz.',
  'LBL_ACCOUNT_NAME' => 'Kliens neve:',
  'LBL_AMOUNT' => 'Összeg:',
  'LBL_AMOUNT_USDOLLAR' => 'Összeg USD:',
  'LBL_CURRENCY' => 'Pénznem:',
  'LBL_DATE_CLOSED' => 'Várható lezárása dátuma:',
  'LBL_TYPE' => 'Típus:',
  'LBL_CAMPAIGN' => 'Kampány:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Ajánlások',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',  
  'LBL_NEXT_STEP' => 'Következő lépés:',
  'LBL_LEAD_SOURCE' => 'Ajánlás forrása:',
  'LBL_SALES_STAGE' => 'Eladási szint:',
  'LBL_PROBABILITY' => 'Valószínűség (%):',
  'LBL_DESCRIPTION' => 'Leírás:',
  'LBL_DUPLICATE' => 'Elképzelhető, hogy többszörösen előforduló eladás',
  'MSG_DUPLICATE' => 'Az Eladási rekord, amelyet épp létrehozni készül, elképzelhető, hogy már szerepel a rendszerben. A hasonló nevű rekordok listáját alább találja. Kattintson a Mentés gombra az új eladás véglegesítéséhez vagy a Mégsem gomb megnyomásával térjen vissza a modulba, eladás létrehozása nélkül.',
  'LBL_NEW_FORM_TITLE' => 'Új eladás',
  'LNK_NEW_SALE' => 'Új eladás',
  'LNK_SALE_LIST' => 'Értékesítés',
  'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót az eladás rekordjának törléséhez!',
  'LBL_TOP_SALES' => 'Nyitott, Top eladásaim',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Biztosan törölni kívánja ezt a kapcsolatot ebből az eladásból?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Biztosan törölni kívánja ezt az eladást a projektből?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Értékesítés',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Tevékenységek',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Előzmény',
    'LBL_RAW_AMOUNT'=>'Nyers összeg',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Felhasználó:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
  'LBL_MY_CLOSED_SALES' => 'Lezárt eladásaim',
  'LBL_TOTAL_SALES' => 'Összes eladás',
  'LBL_CLOSED_WON_SALES' => 'Lezárt, megnyert eladások',
  'LBL_ASSIGNED_TO_ID' =>'Felelős azonosítója',
  'LBL_CREATED_ID'=>'Létrehozva azonosító alapján',
  'LBL_MODIFIED_ID'=>'Módosítva azonosító alapján',
  'LBL_MODIFIED_NAME'=>'Módosítva felhasználó neve szerint',
  'LBL_SALE_INFORMATION'=>'Eladás információ',
  'LBL_CURRENCY_ID'=>'Pénznem azonosítója',
  'LBL_CURRENCY_NAME'=>'Pénznem neve',
  'LBL_CURRENCY_SYMBOL'=>'Pénznem szimbóluma',
  'LBL_EDIT_BUTTON' => 'Szerkeszt',
   'LBL_REMOVE' => 'Eltávolítás',


);

