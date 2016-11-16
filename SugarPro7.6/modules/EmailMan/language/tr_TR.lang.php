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
	'LBL_SEND_DATE_TIME'						=> 'Gönderim Tarihi',
	'LBL_IN_QUEUE'								=> 'İşleniyor',
	'LBL_IN_QUEUE_DATE'							=> 'Kuyruk Tarihi',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Her partide gönderilecek E-Posta sayısını belirtmek için yalnızca sayısal değer belirtiniz',

	'LBL_ATTACHMENT_AUDIT'						=> 'gönderildi. Makinanızda daha fazla disk alanı kaplamaması için bir kopyası oluşturulmadı.',
	'LBL_CONFIGURE_SETTINGS'					=> 'E-Posta Ayarlarını Yapılandır',
	'LBL_CUSTOM_LOCATION'						=> 'Kullanıcı Tarafından Tanımlı',
	'LBL_DEFAULT_LOCATION'						=> 'Varsayılan',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Açıklamayı Her E-Posta mesajına ekle',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Açıklama İçeriği',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'UYARI: Bu E-Posta mesajı, yalnızca gönderilen(ler) için olup gizli ve özel bilgi içerebilir. Herhangi bir yetkisiz inceleme, kullanım, veya paylaşım yasaktır. Eğer ulaşılmak istenen kişi değilseniz, lütfen orijinal mesajın bütün kopyalarını yok edip, gönderen kişiye bilgi veriniz. Bu sayede adres bilgileri düzeltilecektir. Teşekkürler.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'E-Posta mesajlarını bu karakter seti ile oluştur',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'E-Postayı bu istemci ile oluştur',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Silinen E-Postalar ile birlikte ilgili notlar & ekleri de sil',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Gmail&#153; varsayılan Ayarları İle Doldur',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Her partide gönderilen E-Posta sayısı:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SSL üzerinden SMTP&#39;yi aktif hale getir',
	'LBL_EMAIL_USER_TITLE'						=> 'E-Posta Varsayılan Değerleri Kullan',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Giden E-Posta Yapılanması',
	'LBL_EMAILS_PER_RUN'						=> 'Her partide gönderilen E-Posta sayısı:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Kampanya',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'İşlenmiş',
	'LBL_LIST_FORM_TITLE'						=> 'Kuyruk',
	'LBL_LIST_FROM_EMAIL'						=> 'Hangi E-Posta dan',
	'LBL_LIST_FROM_NAME'						=> 'Kimden İsmi',
	'LBL_LIST_IN_QUEUE'							=> 'İşleniyor',
	'LBL_LIST_MESSAGE_NAME'						=> 'Pazarlama Mesajı',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Alıcı E-Postası',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Alıcı İsmi',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Gönderi Denemeleri',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Gönderildi',
	'LBL_LIST_USER_NAME'						=> 'Kullanıcı İsmi',
	'LBL_LOCATION_ONLY'							=> 'Yer',
	'LBL_LOCATION_TRACK'						=> 'Kampanya İzleme Dosyaları Lokasyonu (campaign_tracker.php gibi)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Kampanya mesajlarının kopyalarını tut:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Bütün kampanyalar sırasında gönderilen <bold>HER BİR</bold> E-Postanın kopyasını saklamak istiyor musunuz?  <bold>Varsayılan değer olan Hayır&#39;ı öneriyoruz </bold>.  Hayır olarak işaretlemeniz durumunda, E-Posta şablon ve her bir mesajı tekrar oluşturmak için gerekli değişkenler saklanacaktır.',
	'LBL_MAIL_SENDTYPE'							=> 'Posta Transfer Protokolü:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'SMTP Kimlik Denetimi:',
	'LBL_MAIL_SMTPPASS'							=> 'Şifre:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP Portu:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Sunucusu:',
	'LBL_MAIL_SMTPUSER'							=> 'Kullanıcı İsmi:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'E-Posta sağlayıcınızı seçiniz',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! E-Posta Şifresi',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! E-Posta ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail Şifresi',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail E-Posta Adresi',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange Şifresi',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange Kullanıcı İsmi',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange Sunucu Portu',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange Sunucusu',
	'LBL_EMAIL_LINK_TYPE'				=> 'E-Posta İstemcisi',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar E-Posta İstemcisi</b> : Sugar uygulamasını kullanarak E-Posta gönderin.<br><b>Harici Posta İstemcisi</b> : Microsoft Outlook gibi harici uygulamayı kullanarak E-Posta gönderin.',
	'LBL_MARKETING_ID'							=> 'Pazarlama ID',
    'LBL_MODULE_ID'                             => 'E-Post Yöneticisi',
	'LBL_MODULE_NAME'							=> 'E-Posta Ayarları',
	'LBL_MODULE_NAME_SINGULAR'						=> 'E-Posta Ayarları',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Kampanya E-Posta Ayarlarını Yapılandır',
	'LBL_MODULE_TITLE'							=> 'Gönderilen E-Posta Kuyruğu Yönetimi',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Etkinleştirildiği zaman, kullanıcılara her kayıt atandığında E-Posta gönderilir.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Gönderen" Adres:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Kimden" İsim:',
	'LBL_NOTIFY_ON'								=> 'Atama Bildirileri',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Yeni kullanıcılara bildiri gönder',
	'LBL_NOTIFY_TITLE'							=> 'E-Posta Seçenekleri',
	'LBL_OLD_ID'								=> 'Eski ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Giden E-Posta Seçenekleri',
	'LBL_RELATED_ID'							=> 'İlişkili ID',
	'LBL_RELATED_TYPE'							=> 'İlişkili Tipi',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Gönderilen İşlenmemiş E-Postaları Sakla',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'İşlenmiş Arama',
	'LBL_SEARCH_FORM_TITLE'						=> 'Kuyruk Arama',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'İşlenmiş E-Postaları Görüntüle',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Kuyruktaki E-Postaları Görüntüle',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Config.php dosyasındaki site_url değeri',
	'TXT_REMOVE_ME_ALT'							=> 'Bu E-Posta listesinden kendinizi çıkarmak için şu adrese gidin:',
	'TXT_REMOVE_ME_CLICK'						=> 'buraya tıklayın',
	'TXT_REMOVE_ME'								=> 'Bu E-Posta listesinden çıkmak için',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Atayan kullanıcının E-Posta adresinden uyarı gönderilsin mi?',

	'LBL_SECURITY_TITLE'						=> 'E-Posta Güvenlik Ayarları',
	'LBL_SECURITY_DESC'							=> 'Aşağıdakilerden alınan E-Posta için izin verilmemesi gereken veya E-Posta modülünde gösterilmeyecek olanları seçiniz.',
	'LBL_SECURITY_APPLET'						=> 'Applet etiketi',
	'LBL_SECURITY_BASE'							=> 'Base etiketi',
	'LBL_SECURITY_EMBED'						=> 'Embed etiketi',
	'LBL_SECURITY_FORM'							=> 'Form etiketi',
	'LBL_SECURITY_FRAME'						=> 'Frame etiketi',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset etiketi',
	'LBL_SECURITY_IFRAME'						=> 'iFrame etiketi',
	'LBL_SECURITY_IMPORT'						=> 'Etiket Verisini Yükle',
	'LBL_SECURITY_LAYER'						=> 'Layer etiketi',
	'LBL_SECURITY_LINK'							=> 'Link etiketi',
	'LBL_SECURITY_OBJECT'						=> 'Object etiketi',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Outlook için varsayılan minimum güvenlik ayarlarını seçiniz.',
	'LBL_SECURITY_SCRIPT'						=> 'Script etiketi',
	'LBL_SECURITY_STYLE'						=> 'Style etiketi',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Bütün Seçenekleri İşaretleyiniz',
	'LBL_SECURITY_XMP'							=> 'Xmp etiketi',
    'LBL_YES'                                   => 'Evet',
    'LBL_NO'                                    => 'Hayır',
    'LBL_PREPEND_TEST'                          => '[Test]:',
	'LBL_SEND_ATTEMPTS'							=> 'Gönderi Denemeleri',
	'LBL_OUTGOING_SECTION_HELP'                 => 'İş akış uyarılarını içeren E-Posta bildirilerini gönderebilmek için varsayılan giden E-Posta sunucusunu yapılandırın.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Gönderilen e-posta için kullanıcıların bu e-posta hesabını kullanmasına izin ver:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Bu seçenek seçildiğinde, tüm kullanıcılar sistem bildiri ve uyarılarını göndermek için<br> kullanılan aynı giden posta hesabını kullanarak e-postalarını gönderebilecek. Eğer bu seçenek seçilmezse,<br> kullanıcılar kendi hesap bilgilerini girdikten sonra giden mesaj sunucusunu kullanmaya devam edebilirler.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Seçildiğinde, atayan kullanıcının ismi ve E-posta adresi Kimden alanında yer alacaktır. Farklı hesaplardan gönderime izin vermeyen sunucularda çalışmayabilir.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Yardım' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Sistem Yönetimi Fonksiyonlarına izin verilmemiş erişim.',
    'LBL_INVALID_ENTRY_POINT' => 'Geçerli Bir Giriş Noktası Değil',
);
