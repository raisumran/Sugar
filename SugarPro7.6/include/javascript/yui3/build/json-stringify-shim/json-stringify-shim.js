/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('json-stringify-shim',function(Y,NAME){var Lang=Y.Lang,isFunction=Lang.isFunction,isObject=Lang.isObject,isArray=Lang.isArray,_toStr=Object.prototype.toString,UNDEFINED='undefined',OBJECT='object',NULL='null',STRING='string',NUMBER='number',BOOLEAN='boolean',DATE='date',_allowable={'undefined':UNDEFINED,'string':STRING,'[object String]':STRING,'number':NUMBER,'[object Number]':NUMBER,'boolean':BOOLEAN,'[object Boolean]':BOOLEAN,'[object Date]':DATE,'[object RegExp]':OBJECT},EMPTY='',OPEN_O='{',CLOSE_O='}',OPEN_A='[',CLOSE_A=']',COMMA=',',COMMA_CR=",\n",CR="\n",COLON=':',COLON_SP=': ',QUOTE='"',_SPECIAL=/[\x00-\x07\x0b\x0e-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,_COMMON=[[/\\/g,'\\\\'],[/\"/g,'\\"'],[/\x08/g,'\\b'],[/\x09/g,'\\t'],[/\x0a/g,'\\n'],[/\x0c/g,'\\f'],[/\x0d/g,'\\r']],_COMMON_LENGTH=_COMMON.length,_CHAR={},_CHAR_COUNT,_CACHE_THRESHOLD;function _type(o){var t=typeof o;return _allowable[t]||_allowable[_toStr.call(o)]||(t===OBJECT?(o?OBJECT:NULL):UNDEFINED);}
function _char(c){if(!_CHAR[c]){_CHAR[c]='\\u'+('0000'+(+(c.charCodeAt(0))).toString(16)).slice(-4);_CHAR_COUNT[c]=0;}
if(++_CHAR_COUNT[c]===_CACHE_THRESHOLD){_COMMON.push([new RegExp(c,'g'),_CHAR[c]]);_COMMON_LENGTH=_COMMON.length;}
return _CHAR[c];}
function _string(s){var i,chr;for(i=0;i<_COMMON_LENGTH;i++){chr=_COMMON[i];s=s.replace(chr[0],chr[1]);}
return QUOTE+s.replace(_SPECIAL,_char)+QUOTE;}
function _indent(s,space){return s.replace(/^/gm,space);}
Y.JSON.stringify=function _stringify(o,w,space){if(o===undefined){return undefined;}
var replacer=isFunction(w)?w:null,format=_toStr.call(space).match(/String|Number/)||[],_date=Y.JSON.dateToString,stack=[],tmp,i,len;_CHAR_COUNT={};_CACHE_THRESHOLD=Y.JSON.charCacheThreshold;if(replacer||!isArray(w)){w=undefined;}
if(w){tmp={};for(i=0,len=w.length;i<len;++i){tmp[w[i]]=true;}
w=tmp;}
space=format[0]==='Number'?new Array(Math.min(Math.max(0,space),10)+1).join(" "):(space||EMPTY).slice(0,10);function _serialize(h,key){var value=h[key],t=_type(value),a=[],colon=space?COLON_SP:COLON,arr,i,keys,k,v;if(isObject(value)&&isFunction(value.toJSON)){value=value.toJSON(key);}else if(t===DATE){value=_date(value);}
if(isFunction(replacer)){value=replacer.call(h,key,value);}
if(value!==h[key]){t=_type(value);}
switch(t){case DATE:case OBJECT:break;case STRING:return _string(value);case NUMBER:return isFinite(value)?value+EMPTY:NULL;case BOOLEAN:return value+EMPTY;case NULL:return NULL;default:return undefined;}
for(i=stack.length-1;i>=0;--i){if(stack[i]===value){throw new Error("JSON.stringify. Cyclical reference");}}
arr=isArray(value);stack.push(value);if(arr){for(i=value.length-1;i>=0;--i){a[i]=_serialize(value,i)||NULL;}}else{keys=w||value;i=0;for(k in keys){if(keys.hasOwnProperty(k)){v=_serialize(value,k);if(v){a[i++]=_string(k)+colon+v;}}}}
stack.pop();if(space&&a.length){return arr?OPEN_A+CR+_indent(a.join(COMMA_CR),space)+CR+CLOSE_A:OPEN_O+CR+_indent(a.join(COMMA_CR),space)+CR+CLOSE_O;}else{return arr?OPEN_A+a.join(COMMA)+CLOSE_A:OPEN_O+a.join(COMMA)+CLOSE_O;}}
return _serialize({'':o},'');};Y.JSON.stringify.isShim=true;},'3.15.0',{"requires":["json-stringify"]});