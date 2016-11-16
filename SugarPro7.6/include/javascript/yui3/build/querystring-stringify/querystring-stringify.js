/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('querystring-stringify',function(Y,NAME){var QueryString=Y.namespace("QueryString"),stack=[],L=Y.Lang;QueryString.escape=encodeURIComponent;QueryString.stringify=function(obj,c,name){var begin,end,i,l,n,s,sep=c&&c.sep?c.sep:"&",eq=c&&c.eq?c.eq:"=",aK=c&&c.arrayKey?c.arrayKey:false;if(L.isNull(obj)||L.isUndefined(obj)||L.isFunction(obj)){return name?QueryString.escape(name)+eq:'';}
if(L.isBoolean(obj)||Object.prototype.toString.call(obj)==='[object Boolean]'){obj=+obj;}
if(L.isNumber(obj)||L.isString(obj)){return QueryString.escape(name)+eq+QueryString.escape(obj);}
if(L.isArray(obj)){s=[];name=aK?name+'[]':name;l=obj.length;for(i=0;i<l;i++){s.push(QueryString.stringify(obj[i],c,name));}
return s.join(sep);}
for(i=stack.length-1;i>=0;--i){if(stack[i]===obj){throw new Error("QueryString.stringify. Cyclical reference");}}
stack.push(obj);s=[];begin=name?name+'[':'';end=name?']':'';for(i in obj){if(obj.hasOwnProperty(i)){n=begin+i+end;s.push(QueryString.stringify(obj[i],c,n));}}
stack.pop();s=s.join(sep);if(!s&&name){return name+"=";}
return s;};},'3.15.0',{"requires":["yui-base"]});