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
    'LBL_MODULE_NAME' => 'Сделки',
    'LBL_MODULE_NAME_SINGULAR' => 'Продажа',
    'LBL_MODULE_TITLE' => 'Сделки: Главная',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск сделки',
    'LBL_VIEW_FORM_TITLE' => 'Обзор сделки',
    'LBL_LIST_FORM_TITLE' => 'Список сделок',
    'LBL_OPPORTUNITY_NAME' => 'Сделка:',
    'LBL_OPPORTUNITY' => 'Сделка:',
    'LBL_NAME' => 'Название продажи',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Валюта',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Название',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_DATE_CLOSED' => 'Ожидаемая дата закрытия продажи',
    'LBL_LIST_AMOUNT' => 'Вероятно',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Итоговая сумма',
    'LBL_ACCOUNT_ID' => 'ID Контрагента',
    'LBL_CURRENCY_RATE' => 'Валютный курс',
    'LBL_CURRENCY_ID' => 'ID валюты',
    'LBL_CURRENCY_NAME' => 'Валюта',
    'LBL_CURRENCY_SYMBOL' => 'Символ валюты',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Сделка - обновление валюты',
    'UPDATE_DOLLARAMOUNTS' => 'Обновить суммы в долларах США',
    'UPDATE_VERIFY' => 'Проверить суммы',
    'UPDATE_VERIFY_TXT' => 'Проверьте, что суммы в сделках имеют правильные значения, используются только цифры (0-9) и знак разряда (.)',
    'UPDATE_FIX' => 'Исправление сумм',
    'UPDATE_FIX_TXT' => 'Попытки исправить неверные суммы, посредством создания правильного разделителя из текущей суммы. Любое изменение суммы будет сохранено в виде резервной копии в поле БД amount_backup. Если Вы получили уведомление об ошибке, не повторяйте этот шаг без восстановления данных из резервной копии, в противном случае в архив будут перезаписаны новые неверные данные.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Обновление сумм в долларах США для сделок, основанное на текущих установках курса обмена валют. Эта величина используется для расчета графиков и списков просмотра валютных сумм.',
    'UPDATE_CREATE_CURRENCY' => 'Создание новой валюты:',
    'UPDATE_VERIFY_FAIL' => 'Неудачная проверка записи:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Текущая сумма:',
    'UPDATE_VERIFY_FIX' => 'Запуск проверки данных',
    'UPDATE_INCLUDE_CLOSE' => 'Включить закрытые записи',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Новая сумма:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Новая валюта:',
    'UPDATE_DONE' => 'Готово',
    'UPDATE_BUG_COUNT' => 'Количество найденных ошибок и попыток их решения:',
    'UPDATE_BUGFOUND_COUNT' => 'Найдены ошибки:',
    'UPDATE_COUNT' => 'Обновлённые записи:',
    'UPDATE_RESTORE_COUNT' => 'Суммы в записях восстановлены:',
    'UPDATE_RESTORE' => 'Восстановление сумм',
    'UPDATE_RESTORE_TXT' => 'Восстановление сумм из резервной копии, созданной во время исправления ошибок.',
    'UPDATE_FAIL' => 'Не обновлено -',
    'UPDATE_NULL_VALUE' => 'Сумма NULL установлена на 0 -',
    'UPDATE_MERGE' => 'Объединить валюты',
    'UPDATE_MERGE_TXT' => 'Объединение многих валют в одну. Если имеется много записей валют для одной и той же валюты, то объедините их вместе. Это также объединит данные валюты  для всех остальных модулей.',
    'LBL_ACCOUNT_NAME' => 'Контрагент:',
    'LBL_CURRENCY' => 'Валюта',
    'LBL_DATE_CLOSED' => 'Предполагаемая дата закрытия:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Ожидаемая дата закрытия Временная метка',
    'LBL_TYPE' => 'Вид',
    'LBL_CAMPAIGN' => 'Маркетинговая кампания:',
    'LBL_NEXT_STEP' => 'Следующий шаг:',
    'LBL_LEAD_SOURCE' => 'Lead Source',
    'LBL_SALES_STAGE' => 'Стадия продажи',
    'LBL_SALES_STATUS' => 'Статус',
    'LBL_PROBABILITY' => 'Вероятность (%):',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DUPLICATE' => 'Возможно дублирующая сделка',
    'MSG_DUPLICATE' => 'Запись, которую Вы создаете, возможно, дублирует уже имеющуюся запись. Похожие сделки показаны ниже. Нажмите кнопку "Сохранить"  для продолжения создания новой сделки или кнопку "Отмена" для возврата в модуль без создания сделки.',
    'LBL_NEW_FORM_TITLE' => 'Новая сделка',
    'LNK_NEW_OPPORTUNITY' => 'Новая сделка',
    'LNK_CREATE' => 'Завести сделку',
    'LNK_OPPORTUNITY_LIST' => 'Просмотр сделок',
    'ERR_DELETE_RECORD' => 'Вы должны указать номер записи перед удалением сделки.',
    'LBL_TOP_OPPORTUNITIES' => 'Мои основные открытые сделки',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Вы действительно хотите удалить этот контакт из сделки?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Вы действительно хотите удалить данную сделку из проекта',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Сделки',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_RAW_AMOUNT' => 'Сырой объем',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документы',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекты',
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая):',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный (-ая)',
    'LBL_LIST_SALES_STAGE' => 'Стадия продажи',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Мои закрытые сделки',
    'LBL_TOTAL_OPPORTUNITIES' => 'Все сделки',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Успешно закрытые сделки',
    'LBL_ASSIGNED_TO_ID' => 'Ответственный (-ая):',
    'LBL_CREATED_ID' => 'Создано пользователем',
    'LBL_MODIFIED_ID' => 'Изменено пользователем',
    'LBL_MODIFIED_NAME' => 'Изменено',
    'LBL_CREATED_USER' => 'Создано пользователем',
    'LBL_MODIFIED_USER' => 'Изменено пользователем',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Маркетинговые кампании',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
    'LABEL_PANEL_ASSIGNMENT' => 'Назначение ответственного',
    'LNK_IMPORT_OPPORTUNITIES' => 'Импорт сделок',
    'LBL_EDITLAYOUT' => 'Правка расположения' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Маркетинговая кампания (ID)',
    'LBL_OPPORTUNITY_TYPE' => 'Тип сделки',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ответственный пользователь',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ответственный (ID)',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Изменено пользователем',
    'LBL_EXPORT_CREATED_BY' => 'Создано (ID):',
    'LBL_EXPORT_NAME' => 'Название',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Email-сообщения соответствующих контактов',
    'LBL_FILENAME' => 'Вложение',
    'LBL_PRIMARY_QUOTE_ID' => 'Инзначальное ценовое предложение',
    'LBL_CONTRACTS' => 'Контракты',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Контракты',
    'LBL_PRODUCTS' => 'Продукты коммерческого предложения',
    'LBL_RLI' => 'Доход по продуктам',
    'LNK_OPPORTUNITY_REPORTS' => 'Просмотр отчета по сделкам',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Коммерческие предложения',
    'LBL_TEAM_ID' => 'Команда',
    'LBL_TIMEPERIODS' => 'Отчётные периоды',
    'LBL_TIMEPERIOD_ID' => 'ID временного промежутка',
    'LBL_COMMITTED' => 'Назначен',
    'LBL_FORECAST' => 'Внести в прогноз',
    'LBL_COMMIT_STAGE' => 'Стадия совершения продажи',
    'LBL_WORKSHEET' => 'Лист прогнозов',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Коммерческие предложения',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Структура сделки',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Значения Доходов по продажам высчитаны для Продаж',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Итог процесса продаж',

    'LBL_OPPORTUNITY_ROLE'=>'Роль продажи',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Заметки',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Нажав кнопку Подтвердить, Вы сотрете все данные Прогнозов и измените представление Ваших продаж. Если это не то, что Вы хотели, нажмите кнопку Отмена, чтобы вернуться к предыдущим настройкам.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Если все записи Доходов по продажам закрыты и, по крайней мере, одна запись была выиграна,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'если стадия продажи Сделки установлена в значение "Успешно закрытая"',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Если все записи Доходов по продажам находятся на стадии продажи "Потеряна",',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'этап продажи Сделки установлен в значение "Потеряна"',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Если любая запись Дохода по продажам все еще открыта,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'Продажа будет отмечена с более ранним этапом продажи.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} модуль позволяет вам отслеживать отдельные продажи и позиции, относящиеся к тем продажам, от начала и до конца. Каждая {{module_name}} запись представляет собой название для группы {{revenuelineitems_module}} и относится к другим важным записям, таким как {{quotes_module}}, {{contacts_module}}, и т.п. Каждый {{revenuelineitems_singular_module}} является перспективной сделкой по конкретному продукту и содержит релевантные данные по продаже. Каждый {{revenuelineitems_singular_module}} будет проходить несколько Стадий Продаж до тех пор, пока не приобретет статус "Успешно Закрыта" или "Проиграна". {{module_name}} запись отражает сумму и предполагаемую дату закрытия {{revenuelineitems_module}}. {{plural_module_name}} и {{revenuelineitems_module}} могут быть использованы более выгодно с помощью Sugar {{forecasts_singular_module}} модуля для понимания и прогнозирования тенденций продаж, и сосредоточения работы на достижении установленных квот.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} модуль позволяет вам отслеживать отдельные продажи и позиции, относящиеся к тем продажам, от начала и до конца. Каждая {{module_name}} запись представляет собой название для группы {{revenuelineitems_module}} и относится к другим важным записям, таким как {{quotes_module}}, {{contacts_module}}, и т.п.

- Чтобы редактировать поля данной записи, нажмите на самом поле или кликните на кнопку Редактировать.
- Чтобы просмотреть или изменить ссылки, ведущие к другим записям, на субпанеле, включая {{revenuelineitems_module}}, переключите левую нижнюю панель на "Просмотр данных".
- Чтобы оставлять и просматривать пользовательские комментарии, а также изменять историю в рамках одной записи в {{activitystream_singular_module}} переключите левую нижнюю панель на "Лента активностей".
- Чтобы подписаться или добавить в Избранное данную запись, используйте иконки справа от записи.
- Дополнительные действия доступны в выпадающем меню Действий справа от кнопки Редактировать.',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} модуль позволяет вам отслеживать отдельные продажи и позиции, относящиеся к тем продажам, от начала и до конца. Каждая {{module_name}} запись представляет собой название для группы {{revenuelineitems_module}} и относится к другим важным записям, таким как {{quotes_module}}, {{contacts_module}}, и т.п.

Чтобы создать {{module_name}}:
1. Укажите значения полей.
 - Поля с пометкой "Обязательно" должны быть заполнены перед сохранением.
 - Нажмите "Показать больше", чтобы отобразить дополнительные поля при необходимости.
2. Нажмите "Сохранить" для сохранения новой записи и возвращения на предыдущую страницу.
 - Выберите "Сохранить и просмотреть", чтобы открыть новый {{module_name}} в режиме просмотра записи.
 - Выберите "Сохранить и создать", чтобы сразу создать новый {{module_name}}.
3. После сохранения, используйте {{revenuelineitems_module}} субпанель, чтобы добавить позиции продаж в {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Синхронизироваться с Marketo®',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Тип 10 продаж',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Отображает топ 10 продаж в кружковой диаграмме.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Мои продажи',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Продажи моей команды",
);
