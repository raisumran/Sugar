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
  'LBL_MODULE_NAME' => 'πώληση',
  'LBL_MODULE_TITLE' => 'Πώληση: Αρχή',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Πώλησης',
  'LBL_VIEW_FORM_TITLE' => 'Προβολή Πωλήσεων',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Πωλήσεων',
  'LBL_SALE_NAME' => 'Όνομα Πώλησης:',
  'LBL_SALE' => 'Πώληση:',
  'LBL_NAME' => 'Όνομα Πώλησης',
  'LBL_LIST_SALE_NAME' => 'Όνομα',
  'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
  'LBL_LIST_AMOUNT' => 'Ποσό',
  'LBL_LIST_DATE_CLOSED' => 'Κλείσιμο',
  'LBL_LIST_SALE_STAGE' => 'Στάδιο Πώλησης',
  'LBL_ACCOUNT_ID'=>'Ταυτότητα Λογαριασμού',
  'LBL_TEAM_ID' =>'Ταυτότητα Ομάδας',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Ευκαιρία - Ενημέρωση Νομίσματος',
  'UPDATE_DOLLARAMOUNTS' => 'Ενημέρωση των ποσών σε U.S. Δολλάρια',
  'UPDATE_VERIFY' => 'Επιβεβαίωση Ποσών',
  'UPDATE_VERIFY_TXT' => 'Επιβεβαιώνει ότι τα ποσά στις πωλήσεις είναι έγκυροι δεκαδικοί αριθμοί με μόνο τους αριθμητικούς χαρακτήρες (0-9) και τα δεκαδικά (.)',
  'UPDATE_FIX' => 'Καθορισμός Ποσών',
  'UPDATE_FIX_TXT' => 'Επιχειρεί να διορθώσει τα καθορισμένα ποσά, δημιουργώντας τις δεκαδικές τιμές από τα υπάρχοντα ποσά. Κάθε τροποποιημένο ποσό υποστηρίζει amount_backup στο πεδίο της βάσης δεδομένων.  Εάν εκτελέσετε αυτό και παρατηρήσετε σφάλματα, μην επιστρέψετε σε αυτό χωρίς επαναφορά από τα αντίγραφα ασφαλείας, καθώς μπορεί να αντικαταστήσει το αντίγραφο ασφαλείας με νέα μη έγκυρα δεδομένα.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Η ενημέρωση των ποσών των ευκαιριών σε δολλάρια U.S, βασίζεται στις τρέχουσες επιλογές νομίσματος. Αυτή η τιμή χρησιμοποιείται για τον υπολογισμό των Γραφημάτων και την Προβολή Λίστας Ποσά Νομισμάτων.',
  'UPDATE_CREATE_CURRENCY' => 'Δημιουργία Νέου Νομίσματος:',
  'UPDATE_VERIFY_FAIL' => 'Απέτυχε η Επιβεβαίωση της Εγγραφής:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Τρέχον Ποσό:',
  'UPDATE_VERIFY_FIX' => 'Εκτελώντας τον καθορισμό θα δώσει',
  'UPDATE_INCLUDE_CLOSE' => 'Συμπεριλαμβάνει τις Κλειστές Εγγραφές',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Νέο Ποσό:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Νέο Νόμισμα:',
  'UPDATE_DONE' => 'Έτοιμο',
  'UPDATE_BUG_COUNT' => 'Βρέθηκαν Σφάλματα και έγινε Προσπάθεια να Διορθωθούν:',
  'UPDATE_BUGFOUND_COUNT' => 'Βρέθηκαν Σφάλματα:',
  'UPDATE_COUNT' => 'Οι Εγγραφές Ενημερώθηκαν:',
  'UPDATE_RESTORE_COUNT' => 'Οι Τιμές στις Εγγραφές που Αποκαταστάθηκαν είναι:',
  'UPDATE_RESTORE' => 'Επαναφορά Ποσών',
  'UPDATE_RESTORE_TXT' => 'Επαναφέρει τις αριθμητικές τιμές από τα αντίγραφα ασφαλείας που δημιουργήθηκαν κατά την διαδικασία επιδιόρθωσης.',
  'UPDATE_FAIL' => 'Δεν έγινε ενημέρωση -',
  'UPDATE_NULL_VALUE' => 'Το Ποσό είναι Μηδενικό, δίνοντας την τιμή 0 -',
  'UPDATE_MERGE' => 'Συγχώνευση Νομισμάτων',
  'UPDATE_MERGE_TXT' => 'Συγχώνευση πολλαπλών νομισμάτων σε ένα νόμισμα. Εάν υπάρχουν πολλαπλές εγγραφές νομισμάτων, να επιλεγεί η συγχώνευσή τους. Αυτό θα συγχωνεύσει και τα νομίσματα που υπάρχουν στις άλλες ενότητες της εφαρμογής.',
  'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
  'LBL_AMOUNT' => 'Ποσό:',
  'LBL_AMOUNT_USDOLLAR' => 'Ποσό USD:',
  'LBL_CURRENCY' => 'Νόμισμα:',
  'LBL_DATE_CLOSED' => 'Αναμενόμενη Ημερομηνία Κλεισίματος:',
  'LBL_TYPE' => 'Τύπος:',
  'LBL_CAMPAIGN' => 'Εκστρατεία:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Έργα',  
  'LBL_NEXT_STEP' => 'Επόμενο Βήμα:',
  'LBL_LEAD_SOURCE' => 'Πηγή Προέλευσης:',
  'LBL_SALES_STAGE' => 'Στάδιο Πώλησης:',
  'LBL_PROBABILITY' => 'Πιθανότητα (%):',
  'LBL_DESCRIPTION' => 'Περιγραφή:',
  'LBL_DUPLICATE' => 'Πιθανά Αντίγραφο Καταχώρησης Πώλησης',
  'MSG_DUPLICATE' => 'Η εγγραφή Πώλησης που πρόκειται να δημιουργηθεί θα μπορούσε να είναι αντίγραφο μίας πώλησης που ήδη υπάρχει. Οι εγγραφές Πωλήσεων περιέχουν παρόμοια ονόματα παυ αναφέρονται παρακάτω.<br>Πατήστε το κουμπί "Αποθήκευση" για να συνεχίσετε τη δημιουργία αυτής της νέας Πώλησης, ή πατήστε το κουμπί "Άκυρο" για να επιστρέψετε στην ενότητα χωρίς να δημιουργήσετε την πώληση.',
  'LBL_NEW_FORM_TITLE' => 'Δημιουργία Πώλησης',
  'LNK_NEW_SALE' => 'Δημιουργία Πώλησης',
  'LNK_SALE_LIST' => 'πώληση',
  'ERR_DELETE_RECORD' => 'Πρέπει να προσδιορίσετε αριθμό εγγραφής για να διαγράψετε την πώληση.',
  'LBL_TOP_SALES' => 'Κορυφαίες Ανοικτές Πωλήσεις Μου',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την επαφή από την πώληση;',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την πώληση από το έργο;',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'πώληση',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Δραστηριότητες',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Ιστορικό',
    'LBL_RAW_AMOUNT'=>'Ακαθάριστο Ποσό',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Χρήστης:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
  'LBL_MY_CLOSED_SALES' => 'Κλειστές Πωλήσεις Μου',
  'LBL_TOTAL_SALES' => 'Συνολικές Πωλήσεις',
  'LBL_CLOSED_WON_SALES' => 'Κλειστές Κερδισμένες Πωλήσεις',
  'LBL_ASSIGNED_TO_ID' =>'Ανατέθηκε σε Ταυτότητα',
  'LBL_CREATED_ID'=>'Δημιουργήθηκε από Ταυτότητα',
  'LBL_MODIFIED_ID'=>'Τροποποιήθηκε από Ταυτότητα',
  'LBL_MODIFIED_NAME'=>'Τροποποιήθηκε Από Όνομα Χειριστή',
  'LBL_SALE_INFORMATION'=>'Πληροφορία Πώλησης',
  'LBL_CURRENCY_ID'=>'Ταυτότητα Νομίσματος',
  'LBL_CURRENCY_NAME'=>'Όνομα Νομίσματος',
  'LBL_CURRENCY_SYMBOL'=>'Σύμβολο Νομίσματος',
  'LBL_EDIT_BUTTON' => 'Επεξεργασία',
   'LBL_REMOVE' => 'Αφαίρεση',


);

