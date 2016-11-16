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
	//module
	'LBL_MODULE_NAME' => 'Tudásbázis',
    'LBL_MODULE_NAME_SINGULAR' => 'Tudásbázis',
	'LBL_MODULE_TITLE' => 'Tudásbázis cikk',
	'LNK_NEW_ARTICLE' => 'Új cikk létrehozása',
	'LNK_KBDOCUMENT_LIST'=> 'Dokumentumok megtekintése',
	'LBL_DOC_REV_HEADER' => 'Dokumentum felülvizsgálata',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumentum keresése',
	'LBL_SEND_EMAIL'  => 'Email küldése',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Választás',
	'LBL_EMBEDED_IMAGES' => 'Beágyazott képek:',
	'LBL_SHOW_MORE' => 'Több mutatása',
	'LBL_SHOW_ARTICLE_DETAILS' => 'További részletek megjelenítése',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Részletek elrejtése',
	'LBL_TAGS' => 'Címkék:',
	'LBL_NOT_AN_ADMIN_USER' => 'nem adminisztrátor felhasználó.',
	'LBL_NOT_A_VALID_FILE' => 'Nem érvényes fájl',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Új címke létrehozása',
    'LBL_NEW_TAG_NAME' => 'Új címke neve:',
	
	//vardef labels	
	'LBL_ID' => 'Azonosító',
	'LBL_KBDOCUMENT_ID' => 'Dokumentum azonosító:',
	'LBL_ARTICLE_TITLE' => 'Titulus:',
	'LBL_ARTICLE_AUTHOR' => 'Szerző:',
	'LBL_ARTICLE_APPROVED_BY' =>'Jóváhagyó:',
	'LBL_ARTICLE_BODY' => 'Cikktörzs:',
	'LBL_NAME' => 'Dokumentum neve:',
	'LBL_DESCRIPTION' => 'Leírás',
	'LBL_CATEGORY' => 'Kategória',
	'LBL_SUBCATEGORY' => 'Alkategória',
	'LBL_STATUS' => 'Állapot',
	'LBL_CREATED_BY'=> 'Létrehozta',
	'LBL_DATE_ENTERED'=> 'Kezdés dátuma',
	'LBL_DATE_MODIFIED'=> 'Módosítás dátuma',
	'LBL_DELETED' => 'Törölve',
	'LBL_MODIFIED'=> 'Módosítói azonosító',
	'LBL_MODIFIED_USER' => 'Módosította',
	'LBL_CREATED'=> 'Létrehozta',
	'LBL_RELATED_DOCUMENT_ID'=>'Kapcsolódó dokumentum azonosítója',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Kapcsolódó dokumentum felülvizsgálat azonosítója',
	'LBL_IS_TEMPLATE'=>'egy sablon',
	'LBL_TEMPLATE_TYPE'=>'Dokumentum típusa',
    'LBL_PARENT_TYPE'=>'Szülő típusa',
	'LBL_NUMBER'    =>  'Száma',
    'LBL_TEXT_BODY' =>  'SZOVEG_CIMKE',
    'LBL_CREATED_BY_NAME' => 'CIMKE_NEV',
    'LBL_TAG_ID' => 'CIMKE_AZONOSITO',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_TUDASBAZISDOKUMENTUM_CIMKE_AZONOSITO',
    'LBL_CONTRACT_STATUS'=>'Szerződés státusza',
    'LBL_LINKED_ID'=>'Kapcsolódó azonosító',
    'LBL_VIEWS_NUMBER'=>'Megtekintések száma',

	'LBL_REVISION_NAME' => 'Felülvizsgálat száma',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Tud.Báz.Dokumentum felülvizsgálat száma',
	'LBL_MIME' => 'Mime típus',
	'LBL_REVISION' => 'Felülvizsgálat',
	'LBL_DOCUMENT' => 'Kapcsolódó dokumentum',
	'LBL_LATEST_REVISION' => 'Utolsó felülvizsgálat azonosító',
    'LBL_LATEST_REVISION_NAME' => 'Utolsó felülvizsgálat neve',
    'LBL_SELECTED_REVISION_NAME' => 'Kiválasztott felülvizsgálat neve',
    'LBL_SELECTED_REVISION_ID' => 'Kiválasztott módosítás azonosítója',
    'LBL_SELECTED_REVISION_FILENAME' => 'Kiválasztott módosítás fájlneve',
	'LBL_CHANGE_LOG'=> 'Változásnapló',
	'LBL_ACTIVE_DATE'=> 'Közzététel dátuma',
	'LBL_EXPIRATION_DATE' => 'Lejárat dátuma',
	'LBL_FILE_EXTENSION'  => 'Fájl kiterjesztése',
    'LBL_KBDOC_APPROVER_NAME' => 'Jóváhagyó neve',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Tudásbázis',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Tudásbázis admin',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Tudásbázis adminisztrálása',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nincs részletezve',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Címkék:',
	'LBL_KBDOC_BODY' => 'Szövegtörzs:',
	'LBL_KBDOC_APPROVED_BY' =>'Jóváhagyta:',
	'LBL_KBDOC_ATTACHMENT' =>'Csatolmányok',
	'LBL_KBDOC_ATTS_TITLE' =>'Mellékletek letöltése:',
	'LBL_DOC_NAME' => 'Dokumentum neve:',
	'LBL_FILENAME' => 'Fájlnév:',
	'LBL_DOC_VERSION' => 'Ellenőrzés:',
	'LBL_CATEGORY_VALUE' => 'Kategória:',
	'LBL_SUBCATEGORY_VALUE'=> 'Alkategória:',
	'LBL_DOC_STATUS'=> 'Állapot:',
	'LBL_LAST_REV_CREATOR' => 'A felülvizsgálatot készítette:',
	'LBL_LAST_REV_DATE' => 'Felülvizsgálat dátuma:',
	'LBL_DOWNNLOAD_FILE'=> 'Csatolmányok:',
	'LBL_DET_RELATED_DOCUMENT'=>'Kapcsolódó dokumentum:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Kapcsolódó dokumentum felülvizsgálata:",
	'LBL_DET_IS_TEMPLATE'=>'Sablon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumentum típusa:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Külső cikk? :',
	'LBL_SHOW_TAGS' => 'Több címke megjenítése',
    'LBL_HIDE_TAGS' => 'Címkék elrejtése',
	'LBL_TEAM'=> 'Csoport:',
	'LBL_DOC_DESCRIPTION'=>'Leírás:',
	'LBL_KBDOC_SUBJECT' =>'Tárgy:',
	'LBL_DOC_ACTIVE_DATE'=> 'Közzététel dátuma:',
	'LBL_DOC_EXP_DATE'=> 'Lejárat dátuma:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Cikkek áttekintése',
	'LBL_LIST_FORM_TITLE' => 'Dokumentumlista',
	'LBL_LIST_DOCUMENT' => 'Dokumentum',
	'LBL_LIST_CATEGORY' => 'Kategória',
	'LBL_LIST_SUBCATEGORY' => 'Alkategória',
	'LBL_LIST_REVISION' => 'Felülvizsgálat',
	'LBL_LIST_LAST_REV_CREATOR' => 'Közzétette',
	'LBL_LIST_LAST_REV_DATE' => 'Felülvizsgálat dátuma',
	'LBL_LIST_VIEW_DOCUMENT'=>'Mutat',
    'LBL_LIST_DOWNLOAD'=> 'Letöltés',
	'LBL_LIST_ACTIVE_DATE' => 'Közzététel dátuma',
	'LBL_LIST_EXP_DATE' => 'Lejárat dátuma',
	'LBL_LIST_STATUS'=>'Állapot',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Szerző',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Legnézetebb cikkek',
	'LBL_LIST_MOST_RECENT' => 'Legújabb cikkek',
    'LBL_LIST_APPROVED_BY' => 'Jóváhagyta',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokumentum neve:',
	'LBL_SF_CATEGORY' => 'Kategória:',
	'LBL_SF_SUBCATEGORY'=> 'Alkategória:',
	'LBL_SF_ACTIVE_DATE' => 'Közzététel dátuma:',
	'LBL_SF_EXP_DATE'=> 'Lejárat dátuma:',

	'DEF_CREATE_LOG' => 'Dokumentum létrehozva',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Keresés',
    'LBL_TAB_BROWSE' => 'Tallózzás',
    'LBL_TAB_ADVANCED' => 'Részletes keresés',
    'LBL_MENU_FTS' => 'Keresés a teljes szövegben',
    'LBL_FTS_EMPTY_STRING' =>  'A keresés nem lehetséges üres szövegben',
    'LBL_SEARCH_WITHIN' => 'Keresés ebben:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Tartalmazza ezeket a szavakat:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Kivéve ezeket a szavakat:',  
    'LBL_UNDER_THIS_TAG' => 'Használja ezt a cimkét:',
    'LBL_PUBLISHED' => 'Közzétéve:',
    'LBL_EXPIRES' => 'Lejár:',
    'LBL_TIMES_VIEWED' => 'Megtekintés gyakorisága:',    
    'LBL_ATTACHMENTS' => 'Csatolmányok:',
    'LBL_SAVE_SEARCH_AS' => 'Keresés mentése, mint:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Ez menti a részletes beállításait, mint Mentett keresési szűrőt a Tudásbázis részére.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Előző mentett keresések:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Egy mentett keresés szerkesztése vagy törlése.',
    'LBL_UPDATE' => 'Frissítés',
    'LBL_DELETE' => 'Törlés',
    'LBL_SHOW_OPTIONS' => 'Több választási lehetőség',
    'LBL_AND' => 'és',
    'LBL_SEARCH' => 'Keresés',
    'LBL_CLEAR' => 'Töröl',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Jóváhagyó neve',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Gyakoriság',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Előnézet nem elérhető; a dokumentum nem található.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Előnézet nem elérhető; a dokumentum létezik, de nem lett benne tartalom létrehozva.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Címkézetlen cikkek.',
    'LBL_TOP_TEN_LIST_TITLE' => 'A 10 legtöbbet megtekintett cikk',
    'LBL_SHOW_SYNTAX_HELP' => 'Szintaktikai segítség',
    'LBL_MISMATCH_QUOTES_ERR' => 'A lekérdezés során hiba lépett fel. Az idézőjelek csak párban szerepelhetnek. Amennyiben több szót szeretne egyszerre keresni, a backslash karakterrel együtt (\\") próbálja meg.', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        'Keresési segítség:<br /><br />1. A plusz (+) jel azokat a kifejezéseket jelöli, amelyeket az eredményeknek tartalmazniuk kell.<br />2. A mínusz (-) jel azokat a kifejezéseket jelöli, amelyeket az eredményeknek nem szabad tartalmazniuk. A mínusz (-) jel használata nem feltétlen szükséges, ha kitölti a kihagyni kívánt szavak mezőjét.<br />3. Idézőjelek között szereplő kifejezések ("példa1 példa2") egyetlen keresési kifejezésként értelmeződnek. Az idézőjeleknek párban kell szerepelniük, ellenkező esetben a keresés nem fog futni.<br />4. Az aposztróf ($#39;) kereshető karakterként viselkedik; nem csoportosítja a kifejezéseket.<br /><br />Példa: ha olyan találatokat szeretne, amelyek tartalmazzák opcionálisan a "Sugar" vagy a "CRM" szavakat, kötelezően a "tudásbázis cikk" és "nagyszerű" megjelöléseket, ugyanakkor nem tartalmazzák a "demo" és "múlt idő" kifejezéseket, akkor az alábbi keresési kifejezéseket kell megadnia: Sugar CRM +"tudásbázis cikk" +nagyszerű -demo -"múlt idő"<br /><br />Megjegyzés:<br /><br />1. A rendszer nem tesz különbséget a kis- és nagybetűk között.<br />2. A kereső felismeri a vesszők és szünetek használatát a tagolásnál.<br />3. Ne tegyen szünetet a plusz (+) és mínusz (-) jelek és a hozzájuk kapcsolódó szavak közé!',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Származtatott címke',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Származtatott címkék',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Cikk',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Cikkek',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Ez a címke tartalmazza a',
    
	//error messages
	'ERR_DOC_NAME'=>'Dokumentum neve',
	'ERR_DOC_ACTIVE_DATE'=>'Közzététel dátuma',
	'ERR_DOC_EXP_DATE'=> 'Lejárat dátuma',
	'ERR_FILENAME'=> 'Fájlnév',
	'ERR_DOC_VERSION'=> 'Dokumentum verziója',
	'ERR_DELETE_CONFIRM'=> 'Biztos, hogy törölni akarja a dokumentum jelen változatát?',
	'ERR_DELETE_LATEST_VERSION'=> 'Nincs jogosultsága törölni a dokumentum utolsó változatát!',
	'LNK_NEW_MAIL_MERGE' => 'Körlevél',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Körlevél sablon:',
	'ERR_FILESIZE' => 'A fájl túl nagy. Megengedett fájlméret:',

	'LBL_TREE_TITLE' => 'Dokumentumok',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentum neve',
	'LBL_CONTRACT_NAME'=>'Szerződés neve:',
	'LBL_LIST_IS_TEMPLATE'=>'Sablon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumentum típusa',
	'LBL_LIST_SELECTED_REVISION'=>'Kiválasztott felülvizsgálat',
	'LBL_LIST_LATEST_REVISION'=>'Utolsó felülvizsgálat',
	'LBL_CASES_SUBPANEL_TITLE'=>'Kapcsolódó esetek',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Kapcsolódó emailek',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Kapcsolódó szerződések',
	'LBL_LAST_REV_CREATE_DATE'=>'Utolsó módosítás létrehozásának dátuma',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Kulcsszavak:',
    'LBL_CASES' =>'Esetek',
    'LBL_CASE_ID' => 'Eset azonosító',
    'LBL_CASE'    => 'Eset:',
    'LBL_EMAILS' =>'Emailek',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Válasszon egy opciót a legördülő listából',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Válassza ki a szülő címkét a fa struktúrából',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Válassza ki a törölni kívánt címké(ke)t a fa struktúrából',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Válassza ki az átnevezni kívánt címkét a fa struktúrából',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Ez a címke már létezik.',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Írjon be egy új címkenevet',
    'LBL_SAVING_THE_TAG' => 'Címke mentése...',
    'LBL_CREATING_NEW_TAG' => 'Új címke létrehozása...',
    'LBL_TAGS_ROOT_LABEL' => 'Címkék',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'GYIK címkét nem lehet átnevezni',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Először válassza ki a cikkeket',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Válassza ki a cikkeket a címke alkalmazásához',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Először válassza ki a cikkeket',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Válasszon egy címkét a fa struktúrából',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Válassza ki a címkéket a fa struktúrából',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Cikkek átköltöztetése a címkékhez...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Cikkek címkézése...',
    'LBL_ROOT_TAG_MESSAGE' => 'Gyökér címke nem jelölhető/linkelhető a cikkhez',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Gyökér címkét nem lehet átnevezni',
    'LBL_TYPE_NEW_NODE_NAME'=>'Kérem adjon meg egy címkenevet',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Forrás- és a célcímke ugyanaz',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Címke törlése',
    'LBL_SELECT_TAG'  => 'Címke kiválasztása',
    'LBL_APPLY_TAG'  =>  'Címke alkalmazása',
    'LBL_MOVE'  =>   'Mozgat',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Címke tallózásának betöltése...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Hiba lépett fel a címke betöltése során.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Hiba: érvénytelen beviteli elem',
    'LBL_CREATE_NEW_TAG'  => 'Új címke létrehozása',
    'LBL_SEARCH_TAG'  => 'Keresés',
    'LBL_TAG_NAME'  =>'Címke neve:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Válassza ki a törölni kívánt címkéket',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Írja be a keresendő címke nevét',
    'LBL_KB_NOTIFICATION' => 'Dokumentum sikeresen közzétéve',
    'LBL_KB_PUBLISHED_REQUEST' => 'Önhöz továbbított egy dokumentumot jóváhagyásra és közzétételre.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Dokumentum státusza vázlatra módosítva',  
    'LBL_CONTRACTS' => 'Szerződések',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Válassza ki a szülő címkét az alábbi fa struktúrából:',
	'LBL_CLICK_APPLY_TAG' => 'Kattintson az Alkalmaz címkére',	
	'LBL_HEAD_TAGS' => 'Címkék',
	'LBL_REMOVE' => 'Eltávolítás' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Szerkeszt' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Alapértelmezett link szöveg.',
    'LBL_SELECT_NODE' => 'Adjon meg egy csomópontot',
    'LBL_ARTICLE_EXISTS' => 'A cikk már létezik',


);
?>
