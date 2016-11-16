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
	'LBL_MODULE_NAME' => 'KB-dokumenter',
    'LBL_MODULE_NAME_SINGULAR' => 'Knowledge Base',
	'LBL_MODULE_TITLE' => 'Knowledge Base-artikel',
	'LNK_NEW_ARTICLE' => 'Opret artikel',
	'LNK_KBDOCUMENT_LIST'=> 'Dokumentliste',
	'LBL_DOC_REV_HEADER' => 'Dokumentrevisioner',
	'LBL_SEARCH_FORM_TITLE'=> 'Søg efter dokument',
	'LBL_SEND_EMAIL'  => 'Send e-mail',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Vælg',
	'LBL_EMBEDED_IMAGES' => 'Integrerede billeder:',
	'LBL_SHOW_MORE' => 'Vis flere artiker',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Vis flere detaljer',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Skjul detaljer',
	'LBL_TAGS' => 'Mærker:',
	'LBL_NOT_AN_ADMIN_USER' => 'Ikke en admin.bruger',
	'LBL_NOT_A_VALID_FILE' => 'Ikke en gyldig fil',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Opret nyt mærke',
    'LBL_NEW_TAG_NAME' => 'Navn på nyt mærke:',
	
	//vardef labels	
	'LBL_ID' => 'Id',
	'LBL_KBDOCUMENT_ID' => 'Dokument-id',
	'LBL_ARTICLE_TITLE' => 'Titel:',
	'LBL_ARTICLE_AUTHOR' => 'Forfatter:',
	'LBL_ARTICLE_APPROVED_BY' =>'Godkender:',
	'LBL_ARTICLE_BODY' => 'Artiklens brødtekst:',
	'LBL_NAME' => 'Dokumentnavn:',
	'LBL_DESCRIPTION' => 'Beskrivelse',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Underkategori',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Oprettet af',
	'LBL_DATE_ENTERED'=> 'Oprettet den',
	'LBL_DATE_MODIFIED'=> 'Ændret den',
	'LBL_DELETED' => 'Slettet',
	'LBL_MODIFIED'=> 'Ændret af id',
	'LBL_MODIFIED_USER' => 'Ændret af',
	'LBL_CREATED'=> 'Oprettet af',
	'LBL_RELATED_DOCUMENT_ID'=>'Relateret dokument-id',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Relateret dokumentrevisions-id',
	'LBL_IS_TEMPLATE'=>'Er en skabelon',
	'LBL_TEMPLATE_TYPE'=>'Dokumenttype',
    'LBL_PARENT_TYPE'=>'Overordnet type',
	'LBL_NUMBER'    =>  'LBL_NUMMER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Kontrakt status:',
    'LBL_LINKED_ID'=>'Linket id',
    'LBL_VIEWS_NUMBER'=>'Antal visninger',

	'LBL_REVISION_NAME' => 'Revisionsnummer',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KB-dokumentets revisionsnummer',
	'LBL_MIME' => 'Mime-type',
	'LBL_REVISION' => 'Revision',
	'LBL_DOCUMENT' => 'Relateret dokument',
	'LBL_LATEST_REVISION' => 'Seneste Revisions-id',
    'LBL_LATEST_REVISION_NAME' => 'Navn på seneste revision',
    'LBL_SELECTED_REVISION_NAME' => 'Navn på valgt revision',
    'LBL_SELECTED_REVISION_ID' => 'Valgte Revision Id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valgt revision filnavn',
	'LBL_CHANGE_LOG'=> 'Ændringslog',
	'LBL_ACTIVE_DATE'=> 'Udgivelsesdato',
	'LBL_EXPIRATION_DATE' => 'Udløbsdato',
	'LBL_FILE_EXTENSION'  => 'Filtype',
    'LBL_KBDOC_APPROVER_NAME' => 'Godkenders navn',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'KB-dokumenter',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Videnbaseadmin.',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Administration af Knowledge Base',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Uspecificeret',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Mærker:',
	'LBL_KBDOC_BODY' => 'Brødtekst:',
	'LBL_KBDOC_APPROVED_BY' =>'Godkendt af:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_vedhæftet fil',
	'LBL_KBDOC_ATTS_TITLE' =>'Download vedhæftede filer:',
	'LBL_DOC_NAME' => 'Dokumentnavn:',
	'LBL_FILENAME' => 'Filnavn:',
	'LBL_DOC_VERSION' => 'Revision:',
	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_SUBCATEGORY_VALUE'=> 'Underkategori:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Revision oprettet af:',
	'LBL_LAST_REV_DATE' => 'Revisionsdato:',
	'LBL_DOWNNLOAD_FILE'=> 'Vedhæftede filer:',
	'LBL_DET_RELATED_DOCUMENT'=>'Relateret dokument:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Relateret dokuments revision:",
	'LBL_DET_IS_TEMPLATE'=>'Skabelon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumenttype:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Ekstern artikel? :',
	'LBL_SHOW_TAGS' => 'Vis flere mærker',
    'LBL_HIDE_TAGS' => 'Skjul mærker',
	'LBL_TEAM'=> 'Team:',
	'LBL_DOC_DESCRIPTION'=>'Beskrivelse:',
	'LBL_KBDOC_SUBJECT' =>'Emne:',
	'LBL_DOC_ACTIVE_DATE'=> 'Udgivelsesdato:',
	'LBL_DOC_EXP_DATE'=> 'Udløbsdato:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artikler',
	'LBL_LIST_FORM_TITLE' => 'Dokumentliste',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_LIST_SUBCATEGORY' => 'Underkategori',
	'LBL_LIST_REVISION' => 'Revision',
	'LBL_LIST_LAST_REV_CREATOR' => 'Udgivet af',
	'LBL_LIST_LAST_REV_DATE' => 'Revisionsdato',
	'LBL_LIST_VIEW_DOCUMENT'=>'Vis',
    'LBL_LIST_DOWNLOAD'=> 'Download',
	'LBL_LIST_ACTIVE_DATE' => 'Udgivelsesdato',
	'LBL_LIST_EXP_DATE' => 'Udløbsdato',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Forfatter',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Mest læste artikler',
	'LBL_LIST_MOST_RECENT' => 'Seneste artikler',
    'LBL_LIST_APPROVED_BY' => 'Godkendt af:',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokumentnavn:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Underkategori:',
	'LBL_SF_ACTIVE_DATE' => 'Udgivelsesdato:',
	'LBL_SF_EXP_DATE'=> 'Udløbsdato:',

	'DEF_CREATE_LOG' => 'Dokument oprettet',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Søg',
    'LBL_TAB_BROWSE' => 'Gennemse',
    'LBL_TAB_ADVANCED' => 'Avanceret søgning',
    'LBL_MENU_FTS' => 'Fuldtekstsøgning',
    'LBL_FTS_EMPTY_STRING' =>  'Fuldtekstsøgning kan udføres på en tom streng',
    'LBL_SEARCH_WITHIN' => 'Søg i:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Indeholder disse ord:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Indeholder ikke disse ord:',  
    'LBL_UNDER_THIS_TAG' => 'Brug dette mærke:',
    'LBL_PUBLISHED' => 'Udgivet:',
    'LBL_EXPIRES' => 'Udløber:',
    'LBL_TIMES_VIEWED' => 'Visningsfrekvens:',    
    'LBL_ATTACHMENTS' => 'Vedhæftede filer:',
    'LBL_SAVE_SEARCH_AS' => 'Gem denne søgning som:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Derved gemmes dine specificerede poster som et Gemt søgning-filter for Knowledge Base.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Tidligere gemte søgninger:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Rediger eller slet og eksisterende gemt søgning.',
    'LBL_UPDATE' => 'Opdater',
    'LBL_DELETE' => 'Slet',
    'LBL_SHOW_OPTIONS' => 'Flere indstillinger',
    'LBL_AND' => 'og',
    'LBL_SEARCH' => 'Søg',
    'LBL_CLEAR' => 'Ryd',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Godkenders navn',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Frekvens',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Forhåndsvisning er ikke tilgængelig. Dokumentposten blev ikke fundet.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Forhåndsvisning er ikke tilgængelig. Dokumentet findes, men der endnu ikke oprettet noget indhold.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Umarkerede artikler',
    'LBL_TOP_TEN_LIST_TITLE' => 'De ti mest læste artikler',
    'LBL_SHOW_SYNTAX_HELP' => 'Hjælp til syntaks',
    'LBL_MISMATCH_QUOTES_ERR' => '"Den indtastede forespørgsel kan ikke fungere. Der skal være et afsluttende dobbelt anførselstegn for hvert indledende dobbelt anførselstegn i et par. Hvis du vil søge efter en streng med et dobbelt anførselstegn, skal du indsætte en omvendt skråstreg "\\ """"', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '"<B>Hjælp til syntaks:</b><P> <ol> <li>Plustegnet "+" angiver, at resultaterne ""skal indeholde"" dette udtryk.</li> <li>Minustegnet "-" angiver, at resultaterne ""ikke må indeholde"" udtrykket. Minustegnet "-" er ikke nødvendigt, hvis du udfylder tekstfeltet med ord, der ikke skal medtages.</li> <li>Flere ord med dobbelte anførselstegn """eksempel1 eksempel2""" behandles som ét søgeudtryk. Der skal være et indledende og et afsluttende sæt anførselstegn, ellers kan søgningen ikke køres.<br>Hvis du vil søge på selve udtrykket i anførselstegnene, skal du i stedet bruge en omvendt skråstreg og et anførselstegn """".</li> <li>Et enkelt anførselstegn "&#39;" bruges til at søge på udtrykket, som det er, og ikke som en gruppering.</li></ol> </p> <p><b>Eksempel: </b><br><br> Hvis du vil søge efter alle artikler med ordene ""Sugar"" eller ""CRM"", som skal indeholde ordene ""Knowledge Base"" og ""cool,"" men ikke indeholde ordene ""demo"" eller ""datid"", skal du skrive følgende streng:<br>    Sugar CRM +""Knowledge Base"" +cool -demo -""datid""</p><br> <p><b>Bemærk! </b><br> <ol><li>Der skelnes ikke mellem store og små bogstaver.</li> <li>Mellemrum og kommaer kan begge bruges som afgrænsningstegn.</li> <li>Indsæt ikke et mellemrum mellem tegnene plus "+" eller minus "-" og de ord, de refererer til.</li></ol> </p>"',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Underordnet mærke',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Underordnede mærker',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artikel',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artikler',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Dette mærke indeholder',
    
	//error messages
	'ERR_DOC_NAME'=>'Dokumentnavn',
	'ERR_DOC_ACTIVE_DATE'=>'Udgivelsesdato',
	'ERR_DOC_EXP_DATE'=> 'Udløbsdato',
	'ERR_FILENAME'=> 'Filnavn',
	'ERR_DOC_VERSION'=> 'Dokumentversion',
	'ERR_DELETE_CONFIRM'=> 'Vil du slette denne dokumentrevision?',
	'ERR_DELETE_LATEST_VERSION'=> 'Du har ikke tilladelse til at slette den seneste revision af et dokument.',
	'LNK_NEW_MAIL_MERGE' => 'Brevfletning',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Brevfletningsskabelon:',
	'ERR_FILESIZE' => 'Filen er for stor. Maks filstørrelse:',

	'LBL_TREE_TITLE' => 'Dokumenter',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentnavn',
	'LBL_CONTRACT_NAME'=>'Kontraknavn:',
	'LBL_LIST_IS_TEMPLATE'=>'Skabelon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumenttype',
	'LBL_LIST_SELECTED_REVISION'=>'Valgt revision',
	'LBL_LIST_LATEST_REVISION'=>'Seneste revision',
	'LBL_CASES_SUBPANEL_TITLE'=>'Relaterede sager',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Relaterede e-mails',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Relaterede kontrakter',
	'LBL_LAST_REV_CREATE_DATE'=>'Seneste revisions oprettelsesdato',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Nøgleord:',
    'LBL_CASES' =>'Sager',
    'LBL_CASE_ID' => 'Sags-ID',
    'LBL_CASE'    => 'Sag:',
    'LBL_EMAILS' =>'E-mails',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Vælg en handling fra rullelisten',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Vælg det overordnede mærke fra træet',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Vælg mærker, der skal slettes fra træet',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Vælg det mærke, der skal omdøbes fra træet',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Mærket findes allerede',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Skriv det nye mærkes navn',
    'LBL_SAVING_THE_TAG' => 'Gemmer mærket...',
    'LBL_CREATING_NEW_TAG' => 'Opretter nyt mærke...',
    'LBL_TAGS_ROOT_LABEL' => 'Mærker',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQ-mærke ikke kan omdøbes',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Vælg først artikler',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Vælg artikler til mærker',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Vælg først artikler',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Vælg et mærke fra træet',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Vælg mærker fra træet',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Flytter artikler til mærke...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Anvender mærker på artikler ...',
    'LBL_ROOT_TAG_MESSAGE' => 'Rodmærke kan ikke vælges/knyttes til artikel',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Rodmærke kan ikke omdøbes',
    'LBL_TYPE_NEW_NODE_NAME'=>'Angiv et mærkenavn',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Kilde- og målmærkerne er de samme',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Slet mærke',
    'LBL_SELECT_TAG'  => 'Vælg mærke',
    'LBL_APPLY_TAG'  =>  'Anvend mærke',
    'LBL_MOVE'  =>   'Flyt',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Starter søgning efter mærke ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Der opstod en fejl under behandlingen af denne anmodning om mærker.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Fejl: Ikke et filinputelement',
    'LBL_CREATE_NEW_TAG'  => 'Opret nyt mærke',
    'LBL_SEARCH_TAG'  => 'Søg',
    'LBL_TAG_NAME'  =>'Mærkenavn:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Vælg mærker, der skal slettes',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Angiv det mærkenavn, der skal søges efter',
    'LBL_KB_NOTIFICATION' => 'Dokumentet er udgivet',
    'LBL_KB_PUBLISHED_REQUEST' => 'har tildelt dig et dokument til godkendelse og udgivelse.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Dokumentstatus er ændret tilbage til udkastet',  
    'LBL_CONTRACTS' => 'Kontrakter',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Vælg det overordnede mærke fra træet',
	'LBL_CLICK_APPLY_TAG' => 'Klik på Anvend mærke',	
	'LBL_HEAD_TAGS' => 'Mærker',
	'LBL_REMOVE' => 'Fjern' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Rediger' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Standardtekst til link.',
    'LBL_SELECT_NODE' => 'Vælg en node',
    'LBL_ARTICLE_EXISTS' => 'Artikel eksisterer allerede',


);
?>
