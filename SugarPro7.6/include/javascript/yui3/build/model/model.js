/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('model',function(Y,NAME){var GlobalEnv=YUI.namespace('Env.Model'),Lang=Y.Lang,YArray=Y.Array,YObject=Y.Object,EVT_CHANGE='change',EVT_ERROR='error',EVT_LOAD='load',EVT_SAVE='save';function Model(){Model.superclass.constructor.apply(this,arguments);}
Y.Model=Y.extend(Model,Y.Base,{idAttribute:'id',_allowAdHocAttrs:true,_isYUIModel:true,initializer:function(config){this.changed={};this.lastChange={};this.lists=[];},destroy:function(options,callback){var self=this;if(typeof options==='function'){callback=options;options=null;}
self.onceAfter('destroy',function(){function finish(err){if(!err){YArray.each(self.lists.concat(),function(list){list.remove(self,options);});}
callback&&callback.apply(null,arguments);}
if(options&&(options.remove||options['delete'])){self.sync('delete',options,finish);}else{finish();}});return Model.superclass.destroy.call(self);},generateClientId:function(){GlobalEnv.lastId||(GlobalEnv.lastId=0);return this.constructor.NAME+'_'+(GlobalEnv.lastId+=1);},getAsHTML:function(name){var value=this.get(name);return Y.Escape.html(Lang.isValue(value)?String(value):'');},getAsURL:function(name){var value=this.get(name);return encodeURIComponent(Lang.isValue(value)?String(value):'');},isModified:function(){return this.isNew()||!YObject.isEmpty(this.changed);},isNew:function(){return!Lang.isValue(this.get('id'));},load:function(options,callback){var self=this;if(typeof options==='function'){callback=options;options={};}
options||(options={});self.sync('read',options,function(err,response){var facade={options:options,response:response},parsed;if(err){facade.error=err;facade.src='load';self.fire(EVT_ERROR,facade);}else{if(!self._loadEvent){self._loadEvent=self.publish(EVT_LOAD,{preventable:false});}
parsed=facade.parsed=self._parse(response);self.setAttrs(parsed,options);self.changed={};self.fire(EVT_LOAD,facade);}
callback&&callback.apply(null,arguments);});return self;},parse:function(response){if(typeof response==='string'){try{return Y.JSON.parse(response);}catch(ex){this.fire(EVT_ERROR,{error:ex,response:response,src:'parse'});return null;}}
return response;},save:function(options,callback){var self=this;if(typeof options==='function'){callback=options;options={};}
options||(options={});self._validate(self.toJSON(),function(err){if(err){callback&&callback.call(null,err);return;}
self.sync(self.isNew()?'create':'update',options,function(err,response){var facade={options:options,response:response},parsed;if(err){facade.error=err;facade.src='save';self.fire(EVT_ERROR,facade);}else{if(!self._saveEvent){self._saveEvent=self.publish(EVT_SAVE,{preventable:false});}
if(response){parsed=facade.parsed=self._parse(response);self.setAttrs(parsed,options);}
self.changed={};self.fire(EVT_SAVE,facade);}
callback&&callback.apply(null,arguments);});});return self;},set:function(name,value,options){var attributes={};attributes[name]=value;return this.setAttrs(attributes,options);},setAttrs:function(attributes,options){var idAttribute=this.idAttribute,changed,e,key,lastChange,transaction;options=Y.merge(options);transaction=options._transaction={};if(idAttribute!=='id'){attributes=Y.merge(attributes);if(YObject.owns(attributes,idAttribute)){attributes.id=attributes[idAttribute];}else if(YObject.owns(attributes,'id')){attributes[idAttribute]=attributes.id;}}
for(key in attributes){if(YObject.owns(attributes,key)){this._setAttr(key,attributes[key],options);}}
if(!YObject.isEmpty(transaction)){changed=this.changed;lastChange=this.lastChange={};for(key in transaction){if(YObject.owns(transaction,key)){e=transaction[key];changed[key]=e.newVal;lastChange[key]={newVal:e.newVal,prevVal:e.prevVal,src:e.src||null};}}
if(!options.silent){if(!this._changeEvent){this._changeEvent=this.publish(EVT_CHANGE,{preventable:false});}
options.changed=lastChange;this.fire(EVT_CHANGE,options);}}
return this;},sync:function(){var callback=YArray(arguments,0,true).pop();if(typeof callback==='function'){callback();}},toJSON:function(){var attrs=this.getAttrs();delete attrs.clientId;delete attrs.destroyed;delete attrs.initialized;if(this.idAttribute!=='id'){delete attrs.id;}
return attrs;},undo:function(attrNames,options){var lastChange=this.lastChange,idAttribute=this.idAttribute,toUndo={},needUndo;attrNames||(attrNames=YObject.keys(lastChange));YArray.each(attrNames,function(name){if(YObject.owns(lastChange,name)){name=name===idAttribute?'id':name;needUndo=true;toUndo[name]=lastChange[name].prevVal;}});return needUndo?this.setAttrs(toUndo,options):this;},validate:function(attrs,callback){callback&&callback();},addAttr:function(name,config,lazy){var idAttribute=this.idAttribute,idAttrCfg,id;if(idAttribute&&name===idAttribute){idAttrCfg=this._isLazyAttr('id')||this._getAttrCfg('id');id=config.value===config.defaultValue?null:config.value;if(!Lang.isValue(id)){id=idAttrCfg.value===idAttrCfg.defaultValue?null:idAttrCfg.value;if(!Lang.isValue(id)){id=Lang.isValue(config.defaultValue)?config.defaultValue:idAttrCfg.defaultValue;}}
config.value=id;if(idAttrCfg.value!==id){idAttrCfg.value=id;if(this._isLazyAttr('id')){this._state.add('id','lazy',idAttrCfg);}else{this._state.add('id','value',id);}}}
return Model.superclass.addAttr.apply(this,arguments);},_parse:function(response){return this.parse(response);},_validate:function(attributes,callback){var self=this;function handler(err){if(Lang.isValue(err)){self.fire(EVT_ERROR,{attributes:attributes,error:err,src:'validate'});callback(err);return;}
callback();}
if(self.validate.length===1){handler(self.validate(attributes,handler));}else{self.validate(attributes,handler);}},_setAttrVal:function(attrName,subAttrName,prevVal,newVal,opts,attrCfg){var didChange=Model.superclass._setAttrVal.apply(this,arguments),transaction=opts&&opts._transaction,initializing=attrCfg&&attrCfg.initializing;if(didChange&&transaction&&!initializing){transaction[attrName]={newVal:this.get(attrName),prevVal:prevVal,src:opts.src||null};}
return didChange;}},{NAME:'model',ATTRS:{clientId:{valueFn:'generateClientId',readOnly:true},id:{value:null}}});},'3.15.0',{"requires":["base-build","escape","json-parse"]});