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
var AdamEvent=function(options){AdamShape.call(this,options);this.evn_uid=null;this.evn_type=null;this.evn_marker=null;this.evn_is_interrupting=true;this.evn_attached_to=null;this.evn_cancel_activity=false;this.evn_activity_ref=null;this.evn_wait_for_completion=false;this.evn_error_name=null;this.evn_error_code=null;this.evn_escalation_name=null;this.evn_escalation_code=null;this.evn_condition=null;this.evn_message=null;this.evn_operation_name=null;this.evn_operation_implementation=null;this.evn_time_date=null;this.evn_time_cycle=null;this.evn_time_duration=null;this.evn_behavior=null;this.numberRelativeToActivity=0;AdamEvent.prototype.initObject.call(this,options);};AdamEvent.prototype=new AdamShape();AdamEvent.prototype.type="AdamEvent";AdamEvent.prototype.initObject=function(options){var defaults={evn_is_interrupting:true,evn_message:'',evn_marker:'EMPTY',evn_type:'start',evn_behavior:'catch'};$.extend(true,defaults,options);this.setEventUid(defaults.evn_uid).setEventType(defaults.evn_type).setEventMarker(defaults.evn_marker).setEventMessage(defaults.evn_message).setBehavior(defaults.evn_behavior).setCondition(defaults.evn_condition).setAttachedTo(defaults.evn_attached_to).setIsInterrupting(defaults.evn_is_interrupting);if(defaults.evn_name){this.setName(defaults.evn_name);}};AdamEvent.prototype.setEventUid=function(id){this.evn_uid=id;return this;};AdamEvent.prototype.setEventType=function(type){var defaultTypes={start:'START',end:'END',intermediate:'INTERMEDIATE',boundary:'BOUNDARY'};if(defaultTypes[type]){this.evn_type=defaultTypes[type];}
return this;};AdamEvent.prototype.setEventMarker=function(marker){this.evn_marker=marker;return this;};AdamEvent.prototype.setIsInterrupting=function(value){if(value instanceof Boolean){this.evn_is_interrupting=value;}
return this;};AdamEvent.prototype.setBehavior=function(behavior){var defaultBehaviors={"catch":'CATCH',"throw":'THROW'};if(defaultBehaviors[behavior]){this.evn_behavior=defaultBehaviors[behavior];}
return this;};AdamEvent.prototype.setAttachedTo=function(value,cancel){if(cancel!==undefined){if(cancel instanceof Boolean){this.evn_cancel_activity=cancel;}}else{this.evn_cancel_activity=this.evn_cancel_activity||false;}
this.evn_attached_to=value;return this;};AdamEvent.prototype.destroy=function(){if(this.getType()==='AdamEvent'&&this.getEventType()==='BOUNDARY'){if(this.parent.boundaryPlaces&&this.numberRelativeToActivity!==null){this.parent.boundaryPlaces.get(this.numberRelativeToActivity).available=true;this.parent.boundaryArray.remove(this);}}
return this;};AdamEvent.prototype.setEventMessage=function(msg){this.evn_message=msg;return this;};AdamEvent.prototype.setCondition=function(value){this.evn_condition=value;return this;};AdamEvent.prototype.setCompensationActivity=function(activity,wait){if(wait){if(wait instanceof Boolean){this.evn_wait_for_completion=wait;}}else{this.evn_wait_for_completion=this.evn_wait_for_completion||false;}
this.evn_activity_ref=activity;return this;};AdamEvent.prototype.setEventError=function(name,code){this.evn_error_name=name;this.evn_error_code=code;return this;};AdamEvent.prototype.setEventEscalation=function(name,code){this.evn_escalation_name=name;this.evn_escalation_code=code;return this;};AdamEvent.prototype.setEventOperation=function(name,implementation){this.evn_operation_name=name;this.evn_operation_implementation=implementation;return this;};AdamEvent.prototype.setEventTimer=function(date,cycle,duration){this.evn_time_date=date;this.evn_time_cycle=cycle;this.evn_time_duration=duration;return this;};AdamEvent.prototype.setDefaultFlow=function(value){AdamShape.prototype.setDefaultFlow.call(this,value);this.evn_default_flow=value;return this;};AdamEvent.prototype.getDBObject=function(){var container,element_id,name=this.getName();if(this.evn_type==='BOUNDARY'){container='bpmnActivity';element_id=this.evn_attached_to;}else{container='bpmnDiagram';element_id=this.canvas.dia_id;}
return{evn_uid:this.evn_uid,evn_name:name,evn_type:this.evn_type,evn_marker:this.evn_marker,evn_is_interrupting:this.evn_is_interrupting,evn_attached_to:this.evn_attached_to,evn_cancel_activity:this.evn_cancel_activity,evn_activity_ref:this.evn_activity_ref,evn_wait_for_completion:this.evn_wait_for_completion,evn_error_name:this.evn_error_name,evn_error_code:this.evn_error_code,evn_escalation_name:this.evn_escalation_name,evn_escalation_code:this.evn_escalation_code,evn_condition:this.evn_condition,evn_message:this.evn_message,evn_operation_name:this.evn_operation_name,evn_operation_implementation:this.evn_operation_implementation,evn_time_date:this.evn_time_date,evn_time_cycle:this.evn_time_cycle,evn_time_duration:this.evn_time_duration,evn_behavior:this.evn_behavior,bou_x:this.x,bou_y:this.y,bou_width:this.width,bou_height:this.height,bou_container:container,element_id:element_id};};AdamEvent.prototype.attachToActivity=function(){var numBou=this.parent.getAvailableBoundaryPlace();if(numBou!==false){this.parent.setBoundary(this,numBou);this.setNumber(numBou);}else{this.destroy();this.saveAndDestroy();}
return this;};AdamEvent.prototype.setNumber=function(num){this.numberRelativeToActivity=num;return this;};AdamEvent.prototype.createHTML=function(){AdamShape.prototype.createHTML.call(this);if(this.evn_type==="BOUNDARY"){this.style.addClasses(['adam_boundary_event']);}else{this.style.addClasses(['adam_event','adam_droppable']);}
return this.html;};AdamEvent.prototype.getEventType=function(){return this.evn_type;};AdamEvent.prototype.getEventMarker=function(){return this.evn_marker;};AdamEvent.prototype.getEventMessage=function(){return this.evn_message;};AdamEvent.prototype.getContextMenu=function(){var deleteAction,leadAction,opportunityAction,documentAction,otherAction,msgCatchAction,msgThrowAction,timerAction,endEmptyAction,endMessageAction,endTerminateAction,boundaryMessageAction,boundaryTimerAction,startAction,intermediateAction,endAction,modulesMenu,typeMenu,self=this,configureAction,mitems=[];configureAction=this.createConfigureAction();startAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_START_EVENT'),handler:function(){self.updateEventType('START');},disabled:(this.evn_type==='START')});intermediateAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_INTERMEDIATE_EVENT'),handler:function(){self.updateEventType('INTERMEDIATE');},disabled:(this.evn_type==='INTERMEDIATE')});endAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_END_EVENT'),handler:function(){self.updateEventType('END');},disabled:(this.evn_type==='END')});typeMenu={items:[startAction,intermediateAction,endAction]};deleteAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_DELETE'),cssStyle:'adam-menu-icon-delete',handler:function(){var shape;shape=self.canvas.customShapes.find('id',self.id);if(shape){shape.canvas.emptyCurrentSelection();shape.canvas.addToSelection(shape);shape.canvas.removeElements();}}});leadAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_LEADS'),cssStyle:'adam-menu-icon-event-leads',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_message:'Leads',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='START')&&(this.evn_message==='Leads')});opportunityAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_OPPORTUNITIES'),cssStyle:'adam-menu-icon-event-opportunities',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_message:'Opportunities',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='START')&&(this.evn_message==='Opportunities')});documentAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_DOCUMENTS'),cssStyle:'adam-menu-icon-event-documents',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_message:'Documents',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='START')&&(this.evn_message==='Documents')});otherAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_OTHER_MODULES'),handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_message:'',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='START')&&(this.evn_message===''||this.evn_message===null)});msgCatchAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE'),cssStyle:'adam-menu-icon-event-recive-message',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='INTERMEDIATE')});msgThrowAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE'),cssStyle:'adam-menu-icon-event-send-message',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_behavior:'THROW'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='THROW')&&(this.evn_type==='INTERMEDIATE')});timerAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_TIMER'),cssStyle:'adam-menu-icon-event-timer',handler:function(){self.updateEventMarker({evn_marker:'TIMER',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='TIMER')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='INTERMEDIATE')});endEmptyAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_DO_NOTHING'),handler:function(){self.updateEventMarker({evn_marker:'EMPTY',evn_behavior:'THROW'});},disabled:(this.evn_marker==='EMPTY')&&(this.evn_behavior==='THROW')&&(this.evn_type==='END')});endMessageAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_SEND_MESSAGE'),cssStyle:'adam-menu-icon-event-send-message',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_behavior:'THROW'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='THROW')&&(this.evn_type==='END')});endTerminateAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_TERMINATE_PROCESS'),cssStyle:'adam-menu-icon-event-terminate-process',handler:function(){self.updateEventMarker({evn_marker:'TERMINATE',evn_behavior:'THROW'});},disabled:(this.evn_marker==='TERMINATE')&&(this.evn_behavior==='THROW')&&(this.evn_type==='END')});boundaryMessageAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_RECEIVE_MESSAGE'),cssStyle:'adam-menu-icon-event-recive-message',handler:function(){self.updateEventMarker({evn_marker:'MESSAGE',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='MESSAGE')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='BOUNDARY')});boundaryTimerAction=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_TIMER'),cssStyle:'adam-menu-icon-event-timer',handler:function(){self.updateEventMarker({evn_marker:'TIMER',evn_behavior:'CATCH'});},disabled:(this.evn_marker==='TIMER')&&(this.evn_behavior==='CATCH')&&(this.evn_type==='BOUNDARY')});modulesMenu={label:'',menu:{items:[]}};switch(this.evn_type){case'START':modulesMenu.label=translate('LBL_PMSE_CONTEXT_MENU_LISTEN');modulesMenu.menu.items.push(leadAction);modulesMenu.menu.items.push(opportunityAction);modulesMenu.menu.items.push(documentAction);modulesMenu.menu.items.push(otherAction);break;case'INTERMEDIATE':modulesMenu.label=translate('LBL_PMSE_CONTEXT_MENU_ACTION');modulesMenu.menu.items.push(msgCatchAction);modulesMenu.menu.items.push(msgThrowAction);modulesMenu.menu.items.push(timerAction);break;case'END':modulesMenu.label=translate('LBL_PMSE_CONTEXT_MENU_RESULT');modulesMenu.menu.items.push(endEmptyAction);modulesMenu.menu.items.push(endMessageAction);modulesMenu.menu.items.push(endTerminateAction);break;case'BOUNDARY':modulesMenu.label=translate('LBL_PMSE_CONTEXT_MENU_EVENT');modulesMenu.menu.items.push(boundaryMessageAction);modulesMenu.menu.items.push(boundaryTimerAction);break;}
modulesMenu.icon='adam-menu-icon-convert';mitems.push(configureAction,{jtype:'separator'});if(this.evn_type!=='START'){mitems.push(modulesMenu,{jtype:'separator'});}
mitems.push(deleteAction);return{items:mitems};};AdamEvent.prototype.updateEventType=function(newType){var layer1,layer2,updateCommand,newChanges;layer1=this.getLayers().get(0);layer2=this.getLayers().get(1);switch(newType){case'START':newChanges={evn_type:newType,evn_behavior:'CATCH',evn_marker:'MESSAGE',evn_message:''};break;case'INTERMEDIATE':newChanges={evn_type:newType,evn_behavior:'CATCH',evn_marker:'TIMER',evn_message:''};break;case'END':newChanges={evn_type:newType,evn_behavior:'THROW',evn_marker:'TERMINATE',evn_message:''};break;}
updateCommand=new AdamShapeLayerCommand(this,{layers:[layer1,layer2],type:'changeeventtype',changes:newChanges});updateCommand.execute();this.canvas.commandStack.add(updateCommand);return this;};AdamEvent.prototype.updateEventMarker=function(options){var layer,updateCommand;layer=this.getLayers().get(1);updateCommand=new AdamShapeLayerCommand(this,{layers:[layer],type:'changeeventmarker',changes:options});updateCommand.execute();this.canvas.commandStack.add(updateCommand);return this;};AdamEvent.prototype.createConfigureAction=function(){var action,w,f,proxy,items,wWidth,wHeight,changeModule,initialValue=null,disabled=false,startCriteria=null,oldModule,newModule,mp,cancelInformation,actiontimerType,durationRadio,i,repeatEveryCombo,everyOptions,repeatEveryNumberCombo,cyclicDate,fixedRadio,cyclicRadio,incrementWasClicked=false,durationTextField,unitComboBox,fixedDate,incrementCkeck,durationTextField2,unitComboBox2,operationCombo,criteria,root=this,hiddenParams,hiddenFn,callback={},ddlModules,ddlEmailTemplate,aTemplate,criteriaField,emailTemplates,datecriteria;proxy=new SugarProxy({url:'pmse_Project/EventDefinition/'+this.id,uid:this.id,callback:null});changeModule=false;switch(this.evn_message){case'Leads':initialValue='Leads';break;case'Opportunities':initialValue='Opportunities';break;case'Documents':initialValue='Documents';break;}
switch(this.evn_type){case'START':criteriaField=new CriteriaField({name:'evn_criteria',label:translate('LBL_PMSE_FORM_LABEL_CRITERIA'),required:false,fieldWidth:414,fieldHeight:80,dateFormat:App.date.getUserDateFormat(),timeFormat:App.user.getPreference("timepref"),decimalSeparator:SUGAR.App.config.defaultDecimalSeparator,numberGroupingSeparator:SUGAR.App.config.defaultNumberGroupingSeparator,operators:{logic:true,group:true},constant:false});ddlModules=new ComboboxField({jtype:'combobox',name:'evn_module',label:translate('LBL_PMSE_FORM_LABEL_MODULE'),required:true,readOnly:!changeModule,initialValue:initialValue,helpTooltip:{message:translate('LBL_PMSE_FORM_TOOLTIP_EVENT_MODULE')},change:function(combo,newValue,oldValue){if(criteriaField.getItems().length>0){mp.show(newValue,oldValue);}else{criteriaField.setModuleEvaluation({dataURL:"pmse_Project/CrmData/related/"+this.value,dataRoot:'result',textField:"text",valueField:"value",fieldDataURL:'pmse_Project/CrmData/fields/{{MODULE}}',fieldDataRoot:'result',fieldTextField:"text",fieldValueField:"value",fieldTypeField:"type"})}},related:'modules',proxy:new SugarProxy({url:'pmse_Project/CrmData/related_modules/'+PROJECT_MODULE,uid:PROJECT_MODULE,callback:null})});items=[ddlModules,{jtype:'combobox',name:'evn_params',label:translate('LBL_PMSE_FORM_LABEL_APPLIES_TO'),options:[{text:translate('LBL_PMSE_FORM_OPTION_SELECT'),value:''},{text:translate('LBL_PMSE_FORM_OPTION_NEW_RECORDS_ONLY'),value:'new'},{text:translate('LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY'),value:'updated'},{text:translate('LBL_PMSE_FORM_OPTION_UPDATED_RECORDS_ONLY_AU'),value:'allupdates'}],required:true,helpTooltip:{message:translate('LBL_PMSE_FORM_TOOLTIP_WHEN_START_EVENT')}},criteriaField];wHeight=280;wWidth=690;callback={loaded:function(data){root.canvas.emptyCurrentSelection();ddlModules.proxy.getData(null,{success:function(modules){ddlModules.setValue(root.evn_message||(modules.result[0].value||null));oldModule=data.evn_module;criteriaField.setModuleEvaluation({dataURL:"pmse_Project/CrmData/related/"+ddlModules.value,dataRoot:'result',textField:"text",valueField:"value",fieldDataURL:'pmse_Project/CrmData/fields/{{MODULE}}',fieldDataRoot:'result',fieldTextField:"text",fieldValueField:"value",fieldTypeField:"type"}).setUserEvaluation({defaultUsersDataURL:'pmse_Project/CrmData/defaultUsersList',defaultUsersDataRoot:'result',defaultUsersValueField:"value",userRolesDataURL:'pmse_Project/CrmData/rolesList',userRolesDataRoot:'result',usersDataURL:'pmse_Project/CrmData/users',usersDataRoot:'result',usersValueField:"value"});App.alert.dismiss('upload');w.html.style.display='inline';}});}};mp={_messagePanel:null,show:function(comboNewValue,comboOldValue){this._messagePanel=new MessagePanel({title:"Module change warning",wtype:'Confirm',message:translate('LBL_PMSE_MESSAGE_REMOVE_ALL_START_CRITERIA'),buttons:[{jtype:'normal',caption:translate('LBL_PMSE_BUTTON_OK'),handler:function(){criteriaField.clear().setModuleEvaluation({dataURL:"pmse_Project/CrmData/related/"+comboNewValue,dataRoot:'result',textField:"text",valueField:"value",fieldDataURL:'pmse_Project/CrmData/fields/{{MODULE}}',fieldDataRoot:'result',fieldTextField:"text",fieldValueField:"value",fieldTypeField:"type"});mp.hide();}},{jtype:'normal',caption:translate('LBL_PMSE_BUTTON_CANCEL'),handler:function(){ddlModules.setValue(comboOldValue);mp.hide();}}]});this._messagePanel.show();},hide:function(){if(this._messagePanel){this._messagePanel.hide();}}};break;case'INTERMEDIATE':if(this.evn_marker==='MESSAGE'){if(this.evn_behavior==='THROW'){ddlEmailTemplate=new ComboboxField({jtype:'combobox',required:true,name:'evn_criteria',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE'),proxy:new SugarProxy({url:'pmse_Project/CrmData/emailtemplates',uid:"",callback:null})});ddlModules=new ComboboxField({jtype:'combobox',required:true,name:'evn_module',value:initialValue,initialValue:initialValue,readOnly:true,label:translate('LBL_PMSE_FORM_LABEL_MODULE'),proxy:new SugarProxy({url:'pmse_Project/CrmData/modules',uid:"",callback:null}),change:function(){ddlEmailTemplate.proxy.uid=this.value;ddlEmailTemplate.proxy.url='pmse_Project/CrmData/emailtemplates/'+this.value;ddlEmailTemplate.removeOptions();aTemplate=[{'text':translate('LBL_PMSE_FORM_OPTION_SELECT'),'value':''}];ddlEmailTemplate.proxy.getData(null,{success:function(emailTemplates){aTemplate=aTemplate.concat(emailTemplates.result);ddlEmailTemplate.setOptions(aTemplate);}});}});hiddenParams=new HiddenField({name:'evn_params'});hiddenFn=function(){var parentForm=this.parent,address={};address.to=parentForm.items[2].getObject();address.cc=parentForm.items[3].getObject();address.bcc=parentForm.items[4].getObject();hiddenParams.setValue(JSON.stringify(address));};items=[ddlModules,ddlEmailTemplate,{jtype:'emailpicker',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_TO'),name:'address_to',required:true,submit:false,fieldWidth:350,change:hiddenFn,suggestionItemName:'fullName',suggestionItemAddress:'emailAddress',suggestionDataURL:"pmse_Project/CrmData/emails/{$0}",suggestionDataRoot:"result",teams:project.getMetadata('teams')||[]},{jtype:'emailpicker',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_CC'),name:'address_cc',required:false,submit:false,fieldWidth:350,change:hiddenFn,suggestionItemName:'fullName',suggestionItemAddress:'emailAddress',suggestionDataURL:"pmse_Project/CrmData/emails/{$0}",suggestionDataRoot:"result",teams:project.getMetadata('teams')||[]},{jtype:'emailpicker',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_BCC'),name:'address_bcc',required:false,submit:false,fieldWidth:350,change:hiddenFn,suggestionItemName:'fullName',suggestionItemAddress:'emailAddress',suggestionDataURL:"pmse_Project/CrmData/emails/{$0}",suggestionDataRoot:"result",teams:project.getMetadata('teams')||[]},hiddenParams];wHeight=380;wWidth=600;callback={loaded:function(data){var params=null,i,emailPickerFields=[],dataSource,auxProxy;root.canvas.emptyCurrentSelection();if(data&&data.evn_params){try{params=JSON.parse(data.evn_params);}catch(e){}
if(params){hiddenParams.setValue(data.evn_params);for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':f.items[i].setValue(params.to);emailPickerFields.push(i);break;case'address_cc':f.items[i].setValue(params.cc);emailPickerFields.push(i);break;case'address_bcc':f.items[i].setValue(params.bcc);emailPickerFields.push(i);break;}}}}
ddlModules.proxy.getData(null,{success:function(params){if(params&&params.result){ddlModules.setOptions(params.result);ddlModules.setValue(data.evn_module||PROJECT_MODULE);}
ddlEmailTemplate.proxy.uid=ddlModules.value;ddlEmailTemplate.proxy.url='pmse_Project/CrmData/emailtemplates/'+ddlModules.value;aTemplate=[{'text':translate('LBL_PMSE_FORM_OPTION_SELECT'),'value':''}];ddlEmailTemplate.proxy.getData(null,{success:function(params2){aTemplate=aTemplate.concat(params2.result);ddlEmailTemplate.setOptions(aTemplate);if(params2&&params2.result){ddlEmailTemplate.setValue(data.evn_criteria||((params2.result[0]&&params2.result[0].value)||null));}
App.alert.dismiss('upload');w.html.style.display='inline';}});}});project.addMetadata("teams",{dataURL:project.getMetadata("teamsDataSource").url,dataRoot:project.getMetadata("teamsDataSource").root,success:function(data){var i;if(emailPickerFields.length){for(i=0;i<emailPickerFields.length;i+=1){f.items[emailPickerFields[i]].setTeamTextField("text");f.items[emailPickerFields[i]].setTeams(data);}}else{for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':case'address_cc':case'address_bcc':f.items[i].setTeamTextField("text");f.items[i].setTeams(data);break;}}}}});project.addMetadata("roles",{dataURL:'pmse_Project/CrmData/rolesList',dataRoot:"result",success:function(data){var i;if(emailPickerFields.length){for(i=0;i<emailPickerFields.length;i+=1){f.items[emailPickerFields[i]].setRoleTextField("text");f.items[emailPickerFields[i]].setRoles(data);}}else{for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':case'address_cc':case'address_bcc':f.items[i].setRoleTextField("text");f.items[i].setRoles(data);break;}}}}});auxProxy=new SugarProxy({url:'pmse_Project/CrmData/related/'+PROJECT_MODULE});auxProxy.getData({cardinality:'one'},{success:function(data){var i;data=data.result;data.unshift({value:"",text:"Select..."});if(emailPickerFields.length){for(i=0;i<emailPickerFields.length;i+=1){f.items[emailPickerFields[i]].setModules(data);}}else{for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':case'address_cc':case'address_bcc':f.items[i].setModules(data);break;}}}}});},submit:function(data){}};}else{items=[{jtype:'criteria',name:'evn_criteria',label:translate('LBL_PMSE_FORM_LABEL_CRITERIA'),required:false,fieldWidth:414,operators:{logic:true,group:true},constant:false,evaluation:{module:{dataURL:"pmse_Project/CrmData/related/"+PROJECT_MODULE,dataRoot:'result',fieldDataURL:'pmse_Project/CrmData/fields/{{MODULE}}',fieldDataRoot:'result'},user:{defaultUsersDataURL:"pmse_Project/CrmData/defaultUsersList",defaultUsersDataRoot:"result",userRolesDataURL:"pmse_Project/CrmData/rolesList",userRolesDataRoot:"result",usersDataURL:"pmse_Project/CrmData/users",usersDataRoot:"result"}},decimalSeparator:SUGAR.App.config.defaultDecimalSeparator,numberGroupingSeparator:SUGAR.App.config.defaultNumberGroupingSeparator,dateFormat:App.date.getUserDateFormat(),timeFormat:App.user.getPreference("timepref")}];wHeight=185;wWidth=690;callback={loaded:function(data){root.canvas.emptyCurrentSelection();App.alert.dismiss('upload');w.html.style.display='inline';}};}}
if(this.evn_marker==='TIMER'){actiontimerType=new HiddenField({name:'evn_timer_type'});durationTextField=new NumberField({jtype:'text',name:'evn_duration_criteria',label:translate('LBL_PMSE_FORM_LABEL_DURATION'),required:true,helpTooltip:{message:translate('LBL_PMSE_FORM_TOOLTIP_DURATION')},fieldWidth:'50px'});unitComboBox=new ComboboxField({name:'evn_duration_params',label:translate('LBL_PMSE_FORM_LABEL_UNIT'),options:[{text:translate('LBL_PMSE_FORM_OPTION_DAYS'),value:'day'},{text:translate('LBL_PMSE_FORM_OPTION_HOURS'),value:'hour'},{text:translate('LBL_PMSE_FORM_OPTION_MINUTES'),value:'minute'}],initialValue:'hour'});everyOptions=[];for(i=1;i<=30;i+=1){everyOptions.push({text:translate(i),value:i});}
repeatEveryNumberCombo=new ComboboxField({name:'evn_cyclic_repeat_every',label:translate('LBL_PMSE_LABEL_REPEATSEVERY'),options:everyOptions,initialValue:1,required:true});cyclicDate=new DateField({name:'evn_cyclic_date',label:translate('LBL_PMSE_LABEL_BEGINS'),required:true,fieldWidth:'100px',readOnly:true});durationRadio=new RadiobuttonField({jtype:'radio',name:'evn_timer_type',label:translate('LBL_PMSE_FORM_LABEL_DURATION'),value:true,labelAlign:'right',onClick:function(e,ui){actiontimerType.setValue('duration');durationTextField.enable();unitComboBox.enable();datecriteria.disable();datecriteria.clear();datecriteria.isValid();}});fixedRadio=new RadiobuttonField({jtype:'radio',name:'evn_timer_type',label:translate('LBL_PMSE_FORM_LABEL_FIXED_DATE'),reverse:true,labelAlign:'right',onClick:function(e,ui){actiontimerType.setValue('fixed date');durationTextField.disable();unitComboBox.disable();datecriteria.enable();}});datecriteria=new CriteriaField({name:'evn_criteria',label:translate('LBL_PMSE_FORM_LABEL_CRITERIA'),required:false,fieldWidth:414,fieldHeight:80,decimalSeparator:SUGAR.App.config.defaultDecimalSeparator,numberGroupingSeparator:SUGAR.App.config.defaultNumberGroupingSeparator,operators:{arithmetic:['+','-']},constant:{datetime:true,timespan:true},variable:{dataURL:project.getMetadata("fieldsDataSource").url.replace("{MODULE}",project.process_definition.pro_module),dataRoot:project.getMetadata("fieldsDataSource").root,dataFormat:"hierarchical",dataChildRoot:"fields",textField:"text",valueField:"value",typeField:"type",typeFilter:['Date','Datetime'],moduleTextField:"text",moduleValueField:"value"},dateFormat:App.date.getUserDateFormat(),timeFormat:App.user.getPreference("timepref")});cyclicRadio=new RadiobuttonField({jtype:'radio',name:'evn_timer_type',label:translate('LBL_PMSE_LABEL_CYCLIC'),reverse:true,labelAlign:'right',onClick:function(e,ui){actiontimerType.setValue('cyclic');durationTextField.disable();unitComboBox.disable();}});items=[actiontimerType,durationRadio,durationTextField,unitComboBox,fixedRadio,datecriteria];wHeight=450;wWidth=690;callback={loaded:function(data){root.canvas.emptyCurrentSelection();switch(data.evn_params){case'fixed date':durationRadio.setValue(false);fixedRadio.setValue(true);actiontimerType.setValue('fixed date');durationTextField.disable();unitComboBox.disable();datecriteria.enable();break;case'cyclic':actiontimerType.setValue('cyclic');durationTextField.disable();unitComboBox.disable();break;default:actiontimerType.setValue('duration');durationRadio.setValue(true);fixedRadio.setValue(false);durationTextField.enable();durationTextField.setValue(data.evn_criteria||'');unitComboBox.enable();unitComboBox.setValue(data.evn_params||'minute');datecriteria.disable();break;}
App.alert.dismiss('upload');w.html.style.display='inline';},submit:function(data){}};}
break;case'END':if(this.evn_marker==='MESSAGE'){ddlEmailTemplate=new ComboboxField({jtype:'combobox',name:'evn_criteria',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_TEMPLATE'),proxy:new SugarProxy({url:'pmse_Project/CrmData/emailtemplates',uid:"",callback:null})});ddlModules=new ComboboxField({jtype:'combobox',required:true,name:'evn_module',initialValue:initialValue,readOnly:true,label:translate('LBL_PMSE_FORM_LABEL_MODULE'),proxy:new SugarProxy({url:'pmse_Project/CrmData/modules',uid:"",callback:null}),change:function(){ddlEmailTemplate.proxy.uid=this.value;ddlEmailTemplate.proxy.url='pmse_Project/CrmData/emailtemplates/'+this.value;ddlEmailTemplate.removeOptions();aTemplate=[{'text':translate('LBL_PMSE_FORM_OPTION_SELECT'),'value':''}];ddlEmailTemplate.proxy.getData(null,{success:function(emailTemplates){aTemplate=aTemplate.concat(emailTemplates.result);ddlEmailTemplate.setOptions(aTemplate);}});}});hiddenParams=new HiddenField({name:'evn_params'});hiddenFn=function(){var parentForm=this.parent,address={};address.to=parentForm.items[2].getObject();address.cc=parentForm.items[3].getObject();address.bcc=parentForm.items[4].getObject();hiddenParams.setValue(JSON.stringify(address));};items=[ddlModules,ddlEmailTemplate,{jtype:'emailpicker',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_TO'),name:'address_to',required:true,submit:false,fieldWidth:350,change:hiddenFn,suggestionItemName:'fullName',suggestionItemAddress:'emailAddress',suggestionDataURL:"pmse_Project/CrmData/emails/{$0}",suggestionDataRoot:"result",teams:project.getMetadata('teams')||[]},{jtype:'emailpicker',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_CC'),name:'address_cc',required:false,submit:false,fieldWidth:350,change:hiddenFn,suggestionItemName:'fullName',suggestionItemAddress:'emailAddress',suggestionDataURL:"pmse_Project/CrmData/emails/{$0}",suggestionDataRoot:"result",teams:project.getMetadata('teams')||[]},{jtype:'emailpicker',label:translate('LBL_PMSE_FORM_LABEL_EMAIL_BCC'),name:'address_bcc',required:false,submit:false,fieldWidth:350,change:hiddenFn,suggestionItemName:'fullName',suggestionItemAddress:'emailAddress',suggestionDataURL:"pmse_Project/CrmData/emails/{$0}",suggestionDataRoot:"result",teams:project.getMetadata('teams')||[]},hiddenParams];wHeight=380;wWidth=600;callback={loaded:function(data){var params=null,i,emailPickerFields=[],dataSource,auxProxy;root.canvas.emptyCurrentSelection();if(data&&data.evn_params){try{params=JSON.parse(data.evn_params);}catch(e){}
if(params){hiddenParams.setValue(data.evn_params);for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':f.items[i].setValue(params.to);emailPickerFields.push(i);break;case'address_cc':f.items[i].setValue(params.cc);emailPickerFields.push(i);break;case'address_bcc':f.items[i].setValue(params.bcc);emailPickerFields.push(i);break;}}}}
ddlModules.proxy.getData(null,{success:function(params){if(params&&params.result){ddlModules.setOptions(params.result);ddlModules.setValue(data.evn_module||((params.result[0]&&params.result[0].value)||null));}
ddlEmailTemplate.proxy.uid=ddlModules.value;ddlEmailTemplate.proxy.url='pmse_Project/CrmData/emailtemplates/'+ddlModules.value;aTemplate=[{'text':translate('LBL_PMSE_FORM_OPTION_SELECT'),'value':''}];ddlEmailTemplate.proxy.getData(null,{success:function(params){aTemplate=aTemplate.concat(params.result);ddlEmailTemplate.setOptions(aTemplate);App.alert.dismiss('upload');w.html.style.display='inline';}});}});project.addMetadata("teams",{dataURL:project.getMetadata("teamsDataSource").url,dataRoot:project.getMetadata("teamsDataSource").root,success:function(data){var i;if(emailPickerFields.length){for(i=0;i<emailPickerFields.length;i+=1){f.items[emailPickerFields[i]].setTeamTextField("text");f.items[emailPickerFields[i]].setTeams(data);}}else{for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':case'address_cc':case'address_bcc':f.items[i].setTeamTextField("text");f.items[i].setTeams(data);break;}}}}});project.addMetadata("roles",{dataURL:'pmse_Project/CrmData/rolesList',dataRoot:"result",success:function(data){var i;if(emailPickerFields.length){for(i=0;i<emailPickerFields.length;i+=1){f.items[emailPickerFields[i]].setRoleTextField("text");f.items[emailPickerFields[i]].setRoles(data);}}else{for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':case'address_cc':case'address_bcc':f.items[i].setRoleTextField("text");f.items[i].setRoles(data);break;}}}}});auxProxy=new SugarProxy({url:'pmse_Project/CrmData/related/'+PROJECT_MODULE});auxProxy.getData({cardinality:'one'},{success:function(data){var i;data=data.result;data.unshift({value:"",text:"Select..."});if(emailPickerFields.length){for(i=0;i<emailPickerFields.length;i+=1){f.items[emailPickerFields[i]].setModules(data);}}else{for(i=0;i<f.items.length;i+=1){switch(f.items[i].name){case'address_to':case'address_cc':case'address_bcc':f.items[i].setModules(data);break;}}}}});},submit:function(data){}};}
break;}
f=new Form({proxy:proxy,closeContainerOnSubmit:true,items:items,buttons:[{jtype:'submit',caption:translate('LBL_PMSE_BUTTON_SAVE'),cssClasses:['btn','btn-primary']},{jtype:'normal',caption:translate('LBL_PMSE_BUTTON_CANCEL'),handler:function(){$('.hasDatepicker').datepicker('hide');if(f.isDirty()){cancelInformation=new MessagePanel({title:"Confirm",wtype:'Confirm',message:translate('LBL_PMSE_MESSAGE_CANCEL_CONFIRM'),buttons:[{jtype:'normal',caption:translate('LBL_PMSE_BUTTON_YES'),handler:function(){cancelInformation.close();w.close();}},{jtype:'normal',caption:translate('LBL_PMSE_BUTTON_NO'),handler:function(){cancelInformation.close();}}]});cancelInformation.show();}else{w.close();}},cssClasses:['btn btn-invisible btn-link']}],callback:callback,language:PMSE_DESIGNER_FORM_TRANSLATIONS});w=new Window({width:wWidth,height:wHeight,modal:true,title:translate('LBL_PMSE_FORM_TITLE_LABEL_EVENT')+': '+this.getName()});w.addPanel(f);if(this.evn_type==='BOUNDARY'){disabled=true;}
if(this.evn_type==='END'&&this.evn_marker!=='MESSAGE'){disabled=true;}
action=new Action({text:translate('LBL_PMSE_CONTEXT_MENU_SETTINGS'),cssStyle:'adam-menu-icon-configure',handler:function(){root.canvas.project.save();w.show();w.html.style.display='none';App.alert.show('upload',{level:'process',title:'LBL_LOADING',autoclose:false});},disabled:disabled});return action;};AdamEvent.prototype.stringify=function(){var inheritedJSON=AdamShape.prototype.stringify.call(this),thisJSON={evn_marker:this.getEventMarker(),evn_message:this.getEventMessage(),evn_condition:this.evn_condition,evn_attached_to:this.evn_attached_to,evn_is_interrupting:this.evn_is_interrupting,evn_behavior:this.evn_behavior};$.extend(true,inheritedJSON,thisJSON);return inheritedJSON;};