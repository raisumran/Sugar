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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Priradiť do tímu',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Prihlásenie alebo heslo nie je správne',
	'ERR_BODY_TOO_LONG'		=> 'Telo textu príliš dlhé na zaznamenanie celého emailu. Ustrihnuté.',
	'ERR_INI_ZLIB'			=> 'Dočasne nemôžné vypnúť Zlib kompresiu. "Nastavenia testu" môžu zlyhať.',
	'ERR_MAILBOX_FAIL'		=> 'Nepodarilo sa získať žiadne mailové kontá.',
	'ERR_NO_IMAP'			=> 'Nenájdene IMAP knižnice. Prosím, vyriešte to pred tým ako budete pokračovať k prichádzajúcim emailom.',
	'ERR_NO_OPTS_SAVED'		=> 'Žiadne optimá neboli uložené s vašim prichádzajúcim emailovým kontom. Prosím, skontrolujte nastavenia.',
	'ERR_TEST_MAILBOX'		=> 'Skontrolujte nastavenia a skúste to znova.',
    'ERR_DELETE_FOLDER' => 'Could not delete folder.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Could not unsubscribe from folder before deletion.',

	'LBL_APPLY_OPTIMUMS'	=> 'Použiť optimá',
	'LBL_ASSIGN_TO_USER'	=> 'Priradiť užívateľovi',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Možnosť automatickej odpovede',
	'LBL_AUTOREPLY'			=> 'šablóna automatickej odpovede',
	'LBL_AUTOREPLY_HELP'	=> 'Vyberte automatickú odpoveď na e-mail odosielateľa a oznámte že ich reakcia bola prijatá.',
	'LBL_BASIC'				=> 'Nastavenie Došlej pošty',
	'LBL_CASE_MACRO'		=> 'Marko prípadu',
	'LBL_CASE_MACRO_DESC'	=> 'Nastavte makro, ktoré bude analyzované a používane k prepojeniu importovaných emailov k prípadu.',
	'LBL_CASE_MACRO_DESC2'	=> 'Nastavte toto na hocijakú hodnotu, ale rezervujte "%1".',
	'LBL_CERT_DESC'			=> 'Násilná validácia Bezpečnostného Certifikácu emailového servera - nepoužívajte ak používate vlastný podpis.',
	'LBL_CERT'				=> 'Platný certifikát',
	'LBL_CLOSE_POPUP'		=> 'Zavrieť okno',
	'LBL_CREATE_NEW_GROUP'	=> '- Vytvoriť skupinu na Uloženie -',
	'LBL_CREATE_TEMPLATE'	=> 'Vytvoriť',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'prihlásiť zložky',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Prednastavenie:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Prednastavenie:',
	'LBL_DELETE_SEEN'		=> 'Vymazať prečítané emaily po importovaní',
	'LBL_EDIT_TEMPLATE'		=> 'Upraviť',
	'LBL_EMAIL_OPTIONS'		=> 'Možnosti zaobchádzania s emailom',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Možnosti spracovania odrazu',
	'LBL_FILTER_DOMAIN_DESC'=> 'Špecifikujte doménu na ktorú budú odosielané automatické odpovede.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Vyberte na automatické vytváranie emailových záznamov v Sugar pre všetky prichádzajúce emaily.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Skupinový priečinok musí byť vybratný pre možnosť vytvoriť prípad.',
	'LBL_FILTER_DOMAIN'		=> 'Neodosielať automatické odpovede na túdo doménu',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> 'Hľadanie optimum pripojenia premenných.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Hľadanie optimum konfigurácie',
	'LBL_FIND_SSL_WARN'		=> 'Testovanie SSL môže trvať dlhší čas. Prosím budte trpezlivý.',
	'LBL_FORCE_DESC'		=> 'Niektoré IMAP/POP3 serveri vyžadujú špeciálne switche. Skontrolujte vynútenie negatívneho switcha pri pripojení (e.g., /notls)',
	'LBL_FORCE'				=> 'Vynútiť negatívny',
	'LBL_FOUND_MAILBOXES'	=> 'Nájdene nasledovné použiteľné priečinky. <br />Kliknite na jeden aby ste si ho vybrali.',
	'LBL_FOUND_OPTIMUM_MSG'	=> 'Nájdené optimálne nastavenia. Stlačte tlačidlo nižšie aby ste ich aplikovali na váš emailový účet.',
	'LBL_FROM_ADDR'			=> 'Z adresy:',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Poskytnutá emailová adresa sa nemusí zobrazovať v \"od\" adresovej sekcii odoslaného emailu, kvôli obmedzeniam uloženým poskytovateľom emailu. V týchto prípadoch bude použitá emailová adresa definovaná v odchádzajúcom mailovom servri.",
	'LBL_FROM_NAME_ADDR'	=> 'Od Meno/email',
	'LBL_FROM_NAME'			=> 'Od meno:',
	'LBL_GROUP_QUEUE'		=> 'Zaradiť do skupiny',
    'LBL_HOME'              => 'Domov',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Používanie emailového účtu',
	'LBL_LIST_NAME'			=> 'Názov:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Typ',
	'LBL_LIST_SERVER_URL'	=> 'Mailový server',
	'LBL_LIST_STATUS'		=> 'Stav',
	'LBL_LOGIN'				=> 'Užívateľské meno',
	'LBL_MAILBOX_DEFAULT'	=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'	=> 'Použi SSL pri pripájaní. Ak to nebude fungovať, skontrolujte či vaša PHP inštalácia v konfigurácii zahŕňa "--with-imap-ssl".',
	'LBL_MAILBOX_SSL'		=> 'Použiť SSL',
	'LBL_MAILBOX_TYPE'		=> 'možné akcie',
	'LBL_DISTRIBUTION_METHOD' => 'Distribučná metóda',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Nová šablóna automatických odpovedí',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Vyberte automatickú odpoved pre oznámenie odosielateľom emailov, že bol vytvorený prípad. Email zahŕňa číslo prípade v Predmete, ktorý sa drží nastavnia Makra Prípadu.',
	'LBL_MAILBOX'			=> 'Monitorované zložky',
	'LBL_TRASH_FOLDER'		=> 'Kôš',
	'LBL_GET_TRASH_FOLDER'	=> 'získať z koša',
	'LBL_SENT_FOLDER'		=> 'Odoslané',
	'LBL_GET_SENT_FOLDER'	=> 'získať s odoslané zložky',
	'LBL_SELECT'				=> 'Výber',
	'LBL_MARK_READ_DESC'	=> 'Označiť správy ako prečítané na mail servri pri importovaní; nevyzamať.',
	'LBL_MARK_READ_NO'		=> 'Email označený ako vymazaný po importovaní.',
	'LBL_MARK_READ_YES'		=> 'Email ponechaný na serveri po importovaní',
	'LBL_MARK_READ'			=> 'Ponechať správy na servri',
	'LBL_MAX_AUTO_REPLIES'	=> 'Počet automatických odpovedí',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Nastavte maximálny počet automatických odpovedí na odoslanie do unikátnej emailovej adresy počas 24 hodinového intervalu.',
	'LBL_PERSONAL_MODULE_NAME' => 'Osobný emailový účet',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Osobný emailový účet',
	'LBL_CREATE_CASE'      => 'Vytvoriť prípad z emailu',
	'LBL_CREATE_CASE_HELP'  => 'Vyberte na automatické vytvorenie prípadu v Sugar z príchodzích emailov.',
	'LBL_MODULE_NAME'		=> 'Skupinový emailový účet',
	'LBL_MODULE_NAME_SINGULAR' => 'Skupinový emailový účet',
	'LBL_BOUNCE_MODULE_NAME' => 'odskočiť do manipulačnej stranky',
	'LBL_MODULE_TITLE'		=> 'Skupinový emailový účet',
	'LBL_NAME'				=> 'Meno',
    'LBL_NONE'              => 'Nič',
	'LBL_NO_OPTIMUMS'		=> 'Nenájdené optimá. Prosím, skontrolute svoje nastavenia a skúste znovu.',
	'LBL_ONLY_SINCE_DESC'	=> 'Keď používate POP3, PHP nemôže filtrovať Nové/Neprečítané správy. Táto vlajka umožňuje požiadavku skontrolovať správy od kedy bol naposledy kontrolovaný. Toto výrazne zvýši váš výkon ak váš mail server nepodporuje IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Nie. Skontrolujte voči všetkým emailom na serveri.',
	'LBL_ONLY_SINCE_YES'	=> 'Áno.',
	'LBL_ONLY_SINCE'		=> 'Importovať iba od poslednej kontroly:',
	'LBL_OUTBOUND_SERVER'	=> 'kontrola hesla',
	'LBL_PASSWORD_CHECK'	=> 'Kontrola hesla',
	'LBL_PASSWORD'			=> 'Heslo',
	'LBL_POP3_SUCCESS'		=> 'Vaše POP3 test pripojenie bolo úspešné.',
	'LBL_POPUP_FAILURE'		=> 'Test pripojenie zlyhalo. Chyba je zobrazená nižšie.',
	'LBL_POPUP_SUCCESS'		=> 'Test pripojenie úspešné. Vaše nastavenia fungujú.',
	'LBL_POPUP_TITLE'		=> 'Nastavenia testu',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Dostávam zoznam položiek',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Vyberte odoberané priečinok',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Vyberte Kôš',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Vyberte odoslaný priečinok',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Naslednovné priečiny buď neexistujú alebo boli vymazané zo servera.',
	'LBL_PORT'				=> 'Mail Server Port',
	'LBL_QUEUE'				=> 'Poradie emailového konta',
	'LBL_REPLY_NAME_ADDR'	=> 'Odpovedať Meno/Email',
	'LBL_REPLY_TO_NAME'		=> 'Odpovedať na meno',
	'LBL_REPLY_TO_ADDR'		=> '"Odpoveď na" Adresu',
	'LBL_SAME_AS_ABOVE'		=> 'Používať z Meno/Adresa',
	'LBL_SAVE_RAW'			=> 'Uložiť čistý zdroj',
	'LBL_SAVE_RAW_DESC_1'	=> 'Vyberte "Áno" ak chcete zachovať čistý zdroj každého importovaného emailu.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Veľké prílohy môžu spôsobiť zlyhanie s konzervatívne alebo nesprávne nastavenými databázami.',
	'LBL_SERVER_OPTIONS'	=> 'Pokročilé nastavenia',
	'LBL_SERVER_TYPE'		=> 'Mail Server Protokol',
	'LBL_SERVER_URL'		=> 'Adresa Mail Servera',
	'LBL_SSL_DESC'			=> 'Ak váš emailový server podporuje zabezpečené soketové pripojenie, aktivovaním tohto vynútite SSL pripojenie pri importovaní emailu.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Vybraný tím má prístup k emailovému účtu',
	'LBL_SSL'				=> 'Použiť SSL',
	'LBL_STATUS'			=> 'Stav',
	'LBL_SYSTEM_DEFAULT'	=> 'Prednastavené systémom',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Nastavenia testu',
	'LBL_TEST_SUCCESSFUL'	=> 'Pripojenie dokončené úspečne.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Chvílu...',
	'LBL_TLS_DESC'			=> 'Použiť Transport Layer Security keď sa pripájate k emailovému serveru - použite to len ak váš emailový server podporuje tento protokol.',
	'LBL_TLS'				=> 'použiť TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Prichádzajúce emaily deaktivované.',
	'LBL_WARN_IMAP'			=> 'upozornenia',
	'LBL_WARN_NO_IMAP'		=> 'Prichádzajúce emaily nemôžu fungovať bez IMAP c-klient knižnicami aktivované/kompilované s PHP modulom. Prosím, nakontaktujte administrátora pre vyriešenie tohto problému.',

	'LNK_CREATE_GROUP'		=> 'Vytvoriť novú skupinu',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nový skupinový emailový účet',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'nové odskočenie do manipulačnej stranky',
	'LNK_LIST_MAILBOXES'	=> 'Všetky mailové účty',
	'LNK_LIST_QUEUES'		=> 'Všetky zástupy',
	'LNK_LIST_SCHEDULER'	=> 'plánovač',
	'LNK_LIST_TEST_IMPORT'	=> 'import testovaného emailu',
	'LNK_NEW_QUEUES'		=> 'Vytvoriť nový zástup',
	'LNK_SEED_QUEUES'		=> 'Seedovať zástupy od tímov',
	'LBL_GROUPFOLDER_ID'	=> 'ID skupinovej zložky',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Prideliť ku skupinovej zložke',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Povolte užívateľom posielať emaily používaním "od" Meno a Adresu ako odpovedať na adresu',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Keď je táto voľba zvolená, Od Meno a Od Emailová Adresa pridružená k tomuto skupinovému účtu sa zobrazí ako možnosť pre pole Od pri vytváraní emailov pre užívateľov, ktorí majú prístup k skupinovému emailovému účtu.',
    'LBL_STATUS_ACTIVE'     => 'Aktívny',
    'LBL_STATUS_INACTIVE'   => 'Neaktívny',
    'LBL_IS_PERSONAL' => 'osobný',
    'LBL_IS_GROUP' => 'skupina',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importujte emaily automaticky',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Upozornenie: Upravujete automatické importovacie nastavenia, čo môže mať za následok stratu dát.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Upozornenie: Automatický import musí aktivovaný keď automaticky vytvárate prípade.',
	'LBL_EDIT_LAYOUT' => 'Upraviť rozloženie' /*for 508 compliance fix*/,
);
?>
