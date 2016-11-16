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
    'LNK_NEW_CALL' => '安排电话',
    'LNK_NEW_MEETING' => '安排会议',
    'LNK_NEW_TASK' => '新增任务',
    'LNK_NEW_NOTE' => '新增备忘录',
    'LNK_NEW_EMAIL' => '存档电子邮件',
    'LNK_CALL_LIST' => '电话',
    'LNK_MEETING_LIST' => '会议',
    'LNK_TASK_LIST' => '任务',
    'LNK_NOTE_LIST' => '备忘录',
    'LNK_EMAIL_LIST' => '电邮',
    'LBL_ADD_FIELD'=> '添加字段：',
	'LBL_MODULE_SELECT' => '要编辑的模块',
	'LBL_SEARCH_FORM_TITLE' => '模块搜索',
	'COLUMN_TITLE_NAME' => '字段名',
    'COLUMN_TITLE_DISPLAY_LABEL' => '显示标签',
    'COLUMN_TITLE_LABEL_VALUE' => '标签值',
	'COLUMN_TITLE_LABEL' => '系统标签',
	'COLUMN_TITLE_DATA_TYPE' => '数据类型',
	'COLUMN_TITLE_MAX_SIZE' => '最大长度',
	'COLUMN_TITLE_HELP_TEXT' => '帮助文本',
    'COLUMN_TITLE_COMMENT_TEXT' => '注释文本',
	'COLUMN_TITLE_REQUIRED_OPTION' => '必填字段',
	'COLUMN_TITLE_DEFAULT_VALUE' => '默认值',
	'COLUMN_TITLE_DEFAULT_EMAIL' => '默认值',
	'COLUMN_TITLE_EXT1' => '扩展字段 1',
	'COLUMN_TITLE_EXT2' => '扩展字段 2',
	'COLUMN_TITLE_EXT3' => '扩展字段 3',
	'COLUMN_TITLE_FRAME_HEIGHT' => '浮动框架高度',
	'COLUMN_TITLE_HTML_CONTENT' =>'HTML',
	'COLUMN_TITLE_URL'=>'默认URL',
	'COLUMN_TITLE_AUDIT' =>'审计',
        'COLUMN_TITLE_FTS' =>'可搜索的全文',
	'COLUMN_TITLE_REPORTABLE' => '可报告的',
	'COLUMN_TITLE_MIN_VALUE' => '最小值',
	'COLUMN_TITLE_MAX_VALUE' => '最大值',
	'COLUMN_TITLE_LABEL_ROWS' => '行数',
	'COLUMN_TITLE_LABEL_COLS' => '列数',
	'COLUMN_TITLE_DISPLAYED_ITEM_COUNT'=>'# 显示的项',
	'COLUMN_TITLE_AUTOINC_NEXT' => '自动增长字段值',
    'COLUMN_DISABLE_NUMBER_FORMAT' => '禁用格式',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => '能够进行范围查询',
	'LBL_DROP_DOWN_LIST' => '下拉式列表',
	'LBL_RADIO_FIELDS'=> '单选字段',
	'LBL_MULTI_SELECT_LIST'=> '多选列表',
	'COLUMN_TITLE_PRECISION'=> '精确度',
	'MSG_DELETE_CONFIRM' => '您确定要删除这个条目吗？',
	'POPUP_INSERT_HEADER_TITLE' => '增加自定义字段',
	'POPUP_EDIT_HEADER_TITLE' => '编辑自定义字段',
	'LNK_SELECT_CUSTOM_FIELD' => '选择自定义字段',
	'LNK_REPAIR_CUSTOM_FIELD' => '修复自定义字段',
	'LBL_MODULE' => '模块',
	'COLUMN_TITLE_MASS_UPDATE'=>'批量更新',
    'COLUMN_TITLE_IMPORTABLE'=>'可导入的',
    'COLUMN_TITLE_DUPLICATE_MERGE'=>'合并重复',
    'LBL_LABEL'=>'标签',
    'LBL_DATA_TYPE'=>'数据类型',
    'LBL_DEFAULT_VALUE'=>'默认值',
    'LBL_AUDITED'=>'审核',
    'LBL_REPORTABLE'=>'可报告的',
    'ERR_RESERVED_FIELD_NAME' => "保留字",
	'ERR_SELECT_FIELD_TYPE' => '请选择字段类型',
	'ERR_FIELD_NAME_ALREADY_EXISTS' => '字段名已经存在',
    'ERR_FIELD_NAME_NON_DB_CHARS' => '字段名只能使用下列字符：a-z A-Z',
    'ERR_NO_MODULE_INCLUDED' => '没有模块无法保存',
    'LBL_BTN_ADD' => '新增',
    'LBL_BTN_EDIT' => '编辑',
    'LBL_GENERATE_URL' => '生成 URL',
	'LBL_DEPENDENT_CHECKBOX'=>'依赖的',
	'LBL_DEPENDENT_TRIGGER'=>'触发器',
    'LBL_CALCULATED'=>'计算值',
    'LBL_FORMULA'=>'公式',
    'LBL_DYNAMIC_VALUES_CHECKBOX' => '依赖的',
    'LBL_BTN_EDIT_VISIBILITY'=>'编辑可见度',
    'LBL_LINK_TARGET'=>'打开 Link In',
    'LBL_IMAGE_WIDTH' => '宽度',
    'LBL_IMAGE_HEIGHT' => '高',
    'LBL_IMAGE_BORDER' => '边框',
	'COLUMN_TITLE_VALIDATE_US_FORMAT' => '美国公式',
	'LBL_DEPENDENT'=>'依赖的',
	'LBL_VISIBLE_IF'=>'是否可见',
	'LBL_ENFORCED'=>'强制的',
	'LBL_HELP' => '帮助' /*for 508 compliance fix*/,
	'COLUMN_TITLE_GLOBAL_SEARCH'=>'全局搜索',
    'LBL_HAS_PARENT' => '有父项',
    'LBL_PARENT_DROPDOWN' => '父项下拉表',
    'LBL_EDIT_VIS' => '编辑可见度',
    'LBL_SIMULATION_MODE' => '仿真模式 - 清除缓存外，不会有任何变化',
    'LBL_SCAN_MODULE' => '扫描',
    'LBL_DROPPING_COLUMN' => '删除列 {0} 到 {1} 的模块',
    'LBL_FIX_COLUMN_TYPE' => '修复列类型{0}从{1}变更为',
    'LBL_FIELD_MISSING' => '缺少字段',
    'LBL_ADDING_COLUMN' => '添加列 {0} 到',
    'LBL_DONE' => '完成',
    'LBL_EXE_NON_SIM_MODE' => '执行非仿真模式',
);


?>
