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
    'LBL_LOADING' => 'Indlæser ...' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Skjul valgmuligheder' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Slet' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Giv et <b>navn</b> til pakken. Det navn, du indtaster, skal være alfanumerisk og må ikke indeholde mellemrum. (Eksempel: HR_Management)<br /><br />Du kan angive <b>forfatter</b> og <b>beskrivelsesinformation</b> for pakken.<br /><br />Klik på <b>Gem</b> for at oprette pakken.',
            'modify'=>'Egenskaber og muligheder for <b>pakken</b> vises her.<br /><br />Du kan ændre <br>navn</b>, <b>forfatter</b> og <b>beskrivelse</b> af pakken, samt se og tilpasse alle moduler, der er indeholdt i pakken.<br /><br />Klik på <b>Nyt modul</b> for at oprette et modul til pakken.<br /><br />Hvis pakken indeholder mindst et modul, kan du <b>udgive</b> og <b>installere</b> pakken, samt <b>eksporterer</b> tilpasningerne i pakken.',
            'name'=>'Dette er <b>navnet</b> på den nuværende pakke.<br /><br />Det navn, du indtaster, skal være alfanumerisk og starte med et bogstav og ikke indeholde mellemrum. (Eksempel: HR_Management)',
            'author'=>'Dette er <b>forfatteren</b>, der vises under installationen, som navnet på den/dem, der skabte pakken. Forfatteren kan enten være en enkeltperson eller en virksomhed.',
            'description'=>'Dette er <b>beskrivelsen</b> af pakken, der vises under installationen.',
            'publishbtn'=>'Klik på <b>Udgiv</b> for at gemme alle indtastede data og skabe en zip-fil, der er en installerbar version af pakken.<br /><br />Brug <b>Modulindlæser</b> til at uploade zip-filen og installere pakken.',
            'deploybtn'=>'Klik på <b>Installer</b> for at gemme alle indtastede data installere pakken, herunder alle moduler i den aktuelle Sugar løsning.',
            'duplicatebtn'=>'Klik på Dupliker for at kopiere indholdet af pakken over i en ny pakke og for at vise den nye pakke.<br /><br />For den nye pakke vil et nyt navn blive genereret automatisk ved at tilføje et tal i slutningen af navnet på den pakke, der bruges til at oprette den nye. Du kan omdøbe den nye pakke ved at indtaste et nyt <b>navn</b> og klikke på <b>Gem</b>.',
            'exportbtn'=>'Klik på <b>Eksporter</b> for at oprette en zip-fil, der indeholder tilpasninger foretaget i pakken.<br /><br />Den genererede fil er ikke en installerbar version af pakken.<br /><br />Brug <b>Modulindlæser</b> til at importere zip-filen og få pakken, herunder tilpasninger, vist i Modulgeneratoren.',
            'deletebtn'=>'Klik på <b>Slet</b> for at slette denne pakke og alle filer relateret til denne pakke.',
            'savebtn'=>'Klik på <b>Gem</b> for at gemme alle indtastede data i forbindelse med pakken.',
            'existing_module'=>'Klik på <b>Modul</b> ikonet for at redigere egenskaber og tilpas felter, relationer og layout i forbindelse med modulet.',
            'new_module'=>'Klik på <b>Nyt modul</b> for at oprette et nyt modul for denne pakke.',
            'key'=>'Denne 5-tegns alfanumeriske <b>nøgle</b> vil blive brugt til prefix på alle mapper, gruppenavne og databasetabeller for alle moduler i den nuværende pakke.<br /><br />Nøglen bliver brugt til at sikre unikke tabelnavne.',
            'readme'=>'Klik for at tilføje <b>readme</b> tekst til denne pakke.<br /><br />Readme teksten vil være tilgængelig på installationstidspunktet.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Giv et <b>navn</b> til modulet. <b>Etiketten</b>, som du giver, vil blive vist i navigationsfanen.<br /><br />Vælger at vise en navigationsfane for modulet ved at afkryds <b>Navigationsfane</b> afkrydsningsfeltet.<br /><br />Afkryds <b>Team sikkerheds afkrydsningsfeltet</b> for at have et Team valgfelt inde i modulets poster.<br /><br />Vælg derefter den type af modul du gerne vil oprette.<br /><br />Vælg en skabelontype. Hver skabelon indeholder et bestemt sæt af felter, samt foruddefinerede layouts, der kan bruges som grundlag for dit modul.<br /><br />Klik på <b>Gem</b> for at oprette modulet.',
        'modify'=>'Du kan ændre modulegenskaberne eller tilpasse <b>felter</b>, <b>relationer</b> og <b>layout</b> i ved modulet.',
        'importable'=>'Afkrydsning af <b>Importerbar</b> i afkrydsningsfeltet vil gøre det muligt at importere til dette modul.<br /><br />Et link til Importeringsguiden vil vises i genvejepanelet i modulet. Importeringsguiden gør det lettere at importere data fra eksterne kilder ind i det brugerdefinerede modul.',
        'team_security'=>'Afkrydsning af <b>Team sikkerhed</b> i afkrydsningsfeltet vil aktivere team sikkerthed for dette modul.<br /><br />Hvis Team sikkerhed er aktiveret, vil team valgfeltet være tilstede i posterne i modulet.',
        'reportable'=>'Afkrydsning af dette felt vil tillade dette modul at få rapporter kørt imod det.',
        'assignable'=>'Afkrydsning af dette felt vil muliggøre en post i dette modul at blive tilknyttet en udvalgt bruger.',
        'has_tab'=>'Afkrydsning af <b>Navigationsfane</b> vil give en navigationsfane for modulet.',
        'acl'=>'Afkrydsning af dette felt vil aktivere adgangskontrol på dette modul, herunder feltniveausikkerhed.',
        'studio'=>'Afkrydsning af dette felt vil tillade administratorer at tilrette dette modul inde i Studio.',
        'audit'=>'Afkrydsning af dette felt vil aktivere revision til dette modul. Ændringer i visse områder vil blive registreret, så administratorer kan gennemgå ændringer i historik.',
        'viewfieldsbtn'=>'Klik på <b>vis felter</b> for at se de felter, der er forbundet med modulet, og for at oprette og redigere brugerdefinerede felter.',
        'viewrelsbtn'=>'Klik på <b>Vis relationer</b> for at se de tilknyttede relationer til dette modul og skabe nye relationer.',
        'viewlayoutsbtn'=>'Klik på <b>Vis layout</b> for at se layout for modulet, og for at tilpasse feltopsætningen inden for layoutet.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'Klik på <b>Dupliker</b> for at kopiere egenskaberne fra modulet over i et nyt modul og for at vise det nye module.<br /><br />For det nye modul vil et nyt navn blive genereret automatisk ved at tilføje et tal i slutningen af navnet på det modul, der bruges til at oprette den nye.',
        'deletebtn'=>'Klik på <b>Slet</b> for at slette dette modul.',
        'name'=>'Dette er <b>navnet</b> på det aktuelle modul.<br /><br />Navnet skal være alfanumerisk, skal begynde med et bogstav og må ikke indeholde mellemrum. (Eksempel: HR_Management)',
        'label'=>'Dette er den <b>etiket</b>, der vil blive vist i navigationsfanen for modulet.',
        'savebtn'=>'Klik på <b>Gem</b> for at gemme alle indtastede data i forbindelse med modulet.',
        'type_basic'=>'<b>Standard</b> skabelontypen indeholder standard felter såsom navn, tildelt til, team, oprettet og beskrivelsesfelter.',
        'type_company'=>'<b>Firma</b> skabelontypen giver organisationsspecifikke felter, såsom firmanavn, industri og faktureringsadresse.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard virksomhedsmodulet.',
        'type_issue'=>'<b>Sager</b> skabelonentypen giver sags- og fejl-specifikke felter, såsom som nummer, status, prioritet og beskrivelse.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Sagsmodulet.',
        'type_person'=>'<b>Kontakt</b> skabelontypen giver kontaktspecifikke felter, såsom hilsen, titel, navn, adresse og telefonnummer.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Kontaktmodulet.',
        'type_sale'=>'<b>Salg</b> skabelontypen giver salgsmulighedsspecifikke felter, såsom kundeemnekilde, salgsfase, beløb og sandsynlighed.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Salgsmuligheder-modulet.',
        'type_file'=>'<b>Fil</b> skabelontypen giver dokumentspecifikke felter, såsom filnavn, dokumenttype og udgivelsesdato.<br /><br />Brug denne skabelon til at oprette moduler, der ligner standard Dokument-modulet.',

    ),
    'dropdowns'=>array(
        'default' => 'Alle applikationens <b>Rullelister</b> er vist her.<br /><br />Rullelisterne kan bruges til rullelistefelter i alle moduler.<br /><br />For foretage ændringer i en eksisterende rulleliste, skal du klikke på rullelistenavnet.<br /><br />Klik på <b>Tilføj rulleliste</b> for at oprette en ny rulleliste.',
        'editdropdown'=>'Rullelister kan bruges til standard eller brugerdefinerede rullelistefelter i alle moduler.<br /><br />Give et <b>navn</b> til rullelisten.<br /><br />Hvis nogen sprogpakke er installeret i applikationen, kan du vælge det <b>sprog</b>, der bruges til elementerne på rullelisten.<br /><br /> I<b>Elementnavnsfeltet</b> angives et navn for muligheden i rullelisten. Dette navn vil ikke blive vist på rullelisten, der er synlig for brugerne.<br /><br />I <b>Etiket</b> feltet, angives en etiket, der vil være synlig for brugerne.<br /><br />Efter angivelsen af elementnavnet og etiketten, klik på <b>Tilføj</b> for at tilføje elementet til rullelisten.<br /><br />For at rearrangere elementer på listen, kan du trække og slippe elementer i den ønskede position.<br /><br />For redigere etiketten for et element, skal du klikke på <b>Rediger ikonet</b> og indtaste en ny etiket. For at slette et element fra rullelisten, skal du klikke på ikonet <b>Slet</b>.<br /><br />Hvis du vil fortryde en ændring til en etiket, skal du klikke på <b>Fortryd</b>. For genskabe en ændring, som var fortrudt, skal du klikke <b>Genskab</b>.<br /><br />Klik på <b>Gem</b> for at gemme rullelisten.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klik på <b>Gem og implementer</b> at gemme ændringerne du har lavet og for at gøre dem aktive i modulet.',
        'historyBtn'=> 'Klik på <b>Vis historik</b> for at få vist og gendanne et tidligere gemt layout fra historikken.',
        'historyDefault'=> 'Klik på <b>Gendan standard</b> for at gendanne en visning til dens oprindelige layout.',
        'Hidden' 	=> '<b>Skjulte</b> felter vises ikke i underpaneler.',
        'Default'	=> '<b>Standard</b> felter vises i underpanelet.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klik på <b>Gem og implementer</b> at gemme ændringerne du har lavet og for at gøre dem aktive i modulet.',
        'historyBtn'=> 'Klik på <b>Vis historik</b> for at få vist og gendanne et tidligere gemt layout fra historikken.',
        'historyDefault'=> 'Klik på <b>Gendan standard</b> for at gendanne en visning til dens oprindelige layout.',
        'Hidden' 	=> '<b>Skjulte</b> felter som i øjeblikket ikke er tilgængelig for brugerne listevisninger.',
        'Available' => '<b>Tilgængelige</b> felter er ikke vist som standard, men kan tilføjes til listevisninger af brugerne.',
        'Default'	=> '<b>Standard</b> felter, der vises i listevisninger, som ikke er tilpasset af brugerne.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Klik på <b>Gem og implementer</b> at gemme ændringerne du har lavet og for at gøre dem aktive i modulet.',
        'historyBtn'=> 'Klik på <b>Vis historik</b> for at få vist og gendanne et tidligere gemt layout fra historikken.',
        'historyDefault'=> 'Klik på <b>Gendan standard</b> for at gendanne en visning til dens oprindelige layout.',
        'Hidden' 	=> '<b>Skjulte</b> felter som i øjeblikket ikke er tilgængelig for brugerne listevisninger.',
        'Default'	=> '<b>Standard</b> felter, der vises i listevisninger, som ikke er tilpasset af brugerne.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Klik på <b>Gem og implementer</b> vil gemme alle ændringerne og gøre dem aktive.',
        'Hidden' 	=> '<b>Skjulte</b> felter vises ikke i søgningen.',
        'historyBtn'=> 'Klik på <b>Vis historik</b> for at få vist og gendanne et tidligere gemt layout fra historikken.',
        'historyDefault'=> 'Klik på <b>Gendan standard</b> for at gendanne en visning til dens oprindelige layout.',
        'Default'	=> '<b>Standard</b> felter vises i søgningen.'
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
        'saveBtn'	=> 'Klik på <b>Gem</b> for at bevare de ændringer, du har foretaget ved layoutet siden sidste gang du gemte det.<br /><br />Ændringerne vil ikke blive vist i modulet, indtil du implementerer gemte ændringer.',
        'historyBtn'=> 'Klik på <b>Vis historik</b> for at få vist og gendanne et tidligere gemt layout fra historikken.',
        'historyDefault'=> 'Klik på <b>Gendan standard</b> for at gendanne en visning til dens oprindelige layout.',
        'publishBtn'=> 'Klik på <b>Gem og Installer</b> for at gemme alle ændringer, du har foretaget ved layout, siden sidste gang du gemte det, og for at gøre ændringer aktive i modulet.<br /><br />Layoutet vil straks blive vist i modulet.',
        'toolbox'	=> 'The <b>Toolbox</b> contains the <b>Recycle Bin</b>, additional layout elements and the set of available fields to add to the layout.<br/><br/>The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br><br>The layout elements are <b>Panels</b> and <b>Rows</b>. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br/><br/>Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br/><br/>The <b>Filler</b> field creates blank space in the layout where it is placed.',
        'panels'	=> 'The <b>Layout</b> area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br/><br/>You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br/><br/>Remove elements by dragging and dropping them in the <b>Recycle Bin</b> in the Toolbox, or add new elements and fields by dragging them from the <b>Toolbox</b>s and dropping them in the desired location in the layout.',
        'delete'	=> 'Træk og slip ethvert element her for at fjerne det fra layoutet',
        'property'	=> 'Rediger etiketten, der vises for dette felt.<br /><b>Tab-rækkefølge</b> bestemmer i hvilken rækkefølge tabulatortasten skifter mellem felterne.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Felterne, der er tilgængelige for modulet, er vist her med feltnavn.<br /><br />Brugerdefinerede felter, oprettet til modulet, vises over de felter, der er tilgængelige for modulet som standard.<br /><br />Hvis du vil redigere et felt, skal du klikke på <b>feltavnet</b>.<br /><br />Hvis du vil oprette et nyt felt, skal du klikke på <b>Tilføj felt</b>.',
        'mbDefault'=>'The <b>Fields</b> that are available for the module are listed here by Field Name.<br><br>To configure the properties for a field, click the Field Name.<br><br>To create a new field, click <b>Add Field</b>. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br><br>After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
        'addField'	=> 'Select a <b>Data Type</b> for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br><br> Provide a <b>Name</b> for the field.  The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br><br> The <b>Display Label</b> is the label that will appear for the fields in the module layouts.  The <b>System Label</b> is used to refer to the field in the code.<br><br> Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br><br> <b>Help Text</b> appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br><br> <b>Comment Text</b> is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br><br> <b>Default Value</b> will appear in the field.  Users can enter a new value in the field or use the default value.<br><br> Select the <b>Mass Update</b> checkbox in order to be able to use the Mass Update feature for the field.<br><br>The <b>Max Size</b> value determines the maximum number of characters that can be entered in the field.<br><br> Select the <b>Required Field</b> checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br><br> Select the <b>Reportable</b> checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br><br> Select the <b>Audit</b> checkbox in order to be able to track changes to the field in the Change Log.<br><br>Select an option in the <b>Importable</b> field to allow, disallow or require the field to be imported into in the Import Wizard.<br><br>Select an option in the <b>Duplicate Merge</b> field to enable or disable the Merge Duplicates and Find Duplicates features.<br><br>Additional properties can be set for certain data types.',
        'editField' => 'Egenskaberne for dette felt kan tilpasses.<br /><br />Klik <b>Klon</b> for at oprette et nyt felt med de samme egenskaber.',
        'mbeditField' => 'The <b>Display Label</b> of a template field can be customized. The other properties of the field can not be customized.<br><br>Click <b>Clone</b> to create a new field with the same properties.<br><br>To remove a template field so that it does not display in the module, remove the field from the appropriate <b>Layouts</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Export customizations made in Studio by creating packages that can be uploaded into another Sugar instance through the <b>Module Loader</b>.<br><br>  First, provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package as well.<br><br>Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br><br>Then click <b>Export</b> to create a .zip file for the package containing the customizations.',
        'exportCustomBtn'=>'Klik på <b>Eksporter</b> for at oprette en zip-fil for pakken, der indeholder de tilpasninger, som du ønsker at eksportere.',
        'name'=>'Dette er <b>navnet</b> på pakken. Dette navn vil blive vist under installationen.',
        'author'=>'Dette er <b>forfatteren</b>, der vises under installationen, som navnet på den/dem, der skabte pakken. Forfatteren kan enten være en enkeltperson eller en virksomhed.',
        'description'=>'Dette er <b>beskrivelsen</b> af pakken, der vises under installationen.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Velkommen til <b>Udviklerværktøjsområdet</b>.<br /><br />Brug værktøjerne i dette område til at oprette og håndtere standard og tilpassede moduler og felter.',
        'studioBtn'	=> 'Brug <b>Studio</b> til at tilpasse implementerede moduler.',
        'mbBtn'		=> 'Brug <b>modulgeneratoren</b> til at skabe nye moduler.',
        'sugarPortalBtn' => 'Brug <b>Sugar Portal-editor</b> til at styre og tilpasse Sugar Portal.',
        'dropDownEditorBtn' => 'Brug <b>rullelisteeditor</b> til at tilføje og redigere globale rullelister i rullelistefelter.',
        'appBtn' 	=> 'Applikationstilstand er hvor du kan tilpasse forskellige egenskaber i programmet, såsom hvor mange TPS rapporter, der vises på forsiden',
        'backBtn'	=> 'Tilbage til det forrige trin.',
        'studioHelp'=> 'Brug <b>Studio</b> til at bestemme hvad og hvordan oplysninger vises i modulerne.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Klik for at redigere dette modul.',
        'moduleHelp'=> 'De komponenter, som du kan tilpasse for modulet, vises her.<br /><br />Klik på et ikon for at vælge det komponent, der skal redigeres.',
        'fieldsBtn'	=> 'Opret og tilpas <b>felter</b> for at lagre oplysninger i modulet.',
        'labelsBtn' => 'Redigere <b>etiketterne</b> som vises for felterne og andre titler i modulet.'	,
        'relationshipsBtn' => 'Tilføje nye eller se eksisterende <b>relationer</b> for modulet.' ,
        'layoutsBtn'=> 'Customize the module <b>Layouts</b>.  The layouts are the different views of the module contaning fields.<br><br>You can determine which fields appear and how they are organized in each layout.',
        'subpanelBtn'=> 'Bestem hvilke felter der vises i <b>underpanelerne</b> i modulet.',
        'portalBtn' =>'Tilpas modul-<b>layouts</b>, der vises i <b>SugarPortalen</b>.',
        'layoutsHelp'=> 'The module <b>Layouts</b> that can be customized appear here.<br><br>The layouts display fields and field data.<br><br>Click an icon to select the layout to edit.',
        'subpanelHelp'=> 'Klik på et ikon for at vælge modulet der skal redigeres.',
        'newPackage'=>'Klik på <b>Ny pakke</b> for at oprette en ny pakke.',
        'exportBtn' => 'Klik på <b>Eksporter tilpasninger</b> for at oprette og downloade en pakke, der indeholder tilpasninger lavet i Studio for specifikke moduler.',
        'mbHelp'    => 'Brug <b>Modulgeneratoren</b> til at oprette pakker indeholdende brugerdefinerede moduler baseret på standard eller brugerdefinerede objekter.',
        'viewBtnEditView' => 'Customize the module\'s <b>EditView</b> layout.<br><br>The EditView is the form containing input fields for capturing user-entered data.',
        'viewBtnDetailView' => 'Customize the module\'s <b>DetailView</b> layout.<br><br>The DetailView displays user-entered field data.',
        'viewBtnDashlet' => 'Customize the module\'s <b>Sugar Dashlet</b>, including the Sugar Dashlet\'s ListView and Search.<br><br>The Sugar Dashlet will be available to add to the pages in the Home module.',
        'viewBtnListView' => 'Customize the module\'s <b>ListView</b> layout.<br><br>The Search results appear in the ListView.',
        'searchBtn' => 'Customize the module\'s <b>Search</b> layouts.<br><br>Determine what fields can be used to filter records that appear in the ListView.',
        'viewBtnQuickCreate' =>  'Customize the module\'s <b>QuickCreate</b> layout.<br><br>The QuickCreate form appears in subpanels and in the Emails module.',

        'searchHelp'=> 'The <b>Search</b> forms that can be customized appear here.<br><br>Search forms contain fields for filtering records.<br><br>Click an icon to select the search layout to edit.',
        'dashletHelp' =>'<b>Sugar Dashlet</b> layouts, der kan tilpasses, vises her.<br /><br />Sugar Dashlet&#39;en vil kunnet tilføjes siderne i forside-modulet.',
        'DashletListViewBtn' =>'<b>Sugar Dashlet listevisningen</b> viser poster baseret på Sugar Dashlet søgefiltrer.',
        'DashletSearchViewBtn' =>'<b>Sugar Dashlet søgning</b> filtrer poster for Sukker Dashlet listevisning.',
        'popupHelp' =>'<b>Popup</b> layouts, der kan tilpasses, vises her.',
        'PopupListViewBtn' => '<b>Popup listevisningen</b> viser poster baseret på Popup søgevisningerne.',
        'PopupSearchViewBtn' => '<b>Popup søgning</b> viser poster for Popup listevisningen.',
        'BasicSearchBtn' => 'Tilpas <b>standard søgeformular</b>, der vises i den standard søgefanen i søgeområdet for modulet.',
        'AdvancedSearchBtn' => 'Tilpas <b>avanceret søgeformular</b>, der vises i den avancerede søgefanen i søgeområdet for modulet.',
        'portalHelp' => 'Administrer og tilpas <b>Sugar Portal</>.',
        'SPUploadCSS' => 'Indlæs et <b>Style Sheet</b> for Sugar Portalen.',
        'SPSync' => '<b>Synkroniser</b> tilpasninger for Sugar Portal løsningen.',
        'Layouts' => 'Tilpas layouts for Sugar Portal modulerne.',
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
        'editDropDownBtn' => 'Redigere en global rullelistning',
        'addDropDownBtn' => 'Tilføj en ny global rullelistning',
    ),
    'fieldsHelp'=>array(
        'default'=>'The <b>Fields</b> in the module are listed here by Field Name.<br><br>The module template includes a pre-determined set of fields.<br><br>To create a new field, click <b>Add Field</b>.<br><br>To edit a field, click the <b>Field Name</b>.<br/><br/>After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
        'addrelbtn'=>'mouse-over hjælp for at tilføje relation ..',
        'addRelationship'=>'<b>Relationships</b> can be created between the module and another custom module or a deployed module.<br><br> Relationships are visually expressed through subpanels and relate fields in the module records.<br><br>Select one of the following relationship <b>Types</b> for the module:<br><br> <b>One-to-One</b> - Both modules\' records will contain relate fields.<br><br> <b>One-to-Many</b> - The Primary Module\'s record will contain a subpanel, and the Related Module\'s record will contain a relate field.<br><br> <b>Many-to-Many</b> - Both modules\' records will display subpanels.<br><br> Select the <b>Related Module</b> for the relationship. <br><br>If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br><br> Click <b>Save</b> to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'The <b>Labels</b> for the fields and other titles in the module can be changed.<br><br>Edit the label by clicking within the field, entering a new label and clicking <b>Save</b>.<br><br>If any language packs are installed in the application, you can select the <b>Language</b> to use for the labels.',
        'saveBtn'=>'Klik på <b>Gem</b> for at gemme alle ændringer.',
        'publishBtn'=>'Klik på <b>Gem og installer</b> for at gemme alle ændringer og gøre dem aktive.',
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
        'studioWelcome'=>'Alle de allerede installerede moduler, herunder standard og modulindlæst objekter, kan tilpasses i Studio.'
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
        'labels'=> 'Etiketterne på standard felterne samt brugerdefinerede felter kan ændres. Ændring af feltetiketter vil ikke påvirke data gemt i felterne.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
        'savebtn'	=> 'Klik på <b>Gem</b> vil gemme alle ændringerne og gøre dem aktive.',
        'Hidden' 	=> '<b>Skjulte</b> felter er felter, som i øjeblikket ikke er tilgængelig for brugerne listevisninger.',
        'Available' => 'Tilgængelige felter er felter, der ikke bliver vist som standard, men kan aktiveres af brugerne.',
        'Default'	=> '<b>Standard</b> felter vises til brugere, der ikke har oprettet brugerdefinerede listevisningsindstillinger.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
        'savebtn'	=> 'Klik på <b>Gem og implementer</b>vil gemme alle ændringerne du har lavet og gøre dem aktive.',
        'Hidden' 	=> 'Skjulte felter er felter, som ikke vises i søgninger.',
        'Default'	=> 'Standard felter vises i søgninger.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'saveBtn'	=> 'Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
        'publishBtn'=> 'Klik på denne knap for at installere layoutet. Det betyder, at dette layout omgående vil blive set af brugere af dette modul.',
        'toolbox'	=> 'The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
        'panels'	=> 'This area shows how your layout will look to users of this module when it is depolyed.<br/><br/>You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'dropdownaddbtn'=> 'Hvis du klikker på denne knap føjes en ny post til rullelisten.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Customizations made in Studio within this instance can be packaged and deployed in another instance.  <br><br>Provide a <b>Package Name</b>.  You can provide <b>Author</b> and <b>Description</b> information for package.<br><br>Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br><br>Click <b>Export</b> to create a .zip file for the package containing the customizations.  The .zip file can be uploaded in another instance through <b>Module Loader</b>.',
        'exportCustomBtn'=>'Klik på <b>Eksporter</b> for at oprette en zip-fil for pakken, der indeholder de tilpasninger, som du ønsker at eksportere.',
        'name'=>'<b>Navnet</b> på pakken vil blive vist i modulindlæseren efter af pakken er indlæst til installation i Studio.',
        'author'=>'The <b>Author</b> is the name of the entity that created the package. The Author can be either an individual or a company.<br><br>The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.
',
        'description'=>'<b>Beskrivelsen</b> af pakken vil blive vist i modulindlæseren efter af pakken er indlæst til installation i Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b1> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
        'mbBtn'		=> 'Brug <b>modulgeneratoren</b> til at skabe nye moduler.',
        'appBtn' 	=> 'Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'Tilbage til det forrige trin.',
        'studioHelp'=> '<b>Brug Studio til at tilpasse installerede moduler.</b>',
        'moduleBtn'	=> 'Klik for at redigere dette modul.',
        'moduleHelp'=> '<b>Vælg det modulkomponent, som du ønsker at redigere</b>',
        'fieldsBtn'	=> '<b>Du kan redigere og oprette brugerdefinerede felter her.</b>',
        'labelsBtn' => '<b>Redigere etiketterne for at vise for værdier i dette modul.</b>'	,
        'layoutsBtn'=> '<b>Tilpas layoutet for rediger-, detalje-, liste- og søgningsvisning.</b>',
        'subpanelBtn'=> '<b>Rediger hvilke oplysninger, der vises i dette moduls underpaneler.</b>',
        'layoutsHelp'=> 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
        'subpanelHelp'=> '<b>Vælg en underpanel der skal redigeres.</b>',
        'searchHelp' => '<b>Vælg et søgningslayout der skal redigeres.</b>',
        'labelsBtn'	=> '<b>Redigere etiketterne for at vise for værdier i dette modul.</b>',
        'newPackage'=>'Klik på <b>Ny pakke</b> for at oprette en ny pakke.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'Click <b>Export Customizations</b> to create a package containing customizations made in Studio for specific modules.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Rullelisteeditor',

//ASSISTANT
'LBL_AS_SHOW' => 'Vis assistent fremover.',
'LBL_AS_IGNORE' => 'Ignorer assistent fremover.',
'LBL_AS_SAYS' => 'Assistenten siger:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Modulgenerator',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Rullelisteeditor',
'LBL_EDIT_DROPDOWN'=>'Rediger rulleliste',
'LBL_DEVELOPER_TOOLS' => 'Udviklerværktøjer',
'LBL_SUGARPORTAL' => 'Sugar Portal-editor',
'LBL_SYNCPORTAL' => 'Synkroniser portal',
'LBL_PACKAGE_LIST' => 'Pakkeliste',
'LBL_HOME' => 'Startside',
'LBL_NONE'=>'- Ingen -',
'LBL_DEPLOYE_COMPLETE'=>'Implementering færdig',
'LBL_DEPLOY_FAILED'   =>'En fejl er fremkommende under installeringsprocessen, din programpakker er muligvis ikke installeret korret.',
'LBL_ADD_FIELDS'=>'Tilføj brugerdefinerede felter',
'LBL_AVAILABLE_SUBPANELS'=>'Tilgængelige underpaneler',
'LBL_ADVANCED'=>'Avanceret',
'LBL_ADVANCED_SEARCH'=>'Avanceret søgning',
'LBL_BASIC'=>'Grundlæggende',
'LBL_BASIC_SEARCH'=>'Grundlæggende søgning',
'LBL_CURRENT_LAYOUT'=>'Layout',
'LBL_CURRENCY' => 'Valuta',
'LBL_CUSTOM' => 'Brugerdefineret',
'LBL_DASHLET'=>'Sugar-dashlet',
'LBL_DASHLETLISTVIEW'=>'Listevisning af Sugar-dashlet',
'LBL_DASHLETSEARCH'=>'Søg efter Sugar-dashlet',
'LBL_POPUP'=>'Popup visning',
'LBL_POPUPLIST'=>'Popup listevisning',
'LBL_POPUPLISTVIEW'=>'Popup listevisning',
'LBL_POPUPSEARCH'=>'Popup søgning',
'LBL_DASHLETSEARCHVIEW'=>'Søg efter Sugar-dashlet',
'LBL_DISPLAY_HTML'=>'Vis HTML-kode',
'LBL_DETAILVIEW'=>'Detaljevisning',
'LBL_DROP_HERE' => '[Slip her]',
'LBL_EDIT'=>'Rediger',
'LBL_EDIT_LAYOUT'=>'Rediger layout',
'LBL_EDIT_ROWS'=>'Rediger rækker',
'LBL_EDIT_COLUMNS'=>'Rediger kolonner',
'LBL_EDIT_LABELS'=>'Rediger etiketter',
'LBL_EDIT_PORTAL'=>'Rediger portal for',
'LBL_EDIT_FIELDS'=>'Rediger felter',
'LBL_EDITVIEW'=>'Rediger visning',
'LBL_FILTER_SEARCH' => "Søg",
'LBL_FILLER'=>'"udfylder"',
'LBL_FIELDS'=>'Felter',
'LBL_FAILED_TO_SAVE' => 'Det lykkedes ikke at gemme',
'LBL_FAILED_PUBLISHED' => 'Det lykkedes ikke at udgive',
'LBL_HOMEPAGE_PREFIX' => 'Min',
'LBL_LAYOUT_PREVIEW'=>'Eksempel på layout',
'LBL_LAYOUTS'=>'Layout',
'LBL_LISTVIEW'=>'Listevisning',
'LBL_RECORDVIEW'=>'Postvisning',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Ny pakke',
'LBL_NEW_PANEL'=>'Nyt panel',
'LBL_NEW_ROW'=>'Ny række',
'LBL_PACKAGE_DELETED'=>'Pakken blev slettet',
'LBL_PUBLISHING' => 'Udgiver ...',
'LBL_PUBLISHED' => 'Udgivet',
'LBL_SELECT_FILE'=> 'Vælg fil',
'LBL_SAVE_LAYOUT'=> 'Gem layout',
'LBL_SELECT_A_SUBPANEL' => 'Vælg et underpanel',
'LBL_SELECT_SUBPANEL' => 'Vælg underpanel',
'LBL_SUBPANELS' => 'Underpaneler',
'LBL_SUBPANEL' => 'Underpanel',
'LBL_SUBPANEL_TITLE' => 'Titel:',
'LBL_SEARCH_FORMS' => 'Søg',
'LBL_STAGING_AREA' => 'Mellemstation "træk og slip poster her"',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar-felter "klik på poster for at føje dem til mellemstation"',
'LBL_SUGAR_BIN_STAGE' => 'Sugar-papirkurv "klik på poster for at føje dem til mellemstation"',
'LBL_TOOLBOX' => 'Værktøjskasse',
'LBL_VIEW_SUGAR_FIELDS' => 'Vis Sugar-felter',
'LBL_VIEW_SUGAR_BIN' => 'Vis Sugar-papirkurv',
'LBL_QUICKCREATE' => 'Hurtig oprettelse',
'LBL_EDIT_DROPDOWNS' => 'Rediger en global rulleliste',
'LBL_ADD_DROPDOWN' => 'Tilføj en ny global rulleliste',
'LBL_BLANK' => '- tom -',
'LBL_TAB_ORDER' => 'Tabulatorrækkefølge:',
'LBL_TAB_PANELS' => 'Vis paneler som faner',
'LBL_TAB_PANELS_HELP' => 'Vis hver enkelt panel som egen fane, i stedet for at have dem alle på en skærmvisning',
'LBL_TABDEF_TYPE' => 'Visningstype',
'LBL_TABDEF_TYPE_HELP' => 'Vælg, hvordan dette afsnit skal vises. Denne indstilling har kun effekt, hvis du har aktiveret faner på i dette view.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Faneblad',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Vælg Panel for at få dette panel display med i visningen af ​​layoutet. Vælg Faneblad for at få dette panel vist i et separat faneblad i layoutet. Når Faneblad er angivet for et panel, vil efterfølgende paneler indstillet til at vises som Panel blive tilføjet fanen.<br />En ny fane vil blive oprettet til næste panel, som har Faneblad valgt. Hvis Faneblad er valgt for et panel under det første panel, vil det første panel nødvendigvis være en fane.',
'LBL_TABDEF_COLLAPSE' => 'Fold sammen',
'LBL_TABDEF_COLLAPSE_HELP' => 'Vælg for at gøre panelets standard tilstand sammenfoldet',
'LBL_DROPDOWN_TITLE_NAME' => 'Navn',
'LBL_DROPDOWN_LANGUAGE' => 'Sprog',
'LBL_DROPDOWN_ITEMS' => 'Listeposter',
'LBL_DROPDOWN_ITEM_NAME' => 'Postnavn',
'LBL_DROPDOWN_ITEM_LABEL' => 'Vist etiket',
'LBL_SYNC_TO_DETAILVIEW' => 'Synkroniser til detaljevisning',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Vælg denne mulighed for at synkronisere redigeringsvisningslayout med det tilsvarende detaljevisningslayout. Felter og feltplacering i redigeringsvisning vil blive synkroniseret med og gemt til detaljevisning ved at klikke på Gem eller Gem & Implementer i redigeringsvisning.<br />Layout ændringer finde sted i detaljevisning.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Detaljevisningslayoutet bliver synkroniseret med det tilsvarende redigeringsvisningslayout.<br />Felter og feltplacering i dette detaljevisningslayoutet afspejler felterne og feltplaceringen i redigeringsvisningslayoutet.<br />Ændringer i detaljevisningslayoutet kan ikke gemmes eller sættes ind i denne side. Foretage ændringer eller fjern synkroniseringen for layouts i redigeringsvisning.',
'LBL_COPY_FROM_EDITVIEW' => 'Kopier fra redigeringsvisning',
'LBL_DROPDOWN_BLANK_WARNING' => 'Værdierne er påkrævet for både postnavn og vist etiket. For at tilføje en tom post, skal du klikke Tilføj uden at indtaste nogen værdier for postnavn og vist etiket.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Nøgle findes allerede i listen',
'LBL_NO_SAVE_ACTION' => 'Kunne ikke finde Gem handling for denne visning.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: forkert udformet dokument',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '**Angiver et kombineret felt. Et kombination felt er en samling af de enkelte felter. For eksempel, "Adresse" er et kombination felt, der indeholder "Adresse", "By", "Postnummer", "Område" og "Land".<br /><br />Dobbelt klik et kombinations felt for at se, hvilke felter der indeholder.',
'LBL_COMBO_FIELD_CONTAINS' => 'indeholder:',

'LBL_WIRELESSLAYOUTS'=>'Mobillayout',
'LBL_WIRELESSEDITVIEW'=>'Mobil Rediger visning',
'LBL_WIRELESSDETAILVIEW'=>'Mobil Detaljevisning',
'LBL_WIRELESSLISTVIEW'=>'Mobil Listevisning',
'LBL_WIRELESSSEARCH'=>'Mobil Søg',

'LBL_BTN_ADD_DEPENDENCY'=>'Tilføj afhængighed',
'LBL_BTN_EDIT_FORMULA'=>'Ret formel',
'LBL_DEPENDENCY' => 'Afhængighed',
'LBL_DEPENDANT' => 'Afhængig',
'LBL_CALCULATED' => 'Udregnet værdi',
'LBL_READ_ONLY' => 'Skrivebeskyttet',
'LBL_FORMULA_BUILDER' => 'Formelgenerator',
'LBL_FORMULA_INVALID' => 'Ugyldig formel',
'LBL_FORMULA_TYPE' => 'Formularen skal være af typen',
'LBL_NO_FIELDS' => 'Ingen felter fundet',
'LBL_NO_FUNCS' => 'Ingen',
'LBL_SEARCH_FUNCS' => 'Søgefunktioner...',
'LBL_SEARCH_FIELDS' => 'Søg i felter...',
'LBL_FORMULA' => 'Formel',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Afhængig',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Træk indstillinger fra listen til venstre over under tilgængelige indstillinger i den tilhørende rullegardinsmenu til listerne til højre for at aktivere disse muligheder, når den overordnede valgmulighed er valgt. Hvis ingen emner er tilgængelige når den overordnede valgmulighed er valgt vil den tilhørende rullegardinsmenu ikke blive vist.',
'LBL_AVAILABLE_OPTIONS' => 'Tilgængelige valgmuligheder',
'LBL_PARENT_DROPDOWN' => 'Overordnet rullegardinsmenu',
'LBL_VISIBILITY_EDITOR' => 'Visibilitets editor',
'LBL_ROLLUP' => 'Rollup',
'LBL_RELATED_FIELD' => 'Relateret felt',
'LBL_CONFIG_PORTAL_URL'=>'Link til tilpasset logo. De anbefalede logo dimensioner er 163 × 18 pixels.',
'LBL_PORTAL_ROLE_DESC' => 'Slet ikke denne rolle. Customer Self-Service Portal Role er et system-genereret rolle oprettes under Sugar Portal aktiveringsprocessen. Brug Adgangskontrollen i denne rolle for at aktivere og / eller deaktivere Bugs, sager eller Knowledge Base-moduler i Sugar Portal. Du må ikke ændre andre adgangskontroller for denne rolle for at undgå ukendte og uforudsigelige system adfærd. I tilfælde af utilsigtet sletning af denne rolle, genskabe det ved at deaktivere og muliggør Sugar Portal.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modul',
'LBL_LHS_MODULE'=>'Primært modul',
'LBL_CUSTOM_RELATIONSHIPS' => '* relation oprettet i Studio',
'LBL_RELATIONSHIPS'=>'Relationer',
'LBL_RELATIONSHIP_EDIT' => 'Rediger relation',
'LBL_REL_NAME' => 'Navn',
'LBL_REL_LABEL' => 'Etiket',
'LBL_REL_TYPE' => 'Type',
'LBL_RHS_MODULE'=>'Relateret modul',
'LBL_NO_RELS' => 'Ingen relationer',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Valgfri betingelse' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Kolonne',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Værdi',
'LBL_SUBPANEL_FROM'=>'Underpanel fra',
'LBL_RELATIONSHIP_ONLY'=>'Ingen synlige elementer oprettes til denne relation, da der er en allerede eksisterende synlig relation mellem disse to moduler.',
'LBL_ONETOONE' => 'En-til-en',
'LBL_ONETOMANY' => 'En-til-mange',
'LBL_MANYTOONE' => 'Mange-til-en',
'LBL_MANYTOMANY' => 'Mange-til-mange',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Vælg en funktion eller komponent.',
'LBL_QUESTION_MODULE1' => 'Vælg et modul.',
'LBL_QUESTION_EDIT' => 'Vælg et modul, der skal redigeres.',
'LBL_QUESTION_LAYOUT' => 'Vælg et layout, der skal redigeres.',
'LBL_QUESTION_SUBPANEL' => 'Vælg et underpanel, der skal redigeres.',
'LBL_QUESTION_SEARCH' => 'Vælg et søgelayout, der skal redigeres.',
'LBL_QUESTION_MODULE' => 'Vælg en modulkomponent, der skal redigeres.',
'LBL_QUESTION_PACKAGE' => 'Vælg en pakke, der skal redigeres, eller opret en ny pakke.',
'LBL_QUESTION_EDITOR' => 'Vælg et værktøj.',
'LBL_QUESTION_DROPDOWN' => 'Vælg en rulleliste, der skal redigeres, eller opret en ny rulleliste.',
'LBL_QUESTION_DASHLET' => 'Vælg et dashletlayout, der skal redigeres.',
'LBL_QUESTION_POPUP' => 'Vælg et popup layout at redigere',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relater til',
'LBL_NAME'=>'Navn',
'LBL_LABELS'=>'Etiketter',
'LBL_MASS_UPDATE'=>'Masseopdatering',
'LBL_AUDITED'=>'Revision',
'LBL_CUSTOM_MODULE'=>'Modul',
'LBL_DEFAULT_VALUE'=>'Standardværdi',
'LBL_REQUIRED'=>'Obligatorisk',
'LBL_DATA_TYPE'=>'Type',
'LBL_HCUSTOM'=>'BRUGERDEFINERET',
'LBL_HDEFAULT'=>'STANDARD',
'LBL_LANGUAGE'=>'Fanegruppesprog:',
'LBL_CUSTOM_FIELDS' => '* felt oprettet i Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Rediger etiketter',
'LBL_SECTION_PACKAGES' => 'Pakker',
'LBL_SECTION_PACKAGE' => 'Pakke',
'LBL_SECTION_MODULES' => 'Moduler',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Rullelister',
'LBL_SECTION_PROPERTIES' => 'Egenskaber',
'LBL_SECTION_DROPDOWNED' => 'Rediger rulleliste',
'LBL_SECTION_HELP' => 'Hjælp',
'LBL_SECTION_ACTION' => 'Handling',
'LBL_SECTION_MAIN' => 'Primær',
'LBL_SECTION_EDPANELLABEL' => 'Rediger paneletiket',
'LBL_SECTION_FIELDEDITOR' => 'Rediger felt',
'LBL_SECTION_DEPLOY' => 'Installer',
'LBL_SECTION_MODULE' => 'Modul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Rediger synlighed',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Standard',
'LBL_HIDDEN'=>'Skjult',
'LBL_AVAILABLE'=>'Tilgængelige',
'LBL_LISTVIEW_DESCRIPTION'=>'Der vises tre kolonner nedenfor. Kolonnen <b>Standard</b> indeholder felter, der som standard vises i en listevisning. Kolonnen <b>Yderligere</b> indeholder felter, som en bruger kan vælge at bruge til at oprette en brugerdefineret visning. Kolonnen <b>Tilgængelige</b> viser felter, der er tilgængelige for dig som administrator, så du kan føje dem til kolonnerne Standard eller Yderligere til brug for brugerne.',
'LBL_LISTVIEW_EDIT'=>'Listevisningseditor',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Eksempel',
'LBL_MB_RESTORE'=>'Gendan',
'LBL_MB_DELETE'=>'Slet',
'LBL_MB_COMPARE'=>'Sammenlign',
'LBL_MB_DEFAULT_LAYOUT'=>'Standardlayout',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Tilføj [Alt+C]',
'LBL_BTN_SAVE'=>'Gem',
'LBL_BTN_SAVE_CHANGES'=>'Gem ændringer',
'LBL_BTN_DONT_SAVE'=>'Fjern ændringer',
'LBL_BTN_CANCEL'=>'Annullér',
'LBL_BTN_CLOSE'=>'Luk',
'LBL_BTN_SAVEPUBLISH'=>'Gem og installer',
'LBL_BTN_NEXT'=>'Næste',
'LBL_BTN_BACK'=>'Tilbage',
'LBL_BTN_CLONE'=>'Klon',
'LBL_BTN_ADDCOLS'=>'Tilføj kolonner',
'LBL_BTN_ADDROWS'=>'Tilføj rækker',
'LBL_BTN_ADDFIELD'=>'Tilføj felt',
'LBL_BTN_ADDDROPDOWN'=>'Tilføj rulleliste',
'LBL_BTN_SORT_ASCENDING'=>'Sortér stigende',
'LBL_BTN_SORT_DESCENDING'=>'Sortér faldende',
'LBL_BTN_EDLABELS'=>'Rediger etiketter',
'LBL_BTN_UNDO'=>'Fortryd',
'LBL_BTN_REDO'=>'Annuller fortryd',
'LBL_BTN_ADDCUSTOMFIELD'=>'Tilføj brugerdefineret felt',
'LBL_BTN_EXPORT'=>'Eksportér tilpasninger',
'LBL_BTN_DUPLICATE'=>'Dupliker',
'LBL_BTN_PUBLISH'=>'Udgiv',
'LBL_BTN_DEPLOY'=>'Installer',
'LBL_BTN_EXP'=>'Eksportér',
'LBL_BTN_DELETE'=>'Slet',
'LBL_BTN_VIEW_LAYOUTS'=>'Vis layout',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'View Mobile Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Vis felter',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Vis relationer',
'LBL_BTN_ADD_RELATIONSHIP'=>'Tilføj relation',
'LBL_BTN_RENAME_MODULE' => 'Skift modulnavn',
'LBL_BTN_INSERT'=>'Indsæt',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Fejl: Feltet findes allerede',
'ERROR_INVALID_KEY_VALUE'=> "Fejl: Ugyldig nøgleværdi: [ &#39;]",
'ERROR_NO_HISTORY' => 'Ingen historikfiler blev fundet',
'ERROR_MINIMUM_FIELDS' => 'Dette layout skal indeholde mindst ét felt',
'ERROR_GENERIC_TITLE' => 'En fejl er opstået',
'ERROR_REQUIRED_FIELDS' => 'Er du sikker på at du vil forsætte? Følgende påkrævende felter mangler i layoutet:',
'ERROR_ARE_YOU_SURE' => 'Er du sikker på at du vil forsætte?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'De(t) følgende felt(er) har beregnede værdier, som ikke vil blive genberegnet i realtid i SugarCRM Mobil redigeringsvisning:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'De(t) følgende felt(er) har beregnede værdier, som ikke vil blive genberegnet i realtid i SugarCRM Portal redigeringsvisning:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Den følgende modul (er) er deaktiveret:',
    'LBL_PORTAL_ENABLE_MODULES' => 'If you would like to enable them in the portal please enable them here.',
    'LBL_PORTAL_CONFIGURE' => 'Konfigurer portal',
    'LBL_PORTAL_THEME' => 'Tema portal',
    'LBL_PORTAL_ENABLE' => 'Aktivér',
    'LBL_PORTAL_SITE_URL' => 'Din portal er tilgængelig på:',
    'LBL_PORTAL_APP_NAME' => 'Applikationsnavn',
    'LBL_PORTAL_LOGO_URL' => 'Logo URL',
    'LBL_PORTAL_LIST_NUMBER' => 'Antal af poster der skal vises på en liste',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Antal af felter der skal vises i detalje visning',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'ANtal af resultater der skal vise ved global søgning',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Standard tildelt for nye portal registreringer',
'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Portal layouts',
'LBL_SYNCP_WELCOME'=>'Angiv URL&#39;en til den forekomst af portalen, du vil opdatere.',
'LBL_SP_UPLOADSTYLE'=>'Vælg et typografiark, du vil uploade fra computeren.<br> Typografiarket implementeres på Sugar Portal, næste gang du udfører en synkronisering.',
'LBL_SP_UPLOADED'=> 'Uploadet',
'ERROR_SP_UPLOADED'=>'Sørg for, at du uploader et css-typografiark.',
'LBL_SP_PREVIEW'=>'Her er et eksempel på, hvordan Sugar Portal vil se ud med typografiarket.',
'LBL_PORTALSITE'=>'Sugar Portal-URL:',
'LBL_PORTAL_GO'=>'Start',
'LBL_UP_STYLE_SHEET'=>'Upload typografiark',
'LBL_QUESTION_SUGAR_PORTAL' => 'Vælg et Sugar Portal-layout, der skal redigeres.',
'LBL_QUESTION_PORTAL' => 'Vælg et portallayout, der skal redigeres.',
'LBL_SUGAR_PORTAL'=>'Sugar Portal-editor',
'LBL_USER_SELECT' => 'Vælg brugere',

//PORTAL PREVIEW
'LBL_CASES'=>'Sager',
'LBL_NEWSLETTERS'=>'Nyhedsbreve',
'LBL_BUG_TRACKER'=>'Fejlsporing',
'LBL_MY_ACCOUNT'=>'Min konto',
'LBL_LOGOUT'=>'Log af',
'LBL_CREATE_NEW'=>'Opret ny',
'LBL_LOW'=>'Lav',
'LBL_MEDIUM'=>'Medium',
'LBL_HIGH'=>'Høj',
'LBL_NUMBER'=>'Nummer:',
'LBL_PRIORITY'=>'Prioritet:',
'LBL_SUBJECT'=>'Emne',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Pakkenavn:',
'LBL_MODULE_NAME'=>'Modulnavn:',
'LBL_MODULE_NAME_SINGULAR' => 'Unik modul navn:',
'LBL_AUTHOR'=>'Forfatter:',
'LBL_DESCRIPTION'=>'Beskrivelse:',
'LBL_KEY'=>'Nøgle:',
'LBL_ADD_README'=>'Vigtigt',
'LBL_MODULES'=>'Moduler:',
'LBL_LAST_MODIFIED'=>'Sidst ændret:',
'LBL_NEW_MODULE'=>'Nyt modul',
'LBL_LABEL'=>'Plural Label',
'LBL_LABEL_TITLE'=>'Etiket',
'LBL_SINGULAR_LABEL' => 'Singular Label',
'LBL_WIDTH'=>'Bredde',
'LBL_PACKAGE'=>'Pakke:',
'LBL_TYPE'=>'Type:',
'LBL_TEAM_SECURITY'=>'Teamsikkerhed',
'LBL_ASSIGNABLE'=>'Kan tildeles',
'LBL_PERSON'=>'Person',
'LBL_COMPANY'=>'Firma',
'LBL_ISSUE'=>'Problem',
'LBL_SALE'=>'Salg',
'LBL_FILE'=>'Fil',
'LBL_NAV_TAB'=>'Navigationsfane',
'LBL_CREATE'=>'Opret',
'LBL_LIST'=>'Liste',
'LBL_VIEW'=>'Vis',
'LBL_LIST_VIEW'=>'Listevisning',
'LBL_HISTORY'=>'Se historik',
'LBL_RESTORE_DEFAULT'=>'Gendan standard',
'LBL_ACTIVITIES'=>'Aktiviteter',
'LBL_SEARCH'=>'Søg',
'LBL_NEW'=>'Ny',
'LBL_TYPE_BASIC'=>'grundlæggende',
'LBL_TYPE_COMPANY'=>'firma',
'LBL_TYPE_PERSON'=>'person',
'LBL_TYPE_ISSUE'=>'problem',
'LBL_TYPE_SALE'=>'salg',
'LBL_TYPE_FILE'=>'fil',
'LBL_RSUB'=>'Dette underpanel bliver vist i dit modul',
'LBL_MSUB'=>'Dette underpanel leveres af dit modul til visning i det relaterede modul',
'LBL_MB_IMPORTABLE'=>'Importerer',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'synlig',
'LBL_VE_HIDDEN'=>'skjult',
'LBL_PACKAGE_WAS_DELETED'=>'[[pakke]] blev slettet',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Eksportér tilpasninger',
'LBL_EC_NAME'=>'Pakkenavn:',
'LBL_EC_AUTHOR'=>'Forfatter:',
'LBL_EC_DESCRIPTION'=>'Beskrivelse:',
'LBL_EC_KEY'=>'Nøgle:',
'LBL_EC_CHECKERROR'=>'Vælg et modul.',
'LBL_EC_CUSTOMFIELD'=>'tilpassede felter',
'LBL_EC_CUSTOMLAYOUT'=>'tilpassede layout',
'LBL_EC_CUSTOMDROPDOWN' => 'customized dropdown(s)',
'LBL_EC_NOCUSTOM'=>'Ingen moduler er tilpasset.',
'LBL_EC_EXPORTBTN'=>'Eksportér',
'LBL_MODULE_DEPLOYED' => 'Modulet er blevet installeret.',
'LBL_UNDEFINED' => 'udefineret',
'LBL_EC_CUSTOMLABEL'=>'tilpassede etikette(r)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Det lykkedes ikke at hente data',
'LBL_AJAX_TIME_DEPENDENT' => 'En tidsafhængig handling er startet. Vent, og prøv igen om et par sekunder.',
'LBL_AJAX_LOADING' => 'Indlæser...',
'LBL_AJAX_DELETING' => 'Sletter...',
'LBL_AJAX_BUILDPROGRESS' => 'Opbygningen er startet...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Installationen er startet...',
'LBL_AJAX_FIELD_EXISTS' =>'Det angivne feltnavn findes allerede. Angiv et nyt feltnavn.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Er du sikker på, at du vil fjerne denne pakke? Derved bliver alle de filer, der er knyttet til denne pakke, slettet permanent.',
'LBL_JS_REMOVE_MODULE' => 'Er du sikker på, at du vil fjerne dette modul? Derved bliver alle de filer, der er knyttet til dette modul, slettet permanent.',
'LBL_JS_DEPLOY_PACKAGE' => 'Enhver tilretning, som du laver i Studio, vil blive overskrevet, når dette modul er gen-implementeret. Er du sikker på, at du ønsker at fortsætte?',

'LBL_DEPLOY_IN_PROGRESS' => 'Installerer pakke',
'LBL_JS_VALIDATE_NAME'=>'Navn - skal være alfanumerisk og uden mellemrum og starte med et bogstav',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Pakkens navn eksisterer allerede',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Nøgle - Skal være alfanumerisk og begynde med et bogstav.',
'LBL_JS_VALIDATE_KEY'=>'Nøgle - skal være alfanumerisk og uden mellemrum og starte med et bogstav',
'LBL_JS_VALIDATE_LABEL'=>'Angiv en etiket, der skal bruges som vist navn til dette modul',
'LBL_JS_VALIDATE_TYPE'=>'Vælg den type modul, du vil bygge, fra listen ovenfor',
'LBL_JS_VALIDATE_REL_NAME'=>'Navn - skal være alfanumerisk og uden mellemrum',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiket - tilføj en etiket, der skal vises over underpanelet',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Er du sikker på du ønsker at slette dette krævede dropdown liste element? Dette kan påvirke funktionaliteten af ​​din ansøgning.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Er du sikker på du ønsker at slette dette rullemenu element? Sletning af Lukket Vundet eller Lukket Tabt faser vil medføre at prognosemodulet ikke fungerer korrekt',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Er du sikker på du ønsker at slette Lukket Vundet salgsfase? Sletning af denne fase vil medføre at prognosemodulet ikke fungerer korrekt',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Er du sikker på du ønsker at slette Lukket Tabt salgsfase? Sletning af denne fase vil medføre at prognosemodulet ikke fungerer korrekt',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Derved bliver denne relation permanent. Er du sikker på, at du vil installere denne relation?',
'LBL_CONFIRM_DONT_SAVE' => 'Der er foretaget ændringer, siden du sidst gemte. Vil du gemme?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Vil du gemme ændringer?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Data kan blive afkortet, og dette kan ikke fortrydes. Er du sikker på, at du ønsker at fortsætte?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Vælg den relevante datatype på basis af den datatype, der skal angives i feltet.',
'LBL_POPHELP_SEARCHABLE'=>'Vælg boost niveau for dette felt.<br />Felter med et højere boost niveau, vil få større vægt, når søgningen udføres.<br />Når en søgning er udført, vil matchende poster, som indeholder felter med en større vægt vises først i søgeresultaterne.<br />Hvis du ændrer boost niveau for et felt skal der udføres et system indeks for at anvende ændringen.<br />Husk at vælge at slette de eksisterende data når der køres system indeks.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Ja</b>: Feltet medtages i en importhandling.<br><b>Nej</b>: Feltet medtages ikke i en import.<br><b>Obligatorisk</b>: En værdi for feltet skal angives ved alle importer.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Indtast et tal for bredden, målt i pixel.<br><br />Det uploadede billede vil blive skaleret til denne bredde.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Indtast et tal for højden, målt i pixel.<br><br />Det uploadede billede vil blive skaleret til denne højde.',
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
'LBL_RESET' => 'Nulstille',
'LBL_RESET_MODULE' => 'Nulstil modul',
'LBL_REMOVE_CUSTOM' => 'Fjern tilpasninger',
'LBL_CLEAR_RELATIONSHIPS' => 'Ryd relationerne',
'LBL_RESET_LABELS' => 'Nulstil etiketter',
'LBL_RESET_LAYOUTS' => 'Nulstil layouts',
'LBL_REMOVE_FIELDS' => 'Fjern brugerdefinerede felter',
'LBL_CLEAR_EXTENSIONS' => 'Nulstil tilføjelser',

'LBL_HISTORY_TIMESTAMP' => 'Tidsstempel',
'LBL_HISTORY_TITLE' => 'Historik',

'fieldTypes' => array(
                'varchar'=>'Tekstfelt',
                'int'=>'Heltal',
                'float'=>'Decimal',
                'bool'=>'Afkrydsningsfelt',
                'enum'=>'Rulleliste',
                'multienum' => 'MultiSelect',
                'date'=>'Dato',
                'phone' => 'Telefon',
                'currency' => 'Valuta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Relater',
                'address' => 'Adresse',
                'text' => 'Tekstområde',
                'url' => 'Link',
                'iframe' => 'IFrame',
                'image' => 'Billede',
                'encrypt'=>'Krypter',
                'datetimecombo' =>'Dato/klokkeslæt',
                'decimal'=>'Decimal',
),
'labelTypes' => array(
    "" => "Ofte brugte etiketter",
    "all" => "Alle etiketter",
),

'parent' => 'Fleks. relater',

'LBL_ILLEGAL_FIELD_VALUE' =>"Dropdown nøglen kan ikke indeholde anførselstegn.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Du har valgt dette element til fjernes fra dropdown listen. Ethvert dropdown felt, som bruger denne liste med dette element som en værdi, vil ikke længere vise værdien, og og værdien vil ikke længere kunne vælges fra dropdown felter. Er du sikker på, at du ønsker at fortsætte?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
