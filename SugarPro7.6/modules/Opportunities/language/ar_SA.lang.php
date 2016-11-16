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
    'LBL_MODULE_NAME' => 'الفرص',
    'LBL_MODULE_NAME_SINGULAR' => 'الفرصة',
    'LBL_MODULE_TITLE' => 'الفرص: الصفحة الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث عن الفرصة',
    'LBL_VIEW_FORM_TITLE' => 'طريقة عرض الفرصة',
    'LBL_LIST_FORM_TITLE' => 'قائمة الفرص',
    'LBL_OPPORTUNITY_NAME' => 'اسم الفرصة:',
    'LBL_OPPORTUNITY' => 'الفرصة:',
    'LBL_NAME' => 'اسم الفرصة',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'العملات',
    'LBL_LIST_OPPORTUNITY_NAME' => 'الاسم',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_DATE_CLOSED' => 'تاريخ الإغلاق المتوقع',
    'LBL_LIST_AMOUNT' => 'احتمالية',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'المبلغ المحول',
    'LBL_ACCOUNT_ID' => 'معرّف الحساب',
    'LBL_CURRENCY_RATE' => 'سعر العملة',
    'LBL_CURRENCY_ID' => 'معرّف العملة',
    'LBL_CURRENCY_NAME' => 'اسم العملة',
    'LBL_CURRENCY_SYMBOL' => 'رمز العملة',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'الفرصة - تحديث العملة',
    'UPDATE_DOLLARAMOUNTS' => 'تحديث المبالغ بالدولار الأمريكي',
    'UPDATE_VERIFY' => 'التحقق من صحة المبالغ',
    'UPDATE_VERIFY_TXT' => 'للتحقق من أن قيم المبالغ في الفرص عبارة عن أرقام عشرية صالحة تحتوي على حروف رقمية فقط (0 إلى 9) والأرقام العشرية (.).',
    'UPDATE_FIX' => 'تصحيح المبالغ',
    'UPDATE_FIX_TXT' => 'يحاول تصحيح أي مبالغ غير صحيحة من خلال إنشاء قيم عشرية صحيحة من المبلغ الحالي. أي مبلغ معدل يكون منسوخًا احتياطيًا في حقل قاعدة بيانات amount_backup. في حالة تشغيل هذا وملاحظة وجود أخطاء، لا تعِد تشغيله بدون الاستعادة من النسخ الاحتياطي، حيث إن ذلك قد يؤدي إلى استبدال البيانات غير الصحيحة بالنَّسخ الاحتياطي.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'تحديث المبالغ بالدولار الأمريكي للفرص اعتمادًا على معدلات العملات المحددة حاليًا. تستخدم هذه القيمة لحساب الرسومات وقائمة عرض مبالغ العملة.',
    'UPDATE_CREATE_CURRENCY' => 'إنشاء عملة جديدة:',
    'UPDATE_VERIFY_FAIL' => 'فشل التحقق من السجل:',
    'UPDATE_VERIFY_CURAMOUNT' => 'المبلغ الحالي:',
    'UPDATE_VERIFY_FIX' => 'تشغيل التصحيح سيؤدي إلى',
    'UPDATE_INCLUDE_CLOSE' => 'تضمين السجلات المغلقة',
    'UPDATE_VERIFY_NEWAMOUNT' => 'مبلغ جديد:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'عملة جديدة:',
    'UPDATE_DONE' => 'تم',
    'UPDATE_BUG_COUNT' => 'الأخطاء التي تم العثور عليها ومحاولة إصلاحها:',
    'UPDATE_BUGFOUND_COUNT' => 'الأخطاء التي تم العثور عليها:',
    'UPDATE_COUNT' => 'السجلات التي تم تحديثها:',
    'UPDATE_RESTORE_COUNT' => 'تسجيل المبالغ التي تمت استعادتها:',
    'UPDATE_RESTORE' => 'استعادة المبالغ',
    'UPDATE_RESTORE_TXT' => 'يستعيد قيم المبالغ من النُّسخ الاحتياطية التي تم إنشاؤها أثناء التصحيح.',
    'UPDATE_FAIL' => 'تعذر التحديث -',
    'UPDATE_NULL_VALUE' => 'القيمة فارغة يتم ضبطها على 0 -',
    'UPDATE_MERGE' => 'دمج العملات',
    'UPDATE_MERGE_TXT' => 'دمج العملات المتعددة في عملة واحدة. عند وجود سجلات عملات متعددة لنفس العملة، يمكنك دمجها معًا. هذا سوف يدمج أيضًا العملات لجميع الوحدات الأخرى.',
    'LBL_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_CURRENCY' => 'العملة:',
    'LBL_DATE_CLOSED' => 'تاريخ الإغلاق المتوقع:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'الطابع الزمني لتاريخ الإغلاق المتوقع',
    'LBL_TYPE' => 'النوع:',
    'LBL_CAMPAIGN' => 'الحملة:',
    'LBL_NEXT_STEP' => 'الخطوة التالية:',
    'LBL_LEAD_SOURCE' => 'مصدر العميل المتوقع',
    'LBL_SALES_STAGE' => 'مرحلة المبيعات',
    'LBL_SALES_STATUS' => 'الحالة',
    'LBL_PROBABILITY' => 'الاحتمالية (%)',
    'LBL_DESCRIPTION' => 'الوصف',
    'LBL_DUPLICATE' => 'فرصة مكررة محتملة',
    'MSG_DUPLICATE' => 'قد يكون سجل الفرصة الذي تحاول إنشاءه مكررًا لسجل فرصة موجود بالفعل. يتم سرد سجلات الفرص التي تحتوي على أسماء مشابهة أدناه.<br>انقر على حفظ لمتابعة إنشاء هذه الفرصة الجديدة، أو انقر على إلغاء للعودة إلى الوحدة بدون إنشاء الفرصة.',
    'LBL_NEW_FORM_TITLE' => 'إنشاء فرصة',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_CREATE' => 'إنشاء صفقة',
    'LNK_OPPORTUNITY_LIST' => 'عرض الفرص',
    'ERR_DELETE_RECORD' => 'يجب أن يتم تحديد رقم سجل لحذف الفرصة.',
    'LBL_TOP_OPPORTUNITIES' => 'أعلى الفرص المفتوحة الخاصة بي',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'هل أنت متأكد من رغبتك في إزالة جهة الاتصال هذه من الفرصة؟',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'هل أنت متأكد من رغبتك في إزالة هذه الفرصة من المشروع؟',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الفرص',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'السجل',
    'LBL_RAW_AMOUNT' => 'صافي المبلغ',
    'LBL_LEADS_SUBPANEL_TITLE' => 'العملاء المتوقعون',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'المستندات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'المشروعات',
    'LBL_ASSIGNED_TO_NAME' => 'تعيين إلى:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المعين',
    'LBL_LIST_SALES_STAGE' => 'مرحلة المبيعات',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'الفرص المغلقة الخاصة بي',
    'LBL_TOTAL_OPPORTUNITIES' => 'إجمالي الفرص',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'الفرص المغلقة التي تم الفوز بها',
    'LBL_ASSIGNED_TO_ID' => 'المستخدم المعين:',
    'LBL_CREATED_ID' => 'تم الإنشاء بواسطة المعرّف',
    'LBL_MODIFIED_ID' => 'تم التعديل بواسطة المعرّف',
    'LBL_MODIFIED_NAME' => 'تم التعديل بواسطة اسم المستخدم',
    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_MODIFIED_USER' => 'المستخدم الذي تم تعديله',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'فرصة الحملة',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'المشروعات',
    'LABEL_PANEL_ASSIGNMENT' => 'المهمة',
    'LNK_IMPORT_OPPORTUNITIES' => 'استيراد الفرص',
    'LBL_EDITLAYOUT' => 'تعديل المخطط' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'معرّف الحملة',
    'LBL_OPPORTUNITY_TYPE' => 'نوع الفرصة',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'اسم المستخدم المعين',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'معرّف المستخدم المعين',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'تم التعديل بواسطة المعرّف',
    'LBL_EXPORT_CREATED_BY' => 'تم الإنشاء بواسطة المعرّف',
    'LBL_EXPORT_NAME' => 'الاسم',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'رسائل البريد الإلكتروني الخاصة بجهات الاتصال ذات الصلة',
    'LBL_FILENAME' => 'المرفق',
    'LBL_PRIMARY_QUOTE_ID' => 'العرض الرئيسي',
    'LBL_CONTRACTS' => 'العقود',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'العقود',
    'LBL_PRODUCTS' => 'البنود المسعرة',
    'LBL_RLI' => 'بنود العائدات',
    'LNK_OPPORTUNITY_REPORTS' => 'عرض تقارير الفرصة',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'عروض الأسعار',
    'LBL_TEAM_ID' => 'معرّف الفريق',
    'LBL_TIMEPERIODS' => 'الفترات الزمنية',
    'LBL_TIMEPERIOD_ID' => 'معرّف الفترة الزمنية',
    'LBL_COMMITTED' => 'مؤكد',
    'LBL_FORECAST' => 'التضمين في التنبؤ',
    'LBL_COMMIT_STAGE' => 'تأكيد المرحلة',
    'LBL_WORKSHEET' => 'ورقة العمل',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'عروض الأسعار',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'التسلسل الهيكلي للفرص',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'قم بتعيين حقل تاريخ الإغلاق المتوقع في سجلات الفرص الناجمة بحيث تكون أول أو آخر تواريخ إغلاق عناصر سطر الإيرادات الحالية',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'إجمالي الخط هو',

    'LBL_OPPORTUNITY_ROLE'=>'دور الفرصة',
    'LBL_NOTES_SUBPANEL_TITLE' => 'ملاحظات',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'من خلال النقر على تأكيد، ستقوم بمسح كل بيانات التوقعات وتغير عرض الفرص الخاص بك. إذا لم يكن ذلك هو ما قصدته، فانقر على إلغاء للعودة إلى الإعدادات السابقة.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'إذا تم إغلاق كل عناصر سطر الإيرادات وتم الفوز بأحد هذه العناصر على الأقل،',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'يتم تعيين مرحلة مبيعات الفرصة على "عملية مغلقة تم الفوز بها".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'إذا كانت كل عناصر سطر الإيرادات في مرحلة مبيعات "عملية مغلقة تمت خسارتها"،',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'يتم تعيين مرحلة مبيعات الفرصة على "عملية مغلقة تمت خسارتها".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'إذا كانت أي من عناصر سطر الإيرادات ما زالت مفتوحة،',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'يتم تمييز الفرصة بأقل مرحلة مبيعات تقدمًا.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'تسمح لك وحدة {{plural_module_name}} بتتبع المبيعات المفردة من البداية إلى النهاية. يمثل كل سجل {{module_name}} المبيعات المحتملة وهو يشتمل على بيانات المبيعات ذات الصلة، بالإضافة إلى الارتباط بالسجلات المهمة الأخرى مثل {{quotes_module}}، أو {{contacts_module}}، أو ما إلى ذلك. تحاول {{module_name}} التقدم بشكل نموذجي عبر العديد من مراحل المبيعات إلى أن يتم تمييزها على أنها "عملية مغلقة تم الفوز بها" أو "عملية مغلقة تمت خسارتها". {{plural_module_name}} ويمكن التحسين بشكل أكبر من خلال استخدام وحدة {{forecasts_singular_module}} في Sugar لفهم وتوقع اتجاهات المبيعات بالإضافة إلى تركيز العمل للوصول إلى حصص المبيعات.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'تسمح لك الوحدة {{plural_module_name}} بتتبع المبيعات الفردية وعناصر السطر التي تنتمي إلى تلك المبيعات من البداية إلى النهاية. يمثل كل سجل {{module_name}} المبيعات المحتملة ويشتمل على بيانات المبيعات ذات الصلة، بالإضافة إلى العلاقة بالسجلات المهمة الأخرى مثل {{quotes_module}}، و{{contacts_module}}، وما إلى ذلك.

- قم بتحرير حقول هذا السجل من خلال النقر على حقل مفرد أو على زر تحرير.
- قم بعرض أو تعديل الارتباطات لسجلات أخرى في اللوحات الفرعية، من خلال تبديل اللوحة السفلية اليمنى إلى "طريقة عرض البيانات".
- يمكنك عمل وعرض تعليقات المستخدم وتاريخ تغيير السجل في {{activitystream_singular_module}} من خلال تبديل الجزء السفلي الأيمن إلى "تدفق النشاط".
- قم بمتابعة هذا السجل أو جعله من السجلات المفضلة باستخدام الأيقونات الموجودة إلى يسار اسم السجل.
- تتاح إجراءات إضافية في قائمة الإجراءات المنسدلة إلى يسار زر تحرير.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'تسمح لك الوحدة {{plural_module_name}} بتتبع المبيعات الفردية وعناصر السطر التي تنتمي إلى تلك المبيعات من البداية إلى النهاية. يمثل كل سجل {{module_name}} المبيعات المحتملة وهو يشتمل على بيانات المبيعات ذات الصلة، بالإضافة إلى الارتباط بالسجلات المهمة الأخرى مثل {{quotes_module}}، أو {{contacts_module}}، أو ما إلى ذلك.

لإنشاء {{module_name}}:
1. قم بتوفير قيم للحقول حسب الرغبة.
 - يجب أن يتم إكمال الحقول المميزة على أنها "مطلوبة" قبل الحفظ.
 - انقر فوق "إظهار المزيد" لعرض حقول إضافية إذا لزم الأمر.
2. انقر فوق "حفظ" لإنهاء السجل الجديد والعودة إلى الصفحة السابقة.
 - اختر "حفظ وعرض" لفتح {{module_name}} جديد في عرض السجل.
 - اختر "حفظ وإنشاء جديد" لإنشاء واحد جديد على الفور {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'مزامنة مع Marketo&reg;',
    'LBL_MKTO_ID' => 'معرّف العميل المتوقع في Marketo',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'أعلى 10 فرص مبيعات',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'عرض أعلى 10 فرص في مخطط الفقاعة.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'الفرص الخاصة بي',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "الفرص الخاصة بفريقي",
);
