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
    'LBL_LOADING' => 'Ładowanie' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ukryj opcje' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Usuń' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Wprowadź <b>Nazwę</b> pakietu.  Nazwa pakietu może zawierać wyłącznie znaki alfanumeryczne i nie może zawierać spacji. (Przykład: HR_Zarządzanie)<br/><br/> Możesz podać <b>Autora</b> i <b>Opis</b>, jako informację o pakiecie. <br/><br/>Kliknij <b>Zapisz</b>, aby utworzyć pakiet.',
            'modify'=>'Właściwości i możliwe działania na <b>pakiecie</b> pojawiają się tutaj.<br><br>Możesz zmodyfikować <b>Nazwę</b>, <b>Autora</b> oraz <b>Opis</b> pakietu, widok  pakietu oraz wszystkie jego moduły.<br><br>Kliknij <b>Nowy moduł</b>, aby utworzyć moduł dla pakietu.<br><br>Jeśli pakiet zawiera przynajmniej jeden moduł, możesz zarówno <b>Opublikować</b> i <b>Zamieścić</b> pakiet, jak również <b>Eksportować</b> modyfikacje dokonane w pakiecie.',
            'name'=>'To jest <b>Nazwa</b> bieżącego pakietu. <br/><br/>Nazwa, którą wprowadzasz musi być złożona ze znaków alfanumerycznych, rozpoczynać się od litery i nie zawierać spacji. (Przykład: HR_Zarządzanie)',
            'author'=>'To jest <b>Autor</b>, który jest wyświetlany podczas instalacji jako twórca pakietu.<br><br>Autor może być zarówno osobą, jak i firmą.',
            'description'=>'To jest <b>Opis</b> pakietu wyświetlany podczas instalacji.',
            'publishbtn'=>'Kliknij <b>Publikuj</b>, aby zapisać wszystkie wprowadzone dane i utworzyć plik .zip, który jest instalacyjną wersją pakietu.<br><br>Użyj <b>Zarządzania modułami</b>, aby załadować plik .zip i zainstalować pakiet.',
            'deploybtn'=>'Kliknij <b>Zamieść</b>, aby zapisać wprowadzone dane i zainstalować pakiet zawierający wszystkie moduły na tej instancji.',
            'duplicatebtn'=>'Kliknij <b>Duplikuj</b>, aby skopiować zawartość pakietu do nowego i aby wyświetlić nowy pakiet. <br/><br/>Nazwa dla nowego pakietu zostanie wygenerowana automatycznie, poprzez dodanie numeru do nazwy pakietu, z którego został utworzony. Możesz zmienić nazwę nowego pakietu przez wprowadzenie nowej <b>Nazwy</b> i kliknięcie <b>Zapisz</b>.',
            'exportbtn'=>'Kliknij <b>Eksport</b> aby utworzyć plik .zip, zawierający modyfikacje utworzone w pakiecie.<br><br> Wygenerowany plik nie jest plikiem instalacyjnym pakietu.<br><br>Poprzez <b>Zarządzanie modułami</b> można zaimportować plik .zip. i kontynuować prace nad pakietem za pomocą <b>Kreatora modułów</b>.',
            'deletebtn'=>'Kliknij <b>Usuń</b>, aby usunąć pakiet i wszystkie powiązane z nim pliki.',
            'savebtn'=>'Kliknij <b>Zapisz</b>, aby zapisać wszystkie wprowadzone dane powiązane z pakietem.',
            'existing_module'=>'Kliknij <b>ikonę modułu</b>, aby edytować właściwości i dostosować pola, relacje i widoki, powiązane z tym modułem.',
            'new_module'=>'Kliknij <b>Utwórz moduł</b>, aby utworzyć nowy moduł dla tego pakietu.',
            'key'=>'Ten 5-cio literowy, alfanumeryczny <b>Klucz</b> będzie używany jako przedrostek w każdym katalogu, nazwach klasy i tabelach baz danych, dla każdego modułu tego pakietu.<br><br>Klucz jest używany w celu osiągnięcia unikalnych nazw dla tabel.',
            'readme'=>'Kliknij, aby dodać tekst do pliku <b>Readme</b> dla tego pakietu.<br><br>Będzie on wyświetlany podczas instalacji.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Podaj <b>Nazwę</b> nowego modułu. <b>Etykieta</b>, którą wprowadzisz pojawi się w zakładce nawigacyjnej. <br/><br/>Aby można było wyświetlać zakładkę nawigacyjną w module, należy zaznaczyć opcję <b>Zakładka nawigacyjna</b>.<br/>/><br/>Zaznacz pole <b>Bezpieczeństwo zespołu</b>, aby pole wyboru zespołu pojawiło się w rekordach modułu. <br/><br/>Następnie wybierz typ modułu, który chcesz utworzyć. <br/><br/>Wybierz typ szablonu. Każdy z szablonów zawiera określony zestaw pól oraz predefiniowane widoki, używane jako baza dla modułu. <br/><br/>Kliknij <b>Zapisz</b>, aby utworzyć moduł.',
        'modify'=>'Możesz zmienić właściwości modułu lub dostosować <b>Pola</b>, <b>Relacje</b> i  <b>Widoki</b> powiązane z modułem.',
        'importable'=>'Zaznaczenie pola <b>Importowalny</b> umożliwi wykonywanie importu dla tego modułu.<br><br>Link do Kreatora importu pojawi się w menu modułu. Kreator importu pozwala importować dane z zewnętrzynch źrodeł do własnego modułu.',
        'team_security'=>'Zaznaczenie pola <b>Bezpieczeństwo zespołu</b> włączy funkcję zabezpieczenia dostępu na poziomie zespołu dla tego modułu.  <br/><br/>Jeśli funkcja jest włączona dla tego modułu, pola wyboru zespołu pojawią się w rekordach tego modułu.',
        'reportable'=>'Zaznaczenie tego pola umożliwi wykonanie raportów z udziałem tego modułu.',
        'assignable'=>'Zaznaczenie tego pola umożliwi przydzielenie rekordów w tym module do wybranego użytkownika.',
        'has_tab'=>'Zaznaczenie pola <b>Zakładka nawigacyjna</b> pozwoli na wyświetlanie tego modułu w Zakładkach.',
        'acl'=>'Zaznaczenie tego pola włączy funkcję Kontroli dostępu w tym module na poziomie pól.',
        'studio'=>'Zaznaczenie tego pola zezwoli administratorom dostosować ten moduł w Studio.',
        'audit'=>'Zaznaczenie tego pola włączy śledzenie historii zmian w tym module. Zmiany w poszczególnych polach będą rejestrowane, aby administratorzy mogli zobaczyć ich historię.',
        'viewfieldsbtn'=>'Kliknij <b>Zobacz pola</b>, aby zobaczyć pola powiązane z modułem i utworzyć lub edytować własne pola.',
        'viewrelsbtn'=>'Kliknij <b>Relacje</b>, aby zobaczyć relacje tego modułu z innymi lub je utworzyć.',
        'viewlayoutsbtn'=>'Kliknij <b>Zobacz widoki</b>, aby zobaczyć widoki modułu i ustawić własny układ pól w tych widokach.',
        'viewmobilelayoutsbtn' => 'Kliknij <b>Zobacz mobilne widoki</b>, aby zobaczyć mobilne widoki dla modułu i spersonalizować układ pól w widoku.',
        'duplicatebtn'=>'Kliknij <b>Duplikuj</b>, aby skopiować właściwości tego modułu do nowego i wyświetlić go. <br/><br/> Nazwa dla nowego modułu jest generowana automatycznie poprzez dodanie numeru na końcu nazwy modułu pierwotnego.',
        'deletebtn'=>'Kliknij <b>Usuń</b>, aby usunąć ten moduł.',
        'name'=>'To jest <b>Nazwa</b> edytowanego modułu. <br/><br/>Nazwa musi składać się ze znaków alfanumerycznych, zaczynać od litery i nie zawierać spacji. (Przykład: HR_Zarządzanie)',
        'label'=>'To jest <b>Etykieta</b>, która pojawi się w zakładce nawigacyjnej modułu.',
        'savebtn'=>'Kliknij <b>Zapisz</b>, aby zachować dane powiązane z modułem.',
        'type_basic'=>'<b>Podstawowy</b> typ szablonu zawiera domyślne pola, takie jak Nazwa, Przydzielono do, Data utworzenia i Opis.',
        'type_company'=>'Szablon <b>Firma</b> zawiera określone pola, takie jak Nazwa kontrahenta, Branża i Adres fakturowania.<br/><br/>Użyj tego szablonu do tworzenia modułów podobnych do modułu Kontrahenci.',
        'type_issue'=>'Szablon <b>Zagadnienie</b> zawiera pola typowe dla Zgłoszeń i Błędów, takie jak Numer, Status, Priorytet i Opis.<br/><br/>Użyj tego szablonu do tworzenia modułów podobnych do modułów Zgłoszeń i Śledzenia błędów.',
        'type_person'=>'Szablon <b>Osoba</b> zawiera pola typowe dla określenia osoby, takie jak Forma grzecznościowa, Stanowisko, Imię i Nazwisko, Adres i Numer telefonu.<br/><br/>Użyj tego szablonu do tworzenia modułów podobnych do modułow Kontakty i Namiary.',
        'type_sale'=>'Szablon <b>Sprzedaż</b> zawiera pola właściwe dla szans sprzedażowych – Źródło pozyskania, Etap, Kwota i procentowe prawdopodobieństwo szansy. <br/><br/>Użyj tego szablonu do tworzenia modułów podobnych do standardowego modułu Szans.',
        'type_file'=>'Szablon <b>Plik</b> zawiera pola typowe dla modułu Dokumentów, takie jak Nazwa pliku, Typ dokumentu i Data publikacji oraz pozwala na dodawanie dowolnych plików do rekordu.<br><br>Użyj tego szablonu do tworzenia modułów podobnych do modułu Dokumentów.',

    ),
    'dropdowns'=>array(
        'default' => 'Wszystkie <b>listy rozwijalne</b> aplikacji są dostępne w tym miejscu.<br><br>Listy te mogą zostać użyte do tworzenia list rozwijalnych w dowolnym module.<br><br>Aby wprowadzić zmiany w istniejącej liście, kliknij na jej nazwę.<br><br>Kliknij <b>Dodaj listę rozwijalną</b>, aby utworzyć nową.',
        'editdropdown'=>'Listy rozwijalne mogą być użyte dla pól standardowych i własnych w dowolnym module.<br><br>Wprowadź <b>Nazwę</b> dla listy rozwijalnej.<br><br>Jeżeli w aplikacji są zainstalowane pakiety językowe, możesz określić <b>Język</b>, w jakim będą wyświetlane elementy listy.<br><br>W polu <b>Nazwa elementu</b> wprowadź nazwę dla opcji w liście rozwijalnej.  Nazwa ta nie pojawi się na liście rozwijalnej widocznej dla użytkowników.<br><br>W polu <b>Wyświetlana etykieta</b> wprowadź etykietę, która będzie widoczna dla użytkowników.<br><br>Po wprowadzeniu nazwy elementu i etykiety, kliknij  <b>Dodaj</b>, aby dodać nowy element do listy.<br><br>W celu zmiany kolejności elementów listy przeciągnij je i upuść w pożądanym miejscu.<br><br>Aby edytować etykietę elementu, kliknij <b>Edytuj</b>, i wprowadź nową etykietę. Aby usunąć element z listy rozwijalnej, kliknij <b>Usuń</b>.<br><br>Aby cofnąć zmiany wprowadzone w etykietach, kliknij <b>Cofnij</b>.  Aby przywrócić cofnięte zmiany, kliknij <b>Przywróć</b>.<br><br>Kliknij <b>Zapisz</b>, aby zapisać listę rozwijalną.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kliknij <b>Zapisz i zamieść</b>, aby zachować zmiany i uczynić je aktywnymi w module.',
        'historyBtn'=> 'Kliknij <b>Zobacz historię</b> jeśli chcesz przejrzeć i przywrócić poprzednio zapisany widok z historii.',
        'historyDefault'=> 'Kliknij <b>Przywróć domyślne</b>, aby przywrócić domyślny widok.',
        'Hidden' 	=> '<b>Ukryte</b> pola nie pojawiają się w subpanelu.',
        'Default'	=> '<b>Domyślne</b> pola pojawiają się w subpanelu.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kliknij <b>Zapisz i zamieść</b>, aby zachować zmiany i uczynić je aktywnymi w module.',
        'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć historię zmian lub przywrócić poprzednio zachowany widok. <br><br>Kliknięcie<b>Przywróć</b> w <b>Zobacz historię</b> przywraca położenie pól z poprzednio zapisanego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'historyDefault'=> 'Kliknij <b>Przywróć domyślne</b>, aby przywrócić domyślny widok. <br><br> Kliknięcie <b> Przywróć  domyślne</b> przywraca tylko położenie pól z domyślnego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'Hidden' 	=> 'Pola <b>Ukryte</b> nie są obecnie dostępne dla użytkowników w widoku listy.',
        'Available' => 'Pola <b>Dostępne</b> nie są widoczne domyślnie, ale mogą zostać dodane do widoku listy przez użytkowników.',
        'Default'	=> 'Pola <b>Domyślne</b>, widoczne w widoku listy nie są edytowalne przez użytkowników.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Kliknij <b>Zapisz i zamieść</b>, aby zachować zmiany i uczynić je aktywnymi w module.',
        'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć historię zmian lub przywrócić poprzednio zachowany widok. <br><br>Kliknięcie<b>Przywróć</b> w <b>Zobacz historię</b> przywraca położenie pól z poprzednio zapisanego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'historyDefault'=> 'Kliknij <b>Przywróć domyślne</b>, aby przywrócić domyślny widok. <br><br> Kliknięcie <b> Przywróć  domyślne</b> przywraca tylko położenie pól z domyślnego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'Hidden' 	=> 'Pola <b>Ukryte</b> nie są obecnie dostępne dla użytkowników w widoku listy.',
        'Default'	=> 'Pola <b>Domyślne</b>, widoczne w widoku listy nie są edytowalne przez użytkowników.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Kliknij <b>Zapisz i zamieść</b>, aby zapisać wszystkie zmiany i uaktywnić je w module.',
        'Hidden' 	=> 'Pola <b>Ukryte</b> nie pojawią się w Widoku Wyszukiwania.',
        'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć historię zmian lub przywrócić poprzednio zachowany widok. <br><br>Kliknięcie<b>Przywróć</b> w <b>Zobacz historię</b> przywraca położenie pól z poprzednio zapisanego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'historyDefault'=> 'Kliknij <b>Przywróć domyślne</b>, aby przywrócić domyślny widok. <br><br> Kliknięcie <b> Przywróć  domyślne</b> przywraca tylko położenie pól z domyślnego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'Default'	=> 'Pola <b>Domyślne</b> pojawią się w Widoku Wyszukiwania.'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'Kliknij <b>Zapisz</b>, aby zachować zmiany dokonane w widoku od ostatniego zapisu.<br><br>Zmiany nie będą wyświetlone w module, dopóki ich nie zastosujesz.',
        'historyBtn'=> 'Kliknij <b>Zobacz historię</b>, aby zobaczyć historię zmian lub przywrócić poprzednio zachowany widok. <br><br>Kliknięcie<b>Przywróć</b> w <b>Zobacz historię</b> przywraca położenie pól z poprzednio zapisanego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'historyDefault'=> 'Kliknij <b>Przywróć domyślne</b>, aby przywrócić domyślny widok. <br><br> Kliknięcie <b> Przywróć  domyślne</b> przywraca tylko położenie pól z domyślnego widoku. Aby zmienić etykiety pól, kliknij przycisk edycji znajdujący się obok każdego pola.',
        'publishBtn'=> 'Kliknij <b>Zapisz i zamieść</b>, aby zapisać wszystkie zmiany dokonane od ostatniego zapisu i uaktywnić je w module.<br><br>Widok zostanie niezwłocznie wyświetlony w module.',
        'toolbox'	=> '<b>Skrzynka narzędzi</b> zawiera <b>Kosz</b>, dodatkowe elementy widoku i zestaw dostępnych pól do dodania do widoku.<br/><br/>Elementy widoku i pola w Skrzynce mogą  być przeciągane i upuszczane do widoku i na odwrót.<br><br>Elementami widoku są <b>Panele</b> i <b>Wiersze</b>. Dodanie nowego wiersza lub panelu do widoku wprowadza dodatkowe miejsce dla pól.<br/><br/>Przeciągnij i upuść pola w obrębie Skrzynki lub widoku na miejscu zajmowanym już przez inne pole, aby zmienić pozycję obu pól.<br/><br/>Pole <b>Wypełnienie</b> tworzy pustą przestrzeń w widoku, tam, gdzie zostanie umieszczone.',
        'panels'	=> 'Obszar <b>Widoku</b> przedstawia podgląd tego, jak będzie wyglądał w module, gdy zmiany zostaną zapisane i zastosowane.<br/><br/>Możesz zmienić pozycję pól, wierszy i paneli, przez przeciągnięcie ich w pożądane miejsce.<br/><br/>Usuwanie elementów następuje przez przeciągnięcie i upuszczenie ich do <b>Kosza</b> w Skrzynce narzędzi. Dodawanie elementów do widoku odbywa się poprzez przeciągnięcie ich ze <b>Skrzynki narzędzi</b> i upuszczenie w określonym miejscu w widoku.',
        'delete'	=> 'Przeciągnij i upuść dowolny element, aby usunąć go z widoku',
        'property'	=> 'Edytuj etykietę wyświetlaną dla tego pola. <br/><b>Kolejność tabulacji</b> określa w jakiej kolejności przycisk TAB przechodzi między polami.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Nazwy <b>Pól</b> dostępnych w tym module są wymienione tutaj.<br><br>Własne pola utworzone w module pojawiają się nad polami dostępnymi domyślnie.<br><br>Aby edytować pole, kliknij <b>Nazwę pola</b>.<br/><br/>Aby utworzyć nowe pole, kliknij <b>Dodaj pole</b>.',
        'mbDefault'=>'Nazwy <b>Pól</b>, dostępnych w tym module są wymienione tutaj.<br><br>Aby skonfigurować właściwości dla pola, kliknij jego nazwę.<br><br>Aby utworzyć nowe pole, kliknij <b>Dodaj pole</b>. Etykieta wraz z  właściwościami utworzonego pola może być edytowana później przez kliknięcie w nazwę pola.<br><br>Po zamieszczeniu nowe pola utworzone w Kreatorze modułu są traktowane jako standardowe pola w zamieszczonym module w Studio.',
        'addField'	=> 'Wybierz <b>Typ danych</b> dla nowego pola. Typ, który wybierzesz, określa typ znaków wprowadzanych do pola. Na przykład tylko liczby całkowite mogą zostać wprowadzone do pola danych typu Liczba całkowita.<br><br> Określ <b>Nazwę</b> dla pola.  Nazwa musi składać się ze znaków alfanumerycznych  i nie zawierać żadnych spacji. Dozwolone są też podkreślniki.<br><br> <b>Etykieta wyświetlana</b> to etykieta, która pojawi się w widokach modułu. <b>Etykieta systemowa</b> jest używana do określenia pola w kodzie.<br><br> Zależenie od wybranego typu danych pola, niektóre lub wszystkie z wymienionych właściwości mogą być określone dla pola:<br><br> <b>Tekst pomocy</b> pojawia się tymczasowo, gdy użytkownik przeciąga wskaźnik nad polem i może podpowiadać użytkownikowi pożądany typ danych.<br><br> <b>Tekst komentarza</b> jest widziany tylko w Studio i/lub w Kreatorze Modułów i może opisywać pole dla administratorów.<br><br> <b>Wartość domyślna</b> jest widoczna w polu.  Użytkownicy mogą wprowadzić nową wartość lub pozostawić domyślną.<br><br> Zaznacz opcję <b>Masowa aktualizacja</b>, aby umożliwić jednorazową modyfikację pola dla większej liczby rekordów.<br><br>Wartość <b>Maksymalny rozmiar</b> określa maksymalną ilość znaków, które mogą zostać wprowadzone w polu.<br><br> Zaznacz opcję <b>Pole wymagane</b>, aby uzupełnienie danego pola było wymagane. Musi zostać podana wartość pola, aby móc zapisać rekord zawierający to pole.<br><br> Wybierz opcję <b>Raportowalne</b>, aby pole mogło być użyte w filtrach oraz aby dane były wyświetlane w Raportach.<br><br> Wybierz opcję <b>Historia zmian</b>, aby móc śledzić zmiany na danych polach.<br><br>Wybierz opcję <b>Importowalne</b>, aby zezwolić, zabronić lub wymagać, by pole było importowane.<br><br>Wybierz opcję w polu <b>Scalanie duplikatów</b>, aby włączyć lub wyłączyć funkcję scalania i wyszukiwania duplikatów.<br><br>Dodatkowe właściwości mogą zostać ustawione dla określonego typu danych.',
        'editField' => 'Właściwości tego pola mogą zostać spersonalizowane.<br><br>Kliknij <b>Duplikuj</b>, aby utworzyć nowe pole z takimi samymi właściwościami.',
        'mbeditField' => '<b>Etykieta wyświetlana</b> pola szablonu może być zmodyfikowana. Inne właściwości pola - nie.<br><br>Kliknij <b>Duplikuj</b>, aby utworzyć nowe pole z takimi samymi właściwościami.<br><br>Aby usunąć pole szablonu tak, aby nie było widoczne w module, usuń je z odpowiedniego <b>Widoku</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Zmiany dokonane za pomocą modułu Studio w tej instancji mogą zostać wyeksportowane i zainstalowane na innej. <br><br>Wprowadź <b>Nazwę pakietu</b>.  W pakiecie możesz zamieścić informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz moduł(y) przeznaczone do eksportu zawierające nowe zmiany.<br><br>Kliknij <b>Eksport</b>, aby stworzyć plik .zip pakietu zawierającego zmiany.  Plik  .zip może zostać zainstalowany na innej instancji za pomocą <b>Zarządzania modułami</b>.',
        'exportCustomBtn'=>'Kliknij <b>Eksport</b>, aby utworzyć plik .zip pakietu zawierającego dostosowania, które chcesz wyeksportować.',
        'name'=>'<b>Nazwa</b> pakietu zostanie wyświetlona w Zarządzaniu modułami, po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
        'author'=>'Określenie <b>Autor</b> to osoba lub firma, która stworzyła pakiet.<br><br>Autor zostanie wyświetlony w Zarządzaniu modułami po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
        'description'=>'To jest <b>Opis</b> pakietu wyświetlany podczas instalacji.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Witamy w obszarze <b>Narzędzia Programisty</b1>. <br/><br/>W tym obszarze możesz używać narzędzi, aby tworzyć i zarządzać standardowymi i dostosowywanymi modułami i polami.',
        'studioBtn'	=> 'Użyj <b>Studio</b>, aby dostosować zainstalowane moduły poprzez zmianę układu pól w poszczególnych widokach pól lub utworzenie nowych.',
        'mbBtn'		=> 'Użyj <b>Kreatora Modułów</b> aby tworzyć moduły.',
        'sugarPortalBtn' => 'Użyj <b>Edytora portalu Sugar</b> do zarządznia i modyfikowania widoku Portalu Sugar.',
        'dropDownEditorBtn' => 'Użyj <b>Edytora list rozwijalnytch</b>, aby dodać i edytować globalne listy rozwijalne.',
        'appBtn' 	=> 'Tryb aplikacji jest stosowany w przypadku dostosowywania różnych właściwości programu, takich jak np. jak dużo raportów TPS jest wyświetlanych na stronie głównej.',
        'backBtn'	=> 'Powrót do poprzedniego kroku.',
        'studioHelp'=> 'Użyj <b>Studio</b>, aby określić zakres informacyjny poszczególnych modułów.',
        'studioBCHelp' => 'wskazuje, że moduł jest modułem zgodnym wstecz',
        'moduleBtn'	=> 'Kliknij, aby edytować ten moduł.',
        'moduleHelp'=> 'Wybierz element modułu, który chcesz edytować.',
        'fieldsBtn'	=> 'Wybierz zakres informacyjny poszczególnych pól w module poprzez zarządzanie <b>Polami</b>.<br/><br/> W tym obszarze możesz także edytować i tworzyć własne pola.',
        'labelsBtn' => 'Edytuj <b>Etykiety</b>, które są wyświetlane dla pól i innych elementów w module.'	,
        'relationshipsBtn' => 'Dodaj nową lub obejrzyj istniejące <b>Relacje</b> dla modułu.' ,
        'layoutsBtn'=> 'Dostosuj <b>Widoki</b> modułu.  Widoki przedstawiają różne sposoby dostępu do modułu i jego pól.<br><br>Możesz ustalić, które pola bedą widoczne i jak zostaną uszeregowane w każdym z widoków.',
        'subpanelBtn'=> 'Ustal, które pola pojawią się w  <b>Subpanelach</b> modułu.',
        'portalBtn' =>'Dostosuj <b>Widoki</b> modułu, które pojawią sie w <b>Portalu Sugar</b>.',
        'layoutsHelp'=> '<b>Widoki</b> modułu, które mogą być dostosowywane są wyświetlone tutaj<br><br>Widoki wyświetlają pola i ich zawartość<br><br>Kliknij w ikonę, aby wybrać widok do edycji.',
        'subpanelHelp'=> '<b>Subpanele</b> w module, które mogą być dostosowywane, są widoczne tutaj.<br><br>Kliknij w ikonę, aby wybrać moduł do edycji.',
        'newPackage'=>'Kliknij <b>Nowy Pakiet</b> by utworzyć nowy pakiet.',
        'exportBtn' => 'Kliknij  <b>Eksport dostosowań</b>, aby zbudować pakiet zawierający własne modyfikacje utworzone w Studio dla określonego modułu.',
        'mbHelp'    => '<b>Witamy w Kreatorze Modułów.</b><br/><br/><b>Kreator Modułów</b> jest używany do tworzenia pakietów zawierających dostosowane moduły, bazujące na standardowych lub własnych. <br/><br/>Aby rozpocząć, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu lub wybierz istniejący pakiet do edycji.<br/><br/> <b>Pakiet</b> może być zbiorem własnych modułów, które są częścią jednego projektu. Pakiet może więc zawierać więcej niż jeden moduł własny, który może być powiązany z dowolnym innym modułem aplikacji. <br/><br/>Przykład: Możesz stworzyć pakiet, zawierający jeden moduł własny, który jest powiązany ze standardowym modułem <b>Kontrahenci</b> lub  stworzyć kilka modułów, współpracujących ze sobą jako projekt i będących zależnymi od modułów alikacji.',
        'viewBtnEditView' => 'Dostosuj <b>Widok edycji</b> modułu.<br><br>Ten widok to formularz zawierający pola, które są uzupełniane przez użytkownika podczas dodawania/aktualizacji rekordu.',
        'viewBtnDetailView' => 'Dostosuj <b>Widok szczegółowy</b> modułu.<br><br>Ten widok to formularz zawierający pola wyświetlające dane wprowadzone przez użytkownika.',
        'viewBtnDashlet' => 'Dostosuj <b>Dashlety</b> modułu, zawierające widok listy i wyszukiwania.<br><br> Dashlet będzie mógł być również dodany przez użytkowników do Strony głównej.',
        'viewBtnListView' => 'Dostosuj <b>Widok listy</b> modułu.<br><br>Wynik wyszukiwania pojawi się w widoku listy.',
        'searchBtn' => 'Dostosuj widok <b>Wyszukiwanie</b>.<br><br>Określ jakie pola mogą zostać użyte do filtrowania rekordów, które pojawią się w widoku listy.',
        'viewBtnQuickCreate' =>  'Dostosuj widok <b>Szybkie tworzenie</b>.<br><br>Formularz Szybkiego tworzenia pojawia się w subpanelach i w module poczty.',

        'searchHelp'=> 'Formularz <b>Wyszukiwanie</b>, który może zostać dostosowany, pojawi się tutaj.<br><br>Formularz zawiera pola służące do filtrowania rekordów.<br><br>Kliknij w ikonę, aby skonfigurować widok.',
        'dashletHelp' =>'Widok <b>Dashletów</b>, który może zostać dostosowany, pojawi się tutaj.<br><br>Dashlety są dostępne do dodawania na Stronie głównej.',
        'DashletListViewBtn' =>'<b>Widok listy Dashletów</b> wyświetla rekordy bazujące na filtrach wyszukiwania dashletów.',
        'DashletSearchViewBtn' =>'<b>Widok wyszukiwania Dashletów</b> filtruje rekordy, które są wyświetlane w dashletach.',
        'popupHelp' =>'Widok okienka <b>Popup</b>, który może zostać dostosowany, pojawi się tutaj.<br>',
        'PopupListViewBtn' => '<b>Widok listy Popup</b> wyświetla rekordy bazujące na filtrach wyszukiwania Popup.',
        'PopupSearchViewBtn' => '<b>Widok wyszukiwania Popup</b> filtruje rekordy, które są wyświetlane w Widoku listy Popup.',
        'BasicSearchBtn' => 'Dostosuj formularz <b>Wyszukiwanie podstawowe</b>, który pojawi się w zakładce "Wyszukiwanie podstawowe" w obszarze wyszukiwania dla modułu.',
        'AdvancedSearchBtn' => 'Dostosuj formularz <b>Wyszukiwanie zaawansowane</b>, który pojawi się w zakładce "Wyszukiwanie zaawansowane" w obszarze wyszukiwania dla modułu.',
        'portalHelp' => 'Zarządzaj i dostosuj <b>Portal Sugar</b>.',
        'SPUploadCSS' => 'Załaduj <b>Arkusz stylów</b> dla Portalu Sugar.',
        'SPSync' => '<b>Synchronizuj</b> dostosowywane elementy z instancją Portalu Sugar.',
        'Layouts' => 'Dostosuj <b>Widoku</b> modułów Portalu Sugar.',
        'portalLayoutHelp' => 'Moduły Portalu pojawiają się w tym obszarze.<br><br>Wybierz moduł, aby móc edytować <b>Widoki</b>.',
        'relationshipsHelp' => 'Wszystkie <b>Relacje</b>, które istnieją pomiędzy modułami nadrzędnymi i podległymi pojawiają sie tutaj.<br><br><b>Nazwa</b> relacji jest generowana automatycznie przez system.<br><br><b>Moduł nadrzędny</b> to moduł, do którego należa wszystkie relacje. Na przykład, wszystkie właściwości relacji, dla których moduł Kontrahenci jest modułem nadrzędnym, są przechowywane w tabelach bazy danych dla modułu Kontrahenci.<br><br>Kliknij wiersz w tabeli relacje, aby zobaczyć właściwości relacji.<br><br>Kliknij <b>Dodaj relację</b> w celu utworzenia nowej relacji.<br><br>Relacje mogą być tworzone pomiędzy dowolnymi istniejącymi modułami.',
        'relationshipHelp'=>'<b>Relacje</b> można tworzyć pomiędzy modułem nadrzędnym i innym powiązanym modułem.<br><br> Relacje są przedstawione wizualnie jako subpanele i powiązane pola w rekordach modułu.<br><br> Jeśli relacja już istnieje pomiędzy dwoma modułami, każda nowa relacja stworzona pomiędzy nimi nie będzie dodatkowo uwidoczniona.<br><br> Wybierz jeden z następujących <b>Typów</b> relacji dla modułu:<br><br> <b>Jeden-do-jednego</b> - oba rekordy w modułach będą zawierać pola z odnośnikach do powiązanych modułów.<br><br> <b>Jeden-do-wielu</b> - Rekord modułu nadrzędnego będzie zawierał subpanel, a rekord modułu podrzędnego - pole z odnośnikiem do modułu nadrzędnego.<br><br> <b>Wiele-do-Wielu</b> - W rekordach obu modułów wyświetlą się subpanele.<br><br> Wybierz <b>Moduły powiązane </b> dla relacji. <br><br> Jeżeli relacja jest typu Wiele do Wielu, wybierz widok subpaneli dla właściwego modułu.<br><br> Kliknij <b>Zapisz</b>, aby utworzyć relację. UWAGA: Raz utworzonej relacji nie można ani edytować, ani usunąć.',
        'convertLeadHelp' => "W tym obszarze możesz dodać moduły do Widoku konwersji i modyfikować jego układ.<br/><br />		Możesz zmienić kolejność modułów poprzez przeciągnięcie wierszy w tabeli.<br/><br/><br />		<br />		<b>Moduł:</b> Nazwa modułu.<br/><br/><br />		<b>Wymagany:</b> Wymagane moduły muszą zostać utworzone lub wybrane zanim namiar zostanie przekształcony.<br/><br/><br />		<b>Kopiuj dane:</b> Zaznaczenie opcji powoduje skopiowanie pól namiaru o tej samej nazwie do nowo utworzonego rekordu.<br/><br/><br />		<b>Wybór Kontaktu:</b> Moduły, które są powiązane z Kontaktem mogą zostać wybrane, a nie utworzone podczas procesu przekształcania.<br/><br/><br />		<b>Edytuj:</b> Zmodyfikuj Widok konwersji dla tego modułu.<br/><br/><br />		<b>Usuń:</b> Usuń ten moduł z Widoku konwersji.<br/><br/>",
        'editDropDownBtn' => 'Edytuj globalną listę rozwijalną',
        'addDropDownBtn' => 'Dodaj nową globalną listę rozwijalną',
    ),
    'fieldsHelp'=>array(
        'default'=>'<b>Pola</b> są w tym module wymienione po nazwie.<br><br>Szablon modułu zawiera predefiniowany zestaw pól.<br><br>Aby stworzyć nowe pole, kliknij <b>Dodaj pole</b>.<br><br>Aby edytować - kliknij <b>Nazwę pola</b>.<br/><br/>Po zamieszczeniu modułu nowe pola utworzone w Kreatorze Modułów oraz pola wzorcowe są traktowane jako zwykłe pola w module Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'<b>Relacje</b> utworzone pomiędzy modułami pojawią się tutaj.<br><br><b>Nazwa</b> relacji jest generowana przez system.<br><br><b>Moduł nadrzędny </b> to moduł, do którego należą relacje. Ich właściwości są przechowywane w tabelach bazy danych, należących do modułu nadrzędnego.<br><br>Klikając na wiersz w tabeli relacji można przeglądać i edytować właściwości relacji.<br><br>Kliknij <b>Dodaj relację</b>, aby utworzyć nową',
        'addrelbtn'=>'myszkę nad pomocą aby dodać relację.',
        'addRelationship'=>'<b>Relacje</b> mogą być tworzone pomiędzy modułem i innym modułe własnym lub istniejącym.<br><br> Relacje są przedstawione wizualnie jako subpanele i powiązane pola w rekordach modułu.<br><br>Wybierz jeden z następujących <b>Typów</b> relacji dla modułu:<br><br> <b>Jeden-do-jednego</b> - oba rekordy w modułach będą zawierać pola z odnośnikach do powiązanych modułów.<br><br> <b>Jeden-do-wielu</b> - Rekord modułu nadrzędnego będzie zawierał subpanel, a rekord modułu podrzędnego - pole z odnośnikiem do modułu nadrzędnego.<br><br> <b>Wiele-do-Wielu</b> - W rekordach obu modułów wyświetlą się subpanele.<br><br> Wybierz <b>Moduły powiązane </b> dla relacji. <br><br> Jeżeli relacja jest typu Wiele do Wielu, wybierz widok subpaneli dla właściwego modułu.<br><br> Kliknij <b>Zapisz</b>, aby utworzyć relację.',
    ),
    'labelsHelp'=>array(
        'default'=> '<b>Etykiety</b> dla pól i inne tytuły mogą być modyfikowane.<br><br>Edytuj etykiety klikając w pole. Wprowadź nową etykietę i kliknij <b>Zapisz</b>.<br><br>Jeśli dla aplikacji są zainstalowane pakiety językowe, możesz wybrać <b>Język</b> dla etykiet.',
        'saveBtn'=>'Kliknij <b>Zapisz</b>, aby zapisać wszystkie zmiany',
        'publishBtn'=>'Kliknij <b>Zapisz i zamieść</b>, aby zapisać wszystkie zmiany i uaktywnić je',
    ),
    'portalSync'=>array(
        'default' => 'Wprowadź <b>Adres URL Portalu Sugar</b>  i kliknij <b>Dalej</b>.<br><br>Następnie wprowadź prawidłową nazwę użytkownika Sugar oraz hasło i kliknij <b>Rozpocznij synchronizację</b>.<br><br>Dostosowania wprowadzone dla portalu Sugar zawierające <b>Widoki</b> wraz z <b>Arkuszami stylów</b>, jeśli zostały uprzednio załadowane, zostaną wprowadzone w określonej powyżej instancji portalu.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Możesz dostosować widok portalu Sugar, korzystając z arkusza stylów.<br><br>Wybierz <b>Arkusz stylów</b> do załadowania.<br><br>Arkusz stylów zostanie ustawiony dla Portalu Sugar podczas następnej synchronizacji.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Aby rozpocząć, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu lub wybierz istniejący pakiet do edycji.<br/><br/> <b>Pakiet</b> może być zbiorem własnych modułów, które są częścią jednego projektu. Pakiet może więc zawierać więcej niż jeden moduł własny, który może być powiązany z dowolnym innym modułem aplikacji. <br/><br/>Przykład: Możesz stworzyć pakiet, zawierający jeden moduł własny, który jest powiązany ze standardowym modułem Kontrahenci lub stworzyć kilka modułów, współpracujących ze sobą jako projekt i będących zależnymi od modułów alikacji.',
            'somepackages'=>'<b>Pakiet</b> przechowuje utworzone przez użytkownika moduły, które należą do jednego projektu. Pakiet może zawierać jeden lub więcej utworzonych <b>modułów</b>, które mogą być powiązane pomiędzy sobą lub innymi modułami aplikacji.<br/><br/>Po utworzeniu pakietu można tworzyć moduły od razu lub pozostawić je do późniejszej edycji.<br><br>Gdy projekt jest ukończony, można <b>Zamieścić</b> pakiet, co spowoduje natychmiastową instalację nowych modułów na instancji.',
            'afterSave'=>'Pakiet powinien zawierać co najmniej jeden moduł. Można utworzyć jeden lub więcej własnych modułów w obrębie jednego pakietu.<br/><br/>Kliknij na <b>Nowy moduł</b>, aby utworzyć własny moduł dla sla tego pakietu.<br/><br/> Po utworzeniu wszystkich modułów możesz opublikować lub zamieścić pakiet, co udostępni go dla tej instancji i/lub użytkowników.<br/><br/> Aby zamieścić pakiet natychmiastową na tej instancji, kliknij <b>Zamieść</b>.<br><br>Kliknij <b>Publikuj</b>, aby zapisać projekt w pliku .zip. Gdy zostanie on zapisany, użyj <b>Zarządzania modułami</b>, aby załadować i zainstalować pakiet.  <br/><br/>Pakiet może być dowolnie dystrybuowany pomiędzy różnymi instancjami.',
            'create'=>'<b>Pakiet</b> przechowuje utworzone przez użytkownika moduły, które należą do jednego projektu. Pakiet może zawierać jeden lub więcej utworzonych <b>modułów</b>, które mogą być powiązane pomiędzy sobą lub innymi modułami aplikacji.<br/><br/>Po utworzeniu pakietu można tworzyć moduły od razu lub pozostawić je do późniejszej edycji.',
            ),
    'main'=>array(
        'welcome'=>'Użyj <b>Narzędzi programisty</b> do tworzenia i zarządzania standardowymi i własnymi modułami i polami. <br/><br/>Do zarządzania modułami aplikacji służy <b>Studio</b>. <br/><br/>Do tworzenia własnych modułów -  <b>Kreator modułów</b>.',
        'studioWelcome'=>'Wszystkie zainstalowane obecnie moduły, zarówno standardowe, jak i własne, są edytowalne w Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Gdy utworzony pakiet zawiera już co najmniej jeden moduł, możesz <b>Zamieścić</b> go jako pakiet na instancji Sugar, lub <b>Opublikować</b> jako pakiet do zainstalowania na tej lub innej instacji, używając <b>Zarządzania modułami</b>.<br/><br/>Aby zainstalować pakiet bezpośrednio na tej instancji Sugar, kliknij <b>Zamieść</b>.<br><br>Aby utworzyć paczkę możliwą do zainstalowania na różnych instancjach za pomocą <b>Zarządzania modułami</b>, musisz utworzyć plik .zip, klikając <b>Publikuj</b>.<br/><br/> Możesz tworzyć moduły w pakiecie etapami i publikować lub zamieszczać w dowolnym momencie. <br/><br/>Po publikacji lub zamieszczeniu pakietu możesz dalej dokonywać zmian.  W takim przypadku ponownie dokonaj publikacji lub zamieszczenia, aby zaaprobować zmiany." ,
        'editView'=> 'Tutaj możesz edytować istniejące pola lub w lewym panelu dodawać nowe.',
        'create'=>'Gdy wybierasz <b>Typ</b> modułu, który chcesz stworzyć, jednocześnie wybierasz typ pól, które znajdą się w module. <br/><br/>Każdy szablon modułu zawiera zestaw pól właściwy dla konkretnego typu modułu, określony przez jego nazwę.<br/><br/><b>Podstawowy</b> - zawiera podstawowe pola, które pojawiają się w standardowych modułach. Te pola to np. Nazwa, Przydzielono do, Data utworzenia lub Opis.<br/><br/> <b>Firma</b> - Zawiera pola typowe dla określenia organizacji, takie jak Nazwa, adres i dane do fakturowania.  Użyj tego szablonu do tworzenia modułów podobnych do standardowego modułu Kontrahenci.<br/><br/> <b>Osoba</b> - Zawiera pola służące do określenia osób, takie jak Forma grzecznościowa, Stanowisko, Imię, Adres i numer telefonu.  Użyj tego szablonu, do tworzenia modułów podobnych do standardowych modułów Kontakty i Namiary.<br/><br/><b>Cecha</b> - Zawiera pola specyficzne dla modułów Zgłoszenia lub Błędy, takie jak numer, status, priorytet lub opis.  Użyj tego szablonu, do tworzenia modułów podobnych do standardowych modułów Spraw lub Błędy.<br/><br/>Uwaga: Po utworzeniu modułu możesz edytować etykiety pól szablonu, podobnie jak własnych pól dodanych do modułu.',
        'afterSave'=>'Tworząc moduł dostosowany do potrzeb, możesz edytować i tworzyć pola, relacje pomiędzy modułami i aranżować rozkład pól w poszczególnych widokach.<br/><br/>Aby zobaczyć pola wzorcowe w module i aranżować własne, kliknij <b>Zobacz pola</b>.<br/><br/>Aby utworzyć lub zarządzać relacjami pomiędzy modułami, zarówno tymi, które znajdują się w aplikacji, jak i tymi, które utworzono w tym samym pakiecie, kliknij <b>Pokaż relacje</b>.<br/><br/>Aby edytować widoki, kliknij <b>Zobacz widoki</b>. Możesz zmieniać widok szczegółowy, widok edycji oraz widok listy dokładnie tak samo, jak edytuje się standardowe moduły w Studio.<br/><br/> Aby utworzyć moduł o takich samych właściwościach, kliknij <b>Duplikuj</b>.  Możesz dalej dostosowywać powstały w wyniku duplikacji moduł.',
        'viewfields'=>'Pola w module mogą być dowolnie edytowane.<br/><br/>Nie możesz usunąć standardowych pól, ale możesz wyłączyć je w widokach na stronie widoku. <br/><br/>Możesz natomiast edytować etykiety pól standardowych. Inne ich właściwości nie mogą być edytowane. Możesz poza tym szybko tworzyć nowe pola o podobnych właściwościach poprzez kliknięcie na nazwę pola, a następnie na przycisk <b>Duplikuj</b> w formularzu <b>Właściwości</b>.  Wprowadź nowe właściwości i kliknij <b>Zapisz</b>.<br/><br/>Jeśli dostosowujesz nowy moduł, a został on już zainstalowany, nie wszystkie z właściwości pól mogą być edytowane.  Należy określić zatem wszystkie właściwości dla pól standardowych i własnych, zanim pakiet zawierający moduł zostanie opublikowany lub zainstalowany.',
        'viewrelationships'=>'Możesz tworzyć relacje wiele-do-wielu pomiędzy bieżącym modułem, a innymi modułami w pakiecie i/lub pomiędzy bieżącym modułem, a modułami zainstalowanymi na aplikacji.<br><br> Aby utworzyć relację jeden-do-wielu i jeden-do-jednego, kliknij <b>Powiązanie</b> i <b>Utwórz powiązanie</b> pomiędzy polami w module.',
        'viewlayouts'=>'Możesz kontrolować, które z pól są dostępne do gromadzenia danych w <b>Widoku edycji</b>.  Możesz także kontrolować jakie dane są wyświetlane w <b>Widoku szczegółowym</b>.  Widoki nie muszą zawierać takich samych danych. <br/><br/>Formulasz Szybkiego tworzenia jest wyświetlony podczas wyboru przycisku <b>Utwórz</b> w subapnelu modułu nadrzędnego. Domyślnie widok formularza <b>Szybkiego tworzenia</b> jest taki sam, jak widok <b>Widoku edycji</b>. Możesz dostosować formularz Szybkiego tworzenia tak, aby zawierał mniej lub więcej pól niż widok widoku edycji. <br><br>Możesz dostosować również poziom bezpieczeństwa dla widoku, korzystając z <b>Zarządzania rolami</b>.<br><br>',
        'existingModule' =>'Po utworzeniu i dostosowaniu modułu możesz tworzyć następne moduły, <b>Publikować</b> lub <b>Zamieścić</b> pakiet.<br><br>Aby utworzyć moduły o podobnych właściwościach, kliknij <b>Duplikuj</b> lub cofnij się i kliknij <b>Nowy moduł</b>.<br><br> Jeśli jesteś gotowy do <b>Publikacji</b> lub <b>Zamieszczenia</b> pakietu zawierającej ten moduł, cofnij się do poziomu zarządzania pakietem. Możesz zamieścić lub opublikować paczkę zawierającą co najmniej jeden moduł.',
        'labels'=> 'Etykiety pól standardowych i własnych mogą być modyfikowane. Zmiana etykiet nie będzie miała wpływu na wprowadzone do nich dane.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Po lewej stronie są wyświetlone trzy kolumny. Kolumna <b>Domyślne</b> zawiera te pola, które są wyświetlone w Widoku listy domyślnie.<br/><br/>Kolumna <b>Dostępne</b> zawiera pola, które mogą zostać wybrane przez użytkownika w celu utworzenia własnego widoku listy. <br/><br/>Kolumna <b>Ukryte</b> zawiera pola, które mogą zostać dodane do kolumn Domyślne lub Dostępne.',
        'savebtn'	=> 'Kliknij <b>Zapisz i zamieść</b>, aby zapisać zmiany i uaktywnić je w module.',
        'Hidden' 	=> 'Pola <b>Ukryte</b> nie są obecnie dostępne dla użytkowników w widoku listy.',
        'Available' => 'Pola <b>Dostępne</b> nie są widoczne domyślnie, ale mogą zostać dodane do widoku listy przez użytkowników.',
        'Default'	=> 'Pola <b>Domyślne</b>, widoczne w widoku listy nie są edytowalne przez użytkowników.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Po lewej stronie są wyświetlone dwie kolumny. Kolumna <b>Ukryte</b> zawiera pola dostępne dla Ciebie, jako administratora, do dodania do formularza Wyszukaj.',
        'savebtn'	=> 'Kliknij <b>Zapisz i zamieść</b>, aby zapisać wszystkie zmiany i uaktywnić je w module.',
        'Hidden' 	=> 'Pola <b>Ukryte</b> nie pojawią się w Widoku Wyszukiwania.',
        'Default'	=> 'Pola <b>Domyślne</b> pojawią się w Widoku Wyszukiwania.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Obszar <b>Widoku</b> zawiera  pola, które są obecnie wyświetlone w <b>Widoku szczegółowym</b>.<br/><br/><b>Skrzynka narzędzi</b> zawiera <b>Kosz</b> oraz pola i elementy widoku, które mogą zostać do niego dodane.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynką</b> a <b>Widokiem</b> i w samym widoku.<br><br>Aby usunąć pole z widoku, przeciągnij je do <b>Kosza</b>. Pole będzie dostępne w Skrzynce narzędzi i możliwe do dodania do widoku.',
        'saveBtn'	=> 'Kliknij <b>Zapisz</b>, aby zachować zmiany dokonane w widoku od ostatniego zapisu.<br><br>Zmiany nie będą wyświetlone w module, dopóki ich nie zastosujesz.',
        'publishBtn'=> 'Kliknij <b>Zapisz i zamieść</b>, aby zapisać wszystkie zmiany dokonane od ostatniego zapisu i uaktywnić je w module.<br><br>Widok zostanie niezwłocznie wyświetlony w module.',
        'toolbox'	=> '<b>Skrzynka narzędzi</b> zawiera <b>Kosz</b>, dodatkowe elementy widoku i zestaw dostępnych pól do dodania do widoku.<br/><br/>Elementy widoku i pola w Skrzynce mogą  być przeciągane i upuszczane do widoku i na odwrót.<br><br>Elementami widoku są <b>Panele</b> i <b>Wiersze</b>. Dodanie nowego wiersza lub panelu do widoku wprowadza dodatkowe miejsce dla pól.<br/><br/>Przeciągnij i upuść pola w obrębie Skrzynki lub widoku na miejscu zajmowanym już przez inne pole, aby zmienić pozycję obu pól.<br/><br/>Pole <b>Wypełnienie</b> tworzy pustą przestrzeń w widoku, tam, gdzie zostanie umieszczone.',
        'panels'	=> 'Obszar <b>Widoku</b> przedstawia podgląd tego, jak będzie wyglądał w module, gdy zmiany zostaną zapisane i zastosowane.<br/><br/>Możesz zmienić pozycję pól, wierszy i paneli, przez przeciągnięcie ich w pożądane miejsce.<br/><br/>Usuwanie elementów następuje przez przeciągnięcie i upuszczenie ich do <b>Kosza</b> w Skrzynce narzędzi. Dodawanie elementów do widoku odbywa się poprzez przeciągnięcie ich ze <b>Skrzynki narzędzi</b> i upuszczenie w określonym miejscu w widoku.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Obszar <b>Widoku</b> zawiera  pola, które są obecnie wyświetlone w <b>Widoku szczegółowym</b>.<br/><br/><b>Skrzynka narzędzi</b> zawiera <b>Kosz</b> oraz pola i elementy widoku, które mogą zostać do niego dodane.<br><br>Zmian w widoku dokonuje się przeciągając i upuszczając elementy i pola pomiędzy <b>Skrzynką</b> a <b>Widokiem</b> i w samym widoku.<br><br>Aby usunąć pole z widoku, przeciągnij je do <b>Kosza</b>. Pole będzie dostępne w Skrzynce narzędzi i możliwe do dodania do widoku.',
        'dropdownaddbtn'=> 'Wybór tego przycisku spowoduje dodanie nowej pozycji do listy rozwijalnej.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Zmiany dokonane za pomocą modułu Studio w tej instancji mogą zostać wyeksportowane i zainstalowane na innej. <br><br>Wprowadź <b>Nazwę pakietu</b>.  W pakiecie możesz zamieścić informacje o <b>Autorze</b> i <b>Opis</b>.<br><br>Wybierz moduł(y) przeznaczone do eksportu zawierające nowe zmiany.<br><br>Kliknij <b>Eksport</b>, aby stworzyć plik .zip pakietu zawierającego zmiany.  Plik  .zip może zostać zainstalowany na innej instancji za pomocą <b>Zarządzania modułami</b>.',
        'exportCustomBtn'=>'Kliknij <b>Eksport</b>, aby utworzyć plik .zip pakietu zawierającego dostosowania, które chcesz wyeksportować.',
        'name'=>'<b>Nazwa</b> pakietu zostanie wyświetlona w Zarządzaniu modułami, po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
        'author'=>'Określenie <b>Autor</b> to osoba lub firma, która stworzyła pakiet.<br><br>Autor zostanie wyświetlony w Zarządzaniu modułami po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
        'description'=>'<b>Opis</b> pakietu zostanie wyświetlony w Zarządzaniu modułami po tym jak pakiet zostanie przygotowany do instalacji w Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Witamy w obszarze <b>Narzędzia Programisty</b1>. <br/><br/>W tym obszarze możesz używać narzędzi, aby tworzyć i zarządzać standardowymi i dostosowywanymi modułami i polami.',
        'studioBtn'	=> 'Użyj <b>Studio</b>, aby dostosować zainstalowane moduły poprzez zmianę układu pól w poszczególnych widokach pól, lub utworzenie nowych.',
        'mbBtn'		=> 'Użyj <b>Kreatora Modułów</b> aby tworzyć moduły.',
        'appBtn' 	=> 'Tryb aplikacji jest stosowany w przypadku dostosowywania różnych właściwości programu, takich jak np. jak dużo raportów TPS jest wyświetlanych na stronie głównej.',
        'backBtn'	=> 'Powrót do poprzedniego kroku.',
        'studioHelp'=> 'Użyj <b>Studio</b>, aby określić zakres informacyjny poszczególnych modułów.',
        'moduleBtn'	=> 'Kliknij, aby edytować ten moduł.',
        'moduleHelp'=> 'Wybierz element modułu, który chcesz edytować.',
        'fieldsBtn'	=> 'Wybierz zakres informacyjny poszczególnych pól w module poprzez zarządzanie <b>Polami</b>.<br/><br/> W tym obszarze możesz także edytować i tworzyć własne pola.',
        'labelsBtn' => 'Edytuj <b>Etykiety</b> tak, aby wyświetlane były wartości w tym module.'	,
        'layoutsBtn'=> 'Dostosuj <b>Widoki</b> modułu.  Widoki przedstawiają różne sposoby dostępu do modułu i jego pól.<br><br>Możesz ustalić, które pola bedą widoczne i jak zostaną uszeregowane w każdym z widoków.',
        'subpanelBtn'=> 'Ustal, które pola pojawią się w  <b>Subpanelach</b> modułu.',
        'layoutsHelp'=> '<b>Widoki</b> modułu, które mogą być dostosowywane są wyświetlone tutaj<br><br>Widoki wyświetlają pola i ich zawartość<br><br>Kliknij w ikonę, aby wybrać widok do edycji.',
        'subpanelHelp'=> '<b>Subpanele</b> w module, które mogą być dostosowywane, są widoczne tutaj.<br><br>Kliknij w ikonę, aby wybrać moduł do edycji.',
        'searchHelp' => 'Formularz <b>Wyszukiwanie</b>, który może zostać dostosowany, pojawi się tutaj.<br><br>Formularz zawiera pola służące do filtrowania rekordów.<br><br>Kliknij w ikonę, aby skonfigurować widok.',
        'labelsBtn'	=> 'Edytuj <b>Etykiety</b> tak, aby wyświetlane były wartości w tym module.',
        'newPackage'=>'Kliknij <b>Nowy Pakiet</b> by utworzyć nowy pakiet.',
        'mbHelp'    => '<b>Witamy w Kreatorze Modułów.</b><br/><br/><b>Kreator Modułów</b> jest używany do tworzenia pakietów zawierających dostosowane moduły, bazujące na standardowych lub własnych. <br/><br/>Aby rozpocząć, kliknij <b>Nowy Pakiet</b> w celu utworzenia nowego pakietu lub wybierz istniejący pakiet do edycji.<br/><br/> <b>Pakiet</b> może być zbiorem własnych modułów, które są częścią jednego projektu. Pakiet może więc zawierać więcej niż jeden moduł własny, który może być powiązany z dowolnym innym modułem aplikacji. <br/><br/>Przykład: Możesz stworzyć pakiet, zawierający jeden moduł własny, który jest powiązany ze standardowym modułem <b>Kontrahenci</b> lub  stworzyć kilka modułów, współpracujących ze sobą jako projekt i będących zależnymi od modułów alikacji.',
        'exportBtn' => 'Kliknij  <b>Eksport dostosowań</b>, aby zbudować pakiet zawierający własne modyfikacje utworzone w Studio dla określonego modułu.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Edytuj listy rozwijalne',

//ASSISTANT
'LBL_AS_SHOW' => 'Pokaż Asystenta innym razem.',
'LBL_AS_IGNORE' => 'Nie pokazuj więcej Asystenta.',
'LBL_AS_SAYS' => 'Asystent sugeruje:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Kreator Modułów',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Edytuj listy rozwijalne',
'LBL_EDIT_DROPDOWN'=>'Edytuj listy rozwijalne',
'LBL_DEVELOPER_TOOLS' => 'Narzędzia programisty',
'LBL_SUGARPORTAL' => 'Edytor portalu Sugar',
'LBL_SYNCPORTAL' => 'Synchronizuj portal',
'LBL_PACKAGE_LIST' => 'Lista pakietów',
'LBL_HOME' => 'Powrót do strony głównej',
'LBL_NONE'=>'-Brak-',
'LBL_DEPLOYE_COMPLETE'=>'Zamieszczanie ukończone',
'LBL_DEPLOY_FAILED'   =>'Podczas zamieszczania pakietu wystąpił błąd. Twój pakiet mógł zostać zainstalowany niepoprawnie',
'LBL_ADD_FIELDS'=>'Dodaj własne pola',
'LBL_AVAILABLE_SUBPANELS'=>'Dostępne subpanele',
'LBL_ADVANCED'=>'Zaawansowane',
'LBL_ADVANCED_SEARCH'=>'Wyszukiwanie zaawansowane',
'LBL_BASIC'=>'Podstawowe',
'LBL_BASIC_SEARCH'=>'Wyszukiwanie podstawowe',
'LBL_CURRENT_LAYOUT'=>'Aktualny widok',
'LBL_CURRENCY' => 'Waluta',
'LBL_CUSTOM' => 'Własny',
'LBL_DASHLET'=>'Dashlety',
'LBL_DASHLETLISTVIEW'=>'Widok listy dashletów Sugar',
'LBL_DASHLETSEARCH'=>'Wyszukiwanie dashletu Sugar',
'LBL_POPUP'=>'Popup',
'LBL_POPUPLIST'=>'Popup lista',
'LBL_POPUPLISTVIEW'=>'Popup lista',
'LBL_POPUPSEARCH'=>'Popup wyszukiwanie',
'LBL_DASHLETSEARCHVIEW'=>'Wyszukiwanie dashletu Sugar',
'LBL_DISPLAY_HTML'=>'Wyświetl kod HTML',
'LBL_DETAILVIEW'=>'Widok szczegółowy',
'LBL_DROP_HERE' => '[Upuść tutaj]',
'LBL_EDIT'=>'Edytuj',
'LBL_EDIT_LAYOUT'=>'Edytuj widok',
'LBL_EDIT_ROWS'=>'Edytuj wiersze',
'LBL_EDIT_COLUMNS'=>'Edytuj kolumny',
'LBL_EDIT_LABELS'=>'Edytuj etykiety',
'LBL_EDIT_PORTAL'=>'Edytuj portal dla',
'LBL_EDIT_FIELDS'=>'Edytuj pola',
'LBL_EDITVIEW'=>'Widok edycji',
'LBL_FILTER_SEARCH' => "Wyszukiwanie",
'LBL_FILLER'=>'(filtr)',
'LBL_FIELDS'=>'Pola',
'LBL_FAILED_TO_SAVE' => 'Zapisywanie nie powiodło się',
'LBL_FAILED_PUBLISHED' => 'Publikowanie nie powiodło się',
'LBL_HOMEPAGE_PREFIX' => 'Moje',
'LBL_LAYOUT_PREVIEW'=>'Podgląd widoku',
'LBL_LAYOUTS'=>'Widoki',
'LBL_LISTVIEW'=>'Widok listy',
'LBL_RECORDVIEW'=>'Widok rekordu',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Nowy pakiet',
'LBL_NEW_PANEL'=>'Nowy panel',
'LBL_NEW_ROW'=>'Nowy wiersz',
'LBL_PACKAGE_DELETED'=>'Usunięto pakiet',
'LBL_PUBLISHING' => 'Publikowanie...',
'LBL_PUBLISHED' => 'Opublikowano',
'LBL_SELECT_FILE'=> 'Wybierz plik',
'LBL_SAVE_LAYOUT'=> 'Zapisz widok',
'LBL_SELECT_A_SUBPANEL' => 'Wybierz subpanel',
'LBL_SELECT_SUBPANEL' => 'Wybierz subpanel',
'LBL_SUBPANELS' => 'Subpanele',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SUBPANEL_TITLE' => 'Stanowisko:',
'LBL_SEARCH_FORMS' => 'Wyszukiwanie',
'LBL_STAGING_AREA' => 'Obszar roboczy (przeciągnij i upuść elementy tutaj)',
'LBL_SUGAR_FIELDS_STAGE' => 'Pola Sugar (kliknij element, aby dodać do obszaru roboczego)',
'LBL_SUGAR_BIN_STAGE' => 'Skrzynka Sugar (kliknij element, aby dodać do obszaru roboczego)',
'LBL_TOOLBOX' => 'Narzędzia',
'LBL_VIEW_SUGAR_FIELDS' => 'Podgląd pól Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Podgląd kosza Sugar',
'LBL_QUICKCREATE' => 'Szybkie tworzenie',
'LBL_EDIT_DROPDOWNS' => 'Edytuj globalną listę rozwijalną',
'LBL_ADD_DROPDOWN' => 'Dodaj nową globalną listę rozwijalną',
'LBL_BLANK' => '-brak-',
'LBL_TAB_ORDER' => 'Kolejność zakładek',
'LBL_TAB_PANELS' => 'Wyświetlaj panele jako zakładki',
'LBL_TAB_PANELS_HELP' => 'Wyświetlaj panele jako jako odzielne zakładki zamiast umieszczenia ich na jednym ekranie',
'LBL_TABDEF_TYPE' => 'Wyświetl typ',
'LBL_TABDEF_TYPE_HELP' => 'Wybierz sposób w jaki powinna być wyświetlana ta część. Ta opcja zadziała jeśli zakładki są w tym widoku włączone.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Zakładka',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Zaznacz &#39;Panel&#39;, aby ten panel był wyświetlany w widoku. Zaznacz &#39;Zakładka&#39;, aby ten panel był wyświetlany w osobnej zakładce widoku. Jeśli dla panelu określona jest zakładka, kolejne panele zaznaczone do wyświetlania jako &#39;Panel&#39; zostaną wyświetlone w zakładce.<br />Nowa zakładka zostanie utworzona dla następnego panelu, dla którego zostanie wybrana zakładka. Jeśli zakładka zostanie wybrana dla panelu poniżej pierwszego panelu, to pierwszy panel będzie zakładką.',
'LBL_TABDEF_COLLAPSE' => 'Zwiń',
'LBL_TABDEF_COLLAPSE_HELP' => 'Wybierz, aby ten panel był domyślnie zwinięty.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nazwa',
'LBL_DROPDOWN_LANGUAGE' => 'Język',
'LBL_DROPDOWN_ITEMS' => 'Lista elementów',
'LBL_DROPDOWN_ITEM_NAME' => 'Nazwa elementu',
'LBL_DROPDOWN_ITEM_LABEL' => 'Wyświetlana etykieta',
'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizuj z widokiem szczegółowym',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Wybierz tę opcję, aby zsynchronizować widok edycji z odpowiadającym mu widokiem szczegółowym. Pola i ich położenie z widoku edycji <br>zostaną automatycznie zsynchronizowane z widokiem szczegółowym po kliknięciu Zapisz lub Zapisz i Zamieść w widoku edycji.<br>Zmiany w widoku szczegółowym nie będą możliwe.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Ten widok szczegółowy zostanie zsynchronizowany z odpowiadającym mu widokiem edycji.<br> Pola i ich położenie z widoku szczegółowego odpowiadają polom i ich położeniu z powiązanego widoku edycji.<br> Zmiany w widoku szczegółowym nie mogą zostać zapisane lub zmieszczone w ramach tej strony. Dokonaj zmian w widoku edycji lub wyłącz synchronizację.',
'LBL_COPY_FROM_EDITVIEW' => 'Kopiuj z widoku edycji',
'LBL_DROPDOWN_BLANK_WARNING' => 'Wartości są wymagane zarówno dla wartości elementu oraz etykiety wyświetlanej. W celu dodania pustej wartości kliknij Dodaj bez podawania żadnych wartości dla elementu oraz jego etykiety.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Klucz znajduje się już na liście',
'LBL_NO_SAVE_ACTION' => 'Nie można zapisać tego widoku.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: źle sformułowany dokument',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Wskazuje pole mieszane. Pole mieszane to zbiór pojedynczych pól. Na przykład pole "Adres" to pole mieszane, które zawiera pola "Ulica", "Kod pocztowy", "Miasto", "Województwo" oraz "Kraj".><br><br>Kliknij podwójnie w pole mieszane, aby zobaczyć jakie pola zawiera.',
'LBL_COMBO_FIELD_CONTAINS' => 'zawiera:',

'LBL_WIRELESSLAYOUTS'=>'Mobilne widoki',
'LBL_WIRELESSEDITVIEW'=>'Mobilny widok edycji',
'LBL_WIRELESSDETAILVIEW'=>'Mobilny widok szczegółowy',
'LBL_WIRELESSLISTVIEW'=>'Mobilny widok listy',
'LBL_WIRELESSSEARCH'=>'Mobilne wyszukiwanie',

'LBL_BTN_ADD_DEPENDENCY'=>'Dodaj zależność',
'LBL_BTN_EDIT_FORMULA'=>'Edytuj formułę',
'LBL_DEPENDENCY' => 'Zależność',
'LBL_DEPENDANT' => 'Zależny',
'LBL_CALCULATED' => 'Uzupełniane automatycznie',
'LBL_READ_ONLY' => 'Tylko do odczytu',
'LBL_FORMULA_BUILDER' => 'Kreator formuły',
'LBL_FORMULA_INVALID' => 'Nieprawidłowa formuła',
'LBL_FORMULA_TYPE' => 'Formuła musi być typu',
'LBL_NO_FIELDS' => 'Nie znaleziono pól',
'LBL_NO_FUNCS' => 'Nie znaleziono funkcji',
'LBL_SEARCH_FUNCS' => 'Wyszukiwanie funkcji...',
'LBL_SEARCH_FIELDS' => 'Wyszukiwanie pól...',
'LBL_FORMULA' => 'Formuła',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Zależny',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Przeciągnij i upuść z listy po lewej z dostępnych opcji w liście zależnej do listy po prawej, aby udostępnić te opcje w przypadku gdy została wybrana opcja wartości nadrzędnych. Jeżeli żaden element nie został dodany do wartości nadrzędnych, lista zależna nie będzie wyświetlana.',
'LBL_AVAILABLE_OPTIONS' => 'Dostępne opcje',
'LBL_PARENT_DROPDOWN' => 'Lista wartości nadrzędnych',
'LBL_VISIBILITY_EDITOR' => 'Edytor widoczności',
'LBL_ROLLUP' => 'Łączna',
'LBL_RELATED_FIELD' => 'Pole powiązane',
'LBL_CONFIG_PORTAL_URL'=>'URL własnego obrazu loga. Zalecane wymiary loga to 163 x 18 pikseli.',
'LBL_PORTAL_ROLE_DESC' => 'Nie usuwaj tej roli. Rola Samoobsługi Klienta portalu jest rolą generowaną przez system podczas procesu aktywacji portalu Sugar. Użyj kontroli dostępu w tej roli, aby włączyć i/lub wyłączyć Błędy, Zgłoszenia lub Bazę wiedzy w portalu Sugar. Nie modyfikuj innych kontroli dostępu dla tej roli, aby uniknąć nieznanych i nieprzewidzianych zachowań systemu. W razie przypadkowego usunięcia tej roli, odtwórz ją poprzez wyłącznie i włącznie portalu Sugar.',

//RELATIONSHIPS
'LBL_MODULE' => 'Moduł',
'LBL_LHS_MODULE'=>'Moduł nadrzędny',
'LBL_CUSTOM_RELATIONSHIPS' => '* relacje utworzone w Studio lub Kreatorze Modułów',
'LBL_RELATIONSHIPS'=>'Relacje',
'LBL_RELATIONSHIP_EDIT' => 'Edytuj relacje',
'LBL_REL_NAME' => 'Nazwa',
'LBL_REL_LABEL' => 'Etykieta',
'LBL_REL_TYPE' => 'Typ',
'LBL_RHS_MODULE'=>'Moduł powiązany',
'LBL_NO_RELS' => 'Brak relacje',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Warunki optymalne' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolumna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Wartość',
'LBL_SUBPANEL_FROM'=>'Subpanel z',
'LBL_RELATIONSHIP_ONLY'=>'Nie zostaną utworzone żadne widoczne elementy dla tej relacje jeśli są już istniejące widoczne relacje dla tych dwóch modułów.',
'LBL_ONETOONE' => 'Jeden do jednego',
'LBL_ONETOMANY' => 'Jeden do wielu',
'LBL_MANYTOONE' => 'Wiele do jednego',
'LBL_MANYTOMANY' => 'Wiele do wielu',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Wybierz funkcję lub komponent.',
'LBL_QUESTION_MODULE1' => 'Wybierz moduł.',
'LBL_QUESTION_EDIT' => 'Wybierz moduł do edycji.',
'LBL_QUESTION_LAYOUT' => 'Wybierz widok do edycji.',
'LBL_QUESTION_SUBPANEL' => 'Wybierz subpanel do edycji.',
'LBL_QUESTION_SEARCH' => 'Wybierz widok wyszukiwania do edycji.',
'LBL_QUESTION_MODULE' => 'Wybierz element modułu do edycji.',
'LBL_QUESTION_PACKAGE' => 'Wybierz pakiet do edycji lub utwórz nowy.',
'LBL_QUESTION_EDITOR' => 'Wybierz narzędzie.',
'LBL_QUESTION_DROPDOWN' => 'Wybierz listę rozwijalną, aby edytować lub utworzyć nową listę.',
'LBL_QUESTION_DASHLET' => 'Wybierz widok dashletu do edycji.',
'LBL_QUESTION_POPUP' => 'Wybierz widok okienka Popup do edycji',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Powiązany z',
'LBL_NAME'=>'Nazwa',
'LBL_LABELS'=>'Etykiety',
'LBL_MASS_UPDATE'=>'Masowa aktualizacja',
'LBL_AUDITED'=>'Historia zmian',
'LBL_CUSTOM_MODULE'=>'Moduł',
'LBL_DEFAULT_VALUE'=>'Wartość domyślna',
'LBL_REQUIRED'=>'Wymagane',
'LBL_DATA_TYPE'=>'Typ',
'LBL_HCUSTOM'=>'WŁASNY',
'LBL_HDEFAULT'=>'DOMYŚLNY',
'LBL_LANGUAGE'=>'Język:',
'LBL_CUSTOM_FIELDS' => '* pole utworzone w Studio lub Kreatorze Modułów',

//SECTION
'LBL_SECTION_EDLABELS' => 'Edytuj etykiety',
'LBL_SECTION_PACKAGES' => 'Pakiety',
'LBL_SECTION_PACKAGE' => 'Pakiet',
'LBL_SECTION_MODULES' => 'Moduły',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Listy rozwijalne',
'LBL_SECTION_PROPERTIES' => 'Właściwości',
'LBL_SECTION_DROPDOWNED' => 'Edytuj listy rozwijalne',
'LBL_SECTION_HELP' => 'Pomoc',
'LBL_SECTION_ACTION' => 'Akcja',
'LBL_SECTION_MAIN' => 'Główny',
'LBL_SECTION_EDPANELLABEL' => 'Edytuj etykiety paneli',
'LBL_SECTION_FIELDEDITOR' => 'Edytor pól',
'LBL_SECTION_DEPLOY' => 'Zamieszczanie',
'LBL_SECTION_MODULE' => 'Moduł',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Edytuj widoczność',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Domyślne',
'LBL_HIDDEN'=>'Ukryte',
'LBL_AVAILABLE'=>'Dostępne',
'LBL_LISTVIEW_DESCRIPTION'=>'Poniżej są wyświetlone trzy kolumy; Kolumna <b>Domyślne</b> zawiera pola, które są wyświetlone standardowo w liście. Kolumna <b>Dodatkowe</b> zawiera pola, których Użytkownik może użyć podczas tworzenia własnego widoku listy.  Kolumna <b>Dostępne</b> wyświetla pola, które są dostępne dla Ciebie, jako administratora, a które możesz dodać do dostępnych dla Użytkowników.',
'LBL_LISTVIEW_EDIT'=>'Edytor widoku listy',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Podgląd',
'LBL_MB_RESTORE'=>'Przywróć',
'LBL_MB_DELETE'=>'Usuń',
'LBL_MB_COMPARE'=>'Porównaj',
'LBL_MB_DEFAULT_LAYOUT'=>'Widoku domyślny',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Dodaj [Alt+C]',
'LBL_BTN_SAVE'=>'Zapisz',
'LBL_BTN_SAVE_CHANGES'=>'Zapisz zmiany',
'LBL_BTN_DONT_SAVE'=>'Porzuć zmiany',
'LBL_BTN_CANCEL'=>'Anuluj',
'LBL_BTN_CLOSE'=>'Zamknij',
'LBL_BTN_SAVEPUBLISH'=>'Zapisz i publikuj',
'LBL_BTN_NEXT'=>'Dalej',
'LBL_BTN_BACK'=>'Wróć',
'LBL_BTN_CLONE'=>'Duplikuj',
'LBL_BTN_ADDCOLS'=>'Dodaj kolumny',
'LBL_BTN_ADDROWS'=>'Dodaj wiersze',
'LBL_BTN_ADDFIELD'=>'Dodaj pole',
'LBL_BTN_ADDDROPDOWN'=>'Dodaj listę rozwijalną',
'LBL_BTN_SORT_ASCENDING'=>'Sortuj rosnąco',
'LBL_BTN_SORT_DESCENDING'=>'Sortuj malejąco',
'LBL_BTN_EDLABELS'=>'Edytuj etykiety',
'LBL_BTN_UNDO'=>'Cofnij',
'LBL_BTN_REDO'=>'Przywróć',
'LBL_BTN_ADDCUSTOMFIELD'=>'Dodaj własne pole',
'LBL_BTN_EXPORT'=>'Eksportuj dostosowania',
'LBL_BTN_DUPLICATE'=>'Duplikuj',
'LBL_BTN_PUBLISH'=>'Publikuj',
'LBL_BTN_DEPLOY'=>'Zamieszczanie',
'LBL_BTN_EXP'=>'Eksport',
'LBL_BTN_DELETE'=>'Usuń',
'LBL_BTN_VIEW_LAYOUTS'=>'Zobacz widoki',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Zobacz mobilne widoki',
'LBL_BTN_VIEW_FIELDS'=>'Zobacz pola',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Pokaż relacje',
'LBL_BTN_ADD_RELATIONSHIP'=>'Dodaj relacje',
'LBL_BTN_RENAME_MODULE' => 'Zmień nazwę modułu',
'LBL_BTN_INSERT'=>'Wstaw',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Błąd: Pole już istnieje',
'ERROR_INVALID_KEY_VALUE'=> "Błąd: Nieprawidłowa wartość klucza: [&#39;]",
'ERROR_NO_HISTORY' => 'Nie odnaleziono plików historii',
'ERROR_MINIMUM_FIELDS' => 'Widok musi zawierać co najmniej jedno pole',
'ERROR_GENERIC_TITLE' => 'Pojawił się błąd',
'ERROR_REQUIRED_FIELDS' => 'Czy na pewno chcesz kontynuować? W widoku brakuje wymaganych pól:',
'ERROR_ARE_YOU_SURE' => 'Czy na pewno chcesz kontynuować?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Następujące pola posiadają kalkulowane wartości, które nie będą ponownie kalkulowane w czasie rzeczywistym w widoku edycji SugarCRM Mobile:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Następujące pola posiadają kalkulowane wartości, które nie będą ponownie kalkulowane w czasie rzeczywistym w widoku edycji Portalu SugarCRM:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Następujące moduły są wyłączone:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Jeśli chcesz je włączyć, możesz to zrobić <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">tutaj</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Konfiguracja portalu',
    'LBL_PORTAL_THEME' => 'Motyw portalu',
    'LBL_PORTAL_ENABLE' => 'Włącz',
    'LBL_PORTAL_SITE_URL' => 'Strona Twojego portalu jest dostępna tutaj:',
    'LBL_PORTAL_APP_NAME' => 'Nazwa aplikacji',
    'LBL_PORTAL_LOGO_URL' => 'URL loga',
    'LBL_PORTAL_LIST_NUMBER' => 'Liczba rekordów do wyświetlania na liście',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Liczba pól do wyświetlania w widoku szczegółowym',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Liczba wyników do wyświetlania w wyszukiwaniu globalnym',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Ustawienia domyślne przypisane dla nowozarejestrowanych w portalu',
'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Widoki Portalu',
'LBL_SYNCP_WELCOME'=>'Wprowadź URL instancji portalu, którą chcesz zaktualizować.',
'LBL_SP_UPLOADSTYLE'=>'Wybierz arkusz stylów do załadowania z Twojego komputera.<br> Arkusz stylów zostanie wprowadzony do Portalu Sugar przy następnej synchronizacji.',
'LBL_SP_UPLOADED'=> 'Załadowano',
'ERROR_SP_UPLOADED'=>'Upewnij się, że dodawany jest arkusz stylów css.',
'LBL_SP_PREVIEW'=>'Oto podgląd jak będzie wyglądał Portal Sugar po wprowadzeniu arkuszu stylów.',
'LBL_PORTALSITE'=>'Adres URL Portalu Sugar:',
'LBL_PORTAL_GO'=>'Idź',
'LBL_UP_STYLE_SHEET'=>'Załaduj arkusz stylów',
'LBL_QUESTION_SUGAR_PORTAL' => 'Wybierz widok Portalu Sugar do edycji.',
'LBL_QUESTION_PORTAL' => 'Wybierz widok portalu do edycji.',
'LBL_SUGAR_PORTAL'=>'Edytor portalu Sugar',
'LBL_USER_SELECT' => '-- Wybierz --',

//PORTAL PREVIEW
'LBL_CASES'=>'Zgłoszenia',
'LBL_NEWSLETTERS'=>'Newslettery',
'LBL_BUG_TRACKER'=>'Śledzenie błędów',
'LBL_MY_ACCOUNT'=>'Moje konto',
'LBL_LOGOUT'=>'Wyloguj',
'LBL_CREATE_NEW'=>'Utwórz nowy',
'LBL_LOW'=>'Niski',
'LBL_MEDIUM'=>'Średni',
'LBL_HIGH'=>'Wysoki',
'LBL_NUMBER'=>'Numer:',
'LBL_PRIORITY'=>'Priorytet:',
'LBL_SUBJECT'=>'Temat',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nazwa pakietu:',
'LBL_MODULE_NAME'=>'Nazwa modułu:',
'LBL_MODULE_NAME_SINGULAR' => 'Nazwa modułu (l. pojedyncza):',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Opis',
'LBL_KEY'=>'Klucz:',
'LBL_ADD_README'=>'Readme',
'LBL_MODULES'=>'Moduły:',
'LBL_LAST_MODIFIED'=>'Ostatnio zmodyfikowany:',
'LBL_NEW_MODULE'=>'Nowy moduł',
'LBL_LABEL'=>'Liczba mnoga',
'LBL_LABEL_TITLE'=>'Etykieta',
'LBL_SINGULAR_LABEL' => 'Liczba pojedyncza',
'LBL_WIDTH'=>'Szerokość',
'LBL_PACKAGE'=>'Pakiet:',
'LBL_TYPE'=>'Typ:',
'LBL_TEAM_SECURITY'=>'Zabezpieczenia zespołu',
'LBL_ASSIGNABLE'=>'Możliwy do przydzielenia',
'LBL_PERSON'=>'Osoba',
'LBL_COMPANY'=>'Firma',
'LBL_ISSUE'=>'Zgłoszenie',
'LBL_SALE'=>'Sprzedaż',
'LBL_FILE'=>'Plik',
'LBL_NAV_TAB'=>'Zakładka nawigacyjna',
'LBL_CREATE'=>'Utwórz',
'LBL_LIST'=>'Cena katalogowa',
'LBL_VIEW'=>'Widok',
'LBL_LIST_VIEW'=>'Widok listy',
'LBL_HISTORY'=>'Historia',
'LBL_RESTORE_DEFAULT'=>'Przywróć domyślne',
'LBL_ACTIVITIES'=>'Wydarzenia',
'LBL_SEARCH'=>'Wyszukiwanie',
'LBL_NEW'=>'Nowy',
'LBL_TYPE_BASIC'=>'podstawowy',
'LBL_TYPE_COMPANY'=>'firma',
'LBL_TYPE_PERSON'=>'osoba',
'LBL_TYPE_ISSUE'=>'zagadnienie',
'LBL_TYPE_SALE'=>'sprzedaż',
'LBL_TYPE_FILE'=>'plik',
'LBL_RSUB'=>'To jest subpanel, który będzie wyświetlany w Twoim module',
'LBL_MSUB'=>'To jest subpanel, który jest powiązany z Twoim modułem.',
'LBL_MB_IMPORTABLE'=>'Importowanie',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'widoczny',
'LBL_VE_HIDDEN'=>'ukryty',
'LBL_PACKAGE_WAS_DELETED'=>'[[pakiet]] został usunięty',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Eksportuj dostosowania',
'LBL_EC_NAME'=>'Nazwa pakietu:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Opis',
'LBL_EC_KEY'=>'Klucz:',
'LBL_EC_CHECKERROR'=>'Wybierz moduł.',
'LBL_EC_CUSTOMFIELD'=>'pole dostosowane',
'LBL_EC_CUSTOMLAYOUT'=>'widok dostosowany',
'LBL_EC_CUSTOMDROPDOWN' => 'własne listy rozwijalne',
'LBL_EC_NOCUSTOM'=>'Żaden moduł nie został dostosowany.',
'LBL_EC_EXPORTBTN'=>'Eksport',
'LBL_MODULE_DEPLOYED' => 'Moduł został zamieszczony.',
'LBL_UNDEFINED' => 'niezidentyfikowany',
'LBL_EC_CUSTOMLABEL'=>'spersonalizowana etykieta',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Nie można przywrócić danych',
'LBL_AJAX_TIME_DEPENDENT' => 'Operacja, której wykonanie może zająć nieco czasu właśnie trwa. Poczekaj i spróbuj za chwilę',
'LBL_AJAX_LOADING' => 'Ładowanie...',
'LBL_AJAX_DELETING' => 'Usuwanie...',
'LBL_AJAX_BUILDPROGRESS' => 'Budowanie...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Zamieszczanie...',
'LBL_AJAX_FIELD_EXISTS' =>'Istnieje już pole o podanej nazwie. Proszę wprowadzić nową nazwę pole.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Czy na pewno chcesz usunąć ten pakiet? Spowoduje to trwałe usunięcie wszystkich plików skojarzonych z tym pakietem.',
'LBL_JS_REMOVE_MODULE' => 'Czy na pewno chcesz usunąć ten moduł? Ta operacja spowoduje trwałe usunięcie plików powiązanych z tym modułem.',
'LBL_JS_DEPLOY_PACKAGE' => 'Wszystkie dostosowania wykonane w Studio zostaną nadpisane w przypadku gdy ten moduł zostanie ponownie zamieszczony. Czy na pewno chcesz kontynuować?',

'LBL_DEPLOY_IN_PROGRESS' => 'Zamieszczanie pakietu',
'LBL_JS_VALIDATE_NAME'=>'Nazwa - musi składać się ze znaków alfanumerycznych, bez spacji i rozpoczynać się od litery',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Nazwa paczki już istnieje',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Klucz - musi być alfanumeryczny i zaczynać się literą.',
'LBL_JS_VALIDATE_KEY'=>'Klucz - musi składać się ze znaków alfanumerycznych, bez spacji i rozpoczynać się od litery',
'LBL_JS_VALIDATE_LABEL'=>'Wprowadź etykiete, która będzie użyta jako nazwa tego modułu',
'LBL_JS_VALIDATE_TYPE'=>'Wybierz z listy rozwijalnej typ modułu, który chcesz zbudować',
'LBL_JS_VALIDATE_REL_NAME'=>'Nazwa - musi składać się ze znaków alfanumerycznych, bez spacji',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etykieta - wpisz etykietę, która będzie wyświetlana ponad subpanelem',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Czy na pewno chcesz usunąć ten wymagany element listy rozwijalnej? Usunięcie go może wpłynąć na funkcjonalność Twojej aplikacji.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Czy na pewno chcesz usunąć ten element listy rozwijalnej? Usunięcie etapów Zakończone sukcesem lub Zakończone porażką spowoduje nieprawidłowe działanie modułu Prognozy.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Czy na pewno chcesz usunąć etap Zakończone sukcesem? Usunięcie tego etapu spowoduje nieprawidłowe działanie modułu Prognozy.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Czy na pewno chcesz usunąć etap Zakończone porażką? Usunięcie tego etapu spowoduje nieprawidłowe działanie modułu Prognozy.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Po zaakceptowaniu relacja zostanie dodana do instancji i nie będzie możliwości jej usunięcia. Czy na pewno chcesz zamieścić tę relację?',
'LBL_CONFIRM_DONT_SAVE' => 'Od ostatniego zapisu zostały wprowadzone zmiany. Czy chcesz zapisać je teraz?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Czy na pewno chcesz zachować zmiany?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Dane mogą zostać ucięte i nie będzie można cofnąć tej operacji. Czy na pewno chcesz kontynuować?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Wybierz odpowiedni typ danych bazując na typie danych, które będą gromadzone w poszczególnych polach.',
'LBL_POPHELP_SEARCHABLE'=>'Wybierz  wagę wyszukiwania dla tego pola. <br />Pola o wyższej wadze wyszukiwania zostaną oznaczone podczas wyszukiwania jako te o większej wadze. <br />Podczas wyszukiwania, pasujące rekordy zawierające pola o większej wadze pojawią się na liście wyników na wyższych pozycjach. <br />Jeżeli zmienisz wagę wyszukiwania dla pola z jednego poziomu na drugi, wykonaj indeksowanie aby wprowadzić zmianę. <br/>Upewnij się, że zostaną zaznaczone do usunięcia podczas indeksowania systemu istniejące dane.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Tak</b>: Pole będzie zawarte w imporcie.<br><b>Nie</b>: Pole nie będzie zawarte w imporcie.<br><b>Wymagane</b>: Wartość pola musi być wypełniona w każdym imporcie.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Wprowadź szerokość w pikselach. <br> Załadowany obrazek zostanie wyskalowany do takiej szerokości.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Wprowadź wysokość w pikselach. <br> Załadowany obrazek zostanie wyskalowany do takiej wysokości.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
'LBL_RESET' => 'Wyczyść',
'LBL_RESET_MODULE' => 'Przywróć moduł',
'LBL_REMOVE_CUSTOM' => 'Usuń dostosowania',
'LBL_CLEAR_RELATIONSHIPS' => 'Usuń relacje',
'LBL_RESET_LABELS' => 'Przywróć etykiety',
'LBL_RESET_LAYOUTS' => 'Przywróć widoki',
'LBL_REMOVE_FIELDS' => 'Usuń własne pola',
'LBL_CLEAR_EXTENSIONS' => 'Usuń rozszerzenia',

'LBL_HISTORY_TIMESTAMP' => 'Znacznik czasu',
'LBL_HISTORY_TITLE' => 'historia',

'fieldTypes' => array(
                'varchar'=>'Ciąg znaków',
                'int'=>'Liczba całkowita',
                'float'=>'Liczba zmiennoprzecinkowa',
                'bool'=>'Checkbox',
                'enum'=>'Lista rozwijalna',
                'multienum' => 'Lista wielokrotnego wyboru',
                'date'=>'Data',
                'phone' => 'Telefon',
                'currency' => 'Waluta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Pole powiązane',
                'address' => 'Adres',
                'text' => 'Pole tekstowe',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Obraz',
                'encrypt'=>'Kodowanie',
                'datetimecombo' =>'Data i czas',
                'decimal'=>'Dziesiętne',
),
'labelTypes' => array(
    "" => "Często używane etykiety",
    "all" => "Wszystkie etykiety",
),

'parent' => 'Relacja elastyczna',

'LBL_ILLEGAL_FIELD_VALUE' =>"Klucz listy rozwijalnej nie moża zawierać cytatów.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Zaznaczyłeś do usunięcia element listy rozwijalnej. Element ten nie będzie dalej wyświetlany na liście. Czy na pewno chcesz kontynuować?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (powiązane {1} ID)',
);
