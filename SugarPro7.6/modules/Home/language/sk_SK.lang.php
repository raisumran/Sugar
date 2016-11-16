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
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{str name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_ABOUT_TITLE' => 'About &raquo; {{appId}}',
  'LBL_MODULE_NAME' => 'Domov',
  'LBL_MODULE_NAME_SINGULAR' => 'Domov',
  'LBL_MODULES_TO_SEARCH' => 'Moduly na vyhľadávanie',
  'LBL_NEW_FORM_TITLE' => 'Nový kontakt',
  'LBL_FIRST_NAME' => 'Meno',
  'LBL_LAST_NAME' => 'Priezvisko',
  'LBL_LIST_LAST_NAME' => 'Priezvisko',
  'LBL_PHONE' => 'Telefón:',
  'LBL_EMAIL_ADDRESS' => 'Email adresa:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Moja Pipeline',
  'LBL_PIPELINE_FORM_TITLE' => 'Pipeline podľa etapy predaja',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampaň ROI',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Miera mojich úspešne uzavretých obchodných príležitostí',
  'LNK_NEW_CONTACT' => 'Vytvoriť kontakt',
  'LNK_NEW_ACCOUNT' => 'Vytvoriť účet',
  'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
  'LNK_NEW_QUOTE' => 'Vytvoríť ponuku',
    'LBL_SOURCE_JQUERY' => 'jQuery je veľmi jednoduchá a stručná JavaScript knižnica, ktorá zjednodušuje parsovanie HTML dokumentu, spracovanie udalostí, animáciu a Ajax interakcie pre rýchly vývoj webových aplikácií.',
    'LBL_SOURCE_PLACEHOLDER' => 'jQuery- Placeholder - plugin, ktorý umožňuje HTML5 Placeholder podporu pre staršie prehliadače.',
    'LBL_SOURCE_JQUERYUI' => 'jQuery UI - oficiálna jQuery knižnica používateľského rozhrania.',
    'LBL_SOURCE_LESSPHP' => 'lessphp - Kompilátor pre LESS písaný v PHP.',
    'LBL_SOURCE_BACKBONE' => 'Backbone.js - A MVC framework (štruktúra, rámec) pre Javascript-heavy aplikácie.',
    'LBL_SOURCE_CHOSEN' => 'Chosen - knižnica pre vytváranie dlhých, neskladných boxov prívetivejšie.',
    'LBL_SOURCE_HANDLEBARS' => 'Handlebars - nástroj na efektívnu výstavbu sémantických šablón.',
    'LBL_SOURCE_JASMINE' => 'Jasmine - vývojový rámec pre testovanie JavaScriptu kódu.',
    'LBL_SOURCE_JQUERY_IFRAME' => 'jquery.iframe-transport.js - jQuery Ajax transport plugin, ktorý podporuje nahrávanie súborov cez skryté iframe.',
    'LBL_SOURCE_SINON' => 'sinon.js - samostatný testovací špióni pre JavaScript.',
    'LBL_SOURCE_STASH' => 'Stash - knižnica pre JavaScript, ktorý robí používanie offline úložiska jednoduchým.',
    'LBL_SOURCE_BOOTSTRAP' => 'Twitterbootstrap - HTML, CSS a JS toolkit z Twitter-a.',
    'LBL_SOURCE_ASYNC' => 'Async - nástroj pre uzol a prehliadač.',
    'LBL_SOURCE_PHPEXCEL' => 'PHPExcel - Čistá PHP knižnica pre čítanie a zápis tabuľkových súborov.', 
    'LBL_SOURCE_TIMEAGO' => 'jquery timeago - jQuery plugin, ktorý uľahčuje podporu automatickej aktualizácie nejasných časových pečiatok.',
  'LNK_NEW_LEAD' => 'Vytvoriť príležitosť',
  'LNK_NEW_CASE' => 'Vytvoriť udalosť',
  'LNK_NEW_NOTE' => 'Vytvoriť poznámku alebo prílohu',
  'LNK_NEW_CALL' => 'Záznam volania',
  'LNK_NEW_EMAIL' => 'Archivovať Email',
  'LNK_COMPOSE_EMAIL' => 'Zostaviť Email',
  'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
  'LNK_NEW_TASK' => 'Vytvoriť úlohu',
  'LNK_NEW_BUG' => 'Hlásenie o poruche',
  'LBL_ADD_BUSINESSCARD' => 'Vložiť vizitku',
  'ERR_ONE_CHAR' => 'Prosím, vložte najmenej jedno písmeno alebo číslo pre Vaše vyhľadávanie ...',
  'LBL_OPEN_TASKS' => 'Moje otvorené úlohy',
  'LBL_SEARCH_RESULTS_IN' => 'v',
  'LNK_NEW_SEND_EMAIL' => 'Zostaviť Email',
  'LBL_NO_ACCESS' => 'Nemáte prístup na toto miesto. kontaktujte administrátora k získaniu prístupu',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Bez výsledku --',
  'LBL_NO_RESULTS' => '<h2>Neboli nájdené žiadne výsledky. Nech sa páči, hľadať znovu..</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Tipy na vyhľadávanie:</h3><ul><li>Uistite sa, že máte zvolenú správnu kategóriu. </ Li> <li> Rozšírte svoje vyhľadávacie kritériá. </ Li> <li> Ak stále nemôžete nájsť žiadne výsledky skúste Rozšírené možnosti vyhľadávania.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Ráčte <a href="javascript: window.location.reload()">okno načítať znovu</a> k použitiu tohto Sugar Dashlet.',
  'LBL_ADD_DASHLETS' => 'Pridať Sugar Dashlets',
  'LBL_ADD_PAGE' => 'Pridať stranu',
  'LBL_DEL_PAGE' => 'Vymazať stranu',
  'LBL_WEBSITE_TITLE' => 'Webová stránka',
  'LBL_RSS_TITLE' => 'Prepojenie na Noviny',
  'LBL_DELETE_PAGE' => 'Vymazať stranu',
  'LBL_CHANGE_LAYOUT' => 'Zmena rozloženia',
  'LBL_RENAME_PAGE' => 'premenovať stranu',
  'LBL_CLOSE_DASHLETS' => 'Zavrieť',
  'LBL_OPTIONS' => 'Možnosti',
  // dashlet search fields
  'LBL_TODAY'=>'Dnes',
  'LBL_YESTERDAY' => 'Včera',
  'LBL_TOMORROW'=>'Zajtra',
  'LBL_LAST_WEEK'=>'Posledný týždeň',
  'LBL_NEXT_WEEK'=>'Ďalší týždeň',
  'LBL_LAST_7_DAYS'=>'Posledných 7 dní',
  'LBL_NEXT_7_DAYS'=>'Ďalších 7 dní',
  'LBL_LAST_MONTH'=>'Posledný mesiac',
  'LBL_NEXT_MONTH'=>'Ďalší mesiac',
  'LBL_LAST_QUARTER'=>'Posledný štvrťrok',
  'LBL_THIS_QUARTER'=>'Tento štvrťrok',
  'LBL_LAST_YEAR'=>'Posledný rok',
  'LBL_NEXT_YEAR'=>'Ďalší rok',
  'LBL_LAST_30_DAYS' => 'Posledných 30 dní',
  'LBL_NEXT_30_DAYS' => 'Ďalších 30 dní',
  'LBL_THIS_MONTH' => 'Tento mesiac',
  'LBL_THIS_YEAR' => 'Tento rok',

  'LBL_MODULES' => 'Moduly',
  'LBL_CHARTS' => 'Grafy',
  'LBL_TOOLS' => 'Nástroje',
  'LBL_WEB' => 'Web',
  'LBL_SEARCH_RESULTS' => 'Výsledok vyhľadávania',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Zobrazenia modulu',
      'Portal' => 'Portál',
      'Charts' => 'Grafy',
      'Tools' => 'Nástroje',
      'Miscellaneous' => 'Rôzne'),
  'LBL_MAX_DASHLETS_REACHED' => 'Dosiahli ste maximálny počet Sugar Dashletov, nastavený administrátorom. Ráčte nejaký Sugar Dashlet zrušiť, aby ste mohli pridať nový.',
  'LBL_ADDING_DASHLET' => 'Pridanie Sugar Dashlet',
  'LBL_ADDED_DASHLET' => 'Sugar Dashlet pridaný',
  'LBL_DASHBOARD_LAYOUT_CONFIRM' => 'Informačné bloky budú prerobené, sú si istý že chcete zmeniť rozloženie stĺpcov?',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Ste si istý, že chete odobrať tento Sugar Dashlet?',
  'LBL_REMOVING_DASHLET' => 'Odoberanie Sugar Dashlet ...',
  'LBL_REMOVED_DASHLET' => 'Sugar Dashlet odobratý',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Hlavný',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtre',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Len moje položky',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Názov',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Zobraziť riadky',
  'LBL_NO_DASHBOARD_CONFIGURED' => 'No dashboard configured.',
  'LBL_CREATE_DASHBOARD_LINK' => 'Create a dashboard',

  'LBL_DASHLET_WEBPAGE_NAME' => 'Webová stránka',
  'LBL_DASHLET_WEBPAGE_DESC' => 'Webová stránka',
  'LBL_DASHLET_WEBPAGE_URL' => 'URL',
  'LBL_DASHLET_WEBPAGE_URL_HELP' => 'Some sites may not load correctly due to insecure content or policies.',

  'LBL_DASHLET_ADD' => 'Pridať informačný blok',
  'LBL_DASHLET_DELETE' => 'Vymazať Sugar Dashlet',
  'LBL_DASHLET_REFRESH' => 'Obnoviť Sugar Dashlet',
  'LBL_DASHLET_EDIT' => 'Upraviť Sugar Dashlet',
  'LBL_DASHBOARD_TITLE' => 'Názov informačného panelu',
  'LBL_CREATE_DASHBOARD_MENU' => 'Create Dashboard',
  'LBL_DASHBOARD_EDIT' => 'Upraviť informačný panel',
  'LBL_DASHBOARD_ADD_ROW' => 'Pridať riadok',
  'LBL_DASHBOARD_ADD_1_COLUMN' => '+ 1stĺpec',
  'LBL_DASHBOARD_ADD_2_COLUMNS' => '+ 2 stĺpce',
  'LBL_DASHBOARD_ADD_3_COLUMNS' => '+ 3 stĺpce',
  'LBL_DASHBOARD_1_COLUMN_LAYOUT' => '1 rozloženie stĺpcov',
  'LBL_DASHBOARD_2_COLUMN_LAYOUT' => '2 rozloženie stĺpcov',
  'LBL_DASHBOARD_3_COLUMN_LAYOUT' => '3 rozloženie stĺpcov',

  'LBL_TRAINING_TITLE' => 'Školenie',
  'LBL_SEARCH_DASHLET' => 'Vyhľadanie informačných blokov',
  'LBL_CREATING_NEW_PAGE' => 'Vytváranie novej strany ...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Máte vytvorenú novú stranu. Môžete pridať nový obsah pomocou možnosti Pridať Sugar Dashlet.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Ste si istý, že chcete vymazať túto stranu?',
  'LBL_DELETE_DASHBOARD_CONFIRM' => 'Ste si istý, že chcete zmazať tento informačný panel?',
  'LBL_DELETE_DASHBOARD_SUCCESS' => 'Informačný panel "{{name}}" bol vymazaný.',
  'LBL_SAVING_PAGE_TITLE' => 'Ukladanie názvu strany ...',
  'LBL_RETRIEVING_PAGE' => 'Načítavanie strany ...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Môj Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Predaje',
  'LBL_HOME_PAGE_3_NAME' => 'Podpora',
  'LBL_HOME_PAGE_6_NAME' => 'Marketing',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Stopár',
  'LBL_CLOSE_SITEMAP' =>'Zavrieť',

  'LBL_SEARCH' => 'Vyhľadávanie',
  'LBL_CLEAR' => 'Zmazať',

  'LBL_BASIC_CHARTS' => 'Základné grafy',
  'LBL_REPORT_CHARTS' => 'Hlasenie grafov',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Moje obľúbené reporty',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Hlásenia tímu Global',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Hlásenia môjho tímu',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Moje uložené hlásenie',

  'LBL_DASHLET_SEARCH' => 'Hľadať Sugar Dashlet',

//ABOUT page
  'LBL_VERSION' => 'Verzia',
  'LBL_BUILD' => 'Vybudovať',
    'TPL_ABOUT' => 'O {{product_name}}, Verzia {{version}} (Build {{build}}{{#if custom_version}} - {{custom_version}}{{/if}})',
    'LBL_RESOURCES' => 'zdroje',
    'LBL_RESOURCES_DOCUMENTATION' => 'Dokumentácia',
    'LBL_RESOURCES_DEVELOPERS' => 'Vývojári',
    'LBL_RESOURCES_SUGAR_INFO' => 'SugarCRM informácie o firme',
    'LBL_LANGUAGE_PACKS' => 'Jazykové balíky',
    'TPL_LANGUAGE_PACKS_PROVIDED_BY' => 'Poskytuje {{{link}}}',
    'LBL_SUGAR_VERSION' => 'version',
    'LBL_SUGAR_SOURCECODE_DESC' => 'Sales force automation application.',
    'LBL_THIRD_PARTY_SOFTWARE_TITLE' => 'Third Party Software',
    'LBL_THIRD_PARTY_SOURCECODE' => 'Information about third party code used in this product, including related license terms, is available at',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Edícia Sugar Community',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Profesionál",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Spoločnosť",
  'LBL_AND' => "a",
  'LBL_ARE' => "sú",
  'LBL_TRADEMARKS' => 'obchodná značka',
  'LBL_OF' => 'z',
  'LBL_FOUNDERS' => 'Zakladatelia',
  'LBL_DEVELOPERS' => 'Vývojári',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Pripojiť Sugar Community',
  'LBL_DETAILS_SUGARFORGE' => 'Spolupracovať a vyvíjať rozšírenia Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Kúpiť a predať certifikované rozšírenia Sugar',
  'LBL_TRAINING' => 'Školenie',
  'LBL_DETAILS_TRAINING' => 'Naučte sa o používaní Sugar online a interaktívnom výukovom obsahu',
  'LBL_FORUMS' => 'Fóra',
  'LBL_DETAILS_FORUMS' => 'Diskusie Sugar s expertmi komunity užívateľov a vývojárov',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Vyhľadávanie znalostí založených na témach užívateľov a vývojárov',
  'LBL_DEVSITE' => 'Vývojárske stránky',
  'LBL_DETAILS_DEVSITE' => 'Prehliadka liniek zdrojov, výuky a pomoci pre zrýchlenie vývoja Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Vziať SugarCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SugarCRM Noviny',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SugarCRM Training Noviny',
  'LBL_SUGARCRM_FORUMS' => 'SugarCRM Fóra',
  'LBL_SUGARFORGE_NEWS' => 'SugarForge Noviny',
  'LBL_ALL_NEWS' => 'Všetky noviny',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Kliknite na túto linku pre aktuálny zoznam prispievateľov Sugar',
  'LBL_SOURCE_CODE' => 'Zdrojový kód',
  'LBL_SOURCE_SUGAR' => 'Sugar - najpopulárnejšia silná aplikácia automatizácie predaja, vytvorená spoločnosťou SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Šablóna pre PHP vytvorená Barnabášom Debrecénim',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Nastavenie PHP, umožňujúce vývojárom vytvárať a využívať webové služby vytvorené NuSphere Corporation a Dietrichom Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - Kalendár pre vkladanie údajov, ktorý vytvoril Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - knižnica pre vytváranie PDF dokumentov, ktorú vytvoril Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server -  implementácia WebDAV Server v PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - knižnica, ponúkajúca funkcie pre zhustenie a rozbalenie pre Zip formátované archívy, od  Vincenta Blaveta',
  'LBL_SOURCE_SMARTY' => 'Smarty - šablóna pre PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - UI knižnica utilít, uľahčujúcich implementáciu funkcií posilnenia na strane klienta.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - trieda pre úplné funkcie emailového prenosu v PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - minifier Javascript napísaný v PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - umožňuje rýchle, dvojcestné blowfish šifrovanie, bez potreby rozšírenia MCrypt PHP.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - SAX parser pre HTML a iné chybne naformátované dokumenty XML',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Rozšírenie pre Yahoo! Knižnica užívateľského rozhrania od Jacka Slocuma',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Detekcia prehrávača Javascript Flasha vložený skript.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - Editor ovládajúci WYSIWYG pre web pre Web prehliadače, umožňujúce upravovať obsah HTML',
  'LBL_SOURCE_EXT' => 'Ext - JavaScript, framework pre vybudovanie web aplikácie na strane klienta',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - Bezplatná služba CAPTCHA, ktorá pomáha digitalizovať knihy, noviny a staré rádiové šou.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - Trieda PHP na generovanie dokumentov PDF.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - css parser a minimalizátor.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - jednoduchý nástroj SAML pre PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Pretečenie:rolovanie pre mobilné webkity. Prirodzené rolovanie pevnej šírky/výšky elementu.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas je knižnica JavaScript, ktorá pridáva podporu pre HTML5 Canvas pre Internet Explorer. To poskytuje tvary a obrázky pomocou API kreslenia Flash. Podporuje takmer všetky Canvas API a, v mnohých prípadoch, beží rýchlejšie ako iné podobné knižnice, ktoré používajú VML Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - JavaScript InfoVis balík nástrojov, poskytujúci nástroje pre vytváranie vizualizácií interaktívnych údajov pre Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - open source, objektovo orientovaná web aplikácia framework pre PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV data parser pre PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Používa funkcie PHP v JavaScript-e',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - kompatibilné so štandardmi HTML filtrovanie knižnica.',
  'LBL_SOURCE_XHPROF' => 'XHProf - Hierarchický profiler funkcie na úrovni pre PHP.',
  'LBL_DASHLET_TITLE' => 'Moje stránky',
  'LBL_DASHLET_OPT_TITLE' => 'Názov',
  'LBL_DASHLET_OPT_URL' => 'Lokalita webovej stránky',
  'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet výška (v pixeloch)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Sugar Noviny',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Objavovanie Sugar',
	'LBL_POWERED_BY_SUGAR' => 'S podporou SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Viac detailov' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Základné vyhľadávanie' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Pokročilé vyhľadávanie' /*for 508 compliance fix*/,

  'LBL_MOST_ACTIVE_COLLEAGUES' => 'Najaktívnejší',
  'LBL_MOST_ACTIVE_COLLEAGUES_DESC' => 'Zobrazuje interných používateľov, ktorí sú najaktívnejší.',
  'LBL_MOST_CALLS_MADE' => '{{count}} uskutočnené hovory',
  'LBL_MOST_EMAILS_SENT' => '{{count}} odoslané emaily',
  'LBL_MOST_EMAILS_RECEIVED' => '{{count}} prijaté emaily',
  'LBL_MOST_MEETING_HELD' => '{{count}} konané stretnutia',

    'LBL_SUGAR_CUBE_ALT' => 'SugarCRM',


    // Record View Help Text
    'LBL_HELP_RECORD_TITLE' => 'Welcome to the Sugar 7 Help Dashboard',
    'LBL_HELP_RECORD' => 'The Help Dashlet displays specific information about the module you are viewing, provides detailed steps for performing some actions in the module, and directs you where to go for more comprehensive information and support. The Help Dashlet remains open so you can view the steps as you execute the steps in the module.

The Help Dashboard is available for all Sugar 7 modules and can be toggled "open" and "closed" by clicking the Help icon in the application footer.',

);