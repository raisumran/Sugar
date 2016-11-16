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
	'LBL_MODULE_NAME' => 'Βάση Γνώσεων',
    'LBL_MODULE_NAME_SINGULAR' => 'KBDocument',
	'LBL_MODULE_TITLE' => 'Άρθρο Βάσης Γνώσεων',
	'LNK_NEW_ARTICLE' => 'Δημιουργία Άρθρου',
	'LNK_KBDOCUMENT_LIST'=> 'Προβολή Εγγράφων',
	'LBL_DOC_REV_HEADER' => 'Αναθεωρήσεις Εγγράφων',
	'LBL_SEARCH_FORM_TITLE'=> 'Αναζήτηση Εγγράφου',
	'LBL_SEND_EMAIL'  => 'Αποστολή Email',
	'LBL_SELECT_TAG_BUTTON_TITLE' => 'Επιλογή',
	'LBL_EMBEDED_IMAGES' => 'Ενσωματωμένες Εικόνες:',
	'LBL_SHOW_MORE' => 'Εμφάνιση Περισσότερων Άρθρων',
	'LBL_SHOW_ARTICLE_DETAILS' => 'Εμφάνιση Περισσότερων Λεπτομερειών',
	'LBL_HIDE_ARTICLE_DETAILS' => 'Απόκρυψη Λεπτομερειών',
	'LBL_TAGS' => 'Ετικέτες:',
	'LBL_NOT_AN_ADMIN_USER' => 'Δεν είναι ένας διαχειριστής',
	'LBL_NOT_A_VALID_FILE' => 'Δεν είναι ένα έγκυρο αρχείο',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'Δημιουργία Νέας Ετικέτας',
    'LBL_NEW_TAG_NAME' => 'Νέο Όνομα Ετικέτας:',
	
	//vardef labels	
	'LBL_ID' => 'Ταυτότητα',
	'LBL_KBDOCUMENT_ID' => 'Ταυτότητα Εγγράφου',
	'LBL_ARTICLE_TITLE' => 'Τίτλος:',
	'LBL_ARTICLE_AUTHOR' => 'Συγγραφέας:',
	'LBL_ARTICLE_APPROVED_BY' =>'Έγκριση:',
	'LBL_ARTICLE_BODY' => 'Σώμα Άρθρου:',
	'LBL_NAME' => 'Όνομα Εγγράφου:',
	'LBL_DESCRIPTION' => 'Περιγραφή',
	'LBL_CATEGORY' => 'Κατηγορία',
	'LBL_SUBCATEGORY' => 'Υπο Κατηγορία',
	'LBL_STATUS' => 'Κατάσταση',
	'LBL_CREATED_BY'=> 'Δημιουργήθηκε από',
	'LBL_DATE_ENTERED'=> 'Ημερομηνία Δημιουργίας',
	'LBL_DATE_MODIFIED'=> 'Ημερομηνία Τροποποίησης',
	'LBL_DELETED' => 'Διαγράφηκε',
	'LBL_MODIFIED'=> 'Τροποποιήθηκε από Ταυτότητα',
	'LBL_MODIFIED_USER' => 'Τροποποιήθηκε από',
	'LBL_CREATED'=> 'Δημιουργήθηκε από',
	'LBL_RELATED_DOCUMENT_ID'=>'Ταυτότητα Σχετικού  Εγγράφου',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Ταυτότητα Αναθεώρησης Σχετικού  Εγγράφου',
	'LBL_IS_TEMPLATE'=>'Ειναι ένα Πρότυπο',
	'LBL_TEMPLATE_TYPE'=>'Τύπος Εγγράφου',
    'LBL_PARENT_TYPE'=>'Γονικός Τύπος',
	'LBL_NUMBER'    =>  'ΕΤΙΚ_ΑΡΙΘΜΟΣ',
    'LBL_TEXT_BODY' =>  'ΕΤΙΚ_ΚΕΙ ΜΕΝΟ_ΣΩΜΑ',
    'LBL_CREATED_BY_NAME' => 'ΕΤΙΚ_ΔΗΜΙΟΥΡΓΗΘΗΚΕ_ΑΠΟ_ΟΝΟΜΑ',
    'LBL_TAG_ID' => 'ΕΤΙΚ_ΕΤΙΚΕΤΑ_ΤΑΥΤΟΤΗΤΑ',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'ΕΤΙΚ_Γνωσιακή ΒάσηΕΓΓΡΑΦΑ_Γνωσιακή ΒάσηΕΤΙΚΕΤΕΣ_ΤΑΥΤΟΤΗΤΑ',
    'LBL_CONTRACT_STATUS'=>'Κατάσταση Σύμβασης',
    'LBL_LINKED_ID'=>'Ταυτότητα Linked',
    'LBL_VIEWS_NUMBER'=>'Αριθμός Εμφανίσεων',

	'LBL_REVISION_NAME' => 'Αριθμός Αναθεώρησης',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'Αριθμός Έγγραφων Αναθεώρησης Βάσης Γνώσεων',
	'LBL_MIME' => 'Τύπος Mime',
	'LBL_REVISION' => 'Αναθεώρηση',
	'LBL_DOCUMENT' => 'Σχετικό Έγγραφο',
	'LBL_LATEST_REVISION' => 'Ταυτότητα Τελευταίας Αναθεώρησης',
    'LBL_LATEST_REVISION_NAME' => 'Όνομα Τελευταίας Αναθεώρησης',
    'LBL_SELECTED_REVISION_NAME' => 'Επιλεγμένο Όνομα Αναθεώρησης',
    'LBL_SELECTED_REVISION_ID' => 'Επιλεγμένη ταυτότητα αναθεώρησης',
    'LBL_SELECTED_REVISION_FILENAME' => 'Επιλεγμένο Όνομα Αρχείου Αναθεώρησης',
	'LBL_CHANGE_LOG'=> 'Αλλαγή Σύνδεσης',
	'LBL_ACTIVE_DATE'=> 'Ημερομηνία Δημοσίευσης',
	'LBL_EXPIRATION_DATE' => 'Ημερομηνία Λήξης',
	'LBL_FILE_EXTENSION'  => 'Επέκταση Αρχείου',
    'LBL_KBDOC_APPROVER_NAME' => 'Όνομα Έγκρισης',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'Βάση Γνώσεων',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'Διαχείριση Βάσης Γνώσεων',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'Διαχειριστής Βάσης Γνώσεων',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Ακαθόριστο',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'Ετικέτες:',
	'LBL_KBDOC_BODY' => 'Σώμα:',
	'LBL_KBDOC_APPROVED_BY' =>'Εγκρίθηκε Από:',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_attahment',
	'LBL_KBDOC_ATTS_TITLE' =>'Λήψη Επισυνάψεων:',
	'LBL_DOC_NAME' => 'Όνομα Εγγράφου:',
	'LBL_FILENAME' => 'Όνομα Αρχείου:',
	'LBL_DOC_VERSION' => 'Αναθεώρηση:',
	'LBL_CATEGORY_VALUE' => 'Κατηγορία:',
	'LBL_SUBCATEGORY_VALUE'=> 'Υπο Κατηγορία:',
	'LBL_DOC_STATUS'=> 'Κατάσταση:',
	'LBL_LAST_REV_CREATOR' => 'Αναθεώρηση Δημιουργήθηκε Από:',
	'LBL_LAST_REV_DATE' => 'Ημερομηνία Αναθεώρησης:',
	'LBL_DOWNNLOAD_FILE'=> 'Επισυνάψεις:',
	'LBL_DET_RELATED_DOCUMENT'=>'Σχετικό Έγγραφο:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Αναθεώρηση Σχετικών Εγγράφων:",
	'LBL_DET_IS_TEMPLATE'=>'Πρότυπο; :',
	'LBL_DET_TEMPLATE_TYPE'=>'Τύπος Εγγράφου:',
	'LBL_IS_EXTERNAL_ARTICLE' => 'Εξωτερικό Άρθρο;',
	'LBL_SHOW_TAGS' => 'Εμφάνιση Περισσότερων Ετικετών',
    'LBL_HIDE_TAGS' => 'Απόκρυψη Ετικετών',
	'LBL_TEAM'=> 'Ομάδα:',
	'LBL_DOC_DESCRIPTION'=>'Περιγραφή:',
	'LBL_KBDOC_SUBJECT' =>'Θέμα:',
	'LBL_DOC_ACTIVE_DATE'=> 'Ημερομηνία Δημοσίευσης:',
	'LBL_DOC_EXP_DATE'=> 'Ημερομηνία Λήξης:',

	//document list view.
	'LBL_LIST_ARTICLES' => 'Προβολή Άρθρων',
	'LBL_LIST_FORM_TITLE' => 'Λίστα Εγγράφων',
	'LBL_LIST_DOCUMENT' => 'Έγγραφο',
	'LBL_LIST_CATEGORY' => 'Κατηγορία',
	'LBL_LIST_SUBCATEGORY' => 'Υπο Κατηγορία',
	'LBL_LIST_REVISION' => 'Αναθεώρηση',
	'LBL_LIST_LAST_REV_CREATOR' => 'Δημοσιεύθηκε Από',
	'LBL_LIST_LAST_REV_DATE' => 'Ημερομηνία Αναθεώρησης',
	'LBL_LIST_VIEW_DOCUMENT'=>'Προβολή',
    'LBL_LIST_DOWNLOAD'=> 'Λήψη',
	'LBL_LIST_ACTIVE_DATE' => 'Ημερομηνία Δημοσίευσης',
	'LBL_LIST_EXP_DATE' => 'Ημερομηνία Λήξης',
	'LBL_LIST_STATUS'=>'Κατάσταση',
    'LBL_ARTICLE_AUTHOR_LIST' => 'Συγγραφέας',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => 'Περισσότερες Προβολές Άρθρων',
	'LBL_LIST_MOST_RECENT' => 'Περισσότερα Πρόσφατα Άρθρα',
    'LBL_LIST_APPROVED_BY' => 'Εγκρίθηκε Από',
	//document search form.
	'LBL_SF_DOCUMENT' => 'Όνομα Εγγράφου:',
	'LBL_SF_CATEGORY' => 'Κατηγορία:',
	'LBL_SF_SUBCATEGORY'=> 'Υπο Κατηγορία:',
	'LBL_SF_ACTIVE_DATE' => 'Ημερομηνία Δημοσίευσης:',
	'LBL_SF_EXP_DATE'=> 'Ημερομηνία Λήξης:',

	'DEF_CREATE_LOG' => 'Δημιουργήθηκε Έγγραφο',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => 'Αναζήτηση',
    'LBL_TAB_BROWSE' => 'Περιήγηση',
    'LBL_TAB_ADVANCED' => 'Σύνθετη Αναζήτηση',
    'LBL_MENU_FTS' => 'Αναζήτηση Πλήρους Κειμένου',
    'LBL_FTS_EMPTY_STRING' =>  'Δεν μπορεί να εκτελέσει αναζήτηση πλήρους κειμένου σε μια κενή συμβολοσειρά',
    'LBL_SEARCH_WITHIN' => 'Αναζήτηση:',      
    'LBL_CONTAINING_THESE_WORDS' => 'Συμπεριλαμβανομένων αυτών των λέξεων:',     
    'LBL_EXCLUDING_THESE_WORDS' => 'Εξαιρουμένων αυτών των λέξεων:',  
    'LBL_UNDER_THIS_TAG' => 'Χρησιμοποιώντας Αυτήν την Ετικέτα:',
    'LBL_PUBLISHED' => 'Δημοσιεύθηκε:',
    'LBL_EXPIRES' => 'Λήξη:',
    'LBL_TIMES_VIEWED' => 'Συχνότητα Προβολής:',    
    'LBL_ATTACHMENTS' => 'Επισυνάψεις:',
    'LBL_SAVE_SEARCH_AS' => 'Αποθήκευση της αναζήτησης ως:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'Αυτό αποθηκεύει τις συγκεκριμένες καταχωρήσεις σας σαν Αποθηκευμένο φίλτρο Αναζήτησης για τη Βάση Γνώσεων.',
    'LBL_PREVIOUS_SAVED_SEARCH' => 'Προηγούμενες Αποθηκευμένες Αναζητήσεις:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => 'Επεξεργασία ή Διαγραφή υπάρχουσας Αποθηκευμένης Αναζήτησης.',
    'LBL_UPDATE' => 'Ενημέρωση',
    'LBL_DELETE' => 'Διαγραφή',
    'LBL_SHOW_OPTIONS' => 'Περισσότερες Επιλογές',
    'LBL_AND' => 'και',
    'LBL_SEARCH' => 'Αναζήτηση',
    'LBL_CLEAR' => 'Εκκαθάριση',
    'LBL_LIST_KBDOC_APPROVER_NAME' => 'Όνομα Έγκρισης',
    'LBL_LIST_VIEWING_FREQUENCY' => 'Συχνότητα',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'Το προηγούμενο δεν είναι διαθέσιμο, δεν βρέθηκε αρχείο Εγγράφου.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'Το προηγούμενο δεν είναι διαθέσιμο, το έγγραφο υπάρχει, αλλά κανένα περιεχόμενο δεν έχει δημιουργηθεί ακόμα.',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'Άρθρα χωρίς Ετικέτα',
    'LBL_TOP_TEN_LIST_TITLE' => 'Οι 10 Καλύτερες Εμφανίσεις Άρθρων',
    'LBL_SHOW_SYNTAX_HELP' => 'Βοήθεια Σύνταξης',
    'LBL_MISMATCH_QUOTES_ERR' => 'Το ερώτημα σας δεν θα λειτουργήσει όπως εγγράφεται. Πρέπει να υπάρχει ένα κλειστό διπλό εισαγωγικό για κάθε άνοιγμα διπλού εισαγωγικού για να κάνει ένα ζευγάρι. Εάν επιθυμείτε να ψάξετε για μια συμβολοσειρά με ένα διπλό εισαγωγικό, η διαφυγή αυτή με μια ανάστροφη κάθετο (\\")', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        'Βοήθεια Σύνταξης Ερωτήματος:<br /><br />1. Το πρόσημο (+) δείχνει τα αποτελέσματα "πρέπει να έχει" αυτόν τον όρο.<br />2. Το πρόσημο (-) δείχνει τα αποτελέσματα  "δεν πρέπει να έχει" αυτόν τον όρο. Το πρόσημο (-) δεν είναι απαραίτητο εάν συμπληρώσετε το πεδίο κειμένου για τις λέξεις που πρέπει να αποκλείονται.<br />3. Πολλαπλές λέξεις μέσα σε διπλά εισαγωγικά ("παράδειγμα1 παράδειγμα2")  αντιμετωπίζονται ως ένας ενιαίος όρος αναζήτησης. Πρέπει να υπάρχει άνοιγμα και κλείσιμο των εισαγωγικών διαφορετικά η αναζήτηση δεν θα τρέξει.<br />4. Ένα μονό εισαγωγικό (&#39;) θα πρέπει να αναζητηθεί στις ως έχει, και όχι ως γκρουπ.<br /><br />Παράδειγμα:<br /><br />Το ερώτημα για όλα τα άρθρα με τις λέξεις "Sugar" ή "CRM το οποίο πρέπει να έχει τις λέξεις "Knowledge Base" and "cool," αλλά να μην εχει τις λέξεις "demo" ή "past tense," εισάγετε την ακόλουθη συμβολοσειρά:<br />    Sugar CRM +"Knowledge Base" +cool -demo -"Past Tense"<br /><br />Σημειώσεις:<br /><br />1. Η υπόθεση δεν έχει σημασία.<br />2. Τα διαστήματα και τα κόμματα είναι και τα δύο αποδεκτοί οριοθέτες.<br />3. Μην βάλετε ένα διάστημα μεταξύ των προσήμων συν (+) ή μείον (-) και τις λέξεις που απαριθμούν.',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => 'Θυγατρική Ετικέτα',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => 'Θυγατρικές Ετικέτες',
    'LBL_ARTICLE_IN_TREE_HOVER' => 'Άρθρο',
    'LBL_ARTICLES_IN_TREE_HOVER' => 'Άρθρα',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'Αυτή η ετικέτα περιέχει',
    
	//error messages
	'ERR_DOC_NAME'=>'Όνομα Εγγράφου',
	'ERR_DOC_ACTIVE_DATE'=>'Ημερομηνία Δημοσίευσης',
	'ERR_DOC_EXP_DATE'=> 'Ημερομηνία Λήξης',
	'ERR_FILENAME'=> 'Όνομα Αρχείου',
	'ERR_DOC_VERSION'=> 'Έκδοση Εγγράφου',
	'ERR_DELETE_CONFIRM'=> 'Θέλετε να διαγράψετε αυτή την αναθεώρηση του εγγράφου;',
	'ERR_DELETE_LATEST_VERSION'=> 'Δεν επιτρέπεται η διαγραφή της τελευταίας αναθεώρησης ενός εγγράφου.',
	'LNK_NEW_MAIL_MERGE' => 'Συγχώνευση Ταχυδρομείου',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Συγχώνευση Πρότυπου Ταχυδρομείου:',
	'ERR_FILESIZE' => 'Το αρχείο είναι πολύ μεγάλο. Μέγιστο μέγεθος αρχείου:',

	'LBL_TREE_TITLE' => 'Έγγραφα',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Όνομα Εγγράφου',
	'LBL_CONTRACT_NAME'=>'Όνομα Επαφής:',
	'LBL_LIST_IS_TEMPLATE'=>'Πρότυπο;',
	'LBL_LIST_TEMPLATE_TYPE'=>'Τύπος Εγγράφου',
	'LBL_LIST_SELECTED_REVISION'=>'Επιλεγμένη Αναθεώρηση',
	'LBL_LIST_LATEST_REVISION'=>'Τελευταία Αναθεώρηση',
	'LBL_CASES_SUBPANEL_TITLE'=>'Σχετικές Υποθέσεις',
	'LBL_EMAILS_SUBPANEL_TITLE' => 'Σχετικά Emails',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Σχετικές Συμβάσεις',
	'LBL_LAST_REV_CREATE_DATE'=>'Ημερομηνία Δημιουργίας Τελευταίας Αναθεώρησης',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'Λέξεις Κλειδιά:',
    'LBL_CASES' =>'Υποθέσεις',
    'LBL_CASE_ID' => 'Ταυτότητα Υπόθεσης',
    'LBL_CASE'    => 'Υπόθεση:',
    'LBL_EMAILS' =>'Emails',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'Επιλέξτε μια ενέργεια από τη λίστα',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'Επιλέξτε την ετικέτα γονέα από το δέντρο',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => 'Επιλέξτε ετικέτα να διαγραφεί από το δέντρο',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'Επιλέξτε ετικέτα να μετονομαστεί από το δέντρο',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'Η ετικέτα υπάρχει ήδη',
    'LBL_TYPE_THE_NEW_TAG_NAME' => 'Πληκτρολογήστε το νέο όνομα της ετικέτας',
    'LBL_SAVING_THE_TAG' => 'Αποθήκευση Ετικέτας...',
    'LBL_CREATING_NEW_TAG' => 'Δημιουργία Νέας Ετικέτας...',
    'LBL_TAGS_ROOT_LABEL' => 'Ετικέτες',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'Συχνές Ερωτήσεις. Η Ετικέτα δεν μπορεί να μετονομαστεί',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => 'Επιλογή Άρθρων Πρώτα',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'Επιλέξτε Άρθρα να Εφαρμόσετε Ετικέτες',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => 'Επιλογή Άρθρων Πρώτα',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'Επιλογή Ετικέτας Από το Δέντρο',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'Επιλογή Ετικετών Από το Δέντρο',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'Μετακίνηση άρθρων σε ετικέτα...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'Εφαρμογή Ετικετών στα Άρθρα',
    'LBL_ROOT_TAG_MESSAGE' => 'Ετικέτα Ρίζας δεν μπορεί να επιλεχθεί/σύνδεση με το άρθρο',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'Η Ρίζα ετικέτα δεν μπορεί να μετονομαστεί',
    'LBL_TYPE_NEW_NODE_NAME'=>'Παρακαλώ εισάγετε όνομα ετικέτας',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'Οι ετικέτες πηγής και στόχων είναι ίδιες',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'Διαγραφή Ετικέτας',
    'LBL_SELECT_TAG'  => 'Επιλογή Ετικέτας',
    'LBL_APPLY_TAG'  =>  'Εφαρμογή Ετικέτας',
    'LBL_MOVE'  =>   'Μετακίνηση',
    'LBL_LAUNCHING_TAG_BROWSING' => 'Έναρξη Περιήγησης Ετικέτας ...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'Υπήρξε ένα λάθος κατά τον χειρισμό αυτού του αιτήματος για ετικέτες.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'Λάθος: Κανένα στοιχείο εισαγωγής αρχείου',
    'LBL_CREATE_NEW_TAG'  => 'Δημιουργία Νέας Ετικέτας',
    'LBL_SEARCH_TAG'  => 'Αναζήτηση',
    'LBL_TAG_NAME'  =>'Όνομα Ετικέτας:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => 'Επιλογή ετικετών για διαγραφή',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => 'Πληκτρολογήστε το όνομα της ετικέτας για να γίνει η αναζήτηση',
    'LBL_KB_NOTIFICATION' => 'Το έγγραφο δημοσιεύθηκε',
    'LBL_KB_PUBLISHED_REQUEST' => 'έχει αναθέσει ένα έγγραφο σε εσάς για την έγκριση και δημοσίευση.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'Η κατάσταση εγγράφου έχει αλλάξει πίσω στο πρόχειρο',  
    'LBL_CONTRACTS' => 'Συμβάσεις',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'Επιλογή ετικέτας γονέα, από το δέντρο',
	'LBL_CLICK_APPLY_TAG' => 'Πατήστε στο κουμπί Εφαρμογή Ετικέτας',	
	'LBL_HEAD_TAGS' => 'Ετικέτες',
	'LBL_REMOVE' => 'Αφαίρεση' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Επεξεργασία' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'Προεπιλεγμένος σύνδεσμος (link) κειμένου',
    'LBL_SELECT_NODE' => 'Παρακαλώ επιλέξτε έναν κόμβο',
    'LBL_ARTICLE_EXISTS' => 'Το άρθρο υπάρχει ήδη',


);
?>
