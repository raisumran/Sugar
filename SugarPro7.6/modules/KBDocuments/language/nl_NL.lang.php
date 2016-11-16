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
	'LBL_MODULE_NAME' => 'Knowledge Base',
    'LBL_MODULE_NAME_SINGULAR' => 'Knowledge Base Document',
	'LBL_MODULE_TITLE' => 'Knowledge Base Artikel',
	'LNK_NEW_ARTICLE' => 'Nieuw Artikel',
	'LNK_KBDOCUMENT_LIST'=> 'Documents Lijst',
	'LBL_DOC_REV_HEADER' => 'Document Revisies',
	'LBL_SEARCH_FORM_TITLE'=> 'Document Zoeken',
	'LBL_SEND_EMAIL'  => 'Verzend E-mail',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Kies',
	'LBL_EMBEDED_IMAGES' => 'Ingesloten Afbeeldingen:',
	'LBL_SHOW_MORE' => 'Toon meer',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Toon Meer Details',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Ververg Details',
	'LBL_TAGS' => 'Tags:',
	'LBL_NOT_AN_ADMIN_USER' => 'Geen admin gebruiker',
	'LBL_NOT_A_VALID_FILE' => 'Geen geldig bestand',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Nieuwe Tag aanmaken',
    'LBL_NEW_TAG_NAME' => 'Nieuwe Tag Naam:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Document Id',
	'LBL_ARTICLE_TITLE' => 'Titel:',
	'LBL_ARTICLE_AUTHOR' => 'Author:',
	'LBL_ARTICLE_APPROVED_BY' =>'Goedkeuring door:',
	'LBL_ARTICLE_BODY' => 'Artikel Body:',
	'LBL_NAME' => 'Document Naam:',
	'LBL_DESCRIPTION' => 'Beschrijving',
	'LBL_CATEGORY' => 'Categorie',
	'LBL_SUBCATEGORY' => 'Sub Categorie',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Gemaakt door',
	'LBL_DATE_ENTERED'=> 'Datum aangemaakt',
	'LBL_DATE_MODIFIED'=> 'Datum gewijzigd',
	'LBL_DELETED' => 'Verwijderd',
	'LBL_MODIFIED'=> 'Gewijzigd door Id',
	'LBL_MODIFIED_USER' => 'Gewijzigd door',
	'LBL_CREATED'=> 'Gemaakt door',
	'LBL_RELATED_DOCUMENT_ID'=>'Verwant Document Id',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Verwant Document Revisie Id',
	'LBL_IS_TEMPLATE'=>'Is een Sjabloon',
	'LBL_TEMPLATE_TYPE'=>'Document Type',
    'LBL_PARENT_TYPE'=>'Parent Type',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Contractstatus',
    'LBL_LINKED_ID'=>'Gerelateerde ID',
    'LBL_VIEWS_NUMBER'=>'Aantal keer bekeken',

	'LBL_REVISION_NAME' => 'Revisie Nummer',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDocument Revisie Nummer',
	'LBL_MIME' => 'Mime type',
	'LBL_REVISION' => 'Revisie',
	'LBL_DOCUMENT' => 'Verwant Document',
	'LBL_LATEST_REVISION' => 'Laatste Revisie Id',
    'LBL_LATEST_REVISION_NAME' => 'Laatste Revisie Naam',
    'LBL_SELECTED_REVISION_NAME' => 'Geselecteerde Revisie Naam',
    'LBL_SELECTED_REVISION_ID' => 'Gekozen Revisie ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Gekozen Revisie Bestandsnaam',
	'LBL_CHANGE_LOG'=> 'Wijzigings Log',
	'LBL_ACTIVE_DATE'=> 'Publiceer Datum',
	'LBL_EXPIRATION_DATE' => 'Vervaldatum',
	'LBL_FILE_EXTENSION'  => 'Bestands extensie',
    'LBL_KBDOC_APPROVER_NAME' => 'Goedkeuring door',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Knowledge Base',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Knowledge Base Admin',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Knowledge Base Admin',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Niet gespecificeerd',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Tags:',
	'LBL_KBDOC_BODY' => 'Inhoud:',
	'LBL_KBDOC_APPROVED_BY' =>'Goedgekeurd door:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attachment',
	'LBL_KBDOC_ATTS_TITLE' =>'Download Bijlagen:',
	'LBL_DOC_NAME' => 'Document Naam:',
	'LBL_FILENAME' => 'Bestandsnaam:',
	'LBL_DOC_VERSION' => 'Revisie:',
	'LBL_CATEGORY_VALUE' => 'Categorie:',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub Categorie:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Revisie Gemaakt door:',
	'LBL_LAST_REV_DATE' => 'Revisie Datum:',
	'LBL_DOWNNLOAD_FILE'=> 'Bijlagen:',
	'LBL_DET_RELATED_DOCUMENT'=>'Verwant Document:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Verwant Document Revisie:",
	'LBL_DET_IS_TEMPLATE'=>'Sjabloon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Document Type:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Extern Artikel? :',
	'LBL_SHOW_TAGS' => 'Toon Meer Tags',
    'LBL_HIDE_TAGS' => 'Verberg Tags',
	'LBL_TEAM'=> 'Team:',
	'LBL_DOC_DESCRIPTION'=>'Omschrijving:',
	'LBL_KBDOC_SUBJECT' =>'Onderwerp:',
	'LBL_DOC_ACTIVE_DATE'=> 'Publiceerdatum:',
	'LBL_DOC_EXP_DATE'=> 'Vervaldatum:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artikelen',
	'LBL_LIST_FORM_TITLE' => 'Document Lijst',
	'LBL_LIST_DOCUMENT' => 'Document',
	'LBL_LIST_CATEGORY' => 'Categorie',
	'LBL_LIST_SUBCATEGORY' => 'Sub Categorie',
	'LBL_LIST_REVISION' => 'Revisie',
	'LBL_LIST_LAST_REV_CREATOR' => 'Gepubliceerd door',
	'LBL_LIST_LAST_REV_DATE' => 'Revisie Datum',
	'LBL_LIST_VIEW_DOCUMENT'=>'Bekijken',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Publiceer Datum',
	'LBL_LIST_EXP_DATE' => 'Vervaldatum',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Auteur',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Meest Bekeken Artikelen',
	'LBL_LIST_MOST_RECENT' => 'Meest Recente Artikelen',
    'LBL_LIST_APPROVED_BY' => 'Goedgekeurd door',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Document Naam:',
	'LBL_SF_CATEGORY' => 'Categorie:',
	'LBL_SF_SUBCATEGORY'=> 'Sub Categorie:',
	'LBL_SF_ACTIVE_DATE' => 'Publiceerdatum:',
	'LBL_SF_EXP_DATE'=> 'Vervaldatum:',

	'DEF_CREATE_LOG' => 'Document Aangemaakt',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Search',
    'LBL_TAB_BROWSE' => 'Bladeren',
    'LBL_TAB_ADVANCED' => 'Advanced Search',
    'LBL_MENU_FTS' => 'Zoeken in Volledige tekst',
    'LBL_FTS_EMPTY_STRING' =>  'Kan niet in de volledige tekst zoeken met een lege string',
    'LBL_SEARCH_WITHIN' => 'Zoeken in:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Bevat deze woorden:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Exclusief deze woorden:',  
    'LBL_UNDER_THIS_TAG' => 'Gebruik maken van deze Tag:',
    'LBL_PUBLISHED' => 'Gepubliceerd:',
    'LBL_EXPIRES' => 'Vervalt:',
    'LBL_TIMES_VIEWED' => 'Bekijk Frequentie:',    
    'LBL_ATTACHMENTS' => 'Bijlagen:',
    'LBL_SAVE_SEARCH_AS' => 'Sla deze zoekopdracht op als:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Dit bewaart uw gespecificeerde ingaves als zoekopdracht voor de Knowledge Base.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Vorige opgeslagen zoekopdrachten:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Bewerk of verwijder een bestaande opgeslagen zoekopdracht.',
    'LBL_UPDATE' => 'Update',
    'LBL_DELETE' => 'Delete',
    'LBL_SHOW_OPTIONS' => 'Meer Opties',
    'LBL_AND' => 'en',
    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Wissen',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Goedkeuring door',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Frequentie',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Voorvertoning is niet beschikbaar. Documentrecord is niet gevonden.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Voorvertoning is niet beschikbaar. Het document bestaat, maar er is nog geen inhoud aangemaakt.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Artikelen zonder Tags',
    'LBL_TOP_TEN_LIST_TITLE' => 'Top Tien Meest Bekeken Artikelen',
    'LBL_SHOW_SYNTAX_HELP' => 'Syntax Help',
    'LBL_MISMATCH_QUOTES_ERR' => 'Uw ingevoerde query zal niet werken. Er moet een afsluitende dubbele quote voor elke beginnende dubbele quote zijn (een paar dus). Als u wilt zoeken naar een string met een dubbele quote, dan moet u dit doen door te starten met een backslash (\\ ")', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B> query syntax Help: </ b> <P><br />         <ol><br /><li> Het plus (+) teken is voor woorden die het wel "moet bevatten" </ li><br /><li> het minteken (-) teken is voor alles wat het "niet moet bevatten". Het minteken (-) teken is niet nodig als u het tekstveld met uit te sluiten woorden vult </ li>.<br /><li> Meerdere woorden met dubbele quotes  ("voorbeeld1 voorbeeld2") worden behandeld als één zoekterm. Er moet een open- en sluitset van aanhalingstekens worden gebruikt anders kan de zoekopdracht niet worden uitgevoerd. <br> Om te zoeken op de aanhalingstekens zelf, gebruik dan een backslash-aanhalingsteken (\\ ") in de plaats. </ li><br /><li> Één enkel aanhalingsteken (&#39;) zal op als zichzelf worden gezocht, en niet als groepering. </ li> </ ol><br /><br />         </ p><br /><br />         <p> <b> Voorbeeld: </ b> <br><br />        Een zoekopdracht voor artikelen met de woorden "Sugar" of "CRM" die de woorden bevatten "Knowledge Base" en "cool", maar zonder de woorden "demo" of "past tense" krijg je de volgende string: <br > Sugar CRM + "Knowledge Base" + cool -demo - "Past Tense" </ p> <br><br /><br />         <p> <b> Opmerkingen: </ b> <br><br /><ol> <li> Hoofdletters / kleinletters doen er niet toe. </ li><br /><li> Spaties en komma&#39;s zijn beide aanvaardbare scheidingstekens. </ li><br /><li> Plaats geen spatie tussen de plus (+) of min (-) tekens en de woorden die zij detailleren </ li> </ ol>.<br /></ p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Onderliggende Tag',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Onderliggende Tag',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artikel',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artikelen',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Deze Tag bevat',
    
	//error messages
	'ERR_DOC_NAME'=>'Document Naam',
	'ERR_DOC_ACTIVE_DATE'=>'Publiceerdatum',
	'ERR_DOC_EXP_DATE'=> 'Vervaldatum',
	'ERR_FILENAME'=> 'Bestandsnaam',
	'ERR_DOC_VERSION'=> 'Document Versie',
	'ERR_DELETE_CONFIRM'=> 'Wilt u deze documentrevisie verwijderen?',
	'ERR_DELETE_LATEST_VERSION'=> 'Het is niet toegestaan de laatste revisie van een document te verwijderen.',
	'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Mail Merge Sjabloon:',
	'ERR_FILESIZE' => 'Bestand is te groot. Maximum bestandsgrootte:',

	'LBL_TREE_TITLE' => 'Documenten',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Document Naam',
	'LBL_CONTRACT_NAME'=>'Contractnaam:',
	'LBL_LIST_IS_TEMPLATE'=>'Sjabloon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Document Type',
	'LBL_LIST_SELECTED_REVISION'=>'Geselecteerde Revisie',
	'LBL_LIST_LATEST_REVISION'=>'Laatste Revisie',
	'LBL_CASES_SUBPANEL_TITLE'=>'Verwante Cases',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Verwante E-mails',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Verwante Contracten',
	'LBL_LAST_REV_CREATE_DATE'=>'Laatste Revisie Datum ingevoerd',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Sleutelwoorden:',
    'LBL_CASES' =>'Cases',
    'LBL_CASE_ID' => 'Case ID',
    'LBL_CASE'    => 'Casus:',
    'LBL_EMAILS' =>'E-mail',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Kies een actie uit de dropdownlijst.',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Selecteer de bovenliggende tag in de boom',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Selecteer tag (s) die moeten worden verwijderd uit de boom',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Selecteer de tag die moet worden hernoemd van de boom',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Tag bestaat reeds',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Typ de nieuwe tag naam',
    'LBL_SAVING_THE_TAG' => 'Opslaan Tag...',
    'LBL_CREATING_NEW_TAG' => 'Nieuwe Tag wordt aangemaakt...',
    'LBL_TAGS_ROOT_LABEL' => 'Tags',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQs Tag kan niet gewijzigd worden',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Selecteer Artikelen Eerst',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Selecteer de Artikelen om Tags op toe te passen',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Selecteer Artikelen Eerst',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Selecteer een Tag uit de boom',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Selecteer Tags uit de boom',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Verplaats artikelen naar tag ....',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Toepassen tags op artikelen ...',
    'LBL_ROOT_TAG_MESSAGE' => 'Root tag kan niet worden geselecteerd/gelinkt aan het artikel',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Root tag kan niet worden hernoemd',
    'LBL_TYPE_NEW_NODE_NAME'=>'Geef a.u.b. een tag naam op',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Bron en doel tag zijn gelijk',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Verwijder Tag',
    'LBL_SELECT_TAG'  => 'Selecteer Tag',
    'LBL_APPLY_TAG'  =>  'Toepassen Tag',
    'LBL_MOVE'  =>   'Verplaats',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Opstarten Tag Bladeren ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Er is een fout opgetreden met dit verzoek om tags.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Fout: Geen bestandsinput element',
    'LBL_CREATE_NEW_TAG'  => 'Nieuwe Tag aanmaken',
    'LBL_SEARCH_TAG'  => 'Search',
    'LBL_TAG_NAME'  =>'Tag Naam:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Selecteer de te verwijderen tags,',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Voer de te zoeken tagnaam in',
    'LBL_KB_NOTIFICATION' => 'Document is gepubliceerd',
    'LBL_KB_PUBLISHED_REQUEST' => 'heeft een document aan u toegewezen voor goedkeuring en publicatie.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Document status is terug gewijzigd naar ontwerp.',  
    'LBL_CONTRACTS' => 'Contracten',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Selecteer de bovenliggende tag, uit de boom',
	'LBL_CLICK_APPLY_TAG' => 'Klik op Toepassen Tag',	
	'LBL_HEAD_TAGS' => 'Tags',
	'LBL_REMOVE' => 'Verwijder' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Wijzigen' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Standaard link tekst.',
    'LBL_SELECT_NODE' => 'Please select a node',
    'LBL_ARTICLE_EXISTS' => 'Artikel bestaat al',


);
?>
