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
    //module
    'LBL_MODULE_NAME' => 'Dokumenter',
    'LBL_MODULE_NAME_SINGULAR' => 'Dokument',
    'LBL_MODULE_TITLE' => 'Dokumenter: Hovedside',
    'LNK_NEW_DOCUMENT' => 'Opprett dokument',
    'LNK_DOCUMENT_LIST'=> 'Dokumentliste',
    'LBL_DOC_REV_HEADER' => 'Dokumentrevisjoner',
    'LBL_SEARCH_FORM_TITLE'=> 'Dokumentsøk:',
    //vardef labels
    'LBL_DOCUMENT_ID' => 'Dokumenter-ID',
    'LBL_NAME' => 'Navn',
    'LBL_DOCUMENT_NAME' => 'Dokumentnavn',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_CATEGORY' => 'Kategori',
    'LBL_SUBCATEGORY' => 'Underkategori',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY'=> 'Opprettet av',
    'LBL_DATE_ENTERED'=> 'Inngangsdato',
    'LBL_DATE_MODIFIED'=> 'Endret Dato',
    'LBL_DELETED' => 'Slettet',
    'LBL_MODIFIED'=> 'Endret av ID',
    'LBL_MODIFIED_USER' => 'Endret av',
    'LBL_CREATED'=> 'Opprettet av',
    'LBL_REVISIONS'=>'Revisjoner',
    'LBL_RELATED_DOCUMENT_ID'=>'Beslektet dokument-ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Beslektet dokumentrevisjons-ID',
    'LBL_IS_TEMPLATE'=>'Er en mal',
    'LBL_TEMPLATE_TYPE'=>'Dokumenttype',
    'LBL_ASSIGNED_TO_NAME'=>'Tildelt:',
    'LBL_REVISION_NAME' => 'Revisjonsnummer',
    'LBL_MIME' => 'Mimetype',
    'LBL_REVISION' => 'Revisjon',
    'LBL_DOCUMENT' => 'Relatert dokument',
    'LBL_LATEST_REVISION' => 'Seneste revisjon',
    'LBL_DOCUMENT_REVISION_ID' => 'Dokumentrevisjons-ID',
    'LBL_CHANGE_LOG'=> 'Endre logg',
    'LBL_ACTIVE_DATE'=> 'Publiseringsdato',
    'LBL_EXPIRATION_DATE' => 'Utgangsdato',
    'LBL_FILE_EXTENSION'  => 'Filforlengelse',
    'LBL_LAST_REV_MIME_TYPE' => 'Siste revisjon MIME-type',
    'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Uspesifisert',
    'LBL_HOMEPAGE_TITLE' => 'Mine dokumenter',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nytt dokument',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentnavn:',
    'LBL_FILENAME' => 'Filnavn:',
    'LBL_LIST_FILENAME' => 'Filnavn',
    'LBL_DOC_VERSION' => 'Revisjon:',
    'LBL_FILE_UPLOAD' => 'Filnavn',

    'LBL_CATEGORY_VALUE' => 'Kategori:',
    'LBL_SUBCATEGORY_VALUE'=> 'Underkategori:',
    'LBL_DOC_STATUS'=> 'Status:',
    'LBL_DOC_STATUS_ID'=> 'Status-ID:',
    'LBL_LAST_REV_CREATOR' => 'Revisjon opprettet av:',
    'LBL_LASTEST_REVISION_NAME' => 'Siste revisjon navn:',
    'LBL_SELECTED_REVISION_NAME' => 'Valgt revisjon navn',
    'LBL_CONTRACT_STATUS' => 'Kontrakt status',
    'LBL_CONTRACT_NAME' => 'Kontraktnavn:',
    'LBL_LAST_REV_DATE' => 'Revisjonsdato:',
    'LBL_DOWNNLOAD_FILE'=> 'Last ned fil:',
    'LBL_DET_RELATED_DOCUMENT'=>'Relaterte dokumenter:',
    'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Rev.nr. for beslektet dokument:",
    'LBL_DET_IS_TEMPLATE'=>'Mal? :',
    'LBL_DET_TEMPLATE_TYPE'=>'Dokumenttype:',
    'LBL_TEAM'=> 'Gruppe:',
    'LBL_DOC_DESCRIPTION'=>'Beskrivelse:',
    'LBL_DOC_ACTIVE_DATE'=> 'Publiseringsdato:',
    'LBL_DOC_EXP_DATE'=> 'Utgangsdato:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentliste',
    'LBL_LIST_DOCUMENT' => 'Dokument',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'LBL_LIST_SUBCATEGORY' => 'Underkategori',
    'LBL_LIST_REVISION' => 'Revisjon',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publisert av',
    'LBL_LIST_LAST_REV_DATE' => 'Revisjonsdato',
    'LBL_LIST_VIEW_DOCUMENT'=>'Vis',
    'LBL_LIST_DOWNLOAD'=> 'Last ned',
    'LBL_LIST_ACTIVE_DATE' => 'Publiseringsdato',
    'LBL_LIST_EXP_DATE' => 'Utgangsdato',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LINKED_ID' => 'Linked ID',
    'LBL_SELECTED_REVISION_ID' => 'Valgt revisjon ID',
    'LBL_LATEST_REVISION_ID' => 'Siste revisjon ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valgt revisjon filnavn',
    'LBL_FILE_URL' => 'Fil URL',
    'LBL_REVISIONS_PANEL' => 'Revisjon detaljer',
    'LBL_REVISIONS_SUBPANEL' => 'Revisjoner',

    //document search form.
    'LBL_SF_DOCUMENT' => 'Dokumentnavn:',
    'LBL_SF_CATEGORY' => 'Kategori:',
    'LBL_SF_SUBCATEGORY'=> 'Underkategori:',
    'LBL_SF_ACTIVE_DATE' => 'Publiseringsdato:',
    'LBL_SF_EXP_DATE'=> 'Utgangsdato:',

    'DEF_CREATE_LOG' => 'Dokument opprettet',

    //error messages
    'ERR_DOC_NAME'=>'Dokumentnavn',
    'ERR_DOC_ACTIVE_DATE'=>'Publiseringsdato',
    'ERR_DOC_EXP_DATE'=> 'Utgangsdato',
    'ERR_FILENAME'=> 'Filnavn',
    'ERR_DOC_VERSION'=> 'Dokumentversjon',
    'ERR_DELETE_CONFIRM'=> 'Vil du slette denne dokumentrevisjonen?',
    'ERR_DELETE_LATEST_VERSION'=> 'Du har ikke tillatelse til å slette den siste revisjonen av et dokument.',
    'LNK_NEW_MAIL_MERGE' => 'E-post-fusjon',
    'LBL_MAIL_MERGE_DOCUMENT' => 'E-postfusjonsmal:',
    'ERR_MISSING_FILE' => 'Dette dokumentet mangler en fil, høyst sannsynlig grunnet en feil under opplastingen. Vennligst forsøk å laste opp på nytt eller kontakt din administrator.',

    'LBL_TREE_TITLE' => 'Dokumenter',
    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME'=>'Navn',
    'LBL_LIST_IS_TEMPLATE'=>'Mal?',
    'LBL_LIST_TEMPLATE_TYPE'=>'Dokumenttype',
    'LBL_LIST_SELECTED_REVISION'=>'Valgt revisjon',
    'LBL_LIST_LATEST_REVISION'=>'Seneste revisjon',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Relaterte kontrakter',
    'LBL_LAST_REV_CREATE_DATE'=>'Opprettelsesdato for seneste revisjon',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Revisjoner',
    'LBL_DOCUMENT_INFORMATION' => 'Oppgaveoversikt',
    'LBL_DOC_ID' => 'Dokument kilde ID',
    'LBL_DOC_TYPE' => 'Kilde',
    'LBL_LIST_DOC_TYPE' => 'Kilde',
    'LBL_DOC_TYPE_POPUP' => 'Velg en kilde hvor dette dokumentet vil bli lastet opp fra der det er tilgjengelig.',
    'LBL_DOC_URL' => 'Dokument kilde URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Filnavn',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'De 20 sist modifiserte filene vises i synkende rekkefølge i listen nedenfor. Bruk søk for å finne andre filer.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Filnavn',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Brukeren forsøkte å aksessere et ugyldig eksternt API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Innloggingssjekken feilet for eksternt API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Bedrifter',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Muligheter',
    'LBL_CASES_SUBPANEL_TITLE' => 'Saker',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Tilbud',
    'LBL_RLI_SUBPANEL_TITLE' => 'Omsetning linjeelementer',
);
