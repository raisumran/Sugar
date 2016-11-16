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
    'LBL_LOADING' => 'Nahrávání' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Skrýt více možností' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Smazat' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Vytvořeno společností SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Můžete poskytnout Tvůrce a Popis balíčku.',
            'modify'=>'Vlastnosti a možné akce pro balíček objeví zde.<br /><br />Můžete upravit název, autor a popis balíčku, stejně jako prohlížet a upravovat všechny moduly obsažené v balíčku.<br /><br />Klepněte na tlačítko Nový modul pro vytvoření modulu pro balíček.<br /><br />Pokud balíček obsahuje alespoň jeden modul, můžete Publikovat a nasadit balíček, stejně jako Exportovat přizpůsobení provedené v balíčku.',
            'name'=>'Určit jméno tohoto balíčku začínající písmenem a bez mezer (HR_Management)',
            'author'=>'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package.<br><br>The Author could be either an individual or a company.',
            'description'=>'Toto je popis balíčku, který se zobrazí během instalace.',
            'publishbtn'=>'Click <b>Publish</b> to save all entered data and to create a .zip file that is an installable version of the package.<br><br>Use <b>Module Loader</b> to upload the .zip file and install the package.',
            'deploybtn'=>'Click <b>Deploy</b> to save all entered data and to install the package, including all modules, in the current instance.',
            'duplicatebtn'=>'Click <b>Duplicate</b> to copy the contents of the package into a new package and to display the new package. <br/><br/>For the new package, a new name will be generated automatically by appending a number to the end of the name of the package used to create the new one. You can rename the new package by entering a new <b>Name</b> and clicking <b>Save</b>.',
            'exportbtn'=>'Click <b>Export</b> to create a .zip file containing the customizations made in the package.<br><br> The generated file is not an installable version of the package.<br><br>Use <b>Module Loader</b> to import the .zip file and to have the package, including customizations, appear in Module Builder.',
            'deletebtn'=>'Klepněte na tlačítko Odstranit pro odstraníte tohoto balíčku a všech souborů, které se k němu vztahují.',
            'savebtn'=>'Klepnutím na tlačítko Uložit uložíte všechny zadané údaje vztahující se k balíčku.',
            'existing_module'=>'Click the <b>Module</b> icon to edit the properties and customize the fields, relationships and layouts associated with the module.',
            'new_module'=>'Klepněte na tlačítko Nový modul pro vytvoření nového modulu tohoto balíčku.',
            'key'=>'This 5-letter, alphanumeric <b>Key</b> will be used to prefix all directories, class names and database tables for all of the modules in the current package.<br><br>The key is used in an effort to achieve table name uniqueness.',
            'readme'=>'Click to add <b>Readme</b> text for this package.<br><br>The Readme will be available at the time of installation.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Provide a <b>Name</b> for the module. The <b>Label</b> that you provide will appear in the navigation tab. <br/><br/>Choose to display a navigation tab for the module by checking the <b>Navigation Tab</b> checkbox.<br/><br/>Check the <b>Team Security</b> checkbox to have a Team selection field within the module records. <br/><br/>Then choose the type of module you would like to create. <br/><br/>Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module. <br/><br/>Click <b>Save</b> to create the module.',
        'modify'=>'Můžete změnit vlastnosti modulu nebo upravit pole, vztahy a rozvržení vztahující se k modulu.',
        'importable'=>'Checking the <b>Importable</b> checkbox will enable importing for this module.<br><br>A link to the Import Wizard will appear in the Shortcuts panel in the module.  The Import Wizard facilitates importing of data from external sources into the custom module.',
        'team_security'=>'Checking the <b>Team Security</b> checkbox will enable team security for this module.  <br/><br/>If team security is enabled, the Team selection field will appear within the records in the module ',
        'reportable'=>'Checking this box will allow this module to have reports run against it.',
        'assignable'=>'Checking this box will allow a record in this module to be assigned to a selected user.',
        'has_tab'=>'Checking <b>Navigation Tab</b> will provide a navigation tab for the module.',
        'acl'=>'Checking this box will enable Access Controls on this module, including Field Level Security.',
        'studio'=>'Checking this box will allow administrators to customize this module within Studio.',
        'audit'=>'Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
        'viewfieldsbtn'=>'Click <b>View Fields</b> to view the fields associated with the module and to create and edit custom fields.',
        'viewrelsbtn'=>'Click <b>View Relationships</b> to view the relationships associated with this module and to create new relationships.',
        'viewlayoutsbtn'=>'Click <b>View Layouts</b> to view the layouts for the module and to customize the field arrangement within the layouts.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'Click <b>Duplicate</b> to copy the properties of the module into a new module and to display the new module. <br/><br/>For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
        'deletebtn'=>'Klepněte na tlačítko Odstranit pro odstranění modul.',
        'name'=>'Určit jméno tohoto balíčku začínající písmenem a bez mezer (HR_Management)',
        'label'=>'This is the <b>Label</b> that will appear in the navigation tab for the module. ',
        'savebtn'=>'Klepnutím na tlačítko Uložit uložíte všechny zadané údaje vztahující se k modulu.',
        'type_basic'=>'Šablona Základní typ poskytuje základní pole, jako je Název, Přiděleno týmu, Datum vytvoření a Popis polí.',
        'type_company'=>'The <b>Company</b> template type provides organization-specific fields, such as Company Name, Industry and Billing Address.<br/><br/>Use this template to create modules that are similar to the standard Accounts module.',
        'type_issue'=>'The <b>Issue</b> template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br/><br/>Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.',
        'type_person'=>'The <b>Person</b> template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br/><br/>Use this template to create modules that are similar to the standard Contacts and Leads modules.',
        'type_sale'=>'The <b>Sale</b> template type provides opportunity specific fields, such as Lead Source, Stage, Amount and Probability. <br/><br/>Use this template to create modules that are similar to the standard Opportunities module.',
        'type_file'=>'The <b>File</b> template provides Document specific fields, such as File Name, Document type, and Publish Date.<br><br>Use this template to create modules that are similar to the standard Documents module.',

    ),
    'dropdowns'=>array(
        'default' => 'All of the <b>Dropdowns</b> for the application are listed here.<br><br>The dropdowns can be used for dropdown fields in any module.<br><br>To make changes to an existing dropdown, click on the dropdown name.<br><br>Click <b>Add Dropdown</b> to create a new dropdown.',
        'editdropdown'=>'Dropdown lists can be used for standard or custom dropdown fields in any module.<br><br>Provide a <b>Name</b> for the dropdown list.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the list items.<br><br>In the <b>Item Name</b> field, provide a name for the option in the dropdown list.  This name will not appear in the dropdown list that is visible to users.<br><br>In the <b>Display Label</b> field, provide a label that will be visible to users.<br><br>After providing the item name and display label, click <b>Add</b> to add the item to the dropdown list.<br><br>To reorder the items in the list, drag and drop items into the desired positions.<br><br>To edit the display label of an item, click the <b>Edit icon</b>, and enter a new label. To delete an item from the dropdown list, click the <b>Delete icon</b>.<br><br>To undo a change made to a display label, click <b>Undo</b>.  To redo a change that was undone, click <b>Redo</b>.<br><br>Click <b>Save</b> to save the dropdown list.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.',
        'Hidden' 	=> 'Skryté položky nejsou vidět ze subpanelů',
        'Default'	=> 'Standardní pole jsou vidět ze subpanelů',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Skrytá pole nejsou v současné době k dispozici pro uživatele v ListViews.',
        'Available' => 'Dostupná pole nejsou zobrazena ve výchozím nastavení, ale mohou být přidána do ListViews uživatelů.',
        'Default'	=> 'Výchozí pole se zobrazí v ListViews, která nejsou přizpůsobena uživateli.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Click <b>Save & Deploy</b> to save changes you made and to make them active within the module.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Skrytá pole nejsou v současné době k dispozici pro uživatele v ListViews.',
        'Default'	=> 'Výchozí pole se zobrazí v ListViews, která nejsou přizpůsobena uživateli.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Klepnutím na tlačítko Uložit uložíte všechny zadané údaje vztahující se k modulu.',
        'Hidden' 	=> 'Skryté položky se neukází v Hledání.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> 'Výchozí pole se zobrazí v poli Hledat.'
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
        'saveBtn'	=> 'Klepnutím na tlačítko Uložit uložíte všechny neuložené změny.<br />Tyto změny se neukazují dokud se nevypropagují do modulu.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'publishBtn'=> 'Click <b>Save & Deploy</b> to save all changes you made to the layout since the last time you saved it, and to make the changes active in the module.<br><br>The layout will immediately be displayed in the module.',
        'toolbox'	=> 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
        'panels'	=> 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
        'delete'	=> 'Drag and drop any element here to remove it from the layout',
        'property'	=> 'Edit the <b>Label</b> displayed for this field.<br><br><b>Width</b> provide a width value in pixels for Sidecar modules and as a percentage of the table width for backward compatible modules.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>Custom fields created for the module appear above the fields that are available for the module by default.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>To create a new field, click <b>Add Field</b>.',
        'mbDefault'=>'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
        'addField'	=> 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
        'editField' => 'The properties of this field can be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.',
        'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Export customizations made in Studio by creating packages that can be uploaded into another Sugar instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
        'exportCustomBtn'=>'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.',
        'name'=>'This is the <b>Name</b> of the package. This name will be displayed during installation.',
        'author'=>'This is the <b>Author</b> that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
        'description'=>'Toto je popis balíčku, který se zobrazí během instalace.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize deployed modules.',
        'mbBtn'		=> 'Použijte Module Builder pro vytvoření nového modulu',
        'sugarPortalBtn' => 'Use <b>Sugar Portal Editor</b> to manage and customize the Sugar Portal.',
        'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
        'appBtn' 	=> 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'Návrat k předchozímu kroku.',
        'studioHelp'=> 'Use <b>Studio</b> to determine what and how information is displayed in the modules.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Klikněte pro editaci tohoto modulu.',
        'moduleHelp'=> 'The components that you can customize for the module appear here.<br><br>Click an icon to select the component to edit.',
        'fieldsBtn'	=> 'Create and customize <b>Fields</b> to store information in the module.',
        'labelsBtn' => 'Edit the <b>Labels</b> that display for the fields and other titles in the module.'	,
        'relationshipsBtn' => 'Add new or view existing <b>Relationships</b> for the module.' ,
        'layoutsBtn'=> 'Customize the module <b>Layouts</b>.  The layouts are the different views of the module contaning fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
        'subpanelBtn'=> 'Determine which fields appear in the <b>Subpanels</b> in the module.',
        'portalBtn' =>'Customize the module <b>Layouts</b> that appear in the <b>Sugar Portal</b>.',
        'layoutsHelp'=> 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
        'subpanelHelp'=> 'The <b>Subpanels</b> in the module that can be customized appear here.<br><br>Click an icon to select the module to edit.',
        'newPackage'=>'Klepněte na tlačítko Nový balíček pro vytvoření nového balíčku.',
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
        'default'=>'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
        'addrelbtn'=>'mouse over help for add relationship..',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
        'saveBtn'=>'Klepnutím na tlačítko Uložit uložíte všechny změny.',
        'publishBtn'=>'Click <b>Save & Deploy</b> to save all changes and make them active.',
    ),
    'portalSync'=>array(
        'default' => 'Enter the <b>Sugar Portal URL</b> of the portal instance to update, and click <b>Go</b>.<br><br>Then enter a valid Sugar user name and password, and then click <b>Begin Sync</b>.<br><br>The customizations made to the Sugar Portal <b>Layouts</b>, along with the <b>Style Sheet</b> if one was uploaded, will be transferred to specified the portal instance.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'You can customize the look of the Sugar Portal by using a style sheet.<br><br>Select a <b>Style Sheet</b> to upload.<br><br>The style sheet will be implemented in the Sugar Portal the next time a sync is performed.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'To get started on a project, click <b>New Package</b> to create a new package to house your custom module(s). <br/><br/>Each package can contain one or more modules.<br/><br/>For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br><br>When the project is complete, you can <b>Deploy</b> the package to install the custom modules within the application.',
            'afterSave'=>'Your new package should contain at least one module. You can create one or more custom modules for the package.<br/><br/>Click <b>New Module</b> to create a custom module for this package.<br/><br/> After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users\' instances.<br/><br/> To deploy the package in one step within your Sugar instance, click <b>Deploy</b>.<br><br>Click <b>Publish</b> to save the package as a .zip file. After the .zip file is saved to your system, use the <b>Module Loader</b> to upload and install the package within your Sugar instance.  <br/><br/>You can distribute the file to other users to upload and install within their own Sugar instances.',
            'create'=>'A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom <b>modules</b> that can be related to each other or to other modules in the application.<br/><br/>After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
            ),
    'main'=>array(
        'welcome'=>'Use the <b>Developer Tools</b> to create and manage standard and custom modules and fields. <br/><br/>To manage modules in the application, click <b>Studio</b>. <br/><br/>To create custom modules, click <b>Module Builder</b>.',
        'studioWelcome'=>'All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Since the current package contains at least one module, you can <b>Deploy</b> the modules in the package within your Sugar instance or <b>Publish</b> the package to be installed in the current Sugar instance or another instance using the <b>Module Loader</b>.<br/><br/>To install the package directly within your Sugar instance, click <b>Deploy</b>.<br><br>To create a .zip file for the package that can be loaded and installed within the current Sugar instance and other instances using the <b>Module Loader</b>, click <b>Publish</b>.<br/><br/> You can build the modules for this package in stages, and publish or deploy when you are ready to do so. <br/><br/>After publishing or deploying a package, you can make changes to the package properties and customize the modules further.  Then re-publish or re-deploy the package to apply the changes." ,
        'editView'=> 'Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
        'create'=>'When choosing the type of <b>Type</b> of module that you wish to create, keep in mind the types of fields you would like to have within the module. <br/><br/>Each module template contains a set of fields pertaining to the type of module described by the title.<br/><br/><b>Basic</b> - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br/><br/> <b>Company</b> - Provides organization-specific fields, such as Company Name, Industry and Billing Address.  Use this template to create modules that are similar to the standard Accounts module.<br/><br/> <b>Person</b> - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.  Use this template to create modules that are similar to the standard Contacts and Leads modules.<br/><br/><b>Issue</b> - Provides case- and bug-specific fields, such as Number, Status, Priority and Description.  Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.<br/><br/>Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
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
        'Hidden' 	=> 'Hidden fields are fields that are not currently available to users for use in list views.',
        'Available' => 'Available fields are fields that are not shown by default, but can be enabled by users.',
        'Default'	=> 'Default fields are displayed to users who have not created custom list view settings.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
        'savebtn'	=> 'Clicking <b>Save & Deploy</b> will save all changes and make them active.',
        'Hidden' 	=> 'Skryté položky se neukází v Hledání.',
        'Default'	=> 'Výchozí pole se zobrazí v poli Hledat.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'saveBtn'	=> 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
        'publishBtn'=> 'Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
        'toolbox'	=> 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
        'panels'	=> 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'dropdownaddbtn'=> 'Clicking this button adds a new item to the dropdown.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
        'exportCustomBtn'=>'Click <b>Export</b> to create a .zip file for the package containing the customizations that you wish to export.
',
        'name'=>'The <b>Name</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        'author'=>'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.
',
        'description'=>'The <b>Description</b> of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
        'mbBtn'		=> 'Použijte Module Builder pro vytvoření nového modulu',
        'appBtn' 	=> 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'Návrat k předchozímu kroku.',
        'studioHelp'=> 'Use <b>Studio</b> to customize installed modules.',
        'moduleBtn'	=> 'Klikněte pro editaci tohoto modulu.',
        'moduleHelp'=> 'Select the module component that you would like to edit',
        'fieldsBtn'	=> 'Edit what information is stored in the module by controlling the <b>Fields</b> in the module.<br/><br/>You can edit and create custom fields here.',
        'labelsBtn' => 'Click <b>Save</b> to save your custom labels.'	,
        'layoutsBtn'=> 'Customize the <b>Layouts</b> of the Edit, Detail, List and search views.',
        'subpanelBtn'=> 'Edit what information is shown in this modules subpanels.',
        'layoutsHelp'=> 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
        'subpanelHelp'=> 'Select a <b>Subpanel</b> to edit.',
        'searchHelp' => 'Select a <b>Search</b> layout to edit.',
        'labelsBtn'	=> 'Click <b>Save</b> to save your custom labels.',
        'newPackage'=>'Klepněte na tlačítko Nový balíček pro vytvoření nového balíčku.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor "dropdownu"',

//ASSISTANT
'LBL_AS_SHOW' => 'V budoucnu zobrazit pomocníka .',
'LBL_AS_IGNORE' => 'V budoucnu ignorovat pomocníka.',
'LBL_AS_SAYS' => 'Pomocník říká:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Stavitel modulu',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Editor "dropdownu"',
'LBL_EDIT_DROPDOWN'=>'Upravit dropdown',
'LBL_DEVELOPER_TOOLS' => 'Studio',
'LBL_SUGARPORTAL' => 'Editor Sugar portálu',
'LBL_SYNCPORTAL' => 'Synchronizace portálu',
'LBL_PACKAGE_LIST' => 'Seznam balíků',
'LBL_HOME' => 'Domů',
'LBL_NONE'=>'-žádný-',
'LBL_DEPLOYE_COMPLETE'=>'Nasadit kompletní',
'LBL_DEPLOY_FAILED'   =>'Došlo k chybě při nasazování procesu, může váš balíček není správně nainstalován',
'LBL_ADD_FIELDS'=>'Přidat příslušné pole',
'LBL_AVAILABLE_SUBPANELS'=>'Dostupné sub-panely',
'LBL_ADVANCED'=>'Pokročilé',
'LBL_ADVANCED_SEARCH'=>'Rozšiřené',
'LBL_BASIC'=>'Základní',
'LBL_BASIC_SEARCH'=>'Základní',
'LBL_CURRENT_LAYOUT'=>'Rozvržení',
'LBL_CURRENCY' => 'Měna:',
'LBL_CUSTOM' => 'Uživatelský',
'LBL_DASHLET'=>'Sugar budík',
'LBL_DASHLETLISTVIEW'=>'Zobrazení seznamu Sugar budíků',
'LBL_DASHLETSEARCH'=>'Hledání Sugar budíků',
'LBL_POPUP'=>'Překryvné zobrazení',
'LBL_POPUPLIST'=>'Překryvný seznam',
'LBL_POPUPLISTVIEW'=>'Překryvný seznam',
'LBL_POPUPSEARCH'=>'Překryvné vyhledávání',
'LBL_DASHLETSEARCHVIEW'=>'Hledání Sugar budíků',
'LBL_DISPLAY_HTML'=>'Zobrazit HTML kód',
'LBL_DETAILVIEW'=>'Detailní zobrazení',
'LBL_DROP_HERE' => '[Vlož sem]',
'LBL_EDIT'=>'Editace',
'LBL_EDIT_LAYOUT'=>'Úprava rozvržení',
'LBL_EDIT_ROWS'=>'Úprava řádků',
'LBL_EDIT_COLUMNS'=>'Úprava sloupců',
'LBL_EDIT_LABELS'=>'Úprava popisek',
'LBL_EDIT_PORTAL'=>'Upravit portál pro',
'LBL_EDIT_FIELDS'=>'Upravit pole',
'LBL_EDITVIEW'=>'Zobrazení úprav',
'LBL_FILTER_SEARCH' => "Hledat",
'LBL_FILLER'=>'(výplň)',
'LBL_FIELDS'=>'Pole',
'LBL_FAILED_TO_SAVE' => 'Uložení se nezdařilo',
'LBL_FAILED_PUBLISHED' => 'Publikování selhalo',
'LBL_HOMEPAGE_PREFIX' => 'Moje',
'LBL_LAYOUT_PREVIEW'=>'Náhled nákresu',
'LBL_LAYOUTS'=>'Rozložení',
'LBL_LISTVIEW'=>'Zobrazení seznamu',
'LBL_RECORDVIEW'=>'Zobrazení záznamu',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Nový balík',
'LBL_NEW_PANEL'=>'Nový panel',
'LBL_NEW_ROW'=>'Nový řádek',
'LBL_PACKAGE_DELETED'=>'Balík smazán',
'LBL_PUBLISHING' => 'Publikuji...',
'LBL_PUBLISHED' => 'Publikováno',
'LBL_SELECT_FILE'=> 'Vybrat soubor',
'LBL_SAVE_LAYOUT'=> 'Uložit rozvržení',
'LBL_SELECT_A_SUBPANEL' => 'Vybrat Subpanel',
'LBL_SELECT_SUBPANEL' => 'Vybrat Subpanel',
'LBL_SUBPANELS' => 'Pod-panely',
'LBL_SUBPANEL' => 'Pod-panel',
'LBL_SUBPANEL_TITLE' => 'Titul:',
'LBL_SEARCH_FORMS' => 'Hledat',
'LBL_STAGING_AREA' => 'Staging Area (přetáhněte sem položky)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar Pole (klikněte na pole pro přidání do staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (klikněte na položku pro přidání do stagging area)',
'LBL_TOOLBOX' => 'Nástroje',
'LBL_VIEW_SUGAR_FIELDS' => 'Zobrazit Sugar Fields',
'LBL_VIEW_SUGAR_BIN' => 'Zobrazit Sugar Bin',
'LBL_QUICKCREATE' => 'Rychlé vytvoření',
'LBL_EDIT_DROPDOWNS' => 'Upravit globální "dropdown"',
'LBL_ADD_DROPDOWN' => 'Přidat nový "dropdown"',
'LBL_BLANK' => '-prázdný-',
'LBL_TAB_ORDER' => 'Pořadí záložek',
'LBL_TAB_PANELS' => 'Zobrazit panely jako tabulky záložky',
'LBL_TAB_PANELS_HELP' => 'Zobrazit každý panel jako jeho vlastní kartu místo toho, mít je všechny na jedné obrazovce',
'LBL_TABDEF_TYPE' => 'Typ zobrazení:',
'LBL_TABDEF_TYPE_HELP' => 'Vyberte prosím jek má být tato sekce zobrazena. Toto nastavení je možné pouze tehdy když jsou aktivní záložky.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Záložka',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Vyberte Panel z rozvržení. Vyberte Záložku.',
'LBL_TABDEF_COLLAPSE' => 'Svinout',
'LBL_TABDEF_COLLAPSE_HELP' => 'Vyberte pro výhozí stav pro tento panel.',
'LBL_DROPDOWN_TITLE_NAME' => 'Název',
'LBL_DROPDOWN_LANGUAGE' => 'Jazyk',
'LBL_DROPDOWN_ITEMS' => 'Seznam položek',
'LBL_DROPDOWN_ITEM_NAME' => 'Jméno položky',
'LBL_DROPDOWN_ITEM_LABEL' => 'Zobrazit štítek',
'LBL_SYNC_TO_DETAILVIEW' => 'Synchronizovat do detailního pohledu',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Zvolte tuto možnost pro synchronizaci rozvržení EditView (změnovém pohledu) na odpovídající rozvržení DetailView (detailního pohledu). Rozvržení Polí a Položek v EditView bude synchronizováno a uloženo automaticky do DetailView po kliknutí na tlačítko Uložit nebo Uložit & Rozmístni v EditView.<br />Změny v rozvržení nebudou moci být provedeny v DetailView (detailním pohledu).',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Tento DetailView (detailní pohled) je synchronizován s odpovídající rozvržení EditView (změnovém pohledu). <br />Rozvržení Polí a Položek v rozvržení DetailView (detailního pohledu) reflektuje rozvržení Polí a Položek v rozvržení EditView (změnovém pohledu).<br />Změny v rozvržení DetailView (detailního pohledu) nemohou být uloženy',
'LBL_COPY_FROM_EDITVIEW' => 'Zkopíruj z EditView (změnového pohledu)',
'LBL_DROPDOWN_BLANK_WARNING' => 'Hodnoty jsou povinné pro Jméno položky i Štítek zobraz. Pro přidání prázdné položky, klikněte Přidat bez vložení hodnoty pro Jméno položky i Štítek zobraz.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Klíč v seznamu již existuje',
'LBL_NO_SAVE_ACTION' => 'Akce na uložení nebyla nalezena v tomto pohledu',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: nesprávně zformulovaný dokument',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Označuje kombinační pole. Kombinační pole je kolekce individuálních polí. Například "Adresa" je kombinační pole obsahující pole "Ulice", "Město", "PSČ", "Region" a "Stát".<br><br>Dvojklikem na kombinační pole zobrazíte položky, které obsahuje.',
'LBL_COMBO_FIELD_CONTAINS' => 'Obsah:',

'LBL_WIRELESSLAYOUTS'=>'Rozvržení pro mobil',
'LBL_WIRELESSEDITVIEW'=>'Zobrazení úprav pro mobil',
'LBL_WIRELESSDETAILVIEW'=>'Zobrazení detailu pro mobil',
'LBL_WIRELESSLISTVIEW'=>'Zobrazení seznamu pro mobil',
'LBL_WIRELESSSEARCH'=>'Zobrazení vyhledávání pro mobil',

'LBL_BTN_ADD_DEPENDENCY'=>'Přidat vazbu',
'LBL_BTN_EDIT_FORMULA'=>'Editovat výraz',
'LBL_DEPENDENCY' => 'Vazba',
'LBL_DEPENDANT' => 'V závislosti',
'LBL_CALCULATED' => 'Vypočtená hodnota',
'LBL_READ_ONLY' => 'Pouze pro čtení',
'LBL_FORMULA_BUILDER' => 'Tvořič výrazů',
'LBL_FORMULA_INVALID' => 'Chybné pravidlo',
'LBL_FORMULA_TYPE' => 'Pravidlo musí být typu',
'LBL_NO_FIELDS' => 'Nenalezeny žádné položky',
'LBL_NO_FUNCS' => 'Nenalezeny žádné funkce',
'LBL_SEARCH_FUNCS' => 'Vyhledávání funkcí...',
'LBL_SEARCH_FIELDS' => 'vyhledávání polí...',
'LBL_FORMULA' => 'Výraz',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Závisející',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Přetáhněte možnosti ze seznamu na levé straně dostupných možností, které chcete zobrazit v závislém číselníku, když je zvolena rodičovská hodnota. Pokud není vybrána ani jedna hodnota, bude závislý číselník skryt.',
'LBL_AVAILABLE_OPTIONS' => 'Dostupné možnosti',
'LBL_PARENT_DROPDOWN' => 'Nadřazený dropdown',
'LBL_VISIBILITY_EDITOR' => 'Viditelnost editoru',
'LBL_ROLLUP' => 'Kumulativní',
'LBL_RELATED_FIELD' => 'Související pole',
'LBL_CONFIG_PORTAL_URL'=>'URL pro vlastní obrázek loga. Doporučené rozměry jsou 163 × 18 pixelů.',
'LBL_PORTAL_ROLE_DESC' => 'Neodstraňujte tuto roli. Customer Self-Service Portálu Role je generovaná systémem v průběhu aktivace Sugar Portálu . Neupravujte žádné jiné řízení přístupy pro tuto roli, aby se zabránilo neznámému a nepředvídatelnému chování systému. V případě náhodného vymazání této role, ji znovuvytvořte vypnutím a zapnutím Sugar Portálu.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Hlavní modul',
'LBL_CUSTOM_RELATIONSHIPS' => '* vztah vytvořený ve Studiu',
'LBL_RELATIONSHIPS'=>'Vztahy',
'LBL_RELATIONSHIP_EDIT' => 'Upravit vztahy',
'LBL_REL_NAME' => 'Název',
'LBL_REL_LABEL' => 'Název',
'LBL_REL_TYPE' => 'Typ',
'LBL_RHS_MODULE'=>'Připojený modul',
'LBL_NO_RELS' => 'Žádné vztahy',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Volitelná podmínka' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Sloupec',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Hodnota',
'LBL_SUBPANEL_FROM'=>'Pod-panel formulář',
'LBL_RELATIONSHIP_ONLY'=>'Žádné viditelné prvky nebudou vytvořeny pro tento vztah',
'LBL_ONETOONE' => 'Jeden na jednoho',
'LBL_ONETOMANY' => 'Jeden na více',
'LBL_MANYTOONE' => 'Více na jednoho',
'LBL_MANYTOMANY' => 'Více na více',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Vyberte funkci nebo komponentu.',
'LBL_QUESTION_MODULE1' => 'Vyberte modul.',
'LBL_QUESTION_EDIT' => 'Vyberte modul pro úpravu.',
'LBL_QUESTION_LAYOUT' => 'Vyberve rozvržení pro úpravu.',
'LBL_QUESTION_SUBPANEL' => 'Vyberte pod-panel pro úpravu.',
'LBL_QUESTION_SEARCH' => 'Vyberve rozvržení hledání pro úpravu.',
'LBL_QUESTION_MODULE' => 'Vyberte komponentu modulu pro úpravu.',
'LBL_QUESTION_PACKAGE' => 'Vyberte balík pro úpravu nebo vytvořte nový balík.',
'LBL_QUESTION_EDITOR' => 'Zvolte nástroj.',
'LBL_QUESTION_DROPDOWN' => 'Vyberte "dropdown" pro úpravo nebo vytvořte nový "dropdown".',
'LBL_QUESTION_DASHLET' => 'Vyberte rozvržení budíku pro úpravu.',
'LBL_QUESTION_POPUP' => 'Vyberte rozvržení popup pro úpravu.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Týkající se',
'LBL_NAME'=>'Název',
'LBL_LABELS'=>'Štítky',
'LBL_MASS_UPDATE'=>'Hromadná aktualizace',
'LBL_AUDITED'=>'Auditovat?',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Výchozí hodnota',
'LBL_REQUIRED'=>'Požadovaná položka',
'LBL_DATA_TYPE'=>'Typ',
'LBL_HCUSTOM'=>'VLATNÍ',
'LBL_HDEFAULT'=>'ZÁKLADNÍ',
'LBL_LANGUAGE'=>'Jazyk skupin záložek',
'LBL_CUSTOM_FIELDS' => '* pole vytvořené ve Studiu',

//SECTION
'LBL_SECTION_EDLABELS' => 'Úprava popisek',
'LBL_SECTION_PACKAGES' => 'Balíky',
'LBL_SECTION_PACKAGE' => 'Balíky',
'LBL_SECTION_MODULES' => 'Moduly',
'LBL_SECTION_PORTAL' => 'Portál',
'LBL_SECTION_DROPDOWNS' => '"Dropdowny"',
'LBL_SECTION_PROPERTIES' => 'Vlastnosti',
'LBL_SECTION_DROPDOWNED' => 'Upravit dropdown',
'LBL_SECTION_HELP' => 'Nápověda',
'LBL_SECTION_ACTION' => 'Akce',
'LBL_SECTION_MAIN' => 'Hlavní',
'LBL_SECTION_EDPANELLABEL' => 'Upravit štítek panelu',
'LBL_SECTION_FIELDEDITOR' => 'Upravit pole',
'LBL_SECTION_DEPLOY' => 'Použít',
'LBL_SECTION_MODULE' => 'Modul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Upravit viditelnost',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Standardní',
'LBL_HIDDEN'=>'Skryté',
'LBL_AVAILABLE'=>'Dostupné',
'LBL_LISTVIEW_DESCRIPTION'=>'Dole jsou zobrazeny tři sloupce. První sloupec obsahuje pole, která jsou zobrazena v seznamu defaultně. Sloupec další obsahuje položky, které si uživatel může vybrat pro vytvoření vlastního nastavení, a sloupec dostupné je pro vás jako správce, abyste z něj mohl přidat do prvního sloupce nebo do sloupce další.',
'LBL_LISTVIEW_EDIT'=>'Úprava pohledu seznam',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Náhled',
'LBL_MB_RESTORE'=>'Obnova',
'LBL_MB_DELETE'=>'Smazat',
'LBL_MB_COMPARE'=>'Porovnat',
'LBL_MB_DEFAULT_LAYOUT'=>'Základní rozvržení',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Vlož [Alt+C]',
'LBL_BTN_SAVE'=>'Uložit',
'LBL_BTN_SAVE_CHANGES'=>'Uložit změny',
'LBL_BTN_DONT_SAVE'=>'Zahodit změny',
'LBL_BTN_CANCEL'=>'Zrušit',
'LBL_BTN_CLOSE'=>'Zavřít',
'LBL_BTN_SAVEPUBLISH'=>'Uložit a publikovat',
'LBL_BTN_NEXT'=>'Další',
'LBL_BTN_BACK'=>'Zpět',
'LBL_BTN_CLONE'=>'Duplikovat',
'LBL_BTN_ADDCOLS'=>'Přidat sloupce',
'LBL_BTN_ADDROWS'=>'Přidat řádky',
'LBL_BTN_ADDFIELD'=>'Přidat pole',
'LBL_BTN_ADDDROPDOWN'=>'Přidat "dropdown"',
'LBL_BTN_SORT_ASCENDING'=>'Seřadit vzestupně',
'LBL_BTN_SORT_DESCENDING'=>'Seřadit sestupně',
'LBL_BTN_EDLABELS'=>'Úprava popisek',
'LBL_BTN_UNDO'=>'Zpět',
'LBL_BTN_REDO'=>'Znovu',
'LBL_BTN_ADDCUSTOMFIELD'=>'Přidat vlastní pole',
'LBL_BTN_EXPORT'=>'Exportovat vlastní úpravy',
'LBL_BTN_DUPLICATE'=>'Duplikovat',
'LBL_BTN_PUBLISH'=>'Publikovat',
'LBL_BTN_DEPLOY'=>'Použít',
'LBL_BTN_EXP'=>'Export',
'LBL_BTN_DELETE'=>'Smazat',
'LBL_BTN_VIEW_LAYOUTS'=>'Zobrazit rozvržení',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Zobrazit mobilní layout',
'LBL_BTN_VIEW_FIELDS'=>'Zobrazit pole',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Zobrazit vztahy',
'LBL_BTN_ADD_RELATIONSHIP'=>'Přidat vztah',
'LBL_BTN_RENAME_MODULE' => 'Přejmenovat modul',
'LBL_BTN_INSERT'=>'Vložit',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Pole už existuje',
'ERROR_INVALID_KEY_VALUE'=> "Chyba.Špatná hodnota: [$#39;]",
'ERROR_NO_HISTORY' => 'Žádná historie soubory nalezeny',
'ERROR_MINIMUM_FIELDS' => 'Rozvržení musí obsahovat alespoň jedno pole',
'ERROR_GENERIC_TITLE' => 'Došlo k chybě',
'ERROR_REQUIRED_FIELDS' => 'Jste si jisti, že chcete pokračovat? Následující povinná pole rozvržení chybí:',
'ERROR_ARE_YOU_SURE' => 'Jsi si jist(a), že chcete pokračovat?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Následujíc položka(y) obsahuje vypočtenou hodnotu, která nebude přepočítána při zobrazení v editačním pohledu v SugarCRM Mobile.',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Následujíc položka(y) obsahuje vypočtenou hodnotu, která nebude přepočítána při zobrazení v editačním pohledu v SugarCRM Portal.',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Následující moduly jsou vypnuté:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Pokud byste chtěliaktivaci v rámci portálu povolte ji zde.',
    'LBL_PORTAL_CONFIGURE' => 'Konfigurovat portál',
    'LBL_PORTAL_THEME' => 'Motiv portálu',
    'LBL_PORTAL_ENABLE' => 'povoleno',
    'LBL_PORTAL_SITE_URL' => 'Váš portál je k dispozici na adrese:',
    'LBL_PORTAL_APP_NAME' => 'Jméno aplikace',
    'LBL_PORTAL_LOGO_URL' => 'Logo URL',
    'LBL_PORTAL_LIST_NUMBER' => 'Počet záznamů pro zobrazení na seznamu',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Počet polí pro detailního zobrazení',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Počet výsledků pro Global Search',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Výchozí přiřazení pro nové portálové registrace',
'LBL_PORTAL'=>'Portál',
'LBL_PORTAL_LAYOUTS'=>'Rozložení pro portál',
'LBL_SYNCP_WELCOME'=>'Prosím, zadejte adresu URL portálu instance, kterou chcete aktualizovat.',
'LBL_SP_UPLOADSTYLE'=>'Vyberte soubor stylu z vašeho počítače.<br>Styl bude implementován do Sugaru při přístím provedení synchronizace.',
'LBL_SP_UPLOADED'=> 'Nahráno na server',
'ERROR_SP_UPLOADED'=>'Prosím, ujistěte se, že jste nahráváte CSS styl.',
'LBL_SP_PREVIEW'=>'Zde je náhled jak bude portál Sugaru vypadat při použití stylu.',
'LBL_PORTALSITE'=>'URL Sugar portálu:',
'LBL_PORTAL_GO'=>'Spustit',
'LBL_UP_STYLE_SHEET'=>'Nahrát soubor stylu',
'LBL_QUESTION_SUGAR_PORTAL' => 'Vyberte rozvržení Sugar portálu pro úpravu.',
'LBL_QUESTION_PORTAL' => 'Vyberve rozvržení portálu pro úpravu.',
'LBL_SUGAR_PORTAL'=>'Editor Sugar portálu',
'LBL_USER_SELECT' => 'Vybrat uživatele',

//PORTAL PREVIEW
'LBL_CASES'=>'Případy',
'LBL_NEWSLETTERS'=>'Zpravodaje',
'LBL_BUG_TRACKER'=>'"Bug Tracker"',
'LBL_MY_ACCOUNT'=>'Můj účet',
'LBL_LOGOUT'=>'Odhlášení',
'LBL_CREATE_NEW'=>'Vytvoř nový',
'LBL_LOW'=>'Nízký',
'LBL_MEDIUM'=>'Střední',
'LBL_HIGH'=>'Vysoký',
'LBL_NUMBER'=>'Číslo:',
'LBL_PRIORITY'=>'Priorita:',
'LBL_SUBJECT'=>'Předmět',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Jméno balíku:',
'LBL_MODULE_NAME'=>'Jméno modulu:',
'LBL_MODULE_NAME_SINGULAR' => 'Název modulu',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Popis:',
'LBL_KEY'=>'Klíč:',
'LBL_ADD_README'=>'Readme soubor',
'LBL_MODULES'=>'Moduly:',
'LBL_LAST_MODIFIED'=>'Poslední změna:',
'LBL_NEW_MODULE'=>'Nový modul',
'LBL_LABEL'=>'Název v množném čísle',
'LBL_LABEL_TITLE'=>'Název',
'LBL_SINGULAR_LABEL' => 'Název v jednotém čísle',
'LBL_WIDTH'=>'Šířka',
'LBL_PACKAGE'=>'Balík:',
'LBL_TYPE'=>'Typ:',
'LBL_TEAM_SECURITY'=>'Zabezpečení',
'LBL_ASSIGNABLE'=>'Přiřaditelné',
'LBL_PERSON'=>'Osoba',
'LBL_COMPANY'=>'Společnost',
'LBL_ISSUE'=>'Problém',
'LBL_SALE'=>'Sleva',
'LBL_FILE'=>'Soubor',
'LBL_NAV_TAB'=>'Záložka navigace',
'LBL_CREATE'=>'Přidat',
'LBL_LIST'=>'Celk. cena',
'LBL_VIEW'=>'Zobrazit',
'LBL_LIST_VIEW'=>'Zobrazení seznamu',
'LBL_HISTORY'=>'Zobrazit historii',
'LBL_RESTORE_DEFAULT'=>'Obnovit výchozí',
'LBL_ACTIVITIES'=>'Aktivity',
'LBL_SEARCH'=>'Hledat',
'LBL_NEW'=>'Nový',
'LBL_TYPE_BASIC'=>'základní',
'LBL_TYPE_COMPANY'=>'společnost',
'LBL_TYPE_PERSON'=>'osoba',
'LBL_TYPE_ISSUE'=>'problém',
'LBL_TYPE_SALE'=>'sleva',
'LBL_TYPE_FILE'=>'soubor',
'LBL_RSUB'=>'Toto je sub-panel, který se zobrazí ve vašem modulu',
'LBL_MSUB'=>'Toto je subpanel, že váš modul poskytuje související modul pro zobrazení',
'LBL_MB_IMPORTABLE'=>'Importuji',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'viditelný',
'LBL_VE_HIDDEN'=>'schovaný',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] byl smazán',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportovat vlastní úpravy',
'LBL_EC_NAME'=>'Jméno balíku:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Popis:',
'LBL_EC_KEY'=>'Klíč:',
'LBL_EC_CHECKERROR'=>'Prosím vyberte modul.',
'LBL_EC_CUSTOMFIELD'=>'vlastní pole',
'LBL_EC_CUSTOMLAYOUT'=>'upravená rozvržení',
'LBL_EC_CUSTOMDROPDOWN' => 'Upravený dropdown',
'LBL_EC_NOCUSTOM'=>'Žádné moduly nebyly upraveny.',
'LBL_EC_EXPORTBTN'=>'Export',
'LBL_MODULE_DEPLOYED' => 'Modul byl nasazen.',
'LBL_UNDEFINED' => 'nedefinován',
'LBL_EC_CUSTOMLABEL'=>'Přizpůsobit popisek',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Nepodařilo se získat údaje',
'LBL_AJAX_TIME_DEPENDENT' => 'Probíhajá časově závisle akce. Prosím, vyčkejte a zkuste to znovu za několik sekund.',
'LBL_AJAX_LOADING' => 'Nahrávám...',
'LBL_AJAX_DELETING' => 'Mažu...',
'LBL_AJAX_BUILDPROGRESS' => 'Buduji...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Provádím nasazení...',
'LBL_AJAX_FIELD_EXISTS' =>'Jméno pole které jste zadali už existuje. Prosím zadejte jiné jméno pole.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Jste si jisti, že chcete odstranit tento balíček? Budou odstraněny všechny soubory spojené s tímto balíčkem.',
'LBL_JS_REMOVE_MODULE' => 'Jste si jisti, že chcete odstranit tento modul? Budou odstraněny všechny soubory spojené s tímto modul.',
'LBL_JS_DEPLOY_PACKAGE' => 'Žádné úpravy, které jste provedli ve studiu nebudou přepsány, pokud tento modul je znovu-nasazený. Jste si jisti, že chcete pokračovat?',

'LBL_DEPLOY_IN_PROGRESS' => 'Nasazuji balík',
'LBL_JS_VALIDATE_NAME'=>'Název - Musí být alfanumerické bez mezer a začínající písmenem',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Jméno balíčku již existuje',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Klíč - Musí být alfanumerický a začínat písmenem',
'LBL_JS_VALIDATE_KEY'=>'Klíč - musí být alfanumerické',
'LBL_JS_VALIDATE_LABEL'=>'Prosím, zadejte popisek, který bude použit jako zobrazovaný název pro tento modul',
'LBL_JS_VALIDATE_TYPE'=>'Prosím, vyberte typ modulu, který chcete stavět z výše uvedeného seznamu',
'LBL_JS_VALIDATE_REL_NAME'=>'Název - Musí být alfanumerické bez mezer',
'LBL_JS_VALIDATE_REL_LABEL'=>'Label - přidejte název, který se zobrazí nad pod-panelem',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Přejete si skutečně smazat toto požadované vybírací pole? Můžete tím ovlivnit funkcionalitu vaší aplikace.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Přejete si skutečně smazat toto vybírací pole? Smazáním fází Uzavřeno - vyhráno a Uzavřeno - prohráno přestane modul Předpovědí fungovat správně.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Přejete si skutečně smazat prodejní fázi Uzavřeno - vyhráno? Smazáním této fáze přestane modul Předpovědí fungovat správně.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Přejete si skutečně smazat prodejní fázi Uzavřeno - prohráno? Smazáním této fáze přestane modul Předpovědí fungovat správně.',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Toto vytvoří tento vztah trvalím. Jste si jisti, že chcete nasadit tento vztah?',
'LBL_CONFIRM_DONT_SAVE' => 'Byly provedeny změny od posledního uložení, chcete je uložit?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Uložit změny?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Data mohou být zkrácena a toto nelze vrátit zpět, jste si jisti, že chcete pokračovat?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Zvolte odpovídající typ dat na základě typu dat, které budou vloženy do pole.',
'LBL_POPHELP_SEARCHABLE'=>'Vyberte prioritu pro toto pole. <br /> Pole s vyšší prioritou má větší váhu při vyhledávání. <br /> Pokud se provádí vyhledávání, záznamy, které obsahují pole s vyšší prioritou budu ve výsledku na vyšších pozicích. <br /> Změníte-li prioritu pro pole z jedné úrovně do druhé, systémová indexace zapíše změny. <br/> Nezapomeňte vybrat data ke smazání v době, kdy se provádí indexace.',
'LBL_POPHELP_IMPORTABLE'=>'Ano: Pole bude zahrnuto do operace importu.<br><br />Ne.: Pole nebudou zahrnuta do operace importu.<br><br />Požadováno: Hodnota pole musí být v každé operaci importu.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Zadejte šířku v pixelech.<br><br />Nahraný obrázek bude změněn do tohoto rozměru.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Zadejte výšku v pixelech.<br><br />Nahraný obrázek bude změněn do tohoto rozměru.',
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
'LBL_RESET' => 'Reset',
'LBL_RESET_MODULE' => 'Zrušit modul',
'LBL_REMOVE_CUSTOM' => 'Smazat úpravy',
'LBL_CLEAR_RELATIONSHIPS' => 'Vymazat vztahy',
'LBL_RESET_LABELS' => 'Zrušit štítky',
'LBL_RESET_LAYOUTS' => 'Zrušit rozvržení',
'LBL_REMOVE_FIELDS' => 'Odebrat vlastní pole',
'LBL_CLEAR_EXTENSIONS' => 'Vyčistit rozšíření',

'LBL_HISTORY_TIMESTAMP' => 'Časová známka',
'LBL_HISTORY_TITLE' => 'historie',

'fieldTypes' => array(
                'varchar'=>'Textové pole',
                'int'=>'integer',
                'float'=>'Plovoucí',
                'bool'=>'"Checkbox"',
                'enum'=>'"Dropdown"',
                'multienum' => '"MultiSelect"',
                'date'=>'Datum:',
                'phone' => 'Telefon',
                'currency' => 'Měna:',
                'html' => 'HTML',
                'radioenum' => 'Rádio',
                'relate' => 'Vazba',
                'address' => 'Adresa',
                'text' => 'Oblast textu',
                'url' => 'URL',
                'iframe' => 'Rám',
                'image' => 'Obrázek',
                'encrypt'=>'Šifrovat',
                'datetimecombo' =>'Datum a čas',
                'decimal'=>'Desetinný',
),
'labelTypes' => array(
    "" => "Často používané popisky",
    "all" => "všechny popisky",
),

'parent' => 'Flexibilní vztah',

'LBL_ILLEGAL_FIELD_VALUE' =>"\"Dropdown\" nemůže obsahovat uvozovky.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Označujete položku pro odstranění z \"dropdown\" seznamu. Jakékoli \"dropdown\" pole užívající tento seznam s touto polokou jako hodnotu již nebude zobrazeno. Hodnota již nebude moci být vybrána z \"dropdownu\". Jste si jisti, že chcete pokračovat?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
