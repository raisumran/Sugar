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
  'LBL_MODULE_NAME' => 'Свързани с тип сделка',
  'LBL_MODULE_TITLE' => 'Sale:',
  'LBL_SEARCH_FORM_TITLE' => 'Sale Search',
  'LBL_VIEW_FORM_TITLE' => 'Sale View',
  'LBL_LIST_FORM_TITLE' => 'Sale List',
  'LBL_SALE_NAME' => 'Sale Name:',
  'LBL_SALE' => 'Продажби:',
  'LBL_NAME' => 'Sale Name',
  'LBL_LIST_SALE_NAME' => 'Име',
  'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
  'LBL_LIST_AMOUNT' => 'Сума',
  'LBL_LIST_DATE_CLOSED' => 'Затвори',
  'LBL_LIST_SALE_STAGE' => 'Етап на преговори',
  'LBL_ACCOUNT_ID'=>'Идентификатор на Организацията',
  'LBL_TEAM_ID' =>'Екип',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Sale - Обновяване на сумата',
  'UPDATE_DOLLARAMOUNTS' => 'Обновяване на сумата в щатски долари',
  'UPDATE_VERIFY' => 'Проверка на сумата',
  'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in sales are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
  'UPDATE_FIX' => 'Фиксиране на суми',
  'UPDATE_FIX_TXT' => 'Извършване фиксиране на грешни суми, посредством създаване на правилни знакови разделения от текущата сума. Променената сума се съхранява в поле amount_backup на базата данни. Ако по време на изпълнението получите съобщение за грешка, не се връщайте без да сте възстановили от архива; в противен случай архивът може да бъде презаписан с неверни данни.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Въвеждане на нова валута:',
  'UPDATE_VERIFY_FAIL' => 'Неуспешна проверка на запис:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Текуща сума:',
  'UPDATE_VERIFY_FIX' => 'Фиксиране на данни',
  'UPDATE_INCLUDE_CLOSE' => 'Включване на записите със статус "Приключени"',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Нова сума:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Нова валута:',
  'UPDATE_DONE' => 'Стартирай отново',
  'UPDATE_BUG_COUNT' => 'Намерени проблеми и опити за разрешаването им:',
  'UPDATE_BUGFOUND_COUNT' => 'Намерени проблеми:',
  'UPDATE_COUNT' => 'Актуализирани записи:',
  'UPDATE_RESTORE_COUNT' => 'Сумата в записите е възстановена:',
  'UPDATE_RESTORE' => 'Възстановяване на суми',
  'UPDATE_RESTORE_TXT' => 'Възстановяване на сумите от архива, създаден по време на фиксирането.',
  'UPDATE_FAIL' => 'Не може да се актуализира -',
  'UPDATE_NULL_VALUE' => 'Сумата NULL установена на 0 -',
  'UPDATE_MERGE' => 'Сливане на валути',
  'UPDATE_MERGE_TXT' => 'Сливане на няколко валути в една. Ако сте открили, че има много записи за една и съща валута, можете да ги слеете. Така се сливат и данните за валути от другите модули.',
  'LBL_ACCOUNT_NAME' => 'Организация:',
  'LBL_AMOUNT' => 'Сума:',
  'LBL_AMOUNT_USDOLLAR' => 'Сума USD:',
  'LBL_CURRENCY' => 'Валута:',
  'LBL_DATE_CLOSED' => 'Дата на финализиране:',
  'LBL_TYPE' => 'Категория:',
  'LBL_CAMPAIGN' => 'Кампания:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',  
  'LBL_NEXT_STEP' => 'Следваща стъпка:',
  'LBL_LEAD_SOURCE' => 'Източник:',
  'LBL_SALES_STAGE' => 'Етап на преговори:',
  'LBL_PROBABILITY' => 'Вероятност (%):',
  'LBL_DESCRIPTION' => 'Описание:',
  'LBL_DUPLICATE' => 'Възможно дублиране на продажба',
  'MSG_DUPLICATE' => 'Създаването на този запис може да доведе до създаване на дублиращ запис. Списък с повтарящи се заглавия на записи е приведен долу.<br>Можете да съхраните записа с вече въведените данни чрез натискане на бутон "Запази" или да отмените неговото запазване чрез натискане на съответния бутон.',
  'LBL_NEW_FORM_TITLE' => 'Създай Продажба',
  'LNK_NEW_SALE' => 'Създай Продажба',
  'LNK_SALE_LIST' => 'Свързани с тип сделка',
  'ERR_DELETE_RECORD' => 'Трябва да определите номер, за да изтриете този запис.',
  'LBL_TOP_SALES' => 'My Top Open Sale',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете този контакт от sale?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Сигурни ли сте, че искате да изтриете sale от проекта?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Свързани с тип сделка',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Дейности',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'История',
    'LBL_RAW_AMOUNT'=>'Приблизителна сума',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
  'LBL_MY_CLOSED_SALES' => 'My Closed Sales',
  'LBL_TOTAL_SALES' => 'Общо продажби',
  'LBL_CLOSED_WON_SALES' => 'Closed Won Sales',
  'LBL_ASSIGNED_TO_ID' =>'Отговорник',
  'LBL_CREATED_ID'=>'Създадена от',
  'LBL_MODIFIED_ID'=>'Модифициран от',
  'LBL_MODIFIED_NAME'=>'Модифицирана от',
  'LBL_SALE_INFORMATION'=>'Информация',
  'LBL_CURRENCY_ID'=>'Идентификатор на валутата',
  'LBL_CURRENCY_NAME'=>'Валута',
  'LBL_CURRENCY_SYMBOL'=>'Валутен символ',
  'LBL_EDIT_BUTTON' => 'Редактиране',
   'LBL_REMOVE' => 'Изтрий',


);

