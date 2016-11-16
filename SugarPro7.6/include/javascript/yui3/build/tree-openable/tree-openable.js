/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('tree-openable',function(Y,NAME){var EVT_CLOSE='close';var EVT_OPEN='open';function Openable(){}
Openable.prototype={initializer:function(){this.nodeExtensions=this.nodeExtensions.concat(Y.Tree.Node.Openable);},closeNode:function(node,options){if(node.canHaveChildren&&node.isOpen()){this._fireTreeEvent(EVT_CLOSE,{node:node,src:options&&options.src},{defaultFn:this._defCloseFn,silent:options&&options.silent});}
return this;},openNode:function(node,options){if(node.canHaveChildren&&!node.isOpen()){this._fireTreeEvent(EVT_OPEN,{node:node,src:options&&options.src},{defaultFn:this._defOpenFn,silent:options&&options.silent});}
return this;},toggleOpenNode:function(node,options){return node.isOpen()?this.closeNode(node,options):this.openNode(node,options);},_defCloseFn:function(e){delete e.node.state.open;},_defOpenFn:function(e){e.node.state.open=true;}};Y.Tree.Openable=Openable;function NodeOpenable(){}
NodeOpenable.prototype={close:function(options){this.tree.closeNode(this,options);return this;},isOpen:function(){return!!this.state.open||this.isRoot();},open:function(options){this.tree.openNode(this,options);return this;},toggleOpen:function(options){this.tree.toggleOpenNode(this,options);return this;}};Y.Tree.Node.Openable=NodeOpenable;},'3.15.0',{"requires":["tree"]});