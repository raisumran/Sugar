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
	'LBL_MODULE_NAME' => 'ナレッジベース',
    'LBL_MODULE_NAME_SINGULAR' => 'ナレッジベース',
	'LBL_MODULE_TITLE' => 'ナレッジベース記事',
	'LNK_NEW_ARTICLE' => '記事作成',
	'LNK_KBDOCUMENT_LIST'=> 'ドキュメントを見る',
	'LBL_DOC_REV_HEADER' => 'ドキュメントの版',
	'LBL_SEARCH_FORM_TITLE'=> 'ドキュメント検索',
	'LBL_SEND_EMAIL'  => 'Eメール送信',
	'LBL_SELECT_TAG_BUTTON_TITLE' => '選択',
	'LBL_EMBEDED_IMAGES' => '埋め込み画像:',
	'LBL_SHOW_MORE' => 'さらに表示',
	'LBL_SHOW_ARTICLE_DETAILS' => '詳細をさらに表示',
	'LBL_HIDE_ARTICLE_DETAILS' => '詳細を非表示',
	'LBL_TAGS' => 'タグ:',
	'LBL_NOT_AN_ADMIN_USER' => '管理者ではありません。',
	'LBL_NOT_A_VALID_FILE' => '不正なファイル',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => 'タグを新規作成',
    'LBL_NEW_TAG_NAME' => '新規タグ名:',
	
	//vardef labels	
	'LBL_ID' => 'ID',
	'LBL_KBDOCUMENT_ID' => 'ドキュメントID',
	'LBL_ARTICLE_TITLE' => '職位:',
	'LBL_ARTICLE_AUTHOR' => '作成者:',
	'LBL_ARTICLE_APPROVED_BY' =>'承認者:',
	'LBL_ARTICLE_BODY' => '記事本文:',
	'LBL_NAME' => 'ドキュメント名:',
	'LBL_DESCRIPTION' => '詳細',
	'LBL_CATEGORY' => 'カテゴリ',
	'LBL_SUBCATEGORY' => 'サブカテゴリ',
	'LBL_STATUS' => 'ステータス',
	'LBL_CREATED_BY'=> '作成者',
	'LBL_DATE_ENTERED'=> '作成日',
	'LBL_DATE_MODIFIED'=> '更新日',
	'LBL_DELETED' => '削除済み',
	'LBL_MODIFIED'=> '更新者ID',
	'LBL_MODIFIED_USER' => '更新者',
	'LBL_CREATED'=> '作成者',
	'LBL_RELATED_DOCUMENT_ID'=>'関連ドキュメントID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'関連ドキュメントの版ID',
	'LBL_IS_TEMPLATE'=>'テンプレート',
	'LBL_TEMPLATE_TYPE'=>'ドキュメントタイプ',
    'LBL_PARENT_TYPE'=>'親タイプ',
	'LBL_NUMBER'    =>  'LBL_NUMBER',
    'LBL_TEXT_BODY' =>  'LBL_TEXT_BODY',
    'LBL_CREATED_BY_NAME' => 'LBL_CREATED_BY_NAME',
    'LBL_TAG_ID' => 'LBL_TAG_ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'契約ステータス:',
    'LBL_LINKED_ID'=>'リンクID',
    'LBL_VIEWS_NUMBER'=>'閲覧数',

	'LBL_REVISION_NAME' => '版数',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KBドキュメント版数',
	'LBL_MIME' => 'Mimeタイプ',
	'LBL_REVISION' => '版',
	'LBL_DOCUMENT' => '関連ドキュメント',
	'LBL_LATEST_REVISION' => '最新版ID',
    'LBL_LATEST_REVISION_NAME' => '最新版の名前',
    'LBL_SELECTED_REVISION_NAME' => '選択した版の名前',
    'LBL_SELECTED_REVISION_ID' => '選択された版のID',
    'LBL_SELECTED_REVISION_FILENAME' => '選択された版のファイル名',
	'LBL_CHANGE_LOG'=> '更新履歴',
	'LBL_ACTIVE_DATE'=> '発行日',
	'LBL_EXPIRATION_DATE' => '有効期限',
	'LBL_FILE_EXTENSION'  => 'ファイル拡張子',
    'LBL_KBDOC_APPROVER_NAME' => '承認者名',

    'LBL_KNOWLEDGE_BASE_SEARCH' => 'ナレッジベース',
	'LBL_KNOWLEDGE_BASE_ADMIN' => 'ナレッジベース管理者',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => 'ナレッジベース管理者',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'未指定',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => 'タグ:',
	'LBL_KBDOC_BODY' => '本文:',
	'LBL_KBDOC_APPROVED_BY' =>'承認者:',
	'LBL_KBDOC_ATTACHMENT' =>'添付ファイル',
	'LBL_KBDOC_ATTS_TITLE' =>'添付ファイルのダウンロード:',
	'LBL_DOC_NAME' => 'ドキュメント名:',
	'LBL_FILENAME' => 'ファイル名:',
	'LBL_DOC_VERSION' => '版:',
	'LBL_CATEGORY_VALUE' => 'カテゴリ:',
	'LBL_SUBCATEGORY_VALUE'=> 'サブカテゴリ:',
	'LBL_DOC_STATUS'=> 'ステータス:',
	'LBL_LAST_REV_CREATOR' => '版の作成者:',
	'LBL_LAST_REV_DATE' => '改版日:',
	'LBL_DOWNNLOAD_FILE'=> '添付:',
	'LBL_DET_RELATED_DOCUMENT'=>'関連ドキュメント:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"関連ドキュメントの版:",
	'LBL_DET_IS_TEMPLATE'=>'テンプレート:',
	'LBL_DET_TEMPLATE_TYPE'=>'ドキュメントタイプ:',
	'LBL_IS_EXTERNAL_ARTICLE' => '外部公開記事:',
	'LBL_SHOW_TAGS' => 'タグをさらに表示',
    'LBL_HIDE_TAGS' => 'タグを非表示',
	'LBL_TEAM'=> 'チーム:',
	'LBL_DOC_DESCRIPTION'=>'詳細:',
	'LBL_KBDOC_SUBJECT' =>'件名:',
	'LBL_DOC_ACTIVE_DATE'=> '発行日:',
	'LBL_DOC_EXP_DATE'=> '有効期限:',

	//document list view.
	'LBL_LIST_ARTICLES' => '記事一覧',
	'LBL_LIST_FORM_TITLE' => 'ドキュメント一覧',
	'LBL_LIST_DOCUMENT' => 'ドキュメント',
	'LBL_LIST_CATEGORY' => 'カテゴリ',
	'LBL_LIST_SUBCATEGORY' => 'サブカテゴリ',
	'LBL_LIST_REVISION' => '版',
	'LBL_LIST_LAST_REV_CREATOR' => '発行者',
	'LBL_LIST_LAST_REV_DATE' => '改版日',
	'LBL_LIST_VIEW_DOCUMENT'=>'閲覧',
    'LBL_LIST_DOWNLOAD'=> 'ダウンロード',
	'LBL_LIST_ACTIVE_DATE' => '発行日',
	'LBL_LIST_EXP_DATE' => '有効期限',
	'LBL_LIST_STATUS'=>'ステータス',
    'LBL_ARTICLE_AUTHOR_LIST' => '著作者',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => '最も参照されている記事',
	'LBL_LIST_MOST_RECENT' => '最新記事',
    'LBL_LIST_APPROVED_BY' => '承認者',
	//document search form.
	'LBL_SF_DOCUMENT' => 'ドキュメント名:',
	'LBL_SF_CATEGORY' => 'カテゴリ:',
	'LBL_SF_SUBCATEGORY'=> 'サブカテゴリ:',
	'LBL_SF_ACTIVE_DATE' => '発行日:',
	'LBL_SF_EXP_DATE'=> '有効期限:',

	'DEF_CREATE_LOG' => 'ドキュメント作成日',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => '検索',
    'LBL_TAB_BROWSE' => '表示',
    'LBL_TAB_ADVANCED' => '詳細検索',
    'LBL_MENU_FTS' => '全文検索',
    'LBL_FTS_EMPTY_STRING' =>  '空白の文字列で全文検索を行うことはできません。',
    'LBL_SEARCH_WITHIN' => '検索範囲:',      
    'LBL_CONTAINING_THESE_WORDS' => '含めるキーワード:',     
    'LBL_EXCLUDING_THESE_WORDS' => '含めないキーワード:',  
    'LBL_UNDER_THIS_TAG' => 'タグ:',
    'LBL_PUBLISHED' => '公開済み:',
    'LBL_EXPIRES' => '期限切れ:',
    'LBL_TIMES_VIEWED' => '参照回数:',    
    'LBL_ATTACHMENTS' => '添付:',
    'LBL_SAVE_SEARCH_AS' => 'この検索を別名で保存:',
    'LBL_SAVE_SEARCH_AS_HELP' => 'ナレッジベースの保存済み検索として入力されたエントリを保存します。',
    'LBL_PREVIOUS_SAVED_SEARCH' => '保存済み検索:',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => '既存の保存済み検索を編集または削除',
    'LBL_UPDATE' => '更新',
    'LBL_DELETE' => '削除',
    'LBL_SHOW_OPTIONS' => 'オプションをさらに表示',
    'LBL_AND' => 'と',
    'LBL_SEARCH' => '検索',
    'LBL_CLEAR' => 'クリア',
    'LBL_LIST_KBDOC_APPROVER_NAME' => '承認者名',
    'LBL_LIST_VIEWING_FREQUENCY' => '参照回数',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => 'プレビューは利用できません。ドキュメントレコードが見つかりません。',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => 'プレビューは利用できません。ドキュメントは存在しますが、内容が作成されていません。',
    'LBL_UNTAGGED_ARTICLES_NODE' => 'タグ付けされていない記事',
    'LBL_TOP_TEN_LIST_TITLE' => '最も閲覧されている記事トップ10',
    'LBL_SHOW_SYNTAX_HELP' => '文法に関するヘルプを表示',
    'LBL_MISMATCH_QUOTES_ERR' => 'あなたのクエリはそのままでは動作しません。ダブルクォートで始まる場合は必ずダブルクォートで閉じてください。ダブルクォートを含む文字列を検索する場合はエスケープ文字のバックスラッシュを前に付けてください（\\"）。', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '<B>クエリ文法のヘルプ:</b><P><br />       <ol><br /><li>プラス（+）でこの語句が必ず含まれる検索結果が表示されます。</li><br /><li>マイナス（-）でこの語句を省いた検索結果が表示されます。除外する単語フィールドに入力する場合は、マイナス（-）は必要ありません。</li><br /><li>ダブルクォーテーションマーク（"）で囲まれた複数の単語("example1 example2")は１つの検索項目として扱われます。語句の最初と最後にクォーテーションマークがない場合は検索は実行されません。<br>クォーテーションマークを検索する場合は、バックスラッシュクォート（\\"）を使用してください。</li><br /><li>シングルクォーテーションマーク（&#39;）はそれ自身として検索され、グループとして検索されません。</li></ol><br />       <br />       </p><br />       <br />       <p><b>例: </b><br><br><br /><br />       「Sugar」たは「CRM」を含み、「Knowledge Base」と「cool」を必ず含む一方で「demo」や「past tense」を含まない記事を検索する場合は次のように入力します:<br>&nbsp;&nbsp;&nbsp;&nbsp;Sugar CRM +"Knowledge Base" +cool -demo -"Past Tense"</p><br><br />       <br />       <p><b>注: </b><br><br /><ol><li>大文字小文字は区別されません。</li><br /><li>スペースとカンマは区切り文字として利用できます。</li><br /><li>プラス（+）もしくはマイナス（-）とその対象の単語の間にはスペースを入れないでください。</li></ol><br /></p>',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => '子タグ',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => '子タグ',
    'LBL_ARTICLE_IN_TREE_HOVER' => '記事',
    'LBL_ARTICLES_IN_TREE_HOVER' => '記事',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => 'このタグが含むもの:',
    
	//error messages
	'ERR_DOC_NAME'=>'ドキュメント名',
	'ERR_DOC_ACTIVE_DATE'=>'発行日',
	'ERR_DOC_EXP_DATE'=> '有効期限',
	'ERR_FILENAME'=> 'ファイル名',
	'ERR_DOC_VERSION'=> 'ドキュメントのバージョン',
	'ERR_DELETE_CONFIRM'=> 'この版を削除してよいですか？',
	'ERR_DELETE_LATEST_VERSION'=> '最新版を削除することは許可されていません。',
	'LNK_NEW_MAIL_MERGE' => 'メールマージ',
	'LBL_MAIL_MERGE_DOCUMENT' => 'メールマージテンプレート:',
	'ERR_FILESIZE' => 'ファイルが大きすぎます。最大ファイルサイズ:',

	'LBL_TREE_TITLE' => 'ドキュメント',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'ドキュメント名',
	'LBL_CONTRACT_NAME'=>'契約名:',
	'LBL_LIST_IS_TEMPLATE'=>'テンプレート？',
	'LBL_LIST_TEMPLATE_TYPE'=>'ドキュメントタイプ',
	'LBL_LIST_SELECTED_REVISION'=>'選択された版',
	'LBL_LIST_LATEST_REVISION'=>'最新版',
	'LBL_CASES_SUBPANEL_TITLE'=>'関連ケース',
	'LBL_EMAILS_SUBPANEL_TITLE' => '関連メール',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'契約',
	'LBL_LAST_REV_CREATE_DATE'=>'最新版の作成日',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => 'キーワード:',
    'LBL_CASES' =>'ケース',
    'LBL_CASE_ID' => 'ケースID',
    'LBL_CASE'    => 'ケース:',
    'LBL_EMAILS' =>'Eメール',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'ドロップダウンリストからアクションを選択',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'ツリーから親のタグを選択',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => '削除するタグをツリーから選択',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'名前を変えるタグをツリーから選択',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => 'タグは既に存在します。',
    'LBL_TYPE_THE_NEW_TAG_NAME' => '新たなタグ名を入力してください。',
    'LBL_SAVING_THE_TAG' => 'タグを保存中...',
    'LBL_CREATING_NEW_TAG' => 'タグを作成中...',
    'LBL_TAGS_ROOT_LABEL' => 'タグ',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => 'FAQsタグの名前は変えられません',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => '最初に記事を選択してください',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => 'タグを適用する記事を選択してください',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => '最初に記事を選択してください',
    'LBL_SELECT_A_TAG_FROM_TREE' => 'ツリーからタグを選択してください',
    'LBL_SELECT_TAGS_FROM_TREE'  => 'ツリーからタグを選択してください',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'記事をタグに移動中...',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'タグを記事に適用中...',
    'LBL_ROOT_TAG_MESSAGE' => 'ルートタグは選択できません。記事に紐付けられません。',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => 'ルートタグの名前は変更できません。',
    'LBL_TYPE_NEW_NODE_NAME'=>'タグ名を入力してください',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => 'ソースとターゲットのタグが同じです',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => 'タグの削除',
    'LBL_SELECT_TAG'  => 'タグの選択',
    'LBL_APPLY_TAG'  =>  'タグの適用',
    'LBL_MOVE'  =>   '移動',
    'LBL_LAUNCHING_TAG_BROWSING' => 'タグブラウザを起動中...',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => 'タグに関するこのリクエストの処理中にエラーが発生しました。',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'エラー: ファイル入力の要素ではありません。',
    'LBL_CREATE_NEW_TAG'  => 'タグを新規作成',
    'LBL_SEARCH_TAG'  => '検索',
    'LBL_TAG_NAME'  =>'タグ名:',
    
    'LBL_SELECT_TAGS_TO_DELETE' => '削除するタグを選択してください',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => '検索するタグ名を入力',
    'LBL_KB_NOTIFICATION' => 'ドキュメントは公開されました',
    'LBL_KB_PUBLISHED_REQUEST' => 'はあなたにドキュメントの承認および公開を依頼しています。',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => 'ドキュメントのステータスはドラフトに戻されました',  
    'LBL_CONTRACTS' => '契約',

	'LBL_SELECT_PARENT_TREE_NOTICE' => 'ツリーから親タグを選択してください',
	'LBL_CLICK_APPLY_TAG' => '適用するタグをクリックしてください',	
	'LBL_HEAD_TAGS' => 'タグ',
	'LBL_REMOVE' => 'はずす' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '編集' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => 'デフォルトリンクテキスト。',
    'LBL_SELECT_NODE' => 'ノードを選択してください',
    'LBL_ARTICLE_EXISTS' => '記事は既に存在しています',


);
?>
