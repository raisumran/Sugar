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
    'LBL_LOADING' => 'Cargando ...' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ocultar Opciones' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Desarrollado por SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Proporcionar un <b> nombre </ b> para el paquete. El nombre que introduzca debe ser alfanumérico y sin espacios. (Ejemplo: HR_Management) <br/><br/> Puedes proporcionar <b> Autor </ b> y <b> Descripción </ b> como información para el paquete. <br/><br/> Haga clic en <b>Guardar</ b> para crear el paquete.',
            'modify'=>'Las propiedades y posibles acciones para el <b>paquete</ b> aparecerá aquí. <br/><br/> Puede modificar el <b>nombre</ b>, <b>Autor</ b> y <b>Descripción</ b> del paquete, así como ver y personalizar todos los módulos contenidos en el paquete. <br/><br/> Haga clic en  <b>nuevo módulo</ b> para crear un módulo para el paquete.<br/><br/> Si el paquete contiene al menos un módulo, usted puede <b>publicar</ b> y <b>desplegar</ b> el paquete, así como <b>exportar</ b> las personalizaciones realizadas en el paquete.',
            'name'=>'Este es el <b>nombre</ b> del paquete actual. <br/><br/> El nombre que introduzca debe ser alfanuméricos, comenzar con una letra y sin espacios. (Ejemplo: HR_Management)',
            'author'=>'Este es el <b> Autor </ b> que se muestra durante la instalación como el nombre de la entidad que creó el paquete. <br/><br/> El autor podría ser un individuo o una empresa.',
            'description'=>'Esta es la  <b>Descripción</b> que se muestra durante la instalación.',
            'publishbtn'=>'Haga clic en <b>Publicar</ b> para guardar todos los datos introducidos y crear un archivo .zip que es una versión instalable del paquete.<br/><br/> Use el <b>Cargador de Módulos</ b> para cargar el archivo .zip e instalar el paquete.',
            'deploybtn'=>'Haga clic en <b> desplegar </ b> para guardar todos los datos introducidos y para instalar el paquete, incluyendo todos los módulos, en la instancia actual.',
            'duplicatebtn'=>'Haga clic en <b> duplicar </ b> para copiar el contenido del paquete en un paquete nuevo y para mostrar el nuevo paquete. <br/> <br/> Para el nuevo paquete, un nuevo nombre es generado automáticamente añadiendo un número al final del nombre del paquete utilizado para duplicarlo. Puede cambiar el nombre del nuevo paquete mediante la introducción de un <b>nombre</b> nuevo y después haciendo clic en <b>Guardar</ b>.',
            'exportbtn'=>'Haga clic en <b>Exportar</ b> para crear un archivo .zip que contiene las personalizaciones realizadas en el paquete. <br/><br/> El archivo generado no es una versión instalable del paquete. <br/><br/> Use el <b >Cargador de módulos</ b> para importar el archivo .zip y tener el paquete, incluidas las personalizaciones, aparecen en el Generador de módulos.',
            'deletebtn'=>'Haga clic en <b> Eliminar </ b> para eliminar este paquete y todos los archivos relacionados con este paquete.',
            'savebtn'=>'Haga clic en <b>Guardar</ b> para guardar todos los datos relacionados con el paquete.',
            'existing_module'=>'Haga clic en el icono del <b>módulo</ b> para editar las propiedades y personalizar los campos, las relaciones y diseños asociados con el módulo.',
            'new_module'=>'Haga clic en <b> nuevo módulo </ b> para crear un nuevo módulo para este paquete.',
            'key'=>'Estas 5 letras, <b> clave </ b> alfanuméricas se usa como prefijo para todos los directorios, los nombres de clases y las tablas de base de datos para todos los módulos en el paquete actual. <br><br> La clave se utiliza en un esfuerzo para lograr la singularidad de los nombres de las tablas.',
            'readme'=>'Haga clic para añadir <b> Léame </ b> de texto para este paquete. <br><br> El léame estará disponible en el momento de la instalación.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Proporcionar un <b>nombre</ b> para el módulo. La <b>etiqueta</ b> que le proporcione aparecerá en la pestaña de navegación. <br/><br/> Elija si desea ver una pestaña de navegación para el módulo para eso seleccione la casilla de <b> Pestaña de navegación </ b>. <br/><br/> Revise la casilla de <b>equipo de seguridad</b> para tener un campo de selección del equipo dentro de los registros del módulo. <br/><br/> A continuación, seleccione el tipo de módulo que desea crear. <br/><br/> Seleccione un tipo de plantilla. Cada plantilla contiene un conjunto específico de los campos, así como los diseños pre-definidos, para usar como base de su módulo. <br/><br/> Haga clic en <b>Guardar </ b> para crear el módulo.',
        'modify'=>'Puedes modificar las propiedades del módulo y adaptar los <b>Campos</b>, <b>Relaciones</b> y <b>Vistas</b> relacionadas con el módulo.',
        'importable'=>'Compruebe la casilla de <b> Importables </ b> la cual permitirá la importación de datos sobre este módulo. <br><br> Un enlace de Asistente de importación aparecerá en el panel de accesos directos en el módulo. El Asistente de importación facilita la importación de datos de fuentes externas en el módulo personalizado.',
        'team_security'=>'Compruebe la casilla de <b> equipo de seguridad </ b> que permitirá la seguridad por equipo para este módulo. <br/><br/> Si el equipo de seguridad está activado, el campo de selección del equipo aparecerá dentro de los registros en el módulo',
        'reportable'=>'Al marcar esta casilla permitirá que ha este módulo se le puedan realizar reportes.',
        'assignable'=>'Al marcar esta casilla permitirá asignar a un usuario seleccionado un registro del módulo.',
        'has_tab'=>'Comprobación de <b> Pestaña de Navegación </ b> proporcionará una pestaña de navegación para el módulo.',
        'acl'=>'Al marcar esta casilla permitirá a los controles de acceso en este módulo, incluyendo la seguridad sobre el terreno.',
        'studio'=>'Al marcar esta casilla permitirá a los administradores personalizar este módulo dentro de Studio.',
        'audit'=>'Marcando esta casilla Habilitar la auditoría de este módulo. Los cambios en ciertos campos se registrarán de modo que los administradores pueden revisar el historial de cambios.',
        'viewfieldsbtn'=>'Haga clic en <b> Ver Campos </ b> para ver los campos asociados con el módulo y para crear y editar los campos personalizados.',
        'viewrelsbtn'=>'Haga clic en <b> Ver Relaciones </ b> para ver las relaciones asociadas con este módulo y crear nuevas relaciones.',
        'viewlayoutsbtn'=>'Haga clic en <b> Ver Diseños </ b> para ver los diseños para el módulo y para personalizar la organización de campo dentro de los diseños.',
        'viewmobilelayoutsbtn' => 'Haga clic en <b>Ver diseños móviles</b> para ver los diseños móviles de módulos y personalizar la distribución de campos en dichos diseños.',
        'duplicatebtn'=>'Haga clic en <b> duplicados </ b> para copiar las propiedades del módulo en un nuevo módulo y para mostrar el nuevo módulo. <br/><br/> Para el nuevo módulo, un nuevo nombre se genera automáticamente añadiendo un número al final del nombre del módulo utilizado para crearlo.',
        'deletebtn'=>'Haga clic en <b> Eliminar </ b> para eliminar este módulo.',
        'name'=>'Este es el <b> nombre </ b> del módulo actual. <br/><br/> El nombre debe ser alfanumérica y debe comenzar con una letra y sin espacios. (Ejemplo: HR_Management)',
        'label'=>'Esta es la <b> etiqueta </ b> que aparecerá en la pestaña de navegación para el módulo.',
        'savebtn'=>'Haga clic en <b> Guardar </ b> para guardar todos los datos introducidos en relación con el módulo.',
        'type_basic'=>'La plantilla <b> básica </ b> cuenta con campos básicos, como el nombre, Asignado a, Equipo, Fecha de creación y los campos de Descripción.',
        'type_company'=>'El tipo de plantilla <b>Compañía</b> ofrece campos específicos según la organización, como por ejemplo Nombre de la compañía, Sector y Dirección de facturación.<br/><br/>Utilice esta plantilla para crear módulos similares a los módulos estándar de contabilidad.',
        'type_issue'=>'El tipo de plantilla <b>Asunto</b> ofrece campos específicos según los casos y errores, como por ejemplo Número, Estado, Prioridad y Descripción.<br/><br/>Utilice esta plantilla para crear módulos similares a los módulos estándar de seguimiento de casos y errores.',
        'type_person'=>'El tipo de plantilla <b>Persona</b> ofrece campos específicos para individuos, como por ejemplo Saludo, Título, Nombre, Dirección y Número de teléfono.<br/><br/>Utilice esta plantilla para crear módulos similares a los módulos estándar de Contactos y Clientes potenciales.',
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
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.',
        'Hidden' 	=> '<b>Oculto</b> los campos no aparecerán en el subpanel.',
        'Default'	=> '<b>Por defecto</b> los campos aparecen en el subpanel.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> '<b>Hidden</b> fields not currently available for users to see in ListViews.',
        'Available' => '<b>Available</b> fields are not shown by default, but can be added to ListViews by users.',
        'Default'	=> '<b>Default</b> fields appear in ListViews that are not customized by users.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> '<b>Hidden</b> fields not currently available for users to see in ListViews.',
        'Default'	=> '<b>Default</b> fields appear in ListViews that are not customized by users.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Clicking <b>Save & Deploy</b> will save all changes and make them active',
        'Hidden' 	=> '<b>Hidden</b> fields do not appear in the Search.',
        'historyBtn'=> 'Click <b>View History</b> to view and restore a previously saved layout from the history.<br><br><b>Restore</b> within <b>View History</b> restores the field placement within previously saved layouts. To change field labels, click the Edit icon next to each field.',
        'historyDefault'=> 'Click <b>Restore Default</b> to restore a view to its original layout.<br><br><b>Restore Default</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> '<b>Default</b> fields appear in the Search.'
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
        'saveBtn'	=> 'Click <b>Save</b> to preserve the changes you made to the layout since the last time you saved it.<br><br>The changes will not be displayed in the module until you Deploy the saved changes.',
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
        'description'=>'Esta es la  <b>Descripción</b> que se muestra durante la instalación.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Welcome to the <b>Developer Tools</b> area. <br/><br/>Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'Use <b>Studio</b> to customize deployed modules.',
        'mbBtn'		=> 'Use <b>Module Builder</b> to create new modules.',
        'sugarPortalBtn' => 'Use <b>Sugar Portal Editor</b> to manage and customize the Sugar Portal.',
        'dropDownEditorBtn' => 'Use <b>Dropdown Editor</b> to add and edit global dropdowns for dropdown fields.',
        'appBtn' 	=> 'Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'Return to the previous step.',
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
        'exportBtn' => 'Haga clic en <b> Exportar personalizaciones </ b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de los módulos específicos.',
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
        'saveBtn'=>'Click <b>Save</b> to save all changes.',
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
        'Hidden' 	=> 'Hidden fields are fields that will not be shown in the search view.',
        'Default'	=> 'Default fields will be shown in the search view.'
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
        'mbBtn'		=> 'Use <b>Module Builder</b> to create new modules.',
        'appBtn' 	=> 'Utilice el modo de aplicación para personalizar las propiedades incluidas en el programa, por ejemplo, cómo muchos de los informes TPS que se muestran en la página de inicio',
        'backBtn'	=> 'Return to the previous step.',
        'studioHelp'=> 'Use el <b>Studio</b> para personalizar los módulos instalados.',
        'moduleBtn'	=> 'Click to edit this module.',
        'moduleHelp'=> 'Seleccione el componente del módulo que desea editar',
        'fieldsBtn'	=> 'Editar información que se almacena en el módulo mediante el control de los <b> campos </b> del módulo. <br/><br/> Puede editar y crear campos personalizados aquí.',
        'labelsBtn' => 'Editar las <b> etiquetas </ b> para mostrar los valores de este módulo.'	,
        'layoutsBtn'=> 'Personalizar las <b> vistas </b> del diseños de la edición, el detalle, el listado y la búsqueda.',
        'subpanelBtn'=> 'Editar la información que se muestra en los subpaneles de los módulos.',
        'layoutsHelp'=> 'Select a <b>Layout to edit</b>.<br/<br/>To change the layout that contains data fields for entering data, click <b>Edit View</b>.<br/><br/>To change the layout that displays the data entered into the fields in the Edit View, click <b>Detail View</b>.<br/><br/>To change the columns which appear in the default list, click <b>List View</b>.<br/><br/>To change the Basic and Advanced search form layouts, click <b>Search</b>.',
        'subpanelHelp'=> 'Select a <b>Subpanel</b> to edit.',
        'searchHelp' => 'Select a <b>Search</b> layout to edit.',
        'labelsBtn'	=> 'Editar las <b> etiquetas </ b> para mostrar los valores de este módulo.',
        'newPackage'=>'Click <b>New Package</b> to create a new package.',
        'mbHelp'    => '<b>Welcome to Module Builder.</b><br/><br/>Use <b>Module Builder</b> to create packages containing custom modules based on standard or custom objects. <br/><br/>To begin, click <b>New Package</b> to create a new package, or select a package to edit.<br/><br/> A <b>package</b> acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application. <br/><br/>Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'Haga clic en <b> Exportar personalizaciones </ b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de los módulos específicos.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Editor de Listas Desplegables',

//ASSISTANT
'LBL_AS_SHOW' => 'Mostrar al Asistente en el futuro.',
'LBL_AS_IGNORE' => 'Ignorar al Asistente en el futuro.',
'LBL_AS_SAYS' => 'El Asistente Sugiere:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Constructor de Módulos',
'LBL_STUDIO' => 'Estudio',
'LBL_DROPDOWNEDITOR' => 'Editor de Listas Desplegables',
'LBL_EDIT_DROPDOWN'=>'Editar Lista Desplegable',
'LBL_DEVELOPER_TOOLS' => 'Herramientas de Desarrollo',
'LBL_SUGARPORTAL' => 'Editor del Portal Sugar',
'LBL_SYNCPORTAL' => 'Sincronizar Portal',
'LBL_PACKAGE_LIST' => 'Lista de Paquetes',
'LBL_HOME' => 'Inicio',
'LBL_NONE'=>'-Ninguno-',
'LBL_DEPLOYE_COMPLETE'=>'Despliegue completado',
'LBL_DEPLOY_FAILED'   =>'Ha ocurrido un error durante el proceso de despliegue. Es posible que su paquete no haya sido instalado correctamente',
'LBL_ADD_FIELDS'=>'Agregar Campos Personalizados',
'LBL_AVAILABLE_SUBPANELS'=>'Subpaneles Disponibles',
'LBL_ADVANCED'=>'Avanzado',
'LBL_ADVANCED_SEARCH'=>'Búsqueda Avanzada',
'LBL_BASIC'=>'Básica',
'LBL_BASIC_SEARCH'=>'Búsqueda Básica',
'LBL_CURRENT_LAYOUT'=>'Diseño',
'LBL_CURRENCY' => 'Moneda',
'LBL_CUSTOM' => 'Personalizado',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Vista de Lista de Sugar Dashlet',
'LBL_DASHLETSEARCH'=>'Búsqueda de Sugar Dashlet',
'LBL_POPUP'=>'Vista Emergente',
'LBL_POPUPLIST'=>'Vista de Lista Emergente',
'LBL_POPUPLISTVIEW'=>'Vista de Lista Emergente',
'LBL_POPUPSEARCH'=>'Búsqueda Emergente',
'LBL_DASHLETSEARCHVIEW'=>'Búsqueda de Sugar Dashlet',
'LBL_DISPLAY_HTML'=>'Mostrar Código HTML',
'LBL_DETAILVIEW'=>'Vista Detallada',
'LBL_DROP_HERE' => '[Soltar Aquí]',
'LBL_EDIT'=>'Editar',
'LBL_EDIT_LAYOUT'=>'Editar diseño',
'LBL_EDIT_ROWS'=>'Editar Filas',
'LBL_EDIT_COLUMNS'=>'Editar Columnas',
'LBL_EDIT_LABELS'=>'Editar Etiquetas',
'LBL_EDIT_PORTAL'=>'Editar Portal para',
'LBL_EDIT_FIELDS'=>'Editar Campos',
'LBL_EDITVIEW'=>'Vista de Edición',
'LBL_FILTER_SEARCH' => "Buscar",
'LBL_FILLER'=>'(relleno)',
'LBL_FIELDS'=>'Campos',
'LBL_FAILED_TO_SAVE' => 'Error al Guardar',
'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
'LBL_HOMEPAGE_PREFIX' => 'Mi',
'LBL_LAYOUT_PREVIEW'=>'Vista Preliminar del Diseño',
'LBL_LAYOUTS'=>'Diseños',
'LBL_LISTVIEW'=>'Vista de Lista',
'LBL_RECORDVIEW'=>'Vista de Registro',
'LBL_MODULE_TITLE' => 'Estudio',
'LBL_NEW_PACKAGE' => 'Nuevo Paquete',
'LBL_NEW_PANEL'=>'Nuevo Panel',
'LBL_NEW_ROW'=>'Nueva Fila',
'LBL_PACKAGE_DELETED'=>'Paquete Eliminado',
'LBL_PUBLISHING' => 'Publicando ...',
'LBL_PUBLISHED' => 'Publicado',
'LBL_SELECT_FILE'=> 'Seleccionar Archivo',
'LBL_SAVE_LAYOUT'=> 'Guardar Diseño',
'LBL_SELECT_A_SUBPANEL' => 'Seleccionar un Subpanel',
'LBL_SELECT_SUBPANEL' => 'Seleccionar Subpanel',
'LBL_SUBPANELS' => 'Subpaneles',
'LBL_SUBPANEL' => 'Subpanel',
'LBL_SUBPANEL_TITLE' => 'Título:',
'LBL_SEARCH_FORMS' => 'Buscar',
'LBL_STAGING_AREA' => 'Área de Diseño (arrastre y suelte elementos aquí)',
'LBL_SUGAR_FIELDS_STAGE' => 'Campos Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_SUGAR_BIN_STAGE' => 'Papelera Sugar (haga clic en los elementos para agregarlos al área de diseño)',
'LBL_TOOLBOX' => 'Caja de Herramientas',
'LBL_VIEW_SUGAR_FIELDS' => 'Ver Campos Sugar',
'LBL_VIEW_SUGAR_BIN' => 'Ver Papelera Sugar',
'LBL_QUICKCREATE' => 'Creación Rápida',
'LBL_EDIT_DROPDOWNS' => 'Editar una Lista Desplegable Global',
'LBL_ADD_DROPDOWN' => 'Agregar una nueva Lista Desplegable Global',
'LBL_BLANK' => '-vacío-',
'LBL_TAB_ORDER' => 'Órden de Tabulación',
'LBL_TAB_PANELS' => 'Mostrar paneles como pestañas',
'LBL_TAB_PANELS_HELP' => 'Mostrar cada panel como su propia pestaña en lugar de hacer que aparezcan todos en una pantalla',
'LBL_TABDEF_TYPE' => 'Tipo de Visualización:',
'LBL_TABDEF_TYPE_HELP' => 'Seleccione la forma en la que se debe mostra esta sección. Esta opción únicamente tendrá efecto si ha habilitado el modo pestañas para esta vista.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Pestaña',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Seleccione Panel para que el panel se muestre en la vista inicial o en la vista del panel anterior que se haya seleccionado como Pestaña.  <br/>Seleccione Pestaña para mostrar el panel en una pestaña independiente. Cuando se ha seleccionado un panel como Pestaña, los siguientes paneles seleccionados como Panel se mostrarán en la vista de dicha pestaña.  <br/>Siempre que seleccione un panel como Pestaña será el primer panel a mostrar en dicha Pestaña.  <br/>Si se selecciona como Pestaña el segundo panel o posteriores, el primer panel se establecerá automáticamente como Pestaña si se hubiera seleccionado anteriormente como Panel.',
'LBL_TABDEF_COLLAPSE' => 'Contraído',
'LBL_TABDEF_COLLAPSE_HELP' => 'Seleccione para que por defecto el estado del panel sea contraído.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nombre',
'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
'LBL_DROPDOWN_ITEMS' => 'Elementos de Lista',
'LBL_DROPDOWN_ITEM_NAME' => 'Nombre del Elemento',
'LBL_DROPDOWN_ITEM_LABEL' => 'Etiqueta de Visualización',
'LBL_SYNC_TO_DETAILVIEW' => 'Sincroniza con Vista de Detalle',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Seleccione esta opción para sincronizar el diseño de la Vista de Edición con el correspondiente diseño de la Vista de Detalle. Los campos y su colocación en la Vista de Detalle serán sincronizados y guardados automáticamente en la Vista de Detalle al pulsar en Guardar or Guardar y Desplegar en la Vista de Edición. No se podrán realizar cambios en el diseño de la Vista de Detalle.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Este DetailView es sincronizado con el EditView correspondiente. <br> Campos y colocación sobre el terreno en este DetailView reflejan los campos y colocación sobre el terreno en el EditView. <br> Cambios en DetailView no puede ser salvado o desplegados desde esta pagina. Realizar los cambios o quitar sincronización en la vista de EditView.',
'LBL_COPY_FROM_EDITVIEW' => 'Copiar de la Vista de Edición',
'LBL_DROPDOWN_BLANK_WARNING' => 'Los valores son necesarios tanto para el nombre del elemento y la etiqueta de visualización. Para agregar un elemento en blanco, haga clic en Agregar, sin entrar en ningún valor para el nombre del elemento y la etiqueta de visualización.',
'LBL_DROPDOWN_KEY_EXISTS' => 'La Clave ya existe en el listado',
'LBL_NO_SAVE_ACTION' => 'No se encontró la acción guardar para esta vista.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento creado erróneamente',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indica un campo combinado. Un campo combinado es un conjunto de campos individuales. Por ejemplo, "Dirección" es un campo combinado que contiene "Calle", "Ciudad", "Código Postal", "Provincia/Estado", y "País".<br><br>Haz doble clic en el campo combinado para ver que campos contiene.',
'LBL_COMBO_FIELD_CONTAINS' => 'contiene:',

'LBL_WIRELESSLAYOUTS'=>'Diseños para Móviles',
'LBL_WIRELESSEDITVIEW'=>'Vista de Edición para Móviles',
'LBL_WIRELESSDETAILVIEW'=>'Vista de Detalle para Móviles',
'LBL_WIRELESSLISTVIEW'=>'Vista de Lista para Móviles',
'LBL_WIRELESSSEARCH'=>'Búsqueda para Móviles',

'LBL_BTN_ADD_DEPENDENCY'=>'Agregar Dependencia',
'LBL_BTN_EDIT_FORMULA'=>'Editar Fórmula',
'LBL_DEPENDENCY' => 'Dependencia',
'LBL_DEPENDANT' => 'Dependiente',
'LBL_CALCULATED' => 'Valor Calculado',
'LBL_READ_ONLY' => 'Sólo Lectura',
'LBL_FORMULA_BUILDER' => 'Constructor de Fórmulas',
'LBL_FORMULA_INVALID' => 'Fórmula No Válida',
'LBL_FORMULA_TYPE' => 'La fórmula debe ser del tipo',
'LBL_NO_FIELDS' => 'No se han encontrado Campos',
'LBL_NO_FUNCS' => 'No se han encontrado Funciones',
'LBL_SEARCH_FUNCS' => 'Buscar Funciones...',
'LBL_SEARCH_FIELDS' => 'Buscar Campos...',
'LBL_FORMULA' => 'Formula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependiente',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Arrastre los elementos de la lista de opciones disponibles a la izquierda para una de las listas de la derecha para hacer que la opción está disponible cuando la opción del padre dada se seleccione.',
'LBL_AVAILABLE_OPTIONS' => 'Opciones',
'LBL_PARENT_DROPDOWN' => 'Padre desplegable',
'LBL_VISIBILITY_EDITOR' => 'Visibilidad editor',
'LBL_ROLLUP' => 'Resumen',
'LBL_RELATED_FIELD' => 'Campo relacionado',
'LBL_CONFIG_PORTAL_URL'=>'URL a la imagen de logo personalizado. Las dimensiones recomendadas del logotipo son 163 × 18 píxeles.',
'LBL_PORTAL_ROLE_DESC' => 'No elimine este rol. El rol del Customer Self-Service Portal lo genera el mismo sistema durante la activación del Portal de Sugar. Utilice los controles de acceso dentro de este rol para habilitar y/o deshabilitar los módulos de Gestor de Incidencias, Casos o Base de conocimiento en el Portal de Sugar. Para evitar un comportamiento desconocido e imprevisible del sistema, no modifique otros controles de acceso para este rol. En caso de eliminación accidental de este rol, vuelva a crearlo  desactivando y activando el Portal de Sugar.',

//RELATIONSHIPS
'LBL_MODULE' => 'Módulo',
'LBL_LHS_MODULE'=>'Módulo Principal',
'LBL_CUSTOM_RELATIONSHIPS' => '* relación creada en el Estudio',
'LBL_RELATIONSHIPS'=>'Relaciones',
'LBL_RELATIONSHIP_EDIT' => 'Editar Relación',
'LBL_REL_NAME' => 'Nombre',
'LBL_REL_LABEL' => 'Etiqueta',
'LBL_REL_TYPE' => 'Tipo',
'LBL_RHS_MODULE'=>'Módulo Relacionado',
'LBL_NO_RELS' => 'Sin Relaciones',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Condición Opcional' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Columna',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Valor',
'LBL_SUBPANEL_FROM'=>'Subpanel de',
'LBL_RELATIONSHIP_ONLY'=>'No se creará ningún elemento visible para esta relación ya que existía anteriormente una relación visible entre estos dos módulos.',
'LBL_ONETOONE' => 'Uno a Uno',
'LBL_ONETOMANY' => 'Uno a Muchos',
'LBL_MANYTOONE' => 'Muchos a Uno',
'LBL_MANYTOMANY' => 'Muchos a Muchos',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Seleccione una función o componente.',
'LBL_QUESTION_MODULE1' => 'Seleccione un módulo.',
'LBL_QUESTION_EDIT' => 'Seleccione un módulo a editar.',
'LBL_QUESTION_LAYOUT' => 'Seleccione un diseño a editar.',
'LBL_QUESTION_SUBPANEL' => 'Seleccione un subpanel a editar.',
'LBL_QUESTION_SEARCH' => 'Seleccione un diseño de búsqueda a editar.',
'LBL_QUESTION_MODULE' => 'Seleccione un componente de módulo a editar.',
'LBL_QUESTION_PACKAGE' => 'Seleccione un paquete a editar, o cree un nuevo paquete.',
'LBL_QUESTION_EDITOR' => 'Seleccione una herramienta.',
'LBL_QUESTION_DROPDOWN' => 'Seleccione una lista desplegable a editar, o cree una nueva lista desplegable.',
'LBL_QUESTION_DASHLET' => 'Seleccione un diseño de dashlet a editar.',
'LBL_QUESTION_POPUP' => 'Seleccione un diseño emergente a editar.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Relacionado Con',
'LBL_NAME'=>'Nombre',
'LBL_LABELS'=>'Etiquetas',
'LBL_MASS_UPDATE'=>'Actualización Masiva',
'LBL_AUDITED'=>'Auditado',
'LBL_CUSTOM_MODULE'=>'Módulo',
'LBL_DEFAULT_VALUE'=>'Valor por Defecto',
'LBL_REQUIRED'=>'Requerido',
'LBL_DATA_TYPE'=>'Tipo',
'LBL_HCUSTOM'=>'PERSONALIZADO',
'LBL_HDEFAULT'=>'POR DEFECTO',
'LBL_LANGUAGE'=>'Idioma:',
'LBL_CUSTOM_FIELDS' => 'campo creado en Estudio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Editar Etiquetas',
'LBL_SECTION_PACKAGES' => 'Paquetes',
'LBL_SECTION_PACKAGE' => 'Paquete',
'LBL_SECTION_MODULES' => 'Módulos',
'LBL_SECTION_PORTAL' => 'Portal',
'LBL_SECTION_DROPDOWNS' => 'Listas Desplegables',
'LBL_SECTION_PROPERTIES' => 'Propiedades',
'LBL_SECTION_DROPDOWNED' => 'Editar Lista Desplegable',
'LBL_SECTION_HELP' => 'Ayuda',
'LBL_SECTION_ACTION' => 'Acción',
'LBL_SECTION_MAIN' => 'Principal',
'LBL_SECTION_EDPANELLABEL' => 'Editar Etiqueta de Panel',
'LBL_SECTION_FIELDEDITOR' => 'Editar Campo',
'LBL_SECTION_DEPLOY' => 'Desplegar',
'LBL_SECTION_MODULE' => 'Módulo',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Editar Visibilidad',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Por defecto',
'LBL_HIDDEN'=>'Oculto',
'LBL_AVAILABLE'=>'Disponible',
'LBL_LISTVIEW_DESCRIPTION'=>'A continuación se muestran tres columnas. La columna <b>Por Defecto</b> contiene los campos que se muestran en una lista por defecto. La columna <b>Adicional</b> contiene campos que un usuario puede elegir a la hora de crear una vista personalizada. La columna <b>Disponible</b> muestra columnas disponibles para usted como administrador para, o bien añadirlas a las columnas Por Defecto, o a las Adicionales para que sean usadas por usuarios.',
'LBL_LISTVIEW_EDIT'=>'Editor de Listas',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Vista Preliminar',
'LBL_MB_RESTORE'=>'Restaurar',
'LBL_MB_DELETE'=>'Eliminar',
'LBL_MB_COMPARE'=>'Comparar',
'LBL_MB_DEFAULT_LAYOUT'=>'Diseño por Defecto',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Agregar [Alt+C]',
'LBL_BTN_SAVE'=>'Guardar',
'LBL_BTN_SAVE_CHANGES'=>'Guardar Cambios',
'LBL_BTN_DONT_SAVE'=>'Descartar Cambios',
'LBL_BTN_CANCEL'=>'Cancelar',
'LBL_BTN_CLOSE'=>'Cerrar',
'LBL_BTN_SAVEPUBLISH'=>'Guardar y Publicar',
'LBL_BTN_NEXT'=>'Siguiente',
'LBL_BTN_BACK'=>'Atrás',
'LBL_BTN_CLONE'=>'Clonar',
'LBL_BTN_ADDCOLS'=>'Agregar Columnas',
'LBL_BTN_ADDROWS'=>'Agregar Filas',
'LBL_BTN_ADDFIELD'=>'Agregar Campo:',
'LBL_BTN_ADDDROPDOWN'=>'Agregar Lista Desplegable',
'LBL_BTN_SORT_ASCENDING'=>'Ordenar Ascendete',
'LBL_BTN_SORT_DESCENDING'=>'Ordenar Descendente',
'LBL_BTN_EDLABELS'=>'Editar Etiquetas',
'LBL_BTN_UNDO'=>'Deshacer',
'LBL_BTN_REDO'=>'Repetir',
'LBL_BTN_ADDCUSTOMFIELD'=>'Agregar Campo Personalizado',
'LBL_BTN_EXPORT'=>'Exportar Personalizaciones',
'LBL_BTN_DUPLICATE'=>'Duplicar',
'LBL_BTN_PUBLISH'=>'Publicar',
'LBL_BTN_DEPLOY'=>'Desplegar',
'LBL_BTN_EXP'=>'Exportar',
'LBL_BTN_DELETE'=>'Eliminar',
'LBL_BTN_VIEW_LAYOUTS'=>'Ver Diseños',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Ver diseños móviles',
'LBL_BTN_VIEW_FIELDS'=>'Ver Campos',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Ver Relaciones',
'LBL_BTN_ADD_RELATIONSHIP'=>'Agregar Relación',
'LBL_BTN_RENAME_MODULE' => 'Cambiar el Nombre del Módulo',
'LBL_BTN_INSERT'=>'Insertar',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Error: Campo Ya Existente',
'ERROR_INVALID_KEY_VALUE'=> "Error: Valor de Clave No válido: [&#39;]",
'ERROR_NO_HISTORY' => 'No se han encontrado archivos en el historial',
'ERROR_MINIMUM_FIELDS' => 'El diseño debe contener al menos un campo',
'ERROR_GENERIC_TITLE' => 'Ha ocurrido un error',
'ERROR_REQUIRED_FIELDS' => '¿Está seguro de que desea continuar? Los siguientes campos requeridos no se encuentran en el diseño:',
'ERROR_ARE_YOU_SURE' => '¿Está seguro de que desea continuar?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Los siguientes campos contienen valores calculados que no serán recalculados en tiempo real en la Vista de Edición de SugarCRM Mobile:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Los siguientes campos contienen valores calculados que no serán recalculados en tiempo real en la Vista de Edición del Portal de SugarCRM:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Los siguientes módulos están deshabilitados:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Si desea habilitarlos en el portal, por favor habilitelos  <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">aquí</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Configure el Portal',
    'LBL_PORTAL_THEME' => 'Tema del Portal',
    'LBL_PORTAL_ENABLE' => 'Habilitar',
    'LBL_PORTAL_SITE_URL' => 'Su portal está disponible en:',
    'LBL_PORTAL_APP_NAME' => 'Nombre de la Aplicación',
    'LBL_PORTAL_LOGO_URL' => 'URL de Logo',
    'LBL_PORTAL_LIST_NUMBER' => 'Número de registros a mostrar en la lista',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Número de registros a mostrar en la lista',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Número de registros a mostrar en la Búsqueda Global',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Usuario asignado por defecto para nuevos registros del portal',
'LBL_PORTAL'=>'Portal',
'LBL_PORTAL_LAYOUTS'=>'Diseños de Portal',
'LBL_SYNCP_WELCOME'=>'Por favor, introduzca el URL de la instancia de portal que desea actualizar.',
'LBL_SP_UPLOADSTYLE'=>'Seleccione la hoja de estilos a subir desde su equipo.<br> La hoja de estilos será utilizada en el Portal de Sugar la próxima vez que realice una sincronización.',
'LBL_SP_UPLOADED'=> 'Subido',
'ERROR_SP_UPLOADED'=>'Por favor, asegúrese de que está subiendo una hoja de estilos CSS.',
'LBL_SP_PREVIEW'=>'Aquí tiene una vista preliminar de la apariencia que tendrá el Portal de Sugar usando la hoja de estilos.',
'LBL_PORTALSITE'=>'URL de Portal de Sugar:',
'LBL_PORTAL_GO'=>'Adelante',
'LBL_UP_STYLE_SHEET'=>'Subir Hoja de Estilos',
'LBL_QUESTION_SUGAR_PORTAL' => 'Seleccione el diseño de Portal de Sugar a editar.',
'LBL_QUESTION_PORTAL' => 'Seleccione el diseño de portal a editar.',
'LBL_SUGAR_PORTAL'=>'Editor del Portal Sugar',
'LBL_USER_SELECT' => 'Seleccionar Usuarios',

//PORTAL PREVIEW
'LBL_CASES'=>'Casos',
'LBL_NEWSLETTERS'=>'Boletines de Noticias',
'LBL_BUG_TRACKER'=>'Seguimiento de Incidencias',
'LBL_MY_ACCOUNT'=>'Mi Cuenta',
'LBL_LOGOUT'=>'Cerrar sesión',
'LBL_CREATE_NEW'=>'Crear Nuevo',
'LBL_LOW'=>'Baja',
'LBL_MEDIUM'=>'Media',
'LBL_HIGH'=>'Alta',
'LBL_NUMBER'=>'Número:',
'LBL_PRIORITY'=>'Prioridad:',
'LBL_SUBJECT'=>'Asunto',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Nombre del Paquete:',
'LBL_MODULE_NAME'=>'Nombre del Módulo:',
'LBL_MODULE_NAME_SINGULAR' => 'Nombre del Módulo en Singular',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Descripción:',
'LBL_KEY'=>'Clave:',
'LBL_ADD_README'=>'Léame',
'LBL_MODULES'=>'Módulos:',
'LBL_LAST_MODIFIED'=>'Última Modificación:',
'LBL_NEW_MODULE'=>'Nuevo Módulo',
'LBL_LABEL'=>'Etiqueta en Plural',
'LBL_LABEL_TITLE'=>'Etiqueta',
'LBL_SINGULAR_LABEL' => 'Etiqueta en Singular',
'LBL_WIDTH'=>'Anchura',
'LBL_PACKAGE'=>'Paquete:',
'LBL_TYPE'=>'Tipo:',
'LBL_TEAM_SECURITY'=>'Seguridad de Equipos',
'LBL_ASSIGNABLE'=>'Assignable',
'LBL_PERSON'=>'Persona',
'LBL_COMPANY'=>'Compañía',
'LBL_ISSUE'=>'Incidencia',
'LBL_SALE'=>'Venta',
'LBL_FILE'=>'Archivo',
'LBL_NAV_TAB'=>'Pestaña de Navegación',
'LBL_CREATE'=>'Crear',
'LBL_LIST'=>'Lista',
'LBL_VIEW'=>'Ver',
'LBL_LIST_VIEW'=>'Vista de Lista',
'LBL_HISTORY'=>'Ver Historial',
'LBL_RESTORE_DEFAULT'=>'Restaurar Vista Por Defecto',
'LBL_ACTIVITIES'=>'Actividades',
'LBL_SEARCH'=>'Buscar',
'LBL_NEW'=>'Nuevo',
'LBL_TYPE_BASIC'=>'básica',
'LBL_TYPE_COMPANY'=>'compañía',
'LBL_TYPE_PERSON'=>'persona',
'LBL_TYPE_ISSUE'=>'incidencia',
'LBL_TYPE_SALE'=>'venta',
'LBL_TYPE_FILE'=>'archivo',
'LBL_RSUB'=>'Este es el subpanel que se mostrará en su módulo',
'LBL_MSUB'=>'Este es el subpanel que su módulo proporciona para que sea mostrado por el módulo relacionado',
'LBL_MB_IMPORTABLE'=>'Importable',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'visible',
'LBL_VE_HIDDEN'=>'oculto',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] ha sido eliminado',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Exportar Personalizaciones',
'LBL_EC_NAME'=>'Nombre del Paquete:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Descripción:',
'LBL_EC_KEY'=>'Clave:',
'LBL_EC_CHECKERROR'=>'Por favor, seleccione un módulo.',
'LBL_EC_CUSTOMFIELD'=>'campos personalizados',
'LBL_EC_CUSTOMLAYOUT'=>'diseño personalizados',
'LBL_EC_CUSTOMDROPDOWN' => 'desplegable(s) personalizados',
'LBL_EC_NOCUSTOM'=>'No se ha personalizado ningún módulo.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'El módulo ha sido desplegado.',
'LBL_UNDEFINED' => 'no definido',
'LBL_EC_CUSTOMLABEL'=>'etiqueta(s) personalizada(s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Error al recuperar datos',
'LBL_AJAX_TIME_DEPENDENT' => 'Hay en progreso una acción dependiente del tiempo. Por favor, espere e inténtelo de nuevo en unos instantes.',
'LBL_AJAX_LOADING' => 'Cargando...',
'LBL_AJAX_DELETING' => 'Eliminando...',
'LBL_AJAX_BUILDPROGRESS' => 'Construcción En Progreso...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Despliegue En Progreso...',
'LBL_AJAX_FIELD_EXISTS' =>'El nombre del campo que ha introducido ya existe. Por favor, introduzca un nuevo nombre para el campo.',
//JS
'LBL_JS_REMOVE_PACKAGE' => '¿Está seguro de que desea quitar este paquete? Esto eliminará permanentemente todos los archivos asociados con este paquete.',
'LBL_JS_REMOVE_MODULE' => '¿Está seguro de que desea quitar este módulo? Esto eliminará permanentemente todos los archivos asociados con este módulo.',
'LBL_JS_DEPLOY_PACKAGE' => 'Cualquier personalización que haya realizado en el Estudio será sobrescrita cuando este módulo sea desplegado de nuevo. ¿Está seguro de que desea proceder?',

'LBL_DEPLOY_IN_PROGRESS' => 'Desplegando Paquete',
'LBL_JS_VALIDATE_NAME'=>'Nombre - Debe ser alfanumérico, sin espacios y comenzando por letra',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'El Nombre del Paquete ya existe',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Clave - Tiene que ser alfanumérica y empezar por una letra.',
'LBL_JS_VALIDATE_KEY'=>'Clave - Debe ser alfanumérica',
'LBL_JS_VALIDATE_LABEL'=>'Por favor, introduzca la etiqueta que se utilizará como Nombre Visible de este módulo',
'LBL_JS_VALIDATE_TYPE'=>'Por favor, seleccione el tipo de módulo que quiere construir de la lista anterior',
'LBL_JS_VALIDATE_REL_NAME'=>'Nombre - Debe ser alfanumérico y sin espacios',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiqueta - por favor, agregue la etiqueta que será mostrada sobre el subpanel',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => '¿Está seguro que desea eliminar la lista desplegable? Esto puede afectar la funcionalidad de tu aplicación.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => '¿Está seguro que desea eliminar la lista desplegable? Eliminar el estado Cerrado Ganado o Cerrado Perdido puede provocar que el módulo de Previsión de Ventas no funcione adecuadamente',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => '¿Está seguro que desea eliminar el estado Cerrado Ganado?  Eliminar este estado puede provocar que el módulo de Previsión de Ventas no funcione adecuadamente',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => '¿Está seguro que desea eliminar el estado Cerrado Perdido?  Eliminar este estado puede provocar que el módulo de Previsión de Ventas no funcione adecuadamente',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Esto hará la relación permantente. ¿Está seguro de que desea desplegar esta relación?',
'LBL_CONFIRM_DONT_SAVE' => 'Hay cambios pendientes de ser guardados, ¿desea guardarlos ahora?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => '¿Guardar Cambios?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Los datos pueden ser truncados y ésto no podrá deshacerse, ¿está seguro de que desea continuar?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Seleccione el tipo de datos apropiado acorde con el tipo de datos que será introducido en el campo.',
'LBL_POPHELP_SEARCHABLE'=>'Usted tiene que realizar un índice de todo el sistema después de cambiar el nivel de elevación.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Sí</b>: El campo será incluido en una operación de importación.<br><b>No</b>: El campo no será incluido en una importación.<br><b>Requerido</b>: Debe de suministrarse un valor para el campo en toda importación.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Introduzca un número para la Anchura, como medida en píxeles.<br> La imagen subida será escalada a esta Anchura.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Introduzca un número para la Altura, como medida en píxeles.<br> La imagen subida será escalada a esta Altura.',
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
'LBL_RESET' => 'Restablecer',
'LBL_RESET_MODULE' => 'Restablecer Módulo',
'LBL_REMOVE_CUSTOM' => 'Quitar Personalizaciones',
'LBL_CLEAR_RELATIONSHIPS' => 'Limpiar Relaciones',
'LBL_RESET_LABELS' => 'Restablecer Eqiquetas',
'LBL_RESET_LAYOUTS' => 'Restablecer Diseños"',
'LBL_REMOVE_FIELDS' => 'Quitar Campos Personalizados',
'LBL_CLEAR_EXTENSIONS' => 'Limpiar Extensiones',

'LBL_HISTORY_TIMESTAMP' => 'Registro de Tiempo',
'LBL_HISTORY_TITLE' => 'historial',

'fieldTypes' => array(
                'varchar'=>'Campo de Texto',
                'int'=>'Entero',
                'float'=>'Coma flotante',
                'bool'=>'Casilla de Verificación',
                'enum'=>'Desplegable',
                'multienum' => 'Selección Múltiple',
                'date'=>'Fecha',
                'phone' => 'Cualquier teléfono',
                'currency' => 'Moneda',
                'html' => 'HTML',
                'radioenum' => 'Opción',
                'relate' => 'Relacionado',
                'address' => 'Dirección',
                'text' => 'Área de Texto',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Imagen',
                'encrypt'=>'Encriptado',
                'datetimecombo' =>'Fecha y hora',
                'decimal'=>'Decimal',
),
'labelTypes' => array(
    "" => "Etiquetas de uso frecuente",
    "all" => "Todas las etiquetas",
),

'parent' => 'Posiblemente Relacionado con',

'LBL_ILLEGAL_FIELD_VALUE' =>"Las claves de un desplegable no pueden contener comillas.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Está seleccionando este elemento para su eliminación de la lista desplegable. Cualquier campo desplegable que use esta lista con este elemento como valor ya no mostrará dicho valor, y el valor ya no podrá ser seleccionado en los campos desplegables. ¿Está seguro de que desea continuar?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionado {1} ID)',
);
