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
({extendsFrom:'RecordView',editAllMode:false,SAVEACTIONS:{SAVE_AND_CREATE:'saveAndCreate',SAVE_AND_VIEW:'saveAndView'},enableDuplicateCheck:false,dupecheckList:null,saveButtonName:'save_button',cancelButtonName:'cancel_button',saveAndCreateButtonName:'save_create_button',saveAndViewButtonName:'save_view_button',restoreButtonName:'restore_button',_viewAlerts:[],hasSubpanelModels:false,alerts:{showInvalidModel:function(){if(!this instanceof app.view.View){app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument'+'an instance of this view.');return;}
var name='invalid-data';this._viewAlerts.push(name);app.alert.show(name,{level:'error',messages:'ERR_RESOLVE_ERRORS'});},showServerError:function(){if(!this instanceof app.view.View){app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument'+'an instance of this view.');return;}
var name='server-error';this._viewAlerts.push(name);app.alert.show(name,{level:'error',messages:'ERR_GENERIC_SERVER_ERROR'});},showSuccessButDeniedAccess:function(){if(!this instanceof app.view.View){app.logger.error('This method should be invoked by Function.prototype.call(), passing in as argument'+'an instance of this view.');return;}
var name='invalid-data';this._viewAlerts.push(name);app.alert.show(name,{level:'warning',messages:'LBL_RECORD_SAVED_ACCESS_DENIED',autoClose:true,autoCloseDelay:9000});}},initialize:function(options){this.plugins=_.union(this.plugins||[],['FindDuplicates']);this.STATE=_.extend({},this.STATE,{CREATE:'create',SELECT:'select',DUPLICATE:'duplicate'});options.meta=_.extend({},app.metadata.getView(null,'create'),options.meta);this._super("initialize",[options]);this.model.off("change",null,this);this.context.lastSaveAction=null;this.context.on('list:dupecheck-list-select-edit:fire',this.editExisting,this);this.meta=_.extend({},app.metadata.getView(this.module,'record'),this.meta);var moduleMetadata=app.metadata.getModule(this.module);this.enableDuplicateCheck=(moduleMetadata&&moduleMetadata.dupCheckEnabled)||false;if(!app.acl.hasAccess('list',this.module)){this.enableDuplicateCheck=false;}
var fields=(moduleMetadata&&moduleMetadata.fields)?moduleMetadata.fields:{};this.model.relatedAttributes=this.model.relatedAttributes||{};var assignedUserField=_.find(fields,function(field){return field.type==='relate'&&(field.name==='assigned_user_id'||field.id_name==='assigned_user_id');});if(assignedUserField){var isDuplicate=this.model.has('assigned_user_id')&&this.model.has('assigned_user_name');if(!isDuplicate){this.model.setDefault({'assigned_user_id':app.user.id,'assigned_user_name':app.user.get('full_name')});}
this.model.relatedAttributes.assigned_user_id=app.user.id;this.model.relatedAttributes.assigned_user_name=app.user.get('full_name');}
this.model.on('error:validation',function(){this.alerts.showInvalidModel.call(this);this.enableButtons();},this);this.on('sugarlogic:initialize',function(){this.model.setDefault(this.model.attributes);},this);},_renderFields:function(){var current=this.action;this.action='create';this._super('_renderFields');this.action=current;},hasUnsavedChanges:function(){if(this.resavingAfterMetadataSync){return false;}
return this.model.isNew()&&!_.isEqual(this.model.getDefault(),this.model.attributes);},handleSync:function(){},delegateButtonEvents:function(){this.context.on('button:'+this.saveButtonName+':click',this.save,this);this.context.on('button:'+this.saveAndCreateButtonName+':click',this.saveAndCreate,this);this.context.on('button:'+this.saveAndViewButtonName+':click',this.saveAndView,this);this.context.on('button:'+this.cancelButtonName+':click',this.cancel,this);this.context.on('button:'+this.restoreButtonName+':click',this.restoreModel,this);},_render:function(){this._super("_render");this.setButtonStates(this.STATE.CREATE);if(this.enableDuplicateCheck){this.renderDupeCheckList();}
app.events.trigger('create:model:changed',false);this.model.on('change',function(){app.events.trigger('create:model:changed',this.hasUnsavedChanges());},this);},save:function(){switch(this.context.lastSaveAction){case this.SAVEACTIONS.SAVE_AND_CREATE:this.saveAndCreate();break;case this.SAVEACTIONS.SAVE_AND_VIEW:this.saveAndView();break;default:this.saveAndClose();}},saveAndClose:function(){this.initiateSave(_.bind(function(){if(app.drawer){app.drawer.close(this.context,this.model);}},this));},cancel:function(){app.events.trigger('create:model:changed',false);this.$el.off();if(app.drawer){app.drawer.close(this.context);this._dismissAllAlerts();}},saveAndCreate:function(){this.context.lastSaveAction=this.SAVEACTIONS.SAVE_AND_CREATE;this.initiateSave(_.bind(function(){this.clear();this.model.set(_.extend(this.model.getDefault(),this.model.relatedAttributes));this.resetDuplicateState();if(this.hasSubpanelModels){_.each(this.context.children,function(child){if(child.get('isCreateSubpanel')){this.context.trigger('subpanel:resetCollection:'+child.get('link'),true);}},this);this.hasSubpanelModels=false;}},this));},saveAndView:function(){this.context.lastSaveAction=this.SAVEACTIONS.SAVE_AND_VIEW;this.initiateSave(_.bind(function(){app.navigate(this.context,this.model);},this));},restoreModel:function(){this.model.clear();if(this._origAttributes){this.model.set(this._origAttributes);this.model.isCopied=true;}
if(this.hasSubpanelModels){_.each(this.context.children,function(child){if(child.get('isCreateSubpanel')){this.context.trigger('subpanel:resetCollection:'+child.get('link'),true);}},this);this.hasSubpanelModels=false;}
this.createMode=true;if(!this.disposed){this.render();}
this.setButtonStates(this.STATE.CREATE);},initiateSave:function(callback){this.disableButtons();async.waterfall([_.bind(this.validateSubpanelModelsWaterfall,this),_.bind(this.validateModelWaterfall,this),_.bind(this.dupeCheckWaterfall,this),_.bind(this.createRecordWaterfall,this)],_.bind(function(error){this.enableButtons();if(error&&error.status==412&&!error.request.metadataRetry){this.handleMetadataSyncError(error);}else if(!error&&!this.disposed){this.context.lastSaveAction=null;callback();}},this));},validateModelWaterfall:function(callback){this.model.doValidate(this.getFields(this.module),function(isValid){callback(!isValid);});},validateSubpanelModelsWaterfall:function(callback){this.hasSubpanelModels=false;_.each(this.context.children,function(child){if(child.get('isCreateSubpanel')){this.hasSubpanelModels=true;this.context.trigger('subpanel:validateCollection:'+child.get('link'),callback,true);}},this);if(!this.hasSubpanelModels){return callback(false);}},dupeCheckWaterfall:function(callback){var success=_.bind(function(collection){if(this.disposed){callback(true);}
if(collection.models.length>0){this.handleDuplicateFound(collection);callback(true);}else{this.resetDuplicateState();callback(false);}},this),error=_.bind(function(e){if(e.status==412&&!e.request.metadataRetry){this.handleMetadataSyncError(e);}else{this.alerts.showServerError.call(this);callback(true);}},this);if(this.skipDupeCheck()||!this.enableDuplicateCheck){callback(false);}else{this.checkForDuplicate(success,error);}},createRecordWaterfall:function(callback){var success=_.bind(function(){var acls=this.model.get('_acl');if(!_.isEmpty(acls)&&acls.access==='no'&&acls.view==='no'){this.alerts.showSuccessButDeniedAccess.call(this);callback(false);}else{this._dismissAllAlerts();app.alert.show('create-success',{level:'success',messages:this.buildSuccessMessage(this.model),autoClose:true,autoCloseDelay:10000,onLinkClick:function(){app.alert.dismiss('create-success');}});callback(false);}},this),error=_.bind(function(e){if(e.status==412&&!e.request.metadataRetry){this.handleMetadataSyncError(e);}else{this.alerts.showServerError.call(this);callback(true);}},this);this.saveModel(success,error);},checkForDuplicate:function(success,error){var options={showAlerts:true,success:success,error:error};this.context.trigger("dupecheck:fetch:fire",this.model,options);},handleDuplicateFound:function(){this.setButtonStates(this.STATE.DUPLICATE);this.dupecheckList.show();},resetDuplicateState:function(){this.setButtonStates(this.STATE.CREATE);this.hideDuplicates();},getCustomSaveOptions:function(options){return{};},saveModel:function(success,error){var self=this,options;options={success:success,error:error,viewed:true,relate:(self.model.link)?true:null,showAlerts:{'process':true,'success':false,'error':false},lastSaveAction:this.context.lastSaveAction};this.applyAfterCreateOptions(options);if(this.hasSubpanelModels){_.each(this.context.children,function(child){if(child.get('isCreateSubpanel')){var childCollection={create:[]};_.each(child.get('collection').models,function(model){childCollection.create.push(model.toJSON())},this)
this.model.set(child.get('link'),childCollection);}},this);}
options=_.extend({},options,self.getCustomSaveOptions(options));self.model.save(null,options);},applyAfterCreateOptions:function(options){var copiedFromModelId=this.context.get('copiedFromModelId');if(copiedFromModelId&&this.model.isCopy()){options.params=options.params||{};options.params.after_create={copy_rel_from:copiedFromModelId};}},buildSuccessMessage:function(model){var modelAttributes,successLabel='LBL_RECORD_SAVED_SUCCESS',successMessageContext;if(model&&model.attributes){modelAttributes=model.attributes;}else{modelAttributes={};successLabel='LBL_RECORD_SAVED';}
successMessageContext=_.extend({module:this.module,moduleSingularLower:this.moduleSingular.toLowerCase()},modelAttributes);return app.lang.get(successLabel,this.module,successMessageContext);},skipDupeCheck:function(){return(this.getCurrentButtonState()===this.STATE.DUPLICATE);},clear:function(){this.model.clear();if(!this.disposed){this.render();}},editExisting:function(model){var origAttributes=this.saveFormData();this.model.clear();this.model.set(this.extendModel(model,origAttributes));this.createMode=false;if(!this.disposed){this.render();}
this.toggleEdit(true);this.hideDuplicates();this.setButtonStates(this.STATE.SELECT);},extendModel:function(newModel,origAttributes){var modelAttributes=_.clone(newModel.attributes);_.each(modelAttributes,function(value,key){if(_.isUndefined(value)||_.isNull(value)||((_.isObject(value)||_.isArray(value)||_.isString(value))&&_.isEmpty(value))){delete modelAttributes[key];}});return _.extend({},origAttributes,modelAttributes);},saveFormData:function(){this._origAttributes=_.clone(this.model.attributes);return this._origAttributes;},setDupeCheckType:function(type){this.context.set('dupelisttype',type);},renderDupeCheckList:function(){this.setDupeCheckType('dupecheck-list-edit');this.context.set('collection',this.createDuplicateCollection(this.model));if(_.isNull(this.dupecheckList)){this.dupecheckList=app.view.createLayout({context:this.context,name:'create-dupecheck',module:this.module});this.addToLayoutComponents(this.dupecheckList);}
this.$('.headerpane').after(this.dupecheckList.$el);this.dupecheckList.hide();this.dupecheckList.render();},addToLayoutComponents:function(component){this.layout._components.push(component);},hideDuplicates:function(){if(this.dupecheckList){this.dupecheckList.hide();}},disableButtons:function(){this.toggleButtons(false);},enableButtons:function(){this.toggleButtons(true);},registerShortcuts:function(){this._super('registerShortcuts');app.shortcuts.register('Create:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name='+this.saveButtonName+']');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.get(0).click();}},this,true);app.shortcuts.register('Create:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name='+this.cancelButtonName+']');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.get(0).click();}},this,true);},_dismissAllAlerts:function(){if(_.isEmpty(this._viewAlerts)){return;}
_.each(_.uniq(this._viewAlerts),function(alert){app.alert.dismiss(alert);});}})