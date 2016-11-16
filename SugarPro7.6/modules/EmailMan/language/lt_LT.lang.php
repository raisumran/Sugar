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
	'LBL_SEND_DATE_TIME'						=> 'Išsiuntimo data',
	'LBL_IN_QUEUE'								=> 'Vykdomas',
	'LBL_IN_QUEUE_DATE'							=> 'Eilėje data',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Naudoti tik sveikus skaičius nurodant siunčiamų laiškų skaičių per vieną kartą',

	'LBL_ATTACHMENT_AUDIT'						=> 'išsiųsta. Kopija archyve neišsaugota siekiant sutaupyti disko vietą.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Konfigūruoti el. pašto nustatymus',
	'LBL_CUSTOM_LOCATION'						=> 'Vartotojo nurodomas',
	'LBL_DEFAULT_LOCATION'						=> 'Numatytas',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Pridėti perspėjančią žinutę į kiekvieną laišką',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Perspėjimo turinys',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Pastebėjimas: Šio laiško turinys yra skirtas tik tam fiziniam ar juridiniam asmeniui, kuriam šis laiškas adresuotas bei kitiems asmenims, įgaliotiems jį gauti. Laiške gali būti konfidencialios ar kitaip teisiškai saugomos informacijos. Perspėjame, kad jeigu nesate numatytas šio laiško gavėjas, bet koks šio laiško turinio atskleidimas, kopijavimas, platinimas ar naudojimas yra griežtai draudžiamas ir gali būti laikomas įstatymų pažeidimu. Jeigu šį laišką gavote per klaidą, maloniai prašome nedelsiant apie tai elektroniniu paštu informuoti siuntėją, o laišką ištrinti.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Rašyti laiškus naudojant šį simbolių rinkinį',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Rašyti laiškus naudojant šį klientą',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Ištrinti susijusius užrašus ir prisegtus, kai ištrinamas pats laiškas',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Užpildyti Gmail numatytais',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Laiškų kiekis siunčiamas per per vieną partiją:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Įjungti SMTP su SSL?',
	'LBL_EMAIL_USER_TITLE'						=> 'Vartotojo pašto numatyti',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Išeinančių laiškų nustatymas',
	'LBL_EMAILS_PER_RUN'						=> 'Laiškų kiekis siunčiamas per per vieną partiją:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Campaign',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Įvykdytas',
	'LBL_LIST_FORM_TITLE'						=> 'Eilė',
	'LBL_LIST_FROM_EMAIL'						=> 'Siuntėjo el. paštas',
	'LBL_LIST_FROM_NAME'						=> 'Siuntėjo vardas',
	'LBL_LIST_IN_QUEUE'							=> 'Vykdomas',
	'LBL_LIST_MESSAGE_NAME'						=> 'Marketingo laiškas',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Gavėjo adresas:',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Gavėjo vardas',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Bandymai siųsti',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Išsiųsta',
	'LBL_LIST_USER_NAME'						=> 'Vartotojo vardas',
	'LBL_LOCATION_ONLY'							=> 'Vieta',
	'LBL_LOCATION_TRACK'						=> 'Kampanijos nuorodų sekimo failas (kaip campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'kaupti kampanijų laiškų kopijas:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Ar norėtumėte kaupti visų kampanijų išsiųstų laiškų kopijas?  <bold>Mes rekomenduojame - nekaupti.</bold>.  Pasirinkus nekaupti, bus kaupiami tik šablonai, kurie yra išsiųsti ir reikalingi parametrai, kad būtų galima atkurti individualią žinutę.',
	'LBL_MAIL_SENDTYPE'							=> 'Pašto perdavimo agentas:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Naudoti SMTP identifikaciją?',
	'LBL_MAIL_SMTPPASS'							=> 'Slaptažodis:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP portas:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP pašto serveris:',
	'LBL_MAIL_SMTPUSER'							=> 'Vartoto vardas:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Pasirinkite savo pašto tiekėją',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo! pašto slaptažodis',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo! pašto ID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail slaptažodis',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail pašto adresas',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange slaptažodis',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange vartotojo vardas',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange serverio portas',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange serveris',
	'LBL_EMAIL_LINK_TYPE'				=> 'Pašto klientas',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar pašto klientas:</b> Siųskite laiškus, naudodami Sugar pašto moduliu.<br><b>Išorinis pašto klientas:</b> Siųskite laiškus, naudodamiesi išoriniu el. pašto klientu, kaip pvz.: Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Kamoanijos id',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Pašto nustatymai',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Pašto nustatymai',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Nurodyti kampanijų pašto nustatymus',
	'LBL_MODULE_TITLE'							=> 'Laiškų paruoštų išsiuntimui eilės valdymas',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Siųsti elektroninius perspėjamus vartotojams, kai jiems yra priskiriami nauji įrašai.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Siuntėjo adresas:',
	'LBL_NOTIFY_FROMNAME' 						=> 'Siuntėjo vardas:',
	'LBL_NOTIFY_ON'								=> 'Perspėjimas apie naujus paskyrimus',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Naujiems vartotojams siųsti perspėjimus',
	'LBL_NOTIFY_TITLE'							=> 'Pašto nustatymai',
	'LBL_OLD_ID'								=> 'Senas Id',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Išeinančio pašto nustatymai',
	'LBL_RELATED_ID'							=> 'Susijęs Id',
	'LBL_RELATED_TYPE'							=> 'Susijęs su',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Saugoti išeinančius neapdorotus laiškus',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Apdorotų paieška',
	'LBL_SEARCH_FORM_TITLE'						=> 'Eilės paieška',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Peržiūrėti išsiųstus laiškus',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Eilėje laukiantys laiškai',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Config.php reikšmė nustatant site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Mes gerbiame Jūsų privatumą. Jei šį laišką gavote per klaidą ar nenorite gauti naujienų ir specialių pasiūlymų elektroniniu paštu, spauskite apačioje esančią nuorodą',
	'TXT_REMOVE_ME_CLICK'						=> 'spauskite čia',
	'TXT_REMOVE_ME'								=> 'Mes gerbiame Jūsų privatumą. Jei šį laišką gavote per klaidą ar nenorite gauti naujienų ir specialių pasiūlymų elektroniniu paštu, spauskite apačioje esančią nuorodą',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Siųsti perspėjimą nuo to vartotojo, kuris paskyrė, el. pašto adreso',

	'LBL_SECURITY_TITLE'						=> 'Pašto saugumo nustatymai',
	'LBL_SECURITY_DESC'							=> 'Pažymėkite ko nerodyti pašto modulyje.',
	'LBL_SECURITY_APPLET'						=> 'Applet žymė',
	'LBL_SECURITY_BASE'							=> 'Base žymė',
	'LBL_SECURITY_EMBED'						=> 'Embed žymė',
	'LBL_SECURITY_FORM'							=> 'Form žymė',
	'LBL_SECURITY_FRAME'						=> 'Frame žymė',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset žymė',
	'LBL_SECURITY_IFRAME'						=> 'iFrame žymė',
	'LBL_SECURITY_IMPORT'						=> 'Import žymė',
	'LBL_SECURITY_LAYER'						=> 'Layer žymė',
	'LBL_SECURITY_LINK'							=> 'Link žymė',
	'LBL_SECURITY_OBJECT'						=> 'Object žymė',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Pasirinkite minimalius Outlook apsaugos nustatymus',
	'LBL_SECURITY_SCRIPT'						=> 'Script žymė',
	'LBL_SECURITY_STYLE'						=> 'Style žymė',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Perjungti visus pasirinkimus',
	'LBL_SECURITY_XMP'							=> 'Xmp žymė',
    'LBL_YES'                                   => 'Taip',
    'LBL_NO'                                    => 'Ne',
    'LBL_PREPEND_TEST'                          => '[Testas]:',
	'LBL_SEND_ATTEMPTS'							=> 'Bandymai siųsti',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Prašome suvesti išeinančio pašto serverio nustatymus, kad būtų galima siųsti el. perspėjimus.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Leisti vartotojams išsiųsti el. laiškus pasinaudojant šios pašto dėžutės prisijungimu:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Kai pasirinksite šią opciją, visi vartotojai galės siųsti laiškus naudodamiesi bendru sistemos išeinančiu pašto klientu. Kitu atveju vartotojai turės siųsti laiškus per savo nustatytą išeinantį pašto klientą.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Kai įjungta nuostata, priskiriamo vartotojo vardas ir jo pašto adresas bus įtrauktas į Siuntėjo lauką. Šis pasirinkimas gali neveikti su SMTP serveriu tam tikrose situacijose.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo paštas' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Pagalba' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Unauthorized access to administration.',
    'LBL_INVALID_ENTRY_POINT' => 'Not a Valid Entry Point',
);
