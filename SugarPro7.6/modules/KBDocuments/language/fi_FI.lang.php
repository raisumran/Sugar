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
	'LBL_MODULE_NAME' => 'Tietämyskanta',
    'LBL_MODULE_NAME_SINGULAR' => 'Tietämyskantadokumentti',
	'LBL_MODULE_TITLE' => 'Tietämyskanta-artikkeli',
	'LNK_NEW_ARTICLE' => 'Luo artikkeli',
	'LNK_KBDOCUMENT_LIST'=> 'Näytä dokumentit',
	'LBL_DOC_REV_HEADER' => 'Dokumentin revisiot',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumenttien haku',
	'LBL_SEND_EMAIL'  => 'Lähetä sähköpostia',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Valitse',
	'LBL_EMBEDED_IMAGES' => 'Sulautetut kuvat:',
	'LBL_SHOW_MORE' => 'Näytä lisää palvelupyyntöjä',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Näytä lisää tietoja',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Piilota tiedot',
	'LBL_TAGS' => 'Tagit:',
	'LBL_NOT_AN_ADMIN_USER' => 'Ei admin-käyttäjä',
	'LBL_NOT_A_VALID_FILE' => 'Ei validi tiedosto',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Luo uusi tagi',
    'LBL_NEW_TAG_NAME' => 'Uuden tagin nimi:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Dokumentin ID',
	'LBL_ARTICLE_TITLE' => 'Otsikko:',
	'LBL_ARTICLE_AUTHOR' => 'Tekijä:',
	'LBL_ARTICLE_APPROVED_BY' =>'Hyväksyjä:',
	'LBL_ARTICLE_BODY' => 'Artikkelin leipäteksti:',
	'LBL_NAME' => 'Asiakirjan nimi:',
	'LBL_DESCRIPTION' => 'Kuvaus',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Alakategoria',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Luoja:',
	'LBL_DATE_ENTERED'=> 'Luontipäivä',
	'LBL_DATE_MODIFIED'=> 'Muokattu viimeksi',
	'LBL_DELETED' => 'Poistettu',
	'LBL_MODIFIED'=> 'Muokkaajan ID',
	'LBL_MODIFIED_USER' => 'Muokannut',
	'LBL_CREATED'=> 'Luoja:',
	'LBL_RELATED_DOCUMENT_ID'=>'Liittyvän dokumentin ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Liittyvän dokumentin revisio-ID',
	'LBL_IS_TEMPLATE'=>'On mallipohja',
	'LBL_TEMPLATE_TYPE'=>'Dokumentin tyyppi',
    'LBL_PARENT_TYPE'=>'Kantatyyppi',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Sopimuksen status:',
    'LBL_LINKED_ID'=>'Linkitetty ID',
    'LBL_VIEWS_NUMBER'=>'Katselujen määrä',

	'LBL_REVISION_NAME' => 'Muutosnumero',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDokumentin revisionumero',
	'LBL_MIME' => 'Mime-tyyppi',
	'LBL_REVISION' => 'Revisio',
	'LBL_DOCUMENT' => 'Liittyvät dokumentit',
	'LBL_LATEST_REVISION' => 'Uusimman revision ID',
    'LBL_LATEST_REVISION_NAME' => 'Uusimman revision nimi',
    'LBL_SELECTED_REVISION_NAME' => 'Valitun revision nimi',
    'LBL_SELECTED_REVISION_ID' => 'Valitun revision ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valitun revision tiedostonimi',
	'LBL_CHANGE_LOG'=> 'Muutosloki',
	'LBL_ACTIVE_DATE'=> 'Julkaisupäivä',
	'LBL_EXPIRATION_DATE' => 'Erääntymispäivä',
	'LBL_FILE_EXTENSION'  => 'Tiedostotunniste',
    'LBL_KBDOC_APPROVER_NAME' => 'Hyväksyjän nimi',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Tietämyskanta',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Tietämyskannan admin',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Hallitse tietämyskantaa',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Täsmentämätön',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Tagit:',
	'LBL_KBDOC_BODY' => 'Runko:',
	'LBL_KBDOC_APPROVED_BY' =>'Hyväksyjä:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attachment',
	'LBL_KBDOC_ATTS_TITLE' =>'Lataa liitteet',
	'LBL_DOC_NAME' => 'Asiakirjan nimi:',
	'LBL_FILENAME' => 'Tiedoston nimi:',
	'LBL_DOC_VERSION' => 'Versio:',
	'LBL_CATEGORY_VALUE' => 'Kategoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Alakategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Revision tekijä:',
	'LBL_LAST_REV_DATE' => 'Revision päiväys:',
	'LBL_DOWNNLOAD_FILE'=> 'Liitteet:',
	'LBL_DET_RELATED_DOCUMENT'=>'Liittyvä dokuemtti:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Liittyvän dokumentin revisio:",
	'LBL_DET_IS_TEMPLATE'=>'Mallipohja? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumentin tyyppi:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Ulkoinen artikkeli? :',
	'LBL_SHOW_TAGS' => 'Näytä lisää tageja',
    'LBL_HIDE_TAGS' => 'Piilota tagit',
	'LBL_TEAM'=> 'Tiimi',
	'LBL_DOC_DESCRIPTION'=>'Kuvaus:',
	'LBL_KBDOC_SUBJECT' =>'Aihe:',
	'LBL_DOC_ACTIVE_DATE'=> 'Julkaisupäivämäärä:',
	'LBL_DOC_EXP_DATE'=> 'Erääntymispäivämäärä:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Näytä artikkelit',
	'LBL_LIST_FORM_TITLE' => 'Dokumenttilista',
	'LBL_LIST_DOCUMENT' => 'Dokumentti',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Alakategoria',
	'LBL_LIST_REVISION' => 'Revisio',
	'LBL_LIST_LAST_REV_CREATOR' => 'Julkaisija',
	'LBL_LIST_LAST_REV_DATE' => 'Revision päiväys:',
	'LBL_LIST_VIEW_DOCUMENT'=>'Näytä',
    'LBL_LIST_DOWNLOAD'=> 'Lataa',
	'LBL_LIST_ACTIVE_DATE' => 'Julkaisupäivä',
	'LBL_LIST_EXP_DATE' => 'Erääntymispäivä',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Tekijä',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Eniten katsotut artikkelit',
	'LBL_LIST_MOST_RECENT' => 'Uusimmat artikkelit',
    'LBL_LIST_APPROVED_BY' => 'Hyväksyjä',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Asiakirjan nimi:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Alakategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Julkaisupäivämäärä:',
	'LBL_SF_EXP_DATE'=> 'Erääntymispäivämäärä:',

	'DEF_CREATE_LOG' => 'Dokumentti luotu',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Haku',
    'LBL_TAB_BROWSE' => 'Selaa',
    'LBL_TAB_ADVANCED' => 'Laaja haku',
    'LBL_MENU_FTS' => 'Kokotekstihaku',
    'LBL_FTS_EMPTY_STRING' =>  'Kokotekstihakua ei voida suorittaa tyhjällä merkkijonolla.',
    'LBL_SEARCH_WITHIN' => 'Hae seuraavasta:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Sisältäen nämä sanat:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Ei-sisältäen näitä sanoja:',  
    'LBL_UNDER_THIS_TAG' => 'Käyttäen tätä tagia:',
    'LBL_PUBLISHED' => 'Julkaistu',
    'LBL_EXPIRES' => 'Vanhentuu',
    'LBL_TIMES_VIEWED' => 'Näyttöfrekvenssi:',    
    'LBL_ATTACHMENTS' => 'Liitteet:',
    'LBL_SAVE_SEARCH_AS' => 'Tallenna haku nimellä:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Tämä tallentaa määrittämäsi syötteet <i>tallennettuna hakusuodattimena</i> tietämyskantaan.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Aiemmat tallennetut haut:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Muokkaa tai poista olemassa olevia tallennettuja hakuja.',
    'LBL_UPDATE' => 'Päivitä',
    'LBL_DELETE' => 'Poista',
    'LBL_SHOW_OPTIONS' => 'Enemmän valintoja',
    'LBL_AND' => 'ja',
    'LBL_SEARCH' => 'Haku',
    'LBL_CLEAR' => 'Tyhjennä',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Hyväksyjän nimi',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Frekvenssi',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Esikatselu ei ole saatavilla, koska dokumenttitietuetta ei löytynyt.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Esikatselua ei ole saatavilla. Dokumentti on olemassa, mutta sisältöä ei ole luotu.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Ei-tägätyt artikkelit',
    'LBL_TOP_TEN_LIST_TITLE' => '10 eniten katsottua artikkelia',
    'LBL_SHOW_SYNTAX_HELP' => 'Syntaksiapu',
    'LBL_MISMATCH_QUOTES_ERR' => 'Querysi ei toimi kuten syötetty. Jokaiselle avautuvalle lainausmerkille (<b>”</b>) pitää olla myös sulkeva lainausmerkki. Jos haluat etsiä merkkijonoa, jossa on lainausmerkki, escappaa se takakenoviivalla (<b>\\”</b>)', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<b>Kyselyn syntaksiapu:</b><p><ul><li>Plus-merkki (<code>+</code>) indikoi, että tuloksilla <i>pitää olla</i> tämä termi.</li><li>Miinusmerkki (<code>-</code>) indikoi, että tuloksissa <i>ei pitäisi olla</i> tätä termiä. Miinusmerkki ei ole tarpeen, jos täytät tekstikenttää, joka jättää tuloksista pois sanoja.</li><li>Monta sanaa, ympäröitynä lainausmerkeillä (<code>”esimerkki1 esimerkki2”</code>) prosessoidaan yhtenä hakuterminä. Hakulausekkeessa pitää olla sulkeva lainausmerkki jokaiselle avaavalle lainausmerkille, muuten hakua ei voida suorittaa.<br />Jos haluat etsiä pelkkää lainausmerkkiä, laita takakenoviiva sen eteen (<code>\\”</code>).</li><li>Heittomerkki (<code>&#39;</code>) prosessoidaan itsekseen, eikä sillä voida ryhmittää termejä.</li></ul></p><p><b>Esimerkki:</b><br /><br />Hakeaksesi kaikki artikkelit, joissa on sana ‘Sugar” tai ‘CRM”, ja joissa pitää olla sanat ‘tietämyskannan artikkeli’ ja ‘hieno’, mutta joissa ei pitäisi olla sanoja ‘demo’ tai ‘mennyt muoto’, syötä seuraava hakulauseke:<br /><br /><code>&nbsp;&nbsp;Sugar CRM +”tietämyskannan artikkeli” +hieno -demo -”mennyt muoto”</code></p><br /><p><b>Huomioitavaa:</b><ul><li>Aakkoslajilla (suuret tai pienet kirjaimet) ei ole merkitystä.</li><li>Välilyönnit ja pilkut ovat hyväksyttäviä hakutermien erottimia.</li><li>Älä laita väliä plus- tai miinusmerkin ja niiden tarkentaman sanan väliin (eli <code>+esimerkki</code>, eikä <code>+ esimerkki</code>)</li></ul></p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Lapsitagi',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Lapsitagit',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artikkeli',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artikkelit',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Tässä tagissa on',
    
	//error messages
	'ERR_DOC_NAME'=>'Dokumentin nimi',
	'ERR_DOC_ACTIVE_DATE'=>'Julkaisupäivä',
	'ERR_DOC_EXP_DATE'=> 'Erääntymispäivä',
	'ERR_FILENAME'=> 'Tiedoston nimi',
	'ERR_DOC_VERSION'=> 'Dokumentin versio',
	'ERR_DELETE_CONFIRM'=> 'Haluatko poistaa tämän dokumentin version?',
	'ERR_DELETE_LATEST_VERSION'=> 'Et voi poistaa dokumentin viimeisintä versiota.',
	'LNK_NEW_MAIL_MERGE' => 'Joukkopostitus:',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Yhdistämisen mallipohja:',
	'ERR_FILESIZE' => 'Tiedosto on liian suuri. Suurin sallittu tiedoston koko on',

	'LBL_TREE_TITLE' => 'Dokumentit',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentin nimi',
	'LBL_CONTRACT_NAME'=>'Sopimuksen nimi:',
	'LBL_LIST_IS_TEMPLATE'=>'Mallipohja?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumentin tyyppi',
	'LBL_LIST_SELECTED_REVISION'=>'Valittu revisio',
	'LBL_LIST_LATEST_REVISION'=>'Uusin revisio',
	'LBL_CASES_SUBPANEL_TITLE'=>'Liittyvät palvelupyynnöt',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Liittyvät sähköpostit',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Liittyvät sopimukset',
	'LBL_LAST_REV_CREATE_DATE'=>'Viimeisen revision luontipäivä',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Avainsanat:',
    'LBL_CASES' =>'Palvelupyynnöt',
    'LBL_CASE_ID' => 'Palvelupyynnön ID',
    'LBL_CASE'    => 'Palvelupyyntö',
    'LBL_EMAILS' =>'Sähköpostit',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Valitse toiminto pudotusvalikosta',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Valitse vanhempi tagi puusta',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Valitse puusta poistettavat tagit',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Valitse puusta uudelleennimettävät tagit',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Tagi on jo olemassa',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Kirjoita uuden tagin nimi',
    'LBL_SAVING_THE_TAG' => 'Tallennetaan tagia...',
    'LBL_CREATING_NEW_TAG' => 'Luodaan uutta tagia...',
    'LBL_TAGS_ROOT_LABEL' => 'Tagit',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'UKK:n tageja ei voida nimetä uudelleen',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Valitse ensiksi artikkelit',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Valitse artikkelit, jokon soveltaa tagit',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Valitse ensiksi artikkelit',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Valitse tagi puusta',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Valitse tagit puusta',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Siirretään artikkelia tagiin...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Sovelletaan tageja artikkeleihin...',
    'LBL_ROOT_TAG_MESSAGE' => 'Juuritagia ei voida valita/linkittää artikkeliin',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Juuritagia ei voida nimetä uudelleen',
    'LBL_TYPE_NEW_NODE_NAME'=>'Syötä tagin nimi',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Lähde- ja tavoitetagit ovat samat',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Poista tagi',
    'LBL_SELECT_TAG'  => 'Valitse tagi',
    'LBL_APPLY_TAG'  =>  'Sovella tagi',
    'LBL_MOVE'  =>   'Siirrä',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Laukaistaan tagin selanta:',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Virhe prosessoitaessa tätä tagipyyntöä.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Virhe: Ei syöttötiedostoelementti',
    'LBL_CREATE_NEW_TAG'  => 'Luo uusi tagi',
    'LBL_SEARCH_TAG'  => 'Haku',
    'LBL_TAG_NAME'  =>'Tagin nimi:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Valitse poistettavat tagit',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Kirjoita haettavan tagin nimi',
    'LBL_KB_NOTIFICATION' => 'Dokumentti on jo julkaistu',
    'LBL_KB_PUBLISHED_REQUEST' => 'on määrittänyt dokumentin sinulle hyväksyntää ja julkaisua varten.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Dokumentin status on muutettu takaisin luonnokseksi.',  
    'LBL_CONTRACTS' => 'Sopimukset',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Valitse puusta vanhempi tagi.',
	'LBL_CLICK_APPLY_TAG' => 'Klikkaa soveltaaksesi tagi',	
	'LBL_HEAD_TAGS' => 'Tagit',
	'LBL_REMOVE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Muokkaa' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Oletuslinkin teksti',
    'LBL_SELECT_NODE' => 'Valitse noodi',
    'LBL_ARTICLE_EXISTS' => 'Artikkeli on jo olemassa.',


);
?>
