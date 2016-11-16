/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('graphics-vml',function(Y,NAME){var IMPLEMENTATION="vml",SHAPE="shape",SPLITPATHPATTERN=/[a-z][^a-z]*/ig,SPLITARGSPATTERN=/[\-]?[0-9]*[0-9|\.][0-9]*/g,Y_LANG=Y.Lang,IS_NUM=Y_LANG.isNumber,IS_ARRAY=Y_LANG.isArray,Y_DOM=Y.DOM,Y_SELECTOR=Y.Selector,DOCUMENT=Y.config.doc,AttributeLite=Y.AttributeLite,VMLShape,VMLCircle,VMLPath,VMLRect,VMLEllipse,VMLGraphic,VMLPieSlice,_getClassName=Y.ClassNameManager.getClassName;function VMLDrawing(){}
VMLDrawing.prototype={_pathSymbolToMethod:{M:"moveTo",m:"relativeMoveTo",L:"lineTo",l:"relativeLineTo",C:"curveTo",c:"relativeCurveTo",Q:"quadraticCurveTo",q:"relativeQuadraticCurveTo",z:"closePath",Z:"closePath"},_coordSpaceMultiplier:100,_round:function(val)
{return Math.round(val*this._coordSpaceMultiplier);},_addToPath:function(val)
{this._path=this._path||"";if(this._movePath)
{this._path+=this._movePath;this._movePath=null;}
this._path+=val;},_currentX:0,_currentY:0,curveTo:function(){this._curveTo.apply(this,[Y.Array(arguments),false]);return this;},relativeCurveTo:function(){this._curveTo.apply(this,[Y.Array(arguments),true]);return this;},_curveTo:function(args,relative){var w,h,x,y,cp1x,cp1y,cp2x,cp2y,pts,right,left,bottom,top,i,len,path,command=relative?" v ":" c ",relativeX=relative?parseFloat(this._currentX):0,relativeY=relative?parseFloat(this._currentY):0;len=args.length-5;path=command;for(i=0;i<len;i=i+6)
{cp1x=parseFloat(args[i]);cp1y=parseFloat(args[i+1]);cp2x=parseFloat(args[i+2]);cp2y=parseFloat(args[i+3]);x=parseFloat(args[i+4]);y=parseFloat(args[i+5]);if(i>0)
{path=path+", ";}
path=path+
this._round(cp1x)+", "+
this._round(cp1y)+", "+
this._round(cp2x)+", "+
this._round(cp2y)+", "+
this._round(x)+", "+
this._round(y);cp1x=cp1x+relativeX;cp1y=cp1y+relativeY;cp2x=cp2x+relativeX;cp2y=cp2y+relativeY;x=x+relativeX;y=y+relativeY;right=Math.max(x,Math.max(cp1x,cp2x));bottom=Math.max(y,Math.max(cp1y,cp2y));left=Math.min(x,Math.min(cp1x,cp2x));top=Math.min(y,Math.min(cp1y,cp2y));w=Math.abs(right-left);h=Math.abs(bottom-top);pts=[[this._currentX,this._currentY],[cp1x,cp1y],[cp2x,cp2y],[x,y]];this._setCurveBoundingBox(pts,w,h);this._currentX=x;this._currentY=y;}
this._addToPath(path);},quadraticCurveTo:function(){this._quadraticCurveTo.apply(this,[Y.Array(arguments),false]);return this;},relativeQuadraticCurveTo:function(){this._quadraticCurveTo.apply(this,[Y.Array(arguments),true]);return this;},_quadraticCurveTo:function(args,relative){var cpx,cpy,cp1x,cp1y,cp2x,cp2y,x,y,currentX=this._currentX,currentY=this._currentY,i,len=args.length-3,bezierArgs=[],relativeX=relative?parseFloat(this._currentX):0,relativeY=relative?parseFloat(this._currentY):0;for(i=0;i<len;i=i+4)
{cpx=parseFloat(args[i])+relativeX;cpy=parseFloat(args[i+1])+relativeY;x=parseFloat(args[i+2])+relativeX;y=parseFloat(args[i+3])+relativeY;cp1x=currentX+0.67*(cpx-currentX);cp1y=currentY+0.67*(cpy-currentY);cp2x=cp1x+(x-currentX)*0.34;cp2y=cp1y+(y-currentY)*0.34;bezierArgs.push(cp1x);bezierArgs.push(cp1y);bezierArgs.push(cp2x);bezierArgs.push(cp2y);bezierArgs.push(x);bezierArgs.push(y);}
this._curveTo.apply(this,[bezierArgs,false]);},drawRect:function(x,y,w,h){this.moveTo(x,y);this.lineTo(x+w,y);this.lineTo(x+w,y+h);this.lineTo(x,y+h);this.lineTo(x,y);this._currentX=x;this._currentY=y;return this;},drawRoundRect:function(x,y,w,h,ew,eh){this.moveTo(x,y+eh);this.lineTo(x,y+h-eh);this.quadraticCurveTo(x,y+h,x+ew,y+h);this.lineTo(x+w-ew,y+h);this.quadraticCurveTo(x+w,y+h,x+w,y+h-eh);this.lineTo(x+w,y+eh);this.quadraticCurveTo(x+w,y,x+w-ew,y);this.lineTo(x+ew,y);this.quadraticCurveTo(x,y,x,y+eh);return this;},drawCircle:function(x,y,radius){var startAngle=0,endAngle=360,circum=radius*2;endAngle*=65535;this._drawingComplete=false;this._trackSize(x+circum,y+circum);this.moveTo((x+circum),(y+radius));this._addToPath(" ae "+
this._round(x+radius)+", "+
this._round(y+radius)+", "+
this._round(radius)+", "+
this._round(radius)+", "+
startAngle+", "+
endAngle);return this;},drawEllipse:function(x,y,w,h){var startAngle=0,endAngle=360,radius=w*0.5,yRadius=h*0.5;endAngle*=65535;this._drawingComplete=false;this._trackSize(x+w,y+h);this.moveTo((x+w),(y+yRadius));this._addToPath(" ae "+
this._round(x+radius)+", "+
this._round(x+radius)+", "+
this._round(y+yRadius)+", "+
this._round(radius)+", "+
this._round(yRadius)+", "+
startAngle+", "+
endAngle);return this;},drawDiamond:function(x,y,width,height)
{var midWidth=width*0.5,midHeight=height*0.5;this.moveTo(x+midWidth,y);this.lineTo(x+width,y+midHeight);this.lineTo(x+midWidth,y+height);this.lineTo(x,y+midHeight);this.lineTo(x+midWidth,y);return this;},drawWedge:function(x,y,startAngle,arc,radius)
{var diameter=radius*2;if(Math.abs(arc)>360)
{arc=360;}
this._currentX=x;this._currentY=y;startAngle*=-65535;arc*=65536;startAngle=Math.round(startAngle);arc=Math.round(arc);this.moveTo(x,y);this._addToPath(" ae "+
this._round(x)+", "+
this._round(y)+", "+
this._round(radius)+" "+
this._round(radius)+", "+
startAngle+", "+
arc);this._trackSize(diameter,diameter);return this;},lineTo:function()
{this._lineTo.apply(this,[Y.Array(arguments),false]);return this;},relativeLineTo:function()
{this._lineTo.apply(this,[Y.Array(arguments),true]);return this;},_lineTo:function(args,relative){var point1=args[0],i,len,x,y,path=relative?" r ":" l ",relativeX=relative?parseFloat(this._currentX):0,relativeY=relative?parseFloat(this._currentY):0;if(typeof point1==="string"||typeof point1==="number"){len=args.length-1;for(i=0;i<len;i=i+2){x=parseFloat(args[i]);y=parseFloat(args[i+1]);path+=' '+this._round(x)+', '+this._round(y);x=x+relativeX;y=y+relativeY;this._currentX=x;this._currentY=y;this._trackSize.apply(this,[x,y]);}}
else
{len=args.length;for(i=0;i<len;i=i+1){x=parseFloat(args[i][0]);y=parseFloat(args[i][1]);path+=' '+this._round(x)+', '+this._round(y);x=x+relativeX;y=y+relativeY;this._currentX=x;this._currentY=y;this._trackSize.apply(this,[x,y]);}}
this._addToPath(path);return this;},moveTo:function()
{this._moveTo.apply(this,[Y.Array(arguments),false]);return this;},relativeMoveTo:function()
{this._moveTo.apply(this,[Y.Array(arguments),true]);return this;},_moveTo:function(args,relative){var x=parseFloat(args[0]),y=parseFloat(args[1]),command=relative?" t ":" m ",relativeX=relative?parseFloat(this._currentX):0,relativeY=relative?parseFloat(this._currentY):0;this._movePath=command+this._round(x)+", "+this._round(y);x=x+relativeX;y=y+relativeY;this._trackSize(x,y);this._currentX=x;this._currentY=y;},_closePath:function()
{var fill=this.get("fill"),stroke=this.get("stroke"),node=this.node,w=this.get("width"),h=this.get("height"),path=this._path,pathEnd="",multiplier=this._coordSpaceMultiplier;this._fillChangeHandler();this._strokeChangeHandler();if(path)
{if(fill&&fill.color)
{pathEnd+=' x';}
if(stroke)
{pathEnd+=' e';}}
if(path)
{node.path=path+pathEnd;}
if(!isNaN(w)&&!isNaN(h))
{node.coordOrigin=this._left+", "+this._top;node.coordSize=(w*multiplier)+", "+(h*multiplier);node.style.position="absolute";node.style.width=w+"px";node.style.height=h+"px";}
this._path=path;this._movePath=null;this._updateTransform();},end:function()
{this._closePath();return this;},closePath:function()
{this._addToPath(" x e");return this;},clear:function()
{this._right=0;this._bottom=0;this._width=0;this._height=0;this._left=0;this._top=0;this._path="";this._movePath=null;return this;},getBezierData:function(points,t){var n=points.length,tmp=[],i,j;for(i=0;i<n;++i){tmp[i]=[points[i][0],points[i][1]];}
for(j=1;j<n;++j){for(i=0;i<n-j;++i){tmp[i][0]=(1-t)*tmp[i][0]+t*tmp[parseInt(i+1,10)][0];tmp[i][1]=(1-t)*tmp[i][1]+t*tmp[parseInt(i+1,10)][1];}}
return[tmp[0][0],tmp[0][1]];},_setCurveBoundingBox:function(pts,w,h)
{var i,left=this._currentX,right=left,top=this._currentY,bottom=top,len=Math.round(Math.sqrt((w*w)+(h*h))),t=1/len,xy;for(i=0;i<len;++i)
{xy=this.getBezierData(pts,t*i);left=isNaN(left)?xy[0]:Math.min(xy[0],left);right=isNaN(right)?xy[0]:Math.max(xy[0],right);top=isNaN(top)?xy[1]:Math.min(xy[1],top);bottom=isNaN(bottom)?xy[1]:Math.max(xy[1],bottom);}
left=Math.round(left*10)/10;right=Math.round(right*10)/10;top=Math.round(top*10)/10;bottom=Math.round(bottom*10)/10;this._trackSize(right,bottom);this._trackSize(left,top);},_trackSize:function(w,h){if(w>this._right){this._right=w;}
if(w<this._left)
{this._left=w;}
if(h<this._top)
{this._top=h;}
if(h>this._bottom)
{this._bottom=h;}
this._width=this._right-this._left;this._height=this._bottom-this._top;},_left:0,_right:0,_top:0,_bottom:0,_width:0,_height:0};Y.VMLDrawing=VMLDrawing;VMLShape=function()
{this._transforms=[];this.matrix=new Y.Matrix();this._normalizedMatrix=new Y.Matrix();VMLShape.superclass.constructor.apply(this,arguments);};VMLShape.NAME="shape";Y.extend(VMLShape,Y.GraphicBase,Y.mix({_type:"shape",init:function()
{this.initializer.apply(this,arguments);},initializer:function(cfg)
{var host=this,graphic=cfg.graphic,data=this.get("data");host.createNode();if(graphic)
{this._setGraphic(graphic);}
if(data)
{host._parsePathData(data);}
this._updateHandler();},_setGraphic:function(render)
{var graphic;if(render instanceof Y.VMLGraphic)
{this._graphic=render;}
else
{graphic=new Y.VMLGraphic({render:render});graphic._appendShape(this);this._graphic=graphic;this._appendStrokeAndFill();}},_appendStrokeAndFill:function()
{if(this._strokeNode)
{this.node.appendChild(this._strokeNode);}
if(this._fillNode)
{this.node.appendChild(this._fillNode);}},createNode:function()
{var node,concat=this._camelCaseConcat,x=this.get("x"),y=this.get("y"),w=this.get("width"),h=this.get("height"),id,type,name=this.name,nodestring,visibility=this.get("visible")?"visible":"hidden",strokestring,classString,stroke,endcap,opacity,joinstyle,miterlimit,dashstyle,fill,fillstring;id=this.get("id");type=this._type==="path"?"shape":this._type;classString=_getClassName(SHAPE)+" "+
_getClassName(concat(IMPLEMENTATION,SHAPE))+" "+
_getClassName(name)+" "+
_getClassName(concat(IMPLEMENTATION,name))+" "+
IMPLEMENTATION+
type;stroke=this._getStrokeProps();fill=this._getFillProps();nodestring='<'+
type+'  xmlns="urn:schemas-microsft.com:vml" id="'+
id+'" class="'+
classString+'" style="behavior:url(#default#VML);display:inline-block;position:absolute;left:'+
x+'px;top:'+
y+'px;width:'+
w+'px;height:'+
h+'px;visibility:'+
visibility+'"';if(stroke&&stroke.weight&&stroke.weight>0)
{endcap=stroke.endcap;opacity=parseFloat(stroke.opacity);joinstyle=stroke.joinstyle;miterlimit=stroke.miterlimit;dashstyle=stroke.dashstyle;nodestring+=' stroked="t" strokecolor="'+stroke.color+'" strokeWeight="'+stroke.weight+'px"';strokestring='<stroke class="vmlstroke"'+' xmlns="urn:schemas-microsft.com:vml"'+' on="t"'+' style="behavior:url(#default#VML);display:inline-block;"'+' opacity="'+opacity+'"';if(endcap)
{strokestring+=' endcap="'+endcap+'"';}
if(joinstyle)
{strokestring+=' joinstyle="'+joinstyle+'"';}
if(miterlimit)
{strokestring+=' miterlimit="'+miterlimit+'"';}
if(dashstyle)
{strokestring+=' dashstyle="'+dashstyle+'"';}
strokestring+='></stroke>';this._strokeNode=DOCUMENT.createElement(strokestring);nodestring+=' stroked="t"';}
else
{nodestring+=' stroked="f"';}
if(fill)
{if(fill.node)
{fillstring=fill.node;this._fillNode=DOCUMENT.createElement(fillstring);}
if(fill.color)
{nodestring+=' fillcolor="'+fill.color+'"';}
nodestring+=' filled="'+fill.filled+'"';}
nodestring+='>';nodestring+='</'+type+'>';node=DOCUMENT.createElement(nodestring);this.node=node;this._strokeFlag=false;this._fillFlag=false;},addClass:function(className)
{var node=this.node;Y_DOM.addClass(node,className);},removeClass:function(className)
{var node=this.node;Y_DOM.removeClass(node,className);},getXY:function()
{var graphic=this._graphic,parentXY=graphic.getXY(),x=this.get("x"),y=this.get("y");return[parentXY[0]+x,parentXY[1]+y];},setXY:function(xy)
{var graphic=this._graphic,parentXY=graphic.getXY();this.set("x",xy[0]-parentXY[0]);this.set("y",xy[1]-parentXY[1]);},contains:function(needle)
{var node=needle instanceof Y.Node?needle._node:needle;return node===this.node;},compareTo:function(refNode){var node=this.node;return node===refNode;},test:function(selector)
{return Y_SELECTOR.test(this.node,selector);},_getStrokeProps:function()
{var props,stroke=this.get("stroke"),strokeOpacity,dashstyle,dash="",val,i=0,len,linecap,linejoin;if(stroke&&stroke.weight&&stroke.weight>0)
{props={};linecap=stroke.linecap||"flat";linejoin=stroke.linejoin||"round";if(linecap!=="round"&&linecap!=="square")
{linecap="flat";}
strokeOpacity=parseFloat(stroke.opacity);dashstyle=stroke.dashstyle||"none";stroke.color=stroke.color||"#000000";stroke.weight=stroke.weight||1;stroke.opacity=IS_NUM(strokeOpacity)?strokeOpacity:1;props.stroked=true;props.color=stroke.color;props.weight=stroke.weight;props.endcap=linecap;props.opacity=stroke.opacity;if(IS_ARRAY(dashstyle))
{dash=[];len=dashstyle.length;for(i=0;i<len;++i)
{val=dashstyle[i];dash[i]=val / stroke.weight;}}
if(linejoin==="round"||linejoin==="bevel")
{props.joinstyle=linejoin;}
else
{linejoin=parseInt(linejoin,10);if(IS_NUM(linejoin))
{props.miterlimit=Math.max(linejoin,1);props.joinstyle="miter";}}
props.dashstyle=dash;}
return props;},_strokeChangeHandler:function()
{if(!this._strokeFlag)
{return;}
var node=this.node,stroke=this.get("stroke"),strokeOpacity,dashstyle,dash="",val,i=0,len,linecap,linejoin;if(stroke&&stroke.weight&&stroke.weight>0)
{linecap=stroke.linecap||"flat";linejoin=stroke.linejoin||"round";if(linecap!=="round"&&linecap!=="square")
{linecap="flat";}
strokeOpacity=parseFloat(stroke.opacity);dashstyle=stroke.dashstyle||"none";stroke.color=stroke.color||"#000000";stroke.weight=stroke.weight||1;stroke.opacity=IS_NUM(strokeOpacity)?strokeOpacity:1;node.stroked=true;node.strokeColor=stroke.color;node.strokeWeight=stroke.weight+"px";if(!this._strokeNode)
{this._strokeNode=this._createGraphicNode("stroke");node.appendChild(this._strokeNode);}
this._strokeNode.endcap=linecap;this._strokeNode.opacity=stroke.opacity;if(IS_ARRAY(dashstyle))
{dash=[];len=dashstyle.length;for(i=0;i<len;++i)
{val=dashstyle[i];dash[i]=val / stroke.weight;}}
if(linejoin==="round"||linejoin==="bevel")
{this._strokeNode.joinstyle=linejoin;}
else
{linejoin=parseInt(linejoin,10);if(IS_NUM(linejoin))
{this._strokeNode.miterlimit=Math.max(linejoin,1);this._strokeNode.joinstyle="miter";}}
this._strokeNode.dashstyle=dash;this._strokeNode.on=true;}
else
{if(this._strokeNode)
{this._strokeNode.on=false;}
node.stroked=false;}
this._strokeFlag=false;},_getFillProps:function()
{var fill=this.get("fill"),fillOpacity,props,gradient,i,fillstring,filled=false;if(fill)
{props={};if(fill.type==="radial"||fill.type==="linear")
{fillOpacity=parseFloat(fill.opacity);fillOpacity=IS_NUM(fillOpacity)?fillOpacity:1;filled=true;gradient=this._getGradientFill(fill);fillstring='<fill xmlns="urn:schemas-microsft.com:vml"'+' class="vmlfill" style="behavior:url(#default#VML);display:inline-block;"'+' opacity="'+fillOpacity+'"';for(i in gradient)
{if(gradient.hasOwnProperty(i))
{fillstring+=' '+i+'="'+gradient[i]+'"';}}
fillstring+=' />';props.node=fillstring;}
else if(fill.color)
{fillOpacity=parseFloat(fill.opacity);filled=true;props.color=fill.color;if(IS_NUM(fillOpacity))
{fillOpacity=Math.max(Math.min(fillOpacity,1),0);props.opacity=fillOpacity;if(fillOpacity<1)
{props.node='<fill xmlns="urn:schemas-microsft.com:vml"'+' class="vmlfill" style="behavior:url(#default#VML);display:inline-block;"'+' type="solid" opacity="'+fillOpacity+'"/>';}}}
props.filled=filled;}
return props;},_fillChangeHandler:function()
{if(!this._fillFlag)
{return;}
var node=this.node,fill=this.get("fill"),fillOpacity,fillstring,filled=false,i,gradient;if(fill)
{if(fill.type==="radial"||fill.type==="linear")
{filled=true;gradient=this._getGradientFill(fill);if(this._fillNode)
{for(i in gradient)
{if(gradient.hasOwnProperty(i))
{if(i==="colors")
{this._fillNode.colors.value=gradient[i];}
else
{this._fillNode[i]=gradient[i];}}}}
else
{fillstring='<fill xmlns="urn:schemas-microsft.com:vml"'+' class="vmlfill"'+' style="behavior:url(#default#VML);display:inline-block;"';for(i in gradient)
{if(gradient.hasOwnProperty(i))
{fillstring+=' '+i+'="'+gradient[i]+'"';}}
fillstring+=' />';this._fillNode=DOCUMENT.createElement(fillstring);node.appendChild(this._fillNode);}}
else if(fill.color)
{node.fillcolor=fill.color;fillOpacity=parseFloat(fill.opacity);filled=true;if(IS_NUM(fillOpacity)&&fillOpacity<1)
{fill.opacity=fillOpacity;if(this._fillNode)
{if(this._fillNode.getAttribute("type")!=="solid")
{this._fillNode.type="solid";}
this._fillNode.opacity=fillOpacity;}
else
{fillstring='<fill xmlns="urn:schemas-microsft.com:vml"'+' class="vmlfill"'+' style="behavior:url(#default#VML);display:inline-block;"'+' type="solid"'+' opacity="'+fillOpacity+'"'+'/>';this._fillNode=DOCUMENT.createElement(fillstring);node.appendChild(this._fillNode);}}
else if(this._fillNode)
{this._fillNode.opacity=1;this._fillNode.type="solid";}}}
node.filled=filled;this._fillFlag=false;},_updateFillNode:function(node)
{if(!this._fillNode)
{this._fillNode=this._createGraphicNode("fill");node.appendChild(this._fillNode);}},_getGradientFill:function(fill)
{var gradientProps={},gradientBoxWidth,gradientBoxHeight,type=fill.type,w=this.get("width"),h=this.get("height"),isNumber=IS_NUM,stop,stops=fill.stops,len=stops.length,opacity,color,i,oi,colorstring="",cx=fill.cx,cy=fill.cy,fx=fill.fx,fy=fill.fy,r=fill.r,pct,rotation=fill.rotation||0;if(type==="linear")
{if(rotation<=270)
{rotation=Math.abs(rotation-270);}
else if(rotation<360)
{rotation=270+(360-rotation);}
else
{rotation=270;}
gradientProps.type="gradient";gradientProps.angle=rotation;}
else if(type==="radial")
{gradientBoxWidth=w*(r*2);gradientBoxHeight=h*(r*2);fx=r*2*(fx-0.5);fy=r*2*(fy-0.5);fx+=cx;fy+=cy;gradientProps.focussize=(gradientBoxWidth/w)/10+"% "+(gradientBoxHeight/h)/10+"%";gradientProps.alignshape=false;gradientProps.type="gradientradial";gradientProps.focus="100%";gradientProps.focusposition=Math.round(fx*100)+"% "+Math.round(fy*100)+"%";}
for(i=0;i<len;++i){stop=stops[i];color=stop.color;opacity=stop.opacity;opacity=isNumber(opacity)?opacity:1;pct=stop.offset||i/(len-1);pct*=(r*2);pct=Math.round(100*pct)+"%";oi=i>0?i+1:"";gradientProps["opacity"+oi]=opacity+"";colorstring+=", "+pct+" "+color;}
if(parseFloat(pct)<100)
{colorstring+=", 100% "+color;}
gradientProps.colors=colorstring.substr(2);return gradientProps;},_addTransform:function(type,args)
{args=Y.Array(args);this._transform=Y_LANG.trim(this._transform+" "+type+"("+args.join(", ")+")");args.unshift(type);this._transforms.push(args);if(this.initialized)
{this._updateTransform();}},_updateTransform:function()
{var node=this.node,key,transform,transformOrigin,x=this.get("x"),y=this.get("y"),tx,ty,matrix=this.matrix,normalizedMatrix=this._normalizedMatrix,isPathShape=this instanceof Y.VMLPath,i,len=this._transforms.length;if(this._transforms&&this._transforms.length>0)
{transformOrigin=this.get("transformOrigin");if(isPathShape)
{normalizedMatrix.translate(this._left,this._top);}
tx=transformOrigin[0]-0.5;ty=transformOrigin[1]-0.5;tx=Math.max(-0.5,Math.min(0.5,tx));ty=Math.max(-0.5,Math.min(0.5,ty));for(i=0;i<len;++i)
{key=this._transforms[i].shift();if(key)
{normalizedMatrix[key].apply(normalizedMatrix,this._transforms[i]);matrix[key].apply(matrix,this._transforms[i]);}}
if(isPathShape)
{normalizedMatrix.translate(-this._left,-this._top);}
transform=normalizedMatrix.a+","+
normalizedMatrix.c+","+
normalizedMatrix.b+","+
normalizedMatrix.d+","+
0+","+
0;}
this._graphic.addToRedrawQueue(this);if(transform)
{if(!this._skew)
{this._skew=DOCUMENT.createElement('<skew class="vmlskew"'+' xmlns="urn:schemas-microsft.com:vml"'+' on="false"'+' style="behavior:url(#default#VML);display:inline-block;"'+'/>');this.node.appendChild(this._skew);}
this._skew.matrix=transform;this._skew.on=true;this._skew.origin=tx+", "+ty;}
if(this._type!=="path")
{this._transforms=[];}
node.style.left=(x+this._getSkewOffsetValue(normalizedMatrix.dx))+"px";node.style.top=(y+this._getSkewOffsetValue(normalizedMatrix.dy))+"px";},_getSkewOffsetValue:function(val)
{var sign=Y.MatrixUtil.sign(val),absVal=Math.abs(val);val=Math.min(absVal,32767)*sign;return val;},_translateX:0,_translateY:0,_transform:"",translate:function(x,y)
{this._translateX+=x;this._translateY+=y;this._addTransform("translate",arguments);},translateX:function(x)
{this._translateX+=x;this._addTransform("translateX",arguments);},translateY:function(y)
{this._translateY+=y;this._addTransform("translateY",arguments);},skew:function()
{this._addTransform("skew",arguments);},skewX:function()
{this._addTransform("skewX",arguments);},skewY:function()
{this._addTransform("skewY",arguments);},rotate:function()
{this._addTransform("rotate",arguments);},scale:function()
{this._addTransform("scale",arguments);},on:function(type,fn)
{if(Y.Node.DOM_EVENTS[type])
{return Y.on(type,fn,"#"+this.get("id"));}
return Y.on.apply(this,arguments);},_draw:function()
{},_updateHandler:function()
{var host=this,node=host.node;host._fillChangeHandler();host._strokeChangeHandler();node.style.width=this.get("width")+"px";node.style.height=this.get("height")+"px";this._draw();host._updateTransform();},_createGraphicNode:function(type)
{type=type||this._type;return DOCUMENT.createElement('<'+type+' xmlns="urn:schemas-microsft.com:vml"'+' style="behavior:url(#default#VML);display:inline-block;"'+' class="vml'+type+'"'+'/>');},_getDefaultFill:function(){return{type:"solid",opacity:1,cx:0.5,cy:0.5,fx:0.5,fy:0.5,r:0.5};},_getDefaultStroke:function()
{return{weight:1,dashstyle:"none",color:"#000",opacity:1.0};},set:function()
{var host=this;AttributeLite.prototype.set.apply(host,arguments);if(host.initialized)
{host._updateHandler();}},getBounds:function()
{var isPathShape=this instanceof Y.VMLPath,w=this.get("width"),h=this.get("height"),x=this.get("x"),y=this.get("y");if(isPathShape)
{x=x+this._left;y=y+this._top;w=this._right-this._left;h=this._bottom-this._top;}
return this._getContentRect(w,h,x,y);},_getContentRect:function(w,h,x,y)
{var transformOrigin=this.get("transformOrigin"),transformX=transformOrigin[0]*w,transformY=transformOrigin[1]*h,transforms=this.matrix.getTransformArray(this.get("transform")),matrix=new Y.Matrix(),i,len=transforms.length,transform,key,contentRect,isPathShape=this instanceof Y.VMLPath;if(isPathShape)
{matrix.translate(this._left,this._top);}
transformX=!isNaN(transformX)?transformX:0;transformY=!isNaN(transformY)?transformY:0;matrix.translate(transformX,transformY);for(i=0;i<len;i=i+1)
{transform=transforms[i];key=transform.shift();if(key)
{matrix[key].apply(matrix,transform);}}
matrix.translate(-transformX,-transformY);if(isPathShape)
{matrix.translate(-this._left,-this._top);}
contentRect=matrix.getContentRect(w,h,x,y);return contentRect;},toFront:function()
{var graphic=this.get("graphic");if(graphic)
{graphic._toFront(this);}},toBack:function()
{var graphic=this.get("graphic");if(graphic)
{graphic._toBack(this);}},_parsePathData:function(val)
{var method,methodSymbol,args,commandArray=Y.Lang.trim(val.match(SPLITPATHPATTERN)),i,len,str,symbolToMethod=this._pathSymbolToMethod;if(commandArray)
{this.clear();len=commandArray.length||0;for(i=0;i<len;i=i+1)
{str=commandArray[i];methodSymbol=str.substr(0,1);args=str.substr(1).match(SPLITARGSPATTERN);method=symbolToMethod[methodSymbol];if(method)
{if(args)
{this[method].apply(this,args);}
else
{this[method].apply(this);}}}
this.end();}},destroy:function()
{var graphic=this.get("graphic");if(graphic)
{graphic.removeShape(this);}
else
{this._destroy();}},_destroy:function()
{if(this.node)
{if(this._fillNode)
{this.node.removeChild(this._fillNode);this._fillNode=null;}
if(this._strokeNode)
{this.node.removeChild(this._strokeNode);this._strokeNode=null;}
Y.Event.purgeElement(this.node,true);if(this.node.parentNode)
{this.node.parentNode.removeChild(this.node);}
this.node=null;}}},Y.VMLDrawing.prototype));VMLShape.ATTRS={transformOrigin:{valueFn:function()
{return[0.5,0.5];}},transform:{setter:function(val)
{var i,len,transform;this.matrix.init();this._normalizedMatrix.init();this._transforms=this.matrix.getTransformArray(val);len=this._transforms.length;for(i=0;i<len;++i)
{transform=this._transforms[i];}
this._transform=val;return val;},getter:function()
{return this._transform;}},x:{value:0},y:{value:0},id:{valueFn:function()
{return Y.guid();},setter:function(val)
{var node=this.node;if(node)
{node.setAttribute("id",val);}
return val;}},width:{value:0},height:{value:0},visible:{value:true,setter:function(val){var node=this.node,visibility=val?"visible":"hidden";if(node)
{node.style.visibility=visibility;}
return val;}},fill:{valueFn:"_getDefaultFill",setter:function(val)
{var i,fill,tmpl=this.get("fill")||this._getDefaultFill();if(val)
{if(val.hasOwnProperty("color"))
{val.type="solid";}
for(i in val)
{if(val.hasOwnProperty(i))
{tmpl[i]=val[i];}}}
fill=tmpl;if(fill&&fill.color)
{if(fill.color===undefined||fill.color==="none")
{fill.color=null;}
else
{if(fill.color.toLowerCase().indexOf("rgba")>-1)
{fill.opacity=Y.Color._getAlpha(fill.color);fill.color=Y.Color.toHex(fill.color);}}}
this._fillFlag=true;return fill;}},stroke:{valueFn:"_getDefaultStroke",setter:function(val)
{var i,stroke,wt,tmpl=this.get("stroke")||this._getDefaultStroke();if(val)
{if(val.hasOwnProperty("weight"))
{wt=parseInt(val.weight,10);if(!isNaN(wt))
{val.weight=wt;}}
for(i in val)
{if(val.hasOwnProperty(i))
{tmpl[i]=val[i];}}}
if(tmpl.color&&tmpl.color.toLowerCase().indexOf("rgba")>-1)
{tmpl.opacity=Y.Color._getAlpha(tmpl.color);tmpl.color=Y.Color.toHex(tmpl.color);}
stroke=tmpl;this._strokeFlag=true;return stroke;}},autoSize:{value:false},pointerEvents:{value:"visiblePainted"},node:{readOnly:true,getter:function()
{return this.node;}},data:{setter:function(val)
{if(this.get("node"))
{this._parsePathData(val);}
return val;}},graphic:{readOnly:true,getter:function()
{return this._graphic;}}};Y.VMLShape=VMLShape;VMLPath=function()
{VMLPath.superclass.constructor.apply(this,arguments);};VMLPath.NAME="path";Y.extend(VMLPath,Y.VMLShape);VMLPath.ATTRS=Y.merge(Y.VMLShape.ATTRS,{width:{getter:function()
{var val=Math.max(this._right-this._left,0);return val;}},height:{getter:function()
{return Math.max(this._bottom-this._top,0);}},path:{readOnly:true,getter:function()
{return this._path;}}});Y.VMLPath=VMLPath;VMLRect=function()
{VMLRect.superclass.constructor.apply(this,arguments);};VMLRect.NAME="rect";Y.extend(VMLRect,Y.VMLShape,{_type:"rect"});VMLRect.ATTRS=Y.VMLShape.ATTRS;Y.VMLRect=VMLRect;VMLEllipse=function()
{VMLEllipse.superclass.constructor.apply(this,arguments);};VMLEllipse.NAME="ellipse";Y.extend(VMLEllipse,Y.VMLShape,{_type:"oval"});VMLEllipse.ATTRS=Y.merge(Y.VMLShape.ATTRS,{xRadius:{lazyAdd:false,getter:function()
{var val=this.get("width");val=Math.round((val/2)*100)/100;return val;},setter:function(val)
{var w=val*2;this.set("width",w);return val;}},yRadius:{lazyAdd:false,getter:function()
{var val=this.get("height");val=Math.round((val/2)*100)/100;return val;},setter:function(val)
{var h=val*2;this.set("height",h);return val;}}});Y.VMLEllipse=VMLEllipse;VMLCircle=function()
{VMLCircle.superclass.constructor.apply(this,arguments);};VMLCircle.NAME="circle";Y.extend(VMLCircle,VMLShape,{_type:"oval"});VMLCircle.ATTRS=Y.merge(VMLShape.ATTRS,{radius:{lazyAdd:false,value:0},width:{setter:function(val)
{this.set("radius",val/2);return val;},getter:function()
{var radius=this.get("radius"),val=radius&&radius>0?radius*2:0;return val;}},height:{setter:function(val)
{this.set("radius",val/2);return val;},getter:function()
{var radius=this.get("radius"),val=radius&&radius>0?radius*2:0;return val;}}});Y.VMLCircle=VMLCircle;VMLPieSlice=function()
{VMLPieSlice.superclass.constructor.apply(this,arguments);};VMLPieSlice.NAME="vmlPieSlice";Y.extend(VMLPieSlice,Y.VMLShape,Y.mix({_type:"shape",_draw:function()
{var x=this.get("cx"),y=this.get("cy"),startAngle=this.get("startAngle"),arc=this.get("arc"),radius=this.get("radius");this.clear();this.drawWedge(x,y,startAngle,arc,radius);this.end();}},Y.VMLDrawing.prototype));VMLPieSlice.ATTRS=Y.mix({cx:{value:0},cy:{value:0},startAngle:{value:0},arc:{value:0},radius:{value:0}},Y.VMLShape.ATTRS);Y.VMLPieSlice=VMLPieSlice;VMLGraphic=function(){VMLGraphic.superclass.constructor.apply(this,arguments);};VMLGraphic.NAME="vmlGraphic";VMLGraphic.ATTRS={render:{},id:{valueFn:function()
{return Y.guid();},setter:function(val)
{var node=this._node;if(node)
{node.setAttribute("id",val);}
return val;}},shapes:{readOnly:true,getter:function()
{return this._shapes;}},contentBounds:{readOnly:true,getter:function()
{return this._contentBounds;}},node:{readOnly:true,getter:function()
{return this._node;}},width:{setter:function(val)
{if(this._node)
{this._node.style.width=val+"px";}
return val;}},height:{setter:function(val)
{if(this._node)
{this._node.style.height=val+"px";}
return val;}},autoSize:{value:false},preserveAspectRatio:{value:"xMidYMid"},resizeDown:{resizeDown:false},x:{getter:function()
{return this._x;},setter:function(val)
{this._x=val;if(this._node)
{this._node.style.left=val+"px";}
return val;}},y:{getter:function()
{return this._y;},setter:function(val)
{this._y=val;if(this._node)
{this._node.style.top=val+"px";}
return val;}},autoDraw:{value:true},visible:{value:true,setter:function(val)
{this._toggleVisible(val);return val;}}};Y.extend(VMLGraphic,Y.GraphicBase,{set:function()
{var host=this,attr=arguments[0],redrawAttrs={autoDraw:true,autoSize:true,preserveAspectRatio:true,resizeDown:true},key,forceRedraw=false;AttributeLite.prototype.set.apply(host,arguments);if(host._state.autoDraw===true&&Y.Object.size(this._shapes)>0)
{if(Y_LANG.isString&&redrawAttrs[attr])
{forceRedraw=true;}
else if(Y_LANG.isObject(attr))
{for(key in redrawAttrs)
{if(redrawAttrs.hasOwnProperty(key)&&attr[key])
{forceRedraw=true;break;}}}}
if(forceRedraw)
{host._redraw();}},_x:0,_y:0,getXY:function()
{var node=this.parentNode,x=this.get("x"),y=this.get("y"),xy;if(node)
{xy=Y.DOM.getXY(node);xy[0]+=x;xy[1]+=y;}
else
{xy=Y.DOM._getOffset(this._node);}
return xy;},initializer:function(){var render=this.get("render"),visibility=this.get("visible")?"visible":"hidden";this._shapes={};this._contentBounds={left:0,top:0,right:0,bottom:0};this._node=this._createGraphic();this._node.style.left=this.get("x")+"px";this._node.style.top=this.get("y")+"px";this._node.style.visibility=visibility;this._node.setAttribute("id",this.get("id"));if(render)
{this.render(render);}},render:function(render){var parentNode=render||DOCUMENT.body,node=this._node,w,h;if(render instanceof Y.Node)
{parentNode=render._node;}
else if(Y.Lang.isString(render))
{parentNode=Y.Selector.query(render,DOCUMENT.body,true);}
w=this.get("width")||parseInt(Y.DOM.getComputedStyle(parentNode,"width"),10);h=this.get("height")||parseInt(Y.DOM.getComputedStyle(parentNode,"height"),10);parentNode.appendChild(node);this.parentNode=parentNode;this.set("width",w);this.set("height",h);return this;},destroy:function()
{this.removeAllShapes();if(this._node)
{this._removeChildren(this._node);if(this._node.parentNode)
{this._node.parentNode.removeChild(this._node);}
this._node=null;}},addShape:function(cfg)
{cfg.graphic=this;if(!this.get("visible"))
{cfg.visible=false;}
var ShapeClass=this._getShapeClass(cfg.type),shape=new ShapeClass(cfg);this._appendShape(shape);shape._appendStrokeAndFill();return shape;},_appendShape:function(shape)
{var node=shape.node,parentNode=this._frag||this._node;if(this.get("autoDraw")||this.get("autoSize")==="sizeContentToGraphic")
{parentNode.appendChild(node);}
else
{this._getDocFrag().appendChild(node);}},removeShape:function(shape)
{if(!(shape instanceof VMLShape))
{if(Y_LANG.isString(shape))
{shape=this._shapes[shape];}}
if(shape&&(shape instanceof VMLShape))
{shape._destroy();this._shapes[shape.get("id")]=null;delete this._shapes[shape.get("id")];}
if(this.get("autoDraw"))
{this._redraw();}},removeAllShapes:function()
{var shapes=this._shapes,i;for(i in shapes)
{if(shapes.hasOwnProperty(i))
{shapes[i].destroy();}}
this._shapes={};},_removeChildren:function(node)
{if(node.hasChildNodes())
{var child;while(node.firstChild)
{child=node.firstChild;this._removeChildren(child);node.removeChild(child);}}},clear:function(){this.removeAllShapes();this._removeChildren(this._node);},_toggleVisible:function(val)
{var i,shapes=this._shapes,visibility=val?"visible":"hidden";if(shapes)
{for(i in shapes)
{if(shapes.hasOwnProperty(i))
{shapes[i].set("visible",val);}}}
if(this._node)
{this._node.style.visibility=visibility;}
if(this._node)
{this._node.style.visibility=visibility;}},setSize:function(w,h){w=Math.round(w);h=Math.round(h);this._node.style.width=w+'px';this._node.style.height=h+'px';},setPosition:function(x,y)
{x=Math.round(x);y=Math.round(y);this._node.style.left=x+"px";this._node.style.top=y+"px";},_createGraphic:function(){var group=DOCUMENT.createElement('<group xmlns="urn:schemas-microsft.com:vml"'+' style="behavior:url(#default#VML);padding:0px 0px 0px 0px;display:block;position:absolute;top:0px;left:0px;zoom:1;"'+'/>');return group;},_createGraphicNode:function(type)
{return DOCUMENT.createElement('<'+
type+' xmlns="urn:schemas-microsft.com:vml"'+' style="behavior:url(#default#VML);display:inline-block;zoom:1;"'+'/>');},getShapeById:function(id)
{return this._shapes[id];},_getShapeClass:function(val)
{var shape=this._shapeClass[val];if(shape)
{return shape;}
return val;},_shapeClass:{circle:Y.VMLCircle,rect:Y.VMLRect,path:Y.VMLPath,ellipse:Y.VMLEllipse,pieslice:Y.VMLPieSlice},batch:function(method)
{var autoDraw=this.get("autoDraw");this.set("autoDraw",false);method.apply();this.set("autoDraw",autoDraw);},_getDocFrag:function()
{if(!this._frag)
{this._frag=DOCUMENT.createDocumentFragment();}
return this._frag;},addToRedrawQueue:function(shape)
{var shapeBox,box;this._shapes[shape.get("id")]=shape;if(!this.get("resizeDown"))
{shapeBox=shape.getBounds();box=this._contentBounds;box.left=box.left<shapeBox.left?box.left:shapeBox.left;box.top=box.top<shapeBox.top?box.top:shapeBox.top;box.right=box.right>shapeBox.right?box.right:shapeBox.right;box.bottom=box.bottom>shapeBox.bottom?box.bottom:shapeBox.bottom;box.width=box.right-box.left;box.height=box.bottom-box.top;this._contentBounds=box;}
if(this.get("autoDraw"))
{this._redraw();}},_redraw:function()
{var autoSize=this.get("autoSize"),preserveAspectRatio,node=this.parentNode,nodeWidth=parseFloat(Y.DOM.getComputedStyle(node,"width")),nodeHeight=parseFloat(Y.DOM.getComputedStyle(node,"height")),xCoordOrigin=0,yCoordOrigin=0,box=this.get("resizeDown")?this._getUpdatedContentBounds():this._contentBounds,left=box.left,right=box.right,top=box.top,bottom=box.bottom,contentWidth=right-left,contentHeight=bottom-top,aspectRatio,xCoordSize,yCoordSize,scaledWidth,scaledHeight,visible=this.get("visible");this._node.style.visibility="hidden";if(autoSize)
{if(autoSize==="sizeContentToGraphic")
{preserveAspectRatio=this.get("preserveAspectRatio");if(preserveAspectRatio==="none"||contentWidth/contentHeight===nodeWidth/nodeHeight)
{xCoordOrigin=left;yCoordOrigin=top;xCoordSize=contentWidth;yCoordSize=contentHeight;}
else
{if(contentWidth*nodeHeight/contentHeight>nodeWidth)
{aspectRatio=nodeHeight/nodeWidth;xCoordSize=contentWidth;yCoordSize=contentWidth*aspectRatio;scaledHeight=(nodeWidth*(contentHeight/contentWidth))*(yCoordSize/nodeHeight);yCoordOrigin=this._calculateCoordOrigin(preserveAspectRatio.slice(5).toLowerCase(),scaledHeight,yCoordSize);yCoordOrigin=top+yCoordOrigin;xCoordOrigin=left;}
else
{aspectRatio=nodeWidth/nodeHeight;xCoordSize=contentHeight*aspectRatio;yCoordSize=contentHeight;scaledWidth=(nodeHeight*(contentWidth/contentHeight))*(xCoordSize/nodeWidth);xCoordOrigin=this._calculateCoordOrigin(preserveAspectRatio.slice(1,4).toLowerCase(),scaledWidth,xCoordSize);xCoordOrigin=xCoordOrigin+left;yCoordOrigin=top;}}
this._node.style.width=nodeWidth+"px";this._node.style.height=nodeHeight+"px";this._node.coordOrigin=xCoordOrigin+", "+yCoordOrigin;}
else
{xCoordSize=contentWidth;yCoordSize=contentHeight;this._node.style.width=contentWidth+"px";this._node.style.height=contentHeight+"px";this._state.width=contentWidth;this._state.height=contentHeight;}
this._node.coordSize=xCoordSize+", "+yCoordSize;}
else
{this._node.style.width=nodeWidth+"px";this._node.style.height=nodeHeight+"px";this._node.coordSize=nodeWidth+", "+nodeHeight;}
if(this._frag)
{this._node.appendChild(this._frag);this._frag=null;}
if(visible)
{this._node.style.visibility="visible";}},_calculateCoordOrigin:function(position,size,coordsSize)
{var coord;switch(position)
{case"min":coord=0;break;case"mid":coord=(size-coordsSize)/2;break;case"max":coord=(size-coordsSize);break;}
return coord;},_getUpdatedContentBounds:function()
{var bounds,i,shape,queue=this._shapes,box={};for(i in queue)
{if(queue.hasOwnProperty(i))
{shape=queue[i];bounds=shape.getBounds();box.left=Y_LANG.isNumber(box.left)?Math.min(box.left,bounds.left):bounds.left;box.top=Y_LANG.isNumber(box.top)?Math.min(box.top,bounds.top):bounds.top;box.right=Y_LANG.isNumber(box.right)?Math.max(box.right,bounds.right):bounds.right;box.bottom=Y_LANG.isNumber(box.bottom)?Math.max(box.bottom,bounds.bottom):bounds.bottom;}}
box.left=Y_LANG.isNumber(box.left)?box.left:0;box.top=Y_LANG.isNumber(box.top)?box.top:0;box.right=Y_LANG.isNumber(box.right)?box.right:0;box.bottom=Y_LANG.isNumber(box.bottom)?box.bottom:0;this._contentBounds=box;return box;},_toFront:function(shape)
{var contentNode=this._node;if(shape instanceof Y.VMLShape)
{shape=shape.get("node");}
if(contentNode&&shape)
{contentNode.appendChild(shape);}},_toBack:function(shape)
{var contentNode=this._node,targetNode;if(shape instanceof Y.VMLShape)
{shape=shape.get("node");}
if(contentNode&&shape)
{targetNode=contentNode.firstChild;if(targetNode)
{contentNode.insertBefore(shape,targetNode);}
else
{contentNode.appendChild(shape);}}}});Y.VMLGraphic=VMLGraphic;},'3.15.0',{"requires":["graphics"]});