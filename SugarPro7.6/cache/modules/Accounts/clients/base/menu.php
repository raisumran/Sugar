<?php
$clientCache['Accounts']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'label' => 'LNK_NEW_ACCOUNT',
        'acl_action' => 'create',
        'acl_module' => 'Accounts',
        'icon' => 'fa-plus',
        'route' => '#Accounts/create',
      ),
      1 => 
      array (
        'label' => 'LBL_BAL',
        'acl_action' => 'create',
        'acl_module' => 'Accounts',
        'icon' => 'fa-plus',
        'route' => '#Accounts/layout/dnb-bal',
      ),
      2 => 
      array (
        'route' => '#Accounts',
        'label' => 'LNK_ACCOUNT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Accounts',
        'icon' => 'fa-bars',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Reports&action=index&view=Accounts&query=true&report_module=Accounts',
        'label' => 'LNK_ACCOUNT_REPORTS',
        'acl_action' => 'list',
        'acl_module' => 'Accounts',
        'icon' => 'fa-bar-chart-o',
      ),
      4 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Accounts',
        'label' => 'LNK_IMPORT_ACCOUNTS',
        'acl_action' => 'import',
        'acl_module' => 'Accounts',
        'icon' => 'fa-arrow-circle-o-up',
      ),
    ),
  ),
  'quickcreate' => 
  array (
    'meta' => 
    array (
      'layout' => 'create',
      'label' => 'LNK_NEW_ACCOUNT',
      'visible' => true,
      'order' => 0,
      'icon' => 'fa-plus',
    ),
  ),
  '_hash' => '678e154a07a52d0ad0c00e1446b325bb',
);

