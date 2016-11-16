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
    'LBL_MODULE_NAME' => 'Verkaufschancen',
    'LBL_MODULE_NAME_SINGULAR' => 'Verkaufschance',
    'LBL_MODULE_TITLE' => 'Verkaufschancen: Startseite',
    'LBL_SEARCH_FORM_TITLE' => 'Verkaufschancen Suche',
    'LBL_VIEW_FORM_TITLE' => 'Verkaufschancen Ansicht',
    'LBL_LIST_FORM_TITLE' => 'Verkaufschancen Liste',
    'LBL_OPPORTUNITY_NAME' => 'Verkaufschance Name:',
    'LBL_OPPORTUNITY' => 'Verkaufschance:',
    'LBL_NAME' => 'Verkaufschance Name',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Währungen',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Name',
    'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
    'LBL_LIST_DATE_CLOSED' => 'Abschluss geplant',
    'LBL_LIST_AMOUNT' => 'Wahrscheinlich',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Summe Standardwährung',
    'LBL_ACCOUNT_ID' => 'Firmen ID',
    'LBL_CURRENCY_RATE' => 'Wechselkurs',
    'LBL_CURRENCY_ID' => 'Währungs ID',
    'LBL_CURRENCY_NAME' => 'Währungsname',
    'LBL_CURRENCY_SYMBOL' => 'Währungssymbol',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Währung aktualisieren',
    'UPDATE_DOLLARAMOUNTS' => 'Euro Beträge aktualisieren',
    'UPDATE_VERIFY' => 'Beträge überprüfen',
    'UPDATE_VERIFY_TXT' => 'Überprüft, ob alle angegebenen Werte gültige Dezimalwerte sind (bestehend aus den Zahlen 0 - 9 und dem Dezimaltrennzeichen)',
    'UPDATE_FIX' => 'Beträge korrigieren',
    'UPDATE_FIX_TXT' => 'Versucht, ungültige Beträge über das Setzen korrekter Dezimalzeichen zu korrigieren. Für jeden geänderten Betrag existiert eine Sicherungskopie im Datenbankfeld amount_backup. Falls Sie diese Funktion aufrufen und Fehler feststellen, müssen Sie vor einem erneuten Versuch erst die alten Beträge, die sich im Backup befinden, wieder herstellen, da ansonsten Ihre ursprünglichen Einträge in der Datenbank mit den fehlerhaften Beträgen überschrieben werden.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Hier werden die Beträge der Angebote basierend auf dem angegebenen Wechselkurs neu berechnet. Diese Werte werden für die Graphiken und die Währungstabellen genutzt.',
    'UPDATE_CREATE_CURRENCY' => 'Neue Währung:',
    'UPDATE_VERIFY_FAIL' => 'Datensatz konnte nicht verifiziert werden',
    'UPDATE_VERIFY_CURAMOUNT' => 'Aktueller Betrag:',
    'UPDATE_VERIFY_FIX' => 'Berichtigter Betrag:',
    'UPDATE_INCLUDE_CLOSE' => 'Auch abgeschlossenen Angebote überprüfen',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Neuer Betrag:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Neue Währung:',
    'UPDATE_DONE' => 'Fertig',
    'UPDATE_BUG_COUNT' => 'Gefundene Fehler, deren Behebung versucht wurde:',
    'UPDATE_BUGFOUND_COUNT' => 'Gefundene Fehler:',
    'UPDATE_COUNT' => 'Bearbeitete Einträge:',
    'UPDATE_RESTORE_COUNT' => 'Wiederhergestellte Beträge:',
    'UPDATE_RESTORE' => 'Betrag wiederherstellen',
    'UPDATE_RESTORE_TXT' => 'Stellt die Beträge wieder her, welche während der Reparatur gesichert wurden.',
    'UPDATE_FAIL' => 'Update konnte nicht durchgeführt werden -',
    'UPDATE_NULL_VALUE' => 'Betragsfeld ist leer und wird deshalb auf 0 gesetzt -',
    'UPDATE_MERGE' => 'Währungen zusammenführen',
    'UPDATE_MERGE_TXT' => 'Zusammenführen mehrerer Währungen in eine. Falls Sie feststellen, dass mehrere Einträge mit der gleichen Währung vorhanden sind, können Sie diese zusammenführen. Dies gilt analog für alle anderen Module.',
    'LBL_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_CURRENCY' => 'Währung:',
    'LBL_DATE_CLOSED' => 'Abschluss geplant:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Zeitstempel des erwarteten Abschlusses',
    'LBL_TYPE' => 'Typ:',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_NEXT_STEP' => 'Nächster Schritt:',
    'LBL_LEAD_SOURCE' => 'Quelle',
    'LBL_SALES_STAGE' => 'Verkaufsphase',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Wahrscheinlichkeit (%)',
    'LBL_DESCRIPTION' => 'Beschriftung',
    'LBL_DUPLICATE' => 'Mögliche Verkaufschancen-Dublette',
    'MSG_DUPLICATE' => 'Die Verkaufschance, die Sie gerade erstellen, könnte eine Dublette einer bereits bestehenden Verkaufschance sein. Verkaufschancen mit ähnlichen Namen sind unten aufgeführt.<br />Drücken Sie auf Speichern, um fortzufahren oder auf Abbrechen, um zum Modul zurückzukehren, ohne die Verkaufschance zu speichern.',
    'LBL_NEW_FORM_TITLE' => 'Neue Verkaufschance',
    'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
    'LNK_CREATE' => 'Neuer Fall',
    'LNK_OPPORTUNITY_LIST' => 'Verkaufschancen',
    'ERR_DELETE_RECORD' => 'Die Datensatznummer muss angegeben werden, sonst kann der Datensatz nicht gelöscht werden.',
    'LBL_TOP_OPPORTUNITIES' => 'Liste der Top-Verkaufschancen',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Möchten Sie diesen Kontakt wirklich aus dieser Verkaufschance entfernen?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Möchten Sie dieses Verkaufschance wirklich von diesem Projekt entfernen?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_RAW_AMOUNT' => 'Ges. Summe',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumente',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugew. Benutzer',
    'LBL_LIST_SALES_STAGE' => 'Verkaufsphase',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Meine geschlossenen Verkaufschancen',
    'LBL_TOTAL_OPPORTUNITIES' => 'Summe Verkaufschancen',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnene Verkaufschancen',
    'LBL_ASSIGNED_TO_ID' => 'Bearbeiter',
    'LBL_CREATED_ID' => 'Ersteller',
    'LBL_MODIFIED_ID' => 'Geändert von ID',
    'LBL_MODIFIED_NAME' => 'Modifizierter Benutzer',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von Benutzer',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampagnen',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
    'LABEL_PANEL_ASSIGNMENT' => 'Aufgabe',
    'LNK_IMPORT_OPPORTUNITIES' => 'Verkaufschancen importieren',
    'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Zugewiesener Benutzer ID',
    'LBL_OPPORTUNITY_TYPE' => 'Verkaufschancentyp',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Zugewiesen Benutzer',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Zugewiesen an',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Geändert von ID',
    'LBL_EXPORT_CREATED_BY' => 'Ersteller',
    'LBL_EXPORT_NAME' => 'Name',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Verknüpfte Kontakt E-Mails',
    'LBL_FILENAME' => 'Anlage:',
    'LBL_PRIMARY_QUOTE_ID' => 'Primär Angebot',
    'LBL_CONTRACTS' => 'Verträge',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Verträge',
    'LBL_PRODUCTS' => 'Produkte',
    'LBL_RLI' => 'Umsatzposten',
    'LNK_OPPORTUNITY_REPORTS' => 'Verkaufschancen Berichte',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Angebote',
    'LBL_TEAM_ID' => 'Team ID',
    'LBL_TIMEPERIODS' => 'Zeiträume',
    'LBL_TIMEPERIOD_ID' => 'Zeistpannen ID',
    'LBL_COMMITTED' => 'Übergeben',
    'LBL_FORECAST' => 'In Vorhersagen Inkludieren',
    'LBL_COMMIT_STAGE' => 'Commit Stage',
    'LBL_WORKSHEET' => 'Arbeitsblatt',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Angebote',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Verkaufschancen-Hierarchie',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Das Feld Erwartetes Abschlussdatum in den resultierenden Verkaufschancen-Berichten auf die frühesten oder spätesten Abschlussdaten der bestehenden Umsatzposten setzen',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Pipeline Summe beträgt',

    'LBL_OPPORTUNITY_ROLE'=>'Verkaufschancen Rolle',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notizen',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Durch Anklicken von Bestätigen löschen Sie ALLE Prognosedaten und ändern Ihre Ansicht Verkaufschancen. Falls Sie dies nicht wünschen, klicken Sie auf Abbrechen, um zu den vorherigen Einstellungen zurückzukehren.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Falls alle Umsatzposten geschlossen sind und mindestens einer gewonnen wurde,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'wird die Verkaufsphase Verkaufschancen auf "Gewonnen" gesetzt.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Falls alle Umsatzposten sich in der Verkaufsphase "Verloren" befinden,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'wird die Verkaufsphase Verkaufschancen auf "Verloren" gesetzt.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Falls noch Umsatzposten offen sind,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'wird die Verkaufschance mit der niedrigsten Verkaufsphase markiert.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Das {{plural_module_name}} Modul erlaubt es, jede Vertriebsaktivität mit dem entsprechenden Produkt von Anfang bis Ende zu verfolgen. Jeder  {{module_name}} Datensatz dient als übergeordnete Instanz für einen oder mehrere {{revenuelineitems_module}}, außerdem können noch Datensätze wie {{quotes_module}}, {{contacts_module}}, etc. verknüpft werden. Jeder {{revenuelineitems_singular_module}} erreicht auch die typischen Vertriebsphasen, bis er den Status "Gewonnen" oder "Verloren" erhält. Der {{module_name}} Datensatz spiegelt den gesamten Betrag und das Abschlussdatum der {{revenuelineitems_module}}.
{{plural_module_name}} und {{revenuelineitems_module}} kann verwendet werden, um die Umsatzentwicklung zu verfolgen, sich auf das Richtige zu fokussieren und um die vertrieblichen Sollvorgaben zu erreichen.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Das {{plural_module_name}} Modul erlaubt es jede Vertriebsaktivität mit dem entsprechenden Produkt von Anfang bis Ende zu verfolgen. Jeder  {{module_name}} Datensatz dient als übergeordnete Instanz für einen oder mehrere {{revenuelineitems_module}}, außerdem können noch Datensätze wie {{quotes_module}}, {{contacts_module}}, etc. verknüpft werden. 
- Bearbeiten Sie den Datensatz, indem Sie auf ein Feld oder auf die Schaltfläche Bearbeiten klicken.
- Erstellen oder sehen Sie sich Benutzerkommentare und die Änderungshistorie verschiedener Datensätze im  {{activitystream_singular_module}} an, indem Sie die Sicht auf "Activity Stream" im unteren linken Bereich stellen. 
- Folgen Sie favorisierten Einträgen, indem Sie das Sternsymbol neben dem Namen oben anklicken. 
- Weitere Aktionen finden Sie im Ausklappmenü auf der rechten Seite der Bearbeiten Schaltfläche.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Das {{plural_module_name}} Modul erlaubt es, jede Vertriebsaktivität mit dem entsprechenden Produkt von Anfang bis Ende zu verfolgen. Jeder  {{module_name}} Datensatz dient als übergeordnete Instanz für einen oder mehrere {{revenuelineitems_module}}, außerdem können noch Datensätze wie {{quotes_module}}, {{contacts_module}}, etc. verknüpft werden. - Felder, die als Pflichtfeld markiert sind, müssen ausgefüllt werden, um den Datensatz speichern zu können. - Klicken Sie auf "mehr zeigen", um weitere Felder zu erfassen. 2. Drücken Sie auf "Speichern", um den Datensatz verfügbar zu machen und um auf die letzte Seite zurück zu kommen. - Wählen Sie "Speichern und Öffnen", um den neuen {{module_name}} in der Datensatzansicht zu öffnen. - Wählen Sie "Speichern und neuen Datensatz erstellen", um sofort einen weiteren {{module_name}} Datensatz anzulegen.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sync mit Marketo®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 der Verkaufschancen',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Zeigt Top 10 der Verkaufschancen in einem Kugeldiagramm an.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Meine Verkaufschancen',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Verkaufschancen in meinem Team",
);
