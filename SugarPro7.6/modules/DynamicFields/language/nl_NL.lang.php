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
    'LNK_NEW_CALL' => 'Plan telefoongesprek',
    'LNK_NEW_MEETING' => 'Plan afspraak',
    'LNK_NEW_TASK' => 'Nieuwe Taak',
    'LNK_NEW_NOTE' => 'Nieuwe notitie of bijlage',
    'LNK_NEW_EMAIL' => 'Archiveer e-mail',
    'LNK_CALL_LIST' => 'Telefoongesprekken',
    'LNK_MEETING_LIST' => 'Afspraken',
    'LNK_TASK_LIST' => 'Taken',
    'LNK_NOTE_LIST' => 'Notities',
    'LNK_EMAIL_LIST' => 'E-mail',
    'LBL_ADD_FIELD'=> 'Veld toevoegen:',
	'LBL_MODULE_SELECT' => 'Module te wijzigen',
	'LBL_SEARCH_FORM_TITLE' => 'Zoek module',
	'COLUMN_TITLE_NAME' => 'Veldnaam',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Display Label',
    'COLUMN_TITLE_LABEL_VALUE' => 'Label waarde',
	'COLUMN_TITLE_LABEL' => 'Veldlabel',
	'COLUMN_TITLE_DATA_TYPE' => 'Datatype',
	'COLUMN_TITLE_MAX_SIZE' => 'Maximum grootte',
	'COLUMN_TITLE_HELP_TEXT' => 'Help tekst',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Commentaar tekst',
	'COLUMN_TITLE_REQUIRED_OPTION' => 'Verplicht veld',
	'COLUMN_TITLE_DEFAULT_VALUE' => 'Default Value',
	'COLUMN_TITLE_DEFAULT_EMAIL' => 'Default Value',
	'COLUMN_TITLE_EXT1' => 'Extra Meta Veld 1',
	'COLUMN_TITLE_EXT2' => 'Extra Meta Veld 2',
	'COLUMN_TITLE_EXT3' => 'Extra Meta Veld 3',
	'COLUMN_TITLE_FRAME_HEIGHT' => 'Frame hoogte',
	'COLUMN_TITLE_HTML_CONTENT' =>'HTML',
	'COLUMN_TITLE_URL'=>'Standaard URL',
	'COLUMN_TITLE_AUDIT' =>'Audit',
        'COLUMN_TITLE_FTS' =>'Full Text Searchable',
	'COLUMN_TITLE_REPORTABLE' => 'Rapporteerbaar',
	'COLUMN_TITLE_MIN_VALUE' => 'Kleinste waarde',
	'COLUMN_TITLE_MAX_VALUE' => 'Grootste waarde',
	'COLUMN_TITLE_LABEL_ROWS' => 'Rijen',
	'COLUMN_TITLE_LABEL_COLS' => 'Kolommen',
	'COLUMN_TITLE_DISPLAYED_ITEM_COUNT'=>'# Items weergeven',
	'COLUMN_TITLE_AUTOINC_NEXT' => 'Automatisch ophogen van de volgende waarde',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Masker uitschakelen',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Activeer zoekbereik',
	'LBL_DROP_DOWN_LIST' => 'Dropdownlijst',
	'LBL_RADIO_FIELDS'=> 'Radioknoppen',
	'LBL_MULTI_SELECT_LIST'=> 'Multi Select Lijst',
	'COLUMN_TITLE_PRECISION'=> 'Aantal decimalen (nauwkeurigheid)',
	'MSG_DELETE_CONFIRM' => 'Weet u zeker dat u dit item wilt verwijderen?',
	'POPUP_INSERT_HEADER_TITLE' => 'Add Custom Field',
	'POPUP_EDIT_HEADER_TITLE' => 'Bewerk custom veld',
	'LNK_SELECT_CUSTOM_FIELD' => 'Selecteer custom veld',
	'LNK_REPAIR_CUSTOM_FIELD' => 'Repair Custom Fields',
	'LBL_MODULE' => 'Module',
	'COLUMN_TITLE_MASS_UPDATE'=>'Mass Update',
    'COLUMN_TITLE_IMPORTABLE'=>'Importeerbaar',
    'COLUMN_TITLE_DUPLICATE_MERGE'=>'Dubbele waarden samenvoegen',
    'LBL_LABEL'=>'Label',
    'LBL_DATA_TYPE'=>'Datatype',
    'LBL_DEFAULT_VALUE'=>'Default Value',
    'LBL_AUDITED'=>'Gecontroleerd',
    'LBL_REPORTABLE'=>'Rapporteerbaar',
    'ERR_RESERVED_FIELD_NAME' => "Gereserveerd sleutelwoord",
	'ERR_SELECT_FIELD_TYPE' => 'Selecteer een veldtype',
	'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Veldnaam bestaat reeds',
    'ERR_FIELD_NAME_NON_DB_CHARS' => 'Het veld &#39;naam&#39; mag alleen de volgende karakters bevatten: a-zA-Z_',
    'ERR_NO_MODULE_INCLUDED' => 'Geen module toegevoegd. Kon niet opslaan.',
    'LBL_BTN_ADD' => 'Toevoegen [Alt+C]',
    'LBL_BTN_EDIT' => 'Wijzigen',
    'LBL_GENERATE_URL' => 'Genereer URL',
	'LBL_DEPENDENT_CHECKBOX'=>'Dependent',
	'LBL_DEPENDENT_TRIGGER'=>'Trigger',
    'LBL_CALCULATED'=>'Calculated Value',
    'LBL_FORMULA'=>'Formula',
    'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependent',
    'LBL_BTN_EDIT_VISIBILITY'=>'Edit Visibility',
    'LBL_LINK_TARGET'=>'Open link in',
    'LBL_IMAGE_WIDTH' => 'Width',
    'LBL_IMAGE_HEIGHT' => 'Hoogte',
    'LBL_IMAGE_BORDER' => 'Rand',
	'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'U.S. Format',
	'LBL_DEPENDENT'=>'Dependent',
	'LBL_VISIBLE_IF'=>'Zichtbaar indien',
	'LBL_ENFORCED'=>'Gedwongen',
	'LBL_HELP' => 'Help' /*for 508 compliance fix*/,
	'COLUMN_TITLE_GLOBAL_SEARCH'=>'Global Search',
    'LBL_HAS_PARENT' => 'Has Parent',
    'LBL_PARENT_DROPDOWN' => 'Parent Dropdown',
    'LBL_EDIT_VIS' => 'Edit Visibility',
    'LBL_SIMULATION_MODE' => 'SIMULATIE - ER ZULLEN GEEN WIJZIGINGEN DOORGEVOERD WORDEN M.U.V. HET LEGEN VAN HET CACHE.',
    'LBL_SCAN_MODULE' => 'Scannen',
    'LBL_DROPPING_COLUMN' => 'Weglaten van kolom {0} van {1} voor module',
    'LBL_FIX_COLUMN_TYPE' => 'Repareren van kolomtype voor {0}. Wijzigen van {1} naar',
    'LBL_FIELD_MISSING' => 'Veld(en) missen bij',
    'LBL_ADDING_COLUMN' => 'Toevoegen van kolom {0} bij',
    'LBL_DONE' => 'Klaar',
    'LBL_EXE_NON_SIM_MODE' => 'Voer niet-simulatie modus uit',
);


?>
