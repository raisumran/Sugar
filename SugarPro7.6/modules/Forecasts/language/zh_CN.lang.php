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

    //module strings.
    'LBL_MODULE_NAME' => '销售预测',
    'LBL_MODULE_NAME_SINGULAR' => '预测',
    'LNK_NEW_OPPORTUNITY' => '新增商业机会',
    'LBL_MODULE_TITLE' => '销售预测',
    'LBL_LIST_FORM_TITLE' => '提交销售预测',
    'LNK_UPD_FORECAST' => '预测工作单',
    'LNK_QUOTA' => '定额',
    'LNK_FORECAST_LIST' => '查看销售预测历史记录',
    'LBL_FORECAST_HISTORY' => '销售预测:历史',
    'LBL_FORECAST_HISTORY_TITLE' => '历史记录',

    //var defs
    'LBL_TIMEPERIOD_NAME' => '时间段:',
    'LBL_USER_NAME' => '用户名',
    'LBL_REPORTS_TO_USER_NAME' => '汇报人',

    //forecast table
    'LBL_FORECAST_ID' => '销售预测ID',
    'LBL_FORECAST_TIME_ID' => '时间周期ID',
    'LBL_FORECAST_TYPE' => '销售预测类型',
    'LBL_FORECAST_OPP_COUNT' => '总的商业机会计数',
    'LBL_FORECAST_PIPELINE_OPP_COUNT' => '商业机会通道计数',
    'LBL_FORECAST_OPP_WEIGH'=> '加权金额',
    'LBL_FORECAST_OPP_COMMIT' => '可能情形',
    'LBL_FORECAST_OPP_BEST_CASE'=>'最好情形',
    'LBL_FORECAST_OPP_WORST'=>'最坏情形',
    'LBL_FORECAST_USER' => '用户',
    'LBL_DATE_COMMITTED'=> '提交日期',
    'LBL_DATE_ENTERED' => '输入日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_CREATED_BY' => '创建人',
    'LBL_DELETED' => '删除',
    'LBL_MODIFIED_USER_ID'=>'修改人',
    'LBL_WK_VERSION' => '版本',
    'LBL_WK_REVISION' => '修订版本',

    //Quick Commit labels.
    'LBL_QC_TIME_PERIOD' => '时段：',
    'LBL_QC_OPPORTUNITY_COUNT' => '商业机会总数:',
    'LBL_QC_WEIGHT_VALUE' => '加权金额:',
    'LBL_QC_COMMIT_VALUE' => '提交金额:',
    'LBL_QC_COMMIT_BUTTON' => '执行',
    'LBL_QC_WORKSHEET_BUTTON' => '工作表',
    'LBL_QC_ROLL_COMMIT_VALUE' => '汇总承诺金额:',
    'LBL_QC_DIRECT_FORECAST' => '我的直接销售预测:',
    'LBL_QC_ROLLUP_FORECAST' => '我的组销售预测:',
    'LBL_QC_UPCOMING_FORECASTS' => '我的销售预测:',
    'LBL_QC_LAST_DATE_COMMITTED' => '上次提交日期:',
    'LBL_QC_LAST_COMMIT_VALUE' => '上次提交金额:',
    'LBL_QC_HEADER_DELIM'=> '到',

    //opportunity worksheet list view labels
    'LBL_OW_OPPORTUNITIES' => "商业机会",
    'LBL_OW_ACCOUNTNAME' => "账号",
    'LBL_OW_REVENUE' => "金额",
    'LBL_OW_WEIGHTED' => "加权金额",
    'LBL_OW_MODULE_TITLE'=> '商业机会工作单',
    'LBL_OW_PROBABILITY'=>'概率',
    'LBL_OW_NEXT_STEP'=>'下一步',
    'LBL_OW_DESCRIPTION'=>'说明',
    'LBL_OW_TYPE'=>'类型',

    //forecast worksheet direct reports forecast
    'LBL_FDR_USER_NAME'=>'直接报告人',
    'LBL_FDR_OPPORTUNITIES'=>'销售预测中的商业机会:',
    'LBL_FDR_WEIGH'=>'加权商业机会金额:',
    'LBL_FDR_COMMIT'=>'已提交金额',
    'LBL_FDR_DATE_COMMIT'=>'提交日期',

    //detail view.
    'LBL_DV_HEADER' => '销售预测:工作单',
    'LBL_DV_MY_FORECASTS' => '我的销售预测:',
    'LBL_DV_MY_TEAM' => "我的团队的销售预测" ,
    'LBL_DV_TIMEPERIODS' => '时间段:',
    'LBL_DV_FORECAST_PERIOD' => '销售预测时段',
    'LBL_DV_FORECAST_OPPORTUNITY' => '预测商业机会',
    'LBL_SEARCH' => '选择',
    'LBL_SEARCH_LABEL' => '选择',
    'LBL_COMMIT_HEADER' => '销售预测提交',
    'LBL_DV_LAST_COMMIT_DATE' =>'上次提交日期:',
    'LBL_DV_LAST_COMMIT_AMOUNT' =>'上一次提交金额:',
    'LBL_DV_FORECAST_ROLLUP' => '销售预测汇总',
    'LBL_DV_TIMEPERIOD' => '时段：',
    'LBL_DV_TIMPERIOD_DATES' => '日期范围:',
    'LBL_LOADING_COMMIT_HISTORY' => '加载提交历史记录',

    //list view
    'LBL_LV_TIMPERIOD'=> '时间段:',
    'LBL_LV_TIMPERIOD_START_DATE'=> '开始日期',
    'LBL_LV_TIMPERIOD_END_DATE'=> '结束日期',
    'LBL_LV_TYPE'=> '销售预测类型',
    'LBL_LV_COMMIT_DATE'=> '提交日期',
    'LBL_LV_OPPORTUNITIES'=> '商业机会',
    'LBL_LV_WEIGH'=> '加权金额',
    'LBL_LV_COMMIT'=> '已提交金额',

    'LBL_COMMIT_NOTE' => '为选择的时段提交输入的金额:',
    'LBL_COMMIT_TOOLTIP' => '确认承诺金额：在工作表中修改值',
    'LBL_COMMIT_MESSAGE' => '您要提交这些金额吗?',
    'ERR_FORECAST_AMOUNT' => '必须提交数字金额。',

    // js error strings
    'LBL_FC_START_DATE' => '开始日期',
    'LBL_FC_USER' => '安排为',

    'LBL_NO_ACTIVE_TIMEPERIOD'=>'没有可用的销售预测时段。',
    'LBL_FDR_ADJ_AMOUNT'=>'调整后金额',
    'LBL_SAVE_WOKSHEET'=>'保存工作单',
    'LBL_RESET_WOKSHEET'=>'重设工作单',
    'LBL_SHOW_CHART'=>'查看图表',
    'LBL_RESET_CHECK'=>'所有选择时段中的工作单数据和登录的用户将被移除，继续?',

    'LB_FS_LIKELY_CASE'=>'可能情形',
    'LB_FS_WORST_CASE'=>'最坏情形',
    'LB_FS_BEST_CASE'=>'最好情形',
    'LBL_FDR_WK_LIKELY_CASE'=>'估计可能情形',
    'LBL_FDR_WK_BEST_CASE'=> '估计最好情形',
    'LBL_FDR_WK_WORST_CASE'=>'估计最坏情形',
    'LBL_FDR_C_BEST_CASE'=>'最好情形',
    'LBL_FDR_C_WORST_CASE'=>'最坏情形',
    'LBL_FDR_C_LIKELY_CASE'=>'可能情形',
    'LBL_QC_LAST_BEST_CASE'=>'上次承诺金额(最好情形):',
    'LBL_QC_LAST_LIKELY_CASE'=>'上次承诺金额(可能情形):',
    'LBL_QC_LAST_WORST_CASE'=>'上次承诺金额(最坏情形):',
    'LBL_QC_ROLL_BEST_VALUE'=>'汇总承诺金额(最好情形):',
    'LBL_QC_ROLL_LIKELY_VALUE'=>'汇总承诺金额(可能情形):',
    'LBL_QC_ROLL_WORST_VALUE'=>'汇总承诺金额(最坏情形):',
    'LBL_QC_COMMIT_BEST_CASE'=>'承诺金额(最好情形):',
    'LBL_QC_COMMIT_LIKELY_CASE'=>'承诺金额(可能情形):',
    'LBL_QC_COMMIT_WORST_CASE'=>'承诺金额(最坏情形):',
    'LBL_CURRENCY' => '货币',
    'LBL_CURRENCY_ID' => '货币ID',
    'LBL_CURRENCY_RATE' => '汇率',
    'LBL_BASE_RATE' => '基本利率',

    'LBL_QUOTA' => '定额',
    'LBL_QUOTA_ADJUSTED' => '配额（调整后的）',

    'LBL_FORECAST_FOR'=>'销售预测工作单为:',
    'LBL_FMT_ROLLUP_FORECAST'=>'(汇总)',
    'LBL_FMT_DIRECT_FORECAST'=>'(直属)',

    //labels used by the chart.
    'LBL_GRAPH_TITLE'=>'预测历史',
    'LBL_GRAPH_QUOTA_ALTTEXT'=>'定额为%s',
    'LBL_GRAPH_COMMIT_ALTTEXT'=>'提交定额为%s',
    'LBL_GRAPH_OPPS_ALTTEXT'=>'完成商业机会的价值是%s',

    'LBL_GRAPH_QUOTA_LEGEND'=>'定额',
    'LBL_GRAPH_COMMIT_LEGEND'=>'已提交的销售预测',
    'LBL_GRAPH_OPPS_LEGEND'=>'完成的商业机会',
    'LBL_TP_QUOTA'=>'定额：',
    'LBL_CHART_FOOTER'=>'销售预测历史<br />定额 vs. 预测金额 vs. 完成商业机会价值',
    'LBL_TOTAL_VALUE'=>'总计:',
    'LBL_COPY_AMOUNT'=>'总金额',
    'LBL_COPY_WEIGH_AMOUNT'=>'总加权金额',
    'LBL_WORKSHEET_AMOUNT'=>'总估算金额',
    'LBL_COPY'=>'复制价值',
    'LBL_COMMIT_AMOUNT'=>'承诺价值总和。',
    'LBL_CUMULATIVE_TOTAL'=>'累计总数',
    'LBL_COPY_FROM'=>'复制价值从:',

    'LBL_CHART_TITLE'=>'配额 vs. 承诺 vs.实际',

    'LBL_FORECAST' => '预测',
    'LBL_COMMIT_STAGE' => '提交阶段',
    'LBL_SALES_STAGE' => '阶段',
    'LBL_AMOUNT' => '金额',
    'LBL_PERCENT' => '百分比',
    'LBL_DATE_CLOSED' => '预期完成日期：',
    'LBL_PRODUCT_ID' => '产品编号：',
    'LBL_QUOTA_ID' => '配额编号',
    'LBL_VERSION' => '版本',

    //Labels for forecasting history log and endpoint
    'LBL_ERROR_NOT_MANAGER' => 'Error: user {0} does not have manager access to request forecasts for {1}<br />错误：用户{0}没有权限管理{1}的销售预测',
    'LBL_UP' => '上移',
    'LBL_DOWN' => '向下',
    'LBL_PREVIOUS_COMMIT' => '最近提交:',

    'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => '设置销售预测',
    'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => '更新销售预测',
    'LBL_COMMITTED_HISTORY_1_SHOWN' => '{{{intro}}} {{{first}}}',
    'LBL_COMMITTED_HISTORY_2_SHOWN' => '{{{intro}}} {{{first}}}, {{{second}}}',
    'LBL_COMMITTED_HISTORY_3_SHOWN' => '{{{intro}}} {{{first}}}, {{{second}}}, 和{{{third}}}',
    'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => '可能 {{{direction}}} {{{from}}} 到 {{{to}}}',
    'LBL_COMMITTED_HISTORY_BEST_CHANGED' => '最佳的{{{direction}}} {{{from}}} 到 {{{to}}}',
    'LBL_COMMITTED_HISTORY_WORST_CHANGED' => '最坏的{{{direction}}} {{{from}}} 到 {{{to}}}',
    'LBL_COMMITTED_HISTORY_LIKELY_SAME' => '可能保持不变',
    'LBL_COMMITTED_HISTORY_BEST_SAME' => '最好保持不变',
    'LBL_COMMITTED_HISTORY_WORST_SAME' => '最差保持不变',


    'LBL_COMMITTED_THIS_MONTH' => '本月在 {0}',
    'LBL_COMMITTED_MONTHS_AGO' => '{0} 月以前的 {1}',

    //Labels for jsTree implementation
    'LBL_TREE_PARENT' => '父类',

    // Label for Current User Rep Worksheet Line
    // &#x200E; tells the browser to interpret as left-to-right
    'LBL_MY_MANAGER_LINE' => '{0} (me)',

    //Labels for worksheet items
    'LBL_EXPECTED_OPPORTUNITIES' => '预期的商业机会',
    'LBL_DISPLAYED_TOTAL' => '显示全部',
    'LBL_TOTAL' => '总计',
    'LBL_OVERALL_TOTAL' => '总和',
    'LBL_EDITABLE_INVALID' => '无效值 {0}',
    'LBL_EDITABLE_INVALID_RANGE' => '值必须在 {0} 和 {1} 之间',
    'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD' => '您有未保存的改变你的工作表。',
    'LBL_WORKSHEET_EXPORT_CONFIRM' => '请注意,只有保存或提交的数据可以被导出。单击OK继续导出,或者点击取消返回工作表',
    'LBL_WORKSHEET_ID' => '工作表编号',

    // Labels for Chart Options
    'LBL_DATA_SET' => '数据设置:',
    'LBL_GROUP_BY' => '分组',
    'LBL_CHART_OPTIONS' => '图表选项',
    'LBL_CHART_AMOUNT' => '金额',
    'LBL_CHART_TYPE' => '类型',

    // Labels for Data Filters
    'LBL_FILTERS' => '过滤器',

    // Labels for toggle buttons
    'LBL_MORE' => '更多',
    'LBL_LESS' => '少于',

    // Labels for Progress
    'LBL_PROJECTED' => '计划',
    'LBL_DISTANCE_ABOVE_LIKELY_FROM_QUOTA' => '可能高于配额',
    'LBL_DISTANCE_LEFT_LIKELY_TO_QUOTA' => '可能低于配额',
    'LBL_DISTANCE_ABOVE_BEST_FROM_QUOTA' => '最好高于配额',
    'LBL_DISTANCE_LEFT_BEST_TO_QUOTA' => '最好低于配额',
    'LBL_DISTANCE_ABOVE_WORST_FROM_QUOTA' => '最差高于配额',
    'LBL_DISTANCE_LEFT_WORST_TO_QUOTA' => '最差低于配额',
    'LBL_CLOSED' => '已关闭',
    'LBL_DISTANCE_ABOVE_LIKELY_FROM_CLOSED' => '可能高于关闭',
    'LBL_DISTANCE_LEFT_LIKELY_TO_CLOSED' => '可能低于关闭',
    'LBL_DISTANCE_ABOVE_BEST_FROM_CLOSED' => '最好高于关闭',
    'LBL_DISTANCE_LEFT_BEST_TO_CLOSED' => '最好低于关闭',
    'LBL_DISTANCE_ABOVE_WORST_FROM_CLOSED' => '最差高于关闭',
    'LBL_DISTANCE_LEFT_WORST_TO_CLOSED' => '最差低于关闭',
    'LBL_REVENUE' => '收入',
    'LBL_PIPELINE_REVENUE' => '收入管道',
    'LBL_PIPELINE_OPPORTUNITIES' => '机会管道',
    'LBL_LOADING' => '加载',
    'LBL_IN_FORECAST' => '预测中包含',

    // Actions Dropdown
    'LBL_ACTIONS' => '动作',
    'LBL_EXPORT_CSV' => '导出CSV',
    'LBL_CANCEL' => '取消',

    'LBL_CHART_FORECAST_FOR' => '预测 {0}',
    'LBL_FORECAST_TITLE' => '销售预测',
    'LBL_CHART_INCLUDED' => '包括',
    'LBL_CHART_NOT_INCLUDED' => '不包括',
    'LBL_CHART_ADJUSTED' => '(调整过的)',
    'LBL_SAVE_DRAFT' => '保存草稿',
    'LBL_CHANGES_BY' => '按 {0}改变',
    'LBL_FORECAST_SETTINGS' => '设置',

    // config panels strings
    'LBL_FORECASTS_CONFIG_TITLE' => '预测设置',

    'LBL_FORECASTS_MISSING_STAGE_TITLE' => '预测模块配置错误：',
    'LBL_FORECASTS_MISSING_SALES_STAGE_VALUES' => '预测模块已配置不当，并不再可用。赢得销售阶段和销售阶段失落缺少从可用的销售阶段值。请与您的系统管理员联系。',
    'LBL_FORECASTS_ACLS_NO_ACCESS_TITLE' => '预测模块连接错误',
    'LBL_FORECASTS_ACLS_NO_ACCESS_MSG' => '您无法访问预测模块，请与您的系统管理员联系',

    // Panel and BreadCrumb Labels
    'LBL_FORECASTS_CONFIG_BREADCRUMB_WORKSHEET_LAYOUT' => '工作表布局',
    'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES' => '范围',
    'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS' => '情景',
    'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => '时段',
    'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES' => '变量',

    // Admin UI
    'LBL_FORECASTS_CONFIG_TITLE_FORECAST_SETTINGS' => '预测设定',
    'LBL_FORECASTS_CONFIG_TITLE_TIMEPERIODS' => '时间段:',
    'LBL_FORECASTS_CONFIG_TITLE_RANGES' => '预测区间',
    'LBL_FORECASTS_CONFIG_TITLE_SCENARIOS' => '情景',
    'LBL_FORECASTS_CONFIG_TITLE_WORKSHEET_COLUMNS' => '工作表列',
    'LBL_FORECASTS_CONFIG_TITLE_FORECAST_BY' => '查看预测工作表',

    'LBL_FORECASTS_CONFIG_HOWTO_TITLE_FORECAST_BY' => '预测人',

    'LBL_FORECASTS_CONFIG_TITLE_MESSAGE_TIMEPERIODS' => '财政年度开始日期',

    'LBL_FORECASTS_CONFIG_HELP_TIMEPERIODS' => '配置的时间段，将被用在预测模块。<br /><br />首先，通过选择会计年度的开始日期。然后选择要预测时间段的类型。日期范围会根据您的选择自动计算时间期间。子时间周期是预测工作表的基础。<br /><br />在可见的未来和过去的时间段将决定可见分时段预测模块的数量。用户能够查看和编辑在可见子期间的预测数字。',
    'LBL_FORECASTS_CONFIG_HELP_RANGES' => '配置的方式，你想标记{{forecastByModule}}（例如{{forecastByModule}应包括或排除的预测数字）。您可以选择的类别数和类别的概率确定的范围。 {{forecastByModule}有一定概率将默认为相应类别。初始标记之后，用户可以手动修改该值。只有{forecastByModule}}在“包括”类别将被报告给管理者确认。',
    'LBL_FORECASTS_CONFIG_HELP_SCENARIOS' => '选择您想让用户填写的每个forecastByModuleSingular{{}}预测列。请注意可能的金额会绑定{{forecastByModule}}中显示的金额，原因是不能隐藏这个列。',
    'LBL_FORECASTS_CONFIG_HELP_WORKSHEET_COLUMNS' => '选择你想预测模块中查看哪些列。将结合工作表字段列表，并允许用户选择如何配置其视图。',
    'LBL_FORECASTS_CONFIG_HELP_FORECAST_BY' => '我是一个预测占位符为了如何到文本',
    'LBL_FORECASTS_CONFIG_SETTINGS_SAVED' => '预测配置设置已保存。',

    // timeperiod config
    //TODO-sfa remove this once the ability to map buckets when they get changed is implemented (SFA-215).
    'LBL_FORECASTS_CONFIG_TIMEPERIOD_SETUP_NOTICE' => '时间段设置初始后不能更改。',
    'LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC' => '配置时间用于预测。',
    'LBL_FORECASTS_CONFIG_TIMEPERIOD_TYPE' => '选择你的组织使用的会计年度类型。',
    'LBL_FORECASTS_CONFIG_TIMEPERIOD' => '选择类型的时间周期',
    'LBL_FORECASTS_CONFIG_LEAFPERIOD' => '选择子周期,查看你的时间周期:',
    'LBL_FORECASTS_CONFIG_START_DATE' => '选择财政年度开始日期',
    'LBL_FORECASTS_CONFIG_TIMEPERIODS_FORWARD' => '未来时间段查看工作表中选择。这个数值用于选择基本时间。例如,每年选择2将显示8代表未来几个季度。',
    'LBL_FORECASTS_CONFIG_TIMEPERIODS_BACKWARD' => '未来时间段查看工作表中选择。这个数值用于选择基本时间。例如,每月选择2将显示6表示过去几个月。',
    'LBL_FORECASTS_CONFIG_TIMEPERIOD_FISCAL_YEAR' => '已选开始日期显示财年可能跨了两年。请选择使用哪一年作为财政年：',
    'LBL_FISCAL_YEAR' => '财政年度',

    // worksheet layout config
    'LBL_FORECASTS_CONFIG_GENERAL_FORECAST_BY_TEXT' => '选择如何填充预测工作表：',
    'LBL_FORECASTS_CONFIG_GENERAL_FORECAST_BY_OPPORTUNITIES' => '商业机会',
    'LBL_FORECASTS_CONFIG_GENERAL_FORECAST_BY_PRODUCT_LINE_ITEMS' => '收入线项目',
    'LBL_REVENUELINEITEM_NAME' => '收入线项目名称',
    'LBL_FORECASTS_CONFIG_WORKSHEET_LAYOUT_DETAIL_MESSAGE' => '工作表将填充：',

    // ranges config
    //TODO-sfa remove this once the ability to map buckets when they get changed is implemented (SFA-215).
    'LBL_FORECASTS_CONFIG_RANGES_SETUP_NOTICE' => '在预测模块中,范围设置不能在首次保存草稿或提交后更改 。然而为了升级实例,范围设置不能在初始设置后更改,可以通过升级解决。',
    'LBL_FORECASTS_CONFIG_RANGES' => '预测范围选项:',
    'LBL_FORECASTS_CONFIG_RANGES_OPTIONS' => '为机会预测配置默认机率范围。',
    'LBL_FORECASTS_CONFIG_SHOW_BINARY_RANGES_DESCRIPTION' => '在预测中机会可以包含或排除。',
    'LBL_FORECASTS_CONFIG_SHOW_BUCKETS_RANGES_DESCRIPTION' => '在预测中机会可以标记为包括,提升或排除。好处是不包括在预测在默认情况下,允许用户进一步排除机会，并基于可能性来关闭。',
    'LBL_FORECASTS_CONFIG_SHOW_CUSTOM_BUCKETS_RANGES_DESCRIPTION' => '定制范围:该选项提供给用户 {{forecastByModule}}确保预测到承诺的数值中,排除范围内的任何其他设置进行分类的能力。',
    'LBL_FORECASTS_CONFIG_RANGES_EXCLUDE_INFO' => '所有其他的机会将被排除在外。',

    'LBL_FORECASTS_CONFIG_RANGES_ENTER_RANGE' => '输入范围名称',

    // scenarios config
    //TODO-sfa refactors the code references for scenarios to be scenarios (SFA-337).
    'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS' => '选择场景包括在预测表。',
    'LBL_FORECASTS_CONFIG_WORKSHEET_LIKELY_INFO' => '可能是基本输入数量在机会模块。',
    'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => '可能',
    'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => '最佳',
    'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => '最差',
    'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS' => '在总数中显示计划场景',
    'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_LIKELY' => '显示可能出现的情况总数',
    'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_BEST' => '显示最佳情况总数',
    'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_WORST' => '显示最差情况总数',

    // variables config
    'LBL_FORECASTS_CONFIG_VARIABLES' => '变量',
    'LBL_FORECASTS_CONFIG_VARIABLES_DESC' => '指标表的公式依赖于销售阶段，需要从pipleline排除，也就是说，关闭和丢失的商业机会。',
    'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_LOST_STAGE' => '请选择销售阶段,关闭或丢失商业机会:',
    'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_WON_STAGE' => 'Please select the Sales Stage that represent closed and won opportunities:<br />请选择销售阶段,关闭异议,赢得机会:',
    'LBL_FORECASTS_CONFIG_VARIABLES_FORMULA_DESC' => '因此管道公式将:',

    'LBL_FORECASTS_WIZARD_SUCCESS_TITLE' => '成功:',
    'LBL_FORECASTS_WIZARD_SUCCESS_MESSAGE' => '你成功地建立你的预测模块。请稍候,加载的模块。',
    'LBL_FORECASTS_TABBED_CONFIG_SUCCESS_MESSAGE' => '设置已保存。请稍候,加载的模块。',
    // Labels for Success Messages:
    'LBL_FORECASTS_WORKSHEET_SAVE_DRAFT_SUCCESS' => '你保存了草案选定时间段内的预测工作表。',
    'LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS' => '你在选定的时间段内完成了预测',
    'LBL_FORECASTS_WORKSHEET_COMMIT_SUCCESS_TO' => '您提交了您的预测到{{manager}}',

    // custom ranges
    'LBL_FORECASTS_CUSTOM_RANGES_DEFAULT_NAME' => '自定义范围',
    'LBL_UNAUTH_FORECASTS' => '预测设置访问未经授权。',
    'LBL_FORECASTS_RANGES_BASED_TITLE' => '基于概率的范围',
    'LBL_FORECASTS_CUSTOM_BASED_TITLE' => '基于概率的自定义范围',
    'LBL_FORECASTS_CUSTOM_NO_BASED_TITLE' =>'范围不是基于概率',

    // worksheet columns config
    'LBL_DISCOUNT' => '折扣',
    'LBL_OPPORTUNITY_STATUS' => '销售机会阶段',
    'LBL_OPPORTUNITY_NAME' => '商业机会名称：',
    'LBL_PRODUCT_TEMPLATE' => '产品目录',
    'LBL_CAMPAIGN' => '市场活动：',
    'LBL_TEAMS' => '团队',
    'LBL_CATEGORY' => '类别',
    'LBL_COST_PRICE' => '成本价格',
    'LBL_TOTAL_DISCOUNT_AMOUNT' => '折扣金额总和',
    'LBL_FORECASTS_CONFIG_WORKSHEET_TEXT' => '选择哪一列要显示的工作表视图。默认情况下，将选择以下字段：',

    // forecast details dashlet
    'LBL_DASHLET_FORECAST_NOT_SETUP' => '预测尚未配置，需要设置，如果您要使用这个工具。请与您的系统管理员联系。',
    'LBL_DASHLET_FORECAST_NOT_SETUP_ADMIN' => '预测尚未配置，需要设置，如果您要使用这个工具。请点击此处配置预测模块。',
    'LBL_DASHLET_FORECAST_CONFIG_LINK_TEXT' => '请按此配置销售预测模块。',
    'LBL_DASHLET_MY_PIPELINE' => '我的管道',
    'LBL_DASHLET_MY_TEAMS_PIPELINE' => "我团队的管道",
    'LBL_DASHLET_PIPELINE_CHART_NAME' => '预测管道图表',
    'LBL_DASHLET_PIPELINE_CHART_DESC' => '显示当前管道图',
    'LBL_FORECAST_DETAILS_DEFICIT' => '赤字',
    'LBL_FORECAST_DETAILS_SURPLUS' => '盈余',
    'LBL_FORECAST_DETAILS_SHORT' => '缺少于',
    'LBL_FORECAST_DETAILS_EXCEED' => '超过于',
    'LBL_FORECAST_DETAILS_NO_DATA' => '无日期',
    'LBL_FORECAST_DETAILS_MEETING_QUOTA' => '协商配合',

    'LBL_ASSIGN_QUOTA_BUTTON' => '分配配合',
    'LBL_ASSIGNING_QUOTA' => '分配配额',
    'LBL_QUOTA_ASSIGNED' => '配合已成功分配',
    'LBL_FORECASTS_NO_ACCESS_TO_CFG_TITLE' => '预测模块连接错误',
    'LBL_FORECASTS_NO_ACCESS_TO_CFG_MSG' => '您不必访问配置预测。请与您的系统管理员联系。',

    'LBL_DASHLET_MY_FORECAST' => '我的预测数据',
    'LBL_DASHLET_MY_TEAMS_FORECAST' => "我团队的预测数据",

    'LBL_WARN_UNSAVED_CHANGES_CONFIRM_SORT' => '您的更改未保存。您确定您想对工作表进行排序和放弃更改?',

    // Forecasts Records View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} 模块内含{{opportunities_singular_module}}记录，用于建立{{module_name}}、 {{worksheet_module}}、预测销售。用户可以从个人、团队、销售组织三个层面争取销售业绩。在用户开始访问{{plural_module_name}}模块开始建立{{module_name}}、{{worksheet_module}}之前，一位具备管理员权限的用户必须配置{{plural_module_name}}模块，定义组织应有的时间段、范围、情况等。销售人员使用{{plural_module_name}}模块随着当前时间段的进展配合获指派的{{opportunities_module}}。这些用户将按照要求他们谈成的{{opportunities_module}}承诺各自的个人销售预测。销售经理与其他销售代表一样处理他们负责的{{opportunities_singular_module}}。此外，经理们也要整合他们下属所承诺的{{module_name}}的总额以便预测团队于各个时间段的业绩。另外，可扩展的业务信息框也可以展示多种业务分析，包括从个人的{{opportunities_module}}工作表和经理的团队工作表等的信息。'
);
