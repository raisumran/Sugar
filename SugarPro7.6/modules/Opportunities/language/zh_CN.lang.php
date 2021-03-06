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
    'LBL_MODULE_NAME' => '商业机会',
    'LBL_MODULE_NAME_SINGULAR' => '商业机会',
    'LBL_MODULE_TITLE' => '商业机会：首页',
    'LBL_SEARCH_FORM_TITLE' => '查找商业机会',
    'LBL_VIEW_FORM_TITLE' => '显示商业机会',
    'LBL_LIST_FORM_TITLE' => '商业机会列表',
    'LBL_OPPORTUNITY_NAME' => '商业机会名称：',
    'LBL_OPPORTUNITY' => '商业机会：',
    'LBL_NAME' => '商业机会名称：',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => '货币',
    'LBL_LIST_OPPORTUNITY_NAME' => '名称',
    'LBL_LIST_ACCOUNT_NAME' => '客户名称',
    'LBL_LIST_DATE_CLOSED' => '预期截止日期',
    'LBL_LIST_AMOUNT' => '可能',
    'LBL_LIST_AMOUNT_USDOLLAR' => '总金额',
    'LBL_ACCOUNT_ID' => '帐户ID',
    'LBL_CURRENCY_RATE' => '汇率',
    'LBL_CURRENCY_ID' => '货币ID',
    'LBL_CURRENCY_NAME' => '货币名称',
    'LBL_CURRENCY_SYMBOL' => '货币符号',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => '商业机会－货币更新',
    'UPDATE_DOLLARAMOUNTS' => '更新美元金额',
    'UPDATE_VERIFY' => '确认金额',
    'UPDATE_VERIFY_TXT' => '确认商业机会中的金额字段都是数字(0-9)与小数点的组合。',
    'UPDATE_FIX' => '修正金额',
    'UPDATE_FIX_TXT' => '尝试从目前的金额新增有效的小数点来修正任何错误的金额。原有的资料会备份到amount_backup数据库字段，如果您执行过程中发现任何错误，记得在重新执行前先将备份的数值还原，避免备份的数值为新增的无效数据覆盖。',
    'UPDATE_DOLLARAMOUNTS_TXT' => '按现用汇率更新商业机会的美元金额。这个数值用來计算图表与货币金额显示列表。',
    'UPDATE_CREATE_CURRENCY' => '新增货币：',
    'UPDATE_VERIFY_FAIL' => '记录验证失败：',
    'UPDATE_VERIFY_CURAMOUNT' => '目前金额：',
    'UPDATE_VERIFY_FIX' => '执行修正将会变成',
    'UPDATE_INCLUDE_CLOSE' => '包含关闭的记录',
    'UPDATE_VERIFY_NEWAMOUNT' => '新的金额：',
    'UPDATE_VERIFY_NEWCURRENCY' => '新的货币：',
    'UPDATE_DONE' => '完成',
    'UPDATE_BUG_COUNT' => '发现缺陷并且尝试解决：',
    'UPDATE_BUGFOUND_COUNT' => '发现的缺陷：',
    'UPDATE_COUNT' => '更新记录：',
    'UPDATE_RESTORE_COUNT' => '还原记录金额：',
    'UPDATE_RESTORE' => '还原金额',
    'UPDATE_RESTORE_TXT' => '通过修正期间新增的备份來还原金额数值。',
    'UPDATE_FAIL' => '无法更新-',
    'UPDATE_NULL_VALUE' => '沒有输入金额的项目会设置为0-',
    'UPDATE_MERGE' => '合并货币',
    'UPDATE_MERGE_TXT' => '合并多种货币成为单一货币，如果您发现同样的货币有多条记录，您可以将他们合并。这将会合并所有模组的货币记录。',
    'LBL_ACCOUNT_NAME' => '账户名称：',
    'LBL_CURRENCY' => '货币：',
    'LBL_DATE_CLOSED' => '预期完成日期：',
    'LBL_DATE_CLOSED_TIMESTAMP' => '预期关闭的日期时间戳',
    'LBL_TYPE' => '类型：',
    'LBL_CAMPAIGN' => '市场活动：',
    'LBL_NEXT_STEP' => '下一步：',
    'LBL_LEAD_SOURCE' => '潜在客户来源',
    'LBL_SALES_STAGE' => '销售阶段',
    'LBL_SALES_STATUS' => '状态',
    'LBL_PROBABILITY' => '成交概率(%)：',
    'LBL_DESCRIPTION' => '说明',
    'LBL_DUPLICATE' => '可能重复的商业机会',
    'MSG_DUPLICATE' => '新增这条记录可能造成重复，您可以从下面列表选择或是点击新增來继续透过旧有记录建立新商业机会',
    'LBL_NEW_FORM_TITLE' => '新增商业机会',
    'LNK_NEW_OPPORTUNITY' => '新增商业机会',
    'LNK_CREATE' => '新增交易',
    'LNK_OPPORTUNITY_LIST' => '查看商业机会',
    'ERR_DELETE_RECORD' => '必须指定记录编号才能删除商业机会。',
    'LBL_TOP_OPPORTUNITIES' => '我的重要商业机会',
    'NTC_REMOVE_OPP_CONFIRMATION' => '您确定要从这个商业机会移除这个联系人？',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '您确定要从这个项目移除商业机会？',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '商业机会',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活动',
    'LBL_HISTORY_SUBPANEL_TITLE' => '历史记录',
    'LBL_RAW_AMOUNT' => '原始金额',
    'LBL_LEADS_SUBPANEL_TITLE' => '潜在用户',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文档',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '项目',
    'LBL_ASSIGNED_TO_NAME' => '指派给:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '指派的用户',
    'LBL_LIST_SALES_STAGE' => '销售阶段',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '我的关闭的商业机会',
    'LBL_TOTAL_OPPORTUNITIES' => '商业机会总数',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '已关闭的成功商业机会',
    'LBL_ASSIGNED_TO_ID' => '负责人标号',
    'LBL_CREATED_ID' => '创建人的ID',
    'LBL_MODIFIED_ID' => '修改人的ID',
    'LBL_MODIFIED_NAME' => '修改人的用户名',
    'LBL_CREATED_USER' => '创建的用户',
    'LBL_MODIFIED_USER' => '修改的用户',
    'LBL_CAMPAIGN_OPPORTUNITY' => '市场活动机会',
    'LBL_PROJECT_SUBPANEL_TITLE' => '项目',
    'LABEL_PANEL_ASSIGNMENT' => '分配任务',
    'LNK_IMPORT_OPPORTUNITIES' => '导入商业机会',
    'LBL_EDITLAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => '市场活动ID',
    'LBL_OPPORTUNITY_TYPE' => '机会类型',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '被分配者名称',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '被分配用户ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '修改人编号',
    'LBL_EXPORT_CREATED_BY' => '由ID创建',
    'LBL_EXPORT_NAME' => '名称',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '相关联系人的邮件',
    'LBL_FILENAME' => '附件',
    'LBL_PRIMARY_QUOTE_ID' => '主要报价',
    'LBL_CONTRACTS' => '合同',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => '合同',
    'LBL_PRODUCTS' => '产品',
    'LBL_RLI' => '收入线项目',
    'LNK_OPPORTUNITY_REPORTS' => '显示商业机会报表',
    'LBL_QUOTES_SUBPANEL_TITLE' => '报价',
    'LBL_TEAM_ID' => '团队ID',
    'LBL_TIMEPERIODS' => '时段',
    'LBL_TIMEPERIOD_ID' => '时间周期ID',
    'LBL_COMMITTED' => '已提交',
    'LBL_FORECAST' => '销售预测包括',
    'LBL_COMMIT_STAGE' => '提交阶段',
    'LBL_WORKSHEET' => '工作表',


    'LBL_QUOTE_SUBPANEL_TITLE' => '报价',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => '商业机会等级',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => '将所得商业机会的纪录上的预计结束日期字段设置为现有收入线项目的最早或最后的结束日期。',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => '管道总计',

    'LBL_OPPORTUNITY_ROLE'=>'商业机会角色',
    'LBL_NOTES_SUBPANEL_TITLE' => '备忘录',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => '若单击确定，您将清除所有预测数据并变更您的商业机会视图。如果这不是您要的结果，单击取消以便返回上一设置。',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => '所有收入线项目若都关闭就表示至少有一属于谈成。',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => '商业机会销售阶段已设置为“谈成结束”。',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => '如果所有收入线项目都处于“丢单结束”销售阶段，',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => '该商业机会的销售阶段将设为“丢单结束”。',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => '如果任何收入线项目还在开启阶段，',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => '该商业机会将标记为最少进展销售阶段。',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'The {{module_name}} module consists of individual people who are unqualified prospects that you have some information on, but is not yet a qualified {{leads_singular_module}}. Information (e.g. name, email address) regarding these {{plural_module_name}} are normally acquired from business cards you receive while attending various trades shows, conferences, etc. {{plural_module_name}} in Sugar are stand-alone records as they are not related to {{contacts_module}}, {{leads_module}}, {{accounts_module}}, or {{opportunities_module}}. There are various ways you can create {{plural_module_name}} in Sugar such as via the {{plural_module_name}} module, importing {{plural_module_name}}, etc. Once the {{module_name}} record is created, you can view and edit information pertaining to the {{module_name}} via the {{plural_module_name}} Record view.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'The {{module_name}} module consists of individual people who are unqualified prospects that you have some information on, but is not yet a qualified {{leads_singular_module}}.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'The {{module_name}} module consists of individual people who are unqualified prospects that you have some information on, but is not yet a qualified {{leads_singular_module}}.

To create a {{module_name}}:
1. Provide values for the fields as desired.
 - Fields marked "Required" must be completed prior to saving.
 - Click "Show More" to expose additional fields if necessary.
2. Click "Save" to finalize the new record and return to the previous page.
 - Choose "Save and view" to open the new {{module_name}} in record view.
 - Choose "Save and create new" to immediately create another new {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Sync to Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '前十个商业机会。',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => '用气泡图显示前十个商业机会。',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => '我的商业机会',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "我的团队的商业机会",
);
