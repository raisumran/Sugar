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
        'viewmobilelayoutsbtn' => 'Clíc <b>Observar Vista Mobile</b> para ver diseños mobile para el módulo y personalizar el campo de acuerdo a los diseños.',
        'duplicatebtn'=>'Haga clic en <b> duplicados </ b> para copiar las propiedades del módulo en un nuevo módulo y para mostrar el nuevo módulo. <br/><br/> Para el nuevo módulo, un nuevo nombre se genera automáticamente añadiendo un número al final del nombre del módulo utilizado para crearlo.',
        'deletebtn'=>'Haga clic en <b> Eliminar </ b> para eliminar este módulo.',
        'name'=>'Este es el <b> nombre </ b> del módulo actual. <br/><br/> El nombre debe ser alfanumérica y debe comenzar con una letra y sin espacios. (Ejemplo: HR_Management)',
        'label'=>'Esta es la <b> etiqueta </ b> que aparecerá en la pestaña de navegación para el módulo.',
        'savebtn'=>'Haga clic en <b> Guardar </ b> para guardar todos los datos introducidos en relación con el módulo.',
        'type_basic'=>'La plantilla <b> básica </ b> cuenta con campos básicos, como el nombre, Asignado a, Equipo, Fecha de creación y los campos de Descripción.',
        'type_company'=>'El tipo de plantilla de la <b>Empresa</b> dispone de campos específicos a la organización, como por ejemplo Nombre de la Empresa, Sector, Dirección Fiscal. <br /><br />Utilice esta plantilla para crear módulos que son similares a los módulos estándares de Cuentas.',
        'type_issue'=>'El tipo de plantilla de <b>Problemas</b> disponde de campos específicos a incidencias y casos internos, como por ejemplo, Número, Estado, Prioridad, Descripción. <br /><br />Utilice esta plantilla para crear módulos que son similares a los módulos estándares de Incidencias y Seguimiento de Casos Internos.',
        'type_person'=>'El tipo de plantilla de <b>Persona</b> disponde de campos específicos al contacto, como por ejemplo, Greeting, Título, Nombre, Dirección, Número de Teléfono.  <br /><br />Utilice esta plantilla para crear módulos que son similares a los módulos estándares de Contactos y Potenciales.',
        'type_sale'=>'El tipo de plantilla de <b>Venta</b> dispone de campos específicos a las oportunidades, como por ejemplo, Origen del Potencial, Fase, Cantidad, y Probabilidad.<br /><br />Utilice esta plantilla para crear módulos que son similares a los módulos estándares de las Oportunidades.',
        'type_file'=>'El tipo de plantilla de <b>Archivo<b> dispone de campos específicos de Documentos, como por ejemplo, Nombre del Archivo, tipo de Documento, y Fecha de Publicación. <br /><br />Utilice esta plantilla para crear módulos que son similares a los módules estándares de Documentos.',

    ),
    'dropdowns'=>array(
        'default' => 'Todos los <b>Despligues</b> para la aplicación están listados aquí.<br><br>Se puede usar los despliegues para campos en cualquier módulo.<br><br> Para realizar cambios en un despliegue ya existente, haga clic en el nombre del despliegue.<br><br>Click <b> Añadir Despliegue</b> para crear uno nuevo.',
        'editdropdown'=>'Listas desplegables se pueden utilizar en los campos estándar o personalizado desplegables en cualquier módulo.<br><br> Proporcionar un <b>Nombre</b> Para la lista desplegable.<br><br> Si los paquetes de idioma se instalan en la aplicación, se puede seleccionar el<b>Lenguaje</b> que se utilizará para los elementos de la lista.<br><br> en el <b>Nombre del elemento </b> campo, proporcione un nombre para la opción de la lista desplegable. Este nombre no aparecerá en la lista desplegable que es visible para los usuarios.<br><br>IEn el<b>Etiqueta visible</b>campo, proporcione una etiqueta que será visible a los usuarios.<br><br> Después de proporcionar la etiqueta el nombre y la visualización de elementos, haga clic en <b>Añadir</b>para añadir el artículo a la lista desplegable.<br><br> Para volver a ordenar los elementos de la lista, arrastrar y soltar elementos en las posiciones deseadas.<br><br>Para editar la etiqueta de visualización de un elemento, haga clic en el<b>iIcono de Edición</b>, y escriba una nueva etiqueta. Para eliminar un elemento de la lista desplegable, haga clic en el <b> Icono de Eliminar</b>.<br><br> Para deshacer un cambio realizado en una etiqueta de visualización, haga clic en <b>Deshacer</b>. Para rehacer un cambio que se ha deshecho, haga clic en<b>Rehacer</b>.<br><br>Clic <b>Guardar</b> para guardar la lista desplegable.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
        'historyBtn'=> 'Haga Clic en <b>Ver Historial</b> para ver y restaurar un diseño previamente guardado del historial.',
        'historyDefault'=> 'Haga clic en <b>Restaurar por defecto</b> para restaurar una vista a su diseño original.',
        'Hidden' 	=> '<b>Oculto</b> los campos no aparecerán en el subpanel.',
        'Default'	=> '<b>Por defecto</b> los campos aparecen en el subpanel.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
        'historyBtn'=> 'Haga Clic en<b>Ver Historial</b> para ver y restaurar un diseño guardado previamente de la historia.<br><br><b>Restaurar</b> dentro de <b>Ver Historial</b> restaura la colocación sobre el terreno dentro de diseños guardados previamente. Para cambiar las etiquetas de campo, de Clic el icono Editar situado junto a cada campo.',
        'historyDefault'=> 'Haga Clic en <b>Restaurar por defecto</b>para restaurar una vista a su diseño original.<br><br><b>Restaurar por defecto</b>sólo restaura la colocación sobre el terreno en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono Editar junto a cada campo.',
        'Hidden' 	=> 'Campos<b>Ocultos</b> que no están disponibles actualmente para los usuarios a visitar en listviews.',
        'Available' => 'Campos<b>Disponibes</b>que no se muestran por defecto, pero se pueden agregar a listviews por los usuarios.',
        'Default'	=> 'Campos<b>Por Defecto</b>aparecen en listviews que no son personalizados por los usuarios.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y para que estén aplicados en el módulo.',
        'historyBtn'=> 'Haga Clic en<b>Ver Historial</b> para ver y restaurar un diseño guardado previamente de la historia.<br><br><b>Restaurar</b> dentro de <b>Ver Historial</b> restaura la colocación sobre el terreno dentro de diseños guardados previamente. Para cambiar las etiquetas de campo, de Clic el icono Editar situado junto a cada campo.',
        'historyDefault'=> 'Haga Clic en <b>Restaurar por defecto</b>para restaurar una vista a su diseño original.<br><br><b>Restaurar por defecto</b>sólo restaura la colocación sobre el terreno en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono Editar junto a cada campo.',
        'Hidden' 	=> 'Campos<b>Ocultos</b> que no están disponibles actualmente para los usuarios a visitar en listviews.',
        'Default'	=> 'Campos<b>Por Defecto</b>aparecen en listviews que no son personalizados por los usuarios.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Haga clic en <b>Guardar y Desplegar</b> para guardar los cambios que ha realizado y hacerlos activos.',
        'Hidden' 	=> 'Campos<b>Ocultos</b> que no aparecen en Buscador.',
        'historyBtn'=> 'Haga Clic en<b>Ver Historial</b> para ver y restaurar un diseño guardado previamente de la historia.<br><br><b>Restaurar</b> dentro de <b>Ver Historial</b> restaura la colocación sobre el terreno dentro de diseños guardados previamente. Para cambiar las etiquetas de campo, de Clic el icono Editar situado junto a cada campo.',
        'historyDefault'=> 'Haga Clic en <b>Restaurar por defecto</b>para restaurar una vista a su diseño original.<br><br><b>Restaurar por defecto</b>sólo restaura la colocación sobre el terreno en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono Editar junto a cada campo.',
        'Default'	=> 'Campos<b>Por Defecto</b> que aparecen en la Búsqueda..'
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
        'saveBtn'	=> 'Haga Clic en <b>Guardar</b>para preservar los cambios realizados en la presentación desde la última vez que lo guardó.<br><br>Los cambios no se mostrarán en el módulo hasta que se implementan los cambios guardados.',
        'historyBtn'=> 'Haga Clic en<b>Ver Historial</b> para ver y restaurar un diseño guardado previamente de la historia.<br><br><b>Restaurar</b> dentro de <b>Ver Historial</b> restaura la colocación sobre el terreno dentro de diseños guardados previamente. Para cambiar las etiquetas de campo, de Clic el icono Editar situado junto a cada campo.',
        'historyDefault'=> 'Haga Clic en <b>Restaurar por defecto</b>para restaurar una vista a su diseño original.<br><br><b>Restaurar por defecto</b>sólo restaura la colocación sobre el terreno en el diseño original. Para cambiar las etiquetas de campo, haga clic en el icono Editar junto a cada campo.',
        'publishBtn'=> 'Haga Clic en <b>Guardar e Implementar</b> para guardar todos los cambios realizados en la presentación desde la última vez que lo guardó, y para activar los cambios en el módulo. <br><br>La distribución será de inmediato se mostrará en el módulo.',
        'toolbox'	=> 'La <b>Caja de Herramientas</b> contiene la <b>Papelera de Reciclaje</b>,elementos de diseño adicionales y el conjunto de campos disponibles para añadir al diseño.<br/><br/>Los elementos de diseño y los campos en el cuadro de herramientas se pueden arrastrar y soltar en la presentación y los elementos de diseño y los campos se pueden arrastrar y soltar desde el diseño en el cuadro de herramientas.<br><br>Los elementos de diseño son <b>Paneles</b> y <b>Filas</b>. Agregar una fila nueva o un nuevo panel para el diseño proporciona ubicaciones adicionales en el diseño de campos.<br/><br/> Arrastre y suelte cualquiera de los campos en el cuadro de herramientas o el diseño en una posición de campo ocupado de cambiar las ubicaciones de los dos campos.<br/><br/>El campo de <b>Relleno</b>  crea un espacio en blanco en la presentación en la que se coloca.',
        'panels'	=> 'El área de <b>Presentación</b> proporciona una vista del aspecto que tendrá la presentación dentro del módulo de activación de los cambios realizados en el diseño.<br/><br/>Puede cambiar la posición de los campos, filas y paneles arrastrándolos y soltándolos en el lugar deseado.<br/><br/>Elimina los elementos arrastrándolos y soltándolos en la <b>Papelera de Reciclaje</b>en la caja de herramientas, o añadir nuevos elementos y campos arrastrándolos desde la <b>Caja de Herramientas</b  y colocándolos en el lugar deseado en el diseño.',
        'delete'	=> 'Arrastre y suelte cualquier elemento para eliminarlo de la disposición',
        'property'	=> 'Edite la etiqueta que se muestra para este campo. <br/> <b> Orden de tabulación </ b> controla el orden de los interruptores de tecla de tabulación entre los campos.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Los <b>Campos</b> que están disponibles para el módulo se enumeran aquí por Nombre de campo.<br><br>Los campos personalizados creados para el módulo aparecen por encima de los campos que están disponibles para el módulo por defecto.<br><br>Para editar un campo, haga clic en el<b>Nombre de Camo</b>.<br/><br/>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>.',
        'mbDefault'=>'Los <b>Campos</b> que están disponibles para el módulo se enumeran aquí por Nombre de campo.<br><br> Para configurar las propiedades de un campo, haga clic en el nombre de campo. <br><br>>Para crear un nuevo campo, haga clic en <b>Agregar Campo</b>. La etiqueta junto con las otras propiedades del campo nevo se pueden editar después de la creación haciendo clic en el nombre de campo.<br><br>Después de implementar el módulo, los nuevos campos creados en el módulo Constructor son considerados como campos estándar en el módulo desplegado en Studio.',
        'addField'	=> 'Seleccionar <b>Tipo de Dato</b> para n campo nuevo.El tipo que seleccione determinará qué tipo de caracteres se pueden introducir para el campo. Por ejemplo, sólo los números que son números enteros pueden ser introducidos en los campos que son de tipo entero.<br><br> Proporcione un <b>Nombre</b> para el campo. El nombre debe ser alfanumérico, y no debe contener espacios. Los guiones son válidas.<br><br> The <b>Etiqueta Visible</b>es la etiqueta que aparecerá para los campos en los diseños de los módulos.  La <b>Etiqueta del Sistema</b> se utiliza para hacer referencia al campo en el código.<br><br> Dependiendo del tipo de datos seleccionado para el campo, algunas o todas de las siguientes propiedades pueden ser establecidas para el campo:<br><br> <b>Texto de Ayuda</b> aparece temporalmente mientras un usuario se desplaza sobre el campo y se puede utilizar para solicitar al usuario el tipo de entrada que desee.<br><br> <b>Comentario de texto</b> sólo se ve dentro de Estudio y / o módulo Builder, y se puede utilizar para describir el campo para los administradores.<br><br> <b>Valor Predeterminado</b> aparecerá en el campo. Los usuarios pueden introducir un nuevo valor en el campo o utilice el valor por defecto.<br><br> Seleccione la casilla de verificación de <b>Actualización Masiva</b> con el fin de poder utilizar la función de actualización masiva para el campo.<br><br> El valor de <b>Tamaño Máximo</b>determina el número máximo de caracteres que se pueden introducir en el campo.<br><br> Selecciona la casilla de verificación de <b>Campo Requerido</b> con el fin de hacer que el campo es necesario. Un valor debe ser proporcionada por el campo con el fin de ser capaz de guardar un registro que contiene el campo.<br><br> Seleccione la casilla de verificación de <b>Notificable</b>con el fin de permitir que el campo que se utilizará para los filtros y para la visualización de los datos en los Informes.<br><br> Seleccione la casilla de verificación de <b>Auditoría</b>con el fin de ser capaz de seguir los cambios en el campo en el registro de cambios.<br><br>Seleccionar una opción en el campo de <b>Importación</b>para permitir, prohibir o exigir el campo para ser importados en el Asistente de importación.<br><br>Seleccionar una opción en el campo de <b>Combinación de Duplicados</b>para activar o desactivar la Combinación de Duplicados y encontrar características Duplicas.<br><br>Las propiedades adicionales se pueden establecer para ciertos tipos de datos.',
        'editField' => 'Las propiedades de este campo se pueden personalizar.<br><br>Haga Clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.',
        'mbeditField' => 'La <b>Etiqueta de Pantalla</b> de un plantilla de campo se puede personalizar. Las otras propiedades del campo no se pueden personalizar.<br><br>Haga Clic en <b>Clonar</b> para crear un nuevo campo con las mismas propiedades.<br><br> Para eliminar un plantilla de campo para que no se muestra en el módulo, elimine el campo de los diseños de <b>apropiados</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Personalizaciones de exportación realizadas en estudio mediante la creación de paquetes que se pueden cargar en otra instancia de Sugar a través del <b>Cargador d Módulos</b>.<br><br>Primero, Proporcione un <b>Nombre de Paquete</b>. Puede Proporcionar el <b>Autor</b> y <b>Descripción</b> como también la información del paquete.<br><br>Seleccione el módulo(s)que contiene las personalizaciones que desea exportar. Sólo los módulos que contienen personalizaciones aparecerá para que usted seleccione.<br><br>Luego haga Clic en <b>Exportar</b>para crear un archivo zip. para el paquete que contiene las personalizaciones.',
        'exportCustomBtn'=>'Haga Clic en <b>Exportar</b>para crear un archivo zip. para el paquete que contiene las personalizaciones que desea exportar.',
        'name'=>'Este es el <b>Nombre</b> del paquete. Este nombre se mostrará durante la instalación.',
        'author'=>'Este es el <b> Autor </ b> que se muestra durante la instalación como el nombre de la entidad que creó el paquete. <br/><br/> El autor podría ser un individuo o una empresa.',
        'description'=>'Esta es la  <b>Descripción</b> que se muestra durante la instalación.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Bienvenidos a el área de <b>Herramientas para Desarrolladores</b>. <br/><br/> Utilice las herramientas dentro de esta área para crear y administrar módulos y campos estándar y personalizados.',
        'studioBtn'	=> 'Utilice <b>Studio</b> para personalizar los módulos desplegados.',
        'mbBtn'		=> 'Use el <b>Contructor de módulos</b> para crear nuevos módulos',
        'sugarPortalBtn' => 'Utilice <b>Portal de Edición de Sugar</b> para administrar y personalizar el portal de Sugar.',
        'dropDownEditorBtn' => 'Utilice el <b>Editor desplegable</b> para añadir y editar listas desplegables globales para campos desplegables.',
        'appBtn' 	=> 'Utilice el modo de aplicación para personalizar las propiedades incluidas en el programa, por ejemplo, cómo muchos de los informes TPS que se muestran en la página de inicio',
        'backBtn'	=> 'Volver a la etapa anterior.',
        'studioHelp'=> 'Utilice <b>Studio</b> para determinar qué y cómo se muestra la información en los módulos.',
        'studioBCHelp' => 'indica que el módulo es un módulo compatible con versiones anteriores',
        'moduleBtn'	=> 'Haga clic para editar este módulo.',
        'moduleHelp'=> 'Los componentes que se pueden personalizar para el módulo aparecen aquí.<br><br>Haga clic en un icono para seleccionar el componente que desea editar.',
        'fieldsBtn'	=> 'Crear y personalizar los <b>Campos</b> para almacenar la información en el módulo.',
        'labelsBtn' => 'Editar las <b> etiquetas </ b> para mostrar los valores de este módulo.'	,
        'relationshipsBtn' => 'Añadir nuevo o existente <b>Relación</b> para el módulo.' ,
        'layoutsBtn'=> 'Personalice los módulos de <b>Presentación</b>. Las Presentaciones son los diferentes puntos de vista de los campos que contienen los módulos.<br><br> Puede determinar qué campos aparecen y cómo se organizan en cada presentación.',
        'subpanelBtn'=> 'Determine qué campos aparecen en los móulos de <b>Subpanels</b>.',
        'portalBtn' =>'Personalice los módulos de <b>Presentaciones</b>que aparecen en el<b>Portal de Sugar</b>.',
        'layoutsHelp'=> 'Los módulos de  <b>Presentación</b> que puede ser personalizado aparecen aquí.<br><br>Los diseños muestran los campos y los datos de campo.<br><br> Haga clic en un icono para seleccionar el diseño que desea editar.',
        'subpanelHelp'=> 'Los módulos de <b>Subpanels</b> que puede ser personalizado aparecen aquí.<br><br> Haga clic en un icono para seleccionar el diseño que desea editar.',
        'newPackage'=>'Haga clic en Nuevo paquete para crear un nuevo paquete.',
        'exportBtn' => 'Haga clic en <b> Exportar personalizaciones </ b> para crear un paquete que contiene las personalizaciones realizadas en el Estudio de los módulos específicos.',
        'mbHelp'    => 'Utilice <b>Módulo Builder</b> para crear paquetes que contienen módulos personalizados basados ​​en objetos estándar o personalizados.',
        'viewBtnEditView' => 'Personalizar el módulo de <b>Editar Vista</b> de la Presentación.<br><br> El formulario de Editar Vista contiene campos de entrada para la captura de los datos introducidos por el usuario.',
        'viewBtnDetailView' => 'Personalizar el módulo de <b>Vista de Detalle</b> de la Presentación.<br><br> La Vista de Detalles muestra datos de campo introducidos por el usuario.',
        'viewBtnDashlet' => 'Personalizar el módulo de <b>Sugar Dashlet</b>, incluyendo la Vista de Lista de Sugar Dashlet y el Buscador.<br><br> Sugar Dashlet estará disponible para agregar a las páginas en el módulo Inicio.',
        'viewBtnListView' => 'Personalizar el módulo de<b>Vista de Lista</b> de la Presentación. <br><br> Los resultados de la búsqueda aparecen en la Vista de Lista.',
        'searchBtn' => 'Personalizar el módulo de<b>Vista de Lista</b> de la Presentación.<br><br>Determine qué campos se puede utilizar para filtrar registros que aparecen en la Vista de Lista.',
        'viewBtnQuickCreate' =>  'Personalizar el módulo de<b>Creación Rápida</b> de la Presentación.<br><br>El formulario Creación Rápida aparece en subpaneles y en el módulo de mensajes de correo electrónico.',

        'searchHelp'=> 'Los Formularios de <b>Búsqueda</b> que se pueden personalizar aparecen aquí.<br><br> La Búsqueda de formularios contienen campos para filtrar registros.<br><br> Haga clic en un icono para seleccionar el diseño de búsqueda para editar.',
        'dashletHelp' =>'Las Presentaciones de <b>Sugar Dashlet</b>que se pueden personalizar aparecen aquí.<br><br> Sugar Dashlet estará disponible para agregar a las páginas en el módulo Inicio.',
        'DashletListViewBtn' =>'La <b>Vista de Lista de Sugar Dashlet </b> muestra registros en función de los filtros de búsqueda de Sugar Dashlet',
        'DashletSearchViewBtn' =>'La búsqueda de Sugar Dashlet filtra registros para el listview de Sugar Dashlet.',
        'popupHelp' =>'Los diseños<b>Popup</b> se pueden personalizar aparecen aquí.<br>',
        'PopupListViewBtn' => 'La <b>Vita de Lista de Popup</b> muestra registros basados en las búsquedas de Popup.',
        'PopupSearchViewBtn' => 'La <b>Búsqueda de Popup</b> Ve los registros de la Vista de Lista Popup.',
        'BasicSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Básica</b>que aparece en la búsqueda de Ficha Básica en la zona de búsqueda para el módulo.',
        'AdvancedSearchBtn' => 'Personalizar el formulario de <b>Búsqueda Avanzad</b> que aparece en la pestaña de búsqueda avanzada en el área de la búsqueda para el módulo.',
        'portalHelp' => 'Administrar y personalizar el <b>Portal de Sugar</b>.',
        'SPUploadCSS' => 'Cargar <b>Estilo de Hoja</b> para el Portal de Sugar.',
        'SPSync' => '<b>Sincronizar</b> personalizaciones a la instancia de Portal Sugar.',
        'Layouts' => 'Personalizar las <b>Presentaciones</b> de los módulos del Portal de Sugar.',
        'portalLayoutHelp' => 'Los módulos dentro del Portal de Sugar aparecen en esta área.<br><br> Seleccione un módulo para editar las<b>Presentaciones</b>.',
        'relationshipsHelp' => 'Todas las <b>Releaciones</b> que existe entre el módulo y otros módulos desplegados aparecen aquí.<br><br> El <b>Nombre</b> de la Relación es el nombre generado por el sistema para la relación.<br><br>El <b>Módulo Primario</b> es el módulo que es propietario de las relaciones. Por ejemplo, todas las propiedades de las relaciones para que el módulo de Cuentas es el módulo principal se almacenan en las tablas de base de cuentas.<br><br>El <b>Tipo</b> es el tipo de relación entre el módulo primario y el <b>Módulo Relacionado</b>.<br><br>Haga clic en un título de la columna para ordenar por la columna.<br><br>Haga clic en una fila en la tabla de relaciones para ver las propiedades asociadas a la relación.<br><br>Haga Clic en <b>Añadir Relación</b> para crear una nueva relación.<br><br>Las relaciones pueden ser creadas entre dos módulos desplegados.',
        'relationshipHelp'=>'Las <b>Relaciones</b>se puede crear entre el módulo y otro módulo desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionar campos en los registros del módulo.<br><br>Seleccione una de los siguientes <b>Tipos</b> de relaciones para el módulo:<br><br> <b>Uno-a-Uno</b> - Ambos registros de los dos módulos contienen los campos relacionados.<br><br> <b>Uno-a-Muchos</b> - El registro del módulo Primario contendrá un subpanel, y el Registro del Módulo de Relacionado contendrá un campo de relación.<br><br> <b>Muchos-a-Muchos</b> - Ambos registros de módulos se mostrarán subpaneles.<br><br> Selecciona el <b>Módulo Relacionado</b> de la Relación. <br><br>Si el tipo de relación implica subpaneles, seleccione la vista subpanel para los módulos correspondientes.<br><br> Haga Clic en <b>Guardar</b> para crear la relación.',
        'convertLeadHelp' => "Aquí usted puede agregar módulos a la pantalla de diseño de converso y modificar los trazados de los ya existentes.<br/><br />        Puede volver a ordenar los módulos arrastrando sus filas en la tabla.<br/><br/><br /><br />        <b>Módulo:</b> El Nombre del Módulo.<br/><br/><br />        <b>Requerido:</b>Módulos requeridos deben ser creados o seleccionados antes de que el plomo se puede convertir.<br/><br/><br />        <b>Copia de Datos:</b>Si se selecciona, los campos de la iniciativa se copiarán a los campos con el mismo nombre en los registros de nueva creación.<br/><br/><br />        <b>Permitir Selección:</b> Los módulos con un campo de relacionarse en Contactos se pueden seleccionar y no crean durante el proceso de convertir el plomo.<br/><br/><br />        <b>Editar:</b>Modificar el diseño converso para este módulo.<br/><br/><br />        <b>Eliminar:</b> Elimine el módulo de la presentación convertida.<br/><br/>",
        'editDropDownBtn' => 'Editar un desplegable global',
        'addDropDownBtn' => 'Añadir un nuevo desplegable global',
    ),
    'fieldsHelp'=>array(
        'default'=>'Los <b>Campos</b>en el módulo se incluye aquí por Nombre del campo.<br><br>La plantilla de módulo incluye un conjunto predeterminado de campos.<br><br>Para crear un nuevo campo, haga clic en<b>Añadir Campo</b>.<br><br>Para editar un campo, haga clic en el <b>Nombre de Campo</b>.<br/><br/> Después de implementar el módulo, los nuevos campos creados en el módulo Constructor, junto con los campos de la plantilla, son considerados como campos estándar en Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'Las <b>Relaciones</b> que se han creado entre el módulo y otros módulos aparecen aquí.<br><br>El <b>Nombr</b> de la Relación es el nombre generado por el sistema para la relación.<br><br>El <b>Módulo Primario</b>> Es el módulo que es propietario de las relaciones. Las propiedades de las relaciones se almacenan en las tablas de la base de datos pertenecientes al módulo primario.<br><br>El <b>Tipo</b> es el tipo de relación entre el módulo primario y el <b>Módulo Relacionado</b>.<br><br> Haga clic en un título de la columna para ordenar por la columna.<br><br> Haga clic en una fila en la tabla de relaciones para ver y editar las propiedades asociadas con la relación.<br><br>Haga Clic en <b>Añadir Relación</b> para crear una nueva relación.',
        'addrelbtn'=>'puntero del mouse sobre ayuda para añadir relación..',
        'addRelationship'=>'Las <b>Relaciones</b>  pueden ser creados entre el módulo y otro módulo personalizado o un módulo desplegado.<br><br> Las relaciones se expresan visualmente a través de subpaneles y relacionar campos en los registros del módulo.<br><br>Seleccione uno de los siguientes <b>Tipos</b> de relaciones para los módulos:<br><br> <b>Uno-a-Uno</b> - Ambos registros de los dos módulos contienen los campos relacionados.<br><br> <b>Uno-a-Muchos</b> - El registro del módulo Primario contendrá un subpanel, y el Registro del Módulo de Relacionado contendrá un campo de relación.<br><br> <b>Muchos-a-Muchos</b> - Ambos registros de módulos se mostrarán subpaneles.<br><br> Selecciona el <b>Módulo Relacionado</b> de la Relación. <br><br>Si el tipo de relación implica subpaneles, seleccione la vista subpanel para los módulos correspondientes.<br><br> Haga Clic en <b>Guardar</b> para crear la relación.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Las <b>Etiquetas</b> de los campos y otros títulos en el módulo pueden cambiarse.<br><br>Edite la etiqueta haciendo clic en el campo, introduciendo una nueva etiqueta y haciendo clic en <b>Guardar</b>.<br><br>Si los paquetes de idioma se instalan en la aplicación, puede seleccionar el <b>Idioma</b> que se utilizará para las etiquetas.',
        'saveBtn'=>'Haga Clic en <b>Guardar</b> para guardar los cambios.',
        'publishBtn'=>'Haga Clic en <b>Guardar e Implementar</b> para guardar todos los cambios y hacerlos activos.',
    ),
    'portalSync'=>array(
        'default' => 'Introduzca el <b>URL del Portal de Sugar</b> de la instancia de portal para actualizar y haga clic en<b>Ir</b>.<br><br>A continuación, introduzca un nombre de usuario válido y la contraseña de Sugar y haga clic en<b>Iniciar sincronización</b>.<br><br> Las personalizaciones realizadas en las <b>Presentaciones</b> del Portal de Sugar, junto con el <b>Estilo de Hoja</b> si uno fue subido, serán transferidos a la instancia de portal especificada.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Puede personalizar el aspecto del Portal de Sugar mediante estilos de hojas.<br><br>Seleccione un <b>Estilo de Hoja</b> para cargar.<br><br> La hoja de estilo se llevará a cabo en el Portal de Sugar la próxima vez que una sincronización se lleva a cabo.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Para empezar a trabajar en un proyecto, haga clic en<b>Paquete Nuevo</b> para crear un nuevo paquete para albergar a su módulo (s) personalizado. <br/><br/> Cada paquete puede contener uno o más módulos.<br/><br/> Por ejemplo, es posible que desee crear un paquete que contiene un módulo personalizado que se relaciona con el módulo de Cuentas estándar. O bien, es posible que desee crear un paquete que contiene varios módulos nuevos que funcionan juntos como un proyecto y que están relacionados entre sí y con otros módulos que ya están en la aplicación.',
            'somepackages'=>'Un <b>paquete</b> actúa como un contenedor para módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> de encargo que pueden estar relacionados entre sí o con otros módulos de la aplicación.<br/><br/>Después de crear un paquete para su proyecto, puede crear módulos para el paquete de inmediato, o puede volver al generador de módulo en un momento posterior para completar el proyecto.<br><br> Cuando el proyecto esté terminado, puede<b>Implementar</b> el paquete para instalar los módulos personalizados dentro de la aplicación.',
            'afterSave'=>'Su nuevo paquete debe contener al menos un módulo. Puede crear uno o más módulos personalizados para el paquete.<br/><br/>Haga Clic en <b>Nuevo Módulo</b> para crear un módulo personalizado para este paquete.<br/><br/> Después de crear al menos un módulo, puede publicar o distribuir el paquete para que esté disponible para la instancia y / o instancias de otros usuarios.<br/><br/>Para implementar el paquete en un solo paso dentro de su instancia de Sugar, haga clic en <b>Implementar</b>.<br><br> Haga Clic en <b>Publicar</b> para guardar el paquete como un archivo.zip. Después de que el archivo.zip se guarda en el sistema, utilice el<b>Cargador de Módulo</b> para cargar e instalar el paquete dentro de la instancia de Sugar. <br/><br/> Puede distribuir el archivo a otros usuarios cargar e instalar dentro de sus propias instancias de Sugar.',
            'create'=>'Un <b>paquete</b> actúa como un contenedor para módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más <b>módulos</b> personalizados que pueden estar relacionados entre sí o con otros módulos de la aplicación.<br/><br/>Después de crear un paquete para su proyecto, puede crear módulos para el paquete de inmediato, o puede volver al generador de módulo en un momento posterior para completar el proyecto.',
            ),
    'main'=>array(
        'welcome'=>'Utilice las <b>Herramientas para Desarrolladores</b>para crear y administrar módulos y campos estándar y personalizados. <br/><br/>Para gestionar los módulos de la aplicación, haga clic en <b>Estudio</b>. <br/><br/>Para crear módulos personalizados, haga clic en <b>Constructor de módulo</b>.',
        'studioWelcome'=>'Todos los módulos instalados, incluyendo estándar y objetos de módulo cargado, se pueden personalizar en Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Dado que el paquete actual contiene al menos un módulo, puede <b>Desplegar</b> los módulos en el paquete dentro de la instancia de Sugar o <b>Publicar</b> el paquete para ser instalado en la instancia actual de Sugar u otra instancia utilizando el <b>Cargador de Módulo</b>.<br/><br/>Para instalar el paquete directamente dentro de su instancia de Sugar, haga clic en <b>Desplegar</b>.<br><br>Para crear un archivo .zip para el paquete que se puede cargar y se instala dentro de la instancia actual de Sugar  y en otros casos utilizando el <b>Cargador de Módulo</b>, haga clic en <b>Publicar</b>.<br/><br/>Usted puede construir los módulos de este paquete en etapas, y publicar o desplegar cuando esté listo para hacerlo. <br/><br/> Después de publicar o desplegar un paquete, puede realizar cambios en las propiedades del paquete y personalizar los módulos más. Luego se vuelve a publicar o volver a implementar el paquete para aplicar los cambios." ,
        'editView'=> 'Aquí puede editar los campos existentes. Puede eliminar cualquiera de los campos existentes o añadir campos disponibles en el panel de la izquierda.',
        'create'=>'Al elegir el tipo de <b>Tipo</b> de módulo que desea crear, tener en cuenta los tipos de campos que le gustaría tener en el módulo. <br/><br/>Cada plantilla de módulo contiene un conjunto de campos relacionados con el tipo de módulo descrito por el título.<br/><br/><b>Básico</b> - Proporciona campos básicos que aparecen en los módulos estándar, tales como el nombre, Asignado a, equipo, campos Fecha de creación y Descripción.<br/><br/> <b>Empresa</b> - Proporciona los campos específicos de la organización, tales como Nombre de la Empresa, Industria y dirección de facturación. Utilice esta plantilla para crear módulos que son similares al módulo de Cuentas Estádar.<br/><br/> <b>Persona</b> -Proporciona campos individuales específicos, tales como Saludo, Título, nombre, dirección y número de teléfono. Utilice esta plantilla para crear módulos que son similares a los contactos estándar y módulos de Leads.<br/><br/><b>Problema</b> - Proporciona casos y campos de errores específico, como Número, Estado, Prioridad y la descripción. Utilice esta plantilla para crear módulos que son similares a las casos estándar y módulos de seguimiento de errores.<br/><br/>Nota: Después de crear el módulo, puede editar las etiquetas de los campos proporcionados por la plantilla, así como crear campos personalizados para agregar a los diseños de los módulos.',
        'afterSave'=>'Personalizar el módulo para satisfacer sus necesidades mediante la edición y creación de campos, establecer relaciones con otros módulos y la organización de los campos dentro de los diseños.<br/><br/>Para ver los campos de la plantilla y gestionar campos personalizados en el módulo, haga clic en <b>Ver Campos</b>.<br/><br/>Para crear y gestionar las relaciones entre el módulo y otros módulos, ya sean módulos ya en la solicitud o de otros módulos personalizados dentro del mismo paquete, haga clic en <b>Ver Relaciones</b>.<br/><br/>Para editar los diseños de módulos, haga clic en <b>Ver Presentaciones</b>.Puede cambiar la vista en detalle, Editar Vista y Vista de lista de diseños para el módulo del mismo modo que para los módulos que ya están en la aplicación dentro de Studio.<br/><br/> Para crear un módulo con las mismas propiedades que el módulo actual, haga clic en<b>Duplicar</b>. Puede personalizar aún más el nuevo módulo.',
        'viewfields'=>'Los campos en el módulo se pueden personalizar para satisfacer sus necesidades.<br/><br/>No se puede eliminar campos estándar, pero puede quitarlos de los diseños apropiados dentro de las páginas de Presentaciones.<br/><br/>Puede crear rápidamente nuevos campos que tienen propiedades similares a los campos existentes haciendo clic <b>Clonar</b> en la forma de <b>Propiedades</b>Introduzca las nuevas propiedades y, a continuación, haga clic en.<b>Guardar</b>.<br/><br/>Se recomienda establecer todas las propiedades de los campos estándar y campos personalizados antes de publicar e instalar el paquete que contiene el módulo personalizado.',
        'viewrelationships'=>'Puede crear varios a varios entre el módulo actual y otros módulos en el paquete, y / o entre el módulo actual y los módulos ya instalados en la aplicación.<br><br> Para crear uno-a-muchos y uno-a-uno, crear campos de <b>Relacionar</b> y <b>Relación Flex</b> para los módulos.',
        'viewlayouts'=>'Usted puede controlar lo que están disponibles para la captura de datos en el campo <b>Vista de Edición</b>.  También se puede  controlar lo que muestran los datos dentro de la <b>Vista de Detalle</b>. Los puntos de vista no tienen que coincidir. <br/><br/>Se muestra el formulario Creación rápida cuando se hace clic en la opción <b>Crear</b> un módulo subpanel. Por defecto, la <b>Creación Rápida</b> diseño del formulario es el mismo que el diseño predeterminado de <b>Vista de Edición<br/>. Usted puede personalizar el formulario Creación Rápida de manera que contenga los campos menos y / o diferentes a la presentación Editar vista.<br><br>Puede determinar el módulo de seguridad usando la personalización de diseño, junto con <b>Administración de funciones</b>.<br><br>',
        'existingModule' =>'Después de la creación y personalización de este módulo, se pueden crear módulos adicionales o volver al paquete de<b>Publicación</b> o <b>Implementar</b> el paquete.<br><br>Para crear módulos adicionales, haga clic en<b>Duplicar</b> para crear un módulo con las mismas propiedades que el módulo actual, o navegar de vuelta al paquete y haga clic en<b>Módulo Nuevo</b>.<br><br>Si usted está listo para <b>Publicar</b> o <b>Implementar</b> el paquete que contiene este módulo, vaya de nuevo a el paquete para realizar estas funciones. Usted puede publicar y distribuir paquetes que contienen al menos un módulo.',
        'labels'=> 'Las etiquetas de los campos estándar, así como los campos personalizados se pueden cambiar. Cambio de etiquetas de campo no afectarán a los datos almacenados en los campos.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Hay tres columnas que se muestran a la izquierda. La columna "Default" contiene los campos que se muestran en una vista de lista de forma predeterminada, la columna "Disponible" contiene los campos que el usuario puede elegir para crear una vista de lista personalizada, y la columna "Hidden" contiene los campos disponibles para usted como un administrador que sea añadir a los valores predeterminados o columnas disponibles para su utilización por los usuarios, pero están desactivadas.',
        'savebtn'	=> 'Al hacer clic en <b>Guardar</b> se guardarán todos los cambios y hacer que se activa.',
        'Hidden' 	=> 'Campos ocultos son campos que no están disponibles actualmente para los usuarios para el uso en las vistas de lista.',
        'Available' => 'Los campos disponibles son campos que no se muestran por defecto, pero se pueden habilitar por los usuarios.',
        'Default'	=> 'Campos predeterminados se muestran a los usuarios que no han creado la configuración de vista de lista personalizados.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Hay dos columnas que se muestran a la izquierda. La columna "Default" contiene los campos que se mostrarán en la vista de búsqueda, y la columna "Hidden" contiene los campos disponibles para usted como un administrador para agregar a la vista.',
        'savebtn'	=> 'Al hacer clic en <b>Guardar y Implementar</b> guardará todos los cambios y los hará activos..',
        'Hidden' 	=> 'Campos ocultos son campos que no se muestran en la vista de búsqueda.',
        'Default'	=> 'Campos predeterminados se mostrarán en la vista de búsqueda.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'Hay dos columnas que se muestran a la izquierda. La columna de la derecha, con la etiqueta de diseño actual o Vista previa del diseño, es donde se cambia el diseño del módulo. La columna de la izquierda, titulado Caja de herramientas, contiene elementos y herramientas útiles para su uso durante la edición de el diseño.<br/><br/>Si el área de diseño se titula Disposición actual, entonces usted está trabajando en una copia de la presentación actualmente utilizado por el módulo de pantalla.<br/><br/>Si se titula Vista previa del diseño entonces usted está trabajando en una copia creada con anterioridad por un clic en el botón Guardar, que podría haber ya sido cambiado de la versión vista por los usuarios de este módulo.',
        'saveBtn'	=> 'Al hacer clic en este botón guarda el diseño para que pueda conservar los cambios. Cuando regrese a este módulo se iniciará a partir de este diseño modificado. Su diseño sin embargo, no será visto por los usuarios del módulo hasta que hace clic en el botón Guardar y publicar.',
        'publishBtn'=> 'Haga clic en este botón para desplegar el diseño. Esto significa que esta disposición inmediatamente será visto por los usuarios de este módulo.',
        'toolbox'	=> 'La caja de herramientas contiene una variedad de características útiles para la edición de diseños, incluyendo un área de basura, un conjunto de elementos adicionales y un conjunto de campos disponibles. Cualquiera de estos se puede arrastrar y soltar en el diseño.',
        'panels'	=> 'Esta área muestra cómo su diseño se verá a los usuarios de este módulo cuando se depolyed.<br/><br/>Puede cambiar la posición de los elementos tales como campos, filas y paneles arrastrándolos y soltándolos, eliminar elementos arrastrándolos y soltándolos en el área de la basura en la caja de herramientas, o añadir nuevos elementos arrastrándolos desde la caja de herramientas y soltándolas en la presentación de la posición deseada.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'Hay dos columnas que se muestran a la izquierda. La columna de la derecha, con la etiqueta de diseño actual o Vista previa del diseño, es donde se cambia el diseño del módulo. La columna de la izquierda, titulado Caja de herramientas, contiene elementos y herramientas útiles para su uso durante la edición de el diseño.<br/><br/>Si el área de diseño se titula Disposición actual, entonces usted está trabajando en una copia de la presentación actualmente utilizado por el módulo de pantalla.<br/><br/>Si se titula Vista previa del diseño entonces usted está trabajando en una copia creada con anterioridad por un clic en el botón Guardar, que podría haber ya sido cambiado de la versión vista por los usuarios de este módulo.',
        'dropdownaddbtn'=> 'Haciendo clic en este botón se añade un nuevo elemento a la lista desplegable.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Personalizaciones de exportación realizadas en estudio mediante la creación de paquetes que se pueden cargar en otra instancia de Sugar a través del <b>Cargador d Módulos</b>.<br><br>Primero, Proporcione un <b>Nombre de Paquete</b>. Puede Proporcionar el <b>Autor</b> y <b>Descripción</b> como también la información del paquete.<br><br>Seleccione el módulo(s)que contiene las personalizaciones que desea exportar. Sólo los módulos que contienen personalizaciones aparecerá para que usted seleccione.<br><br>Luego haga Clic en <b>Exportar</b>para crear un archivo .zip para el paquete que contiene las personalizaciones.',
        'exportCustomBtn'=>'Haga clic en <b>Exportar</b>para crear un archivo .zip para el paquete que contiene las personalizaciones que desea exportar.',
        'name'=>'El <b>Nombre</b> del paquete se mostrarán en el módulo de la cargadora después de que el paquete se carga para su instalación en Studio.',
        'author'=>'El <b>Autor</b>es el nombre de la entidad que creó el paquete. El autor puede ser un individuo o una empresa.<br><br> El Autor se mostrará en el módulo de la cargadora después de que el paquete se carga para su instalación en Studio.',
        'description'=>'La<b>Descripción</b> del paquete se mostrará en el módulo de la cargadora después de que el paquete se carga para su instalación en Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'Bienvenidos a el área de <b>Herramientas para Desarrolladores</b>. <br/><br/> Utilice las herramientas dentro de esta área para crear y administrar módulos y campos estándar y personalizados.',
        'studioBtn'	=> 'Utilice Studio para personalizar los módulos instalados cambiando la disposición de campo, la selección de lo que se dispone de los campos y la creación de campos de datos personalizado.',
        'mbBtn'		=> 'Use el <b>Contructor de módulos</b> para crear nuevos módulos',
        'appBtn' 	=> 'Utilice el modo de aplicación para personalizar las propiedades incluidas en el programa, por ejemplo, cómo muchos de los informes TPS que se muestran en la página de inicio',
        'backBtn'	=> 'Volver a la etapa anterior.',
        'studioHelp'=> 'Use el <b>Studio</b> para personalizar los módulos instalados.',
        'moduleBtn'	=> 'Haga clic para editar este módulo.',
        'moduleHelp'=> 'Seleccione el componente del módulo que desea editar',
        'fieldsBtn'	=> 'Editar información que se almacena en el módulo mediante el control de los <b> campos </b> del módulo. <br/><br/> Puede editar y crear campos personalizados aquí.',
        'labelsBtn' => 'Editar las <b> etiquetas </ b> para mostrar los valores de este módulo.'	,
        'layoutsBtn'=> 'Personalizar las <b> vistas </b> del diseños de la edición, el detalle, el listado y la búsqueda.',
        'subpanelBtn'=> 'Editar la información que se muestra en los subpaneles de los módulos.',
        'layoutsHelp'=> 'Seleccione una <b>Presentación a editar</b>.<br/<br/> Para cambiar el diseño que contiene los campos de datos para introducir los datos, haga clic en<b>Vista de Edición</b>.<br/><br/>Para cambiar el diseño que muestra los datos introducidos en los campos en la vista de edición, haga clic en <b>Vista de Detalle</b>.<br/><br/>Para cambiar las columnas que aparecen en la lista predeterminada, haga clic en <b>Vista de Lista</b>.<br/><br/>Para cambiar el básico y avanzado diseño del formulario de búsqueda, haga clic en <b>Buscar</b>.',
        'subpanelHelp'=> 'Seleccionar un subpanel editar.',
        'searchHelp' => 'Seleccione un diseño de Búsqueda para editar.',
        'labelsBtn'	=> 'Editar las <b> etiquetas </ b> para mostrar los valores de este módulo.',
        'newPackage'=>'Haga clic en Nuevo paquete para crear un nuevo paquete.',
        'mbHelp'    => '<b>Bienvenido al Módulo de Construcción.</b><br/><br/>Utiice<b>Módulo de Construcción</b>para crear paquetes que contienen módulos personalizados en base a objetos estándar o personalizado. <br/><br/> Para empezar, haga clic en <b>Paquete Nuevo</b>para crear un nuevo paquete, o seleccione un paquete de editar.<br/><br/> Un <b>Paquete</b>actúa como un contenedor para módulos personalizados, todos los cuales son parte de un proyecto. El paquete puede contener uno o más módulos personalizado que pueden estar relacionados entre sí o con los módulos de la aplicación.<br/><br/> Ejemplo: Es posible que desee crear un paquete que contiene un módulo personalizado que se relaciona con el módulo de Cuentas estándar. O bien, es posible que desee crear un paquete que contiene varios módulos nuevos que funcionan juntos como un proyecto y que están relacionados entre sí y con los módulos de la aplicación.',
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
'LBL_FILTER_SEARCH' => "Búsqueda",
'LBL_FILLER'=>'(relleno)',
'LBL_FIELDS'=>'Campos',
'LBL_FAILED_TO_SAVE' => 'Error al Guardar',
'LBL_FAILED_PUBLISHED' => 'Error al Publicar',
'LBL_HOMEPAGE_PREFIX' => 'Mi',
'LBL_LAYOUT_PREVIEW'=>'Vista Preliminar del Diseño',
'LBL_LAYOUTS'=>'Diseños',
'LBL_LISTVIEW'=>'Vista de Lista',
'LBL_RECORDVIEW'=>'Ver Registro',
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
'LBL_SEARCH_FORMS' => 'Búsqueda',
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
'LBL_DROPDOWN_KEY_EXISTS' => 'Clave ya existe en la lista',
'LBL_NO_SAVE_ACTION' => 'No se ha podido encontrar la opción de guardar para esta vista.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal constituido',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indica un campo de combinación.  Un campo de combinación es una colección de campos individuales. Por ejemplo, "Dirección" es un campo de combinación que contiene "dirección de la calle", "ciudad", "Código postal", "Estado" y "País".<br><br> De doble clic a un campo de combinación para ver que campos contiene',
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
'LBL_FORMULA' => 'Fórmula',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependiente',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Arrastre los elementos de la lista de opciones disponibles a la izquierda para una de las listas de la derecha para hacer que la opción está disponible cuando la opción del padre dada se seleccione.',
'LBL_AVAILABLE_OPTIONS' => 'Opciones',
'LBL_PARENT_DROPDOWN' => 'Padre desplegable',
'LBL_VISIBILITY_EDITOR' => 'Visibilidad editor',
'LBL_ROLLUP' => 'Rollup',
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
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'Observar Vista Mobile',
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
'LBL_SP_UPLOADED'=> 'Cargado',
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
'LBL_SEARCH'=>'Búsqueda',
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
'LBL_EC_CUSTOMDROPDOWN' => 'Menú desplegable personalizado',
'LBL_EC_NOCUSTOM'=>'No se ha personalizado ningún módulo.',
'LBL_EC_EXPORTBTN'=>'Exportar',
'LBL_MODULE_DEPLOYED' => 'El módulo ha sido desplegado.',
'LBL_UNDEFINED' => 'no definido',
'LBL_EC_CUSTOMLABEL'=>'etiqueta(s) personalizada',

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
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Clave - Debe ser alfanumérico e iniciar con letra.',
'LBL_JS_VALIDATE_KEY'=>'Clave - Debe ser alfanumérica',
'LBL_JS_VALIDATE_LABEL'=>'Por favor, introduzca la etiqueta que se utilizará como Nombre Visible de este módulo',
'LBL_JS_VALIDATE_TYPE'=>'Por favor, seleccione el tipo de módulo que quiere construir de la lista anterior',
'LBL_JS_VALIDATE_REL_NAME'=>'Nombre - Debe ser alfanumérico y sin espacios',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiqueta - por favor, agregue la etiqueta que será mostrada sobre el subpanel',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => '¿Está seguro que desea eliminar este elemento de la lista desplegable requerido? Esto puede afectar a la funcionalidad de la aplicación.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => '¿Está seguro que desea eliminar este elemento de la lista desplegable? La eliminación de las etapas Cerradas Perdidas ó Cerradas Ganadas causará que el módulo de Presupuesto no funcione correctamente.',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => '¿Está seguro de que desea eliminar la etapa de ventas Cerradas Ganadas? Eliminando esta etapa hará que el módulo de Presupuesto no funcione correctamente.',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => '¿Está seguro de que desea eliminar la etapa de ventas Cerrada Perdida? Eliminar esta etapa hará que el módulo del Presupuesto no funcione correctamente',

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
