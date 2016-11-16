/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-range',function(Y,NAME){function RangeSeries()
{RangeSeries.superclass.constructor.apply(this,arguments);}
RangeSeries.NAME="rangeSeries";RangeSeries.ATTRS={type:{value:"range"},ohlckeys:{valueFn:function(){return{open:"open",high:"high",low:"low",close:"close"};}}};Y.extend(RangeSeries,Y.CartesianSeries,{_calculateMarkerWidth:function(width,count,spacing)
{var val=0;while(val<3&&spacing>-1)
{spacing=spacing-1;val=Math.round(width/count-spacing);if(val%2===0){val=val-1;}}
return Math.max(1,val);},drawSeries:function()
{var xcoords=this.get("xcoords"),ycoords=this.get("ycoords"),styles=this.get("styles"),padding=styles.padding,len=xcoords.length,dataWidth=this.get("width")-(padding.left+padding.right),keys=this.get("ohlckeys"),opencoords=ycoords[keys.open],highcoords=ycoords[keys.high],lowcoords=ycoords[keys.low],closecoords=ycoords[keys.close],width=this._calculateMarkerWidth(dataWidth,len,styles.spacing),halfwidth=width/2;this._drawMarkers(xcoords,opencoords,highcoords,lowcoords,closecoords,len,width,halfwidth,styles);},_getDefaultStyles:function()
{var styles={spacing:3};return this._mergeStyles(styles,RangeSeries.superclass._getDefaultStyles());}});Y.RangeSeries=RangeSeries;},'3.15.0',{"requires":["series-cartesian"]});