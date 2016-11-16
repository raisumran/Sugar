<?php
$clientCache['Users']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=EditView',
        'label' => 'LNK_NEW_USER',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=EditView&usertype=group&return_module=Users&return_action=DetailView',
        'label' => 'LNK_NEW_GROUP_USER',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'fa-plus',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Users&action=reassignUserRecords',
        'label' => 'LNK_REASSIGN_RECORDS',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'fa-arrows',
      ),
      3 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Users&return_module=Users&return_action=index',
        'label' => 'LNK_IMPORT_USERS',
        'acl_action' => 'admin',
        'acl_module' => 'Users',
        'icon' => 'fa-arrow-circle-o-up',
      ),
    ),
  ),
  '_hash' => '3f39b4d6c3662690d90af8a4d08ffee4',
);

