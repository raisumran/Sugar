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

 // $Id: en_us.lang.php 22115 2007-04-20 22:58:03Z clee $



$mod_strings = array (
'LBL_EDIT_LAYOUT'=>'编辑布局',
'LBL_EDIT_ROWS'=>'编辑行',
'LBL_EDIT_COLUMNS'=>'编辑列',
'LBL_EDIT_LABELS'=>'编辑标签',
'LBL_EDIT_FIELDS'=>'编辑自定义字段',
'LBL_ADD_FIELDS'=>'增加自定义字段',
'LBL_DISPLAY_HTML'=>'显示HTML源代码',
'LBL_SELECT_FILE'=> '显示HTML源代码',
'LBL_SAVE_LAYOUT'=> '保存布局',
'LBL_SELECT_A_SUBPANEL' => '选择一个子面板',
'LBL_SELECT_SUBPANEL' => '选择子面板',
'LBL_MODULE_TITLE' => '工作室',
'LBL_TOOLBOX' => '工具箱',
'LBL_STAGING_AREA' => '规划区 (在此处拖拉项目)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar 字段(点击项目添加到规划区)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar 指令 (点击条目减价到规划区)',
'LBL_VIEW_SUGAR_FIELDS' => '查看 Sugar 字段',
'LBL_VIEW_SUGAR_BIN' => '查看 Sugar 指令',
'LBL_FAILED_TO_SAVE' => '保存失败',
'LBL_CONFIRM_UNSAVE' => '任何改变将为未存状态. 您确定您要继续吗?',
'LBL_PUBLISHING' => '公布中 ...',
'LBL_PUBLISHED' => '已公布',
'LBL_FAILED_PUBLISHED' => '公布失败',
'LBL_DROP_HERE' => '[拖拽到此处]',

//CUSTOM FIELDS
'LBL_NAME'=>'名称',
'LBL_LABEL'=>'标签',
'LBL_MASS_UPDATE'=>'批量更新',
'LBL_AUDITED'=>'审计',
'LBL_CUSTOM_MODULE'=>'模块',
'LBL_DEFAULT_VALUE'=>'默认值',
'LBL_REQUIRED'=>'必填项',
'LBL_DATA_TYPE'=>'类型',


'LBL_HISTORY'=>'历史记录',

//WIZARDS
//STUDIO WIZARD
'LBL_SW_WELCOME'=>'<h2>欢迎访问工作室!</h2><br>您今天想要做点什么?<br><b> 请从下面的选项中选择。</b>',
'LBL_SW_EDIT_MODULE'=>'编辑模块',
'LBL_SW_EDIT_DROPDOWNS'=>'编辑下拉框',
'LBL_SW_EDIT_TABS'=>'设置标签',
'LBL_SW_RENAME_TABS'=>'重命名标签',
'LBL_SW_EDIT_PORTAL'=>'编辑门户网站',
'LBL_SW_EDIT_WORKFLOW'=>'编辑工作流',
'LBL_SW_REPAIR_CUSTOMFIELDS'=>'修复自定义字段',
'LBL_SW_MIGRATE_CUSTOMFIELDS'=>'移植自定义字段',


//SELECT MODULE WIZARD
'LBL_SMW_WELCOME'=>'<h2>欢迎访问工作室!</h2><br><b>请从下面的选项中选择模块。',

//SELECT MODULE ACTION
'LBL_SMA_WELCOME'=>'<h2>编辑一个模块</h2>您想在那个模块上做什么?<br><b>请选择您想进行的活动。',
'LBL_SMA_EDIT_CUSTOMFIELDS'=>'编辑自定义字段',
'LBL_SMA_EDIT_LAYOUT'=>'编辑布局',
'LBL_SMA_EDIT_LABELS' =>'编辑标签',

//Manager Backups History
'LBL_MB_PREVIEW'=>'预览',
'LBL_MB_RESTORE'=>'恢复',
'LBL_MB_DELETE'=>'删除',
'LBL_MB_COMPARE'=>'比较',
'LBL_MB_WELCOME'=> '<h2>历史活动</h2><br> 在历史活动中，您可以浏览您最近正在从事的文件的前期部署编辑。您可以对比和恢复先前的版本。如果您恢复这个文件，此文件将会成为工作文件。在此文件对任何其他人可见之前您需要部署此文件。   <br> 您今天想做什么?<br><b> 请从下面的选项中选择。</b>',

//EDIT DROP DOWNS
'LBL_ED_CREATE_DROPDOWN'=> '创建一个下拉框',
'LBL_ED_WELCOME'=>'<h2>编辑下拉框</h2><br><b>您可以编辑一个下拉框或是创建一个新的下拉框 。',
'LBL_DROPDOWN_NAME' => '下拉框名称:',
'LBL_DROPDOWN_LANGUAGE' => '下拉框语言:',
'LBL_TABGROUP_LANGUAGE' => '语言:',

//EDIT CUSTOM FIELDS
'LBL_EC_WELCOME'=>'<h2>编辑自定义字段</h2><br><b>您可以查看和编辑现有字段，闯将一个新的自定义字段和清除自定义字段缓存。',
'LBL_EC_VIEW_CUSTOMFIELDS'=> '查看自定义字段',
'LBL_EC_CREATE_CUSTOMFIELD'=>'创建自定义字段',
'LBL_EC_CLEAR_CACHE'=>'清除缓存',

//SELECT MODULE
'LBL_SM_WELCOME'=> '<h2>History</h2><br><b>请选择您想要查看的文件。</b>',
//END WIZARDS

//DROP DOWN EDITOR
'LBL_DD_DISPALYVALUE'=>'显示值',
'LBL_DD_DATABASEVALUE'=>'数据库值',
'LBL_DD_ALL'=>'所有',

//BUTTONS
'LBL_BTN_SAVE'=>'保存',
'LBL_BTN_CANCEL'=>'取消',
'LBL_BTN_SAVEPUBLISH'=>'保存 & 部署',
'LBL_BTN_HISTORY'=>'历史记录',
'LBL_BTN_NEXT'=>'下一步',
'LBL_BTN_BACK'=>'返回',
'LBL_BTN_ADDCOLS'=>'新增列',
'LBL_BTN_ADDROWS'=>'新增行',
'LBL_BTN_UNDO'=>'取消',
'LBL_BTN_REDO'=>'重做',
'LBL_BTN_ADDCUSTOMFIELD'=>'增加自定义字段',
'LBL_BTN_TABINDEX'=>'编辑标签顺序',

//TABS
'LBL_TAB_SUBTABS'=>'子标签',
'LBL_MODULES'=>'模块',
//nsingh: begin bug#15095 fix
'LBL_MODULE_NAME' => '管理员',
'LBL_MODULE_NAME_SINGULAR' => '管理员',
'LBL_CONFIGURE_GROUP_TABS' => '设置组模块',
 //end bug #15095 fix
'LBL_GROUP_TAB_WELCOME'=>'导航栏将会为选择查看组模块的用户在下面显示分组。拖拽模块，并且可以在分组里设置显示分组里的模块。 提示:导航栏里不会显示空白组。',
'LBL_RENAME_TAB_WELCOME'=>'点击任何标签在表下方显示值更改标签名称。',
'LBL_DELETE_MODULE'=>'删除e&nbsp;模块<br />从&nbsp;分组内',
'LBL_DISPLAY_OTHER_TAB_HELP' => '在导航栏里选择显示”其他选项“的标签。  默认, ”其他选项“的标签在没有包含在其他组的任何模块里显示。',
'LBL_TAB_GROUP_LANGUAGE_HELP' => '选择一种有效的语言，编辑组标签并且点击保存和部署在已选语言里应用标签。 。',
'LBL_ADD_GROUP'=>'增加分组',
'LBL_NEW_GROUP'=>'新建分组',
'LBL_RENAME_TABS'=>'重命名标签',
'LBL_DISPLAY_OTHER_TAB' => '显示 $#39;其他选项$#39; 标签',

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'默认',
'LBL_ADDITIONAL'=>'附加的',
'LBL_AVAILABLE'=>'有效的',
'LBL_LISTVIEW_DESCRIPTION'=>'下面显示三列。默认列包括查看列表里默认显示的字段。附加的列包括用户选择使用创建一个自定义查看的字段，有效列包含的列可以让管理员增加当前用户没有使用的默认列和附加列。',
'LBL_LISTVIEW_EDIT'=>'编辑列表查看',

//ERRORS
'ERROR_ALREADY_EXISTS'=> '错误: 字段已经存在',
'ERROR_INVALID_KEY_VALUE'=> "错误: 无效关键值: [$#39;]",

//SUGAR PORTAL
'LBL_SW_SUGARPORTAL'=>'Sugar门户网站',
'LBL_SMP_WELCOME'=>'请从下面列表中选择一个您想要编辑的模块。',
'LBL_SP_WELCOME'=>'欢迎访问Sugar门户网站工作室。您可以选择一个想要编辑的模块，或者同步一个门户网站实例。<br> 请从下面的列表中选择。',
'LBL_SP_SYNC'=>'门户网站同步',
'LBL_SYNCP_WELCOME'=>'请输入您要更新门户网站实例的网址，然后点击“执行”按钮。<br> 会出现用户名和密码的提示。<br> 请输入您Sugar的用户名和密码，并点击“开始同步”按钮。',
'LBL_LISTVIEWP_DESCRIPTION'=>'下面有两个列:默认列包含要显示的字段，有效列包含那些没有显示，但是是可以设置显示该字段。在两列之间拖拽字段。您也可以通过拖拽，重新排列列中的记录。',
'LBL_SP_STYLESHEET'=>'上传样式表',
'LBL_SP_UPLOADSTYLE'=>'点击“浏览”按钮，并选择一个上传的格式。<br> 下一次您同步门户网站，它会被同步到门户网站中。',
'LBL_SP_UPLOADED'=> '已上传',
'ERROR_SP_UPLOADED'=>'请确定您在上传一个css样式表。',
'LBL_SP_PREVIEW'=>'在此处您可以预览您的样式表。',

	'LBL_SAVE' => '保存' /*for 508 compliance fix*/,
	'LBL_UNDO' => '取消' /*for 508 compliance fix*/,
	'LBL_REDO' => '重做' /*for 508 compliance fix*/,
	'LBL_INLINE' => '联机' /*for 508 compliance fix*/,
	'LBL_DELETE' => '删除' /*for 508 compliance fix*/,
	'LBL_ADD_FIELD' => '新增字段' /*for 508 compliance fix*/,
	'LBL_MAXIMIZE' => '最大化' /*for 508 compliance fix*/,
	'LBL_MINIMIZE' => '最小化' /*for 508 compliance fix*/,
	'LBL_PUBLISH' => '发表' /*for 508 compliance fix*/,
	'LBL_ADDROWS' => '新增行' /*for 508 compliance fix*/,
	'LBL_ADDFIELD' => '新增字段' /*for 508 compliance fix*/,
	'LBL_EDIT' => '编辑' /*for 508 compliance fix*/,

'LBL_LANGUAGE_TOOLTIP' => '选择语言编辑。',
'LBL_SINGULAR' => '单数标签',
'LBL_PLURAL' => '复数标签',
'LBL_RENAME_MOD_SAVE_HELP' => '点击 <b>保存</b> 应用所做的修改。'

);
?>
