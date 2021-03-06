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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'הצג משתמשים פעילים',
		  'ShowLastModifiedRecords' => 'הצג את עשרת הרשומות שעודכנו לאחרונה',
		  'ShowTopUser' => 'המשתמשים הפעילים ביותר',
		  'ShowMyModuleUsage' => 'שימוש שלי במודולים',
		  'ShowMyWeeklyActivities' => 'הפעילות השבועית שלי',
		  'ShowTop3ModulesUsed' => 'שלושת המודולים הכי שימושיים על ידי',
		  'ShowLoggedInUserCount' => 'מונה משתמשים פעילים',
		  'ShowMyCumulativeLoggedInTime' => 'זמן מצטבר שלי בלוגין למערכת (השבוע)',
		  'ShowUsersCumulativeLoggedInTime' => 'זמן מצבר של משתמשים בלוגין למערכת (השבוע)',
		  
		  //Column header mapping
		  'action' => 'פעולה',
		  'active_users' => 'מונה משתמשים פעילים',
		  'date_modified' => 'תאריך הפעולה האחרונה',
		  'different_modules_accessed' => 'מספר מודולים שנגשו אליהם',
		  'first_name' => 'First Name',
		  'item_id' => 'ID',
		  'item_summary' => 'Name',
		  'last_action' => 'פעולה אחרונה תאריך/שעה',
		  'last_name' => 'Last Name',
		  'module_name' => 'שם מודול',
		  'records_modified' => 'סך-בכול רשומות ששונו',
		  'top_module' => 'המודולים העקריים שאליהם נגשו',
		  'total_count' => 'סך-כול הדפים הנצפים',
		  'total_login_time' => 'זמן (hh:mm:ss)',
		  'user_name' => 'שם משתמש',
		  'users' => 'Users',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'פעיל',
		  'LBL_MODULE_NAME_TITLE' => 'גששים',
		  'LBL_MODULE_NAME' => 'גששים',
		  'LBL_MODULE_NAME_SINGULAR' => 'Tracker',
		  'LBL_TRACKER_SETTINGS' => 'הגדרת גשש',
		  'LBL_TRACKER_QUERIES_DESC' => 'שאילתות לגשש',
		  'LBL_TRACKER_QUERIES_HELP' => 'Track SQL statements when "Log slow queries" is enabled and the query execution time exceeds the "Slow query time threshold" value',
		  'LBL_TRACKER_PERF_DESC' => 'ביצועים של גשש',
		  'LBL_TRACKER_PERF_HELP' => 'Track database roundtrips, files accessed and memory usage',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Tracker Sessions',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Track active users and users&rsquo; session information',
		  'LBL_TRACKER_DESC' => 'פעולו של גשש',
		  'LBL_TRACKER_HELP' => 'Track user&rsquo;s page views (modules and records accessed) and record saves',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Number of days of Tracker data to store when Scheduler prunes the tables',
		  'LBL_TRACKER_PRUNE_RANGE' => 'מספר ימים',
);
?>
