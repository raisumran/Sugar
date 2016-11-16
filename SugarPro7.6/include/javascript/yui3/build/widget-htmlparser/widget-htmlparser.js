/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('widget-htmlparser',function(Y,NAME){var Widget=Y.Widget,Node=Y.Node,Lang=Y.Lang,SRC_NODE="srcNode",CONTENT_BOX="contentBox";Widget.HTML_PARSER={};Widget._buildCfg={aggregates:["HTML_PARSER"]};Widget.ATTRS[SRC_NODE]={value:null,setter:Node.one,getter:"_getSrcNode",writeOnce:true};Y.mix(Widget.prototype,{_getSrcNode:function(val){return val||this.get(CONTENT_BOX);},_preAddAttrs:function(attrs,userVals,lazy){var preAttrs={id:attrs.id,boundingBox:attrs.boundingBox,contentBox:attrs.contentBox,srcNode:attrs.srcNode};this.addAttrs(preAttrs,userVals,lazy);delete attrs.boundingBox;delete attrs.contentBox;delete attrs.srcNode;delete attrs.id;if(this._applyParser){this._applyParser(userVals);}},_applyParsedConfig:function(node,cfg,parsedCfg){return(parsedCfg)?Y.mix(cfg,parsedCfg,false):cfg;},_applyParser:function(config){var widget=this,srcNode=this._getNodeToParse(),schema=widget._getHtmlParser(),parsedConfig,val;if(schema&&srcNode){Y.Object.each(schema,function(v,k,o){val=null;if(Lang.isFunction(v)){val=v.call(widget,srcNode);}else{if(Lang.isArray(v)){val=srcNode.all(v[0]);if(val.isEmpty()){val=null;}}else{val=srcNode.one(v);}}
if(val!==null&&val!==undefined){parsedConfig=parsedConfig||{};parsedConfig[k]=val;}});}
config=widget._applyParsedConfig(srcNode,config,parsedConfig);},_getNodeToParse:function(){var srcNode=this.get("srcNode");return(!this._cbFromTemplate)?srcNode:null;},_getHtmlParser:function(){var classes=this._getClasses(),parser={},i,p;for(i=classes.length-1;i>=0;i--){p=classes[i].HTML_PARSER;if(p){Y.mix(parser,p,true);}}
return parser;}});},'3.15.0',{"requires":["widget-base"]});