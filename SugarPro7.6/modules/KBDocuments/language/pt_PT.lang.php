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
	'LBL_MODULE_NAME' => 'Base de Conhecimento',
    'LBL_MODULE_NAME_SINGULAR' => 'Base de Conhecimento',
	'LBL_MODULE_TITLE' => 'Artigo da Base de Conhecimento',
	'LNK_NEW_ARTICLE' => 'Novo Artigo',
	'LNK_KBDOCUMENT_LIST'=> 'Lista de Documentos',
	'LBL_DOC_REV_HEADER' => 'Revisões de Documentos',
	'LBL_SEARCH_FORM_TITLE'=> 'Pesquisa de Documentos',
	'LBL_SEND_EMAIL'  => 'Enviar E-mail',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Seleccionar',
	'LBL_EMBEDED_IMAGES' => 'Imagens Embutidas:',
	'LBL_SHOW_MORE' => 'Mostrar Mais Artigos',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Mostrar Mais Detalhes',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Esconder Detalhes',
	'LBL_TAGS' => 'Etiquetas:',
	'LBL_NOT_AN_ADMIN_USER' => 'Não é um administrador',
	'LBL_NOT_A_VALID_FILE' => 'Não é um ficheiro válido',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Nova Etiqueta',
    'LBL_NEW_TAG_NAME' => 'Novo Nome de Etiqueta:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Id Documento',
	'LBL_ARTICLE_TITLE' => 'Cargo:',
	'LBL_ARTICLE_AUTHOR' => 'Autor:',
	'LBL_ARTICLE_APPROVED_BY' =>'Aprovador:',
	'LBL_ARTICLE_BODY' => 'Corpo do Artigo:',
	'LBL_NAME' => 'Nome do Documento:',
	'LBL_DESCRIPTION' => 'Descrição',
	'LBL_CATEGORY' => 'Categoria',
	'LBL_SUBCATEGORY' => 'Subcategoria',
	'LBL_STATUS' => 'Estado',
	'LBL_CREATED_BY'=> 'Criado por',
	'LBL_DATE_ENTERED'=> 'Data de Introdução',
	'LBL_DATE_MODIFIED'=> 'Data de Modificação',
	'LBL_DELETED' => 'Eliminado',
	'LBL_MODIFIED'=> 'Modificado por Id',
	'LBL_MODIFIED_USER' => 'Modificado por:',
	'LBL_CREATED'=> 'Criado por',
	'LBL_RELATED_DOCUMENT_ID'=>'Id do Documento Relacionado',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Id da Revisão do Documento Relacionado',
	'LBL_IS_TEMPLATE'=>'É um Modelo',
	'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
    'LBL_PARENT_TYPE'=>'Tipo de Origem',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Estado do Contrato',
    'LBL_LINKED_ID'=>'Id ligado',
    'LBL_VIEWS_NUMBER'=>'Número de Visualizações',

	'LBL_REVISION_NAME' => 'Número de Revisão',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Número de Revisão do KBDocument',
	'LBL_MIME' => 'Mime Type',
	'LBL_REVISION' => 'Revisão',
	'LBL_DOCUMENT' => 'Documento Relacionado',
	'LBL_LATEST_REVISION' => 'Id Última Revisão',
    'LBL_LATEST_REVISION_NAME' => 'Nome da Última Revisão',
    'LBL_SELECTED_REVISION_NAME' => 'Nome da Revisão Seleccionada',
    'LBL_SELECTED_REVISION_ID' => 'Id da revisão seleccionada',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nome do ficheiro da revisão seleccionada',
	'LBL_CHANGE_LOG'=> 'Modificar Registo',
	'LBL_ACTIVE_DATE'=> 'Data de Publicação',
	'LBL_EXPIRATION_DATE' => 'Data de Expiração',
	'LBL_FILE_EXTENSION'  => 'Extensão do Ficheiro',
    'LBL_KBDOC_APPROVER_NAME' => 'Nome do Aprovador',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Base de Conhecimento',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Admin da Base de Conhecimento',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Administrador da Base de Conhecimento',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Não Especificado',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Etiquetas:',
	'LBL_KBDOC_BODY' => 'Corpo:',
	'LBL_KBDOC_APPROVED_BY' =>'Aprovado Por:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attahment',
	'LBL_KBDOC_ATTS_TITLE' =>'Download de Anexos:',
	'LBL_DOC_NAME' => 'Nome do Documento:',
	'LBL_FILENAME' => 'Nome do Ficheiro:',
	'LBL_DOC_VERSION' => 'Revisão:',
	'LBL_CATEGORY_VALUE' => 'Categoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategoria:',
	'LBL_DOC_STATUS'=> 'Estado:',
	'LBL_LAST_REV_CREATOR' => 'Revisão Criada Por:',
	'LBL_LAST_REV_DATE' => 'Data de Revisão:',
	'LBL_DOWNNLOAD_FILE'=> 'Anexos:',
	'LBL_DET_RELATED_DOCUMENT'=>'Documento Relacionado:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revisão de Documentos Relacionados:",
	'LBL_DET_IS_TEMPLATE'=>'Modelo? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Artigo Externo? :',
	'LBL_SHOW_TAGS' => 'Mostrar Mais Etiquetas',
    'LBL_HIDE_TAGS' => 'Ocultar Etiquetas',
	'LBL_TEAM'=> 'Equipa',
	'LBL_DOC_DESCRIPTION'=>'Descrição:',
	'LBL_KBDOC_SUBJECT' =>'Assunto:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data de Publicação:',
	'LBL_DOC_EXP_DATE'=> 'Data de Expiração:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Artigos',
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
    'LBL_ARTICLE_AUTHOR_LIST' => 'Autor',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Artigos Mais Vistos',
	'LBL_LIST_MOST_RECENT' => 'Artigos Mais Recentes',
    'LBL_LIST_APPROVED_BY' => 'Aprovado Por',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Nome do Documento:',
	'LBL_SF_CATEGORY' => 'Categoria:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Data de Publicação:',
	'LBL_SF_EXP_DATE'=> 'Data de Expiração:',

	'DEF_CREATE_LOG' => 'Documento Criado',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Pesquisar',
    'LBL_TAB_BROWSE' => 'Navegar',
    'LBL_TAB_ADVANCED' => 'Pesquisa Avançada',
    'LBL_MENU_FTS' => 'Pesquisa de Texto Completo',
    'LBL_FTS_EMPTY_STRING' =>  'Não pode executar pesquisa de texto completo numa string vazia',
    'LBL_SEARCH_WITHIN' => 'Pesquisar em:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Contendo estas palavras:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Excluindo estas palavras:',  
    'LBL_UNDER_THIS_TAG' => 'Utilizando Esta Etiqueta:',
    'LBL_PUBLISHED' => 'Publicado:',
    'LBL_EXPIRES' => 'Expira:',
    'LBL_TIMES_VIEWED' => 'Frequência de Visualização:',    
    'LBL_ATTACHMENTS' => 'Anexos:',
    'LBL_SAVE_SEARCH_AS' => 'Gravar esta pesquisa como:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Isto grava as suas entradas especificadas como um filtro Pesquisa Gravada para Base de Conhecimento.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Pesquisas anteriormente gravadas:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Editar e Eliminar uma Pesquisa Gravada.',
    'LBL_UPDATE' => 'Actualizar',
    'LBL_DELETE' => 'Eliminar',
    'LBL_SHOW_OPTIONS' => 'Mostrar Mais Opções',
    'LBL_AND' => 'e',
    'LBL_SEARCH' => 'Pesquisar',
    'LBL_CLEAR' => 'Apagar',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Nome do Aprovador',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Frequência',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Previsão não está disponível, registo do Documento não foi encontrado.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Previsão não está disponível, o Documento existe mas ainda não foi criado conteúdo.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Artigos Não Etiquetados',
    'LBL_TOP_TEN_LIST_TITLE' => 'Top 10 dos Artigos Mais Vistos',
    'LBL_SHOW_SYNTAX_HELP' => 'Mostrar Ajuda Sintaxe',
    'LBL_MISMATCH_QUOTES_ERR' => 'A sua query não irá funcionar tal como foi introduzida. Devem haver aspas duplas finais para qualquer aspa dupla inicial para fazerem um par. Se deseja procurar por uma string com aspas duplas, faça-o com uma barra diagonal (\\")', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B>Ajuda de Sintaxe Query:</b><P> <ol> <li>O sinal mais (+) indica que os resultados "devem ter" este termo.</li> <li>O sinal menos (-) indica que os resultados "não devem ter" o termo. O sinal menos (-) não é necessário se está a preencher o campo de texto com palavras a serem excluídas.</li> <li>Múltiplas palavras entre aspas duplas ("exemplo1 exemplo2") são tratadas como um termo singular de pesquisa. Deve haver um conjunto inicial e final de aspas ou a pesquisa não terá efeito.<br>Para pesquisar as próprias aspas, utilize uma barra diagonal (\\").</li> <li>Uma aspa singular (&#39;) será pesquisada como as-is, e não como agrupamento.</li></ol> </p> <p><b>Exemplo: </b><br><br> Para fazer uma query por todos os artigos com as palavras "Sugar" ou "CRM que tenha as palavras  "Knowledge Base" e "bom," mas que não tenha as palavras  "demo" ou "passado," introduza a seguinte string:<br>    Sugar CRM +"Knowledge Base" +bom -demo -"Passado"</p><br> <p><b>Notas: </b><br> <ol><li>Caso não importa.</li> <li>Espaços e vírgulas são ambos delimitadores aceitáveis.</li> <li>Não ponha um espaço entre os sinais mais (+) ou menos (-) e as palavras que eles detalham.</li></ol> </p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Etiqueta Derivada',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Etiquetas Derivada',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Artigo',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Artigos',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Esta etiqueta contém',
    
	//error messages
	'ERR_DOC_NAME'=>'Nome do Documento',
	'ERR_DOC_ACTIVE_DATE'=>'Data de Publicação',
	'ERR_DOC_EXP_DATE'=> 'Data de Expiração',
	'ERR_FILENAME'=> 'Nome do ficheiro',
	'ERR_DOC_VERSION'=> 'Versão do Documento',
	'ERR_DELETE_CONFIRM'=> 'Pretende eliminar esta revisão do documento?',
	'ERR_DELETE_LATEST_VERSION'=> 'Não tem permissão para eliminar a última revisão de um documento.',
	'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Modelo de Mail Merge:',
	'ERR_FILESIZE' => 'Ficheiro é muito grande. Tamanho de ficheiro máximo:',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nome do Documento',
	'LBL_CONTRACT_NAME'=>'Nome do Contrato:',
	'LBL_LIST_IS_TEMPLATE'=>'Modelo?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_LIST_SELECTED_REVISION'=>'Revisão Seleccionada',
	'LBL_LIST_LATEST_REVISION'=>'Última Revisão',
	'LBL_CASES_SUBPANEL_TITLE'=>'Casos Relacionados',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'E-mails Relacionados',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos Relacionados',
	'LBL_LAST_REV_CREATE_DATE'=>'Data de Criação da Última Revisão',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Palavras-Chave:',
    'LBL_CASES' =>'Ocorrências',
    'LBL_CASE_ID' => 'ID da Ocorrência',
    'LBL_CASE'    => 'Ocorrência',
    'LBL_EMAILS' =>'Emails',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Seleccione uma acção da lista dropdown',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Seleccione a etiqueta de origem da árvore',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Seleccione etiquetas(s) a eliminar da árvore',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Seleccione a etiqueta a renomear da árvore',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Etiqueta já existente',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Insira o novo nome da etiqueta',
    'LBL_SAVING_THE_TAG' => 'A gravar a Etiqueta...',
    'LBL_CREATING_NEW_TAG' => 'A criar Nova Etiqueta...',
    'LBL_TAGS_ROOT_LABEL' => 'Etiquetas',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQs de Etiqueta não podem ser renomeadas',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Seleccione Artigos Primeiro',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Seleccione Artigos Para Aplicar Etiquetas',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Seleccione Artigos Primeiro',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Seleccione uma Etiqueta da Árvore',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Seleccione Etiquetas da Árvore',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'A mover artigos para etiqueta...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'A aplicar etiquetas em artigos ...',
    'LBL_ROOT_TAG_MESSAGE' => 'Etiqueta raiz não pode ser seleccionada/ligada ao artigo',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Etiqueta raíz não pode ser renomeada',
    'LBL_TYPE_NEW_NODE_NAME'=>'Por favor introduza um nome de etiqueta',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Etiquetas Fonte e Alvo são as mesmas',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Eliminar Etiqueta',
    'LBL_SELECT_TAG'  => 'Seleccionar Etiqueta',
    'LBL_APPLY_TAG'  =>  'Aplicar Etiqueta',
    'LBL_MOVE'  =>   'Mover',
    'LBL_LAUNCHING_TAG_BROWSING' => 'A lançar Procura de Etiquetas ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Houve um erro ao executar esta procura de etiquetas.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Erro: Não é um elemento de entrada de ficheiro',
    'LBL_CREATE_NEW_TAG'  => 'Nova Etiqueta',
    'LBL_SEARCH_TAG'  => 'Pesquisar',
    'LBL_TAG_NAME'  =>'Nome da Etiqueta:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Seleccione Etiquetas a eliminar',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Insira o nome de etiqueta a ser pesquisado',
    'LBL_KB_NOTIFICATION' => 'Documento foi publicado',
    'LBL_KB_PUBLISHED_REQUEST' => 'atribuiu-lhe um Documento para aprovação e publicação.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Estado do Documento foi alterado novamente para rascunho',  
    'LBL_CONTRACTS' => 'Contratos',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Seleccione a etiqueta raiz, da árvore',
	'LBL_CLICK_APPLY_TAG' => 'Clique na Etiqueta Aplicar',	
	'LBL_HEAD_TAGS' => 'Etiquetas',
	'LBL_REMOVE' => 'Remover' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Texto de link padrão.',
    'LBL_SELECT_NODE' => 'Por favor escolher um nó',
    'LBL_ARTICLE_EXISTS' => 'O artigo já existe',


);
?>
