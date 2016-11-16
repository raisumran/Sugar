/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('handlebars-base',function(Y,NAME)
/*!
Handlebars.js - Copyright (C) 2011 Yehuda Katz
https://raw.github.com/wycats/handlebars.js/master/LICENSE
*/
{var Handlebars=Y.namespace('Handlebars');Handlebars.VERSION="1.0.0";Handlebars.COMPILER_REVISION=4;Handlebars.REVISION_CHANGES={1:'<= 1.0.rc.2',2:'== 1.0.0-rc.3',3:'== 1.0.0-rc.4',4:'>= 1.0.0'};Handlebars.helpers={};Handlebars.partials={};var toString=Object.prototype.toString,functionType='[object Function]',objectType='[object Object]';Handlebars.registerHelper=function(name,fn,inverse){if(toString.call(name)===objectType){if(inverse||fn){throw new Handlebars.Exception('Arg not supported with multiple helpers');}
Handlebars.Utils.extend(this.helpers,name);}else{if(inverse){fn.not=inverse;}
this.helpers[name]=fn;}};Handlebars.registerPartial=function(name,str){if(toString.call(name)===objectType){Handlebars.Utils.extend(this.partials,name);}else{this.partials[name]=str;}};Handlebars.registerHelper('helperMissing',function(arg){if(arguments.length===2){return undefined;}else{throw new Error("Missing helper: '"+arg+"'");}});Handlebars.registerHelper('blockHelperMissing',function(context,options){var inverse=options.inverse||function(){},fn=options.fn;var type=toString.call(context);if(type===functionType){context=context.call(this);}
if(context===true){return fn(this);}else if(context===false||context==null){return inverse(this);}else if(type==="[object Array]"){if(context.length>0){return Handlebars.helpers.each(context,options);}else{return inverse(this);}}else{return fn(context);}});Handlebars.K=function(){};Handlebars.createFrame=Object.create||function(object){Handlebars.K.prototype=object;var obj=new Handlebars.K();Handlebars.K.prototype=null;return obj;};Handlebars.logger={DEBUG:0,INFO:1,WARN:2,ERROR:3,level:3,methodMap:{0:'debug',1:'info',2:'warn',3:'error'},log:function(level,obj){if(Handlebars.logger.level<=level){var method=Handlebars.logger.methodMap[level];if(typeof console!=='undefined'&&console[method]){console[method].call(console,obj);}}}};Handlebars.log=function(level,obj){Handlebars.logger.log(level,obj);};Handlebars.registerHelper('each',function(context,options){var fn=options.fn,inverse=options.inverse;var i=0,ret="",data;var type=toString.call(context);if(type===functionType){context=context.call(this);}
if(options.data){data=Handlebars.createFrame(options.data);}
if(context&&typeof context==='object'){if(context instanceof Array){for(var j=context.length;i<j;i++){if(data){data.index=i;}
ret=ret+fn(context[i],{data:data});}}else{for(var key in context){if(context.hasOwnProperty(key)){if(data){data.key=key;}
ret=ret+fn(context[key],{data:data});i++;}}}}
if(i===0){ret=inverse(this);}
return ret;});Handlebars.registerHelper('if',function(conditional,options){var type=toString.call(conditional);if(type===functionType){conditional=conditional.call(this);}
if(!conditional||Handlebars.Utils.isEmpty(conditional)){return options.inverse(this);}else{return options.fn(this);}});Handlebars.registerHelper('unless',function(conditional,options){return Handlebars.helpers['if'].call(this,conditional,{fn:options.inverse,inverse:options.fn});});Handlebars.registerHelper('with',function(context,options){var type=toString.call(context);if(type===functionType){context=context.call(this);}
if(!Handlebars.Utils.isEmpty(context))return options.fn(context);});Handlebars.registerHelper('log',function(context,options){var level=options.data&&options.data.level!=null?parseInt(options.data.level,10):1;Handlebars.log(level,context);});var errorProps=['description','fileName','lineNumber','message','name','number','stack'];Handlebars.Exception=function(message){var tmp=Error.prototype.constructor.apply(this,arguments);for(var idx=0;idx<errorProps.length;idx++){this[errorProps[idx]]=tmp[errorProps[idx]];}};Handlebars.Exception.prototype=new Error();Handlebars.SafeString=function(string){this.string=string;};Handlebars.SafeString.prototype.toString=function(){return this.string.toString();};var escape={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","`":"&#x60;"};var badChars=/[&<>"'`]/g;var possible=/[&<>"'`]/;var escapeChar=function(chr){return escape[chr]||"&amp;";};Handlebars.Utils={extend:function(obj,value){for(var key in value){if(value.hasOwnProperty(key)){obj[key]=value[key];}}},escapeExpression:function(string){if(string instanceof Handlebars.SafeString){return string.toString();}else if(string==null||string===false){return"";}
string=string.toString();if(!possible.test(string)){return string;}
return string.replace(badChars,escapeChar);},isEmpty:function(value){if(!value&&value!==0){return true;}else if(toString.call(value)==="[object Array]"&&value.length===0){return true;}else{return false;}}};Handlebars.VM={template:function(templateSpec){var container={escapeExpression:Handlebars.Utils.escapeExpression,invokePartial:Handlebars.VM.invokePartial,programs:[],program:function(i,fn,data){var programWrapper=this.programs[i];if(data){programWrapper=Handlebars.VM.program(i,fn,data);}else if(!programWrapper){programWrapper=this.programs[i]=Handlebars.VM.program(i,fn);}
return programWrapper;},merge:function(param,common){var ret=param||common;if(param&&common){ret={};Handlebars.Utils.extend(ret,common);Handlebars.Utils.extend(ret,param);}
return ret;},programWithDepth:Handlebars.VM.programWithDepth,noop:Handlebars.VM.noop,compilerInfo:null};return function(context,options){options=options||{};var result=templateSpec.call(container,Handlebars,context,options.helpers,options.partials,options.data);var compilerInfo=container.compilerInfo||[],compilerRevision=compilerInfo[0]||1,currentRevision=Handlebars.COMPILER_REVISION;if(compilerRevision!==currentRevision){if(compilerRevision<currentRevision){var runtimeVersions=Handlebars.REVISION_CHANGES[currentRevision],compilerVersions=Handlebars.REVISION_CHANGES[compilerRevision];throw"Template was precompiled with an older version of Handlebars than the current runtime. "+"Please update your precompiler to a newer version ("+runtimeVersions+") or downgrade your runtime to an older version ("+compilerVersions+").";}else{throw"Template was precompiled with a newer version of Handlebars than the current runtime. "+"Please update your runtime to a newer version ("+compilerInfo[1]+").";}}
return result;};},programWithDepth:function(i,fn,data){var args=Array.prototype.slice.call(arguments,3);var program=function(context,options){options=options||{};return fn.apply(this,[context,options.data||data].concat(args));};program.program=i;program.depth=args.length;return program;},program:function(i,fn,data){var program=function(context,options){options=options||{};return fn(context,options.data||data);};program.program=i;program.depth=0;return program;},noop:function(){return"";},invokePartial:function(partial,name,context,helpers,partials,data){var options={helpers:helpers,partials:partials,data:data};if(partial===undefined){throw new Handlebars.Exception("The partial "+name+" could not be found");}else if(partial instanceof Function){return partial(context,options);}else if(!Handlebars.compile){throw new Handlebars.Exception("The partial "+name+" could not be compiled when running in runtime-only mode");}else{partials[name]=Handlebars.compile(partial,{data:data!==undefined});return partials[name](context,options);}}};Handlebars.template=Handlebars.VM.template;Handlebars.VERSION+='-yui';Handlebars.revive=Handlebars.template;Y.namespace('Template').Handlebars=Handlebars;},'3.15.0',{"requires":[]});