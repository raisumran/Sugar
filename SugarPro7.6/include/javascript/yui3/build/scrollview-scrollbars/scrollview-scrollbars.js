/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('scrollview-scrollbars',function(Y,NAME){var getClassName=Y.ClassNameManager.getClassName,_classNames,Transition=Y.Transition,NATIVE_TRANSITIONS=Transition.useNative,SCROLLBAR='scrollbar',SCROLLVIEW='scrollview',VERTICAL_NODE="verticalNode",HORIZONTAL_NODE="horizontalNode",CHILD_CACHE="childCache",TOP="top",LEFT="left",WIDTH="width",HEIGHT="height",HORIZ_CACHE="_sbh",VERT_CACHE="_sbv",TRANSITION_PROPERTY=Y.ScrollView._TRANSITION.PROPERTY,TRANSFORM="transform",TRANSLATE_X="translateX(",TRANSLATE_Y="translateY(",SCALE_X="scaleX(",SCALE_Y="scaleY(",SCROLL_X="scrollX",SCROLL_Y="scrollY",PX="px",CLOSE=")",PX_CLOSE=PX+CLOSE;function ScrollbarsPlugin(){ScrollbarsPlugin.superclass.constructor.apply(this,arguments);}
ScrollbarsPlugin.CLASS_NAMES={showing:getClassName(SCROLLVIEW,SCROLLBAR,'showing'),scrollbar:getClassName(SCROLLVIEW,SCROLLBAR),scrollbarV:getClassName(SCROLLVIEW,SCROLLBAR,'vert'),scrollbarH:getClassName(SCROLLVIEW,SCROLLBAR,'horiz'),scrollbarVB:getClassName(SCROLLVIEW,SCROLLBAR,'vert','basic'),scrollbarHB:getClassName(SCROLLVIEW,SCROLLBAR,'horiz','basic'),child:getClassName(SCROLLVIEW,'child'),first:getClassName(SCROLLVIEW,'first'),middle:getClassName(SCROLLVIEW,'middle'),last:getClassName(SCROLLVIEW,'last')};_classNames=ScrollbarsPlugin.CLASS_NAMES;ScrollbarsPlugin.NAME='pluginScrollViewScrollbars';ScrollbarsPlugin.NS='scrollbars';ScrollbarsPlugin.SCROLLBAR_TEMPLATE=['<div>','<span class="'+_classNames.child+' '+_classNames.first+'"></span>','<span class="'+_classNames.child+' '+_classNames.middle+'"></span>','<span class="'+_classNames.child+' '+_classNames.last+'"></span>','</div>'].join('');ScrollbarsPlugin.ATTRS={verticalNode:{setter:'_setNode',valueFn:'_defaultNode'},horizontalNode:{setter:'_setNode',valueFn:'_defaultNode'}};Y.namespace("Plugin").ScrollViewScrollbars=Y.extend(ScrollbarsPlugin,Y.Plugin.Base,{initializer:function(){this._host=this.get("host");this.afterHostEvent('scrollEnd',this._hostScrollEnd);this.afterHostMethod('scrollTo',this._update);this.afterHostMethod('_uiDimensionsChange',this._hostDimensionsChange);},_hostDimensionsChange:function(){var host=this._host,axis=host._cAxis,scrollX=host.get(SCROLL_X),scrollY=host.get(SCROLL_Y);this._dims=host._getScrollDims();if(axis&&axis.y){this._renderBar(this.get(VERTICAL_NODE),true,'vert');}
if(axis&&axis.x){this._renderBar(this.get(HORIZONTAL_NODE),true,'horiz');}
this._update(scrollX,scrollY);Y.later(500,this,'flash',true);},_hostScrollEnd:function(){var host=this._host,scrollX=host.get(SCROLL_X),scrollY=host.get(SCROLL_Y);this.flash();this._update(scrollX,scrollY);},_renderBar:function(bar,add){var inDoc=bar.inDoc(),bb=this._host._bb,className=bar.getData("isHoriz")?_classNames.scrollbarHB:_classNames.scrollbarVB;if(add&&!inDoc){bb.append(bar);bar.toggleClass(className,this._basic);this._setChildCache(bar);}else if(!add&&inDoc){bar.remove();this._clearChildCache(bar);}},_setChildCache:function(node){var c=node.get("children"),fc=c.item(0),mc=c.item(1),lc=c.item(2),size=node.getData("isHoriz")?"offsetWidth":"offsetHeight";node.setStyle(TRANSITION_PROPERTY,TRANSFORM);mc.setStyle(TRANSITION_PROPERTY,TRANSFORM);lc.setStyle(TRANSITION_PROPERTY,TRANSFORM);node.setData(CHILD_CACHE,{fc:fc,lc:lc,mc:mc,fcSize:fc&&fc.get(size),lcSize:lc&&lc.get(size)});},_clearChildCache:function(node){node.clearData(CHILD_CACHE);},_updateBar:function(scrollbar,current,duration,horiz){var host=this._host,basic=this._basic,scrollbarSize=0,scrollbarPos=1,childCache=scrollbar.getData(CHILD_CACHE),lastChild=childCache.lc,middleChild=childCache.mc,firstChildSize=childCache.fcSize,lastChildSize=childCache.lcSize,middleChildSize,lastChildPosition,transition,translate,scale,dim,dimOffset,dimCache,widgetSize,contentSize;if(horiz){dim=WIDTH;dimOffset=LEFT;dimCache=HORIZ_CACHE;widgetSize=this._dims.offsetWidth;contentSize=this._dims.scrollWidth;translate=TRANSLATE_X;scale=SCALE_X;current=(current!==undefined)?current:host.get(SCROLL_X);}else{dim=HEIGHT;dimOffset=TOP;dimCache=VERT_CACHE;widgetSize=this._dims.offsetHeight;contentSize=this._dims.scrollHeight;translate=TRANSLATE_Y;scale=SCALE_Y;current=(current!==undefined)?current:host.get(SCROLL_Y);}
scrollbarSize=Math.floor(widgetSize*(widgetSize/contentSize));scrollbarPos=Math.floor((current/(contentSize-widgetSize))*(widgetSize-scrollbarSize));if(scrollbarSize>widgetSize){scrollbarSize=1;}
if(scrollbarPos>(widgetSize-scrollbarSize)){scrollbarSize=scrollbarSize-(scrollbarPos-(widgetSize-scrollbarSize));}else if(scrollbarPos<0){scrollbarSize=scrollbarPos+scrollbarSize;scrollbarPos=0;}else if(isNaN(scrollbarPos)){scrollbarPos=0;}
middleChildSize=(scrollbarSize-(firstChildSize+lastChildSize));if(middleChildSize<0){middleChildSize=0;}
if(middleChildSize===0&&scrollbarPos!==0){scrollbarPos=widgetSize-(firstChildSize+lastChildSize)-1;}
if(duration!==0){transition={duration:duration};if(NATIVE_TRANSITIONS){transition.transform=translate+scrollbarPos+PX_CLOSE;}else{transition[dimOffset]=scrollbarPos+PX;}
scrollbar.transition(transition);}else{if(NATIVE_TRANSITIONS){scrollbar.setStyle(TRANSFORM,translate+scrollbarPos+PX_CLOSE);}else{scrollbar.setStyle(dimOffset,scrollbarPos+PX);}}
if(this[dimCache]!==middleChildSize){this[dimCache]=middleChildSize;if(middleChildSize>0){if(duration!==0){transition={duration:duration};if(NATIVE_TRANSITIONS){transition.transform=scale+middleChildSize+CLOSE;}else{transition[dim]=middleChildSize+PX;}
middleChild.transition(transition);}else{if(NATIVE_TRANSITIONS){middleChild.setStyle(TRANSFORM,scale+middleChildSize+CLOSE);}else{middleChild.setStyle(dim,middleChildSize+PX);}}
if(!horiz||!basic){lastChildPosition=scrollbarSize-lastChildSize;if(duration!==0){transition={duration:duration};if(NATIVE_TRANSITIONS){transition.transform=translate+lastChildPosition+PX_CLOSE;}else{transition[dimOffset]=lastChildPosition;}
lastChild.transition(transition);}else{if(NATIVE_TRANSITIONS){lastChild.setStyle(TRANSFORM,translate+lastChildPosition+PX_CLOSE);}else{lastChild.setStyle(dimOffset,lastChildPosition+PX);}}}}}},_update:function(x,y,duration){var vNode=this.get(VERTICAL_NODE),hNode=this.get(HORIZONTAL_NODE),host=this._host,axis=host._cAxis;duration=(duration||0)/1000;if(!this._showing){this.show();}
if(axis&&axis.y&&vNode&&y!==null){this._updateBar(vNode,y,duration,false);}
if(axis&&axis.x&&hNode&&x!==null){this._updateBar(hNode,x,duration,true);}},show:function(animated){this._show(true,animated);},hide:function(animated){this._show(false,animated);},_show:function(show,animated){var verticalNode=this.get(VERTICAL_NODE),horizontalNode=this.get(HORIZONTAL_NODE),duration=(animated)?0.6:0,opacity=(show)?1:0,transition;this._showing=show;if(this._flashTimer){this._flashTimer.cancel();}
transition={duration:duration,opacity:opacity};if(verticalNode&&verticalNode._node){verticalNode.transition(transition);}
if(horizontalNode&&horizontalNode._node){horizontalNode.transition(transition);}},flash:function(){this.show(true);this._flashTimer=Y.later(800,this,'hide',true);},_setNode:function(node,name){var horiz=(name===HORIZONTAL_NODE);node=Y.one(node);if(node){node.addClass(_classNames.scrollbar);node.addClass((horiz)?_classNames.scrollbarH:_classNames.scrollbarV);node.setData("isHoriz",horiz);}
return node;},_defaultNode:function(){return Y.Node.create(ScrollbarsPlugin.SCROLLBAR_TEMPLATE);},_basic:Y.UA.ie&&Y.UA.ie<=8});},'3.15.0',{"requires":["classnamemanager","transition","plugin"],"skinnable":true});