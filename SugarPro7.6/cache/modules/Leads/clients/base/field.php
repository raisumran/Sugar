<?php
$clientCache['Leads']['base']['field'] = array (
  'convertbutton' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({extendsFrom:\'RowactionField\',initialize:function(options){this._super("initialize",[options]);this.type=\'rowaction\';},_render:function(){var convertMeta=app.metadata.getLayout(\'Leads\',\'convert-main\');var missingRequiredAccess=_.some(convertMeta.modules,function(moduleMeta){return(moduleMeta.required===true&&!app.acl.hasAccess(\'create\',moduleMeta.module));},this);if(this.model.get(\'converted\')||missingRequiredAccess){this.hide();}else{this._super("_render");}},rowActionSelect:function(){var model=app.data.createBean(this.model.module);model.set(app.utils.deepCopy(this.model.attributes));app.drawer.open({layout:"convert",context:{forceNew:true,skipFetch:true,module:\'Leads\',leadsModel:model}});},bindDataChange:function(){if(this.model){this.model.on("change",this.render,this);}}})',
    ),
  ),
  'badge' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({showNoData:false,initialize:function(options){options.def.readonly=true;app.view.Field.prototype.initialize.call(this,options);}})',
    ),
    'templates' => 
    array (
      'detail' => '
{{#if this.model.id}}
{{#eq this.model.attributes.converted "0"}}<span class="label">{{str "LBL_UNCONVERTED" this.module}}</span>{{/eq}}
{{#eq this.model.attributes.converted "1"}}<span class="label label-success">{{str "LBL_CONVERTED" this.module}}</span>{{/eq}}
{{/if}}
',
    ),
  ),
  '_hash' => '9316b236c02a14a1d3cc288db155ae36',
);

