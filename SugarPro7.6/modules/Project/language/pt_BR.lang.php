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



$mod_strings = array (
	'LBL_MODULE_NAME' => 'Projetos',
	'LBL_MODULE_NAME_SINGULAR' => 'Projeto',
	'LBL_MODULE_TITLE' => 'Projetos: Tela Principal',
	'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Projetos',
    'LBL_LIST_FORM_TITLE' => 'Lista de Projetos',
    'LBL_HISTORY_TITLE' => 'Histórico',

	'LBL_ID' => 'Id',
	'LBL_DATE_ENTERED' => 'Data de Introdução',
	'LBL_DATE_MODIFIED' => 'Data de Modificação',
	'LBL_ASSIGNED_USER_ID' => 'Atribuído A:',
    'LBL_ASSIGNED_USER_NAME' => 'Atribuído a:',
	'LBL_MODIFIED_USER_ID' => 'ID Modificado por',
	'LBL_CREATED_BY' => 'Criado por',
	'LBL_TEAM_ID' => 'Equipe',
	'LBL_NAME' => 'Nome:',
    'LBL_PDF_PROJECT_NAME' => 'Nome do Projeto:',
	'LBL_DESCRIPTION' => 'Descrição:',
	'LBL_DELETED' => 'Eliminado',
	'LBL_DATE_START' => 'Data Início:',
	'LBL_DATE_END' => 'Data Final',
	'LBL_PRIORITY' => 'Prioridade:',
    'LBL_STATUS' => 'Estado:',
    'LBL_MY_PROJECTS' => 'Os Meus Projetos',
    'LBL_MY_PROJECT_TASKS' => 'As Minhas Tarefas de Projeto Abertas',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => 'Estimativa de Esforço Total (hrs):',
	'LBL_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs):',

	'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_DAYS' => 'dias',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuído a',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Estimativa de Esforço Total (hrs)',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs)',
    'LBL_LIST_UPCOMING_TASKS' => 'Próximas Tarefas (1 Semana)',
    'LBL_LIST_OVERDUE_TASKS' => 'Tarefas Atrasadas',
    'LBL_LIST_OPEN_CASES' => 'Casos Em Aberto',
    'LBL_LIST_END_DATE' => 'Data Final',
    'LBL_LIST_TEAM_ID' => 'equipe',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projeto',
	'LBL_CONTACT_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Contas',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
	'LBL_QUOTE_SUBPANEL_TITLE' => 'Cotações',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novo Projeto',

	'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Tem certeza de que pretende eliminar este contato do Projeto?',

	'LNK_NEW_PROJECT'	=> 'Criar Novo Projeto',
	'LNK_PROJECT_LIST'	=> 'Lista de Projetos',
	'LNK_NEW_PROJECT_TASK'	=> 'Criar Nova Tarefa de Projeto',
	'LNK_PROJECT_TASK_LIST'	=> 'Tarefas de Projeto',
    'LNK_PROJECT_DASHBOARD' => 'Painel Os Meus Projetos',
    'LNK_PROJECT_TASKS_DASHBOARD'   => 'Painel As Minhas Tarefas de Projeto',   
	'LNK_NEW_PROJECT_TEMPLATES' => 'Novo Modelo de Projeto',
	'LNK_PROJECT_TEMPLATES_LIST' => 'Modelos de Projeto',
    'LNK_PROJECT_RESOURCE_REPORT' => 'Relatório de Recurso',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projetos',
	'LBL_ACTIVITIES_TITLE'=>'Atividades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Atividades',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Histórico',
	'LBL_QUICK_NEW_PROJECT'	=> 'Novo Projeto',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bug Tracker',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',
    'LBL_RLI_SUBPANEL_TITLE' => 'Itens da linha de Receita',
    
	'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
	
	'LBL_RESOURCES_SUBPANEL_TITLE' => 'Recursos',
	'LBL_RESOURCE_NAME' => 'Nome',
	'LBL_RESOURCE_TYPE' => 'Tipo',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração Atual',
    'LBL_START' => 'Iniciar',
    'LBL_FINISH' => 'Concluir',
    'LBL_PREDECESSORS' => 'Precedências',
    'LBL_PERCENT_COMPLETE' => 'Progresso (%)',
    'LBL_RESOURCE_NAMES' => 'Recurso',
    'LBL_MORE'  => 'Mais...',

    'LBL_PERCENT_BUSY' => '% Ocupado',
    'LBL_USER_RESOURCE' => 'Recurso do Usuário',
    'LBL_CONTACTS_RESOURCE' => 'Recurso do Contato',
    'LBL_PROJECT_HOLIDAYS' => 'Dia de Férias',
    'LBL_LIST_RESOURCE' => 'Recurso',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'descrição',
    'LBL_DURATION_WIDGET' => 'duração',
    'LBL_START_WIDGET' => 'data de início',
    'LBL_FINISH_WIDGET' => 'data final',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'porcentagem',
    'LBL_RESOURCE_NAMES_WIDGET' => 'recurso',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> 'Editar Tarefas de Projeto',
    'LBL_VIEW_GANTT_TITLE' => 'Ver Gantt',
    
    'LBL_INSERT_BUTTON' => 'Inserir Filas',
    'LBL_INDENT_BUTTON' => 'Indentar Linha',
    'LBL_OUTDENT_BUTTON' => 'Diminuir Indentação de Linha',
    'LBL_SAVE_BUTTON' => 'Gravar',
    'LBL_COPY_BUTTON' => 'Copiar',
    'LBL_PASTE_BUTTON' => 'Colar',   
    'LBL_DELETE_BUTTON' => 'Eliminar',  
    'LBL_EXPAND_ALL_BUTTON' => 'Expandir Tudo',  
    'LBL_COLLAPSE_ALL_BUTTON' => 'Comprimir Tudo',  
    'LBL_MARK_AS_MILESTONE_BUTTON' => 'Assinalar como Etapa',
    'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Desmarcar como Etapa',
    'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Ocultar Colunas Opcionais',
    'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Mostrar Colunas Opcionais',
    'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Ver Detalhes da Tarefa',
    'LBL_RECALCULATE_DATES_BUTTON' => 'Recalcular Datas',    
    'LBL_EXPORT_TO_PDF' => 'Exportar para PDF',
    
    'LBL_FILTER_ALL_TASKS' => 'Todas as Tarefas',  
    'LBL_FILTER_COMPLETED_TASKS' => 'Tarefas Completas',  
    'LBL_FILTER_INCOMPLETE_TASKS' => 'Tarefas Incompletas',  
    'LBL_FILTER_MILESTONES' => 'Etapas',  
    'LBL_FILTER_RESOURCE' => 'Tarefas Utilizando Recursos',    
    'LBL_FILTER_DATE_RANGE' => 'Tarefas em Escala de Data', 
    'LBL_FILTER_VIEW' => 'Ver',
    'LBL_LIST_FILTER_VIEW' => 'Ver:',
    'LBL_FILTER_DATE_RANGE_START' => 'Tarefas que Iniciam ou Concluem Depois', 
    'LBL_FILTER_DATE_RANGE_FINISH' => 'E Antes', 
    'LBL_FILTER_MY_TASKS' => 'As Minhas Tarefas',    
    'LBL_FILTER_MY_OVERDUE_TASKS' => 'As Minhas Tarefas Atrasadas',    
    'LBL_FILTER_MY_UPCOMING_TASKS' => 'As Minhas Próximas Tarefas (1 Semana)',    

/*
    * Tasks that fall within a date range
    * Tasks using a specified resource     
  */   
    'LBL_CUT_BUTTON' => 'Cortar', 
    'LBL_WEEK_BUTTON' => 'Semana',
    'LBL_BIWEEK_BUTTON' => '2 Semanas',
    'LBL_MONTH_BUTTON' => 'Mês',
    
    'ERR_TASK_NAME_FOR_ROW' => 'Nome de Tarefa para Fila',
    'ERR_IS_EMPTY' => 'não pode estar vazio.',   
    'ERR_PERCENT_COMPLETE' => '% Completa deve ser um valor entre 0 e 100.',   
    'ERR_DURATION' => 'Duração deve ser um número inteiro.',
    'ERR_DATE' => 'Data especificada não calha a um dia de trabalho.',
    'ERR_FINISH_DATE' => 'Data de conclusão não pode ocorrer antes da data de início.',
    'ERR_PREDECESSORS_INPUT' => 'Valores inseridos no campo Predecessores devem estar na forma de "1" ou "1,2"',
    'ERR_PREDECESSORS_OUT_OF_RANGE' => 'O valor especificado para o campo Predecessores é maior que o número de filas.',   
    'ERR_PREDECESSOR_CYCLE_FAIL' => 'O precedente especificado causa um ciclo de dependência.',
    'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'O precendente especificado é uma tarefa principal ou uma sub-tarefa.', 
    'ERR_TASK_VIEW_DETAILS' => 'Não é possível visualizar os detalhes de uma tarefa que ainda não foi salva.',
    'NTC_DELETE_TASK_AND_SUBTASKS' => 'Tem a certeza que quer eliminar esta tarefa e todas as suas sub-tarefas?',
    'NTC_NO_ACTIVE_PROJECTS' => 'Não tem nenhuns Projetos ou tarefas de Projeto ativas.',
    'NTC_ASSIGN_RIGHT_TEAM' => 'Certifique-se que todos os recursos do Projeto são membros desta equipe.',
       
    'LBL_RESOURCE_NAME' => 'Nome',
    'LBL_RESOURCE_TYPE' => 'Tipo',
    
    'LBL_GRID_ONLY' => 'Grelha',
    'LBL_GANTT_ONLY' => 'Gantt',
    'LBL_GRID_GANTT' => 'Grelha/Gantt',
    
    'LBL_REPORT' => 'Relatório',
    'LBL_DAILY_REPORT' => 'Relatório Diário',
    'LBL_DATE' => 'Data',
    'LBL_PROJECT_HOLIDAYS_TITLE' => 'Férias do Projeto',   
    'LBL_HOLIDAYS_TITLE' => 'Férias',   
    'LBL_HOLIDAY' => 'Dia de Férias',   
    
    'LBL_PROJECT_TEMPLATE' => 'Modelo de Projeto',
    'LBL_PROJECT_TEMPLATES_LIST' => 'Lista de Modelos de Projeto',
    'LBL_PROJECT_TEMPLATES_TITLE' => 'Modelos de Projeto: Tela Principal',
    'LBL_IS_TEMPLATE' => 'É um Modelo',
	'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Gravar como Modelo',
    'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Gravar como Modelo',
    'LBL_SAVE_AS_PROJECT' => 'Gravar como Projeto',
    'LBL_SAVE_AS_TEMPLATE' => 'Gravar como Modelo',
    'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Gravar como Novo Projeto',
    'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Gravar como Novo Modelo',    
    
    'LBL_TEMPLATE_NAME' => 'Nome do Modelo:',
    'LBL_PROJECT_NAME' => 'Nome do Projeto:',    
    
	'LBL_PROJECT_TEMPLATE_NAME' => 'Nome do Modelo:',    
    
    'LBL_EXPORT_TO_MS_PROJECT' => 'Exportar para MS Project',
    
    'LBL_POPUP_DATE_START' => 'Data de Início:',
    'LBL_POPUP_DATE_FINISH' => 'Data de Conclusão:',
    'LBL_POPUP_PERCENT_COMPLETE' => '% Completa:',
    'LBL_POPUP_RESOURCE_NAME' => 'Nome do Recurso:',    
    
    'LBL_MY_PROJECTS_DASHBOARD' => 'Painel Meus Projetos',
    'LBL_RESOURCE_REPORT' => 'Relatório de Recurso',
    
    'LBL_PERSONAL_HOLIDAY' => '-- Dia de Férias Pessoal --',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
	'LBL_LAST_WEEK' => 'Anterior',
	'LBL_NEXT_WEEK' => 'Próximo',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Recursos do Projeto',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Tarefa de Projeto',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Férias',
	'LBL_EDITLAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => 'Inserir Filas' /*for 508 compliance fix*/,
	'LBL_PROJECT_INFORMATION' => 'Informação da Tarefa',

);
?>
