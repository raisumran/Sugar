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
	'LBL_MODULE_NAME' => '日程安排',
	'LBL_MODULE_NAME_SINGULAR' => '日程安排',
	'LBL_MODULE_TITLE' => '日程安排',
	'LNK_NEW_CALL' => '调度呼叫',
	'LNK_NEW_MEETING' => '安排会议',
	'LNK_NEW_APPOINTMENT' => '创建约会',
	'LNK_NEW_TASK' => '新增任务',
	'LNK_CALL_LIST' => '电话',
	'LNK_MEETING_LIST' => '会议',
	'LNK_TASK_LIST' => '任务',
	'LNK_VIEW_CALENDAR' => '今天',
	'LNK_IMPORT_CALLS' => '导入电话',
	'LNK_IMPORT_MEETINGS' => '导入会议',
	'LNK_IMPORT_TASKS' => '导入任务',
	'LBL_MONTH' => '月',
	'LBL_DAY' => '日',
	'LBL_YEAR' => '年',
	'LBL_WEEK' => '周',
	'LBL_PREVIOUS_MONTH' => '上个月',
	'LBL_PREVIOUS_DAY' => '前一天',
	'LBL_PREVIOUS_YEAR' => '前一年',
	'LBL_PREVIOUS_WEEK' => '上一周',
	'LBL_NEXT_MONTH' => '下月',
	'LBL_NEXT_DAY' => '明天',
	'LBL_NEXT_YEAR' => '明年',
	'LBL_NEXT_WEEK' => '下周',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => '已安排',
	'LBL_BUSY' => '忙碌',
	'LBL_CONFLICT' => '冲突',
	'LBL_USER_CALENDARS' => '用户日程表',
	'LBL_SHARED' => '共享',
	'LBL_PREVIOUS_SHARED' => '上一步',
	'LBL_NEXT_SHARED' => '下一步',
	'LBL_SHARED_CAL_TITLE' => '共享日程安排',
	'LBL_USERS' => '用户',
	'LBL_REFRESH' => '更新',
	'LBL_EDIT_USERLIST' => '用户列表',
	'LBL_SELECT_USERS' => '请选择共享用户',
	'LBL_FILTER_BY_TEAM' => '按团队筛选用户列表：',
	'LBL_ASSIGNED_TO_NAME' => '负责人',
	'LBL_DATE' => '开始日期和时间',  
	'LBL_CREATE_MEETING' => '安排会议',
	'LBL_CREATE_CALL' => '安排电话',
	'LBL_HOURS_ABBREV' => '小时',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => '是',
	'LBL_NO' => '否',
	'LBL_SETTINGS' => '设置',
	'LBL_CREATE_NEW_RECORD' => '创建活动',
    'LBL_CREATE_NEW_CALL' => '创建呼叫',
    'LBL_CREATING_NEW_ACTIVITY' => '您正在创建一个新会议。您是否要<a href="javascript:void(0);" data-action="create-task">新增一个任务</a>或<a href="javascript:void(0);" data-action="schedule-call">调度一次呼叫</a>',
	'LBL_LOADING' => '连载中......',
	'LBL_SAVING' => '保存中......',
	'LBL_SENDING_INVITES' => '正在保存并发送邀请 .....',
	'LBL_CONFIRM_REMOVE' => '您是否确定要移除该记录？',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '您确定要移除所有的重复记录吗?',
	'LBL_EDIT_RECORD' => '编辑活动',
    'LBL_EDIT_CALL' => '编辑呼叫',
	'LBL_ERROR_SAVING' => '保存中出错',
    'LBL_NO_ACCESS' => '您没有权限',
	'LBL_ERROR_LOADING' => '连载出错',
	'LBL_GOTO_DATE' => '转到日期',
	'NOTICE_DURATION_TIME' => '持续时间必须大于0',
	'LBL_STYLE_BASIC' => '普通',
	'LBL_STYLE_ADVANCED' => '高级',

	'LBL_INFO_TITLE' => '额外详情',
	'LBL_INFO_DESC' => '说明',
	'LBL_INFO_START_DT' => '开始日期',
	'LBL_INFO_DUE_DT' => '截止日期',
	'LBL_INFO_DURATION' => '持续时间',
	'LBL_INFO_NAME' => '主题',
	'LBL_INFO_RELATED_TO' => '相关',

	'LBL_NO_USER' => '没有匹配项：指派给',
	'LBL_SUBJECT' => '主题',
	'LBL_DURATION' => '持续时间',
	'LBL_STATUS' => '状态',
	'LBL_DATE_TIME' => '日期和时间',


	'LBL_SETTINGS_TITLE' => '设置',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '在天和周查看栏显示时间段：',
	'LBL_SETTINGS_TIME_STARTS'=>'开始时间：', 
	'LBL_SETTINGS_TIME_ENDS'=>'结束时间：', 
	'LBL_SETTINGS_CALLS_SHOW' => '显示呼叫：',
	'LBL_SETTINGS_TASKS_SHOW' => '显示任务：', 

	'LBL_SAVE_BUTTON' => '保存',
	'LBL_DELETE_BUTTON' => '删除',
	'LBL_APPLY_BUTTON' => '应用过滤器',
	'LBL_SEND_INVITES' => '发送邀请',
	'LBL_CANCEL_BUTTON' => '取消',
	'LBL_CLOSE_BUTTON' => '关闭',

	'LBL_GENERAL_TAB' => '细节',
	'LBL_PARTICIPANTS_TAB' => '受邀者',
	'LBL_REPEAT_TAB' => '事件',	
	
	'LBL_REPEAT_TYPE' => '重复类型',
	'LBL_REPEAT_INTERVAL' => '重复间段',
	'LBL_REPEAT_END' => '结束',	
	'LBL_REPEAT_END_AFTER' => '后',
	'LBL_REPEAT_OCCURRENCES' => '事件',
	'LBL_REPEAT_END_BY' => '通过',	
	'LBL_REPEAT_DOW' => '在',	
	'LBL_REPEAT_UNTIL' => '重复直到',
	'LBL_REPEAT_COUNT' => '重复总数',
	'LBL_RECURRING_LIMIT_ERROR' => '这种定期的 $moduleTitle 不能调度因为它超出了允许的最大重复数$limit。',
	
	'LBL_EDIT_ALL_RECURRENCES' => '编辑所有事件',
	'LBL_REMOVE_ALL_RECURRENCES' => '删除所有事件',

	'LBL_DATE_END_ERROR' => '结束日期前于开始日期',
	'ERR_YEAR_BETWEEN' => '对不起，日程安排不能处理您所要求的年份<br />年份必须在1970和2037之间',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: 没为此视图定义',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "重复 {0} 事件次数已超越限定",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} 不是重复事件",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} 不是母重复事件",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} 不是重复事件模块",
);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"周日",
			"周一",
			"周二",
			"周三",
			"周四",
			"周五",
			"周六",
		),
	'dom_cal_weekdays_long'=>
		array(
			"周日",
			"周一",
			"周二",
			"周三",
			"周四",
			"周五",
			"周六",
		),
	'dom_cal_month'=>
		array(
			"",
			"一月",
			"二月",
			"三月",
			"四月",
			"五月",
			"六月",
			"七月",
			"八月",
			"九月",
			"十月",
			"十一月",
			"十二月",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"一月",
			"二月",
			"三月",
			"四月",
			"五月",
			"六月",
			"七月",
			"八月",
			"九月",
			"十月",
			"十一月",
			"十二月",
		),
);
