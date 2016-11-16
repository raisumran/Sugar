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
    'LBL_MODULE_TITLE' => 'Oportunidades: Tela Principal',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Oportunidades',
    'LBL_VIEW_FORM_TITLE' => 'Visualizar Oportunidades',
    'LBL_LIST_FORM_TITLE' => 'Lista de Oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade:',
    'LBL_OPPORTUNITY' => 'Oportunidade:',
    'LBL_NAME' => 'Nome da Oportunidade:',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Moedas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_DATE_CLOSED' => 'Data Prevista de fechamento',
    'LBL_LIST_AMOUNT' => 'Desejável',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Valor Total',
    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_CURRENCY_RATE' => 'Taxa Moeda',
    'LBL_CURRENCY_ID' => 'ID Moeda',
    'LBL_CURRENCY_NAME' => 'Nome da Moeda',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo da Moeda:',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Oportunidade - Atualizar Moeda',
    'UPDATE_DOLLARAMOUNTS' => 'Atualizar Valores em U.S. Dollar',
    'UPDATE_VERIFY' => 'Verificar Valores',
    'UPDATE_VERIFY_TXT' => 'Verifica se os valores nas oportunidades são válidos com apenas dados numéricos (0-9) e ponto decimal (.)',
    'UPDATE_FIX' => 'Corrigir Valores',
    'UPDATE_FIX_TXT' => 'Tenta corrigir qualquer valor inválido criando um valor com casas decimais a partir do valor atual. Será feito o backup de qualquer valor alterado na base de dados. Caso execute este procedimento e receba uma mensagem de problemas, não execute novamente antes de restaurar o backup, pois de outra forma o backup pode ser sobrescrito com dados inválidos.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'atualiza os valores em U.S. Dollar nas oportunidades baseado na taxa de cotação atual. Este valor será utilizado para calcular os Gráficos e Listas com Valores de Cotações.',
    'UPDATE_CREATE_CURRENCY' => 'A criar Nova Moeda',
    'UPDATE_VERIFY_FAIL' => 'Verificação de Registros Falhou',
    'UPDATE_VERIFY_CURAMOUNT' => 'Valor atual',
    'UPDATE_VERIFY_FIX' => 'Executar Correções pode trazer',
    'UPDATE_INCLUDE_CLOSE' => 'Incluir Registros Fechados',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Novo Valor',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nova Moeda',
    'UPDATE_DONE' => 'Concluído',
    'UPDATE_BUG_COUNT' => 'Encontrados Bugs e Tentativas de Resolver',
    'UPDATE_BUGFOUND_COUNT' => 'Bugs Encontrados',
    'UPDATE_COUNT' => 'Registros atualizados',
    'UPDATE_RESTORE_COUNT' => 'Valores de Registros Restaurados',
    'UPDATE_RESTORE' => 'Restaurar Valores',
    'UPDATE_RESTORE_TXT' => 'Restaurar valores a partir do backup criado durante a Resolução.',
    'UPDATE_FAIL' => 'Impossível Atualizar -',
    'UPDATE_NULL_VALUE' => 'Valor é NULO definindo como 0 -',
    'UPDATE_MERGE' => 'Fundir Moedas',
    'UPDATE_MERGE_TXT' => 'Fundir múltiplas moedas numa moeda única. Caso seja informado de que existem múltiplos Registros de moedas para a mesma moeda, você pode optar por fundi-los. Isto também ira fundir moedas para todos os outros módulos.',
    'LBL_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_DATE_CLOSED' => 'Data Prevista',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Data prevista de fechamento',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campanha',
    'LBL_NEXT_STEP' => 'Próximo Passo',
    'LBL_LEAD_SOURCE' => 'Origem do Potencial',
    'LBL_SALES_STAGE' => 'Fases da Venda',
    'LBL_SALES_STATUS' => 'Estado',
    'LBL_PROBABILITY' => 'Probabilidade (%)',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DUPLICATE' => 'Possível Oportunidade Duplicada',
    'MSG_DUPLICATE' => 'Ao criar esta oportunidade pode duplicar uma oportunidade. Você pode selecionar uma oportunidade da lista abaixo ou clicar em Nova Oportunidade para continuar a criar com os dados entrados previamente.',
    'LBL_NEW_FORM_TITLE' => 'Nova Oportunidade',
    'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
    'LNK_CREATE' => 'Criar Negociação',
    'LNK_OPPORTUNITY_LIST' => 'Oportunidades',
    'ERR_DELETE_RECORD' => 'Um número de Registro deve ser especificado para eliminar a oportunidade.',
    'LBL_TOP_OPPORTUNITIES' => 'As Minhas Melhores Oportunidades',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Tem certeza de que pretende eliminar este contato desta oportunidade?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Tem certeza que deseja remover essa oportunidade deste projeto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_RAW_AMOUNT' => 'Valor Bruto',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário',
    'LBL_LIST_SALES_STAGE' => 'Fases da Venda',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'As Minhas Oportunidades Fechadas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades Totais',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades Fechadas Ganhas',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
    'LBL_CREATED_ID' => 'ID Criado Por',
    'LBL_MODIFIED_ID' => 'Modificado por',
    'LBL_MODIFIED_NAME' => 'Modificado pelo Nome do Usuário',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Usuário Modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanha',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LABEL_PANEL_ASSIGNMENT' => 'Atribuição',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunidades',
    'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'ID da Campanha',
    'LBL_OPPORTUNITY_TYPE' => 'Tipo de oportunidade',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'nome de usuário atribuído',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuário Atribuído',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
    'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
    'LBL_EXPORT_NAME' => 'Nome',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'E-mails relacionados',
    'LBL_FILENAME' => 'Anexo',
    'LBL_PRIMARY_QUOTE_ID' => 'Primeira Cotação',
    'LBL_CONTRACTS' => 'Contratos',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratos',
    'LBL_PRODUCTS' => 'Produtos',
    'LBL_RLI' => 'Itens da linha de Receita',
    'LNK_OPPORTUNITY_REPORTS' => 'Relatório de Oportunidades',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
    'LBL_TEAM_ID' => 'ID da Equipe',
    'LBL_TIMEPERIODS' => 'Períodos',
    'LBL_TIMEPERIOD_ID' => 'Período',
    'LBL_COMMITTED' => 'Comprometido',
    'LBL_FORECAST' => 'Incluir na Previsão',
    'LBL_COMMIT_STAGE' => 'Fase comprometimento',
    'LBL_WORKSHEET' => 'Planilha',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Cotações',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Hierarquia da Oportunidade',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Configure o campo Data de Fechamento Esperada nos registros de Oportunidade resultantes para que sejam as primeiras ou últimas datas de fechamento dos Itens da Linha de Receita existentes',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'O Total do Funil é',

    'LBL_OPPORTUNITY_ROLE'=>'Perfil de Oportunidade',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Ao clicar em Confirmar, você estará apagando TODOS os dados de Previsões e alterando sua Visualização de Oportunidades. Se isso não é o que você quer fazer, clique em Cancelar para retornar às configurações anteriores.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Se todos os Itens da Linha de Receita estiverem fechados e pelo menos um tiver vencido,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'o Estágio de Vendas da Oportunidade é configurado para "Vitória Fechada".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Set todos os Itens da Linha de Receita estiverem no Estágio de Vendas "Perda Fechada",',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'o Estágio de Vendas da Oportunidade é configurado para "Perda Fechada".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Se algum Item da Linha de Receita ainda estiver aberto,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'a Oportunidade será marcada com o Estágio de Vendas menos avançado.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'O {{}} plural_module_name módulo é composto por itens de linha individuais de negócio que estão incluídos em um {{}} opportunities_singular_module registro e rastreados através do ciclo de vida de vendas. O {{}} opportunities_singular_module registro atua como um cabeçalho para um ou mais {{}} MODULE_NAME registros. Isto permite uma maior granularidade quando se trabalha {{opportunities_module}} e {{forecasts_singular_module}} ing uma vez que cada item de linha dentro de uma {{opportunities_singular_module}} pode ter sua fase de vendas própria e probabilidade, além de ser incluídos ou excluídos de um usuário {{forecasts_singular_module}} {{ing worksheet_module}} individualmente. Cada {{}} module_name pode estar relacionado a um produto de sua empresa Catálogo de Produtos. Isso fará com que os valores do produto para preencher automaticamente os campos correspondentes no {{}} module_name.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'O {{}} plural_module_name módulo é composto por itens de linha individuais de negócio que estão incluídos em um {{}} opportunities_singular_module registro e rastreados através do ciclo de vida de vendas. O {{}} opportunities_singular_module registro atua como um cabeçalho para um ou mais {{}} MODULE_NAME registros. - Editar campos deste registo, clicando em um campo individual ou no botão Editar. - Exibir ou modificar as ligações a outros registros nos subpainéis alternando no painel esquerdo inferior para "Ver dados". - Fazer e ver comentários de usuários e histórico de alterações de registro no {{}} activitystream_singular_module alternando no painel esquerdo inferior para "Atividade Stream". - Siga ou favorito este registro usando os ícones à direita do nome do registro. - Estão disponíveis ações adicionais no menu Ações suspensas à direita do botão Editar.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'O {{}} plural_module_name módulo é composto por itens de linha individuais de negócio que estão incluídos em um {{}} opportunities_singular_module registro e rastreados através do ciclo de vida de vendas. O {{}} opportunities_singular_module registro atua como um cabeçalho para um ou mais {{}} MODULE_NAME registros. Para criar uma {{}} module_name: 1. Fornecer valores para os campos conforme desejado. - Os campos marcados "necessária" deve ser preenchido antes de salvar. - Clique em "Ver Mais" para expor campos adicionais, se necessário. 2. Clique em "Salvar" para finalizar o novo álbum e voltar para a página anterior. - Escolha "Salvar e visualizar" para abrir a nova {{}} module_name no modo de registro. - Escolha "Salvar e criar novo" para criar imediatamente um outro novo {{}} module_name.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizar com Marketo®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '10 Principais Oportunidades de Vendas',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Exibe as dez principais Oportunidades em um gráfico de bolhas.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Minhas Oportunidades',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Minhas Oportunidades da Equipe",
);
