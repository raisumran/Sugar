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
  'LBL_MODULE_NAME' => 'Währungen',
  'LBL_MODULE_NAME_SINGULAR' => 'Währung',
  'LBL_LIST_FORM_TITLE' => 'Währungen',
  'LBL_CURRENCY' => 'Währung',
  'LBL_ADD' => 'Hinzufügen [Alt+C]',
  'LBL_MERGE' => 'Zusammenführen',
  'LBL_MERGE_TXT' => 'Bitte wählen Sie die Währungen aus, die Sie zusammenführen möchten. Dieser Befehl löscht alle ausgewählten Währungen, nachdem die betreffenden Einträge neu zugeordnet wurden..',
  'LBL_US_DOLLAR' => 'Euro',
  'LBL_DELETE' => 'Löschen',
  'LBL_LIST_SYMBOL' => 'Währungssymbol',
  'LBL_LIST_NAME' => 'Währungsname',
  'LBL_LIST_ISO4217' => 'ISO 4217 Code',
  'LBL_LIST_ISO4217_HELP' => 'Erfassen Sie einen 3stelligen ISO 4217 code, welcher die Währung und das Währungssymbol beschreibt',
  'LBL_UPDATE' => 'Aktualisieren',
  'LBL_LIST_RATE' => 'Wechselkurs',
  'LBL_LIST_RATE_HELP' => 'Ein Wechselkurs von 0,5 für den Euro heißt dass 10 USD = 5 Euro.',
  'LBL_LIST_STATUS' => 'Status',
  'LNK_NEW_CONTACT' => 'Neuer Kontakt',
  'LNK_NEW_ACCOUNT' => 'Neue Firma',
  'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
  'LNK_NEW_CASE' => 'Neues Ticket',
  'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage',
  'LNK_NEW_CALL' => 'Neuer Anruf',
  'LNK_NEW_EMAIL' => 'Neue E-Mail',
  'LNK_NEW_MEETING' => 'Neues Meeting',
  'LNK_NEW_TASK' => 'Neue Aufgabe',
  'NTC_DELETE_CONFIRMATION' => 'Möchten Sie diesen Datensatz wirklich löschen? Es ist wahrscheinlich besser, den Status dieser Währung auf &#39;Inaktiv&#39; zu ändern, ansonsten werden alle Einträge in der Datenbank, welche diese Währung verwenden, automatisch in die Standardwährung konvertiert.',
  'LBL_BELOW_MIN' => 'Umrechnungskurs muss größer 0 sein',
  'currency_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'LBL_CREATED_BY' => 'Erstellt von',
  'LBL_EDIT_LAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
  'LBL_ADMIN_ONLY' => 'Zugriff nur für Administratoren',
);
?>
