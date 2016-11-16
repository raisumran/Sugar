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
    'LBL_MODULE_NAME' => 'Oportunidades',
    'LBL_MODULE_NAME_SINGULAR' => 'Oportunidade',
    'LBL_MODULE_TITLE' => 'Oportunidades: Ecrã Principal',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Oportunidades',
    'LBL_VIEW_FORM_TITLE' => 'Visualizar Oportunidades',
    'LBL_LIST_FORM_TITLE' => 'Lista de Oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade:',
    'LBL_OPPORTUNITY' => 'Oportunidade:',
    'LBL_NAME' => 'Nome da Oportunidade',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Moedas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_DATE_CLOSED' => 'Data de Fecho Esperada',
    'LBL_LIST_AMOUNT' => 'Provável',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Valor Total',
    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_CURRENCY_RATE' => 'Taxa da Moeda',
    'LBL_CURRENCY_ID' => 'ID da Moeda',
    'LBL_CURRENCY_NAME' => 'Nome da Moeda',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo de Moeda',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Oportunidade - Actualizar Moeda',
    'UPDATE_DOLLARAMOUNTS' => 'Actualizar Valores em U.S. Dollar',
    'UPDATE_VERIFY' => 'Verificar Valores',
    'UPDATE_VERIFY_TXT' => 'Verifica se os valores nas oportunidades são válidos com apenas dados numéricos (0-9) e ponto decimal (.)',
    'UPDATE_FIX' => 'Corrigir Valores',
    'UPDATE_FIX_TXT' => 'Tenta corrigir qualquer valor inválido criando um valor com casas decimais a partir do valor actual. Será feito o backup de qualquer valor alterado na base de dados. Caso execute este procedimento e receba uma mensagem de problemas, não execute novamente antes de restaurar o backup, pois de outra forma o backup pode ser sobrescrito com dados inválidos.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualiza os valores em U.S. Dollar nas oportunidades baseado na taxa de cotação actual. Este valor será utilizado para calcular os Gráficos e Listas com Valores de Cotações.',
    'UPDATE_CREATE_CURRENCY' => 'A criar Nova Moeda',
    'UPDATE_VERIFY_FAIL' => 'Verificação de Registos Falhou',
    'UPDATE_VERIFY_CURAMOUNT' => 'Valor Actual',
    'UPDATE_VERIFY_FIX' => 'Executar Correcções pode trazer',
    'UPDATE_INCLUDE_CLOSE' => 'Incluir Registos Fechados',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Novo Valor',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nova Moeda',
    'UPDATE_DONE' => 'Concluído',
    'UPDATE_BUG_COUNT' => 'Encontrados Bugs e Tentativas de Resolver',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs Encontrados',
    'UPDATE_COUNT' => 'Registos Actualizados',
    'UPDATE_RESTORE_COUNT' => 'Valores de Registos Restaurados',
    'UPDATE_RESTORE' => 'Restaurar Valores',
    'UPDATE_RESTORE_TXT' => 'Restaurar valores a partir do backup criado durante a Resolução.',
    'UPDATE_FAIL' => 'Impossível actualizar -',
    'UPDATE_NULL_VALUE' => 'Valor é NULO definindo como 0 -',
    'UPDATE_MERGE' => 'Fundir Moedas',
    'UPDATE_MERGE_TXT' => 'Fundir múltiplas moedas numa moeda única. Caso seja informado de que existem múltiplos registos de moedas para a mesma moeda, você pode optar por fundi-los. Isto também ira fundir moedas para todos os outros módulos.',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_CURRENCY' => 'Moeda:',
    'LBL_DATE_CLOSED' => 'Data Prevista',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Carimbo da Data de Fecho Expectável',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campanha',
    'LBL_NEXT_STEP' => 'Próximo Passo:',
    'LBL_LEAD_SOURCE' => 'Origem da Lead',
    'LBL_SALES_STAGE' => 'Fase de Vendas',
    'LBL_SALES_STATUS' => 'Estado',
    'LBL_PROBABILITY' => 'Probabilidade (%)',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DUPLICATE' => 'Possível Oportunidade Duplicada',
    'MSG_DUPLICATE' => 'Ao criar esta oportunidade pode duplicar uma oportunidade. Você pode seleccionar uma oportunidade da lista abaixo ou clicar em Nova Oportunidade para continuar a criar com os dados entrados previamente.',
    'LBL_NEW_FORM_TITLE' => 'Nova Oportunidade',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LNK_CREATE' => 'Criar Acordo',
    'LNK_OPPORTUNITY_LIST' => 'Oportunidades',
    'ERR_DELETE_RECORD' => 'Um número de registo deve ser especificado para eliminar a oportunidade.',
    'LBL_TOP_OPPORTUNITIES' => 'As Minhas Melhores Oportunidades',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Tem certeza de que pretende eliminar este contacto desta oportunidade?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Tem certeza que deseja remover essa oportunidade deste projecto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_RAW_AMOUNT' => 'Valor Bruto',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectos',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador',
    'LBL_LIST_SALES_STAGE' => 'Fase de Vendas',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'As Minhas Oportunidades Fechadas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades Totais',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades Fechadas Ganhas',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
    'LBL_CREATED_ID' => 'ID Criado Por',
    'LBL_MODIFIED_ID' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado pelo Nome do Utilizador',
    'LBL_CREATED_USER' => 'Utilizador Criado',
    'LBL_MODIFIED_USER' => 'Utilizador Modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanha',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectos',
    'LABEL_PANEL_ASSIGNMENT' => 'Atribuição',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunidades',
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID Campanha',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo de Oportunidade',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nome de Utilizador Atribuído',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID de Utilizador Atribuído',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'ID do Utilizador que Criou',
    'LBL_EXPORT_NAME' => 'Nome',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Emails dos Contactos Relacionados',
    'LBL_FILENAME' => 'Anexo',
    'LBL_PRIMARY_QUOTE_ID' => 'Cotação Primária',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratos',
    'LBL_PRODUCTS' => 'Itens de Linha Cotados',
    'LBL_RLI' => 'Itens de Linha de Receita',
    'LNK_OPPORTUNITY_REPORTS' => 'Relatório de Oportunidades',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
    'LBL_TEAM_ID' => 'ID da Equipa',
    'LBL_TIMEPERIODS' => 'Períodos Temporais',
    'LBL_TIMEPERIOD_ID' => 'ID de Período de Tempo',
    'LBL_COMMITTED' => 'Inserida',
    'LBL_FORECAST' => 'Incluir na Previsão',
    'LBL_COMMIT_STAGE' => 'Etapa de Registo',
    'LBL_WORKSHEET' => 'Folha de Cálculo',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Cotações',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Hierarquia da Oportunidade',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Definir o campo Data Expectavel de Fecho nos registos de Oportunidades resultantes de forma a que sejam os mais recentes nas linhas de Lucro.',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'O Total em Pipeline é',

    'LBL_OPPORTUNITY_ROLE'=>'Função de Oportunidade',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas ou Anexos:',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Ao clicar em Confirmar, irá eliminar todos os dados das Previsões e irá alterar a visualização das Oportunidades. Se não é isto que pretende, clique em cancelar para voltar às definições anteriores.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Se todos os itens de linha Receita estão fechadas e pelo menos um foi ganho,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'a fase de venda da oportunidade é definida como "Fechado Ganho".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Se todos os itens de linha de Receita estão em fase de "Fechado Perdido" Vendas,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'a fase de venda da oportunidade é definida como "Fechado Perdido".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Se algum item de linha Receita ainda estão abertas,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'a Oportunidade será marcada com a Fase de vendas menos avançada.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'O módulo de {{plural_module_name}} permite seguir vendas individuais e linha de itens pertencentes a essas vendas do inicio até ao fim. Cada registo da {{module_name}} representa um cabeçalho para um grupo de {{revenuelineitems_module}} para além de relacionar com outros registos importantes com por exemplo: {{quotes_module}}, {{contacts_module}}, etc. Cada {{revenuelineitems_singular_module}} é uma possível venda de um determinado produto e inclui dados relevantes da venda. Cada {{revenuelineitems_singular_module}} irá tipicamente avançar através das várias Etapas de Vendas até esta ser marcada "Fechada Ganha" ou "Fechada Perdida". O registo de {{module_name}} reflecte a quantidade e a data de fecho expectável dos seus {{revenuelineitems_module}}. As {{plural_module_name}} e {{revenuelineitems_module}} podem ser melhorados utilizando o módulo de Sugar de {{forecasts_singular_module}} para compreender e prever tendências de vendas, bem como criar um focos no trabalho para alcançar quotas de vendas.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'O módulo de {{plural_module_name}} permite seguir vendas individuais e linha de itens pertencentes a essas vendas do inicio até ao fim. Cada registo da {{module_name}} representa um cabeçalho para um grupo de {{revenuelineitems_module}} para além de relacionar com outros registos importantes com por exemplo: {{quotes_module}}, {{contacts_module}}, etc.

- Edite os campos deste registo carregando em um campo individualmente ou no botão Editar.
- Visualize ou modifique ligações para outros registos nos sub-painéis alterando o painel esquerdo do fundo para "Visaulização de Dados".
- Crie e visualize comentários de utilizador e grande alterações do histórico no {{activitystream_singular_module}}  alterando o painel esquerdo do fundo para "Fluxo de Actividade".
- Siga ou torne favorito este registo utilizando os ícones à direita do nome do registo.
- Acções adicionais estão disponíveis no menu de selecção Acções à direita do botão Editar.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'O módulo de {{plural_module_name}} permite seguir vendas individuais e linha de itens pertencentes a essas vendas do inicio até ao fim. Cada registo da {{module_name}} representa um cabeçalho para um grupo de {{revenuelineitems_module}} para além de relacionar com outros registos importantes com por exemplo: {{quotes_module}}, {{contacts_module}}, etc.

Para criar uma {{module_name}}:
1. Fornecer valores para os campos como desejado.
 - Campos marcados como "Obrigatórios" deverão ser preenchidos antes de gravar.
 - Carregar "Mostrar mais" para mostrar campos adicionais se necessário.

2. Carregar em "Gravar" para finalizar o novo registo e retornar à página anterior.
 - Escolher "Gravar e ver" para abrir o novo {{module_name}} na visualização do registo.
 - Escolher "Gravar e criar novo" para criar imediatamente outro novo {{module_name}}.
3. Depois de gravar, use o sub-painel de {{revenuelineitems_module}} para adicionais itens de linha à {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizar para o Marketo&reg;',
    'LBL_MKTO_ID' => 'ID da Marketo Lead',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 Oportunidades de Venda',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Mostrar as 10 melhores oportunidades num gráfico de bolhas.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'As Minhas Oportunidades',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "As Oportunidades da minha Equipa",
);
