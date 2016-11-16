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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
    //END DON'T CONVERT
    'LBL_CONTRACTS'=>'契約',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'契約',
    'ERR_DELETE_RECORD' => '見積を削除するにはレコード番号を指定する必要があります。',
    'LBL_ACCOUNT_ID'=>'取引先ID',
    'LBL_ACCOUNT_NAME' => 'アカウント名',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動',
    'LBL_ADD_COMMENT' => 'コメント追加',
    'LBL_ADD_GROUP' => 'グループ追加:',
    'LBL_ADD_ROW' => '行追加',
    'LBL_ADDRESS_INFORMATION' => '住所情報',
    'LBL_AMOUNT'=>'見積金額:',
    'LBL_AMOUNT_USDOLLAR'=>'金額:',
    'LBL_ANY_ADDRESS' => '住所:',
    'LBL_BILL_TO' => '請求先',
    'LBL_BILLING_ACCOUNT_NAME' => '請求先:',
    'LBL_BILLING_ACCOUNT' => '取引先:',
    'LBL_BILLING_ADDRESS_CITY' => '請求先市区町村',
    'LBL_BILLING_ADDRESS_COUNTRY' => '請求先国',
    'LBL_BILLING_ADDRESS_POSTAL_CODE' => '請求先郵便番号',
    'LBL_BILLING_ADDRESS_STATE' => '請求先都道府県',
    'LBL_BILLING_ADDRESS_STREET' => '請求先番地その他',
    'LBL_BILLING_ADDRESS' => '請求先住所:',
    'LBL_BILLING_CONTACT_ID' => '請求先ID:',
    'LBL_BILLING_CONTACT_NAME' => '請求先担当者:',
    'LBL_BILLING_CONTACT' => '取引先担当者:',
    'LBL_BUNDLE_NAME' => 'グループ名:',
    'LBL_BUNDLE_STAGE' => 'グループステージ:',
    'LBL_BUNDLE_DISCOUNT'=> '値引:',
    'LBL_CALC_GRAND' => '総計表示:',
    'LBL_CHECK_DATA'=>"無効なデータ入力: 入力データを確認し、正しい値を入力してください（0-9 もしくは「.」）",
    'LBL_CITY' => '市区町村:',
    'LBL_CONTACT_NAME' => '取引先担当者名',
    'LBL_CONTACT_QUOTE_FORM_TITLE' => '取引先担当者-見積:',
    'LBL_CONTACT_ROLE' => '取引先担当者役割:',
    'LBL_COUNTRY' => '国:',
    'LBL_CREATED_BY'=>'作成者',
    'LBL_CURRENCY' => '通貨:',
    'LBL_CURRENCY_RATE' => '通貨レート',
    'LBL_DATE_QUOTE_CLOSED' => '完了日:',
    'LBL_DATE_QUOTE_EXPECTED_CLOSED' => '有効期限:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '見積',
    'LBL_DELETE_GROUP' => 'グループ削除:',
    'LBL_DESCRIPTION_INFORMATION' => '詳細情報',
    'LBL_DESCRIPTION' => '詳細:',
    'LBL_DUPLICATE' => '複製可能な見積',
    'LBL_EMAIL_QUOTE_FOR' => '見積:',
    'LBL_EMAIL_DEFAULT_DESCRIPTION' => '依頼されたお見積です（このテキストは変更できます）。',
    'LBL_EMAIL_ATTACHMENT' => 'Eメール添付ファイル:',
    'LBL_HISOTRY_SUBPANEL_TITLE'=>'履歴',
    'LBL_INVITEE' => 'Contacts',
    'LBL_INVOICE'=>'請求書',
    'LBL_LEAD_SOURCE'=>'リードソース:',
    'LBL_LINE_ITEM_INFORMATION' => '項目情報',
    'LBL_LIST_ACCOUNT_NAME' => 'アカウント名',
    'LBL_LIST_AMOUNT' => '見積金額',
    'LBL_LIST_AMOUNT_USDOLLAR' => '合計金額',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_LIST_COST_PRICE' => '原価',
    'LBL_LIST_DATE_QUOTE_CLOSED' => '完了',
    'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => '有効期限',
    'LBL_LIST_DISCOUNT_PRICE' => '単価',
    'LBL_LIST_DEAL_TOT'=> 'ディスカウント合計',
    'LBL_LIST_FORM_TITLE' => '見積一覧',
    'LBL_LIST_GRAND_TOTAL' => '総計',
    'LBL_LIST_LIST_PRICE' => 'リスト',
    'LBL_LIST_MANUFACTURER_PART_NUM' => '製造元番号',
    'LBL_LIST_PRICING_FACTOR' => '価格設定要素',
    'LBL_LIST_PRICING_FORMULA' => '価格計算式',
    'LBL_LIST_PRODUCT_NAME' => '見積済商品',
    'LBL_LIST_QUANTITY' => '数量',
    'LBL_LIST_QUOTE_NAME' => '件名',
    'LBL_LIST_QUOTE_NUM' => '番号',
    'LBL_LIST_QUOTE_STAGE' => 'ステージ',
    'LBL_LIST_TAXCLASS' => '税区分',
    'LBL_MODIFIED_BY'=>'更新者',
    'LBL_MODULE_NAME' => '見積',
    'LBL_MODULE_NAME_SINGULAR' => '見積',
    'LBL_MODULE_TITLE' => '見積: ホーム',
    'LBL_NAME' => '見積名',
    'LBL_NEW_FORM_TITLE' => '見積作成',
    'LBL_NEXT_STEP'=>'次のステップ:',
    'LBL_OPPORTUNITY_NAME' => '商談名:',
    'LBL_ORDER_STAGE'=>'注文ステージ',
    'LBL_ORIGINAL_PO_DATE' =>  '初回発注日:',
    'LBL_PAYMENT_TERMS' =>  '支払条件:',
    'LBL_PDF_BILLING_ADDRESS' => '請求先',
    'LBL_PDF_CURRENCY' => '通貨:',
    'LBL_PDF_GRAND_TOTAL' => '総計',
    'LBL_PDF_INVOICE_NUMBER' => '伝票番号',
    'LBL_PDF_INVOICE_TITLE' => '請求書',
    'LBL_PDF_ITEM_EXT_PRICE' => '割増価格',
    'LBL_PDF_ITEM_DISCOUNT' => '値引',
    'LBL_PDF_ITEM_SELECT_DISCOUNT' => ' ',
    'LBL_PDF_ITEM_LIST_PRICE' => '定価',
    'LBL_PDF_ITEM_PRODUCT' => '見積済商品',
    'LBL_PDF_ITEM_QUANTITY' => '数量',
    'LBL_PDF_ITEM_UNIT_PRICE' => '単価',
    'LBL_PDF_PART_NUMBER' => 'パートナンバー',
    'LBL_PDF_QUOTE_CLOSE' => '有効期限:',
    'LBL_PDF_QUOTE_DATE' => '日付:',
    'LBL_PDF_QUOTE_NUMBER' => '見積番号:',
    'LBL_PDF_QUOTE_TITLE' => '見積',
    'LBL_PDF_SALES_PERSON' => '営業担当者:',
    'LBL_PDF_SHIPPING_ADDRESS' => '出荷先',
    'LBL_PDF_SHIPPING_COMPANY' => '運送会社:',
    'LBL_PDF_SHIPPING' => '配送料:',
    'LBL_PDF_SUBTOTAL' => '小計:',
    'LBL_PDF_DISCOUNT' => '値引:',
    'LBL_PDF_NEW_SUB' => '値引後小計:',
    'LBL_PDF_TAX_RATE' => '税率:',
    'LBL_PDF_TAX' => '税金:',
    'LBL_PDF_TOTAL' => '計:',
    'LBL_POSTAL_CODE' => '郵便番号:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_PROPOSAL'=>'見積',
    'LBL_PURCHASE_ORDER_NUM' => '発注番号:',
    'LBL_QUOTE_NAME' => '見積件名:',
    'LBL_QUOTE_NUM' => '見積番号:',
    'LBL_QUOTE_STAGE' => '見積ステージ:',
    'LBL_QUOTE_TYPE'=>'見積タイプ',
    'LBL_TAXABLE' => '課税',
    'LBL_NON_TAXABLE' => '非課税',
    'LBL_QUOTE' => '見積:',
    'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => '見積のテンプレートが存在しません: $layout',
    'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => '見積のテンプレートがmodules/Quotes/Layouts.phpに登録されていません。',
    'LBL_REMOVE_COMMENT' => 'コメント削除',
    'LBL_REMOVE_ROW' => '行削除',
    'LBL_RENAME_ERROR' => 'エラー: PDFを $destination に移動できません。ディレクトリに書き込み権限を与えてください。',
    'LBL_SALES_STAGE'=>'見積ステージ:',
    'LBL_SEARCH_FORM_TITLE' => '見積検索',
    'LBL_SHIP_TO' => '出荷先',
    'LBL_SHIPPING_ACCOUNT_NAME' => '出荷先:',
    'LBL_SHIPPING_ACCOUNT' => '取引先:',
    'LBL_SHIPPING_ADDRESS_CITY' => '出荷先市区町村',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '出荷先国',
    'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => '出荷先郵便番号',
    'LBL_SHIPPING_ADDRESS_STATE' => '出荷先都道府県',
    'LBL_SHIPPING_ADDRESS_STREET' => '出荷先番地その他',
    'LBL_SHIPPING_ADDRESS' => '出荷先住所:',
    'LBL_SHIPPING_CONTACT_ID' => '出荷先ID:',
    'LBL_SHIPPING_CONTACT_NAME' => '出荷先担当者:',
    'LBL_SHIPPING_CONTACT' => '取引先担当者:',
    'LBL_SHIPPING_PROVIDER' => '運送会社:',
    'LBL_SHIPPING_USDOLLAR'=>'配送料（USドル）',
    'LBL_DEAL_TOT'=>'値引計',
    'LBL_DEAL_TOT_USDOLLAR'=>'値引計（USドル）',
    'LBL_SHIPPING' => '配送料:',
    'LBL_DISCOUNT_TOTAL' => '値引:',
    'LBL_NEW_SUB' => '値引後小計:',
    'LBL_SHOW_LINE_NUMS' => '行番号表示:',
    'LBL_STATE' => '都道府県:',
    'LBL_SUBTOTAL_USDOLLAR'=>'小計（USドル）',
    'LBL_SUBTOTAL' => '小計:',
    'LBL_SYSTEM_ID' => 'システムID',
    'LBL_TAX_USDOLLAR'=>'税金（USドル）',
    'LBL_TAX' => '税金:',
    'LBL_TAXRATE' => '税率:',
    'LBL_TOTAL_USDOLLAR'=>'計（USドル）',
    'LBL_TOTAL' => '計:',
    'LBL_TYPE'=>'タイプ:',
    'LNK_NEW_QUOTE' => '見積作成',
    'LNK_QUOTE_LIST' => '見積一覧',
    'MSG_DUPLICATE' => '重複した見積を作成しようとしています。一覧から保存すべきデータを選択するか、保存をクリックして重複データを作成してください。',
    'NTC_COPY_BILLING_ADDRESS' => '請求先住所を出荷先住所にコピー',
    'NTC_COPY_SHIPPING_ADDRESS' => '出荷先住所を請求先住所にコピー',
    'NTC_COPY_BILLING_ADDRESS2' => '出荷先へコピー',
    'NTC_COPY_SHIPPING_ADDRESS2' => '請求先へコピー',  
    'NTC_REMOVE_COMMENT_CONFIRMATION' => '本当に見積からこのコメントをはずしてよいですか？',  
    'NTC_REMOVE_PRODUCT_CONFIRMATION' => '本当に見積からこの行をはずしてよいですか？',
    'NTC_REMOVE_GROUP_CONFIRMATION' => '本当に見積からこのグループをはずしてよいですか？',
    'NTC_REMOVE_QUOTE_CONFIRMATION' => '本当に見積からこの取引先担当者をはずしてよいですか？',
    'QUOTE_REMOVE_PROJECT_CONFIRM' => '本当にプロジェクトからこの見積をはずしてよいですか？',
	'LNK_QUOTE_REPORTS' => '見積レポート',
	'LBL_ASSIGNED_TO_NAME'=>'アサイン先:',
	'LBL_ASSIGNED_TO_ID'=>'アサイン先:',
	'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
	'LBL_QUOTE_INFORMATION' => 'タスクの概要',
	'LBL_LIST_MY_QUOTES' => '私の見積',
    'LBL_ATTACHMENT' => '添付ファイル' /*for 508 compliance fix*/,
    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => '現在、このフォームの住所フィールドにはすでに値が割り当てられています。選択された取引先の値でこれらのフィールドを上書きする場合は、「OK」を選択してください。現在の値を保存したい場合には、「キャンセル」をクリックしてください。',
	'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
    'LBL_REVENUELINEITEMS' => '高収益商品',

    'EXCEPTION_QUOTE_ALREADY_CONVERTED' => '既に商談に変更された見積り',
);
