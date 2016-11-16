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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'pt_pt Um número de registo deve ser especificado para eliminar a lead.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Descrição da Entidade',
    'LBL_ACCOUNT_ID'=>'ID da Conta',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
    'LBL_ADD_BUSINESSCARD' => 'Adicionar Cartão de Visita',
    'LBL_ADDRESS_INFORMATION' => 'Informação de Endereço',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade Endereço Alternativo',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País Endereço Alternativo',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal Endereço Alternativo',
    'LBL_ALT_ADDRESS_STATE' => 'Estado Endereço Alternativo',
    'LBL_ALT_ADDRESS_STREET_2' => 'Rua Endereço Alternativo 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Rua Endereço Alternativo 3',
    'LBL_ALT_ADDRESS_STREET' => 'Rua Endereço Alternativo',
    'LBL_ALTERNATE_ADDRESS' => 'Endereço Alternativo:',
    'LBL_ANY_ADDRESS' => 'Qualquer Endereço:',
    'LBL_ANY_EMAIL' => 'Outro E-mail qualquer:',
    'LBL_ANY_PHONE' => 'Outro Telefone:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
    'LBL_BACKTOLEADS' => 'Voltar às Leads',
    'LBL_BUSINESSCARD' => 'Converter Lead',
    'LBL_CITY' => 'Cidade:',
    'LBL_CONTACT_ID' => 'ID do Contacto',
    'LBL_CONTACT_INFORMATION' => 'Informação da Tarefa',
    'LBL_CONTACT_NAME' => 'Nome da Lead:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Oportunidade-Lead:',
    'LBL_CONTACT_ROLE' => 'Função:',
    'LBL_CONTACT' => 'Lead:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Converter',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Gravar e Converter',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(opcional)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Não tem acessos de edição para o módulo necessário para converter a lead: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'À procura por duplicados...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ignorar e criar novo',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Voltar para os duplicados',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Criar Novo',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Pesquisar',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} duplicados encontrados',
    'LBL_CONVERT_CREATE_NEW' => 'Novo {{moduleName}}',
    'LBL_CONVERT_ASSOCIATE_MODULE' => 'Associar {{moduleName}}',
    'LBL_CONVERT_ASSOCIATED_MODULE' => 'Associado {{moduleName}}',
    'LBL_CONVERT_MODULE_ASSOCIATED' => '{{moduleName}} Associado',
    'LBL_CONVERT_MODULE_ASSOCIATED_NEW_SUCCESS' => 'Associou o {{moduleNameLower}} {{recordName}} mas não será criado antes que acabe e grave.',
    'LBL_CONVERT_MODULE_ASSOCIATED_SUCCESS' => 'Associou o {{moduleNameLower}} {{recordName}} mas não será ligado antes que acabe e grave.',
    'LBL_CONVERT_RESET_PANEL' => 'Reiniciar',
    'LBL_CONVERTED_ACCOUNT'=>'Entidade Convertida:',
    'LBL_CONVERTED_CONTACT' => 'Contacto Convertido:',
    'LBL_CONVERTED_OPP'=>'Oportunidade Convertida:',
    'LBL_CONVERTED'=> 'Convertido',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converter Lead',
    'LBL_CONVERTLEAD' => 'Converter Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Atenção: O estado da Lead que está prestes a converter é "Convertido". Registos de contacto e/ou entidade podem já ter sido criado a partir da Lead. Se quiser continuar com a conversão da Lead, clique em Gravar. Para voltar à Lead sem a converter, clique em Cancelar.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Contacto possível:',
    'LBL_CONVERTLEAD_ERROR' => 'Impossível de converter a lead',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Converteu a lead {{leadName}} com sucesso, mas ocorreu um erro ao carregar os anexos em um ou mais registos',
    'LBL_CONVERTLEAD_SUCCESS' => 'Converteu a lead {{leadName}} com sucesso',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_NEW' => 'Criou um novo registo em',
	'LBL_CREATED_ACCOUNT' => 'Criada uma nova entidade',
    'LBL_CREATED_CALL' => 'Criada uma nova chamada telefónica',
    'LBL_CREATED_CONTACT' => 'Criado um novo contacto',
    'LBL_CREATED_MEETING' => 'Criada uma nova reunião',
    'LBL_CREATED_OPPORTUNITY' => 'Criada uma nova oportunidade',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Leads',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION_INFORMATION' => 'Informação da Descrição',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DO_NOT_CALL' => 'Não Telefonar:',
    'LBL_DUPLICATE' => 'Leads Semelhantes',
    'LBL_EMAIL_ADDRESS' => 'Endereço de E-mail',
    'LBL_EMAIL_OPT_OUT' => 'Não Deseja receber E-mails:',
    'LBL_EXISTING_ACCOUNT' => 'Usada uma entidade existente',
    'LBL_EXISTING_CONTACT' => 'Usado um contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Usada uma oportunidade existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_FULL_NAME' => 'Nome Completo:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Histórico',
    'LBL_HOME_PHONE' => 'Telefone de Casa:',
    'LBL_IMPORT_VCARD' => 'Importar a partir de vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Lead criada com sucesso a partir de um vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Criar nova lead automaticamente importando um vCard do seu sistema de ficheiros.',
    'LBL_INVALID_EMAIL'=>'E-mail Inválido:',
    'LBL_INVITEE' => 'Relatórios Directos',
    'LBL_LAST_NAME' => 'Último Nome:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrição da Fonte da Lead:',
    'LBL_LEAD_SOURCE' => 'Origem da Lead:',
    'LBL_LIST_ACCEPT_STATUS' => 'Estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CONTACT_NAME' => 'Nome da Lead',
    'LBL_LIST_CONTACT_ROLE' => 'Função',
    'LBL_LIST_DATE_ENTERED' => 'Data de Introdução',
    'LBL_LIST_EMAIL_ADDRESS' => 'Outro E-mail:',
    'LBL_LIST_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_VIEW_FORM_TITLE' => 'Visualização da Lead',
    'LBL_LIST_FORM_TITLE' => 'Lista de Leads',
    'LBL_LIST_LAST_NAME' => 'Último Nome:',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrição da Fonte da Lead',
    'LBL_LIST_LEAD_SOURCE' => 'Origem da Lead',
    'LBL_LIST_MY_LEADS' => 'As Minhas Leads',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PHONE' => 'Telefone do Escritório:',
    'LBL_LIST_REFERED_BY' => 'Indicado Por',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Telemóvel:',
    'LBL_MODULE_NAME' => 'Leads',
    'LBL_MODULE_NAME_SINGULAR' => 'Lead',
    'LBL_MODULE_TITLE' => 'Leads: Ecrã Principal',
    'LBL_NAME' => 'Nome:',
    'LBL_NEW_FORM_TITLE' => 'Nova Lead',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nova Palavra-passe para o Portal:',
    'LBL_OFFICE_PHONE' => 'Telefone da Empresa',
    'LBL_OPP_NAME' => 'Nome da Oportunidade:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Valor da Oportunidade:',
    'LBL_OPPORTUNITY_ID'=>'ID da Oportunidade',
    'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_PORTAL_ACTIVE' => 'Portal Activo:',
    'LBL_PORTAL_APP'=> 'Aplicação do Portal',
    'LBL_PORTAL_INFORMATION' => 'Informação do Portal',
    'LBL_PORTAL_NAME' => 'Nome no Portal:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Palavra-passe do Portal está definida:',
    'LBL_POSTAL_CODE' => 'Código Postal',
    'LBL_STREET' => 'Rua',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade Endereço Principal',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País Endereço Principal',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal Endereço Principal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado Endereço Principal',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Rua Endereço Principal 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Rua Endereço Principal 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua Endereço Principal',
    'LBL_PRIMARY_ADDRESS' => 'Endereço Principal:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Registo {{first_name}} {{last_name}} foi gravado.',
    'LBL_REFERED_BY' => 'Indicado Por:',
    'LBL_REPORTS_TO_ID'=>'Reporta ao ID',
    'LBL_REPORTS_TO' => 'Reporta a:',
    'LBL_REPORTS_FROM' => 'Relatórios De:',
    'LBL_SALUTATION' => 'Saudação',
    'LBL_MODIFIED'=>'Modificado Por',
	'LBL_MODIFIED_ID'=>'Id de Modificado Por',
	'LBL_CREATED'=>'Criado por',
	'LBL_CREATED_ID'=>'ID Criado por',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Lead',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar as Leads Marcadas',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar as Leads Marcadas',
    'LBL_STATE' => 'Estado:',
    'LBL_STATUS_DESCRIPTION' => 'Descrição do Estado:',
    'LBL_STATUS' => 'Estado:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_UNCONVERTED'=> 'Desconvertido',
    'LNK_IMPORT_VCARD' => 'Criar a partir de um vCard',
    'LNK_LEAD_LIST' => 'Leads',
    'LNK_NEW_ACCOUNT' => 'Nova Entidade',
    'LNK_NEW_APPOINTMENT' => 'Criar Novo Compromisso',
    'LNK_NEW_CONTACT' => 'Novo Contacto',
    'LNK_NEW_LEAD' => 'Nova Lead',
    'LNK_NEW_NOTE' => 'Nova Nota',
    'LNK_NEW_TASK' => 'Nova Tarefa',
    'LNK_NEW_CASE' => 'Nova Ocorrência',
    'LNK_NEW_CALL' => 'Nova Chamada Telefónica',
    'LNK_NEW_MEETING' => 'Nova Reunião',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
	'LNK_SELECT_ACCOUNTS' => '<b>OU</b> Seleccione uma Entidade',
    'LNK_SELECT_CONTACTS' => '<b>OU</b> Seleccione Contacto',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar endereço alternativo para endereço principal',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar o endereço principal para endereço alternativo',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'A criação de uma Oportunidade requer uma Entidade.n Por favor crie uma nova ou seleccione uma já existente.',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza que pretende remover esta lead desta ocorrência?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Tem a certeza de que pretende remover este registo como um relatório directo?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Registo de Campanha',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Campanhas com Sucesso:',
    'LBL_TARGET_BUTTON_LABEL'=>'Definir como Target',
    'LBL_TARGET_BUTTON_TITLE'=>'Definir como Target',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Campanha',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador',
    'LBL_PROSPECT_LIST' => 'Lista de Potenciais Clientes',
    'LBL_PROSPECT' => 'Alvo',
    'LBL_CAMPAIGN_LEAD' => 'Campanhas',
	'LNK_LEAD_REPORTS' => 'Relatórios de Leads',
    'LBL_BIRTHDATE' => 'Data de Nascimento:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Obrigado Pela Sua Submissão.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Pedimos desculpa, de momento o servidor está indisponível, por favor tente novamente mais tarde.',
    'LBL_ASSISTANT_PHONE' => 'Telefone do Assistente',
    'LBL_ASSISTANT' => 'Assistente',
    'LBL_REGISTRATION' => 'Registo',
    'LBL_MESSAGE' => 'Por favor introduza a sua informação abaixo. Informação e/ou uma entidade será criada para a sua aprovação pendente.',
    'LBL_SAVED' => 'Obrigado pelo seu registo. A sua entidade será criada e alguém irá contactá-lo brevemente.',
    'LBL_CLICK_TO_RETURN' => 'Regressar ao Portal',
    'LBL_CREATED_USER' => 'Utilizador Criado',
    'LBL_MODIFIED_USER' => 'Utilizador Modificado',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campanhas',
    'LBL_CONVERT_MODULE_NAME' => 'Módulo',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Módulo',
    'LBL_CONVERT_REQUIRED' => 'Obrigatório',
    'LBL_CONVERT_SELECT' => 'Permitir a selecção',
    'LBL_CONVERT_COPY' => 'Copiar dados',
    'LBL_CONVERT_EDIT' => 'Editar',
    'LBL_CONVERT_DELETE' => 'Eliminar',
    'LBL_CONVERT_ADD_MODULE' => 'Adicionar Módulo',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Editar layout de conversão',
    'LBL_CREATE' => 'Criar',
    'LBL_SELECT' => '<b>OU</b> Seleccione',
	'LBL_WEBSITE' => 'Site de Internet',
	'LNK_IMPORT_LEADS' => 'Importar Leads',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Aviso: O ecrã de conversão actual contém campos personalizados. Quando personalizar a tela de conversão no Studio pela primeira vez, vai precisar adicionar campos personalizados para o layout, quando necessário. Os campos personalizados não aparecerão automaticamente no layout, como faziam anteriormente.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'O módulo no qual será criado um novo registo',
	'LBL_REQUIRED_TIP' 	=> 'Todos os módulos obrigatórios devem ser criados ou seleccionados para a Lead poder ser convertida.',
	'LBL_COPY_TIP'		=> 'Quando seleccionado, campos da Lead serão copiados para campos com o mesmo nome nos registos a criar.',
	'LBL_SELECTION_TIP' => 'Módulos com um campo relate nos Contactos podem ser seleccionados em vez de criados durante o processo de conversão.',
	'LBL_EDIT_TIP'		=> 'Modificar o layout de conversão para este módulo.',
	'LBL_DELETE_TIP'	=> 'Remover este módulo do layout de conversão.',

    'LBL_ACTIVITIES_MOVE'   => 'Mover Actividades para',
    'LBL_ACTIVITIES_COPY'   => 'Copiar Actividades para',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Seleccionar o registo para mover as actividades da Lead. Tarefas, Chamadas, Reuniões, Notas e Email serão movidas para o(s) registo(s) seleccionado(s).",
    'LBL_ACTIVITIES_COPY_HELP'   => "Seleccionar os registos para criar copias das actividades da Lead. Novas Tarefas, Chamadas, Reuniões, Notas serão criadas para cada um do(s) registo(s) seleccionado(s). Emails serão relacionados com os registos seleccionados.",
    //For export labels
    'LBL_PHONE_HOME' => 'Telefone de Casa',
    'LBL_PHONE_MOBILE' => 'Telemóvel',
    'LBL_PHONE_WORK' => 'Telefone de Trabalho',
    'LBL_PHONE_OTHER' => 'Outro Telefone',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'ID Campanha',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome de Utilizador Atribuído',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID de Utilizador Atribuído',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'ID do Utilizador que Criou',
    'LBL_EXPORT_PHONE_MOBILE' => 'Telefone Móvel',
    'LBL_EXPORT_EMAIL2'=>'Outro Endereço de Email',
	'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Introduza uma Data' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'A carregar' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'Id Principal de D&B',
    'LBL_DNB_BAL_PREVIEW' => 'Pré-visualização de Leads',
    'LBL_DNB_BAL_RSLT_CNT' => 'Leads',
    'LBL_DNB_BAL_RSLT_HEADER' => 'D&B: Informação do leads',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas ou Anexos:',

    'LBL_HELP_CONVERT_TITLE' => 'Converter {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'O módulo de {{plural_module_name}} consiste em possível interessados num produto ou serviço que a sua organização fornece. Assim que a {{module_name}} se qualifica como uma venda {{opportunities_singular_module}}, {{plural_module_name}} podem ser convertidas em {{contacts_module}}, {{opportunities_module}} e {{accounts_module}}. Existem várias maneiras que podem criar  {{plural_module_name}} no Sugar, via o módulo de {{plural_module_name}}, duplicação, importação de {{plural_module_name}}, etc. Assim que a {{module_name}} é criada, poderá visualizar e editar a informação pertencente à {{module_name}} via a visualização de registos de {{plural_module_name}}.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'O módulo de {{plural_module_name}} consiste em possível interessados num produto ou serviço que a sua organização fornece.

Edite os campos deste registo carregando em um campo individualmente ou no botão Editar.
- Visualize ou modifique ligações para outros registos nos sub-paineis alterando o painel esquerdo do fundo para "Visaulização de Dados".
- Crie e visualize comentários de utilizador e grande alterações do histórico no {{activitystream_singular_module}}  alterando o painel esquerdo do fundo para "Fluxo de Actividade".
- Siga ou torne favorito este registo utilizando os ícones à direita do nome do registo.
- Acções adicionais estão disponíveis no menu de selecção Acções à direita do botão Editar.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'O módulo de {{plural_module_name}} consiste em possível interessados num produto ou serviço que a sua organização fornece. Assim que a {{module_name}} se qualifica como uma venda {{opportunities_singular_module}}, pode ser convertida para um {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}}, ou outro registo.

Para criar uma {{module_name}}:
1. Fornecer valores para os campos como desejado.
 - Campos marcados como "Obrigatórios" deverão ser preenchidos antes de gravar.
 - Carregar "Mostrar mais" para mostrar campos adicionais se necessário.

2. Carregar em "Gravar" para finalizar o novo registo e retornar à página anterior.
 - Escolher "Gravar e ver" para abrir a nova {{module_name}} na visualização do registo.
 - Escolher "Gravar e criar novo" para criar imediatamente outro novo {{module_name}}.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'O Sugar permite que converta {{plural_module_name}} em {{contacts_module}}, {{accounts_module}}, e outros módulos assim que {{module_name}} cumpra os seus critérios de qualificação.

Avance passo a passo por cada módulo modificando os campos e depois confirme os valores do novo registo carregando em cada botão "Associar".

Se o Sugar detectar que existe um registo que seja idêntico à informação da {{module_name}}, terá a opção de escolher criar um duplicado e confirmar a selecção com o botão Associar ou carregar em "Ignorar e criar novo", procedendo como normalmente.

Depois de confirmar cada módulo requisitado escolhido, carregar no botão Gravar e Converter no topo para finalizar a conversão.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizar para o Marketo&reg;',
    'LBL_MKTO_ID' => 'ID da Marketo Lead',
    'LBL_MKTO_LEAD_SCORE' => 'Pontuação da Lead',

    'LBL_FILTER_LEADS_REPORTS' => 'Relatórios de Leads',
);