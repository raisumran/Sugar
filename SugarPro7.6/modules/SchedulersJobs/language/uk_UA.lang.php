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
'LBL_NAME' => 'Назва завдання',
'LBL_EXECUTE_TIME'			=> 'Час виконання',
'LBL_SCHEDULER_ID' 	=> 'Планувальник',
'LBL_STATUS' 	=> 'Статус завдання',
'LBL_RESOLUTION' 	=> 'Результат',
'LBL_MESSAGE' 	=> 'Повідомлення',
'LBL_DATA' 	=> 'Дані завдання',
'LBL_REQUEUE' 	=> 'Повторіть в разі невдачі',
'LBL_RETRY_COUNT' 	=> 'Максимальна кількість спроб',
'LBL_FAIL_COUNT' 	=> 'Невдачі',
'LBL_INTERVAL' 	=> 'Мінімальний інтервал між спробами',
'LBL_CLIENT' 	=> 'Клієнт, який є власником',
'LBL_PERCENT'	=> 'Відсотків виконано',
'LBL_JOB_GROUP' => 'Група завдання',
// Errors
'ERR_CALL' 	=> "Не вдалося викликати функцію: %s",
'ERR_CURL' => "Немає  CURL - неможливо виконувати URL-запити",
'ERR_FAILED' => "Внутрішня помилка системи, будь ласка, перевірте PHP-лог й sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s в %s на рядку %d",
'ERR_NOUSER' => "Для завдання не визначено ID користувача",
'ERR_NOSUCHUSER' => "ID Користувача %s не знайдено",
'ERR_JOBTYPE' 	=> "Невідомий тип завдання: %s",
'ERR_TIMEOUT' => "Помилка: перевищено час очікування",
'ERR_JOB_FAILED_VERBOSE' => 'Запуск запланованого  завдання% 1 $ s (% 2 $ s) перервано',
);
