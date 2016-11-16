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
	'LBL_SEND_DATE_TIME'						=> '送信日',
	'LBL_IN_QUEUE'								=> 'キューイング中',
	'LBL_IN_QUEUE_DATE'							=> 'キューに入った日',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'バッチごとの送信メール数の値は整数である必要があります',

	'LBL_ATTACHMENT_AUDIT'						=> 'は送信されました。ディスク使用を節約するため、ローカルでは複製されていません。',
	'LBL_CONFIGURE_SETTINGS'					=> '設定',
	'LBL_CUSTOM_LOCATION'						=> 'ユーザが設定',
	'LBL_DEFAULT_LOCATION'						=> 'デフォルト',
	
	'LBL_DISCLOSURE_TITLE'						=> '開示メッセージをすべてのメールに付加',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> '開示内容',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> '注意: このEメールは意図された受信者だけが利用することができます。また、機密性を持ち権限許可が必要なメッセージである可能性があります。本Eメールを許可なく閲覧、利用、開示、配布することは禁じられています。あなたが意図された受信者でない場合、オリジナルのEメールおよびそのコピーをすべて破棄し、送信者にアドレスを訂正すべき旨通知してください。',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> '文字セット',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'メールクライアント',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Eメールの削除の際に関連メモと添付ファイルを削除',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Gmail&amp;amp;#153;のデフォルト設定を埋め込む',
	'LBL_EMAIL_PER_RUN_REQ'						=> '１回のバッチで送信されるメール数:',
	'LBL_EMAIL_SMTP_SSL'						=> 'SMTP over SSLを有効',
	'LBL_EMAIL_USER_TITLE'						=> 'メール作成の設定',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Eメール送信の設定',
	'LBL_EMAILS_PER_RUN'						=> '１回のバッチで送信されるメール数:',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'キャンペーン',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> '処理済みメール',
	'LBL_LIST_FORM_TITLE'						=> 'メールキュー',
	'LBL_LIST_FROM_EMAIL'						=> 'From（アドレス）',
	'LBL_LIST_FROM_NAME'						=> 'From（名前）',
	'LBL_LIST_IN_QUEUE'							=> 'キューイング中',
	'LBL_LIST_MESSAGE_NAME'						=> 'マーケティングメッセージ',
	'LBL_LIST_RECIPIENT_EMAIL'					=> '受信者メールアドレス',
	'LBL_LIST_RECIPIENT_NAME'					=> '受信者氏名',
	'LBL_LIST_SEND_ATTEMPTS'					=> '送信済み',
	'LBL_LIST_SEND_DATE_TIME'					=> '送信日',
	'LBL_LIST_USER_NAME'						=> 'ユーザ名',
	'LBL_LOCATION_ONLY'							=> '場所',
	'LBL_LOCATION_TRACK'						=> 'キャンペーントラッキングファイルの場所（例: campaign_tracker.php）',
    'LBL_CAMP_MESSAGE_COPY'                     => 'キャンペーンメッセージのコピーを保存:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'すべてのキャンペーンで送信した<bold>それぞれの</bold>Eメールメッセージの完全なコピーを保存しますか？  <bold>いいえを選ぶことをお勧めします。</bold>.  いいえを選ぶと送信したテンプレートのみを保存し、必要な変数は個々のメッセージで再生成されます。',
	'LBL_MAIL_SENDTYPE'							=> 'メール送信エージェント:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'SMTP認証を利用:',
	'LBL_MAIL_SMTPPASS'							=> 'パスワード:',
	'LBL_MAIL_SMTPPORT'							=> 'SMTPポート:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTPサーバ名:',
	'LBL_MAIL_SMTPUSER'							=> 'SMTPユーザ名:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Eメールプロバイダを選択',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo!メールパスワード',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo!メールID',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmailパスワード',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail Eメールアドレス',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchangeパスワード',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchangeユーザ名',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchangeサーバポート',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchangeサーバ',
	'LBL_EMAIL_LINK_TYPE'				=> 'Eメールクライアント',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugarメールクライアント: </b>SugarCRMのメールクライアントからメールを送信します。<br><b>外部メールクライアント: </b>Microsoft Outlookなど、SugarCRM以外のメールクライアントを用いてメールを送信します。',
	'LBL_MARKETING_ID'							=> 'マーケティングID',
    'LBL_MODULE_ID'                             => 'Eメールマネージャ',
	'LBL_MODULE_NAME'							=> 'Eメール設定',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Eメール設定',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'キャンペーンメールの設定',
	'LBL_MODULE_TITLE'							=> 'メールキューの管理',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'レコードにアサインされたユーザに通知が送信されます。',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'From（アドレス）:',
	'LBL_NOTIFY_FROMNAME' 						=> 'From（名前）:',
	'LBL_NOTIFY_ON'								=> '通知を有効',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'ユーザ作成時にデフォルトで通知の設定を有効',
	'LBL_NOTIFY_TITLE'							=> 'Eメール通知の設定',
	'LBL_OLD_ID'								=> '旧ID',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'アウトバウンドメールの設定',
	'LBL_RELATED_ID'							=> '関連ID',
	'LBL_RELATED_TYPE'							=> '関連タイプ',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'メールを加工せずに保存',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> '処理済みメール検索',
	'LBL_SEARCH_FORM_TITLE'						=> 'メールキュー検索',
	'LBL_VIEW_PROCESSED_EMAILS'					=> '処理済みメール一覧',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'メールキュー',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'config.phpで設定されたサイトURL',
	'TXT_REMOVE_ME_ALT'							=> 'このEメールリストからあなた自身を除外するにはこちら',
	'TXT_REMOVE_ME_CLICK'						=> 'ここをクリック',
	'TXT_REMOVE_ME'								=> 'このEメールリストからあなた自身を除外するには',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'アサインしたユーザのメールアドレスで送信',

	'LBL_SECURITY_TITLE'						=> 'Eメールのセキュリティ設定',
	'LBL_SECURITY_DESC'							=> 'メール表示時に無効にするタグをチェックしてください。',
	'LBL_SECURITY_APPLET'						=> 'Appletタグ',
	'LBL_SECURITY_BASE'							=> 'Baseタグ',
	'LBL_SECURITY_EMBED'						=> 'Embedタグ',
	'LBL_SECURITY_FORM'							=> 'Formタグ',
	'LBL_SECURITY_FRAME'						=> 'Frameタグ',
	'LBL_SECURITY_FRAMESET'						=> 'Framesetタグ',
	'LBL_SECURITY_IFRAME'						=> 'iFrameタグ',
	'LBL_SECURITY_IMPORT'						=> 'Importタグ',
	'LBL_SECURITY_LAYER'						=> 'Layerタグ',
	'LBL_SECURITY_LINK'							=> 'Linkタグ',
	'LBL_SECURITY_OBJECT'						=> 'Objectタグ',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Outlookで作成されたメールを正しく表示するための、必要最低限のセキュリティ設定を選択します。',
	'LBL_SECURITY_SCRIPT'						=> 'Scriptタグ',
	'LBL_SECURITY_STYLE'						=> 'Styleタグ',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'すべてのタグを選択',
	'LBL_SECURITY_XMP'							=> 'Xmpタグ',
    'LBL_YES'                                   => 'はい',
    'LBL_NO'                                    => 'いいえ',
    'LBL_PREPEND_TEST'                          => '[テスト]:',
	'LBL_SEND_ATTEMPTS'							=> '送信済み',
	'LBL_OUTGOING_SECTION_HELP'                 => 'ワークフローの通知を含むEメールによる通知を送信するメールサーバの設定を行います。',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'ユーザがこのアカウントを送信用に利用可能とする:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'このオプションが選択された場合、すべてのユーザは同じ送信アカウントから<br>通知や通知を送信することが可能になります。このオプションを選択しない場合でも、<br>ユーザは自身の送信アカウントを設定することによって当該送信サーバからEメールを送信できます。',
    'LBL_FROM_ADDRESS_HELP'                     => '有効の場合、アサイン先ユーザの名前とEメールアドレスがFromにセットされます。ただし、メールアカウントと異なるアドレスからメールを送信できないSMTPでは利用できません。',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'ヘルプ' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => '管理エリアへのアクセスが認められていません。',
    'LBL_INVALID_ENTRY_POINT' => '有効なエントリポイントではありません',
);
