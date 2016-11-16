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
(function(app){app.events.on('app:init',function(){app.plugins.register('ToggleVisibility','view',{events:{'click [data-action=visibility-switcher]':'visibilitySwitcher'},visibilityKey:'visibility',defaultVisibility:'user',onAttach:function(){this.on('init',function(){if(!this.meta.last_state){this.meta.last_state={id:this.dashModel.get('id')+':'+this.name,defaults:{}};}
this._initVisibility();});},_initVisibility:function(){var config=app.metadata.getView(this.module,this.name),visibilityField=_.chain(config.panels).map(function(obj){return obj.fields;}).flatten().findWhere({name:this.visibilityKey}).value();if(!visibilityField){return;}
if(_.contains(this.plugins,'Dashlet')){this.settings.on('change:'+this.visibilityKey,function(model,value){this._setVisibilityLastState(value);},this);this.settings.set(this.visibilityKey,this.getVisibility());}else{if(!this.hasVisibility()){this.setVisibility(this.getVisibility());}}},_setVisibilityLastState:function(visibility){if(!this.meta.last_state.defaults[this.visibilityKey]){this.meta.last_state.defaults[this.visibilityKey]=visibility;}
app.user.lastState.register(this);var specificVisibilityKey=app.user.lastState.key(this.visibilityKey,this);app.user.lastState.set(specificVisibilityKey,visibility);},visibilitySwitcher:function(event){var proto=Object.getPrototypeOf(this),visibility=this.$(event.currentTarget).val();if(visibility===this.getVisibility()){return;}
this.setVisibility(visibility);if(_.isFunction(proto.visibilitySwitcher)){proto.visibilitySwitcher.call(this,event);}
this.loadData();},getVisibility:function(){var visibility=app.user.lastState.get(app.user.lastState.key(this.visibilityKey,this),this);if(!visibility&&this.settings){visibility=this.settings.get(this.visibilityKey);}
return visibility||this.defaultVisibility;},setVisibility:function(visibility){if(_.contains(this.plugins,'Dashlet')){this.settings.set(this.visibilityKey,visibility);}else{this._setVisibilityLastState(visibility);}},hasVisibility:function(){var visibility=app.user.lastState.get(app.user.lastState.key(this.visibilityKey,this),this);if(!visibility&&this.settings){visibility=this.settings.has(this.visibilityKey);}
return!!visibility;}});});})(SUGAR.App);