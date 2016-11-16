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
  'LBL_MODULE_NAME' => 'Vendita',
  'LBL_MODULE_TITLE' => 'Vendita: Home',
  'LBL_SEARCH_FORM_TITLE' => 'Cerca Vendita',
  'LBL_VIEW_FORM_TITLE' => 'Visualizza Vendita',
  'LBL_LIST_FORM_TITLE' => 'Elenco Vendite',
  'LBL_SALE_NAME' => 'Nome Vendita:',
  'LBL_SALE' => 'Vendita:',
  'LBL_NAME' => 'Nome Vendita',
  'LBL_LIST_SALE_NAME' => 'Nome',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
  'LBL_LIST_AMOUNT' => 'Importo',
  'LBL_LIST_DATE_CLOSED' => 'Chiudi',
  'LBL_LIST_SALE_STAGE' => 'Fase di Vendita',
  'LBL_ACCOUNT_ID'=>'ID Azienda',
  'LBL_TEAM_ID' =>'ID Gruppo',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Vendita - Aggiornamento Valuta',
  'UPDATE_DOLLARAMOUNTS' => 'Aggiorna Importi Dollari U.S.',
  'UPDATE_VERIFY' => 'Controlla Importi',
  'UPDATE_VERIFY_TXT' => 'Verifica che i valori nelle vendite siano numeri decimali validi composti solamente da caratteri numerici (0-9) e decimali(.)',
  'UPDATE_FIX' => 'Importo Fisso',
  'UPDATE_FIX_TXT' => 'Prova a correggere gli importi non validi a partire dagli importi correnti. Verrà creata una copia di backup in un campo amount_backup. Se esegui la correzione e noti degli errori ripristina i valori precedenti prima di effettuare altre correzioni, altrimenti perderai  i valori memorizzati nella copia di backup.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Aggiorna i valori delle vendite espressi in Dollari USA sulla base dei tassi di valuta correnti. Questo valore viene usato per costruire i grafici e calcolare gli importi nelle viste valute.',
  'UPDATE_CREATE_CURRENCY' => 'Creazione Nuova Valuta:',
  'UPDATE_VERIFY_FAIL' => 'Verifica Fallita del Record:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Importo Attuale:',
  'UPDATE_VERIFY_FIX' => 'L´avvio della correzione comporterebbe',
  'UPDATE_INCLUDE_CLOSE' => 'Includi Record Chiusi',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nuovo Importo:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nuova Valuta:',
  'UPDATE_DONE' => 'Fatto',
  'UPDATE_BUG_COUNT' => 'Bugs trovati e in attesa di essere risolti:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugs Trovati:',
  'UPDATE_COUNT' => 'Record Aggiornati:',
  'UPDATE_RESTORE_COUNT' => 'Importi del record ripristinati:',
  'UPDATE_RESTORE' => 'Ripristina Importi',
  'UPDATE_RESTORE_TXT' => 'Ripristina gli importi dalle copie di backup create durante la correzione.',
  'UPDATE_FAIL' => 'Impossibile aggiornare -',
  'UPDATE_NULL_VALUE' => 'L´importo è NULLO impostandolo a 0 -',
  'UPDATE_MERGE' => 'Unisci Valute',
  'UPDATE_MERGE_TXT' => 'Unisci più valute in un´unica valuta. Se noti che la stessa valuta si ripete più volte puoi scegliere di unirle. Quest´operazione unirà le valute anche per tutti gli altri moduli.',
  'LBL_ACCOUNT_NAME' => 'Nome Azienda:',
  'LBL_AMOUNT' => 'Importo:',
  'LBL_AMOUNT_USDOLLAR' => 'Importo in USD:',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_DATE_CLOSED' => 'Data Chiusura Prevista:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_CAMPAIGN' => 'Campagna:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Progetti',  
  'LBL_NEXT_STEP' => 'Passo Successivo:',
  'LBL_LEAD_SOURCE' => 'Fonte del lead:',
  'LBL_SALES_STAGE' => 'Fase di Vendita:',
  'LBL_PROBABILITY' => 'Probabilità (%):',
  'LBL_DESCRIPTION' => 'Descrizione:',
  'LBL_DUPLICATE' => 'Possibile Vendita Duplicata',
  'MSG_DUPLICATE' => 'La vendita che stai creando potrebbe generare un duplicato di una vendita già esistente. I record delle vendite che contengono nomi simili sono elencate qui sotto. <br />Cliccare Salva per continuare con la creazione di questa nuova Vendita oppure clicca Annulla per tornare al modulo senza creare la vendita.',
  'LBL_NEW_FORM_TITLE' => 'Nuova Vendita',
  'LNK_NEW_SALE' => 'Nuova Vendita',
  'LNK_SALE_LIST' => 'Vendita',
  'ERR_DELETE_RECORD' => 'Per eliminare la vendita deve essere specificato il numero del record.',
  'LBL_TOP_SALES' => 'Le mie migliori vendite aperte',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Sei sicuro di voler eliminare questo contatto dalla vendita?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Sei sicuro di voler eliminare questa vendita dal progetto?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Vendita',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Attività',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Cronologia',
    'LBL_RAW_AMOUNT'=>'Importo Riga',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_ASSIGNED_TO_NAME' => 'Utente',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Assegnato a',
  'LBL_MY_CLOSED_SALES' => 'Le mie vendite chiuse',
  'LBL_TOTAL_SALES' => 'Vendite Totali',
  'LBL_CLOSED_WON_SALES' => 'Vendite Chiuse Vinte',
  'LBL_ASSIGNED_TO_ID' =>'Assegnato a ID',
  'LBL_CREATED_ID'=>'Creato da ID',
  'LBL_MODIFIED_ID'=>'Modificato da ID',
  'LBL_MODIFIED_NAME'=>'Modificato da Nome Utente',
  'LBL_SALE_INFORMATION'=>'Informazioni Vendita',
  'LBL_CURRENCY_ID'=>'ID Valuta',
  'LBL_CURRENCY_NAME'=>'Nome Valuta',
  'LBL_CURRENCY_SYMBOL'=>'Simbolo Valuta:',
  'LBL_EDIT_BUTTON' => 'Modifica',
   'LBL_REMOVE' => 'Rimuovi',


);

