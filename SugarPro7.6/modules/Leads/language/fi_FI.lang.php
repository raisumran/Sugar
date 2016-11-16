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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Tietuenumero tulee määritellä, jotta voit poistaa tilin.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Asiakkaan kuvaus',
    'LBL_ACCOUNT_ID'=>'Asiakkaan ID',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteetit',
    'LBL_ADD_BUSINESSCARD' => 'Lisää käyntikortti',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_ALT_ADDRESS_CITY' => 'Vaihtoehtoinen kaupunki',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Vaihtoehtoinen maa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Vaihtoehtoinen postinumero',
    'LBL_ALT_ADDRESS_STATE' => 'Vaihtoehtoinen osavaltio',
    'LBL_ALT_ADDRESS_STREET_2' => 'Vaihtoehtoinen katu 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Vaihtoehtoinen katu 3',
    'LBL_ALT_ADDRESS_STREET' => 'Vaihtoehtoinen katu',
    'LBL_ALTERNATE_ADDRESS' => 'Muu osoite:',
    'LBL_ANY_ADDRESS' => 'Mikä tahansa osoite:',
    'LBL_ANY_EMAIL' => 'Mikä tahansa sähköposti:',
    'LBL_ANY_PHONE' => 'Mikä tahansa puhelin:',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_ASSIGNED_TO_ID' => 'Vastuukäyttäjä:',
    'LBL_BACKTOLEADS' => 'Takaisin liideihin',
    'LBL_BUSINESSCARD' => 'Muunna liidi',
    'LBL_CITY' => 'Kaupunki:',
    'LBL_CONTACT_ID' => 'Kontaktin ID',
    'LBL_CONTACT_INFORMATION' => 'Yleiskatsaus',
    'LBL_CONTACT_NAME' => 'Liidin nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Liidi-tilaisuus:',
    'LBL_CONTACT_ROLE' => 'Rooli:',
    'LBL_CONTACT' => 'Kontaktin nimi:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Muunna',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Tallenna ja muuta',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(valinnainen)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Sinulla ei ole muokkausoikeutta liidin muunnokseen tarvituille moduuleille: {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Etsitään duplikaatteja...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ohita ja luo uusi',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Takaisin duplikaatteihin',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Luo uusi',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Haku',
    'LBL_CONVERT_DUPLICATES_FOUND' => 'Löytyi {{duplicateCount}} duplikaattia',
    'LBL_CONVERT_CREATE_NEW' => 'Uusi {{moduleNameLower}}',
    'LBL_CONVERT_ASSOCIATE_MODULE' => 'Assosioi {{moduleNameLower}}',
    'LBL_CONVERT_ASSOCIATED_MODULE' => 'Assosioitu {{moduleNameLower}}',
    'LBL_CONVERT_MODULE_ASSOCIATED' => 'Assosioitiin {{moduleNameLower}}',
    'LBL_CONVERT_MODULE_ASSOCIATED_NEW_SUCCESS' => 'Assosioit tietueen {{recordName}}, joka on {{moduleSingularLower}}, mutta sitä ei luoda ennen kuin tallennat.',
    'LBL_CONVERT_MODULE_ASSOCIATED_SUCCESS' => 'Assosioit tietueen {{recordName}}, joka on {{moduleSingularLower}}, mutta sitä ei linkitetä ennen kuin tallennat.',
    'LBL_CONVERT_RESET_PANEL' => 'Palauta',
    'LBL_CONVERTED_ACCOUNT'=>'Muunnettu asiakas:',
    'LBL_CONVERTED_CONTACT' => 'Muunnettu kontakti:',
    'LBL_CONVERTED_OPP'=>'Muunnettu tilaisuus:',
    'LBL_CONVERTED'=> 'Muunnettu',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Muunna liidi',
    'LBL_CONVERTLEAD' => 'Muunna liidi',
    'LBL_CONVERTLEAD_WARNING' => 'Varoitus: aiot muuntaa liidin jonka tila on jo ‘muunnettu’. Kontakti- ja/tai asiakastietueita on ehkä jo luotu liidistä. Jos haluat jatkaa liidin muuntamisella, paina Tallenna. Palataksesi liidiin muuntamatta sitä, paina Peruuta.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Mahdollinen kontakti:',
    'LBL_CONVERTLEAD_ERROR' => 'Ei voitu muuntaa liidiä',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Liidi {{leadName}} muunnettiin, mutta liitteiden lataamisessa ilmeni joitain ongelmia joissakin tietueissa.',
    'LBL_CONVERTLEAD_SUCCESS' => 'Liidi {{leadName}} muunnettiin.',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_CREATED_NEW' => 'Luotiin uusi',
	'LBL_CREATED_ACCOUNT' => 'Luotiin uusi asiakas',
    'LBL_CREATED_CALL' => 'Luotiin uusi puhelu',
    'LBL_CREATED_CONTACT' => 'Luotu uusi kontakti',
    'LBL_CREATED_MEETING' => 'Luotiin uusi kokous',
    'LBL_CREATED_OPPORTUNITY' => 'Luotu uusi myyntimahdollisuus',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Liidit',
    'LBL_DEPARTMENT' => 'Osasto:',
    'LBL_DESCRIPTION_INFORMATION' => 'Kuvauksen tiedot',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DO_NOT_CALL' => 'Älä soita:',
    'LBL_DUPLICATE' => 'Samanlaisia liidejä',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite',
    'LBL_EMAIL_OPT_OUT' => 'ei lähetetä sähköpostia',
    'LBL_EXISTING_ACCOUNT' => 'Käytetään olemassa olevaa asiakasta',
    'LBL_EXISTING_CONTACT' => 'Käytetään olemassaolevaa kontaktia',
    'LBL_EXISTING_OPPORTUNITY' => 'Käytetään jo olemassa olevaa mahdollisuutta',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_FULL_NAME' => 'Koko nimi:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_HOME_PHONE' => 'Kotipuhelin:',
    'LBL_IMPORT_VCARD' => 'Tuo vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Liidi luotiin vCardista',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Luo automaattisesti uusi liidi tuomalla vCard tiedostojärjestelmästäsi.',
    'LBL_INVALID_EMAIL'=>'Virheellinen sähköposti:',
    'LBL_INVITEE' => 'Suorat raportit',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Liidin lähteen kuvaus:',
    'LBL_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_LIST_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_LIST_ACCOUNT_NAME' => 'Tilin nimi',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktit',
    'LBL_LIST_CONTACT_ROLE' => 'Rooli',
    'LBL_LIST_DATE_ENTERED' => 'Luontipäivä',
    'LBL_LIST_EMAIL_ADDRESS' => 'Mikä tahansa sähköposti',
    'LBL_LIST_FIRST_NAME' => 'Etunimi',
    'LBL_VIEW_FORM_TITLE' => 'Liidinäkymä',
    'LBL_LIST_FORM_TITLE' => 'Liidilista',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Liidin lähteen kuvaus',
    'LBL_LIST_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_LIST_MY_LEADS' => 'Liidit',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Toimiston puhelin',
    'LBL_LIST_REFERED_BY' => 'Viitattu',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Nimike',
    'LBL_MOBILE_PHONE' => 'Matkapuhelin:',
    'LBL_MODULE_NAME' => 'Liidit',
    'LBL_MODULE_NAME_SINGULAR' => 'Liidi',
    'LBL_MODULE_TITLE' => 'Liidit: Etusivu',
    'LBL_NAME' => 'Nimi',
    'LBL_NEW_FORM_TITLE' => 'Uusi liidi',
    'LBL_NEW_PORTAL_PASSWORD' => 'Uusi Portal-salasana:',
    'LBL_OFFICE_PHONE' => 'Toimiston puhelin:',
    'LBL_OPP_NAME' => 'Mahdollisuuden nimi:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Myyntimahdollisuuden määrä:',
    'LBL_OPPORTUNITY_ID'=>'Myyntimahdollisuuden ID',
    'LBL_OPPORTUNITY_NAME' => 'Mahdollisuuden nimi:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Muu sähköposti:',
    'LBL_OTHER_PHONE' => 'Muu puhelin:',
    'LBL_PHONE' => 'Puhelin',
    'LBL_PORTAL_ACTIVE' => 'Portal aktiivinen:',
    'LBL_PORTAL_APP'=> 'Portal -sovellus',
    'LBL_PORTAL_INFORMATION' => 'Portaalin tiedot',
    'LBL_PORTAL_NAME' => 'Portal -nimi:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portaalin salasana asetettu:',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_STREET' => 'Katuosoite',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Kaupunki:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Maa:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Lääni:',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Katuosoite 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Katuosoite 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Katuosoite:',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Tavoite <a href=&#39;#{{buildRoute model=this}}&#39;>{{full_name}}</a> luotiin.',
    'LBL_REFERED_BY' => 'Viitattu:',
    'LBL_REPORTS_TO_ID'=>'Raportoi ID:lle',
    'LBL_REPORTS_TO' => 'Raportoi henkilölle:',
    'LBL_REPORTS_FROM' => 'Raportit:',
    'LBL_SALUTATION' => 'Titteli',
    'LBL_MODIFIED'=>'Muuttanut',
	'LBL_MODIFIED_ID'=>'Muokkaajan ID',
	'LBL_CREATED'=>'Luonut',
	'LBL_CREATED_ID'=>'Luojan ID',
    'LBL_SEARCH_FORM_TITLE' => 'Liidihaku',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Valitse tarkastetut liidit',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Valitse tarkastetut liidit',
    'LBL_STATE' => 'Osavaltio:',
    'LBL_STATUS_DESCRIPTION' => 'Statuksen kuvaus:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Otsikko:',
    'LBL_UNCONVERTED'=> 'Muuntamattomat',
    'LNK_IMPORT_VCARD' => 'Luo liidi vCardista',
    'LNK_LEAD_LIST' => 'Näytä liidit',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_LEAD' => 'Luo liidi',
    'LNK_NEW_NOTE' => 'Luo muistiinpano',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NEW_CASE' => 'Luo palvelupyyntö',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_MEETING' => 'Varaa kokous',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
	'LNK_SELECT_ACCOUNTS' => '<strong>tai</strong> valitse asiakas',
    'LNK_SELECT_CONTACTS' => '<strong>tai</strong> valitse kontakti',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopioi vaihtoehtoinen osoite ensisijaiseksi osoitteeksi',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopioi ensisijainen osoite vaihtoehtoiseen osoitteeseen',
    'NTC_DELETE_CONFIRMATION' => 'Haluatko poistaa tämän tietueen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Myyntimahdollisuuden luominen vaatii tilin.<br /> Luo tili tai valitse olemassa oleva tili.',
    'NTC_REMOVE_CONFIRMATION' => 'Haluatko poistaa tämän viittaussuhteen? Vain viittaussuhde poistetaan ja tietuetta ei.',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Oletko varma, että haluat poistaa tämän tietueen suorista raporteista?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Kampanjan loki',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Onnistunut kampanja:',
    'LBL_TARGET_BUTTON_LABEL'=>'Kohdennettu',
    'LBL_TARGET_BUTTON_TITLE'=>'Kohdennettu',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Kampanja:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_PROSPECT_LIST' => 'Prospektilista',
    'LBL_PROSPECT' => 'Tavoite',
    'LBL_CAMPAIGN_LEAD' => 'Kampanjat',
	'LNK_LEAD_REPORTS' => 'Näytä liidiraportit',
    'LBL_BIRTHDATE' => 'Syntymäaika:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Kiitos viestistäsi.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Palvelimeen ei saada yhteyttä. Yritä myöhemmin uudelleen.',
    'LBL_ASSISTANT_PHONE' => 'Assistentin puhelin',
    'LBL_ASSISTANT' => 'Assistentti',
    'LBL_REGISTRATION' => 'Ilmoittautuminen',
    'LBL_MESSAGE' => 'Syötä tietosi alle. Tiedot ja/tai tili luodaan sinulle, hyväksyntää odottaen.',
    'LBL_SAVED' => 'Tallennettu',
    'LBL_CLICK_TO_RETURN' => 'Palaa portaaliin',
    'LBL_CREATED_USER' => 'Luonut käyttäjä',
    'LBL_MODIFIED_USER' => 'Muokannut käyttäjä',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjat',
    'LBL_CONVERT_MODULE_NAME' => 'Moduuli',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Moduuli',
    'LBL_CONVERT_REQUIRED' => 'Vaadittu',
    'LBL_CONVERT_SELECT' => 'Salli valinta',
    'LBL_CONVERT_COPY' => 'Kopioi tiedot',
    'LBL_CONVERT_EDIT' => 'Muokkaa',
    'LBL_CONVERT_DELETE' => 'Poista',
    'LBL_CONVERT_ADD_MODULE' => 'Lisää moduuli',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Muokkaa muuntoasettelua',
    'LBL_CREATE' => 'Luo',
    'LBL_SELECT' => '<strong>tai</strong> valitse',
	'LBL_WEBSITE' => 'Web-sivu',
	'LNK_IMPORT_LEADS' => 'Tuo liidit',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Huomio: nykyinen Muunna liidi -näyttö sisältää mukautettuja kenttiä. Kun mukautat Muunna liidi -näyttöä Studiossa ensimmäisen kerran, sinun pitää lisätä mukautettuja kenttiä asetteluun tarpeen mukaan. Mukautetut kentät eivät automaattisesti näy asettelussa, toisin kuin aiemmin.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Moduuli, johon luodaan uusi tietue',
	'LBL_REQUIRED_TIP' 	=> 'Pakolliset moduulit pitää luoda tai valita, ennen kuin liidi voidaan muuntaa.',
	'LBL_COPY_TIP'		=> 'Jos tämä on valittu, liidin kentät kopioidaan samannimisiin kenttiin uusissa tietueissa.',
	'LBL_SELECTION_TIP' => 'Moduulit, joilla on kontakteihin liittyvä kenttä voidaan valita luonnin sijaan liidin muunnosprosessissa.',
	'LBL_EDIT_TIP'		=> 'Muokkaa muunnoksen asettelua tälle moduulille.',
	'LBL_DELETE_TIP'	=> 'Poista tämä moduuli muunnoksen asettelusta.',

    'LBL_ACTIVITIES_MOVE'   => 'Siirrä aktiviteetit',
    'LBL_ACTIVITIES_COPY'   => 'Kopioi aktiviteetit',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Valitse tietue, joka pitäisi siirtää liidin aktiviteetteihin. Tehtävät, puhelut, kokoukset, muistiinpanot ja sähköpostit siirretään valittuihin tietueisiin.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Valitse tietueet, joille luoda kopioita liidin aktiviteeteista. Uudet tehtävät, puhelut, kokoukset, ja muistiinpanot luodaan jokaiselle valitulle tietueelle. Sähköpostit liitetään (relate) valittuihin tietueisiin.",
    //For export labels
    'LBL_PHONE_HOME' => 'Puhelin koti',
    'LBL_PHONE_MOBILE' => 'Matkapuhelin',
    'LBL_PHONE_WORK' => 'Puhelin työ',
    'LBL_PHONE_OTHER' => 'Puhelin muu',
    'LBL_PHONE_FAX' => 'Puhelin faksi',
    'LBL_CAMPAIGN_ID' => 'Kampanjan ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Vastuuhenkilö',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokkaajan tunnus',
    'LBL_EXPORT_CREATED_BY' => 'Tekijän tunnus',
    'LBL_EXPORT_PHONE_MOBILE' => 'Matkapuhelin',
    'LBL_EXPORT_EMAIL2'=>'Muu sähköpostiosoite',
	'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Syötä päivämäärä' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Ladataan' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Muokkaa' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B Principal ID',
    'LBL_DNB_BAL_PREVIEW' => 'Liidien esikatselu',
    'LBL_DNB_BAL_RSLT_CNT' => 'Liidit',
    'LBL_DNB_BAL_RSLT_HEADER' => 'D&B: liiditiedot',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Lisämerkinnät',

    'LBL_HELP_CONVERT_TITLE' => 'Muunna {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Liidit-moduuli mallintaa yksittäisiä prospekteja, jotka saattaisivat olla kiinnostuneita organisaatiosi tuotteesta tai palvelusta. Kun liidi kvalivioituu myynti­­mahdollisuudeksi, liidi voidaan muuntaa kontaktiksi, asiakkaaksi tai myynti­­mahdollisuudeksi. Liidejä voi luoda monella tapaa, esimerkiksi Liidit-moduulin kautta, tietueiden kopioinnilla, tai tuomalla tietueita tiedostosta. Kun liiditietue on luotu, sen tietoja voi lukea ja muokata Liidit-moduulin tietuenäkymän kautta.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Liidit-moduuli mallintaa yksittäisiä prospekteja, jotka saattaisivat olla kiinnostuneita organisaatiosi tuotteesta tai palvelusta.

- Muokkaa tietueen kenttiä klikkaamalla itse kenttää, tai vaihtoehtoisesti ‘Muokkaa’-painiketta.

- Muokkaa linkkejä muihin teitueisiin valitsemalla alavasemmalla oleva paneeli ‘tietonäkymään’.

- Luo ja lue käyttäjäkommentteja ja tietueen historiaa aktiviteettivirrassa. Aktiviteettivirran saat valitsemalla alavasemmalla oleva paneeli ‘aktiviteettivirta’-näkymään.

- Seuraa tai merkkaa tämä tietue suosikiksi käyttämällä tietueen nimen oikealta puolelta löytyviä kuvakkeita.

- Muut toiminnot löytyvät ‘Muokkaa’-painikkeen oikealla puolella olevasta ‘Toiminnot’-valikosta.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Liidit-moduuli mallintaa yksittäisiä prospekteja, jotka saattaisivat olla kiinnostuneita organisaatiosi tuotteesta tai palvelusta.

Liidin luonnin vaiheet:

1. Syötä kentille arvoja.

  Pakollisiksi merkityt kentät pitää täyttää ennen kuin tietue voidaan luoda. Muut kentät ovat valinnaisia.

2. Paina ‘Tallenna’ luodaksesi tietueen. Tämän jälkeen palaat edelliselle sivulle.

  Painamalla ‘Tallenna ja näytä’, tietue luodaan, jonka jälkeen näytetään tietueen tietuenäkymä.

  Paina ‘Tallenna ja luo uusi’, jos haluat heti luoda toisen tietueen.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugarissa voi muuntaa liidejä kontakteiksi, asiakkaiksi, tai muun tyyppisiksi tietueiksi. Muunnos tapahtuu liidin saavuttaessa kvalifiointikriteerit.

Mene tietueiden läpi, muokkaa kenttiä, ja vahvista tietueen arvot klikkaamalla jokaista ‘assosioi’-painiketta.

Jos Sugar havaitsee jo olemassa olevan tietueen, joka vastaa liidisi tietoja, voit joko
- valita tuplatietue (valinta vahvistetaan ‘assosioi’-painikkeella), tai
- klikata ‘Ohita ja luo uusi’ ja jatkaa normaalisti.

Tietueiden vahvistamisen jälkeen paina ylhäällä olevaa ‘Tallenna ja muunna’ -painiketta, jolloin muunnos tapahtuu.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Synkronoi Marketoon',
    'LBL_MKTO_ID' => 'Marketo liidi-ID',
    'LBL_MKTO_LEAD_SCORE' => 'Liidin pisteet',

    'LBL_FILTER_LEADS_REPORTS' => 'Liidien raportit',
);
