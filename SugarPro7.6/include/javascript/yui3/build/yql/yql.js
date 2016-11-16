/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('yql',function(Y,NAME){var YQLRequest=function(sql,callback,params,opts){if(!params){params={};}
params.q=sql;if(!params.format){params.format=Y.YQLRequest.FORMAT;}
if(!params.env){params.env=Y.YQLRequest.ENV;}
this._context=this;if(opts&&opts.context){this._context=opts.context;delete opts.context;}
if(params&&params.context){this._context=params.context;delete params.context;}
this._params=params;this._opts=opts;this._callback=callback;};YQLRequest.prototype={_jsonp:null,_opts:null,_callback:null,_params:null,_context:null,_internal:function(){this._callback.apply(this._context,arguments);},send:function(){var qs=[],url=((this._opts&&this._opts.proto)?this._opts.proto:Y.YQLRequest.PROTO),o;Y.Object.each(this._params,function(v,k){qs.push(k+'='+encodeURIComponent(v));});qs=qs.join('&');url+=((this._opts&&this._opts.base)?this._opts.base:Y.YQLRequest.BASE_URL)+qs;o=(!Y.Lang.isFunction(this._callback))?this._callback:{on:{success:this._callback}};o.on=o.on||{};this._callback=o.on.success;o.on.success=Y.bind(this._internal,this);this._send(url,o);return this;},_send:function(){}};YQLRequest.FORMAT='json';YQLRequest.PROTO='http';YQLRequest.BASE_URL=':/'+'/query.yahooapis.com/v1/public/yql?';YQLRequest.ENV='http:/'+'/datatables.org/alltables.env';Y.YQLRequest=YQLRequest;Y.YQL=function(sql,callback,params,opts){return new Y.YQLRequest(sql,callback,params,opts).send();};},'3.15.0',{"requires":["oop"]});