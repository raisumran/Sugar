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
    'LBL_MODULE_NAME' => 'Documentos',
    'LBL_MODULE_NAME_SINGULAR' => 'Documento',
    'LBL_MODULE_TITLE' => 'Documentos: Ecrã Principal',
    'LNK_NEW_DOCUMENT' => 'Novo Documento',
    'LNK_DOCUMENT_LIST'=> 'Lista de Documentos',
    'LBL_DOC_REV_HEADER' => 'Revisões de Documentos',
    'LBL_SEARCH_FORM_TITLE'=> 'Pesquisa de Documentos',
    //vardef labels
    'LBL_DOCUMENT_ID' => 'Documento',
    'LBL_NAME' => 'Nome',
    'LBL_DOCUMENT_NAME' => 'Nome do Documento',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_CATEGORY' => 'Categoria',
    'LBL_SUBCATEGORY' => 'Subcategoria',
    'LBL_STATUS' => 'Estado',
    'LBL_CREATED_BY'=> 'Criado por',
    'LBL_DATE_ENTERED'=> 'Data de Introdução',
    'LBL_DATE_MODIFIED'=> 'Data de Modificação',
    'LBL_DELETED' => 'Eliminado',
    'LBL_MODIFIED'=> 'Modificado por',
    'LBL_MODIFIED_USER' => 'Modificado por:',
    'LBL_CREATED'=> 'Criado por',
    'LBL_REVISIONS'=>'Revisões',
    'LBL_RELATED_DOCUMENT_ID'=>'ID do Documento Relacionado',
    'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID da Revisão do Documento Relacionado',
    'LBL_IS_TEMPLATE'=>'É um Modelo',
    'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
    'LBL_ASSIGNED_TO_NAME'=>'Atribuído a:',
    'LBL_REVISION_NAME' => 'Número de Revisão',
    'LBL_MIME' => 'Mime Type',
    'LBL_REVISION' => 'Revisão',
    'LBL_DOCUMENT' => 'Documento Relacionado',
    'LBL_LATEST_REVISION' => 'Última Revisão',
    'LBL_DOCUMENT_REVISION_ID' => 'Id da Revisão do Cliente',
    'LBL_CHANGE_LOG'=> 'Modificar Registo',
    'LBL_ACTIVE_DATE'=> 'Data de Publicação',
    'LBL_EXPIRATION_DATE' => 'Data de Expiração',
    'LBL_FILE_EXTENSION'  => 'Extensão do Ficheiro',
    'LBL_LAST_REV_MIME_TYPE' => 'MIME type da última revisão',
    'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Não Especificado',
    'LBL_HOMEPAGE_TITLE' => 'Os Meus Documentos',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Novo Documento',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nome do Documento:',
    'LBL_FILENAME' => 'Nome do Ficheiro:',
    'LBL_LIST_FILENAME' => 'Nome do Ficheiro',
    'LBL_DOC_VERSION' => 'Revisão:',
    'LBL_FILE_UPLOAD' => 'Nome do Ficheiro',

    'LBL_CATEGORY_VALUE' => 'Categoria:',
    'LBL_SUBCATEGORY_VALUE'=> 'Subcategoria:',
    'LBL_DOC_STATUS'=> 'Estado:',
    'LBL_DOC_STATUS_ID'=> 'Id do Estado:',
    'LBL_LAST_REV_CREATOR' => 'Revisão Criada Por:',
    'LBL_LASTEST_REVISION_NAME' => 'Nome da última revisão',
    'LBL_SELECTED_REVISION_NAME' => 'Nome da Revisão Seleccionada',
    'LBL_CONTRACT_STATUS' => 'Estado do Contrato:',
    'LBL_CONTRACT_NAME' => 'Nome do Contacto',
    'LBL_LAST_REV_DATE' => 'Data de Revisão:',
    'LBL_DOWNNLOAD_FILE'=> 'Transferir Ficheiro:',
    'LBL_DET_RELATED_DOCUMENT'=>'Documento Relacionado:',
    'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revisão do Documento Relacionado:",
    'LBL_DET_IS_TEMPLATE'=>'Modelo? :',
    'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
    'LBL_TEAM'=> 'Equipa',
    'LBL_DOC_DESCRIPTION'=>'Descrição:',
    'LBL_DOC_ACTIVE_DATE'=> 'Data de Publicação:',
    'LBL_DOC_EXP_DATE'=> 'Data de Expiração:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
    'LBL_LIST_DOCUMENT' => 'Documento',
    'LBL_LIST_CATEGORY' => 'Categoria',
    'LBL_LIST_SUBCATEGORY' => 'Subcategoria',
    'LBL_LIST_REVISION' => 'Revisão',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publicado Por',
    'LBL_LIST_LAST_REV_DATE' => 'Data de Revisão',
    'LBL_LIST_VIEW_DOCUMENT'=>'Ver',
    'LBL_LIST_DOWNLOAD'=> 'Download',
    'LBL_LIST_ACTIVE_DATE' => 'Data de Publicação',
    'LBL_LIST_EXP_DATE' => 'Data de Expiração',
    'LBL_LIST_STATUS'=>'Estado',
    'LBL_LINKED_ID' => 'Id ligado',
    'LBL_SELECTED_REVISION_ID' => 'Id da revisão seleccionada',
    'LBL_LATEST_REVISION_ID' => 'Id da última revisão',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nome da revisão seleccionada',
    'LBL_FILE_URL' => 'URL do Ficheiro',
    'LBL_REVISIONS_PANEL' => 'Detalhes da Revisão',
    'LBL_REVISIONS_SUBPANEL' => 'Revisões',

    //document search form.
    'LBL_SF_DOCUMENT' => 'Nome do Documento:',
    'LBL_SF_CATEGORY' => 'Categoria:',
    'LBL_SF_SUBCATEGORY'=> 'Subcategoria:',
    'LBL_SF_ACTIVE_DATE' => 'Data de Publicação:',
    'LBL_SF_EXP_DATE'=> 'Data de Expiração:',

    'DEF_CREATE_LOG' => 'Documento Criado',

    //error messages
    'ERR_DOC_NAME'=>'Nome do Documento',
    'ERR_DOC_ACTIVE_DATE'=>'Data de Publicação',
    'ERR_DOC_EXP_DATE'=> 'Data de Expiração',
    'ERR_FILENAME'=> 'Nome do ficheiro',
    'ERR_DOC_VERSION'=> 'Versão do Documento',
    'ERR_DELETE_CONFIRM'=> 'Tem a certeza que deseja eliminar esta revisão do documento?',
    'ERR_DELETE_LATEST_VERSION'=> 'Não tem permissão para eliminar a última revisão do documento.',
    'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
    'LBL_MAIL_MERGE_DOCUMENT' => 'Modelo de Mail Merge:',
    'ERR_MISSING_FILE' => 'Falta um ficheiro neste documento, provavelmente devido a um erro durante o seu upload. Por favor tentar novamente o seu upload ou contacte o seu administrador.',

    'LBL_TREE_TITLE' => 'Documentos',
    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME'=>'Nome',
    'LBL_LIST_IS_TEMPLATE'=>'Modelo?',
    'LBL_LIST_TEMPLATE_TYPE'=>'Tipo de Documento',
    'LBL_LIST_SELECTED_REVISION'=>'Revisão Seleccionada',
    'LBL_LIST_LATEST_REVISION'=>'Última Revisão',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos Relacionados',
    'LBL_LAST_REV_CREATE_DATE'=>'Data de Criação da Última Revisão',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CREATED_USER' => 'Utilizador Criado',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversões',
    'LBL_DOCUMENT_INFORMATION' => 'Informação da Tarefa',
    'LBL_DOC_ID' => 'ID do Documento Fonte',
    'LBL_DOC_TYPE' => 'Origem',
    'LBL_LIST_DOC_TYPE' => 'Origem',
    'LBL_DOC_TYPE_POPUP' => 'Seleccionar uma fonte para o qual este documento irá ser carregado e de onde estará disponível.',
    'LBL_DOC_URL' => 'URL do Documento Fonte',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome do ficheiro',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Os 20 ficheiros mais recentemente modificados são exibidos em ordem descendente na lista abaixo. Utilize a Pesquisa para encontrar outros ficheiros',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome do ficheiro',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'O utilizador tentou aceder uma API externa inválida ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'A validação de inicio de sessão para uma API externa falhou ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Entidades',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug Tracker',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
    'LBL_RLI_SUBPANEL_TITLE' => 'Itens de Linha de Receita',
);
