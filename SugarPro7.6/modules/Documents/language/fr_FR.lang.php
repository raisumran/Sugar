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
    'LBL_MODULE_NAME' => 'Documents',
    'LBL_MODULE_NAME_SINGULAR' => 'Document',
    'LBL_MODULE_TITLE' => 'Documents',
    'LNK_NEW_DOCUMENT' => 'Créer Document',
    'LNK_DOCUMENT_LIST'=> 'Liste des Documents',
    'LBL_DOC_REV_HEADER' => 'Versions',
    'LBL_SEARCH_FORM_TITLE'=> 'Recherche Document',
    //vardef labels
    'LBL_DOCUMENT_ID' => 'Ref Document',
    'LBL_NAME' => 'Nom',
    'LBL_DOCUMENT_NAME' => 'Name du Document',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_CATEGORY' => 'Catégorie',
    'LBL_SUBCATEGORY' => 'Sous-catégorie',
    'LBL_STATUS' => 'Statut',
    'LBL_CREATED_BY'=> 'Créé par',
    'LBL_DATE_ENTERED'=> 'Date de création',
    'LBL_DATE_MODIFIED'=> 'Date de modification',
    'LBL_DELETED' => 'Supprimé',
    'LBL_MODIFIED'=> 'Modifié par (ID)',
    'LBL_MODIFIED_USER' => 'Modifié par:',
    'LBL_CREATED'=> 'Créé par',
    'LBL_REVISIONS'=>'Révisions',
    'LBL_RELATED_DOCUMENT_ID'=>'ID du document lié',
    'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID de la version du document lié',
    'LBL_IS_TEMPLATE'=>'Est un Modèle',
    'LBL_TEMPLATE_TYPE'=>'Type de Document',
    'LBL_ASSIGNED_TO_NAME'=>'Assigné à :',
    'LBL_REVISION_NAME' => 'Numéro de version',
    'LBL_MIME' => 'Type Mime',
    'LBL_REVISION' => 'Version',
    'LBL_DOCUMENT' => 'Document lié',
    'LBL_LATEST_REVISION' => 'Dernière version',
    'LBL_DOCUMENT_REVISION_ID' => 'Versions de Document (ID)',
    'LBL_CHANGE_LOG'=> 'Log des Modifications',
    'LBL_ACTIVE_DATE'=> 'Date de publication',
    'LBL_EXPIRATION_DATE' => 'Date d&#39;expiration',
    'LBL_FILE_EXTENSION'  => 'Extension du ficheir',
    'LBL_LAST_REV_MIME_TYPE' => 'Dernière révision Type Mime',
    'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Non spécifié',
    'LBL_HOMEPAGE_TITLE' => 'Mes documents',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nouveau Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nom du Document:',
    'LBL_FILENAME' => 'Nom du Fichier:',
    'LBL_LIST_FILENAME' => 'Nom du fichier',
    'LBL_DOC_VERSION' => 'Version:',
    'LBL_FILE_UPLOAD' => 'Nom du fichier',

    'LBL_CATEGORY_VALUE' => 'Catégorie',
    'LBL_SUBCATEGORY_VALUE'=> 'Sous-catégorie:',
    'LBL_DOC_STATUS'=> 'Statut:',
    'LBL_DOC_STATUS_ID'=> 'Statut (ID) :',
    'LBL_LAST_REV_CREATOR' => 'Version créée par:',
    'LBL_LASTEST_REVISION_NAME' => 'Nom de la dernière révision:',
    'LBL_SELECTED_REVISION_NAME' => 'Nom de la révision sélectionné:',
    'LBL_CONTRACT_STATUS' => 'Statut Contrat:',
    'LBL_CONTRACT_NAME' => 'Nom du Contrat:',
    'LBL_LAST_REV_DATE' => 'Date de la version:',
    'LBL_DOWNNLOAD_FILE'=> 'Fichier Téléchargeable:',
    'LBL_DET_RELATED_DOCUMENT'=>'Document lié:',
    'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Version du Document lié:",
    'LBL_DET_IS_TEMPLATE'=>'Modèle? :',
    'LBL_DET_TEMPLATE_TYPE'=>'Type de document:',
    'LBL_TEAM'=> 'Equipe (ID):',
    'LBL_DOC_DESCRIPTION'=>'Description:',
    'LBL_DOC_ACTIVE_DATE'=> 'Date de Publication:',
    'LBL_DOC_EXP_DATE'=> 'Date d&#39;expiration:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Liste des Documents',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_CATEGORY' => 'Catégorie',
    'LBL_LIST_SUBCATEGORY' => 'Sous-catégorie',
    'LBL_LIST_REVISION' => 'Version',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publié par',
    'LBL_LIST_LAST_REV_DATE' => 'Date de la version',
    'LBL_LIST_VIEW_DOCUMENT'=>'Voir',
    'LBL_LIST_DOWNLOAD'=> 'Télécharger',
    'LBL_LIST_ACTIVE_DATE' => 'Date de publication',
    'LBL_LIST_EXP_DATE' => 'Date d&#39;expiration',
    'LBL_LIST_STATUS'=>'Statut',
    'LBL_LINKED_ID' => 'Linked id',
    'LBL_SELECTED_REVISION_ID' => 'ID de la révision sélectionné',
    'LBL_LATEST_REVISION_ID' => 'ID de la dernière révision',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nom du fichier de la révision sélectionné',
    'LBL_FILE_URL' => 'URL Fichier',
    'LBL_REVISIONS_PANEL' => 'Détails Révisions',
    'LBL_REVISIONS_SUBPANEL' => 'Révisions',

    //document search form.
    'LBL_SF_DOCUMENT' => 'Nom du Document:',
    'LBL_SF_CATEGORY' => 'Catégorie',
    'LBL_SF_SUBCATEGORY'=> 'Sous-catégorie:',
    'LBL_SF_ACTIVE_DATE' => 'Date de Publication:',
    'LBL_SF_EXP_DATE'=> 'Date d&#39;expiration:',

    'DEF_CREATE_LOG' => 'Document créé',

    //error messages
    'ERR_DOC_NAME'=>'Name du Document',
    'ERR_DOC_ACTIVE_DATE'=>'Date de publication',
    'ERR_DOC_EXP_DATE'=> 'Date d&#39;expiration',
    'ERR_FILENAME'=> 'Nom de fichier',
    'ERR_DOC_VERSION'=> 'Version du Document',
    'ERR_DELETE_CONFIRM'=> 'Voulez vous effacer cette version du document?',
    'ERR_DELETE_LATEST_VERSION'=> 'Vous n&#39;êtes pas autorisé à effacer la dernière version d&#39;un document.',
    'LNK_NEW_MAIL_MERGE' => 'Activer le Publipostage',
    'LBL_MAIL_MERGE_DOCUMENT' => 'Modèle utilisable dans un publipostage:',
    'ERR_MISSING_FILE' => 'Ce document ne contient pas de fichier, probablement à cause d&#39;une erreur lors du transfert. Veuillez essayer de nouveau ou contacter votre administrateur.',

    'LBL_TREE_TITLE' => 'Documents',
    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME'=>'Nom',
    'LBL_LIST_IS_TEMPLATE'=>'Modèle?',
    'LBL_LIST_TEMPLATE_TYPE'=>'Type de Document',
    'LBL_LIST_SELECTED_REVISION'=>'version sélectionnée',
    'LBL_LIST_LATEST_REVISION'=>'Dernière version',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Co,ntrats liés',
    'LBL_LAST_REV_CREATE_DATE'=>'Date de créationd e la dernière version',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Révisions',
    'LBL_DOCUMENT_INFORMATION' => 'Informations Tâches',
    'LBL_DOC_ID' => 'ID du document orignal',
    'LBL_DOC_TYPE' => 'Origine',
    'LBL_LIST_DOC_TYPE' => 'Origine',
    'LBL_DOC_TYPE_POPUP' => 'Sélectionner la source vers laquelle ce document sera envoyé et à partir de laquelle il sera disponible',
    'LBL_DOC_URL' => 'URL du document orignal',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nom de fichier',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Les 20 premiers fichiers les plus récemment modifiés sont affichés dans l&#39;ordre décroissant ci-dessous. Utilisez la recherche pour trouver d&#39;autres fichiers.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nom de fichier',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'L&#39;utilisateur tente d&#39;accéder à une API externe invalide ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'La vérification du login a échoué pour l&#39;API externe ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Devis',
    'LBL_RLI_SUBPANEL_TITLE' => 'Lignes de revenu',
);
