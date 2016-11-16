<?php
$clientCache['Products']['base']['menu'] = array (
  'header' => 
  array (
    'meta' => 
    array (
      0 => 
      array (
        'route' => '#Products/create',
        'label' => 'LNK_NEW_PRODUCT',
        'acl_action' => 'create',
        'acl_module' => 'Products',
        'icon' => 'fa-plus',
      ),
      1 => 
      array (
        'route' => '#Products',
        'label' => 'LNK_PRODUCT_LIST',
        'acl_action' => 'list',
        'acl_module' => 'Products',
        'icon' => 'fa-bars',
      ),
      2 => 
      array (
        'route' => '#bwc/index.php?module=Import&action=Step1&import_module=Products&return_module=Products&return_action=index',
        'label' => 'LNK_IMPORT_PRODUCTS',
        'acl_action' => 'import',
        'acl_module' => 'Products',
        'icon' => 'fa-arrow-circle-o-up',
      ),
    ),
  ),
  '_hash' => '70afc6f4941819a8cd6e33c411d36336',
);

