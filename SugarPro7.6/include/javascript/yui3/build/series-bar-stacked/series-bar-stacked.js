/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-bar-stacked',function(Y,NAME){var Y_Lang=Y.Lang;Y.StackedBarSeries=Y.Base.create("stackedBarSeries",Y.BarSeries,[Y.StackingUtil],{drawSeries:function()
{if(this.get("xcoords").length<1)
{return;}
var isNumber=Y_Lang.isNumber,style=this._copyObject(this.get("styles").marker),w=style.width,h=style.height,xcoords=this.get("xcoords"),ycoords=this.get("ycoords"),i=0,len=xcoords.length,top=ycoords[0],seriesCollection=this.get("seriesTypeCollection"),ratio,order=this.get("order"),graphOrder=this.get("graphOrder"),left,marker,lastCollection,negativeBaseValues,positiveBaseValues,fillColors,borderColors,useOrigin=order===0,totalHeight=len*h,dimensions={width:[],height:[]},xvalues=[],yvalues=[],groupMarkers=this.get("groupMarkers");if(Y_Lang.isArray(style.fill.color))
{fillColors=style.fill.color.concat();}
if(Y_Lang.isArray(style.border.color))
{borderColors=style.border.color.concat();}
this._createMarkerCache();if(totalHeight>this.get("height"))
{ratio=this.get("height")/totalHeight;h*=ratio;h=Math.max(h,1);}
if(!useOrigin)
{lastCollection=seriesCollection[order-1];negativeBaseValues=lastCollection.get("negativeBaseValues");positiveBaseValues=lastCollection.get("positiveBaseValues");if(!negativeBaseValues||!positiveBaseValues)
{useOrigin=true;positiveBaseValues=[];negativeBaseValues=[];}}
else
{negativeBaseValues=[];positiveBaseValues=[];}
this.set("negativeBaseValues",negativeBaseValues);this.set("positiveBaseValues",positiveBaseValues);for(i=0;i<len;++i)
{top=ycoords[i];left=xcoords[i];if(!isNumber(top)||!isNumber(left))
{if(useOrigin)
{positiveBaseValues[i]=this._leftOrigin;negativeBaseValues[i]=this._leftOrigin;}
this._markers.push(null);continue;}
if(useOrigin)
{w=Math.abs(left-this._leftOrigin);if(left>this._leftOrigin)
{positiveBaseValues[i]=left;negativeBaseValues[i]=this._leftOrigin;left-=w;}
else if(left<this._leftOrigin)
{positiveBaseValues[i]=this._leftOrigin;negativeBaseValues[i]=left;}
else
{positiveBaseValues[i]=left;negativeBaseValues[i]=this._leftOrigin;}}
else
{if(left<this._leftOrigin)
{left=negativeBaseValues[i]-(this._leftOrigin-xcoords[i]);w=negativeBaseValues[i]-left;negativeBaseValues[i]=left;}
else if(left>=this._leftOrigin)
{left+=(positiveBaseValues[i]-this._leftOrigin);w=left-positiveBaseValues[i];positiveBaseValues[i]=left;left-=w;}}
if(!isNaN(w)&&w>0)
{top-=h/2;if(groupMarkers)
{dimensions.width[i]=w;dimensions.height[i]=h;xvalues.push(left);yvalues.push(top);}
else
{style.width=w;style.height=h;style.x=left;style.y=top;if(fillColors)
{style.fill.color=fillColors[i%fillColors.length];}
if(borderColors)
{style.border.color=borderColors[i%borderColors.length];}
marker=this.getMarker(style,graphOrder,i);}}
else if(!groupMarkers)
{this._markers.push(null);}}
if(groupMarkers)
{this._createGroupMarker({fill:style.fill,border:style.border,dimensions:dimensions,xvalues:xvalues,yvalues:yvalues,shape:style.shape});}
else
{this._clearMarkerCache();}},updateMarkerState:function(type,i)
{if(this._markers[i])
{var state=this._getState(type),ycoords=this.get("ycoords"),marker=this._markers[i],styles=this.get("styles").marker,h=styles.height,markerStyles=state==="off"||!styles[state]?this._copyObject(styles):this._copyObject(styles[state]),fillColor,borderColor;markerStyles.y=(ycoords[i]-h/2);markerStyles.x=marker.get("x");markerStyles.width=marker.get("width");markerStyles.id=marker.get("id");fillColor=markerStyles.fill.color;borderColor=markerStyles.border.color;if(Y_Lang.isArray(fillColor))
{markerStyles.fill.color=fillColor[i%fillColor.length];}
else
{markerStyles.fill.color=this._getItemColor(markerStyles.fill.color,i);}
if(Y_Lang.isArray(borderColor))
{markerStyles.border.color=borderColor[i%borderColor.length];}
else
{markerStyles.border.color=this._getItemColor(markerStyles.border.color,i);}
marker.set(markerStyles);}},_getPlotDefaults:function()
{var defs={fill:{type:"solid",alpha:1,colors:null,alphas:null,ratios:null},border:{weight:0,alpha:1},width:24,height:24,shape:"rect",padding:{top:0,left:0,right:0,bottom:0}};defs.fill.color=this._getDefaultColor(this.get("graphOrder"),"fill");defs.border.color=this._getDefaultColor(this.get("graphOrder"),"border");return defs;}},{ATTRS:{type:{value:"stackedBar"},direction:{value:"vertical"},negativeBaseValues:{value:null},positiveBaseValues:{value:null}}});},'3.15.0',{"requires":["series-stacked","series-bar"]});