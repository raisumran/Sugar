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
  'LBL_MODULE_NAME' => 'Tareas',
  'LBL_MODULE_NAME_SINGULAR' => 'Tarea',
  'LBL_TASK' => 'Tareas:',
  'LBL_MODULE_TITLE' => 'Tareas: Inicio',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Tareas',
  'LBL_LIST_FORM_TITLE' => 'Lista de Tareas',
  'LBL_NEW_FORM_TITLE' => 'Nueva Tarea',
  'LBL_NEW_FORM_SUBJECT' => 'Asunto:',
  'LBL_NEW_FORM_DUE_DATE' => 'Fecha Vencimiento:',
  'LBL_NEW_FORM_DUE_TIME' => 'Hora Vencimiento:',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_PRIORITY' => 'Prioridad',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_DUE_DATE' => 'Fecha Vencimiento',
  'LBL_LIST_DUE_TIME' => 'Hora Vencimiento',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_STATUS' => 'Estado:',
  'LBL_DUE_DATE' => 'Fecha Vencimiento:',
  'LBL_DUE_TIME' => 'Hora Vencimiento:',
  'LBL_PRIORITY' => 'Prioridad:',
  'LBL_COLON' => ':',
  'LBL_DUE_DATE_AND_TIME' => 'Fecha y hora de vencimiento:',
  'LBL_START_DATE_AND_TIME' => 'Fecha y hora de inicio:',
  'LBL_START_DATE' => 'Fecha de inicio:',
  'LBL_LIST_START_DATE' => 'Fecha de Inicio',
  'LBL_START_TIME' => 'Hora de inicio:',
  'LBL_LIST_START_TIME' => 'Hora de inicio',
  'DATE_FORMAT' => '(yyyy-mm-dd)',
  'LBL_NONE' => 'Ninguno',
  'LBL_CONTACT' => 'Contacto:',
  'LBL_EMAIL_ADDRESS' => 'Dirección de Correo:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_EMAIL' => 'Dirección de Correo:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_NAME' => 'Nombre:',
  'LBL_CONTACT_NAME' => 'Contacto',
  'LBL_LIST_COMPLETE' => 'Completo:',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_DATE_DUE_FLAG' => 'Sin fecha de vencimiento',
  'LBL_DATE_START_FLAG' => 'Sin fecha de inicio',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el contacto.',
  'ERR_INVALID_HOUR' => 'Por favor, introduzca una hora entre 0 y 24',
  'LBL_DEFAULT_PRIORITY' => 'Media',
  'LBL_LIST_MY_TASKS' => 'Mis Tareas Abiertas',
  'LNK_NEW_TASK' => 'Nueva Tarea',
  'LNK_TASK_LIST' => 'Ver Tareas',
  'LNK_IMPORT_TASKS' => 'Importar Tareas',
  'LBL_CONTACT_FIRST_NAME'=>'Nombre del Contacto',
  'LBL_CONTACT_LAST_NAME'=>'Apellido del Contacto',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_ASSIGNED_TO_NAME'=>'Asignado a:',
  'LBL_LIST_DATE_MODIFIED' => 'Fecha de Modificación',
  'LBL_CONTACT_ID' => 'ID de Contacto:',
  'LBL_PARENT_ID' => 'ID de Padre:',
  'LBL_CONTACT_PHONE' => 'Teléfono de Contacto:',
  'LBL_PARENT_NAME' => 'Tipo de Padre:',
  'LBL_ACTIVITIES_REPORTS' => 'Informe de Actividad',
  'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
  'LBL_TASK_INFORMATION' => 'Visión General',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  'LBL_REVENUELINEITEMS' => 'Líneas de Ingreso',
  //For export labels
  'LBL_DATE_DUE' => 'Fecha vencimiento',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Usuario asignado',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuario asignado',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
  'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionado con el módulo',
  'LBL_EXPORT_PARENT_ID' => 'Relacionado con el ID',
  'LBL_TASK_CLOSE_SUCCESS' => 'Tarea cerrada de forma correcta.',
  'LBL_ASSIGNED_USER' => 'Asignado a',

    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'El módulo {{plural_module_name}} consiste en acciones, tareas pendientes, y otro tipo de actividades que requieren ser completadas. Los registros del módulo {{module_name}}  pueden estar relacionados con un registro en la mayoría de los módulos a través de campos flexibles relacionados y también pueden ser relacionados con un/a {{contacts_singular_module}}. Existen varias formas para crear {{plural_module_name}} en Sugar como por ejemplo el módulo {{plural_module_name}}, duplicar, importar {{plural_module_name}}, etc. Una vez el registro {{module_name}} se ha creado, usted podrá ver y editar la información relacionada con el módulo {{module_name}} a través de la vista del registro {{plural_module_name}}. Dependiendo de los detalles del {{module_name}}, usted también podrá ver y editar la información de {{module_name}} a través del módulo Calendario. Cada registro en {{module_name}} puede entonces relacionarse con otros registros de Sugar, tales como {{accounts_module}}, {{contacts_module}}, {{opportunities_module}}, y otros muchos.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'El módulo {{plural_module_name}} consiste en acciones, tareas pendientes, y otro tipo de actividades que requieren ser completadas.

- Edita el registro haciendo clic en el campo individual o el botón Editar. 
- Ver o modificar enlaces a otros registros en los subpanales yendo a la pestaña "Ver Datos".
- Comentar o ver otros comentarios de usuarios y ver el historial del registro en {{activitystream_singular_module}} yendo a "Actividades Recientes".
- Seguir o guardar como favorito el registro utilizando los iconos a la izquierda del nombre del registro. 
- Acciones adicionales están disponibles en el botón desplegable Acciones.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'El módulo {{plural_module_name}} se compone de elementos de acción en relación a un{{contacts_singular_module}}, {{opportunities_singular_module}}, {{case_module}}, o cualquier otro aspecto del negocio.

Para crear un {{module_name}}:
1. Proporcione valores para los campos que se deseen.
 * Los campos marcados "Obligatorio" se debe completar antes de guardar.
 * Haga clic en "Mostrar más" para ver los campos adicionales, si es necesario.
2. Haga clic en "Guardar" para finalizar el nuevo registro y volver a la vista en lista de {{plural_module_name}} .
 * Seleccione la opción "Guardar y ver" para abrir el nuevo {{module_name}} en vista de registro.
 * Seleccione la opción "Guardar y crear nuevo" para crear un nuevo {{module_name}} inmediatamente.',

);
