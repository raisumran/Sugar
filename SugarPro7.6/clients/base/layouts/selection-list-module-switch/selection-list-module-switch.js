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
({extendsFrom:'SelectionListLayout',initialize:function(options){this._super('initialize',[options]);this._filterList=this.context.get('filterList');this.context.set('filterList',this._buildModuleSwitchList(this._filterList));this.context.on('selection-list:reload',this.reload,this);},_buildModuleSwitchList:function(modules){var filter=[];_.each(modules,function(module){if(app.acl.hasAccess('list',module)){filter.push({id:module,text:app.lang.get('LBL_MODULE_NAME',module)});}},this);return filter;},reload:function(module){var self=this;_.defer(function(){app.drawer.load({layout:'selection-list-module-switch',context:{module:module,fields:self.context.get('fields'),filterOptions:self.context.get('filterOptions'),filterList:self._filterList}});});}})