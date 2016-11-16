/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('oop',function(Y,NAME){var L=Y.Lang,A=Y.Array,OP=Object.prototype,CLONE_MARKER='_~yuim~_',hasOwn=OP.hasOwnProperty,toString=OP.toString;function dispatch(o,f,c,proto,action){if(o&&o[action]&&o!==Y){return o[action].call(o,f,c);}else{switch(A.test(o)){case 1:return A[action](o,f,c);case 2:return A[action](Y.Array(o,0,true),f,c);default:return Y.Object[action](o,f,c,proto);}}}
Y.augment=function(receiver,supplier,overwrite,whitelist,args){var rProto=receiver.prototype,sequester=rProto&&supplier,sProto=supplier.prototype,to=rProto||receiver,copy,newPrototype,replacements,sequestered,unsequester;args=args?Y.Array(args):[];if(sequester){newPrototype={};replacements={};sequestered={};copy=function(value,key){if(overwrite||!(key in rProto)){if(toString.call(value)==='[object Function]'){sequestered[key]=value;newPrototype[key]=replacements[key]=function(){return unsequester(this,value,arguments);};}else{newPrototype[key]=value;}}};unsequester=function(instance,fn,fnArgs){for(var key in sequestered){if(hasOwn.call(sequestered,key)&&instance[key]===replacements[key]){instance[key]=sequestered[key];}}
supplier.apply(instance,args);return fn.apply(instance,fnArgs);};if(whitelist){Y.Array.each(whitelist,function(name){if(name in sProto){copy(sProto[name],name);}});}else{Y.Object.each(sProto,copy,null,true);}}
Y.mix(to,newPrototype||sProto,overwrite,whitelist);if(!sequester){supplier.apply(to,args);}
return receiver;};Y.aggregate=function(r,s,ov,wl){return Y.mix(r,s,ov,wl,0,true);};Y.extend=function(r,s,px,sx){if(!s||!r){Y.error('extend failed, verify dependencies');}
var sp=s.prototype,rp=Y.Object(sp);r.prototype=rp;rp.constructor=r;r.superclass=sp;if(s!=Object&&sp.constructor==OP.constructor){sp.constructor=s;}
if(px){Y.mix(rp,px,true);}
if(sx){Y.mix(r,sx,true);}
return r;};Y.each=function(o,f,c,proto){return dispatch(o,f,c,proto,'each');};Y.some=function(o,f,c,proto){return dispatch(o,f,c,proto,'some');};Y.clone=function(o,safe,f,c,owner,cloned){var o2,marked,stamp;if(!L.isObject(o)||Y.instanceOf(o,YUI)||(o.addEventListener||o.attachEvent)){return o;}
marked=cloned||{};switch(L.type(o)){case'date':return new Date(o);case'regexp':return o;case'function':return o;case'array':o2=[];break;default:if(o[CLONE_MARKER]){return marked[o[CLONE_MARKER]];}
stamp=Y.guid();o2=(safe)?{}:Y.Object(o);o[CLONE_MARKER]=stamp;marked[stamp]=o;}
Y.each(o,function(v,k){if((k||k===0)&&(!f||(f.call(c||this,v,k,this,o)!==false))){if(k!==CLONE_MARKER){if(k=='prototype'){}else{this[k]=Y.clone(v,safe,f,c,owner||o,marked);}}}},o2);if(!cloned){Y.Object.each(marked,function(v,k){if(v[CLONE_MARKER]){try{delete v[CLONE_MARKER];}catch(e){v[CLONE_MARKER]=null;}}},this);marked=null;}
return o2;};Y.bind=function(f,c){var xargs=arguments.length>2?Y.Array(arguments,2,true):null;return function(){var fn=L.isString(f)?c[f]:f,args=(xargs)?xargs.concat(Y.Array(arguments,0,true)):arguments;return fn.apply(c||fn,args);};};Y.rbind=function(f,c){var xargs=arguments.length>2?Y.Array(arguments,2,true):null;return function(){var fn=L.isString(f)?c[f]:f,args=(xargs)?Y.Array(arguments,0,true).concat(xargs):arguments;return fn.apply(c||fn,args);};};},'3.15.0',{"requires":["yui-base"]});