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
  'LBL_MODULE_NAME' => 'Уведомления для команд',
  'LBL_MODULE_NAME_SINGULAR' => 'Уведомление для команды',
  'LBL_MODULE_TITLE' => 'Уведомления для команд: Главная',
  'LBL_SEARCH_FORM_TITLE' => 'Поиск уведомлений для команд',
  'LBL_LIST_FORM_TITLE' => 'Список уведомлений для команд',
  'LBL_PRODUCTTYPE' => 'Уведомление для команды',
  'LBL_NOTICES' => 'Уведомления для команд',
  'LBL_LIST_NAME' => 'Название',
  'LBL_URL' => 'URL',
  'LBL_URL_TITLE' => 'Название URL',
  'LBL_LIST_DESCRIPTION' => 'Описание',
  'LBL_NAME' => 'Название',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_LIST_LIST_ORDER' => 'Заказ',
  'LBL_LIST_ORDER' => 'Заказ',
  'LBL_DATE_START' => 'Дата начала',
  'LBL_DATE_END' => 'Дата окончания',
  'LBL_STATUS' => 'Статус',
  'LNK_NEW_TEAM' => 'Новая Команда',
  'LNK_NEW_TEAM_NOTICE' => 'Создать командное уведомление',
  'LNK_LIST_TEAM' => 'Команды',
  'LNK_LIST_TEAMNOTICE' => 'Уведомления для команд',
  'LNK_PRODUCT_LIST' => 'Прайс-лист продуктов',
  'LNK_NEW_PRODUCT' => 'Новый продукт',
  'LNK_NEW_MANUFACTURER' => 'Производители',
  'LNK_NEW_SHIPPER' => 'Поставщики перевозок',
  'LNK_NEW_PRODUCT_CATEGORY' => 'Категории продуктов',
  'LNK_NEW_PRODUCT_TYPE' => 'Список видов продуктов',
  'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
  'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением.',
  'NTC_LIST_ORDER' => 'Укажите порядок, в котором этот вид будет выведен в выпадающем списке видов продуктов.',
  'dom_status' => 
  array (
    'Visible' => 'Видимый',
    'Hidden' => 'Скрытый',
),
  'LBL_TEAM_NOTICE_FEATURES' => 'Особенности: * Улучшенный пользовательский интерфейс и новый Мастер объединяют простой, интуитивный дизайн и пошаговый процесс создания отчета с инструкцией для пользователя. * Сложные по структуре отчеты позволяют пользователям создавать отчеты используя большое количество модулей и сложную логику. * Сводные отчеты дают возможность группировать данные по множеству атрибутов в виде гибкой сетки. Пользователи могут создавать сложные экспериментальные таблицы с возможностью отображать такие операции как Сумма, Средняя величина, Вычисление, Процентное отношение. * Run-Time фильтры позволяют пользователям изменять атрибуты отчета в в реальном времени.',
  'LBL_TEAM_NOTICE_WIRELESS' => 'Новый мобильный интерфейс приложения SugarCRM ломает компромисс между удобством использования и мобильностью.<br /><br />Особенности:<br />- Улучшенный пользовательский интерфейс даёт пользователям доступ к редактированию, подробностям, просмотру списков и связанных записей, а так же возможность доступа к директории сотрудников, свойствам хранилища и недавно просмотренным объектам. <br /><br />- Независимость от устройства даёт пользователям возможность просматривать данные SugarCRM с любого PDA или смартфона, включая Blackberry и iPhone.<br /><br />- Клиент с поддержкой Rich HTML позволяет прекрасно отображать данные SugarCRM через стандартный веб-браузер.<br /><br />- Новые возможности поиска позволяют пользователям быстрее находить информацию.',
  'LBL_TEAM_NOTICE_DATA_IMPORT' => 'Улучшения импорта данных позволяет гораздо проще импортировать данные из таких приложений как Excel, Act!, Microsoft Outlook и Salesforce.com в SugarCRM. <br /><br />Улучшения:<br /><br />- Улучшенный пользовательский интерфейс для отображения предоставляет больше возможностей, чтобы удостовериться в гладкости и аккуратности процесса переноса данных в  SugarCRM<br /><br />- Контроль качества данных позволяет администраторам выбирать, будут ли создаваться новые записи для импорте данных или данные будут импортироваться в уже существующие записи, и таким образом уменьшить дублирование информации.<br /><br />- Импорт во Все модули позволяет перенести информацию из другого CRM-приложения в любой модуль, сокращая повторный ввод данных.',
  'LBL_TEAM_NOTICE_MODULE_BUILDER' => 'Конструктор модулей позволяет вам расширить функционал SugarCRM в новых направлениях. <br /><br />Улучшения:<br /><br />- Новые отношения позволяют новым и существующим модулям состоять в новых типах отношений.<br /><br />- Функция ревизии предоставляет полную историю создания и последующей модификации модуля для отслеживания изменений.<br /><br />- Поддержка Разделов позволяет отображать индивидуальные объекты и функционал модулей в AJAX-контейнерах Главной страницы.<br /><br />- Новые Шаблоны предоставляют возможность легко отслеживать файлы и информацию по сделкам.',
  'LBL_TEAM_NOTICE_TRACKER' => 'Трекер теперь предоставляет расширенный взгляд на использование и производительность SugarCRM. <br /><br />Особенности:<br /><br />- Отчёты трекера предоставляют мгновенный картинку использования системы для увеличения привлекательности в глазах пользователей и более чёткого понимания ими применения CRM.<br /><br />- Пользователи могут просматривать отчёты о еженедельной деятельности в CRM, просмотренные записи и модули, совокупное время нахождения в системе и онлайн-статус остальных участников команды.<br /><br />- Мониторинг системы предоставляет администраторам информацию об использовании системы и потенциальные места в системе, на которые следует обратить особое внимание.',
	'LBL_MORE_DETAIL' => 'Детальнее' /*for 508 compliance fix*/,
);


?>