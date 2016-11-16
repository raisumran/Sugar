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
    'LBL_MODULE_NAME' => 'Ευκαιρίες',
    'LBL_MODULE_NAME_SINGULAR' => 'Ευκαιρία',
    'LBL_MODULE_TITLE' => 'Ευκαιρίες: Αρχή',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Ευκαιριών',
    'LBL_VIEW_FORM_TITLE' => 'Προβολή Ευκαιριών',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Ευκαιριών',
    'LBL_OPPORTUNITY_NAME' => 'Όνομα Ευκαιρίας:',
    'LBL_OPPORTUNITY' => 'Ευκαιρία:',
    'LBL_NAME' => 'Όνομα Ευκαιρίας',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Νομίσματα',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Όνομα',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
    'LBL_LIST_DATE_CLOSED' => 'Αναμενόμενη Ημερομηνία Κλεισίματος',
    'LBL_LIST_AMOUNT' => 'Πιθανή',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Συνολικό Ποσό',
    'LBL_ACCOUNT_ID' => 'Ταυτότητα Λογαριασμού',
    'LBL_CURRENCY_RATE' => 'Ισοτιμία Νομίσματος',
    'LBL_CURRENCY_ID' => 'Ταυτότητα Νομίσματος',
    'LBL_CURRENCY_NAME' => 'Όνομα Νομίσματος',
    'LBL_CURRENCY_SYMBOL' => 'Σύμβολο Νομίσματος',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Ευκαιρία - Ενημέρωση Νομίσματος',
    'UPDATE_DOLLARAMOUNTS' => 'Ενημέρωση των ποσών σε U.S. Δολλάρια',
    'UPDATE_VERIFY' => 'Επιβεβαίωση Ποσών',
    'UPDATE_VERIFY_TXT' => 'Επιβεβαιώνει ότι τα ποσά είναι σε αριθμητικές τιμές (0-9) και με σωστά τα δεκαδικά ψηφία',
    'UPDATE_FIX' => 'Καθορισμός Ποσών',
    'UPDATE_FIX_TXT' => 'Επιχειρεί να διορθώσει τα καθορισμένα ποσά, δημιουργώντας τις δεκαδικές τιμές από τα υπάρχοντα ποσά. Κάθε τροποποιημένο ποσό υποστηρίζει amount_backup στο πεδίο της βάσης δεδομένων.  Εάν εκτελέσετε αυτό και παρατηρήσετε σφάλματα, μην επιστρέψετε σε αυτό χωρίς επαναφορά από τα αντίγραφα ασφαλείας, καθώς μπορεί να αντικαταστήσει το αντίγραφο ασφαλείας με νέα μη έγκυρα δεδομένα.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Οι ενημέρωση των ποσών των ευκαιριών σε U.S. δολλάρια βασίζεται στις τρέχουσες επιλογές νομίσματος. Αυτή η τιμή χρησιμοποιείται για τον υπολογισμό των Γραφμημάτων στην Προβολή Λίστας Ποσών Νομισμάτων.',
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
    'UPDATE_MERGE_TXT' => 'Συγχώνευση πολλαπλών νομισμάτων σε ένα νόμισμα. Εάν υπάρχουν πολλαπλές εγγραφές νομισμάτων, να επιλεγεί η συγχώνευσή τους. Αυτό θα συγχωνεύσει τα νομίσματα που υπάρχουν στις άλλες ενότητες της εφαρμογής.',
    'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
    'LBL_CURRENCY' => 'Νόμισμα:',
    'LBL_DATE_CLOSED' => 'Αναμενόμενη Ημερομηνία Κλεισίματος:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Αναμενόμενη Ημερομηνία Κλεισίματος (Timestamp)',
    'LBL_TYPE' => 'Τύπος:',
    'LBL_CAMPAIGN' => 'Εκστρατεία:',
    'LBL_NEXT_STEP' => 'Επόμενο Βήμα:',
    'LBL_LEAD_SOURCE' => 'Πηγή Προέλευσης',
    'LBL_SALES_STAGE' => 'Στάδιο Πώλησης',
    'LBL_SALES_STATUS' => 'Κατάσταση',
    'LBL_PROBABILITY' => 'Πιθανότητα (%)',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_DUPLICATE' => 'Πιθανά Αντίγραφο Ευκαρίας',
    'MSG_DUPLICATE' => 'Με τη δημιουργία αυτής της ευκαιρίας πιθανά δημιουργείται αντίγραφη εγγραφή. Θα πρέπει να επιλεχθεί μία υπάρχουσα ευκαιρία από τον παρακάτω κατάλογο ή να επιλεγεί "Δημιουργία Νέας Ευκαιρίας".<br />Πατήστε το κουμπί "Αποθήκευση" για να συνεχίσετε αυτή τη νέα ευκαιρία, ή πατήστε το κουμπί "Ακύρωση" για να επιστρέψετε στην ενότητα χωρίς να δημιουργήσετε ευκαιρία.',
    'LBL_NEW_FORM_TITLE' => 'Δημιουργία Ευκαιρίας',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_CREATE' => 'Δημιουργία Συμφωνίας',
    'LNK_OPPORTUNITY_LIST' => 'Προβολή Ευκαιριών',
    'ERR_DELETE_RECORD' => 'Πρέπει να προσδιορίσετε αριθμό καρτέλας για να διαγράψετε αυτήν την ευκαιρία.',
    'LBL_TOP_OPPORTUNITIES' => 'Καλύτερες Ευκαιρίες Μου',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την Επαφή από την Ευκαιρία;',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτή την Ευκαιρία από το έργο;',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ευκαιρίες',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ιστορικό',
    'LBL_RAW_AMOUNT' => 'Ακαθάριστο Ποσό',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Έγγραφα',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Έργα',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
    'LBL_LIST_SALES_STAGE' => 'Στάδιο Πώλησης',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Κλειστές Ευκαιρίες Μου',
    'LBL_TOTAL_OPPORTUNITIES' => 'Συνολικές Ευκαιρίες',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Κλειστές Κερδισμένες Ευκαιρίες',
    'LBL_ASSIGNED_TO_ID' => 'Ανατεθειμένος Χειριστής',
    'LBL_CREATED_ID' => 'Δημιουργήθηκε από Ταυτότητα',
    'LBL_MODIFIED_ID' => 'Τροποποιήθηκε από Ταυτότητα',
    'LBL_MODIFIED_NAME' => 'Τροποποιήθηκε Από Όνομα Χειριστή',
    'LBL_CREATED_USER' => 'Χειριστής Δημιουργίας',
    'LBL_MODIFIED_USER' => 'Χειριστής Τροποποίησης',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Ευκαιρία Εκστρατείας',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Έργα',
    'LABEL_PANEL_ASSIGNMENT' => 'Ανάθεση',
    'LNK_IMPORT_OPPORTUNITIES' => 'Εισαγωγή Ευκαιριών',
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Ταυτότητα Εκστρατείας',
    'LBL_OPPORTUNITY_TYPE' => 'Τύπος Ευκαιρίας',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Όνομα Ανατεθειμένου Χειριστή',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ταυτότητα Ανατεθειμένου Χειριστή',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Τροποποιήθηκε από Ταυτότητα',
    'LBL_EXPORT_CREATED_BY' => 'Δημιουργήθηκε Από Ταυτότητα',
    'LBL_EXPORT_NAME' => 'Όνομα',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Emails Σχετικών Επαφών',
    'LBL_FILENAME' => 'Επισύναψη',
    'LBL_PRIMARY_QUOTE_ID' => 'Βασική Προσφορά',
    'LBL_CONTRACTS' => 'Συμβάσεις',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Συμβάσεις',
    'LBL_PRODUCTS' => 'Γραμμή Εισηγμένων Ειδών',
    'LBL_RLI' => 'Γραμμή Εσόδων',
    'LNK_OPPORTUNITY_REPORTS' => 'Προβολή Αναφορών Ευκαιριών',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Προσφορές',
    'LBL_TEAM_ID' => 'Ταυτότητα Ομάδας',
    'LBL_TIMEPERIODS' => 'Χρονικές Περίοδοι',
    'LBL_TIMEPERIOD_ID' => 'Ταυτότητα Χρονικής Περιόδου',
    'LBL_COMMITTED' => 'Δεσμευμένη',
    'LBL_FORECAST' => 'Συμπεριλαμβάνεται στην Πρόβλεψη',
    'LBL_COMMIT_STAGE' => 'Στάδιο Δέσμευσης',
    'LBL_WORKSHEET' => 'Φύλλο Εργασίας',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Προσφορές',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Ιεραρχία Ευκαιριών',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Οι τιμές υπολογίζονται από Γραμμή Εσόδων σε Ευκαιρίες',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Σύνολο Αγωγού είναι',

    'LBL_OPPORTUNITY_ROLE'=>'Ευκαιρία Ρόλου',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Σημειώσεις:',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Κάνοντας κλικ για Επιβεβαίωση, θα διαγράψετε Όλα τα δεδομένα των Προβλέψεων κα αλλάζει η Προβολή Ευκαιριών. Εάν δεν θέλετε να προχωρήσετε, κάντε κλικ στο κουμπί "Άκυρο", για να επιστρέψετε στις προηγούμενες ρυθμίσεις.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Αν όλα τα στοιχεία Γραμμής Εσόδων είναι κλειστά και κέρδισε μία τουλάχιστον,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'τότε το Στάδιο της Ευκαιρίας Πώλησης, έχει οριστεί "Έκλεισε Κερδισμένο".',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Αν όλα τα στοιχεία Γραμμής Εσόδων είναι σε Στάδιο Πώλησης "Έκλεισε Χαμένο",',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'τότε το Στάδιο της Ευκαιρίας Πώλησης, έχει οριστεί "Έκλεισε Χαμένο".',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Αν κάποια Γραμμή Εσόδων είναι ακόμα ανοικτή,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'η ευκαιρία θα επισημανθεί με το λιγότερο-προχωρημένο Στάδιο Πωλήσεων.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Η {{plural_module_name}} ενότητα, σας επιτρέπει να παρακολουθείτε μεμονωμένες πωλήσεις και τα στοιχεία γραμμής που ανήκουν σε αυτές τις πωλήσεις από την αρχή μέχρι το τέλος. Κάθε εγγραφή {{module_name}} αντιπροσωπεύει μια κεφαλίδα για ομάδα {{revenuelineitems_module}}, καθώς και σχετικά με άλλα σημαντικά τεκμήρια όπως {{quotes_module}}, {{contacts_module}}, κ.λ.π. Κάθε εγγραφή {{revenuelineitems_singular_module}} είναι η προοπτική πώλησης ενός συγκεκριμένου προϊόντος και περιλαμβάνει τα σχετικά στοιχεία προς πώληση. Κάθε εγγραφή {{revenuelineitems_singular_module}} θα προχωρήσει συνήθως από διάφορα Στάδια των Πωλήσεων, μέχρι να επισημανθεί είτε "Έκλεισε Κερδισμένη" είτε "Έκλεισε Χαμένη". Η εγγραφή {{module_name}}, αντανακλά το ποσό και την αναμενόμενη ημερομηνία κλεισίματός της {{revenuelineitems_module}}. {{plural_module_name}} και {{revenuelineitems_module}} μπορεί να ενισχυθεί ακόμη περισσότερο χρησιμοποιώντας την ενότητα του Sugar {{forecasts_singular_module}}ing, για να κατανοήσει και να προβλέψει τις τάσεις των πωλήσεων, καθώς και να επικεντρώσει το έργο για την επίτευξη των ποσοστώσεων πωλήσεων.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Η {{plural_module_name}} ενότητα, σας επιτρέπει να παρακολουθείτε μεμονωμένες πωλήσεις και τα στοιχεία γραμμής που ανήκουν σε αυτές τις πωλήσεις από την αρχή μέχρι το τέλος. Κάθε εγγραφή{{module_name}}, αντιπροσωπεύει μια κεφαλίδα για ομάδα {{revenuelineitems_module}}  καθώς και σχετικά με άλλα σημαντικά αρχεία, όπως το  {{quotes_module}}, {{contacts_module}}, κ.λ.π.

- Επεξεργαστείτε αυτό το πεδίο εγγραφής κάνοντας κλικ στο μεμονωμένο πεδίο ή το κουμπί "Επεξεργασία".
- Προβάλετε ή τροποποιήστε συνδέσεις με άλλες εγγραφές στους υποπίνακες, συμπεριλαμβανομένου της ενότητας {{revenuelineitems_module}}, από την εναλλαγή του κάτω αριστερού παραθύρου σε "Προβολή Δεδομένων".
- Αλληλεπιδράστε με τα σχόλια των χρηστών και την προβολή του ιστορικού των αλλαγών των εγγραφών {{activitystream_singular_module}} από την εναλλαγή του κάτω αριστερού παραθύρου "Ροή Δραστηριοτήτων".
Ακολουθήστε ή κάντε Αγαπημένες εγγραφές χρησιμοποιώντας τα εικονίδια στα δεξιά του ονόματος της εγγραφής.
- Πρόσθετες ενέργειες είναι διαθέσιμες στο αναπτυσσόμενο μενού "Ενέργειες", δεξιά από το κουμπί "Επεξεργασία".',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Η {{plural_module_name}} ενότητα, σας επιτρέπει να παρακολουθείτε μεμονωμένες πωλήσεις και τα στοιχεία γραμμής που ανήκουν σε αυτές τις πωλήσεις από την αρχή μέχρι το τέλος. Κάθε εγγραφή{{module_name}}, αντιπροσωπεύει μια κεφαλίδα για ομάδα {{revenuelineitems_module}}  καθώς και σχετικά με άλλα σημαντικά αρχεία, όπως το  {{quotes_module}}, {{contacts_module}}, κ.λ.π.

Για να δημιουργήσετε μία {{module_name}}:
1. Παρέχετε τιμές για τα πεδία, όπως επιθυμείτε.
 - Τα Πεδία με σήμανση "Υποχρεωτικό", πρέπει να συμπληρωθούν πριν από την αποθήκευση..
 - Κάντε κλικ στην επιλογή "Εμφάνιση Περισσότερων" να εκθέσει πρόσθετα πεδία, εάν είναι απαραίτητο.
2. Κάντε κλικ στην επιλογή "Αποθήκευση" να οριστικοποιήσει τη νέα εγγραφή και να επιστρέψετε στην προηγούμενη σελίδα.
 - Επιλέξτε "Αποθήκευση και προβολή" να προβάλει τη νέα εγγραφή {{module_name}}.
 - Επιλέξτε "Αποθήκευση και δημιουργία νέας" για να δημιουργήσει αμέσως μία νέα εγγραφή {{module_name}}.
3. Μετά την αποθήκευση, χρησιμοποιήστε τον υποπίνακα {{revenuelineitems_module}} για να προσθέσετε τα στοιχεία γραμμής στο {{module_name}}.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Συγχρονισμός με Marketo®',
    'LBL_MKTO_ID' => 'Ταυτότητα Δυνητικού Marketo',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Γραμμή 10 Κορυφαίων Εσόδων από Πωλήσεις',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Εμφανίζει τα 10 καλύτερα Έσοδα στη Γραμμή Ειδών σε γράφημα φυσαλίδας.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Ευκαιρίες Μου',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Ευκαιρίες Ομάδας Μου",
);
