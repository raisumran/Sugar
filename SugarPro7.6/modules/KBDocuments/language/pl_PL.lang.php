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
	'LBL_MODULE_NAME' => 'Baza wiedzy',
    'LBL_MODULE_NAME_SINGULAR' => 'Baza wiedzy',
	'LBL_MODULE_TITLE' => 'Artykuły bazy wiedzy',
	'LNK_NEW_ARTICLE' => 'Utwórz artykuł',
	'LNK_KBDOCUMENT_LIST'=> 'Lista dokumentów',
	'LBL_DOC_REV_HEADER' => 'Wersje dokumentu',
	'LBL_SEARCH_FORM_TITLE'=> 'Wyszukiwanie dokumentów',
	'LBL_SEND_EMAIL'  => 'Wyślij wiadomość',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Wybierz',
	'LBL_EMBEDED_IMAGES' => 'Użyte obrazy:',
	'LBL_SHOW_MORE' => 'Pokaż więcej artykułów',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Pokaż więcej szczegółów',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Ukryj szczegóły',
	'LBL_TAGS' => 'Tagi:',
	'LBL_NOT_AN_ADMIN_USER' => 'Nie jest użytkownikiem z prawami administratora',
	'LBL_NOT_A_VALID_FILE' => 'Nieprawidłowy plik',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Utwórz nowy tag',
    'LBL_NEW_TAG_NAME' => 'Nazwa nowego tagu:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'ID dokumentu',
	'LBL_ARTICLE_TITLE' => 'Stanowisko:',
	'LBL_ARTICLE_AUTHOR' => 'Autor:',
	'LBL_ARTICLE_APPROVED_BY' =>'Zatwierdzający:',
	'LBL_ARTICLE_BODY' => 'Treść artykułu:',
	'LBL_NAME' => 'Nazwa dokumentu:',
	'LBL_DESCRIPTION' => 'Opis',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Podkategoria',
	'LBL_STATUS' => 'Status',
	'LBL_CREATED_BY'=> 'Utworzono przez',
	'LBL_DATE_ENTERED'=> 'Data utworzenia',
	'LBL_DATE_MODIFIED'=> 'Data modyfikacji',
	'LBL_DELETED' => 'Usunięto',
	'LBL_MODIFIED'=> 'Zmodyfikowany przez (id)',
	'LBL_MODIFIED_USER' => 'Zmodyfikowano przez',
	'LBL_CREATED'=> 'Utworzono przez',
	'LBL_RELATED_DOCUMENT_ID'=>'ID powiązanego dokumentu',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Id wersji powiązanego dokumentu',
	'LBL_IS_TEMPLATE'=>'Jest szablonem',
	'LBL_TEMPLATE_TYPE'=>'Typ dokumentu',
    'LBL_PARENT_TYPE'=>'Typ nadrzędny',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Status umowy',
    'LBL_LINKED_ID'=>'Powiązane ID',
    'LBL_VIEWS_NUMBER'=>'Liczba wyświetleń',

	'LBL_REVISION_NAME' => 'Numer wersji',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Numer wersji dokumentu bazy wiedzy',
	'LBL_MIME' => 'Type mime',
	'LBL_REVISION' => 'Wersja',
	'LBL_DOCUMENT' => 'Powiązane dokumenty',
	'LBL_LATEST_REVISION' => 'ID ostatniej wersji',
    'LBL_LATEST_REVISION_NAME' => 'Nazwa ostatniej wersji',
    'LBL_SELECTED_REVISION_NAME' => 'Nazwa wybranej wersji',
    'LBL_SELECTED_REVISION_ID' => 'ID zaznaczonej wersji',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nazwa pliku zaznaczonej wersji',
	'LBL_CHANGE_LOG'=> 'Historia zmian',
	'LBL_ACTIVE_DATE'=> 'Data publikacji',
	'LBL_EXPIRATION_DATE' => 'Data wygaśnięcia',
	'LBL_FILE_EXTENSION'  => 'Rozszerzenie pliku',
    'LBL_KBDOC_APPROVER_NAME' => 'Zatwierdzający',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Baza wiedzy',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Administracja bazy wiedzy',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Administruj bazą wiedzy',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nieokreślone',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Tagi:',
	'LBL_KBDOC_BODY' => 'Treść:',
	'LBL_KBDOC_APPROVED_BY' =>'Zatwierdzone przez:',
	'LBL_KBDOC_ATTACHMENT' =>'Załącznik dokumentu bazy wiedzy',
	'LBL_KBDOC_ATTS_TITLE' =>'Pobierz załącznik:',
	'LBL_DOC_NAME' => 'Nazwa dokumentu:',
	'LBL_FILENAME' => 'Nazwa pliku:',
	'LBL_DOC_VERSION' => 'Wydanie:',
	'LBL_CATEGORY_VALUE' => 'Kategoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Podkategoria:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Wersja utworzona przez:',
	'LBL_LAST_REV_DATE' => 'data wersji:',
	'LBL_DOWNNLOAD_FILE'=> 'Załączniki:',
	'LBL_DET_RELATED_DOCUMENT'=>'Powiązane dokumenty:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Wersje powiązanych dokumentów:",
	'LBL_DET_IS_TEMPLATE'=>'Szablon:',
	'LBL_DET_TEMPLATE_TYPE'=>'Typ dokumentu:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Zewnętrzny artykuł:',
	'LBL_SHOW_TAGS' => 'Pokaż więcej tagów',
    'LBL_HIDE_TAGS' => 'Ukryj tagi',
	'LBL_TEAM'=> 'Zespół:',
	'LBL_DOC_DESCRIPTION'=>'Opis',
	'LBL_KBDOC_SUBJECT' =>'Temat:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data publikacji:',
	'LBL_DOC_EXP_DATE'=> 'Data wygaśnięcia:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artykuły',
	'LBL_LIST_FORM_TITLE' => 'Lista dokumentów',
	'LBL_LIST_DOCUMENT' => 'Dokument',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Podkategoria',
	'LBL_LIST_REVISION' => 'Wersja',
	'LBL_LIST_LAST_REV_CREATOR' => 'Opublikowane przez',
	'LBL_LIST_LAST_REV_DATE' => 'Data wersji',
	'LBL_LIST_VIEW_DOCUMENT'=>'Widok',
    'LBL_LIST_DOWNLOAD'=> 'Pobierz',
	'LBL_LIST_ACTIVE_DATE' => 'Data publikacji',
	'LBL_LIST_EXP_DATE' => 'Data wygaśnięcia',
	'LBL_LIST_STATUS'=>'Status',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Najczęściej oglądane artykuły',
	'LBL_LIST_MOST_RECENT' => 'Ostatnio oglądane artykuły',
    'LBL_LIST_APPROVED_BY' => 'Zatwierdzone przez',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Nazwa dokumentu:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Podkategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data publikacji:',
	'LBL_SF_EXP_DATE'=> 'Data wygaśnięcia:',

	'DEF_CREATE_LOG' => 'Dokument utworzony',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Wyszukiwanie',
    'LBL_TAB_BROWSE' => 'Przeglądaj',
    'LBL_TAB_ADVANCED' => 'Wyszukiwanie zaawansowane',
    'LBL_MENU_FTS' => 'Wyszukiwanie pełnotekstowe',
    'LBL_FTS_EMPTY_STRING' =>  'Nie można przeprowadzić wyszukiwania w tekście pustego wyrażenia',
    'LBL_SEARCH_WITHIN' => 'Wyszukaj wewnątrz:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Zawierający następujące słowa:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Za wyjątkiem następujących słów:',  
    'LBL_UNDER_THIS_TAG' => 'Z użyciem tych tagów:',
    'LBL_PUBLISHED' => 'Opublikowany:',
    'LBL_EXPIRES' => 'Wygasa:',
    'LBL_TIMES_VIEWED' => 'Liczba wyświetleń:',    
    'LBL_ATTACHMENTS' => 'Załączniki:',
    'LBL_SAVE_SEARCH_AS' => 'Zapisz wynik wyszukiwania jako',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Zapisze określone warunki jako filtr wyszukiwania w bazie wiedzy.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Poprzednie zapisane wyniki wyszukiwania:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Edytuj lub usuń istniejący zapisany wynik wyszukiwania.',
    'LBL_UPDATE' => 'Aktualizuj',
    'LBL_DELETE' => 'Usuń',
    'LBL_SHOW_OPTIONS' => 'Pokaż więcej opcji',
    'LBL_AND' => 'i',
    'LBL_SEARCH' => 'Wyszukiwanie',
    'LBL_CLEAR' => 'Wyczyść',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Zatwierdzający',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Liczba wyświetleń',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Podgląd nie jest dostępny. Dokument nie został odnaleziony.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Podgląd nie jest dostępny. Dokument istnieje, ale nie wprowadzono jeszcze żadnej treści.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Artykuły nie zawierające tagów',
    'LBL_TOP_TEN_LIST_TITLE' => '10 najczęściej wyświetlanych artykułów',
    'LBL_SHOW_SYNTAX_HELP' => 'Pomoc składniowa',
    'LBL_MISMATCH_QUOTES_ERR' => 'Twoje zapytanie nie da rezultatów we wprowadzonej formie.  Wyrażenie musi zawierać otwierający i zamykający znak cudzysłowiu. Jeśli chcesz wyszukać wyrażenia zawierające znak cudzysłowu, musisz go poprzedzić znakiem \\".', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B>Pomoc Składniowa Zapytania:</b><P><br />        <ol><br /><li>Znak (+) wskazuje, że rezultat wyszukiwania "musi spełniać" ten warunek.</li><br /><li>Znak (-) wskazuje, że rezultat wyszukiwania "nie może spełnić" tego warunku.  Znak (-) nie jest niezbędny, jeśli wypełniasz pola słowami, które mają zostać wykluczone.</li><br /><li>Kilka słów w cudzysłowiu ("przykład1 przykład2") są traktowane jako jeden warunek wyszukiwania. Musi być znak otwierający i zamykający, gdyż inaczej zapytanie nie zOstatnie wykonane.<br>Aby wyszukać znaki cudzysłowu, muszą one zostać poprzedzone znakiem \\".</li><br /><li>Pojedynczy znak (&#39;) - apostrof bedzie szukany tak jak jest i nie musi występowac parami.</li></ol><br /><br />        </p><br /><br />        <p><b>Przykład: </b><br><br><br />        Aby wyszukać wszystkie artykuły ze słowem "Sugar" lub "CRM", które muszą zawierać wyrażenie "Baza Wiedzy" i "cool", ale nie powinny zawierać słowa "demo" lub "czas przeszły," wprowadź następujące zapytanie:<br>&nbsp;&nbsp;&nbsp;&nbsp;Sugar CRM +"Baza Wiedzy" +cool -demo -"Czas Przeszły"</p><br><br /><br />        <p><b>Notatka: </b><br><br /><ol><li>Wielkość liter nie ma znaczenia.</li><br /><li>Zarówno Spacje, jak i przecinki mogą służyć jako znaki przedziału.</li><br /><li>Nie oddzielaj spacją znaków (+) i (-) od słów, których dotyczą.</li></ol><br /></p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Tag pochodny',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Tag pochodny',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artykuł',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artykuły',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Ten tag zawiera',
    
	//error messages
	'ERR_DOC_NAME'=>'Nazwa dokumentu',
	'ERR_DOC_ACTIVE_DATE'=>'Data publikacji',
	'ERR_DOC_EXP_DATE'=> 'Data wygaśnięcia',
	'ERR_FILENAME'=> 'Nazwa pliku',
	'ERR_DOC_VERSION'=> 'Wersja dokumentu',
	'ERR_DELETE_CONFIRM'=> 'Czy chcesz usunąć tę wersję dokumentu?',
	'ERR_DELETE_LATEST_VERSION'=> 'Nie jesteś upoważniony do usunięcia ostatniej wersji tego dokumentu.',
	'LNK_NEW_MAIL_MERGE' => 'Scalanie poczty',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Wzór scalania wiadomości:',
	'ERR_FILESIZE' => 'Plik jest za duży. Maksymalny rozmiar pliku:',

	'LBL_TREE_TITLE' => 'Dokumenty',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nazwa dokumentu',
	'LBL_CONTRACT_NAME'=>'Nazwa umowy:',
	'LBL_LIST_IS_TEMPLATE'=>'Szablon',
	'LBL_LIST_TEMPLATE_TYPE'=>'Typ dokumentu',
	'LBL_LIST_SELECTED_REVISION'=>'Wybrana wersja',
	'LBL_LIST_LATEST_REVISION'=>'Ostatnia wersja',
	'LBL_CASES_SUBPANEL_TITLE'=>'Powiązane zgłoszenia',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Powiązane wiadomości',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Powiązane umowy',
	'LBL_LAST_REV_CREATE_DATE'=>'Data utworzenia ostatniej wersji',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Słowa kluczowe:',
    'LBL_CASES' =>'Zgłoszenia',
    'LBL_CASE_ID' => 'ID zgłoszenia',
    'LBL_CASE'    => 'Zgłoszenie',
    'LBL_EMAILS' =>'Wiadomości e-mail',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Wybierz akcję z listy rozwijalnej',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Wybierz tag nadrzędny z drzewa',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Wybierz tag(i) do usunięcia z drzewa',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Wybierz tag z drzewa, aby zmienić jego nazwę',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Tag już istnieje',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Wpisz nową nazwę tagu',
    'LBL_SAVING_THE_TAG' => 'Zapisywanie tagu...',
    'LBL_CREATING_NEW_TAG' => 'Tworzenie tagu...',
    'LBL_TAGS_ROOT_LABEL' => 'Tagi',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Tagowi FAQ nie można zmienić nazwy',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Najpierw wybierz artykuły',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Wybierz artykuł, aby wprowadzić tagi',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Najpierw wybierz artykuły',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Wybierz tag z drzewa',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Wybierz tagi z drzewa',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Przenoszenie artykułów do tagu...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Wprowadzanie tagów do artykułów...',
    'LBL_ROOT_TAG_MESSAGE' => 'Główne tagi nie mogą być wybrane/zlinkowane z artykułem',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Głównym tagom nie można zmienić nazwy',
    'LBL_TYPE_NEW_NODE_NAME'=>'Wpisz nazwę tagu',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Źródłowe i wynikowe tagi są takie same',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Usuń tag',
    'LBL_SELECT_TAG'  => 'Wybierz tag',
    'LBL_APPLY_TAG'  =>  'Dołącz tag',
    'LBL_MOVE'  =>   'Przenieś',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Wczytywanie przeglądarki tagów...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'To zapytanie o tag zawierało błąd',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Błąd: Brak pliku wejściowego',
    'LBL_CREATE_NEW_TAG'  => 'Utwórz nowy tag',
    'LBL_SEARCH_TAG'  => 'Wyszukiwanie',
    'LBL_TAG_NAME'  =>'Nazwa tagu:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Wybierz tag do usunięcia',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Wpisz nazwę tagu do wyszukania',
    'LBL_KB_NOTIFICATION' => 'Dokument został opublikowany',
    'LBL_KB_PUBLISHED_REQUEST' => 'przydzielił(a) Ci dokument w celu zatwierdzenia i publikacji.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Status dokumentu został zmieniony na wersję roboczą',  
    'LBL_CONTRACTS' => 'Umowy',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Wybierz z drzewa nadrzędny tag',
	'LBL_CLICK_APPLY_TAG' => 'Kliknij Zastosuj tag',	
	'LBL_HEAD_TAGS' => 'Tagi',
	'LBL_REMOVE' => 'Usuń' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edytuj' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Domyślny tekst linku.',
    'LBL_SELECT_NODE' => 'Wybierz wierzchołek',
    'LBL_ARTICLE_EXISTS' => 'Artykuł już istnieje',


);
?>
