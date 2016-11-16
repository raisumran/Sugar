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
  'LBL_MODULE_NAME' => 'Empfängerliste Warnungen',
  'LBL_MODULE_NAME_SINGULAR' => 'Empfängerliste Warnungen',
  'LBL_MODULE_TITLE' => 'Empänger: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Workflow Empfänger Suche',
  'LBL_LIST_FORM_TITLE' => 'Empfänger Liste',
  'LBL_NEW_FORM_TITLE' => 'Workflow Empfänger erstellen',

  'LBL_LIST_USER_TYPE' => 'Benutzer Typ',
  'LBL_LIST_ARRAY_TYPE' => 'Aktionstyp',
  'LBL_LIST_RELATE_TYPE' => 'Verknüpfungstyp',
  'LBL_LIST_ADDRESS_TYPE' => 'Adresstyp',
  'LBL_LIST_FIELD_VALUE' => 'Benutzer',
  'LBL_LIST_REL_MODULE1' => 'Verknüpfte Module',
  'LBL_LIST_REL_MODULE2' => 'Verknüpfte Module verbinden',
  'LBL_LIST_WHERE_FILTER' => 'Status',

  'LBL_USER_TYPE' => 'Benutzertyp:',
  'LBL_ARRAY_TYPE' => 'Aktionstyp:',
  'LBL_RELATE_TYPE' => 'Beziehungstyp:',
  'LBL_WHERE_FILTER' => 'Status:',
  'LBL_FIELD_VALUE' => 'Gewählter Benutzer:',
  'LBL_REL_MODULE1' => 'Verknüpftes Modul:',
  'LBL_REL_MODULE2' => 'Verknüpftes verknüpftes Modul:',
  'LBL_CUSTOM_USER' => 'Spezieller Benutzer:',

  'LNK_NEW_WORKFLOW' => 'Workflow erstellen',
  'LNK_WORKFLOW' => 'Workflow Objekte',
  'LBL_LIST_STATEMENT' => 'Warnungsemfänger:',
  'LBL_LIST_STATEMENT_CONTENT' => 'Sende Warnung an folgende Empfänger:',

  /////////New UI Labels

  'LBL_ALERT_CURRENT_USER' => 			'Ein mit dem Ziel verbundener Benutzer',
  'LBL_ALERT_CURRENT_USER_TITLE' =>		'Ein mit dem Zielmodul verbundener Benutzer',
  'LBL_ALERT_REL_USER' => 				'Ein Benutzer verbunden mit einem verknüpften',
  'LBL_ALERT_REL_USER_TITLE' => 		'Ein Benutzer verbunden mit einem verknüpften Modul',
  'LBL_ALERT_REL_USER_CUSTOM' => 		'Empfänger verbunden mit einem verknüpften',
  'LBL_ALERT_REL_USER_CUSTOM_TITLE' => 	'Empfänger verbunden mit einem verknüpften Modul',
  'LBL_ALERT_TRIG_USER_CUSTOM' => 		'Empfänger verbunden mit dem Zielmodul',
  'LBL_ALERT_TRIG_USER_CUSTOM_TITLE' => 	'Empfänger verbunden mit dem Zielmodul',
  'LBL_ALERT_SPECIFIC_USER' => 			'Ein bestimmter',
  'LBL_ALERT_SPECIFIC_USER_TITLE' => 	'Ein bestimmter Benutzer',
  'LBL_ALERT_SPECIFIC_TEAM' => 			'Alle Benutzer in einem bestimmten',
  'LBL_ALERT_SPECIFIC_TEAM_TITLE' => 	'Alle Benutzer in einem bestimmten Team',
  'LBL_ALERT_SPECIFIC_ROLE' => 			'Alle Benutzer in einem bestimmten',
  'LBL_ALERT_SPECIFIC_ROLE_TITLE' => 	'Alle Benutzer in einer bestimmten Rolle',
  'LBL_ALERT_SPECIFIC_TEAM_TARGET_TITLE' => 	'Mitglieder des Team, welches mit den ausgewählten Modul verknüpft sind.',
  'LBL_ALERT_SPECIFIC_TEAM_TARGET' => 	'All users that belong to the team(s) asscoiated with the target module',
  'LBL_ALERT_LOGIN_USER_TITLE' => 		'Angemeldete Benutzer zur Durchführungszeit',
  'LBL_RECORD' => 'Module',
  'LBL_TEAM' => 'Team',
  'LBL_USER' => 'Benutzer',
  'LBL_USER_MANAGER' => 'Manager d. Benutzers',
  'LBL_ROLE' => 'Rolle',


  'LBL_SEND_EMAIL' => 'Sende E-Mail an:',
  'LBL_USER1' => 'der den Eintrag erstellt hat',
  'LBL_USER2' => 'der den Eintrag zuletzt geändert hat',
  'LBL_USER3' => 'Aktuell',
  'LBL_USER3b' => 'vom System.',
  'LBL_USER4' => 'dem der Eintrag zugewiesen ist',
  'LBL_USER5' => 'dem der Eintrag zugewiesen wurde',

  'LBL_ADDRESS_TO' => 'An:',
  'LBL_ADDRESS_CC' => 'Cc:',
  'LBL_ADDRESS_BCC' => 'Bcc:',
  'LBL_ADDRESS_TYPE' => 'mit Adresse',
  'LBL_ADDRESS_TYPE_TARGET' => 'Typ',


  'LBL_ALERT_REL1' => 'Verknüpftes Modul:',
  'LBL_ALERT_REL2' => 'Verknüpftes verknüpftes Modul:',

  'LBL_NEXT_BUTTON' => 'Weiter',
  'LBL_PREVIOUS_BUTTON' => 'Zurück',

	'LBL_BLANK' => '',

	'NTC_REMOVE_ALERT_USER' => 'Sind Sie sicher, dass Sie diesen Warnungsempfänger entfernen wollen?',



	//rel_user_custom

	'LBL_REL_CUSTOM_STRING' => 'Benutzerdefinierte E-Mail und Namensfelder auswählen',
	'LBL_REL_CUSTOM' => 'Benutzerdefiniertes E-Mail Feld auswählen:',
	'LBL_REL_CUSTOM2' => 'Feld',
	'LBL_AND' => 'und Namensfeld:',
	'LBL_REL_CUSTOM3' => 'Feld',
	'LBL_FILTER_CUSTOM' => '(Zusätzlicher Filter) verknüpftes Modul filtern mit bestimmtem',
	'LBL_FIELD' => 'Feld',
	'LBL_SPECIFIC_FIELD' => 'Feld',
	'LBL_FILTER_BY' => '(Zusätzlicher Filter) verknüpftes Modul filtern mit',


	//Invite Labels
	  'LBL_MODULE_NAME_INVITE' => 'Liste Eingeladener',
	'LBL_MODULE_NAME_SINGULAR_INVITE' => 'Liste Eingeladener',
	  'LBL_LIST_STATEMENT_INVITE' => 'Meeting/Anruf Eingeladene:',

	'LBL_SELECT_VALUE' => 'Sie müssen eine gültigen Wert auswählen.',
	'LBL_SELECT_NAME' => 'You must select a custom name field',
	'LBL_SELECT_EMAIL' => 'You must select a custom e-mail field',
	'LBL_SELECT_FILTER' => 'You must select a field to filter by',
	'LBL_SELECT_NAME_EMAIL' => 'You must select the name and e-mail fields',
	'LBL_PLEASE_SELECT' => 'Please Select',
	'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
);


?>
