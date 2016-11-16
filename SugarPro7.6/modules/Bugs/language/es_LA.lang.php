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

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Incidencias',
  'LBL_MODULE_NAME_SINGULAR'	=> 'Error',
  'LBL_MODULE_TITLE' => 'Seguimiento deErrores: Inicio',
  'LBL_MODULE_ID' => 'Incidencias',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Errores',
  'LBL_LIST_FORM_TITLE' => 'Lista de Errores',
  'LBL_NEW_FORM_TITLE' => 'Nueva Error',
  'LBL_CONTACT_BUG_TITLE' => 'Contacto-Errores:',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_BUG' => 'Errores:',
  'LBL_BUG_NUMBER' => 'Número de Error:',
  'LBL_NUMBER' => 'Número:',
  'LBL_STATUS' => 'Estado:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_CONTACT_NAME' => 'Nombre de Contacto:',
  'LBL_BUG_SUBJECT' => 'Asunto de la Error:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_LIST_NUMBER' => 'Núm.',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_PRIORITY' => 'Prioridad',
  'LBL_LIST_RELEASE' => 'Publicación',
  'LBL_LIST_RESOLUTION' => 'Resolución',
  'LBL_LIST_LAST_MODIFIED' => 'Última Modificación',
  'LBL_INVITEE' => 'Contacts',
  'LBL_TYPE' => 'Tipo:',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_RESOLUTION' => 'Resolución:',
  'LBL_RELEASE' => 'Publicación:',
  'LNK_NEW_BUG' => 'Reportar Error',
  'LNK_CREATE'  => 'Reportar Error',
  'LNK_CREATE_WHEN_EMPTY'    => 'Informar de un Error ahora.',
  'LNK_BUG_LIST' => 'Ver Errores',
  'LBL_SHOW_MORE' => 'Mostrar más Errores',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de que desea quitar este contacto del error?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '¿Está seguro de que desea mover este error fuera de esta cuenta?',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el error.',
  'LBL_LIST_MY_BUGS' => 'Mis Errores Asignados',
  'LNK_IMPORT_BUGS' => 'Importаr Errores',
  'LBL_FOUND_IN_RELEASE' => 'Encontrado en Lanzamiento:',
  'LBL_FIXED_IN_RELEASE' => 'Corregido en Lanzamiento:',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Corregido en Lanzamiento',
  'LBL_WORK_LOG' => 'Registro de Actividad:',
  'LBL_SOURCE' => 'Fuente:',
  'LBL_PRODUCT_CATEGORY' => 'Categoría:',

  'LBL_CREATED_BY' => 'Creado por:',
  'LBL_DATE_CREATED' => 'Fecha de creación:',
  'LBL_MODIFIED_BY' => 'Modificado por:',
  'LBL_DATE_LAST_MODIFIED' => 'Última modificación:',

  'LBL_LIST_EMAIL_ADDRESS' => 'Dirección de Correo',
  'LBL_LIST_CONTACT_NAME' => 'Nombre de Contacto',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_LIST_PHONE' => 'Cualquier teléfono',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea quitar este contacto de este error?',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Seguimiento de Incidencias',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'Historial',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_SYSTEM_ID' => 'ID de Sistema',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
	'LBL_ASSIGNED_TO_NAME' => 'Asignado a',

	'LNK_BUG_REPORTS' => 'Ver Informes de Errores',
	'LBL_SHOW_IN_PORTAL' => 'Mostrar en Portal',
	'LBL_BUG_INFORMATION' => 'Visión General',

    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => 'Encontrado en la versión',
    'LBL_PORTAL_VIEWABLE' => 'Visible en portal',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Usuario Asignado',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID de Usuario Asignado',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Fijado en la versión',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'Creado por ID',


    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'El módulo {{plural_module_name}} se utiliza para rastrear y administrar los problemas relacionados con la producción, comúnmente conocida como {{plural_module_name}}o defectos, ya sea internamente o se encuentra reportado por los clientes. El {{plural_module_name}} puede triaged aún más por el seguimiento de la ha encontrado y corregido en la versión. El módulo {{plural_module_name}} ofrece a los usuarios una manera de revisar rápidamente todos los detalles del {{module_name}}y el proceso que se utiliza para rectificar. Una vez que un {{module_name}}se crea o presentado, puede ver y editar la información relativa a la{{module_name}} vía la vista del registro {{module_name}}. Cada registro {{module_name}} puede entonces relacionarse con otros registros de Sugar así como {{calls_module}}, {{contacts_module}}, {{cases_module}}, y muchos otros.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'El módulo {{plural_module_name}}módulo se utiliza para controlar y administrar los problemas relacionados con la producción, comúnmente conocido como {{plural_module_name}}o defectos, ya sea internamente o se encuentra reportado por los clientes.

- Edite los campos de este registro, haga clic en un campo individual o en el botón Modificar.
- Ver o modificar enlaces a otros registros en los subpaneles moviendo el panel inferior izquierdo para "Vista de datos".
- Hacer y ver los comentarios de los usuarios y el cambio en el registro de la historia {{activitystream_singular_module}}moviendo el panel inferior izquierdo para "Últimas acciones".
- Siga o favorito este registro utilizando los iconos a la derecha del nombre del registro.
- Las acciones adicionales se encuentran disponibles en el menú Acciones desplegables a la derecha del botón Editar.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'El módulo {{plural_module_name}} se utiliza para rastrear y administrar los problemas relacionados con la producción, comúnmente conocida como {{plural_module_name}} o defectos, ya sea internamente o se encuentra reportado por los clientes.

Para crear un {{module_name}}:
1. Proporcione valores para los campos como se desee.
- Los campos marcados "Obligatorio" debe ser completado antes de guardar.
- Haga clic en "Mostrar más" para exponer campos adicionales si es necesario.
2. Haga clic en "Guardar" para finalizar el nuevo disco y volver a la página anterior.
- Seleccione la opción "Guardar y ver" para abrir el nuevo{{module_name}} en vista de registro.
-Seleccione la opción "Guardar y crear nuevo" para crear inmediatamente otra nueva {{module_name}}.',
);
