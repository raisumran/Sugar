/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('tree-lazy',function(Y,NAME){var EVT_BEFORE_LOAD='beforeLoad';var EVT_ERROR='error';var EVT_LOAD='load';Y.namespace('Plugin.Tree').Lazy=Y.Base.create('lazyTreePlugin',Y.Plugin.Base,[],{initializer:function(config){this._host=config.host;if(config.load){this.load=config.load;}
if(!this._host.openNode){}
this._published={};this._attachEvents();},load:function(node,callback){callback(new Error('Plugin.Tree.Lazy: Please provide a custom `load` method when instantiating this plugin.'));},_attachEvents:function(){this.onHostEvent('open',this._onOpen);},_onOpen:function(e){var node=e.node;if(!node.canHaveChildren||node.state.loaded||node.state.loading){return;}
if(!this._published[EVT_BEFORE_LOAD]){this._published[EVT_BEFORE_LOAD]=this.publish(EVT_BEFORE_LOAD,{defaultFn:this._defLoadingFn});}
this.fire(EVT_BEFORE_LOAD,{node:node});},_defLoadingFn:function(e){var node=e.node,self=this;node.state.loading=true;this.load(node,function(err){delete node.state.loading;if(err){self.fire(EVT_ERROR,{error:err,src:'load'});return;}
node.state.loaded=true;self.fire(EVT_LOAD,{node:node});});}},{NS:'lazy'});},'3.15.0',{"requires":["base-pluginhost","plugin","tree"]});