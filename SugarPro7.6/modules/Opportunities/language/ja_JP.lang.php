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
    'LBL_MODULE_NAME' => '商談',
    'LBL_MODULE_NAME_SINGULAR' => '商談',
    'LBL_MODULE_TITLE' => '商談: ホーム',
    'LBL_SEARCH_FORM_TITLE' => '商談検索',
    'LBL_VIEW_FORM_TITLE' => '商談一覧',
    'LBL_LIST_FORM_TITLE' => '商談一覧',
    'LBL_OPPORTUNITY_NAME' => '商談名:',
    'LBL_OPPORTUNITY' => '商談名:',
    'LBL_NAME' => '商談名',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => '通貨',
    'LBL_LIST_OPPORTUNITY_NAME' => '名前',
    'LBL_LIST_ACCOUNT_NAME' => 'アカウント名',
    'LBL_LIST_DATE_CLOSED' => 'クローズ予定日',
    'LBL_LIST_AMOUNT' => '達成可能',
    'LBL_LIST_AMOUNT_USDOLLAR' => '合計金額',
    'LBL_ACCOUNT_ID' => '取引先ID',
    'LBL_CURRENCY_RATE' => '通貨レート',
    'LBL_CURRENCY_ID' => '通貨ID',
    'LBL_CURRENCY_NAME' => '通貨名',
    'LBL_CURRENCY_SYMBOL' => '通貨シンボル',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => '商談の通貨更新',
    'UPDATE_DOLLARAMOUNTS' => 'USドルの金額を更新',
    'UPDATE_VERIFY' => '金額を検証',
    'UPDATE_VERIFY_TXT' => '商談の金額が数字（0-9）と小数点（.）で正しく入力されているかどうかを検証します。',
    'UPDATE_FIX' => '金額を修正',
    'UPDATE_FIX_TXT' => '現在の金額から正しい区切り文字を使って不正な金額を修正します。修正された金額のバックアップはデータベースのamount_backupフィールドに保存されます。これを実行して問題が発生した場合、バックアップから以前の値を戻してください。さもないと、再度実行すると不正な値でバックアップ値が上書きされます',
    'UPDATE_DOLLARAMOUNTS_TXT' => '商談のUSドルの更新は設定されている通貨レートに基づきます。グラフと一覧画面での金額の値に反映されます。',
    'UPDATE_CREATE_CURRENCY' => '通貨作成中:',
    'UPDATE_VERIFY_FAIL' => '検証に失敗しました:',
    'UPDATE_VERIFY_CURAMOUNT' => '現在の金額:',
    'UPDATE_VERIFY_FIX' => '修正は',
    'UPDATE_INCLUDE_CLOSE' => '完了したレコードを含む',
    'UPDATE_VERIFY_NEWAMOUNT' => '金額作成:',
    'UPDATE_VERIFY_NEWCURRENCY' => '通貨作成:',
    'UPDATE_DONE' => '完了',
    'UPDATE_BUG_COUNT' => '実行時に不具合が見つかりました:',
    'UPDATE_BUGFOUND_COUNT' => '不具合が見つかりました:',
    'UPDATE_COUNT' => 'レコードが更新されました:',
    'UPDATE_RESTORE_COUNT' => '金額がリストアされました:',
    'UPDATE_RESTORE' => '金額をリストア',
    'UPDATE_RESTORE_TXT' => '修復中にバックアップした内容をリストア',
    'UPDATE_FAIL' => '更新できません -',
    'UPDATE_NULL_VALUE' => '金額は空です。0に設定されました。  -',
    'UPDATE_MERGE' => '通貨を統合',
    'UPDATE_MERGE_TXT' => '複数の通貨を１つにまとめます。同じ通貨のレコードが複数ある場合、それらを１つにします。これは他のモジュールの通貨も統合します。',
    'LBL_ACCOUNT_NAME' => 'アカウント名',
    'LBL_CURRENCY' => '通貨:',
    'LBL_DATE_CLOSED' => '受注予定日:',
    'LBL_DATE_CLOSED_TIMESTAMP' => '予想クローズ日のタイムスタンプ',
    'LBL_TYPE' => 'タイプ:',
    'LBL_CAMPAIGN' => 'キャンペーン:',
    'LBL_NEXT_STEP' => '次のステップ:',
    'LBL_LEAD_SOURCE' => 'リードソース',
    'LBL_SALES_STAGE' => '商談ステージ',
    'LBL_SALES_STATUS' => 'ステータス',
    'LBL_PROBABILITY' => '確度 (%):',
    'LBL_DESCRIPTION' => '詳細',
    'LBL_DUPLICATE' => '重複の可能性がある商談',
    'MSG_DUPLICATE' => '作成しようとしている商談は既存の商談と重複する可能性があります。類似の商談は以下に表示されています。保存をクリックして新たに商談を作成するか、キャンセルをクリックして商談を作成せずにモジュールに戻ります。',
    'LBL_NEW_FORM_TITLE' => '商談作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LNK_CREATE' => '取引作成',
    'LNK_OPPORTUNITY_LIST' => '商談一覧',
    'ERR_DELETE_RECORD' => '商談を削除するにはレコード番号を指定する必要があります。',
    'LBL_TOP_OPPORTUNITIES' => '交渉中の私の商談',
    'NTC_REMOVE_OPP_CONFIRMATION' => '本当にこの取引先担当者を商談からはずしてよいですか？',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '本当にこの商談をプロジェクトからはずしてよいですか？',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '商談',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '履歴',
    'LBL_RAW_AMOUNT' => '金額',
    'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'ドキュメント',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'プロジェクト',
    'LBL_ASSIGNED_TO_NAME' => 'アサイン先:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
    'LBL_LIST_SALES_STAGE' => '商談ステージ',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '私のクローズ済み商談',
    'LBL_TOTAL_OPPORTUNITIES' => '商談総額',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '受注済み商談',
    'LBL_ASSIGNED_TO_ID' => 'アサイン先:',
    'LBL_CREATED_ID' => '作成者ID',
    'LBL_MODIFIED_ID' => '更新者ID',
    'LBL_MODIFIED_NAME' => '更新者',
    'LBL_CREATED_USER' => '作成者',
    'LBL_MODIFIED_USER' => '更新者',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'キャンペーン',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
    'LABEL_PANEL_ASSIGNMENT' => '担当',
    'LNK_IMPORT_OPPORTUNITIES' => '商談のインポート',
    'LBL_EDITLAYOUT' => 'レイアウト編集' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'キャンペーンID',
    'LBL_OPPORTUNITY_TYPE' => '商談タイプ',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'アサイン先',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサイン先ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '更新者ID',
    'LBL_EXPORT_CREATED_BY' => '作成者ID',
    'LBL_EXPORT_NAME' => '名前',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '関連取引先担当者のEメール',
    'LBL_FILENAME' => '添付ファイル',
    'LBL_PRIMARY_QUOTE_ID' => '主な見積',
    'LBL_CONTRACTS' => '契約',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => '契約',
    'LBL_PRODUCTS' => '見積済商品',
    'LBL_RLI' => '高収益商品',
    'LNK_OPPORTUNITY_REPORTS' => '商談レポート',
    'LBL_QUOTES_SUBPANEL_TITLE' => '見積',
    'LBL_TEAM_ID' => 'チーム:',
    'LBL_TIMEPERIODS' => '期間',
    'LBL_TIMEPERIOD_ID' => '期間ID',
    'LBL_COMMITTED' => 'コミット済',
    'LBL_FORECAST' => '予算に含む',
    'LBL_COMMIT_STAGE' => 'コミットステージ',
    'LBL_WORKSHEET' => 'ワークシート',


    'LBL_QUOTE_SUBPANEL_TITLE' => '見積',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => '商談階層',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => '既存の高収益商品の最初のもしくは最新のクローズ日に近い日付であるの商談レコードの、予想クローズ日のフィールドを設定します',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'パイプラインの合計は',

    'LBL_OPPORTUNITY_ROLE'=>'商談での役割',
    'LBL_NOTES_SUBPANEL_TITLE' => 'メモ',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => '確認をクリックすると、すべての予算データを消去し、商談ビューを変更します。これが意図したものではない場合は、キャンセルをクリックして以前の設定に戻ります。',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => '全ての高収益商品がクローズされ、少なくとも一つ受注した場合、',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => '商談セールスステージは「クローズされた受注」にセットされます。',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => '全ての高収益商品がクローズされた失注ステージにある場合、',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => '商談セールスステージは「クローズされた失注」にセットされます。',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => '高収益商品がまだオープンの場合、',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => '商談は進捗が少ないセールスステージにマークされます。',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}}モジュールを使用すると、個々の販売と最初から最後まで、これらの売上に属する品目を追跡することができます。各{{module_name}} レコードは{{revenuelineitems_module}}のグループのためのヘッダだけでなく、このような{{quotes_module}}など、他の重要な記録に関係を表し、{{contacts_module}}などそれぞれが{{revenuelineitem_moduleは}}です特定の製品の将来の販売とは、関連する販売データが含まれています。それは「クローズドウォン」または「クローズ失われた」のいずれかをマークされるまで、各{{revenuelineitems_singular_module}}は、通常、複数の販売の段階を経て進行します。 {{module_name}} レコードは量とその{{revenuelineitems_module}}の期待終了日を反映しています。 {{plural_module_name}}と{{revenuelineitems_module}}は販売ノルマを達成するために、販売動向を理解し、予測するためにSugarの{{forecasts_singular_module}} モジュールを使用するだけでなく、フォーカスの作業でさらに活用することができる。',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{module_name}}モジュールは、いくつかの情報を持っている確定していない見込である個々の人々で構成されていますが、まだ確定した{{leads_singular_module}}ではありません。 - 個々のフィールドまたは[編集]ボタンをクリックして、このレコードのフィールドを編集します。 - 左下のペインに「データビュー」をトグルしてサブパネル内の他のレコードへのリンクを表示したり変更します。 - 左下ペインに「アクティビティストリーム」を切り替えることにより、{{activitystream_singular_module}}内のレコードのユーザーのコメントしたり表示してください。 - レコード名の右にあるアイコンを使用して、このレコードをフォローするかお気に入りに入れてください。 - 追加のアクションは、[編集]ボタンの右にあるドロップダウンの操作メニューにあります。',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}}モジュールを使用すると、個々の販売と最初から最後まで、これらの売上に属する品目を追跡することができます。各{{{module_name}}レコードは{{revenuelineitems_module}}のグループだけでなく{{quotes_module}}、{{contacts_module}}などのような他の重要な記録に関係するためのヘッダーを表します。{{module_name}}を作成するには1.必要に応じてフィールドの値を指定します。 - 「必須」フィールドは保存前に入力完了してください。 - 必要に応じて、追加のフィールドを公開する「詳細を表示」をクリックします。 2。新しいレコードを確定し、前のページに戻るには「保存」をクリックします。 - 「保存して表示」を選択し、レコードビューに{{module_name}}を開きます。 - すぐに別の新しい{{module_name}}を作成するには「保存して新規作成」を選択してください。3。保存した後に、{{module_name}}に製品を追加するには、{{revenuelineitems_module}}サブパネルを使用してください。',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Marketo®に同期する',
    'LBL_MKTO_ID' => 'Marketoリード ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'TOP10営業商談',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'トップ10の商談をバブルチャートで表示する',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => '私の商談',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "チームの商談",
);
