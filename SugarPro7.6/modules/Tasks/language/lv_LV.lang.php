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
  'LBL_MODULE_NAME' => 'Uzdevumi',
  'LBL_MODULE_NAME_SINGULAR' => 'Uzdevums',
  'LBL_TASK' => 'Uzdevumi:',
  'LBL_MODULE_TITLE' => 'Uzdevumi: Sākums',
  'LBL_SEARCH_FORM_TITLE' => 'Meklēt uzdevumus',
  'LBL_LIST_FORM_TITLE' => 'Uzdevumu saraksts',
  'LBL_NEW_FORM_TITLE' => 'Izveidot uzdevumu',
  'LBL_NEW_FORM_SUBJECT' => 'Temats:',
  'LBL_NEW_FORM_DUE_DATE' => 'Izpildes datums:',
  'LBL_NEW_FORM_DUE_TIME' => 'Izpildes laiks:',
  'LBL_NEW_TIME_FORMAT' => '(24:00)',
  'LBL_LIST_CLOSE' => 'Slēgt',
  'LBL_LIST_SUBJECT' => 'Temats',
  'LBL_LIST_CONTACT' => 'Kontaktpersona',
  'LBL_LIST_PRIORITY' => 'Prioritāte',
  'LBL_LIST_RELATED_TO' => 'Saistīts ar',
  'LBL_LIST_DUE_DATE' => 'Izpildes datums',
  'LBL_LIST_DUE_TIME' => 'Izpildes laiks',
  'LBL_SUBJECT' => 'Temats:',
  'LBL_STATUS' => 'Statuss:',
  'LBL_DUE_DATE' => 'Izpildes datums:',
  'LBL_DUE_TIME' => 'Izpildes laiks:',
  'LBL_PRIORITY' => 'Prioritāte:',
  'LBL_COLON' => ':',
  'LBL_DUE_DATE_AND_TIME' => 'Beigu datums un laiks:',
  'LBL_START_DATE_AND_TIME' => 'Sākuma datums un laiks:',
  'LBL_START_DATE' => 'Sākuma datums:',
  'LBL_LIST_START_DATE' => 'Sākuma datums',
  'LBL_START_TIME' => 'Sākuma laiks:',
  'LBL_LIST_START_TIME' => 'Sakuma laiks',
  'DATE_FORMAT' => '(gggg-mm-dd)',
  'LBL_NONE' => 'Neviens',
  'LBL_CONTACT' => 'Kontaktpersona:',
  'LBL_EMAIL_ADDRESS' => 'E-pasts:',
  'LBL_PHONE' => 'Tālrunis:',
  'LBL_EMAIL' => 'E-pasts:',
  'LBL_DESCRIPTION_INFORMATION' => 'Apraksta informācija',
  'LBL_DESCRIPTION' => 'Apraksts:',
  'LBL_NAME' => 'Nosaukums:',
  'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds',
  'LBL_LIST_COMPLETE' => 'Pabeigts:',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_DATE_DUE_FLAG' => 'Nav izpildes datuma',
  'LBL_DATE_START_FLAG' => 'Nav sākuma datuma',
  'ERR_DELETE_RECORD' => 'Lai dzēstu kontaktpersonu, jānorāda ieraksta numurs.',
  'ERR_INVALID_HOUR' => 'Lūdzu norādiet stundu no 0 līdz 24',
  'LBL_DEFAULT_PRIORITY' => 'Vidējs',
  'LBL_LIST_MY_TASKS' => 'Mani atvērtie uzdevumi',
  'LNK_NEW_TASK' => 'Izveidot uzdevumu',
  'LNK_TASK_LIST' => 'Aplūkot uzdevumus',
  'LNK_IMPORT_TASKS' => 'Importēt uzdevumus',
  'LBL_CONTACT_FIRST_NAME'=>'Kontaktpersonas vārds',
  'LBL_CONTACT_LAST_NAME'=>'Kontaktpersonas uzvārds',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_ASSIGNED_TO_NAME'=>'Piešķirts lietotājam:',
  'LBL_LIST_DATE_MODIFIED' => 'Modificēts',
  'LBL_CONTACT_ID' => 'Kontaktpersonas ID:',
  'LBL_PARENT_ID' => 'Priekšteča ID:',
  'LBL_CONTACT_PHONE' => 'Kontaktpersonas tālrunis:',
  'LBL_PARENT_NAME' => 'Priekšteča tips:',
  'LBL_ACTIVITIES_REPORTS' => 'Darbību atskaite',
  'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
  'LBL_TASK_INFORMATION' => 'Pārskats',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Piezīmes',
  'LBL_REVENUELINEITEMS' => 'Ieņēmumu posteņi',
  //For export labels
  'LBL_DATE_DUE' => 'Izpildes datums',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Piešķirts lietotājam',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Piešķirts lietotājam ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificētāja ID',
  'LBL_EXPORT_CREATED_BY' => 'Izveidoja ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Attiecas uz moduli',
  'LBL_EXPORT_PARENT_ID' => 'Attiecas uz ID',
  'LBL_TASK_CLOSE_SUCCESS' => 'Uzdevums veiksmīgi aizvērts.',
  'LBL_ASSIGNED_USER' => 'Piešķirts lietotājam',

    'LBL_NOTES_SUBPANEL_TITLE' => 'Piezīmes',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} modulis satur dažādas darbības, uzdevumus vai cita veida aktivitātes, kuras ir jāaizpilda. {{module_name}} ieraksti var būt pakārtoti vienam ierakstam vairākos moduļos caur elastīgās saites lauku un vienam kontaktpersonas ierakstam. Ir vairāki veidi kā izveidot Sugar  uzdevumus, caur uzdevumu moduli, dublējot, importējot uzdevumus, u.c. Kad uzdevums ir saglabāts jūs variet redzēt un rediģēt ar  uzdevumu saistīto informāciju uzdevuma ieraksta kartiņā. Atkarībā no uzdevumā norādītās informācijas jūs variet redzēt un rediģēt uzdevuma informāciju arī caur kalendāra moduli.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} modulis satur dažādas darbības, uzdevumus vai cita veida aktivitātes, kuras ir jāaizpilda.

- Rediģējiet ieraksta laukus klikšķinot uz laukiem vai pogas Rediģēt.
- Apskatiet vai rediģējiet saites uz cietiem ierakstiem apakšpaneļos ieslēdzot datu skatu kreisajā apakšējā panelī.
- Veidojiet un apskaties lietotāju komentārus un ierakstu izmaiņu vēsturi darbību plūsmas panelī ieslēdzot darbību plūsmas skatu kreisajā apakšējā panelī.
- Sekojiet vai izceliet šo ierakstu izmantojot ikonas pa labi no ieraksta nosaukuma.
- Papildus darbības pieejamas izkrītošajā darbību izvēlnē pa labi no Rediģēšanas pogas.',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} modulis satur dažādas darbības, uzdevumus vai cita veida aktivitātes, kuras ir jāaizpilda.

Lai izveidotu ierakstu:
1. Ievadiet atbilstošos laukos prasītās vērtības.
 - Lauki saglabātu ierakstu ir jāaizpilda lauki kas atzīmēti kā obligāti.
 - Ja nepieciešams redzēt papildus laukus spiediet uz "Rādīt vairāk".
2. Spiediet "Saglabāt" lai pabeigtu jauna ierakst veidošanu un atgrieztos iepriekšējā lapā.
 - Izvēlieties "Saglabāt un apskatīt" lai atvērtu jauno kļūdu ierakstu skata logā.
 - Izvēlieties "Saglabāt un veidot jaunu" lai uzreiz izveidotu vēl vienu jaunu kļūdas pieteikumu.',

);
