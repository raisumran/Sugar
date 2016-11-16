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
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'تم تثبيت الوحدات التالية:',
	'DESC_MODULES_QUEUED'						=> 'الوحدات التالية جاهزة للتثبيت:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'لا يمكن تحديد المجموعة',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'لا يمكن تحديد المالك',
	'ERR_UW_CONFIG_WRITE'						=> 'خطأ في تحديث ملف config.php بمعلومات الإصدار الجديد.',
	'ERR_UW_CONFIG'								=> 'يرجى جعل ملف config.php قابلاً للكتابة وترقية هذه الصفحة.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'الدليل غير قابل للكتابة',
	'ERR_UW_FILE_NOT_COPIED'					=> 'لم يتم نسخ الملف',
	'ERR_UW_FILE_NOT_DELETED'					=> 'حدثت مشكلة في إزالة الحزمة ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'تعذرت قراءة الملف.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'لا يمكن نقل الملف أو كتابته إلى',
	'ERR_UW_FLAVOR_2'							=> 'ترقية الإصدار: ',
	'ERR_UW_FLAVOR'								=> 'إصدار نظام SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'تعذر إنشاء/الكتابة إلى /upgradeWizard.log.  يرجى تصحيح الأذونات على دليل SugarCRM الخاص بك.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload محدد بقيمة أعلى من 1.<br/>يرجى تغيير هذا الأمر في php.ini وإعادة تشغيل خادم الويب.',
	'ERR_UW_MYSQL_VERSION'						=> 'يتطلب SugarCRM وجود إصدار 4.1.2 من MySQL أو أحدث.  تم العثور على: ',
	'ERR_UW_OCI8_VERSION'				        => 'إصدار Oracle الخاص بك غير معتمد من قبل Sugar.  تحتاج لتثبيت إصدار يتوافق مع تطبيق Sugar.  يُرجى الرجوع إلى مصفوفة التوافق في ملاحظات بدء التطبيق لإصدارات Oracle المدعومة. الإصدار الحالي: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'يرجى تحديد ملف والمحاولة مرة أخرى!',
	'ERR_UW_NO_FILES'							=> 'حدث خطأ، لم يتم العثور على ملفات لفحصها.',
	'ERR_UW_NO_MANIFEST'						=> 'ملف zip يفتقد ملف manifest.php.  يتعذر المتابعة.',
	'ERR_UW_NO_VIEW'							=> 'طريقة العرض المحددة غير صحيحة.',
	'ERR_UW_NO_VIEW2'							=> 'طريقة عرض غير مُعرفة.  يُرجى الذهاب إلى مركز الإدارة للانتقال لهذه الصفحة.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'تحميل غير صحيح.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'تعذر إنشاء دليل temp. التحقق من أذونات الملف.',
	'ERR_UW_ONLY_PATCHES'						=> 'يمكنك فقط تحميل التصحيحات على هذه الصفحة.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'تم العثور على أخطاء أثناء التحقق من صحة المشاركة',
	'ERR_UW_UPLOAD_ERR'							=> 'حدث خطأ في تحميل الملف، يُرجى المحاولة مرة أخرى!<br>\\n',
	'ERR_UW_VERSION'							=> 'إصدار نظام SugarCRM: ',
    'ERR_UW_WRONG_TYPE'							=> 'هذه الصفحة ليست للتشغيل ',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'يتعدى الملف الذي تم تحميله توجيه upload_max_filesize الموجود في php.ini.',
													2 => 'يتعدى الملف الذي تم تحميله توجيه MAX_FILE_SIZE الذي تم تحديده في نموذج HTML.',
													3 => 'تم تحميل الملف جزئيًا فقط.',
													4 => 'لم يتم تحميل الملف.',
													5 => 'خطأ غير معروف.',
													6 => 'مجلد مؤقت مفقود.',
													7 => 'تعذرت كتابة الملف إلى القرص.',
													8 => 'توقف تحميل الملف بفعل الملحق.',
),

    'ERROR_HT_NO_WRITE'                         => 'تعذرت الكتابة إلى الملف: %s',
    'ERROR_MANIFEST_TYPE'                       => 'يجب أن يحدد ملف البيان Manifest نوع الحزمة.',
    'ERROR_PACKAGE_TYPE'                        => 'يحدد ملف البيان نوع حزمة غير معروف: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'حزمة الترقية غير متوافقة مع هذا الإصدار من Sugar: %s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'الملف الذي تم تحميله غير متوافق مع هذه الإصدارات (Community Edition، أو Professional، أو Enterprise) من Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'حدث خطأ في حفظ %s config var إلى قاعدة البيانات (مفتاح %s، قيمة %s).',
    'ERR_NOT_ADMIN'                             => "دخول غير مسموح به للإدارة.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'ليس لديك إذن للوصول إلى هذه الصفحة.',

    'LBL_BUTTON_BACK'							=> '< السابق',
	'LBL_BUTTON_CANCEL'							=> 'إلغاء',
	'LBL_BUTTON_DELETE'							=> 'حذف الحزمة',
	'LBL_BUTTON_DONE'							=> 'تم',
	'LBL_BUTTON_EXIT'							=> 'إنهاء',
	'LBL_BUTTON_INSTALL'						=> 'ترقية صحة مشاركة الموارد',
	'LBL_BUTTON_NEXT'							=> 'التالي >',
	'LBL_BUTTON_RECHECK'						=> 'إعادة الفحص',
	'LBL_BUTTON_RESTART'						=> 'إعادة التشغيل',

	'LBL_UPLOAD_UPGRADE'						=> 'تحميل ترقية الحزمة ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'لم يتم العثور على تحميل الملف',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'النسخ الاحتياطي للملفات',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'يمكن العثور على الملفات التي تم نسخها احتياطيًا من هذه الترقية في',
	'LBL_UW_BACKUP'								=> 'النسخ الاحتياطي للملفات',
	'LBL_UW_CANCEL_DESC'						=> 'تم إلغاء الترقية تم حذف أي ملفات مؤقتة تم نسخها وأي ملفات ترقية تم تحميلها.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'تغييرات مخطط مجموعة الأحرف',
	'LBL_UW_CHECK_ALL'							=> 'فحص الكل',
	'LBL_UW_CHECKLIST'							=> 'خطوات الترقية',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "النُسخ الاحتياطية للملفات المستبدلة موجودة في الدليل التالي: \\n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "قم بدمج الملفات التالية يدويًا:\\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'عملية الترقية: دمج الملفات يدويًا',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'يرجى استخدام أكثر أساليب الاختلافات سهولة بالنسبة لك لدمج هذه الملفات.  حتى تنتهي من ذلك، سيكون تثبيت SugarCRM الخاص بك في حالة عدم التأكيد، والترقية غير مكتملة.',
	'LBL_UW_COMPLETE'							=> 'مكتمل',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'يحتوي هذا الإصدار الجديد من Sugar على اتفاقية ترخيص جديدة.  هل ترغب في الاستمرار؟',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'تم استيفاء جميع متطلبات إعدادات النظام',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'ضبط PHP: مسار وقت الاتصال بواسطة المرجع',
	'LBL_UW_COMPLIANCE_CURL'					=> 'وحدة cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'وحدة IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'وحدة MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'معلمةMBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'ضبط PHP: حد الذاكرة',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'ضبط PHP: الدفق',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'خادم MS SQL وPHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'الحد الأدنى لإصدار MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'الحد الأدنى لإصدار قاعدة البيانات',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'موقع php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'الحد الأدنى لإصدار PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'ضبط PHP: الوضع الآمن',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'التحقق من إعدادات الخادم',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'الإعدادات التي تم الكشف عنها',
	'LBL_UW_COMPLIANCE_XML'						=> 'توزيع XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'دعم Zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'تم نسخ الملفات بنجاح',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'تغييرات مخطط الجدول المخصص',

	'LBL_UW_DB_CHOICE1'							=> 'معالج الترقية يقوم بتشغيل SQL',
	'LBL_UW_DB_CHOICE2'							=> 'استعلامات SQL اليدوية',
	'LBL_UW_DB_INSERT_FAILED'					=> 'فشل الإدراج - اختلاف النتائج المقارنة',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'امتيازات قاعدة البيانات',
	'LBL_UW_DB_ISSUES'							=> 'مشكلات قاعدة البيانات',
	'LBL_UW_DB_METHOD'							=> 'أسلوب تحديث قاعدة البيانات',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [جدول] ADD COLUMN [عمود]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [جدول] CHANGE COLUMN [عمود]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [جدول]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [جدول]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [جدول] DROP COLUMN [عمود]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [جدول]',
	'LBL_UW_DB_NO_ERRORS'						=> 'جميع الامتيازات متاحة',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [جدول]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [جدول]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [جدول]',
	'LBL_UW_DB_PERMS'							=> 'الامتياز الضروري',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'تم تثبيت حزم الترقية التالية:',
	'LBL_UW_END_DESC'							=> 'تمت ترقية النظام.',
	'LBL_UW_END_DESC2'							=> 'في حال اختيار تشغيل أي خطوات يدويًا، كدمج الملفات أو استعلامات SQL، يرجى القيام بذلك الآن.  سيكون النظام الخاص بك في وضع غير مستقر حتى الانتهاء من هذه الخطوات.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'تمت الترقية.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'اضغط "تم" للخروج من "معالج الترقية".',
	'LBL_UW_END_LOGOUT'							=> 'إذا كنت تنوي تطبيق حزمة ترقية أخرى باستخدام معالج الترقية، فقم بتسجيل الخروج وإعادة تسجيل الدخول قبل القيام بذلك.',
	'LBL_UW_END_LOGOUT2'						=> 'تسجيل الخروج',
	'LBL_UW_REPAIR_INDEX'						=> 'لتحسين أداء قاعدة البيانات، يرجى تشغيل برنامج <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> النصي.',

	'LBL_UW_FILE_DELETED'						=> " تمت إزالته.<br>",
	'LBL_UW_FILE_GROUP'							=> 'مجموعة',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'أذونات الملف',
	'LBL_UW_FILE_ISSUES'						=> 'مشكلات الملف',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'يتطلب الملف إجراء التمييز اليدوي',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>جميع الملفات قابلة للكتابة</b>',
	'LBL_UW_FILE_OWNER'							=> 'المالك',
	'LBL_UW_FILE_PERMS'							=> 'الأذونات',
	'LBL_UW_FILE_UPLOADED'						=> ' تم تحميله',
	'LBL_UW_FILE'								=> 'اسم الملف',
	'LBL_UW_FILES_QUEUED'						=> 'حزم الترقية التالية جاهزة للتثبيت:',
	'LBL_UW_FILES_REMOVED'						=> "تمت إزالة الملفات التالية من النظام:<br>\\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>انقر \"التالي\" لتحميل حزم الترقية.</b>",
	'LBL_UW_FROZEN'								=> 'قم بتحميل حزمة قبل الاستمرار.',
	'LBL_UW_HIDE_DETAILS'						=> 'إخفاء التفاصيل',
	'LBL_UW_IN_PROGRESS'						=> 'يتقدم',
	'LBL_UW_INCLUDING'							=> 'تضمين',
	'LBL_UW_INCOMPLETE'							=> 'غير كامل',
	'LBL_UW_INSTALL'							=> 'تثبيت الملف',
	'LBL_UW_MANUAL_MERGE'						=> 'دمج الملف',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "الوحدة جاهزة لكي يتم إلغاء تثبيتها.  انقر \"تأكيد\" لمتابعة إزالة التثبيت.<br>\\n",
	'LBL_UW_MODULE_READY'						=> "الوحدة جاهزة لكي يتم تثبيتها.  انقر \"تأكيد\" لمتابعة عملية التثبيت.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'لم يتم الكشف عن ترقيات مسجلة.',
	'LBL_UW_NONE'								=> 'بلا',
	'LBL_UW_NOT_AVAILABLE'						=> 'غير متاح',
	'LBL_UW_OVERWRITE_DESC'						=> "سيتم استبدال جميع الملفات المتغيرة، بما في ذلك تخصيصات أي رموز وتغييرات قوالب قمت بها. هل تريد بالتأكيد المتابعة؟",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'استبدال جميع الملفات',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'الدمج اليدوي - الاحتفاظ بالكل',
	'LBL_UW_OVERWRITE_FILES'					=> 'أسلوب الدمج',
	'LBL_UW_PATCH_READY'						=> 'التصحيح جاهز للمتابعة انقر الزر "تأكيد" في الأسفل لاستكمال عملية الترقية.',
	'LBL_UW_PATCH_READY2'						=> '<h2>إشعار: تم العثور على مخططات مخصصة</h2><br />يحتوي الملف (الملفات) التالي على حقول جديدة أو مخططات شاشة تم تطبيقها عبر الأستوديو. يحتوي التصحيح الذي تنوي تثبيته أيضًا على تغييرات للملف (للملفات). بالنسبة <u>لكل ملف</u> قد:<br><ul><li>[<b>افتراضي</b>] تحتفظ بالإصدار الخاص بك من خلال ترك خانة الاختيار فارغة. سيتم تجاهل تعديلات التصحيح.</li>أو<li>قبول الملفات التي تم تحديثها من خلال تحديد خانة الاختيار. ستحتاج المخططات الخاصة بك لإعادة تطبيقها عبر الأستوديو.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'إنشاء عنصر مهمة للدمج اليدوي؟',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'التحقق من صحة مشاركة الموارد',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'مختلف ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'هل ترغب في إرسال تذكير للدمج اليدوي لنفسك عبر البريد الإلكتروني؟',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'تم تعديل الملفات أدناه.  قم بإلغاء تحديد العناصر التي تتطلب دمجًا يدويًا. <i>يتم إلغاء تحديد أي تغييرات في المخطط تم الكشف عنها تلقائيًا؛ قم بوضع علامة اختيار على أي ملف يجب استبداله.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'لا يلزم إجراء الدمج اليدوي للملفات.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'غير مطلوب.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'الملفات المحتفظ بها تلقائيًا:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'تم اجتياز جميع اختبارات صحة مشاركة المواد.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'انقر "التالي" لنسخ ملفات الترقية للنظام.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>ملاحظة: </b> يعد ما تبقى من عملية الترقية إلزاميًا، والنقر على "التالي" سيتطلب منك استكمال العملية. إذا لم ترغب في المتابعة، فانقر الزر "إلغاء".',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'تبديل جميع الملفات',

	'LBL_UW_REBUILD_TITLE'						=> 'نتيجة إعادة الإنشاء',
	'LBL_UW_SCHEMA_CHANGE'						=> 'تغييرات المخطط',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'إظهار الإعدادات التي تم الكشف عنها',
	'LBL_UW_SHOW_DB_PERMS'						=> 'إظهار أذونات قاعدة البيانات المفقودة',
	'LBL_UW_SHOW_DETAILS'						=> 'إظهار التفاصيل',
	'LBL_UW_SHOW_DIFFS'							=> 'إظهار الملفات التي تتطلب دمجًا يدويًا',
	'LBL_UW_SHOW_NW_FILES'						=> 'إظهار الملفات ذات الأذونات التالفة',
	'LBL_UW_SHOW_SCHEMA'						=> 'إظهار البرنامج النمطي لتغيير المخطط',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'إظهار الاستعلامات التالفة',
	'LBL_UW_SHOW'								=> 'إظهار',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'الملفات التي تم تخطيها',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'استبدال الملف المتخطى - تم تحديد الدمج اليدوي',
	'LBL_UW_SQL_RUN'							=> 'تحقق عند تشغيل SQL يدويًا',
	'LBL_UW_START_DESC'							=> 'سوف يساعدك هذا المعالج في ترقية هذا المثال من Sugar.',
	'LBL_UW_START_DESC2'						=> 'ملاحظة: نوصيك بالنسخ الاحتياطي لقاعدة بيانات Sugar وملفات النظام (جميع الملفات الموجودة في مجلد SugarCRM) قبل ترقية نظام الإنتاج الخاص بك. نوصيك بشدة بإجراء اختبار ترقية على المثال المنسوخ لنظام الإنتاج الخاص بك أولاً.',
	'LBL_UW_START_DESC3'						=> 'انقر "التالي" لإجراء فحص على النظام الخاص بك للتأكد أن النظام جاهز للترقية. يتضمن الفحص أذونات الملف، وامتيازات قاعدة البيانات، وإعدادات الخادم.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'يستأنف معالج الترقية الجديد عملية الترقية الآن. يرجى الاستمرار في الترقية.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'مرحبًا بك في معالج الترقية الجديد',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'جارٍ الفحص، يرجى الانتظار.  قد يستغرق هذا الأمر حوالي 30 ثانية.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'جارٍ البحث عن جميع الملفات ذات الصلة للفحص.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'الملفات',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'تم العثور عليها',

	'LBL_UW_TITLE_CANCEL'						=> 'إلغاء',
	'LBL_UW_TITLE_COMMIT'						=> 'تأكيد الترقية',
	'LBL_UW_TITLE_END'							=> 'استخلاص المعلومات',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'التحقق من صحة مشاركة الموارد',
	'LBL_UW_TITLE_START'						=> 'مرحبًا',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'فحص النظام',
	'LBL_UW_TITLE_UPLOAD'						=> 'تحميل حزمة',
	'LBL_UW_TITLE'								=> 'معالج الترقية',
	'LBL_UW_UNINSTALL'							=> 'إلغاء التثبيت',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'قبول الترخيص',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'تحويل الترخيص',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'الوحدات التي تمت ترقيتها/تخصيصها',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'تم الكشف عن الوحدات التالية كمخصصة ومحتفظ بها',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'تم الكشف عن الوحدات التالية كمخصصة عبر الأستوديو وتمت ترقيتها',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'جارٍ بدء التشغيل',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'جارٍ فحص النظام',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'جارٍ فحص الترخيص',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'جارٍ فحص التحقق من مشاركة الموارد',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'جارٍ نسخ الملفات',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'جارٍ تأكيد الترقية',
    'LBL_UW_COMMIT_DESC'						=> 'انقر التالي لتشغيل برامج نصية إضافية للترقية.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'جارية ترقية البرامج النصية',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'جارية ترقية الملخص',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'يتقدم     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'الوقت المنقضي',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'جارٍ إلغاء الترقية والتنظيف',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'قد تستغرق الترقية بعض الوقت',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'جارٍ تحميل الفحوصات',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'تحميل حزمة الترقية ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'هل ترغب في أن تُسقط Sugar مخطط 451 المهمل؟',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'يُسقط معالج الترقية مخطط 451 القديم',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'الإسقاط اليدوي للمخطط قبل الترقية',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'أسلوب إسقاط المخطط القديم',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'إظهار المخطط القديم الذي يمكن إسقاطه',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'الاستعلامات التي تم تخطيها',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'إصدار PHP 5 أو أحدث مطلوب.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'إصدار PHP الخاص بك غير مدعوم من Sugar.  تحتاج لتثبيت إصدار يتوافق مع تطبيق Sugar.  يُرجى الرجوع إلى "مصفوفة التوافق" في ملاحظات الإصدار الخاصة بإصدارات PHP المعتمدة. الإصدار الخاص بك ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'تم تشغيل وضع توافق الإصدارات السابقة لـ PHP. ضبط zend.ze1_compatibility_mode على وضع إيقاف التشغيل للمتابعة',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'الإجراء',
    'LBL_ML_CANCEL'             => 'إلغاء',
    'LBL_ML_COMMIT'=>'تأكيد',
    'LBL_ML_DESCRIPTION' => 'الوصف',
    'LBL_ML_INSTALLED' => 'تاريخ التثبيت',
    'LBL_ML_NAME' => 'الاسم',
    'LBL_ML_PUBLISHED' => 'تاريخ النشر',
    'LBL_ML_TYPE' => 'النوع',
    'LBL_ML_UNINSTALLABLE' => 'غير قابل لإلغاء التثبيت',
    'LBL_ML_VERSION' => 'الإصدار',
	'LBL_ML_INSTALL'=>'تثبيت',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'المتعقب',
	'LBL_CURRENT_PHP_VERSION' => '(إصدار PHP الحالي ',
	'LBL_RECOMMENDED_PHP_VERSION' => '. يوصى باستخدام إصدار php 5.2.1 أو أعلى)',
	'LBL_MODULE_NAME' => 'معالج الترقية',
	'LBL_MODULE_NAME_SINGULAR' => 'معالج الترقية',
	'LBL_UPLOAD_SUCCESS' => 'تم تحميل حزمة الترقية بنجاح. انقر "التالي" لإجراء فحص نهائي.',
	'LBL_UW_TITLE_LAYOUTS' => 'تأكيد المخططات',
	'LBL_LAYOUT_MODULE_TITLE' => 'المخططات',
	'LBL_LAYOUT_MERGE_DESC' => 'توجد حقول جديدة متاحة تمت إضافتها كجزء من هذه الترقية ويمكن إلحاقها تلقائيًا بوحدات المخططات الحالية.  لمعرفة المزيد عن الحقول الجديدة، يرجى الرجوع إلى "ملاحظات الإصدار" الخاصة بالإصدار الذي تقوم بترقيته.<br><br>إذا كنت لا ترغب في إلحاق الحقول الجديدة، فيرجى إلغاء تحديد الوحدة، وسوف تبقى المخططات المخصصة الخاصة بك بدون تغيير. ستكون الحقول متاحة في الأستوديو بعد الترقية. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'انقر "التالي" لتأكيد التغييرات ولإنهاء الترقية.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'انقر "التالي" لاستكمال الترقية.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'تأكيد المخططات',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'تأكيد نتائج المخططات',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'تم دمج المخططات التالية بنجاح:',
	'LBL_SELECT_FILE' => 'تحديد الملف:',
	'LBL_LANGPACKS' => 'حزم اللغات' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'أداة تحميل الوحدة' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'ترقيات التصحيح' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'السمات' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'سير العمل' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'الترقية' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'المعالجة' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'ظاهر بشكل عام',
);
