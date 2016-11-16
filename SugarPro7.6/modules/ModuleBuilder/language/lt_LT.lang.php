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
    'LBL_LOADING' => 'Kraunama' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Paslėpti pasirinkimus' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Ištrinti' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Sukurta SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'Nurodykite <b>Pavadinimą</b> paketui.  Pavadinimas turi būti su skaitmenimis ir raidėmis, ir be tarpų. (Pavyzdžiui: HR_Management)<br/><br/> Jūs galitete nurodyti <b>Autorių</b> ir <b>Aprašymą</b> informacijos paketui. <br/><br/>Paspauskite <b>Išsaugoti</b> , kad sukurtumėte paketą.',
            'modify'=>'Savybės ir galimi veiksmai  <b>Paketui</b> yra čia.<br><br>Jūs galite redaguoti  <b>Pavadinimą</b>, <b>autorių</b> ir <b>Aprašymą</b> paketo, taip pat galite pritaikyti ir kitus modulius.<br><br>Paspauskite <b>Naujas modulis</b> sukurti naują modulį paketui.<br><br>Jei paketas turi nors vieną modulį, jūs galite <b>Paskelbti</b> ir <b>Išdėstyti</b>  paketą, taip pat kaip  <b>Eksportavimas</b> pritaikymai padaryti  pakete.',
            'name'=>'Tai yra <b>Pavadinimas</b> esamo paketo. <br/><br/>Pavadinimą, kurį įvedate turi būti su raidėmis ir skaičiais, pradėkite su raidėmis ir be tarpų. (Pavyzdys: HR_Management)',
            'author'=>'Tai yra autorius <b>Autorius</b> ,kuris rodomas instaliavimo metu, kuris sukūrė paketą.<br><br>Autorius gali būti individualus asmuo arba įmonė.',
            'description'=>'Tai yra <b>Aprašymas</b> paketo, kuris rodomas instaliavimo metu.',
            'publishbtn'=>'Paspauskite <b>Paskelbti</b> išsaugoti visus įvestus duomenis ir sukurti .zip failą, kuris yra nestabili paketo versija.<br><br>Naudoti <b>Modulio užkrovėją</b> išsiųsti .zip failąe ir instaliuoti paketą.',
            'deploybtn'=>'Paspauskite <b>Išdėstyti</b> išsaugoti visus įvestus duomenis ir instaliuoti paketą, įskaitant visus modulius, šiuo atveju.',
            'duplicatebtn'=>'Paspauskite <b>Dublikuoti</b> kopijuoti paketo turinį į naują paketą ir parodyti naują paketą. <br/><br/>Naujam paketui pavadinimas bus sugeneruotas automatiškai. Galite pervadinti paketą įvedant naują <b>Pavadinimą</b> ir paspaudžiant <b>Saugoti</b>.',
            'exportbtn'=>'Paspauskite <b>Eksportuoti</b> , kad sukurtumėte .zip failą talpinantį padarytus pritaikymus paketui.<br><br> Sugeneruotas failas nėra nestabili paketo versija. <br><br>Naudoti <b>Modulio užkrovėją</b> imoprtavimui .zip failo, įskaitant pritaikymus, randami Module Builder.',
            'deletebtn'=>'Paspauskite <b>Ištrinti</b> tam, kad ištrintumėte šį paketą ir visus failus susijusius su juo.',
            'savebtn'=>'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus įvestus duomenis susijusius su šiuo paketu.',
            'existing_module'=>'Paspauskite  <b>Modulis</b> ikoną redaguoti savybes, laukus, ryšius ir išdėstymus asocijuotus su moduliu.',
            'new_module'=>'Paspauskite <b>Naujas modulis</b> sukurti naują modulį šiam paketui.',
            'key'=>'Šis 5 raidžių, skaitinis raidinis <b>raktas</b> bus naudojamas kaip prefiksas visiems katalogams, klasių vardams ir duomenų bazių lentelėms ir visiems moduliams esantiems tame pakete.<br><br> Raktas naudojamas lentelių unikalumui pasiekti.',
            'readme'=>'Paspauskite pridėti <b>Pervadinti</b> tekstą šiam paketui.<br><br> Informacijos failas bus galimas instaliavimo metu.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'Nurodykite modulio <b>pavadinimą</b>. Nurodyta <b>etiketė</b> pasirodys navigacijos kortelėje. <br/><br/>Pasirinkite rodymui navigacijos kortelę pažymint <b>Navigacijos kortelėb</b>.<br/><br/>Pasirinkite modulio tipą, kurį norėtumėte sukurti. <br/><br/>Pasirinkite šablono tipą. Kiekvienas šablonas talpina specifinį laukų rinkinį, taip pat kaip apibūdinti išdėstymai, naudojimui kaip bazę jūsų moduliui. <br/><br/>Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte modulį.',
        'modify'=>'Jūs galite pakeisti ,odulio savybes arba pritaikyti <b>Laukus</b>, <b>Ryšius</b> ir <b>Išdėstymus</b> susijusius su moduliu.',
        'importable'=>'Tikrinama  <b>Importuojamumas</b>, pažymėjimas įgalins importą šiam moduliui.<br><br>Nuoroda importavimo vedlio atsiras gretų kelių modulio panelėje. Importavimo vedlys palengvina duomenų importavimą iš išorinių šaltinių į pasirinktą modulį.',
        'team_security'=>'Tikrinama  <b>Komandų saugumas</b> pažymėjimas įgalins komandų saugumą šiam moduliui.  <br/><br/>Jeigu komandų saugumas yra įjungtas, tai komandų pasirinkimo laukas atsiras viduje įrašų',
        'reportable'=>'Pažymint šį lauką, šiam moduliui bus leista vykdyti ataskaitas.',
        'assignable'=>'Pažymint šį lauką, įrašui bus leista būti priskirtam pasirinktam vartotojui šiame modulyje.',
        'has_tab'=>'Pažymint <b>Navigacijos kortelę</b> pateiks navigacijos kortelę moduliui.',
        'acl'=>'Pažymint šį lauką įgalins priėjimo kontrolę šiam moduliui, įskaitant laukų lygio saugumą.',
        'studio'=>'Pažymint šį lauką, administratoriams bus leista pritaikyti modulį naudojantis Studio.',
        'audit'=>'Pažymint šį lauką, bus leista daryti auditą šiam moduliui. Pakeitimai atitinkamiems laukams bus įrašyti, todėl administratorius galės pasižiūrėti pakeitimų istoriją.',
        'viewfieldsbtn'=>'Paspauskite <b>Rodyti laukus</b> tam, kad pamatytumėte laukus asocijuotus su moduliu ir galėtumėte sukurti ir redaguoti pasirinktus laukus.',
        'viewrelsbtn'=>'Paspauskite <b>Rodyti ryšius</b>, kad pamatytumėte ryšius asocijuotus su šiuo moduliu ir galėtumėte sukurti naujus ryšius.',
        'viewlayoutsbtn'=>'Paspauskite ant Žiūrėti išdėstymus, jei norite koreguoti laukų išdėstymus modulio formose.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'Paspauskite <b>Dublikuoti</b> tam, kad nukopijuotumėte esamo modulio savybes į naują modulį ir parodyti naują modulį. <br/><br/>Naujam moduliui bus sukurtas automatiškai naujas pavadinimas pridedant skaičių prie modulio pavadinimo galo.',
        'deletebtn'=>'Paspauskite <b>Ištrinti</b> tam, kad ištrintumėte šį modulį.',
        'name'=>'Tai yra esamo modulio<b>Pavadinimas</b>.<br/><br/>Pavadinimas susideda iš raidžių ir skaitmenų ir turi prasidėti raidėmis, ir neturėti tarpų. (Pavyzdys: HR_Management)',
        'label'=>'Tai yra <b>Etiketė</b>, kuri pasirodys modulio navigacijos kortelėje.',
        'savebtn'=>'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus įvestus duomenis susijusius su šiuo moduliu.',
        'type_basic'=>'<b>Bazinis</b> šablono tipas teikia bazinius laukus tokius kaip vardas, atsakingas, komanda, sukūrimo data ir aprašymo laukais.',
        'type_company'=>'<b>Įmonės</b> šablono tipas teikia organizacijos specifinius laukus tokius kaip Įmonė, Vardas, Pramonė ir Sąskaitų siuntimo adresas.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniam Kliento moduliui.',
        'type_issue'=>'<b>Svarstomų klausimų</b> šablono tipas teikia atvejų ir klaidų specifikavimo laukus tokius kaip Skaičiai, Statusas, Svarbumas ir Aprašymas.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniams aptarnavimų ir klaidų moduliams.',
        'type_person'=>'<b>Asmuens</b> šablono tipas pateikia individualius-specifinius laukus tokius kaip Sveikinimas, Pavadinimas, Vardas, Adresas ir Telefono numeris.<br/><br/>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinius Kontaktų ir Potencialių kontaktų modulius.',
        'type_sale'=>'Pardavimo šablonas turi su pardavimais susijusius laukus, kaip: pritraukimo metodas, pardavimo etapas, tikimybė. Panaudokite šį šabloną sukurti naujus modulius panašius į standartinį pardavimų modulį.',
        'type_file'=>'<b>Failo</b> šablonas pateikia dokumentų specifinius laukus tokius kaip Vardas, Dokumento tipas, Paskelbti duomenis.<br><br>Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinį Dokumentų modulį.',

    ),
    'dropdowns'=>array(
        'default' => 'Visi <b>Iššokantys sąrašai programoms pateikti čia.<br><br>Iššokantys sąrašai gali būti naudojami bet kokiame modulyje.<br><br>Norint atlikti pakeitimus iššokančiam sąrašui, paspauskite ant jo pavadinimo.<br><br>Paspauskite <b>Pridėti iššokantį sąrašą</b> norint sukurti naują iššokantį sąrašą.',
        'editdropdown'=>'Iššokančius sąrašus  gali būti naudojami standartiniams arba pasirinktiems iššokančio sąrašo laukams bet kokiame modulyje.<br><br>Pateikite <b>pavadinimą</b> iššokančiam sąrašui.<br><br>Jeigu bet koks kalbos paketas yra instaliuotas programoje, jūs galite pasirinkite <b>Kalba</b> ir ją naudoti sąrašų elementams.<br><br><b>Elemento pavadinimo</b> lauke, nurodykite pavadinimą pasirinkimui iššokančiame sąraše. Šis pavadinimas nepasirodys iššokančiame sąraše, kuris yra nematomas vartotojams.<br><br>  <b>Vaizdavimo etiketės</b> lauke, nurodykite etiketės pavadinimą, kuris bus matomas vartotojams.<br><br>Nurodžius elemento pavadinimą ir rodymo etiketę, paspauskite <b>Pridėti</b>, kad pridėtumėte elementą į iššokantį sąrašą. <br><br>Įrašyti elementus į sąrašą, tempkite ir meskite juos į reikiamą vietą.<br><br>Norint redaguoti rodomas etiketes, paspauskite  <b>Redaguoti ikoną</b>, ir įveskite nauję etiketę. Norint ištrynti elementą iš iššokančio sąrašo, paspauskite  <b>Ištrinti ikoną</b>.<br><br>Panaikinti pakeitimus padarytus rodomai etiketei, paspauskite <b>Anuliuoti</b>.  Atstatyti pakeitimus, paspauskite <b>Atstatyti</b>.<br><br>Paspauskite <b>Išsaugoti</b> išsaugoti iššokantį sąrašą.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> norint išsaugoti pakeitimus, kuriuos padarėte ir padaryti juos aktyvius modulyje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyDefault'=> 'Spauskite <b>Atstatyti numatytą</b> grąžinti į pradinį išdėstymą.',
        'Hidden' 	=> '<b>Paslėpti</b> laukai neatsirado subpanelyje.',
        'Default'	=> '<b>Numatyti</b> laukai atsirado subpanelyje.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> norint išsaugoti pakeitimus, kuriuos padarėte ir padaryti juos aktyvius modulyje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyDefault'=> 'Spauskite <b>Atstatyti numatytą</b> grąžinti į pradinį išdėstymą.',
        'Hidden' 	=> '<b>Paslėpti</b> laukai dabar negalimi vartotojui pamatyti esančius ListViews.',
        'Available' => '<b>Galimi</b> laukai nerodomi pagal numatymą, bet gali vartotojas pridėti prie ListViews.',
        'Default'	=> '<b>Numatyti</b> laukai yra parodyti ListViews, kurie nebuvo paliesti vartotojo.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> norint išsaugoti pakeitimus, kuriuos padarėte ir padaryti juos aktyvius modulyje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyDefault'=> 'Spauskite <b>Atstatyti numatytą</b> grąžinti į pradinį išdėstymą.',
        'Hidden' 	=> '<b>Paslėpti</b> laukai dabar negalimi vartotojui pamatyti esančius ListViews.',
        'Default'	=> '<b>Numatyti</b> laukai yra parodyti ListViews, kurie nebuvo paliesti vartotojo.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'Spaudžiant <b>saugoti ir išdėstyti</b> išsaugos visus pakeitimus ir padarys juos aktyvius',
        'Hidden' 	=> '<b>Paslėpti</b> laukai nematomi paieškoje.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyDefault'=> 'Spauskite <b>Atstatyti numatytą</b> grąžinti į pradinį išdėstymą.',
        'Default'	=> '<b>Numatyti</b> laukai rodomi paieškoje.'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'Paspauskite <b>Išsaugoti</b> norint išsaugoti pakeitimus, kuriuos atlikote išdėstymui nuo paskutinio išsaugojimo.<br><br>Pakeitimai nebus rodomi modulyje, kol neišsaugojote išdėstymo pakeitimų.',
        'historyBtn'=> 'Paspauskite <b>Rodyti istorija</b> peržiūrėti ir atstatyti anksčiau išsaugotus istorijos išdėstymus.',
        'historyDefault'=> 'Spauskite <b>Atstatyti numatytą</b> grąžinti į pradinį išdėstymą.',
        'publishBtn'=> 'Paspauskite <b>Išsaugoti ir išdėstyti</b> tam kad, išsaugotumėte visus pakeitimus, kuriuos padarėte išdėstymui nuo paskutinio išsaugojimo karto ir padaryti pakeitimus aktyvius modulyje.<br><br>Išdėstymai bus nedelsiant parodyti modulyje.',
        'toolbox'	=> '<b>Įrankių dėžė</b> talpina  <b>Šiukšliadėžę</b>, papildomi išdėstymo elementai ir rinkinys kintamųjų laukų skirtų pridėti prie išdėstymo.<br/><br/>Išdėstymo elementai ir laukai įrankių dėžėje gali būti nutraukti ir numesti iš išdėstymo į įrankių dėžę.<br><br>Išdėstymo elementai yra <b>panelės</b> ir <b>eilutės</b>. Pridedant naują eilutę arba panelį į išdėstymą, bus pateikta papildoma vieta išdėstyme laukams.<br/><br/>Tempkite ir meskite bet kokį lauką į įrankių dėžę arba išdėstymą ant užimto lauko pozicijos, norint ištrinti du laukus.<br/><br/> <b>Užpildomas</b> laukas sukuria tuščią erdvę išdėstyme, kur jis yra įdėtas.',
        'panels'	=> '<b>Išdėstymo</b> plotas pateikia vaizdą kaip išdėstymas atrodys modulyje, kai bus atlikti pakeitimai išdėstymui.<br/><br/>Jūs galite pertvarkyti laukus ir panelius tempiant ir metant į pasirinktą vietą.<br/><br/>Išmeskite elementus tempiant ir metant į <b>Šiukšliadėžę</b> įrankių dėžėje, arba pridėkite naujus elementus ir laukus tempiant ir metant iš <b>Įrankių dėžės</b>s į išdėstymo pasirinktą vietą.',
        'delete'	=> 'Norint išmesti elementus iš išdėstymo, juos reikia tempti ir mesti čia',
        'property'	=> 'Redaguoti rodomą etiketę šiam laukui. <br/><b>Kortelė Užsakymas</b> kontroliuoja kokia tavrka kortelių raktai persijungia tarp laukų.',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'Čia yra išvardinti visi modulio laukai. Nestandartiniai laukai yra pateikti virš standartinių laukų.',
        'mbDefault'=>'<b>Laukai</b>, kurie yra galimi moduliui, yra pateikti čia pagal lauko pavadinimą<br><br>Norint pritaikyti etiketę šablono lauko, paspauskite  lauko pavadinimą.<br><br>Sukurti naują lauką, paspauskite <b>Pridėti lauką</b>. Etiketės savybės gali būti redaguojamos paspaudus lauko pavadinimą.<br><br>Po to kai modulis yra padėtas, naujų laukų kūrimui Module Builder yra laikomi kaip standartiniai laukai išdėstyti modulyje Studio.',
        'addField'	=> 'Pasirinkite a <b>Duomenų tipą</b> naujiems laukams. Tipą pasirenkate pagal tai, kokie simboliai bus vedami į lauką. Pavyzdžiui, tik sveikieji skaičiai gali būti įvesti jeigu lauko tipas skaičius.<br><br> Nurodykite a <b>pavadinimą</b> laukui.  Vardas turi būt iiš raidžių ir skaičių ir be tarpų. Pabraukimai leidžiami.<br><br> <b>vaizdavimo etiketė</b> yra etiketė, kuri matoma modulio išdėstyme.  <b>Sistemos etiketė</b>  naudojama nurodyti lauką kodo rėžime.<br><br> Priklausomai nuo duomenų tipo parinkto laukui, kai kurios arba visos savybės gali būti nustatytos laukui:<br><br> <b>pagalbos tekstas</b> pasirodo laikinai kol vartotojas užeina virš lauko.<br><br> <b>Komentarų tekstas</b> matomas tik per Studio &/arba Module Builder, ir gali būti naudojamas aprašyti lauką administratoriams.<br><br> <b>Numatyta reikšmė</b> pasirodys lauke.  Vartotojai gali įvesti naują reikšmę į lauką arba naudoti numatytas reikšmes.<br><br> Pasirinkite  <b>Mass Atnaujinti</b> checkbox in order to be able to Naudoti  Mass Atnaujinti feature for  laukas.<br><br>The <b>Max Size</b> reikšmė determines  maximum number of characters that galite be entered in  laukas.<br><br> Pasirinkite  <b>Reikiamą lauką</b> pažymėkite ar laukas yra privalomas. Reikšmė turi būti nurodyta laukui tam, kad būtų galimaišsaugoti įrašą.<br><br> Pasirinkite  <b>atsakomą</b> pasirinkimą tam, kad leistų naudoti lauką filtrams ir rodyti duomenims ataskaitose.<br><br> Pasirinkite  <b>Auditas</b> pasirinkimą tam, kad būtų galima sekti laukų pasikeitimus esančius Change Log faile.<br><br> Papildomos savybės gali būti nustatytos atitinkamiems duomenų tipams.',
        'editField' => '<b>Rodoma etiketė</b> Sugar lauko gali būti pritaikyta. Kitos lauko savybės gali būti ir nepritaikytos.<br><br>Paspauskite <b>Kopijuoti</b>, norint sukurti naują lauką su tomis pačiomis savybėmis.',
        'mbeditField' => '<b>Rodyti etiketę</b> lauko šablono, kuris gali būti pritaikytas. Kito lauko savybės gali būti nepritaikytos.<br><br>Paspauskite <b>kopijuoti</b>, norint sukurti naują lauką su tokiomis pačiomis savybėmis.<br><br>Norint išmesti lauko šabloną, kad jis nepasirodytų modulyje, išmeskite lauką iš <b>Išdėstymų</b>.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Eksportuoti pritaikymus padarytus su Studio, sukuriant paketus, kurie gali būti išsiųsti į kitą Sugar vietą per  <b>Module Loader</b>.<br><br>  Pirmiausia, nurodykite <b>Paketo vardą</b>.  Jūs galite nurodyti <b>Autorių</b> ir <b>Aprašymą</b> ir visą kitą informaciją paketui. <br><br>Pasirinkite  modulį(-ius) kurie talpina pritaikymus ir juos norite eksportuoti. Tik moduliai turintys pritaikymus bus matomi jums.<br><br>Tada paspauskite <b>Exportuoti</b>, norint sukurti .zip failą paketui talpinančiam pritaikymus.',
        'exportCustomBtn'=>'Paspauskite <b>Exportuoti</b> norint sukurti .zip failą paketui talpinančiam pritaikymus.',
        'name'=>'Tai yra paketo <b>Pavadinimas</b>. Šis pavadinimas bus rodomas instaliavimo metu.',
        'author'=>'Tai yra  <b>Autorius</b>, kuris sukūrė paketa ir bus rodomas instaliavimo metu Autorius gali būti individualus asmuo arba įmonė.',
        'description'=>'Tai yra <b>Aprašymas</b> paketo, kuris rodomas instaliavimo metu.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>Vykdytojo įrankių</b> vieta. <br/><br/>Naudoti įrankius modulių ir laukų valdymui ir sukūrimui.',
        'studioBtn'	=> 'Naudoti <b>Studija</b> modulių pritaikymui.',
        'mbBtn'		=> 'Naudoti <b>Modulio kūrėjas</b> naujų modulių sukūrimui.',
        'sugarPortalBtn' => 'Naudoti <b>Sugar portalo redagaktorius</b> Sugar portalo valdymui ir pritaikymui.',
        'dropDownEditorBtn' => 'Naudoti <b>Iššokantį meniu redaguotoją</b> norint pridėti ir redaguoti bendrus iššokančius meniu jų laukams.',
        'appBtn' 	=> 'Programos rėžimas yra tai, kur jūs galite pritaikyti įvairias programų savybes, tokias kaip TPS ataskaitas rodomas pradžios puslapyje',
        'backBtn'	=> 'Grįžti į ankstesnį žingsnį.',
        'studioHelp'=> 'Naudoti <b>Studiją</b> kad nuordyti kokia ir kaip informacija vaizduojama moduliuose.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'Paspauskite redaguoti modulį.',
        'moduleHelp'=> 'Komponentai, kuriuos galite pritaikyti, yra čia.<br><br>Paspauskite ikoną, norint pasirinkti komponentą redagavimui.',
        'fieldsBtn'	=> 'Sukurti ir pritaikyti <b>Laukus</b> tam, kad talpintų informaciją moduluje.',
        'labelsBtn' => 'Redaguoti  <b>Etiketes</b>, kurios vaizduoja laukus ir kitus pavadinimus modulyje.'	,
        'relationshipsBtn' => 'Pridėti naujus arba rodyti esamus modulio <b>Ryšius</b>.' ,
        'layoutsBtn'=> 'Pritaikyti modulių <b>Išdėstymą</b>.  Išdėstymai skiriasi moduliuose.<br><br>Jūs galite nuspręsti kaip laukai turi atrodyti ir organizuoti kiekviename išdėstyme.',
        'subpanelBtn'=> 'Nuspręskite, kurie laukai bus rodomi modulio <b>Subpanelyje</b>.',
        'portalBtn' =>'Pritaikyti <b>Išdėstymų</b> modulį, kuris bus rodomas <b>Sugar portale</b>.',
        'layoutsHelp'=> 'Modulių <b>Išdėstymus</b>, kurie gali būti pritaikyti yra čia.<br><br>Išdėstymai rodo laukus ir jų duomenis.<br><br>Paspauskite ikoną, norint redaguoti išdėstymą.',
        'subpanelHelp'=> '<b>Subpaneliai</b> modulyje gali būti pritaikyti čia.<br><br>Paspauskite ikoną, norint redaguoti modulį.',
        'newPackage'=>'Norėdami sukurti naują paketą paspauskite <b>Naujas paketas</b>.',
        'exportBtn' => 'Paspauskite <b>Eksportuoti pritaikymus</b>, norint sukurti ir parsisiųsti paketą su aptarnavimais sukurtą su Studio specifiniams moduliams.',
        'mbHelp'    => 'Norint sukurti paketus su pasirinktais moduliais ir standartiniais arba pasirinktais objektais, paspauskite <b>Module Builder</b>.',
        'viewBtnEditView' => 'Pritaikyti modulį(-ius)  <b>EditView</b> išdėstymui.<br><br>EditView yra forma talpinanti įvedimo laukus, skirtus vartotojo duomenų įvedimui.',
        'viewBtnDetailView' => 'Pritaikyti modulį(-ius) <b>DetailView</b> išdėstymui.<br><br>DetailView atvaizduoja vartoto įvestus duomenis.',
        'viewBtnDashlet' => 'Pritaikyti modulį(-ius) <b>paneliams</b>, įskaitant  panelių ListView ir paiešką.<br><br> Panelius bus galima pridėti į puslapius Pradžios modulyje.',
        'viewBtnListView' => 'Pritaikyti modulį(-ius) <b>ListView</b> išdėstymui.<br><br>Paieškos rezultatai matomi ListView.',
        'searchBtn' => 'Pritaikyti modulį(-ius) <b>ieškoti</b> Išdėstymų.<br><br>Nuspręskite, kokie laukai gali būti naudojami įrašų filtravimui, kuriuos matome ListView faile.',
        'viewBtnQuickCreate' =>  'Pritaikyti modulį(-ius) <b>QuickCreate</b> išdėstymui.<br><br>QuickCreate forma matomas subpanelyje ir in  el. pašto modulyje.',

        'searchHelp'=> '<b>Paieškos</b> forma gali būti pritaikyta čia.<br><br>paieškos forma talpina laukus, skirtu įrašų filtravimui.<br><br>Paspauskite ikoną tam, kad pasirinkitumėte redaguoti paieškos išdėstymą.',
        'dashletHelp' =>'<b>Panelių</b> išdėstymai, kurie gali būti pritaikyti yra čia.<br><br>Panelį bus galima pridėti į puslapius Pradžios modulyje.',
        'DashletListViewBtn' =>'<b>Panelio ListView</b> vaizduoja įrašus ir panelio paieškos filtrus.',
        'DashletSearchViewBtn' =>'<b>Panelio paieškos</b> įrašų filtrai skirti panelio listview.',
        'popupHelp' =>'The <b>Popup</b> išdėstymo modifikavimas.<br>',
        'PopupListViewBtn' => '<b>Popup ListView</b> rodo įrašus pagal Popup search views.',
        'PopupSearchViewBtn' => '<b>Popup Search</b> atvaizduoja įrašus Popup listview.',
        'BasicSearchBtn' => 'Pritaikyti <b>Bazinės paieškos</b> formą, kuri matoma bazinės paieškos kortelėje.',
        'AdvancedSearchBtn' => 'Pritaikyti  <b>Detalios paieškos</b> formos, kuri matoma detalios paieškos kortelėje.',
        'portalHelp' => 'Valdyti ir pritaikyti <b>Sugar portalą</b>.',
        'SPUploadCSS' => 'Išsiųsti <b>Stiliaus lapą</b> Sugar portalui.',
        'SPSync' => '<b>Sinchronizuoti</b> pritaikymus Sugar portalui.',
        'Layouts' => 'Pritaikyti Sugar portalo modulių  <b>Išdėstymus</b>.',
        'portalLayoutHelp' => 'Moduliai Sugar portalo rodomi šiame plote.<br><br>Pasirinkite modulį redagavimui <b>Išdėstymuose</b>.',
        'relationshipsHelp' => 'Visi <b>Ryšiai</b>, kurie egzistuoja tarp vieno modulio ir kito yra čia.<br><br>Ryšio <b>Pavadinimas</b> yra sugeneruotas sistemos ryšiui.<br><br><b>Pagrindinis modulis</b> yra tas, kuris turi ryšius. Pavyzdžiui, visos Kliento modulio ryšių savybės yra sudėtos modulio Klientas duomenų bazės lentelėse.<br><br>Paspauskite eilutę ryšių lentelėje norint pažiūrėti savybes susietas su ryšiu.<br><br>Norėdami sukurti naują ryšį paspauskite <b>Pridėti ryšį</b>.<br><br>Ryšiai gali būti sukurti tarp bet kokių modulių.',
        'relationshipHelp'=>'<b>Ryšiai</b> gali būti sukurti tarp pagrindinio modulio ir bet kokio kito modulio.<br><br> Ryšiai vizualiai išreikšti naudojant subpanelius ir susijusius laukus modulio įrašuose.<br><br> Jeigu ryšys yra tarp dviejų modulių, bet koks naujas sukurtas ryšys tarp jų nebus vizualiai išreikštas.<br><br> Pasirinkite vieną iš šių ryšių<b>Types</b>moduliui:<br><br> <b>Vienas-su-Vienu</b> - Abu modulių&#39; įrašai talpins susijusius laukus.<br><br> <b>Vienas-su-daug</b> - Pirminio modulio įrašas talpins subpanelę ir  susieto modulio įrašas talpins susijusį lauką.<br><br> <b>Daug-su-Daug</b> - Abiejų modulių įrašai rodys subpaneles.<br><br> Pasirinkite  <b>Sisijusį modulį</b> ryšio sukūrimui. <br><br> Jei ryšio tipas įtraukia subpanelius, pasirinkite  subpanelio rodymą atitinkamiems moduliams.<br><br> Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte ryšį. Kai  ryšys sukurtas, jis negali būti redaguojamas arba ištrintas.',
        'convertLeadHelp' => "Čia Jūs galite pridėti modulius konvertavimo išdėstymo ekranui ir modifikuoti esamus.<br />		Modulius galite sukeisti vietomis tempdami eilutę.<br/><br/><br />		<b>Modulis:</b> Modulio pavadinimas.<br/><br/><br />		<b>Privaloma:</b> Privalomi moduliai turi būti sukurti arba pasirinkti, jei norite atlikti potencialaus kontakto kovertacijas.<br/><br/><br />		<b>Duomenų kopijavimas:</b> Jei pažymėta, laukai iš potencialaus kontakto bus nukopijuoti į laukus su tuo pačiu pavadinimu naujai sukurtuose įrašuose.<br/><br/><br />		<b>Pasirinkimo leidimas:</b> Modulis su susietu lauku Kontaktuose gali būti pasirinktas, o ne sukurtas.<br/><br/><br />		<b>Redaguoti:</b> Modifikuoti šį modulį konvertavimo išdėstymui.<br/><br/><br />		<b>Ištrinti:</b> Šalinti šį modulį iš konvertavimo išdėstymo.<br/><br/>",
        'editDropDownBtn' => 'Redaguoti bendrą iššokantį sąrašą',
        'addDropDownBtn' => 'Pridėti naują bendrą sąrašą',
    ),
    'fieldsHelp'=>array(
        'default'=>'<b>Laukai</b> modulyje yra pateikti pagal lauko pavadinimą.<br><br>Modulio šablonas turi apspręstą laukų rinkinį.<br><br>Norint sukurti naują lauką, paspauskite <b>Pridėti lauką</b>.<br><br>Norint redaguoti lauką, paspauskite  <b>Lauko pavadinimą</b>.<br/><br/>Po to kai modulis yra išdėstytas, sukurkite naujus laukus į Module Builder kartu su šablono laukais, kaip standartiniai laukai esantys Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'The <b>Relationships</b> that have been created between the module and other modules appear here.<br><br>The relationship <b>Name</b> is the system-generated name for the relationship.<br><br>The <b>Primary Module</b> is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br><br>The <b>Type</b> is the type of relationship exists between the Primary module and the <b>Related Module</b>.<br><br>Click a column title to sort by the column.<br><br>Click a row in the relationship table to view and edit the properties associated with the relationship.<br><br>Click <b>Add Relationship</b> to create a new relationship.',
        'addrelbtn'=>'ieškoti pagalbos kaip pridėti ryšį..',
        'addRelationship'=>'<b>Ryšiai</b> gali būti sukurti tarp pagrindinio modulio ir bet kokio kito modulio.<br><br> Ryšiai vizualiai išreikšti naudojant subpanelius ir susijusius laukus modulio įrašuose.Pasirinkite vieną iš šių ryšių<b>Types</b>moduliui:<br><br> <b>Vienas-su-Vienu</b> - Abu modulių&#39; įrašai talpins susijusius laukus.<br><br> <b>Vienas-su-daug</b> - Pirminio modulio įrašas talpins subpanelę ir  susieto modulio įrašas talpins susijusį lauką.<br><br> <b>Daug-su-Daug</b> - Abiejų modulių įrašai rodys subpaneles.<br><br> Pasirinkite  <b>Sisijusį modulį</b> ryšio sukūrimui. <br><br> Jei ryšio tipas įtraukia subpanelius, pasirinkite  subpanelio rodymą atitinkamiems moduliams.<br><br> Paspauskite <b>Išsaugoti</b> tam, kad sukurtumėte ryšį.',
    ),
    'labelsHelp'=>array(
        'default'=> 'Modulio laukų pavadinimai gali būti keičiami.<br><br>Norėdami redaguoti pavadinimą paspauskite ant lauko, įveskite naują pavadinimą ir paspauskite <b>Saugoti</b>.<br>Jei yra įdiegtos kelios kalbos, galite pasirinkti kalbą, kuriai bus įrašytas šis pavadinimas.',
        'saveBtn'=>'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus pakeitimus.',
        'publishBtn'=>'Paspauskite <b>Išsaugoti ir išdėstyti</b>tam, kad išsaugoti visus pakeitimus ir padaryti juos aktyvius.',
    ),
    'portalSync'=>array(
        'default' => 'Įveskite  <b>Sugar portalo URL</b>, ir paspauskite <b>Eiti</b>.<br><br>Įveskite galiojantį Sugar vartotojo vardą ir slaptažodį, ir paspauskite <b>Pradėti sinchronizaciją</b>.<br><br>Pritaikymai padaryti Sugar portalo <b>Išdėstymams</b>, su  <b>Stiliaus lapais</b>, bus nusiųsti į specifinę portalo vietą, jeigu jie buvo išsiųsti.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'Jūs galite pritaikyti Sugar portalo išvaizdą pasinaudojant stiliaus lapais.<br><br>Pasirinkite <b>Stiliaus lapą</b> išsiuntimui.<br><br>Stiliaus lapas bus realizuotas Sugar portale litą sykį, kai bus atlikta sinchronizacija.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'Norint pradėti naują projektą, jūs turite paspausti  <b>Naujas paketas</b> tam, kad sukurtumėte naują paketą vartotojo moduliams talpinti. <br/><br/>Kiekvienas paketas gali talpinti vieną arba kelis modulius.<br/><br/>Pavyzdžiui, jūs galite norėti sukurti paketą talpinantį vieną  pritaikomą modulį, kuris yra susijęs su standartiniu Kliento moduliu. Arbajūs galite norėti sukurti paketą talpinantį kelis modulius, kurie veikia kartu kaip projektas ir vienas su kitu susiję.',
            'somepackages'=>'<b>Paketas</b> veikia kaip konteineris pritaikytiems moduliams, esantiems projekto dalimi. Paketas gali talpinti vieną ar daugiau pritaikytų <b>modulių</b>, kurie gali būti susiję vienas su kitu.<br/><br/>Sukūrus paketą vartotojo projektui, jūs galite kūrti modulius paketui, arba galite grįžti į Module Builder kitu laiku, kad pabaigtumėte projektą.<br><br>Kada projektas yra baigtas, jūs galite <b>išdėstyti</b> peketus instaliavimui pritaikytiems moduliams.',
            'afterSave'=>'Vartotojo nauji paketai turėtų talpinti bent vieną modulį. Jūs galite sukurti vieną arba daugiau pritaikytų modulių paketui.<br/><br/>Paspauskite <b>Naujas modulis</b> pritaikyto modulio paketui sukūrimo.<br/><br/> Sukūrus bent vieną modulį, jūs galite paskelbti arba išdėstyti packetą, kad jis būtų prieinamas vartotojui ir/arba kitam vartotojams.<br/><br/> Išdėstyti paketą per vieną Sugar vartotojo žingsnį, paspauskite <b>Išdėstyti</b>.<br><br>Paspauskite <b>Paskelbti</b>, norint išsaugoti kaip .zip failą. Kai .zip failas yra išsaugotas vartotojo sistemoje, naudoti  <b>Module Loader</b> išsiuntimui ir instaliavimui paketo į vartotojo Sugar programą.  <br/><br/>Jūs galite distribute  file to Kitas USERs to upload ir install within their own Sugar instances.',
            'create'=>'<b>Paketas</b> veikia kaip konteineris pritaikytiems moduliams, esantiems projekto dalimi. Paketas gali talpinti vieną ar daugiau pritaikytų <b>modulių</b> kurie gali būti susiję vienas su kitu.<br/><br/>Sukūrus paketą vartotojo projektui, jūs galite kūrti modulius paketui, arba galite grįžti į Module Builder kitu laiku, kad pabaigtumėte projektą.',
            ),
    'main'=>array(
        'welcome'=>'Naudoti  <b>Kūrėjo įrankius</b> sukūrimui ir valdymui standartinių ir pritaikytus modulius ir laukus. <br/><br/>Valdyti modulius programoje, paspauskite <b>Studio</b>. <br/><br/>TPritaikytų modulių sukūrimui, paspauskite <b>Module Builder</b>.',
        'studioWelcome'=>'Visi jau instaliuoti moduliai, įskaitant standartinį ir modulio-užkrovėjo objektus, pritaikoma naudojant Studio.'
    ),
    'module'=>array(
        'somemodules'=>"Nuo tada, kai esamas projektas talpina mažiausiai bent vieną modulį, jūs galite <b>Išdėstyti</b>  modulius pakete in  paketas viduje vartotojo Sugar sistemos arba <b>Paskelbti</b> apie paketo instaliavimą į Sugar arba pridėti naudojant  <b>Module Loader</b>.<br/><br/>Norint instaliuoti paketą tiesiogiai į vartotojo Sugar vietą, paspauskite <b>Išdėstyti</b>.<br><br>.zip failo sukūrimui paketui, kuris gali būti užkrautas ir instaliuotas įesamą Sugar atvejį ir kitus atvejus naudojant <b>Module Loader</b>, paspauskite <b>Paskelbti</b>.<br/><br/> Jūs galite sukurti modulius paketui lygiais, ir paskelbti arba išdėstyti, kai esate tam pasiruošę. <br/><br/>paskelbus arba išdėsčius paketą, jūs galite atlikti pakeitimus paketo savybėms ir pritaikyti moduliui.  Tada vėl vėl paskelbti arba išdėstyti  paketus, kad pritaikytumėte pakeitimus." ,
        'editView'=> 'Čia galite redaguoti esančius laukus. Jūs galite išmesti bet kokį esamą lauką arba pridėti galimus laukus, esančius kairėje panelėje.',
        'create'=>'Pasirenkant modulio <b>Tipą</b>, kurį jūs norite sukurti, žinokite laukų tipus kokius norite turėti modulyje. <br/><br/>Kiekvienas modulio šablonas talpina rinkinį laukų susijusių su modulio tipu aprašomu pavadinimu.<br/><br/><b>Pagrindai</b> - pateikia bazinius laukus, kurie yra standartiniuose moduliuose,tokiuose kaip Vardas, Atsakingas, Komanda, Sukūrimo Data ir Aprašymas.<br/><br/> <b>Įmonė</b> - pateikia organizacijos specifinius laukus, tokius kaip Įmonė, Vardas, Pramonė, Sąskaitų siuntimo adresas.  Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs standartiniamd Klientas moduliui.<br/><br/> <b>Asmuo</b> - pateikia individualius specifinius laukus, tokius kaip Sveikinimas, Pavadinimas, Vardas, Adresas ir Telefono numeris.  Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinį Kontaktų ir Potencialus kontaktas modulius.<br/><br/><b>Svarbūs dalykai</b> - Pateikia  case ir klaidų specifinius laukus, tokius kaip Numeris, Statusas, Svarbumas ir Aprašymas. Naudoti šį šabloną modulių sukūrimui, kurie yra panašūs į standartinius Cases ir Klaidų sekėjų modulius.<br/><br/>Pastaba: Sukūrus modulį, jūs galite redaguoti laukų etiketes pateikiamas šablone, taip pat sukurti, pridėti ir pritaikyti laukus modulio Išdėstymui.',
        'afterSave'=>'Pritaikyti  modulį patenkinti vartotojo poreikius redaguojant ir sukuriant laukus, nustatant ryšius su kitais moduliais ir surūšiuojant laukus išdėstyme.<br/><br/>Norint rodyti šablono laukus ir valdyti pritaikytus laukus modulyje, paspauskite <b>Rodyti laukus</b>.<br/><br/>Sukurti ir valdyti ryšius tarp modulio ir kitų modulių, kai moduliai yra programoje arba kiti moduliai pritaikyti tame pačiame pakete, paspauskite <b>Rodyti ryšius</b>.<br/><br/>Redaguoti modulio išdėstymus, paspauskite <b>Rodyti išdėstymus</b>. Jūs galite pakeisti detalų rodymą, redaguoti rodymą ir sąrašą. <br/><br/> Norėdami sukurti modulį su tokiomis pačiomis savybėmis kaip esamas modulis, paspauskite <b>Dublikuoti</b>.  Toliau galite pritaikyti naują modulį.',
        'viewfields'=>'Laukai jūsų modulyje gali būti pritaikyti pagal poreikius.<br/><br/>Jūs galite netrinti standartinių laukų, o  išmesti juos iš atitinkamų išdėstymų puslapių. <br/><br/>Jūs galite redaguoti etiketes standartiniams laukams. Kitas savybės standartinių laukų neredaguojamos. Tačiau, jūs galite greitai sukurti naujus laukus, kurie turi panašias savybes paspaudžiant lauko pavadinamą ir tada paspausti <b>Klonuoti</b> į  <b>Savybes</b> iš.  Įveskite bet kokias naujas savybes ir paspauskite <b>Išsaugoti</b>.<br/><br/>Jeigu jūs pritaikote naują modulį, tai kai modulis bus instaliuotas, tai ne visos laukų savybės bus redaguojamos.  Nustatyti savybes standartiniams laukams ir pritaikyti laukus prieš paskelbiant ir instaliuojant paketą talpinantį pritaikytus modulius.',
        'viewrelationships'=>'Jūs galite sukurti daug-su-daug ryšį tarp esamų modulių irkitų modulių pakete ir/arba tarp instaliuotų modulių programoje.<br><br> Norint sukurti vienas-su-daug ir vienas-su-vienu  ryšius, sukurkite  <b>Susiejimą</b> ir <b>Lankstų susiejimą</b> laukus moduliams.',
        'viewlayouts'=>'You can control what fields are available for capturing data within the <b>Edit View</b>.  You can also control what data displays within the <b>Detail View</b>.  The views do not have to match. <br/><br/>The Quick Create form is displayed when the <b>Create</b> is clicked in a module subpanel. By default, the <b>Quick Create</b> form layout is the same as the default <b>Edit View</b> layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout. <br><br>You can determine the module security using Layout customization along with <b>Role Management</b>.<br><br>',
        'existingModule' =>'Sukūrus ir pritaikius modulį, Jūs galite sukurti papildomus modulius arba grįžti į paketą <b>Paskelbti</b> arba <b>Išdėstyti</b>  paketą.<br><br>Sukurti papildomus modulius, paspauskite <b>Dubliuoti</b>, norint sukurti modulį su tokiomis pačiomis savybėmis, kaip esamas modulis, eikite atgal į paketą ir paspauskite <b>Naujas modulis</b>.<br><br> Jeigu jūs esate pasiruošęs <b>Paskelbti</b> arba <b>Išdėstyti</b>  paketą talpinantį šį modulį, eikite atgal į paketą tam, akd atliktumėte šaias funkcijas. Jūs galite paskelbti ir išdėstyti paketus talpinančius mažiausiai vieną modulį.',
        'labels'=> 'Etiketės standartinių laukų taip pat kaip ir pritaikyti laukai gali būti pakeisti. Pakeičiant lauko etiketę nepaveiks duomenų sukauptų laukuose.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'Kairėje pavaizduoti trys stulpeliai. "Numatytas" stulpelis talpina  laukus, kurie naudojami sąrašo rodymui pagal numatymą,  "Galimas" stulpelis talpina laukus, kur vartotojas gali pasirinkti naudojimui norint sukurti pritaikytą sąrašo rodymą ir  "Paslėptas" stulpelis talpina laukus, prieinamus jums, kaip administratoriui, norint pridėti į "Numatytas"  arba "Galimas" stulpelius.',
        'savebtn'	=> 'Paspaudžiant <b>Išsaugoti</b> išsaugos visus pakeitimus ir padarys juos aktyvius.',
        'Hidden' 	=> 'Paslėpti laukai yra laukai, kurie nėra prieinami vartotojui naudojimui sąrašų žiūrėjimui.',
        'Available' => 'Galimi laukai yra laukai, kurie nerodomi pagal numatymą, bet gali būti įjungti vartotojų.',
        'Default'	=> 'Numatyti laukai  yra rodomi vartotojams, kurie nesukūrė pritaikytų sąrašų rodymo nustatymų.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'Kairėje pavaizduoti du stulpeliai. Stulpelis "Numatytas" talpina  laukus, kurie bus rodomi paieškoje, ir  "Paslėptas" stulpelis talpina laukus, galimus jums, kaip administratoriui, norint pridėti žiūrėjimui.',
        'savebtn'	=> 'Paspaudžiant <b>Išsaugoti ir išdėstyti</b> išsaugos visus pakeitimus ir padarys juos aktyvius.',
        'Hidden' 	=> 'Paslėpti laukai yra laukai, kurie nebus rodomi paieškoje.',
        'Default'	=> 'Numatyti laukai bus rodomi vartotojui paieškoje.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'saveBtn'	=> 'Paspauskite <b>Išsaugoti</b> tam, kad išsaugotumėte visus pakeitimus. Vartotojams pakeitimai bus matomi, kai paspausite Saugoti ir išdėstyti mygtuką.',
        'publishBtn'=> 'Spauskite šį mygtuką, jei norite kad šie išdėstymai iš kart pasimatytų vartotojams.',
        'toolbox'	=> 'Įrankių dėžė talpina papildomus išdėstymo elementus. Kiekvienas iš jų gali būti pritaikytas išdėstymui koreguoti.',
        'panels'	=> '<b>Išdėstymo</b> plotas pateikia vaizdą kaip išdėstymas atrodys modulyje, kai bus atlikti pakeitimai išdėstymui.<br/><br/>Jūs galite pertvarkyti laukus ir panelius tempiant ir metant į pasirinktą vietą.<br/><br/>Išmeskite elementus tempiant ir metant į <b>Šiukšliadėžę</b> įrankių dėžėje, arba pridėkite naujus elementus ir laukus tempiant ir metant iš <b>Įrankių dėžės</b>s į išdėstymo pasirinktą vietą.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout. <br/><br/>If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br/><br/>If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'dropdownaddbtn'=> 'Paspaudžiant šį mygtuką pridės naują elementą į iššokantį meniu.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'Pritaikymai atlikti Studio gali būti supakuoti ir padėti kitoje vietoje.  <br><br>Nurodykite a <b>paketo pavadinimą</b>.  Jūs galite nurodyti <b>Autorių</b> ir <b>Aprašymą</b>, bei visą kitą paketo informaciją.<br><br>Pasirinkite  modulį(-ius), kurie turi pritaikymus eksportavimui. (Tik moduliai ,turintys pritaikymus, bus rodomi jums pasirenkant)<br><br>Paspauskite <b>Eksportuoti</b> tam, kad sukurtumėte .zip failą paketui turinčiam pritaikymus. .zip failas gali būti išsiųstas į kitą vietą per <b>Module Loader</b>.',
        'exportCustomBtn'=>'Paspauskite <b>Eksportuoti</b> tam, kad sukurtumėte .zip failą paketui turinčiam pritaikymus, kuriuos norite eksportuoti.',
        'name'=>'Paketo <b>Pavadinimas</b> bus rodomas Module Loader tada, kai paketas yra išsiųstas instaliacijai į Studio.',
        'author'=>'<b>Autoriaus</b> vardas yra to kas sukūrė visą paketą. Autorius gali būti individualus asmuo arba įmonė.<br><br>Autorius bus rodomas Module Loaderpo to, kai paketas bus išsiųstas instaliavimui į Studio.',
        'description'=>'Paketo <b>Aprašymas</b> bus rodomas Module Loader po to, kai paketas bus išsiųstas instaliacijai į Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> '<b>Kūrėjo įrankių</b1> vieta. <br/><br/>Naudoti  įrankius su šiuo plotu norint sukurti ir valdyti standartinius pritaikytus modulius ir laukus.',
        'studioBtn'	=> 'Naudoti <b>Studio</b> pritaikyti instaliuotus modulius pakeičiant laukų surikiavimą, pasirenkant kokie laukai yra galimi ir kokie yra galimi duomenų sukūrimui.',
        'mbBtn'		=> 'Naudoti <b>Modulio kūrėjas</b> naujų modulių sukūrimui.',
        'appBtn' 	=> 'Naudoti programos rėžimą pritaikyti įvairias savybes, tokias kaip daug TPS ataskaitų yra rodoma pradžios puslapyje',
        'backBtn'	=> 'Grįžti į ankstesnį žingsnį.',
        'studioHelp'=> 'Naudoti <b>Studio</b> pritaikyti instaliuotus modulius.',
        'moduleBtn'	=> 'Paspauskite redaguoti modulį.',
        'moduleHelp'=> 'Pasirinkite  modulio komponentą redagavimui',
        'fieldsBtn'	=> 'Redaguoti informaciją, kuri yra laikoma modulio <b>Laukuose</b>.<br/><br/>Jūs galite redaguoti ir sukurti pritaikomus laukus čia.',
        'labelsBtn' => 'Redaguoti  <b>Etiketes</b> reikšmių rodymui modulyje.'	,
        'layoutsBtn'=> 'Pritaikyti  <b>Išdėstymus</b>  Redagavimo, Detalaus, sąrašų ir paieškos rodymų.',
        'subpanelBtn'=> 'Redaguoti, kokią informacija rodoma šių modulių subpaneliuose.',
        'layoutsHelp'=> 'Pasirinkite redagavimui <b>Išdėstymą </b>.<br/<br/>Pakeisti išdėstymą, kuris talpina duomenų laukus, paspauskite <b>Redaguoti rodymą</b>.<br/><br/>Pakeisti išdėstymą, kuris vaizduoja duomenis įvestus į laukus Redaguoti rodymą, paspauskite <b>Detalus rodymas</b>.<br/><br/>Pakeisti stulpelius, kurie rodomi numatytame sąrašes, paspauskite <b>Rodyti sąrašą</b>.<br/><br/>Norint pakeisti bazinę ir detalią paiešką formos išdėstymus,paspauskite <b>Ieškoti</b>.',
        'subpanelHelp'=> 'Pasirinkite redagavimui <b>Subpanelį</b>.',
        'searchHelp' => 'Pasirinkite išdėstymo redagavimuia <b>Ieškoti</b>.',
        'labelsBtn'	=> 'Redaguoti  <b>Etiketes</b> reikšmių rodymui modulyje.',
        'newPackage'=>'Norėdami sukurti naują paketą paspauskite <b>Naujas paketas</b>.',
        'mbHelp'    => '<b>Module Builder.</b><br/><br/>Naudoti <b>Module Builder</b> paketų sukūrimui, talpinantiems pritaikytus modulius, paremtus standartiniais arba pritaikytais objektais. <br/><br/>Norėdami pradėti, paspauskite <b>Naujas paketas</b> naujo paketo sukūrimui arba pasirinkite redaguoti paketą.<br/><br/>  <b>Paketas</b> veikia kai konteineris atitinkamiems moduliams ir kitiems, kurie yra projekto dalis. Paketas gali turėti vieną arba daugiau pitaikytų modulių, kurie gali būti susiję vienas su kitų programoje. <br/><br/>Pavyzdys: Jūs galite sukurti paketą, talpinantį vieną pritaikytą modulį, kuris yra susijęs su standartiniu Kliento moduliu arba galite sukurti paketą talpinantį kelis naujus modulius, kurie veikia kartu kaip projektas, bei yra susiję vienas su kitu ir kitais moduliais programoje.',
        'exportBtn' => 'Paspauskite <b>Eksportuoti pritaikymus</b> tam, kad sukurtumėte paketą talpinančius pritaikymus, padarytus su Studio specifiniams moduliams.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Iššokančio sąrašo redaktorius',

//ASSISTANT
'LBL_AS_SHOW' => 'Rodyti padėjėją ateityje.',
'LBL_AS_IGNORE' => 'Ignoruoti padėjėją ateityje.',
'LBL_AS_SAYS' => 'Padėjėjas sako:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Modulio kūrėjas',
'LBL_STUDIO' => 'Studija',
'LBL_DROPDOWNEDITOR' => 'Iššokančio sąrašo redaktorius',
'LBL_EDIT_DROPDOWN'=>'Redaguoti iššokantį sąrašą',
'LBL_DEVELOPER_TOOLS' => 'Kūrėjo įrankiai',
'LBL_SUGARPORTAL' => 'Sugar portalo redaktorius',
'LBL_SYNCPORTAL' => 'Sinchronizuoti portalą',
'LBL_PACKAGE_LIST' => 'Paketų sąrašas',
'LBL_HOME' => 'Pradžia',
'LBL_NONE'=>'-Joks-',
'LBL_DEPLOYE_COMPLETE'=>'Išdėstymas baigtas',
'LBL_DEPLOY_FAILED'   =>'Klaida išdėstymo metu, Jūsų paketo nepavyko sėkmingai įdiegti.',
'LBL_ADD_FIELDS'=>'Pridėti nestandartinį lauką',
'LBL_AVAILABLE_SUBPANELS'=>'Matomi subpaneliai',
'LBL_ADVANCED'=>'Išplėstinis',
'LBL_ADVANCED_SEARCH'=>'Detali paieška',
'LBL_BASIC'=>'Bazinis',
'LBL_BASIC_SEARCH'=>'Bazinė paieška',
'LBL_CURRENT_LAYOUT'=>'Išdėstymas',
'LBL_CURRENCY' => 'Valiuta',
'LBL_CUSTOM' => 'Nestandartinis',
'LBL_DASHLET'=>'Panelis',
'LBL_DASHLETLISTVIEW'=>'Panelio ListView',
'LBL_DASHLETSEARCH'=>'Panelio paieška',
'LBL_POPUP'=>'PopupView',
'LBL_POPUPLIST'=>'Popup sąrašas',
'LBL_POPUPLISTVIEW'=>'Popup sąrašas',
'LBL_POPUPSEARCH'=>'Popup paieška',
'LBL_DASHLETSEARCHVIEW'=>'Panelio paieška',
'LBL_DISPLAY_HTML'=>'Rodyti HTML kodą',
'LBL_DETAILVIEW'=>'DetailView',
'LBL_DROP_HERE' => '[Mesti čia]',
'LBL_EDIT'=>'Redaguoti',
'LBL_EDIT_LAYOUT'=>'Redaguoti išdėstymą',
'LBL_EDIT_ROWS'=>'Redaguoti eilutes',
'LBL_EDIT_COLUMNS'=>'Redaguoti stulpelius',
'LBL_EDIT_LABELS'=>'Redaguoti etiketes',
'LBL_EDIT_PORTAL'=>'Redaguoti portalą',
'LBL_EDIT_FIELDS'=>'Redaguoti laukus',
'LBL_EDITVIEW'=>'EditView',
'LBL_FILTER_SEARCH' => "Search",
'LBL_FILLER'=>'(Užpildas)',
'LBL_FIELDS'=>'Laukai',
'LBL_FAILED_TO_SAVE' => 'Nepavyko išsaugoti',
'LBL_FAILED_PUBLISHED' => 'Nepavyko paskelbti',
'LBL_HOMEPAGE_PREFIX' => 'Mano',
'LBL_LAYOUT_PREVIEW'=>'Išdėstymo peržiūra',
'LBL_LAYOUTS'=>'Išdėstymai',
'LBL_LISTVIEW'=>'Sąrašas',
'LBL_RECORDVIEW'=>'Record View',
'LBL_MODULE_TITLE' => 'Studija',
'LBL_NEW_PACKAGE' => 'Naujas paketas',
'LBL_NEW_PANEL'=>'Naujas panelis',
'LBL_NEW_ROW'=>'Naujos eilutės',
'LBL_PACKAGE_DELETED'=>'Paketas ištrintas',
'LBL_PUBLISHING' => 'Skelbiama ...',
'LBL_PUBLISHED' => 'Paskelbta',
'LBL_SELECT_FILE'=> 'Pasirinkti failą',
'LBL_SAVE_LAYOUT'=> 'Išsaugoti išplanavimą',
'LBL_SELECT_A_SUBPANEL' => 'Pasirinkite subpanelį',
'LBL_SELECT_SUBPANEL' => 'Pasirinkite subpanelį',
'LBL_SUBPANELS' => 'Subpaneliai',
'LBL_SUBPANEL' => 'Subpanelis',
'LBL_SUBPANEL_TITLE' => 'Pareigybės:',
'LBL_SEARCH_FORMS' => 'Search',
'LBL_STAGING_AREA' => 'Staging Area (tempkite ir įmeskite elementus čia)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugar laukai (paspauskite elementus pridėti į staging area)',
'LBL_SUGAR_BIN_STAGE' => 'Sugar Bin (paspauskite elementus pridėti į staging area)',
'LBL_TOOLBOX' => 'Įrankių dėžė',
'LBL_VIEW_SUGAR_FIELDS' => 'Rodyti Sugar laukus',
'LBL_VIEW_SUGAR_BIN' => 'Rodyti Sugar Bin',
'LBL_QUICKCREATE' => 'Greitas sukūrimas',
'LBL_EDIT_DROPDOWNS' => 'Redaguoti bendrus iššokančius sąrašus',
'LBL_ADD_DROPDOWN' => 'Pridėti naują bendrą iššokantį sąrašą',
'LBL_BLANK' => '-Tuščia-',
'LBL_TAB_ORDER' => 'Kortelė užsakymas',
'LBL_TAB_PANELS' => 'Rodyti panelius kaip korteles',
'LBL_TAB_PANELS_HELP' => 'Rodyti kiekvieną panelį kaip kortelę',
'LBL_TABDEF_TYPE' => 'Atvaizdavimo tipas:',
'LBL_TABDEF_TYPE_HELP' => 'Nurodykite kaip ši sritis turi būti atvaizduota.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Skiltis',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panelis',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Pasirinkite panelį, jeigu norite turėti atskirą sritį tame pačiame lange. Pasirinkite skiltį jeigu norite turėti sritį naujame lange.',
'LBL_TABDEF_COLLAPSE' => 'Susitraukiantis',
'LBL_TABDEF_COLLAPSE_HELP' => 'Skyrius bus sutrauktas, jei nurodyta kaip panelis.',
'LBL_DROPDOWN_TITLE_NAME' => 'Pavadinimas',
'LBL_DROPDOWN_LANGUAGE' => 'Kalba',
'LBL_DROPDOWN_ITEMS' => 'Sąrašo elementai',
'LBL_DROPDOWN_ITEM_NAME' => 'Elemento vardas',
'LBL_DROPDOWN_ITEM_LABEL' => 'Rodyti etiketę',
'LBL_SYNC_TO_DETAILVIEW' => 'Sinchronizuoti į peržiūros rėžimą',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Pasirinkite šį pasirinkimą norėdami perkelti (sinchronizuoti) redagavimo lango išdėstymą į detalaus lango išdėstymą.<br> Išdėstymas bus pakeistas paspaudus Išsaugoti arba Išsaugoti ir išdėstyti mygtukus. Po išsaugojimo detalaus lango rėžime pakeitimų atlikti nebus galima.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Detalaus lango išdėstymas susinchronizuotas su atitinkamu redagavimo lango išdėstymu.<br><br />Laukai ir jų išdėstymas detaliame lange atitinka redagavimo lango išdėstymą.<br><br />Pakeitimų detaliojo lango išdėstyme šiame puslapyje atlikti negalima. Padaryti pakeitimus arba atšaukti sinchronizavimą galima redagavimo lango išdėstymo puslapyje.',
'LBL_COPY_FROM_EDITVIEW' => 'Kopijuoti iš redagavimo rėžimo',
'LBL_DROPDOWN_BLANK_WARNING' => 'Elemento vardas ir Rodyti etiketę laukeliai turi būti užpildyti. Norėdami įterpti tuščią pasirinkimą paspauskite Pridėti palikdami tuščius abu laukelius.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indicates a combination field. A combination field is a collection of individual fields. For example, "Address" is a combination field that contains "Street address", "City", "Zip Code","State" and "Country".<br><br>Doubleclick a combination field to see which fields it contains.',
'LBL_COMBO_FIELD_CONTAINS' => 'contains:',

'LBL_WIRELESSLAYOUTS'=>'Mobilios versijos išdėstymas',
'LBL_WIRELESSEDITVIEW'=>'Mobili redagavimo forma',
'LBL_WIRELESSDETAILVIEW'=>'Mobili peržiūros forma',
'LBL_WIRELESSLISTVIEW'=>'Mobili sąrašo forma',
'LBL_WIRELESSSEARCH'=>'Mobili paieškos forma',

'LBL_BTN_ADD_DEPENDENCY'=>'Įdėti priklausomybę',
'LBL_BTN_EDIT_FORMULA'=>'Redaguoti formulę',
'LBL_DEPENDENCY' => 'Priklausomybė',
'LBL_DEPENDANT' => 'Priklausomas',
'LBL_CALCULATED' => 'Apskaičiuota reikšmė',
'LBL_READ_ONLY' => 'Tik skaityti',
'LBL_FORMULA_BUILDER' => 'Formulės kūrėjas',
'LBL_FORMULA_INVALID' => 'Neteisinga formulė',
'LBL_FORMULA_TYPE' => 'Formulės tipas turi būti',
'LBL_NO_FIELDS' => 'Laukas nerastas',
'LBL_NO_FUNCS' => 'Funkcija nerasta',
'LBL_SEARCH_FUNCS' => 'Ieškoti funkcijos...',
'LBL_SEARCH_FIELDS' => 'Ieškoti laukų...',
'LBL_FORMULA' => 'Formulė',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Priklausomas',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Prašome nurodyti kokios reikšmės turi matytis priklausančiame sąraše, kai tėvinis sąrašas yra pažymėtas.',
'LBL_AVAILABLE_OPTIONS' => 'Galimi pasirinkimai',
'LBL_PARENT_DROPDOWN' => 'Tėvinis dropdown',
'LBL_VISIBILITY_EDITOR' => 'Matomumo redaktorius',
'LBL_ROLLUP' => 'Rollup',
'LBL_RELATED_FIELD' => 'Susijęs laukas',
'LBL_CONFIG_PORTAL_URL'=>'Nuoroda į logo paveiksliuką. Rekomenduojamos logo išmatavimai - 163 × 18 pikseliai.',
'LBL_PORTAL_ROLE_DESC' => 'Prašome neištrinti šios rolės. Customer Self-Service Portal rolė yra sistemos sugeneruota rolė, kai buvo aktyvuotas Sugar portalas. Nustatykite šiai rolei teises prieiti prie klaidų, aptarnavimų ir žinių bazės modulio. Jeigu per klaidą ištrynėte šią rolę, Jums tereikia išjungti ir vėl atgal įjungti Sugar portalą ir rolės vėl susikurs.',

//RELATIONSHIPS
'LBL_MODULE' => 'Modulis',
'LBL_LHS_MODULE'=>'Pirminis modulis',
'LBL_CUSTOM_RELATIONSHIPS' => '* ryšys sukurtas Studijoje',
'LBL_RELATIONSHIPS'=>'Ryšiai',
'LBL_RELATIONSHIP_EDIT' => 'Redaguoti ryšius',
'LBL_REL_NAME' => 'Pavadinimas',
'LBL_REL_LABEL' => 'Etiketė',
'LBL_REL_TYPE' => 'Tipas',
'LBL_RHS_MODULE'=>'Susijęs modulis',
'LBL_NO_RELS' => 'Nėra ryšių',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Pasirenkamos sąlygos' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Stulpelis',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Reikšmė',
'LBL_SUBPANEL_FROM'=>'Subpanelis iš',
'LBL_RELATIONSHIP_ONLY'=>'Jokių matomų matomų elementų bus nesukurta šiam ryšiui, nes čia yra matomi ryšiai tarp šių dviejų modulių.',
'LBL_ONETOONE' => 'Vienas-su-vienu',
'LBL_ONETOMANY' => 'Vienas-su-daug',
'LBL_MANYTOONE' => 'Daug-su-vienu',
'LBL_MANYTOMANY' => 'Daug-su-daug',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Pasirinkite funkciją arba komponentus.',
'LBL_QUESTION_MODULE1' => 'Pasirinkite modulį.',
'LBL_QUESTION_EDIT' => 'Pasirinkite modulį redagavimui.',
'LBL_QUESTION_LAYOUT' => 'Pasirinkite išdėstymo redagavimą.',
'LBL_QUESTION_SUBPANEL' => 'Pasirinkite subpanelį redagavimui.',
'LBL_QUESTION_SEARCH' => 'Pasirinkite  paiešką išdėstymui redaguoti.',
'LBL_QUESTION_MODULE' => 'Pasirinkite modulio komponentą redagavimui.',
'LBL_QUESTION_PACKAGE' => 'Pasirinkite paketą redagavimui, arba sukurti naują paketą.',
'LBL_QUESTION_EDITOR' => 'Pasirinkite įrankį.',
'LBL_QUESTION_DROPDOWN' => 'Pasirinkite iššokantį sąrašą redagavimui, arba sukurti naują iššokantį sąrašą.',
'LBL_QUESTION_DASHLET' => 'Pasirinkite panelį išdėstymui redaguoti.',
'LBL_QUESTION_POPUP' => 'Pasirinkite iššokantį langą redagavimui.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Susijęs su',
'LBL_NAME'=>'Pavadinimas',
'LBL_LABELS'=>'Etiketė',
'LBL_MASS_UPDATE'=>'Masinis atnaujinimas',
'LBL_AUDITED'=>'Auditas',
'LBL_CUSTOM_MODULE'=>'Modulis',
'LBL_DEFAULT_VALUE'=>'Numatyta reikšmė',
'LBL_REQUIRED'=>'Privalomas',
'LBL_DATA_TYPE'=>'Tipas',
'LBL_HCUSTOM'=>'NESTANDARTINIS',
'LBL_HDEFAULT'=>'Numatytas',
'LBL_LANGUAGE'=>'Kalba:',
'LBL_CUSTOM_FIELDS' => '* Studijoje sukurta laukas',

//SECTION
'LBL_SECTION_EDLABELS' => 'Redaguoti etiketes',
'LBL_SECTION_PACKAGES' => 'Paketai',
'LBL_SECTION_PACKAGE' => 'Paketas',
'LBL_SECTION_MODULES' => 'Moduliai',
'LBL_SECTION_PORTAL' => 'Portalas',
'LBL_SECTION_DROPDOWNS' => 'Iššokantis sąrašas',
'LBL_SECTION_PROPERTIES' => 'Savybės',
'LBL_SECTION_DROPDOWNED' => 'Redaguoti iššokantį sąrašą',
'LBL_SECTION_HELP' => 'Pagalba',
'LBL_SECTION_ACTION' => 'Veiksmas',
'LBL_SECTION_MAIN' => 'Pagrindinis',
'LBL_SECTION_EDPANELLABEL' => 'Redaguoti panelio etiketę',
'LBL_SECTION_FIELDEDITOR' => 'Redaguoti laukus',
'LBL_SECTION_DEPLOY' => 'Išdėstyti',
'LBL_SECTION_MODULE' => 'Modulis',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Redaguoti matomumą',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Numatytas',
'LBL_HIDDEN'=>'Paslėptas',
'LBL_AVAILABLE'=>'Prieinamas',
'LBL_LISTVIEW_DESCRIPTION'=>'Parodyti trys stulpeliai. <b>Numatytas</b> stulpelis talpina laukus, kurie rodomi sąraše pagal Numatytas.  <b>Papildoma</b> stulpelis talpina laukus, kuriuos vartotojas gali naudotipritaikyto žiūrėjimo kūrimui. <b>Galimi</b> stulpelis rodo laukus, kurie yra prieinami jums, kaip administratoriui, norint pridėti juos prie Numatytas arba galimi stulpelių tam, kad jais galėtų naudotis vartotojai.',
'LBL_LISTVIEW_EDIT'=>'Sąrašo formos redaguotas',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Peržiūrėti',
'LBL_MB_RESTORE'=>'Atstatyti',
'LBL_MB_DELETE'=>'Ištrinti',
'LBL_MB_COMPARE'=>'Palyginti',
'LBL_MB_DEFAULT_LAYOUT'=>'Numtatytas išdėstymas',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Įdėti [Alt+C]',
'LBL_BTN_SAVE'=>'Saugoti',
'LBL_BTN_SAVE_CHANGES'=>'Išsaugoti pakeitimus',
'LBL_BTN_DONT_SAVE'=>'Išmesti pakeitimus',
'LBL_BTN_CANCEL'=>'Atšaukti',
'LBL_BTN_CLOSE'=>'Užbaigti',
'LBL_BTN_SAVEPUBLISH'=>'Saugoti ir išdėstyti',
'LBL_BTN_NEXT'=>'Toliau',
'LBL_BTN_BACK'=>'Atgal',
'LBL_BTN_CLONE'=>'Klonas',
'LBL_BTN_ADDCOLS'=>'Pridėti stulpelius',
'LBL_BTN_ADDROWS'=>'Pridėti eilutes',
'LBL_BTN_ADDFIELD'=>'Pridėti lauką',
'LBL_BTN_ADDDROPDOWN'=>'Pridėti iššokantį sąrašą',
'LBL_BTN_SORT_ASCENDING'=>'Rikiuoti didėjimo tvarka',
'LBL_BTN_SORT_DESCENDING'=>'Rikiuoti mažėjimo tvarka',
'LBL_BTN_EDLABELS'=>'Redaguoti etiketes',
'LBL_BTN_UNDO'=>'Atstatyti',
'LBL_BTN_REDO'=>'Sutaisyti',
'LBL_BTN_ADDCUSTOMFIELD'=>'Pridėti nestandartinį lauką',
'LBL_BTN_EXPORT'=>'Eksportuoti pritaikymus',
'LBL_BTN_DUPLICATE'=>'Dublikatas',
'LBL_BTN_PUBLISH'=>'Paskelbti',
'LBL_BTN_DEPLOY'=>'Išdėstyti',
'LBL_BTN_EXP'=>'Eksportuoti',
'LBL_BTN_DELETE'=>'Ištrinti',
'LBL_BTN_VIEW_LAYOUTS'=>'Rodyti išdėstymą',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'View Mobile Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Rodyti laukus',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Rodyti ryšius',
'LBL_BTN_ADD_RELATIONSHIP'=>'Pridėti ryšius',
'LBL_BTN_RENAME_MODULE' => 'Pakeisti modulio pavadinimą',
'LBL_BTN_INSERT'=>'Įdėti',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Klaida: Laukas jau egzistuoja',
'ERROR_INVALID_KEY_VALUE'=> "Klaida: Neteisinga rakto reikšmė: [&#39;]",
'ERROR_NO_HISTORY' => 'Nerastas istorijos failas',
'ERROR_MINIMUM_FIELDS' => 'Išdėstymas turi turėti bent vieną lauką',
'ERROR_GENERIC_TITLE' => 'Klaida',
'ERROR_REQUIRED_FIELDS' => 'Ar tikrai norite tęsti? Privalomi laukai, kurie yra praleisti:',
'ERROR_ARE_YOU_SURE' => 'Ar tikrai norite tęsti?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Šie laukai turi reikšmes, kurios nebus perskaičiuotos SugarCRM mobilioje redagavimo formos versijoje:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Šie laukai turi reikšmes, kurios nebus perskaičiuotos SugarCRM portalo redagavimo formos versijoje:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'Šie moduliai yra išjungti:',
    'LBL_PORTAL_ENABLE_MODULES' => 'Jeigu Jūs norite įjungti juos portale, prašome įjungti juos <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">čia</a>',
    'LBL_PORTAL_CONFIGURE' => 'Konfigūruoti portalą',
    'LBL_PORTAL_THEME' => 'Portalo tema',
    'LBL_PORTAL_ENABLE' => 'Įjungti',
    'LBL_PORTAL_SITE_URL' => 'Jūsų portalo tinklapis yra prieinamas per:',
    'LBL_PORTAL_APP_NAME' => 'Programos pavadinimas',
    'LBL_PORTAL_LOGO_URL' => 'Logo URL nuoroda',
    'LBL_PORTAL_LIST_NUMBER' => 'Sąrašo režime atvaizduojamų įrašų skaičius',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Peržiūros režime atvaizduojamų laukų skaičius',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Globalioje paieškoje atvaizduojamų įrašų skaičius',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Pagal nutylėjimą priskirtas naujoms portalo registracijoms',
'LBL_PORTAL'=>'Portalas',
'LBL_PORTAL_LAYOUTS'=>'Portalo išdėstymas',
'LBL_SYNCP_WELCOME'=>'Prašome įvesti portalo adresą',
'LBL_SP_UPLOADSTYLE'=>'Pasirinkite stiliaus lapą kurį norite užkrauti iš savo kompiuterio .<br> Kai kitą kartą sinchronizuosite duomenis Sugar portalas pradės naudoti šį stiliaus lapą.',
'LBL_SP_UPLOADED'=> 'Užkrauta',
'ERROR_SP_UPLOADED'=>'Prašome pasitikrinti, kad Jūs keliate CSS failą.',
'LBL_SP_PREVIEW'=>'Štai taip atrodys Sugar portalas su šiuo stiliaus lapu',
'LBL_PORTALSITE'=>'Sugar portalo adresas:',
'LBL_PORTAL_GO'=>'Eiti',
'LBL_UP_STYLE_SHEET'=>'Užkrauti stiliaus lapą (CSS)',
'LBL_QUESTION_SUGAR_PORTAL' => 'Pasirinkite kurį Sugar portalo išdėstymą norite redaguoti.',
'LBL_QUESTION_PORTAL' => 'Pasirinkite kurį portalo išdėstymą norite redaguoti.',
'LBL_SUGAR_PORTAL'=>'Sugar portalo redaktorius',
'LBL_USER_SELECT' => '-- Pasirinkti --',

//PORTAL PREVIEW
'LBL_CASES'=>'Aptarnavimas',
'LBL_NEWSLETTERS'=>'Naujienlaiškis',
'LBL_BUG_TRACKER'=>'Klaidos',
'LBL_MY_ACCOUNT'=>'Mano nustatymai',
'LBL_LOGOUT'=>'Atsijungti',
'LBL_CREATE_NEW'=>'Sukurti naują',
'LBL_LOW'=>'Maža',
'LBL_MEDIUM'=>'Vidutinė',
'LBL_HIGH'=>'Didelė',
'LBL_NUMBER'=>'Numeris:',
'LBL_PRIORITY'=>'Svarba:',
'LBL_SUBJECT'=>'Tema',


//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Paketo pavadinimas:',
'LBL_MODULE_NAME'=>'Modulio pavadinimas:',
'LBL_MODULE_NAME_SINGULAR' => 'Modulio pavadinimas vienaskaita',
'LBL_AUTHOR'=>'Autorius:',
'LBL_DESCRIPTION'=>'Pavadinimas',
'LBL_KEY'=>'Raktas:',
'LBL_ADD_README'=>'Perskaityk',
'LBL_MODULES'=>'Moduliai:',
'LBL_LAST_MODIFIED'=>'Paskutini kartą redaguota:',
'LBL_NEW_MODULE'=>'Naujas Modulis',
'LBL_LABEL'=>'Daugiskaita',
'LBL_LABEL_TITLE'=>'Etiketė',
'LBL_SINGULAR_LABEL' => 'Vienaskaita',
'LBL_WIDTH'=>'Plotis',
'LBL_PACKAGE'=>'Paketas:',
'LBL_TYPE'=>'Tipas:',
'LBL_TEAM_SECURITY'=>'Komandos apsauga',
'LBL_ASSIGNABLE'=>'Priskiriamas',
'LBL_PERSON'=>'Asmuo',
'LBL_COMPANY'=>'Įmonė',
'LBL_ISSUE'=>'Issue',
'LBL_SALE'=>'Pardavimas',
'LBL_FILE'=>'Failas',
'LBL_NAV_TAB'=>'Navigacijos kortelė',
'LBL_CREATE'=>'Sukurti',
'LBL_LIST'=>'List',
'LBL_VIEW'=>'Rodyti',
'LBL_LIST_VIEW'=>'Sąrašas',
'LBL_HISTORY'=>'Rodyti istoriją',
'LBL_RESTORE_DEFAULT'=>'Atstatyti numatytą',
'LBL_ACTIVITIES'=>'Priminimai',
'LBL_SEARCH'=>'Search',
'LBL_NEW'=>'Naujas',
'LBL_TYPE_BASIC'=>'Bazinė',
'LBL_TYPE_COMPANY'=>'Įmonė',
'LBL_TYPE_PERSON'=>'Asmuo',
'LBL_TYPE_ISSUE'=>'problema',
'LBL_TYPE_SALE'=>'pardavimas',
'LBL_TYPE_FILE'=>'Failas',
'LBL_RSUB'=>'Tai subpanelis, kuris bus rodomas jūsų modulyje',
'LBL_MSUB'=>'Tai yra subpanelis, kurį vartotojo modulis pateikia rodymui susijusiam moduliui.',
'LBL_MB_IMPORTABLE'=>'Importuojama',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'matomas',
'LBL_VE_HIDDEN'=>'paslėptas',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] ištrintas',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Eksportuoti pritaikymus',
'LBL_EC_NAME'=>'Paketo pavadinimas:',
'LBL_EC_AUTHOR'=>'Autorius:',
'LBL_EC_DESCRIPTION'=>'Pavadinimas',
'LBL_EC_KEY'=>'Raktas:',
'LBL_EC_CHECKERROR'=>'Prašome pasirinkite modulį.',
'LBL_EC_CUSTOMFIELD'=>'nestandartiniai laukai',
'LBL_EC_CUSTOMLAYOUT'=>'nestandartiniai išdėstymai',
'LBL_EC_CUSTOMDROPDOWN' => 'customized dropdown(s)',
'LBL_EC_NOCUSTOM'=>'Jokie moduliai nebuvo adaptuoti.',
'LBL_EC_EXPORTBTN'=>'Eksportuoti',
'LBL_MODULE_DEPLOYED' => 'Moduliai buvo išdėstyti.',
'LBL_UNDEFINED' => 'neapibrėžtas',
'LBL_EC_CUSTOMLABEL'=>'customized label(s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Nepavyko išgauti duomenų',
'LBL_AJAX_TIME_DEPENDENT' => 'Nuo laiko priklausomas veiksmas yra vykdomas dabar prašome palaukti ir pabandyt po keliu sekundžių',
'LBL_AJAX_LOADING' => 'Kraunasi...',
'LBL_AJAX_DELETING' => 'Ištrinama...',
'LBL_AJAX_BUILDPROGRESS' => 'Tvarkoma...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Išsidėstymas vykdomas...',
'LBL_AJAX_FIELD_EXISTS' =>'Laukas tokiu pavadinimu jau egzistuoja. Prašome įvesti naują lauko pavadinimą.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Ar tikrai norite išimiti šį paketą? Tai visam laikui ištrins failus, susijusius su šiuo paketu.',
'LBL_JS_REMOVE_MODULE' => 'Ar tikrai norite išimti šį modulį? Tai visam laikui ištrins failus, susijusius su šiuo moduliu.',
'LBL_JS_DEPLOY_PACKAGE' => 'Visi pakeitimai kuriuos padarėte Studijoje bus užrašyti ant viršaus, kai šis modulis bus pakartotinai užkrautas. Ar norite tęsti?',

'LBL_DEPLOY_IN_PROGRESS' => 'Išdėstomas paketas',
'LBL_JS_VALIDATE_NAME'=>'Pavadinimas turi būti iš raidžių ir skaičių be tarpų ir turi prasidėti iš raidžių',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Paketo pavadinimas jau egzistuoja',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Key - Must be alphanumeric and begin with a letter.',
'LBL_JS_VALIDATE_KEY'=>'Raktas - turi būti raidinis skaitmeninis.',
'LBL_JS_VALIDATE_LABEL'=>'Prašome įvesti etiketę, kuri bus naudojama pavadinimo vaizdavimui šiam moduliui',
'LBL_JS_VALIDATE_TYPE'=>'Prašome pasirinkti modulio tipą, kurį jūs norite sukurti iš sąrašo',
'LBL_JS_VALIDATE_REL_NAME'=>'Pavadinimas privalo būti iš raidžių ir ir/arba skaičių ir tarpų',
'LBL_JS_VALIDATE_REL_LABEL'=>'Etiketė - prašome pridėti etiketę, kuri bus matoma subpanelyje',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Are you sure you wish to delete this required dropdown list item? This may affect the functionality of your application.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Are you sure you wish to delete this dropdown list item? Deleting the Closed Won or Closed Lost stages will cause the Forecasting module to not work properly',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Are you sure you wish to delete the Closed Won sales stage? Deleting this stage will cause the Forecasting module to not work properly',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Are you sure you wish to delete the Closed Lost sales stage? Deleting this stage will cause the Forecasting module to not work properly',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Are you sure you wish to delete this relationship?<br>Note: This operation may not complete for several minutes.',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'Tai padarys šį ryšį pastovų. Ar tikrai norite išdėstyti šį ryšį?',
'LBL_CONFIRM_DONT_SAVE' => 'pakeitimai buvo atlikti nuo paskutinio išsaugojimo, ar norėtumėte išsaugoti?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Išsaugoti pakeitimus?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Duomenys gali būti ištrinti negrįžtamai, ar norite tęsti?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Pasirinkite  atitinkamą duomenų tipą, paremtą duomenimis, kurie bus įvedami į lauką.',
'LBL_POPHELP_SEARCHABLE'=>'Nurodykite reikšmingumo lygį šiam laukui. Kuo reikšmingesnis laukas, tuo dažniau ir aukščiau jis bus matomas paieškose.',
'LBL_POPHELP_IMPORTABLE'=>'<b>Taip</b>: Laukas bus įtrauktas importavimui.<br><b>Ne</b>: Laukas nebus įtrauktas importavimui.<br><b>Privalomas</b>: reikšmė importavimui privalo būti pateikta visiems importavimams.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Įveskite plotį pikseliais.<br> Užkraunamas paveiksliukas bus sumažintas iki tokio pločio.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Įveskite aukštį pikseliais.<br> Užkraunamas paveiksliukas bus sumažintas iki tokio aukščio.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
'LBL_RESET' => 'Atstatyti',
'LBL_RESET_MODULE' => 'Atstatyti modulį',
'LBL_REMOVE_CUSTOM' => 'Išmesti pakeitimus',
'LBL_CLEAR_RELATIONSHIPS' => 'Išvalyti ryšius',
'LBL_RESET_LABELS' => 'Atstatyti pavadinimus',
'LBL_RESET_LAYOUTS' => 'Atstatyti išdėstymą"',
'LBL_REMOVE_FIELDS' => 'Išmesti pridėtus laukus',
'LBL_CLEAR_EXTENSIONS' => 'Išvalyti išplėtimus',

'LBL_HISTORY_TIMESTAMP' => 'Data ir laikas',
'LBL_HISTORY_TITLE' => 'istorija',

'fieldTypes' => array(
                'varchar'=>'Tekstas',
                'int'=>'Skaičius',
                'float'=>'Float',
                'bool'=>'Checkbox',
                'enum'=>'Iššokantis sąrašas',
                'multienum' => 'MultiSelect',
                'date'=>'Data:',
                'phone' => 'Telefonas',
                'currency' => 'Valiuta',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Susijęs',
                'address' => 'Adresas',
                'text' => 'TextArea',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Paveikslėlis',
                'encrypt'=>'Encrypt',
                'datetimecombo' =>'Datetime',
                'decimal'=>'Decimal',
),
'labelTypes' => array(
    "" => "Anksčiau naudoti pavadinimai",
    "all" => "Visi",
),

'parent' => 'Flex Relate',

'LBL_ILLEGAL_FIELD_VALUE' =>"Iššokantis sąrašo raktas negali turėti kabučių.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Jūs pasirinkote išmesti šį elementą iš iššokančio sąrašo. Atlikus ištrynimą šis elementas nebus matomas jokiuose iššokančiuose sąrašuose. Ar norite tęsti?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);
