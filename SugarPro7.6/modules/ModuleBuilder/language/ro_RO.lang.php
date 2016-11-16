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
    'LBL_LOADING' => 'Incarcare...Va rugam asteptati' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ascunde optiuni' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sterge' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Creat de SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Furnizaţi un Nume pentru pachetul. Numele pe care îl introduceţi trebuie să fie alfanumeric şi nu conţina spaţii. (Exemplu: HR_Management)<br /><br />Puteţi furniza informaţii Autor şi Descriere pentru pachet.<br /><br />Faceţi clic pe Salvare pentru a crea pachet.',
            'modify'=>'Proprietăţile şi acţiunile posibile pentru pachet apar aici.<br /><br />Puteţi modifica Numele, Autorul  şi Descrierea pachetului, precum şi  vizualiza şi personaliza toate modulele conţinute în pachet.<br /><br />Faceţi clic pe New Modulul pentru a crea un modul pentru acest pachet.<br /><br />Dacă pachetul conţine cel puţin un modul, aveţi posibilitatea să publicaţi şi Implementaţi pachet, precum şi Exporta personalizările făcute în pachet.',
            'name'=>'Specifica Nume',
            'author'=>'autor<br /><br />Aceasta este autorul care este afişat în timpul instalării ca numele entităţii care a creat pachetul.<br /><br />Autorul ar putea fi un individ sau o companie.',
            'description'=>'Acest şablon este folosit pentru a trimite utilizatorului un link să faceţi clic pentru a reseta parola pentru contul de utilizator.',
            'publishbtn'=>'publishbtn<br />Faceţi clic pe Publicare pentru a salva toate datele introduse şi pentru a crea un fişier zip care este o versiune a pachetului instalabil..<br /><br />Utilizaţi Modulul Loader pentru a încărca fişierul. zip şi instala pachetul.',
            'deploybtn'=>'implementati  BTN<br />Faceţi clic pe Implementaţi pentru a salva toate datele introduse şi să instaleze pachetul, inclusiv toate modulele, în instanţă curenta.',
            'duplicatebtn'=>'duplicatebtn<br /><br />Faceţi clic pe Duplicare pentru a copia conţinutul pachetului într-un pachet nou şi pentru a afişa noul pachet.<br /><br />Pentru noul pachet, un nou nume va fi generate automat prin adăugarea unui număr la sfârşitul numelui de pachetul folosit pentru a crea unul nou. Aveţi posibilitatea să redenumiţi noul pachet prin introducerea unui nume nou şi faceţi clic pe Salvare.',
            'exportbtn'=>'exportbtn<br />Faceţi clic pe Export pentru a crea un fişier zip care conţine personalizările făcute în pachet..<br /><br />Fişierul generat nu este o versiune a pachetului instalabil.<br /><br />Utilizaţi Modulul Loader pentru a importa fişierul zip şi. să aibă pachetul, inclusiv personalizările, a în Modulul Builder.',
            'deletebtn'=>'Clic Sterge pt a sterge acest modul',
            'savebtn'=>'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
            'existing_module'=>'Faceţi clic pe pictograma Modulul pentru a edita proprietăţile şi personaliza câmpurile, relaţiile şi aspecte asociate cu modulul.',
            'new_module'=>'Faceţi clic pe Modul Nou pentru a crea un nou modul pentru acest pachet.',
            'key'=>'Acest 5 litere, alfanumerice Key vor fi folosite pentru a prefixa toate directoarele, nume de clase şi tabele de baze de date pentru toate modulele în pachetul actual.<br /><br />Cheia este utilizata într-un efort de a obţine  unicitatea numelui tabelului.',
            'readme'=>'Clic pentru a adăuga txt Readme pentru acest pachet.<br />Readme va fi disponibila la momentul instalării.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Furnizaţi un Nume pentru pachetul. Numele pe care îl introduceţi trebuie să fie alfanumeric şi nu conţina spaţii. (Exemplu: HR_Management)<br /><br />Puteţi furniza informaţii Autor şi Descriere pentru pachet.<br /><br />Faceţi clic pe Salvare pentru a crea pachet.',
        'modify'=>'Proprietăţile şi acţiunile posibile pentru pachet apar aici.<br /><br />Puteţi modifica Numele, Autorul  şi Descrierea pachetului, precum şi  vizualiza şi personaliza toate modulele conţinute în pachet.<br /><br />Faceţi clic pe New Modulul pentru a crea un modul pentru acest pachet.<br /><br />Dacă pachetul conţine cel puţin un modul, aveţi posibilitatea să publicaţi şi Implementaţi pachet, precum şi Exporta personalizările făcute în pachet.',
        'importable'=>'Verificati caseta de selectare, Importable va permite importul pentru acest modul.<br /><br />Un link către Expertul Import va apărea în panoul Comenzi rapide în modul. Expertul Import facilitează importul de date din surse externe în modul personalizat.',
        'team_security'=>'Verificati Team Security, caseta de selectare va permite echipei de securitate acest modul<br />În cazul în care echipa de securitate este activată, câmpul de selecţie Echipa va apărea în înregistrările din modul.',
        'reportable'=>'Verificarea acestei casete va permite acest modul de a avea rapoarte  împotriva ei.',
        'assignable'=>'Verificarea acestei casete va permite o înregistrare în acest modul pentru a fi atribuite la un utilizator selectat.',
        'has_tab'=>'Verificarea Tab de navigare va oferi o filă de navigare pentru modul',
        'acl'=>'Verificarea acestei casete va permite efectuarea de controale de acces la acest modul, inclusiv securitate la nivel de câmp.',
        'studio'=>'Verificarea acestei casete va permite administratorilor să personalizeze acest modul în cadrul Studio.',
        'audit'=>'Verificarea această casetă va permite Audit pentru acest modul. Modificările aduse anumite domenii vor fi înregistrate astfel încât administratorii pot revizui istoria schimbărilor.',
        'viewfieldsbtn'=>'Faceți clic pe Vizualizare Domenii pentru a vedea câmpurile asociate cu modulul și pentru a crea și edita câmpuri personalizate.',
        'viewrelsbtn'=>'Faceți clic pe Vizualizare Relații pentru a vedea relațiile asociate cu acest modul și pentru a crea noi relatii.',
        'viewlayoutsbtn'=>'Faceți clic pe Vizualizare Layouts pentru a vedea aspectele de modul și de a personaliza dispunerea domeniului în aspecte',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'duplicatebtn<br /><br />Faceţi clic pe Duplicare pentru a copia conţinutul pachetului într-un pachet nou şi pentru a afişa noul pachet.<br /><br />Pentru noul pachet, un nou nume va fi generate automat prin adăugarea unui număr la sfârşitul numelui de pachetul folosit pentru a crea unul nou. Aveţi posibilitatea să redenumiţi noul pachet prin introducerea unui nume nou şi faceţi clic pe Salvare.',
        'deletebtn'=>'Clic Sterge pt a sterge acest modul',
        'name'=>'Specifica Nume',
        'label'=>'Aceasta este eticheta care va apărea în fila de navigare pentru modulul.',
        'savebtn'=>'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
        'type_basic'=>'Tipul de șablon de bază prevede domenii de bază, cum ar fi Nume, atribuite, pe echipe, data crearii si campuri Descriere.',
        'type_company'=>'The <b>Company</b> template type provides organization-specific fields, such as Company Name, Industry and Billing Address.<br/><br/>Use this template to create modules that are similar to the standard Accounts module.',
        'type_issue'=>'The <b>Issue</b> template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br/><br/>Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.',
        'type_person'=>'The <b>Person</b> template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br/><br/>Use this template to create modules that are similar to the standard Contacts and Leads modules.',
        'type_sale'=>'The <b>Sale</b> template type provides opportunity specific fields, such as Lead Source, Stage, Amount and Probability. <br/><br/>Use this template to create modules that are similar to the standard Opportunities module.',
        'type_file'=>'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br><br>Use this template to create modules that are similar to the standard Documents module.',

    ),
    'dropdowns'=>array(
        'default' => 'Initial',
        'editdropdown'=>'Dropdown lists can be used for standard or custom dropdown fields in any module.<br><br>Provide a <b>Name</b> for the dropdown list.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the list items.<br><br>In the <b>Item Name</b> field, provide a name for the option in the dropdown list.  This name will not appear in the dropdown list that is visible to users.<br><br>In the <b>Display Label</b> field, provide a label that will be visible to users.<br><br>After providing the item name and display label, click <b>Add</b> to add the item to the dropdown list.<br><br>To reorder the items in the list, drag and drop items into the desired positions.<br><br>To edit the display label of an item, click the <b>Edit icon</b>, and enter a new label. To delete an item from the dropdown list, click the <b>Delete icon</b>.<br><br>To undo a change made to a display label, click <b>Undo</b>.  To redo a change that was undone, click <b>Redo</b>.<br><br>Click <b>Save</b> to save the dropdown list.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.',
        'Hidden' 	=> 'Ascuns',
        'Default'	=> 'Initial',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Ascuns',
        'Available' => 'In stoc',
        'Default'	=> 'Initial'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Ascuns',
        'Default'	=> 'Initial'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
        'Hidden' 	=> 'Ascuns',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> 'Initial'
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
        'saveBtn'	=> 'Ckic pt a salva toate modificarile',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'publishBtn'=> 'Click <b>Save & Deploy</b> to save all changes you made to the layout since the last time you saved it, and to make the changes active in the module.<br><br>The layout will immediately be displayed in the module.',
        'toolbox'	=> 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
        'panels'	=> 'Această zonă arată cum va arăta aspect pentru utilizatorii de acest modul atunci când este depolyed.<br /><br />Puteţi repoziţiona elemente, cum ar fi câmpurile, rânduri şi panouri prin glisare şi fixare a acestora; şterge elemente prin glisarea şi fixarea lor pe zona de gunoi din caseta de instrumente, sau adăuga elemente noi, trăgându-le de la set de instrumente şi fixarea acestora pe aspectul înpoziţia dorită.',
        'delete'	=> 'Drag and drop any element here to remove it from the layout',
        'property'	=> 'Edit the <b>Label</b> displayed for this field.<br><br><b>Width</b> provide a width value in pixels for Sidecar modules and as a percentage of the table width for backward compatible modules.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Initial',
        'mbDefault'=>'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
        'addField'	=> 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
        'editField' => 'The properties of this field can be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.',
        'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Personalizările făcute în Studio în acest exemplu, pot fi ambalate şi implementate într-o altă instanţă.<br /><br />Furnizaţi o numele pachetului. Puteţi furniza Autor şi informaţii de descriere pentru pachet.<br /><br />Selectaţi modul (e) care conţin personalizări de a exporta. (Numai modulele care conţin Personalizarea va apărea pentru tine de a selecta.)<br /><br />Faceţi clic pe Export pentru a crea un fişier. Zip pentru pachetul care conţine particularizări.Fişier. Zip poate fi încărcat într-un alt exemplu, prin Loade Modulul',
        'exportCustomBtn'=>'Faceţi clic pe Export pentru a crea un fişier. Zip pentru pachetul care conţine particularizări pe care doresc să exporte.',
        'name'=>'Specifica Nume',
        'author'=>'autor<br /><br />Aceasta este autorul care este afişat în timpul instalării ca numele entităţii care a creat pachetul.<br /><br />Autorul ar putea fi un individ sau o companie.',
        'description'=>'Acest şablon este folosit pentru a trimite utilizatorului un link să faceţi clic pentru a reseta parola pentru contul de utilizator.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize deployed modules.',
        'mbBtn'		=> 'Use <b>Module Builder</b> to create new modules.',
        'sugarPortalBtn' => 'Use <b>Sugar Portal Editor</b> to manage and customize the Sugar Portal.',
        'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
        'appBtn' 	=> 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'Intoarcete la pasul anterior',
        'studioHelp'=> 'Use <b>Studio</b> to determine what and how information is displayed in the modules.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Click to edit this module.',
        'moduleHelp'=> 'The components that you can customize for the module appear here.<br><br>Click an icon to select the component to edit.',
        'fieldsBtn'	=> 'Create and customize <b>Fields</b> to store information in the module.',
        'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.'	,
        'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.' ,
        'layoutsBtn'=> 'Customize the module <b>Layouts</b>.  The layouts are the different views of the module contaning fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
        'subpanelBtn'=> 'Determine which fields appear in the <b>Subpanels</b> in the module.',
        'portalBtn' =>'Customize the module <b>Layouts</b> that appear in the <b>Sugar Portal</b>.',
        'layoutsHelp'=> 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
        'subpanelHelp'=> 'The <b>Subpanels</b> in the module that can be customized appear here.<br><br>Click an icon to select the module to edit.',
        'newPackage'=>'Click <b>New Package</b> to create a new package.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create and download a package containing customizations made in Studio for specific modules.',
        'mbHelp'    => 'Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects.',
        'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
        'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
        'viewBtnDashlet' => 'Customize the module\'s <b>Sugar Dashlet</b>, including the Sugar Dashlet\'s ListView and Search.<br><br>The Sugar Dashlet will be available to add to the pages in the Home module.',
        'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
        'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
        'viewBtnQuickCreate' =>  'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',

        'searchHelp'=> 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
        'dashletHelp' =>'The <b>Sugar Dashlet</b> layouts that can be customized appear here.<br><br>The Sugar Dashlet will be available to add to the pages in the Home module.',
        'DashletListViewBtn' =>'The <b>Sugar Dashlet ListView</b> displays records based on the Sugar Dashlet search filters.',
        'DashletSearchViewBtn' =>'The <b>Sugar Dashlet Search</b> filters records for the Sugar Dashlet listview.',
        'popupHelp' =>'The <b>Popup</b> layouts that can be customized appear here.<br>',
        'PopupListViewBtn' => '<b>Popup ListView</b> layout is used to view a list of records when selecting one or more records to relate to the current record.',
        'PopupSearchViewBtn' => '<b>Popup Search</b> layout allows users to search for records to relate to a current record and appears above the popup listview in the same window. Legacy modules use this layout for popup searching while Sidecar modules use the Search layout’s configuration.',
        'BasicSearchBtn' => 'Customize the <b>Basic Search</b> form that appears in the Basic Search tab in the Search area for the module.',
        'AdvancedSearchBtn' => 'Customize the <b>Advanced Search</b> form that appears in the Advanced Search tab in the Search area for the module.',
        'portalHelp' => 'Manage and customize the <b>Sugar Portal</b>.',
        'SPUploadCSS' => 'Upload a <b>Style Sheet</b> for the Sugar Portal.',
        'SPSync' => '<b>Sync</b> customizations to the Sugar Portal instance.',
        'Layouts' => 'Customize the <b>Layouts</b> of the Sugar Portal modules.',
        'portalLayoutHelp' => 'The modules within the Sugar Portal appear in this area.<br><br>Select a module to edit the <b>Layouts</b>.',
        'relationshipsHelp' => 'All of the <b>Relationships</b> that exist between the module and other deployed modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships.  For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.<br><br>Relationships can be created between any two deployed modules.',
        'relationshipHelp'=>'<b>Relationships</b> can be created between the module and another deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
        'convertLeadHelp' => "Here you can add modules to the convert layout screen and modify the settings of existing ones.<br/><br/>
        <b>Ordering:</b><br/>
        Contacts, Accounts, and Opportunities must maintain their order. You can re-order any other module by dragging its row in the table.<br/><br/>
        <b>Dependency:</b><br/>
        If Opportunities is included, Accounts must either be required or removed from the convert layout.<br/><br/>
        <b>Module:</b> The name of the module.<br/><br/>
        <b>Required:</b> Required modules must be created or selected before the lead can be converted.<br/><br/>
        <b>Copy Data:</b> If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br/><br/>
        <b>Delete:</b> Remove this module from the convert layout.<br/><br/>
        ",
        'editDropDownBtn' => 'Edit a global Dropdown',
        'addDropDownBtn' => 'Add a new global Dropdown',
    ),
    'fieldsHelp'=>array(
        'default'=>'Initial',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Initial',
        'addrelbtn'=>'mouse over help for add relationship..',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Initial',
        'saveBtn'=>'Ckic pt a salva toate modificarile',
        'publishBtn'=>'Click <b>Save & Deploy</b> to save all changes and make them active.',
    ),
    'portalSync'=>array(
        'default' => 'Initial',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Initial',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/><br/>Each package can contain one or more modules.<br/><br/>For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br><br>When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
            'afterSave'=>'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your Sugar instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your Sugar instance.  <br/><br/>You can distribute the file to other users to upload and install within their own Sugar instances.',
            'create'=>'Furnizaţi un Nume pentru pachetul. Numele pe care îl introduceţi trebuie să fie alfanumeric şi nu conţina spaţii. (Exemplu: HR_Management)<br /><br />Puteţi furniza informaţii Autor şi Descriere pentru pachet.<br /><br />Faceţi clic pe Salvare pentru a crea pachet.',
            ),
    'main'=>array(
        'welcome'=>'Use the <b>Developer Tools</b> to create and manage standard and custom modules and fields. <br/><br/>To manage modules in the application, click <b>Studio</b>. <br/><br/>To create custom modules, click <b>Module Builder</b>.',
        'studioWelcome'=>'All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your Sugar instance or <b>Publish</b> the package to be installed in the current Sugar instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your Sugar instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current Sugar instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes." ,
        'editView'=> 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
        'create'=>'Furnizaţi un Nume pentru pachetul. Numele pe care îl introduceţi trebuie să fie alfanumeric şi nu conţina spaţii. (Exemplu: HR_Management)<br /><br />Puteţi furniza informaţii Autor şi Descriere pentru pachet.<br /><br />Faceţi clic pe Salvare pentru a crea pachet.',
        'afterSave'=>'Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br/><br/>To view the template fields and manage custom fields within the module, click <b>View Fields</b>.<br/><br/>To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click <b>View Relationships</b>.<br/><br/>To edit the module layouts, click <b>View Layouts</b>. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br/><br/> To create a module with the same properties as the current module, click <b>Duplicate</b>.  You can further customize the new module.',
        'viewfields'=>'The fields in the module can be customized to suit your needs.<br/><br/>You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages. <br/><br/>You can quickly create new fields that have similar properties to existing fields by clicking <b>Clone</b> in the <b>Properties</b> form.  Enter any new properties, and then click <b>Save</b>.<br/><br/>It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
        'viewrelationships'=>'You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br><br> To create one-to-many and one-to-one relationships, create <b>Relate</b> and <b>Flex Relate</b> fields for the modules.',
        'viewlayouts'=>'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
        'existingModule' =>'After creating and customizing this module, you can create additional modules or return to the package to <b>Publish</b> or <b>Deploy</b> the package.<br><br>To create additional modules, click <b>Duplicate</b> to create a module with the same properties as the current module, or navigate back to the package, and click <b>New Module</b>.<br><br> If you are ready to <b>Publish</b> or <b>Deploy</b> the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
        'labels'=> 'The labels of the standard fields as well as custom fields can be changed.  Changing field labels will not affect the data stored in the fields.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
        'savebtn'	=> 'Clicking <b>Save</b> will save all changes and make them active.',
        'Hidden' 	=> 'Ascuns',
        'Available' => 'In stoc',
        'Default'	=> 'Initial'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Proprietăţile şi acţiunile posibile pentru pachet apar aici.<br /><br />Puteţi modifica Numele, Autorul  şi Descrierea pachetului, precum şi  vizualiza şi personaliza toate modulele conţinute în pachet.<br /><br />Faceţi clic pe New Modulul pentru a crea un modul pentru acest pachet.<br /><br />Dacă pachetul conţine cel puţin un modul, aveţi posibilitatea să publicaţi şi Implementaţi pachet, precum şi Exporta personalizările făcute în pachet.',
        'savebtn'	=> 'Faceţi clic pe Salvare pentru a salva toate datele introduse în legătură cu pachetul.',
        'Hidden' 	=> 'Ascuns',
        'Default'	=> 'Initial'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Există două coloane afişate la stânga.Coloana din dreapta-mana, etichetate curent Examinare aspect sau aspect, este locul unde vă schimbaţi aspectul modulul.Coloana din stânga, intitulat Toolbox, conţine elemente utile şi instrumente pentru utilizarea la editarea aspect.<br /><br />În cazul în care zona de aspect este intitulat structura actuală, atunci sunt de lucru pe o copie a aspectului utilizat în prezent de modul de afişare.<br /><br />În cazul în care este intitulat Examinare aspect atunci sunt de lucru pe o copie a creat mai devreme de un clic pe butonul Save, care ar fi fost deja schimbat de la versiunea văzut de utilizatorii acestui modul.',
        'saveBtn'	=> 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
        'publishBtn'=> 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
        'toolbox'	=> 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
        'panels'	=> 'Această zonă arată cum va arăta aspect pentru utilizatorii de acest modul atunci când este depolyed.<br /><br />Puteţi repoziţiona elemente, cum ar fi câmpurile, rânduri şi panouri prin glisare şi fixare a acestora; şterge elemente prin glisarea şi fixarea lor pe zona de gunoi din caseta de instrumente, sau adăuga elemente noi, trăgându-le de la set de instrumente şi fixarea acestora pe aspectul înpoziţia dorită.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Există două coloane afişate la stânga.Coloana din dreapta-mana, etichetate curent Examinare aspect sau aspect, este locul unde vă schimbaţi aspectul modulul.Coloana din stânga, intitulat Toolbox, conţine elemente utile şi instrumente pentru utilizarea la editarea aspect.<br /><br />În cazul în care zona de aspect este intitulat structura actuală, atunci sunt de lucru pe o copie a aspectului utilizat în prezent de modul de afişare.<br /><br />În cazul în care este intitulat Examinare aspect atunci sunt de lucru pe o copie a creat mai devreme de un clic pe butonul Save, care ar fi fost deja schimbat de la versiunea văzut de utilizatorii acestui modul.',
        'dropdownaddbtn'=> 'Apasand acest buton se adaugă un element nou la verticală.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Personalizările făcute în Studio în acest exemplu, pot fi ambalate şi implementate într-o altă instanţă.<br /><br />Furnizaţi o numele pachetului. Puteţi furniza Autor şi informaţii de descriere pentru pachet.<br /><br />Selectaţi modul (e) care conţin personalizări de a exporta. (Numai modulele care conţin Personalizarea va apărea pentru tine de a selecta.)<br /><br />Faceţi clic pe Export pentru a crea un fişier. Zip pentru pachetul care conţine particularizări.Fişier. Zip poate fi încărcat într-un alt exemplu, prin Loade Modulul',
        'exportCustomBtn'=>'Faceţi clic pe Export pentru a crea un fişier. Zip pentru pachetul care conţine particularizări pe care doresc să exporte.',
        'name'=>'Specifica Nume',
        'author'=>'autor<br /><br />Aceasta este autorul care este afişat în timpul instalării ca numele entităţii care a creat pachetul.<br /><br />Autorul ar putea fi un individ sau o companie.',
        'description'=>'Acest şablon este folosit pentru a trimite utilizatorului un link să faceţi clic pentru a reseta parola pentru contul de utilizator.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
        'mbBtn'		=> 'Use <b>Module Builder</b> to create new modules.',
        'appBtn' 	=> 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'Intoarcete la pasul anterior',
        'studioHelp'=> 'Use <b>Studio</b> to customize installed modules.',
        'moduleBtn'	=> 'Click to edit this module.',
        'moduleHelp'=> 'Select the module component that you would like to edit',
        'fieldsBtn'	=> 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
        'labelsBtn' => 'Click <b>Save</b> to save your custom labels.'	,
        'layoutsBtn'=> 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
        'subpanelBtn'=> 'Edit what information is shown in this modules subpanels.',
        'layoutsHelp'=> 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
        'subpanelHelp'=> 'Select a <b>Subpanel</b> to edit.',
        'searchHelp' => 'Select a <b>Search</b> layout to edit.',
        'labelsBtn'	=> 'Click <b>Save</b> to save your custom labels.',
        'newPackage'=>'Click <b>New Package</b> to create a new package.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Renunta la editor',

//ASSISTANT
'LBL_AS_SHOW' => 'Arata asistent in viitor',
'LBL_AS_IGNORE' => 'Ignora asistentul in viitor',
'LBL_AS_SAYS' => 'Asistentul Spune:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Creator de Modul',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Renunta la editor',
'LBL_EDIT_DROPDOWN'=>'Renunta la editare',
'LBL_DEVELOPER_TOOLS' => 'Uneltele dezvoltatorului',
'LBL_SUGARPORTAL' => 'Editorul de portal Sugar',
'LBL_SYNCPORTAL' => 'Sincronizeaza Portal',
'LBL_PACKAGE_LIST' => 'Lista Colete',
'LBL_HOME' => 'Acasa',
'LBL_NONE'=>'Niciunul',
'LBL_DEPLOYE_COMPLETE'=>'Implementare completa',
'LBL_DEPLOY_FAILED'   =>'O eroare a apărut în timpul procesului de implementare, pachetul dvs. nu poate fi instalat corect',
'LBL_ADD_FIELDS'=>'Adăugaţi câmpuri personalizate',
'LBL_AVAILABLE_SUBPANELS'=>'Subpanouri Disponibile',
'LBL_ADVANCED'=>'Avansat',
'LBL_ADVANCED_SEARCH'=>'Cautare Avansata',
'LBL_BASIC'=>'Elementar',
'LBL_BASIC_SEARCH'=>'Cautare Elementara',
'LBL_CURRENT_LAYOUT'=>'Plan general',
'LBL_CURRENCY' => 'Moneda',
'LBL_CUSTOM' => 'Personalizat',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Vedere Lista Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Cautare Sugar Dashlet',
'LBL_POPUP'=>'Vezi pop-up',
'LBL_POPUPLIST'=>'Vedere Lista pop-up',
'LBL_POPUPLISTVIEW'=>'Vedere Lista pop-up',
'LBL_POPUPSEARCH'=>'Cautare Pop-up',
'LBL_DASHLETSEARCHVIEW'=>'Cautare Sugar Dashlet',
'LBL_DISPLAY_HTML'=>'Arata codul HTML',
'LBL_DETAILVIEW'=>'Vedere Detaliata',
'LBL_DROP_HERE' => '[Lasa sa cada aici]',
'LBL_EDIT'=>'Editeaza',
'LBL_EDIT_LAYOUT'=>'Editeaza Plan General',
'LBL_EDIT_ROWS'=>'Editeaza Randuri',
'LBL_EDIT_COLUMNS'=>'Editeaza Coloane',
'LBL_EDIT_LABELS'=>'Editeaza Etichete',
'LBL_EDIT_PORTAL'=>'Editeaza Portal Pentru',
'LBL_EDIT_FIELDS'=>'Editeaza Campuri',
'LBL_EDITVIEW'=>'Editeaza Vedere',
'LBL_FILTER_SEARCH' => "Căutare",
'LBL_FILLER'=>'(umplere)',
'LBL_FIELDS'=>'Campuri',
'LBL_FAILED_TO_SAVE' => 'A esuat in a Salva',
'LBL_FAILED_PUBLISHED' => 'A esuat in a Publica',
'LBL_HOMEPAGE_PREFIX' => 'Al meu',
'LBL_LAYOUT_PREVIEW'=>'Vedere Plan General',
'LBL_LAYOUTS'=>'Planuri Generale',
'LBL_LISTVIEW'=>'Vedere Lista',
'LBL_RECORDVIEW'=>'Vizualizare înregistrare',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Colet Nou',
'LBL_NEW_PANEL'=>'Panou Nou',
'LBL_NEW_ROW'=>'Rand Nou',
'LBL_PACKAGE_DELETED'=>'Colet Sters',
'LBL_PUBLISHING' => 'In curs de Publicare ...',
'LBL_PUBLISHED' => 'Publicat',
'LBL_SELECT_FILE'=> 'Selecteaza fisier',
'LBL_SAVE_LAYOUT'=> 'Salveaza Plan General',
'LBL_SELECT_A_SUBPANEL' => 'Selecteaza un Subpanou',
'LBL_SELECT_SUBPANEL' => 'Selecteaza Subpanou',
'LBL_SUBPANELS' => 'Subpanouri',
'LBL_SUBPANEL' => 'Subpanou',
'LBL_SUBPANEL_TITLE' => 'Titlu:',
'LBL_SEARCH_FORMS' => 'Căutare',
'LBL_STAGING_AREA' => 'Spaţiul de aşteptare (glisaţi şi fixaţi elementele aici)',
'LBL_SUGAR_FIELDS_STAGE' => 'Domenii Sugar (faceţi clic pe elemente pentru a adăuga la zona de aşteptare)',
'LBL_SUGAR_BIN_STAGE' => 'Lada de gunoi Sugar (faceţi clic pe elemente pentru a adăuga la zona de aşteptare)',
'LBL_TOOLBOX' => 'Cutie cu instrumente',
'LBL_VIEW_SUGAR_FIELDS' => 'Vezi Campuri Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Vezi lada cu gunoi Sugar',
'LBL_QUICKCREATE' => 'Creare Rapida',
'LBL_EDIT_DROPDOWNS' => 'Editeaza Abandon Global',
'LBL_ADD_DROPDOWN' => 'Adauga un nou Abandon Global',
'LBL_BLANK' => '-alb-',
'LBL_TAB_ORDER' => 'Ordinea Filelor',
'LBL_TAB_PANELS' => 'Arata panourile ca si file',
'LBL_TAB_PANELS_HELP' => 'Afişează fiecare panou ca fila proprie, in loc de a avea pe toate acestea intr-un singur ecran',
'LBL_TABDEF_TYPE' => 'Tip vedere:',
'LBL_TABDEF_TYPE_HELP' => 'Selectaţi modul în care această secţiune trebuie să fie afişata. Această opţiune are efect numai dacă aţi activat file pe acest punct de vedere.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selectaţi Panou pt a avea aceast afişaj al panoului din punctul de vedere al aspectului. Selectaţi fila de a avea acest panou afişat într-o filă separată în cadrul aspect. Când Tab este specificat pentru un panou, panouri ulterioare stabilite pentru a afişa în Panoul va fi afişat în fila.<br />O nouă filă va fi pornit pentru a panoului următor pentru care Tab este selectat. Dacă Tab este selectat pentru un panou de sub panou în primul rând, primul panou va fi necesar un Tab.',
'LBL_TABDEF_COLLAPSE' => 'Collapse',
'LBL_TABDEF_COLLAPSE_HELP' => 'Selectaţi pentru a face starea implicită a acestui panou prăbuşit.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nume',
'LBL_DROPDOWN_LANGUAGE' => 'Limba',
'LBL_DROPDOWN_ITEMS' => 'Listeaza elemente',
'LBL_DROPDOWN_ITEM_NAME' => 'Numele elementului',
'LBL_DROPDOWN_ITEM_LABEL' => 'Arata Eticheta',
'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizare la DetailsView',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selectati aceasta optiune pt a sincroniza EditView cu DetailView.Campurile din EitView vor fi sincronizate si salvate automat in DetailView, facand clic pe $#39;$#39;Salvati$#39;$#39; sau $#39;$#39;Salvati si Implementati$#39;$#39; in EditView.<br />Nu dse pot face modificari in DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Acest DetailView este in sincronizare cu EditView-ul potrivit<br />Domeniile de plasament din DetailView reflecta domeniile din EditView.<br />Modificări la DetailsView nu pot fi salvate sau desfăşurate în cadrul acestei pagini. Faceti modificarile in EditView.',
'LBL_COPY_FROM_EDITVIEW' => 'Copiati de la EditView',
'LBL_DROPDOWN_BLANK_WARNING' => 'Valorile sunt necesare atât pentru Numele Elementului cat şi pt Label Display. Pentru a adăuga un element necompletat, faceţi clic pe Adăugare fără a introduce nici o valoare pentru numele elementului şi Label Display.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Cheia există deja în listă',
'LBL_NO_SAVE_ACTION' => 'Nu s-a putut găsi acţiunea de salvare pentru această vizualizare.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: document incorect format',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indică un câmp mixt. Un câmp mixt reprezintă un ansamblu de câmpuri individuale. De exemplu, "Adresă" este un câmp mixt care conţine "Stradă", "Oraş", "Cod poştal","Stat" şi"Ţară".<br><br>Faceţi dublu clic pe un câmp mixt pentru a vedea ce câmpuri conţine.',
'LBL_COMBO_FIELD_CONTAINS' => 'conţine',

'LBL_WIRELESSLAYOUTS'=>'Planuri Mobile',
'LBL_WIRELESSEDITVIEW'=>'EditareVizualizare Mobila',
'LBL_WIRELESSDETAILVIEW'=>'VizualizareDetalii Mobila',
'LBL_WIRELESSLISTVIEW'=>'Vizualizare tip Lista Mobila',
'LBL_WIRELESSSEARCH'=>'Cautare Mobila',

'LBL_BTN_ADD_DEPENDENCY'=>'Adauga Dependenta',
'LBL_BTN_EDIT_FORMULA'=>'Modifica Formula',
'LBL_DEPENDENCY' => 'Dependenta',
'LBL_DEPENDANT' => 'In functie',
'LBL_CALCULATED' => 'Calculat',
'LBL_READ_ONLY' => 'Citeste doar',
'LBL_FORMULA_BUILDER' => 'Constructor de Formule',
'LBL_FORMULA_INVALID' => 'Formula Invalida',
'LBL_FORMULA_TYPE' => 'Formula trebuie să fie  tip',
'LBL_NO_FIELDS' => 'Nu s-au gasit campuri',
'LBL_NO_FUNCS' => 'Nu s-au gasit functii',
'LBL_SEARCH_FUNCS' => 'Cauta Functii...',
'LBL_SEARCH_FIELDS' => 'Cauta Campuri...',
'LBL_FORMULA' => 'Formula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependent',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Trageţi opţiuni din lista de pe partea stângă a opţiunilor disponibile în meniul vertical dependent la listele pe dreptul de a face aceste opţiuni disponibile atunci când este selectată opţiunea mamă. Dacă nu sunt produse în conformitate cu o opţiune de părinte, atunci când este selectată opţiunea mamă, vertical depinde nu va fi afişat.',
'LBL_AVAILABLE_OPTIONS' => 'Optiuni Valabile',
'LBL_PARENT_DROPDOWN' => 'Parent Dropdown',
'LBL_VISIBILITY_EDITOR' => 'Vizibilitate Editor',
'LBL_ROLLUP' => 'Rulează în sus',
'LBL_RELATED_FIELD' => 'legate de Câmp',
'LBL_CONFIG_PORTAL_URL'=>'URL-ul la imaginea logo personalizata. Dimensiunile recomandate sunt 163 × logo 18 pixeli.',
'LBL_PORTAL_ROLE_DESC' => 'Nu șterge acest rol. Clienți Self-Service Rolul Portal este un rol de sistem generat ,creat în timpul procesului de activare Sugar Portal. Utilizați controale de acces în acest rol, pentru a permite și / sau dezactiva Bugs, carcase sau module bazei de cunoștințe în Portal de zahăr. Să nu modifice orice alte controale de acces pentru acest rol, pentru a evita comportamentul sistemului necunoscute și imprevizibile. În caz de ștergerea accidentală a acestui rol, recreate dezactivarea și activarea Sugar Portal',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Modul Primar',
'LBL_CUSTOM_RELATIONSHIPS' => '* relatie creata in Studio',
'LBL_RELATIONSHIPS'=>'Relatii',
'LBL_RELATIONSHIP_EDIT' => 'Modifica Relatie',
'LBL_REL_NAME' => 'Nume',
'LBL_REL_LABEL' => 'Eticheta',
'LBL_REL_TYPE' => 'Tip',
'LBL_RHS_MODULE'=>'Modul inrudit',
'LBL_NO_RELS' => 'Nu Sunt Relatii',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Conditie optionala' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Coloana',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valoare',
'LBL_SUBPANEL_FROM'=>'Formular subpanou',
'LBL_RELATIONSHIP_ONLY'=>'Nu vor fi create elemente vizibile pentru aceasta relatie deoarece exista o relatie anterioara vizibila intre aceste doua module.',
'LBL_ONETOONE' => 'Una la Una',
'LBL_ONETOMANY' => 'Una la Mai Multe',
'LBL_MANYTOONE' => 'Mai multe la Una',
'LBL_MANYTOMANY' => 'Mai Multe la Mai Multe',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Alege o functie sau componenta.',
'LBL_QUESTION_MODULE1' => 'Alege un modul.',
'LBL_QUESTION_EDIT' => 'Alege un modul pentru modificare.',
'LBL_QUESTION_LAYOUT' => 'Selectati o schita pentru a fi editata.',
'LBL_QUESTION_SUBPANEL' => 'Selectati un subpanou pentru a fi editat.',
'LBL_QUESTION_SEARCH' => 'Selectati schita de cautare pentru a fi editata.',
'LBL_QUESTION_MODULE' => 'Alege o componenta a modului pentru modificare.',
'LBL_QUESTION_PACKAGE' => 'Alegeti un pachet pentru modificare sau creati un nou pachet',
'LBL_QUESTION_EDITOR' => 'Alege un instrument',
'LBL_QUESTION_DROPDOWN' => 'Selectati o lista derulanta pentru a fi editata, sau creati o noua lista derulanta.',
'LBL_QUESTION_DASHLET' => 'Selectati o schita de dashlet pentru a fi editata.',
'LBL_QUESTION_POPUP' => 'Selectionati o schita de popup pentru a fi editata.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Inrudit Cu',
'LBL_NAME'=>'Nume',
'LBL_LABELS'=>'Etichete',
'LBL_MASS_UPDATE'=>'Actualizare in masa',
'LBL_AUDITED'=>'Bilant',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Valoare implicita',
'LBL_REQUIRED'=>'Necesar',
'LBL_DATA_TYPE'=>'Tip',
'LBL_HCUSTOM'=>'PERSONALIZAT',
'LBL_HDEFAULT'=>'IMPLICIT',
'LBL_LANGUAGE'=>'Limba',
'LBL_CUSTOM_FIELDS' => 'Camp creat in Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editeaza Etichete',
'LBL_SECTION_PACKAGES' => 'Pachete',
'LBL_SECTION_PACKAGE' => 'Pachet',
'LBL_SECTION_MODULES' => 'Module',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'ListeCoboratoare',
'LBL_SECTION_PROPERTIES' => 'Proprietati',
'LBL_SECTION_DROPDOWNED' => 'Renunta la editare',
'LBL_SECTION_HELP' => 'Ajutor',
'LBL_SECTION_ACTION' => 'Actiune',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editeaza Eticheta Panoului',
'LBL_SECTION_FIELDEDITOR' => 'Modificare Domeniu',
'LBL_SECTION_DEPLOY' => 'Desfasoara',
'LBL_SECTION_MODULE' => 'Modul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Modifica Vizibiliate',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Initial',
'LBL_HIDDEN'=>'Ascuns',
'LBL_AVAILABLE'=>'Disponibil',
'LBL_LISTVIEW_DESCRIPTION'=>'Sunt trei columne afisate mai jos. Coloana Implicita contine campauri care sunt afisate in mod  implicit intr-o vizualizare tip lista. Coloanele Aditionale contin campuri pe care utilizatorul le poate folosi pentru a crea o vizualizare particularizata. Coloanele Disponibile afiseaza campuri disponibile pentru dumneavoastra in calitate de administrator',
'LBL_LISTVIEW_EDIT'=>'Editor Vizualizare Lista',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Previzualizare',
'LBL_MB_RESTORE'=>'Restaureaza',
'LBL_MB_DELETE'=>'Sterge',
'LBL_MB_COMPARE'=>'Compara',
'LBL_MB_DEFAULT_LAYOUT'=>'Structura Implicita',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Adauga [Alt+C]',
'LBL_BTN_SAVE'=>'Salveaza',
'LBL_BTN_SAVE_CHANGES'=>'Salvare modificari',
'LBL_BTN_DONT_SAVE'=>'Anuleaza Modificarile',
'LBL_BTN_CANCEL'=>'Anulare',
'LBL_BTN_CLOSE'=>'inchis',
'LBL_BTN_SAVEPUBLISH'=>'Salveaza si Lanseaza',
'LBL_BTN_NEXT'=>'Urmatorul>',
'LBL_BTN_BACK'=>'Inapoi',
'LBL_BTN_CLONE'=>'Cloneaza',
'LBL_BTN_ADDCOLS'=>'Adauga Coloane',
'LBL_BTN_ADDROWS'=>'Adauga Randuri',
'LBL_BTN_ADDFIELD'=>'Adauga domeniu',
'LBL_BTN_ADDDROPDOWN'=>'Adauga Lista Derulanta',
'LBL_BTN_SORT_ASCENDING'=>'Sorteaza Crescator',
'LBL_BTN_SORT_DESCENDING'=>'Sorteaza Descrescator',
'LBL_BTN_EDLABELS'=>'Editeaza Etichete',
'LBL_BTN_UNDO'=>'Anulare',
'LBL_BTN_REDO'=>'Refacere',
'LBL_BTN_ADDCUSTOMFIELD'=>'Adauga campuri clienti',
'LBL_BTN_EXPORT'=>'Exporta Particularizari',
'LBL_BTN_DUPLICATE'=>'Duplicat',
'LBL_BTN_PUBLISH'=>'Publica',
'LBL_BTN_DEPLOY'=>'Desfasoara',
'LBL_BTN_EXP'=>'Exporta',
'LBL_BTN_DELETE'=>'Sterge',
'LBL_BTN_VIEW_LAYOUTS'=>'Vizualizeaza Structuri',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Vizualizare planuri generale mobile',
'LBL_BTN_VIEW_FIELDS'=>'Vizualizeaza Domenii',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Vizualizeaza Relatiile',
'LBL_BTN_ADD_RELATIONSHIP'=>'Adauga Relatie',
'LBL_BTN_RENAME_MODULE' => 'Schimba numele modulului',
'LBL_BTN_INSERT'=>'Introdu',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Eroare: Campul Exista Deja',
'ERROR_INVALID_KEY_VALUE'=> "Eroare: Valoare Cheie Invalida: [*]",
'ERROR_NO_HISTORY' => 'Nu s-au gasit fisiere istoric',
'ERROR_MINIMUM_FIELDS' => 'Structura trebuie sa contina cel putin un domeniu',
'ERROR_GENERIC_TITLE' => 'A aparut o eroare',
'ERROR_REQUIRED_FIELDS' => 'Sigur vreti sa continuati? Urmatoarele domenii necesare lipsesc din structura:',
'ERROR_ARE_YOU_SURE' => 'Sunteti sigur ca doriti sa continuati?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Urmatoarele campuri au valori calculate care nu vor fi recalculate in timp real in cadrul Vizualizarii Sugar CRM Editare Mobila:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Urmatoarele campuri au valori calculate care nu vor fi recalculate in timp real in cadrul Vizualizarii Sugar CRM Editare Mobila:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Urmatoarele module sunt dezactivate',
    'LBL_PORTAL_ENABLE_MODULES' => 'Dacă doriți să le activați în portal, vă rugăm să  le activați  aici.',
    'LBL_PORTAL_CONFIGURE' => 'Configurare Portal',
    'LBL_PORTAL_THEME' => 'Tema Portal',
    'LBL_PORTAL_ENABLE' => 'Activeaza',
    'LBL_PORTAL_SITE_URL' => 'Portalul este disponibil la adresa:',
    'LBL_PORTAL_APP_NAME' => 'Application Name',
    'LBL_PORTAL_LOGO_URL' => 'Logo URL',
    'LBL_PORTAL_LIST_NUMBER' => 'Numarul de inregistrari afisate pe lista',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Numărul de câmpuri pentru a afișate pe Detail View',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Numărul de rezultate pentru a afișa pe Căutare globală',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Implicit alocat pentru noile înmatriculări portal',
'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Intrare Aspecte',
'LBL_SYNCP_WELCOME'=>'Va rugam introduceti URL-ul portalului pe care doriti sa-l actualizati.',
'LBL_SP_UPLOADSTYLE'=>'Selectati un stil de formular pentru a fi incarcat de pe computerul dumneavoastra.<br />Stilul de formular va fi implementat in Portalul Sugar urmatoarea data cand veti executa o sincronizare.',
'LBL_SP_UPLOADED'=> 'Incarcat',
'ERROR_SP_UPLOADED'=>'Asigurati-va ca incarcati un stil de formular de tip css.',
'LBL_SP_PREVIEW'=>'Aceasta este o previzualizare a felului in care Portalul Sugar va arata in cazul utilizarii stilului de formular.',
'LBL_PORTALSITE'=>'URL-ul portalului Sugar',
'LBL_PORTAL_GO'=>'Avanseaza',
'LBL_UP_STYLE_SHEET'=>'Incarcati Stilul de Formular',
'LBL_QUESTION_SUGAR_PORTAL' => 'Selectati o schita de Portal Sugar pentru editare.',
'LBL_QUESTION_PORTAL' => 'Selectati o schita de portal pentru editare.',
'LBL_SUGAR_PORTAL'=>'Editorul de portal Sugar',
'LBL_USER_SELECT' => 'Alege utilizatorii',

//PORTAL PREVIEW
'LBL_CASES'=>'Cazuri',
'LBL_NEWSLETTERS'=>'Informari',
'LBL_BUG_TRACKER'=>'Agent Urmarire Probleme',
'LBL_MY_ACCOUNT'=>'Contul Meu',
'LBL_LOGOUT'=>'Delogare',
'LBL_CREATE_NEW'=>'Creaza nou',
'LBL_LOW'=>'Scazut',
'LBL_MEDIUM'=>'Mediu',
'LBL_HIGH'=>'Ridicat',
'LBL_NUMBER'=>'Numar',
'LBL_PRIORITY'=>'Prioritate',
'LBL_SUBJECT'=>'subiect',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nume Pachet:',
'LBL_MODULE_NAME'=>'Nume Modul:',
'LBL_MODULE_NAME_SINGULAR' => 'Modul singular Nume:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descriere:',
'LBL_KEY'=>'Cheie:',
'LBL_ADD_README'=>'Citeste-ma',
'LBL_MODULES'=>'Module',
'LBL_LAST_MODIFIED'=>'Ultima modificare',
'LBL_NEW_MODULE'=>'Modul nou',
'LBL_LABEL'=>'denumiri',
'LBL_LABEL_TITLE'=>'Eticheta',
'LBL_SINGULAR_LABEL' => 'Singular Label',
'LBL_WIDTH'=>'Latime',
'LBL_PACKAGE'=>'Pachet:',
'LBL_TYPE'=>'Tip',
'LBL_TEAM_SECURITY'=>'Securitatea Echipei',
'LBL_ASSIGNABLE'=>'Alocabil',
'LBL_PERSON'=>'Persoana',
'LBL_COMPANY'=>'Companie',
'LBL_ISSUE'=>'Problema',
'LBL_SALE'=>'Vanzare',
'LBL_FILE'=>'Fisiier',
'LBL_NAV_TAB'=>'Tab de Navigatie',
'LBL_CREATE'=>'Creaza',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Vezi',
'LBL_LIST_VIEW'=>'Vedere Lista',
'LBL_HISTORY'=>'Vizualizare Istoric',
'LBL_RESTORE_DEFAULT'=>'Restaurarea valori Predeterminate',
'LBL_ACTIVITIES'=>'Activitati',
'LBL_SEARCH'=>'Căutare',
'LBL_NEW'=>'Nou',
'LBL_TYPE_BASIC'=>'bazic',
'LBL_TYPE_COMPANY'=>'companie',
'LBL_TYPE_PERSON'=>'persoana',
'LBL_TYPE_ISSUE'=>'problema',
'LBL_TYPE_SALE'=>'vanzare',
'LBL_TYPE_FILE'=>'fisier',
'LBL_RSUB'=>'Acesta este subpanoul care va fi afisat in modulul dumneavoastra',
'LBL_MSUB'=>'Acesta este subpanoul pe care modulul dumneavoastra il asigura modulului inrudit pentru afisare',
'LBL_MB_IMPORTABLE'=>'Importare',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'vizibil',
'LBL_VE_HIDDEN'=>'ascuns',
'LBL_PACKAGE_WAS_DELETED'=>'[[pachet]] a fost sters',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exporta Particularizari',
'LBL_EC_NAME'=>'Nume Pachet:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descriere:',
'LBL_EC_KEY'=>'Cheie:',
'LBL_EC_CHECKERROR'=>'Selectati un modul',
'LBL_EC_CUSTOMFIELD'=>'domenii personalizate',
'LBL_EC_CUSTOMLAYOUT'=>'schite particularizate',
'LBL_EC_CUSTOMDROPDOWN' => 'listă/e derulantă/e personalizată/e',
'LBL_EC_NOCUSTOM'=>'Nici un modul nu a fost personalizat.',
'LBL_EC_EXPORTBTN'=>'Exporta',
'LBL_MODULE_DEPLOYED' => 'Modulul a fost desfasurat.',
'LBL_UNDEFINED' => 'nedefinit',
'LBL_EC_CUSTOMLABEL'=>'etichetă/e personalizată/e',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Esuare in extragerea datelor',
'LBL_AJAX_TIME_DEPENDENT' => 'O actiune de durata este in progres. Asteptati si incercati din nou in cateva secunde.',
'LBL_AJAX_LOADING' => 'Incarcare...',
'LBL_AJAX_DELETING' => 'In curs de stergere...',
'LBL_AJAX_BUILDPROGRESS' => 'Construire In Progres...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Desfasurare in Progres...',
'LBL_AJAX_FIELD_EXISTS' =>'Numele domeniului pe care l-ati introdus exista deja. Introduceti alt nume de domeniu.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Sigur doriti sa scoateti acest pachet? Aceasta va sterge definitiv toate fisierele asociate cu acest pachet.',
'LBL_JS_REMOVE_MODULE' => 'Sigur doriti sa scoateti acest modul? Aceasta va sterge definitiv toate fisierele asociate cu acest modul.',
'LBL_JS_DEPLOY_PACKAGE' => 'Orice particularizari pe care le-ati efectuat in Studio vor fi suprascrise atunci cand modulul va fi re-desfasurat. Sunteti sigur ca doriti sa continuati?',

'LBL_DEPLOY_IN_PROGRESS' => 'Pachet in Desfasurare',
'LBL_JS_VALIDATE_NAME'=>'Nume - Trebuie sa fie alfanumeric, fara spatii si incepand cu o litera.',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Numele Pachetului există deja',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Cheie - Trebuie să fie alfanumerică şi să înceapă cu o literă.',
'LBL_JS_VALIDATE_KEY'=>'Cheie - Trebuie sa fie alfanumerica',
'LBL_JS_VALIDATE_LABEL'=>'Introduceti o eticheta care va fi folosita ca Nume Afisat pentru acest modul.',
'LBL_JS_VALIDATE_TYPE'=>'Selectati tipul de modul pe care doriti sa-l construiti, din lista de mai sus',
'LBL_JS_VALIDATE_REL_NAME'=>'Nume - Trebuie sa fie alfanumeric, fara spatii',
'LBL_JS_VALIDATE_REL_LABEL'=>'Eticheta - va rugam sa adaugati o eticheta care va fi afisata deasupra subpanoului',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Sigur doriţi ştergerea acestui element din lista derulantă? Acest lucru poate afecta funcţionalitatea aplicaţiei.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Sigur doriţi să ştergeţi acest element din lista derulantă? Ştergerea etapelor Closed Won (Afacere încheiată cu succes) sau Closed Lost (Afacere încheiată în pierdere) va duce la funcţionarea necorespunzătoare a modulului Previzionare',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Sigur doriţi ştergerea etapei de vânzări Closed Won (Afacere încheiată cu succes)? Ştergerea acestei etape va duce la funcţionarea necorespunzătoare a modulului Previzionare',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Sigur doriţi ştergerea etapei de vânzări Closed Lost (Afacere încheiată în pierdere)? Ştergerea acestei etape va duce la funcţionarea necorespunzătoare a modulului Previzionare',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Aceasta va determina ca relatia sa devina permanenta. Sunteti sigur ca doriti sa desfasurati aceasta  relatie?',
'LBL_CONFIRM_DONT_SAVE' => 'S-au facut modificari de cand ati salvat ultima oara, doriti sa salvati?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvati Modificari?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Datele pot fi trunchiate si proecesul nu este reversibil, sunteti sigur ca doriti sa continuati?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Selectati tipul de date potrivit in functie de tipul de date care vor fi introduse in camp.',
'LBL_POPHELP_SEARCHABLE'=>'Selectaţi nivelul de crestere pentru acest domeniu.<br />Domenii cu un nivel de crestere mai mare va fi acordată o mai mare atunci când se execută căutarea.<br />Atunci când se efectuează o căutare, înregistrările care conţin câmpuri care se potrivesc cu o greutate mai mare va fi mai apărea în rezultatele căutării.<br />Dacă modificaţi nivelul de impuls pentru un câmp de la un nivel la altul, a efectua un indice de sistem să se aplice schimbarea.<br />Asiguraţi-vă că pentru a selecta pentru a şterge datele existente la momentul în care se efectuează sistem de index.',
'LBL_POPHELP_IMPORTABLE'=>'Da: Campul va fi inclus intr-o operatiune de import.<br />No: Campul nu va fi inclus intr-un import.<br />Necesar: O valoare pentru acest camp trebuie asigurata in orice import.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Introduceti un numar pentru Latime, masurat in pixeli.<br />Imaginea incarcata va fi scalata la aceasta Latime.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Introduceti un numar pentru Inaltime, masurat in pixeli.<br />Imaginea incarcata va fi scalata la aceasta Inaltime.',
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
'LBL_RESET' => 'Reseteaza',
'LBL_RESET_MODULE' => 'Reseteaza Modulul',
'LBL_REMOVE_CUSTOM' => 'Inlatura Particularizarile',
'LBL_CLEAR_RELATIONSHIPS' => 'Inlatura Relatiile',
'LBL_RESET_LABELS' => 'Reseteaza Etichetele',
'LBL_RESET_LAYOUTS' => 'Reseteaza Schitele"',
'LBL_REMOVE_FIELDS' => 'Inlatura Campurile Particularizate',
'LBL_CLEAR_EXTENSIONS' => 'Inlatura Extensiile',

'LBL_HISTORY_TIMESTAMP' => 'Secventa de Timp',
'LBL_HISTORY_TITLE' => 'istoric',

'fieldTypes' => array(
                'varchar'=>'CampText',
                'int'=>'Integrala',
                'float'=>'Baliza',
                'bool'=>'Casuta',
                'enum'=>'Derulant',
                'multienum' => 'SelectionareMultipla',
                'date'=>'Data',
                'phone' => 'Telefon',
                'currency' => 'Moneda',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Relationat',
                'address' => 'Adresa',
                'text' => 'SuprafataText',
                'url' => 'URL',
                'iframe' => 'ICadru',
                'image' => 'Imagine',
                'encrypt'=>'Criptare',
                'datetimecombo' =>'Datatimp',
                'decimal'=>'Zecimal',
),
'labelTypes' => array(
    "" => "Format Implicit e-mail",
    "all" => "Toate care au legatura",
),

'parent' => 'Relationare Flexibila',

'LBL_ILLEGAL_FIELD_VALUE' =>"Chie derualanta nu poate contine cote.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Ati selectionat acest item pentru a fi inlaturat din lista derulanta. Orice camp derulant care utilizeaza acest item ca pe o valoare, nu va mai afisa valoarea si aceasta nu va mai putea fi selectionata din campurile derulante. Sunteti sigur ca doriti sa continuati?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relaţionat {1} ID)',
);
