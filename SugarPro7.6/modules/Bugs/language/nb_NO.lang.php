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
  'LBL_MODULE_NAME' => 'Bugs',
  'LBL_MODULE_NAME_SINGULAR'	=> 'Feil',
  'LBL_MODULE_TITLE' => 'Bug Tracker: Hjem',
  'LBL_MODULE_ID' => 'Bugs',
  'LBL_SEARCH_FORM_TITLE' => 'Bug Søk',
  'LBL_LIST_FORM_TITLE' => 'Bugliste',
  'LBL_NEW_FORM_TITLE' => 'Ny bug',
  'LBL_CONTACT_BUG_TITLE' => 'Kontakt-Bug:',
  'LBL_SUBJECT' => 'Emne:',
  'LBL_BUG' => 'Bug:',
  'LBL_BUG_NUMBER' => 'Bug nummer:',
  'LBL_NUMBER' => 'Nummer:',
  'LBL_STATUS' => 'Status:',
  'LBL_PRIORITY' => 'Prioritet',
  'LBL_DESCRIPTION' => 'Beskrivelse:',
  'LBL_CONTACT_NAME' => 'Kontaktnavn:',
  'LBL_BUG_SUBJECT' => 'Bug Emne:',
  'LBL_CONTACT_ROLE' => 'Rolle:',
  'LBL_LIST_NUMBER' => 'Num.',
  'LBL_LIST_SUBJECT' => 'Emne',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_PRIORITY' => 'Prioritet',
  'LBL_LIST_RELEASE' => 'Utgivelse',
  'LBL_LIST_RESOLUTION' => 'Løsning',
  'LBL_LIST_LAST_MODIFIED' => 'Sist endret',
  'LBL_INVITEE' => 'Contacts',
  'LBL_TYPE' => 'Type:',
  'LBL_LIST_TYPE' => 'Type',
  'LBL_RESOLUTION' => 'Løsning',
  'LBL_RELEASE' => 'Utsendelse:',
  'LNK_NEW_BUG' => 'Meld fra om feil',
  'LNK_CREATE'  => 'Meld fra om feil',
  'LNK_CREATE_WHEN_EMPTY'    => 'Rapportér en Feil nå.',
  'LNK_BUG_LIST' => 'Bugs',
  'LBL_SHOW_MORE' => 'Vis flere feil',
  'NTC_REMOVE_INVITEE' => 'Er du sikker på at du vil denne kontakten fra denne bug?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Er du sikker på at du vil slette denne feilen fra den valgte kontoen?',
  'ERR_DELETE_RECORD' => 'Du må oppgi et registernummer for å slette denne bug.',
  'LBL_LIST_MY_BUGS' => 'Mine tilknyttede bugs',
  'LNK_IMPORT_BUGS' => 'Import bugs',
  'LBL_FOUND_IN_RELEASE' => 'Funnet ved utsendelse:',
  'LBL_FIXED_IN_RELEASE' => 'Ordnet ved utsendelse:',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Ordnet ved utsendelse',
  'LBL_WORK_LOG' => 'Arbeidslogg:',
  'LBL_SOURCE' => 'Kilde:',
  'LBL_PRODUCT_CATEGORY' => 'Kategori:',

  'LBL_CREATED_BY' => 'Opprettet av:',
  'LBL_DATE_CREATED' => 'Opprettelsesdato:',
  'LBL_MODIFIED_BY' => 'Sist endret av:',
  'LBL_DATE_LAST_MODIFIED' => 'Endringsdato:',

  'LBL_LIST_EMAIL_ADDRESS' => 'E-postadresse',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
  'LBL_LIST_ACCOUNT_NAME' => 'Kontonavn',
  'LBL_LIST_PHONE' => 'Telefonnummer',
  'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne kontakten fra denne bug?',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bug Tracker',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteter',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'Historikk',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Bedrifter',
  'LBL_CASES_SUBPANEL_TITLE' => 'Saker',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Prosjekter',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
  'LBL_SYSTEM_ID' => 'System-ID',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Tildelt bruker',
	'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',

	'LNK_BUG_REPORTS' => 'Bug Rapporter',
	'LBL_SHOW_IN_PORTAL' => 'Vis i portal',
	'LBL_BUG_INFORMATION' => 'Oppgaveoversikt',

    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => 'Funnet i Utgave-navnet',
    'LBL_PORTAL_VIEWABLE' => 'Portal Synlig',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tildelt Brukernavn',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tildelt Bruker-ID',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Fikset i Utgave-navnet',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Endret av ID',
    'LBL_EXPORT_CREATED_BY' => 'Opprettet Av ID',


    'LBL_NOTES_SUBPANEL_TITLE' => 'Noteringer',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} modulen brukes til å spore og administrere produktrelaterte problemer, ofte referert til som {{plural_module_name}} eller defekter, enten funnet internt eller rapportert av kunder. Den {{plural_module_name}} kan bli ytterligere triaged ved å spore funnet og fikset i utgivelsen. Den {{plural_module_name}} modulen gir brukerne en rask måte å gjennomgå alle detaljer om {{module_name}} og den prosessen som brukes for å rette på det. Når en {{module_name}} er opprettet eller innsendt, kan du se på og redigere informasjon knyttet til {{module_name}} via {{module_name}}&#39;er postvisning. Hver {{module_name}} registrering kan da forholde seg til andre Sugar poster som {{calls_module}}, {{contacts_module}}, {{cases_module}}, og mange andre.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} modulen brukes til å spore og administrere produktrelaterte problemer, ofte referert til som {{plural_module_name}} eller defekter, enten funnet internt eller rapportert av kunder. - Rediger dette postfelt ved å klikke et enkelt felt eller Rediger-knappen. - Vis eller endre lenker til andre poster i underpaneler ved veksling av nedre venstre ruten til "Data View". - Lag og vis brukerkommentarer og registrere endringsloggen i  {{activitystream_singular_module}} ved å veksle nedre venstre rute til "Activity Stream". - Følg eller favoritt denne posten ved hjelp av ikonene til høyre for posten navn. - Ytterligere tiltak er tilgjengelig i dropdown menyen Handlinger til høyre for Rediger-knappen.',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} modulen brukes til å spore og administrere produktrelaterte problemer, ofte referert til som {{plural_module_name}} eller defekter, enten funnet internt eller rapportert av kunder. For å opprette en {{module_name}}: 1. Gi verdier til feltene som ønsket. - Felt som er merket "kreves" må fullføres før du lagrer. - Klikk "Vis mer" for å avsløre flere felt hvis det er nødvendig. 2. Klikk "Lagre" for å sluttføre den nye posten og gå tilbake til forrige side. - Velg "Lagre og vis" for å åpne den nye {{module_name}} i postsvisning. - Velg "Lagre og opprett nye" for umiddelbart å opprette en ny {{module_name}}.',
);
