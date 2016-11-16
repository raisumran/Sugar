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
    'LBL_MODULE_NAME' => 'Documenten',
    'LBL_MODULE_NAME_SINGULAR' => 'Document',
    'LBL_MODULE_TITLE' => 'Documenten: Start',
    'LNK_NEW_DOCUMENT' => 'Nieuw Document',
    'LNK_DOCUMENT_LIST'=> 'Documents Lijst',
    'LBL_DOC_REV_HEADER' => 'Document Revisies',
    'LBL_SEARCH_FORM_TITLE'=> 'Document Zoeken',
    //vardef labels
    'LBL_DOCUMENT_ID' => 'Document Id',
    'LBL_NAME' => 'Naam',
    'LBL_DOCUMENT_NAME' => 'Document Naam',
    'LBL_DESCRIPTION' => 'Beschrijving',
    'LBL_CATEGORY' => 'Categorie',
    'LBL_SUBCATEGORY' => 'Sub Categorie',
    'LBL_STATUS' => 'Status',
    'LBL_CREATED_BY'=> 'Gemaakt door',
    'LBL_DATE_ENTERED'=> 'Datum aangemaakt',
    'LBL_DATE_MODIFIED'=> 'Datum gewijzigd',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_MODIFIED'=> 'Gewijzigd door ID',
    'LBL_MODIFIED_USER' => 'Gewijzigd door',
    'LBL_CREATED'=> 'Gemaakt door',
    'LBL_REVISIONS'=>'Revisies',
    'LBL_RELATED_DOCUMENT_ID'=>'Gerelateerd Document ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Gerelateerd Document Revisie ID',
    'LBL_IS_TEMPLATE'=>'Is een Sjabloon',
    'LBL_TEMPLATE_TYPE'=>'Document Type',
    'LBL_ASSIGNED_TO_NAME'=>'Toegewezen aan:',
    'LBL_REVISION_NAME' => 'Revisie Nummer',
    'LBL_MIME' => 'Mime type',
    'LBL_REVISION' => 'Revisie',
    'LBL_DOCUMENT' => 'Verwant Document',
    'LBL_LATEST_REVISION' => 'Laatste Revisie',
    'LBL_DOCUMENT_REVISION_ID' => 'Document revisie ID',
    'LBL_CHANGE_LOG'=> 'Wijzigings Log',
    'LBL_ACTIVE_DATE'=> 'Publiceer Datum',
    'LBL_EXPIRATION_DATE' => 'Vervaldatum',
    'LBL_FILE_EXTENSION'  => 'Bestands extensie',
    'LBL_LAST_REV_MIME_TYPE' => 'Laatste Revisie - Mime type',
    'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Niet gespecificeerd',
    'LBL_HOMEPAGE_TITLE' => 'Mijn Documenten',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nieuw Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Document Naam:',
    'LBL_FILENAME' => 'Bestandsnaam:',
    'LBL_LIST_FILENAME' => 'Bestandsnaam',
    'LBL_DOC_VERSION' => 'Revisie:',
    'LBL_FILE_UPLOAD' => 'Bestandsnaam',

    'LBL_CATEGORY_VALUE' => 'Categorie:',
    'LBL_SUBCATEGORY_VALUE'=> 'Sub Categorie:',
    'LBL_DOC_STATUS'=> 'Status:',
    'LBL_DOC_STATUS_ID'=> 'Status ID:',
    'LBL_LAST_REV_CREATOR' => 'Revisie Gemaakt door:',
    'LBL_LASTEST_REVISION_NAME' => 'Naam laatste revisie:',
    'LBL_SELECTED_REVISION_NAME' => 'Gekozen naam revisie',
    'LBL_CONTRACT_STATUS' => 'Contractstatus:',
    'LBL_CONTRACT_NAME' => 'Contractnaam:',
    'LBL_LAST_REV_DATE' => 'Revisie Datum:',
    'LBL_DOWNNLOAD_FILE'=> 'Download Bestand:',
    'LBL_DET_RELATED_DOCUMENT'=>'Verwant Document:',
    'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revisie gerelateerde document:",
    'LBL_DET_IS_TEMPLATE'=>'Sjabloon? :',
    'LBL_DET_TEMPLATE_TYPE'=>'Document Type:',
    'LBL_TEAM'=> 'Team:',
    'LBL_DOC_DESCRIPTION'=>'Omschrijving:',
    'LBL_DOC_ACTIVE_DATE'=> 'Publiceerdatum:',
    'LBL_DOC_EXP_DATE'=> 'Vervaldatum:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Document Lijst',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_CATEGORY' => 'Categorie',
    'LBL_LIST_SUBCATEGORY' => 'Sub Categorie',
    'LBL_LIST_REVISION' => 'Revisie',
    'LBL_LIST_LAST_REV_CREATOR' => 'Gepubliceerd door',
    'LBL_LIST_LAST_REV_DATE' => 'Revisie Datum',
    'LBL_LIST_VIEW_DOCUMENT'=>'Bekijken',
    'LBL_LIST_DOWNLOAD'=> 'Download',
    'LBL_LIST_ACTIVE_DATE' => 'Publiceer Datum',
    'LBL_LIST_EXP_DATE' => 'Vervaldatum',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LINKED_ID' => 'Gerelateerde ID',
    'LBL_SELECTED_REVISION_ID' => 'Gekozen revisie ID',
    'LBL_LATEST_REVISION_ID' => 'Laatste revisie ID',
    'LBL_SELECTED_REVISION_FILENAME' => 'Bestandsnaam gekozen revisie',
    'LBL_FILE_URL' => 'Bestands URL',
    'LBL_REVISIONS_PANEL' => 'Revisie-details',
    'LBL_REVISIONS_SUBPANEL' => 'Revisies',

    //document search form.
    'LBL_SF_DOCUMENT' => 'Document Naam:',
    'LBL_SF_CATEGORY' => 'Categorie:',
    'LBL_SF_SUBCATEGORY'=> 'Sub Categorie:',
    'LBL_SF_ACTIVE_DATE' => 'Publiceerdatum:',
    'LBL_SF_EXP_DATE'=> 'Vervaldatum:',

    'DEF_CREATE_LOG' => 'Document Aangemaakt',

    //error messages
    'ERR_DOC_NAME'=>'Document Naam',
    'ERR_DOC_ACTIVE_DATE'=>'Publiceer Datum',
    'ERR_DOC_EXP_DATE'=> 'Vervaldatum',
    'ERR_FILENAME'=> 'Bestandsnaam',
    'ERR_DOC_VERSION'=> 'Document Versie',
    'ERR_DELETE_CONFIRM'=> 'Wilt u deze revisie van het document verwijderen?',
    'ERR_DELETE_LATEST_VERSION'=> 'Het is niet toegestaan de laatste revisie van een document te verwijderen.',
    'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
    'LBL_MAIL_MERGE_DOCUMENT' => 'Mail Merge Sjabloon:',
    'ERR_MISSING_FILE' => 'Dit document mist een bestand, waarschijnlijk vanwege een fout tijdens het uploaden. Probeert u aub nogmaals het bestand te uploaden of neem contact op met uw administrator.',

    'LBL_TREE_TITLE' => 'Documenten',
    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME'=>'Naam',
    'LBL_LIST_IS_TEMPLATE'=>'Sjabloon?',
    'LBL_LIST_TEMPLATE_TYPE'=>'Document Type',
    'LBL_LIST_SELECTED_REVISION'=>'Geselecteerde Revisie',
    'LBL_LIST_LATEST_REVISION'=>'Laatste Revisie',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Verwante Contracten',
    'LBL_LAST_REV_CREATE_DATE'=>'Laatste Revisie Datum ingevoerd',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Contracten',
    'LBL_CREATED_USER' => 'Aangemaakte gebruiker',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Revisies',
    'LBL_DOCUMENT_INFORMATION' => 'Overzicht',
    'LBL_DOC_ID' => 'Documentbron ID',
    'LBL_DOC_TYPE' => 'Bron',
    'LBL_LIST_DOC_TYPE' => 'Bron',
    'LBL_DOC_TYPE_POPUP' => 'Selecteer een bron waarnaar dit document wordt geüpload en vanwaar het beschikbaar zal zijn.',
    'LBL_DOC_URL' => 'Documentbron URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Bestandsnaam',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'De eerste 20 meest recent gewijzigde bestanden worden in aflopende volgorde weergegeven in de lijst hieronder. Gebruik de zoekfunctie om andere bestanden te vinden.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Bestandsnaam',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'De gebruiker probeerde toegang te krijgen tot een ongeldige externe API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'De aanmelding voor de externe API ({0}) is mislukt',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Organisaties',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Offertes',
    'LBL_RLI_SUBPANEL_TITLE' => 'Opportunityregels',
);
