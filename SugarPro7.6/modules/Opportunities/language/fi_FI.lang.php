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
    'LBL_MODULE_NAME' => 'Myyntimahdollisuudet',
    'LBL_MODULE_NAME_SINGULAR' => 'Myyntimahdollisuus',
    'LBL_MODULE_TITLE' => 'Myyntimahdollisuudet: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Myyntimahdollisuuksien haku',
    'LBL_VIEW_FORM_TITLE' => 'Myyntimahdollisuuksien näkymä',
    'LBL_LIST_FORM_TITLE' => 'Myyntimahdollisuuksien luettelo',
    'LBL_OPPORTUNITY_NAME' => 'Mahdollisuuden nimi:',
    'LBL_OPPORTUNITY' => 'Myyntimahdollisuus',
    'LBL_NAME' => 'Myyntimahdollisuuden nimi',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Valuutat',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nimi',
    'LBL_LIST_ACCOUNT_NAME' => 'Tilin nimi',
    'LBL_LIST_DATE_CLOSED' => 'Odotettu sulkupäivämäärä',
    'LBL_LIST_AMOUNT' => 'Todennäköinen',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Kokonaismäärä',
    'LBL_ACCOUNT_ID' => 'Asiakkaan ID',
    'LBL_CURRENCY_RATE' => 'Valuuttakurssi',
    'LBL_CURRENCY_ID' => 'Valuutta ID',
    'LBL_CURRENCY_NAME' => 'Valuutan nimi',
    'LBL_CURRENCY_SYMBOL' => 'Valuuttasymboli',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Myyntimahdollisuus - Valuuttapäivitys',
    'UPDATE_DOLLARAMOUNTS' => 'Päivitä USD-määriä',
    'UPDATE_VERIFY' => 'Varmista määrät',
    'UPDATE_VERIFY_TXT' => 'Varmistaa, että mahdollisuuksissa olevat määrät ovat sallittuja desimaalinumeroita, jotka sisältävät vain numeroita (0-9) ja desimaaleja (.)',
    'UPDATE_FIX' => 'Korjaa määrät',
    'UPDATE_FIX_TXT' => 'Yrittää korjata mahdolliset virheelliset määrät luomalla oikeamuotoisen desimaalin nykyisestä määrästä. Jokainen muunnettu määrä varmuuskopioidaan amount_backup tietokantakenttään. Jos suoritat tämän ja ilmenee vikoja, älä suorita sitä palauttamatta vanhoja arvoja varmuuskopiosta, sillä varmuuskopio saattaa joutua ylikirjoitetuksi virheellisillä arvoilla.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Päivitä mahdollisuuksien USD-määrät nykyisten valuuttakurssien perusteella. Tätä arvoa käytetään kaavojen ja listanäkymien valuuttamäärien laskemiseen.',
    'UPDATE_CREATE_CURRENCY' => 'Luodaan uutta valuuttaa:',
    'UPDATE_VERIFY_FAIL' => 'Tietue ei läpäissyt vahvistusta:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Nykyinen määrä:',
    'UPDATE_VERIFY_FIX' => 'Korjauksen suorittaminen antaisi',
    'UPDATE_INCLUDE_CLOSE' => 'Sisällytä suljetut tietueet',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Uusi määrä:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Uusi valuutta:',
    'UPDATE_DONE' => 'Tehty',
    'UPDATE_BUG_COUNT' => 'Virheitä löydetty ja yritetty korjata:',
    'UPDATE_BUGFOUND_COUNT' => 'Vikoja todettu:',
    'UPDATE_COUNT' => 'Tietueita päivitetty:',
    'UPDATE_RESTORE_COUNT' => 'Tietueita palautettu:',
    'UPDATE_RESTORE' => 'Palauta määrät',
    'UPDATE_RESTORE_TXT' => 'Palauttaa määräarvot korjauksen aikana tehtyistä varmuuskopioista.',
    'UPDATE_FAIL' => 'Ei voitu päivittää -',
    'UPDATE_NULL_VALUE' => 'Määrä on NULL, arvoksi asetetaan 0 -',
    'UPDATE_MERGE' => 'Yhdistä valuutat',
    'UPDATE_MERGE_TXT' => 'Yhdistää useita valuuttoja yhteen. Jos löydetään useita saman valuutan valuuttatietuita, ne yhdistetään. Tämä yhdistää kyseisen valuutan myös kaikille muille moduuleille.',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_CURRENCY' => 'Valuutta:',
    'LBL_DATE_CLOSED' => 'Odotettu sulkupäivämäärä:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Odotetun sulkeutumispäivämäärän timestamp',
    'LBL_TYPE' => 'Tyyppi:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_NEXT_STEP' => 'Seuraava vaihe:',
    'LBL_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_SALES_STAGE' => 'Myyntivaihe',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Todennäköisyys (%):',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_DUPLICATE' => 'Myyntimahdollisuus on mahdollinen kaksoiskappale',
    'MSG_DUPLICATE' => 'Myyntimahdollisuustietue jonka aiot luoda saattaa olla kopio jo olemassa olevasta myyntimahdollisuustietueesta. Myyntimahdollisuustietueet, joilla on samankaltainen nimi, on listattu alla.<br/>Klikkaa Tallenna jatkaaksesi tämän mahdollisuuden luomista, tai klikkaa Peruuta palataksesi moduuliin luomatta mahdollisuutta.',
    'LBL_NEW_FORM_TITLE' => 'Luo myyntimahdollisuus',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_CREATE' => 'Luo diili',
    'LNK_OPPORTUNITY_LIST' => 'Näytä myyntimahdollisuudet',
    'ERR_DELETE_RECORD' => 'Tietuenumero tulee määritellä, jotta voit poistaa tilin.',
    'LBL_TOP_OPPORTUNITIES' => '10 parasta myyntimahdollisuutta',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Oletko varma, että haluat poistaa tämän yhteystiedon myyntimahdollisuudesta?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Oletko varma, että haluat poistaa tämän myyntimahdollisuuden projektista?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_RAW_AMOUNT' => 'Raaka määrä',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentit',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektit',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_LIST_SALES_STAGE' => 'Myyntivaihe',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Suljetut myyntimahdollisuudet',
    'LBL_TOTAL_OPPORTUNITIES' => 'Myyntimahdollisuuksia yhteensä',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Suljetut voitetut mahdollisuudet',
    'LBL_ASSIGNED_TO_ID' => 'Vastuukäyttäjä:',
    'LBL_CREATED_ID' => 'Luoneen käyttäjän ID',
    'LBL_MODIFIED_ID' => 'Muokkaajan ID',
    'LBL_MODIFIED_NAME' => 'Muokkaajan nimi',
    'LBL_CREATED_USER' => 'Luonut käyttäjä',
    'LBL_MODIFIED_USER' => 'Muokannut käyttäjä',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjat',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LABEL_PANEL_ASSIGNMENT' => 'Tehtävä',
    'LNK_IMPORT_OPPORTUNITIES' => 'Tuo myyntimahdollisuuksia',
    'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanjan ID',
    'LBL_OPPORTUNITY_TYPE' => 'Myyntimahdollisuuden tyyppi',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Vastuuhenkilö',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokkaajan tunnus',
    'LBL_EXPORT_CREATED_BY' => 'Tekijän tunnus',
    'LBL_EXPORT_NAME' => 'Nimi',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Liittyvien kontaktien sähköpostit',
    'LBL_FILENAME' => 'Liitetiedosto',
    'LBL_PRIMARY_QUOTE_ID' => 'Ensisijainen tarjous',
    'LBL_CONTRACTS' => 'Sopimukset',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Sopimukset',
    'LBL_PRODUCTS' => 'Tarjotut tuoterivit',
    'LBL_RLI' => 'Tuoterivit',
    'LNK_OPPORTUNITY_REPORTS' => 'Näytä myyntimahdollisuusraportit',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Tarjoukset',
    'LBL_TEAM_ID' => 'Tiimin ID',
    'LBL_TIMEPERIODS' => 'Ajanjaksot',
    'LBL_TIMEPERIOD_ID' => 'Ajanjakson ID',
    'LBL_COMMITTED' => 'Commitoitu',
    'LBL_FORECAST' => 'Sisällytä ennusteeseen',
    'LBL_COMMIT_STAGE' => 'Commitin vaihe',
    'LBL_WORKSHEET' => 'Työkirja',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tarjoukset',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Myyntimahdollisuushierarkia',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Aseta tulostietueiden "odotettu sulkupäivämäärä" -kentän arvo aikaisimmaksi tai myöhäisimmäksi olemassaolevista tuoteriveistä.',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Myyntiputken summa on',

    'LBL_OPPORTUNITY_ROLE'=>'Myyntimahdollisuuden rooli',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Lisämerkinnät',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Klikkaamalla "hyväksy", poistat -kaikki- ennustetiedot ja myytät myyntimahdollisuusnäkymääsi. Jos tämä ei ole mitä haluat, klikkaa "peruuta" palataksesi vanhoihin asetuksiin.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Jos kaikki tuoterivit ovat suljettu ja ainakin yksi on voitettu,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'myyntimahdollisuuden myyntivaiheen arvoksi asetetaan “suljettu - voitettu”.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Jos kaikkien tuoterivien myyntivaiheet ovat “suljettu - hävitty”,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'myyntimahdollisuuden myyntivaiheen arvoksi asetetaaun “suljettu - hävitty”.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Jos yksikään tuoterivi on viellä auki,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'myyntimahdollisuus merkataan vähiten edistyneellä myyntivaiheella.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Myyntimahdollisuudet-moduulilla voi seurata yksittäisiä myyntejä, ja myynneille kuuluvia tuoterivejä alusta loppuun. Jokainen myyntimahdollisuus on ‘otsikko’ ryhmälle tuoterivejä, sekä linkki muille tärkeille tietueille, kuten tarjouksille ja kontakteille. Jokainen tuoterivi on jonkin tuotteen mahdollinen myynti, ja sisältää myyntiin liittyviä tietoja. Tyypillisesti tuoterivi menee monen myyntivaiheen läpi, kunnes se merkitään ‘suljetuksi ja voitetuksi’ tai ‘suljetuksi ja hävityksi’. Tietueena myynti&shy;mahdollisuus näyttää tuoterivien summan ja odotetun sulku&shy;päivämäärän. Myynti&shy;mahdollisuuksia ja tuoterivejä voidaan hyödyntää enemmän käyttäen Sugarin Ennusteet-moduulia, joilla voidaan tulkita ja ennustaa myyntitrendejä ja kehittää myyntityötä.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Myyntimahdollisuudet-moduulilla voi seurata yksittäisiä myyntejä, ja myynneille kuuluvia tuoterivejä alusta loppuun. Jokainen myyntimahdollisuus on ‘otsikko’ ryhmälle tuoterivejä, sekä linkki muille tärkeille tietueille, kuten tarjouksille ja kontakteille.

- Muokkaa tietueen kenttiä napsauttamalla itse kenttää, tai ‘Muokkaa’-painiketta.

- Muokkaa linkityksiä muihin moduuleihin, kuten tuoteriveihin, valitsemalla alavasemmalla oleva paneeli ‘tietonäkymään’.

- Luo ja lue käyttäjäkommentteja ja tietueen historiaa aktiviteettivirrassa. Aktiviteettivirran saat valitsemalla alavasemmalla oleva paneeli ‘Aktiviteettivirta’-näkymään.

- Seuraa tai merkkaa tämä tietue suosikiksi käyttämällä tietueen nimen oikealta puolelta löytyviä kuvakkeita.

- Muut toiminnot löytyvät ‘Muokkaa’-painikkeen oikealla puolella olevasta ‘Toiminnot’-valikosta.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Myyntimahdollisuudet-moduulilla voi seurata yksittäisiä myyntejä, ja myynneille kuuluvia tuoterivejä alusta loppuun. Jokainen myyntimahdollisuus on ‘otsikko’ ryhmälle tuoterivejä, sekä linkki muille tärkeille tietueille, kuten tarjouksille ja kontakteille.

Myyntimahdollisuus&shy;tietueen luonnin vaiheet:

1. Syötä kentille arvoja.

&nbsp; Pakollisiksi merkityt kentät pitää täyttää ennen kuin tietue voidaan luoda. Muut kentät ovat valinnaisia.

2. Paina ‘Tallenna’ luodaksesi tietueen. Tämän jälkeen palaat edelliselle sivulle.

&nbsp; Painamalla ‘Tallenna ja näytä’, tietue luodaan, jonka jälkeen näytetään myynti&shy;mahdollisuuden tietuenäkymä.

&nbsp; Paina ‘Tallenna ja luo uusi’, jos haluat heti luoda toisen tietueen.

3. Tallennuksen jälkeen, käytä ‘Tuoterivit’-alipaneeleita lisätäksesi myynti&shy;mahdollisuudelle tuoterivejä.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Synkronoi Marketoon',
    'LBL_MKTO_ID' => 'Marketo liidi-ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '10 parasta myynnin myyntimahdollisuutta',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Listaa 10 parasta myyntimahdollisuutta kuplakaaviossa.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Myyntimahdollisuuteni',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Tiimini myyntimahdollisuudet",
);
