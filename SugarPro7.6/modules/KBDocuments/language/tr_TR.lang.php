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
	//module
	'LBL_MODULE_NAME' => 'Bilgi Tabanı',
    'LBL_MODULE_NAME_SINGULAR' => 'KBDokümanı',
	'LBL_MODULE_TITLE' => 'Bilgi Tabanı Makalesi',
	'LNK_NEW_ARTICLE' => 'Makale Oluştur',
	'LNK_KBDOCUMENT_LIST'=> 'Doküman Listesi',
	'LBL_DOC_REV_HEADER' => 'Doküman Revizyonları',
	'LBL_SEARCH_FORM_TITLE'=> 'Doküman Arama',
	'LBL_SEND_EMAIL'  => 'E-Posta Gönder',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Seç',
	'LBL_EMBEDED_IMAGES' => 'Gömülü Resimler:',
	'LBL_SHOW_MORE' => 'Daha Fazla İçerik Göster',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Daha Fazla Detay Göster',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Detayları Sakla',
	'LBL_TAGS' => 'Etiketler:',
	'LBL_NOT_AN_ADMIN_USER' => 'Admin kullanıcısı değil',
	'LBL_NOT_A_VALID_FILE' => 'Geçerli bir dosya değil',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Yeni Etiket Oluştur',
    'LBL_NEW_TAG_NAME' => 'Yeni Etiket İsmi:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'Doküman Id',
	'LBL_ARTICLE_TITLE' => 'Unvan:',
	'LBL_ARTICLE_AUTHOR' => 'Yazar:',
	'LBL_ARTICLE_APPROVED_BY' =>'Onaylayan Kişi:',
	'LBL_ARTICLE_BODY' => 'Makale İçeriği:',
	'LBL_NAME' => 'Doküman İsmi:',
	'LBL_DESCRIPTION' => 'Tanım',
	'LBL_CATEGORY' => 'Kategori',
	'LBL_SUBCATEGORY' => 'Alt Kategori',
	'LBL_STATUS' => 'Durum',
	'LBL_CREATED_BY'=> 'Oluşturan',
	'LBL_DATE_ENTERED'=> 'Oluşturulma Tarihi',
	'LBL_DATE_MODIFIED'=> 'Değiştirilme Tarihi',
	'LBL_DELETED' => 'Silindi',
	'LBL_MODIFIED'=> 'Değiştiren ID',
	'LBL_MODIFIED_USER' => 'Değiştiren',
	'LBL_CREATED'=> 'Oluşturan',
	'LBL_RELATED_DOCUMENT_ID'=>'İlişkili Doküman ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'İlişkili Doküman Revizyon ID',
	'LBL_IS_TEMPLATE'=>'Şablon mu',
	'LBL_TEMPLATE_TYPE'=>'Doküman Tipi',
    'LBL_PARENT_TYPE'=>'Üst Kayıt Tipi',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'Kontrat durumu:',
    'LBL_LINKED_ID'=>'Bağlantı ID',
    'LBL_VIEWS_NUMBER'=>'Görüntüleme Numarası',

	'LBL_REVISION_NAME' => 'Revizyon No',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBDoküman Revizyon No',
	'LBL_MIME' => 'Mime Tipi',
	'LBL_REVISION' => 'Revizyon',
	'LBL_DOCUMENT' => 'İlişkili Doküman',
	'LBL_LATEST_REVISION' => 'En son Revizyon Id',
    'LBL_LATEST_REVISION_NAME' => 'En son Revizyon İsmi',
    'LBL_SELECTED_REVISION_NAME' => 'Seçili Revizyon İsmi',
    'LBL_SELECTED_REVISION_ID' => 'Seçili Revizyon Id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Seçilen Revizyon Dosya İsmi',
	'LBL_CHANGE_LOG'=> 'Değişiklik Tarihçesi',
	'LBL_ACTIVE_DATE'=> 'Yayın Tarihi',
	'LBL_EXPIRATION_DATE' => 'Son Geçerlilik Tarihi',
	'LBL_FILE_EXTENSION'  => 'Dosya uzantısı',
    'LBL_KBDOC_APPROVER_NAME' => 'Onaylayanın İsmi',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Bilgi Tabanı',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Bilgi Tabanı Admin',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Admin Bilgi Tabanı',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Belirtilmemiş',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Etiketler:',
	'LBL_KBDOC_BODY' => 'Gövde:',
	'LBL_KBDOC_APPROVED_BY' =>'Onaylayan Kişi:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_eki',
	'LBL_KBDOC_ATTS_TITLE' =>'Ekleri indir:',
	'LBL_DOC_NAME' => 'Doküman İsmi:',
	'LBL_FILENAME' => 'Dosya İsmi:',
	'LBL_DOC_VERSION' => 'Revizyon:',
	'LBL_CATEGORY_VALUE' => 'Kategori:',
	'LBL_SUBCATEGORY_VALUE'=> 'Alt Kategori:',
	'LBL_DOC_STATUS'=> 'Durum:',
	'LBL_LAST_REV_CREATOR' => 'Revizyonu Oluşturan:',
	'LBL_LAST_REV_DATE' => 'Revizyon Tarihi:',
	'LBL_DOWNNLOAD_FILE'=> 'Ekler:',
	'LBL_DET_RELATED_DOCUMENT'=>'İlişkili Doküman:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"İlişkili Dokümanın Revizyonu:",
	'LBL_DET_IS_TEMPLATE'=>'Şablon? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Doküman Tipi:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Harici Makale?:',
	'LBL_SHOW_TAGS' => 'Daha Fazla Etiket Göster',
    'LBL_HIDE_TAGS' => 'Etiketleri Gizle',
	'LBL_TEAM'=> 'Takım:',
	'LBL_DOC_DESCRIPTION'=>'Tanım:',
	'LBL_KBDOC_SUBJECT' =>'Konusu:',
	'LBL_DOC_ACTIVE_DATE'=> 'Yayın Tarihi:',
	'LBL_DOC_EXP_DATE'=> 'Son Geçerlilik Tarihi:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Makaleleri Göster',
	'LBL_LIST_FORM_TITLE' => 'Doküman Listesi',
	'LBL_LIST_DOCUMENT' => 'Doküman',
	'LBL_LIST_CATEGORY' => 'Kategori',
	'LBL_LIST_SUBCATEGORY' => 'Alt Kategori',
	'LBL_LIST_REVISION' => 'Revizyon',
	'LBL_LIST_LAST_REV_CREATOR' => 'Yayınlayan',
	'LBL_LIST_LAST_REV_DATE' => 'Revizyon Tarihi',
	'LBL_LIST_VIEW_DOCUMENT'=>'Göster',
    'LBL_LIST_DOWNLOAD'=> 'İndir',
	'LBL_LIST_ACTIVE_DATE' => 'Yayın Tarihi',
	'LBL_LIST_EXP_DATE' => 'Son Geçerlilik Tarihi',
	'LBL_LIST_STATUS'=>'Durum',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Yazar',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'En Çok Gösterilen Makaleler',
	'LBL_LIST_MOST_RECENT' => 'En Son Makaleler',
    'LBL_LIST_APPROVED_BY' => 'Onaylayan Kişi',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Doküman İsmi:',
	'LBL_SF_CATEGORY' => 'Kategori:',
	'LBL_SF_SUBCATEGORY'=> 'Alt Kategori:',
	'LBL_SF_ACTIVE_DATE' => 'Yayın Tarihi:',
	'LBL_SF_EXP_DATE'=> 'Son Geçerlilik Tarihi:',

	'DEF_CREATE_LOG' => 'Doküman Oluşturuldu',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Ara',
    'LBL_TAB_BROWSE' => 'Göz at',
    'LBL_TAB_ADVANCED' => 'Gelişmiş Arama',
    'LBL_MENU_FTS' => 'Tüm Metni Ara',
    'LBL_FTS_EMPTY_STRING' =>  'Boş bir dize üzerinde tam metin araması gerçekleştirilemez',
    'LBL_SEARCH_WITHIN' => 'İçinde ara:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Bu kelimeleri içeren:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Bu kelimeleri içermeyen:',  
    'LBL_UNDER_THIS_TAG' => 'Bu Etiketi Kullanan:',
    'LBL_PUBLISHED' => 'Yayınlandı:',
    'LBL_EXPIRES' => 'Son Geçerlilik:',
    'LBL_TIMES_VIEWED' => 'Sıklığı görüntüle:',    
    'LBL_ATTACHMENTS' => 'Ekler:',
    'LBL_SAVE_SEARCH_AS' => 'Aramayı başka adla kaydet:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Bilgi Bankası için Kaydedilmiş Arama filtresi olarak belirlenen girdileri kaydeder.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Önceden Kaydedilmiş Aramalar:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Var olan Kaydedilmiş Aramayı Değiştir veya Sil.',
    'LBL_UPDATE' => 'Güncelle',
    'LBL_DELETE' => 'Sil',
    'LBL_SHOW_OPTIONS' => 'Daha Fazla Seçenek',
    'LBL_AND' => 've',
    'LBL_SEARCH' => 'Ara',
    'LBL_CLEAR' => 'Temizle',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Onaylayanın İsmi',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Sıklık',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Ön görüntüleme mevcut değildir, Belge kaydı bulunamadı.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Ön görüntüleme mevcut değildir, Belge var, ama içeriği oluşturulmamış.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Etiketsiz Makaleler',
    'LBL_TOP_TEN_LIST_TITLE' => 'En Çok Görüntülenen 10 Makale',
    'LBL_SHOW_SYNTAX_HELP' => 'Sözdizimi Yardım',
    'LBL_MISMATCH_QUOTES_ERR' => 'Bu sorgu, girildiği şekilde çalışmayacaktır. Her açılan çift tırnak, bir çift tırnak ile kapatılmalıdır. Eğer içinde çift tırnak olan bir sorgu yapmak istiyorsanız, önüne ters bölü koyun. (&#92;")', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<b>Sorgulama Yardımı:</b><p> </p> <ol> <li>Sorgu sonucunun bir kelimeyi içermesini şart koşmak için Artı işareti (+) kullanın</li> <li>Sonucun bir kelimeyi içermesini istemiyorsanız Eksi işareti (-) kullanınız. Sorgu sonucunun içermesini istemediğiniz kelimeleri belirmek için nu alanı dolduruyorsanız, eksi işareti (-) gerekli değildir.</li> <li>Çift tırnak içerisinde  birden fazla kelime ("örnek1 örnek2") kullanabilirsiniz. Sorguda açılış ve kapanış tırnaklarının her ikisinin de bulunması gerekir, yoksa arama çalışmaz.<br> Tırnak karakterini aramak için, ters slash ve tırnak birlikte kullanın (\\")</li><li>Tek tırnak (&#92;&#39;) ile olduğu gibi aranır ve gruplama için kullanılmaz.</li></ol><p></p><p><b>Örnek: </b><br><br>"Sugar" veya "CRM" içeren makalelerden, "Bilgi Bankası" ve "etkileyici" kelimelerini zorunlu olarak içeren ancak "demo" veya "Eski Zaman" içermeyen bir arama için şu metni kullanın:<br>Sugar CRM +"Bilgi Bankası" +etkileyici -demo -"Eski Zaman"</p><br><p><b>Notlar: </b><br></p><ol><li>Büyük küçük harf fark etmez.</li><li>Boşluk ve virgüller, kabul edilen ayıraçlardır.</li><li> (-) veya (+) ile kelimenin arasına boşluk koymayın.</li></ol><p></p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Alt Etiket',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Alt Etiketler',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Makale',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Makaleler',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Bu Etiketin İçeriği',
    
	//error messages
	'ERR_DOC_NAME'=>'Doküman İsmi',
	'ERR_DOC_ACTIVE_DATE'=>'Yayın Tarihi',
	'ERR_DOC_EXP_DATE'=> 'Son Geçerlilik Tarihi',
	'ERR_FILENAME'=> 'Dosya ismi',
	'ERR_DOC_VERSION'=> 'Doküman Sürümü',
	'ERR_DELETE_CONFIRM'=> 'Bu revizyonu silmek istediğinizden emin misiniz?',
	'ERR_DELETE_LATEST_VERSION'=> 'Dokümanın son revize edilmiş halini silmeye izniniz yok.',
	'LNK_NEW_MAIL_MERGE' => 'Posta Birleştir',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Posta Birleştirme Şablonu:',
	'ERR_FILESIZE' => 'Dosya çok büyük. Max dosya boyutu:',

	'LBL_TREE_TITLE' => 'Dokümanlar',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Doküman İsmi',
	'LBL_CONTRACT_NAME'=>'Kontrat İsmi:',
	'LBL_LIST_IS_TEMPLATE'=>'Şablon?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Doküman Tipi',
	'LBL_LIST_SELECTED_REVISION'=>'Seçili Revizyon',
	'LBL_LIST_LATEST_REVISION'=>'En Son Revizyon',
	'LBL_CASES_SUBPANEL_TITLE'=>'İlişkili Talepler',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'İlişkili E-Postalar',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'İlişkili Kontratlar',
	'LBL_LAST_REV_CREATE_DATE'=>'Son revizyon oluşturulma tarihi',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Anahtar Kelimeler:',
    'LBL_CASES' =>'Talepler',
    'LBL_CASE_ID' => 'Talep ID',
    'LBL_CASE'    => 'Talep:',
    'LBL_EMAILS' =>'E-Postalar',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Açılır-listeden bir eylem seçin',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Ağaçtan Üst Etiketi seçin',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Ağaçtan silinecek etiketleri seçin',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Ağaçtan yeniden isimlendirilecek etiketi seçin',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Etiket zaten var',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Yeni etiket ismini girin',
    'LBL_SAVING_THE_TAG' => 'Etiket kaydediliyor...',
    'LBL_CREATING_NEW_TAG' => 'Yeni etiket oluşturuluyor...',
    'LBL_TAGS_ROOT_LABEL' => 'Etiketler',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'SSS Etiket yeniden isimlendirilemiyor',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'İlk Makaleleri Seç',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Etiketlerin Uygulanacağı Makaleleri Seç',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'İlk Makaleleri Seç',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Ağaçtan Bir Etiket Seç',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Ağaçtan Etiketleri Seç',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Makaleleri Etiketlere taşıyor....',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Etiketleri Makalelere uyguluyor ...',
    'LBL_ROOT_TAG_MESSAGE' => 'Kök etiket, makale ile seçilemiyor/ilişkilendirilemiyor',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Kök etiket yeniden isimlendirilemez',
    'LBL_TYPE_NEW_NODE_NAME'=>'Lütfen bir etiket isim giriniz',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Kaynak ve Hedef etiketleri aynı',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Etiket Sil',
    'LBL_SELECT_TAG'  => 'Etiket Seç',
    'LBL_APPLY_TAG'  =>  'Etiket Uygula',
    'LBL_MOVE'  =>   'Taşı',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Etiket Tarayıcı Yükleniyor ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Etiket için bu işlem yapılırken bir hata alındı.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'HATA: Bir dosya girdi elementi değil',
    'LBL_CREATE_NEW_TAG'  => 'Yeni Etiket Oluştur',
    'LBL_SEARCH_TAG'  => 'Ara',
    'LBL_TAG_NAME'  =>'Makale İsmi:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Silinecek etiketleri seç',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Aranması istenen etiket ismini yaz',
    'LBL_KB_NOTIFICATION' => 'Doküman yayınlandı',
    'LBL_KB_PUBLISHED_REQUEST' => 'onaylama ve yayınlama için size bir doküman atadı.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Dokümanın statüsü taslak olarak değiştirildi',  
    'LBL_CONTRACTS' => 'Kontratlar',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Ağaçtan üst etiketi seçin',
	'LBL_CLICK_APPLY_TAG' => 'Etiketi Uygula&#39;ya tıklayın',	
	'LBL_HEAD_TAGS' => 'Etiketler',
	'LBL_REMOVE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Değiştir' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Varsayılan link metni.',
    'LBL_SELECT_NODE' => 'Bir nod seçin',
    'LBL_ARTICLE_EXISTS' => 'Makale zaten var',


);
?>
