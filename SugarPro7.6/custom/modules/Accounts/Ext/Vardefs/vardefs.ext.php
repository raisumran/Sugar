<?php
// WARNING: The contents of this file are auto-generated.

//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_website.php

 // created: 2016-12-01 23:39:03
$dictionary['Account']['fields']['website']['len']='255';
$dictionary['Account']['fields']['website']['audited']=false;
$dictionary['Account']['fields']['website']['massupdate']=false;
$dictionary['Account']['fields']['website']['comments']='URL of website for the company';
$dictionary['Account']['fields']['website']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['website']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['website']['merge_filter']='disabled';
$dictionary['Account']['fields']['website']['full_text_search']=array (
  'boost' => '0',
  'enabled' => false,
);
$dictionary['Account']['fields']['website']['calculated']=false;
$dictionary['Account']['fields']['website']['gen']='';
$dictionary['Account']['fields']['website']['link_target']='_self';

 
//Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_test_c.php

 // created: 2016-12-01 23:39:29
$dictionary['Account']['fields']['test_c']['labelValue']='test';
$dictionary['Account']['fields']['test_c']['dependency']='';
$dictionary['Account']['fields']['test_c']['visibility_grid']=array (
  'trigger' => 'account_type',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Analyst' => 
    array (
      0 => 'Call',
      1 => 'Meeting',
      2 => 'Task',
    ),
    'Competitor' => 
    array (
      0 => 'Task',
      1 => 'Email',
      2 => 'Meeting',
    ),
    'Customer' => 
    array (
      0 => 'Meeting',
    ),
    'Integrator' => 
    array (
      0 => 'Task',
    ),
    'Investor' => 
    array (
      0 => 'Call',
      1 => 'Email',
    ),
    'Partner' => 
    array (
      0 => 'Task',
    ),
    'Press' => 
    array (
      0 => 'Email',
    ),
    'Prospect' => 
    array (
      0 => 'Note',
    ),
    'Reseller' => 
    array (
      0 => 'Email',
    ),
    'Other' => 
    array (
      0 => 'Task',
    ),
  ),
);

 