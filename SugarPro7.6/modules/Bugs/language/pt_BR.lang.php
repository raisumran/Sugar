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
  'LBL_MODULE_NAME' => 'Bug Tracker',
  'LBL_MODULE_NAME_SINGULAR'	=> 'Bug:',
  'LBL_MODULE_TITLE' => 'Bug Tracker: Tela Principal',
  'LBL_MODULE_ID' => 'Bug Tracker',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Bugs',
  'LBL_LIST_FORM_TITLE' => 'Listar Bugs',
  'LBL_NEW_FORM_TITLE' => 'Criar Bug',
  'LBL_CONTACT_BUG_TITLE' => 'Contato-Bug:',
  'LBL_SUBJECT' => 'Assunto:',
  'LBL_BUG' => 'Bug:',
  'LBL_BUG_NUMBER' => 'Número do Bug:',
  'LBL_NUMBER' => 'Número:',
  'LBL_STATUS' => 'Estado:',
  'LBL_PRIORITY' => 'Prioridade:',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_CONTACT_NAME' => 'Nome do Contato',
  'LBL_BUG_SUBJECT' => 'Assunto do Bug:',
  'LBL_CONTACT_ROLE' => 'Função:',
  'LBL_LIST_NUMBER' => 'Núm.',
  'LBL_LIST_SUBJECT' => 'Assunto',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_PRIORITY' => 'Prioridade',
  'LBL_LIST_RELEASE' => 'Release',
  'LBL_LIST_RESOLUTION' => 'Resolução',
  'LBL_LIST_LAST_MODIFIED' => 'Última Modificação',
  'LBL_INVITEE' => 'Contacts',
  'LBL_TYPE' => 'Tipo:',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_RESOLUTION' => 'Resolução:',
  'LBL_RELEASE' => 'Versão:',
  'LNK_NEW_BUG' => 'Reportar Bug',
  'LNK_CREATE'  => 'Reportar Bug',
  'LNK_CREATE_WHEN_EMPTY'    => 'Reportar um Bug agora.',
  'LNK_BUG_LIST' => 'Bugs',
  'LBL_SHOW_MORE' => 'Exibir mais Bugs',
  'NTC_REMOVE_INVITEE' => 'Tem a certeza de que pretende eliminar este contato deste Bug?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este Bug desta conta?',
  'ERR_DELETE_RECORD' => 'Um número de registo necessita ser especificado para eliminar um Bug.',
  'LBL_LIST_MY_BUGS' => 'Os Meus Bugs',
  'LNK_IMPORT_BUGS' => 'Importar Bugs',
  'LBL_FOUND_IN_RELEASE' => 'Encontrado na versão:',
  'LBL_FIXED_IN_RELEASE' => 'Corrigido na versão:',
  'LBL_LIST_FIXED_IN_RELEASE' => 'Corrigido na versão',
  'LBL_WORK_LOG' => 'Log de trabalho:',
  'LBL_SOURCE' => 'Origem:',
  'LBL_PRODUCT_CATEGORY' => 'Categoria:',

  'LBL_CREATED_BY' => 'Criado por:',
  'LBL_DATE_CREATED' => 'Data de criação:',
  'LBL_MODIFIED_BY' => 'Modificado por:',
  'LBL_DATE_LAST_MODIFIED' => 'Data de modificação:',

  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
  'LBL_LIST_CONTACT_NAME' => 'Nome do Contato:',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
  'LBL_LIST_PHONE' => 'Telefone',
  'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este Contato deste Bug?',

  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bug Tracker',
  'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
  'LBL_HISTORY_SUBPANEL_TITLE'=>'Histórico',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
  'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
  'LBL_SYSTEM_ID' => 'Id do Sistema',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
	'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',

	'LNK_BUG_REPORTS' => 'Relatórios de Bug',
	'LBL_SHOW_IN_PORTAL' => 'Mostrar no Portal',
	'LBL_BUG_INFORMATION' => 'Informação da Tarefa',

    //For export labels
	'LBL_FOUND_IN_RELEASE_NAME' => 'Encontrado em nome',
    'LBL_PORTAL_VIEWABLE' => 'Portal visível',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'nome de usuário atribuído',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuário Atribuído',
    'LBL_EXPORT_FIXED_IN_RELEASE_NAMR' => 'Ajustado em nome',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',


    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'O {{}} plural_module_name módulo é utilizado para controlar e gerenciar os problemas relacionados com o produto, comumente referido como {{}} plural_module_name ou defeitos, seja encontrada internamente ou relatados pelos clientes. O {{}} plural_module_name pode ser ainda triagem, acompanhando o encontrados e corrigidos no lançamento. O {{}} plural_module_name módulo oferece aos usuários uma maneira de rever rapidamente todos os detalhes do {{}} module_name eo processo a ser utilizado para corrigi-lo. Uma vez por {{}} module_name é criado ou enviado, você pode visualizar e editar as informações relativas à {{}} module_name via {{}} module_name &#39;s modo de registro. Cada {{}} module_name registro pode então relacionar com outros registros de açúcar, como {{}} calls_module, {{}} contacts_module, {{}} cases_module, e muitos outros.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'O {{}} plural_module_name módulo é utilizado para controlar e gerenciar os problemas relacionados com o produto, comumente referido como {{}} plural_module_name ou defeitos, seja encontrada internamente ou relatados pelos clientes. - Editar campos deste registo, clicando em um campo individual ou no botão Editar. - Exibir ou modificar as ligações a outros registros nos subpainéis alternando no painel esquerdo inferior para "Ver dados". - Fazer e ver comentários de usuários e histórico de alterações de registro no {{}} activitystream_singular_module alternando no painel esquerdo inferior para "Atividade Stream". - Siga ou favorito este registro usando os ícones à direita do nome do registro. - Estão disponíveis ações adicionais no menu Ações suspensas à direita do botão Editar.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'O {{}} plural_module_name módulo é utilizado para controlar e gerenciar os problemas relacionados com o produto, comumente referido como {{}} plural_module_name ou defeitos, seja encontrada internamente ou relatados pelos clientes. Para criar uma {{}} module_name: 1. Fornecer valores para os campos conforme desejado. - Os campos marcados "necessária" deve ser preenchido antes de salvar. - Clique em "Ver Mais" para expor campos adicionais, se necessário. 2. Clique em "Salvar" para finalizar o novo álbum e voltar para a página anterior. - Escolha "Salvar e visualizar" para abrir a nova {{}} module_name no modo de registro. - Escolha "Salvar e criar novo" para criar imediatamente um outro novo {{}} module_name.',
);
