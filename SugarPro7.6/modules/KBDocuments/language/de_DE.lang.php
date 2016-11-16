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
	'LBL_MODULE_NAME' => 'Wissensdatenbank',
    'LBL_MODULE_NAME_SINGULAR' => 'Wissensdatenbank Dokument',
	'LBL_MODULE_TITLE' => 'Wissensdatenbank Artikel',
	'LNK_NEW_ARTICLE' => 'Artikel erstellen',
	'LNK_KBDOCUMENT_LIST'=> 'Dokumente Liste',
	'LBL_DOC_REV_HEADER' => 'Dokument Versionen',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumente Suche',
	'LBL_SEND_EMAIL'  => 'E-Mail senden',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Auswählen',
	'LBL_EMBEDED_IMAGES' => 'Eingebettete Bilder:',
	'LBL_SHOW_MORE' => 'Mehrere Artikel anzeigen',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Weitere Details zeigen',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Details verstecken',
	'LBL_TAGS' => 'Tags:',
	'LBL_NOT_AN_ADMIN_USER' => 'Kein Admin Benutzer',
	'LBL_NOT_A_VALID_FILE' => 'Keine gültige Datei',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Einen neuen Tag erstellen',
    'LBL_NEW_TAG_NAME' => 'Neuer Tag Name:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Dokument ID',
	'LBL_ARTICLE_TITLE' => 'Funktion:',
	'LBL_ARTICLE_AUTHOR' => 'Autor:',
	'LBL_ARTICLE_APPROVED_BY' =>'Genehmigt von:',
	'LBL_ARTICLE_BODY' => 'Artikel Inhalt:',
	'LBL_NAME' => 'Dokument Name:',
	'LBL_DESCRIPTION' => 'Beschriftung',
	'LBL_CATEGORY' => 'Kategorie',
	'LBL_SUBCATEGORY' => 'Unterkategorie',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Erstellt von:',
	'LBL_DATE_ENTERED'=> 'Datum erstellt',
	'LBL_DATE_MODIFIED'=> 'Geändert am:',
	'LBL_DELETED' => 'Gelöscht',
	'LBL_MODIFIED'=> 'Geändert von ID',
	'LBL_MODIFIED_USER' => 'Geändert von',
	'LBL_CREATED'=> 'Erstellt von:',
	'LBL_RELATED_DOCUMENT_ID'=>'Verknüpfte Dokument ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Verknüpfte Dokumentversions ID',
	'LBL_IS_TEMPLATE'=>'Ist ein Template',
	'LBL_TEMPLATE_TYPE'=>'Dokumententyp',
    'LBL_PARENT_TYPE'=>'Parent-Typ:',
	'LBL_NUMBER'    =>  'Nummer',
    'LBL_TEXT_BODY' =>  'Textkörper',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Vertragsstatus:',
    'LBL_LINKED_ID'=>'verknüpfte ID',
    'LBL_VIEWS_NUMBER'=>'Zugriffe Anzahl',

	'LBL_REVISION_NAME' => 'Versionsnummer',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDocument Versions Nummer',
	'LBL_MIME' => 'Mime-Typ',
	'LBL_REVISION' => 'Version',
	'LBL_DOCUMENT' => 'Verknüpftes Dokument',
	'LBL_LATEST_REVISION' => 'Latest Revision Id',
    'LBL_LATEST_REVISION_NAME' => 'Latest Revision Name',
    'LBL_SELECTED_REVISION_NAME' => 'Selected Revision Name',
    'LBL_SELECTED_REVISION_ID' => 'ausgewählte RevisionsID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Ausgewählter Revision Dateiname',
	'LBL_CHANGE_LOG'=> 'Änderungs-Log:',
	'LBL_ACTIVE_DATE'=> 'Veröffentlichungsdatum',
	'LBL_EXPIRATION_DATE' => 'Ablaufdatum',
	'LBL_FILE_EXTENSION'  => 'Dateiendung',
    'LBL_KBDOC_APPROVER_NAME' => 'Authorisiert von',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Wissensdatenbank',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Wissensdatenbank ADMIN',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Wissensdatenbank Admin',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Unspezifisch',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Tags:',
	'LBL_KBDOC_BODY' => 'Text:',
	'LBL_KBDOC_APPROVED_BY' =>'Bestätigt vom:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attahment',
	'LBL_KBDOC_ATTS_TITLE' =>'Anhänge downloaden:',
	'LBL_DOC_NAME' => 'Dokument Name:',
	'LBL_FILENAME' => 'Dateiname:',
	'LBL_DOC_VERSION' => 'Version:',
	'LBL_CATEGORY_VALUE' => 'Kategorie',
	'LBL_SUBCATEGORY_VALUE'=> 'Unterkategorie:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Version erstellt von:',
	'LBL_LAST_REV_DATE' => 'Versionsdatum:',
	'LBL_DOWNNLOAD_FILE'=> 'Anhänge:',
	'LBL_DET_RELATED_DOCUMENT'=>'Verknüpftes Dokument:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Verknüpfte Dokumentversion:",
	'LBL_DET_IS_TEMPLATE'=>'Vorlage?:',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumententyp:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Externer Artikel? :',
	'LBL_SHOW_TAGS' => 'Zeige mehr Tags',
    'LBL_HIDE_TAGS' => 'Tags verbergen',
	'LBL_TEAM'=> 'Team:',
	'LBL_DOC_DESCRIPTION'=>'Beschreibung:',
	'LBL_KBDOC_SUBJECT' =>'Betreff:',
	'LBL_DOC_ACTIVE_DATE'=> 'Veröffentlichungsdatum:',
	'LBL_DOC_EXP_DATE'=> 'Ablaufdatum:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artikel',
	'LBL_LIST_FORM_TITLE' => 'Dokumente Liste',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_CATEGORY' => 'Kategorie',
	'LBL_LIST_SUBCATEGORY' => 'Unterkategorie',
	'LBL_LIST_REVISION' => 'Version',
	'LBL_LIST_LAST_REV_CREATOR' => 'Veröffentlicht von',
	'LBL_LIST_LAST_REV_DATE' => 'Versionsdatum',
	'LBL_LIST_VIEW_DOCUMENT'=>'Ansicht',
    'LBL_LIST_DOWNLOAD'=> 'Herunterladen',
	'LBL_LIST_ACTIVE_DATE' => 'Veröffentlichungsdatum',
	'LBL_LIST_EXP_DATE' => 'Ablaufdatum',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Most Viewed Articles',
	'LBL_LIST_MOST_RECENT' => 'Most Recent Articles',
    'LBL_LIST_APPROVED_BY' => 'Freigegeben von:',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokument Name:',
	'LBL_SF_CATEGORY' => 'Kategorie',
	'LBL_SF_SUBCATEGORY'=> 'Unterkategorie:',
	'LBL_SF_ACTIVE_DATE' => 'Veröffentlichungsdatum:',
	'LBL_SF_EXP_DATE'=> 'Ablaufdatum:',

	'DEF_CREATE_LOG' => 'Dokument erstellt:',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Suchen',
    'LBL_TAB_BROWSE' => 'Durchsuchen',
    'LBL_TAB_ADVANCED' => 'Erweiterte Suche',
    'LBL_MENU_FTS' => 'Volltextsuche',
    'LBL_FTS_EMPTY_STRING' =>  'Volltextsuche mit einem leeren Begriff ist nicht möglich',
    'LBL_SEARCH_WITHIN' => 'Suche in:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Enthält diese Worte:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Außer diese Worte:',  
    'LBL_UNDER_THIS_TAG' => 'Mit diesem Tag:',
    'LBL_PUBLISHED' => 'Veröffentlicht:',
    'LBL_EXPIRES' => 'Endet:',
    'LBL_TIMES_VIEWED' => 'Betrachtungshäufigkeit:',    
    'LBL_ATTACHMENTS' => 'Anhänge:',
    'LBL_SAVE_SEARCH_AS' => 'Diese Suche speichern als:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Speichern der Einträge als Gespeicherte Suche in der Wissensdatenbank.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Früher gespeicherte Suchen:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Eine bestehende gespeicherte Suche bearbeiten oder löschen',
    'LBL_UPDATE' => 'Aktualisieren',
    'LBL_DELETE' => 'Löschen',
    'LBL_SHOW_OPTIONS' => 'Weitere Optionen',
    'LBL_AND' => 'und',
    'LBL_SEARCH' => 'Suchen',
    'LBL_CLEAR' => 'Leeren',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Authorisiert von',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Häufigkeit',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Vorschau nicht verfügbar, Dokument Datensatz nicht gefunden.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Vorschau nicht verfügbar, Dokument existiert aber es wurde noch kein Inhalt generiert.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Tag für Artikel entfernen',
    'LBL_TOP_TEN_LIST_TITLE' => 'Die 10 am meisten betrachteten Artikel',
    'LBL_SHOW_SYNTAX_HELP' => 'Syntax Hilfe',
    'LBL_MISMATCH_QUOTES_ERR' => 'Ihre Abfrage wird so nicht funktionieren. Für jedes öffnende doppelte Hochkomma muss auch ein schließendes existieren. Wenn Sie nach einer Zeichenkette suchen wollen die ein Hochkomma enthält, dann stellen Sie einen Backslash voran (\\&quot;)', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '&lt;B&gt;Abfrage Syntax Hilfe:&lt;/b&gt;&lt;P&gt; &lt;ol&gt; &lt;li&gt;Das Plus (+) Zeichen bedeutet, dass die Resultate diesen Begriff beinhalten müssen.&lt;/li&gt; &lt;li&gt;Das Minus (-) Zeichen bedeutet, dass die Resultate diesen Begriff nicht beinhalten sollen. Das Minus (-) Zeichen ist nicht notwendig, wenn Sie das Textfeld für &lt;br&gt;auszuschließende Worte verwenden.&lt;/li&gt; &lt;li&gt;Mehrere Wörter in doppelten Hochkommas  (&quot;Beispiel1 Beispiel2&quot;) werden als ein Suchbegriff betrachtet. Allerdings muss es ein öffnendes und ein schließendes Hochkomma geben, &lt;br&gt;ansonsten wird die Suche nicht durchgeführt. Wenn Sie nach einem Hochkomma als Text suchen wollen, stellen Sie einen Backslash voran (&quot;)&lt;/li&gt; &lt;li&gt;Ein einfaches Hochkomma (&#039;) wird nicht als Gruppierungszeichen verwendet sondern als ganz normales Zeichen.&lt;/li&gt;&lt;/ol&gt; &lt;/p&gt; &lt;p&gt;&lt;b&gt;Beispiel: &lt;/b&gt;&lt;br&gt;&lt;br&gt; Um nach allen Artikeln zu suchen die &quot;Sugar&quot; oder &quot;CRM&quot; enthalten, und die die Wörter &quot;Wissensdatenbank&quot; und &quot;cool&quot; enthalten sollen, allerdings nicht &quot;Demo&quot; oder &quot;Vergangenheit&quot; geben &lt;br&gt;Sie folgendes ein: Sugar CRM +&quot;Wissensdatenbank&quot; +cool -Demo -&quot;Vergangenheit&quot;&lt;br&gt;&lt;br&gt;&lt;B&gt;Bemerkung:&lt;/b&gt;&lt;P&gt; &lt;ol&gt; &lt;li&gt;Groß- und Kleinschreibung macht keinen Unterschied.&lt;/li&gt; &lt;li&gt;Sowohl Kommas als auch Leerzeichen trennen Begriffe&lt;/li&gt; &lt;li&gt;Bitte kein Leerzeichen zwischen (+) bzw (-) und dem Suchwort.&lt;/li&gt;',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Untergeordneter Tag',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Untergeordnete Tags',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artikel',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artikel',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Dieser Tag beinhaltet',
    
	//error messages
	'ERR_DOC_NAME'=>'Dokument Name',
	'ERR_DOC_ACTIVE_DATE'=>'Veröffentlichungsdatum',
	'ERR_DOC_EXP_DATE'=> 'Ablaufdatum',
	'ERR_FILENAME'=> 'Dateiname',
	'ERR_DOC_VERSION'=> 'Dokument-Version',
	'ERR_DELETE_CONFIRM'=> 'Möchten Sie diese Dokumentversion löschen?',
	'ERR_DELETE_LATEST_VERSION'=> 'Die letzte Version eines Dokuments kann nicht gelöscht werden.',
	'LNK_NEW_MAIL_MERGE' => 'Serienbrief',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Serienbrief-Vorlage:',
	'ERR_FILESIZE' => 'Datei ist zu groß. Max. Dateigröße:',

	'LBL_TREE_TITLE' => 'Dokumente',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokument Name',
	'LBL_CONTRACT_NAME'=>'Vertragsname:',
	'LBL_LIST_IS_TEMPLATE'=>'Vorlage?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Dokumententyp',
	'LBL_LIST_SELECTED_REVISION'=>'Gewählte Version',
	'LBL_LIST_LATEST_REVISION'=>'Letzte Version',
	'LBL_CASES_SUBPANEL_TITLE'=>'Verknüpfte Tickets',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Verknüpfte E-Mails',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Verknüpfte Kontakte',
	'LBL_LAST_REV_CREATE_DATE'=>'Erstellungsdatum Letzte Version',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Schlüsselwörter:',
    'LBL_CASES' =>'Tickets',
    'LBL_CASE_ID' => 'Ticket ID:',
    'LBL_CASE'    => 'Ticket:',
    'LBL_EMAILS' =>'E-Mails',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Wählen Sie eine Aktion aus der Auswahlliste',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Wählen Sie den übergeordneten Tag aus dem Baum',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Wählen Sie Tag(s) die aus dem Baum gelöscht werden sollen',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Wählen Sie die Tag(s) im Baum, die umbenannt werden sollen',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Tag existiert bereits',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Tippen Sie den neuen Tag Namen',
    'LBL_SAVING_THE_TAG' => 'Speichere den Tag...',
    'LBL_CREATING_NEW_TAG' => 'Erstelle neuen Tag...',
    'LBL_TAGS_ROOT_LABEL' => 'Tags',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQs Tag kann nicht umbenannt werden',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Zuerst Artikel auswählen',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Wählen Sie Artikel für Tags',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Zuerst Artikel auswählen',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Wählen Sie einen Tag aus der Baumstruktur',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Wählen Sie Tags aus der Baumstruktur',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Artikel zu Tag verschieben...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Tags auf Artikel anwenden...',
    'LBL_ROOT_TAG_MESSAGE' => 'Root Tag kann nicht gewählt / mit einem Artikel verbunden werden',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Root Tag kann nicht umbenannt werden',
    'LBL_TYPE_NEW_NODE_NAME'=>'Bitte einen neuen Tagname eingeben',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Quell- und Zieltags sind ident',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Tag löschen',
    'LBL_SELECT_TAG'  => 'Tag auswählen',
    'LBL_APPLY_TAG'  =>  'Tag anwenden',
    'LBL_MOVE'  =>   'Verschieben',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Tag Browsing starten ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Fehler bei der Anfrage nach Tags.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Fehler: Kein Datei Eingabeelement',
    'LBL_CREATE_NEW_TAG'  => 'Einen neuen Tag erstellen',
    'LBL_SEARCH_TAG'  => 'Suchen',
    'LBL_TAG_NAME'  =>'Tag Name:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Wählen Sie die Tags, die gelöscht werden sollen',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Type tag name to be searched',
    'LBL_KB_NOTIFICATION' => 'Dokument wurde veröffentlicht',
    'LBL_KB_PUBLISHED_REQUEST' => 'hat Ihnen ein Dokument zwecks Genehmigung und Veröffentlichung zugewiesen.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Dokumentstatus wurde auf &#039;Entwurf&#039; zurückgeändert',  
    'LBL_CONTRACTS' => 'Verträge',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Eltern Tag vom Baum auswählen',
	'LBL_CLICK_APPLY_TAG' => 'Click Apply Tag',	
	'LBL_HEAD_TAGS' => 'Tags',
	'LBL_REMOVE' => 'Entfernen' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Bearbeiten' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Standard Link Text',
    'LBL_SELECT_NODE' => 'Bitte wählen Sie einen Knoten',
    'LBL_ARTICLE_EXISTS' => 'Beitrag existiert bereits',


);
?>
