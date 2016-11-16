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
	'LBL_MODULE_NAME' => '지식 기반',
    'LBL_MODULE_NAME_SINGULAR' => '지식 기반',
	'LBL_MODULE_TITLE' => '지식기반 조항',
	'LNK_NEW_ARTICLE' => '신규 조항 새로 만들기',
	'LNK_KBDOCUMENT_LIST'=> '문서 보기',
	'LBL_DOC_REV_HEADER' => '문서 개정',
	'LBL_SEARCH_FORM_TITLE'=> '문서 검색',
	'LBL_SEND_EMAIL'  => '이메일 전송',
	'LBL_SELECT_TAG_BUTTON_TITLE' => '선택하기',
	'LBL_EMBEDED_IMAGES' => '삽입된 이미지',
	'LBL_SHOW_MORE' => '더 많은 조항 보여주기',
	'LBL_SHOW_ARTICLE_DETAILS' => '더 많은 세부사항 보여주기',
	'LBL_HIDE_ARTICLE_DETAILS' => '세부사항 숨기기',
	'LBL_TAGS' => '태그',
	'LBL_NOT_AN_ADMIN_USER' => '관리자가 아닙니다.',
	'LBL_NOT_A_VALID_FILE' => '유효한 파일이 아닙니다.',
	
	//Tag tree related labels
    'LBL_SELECT_A_NODE_FROM_TREE' => '신규 태그 새로 만들기',
    'LBL_NEW_TAG_NAME' => '신규 태그명',
	
	//vardef labels	
	'LBL_ID' => 'ID:',
	'LBL_KBDOCUMENT_ID' => '문서ID',
	'LBL_ARTICLE_TITLE' => '직함:',
	'LBL_ARTICLE_AUTHOR' => '필자',
	'LBL_ARTICLE_APPROVED_BY' =>'승인자',
	'LBL_ARTICLE_BODY' => '조항 원문',
	'LBL_NAME' => '문서명:',
	'LBL_DESCRIPTION' => '설명:',
	'LBL_CATEGORY' => '범주',
	'LBL_SUBCATEGORY' => '하위 범주',
	'LBL_STATUS' => '상태',
	'LBL_CREATED_BY'=> '생성자',
	'LBL_DATE_ENTERED'=> '생성일',
	'LBL_DATE_MODIFIED'=> '수정일자:',
	'LBL_DELETED' => '삭제 완료',
	'LBL_MODIFIED'=> '수정자 ID',
	'LBL_MODIFIED_USER' => '수정자:',
	'LBL_CREATED'=> '생성자',
	'LBL_RELATED_DOCUMENT_ID'=>'관련 문서 ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'관련 문서 개정ID',
	'LBL_IS_TEMPLATE'=>'템플릿여부',
	'LBL_TEMPLATE_TYPE'=>'문서 형식',
    'LBL_PARENT_TYPE'=>'상위 유형',
	'LBL_NUMBER'    =>  '번호:',
    'LBL_TEXT_BODY' =>  '문장 본문',
    'LBL_CREATED_BY_NAME' => '사용자에 의한 생성',
    'LBL_TAG_ID' => '태그 ID',
    'LBL_KBDOCUMENTS_KBTAGS_ID' => 'LBL_KBDOCUMENTS_KBTAGS_ID',
    'LBL_CONTRACT_STATUS'=>'계약 상태',
    'LBL_LINKED_ID'=>'링크 된 아이디',
    'LBL_VIEWS_NUMBER'=>'조회 수',

	'LBL_REVISION_NAME' => '개정 번호',
	'LBL_KBDOCUMENT_REVISION_NUMBER' => 'KB문서 개정 번호',
	'LBL_MIME' => 'Mime유형',
	'LBL_REVISION' => '개정',
	'LBL_DOCUMENT' => '관련 문서',
	'LBL_LATEST_REVISION' => '최신 개정 ID',
    'LBL_LATEST_REVISION_NAME' => '최신 개정명',
    'LBL_SELECTED_REVISION_NAME' => '선택된 개정명',
    'LBL_SELECTED_REVISION_ID' => '선택 수정 아이디',
    'LBL_SELECTED_REVISION_FILENAME' => '선택한 개정 파일 이름',
	'LBL_CHANGE_LOG'=> '변경 일지',
	'LBL_ACTIVE_DATE'=> '발표일',
	'LBL_EXPIRATION_DATE' => '만료일자',
	'LBL_FILE_EXTENSION'  => '파일 확장',
    'LBL_KBDOC_APPROVER_NAME' => '승인자명',

    'LBL_KNOWLEDGE_BASE_SEARCH' => '지식 기반',
	'LBL_KNOWLEDGE_BASE_ADMIN' => '지식 기반 관리',
    'LBL_KNOWLEDGE_BASE_ADMIN_MENU' => '지식 기반 관리자',
     
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'명시되지 않음',
	//document edit and detail view
	'LBL_KBDOC_TAGS' => '태그',
	'LBL_KBDOC_BODY' => '본문',
	'LBL_KBDOC_APPROVED_BY' =>'승인자',
	'LBL_KBDOC_ATTACHMENT' =>'Kbdoc_첨부',
	'LBL_KBDOC_ATTS_TITLE' =>'첨부 다운로드',
	'LBL_DOC_NAME' => '문서명:',
	'LBL_FILENAME' => '파일명:',
	'LBL_DOC_VERSION' => '개정:',
	'LBL_CATEGORY_VALUE' => '범주',
	'LBL_SUBCATEGORY_VALUE'=> '하위 범주',
	'LBL_DOC_STATUS'=> '상태',
	'LBL_LAST_REV_CREATOR' => '새로 생성된 개정',
	'LBL_LAST_REV_DATE' => '개정일',
	'LBL_DOWNNLOAD_FILE'=> '첨부',
	'LBL_DET_RELATED_DOCUMENT'=>'관련 문서',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"관련 문서 개정",
	'LBL_DET_IS_TEMPLATE'=>'템플릿',
	'LBL_DET_TEMPLATE_TYPE'=>'문서 형식:',
	'LBL_IS_EXTERNAL_ARTICLE' => '외부 조항',
	'LBL_SHOW_TAGS' => '더 많은 태그 보여주기',
    'LBL_HIDE_TAGS' => '태그 숨기기',
	'LBL_TEAM'=> '팀',
	'LBL_DOC_DESCRIPTION'=>'설명',
	'LBL_KBDOC_SUBJECT' =>'제목',
	'LBL_DOC_ACTIVE_DATE'=> '발표일:',
	'LBL_DOC_EXP_DATE'=> '만료일자:',

	//document list view.
	'LBL_LIST_ARTICLES' => '조항 보기',
	'LBL_LIST_FORM_TITLE' => '문서 목록',
	'LBL_LIST_DOCUMENT' => '문서',
	'LBL_LIST_CATEGORY' => '범주',
	'LBL_LIST_SUBCATEGORY' => '하위 범주',
	'LBL_LIST_REVISION' => '개정',
	'LBL_LIST_LAST_REV_CREATOR' => '발표인',
	'LBL_LIST_LAST_REV_DATE' => '개정일',
	'LBL_LIST_VIEW_DOCUMENT'=>'보기',
    'LBL_LIST_DOWNLOAD'=> '다운로드',
	'LBL_LIST_ACTIVE_DATE' => '발표일',
	'LBL_LIST_EXP_DATE' => '만료일자',
	'LBL_LIST_STATUS'=>'상태',
    'LBL_ARTICLE_AUTHOR_LIST' => '필자',
    //document list view (for portal)
	'LBL_LIST_MOST_VIEWED' => '가장 많이본 조항',
	'LBL_LIST_MOST_RECENT' => '가장 최근 조항',
    'LBL_LIST_APPROVED_BY' => '으로 승인',
	//document search form.
	'LBL_SF_DOCUMENT' => '문서명:',
	'LBL_SF_CATEGORY' => '범주',
	'LBL_SF_SUBCATEGORY'=> '하위 범주',
	'LBL_SF_ACTIVE_DATE' => '발표일:',
	'LBL_SF_EXP_DATE'=> '만료일자:',

	'DEF_CREATE_LOG' => '문서 생성완료',
    
    //kbdocument full text search form.
    'LBL_TAB_SEARCH' => '검색하기',
    'LBL_TAB_BROWSE' => '브라우즈',
    'LBL_TAB_ADVANCED' => '고급검색',
    'LBL_MENU_FTS' => '전체 문장 검색',
    'LBL_FTS_EMPTY_STRING' =>  '빈줄에서는 전체 문장 검색 실행이 불가합니다.',
    'LBL_SEARCH_WITHIN' => '검색',      
    'LBL_CONTAINING_THESE_WORDS' => '이 단어를 포함함',     
    'LBL_EXCLUDING_THESE_WORDS' => '이 단어를 포함하지 않음',  
    'LBL_UNDER_THIS_TAG' => '이 태그를 사용',
    'LBL_PUBLISHED' => '발표 완료',
    'LBL_EXPIRES' => '만료',
    'LBL_TIMES_VIEWED' => '횟수 보기',    
    'LBL_ATTACHMENTS' => '첨부',
    'LBL_SAVE_SEARCH_AS' => '검색 저장',
    'LBL_SAVE_SEARCH_AS_HELP' => '이는 특정 지정항목을 지식 기반을 위한 저장된 검색 필터를 저정합니다.',
    'LBL_PREVIOUS_SAVED_SEARCH' => '이전 저장된 검색 목록',
    'LBL_PREVIOUS_SAVED_SEARCH_HELP' => '편집하거나 기존 저장 검색 삭제하기',
    'LBL_UPDATE' => '업데이트하기',
    'LBL_DELETE' => '삭제하기',
    'LBL_SHOW_OPTIONS' => '더 많은 선택사항',
    'LBL_AND' => '그리고',
    'LBL_SEARCH' => '검색하기',
    'LBL_CLEAR' => '비우기',
    'LBL_LIST_KBDOC_APPROVER_NAME' => '승인자명',
    'LBL_LIST_VIEWING_FREQUENCY' => '횟수',  
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_DOCUMENT' => '미리보기를 사용할수 없습니다. 문서 기록이 발견되지 않았습니다.',
    'LBL_ARTICLE_PREVEW_UNAVAILABLE_NO_CONTENT' => '미리보기를 사용할수 없습니다. 문서가 존재하지만 내용이 생성되지 않았습니다.',
    'LBL_UNTAGGED_ARTICLES_NODE' => '태그되지 않은 조항',
    'LBL_TOP_TEN_LIST_TITLE' => '가장 많이 본 상위 10개 조항',
    'LBL_SHOW_SYNTAX_HELP' => 'Syntax 도움말',
    'LBL_MISMATCH_QUOTES_ERR' => '귀하의 요청은 입력하신대로 작동하지 않습니다. 이는 짝을 이루는 모든 열리는 큰따옴표를 위한', 
    'LBL_SYNTAX_CHEAT_SHEET' => 
        '문의사항 구문 도움말<br />1. 플러스 표시는 &#39;반드시&#39;을 가리킵니다.<br />2. 마이너스 표시는 &#39;하지말았어야&#39;를 가리킵니다. 제외될 단어로 문자필드를 채운다면 마이너스표시가 필요하지 않습니다.<br />3. 큰 따옴표안의 복합 단어는 ("예1 예2")  하나의 검색어로 취급됩니다. 따옴표의 열림과 닫힘이 반드시 있어야하며 그렇지않으면 검색이 실행되지 않습니다. <br />4. 작은 따옴표는 그룹이 아닌 단일로 검색됩니다.',
        
    //for hovering over tree
    'LBL_CHILD_TAG_IN_TREE_HOVER' => '하위 태그',
    'LBL_CHILD_TAGS_IN_TREE_HOVER' => '하위 태그',
    'LBL_ARTICLE_IN_TREE_HOVER' => '조항',
    'LBL_ARTICLES_IN_TREE_HOVER' => '조항 목록',
    'LBL_THIS_TAG_CONTAINS_TREE_HOVER' => '이 태그는 다음을 포함합니다.',
    
	//error messages
	'ERR_DOC_NAME'=>'문서명:',
	'ERR_DOC_ACTIVE_DATE'=>'발표일',
	'ERR_DOC_EXP_DATE'=> '만료일자',
	'ERR_FILENAME'=> '파일명:',
	'ERR_DOC_VERSION'=> '문서 버전',
	'ERR_DELETE_CONFIRM'=> '이 문서 개정을 삭제하시겠습니까?',
	'ERR_DELETE_LATEST_VERSION'=> '문서의 최신 개정 삭제 권한이 없습니다.',
	'LNK_NEW_MAIL_MERGE' => '우편 통합',
	'LBL_MAIL_MERGE_DOCUMENT' => '우편통합 템플릿',
	'ERR_FILESIZE' => '파일이 너무 큽니다. 최대 파일 크기:',

	'LBL_TREE_TITLE' => '문서 목록',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'문서명:',
	'LBL_CONTRACT_NAME'=>'연락처명',
	'LBL_LIST_IS_TEMPLATE'=>'템플릿',
	'LBL_LIST_TEMPLATE_TYPE'=>'문서 형식',
	'LBL_LIST_SELECTED_REVISION'=>'선택된 개정',
	'LBL_LIST_LATEST_REVISION'=>'최신 개정',
	'LBL_CASES_SUBPANEL_TITLE'=>'관련 사례',
	'LBL_EMAILS_SUBPANEL_TITLE' => '관련 이메일',
    'LBL_CONTRACTS_SUBPANEL_TITLE'=>'관련 계약',
	'LBL_LAST_REV_CREATE_DATE'=>'최근 개정 생성일',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_KEYWORDS' => '키워드',
    'LBL_CASES' =>'사례 목록',
    'LBL_CASE_ID' => '케이스 ID',
    'LBL_CASE'    => '케이스 :',
    'LBL_EMAILS' =>'이메일',
    
   //Admin screen messages
    'LBL_DEFAULT_ADMIN_MESSAGE' =>'내려보기 목록에서 활동 선택',
    'LBL_SELECT_PARENT_TAG_MESSAGE' =>'관계도에서 상위 태그 선택',
    'LBL_SELECT_TAG_TO_BE_DELETED_FROM_TREE' => '관계도에서 삭제한 태그 선택',
    'LBL_SELECT_TAG_TO_BE_RENAMED_FROM_TREE' =>'관계도에서 개명할 태그 선택',
       
     //Tag creation messages
    'LBL_TAG_ALREADY_EXISTS' => '이미 존재하는 태그입니다.',
    'LBL_TYPE_THE_NEW_TAG_NAME' => '새 태그명을 입력하십시오',
    'LBL_SAVING_THE_TAG' => '태그 저장중입니다.',
    'LBL_CREATING_NEW_TAG' => '새 태그를 생성중 입니다.',
    'LBL_TAGS_ROOT_LABEL' => '태그',            
    'LBL_FAQ_TAG_NOT_RENAME_MESSAGE' => '자주 묻는 질문 태그는 개명할수 없습니다.',
    'LBL_SELECT_ARTICLES_TO_BE_MOVED_TO_OTHER_TAG' => '먼저 조항을 선택하십시오',
    'LBL_SELECT_ARTICLES_TO_APPLY_TAGS' => '태그에 적용할 조항을 선택하십시오',
    'LBL_SELECT_ARTICLES_TO_DELETE'  => '먼저 조항을 선택하십시오',
    'LBL_SELECT_A_TAG_FROM_TREE' => '관계도에서 태그를 선택하십시오',
    'LBL_SELECT_TAGS_FROM_TREE'  => '관계도에서 태그를 선택하십시오',
    'LBL_MOVING_ARTICLES_TO_TAG' =>'조항을 태그로 이동중입니다.',
    'LBL_APPLYING_TAGS_TO_ARTICLES' =>'태그를 조항에 적용중입니다.',
    'LBL_ROOT_TAG_MESSAGE' => '태그 근원은 선택되거나 조항에 연결될수 없습니다.',
    'LBL_ROOT_TAG_CAN_NOT_BE_RENAMED' => '태그 근원은 개명할수 없습니다.',
    'LBL_TYPE_NEW_NODE_NAME'=>'태그명을 입력하십시오',
    'LBL_SOURCE_AND_TARGET_TAGS_ARE_SAME' => '출처와 목표고객 태그는 동일합니다.',
    
    //Tag button labels
    'LBL_DELETE_TAG'  => '태그 삭제하기',
    'LBL_SELECT_TAG'  => '태그 선택하기',
    'LBL_APPLY_TAG'  =>  '태그 적용하기',
    'LBL_MOVE'  =>   '이동',
    'LBL_LAUNCHING_TAG_BROWSING' => '태그 브라우징 시작하기',
    'LBL_THERE_WAS_AN_ERROR_HANDLING_TAGS' => '태그 요청 관리중 오류가 있습니다.',
    'LBL_ERROR_NOT_A_FILE_INPUT_ELEMENT' =>'오류: 파일 입력요소가 아닙니다',
    'LBL_CREATE_NEW_TAG'  => '신규 태그 새로 만들기',
    'LBL_SEARCH_TAG'  => '검색하기',
    'LBL_TAG_NAME'  =>'태그명',
    
    'LBL_SELECT_TAGS_TO_DELETE' => '삭제할 조항을 선택하십시오',
    'LBL_TYPE_TAG_NAME_TO_SEARCH' => '검색할 태그명을 입력하십시오',
    'LBL_KB_NOTIFICATION' => '문서가 발표되었습니다.',
    'LBL_KB_PUBLISHED_REQUEST' => '승인과 발표를 위한 문서가 귀하에 배정 되었습니다.',
    'LBL_KB_STATUS_BACK_TO_DRAFT' => '문서 상태가 임시보관함으로 변경되었습니다.',  
    'LBL_CONTRACTS' => '계약목록',

	'LBL_SELECT_PARENT_TREE_NOTICE' => '관계도에서 상위 태그 선택하십시오',
	'LBL_CLICK_APPLY_TAG' => '태그적용을 클릭하십시오',	
	'LBL_HEAD_TAGS' => '태그',
	'LBL_REMOVE' => '제거하기' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '편집하기' /*for 508 compliance fix*/,
    'LBL_DEFAULT_LINK_TEXT' => '초기설정 링크 문자',
    'LBL_SELECT_NODE' => '접속점을 선택하십시요.',
    'LBL_ARTICLE_EXISTS' => '조항이 이미 존재합니다.',


);
?>
