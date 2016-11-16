/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('axis-time',function(Y,NAME){Y.TimeAxis=Y.Base.create("timeAxis",Y.Axis,[Y.TimeImpl],{_getLabelByIndex:function(i,l)
{var min=this.get("minimum"),max=this.get("maximum"),increm,label;l-=1;increm=((max-min)/l)*i;label=min+increm;return label;},_getLabelData:function(constantVal,staticCoord,dynamicCoord,min,max,edgeOffset,layoutLength,count,dataValues)
{var dataValue,i,points=[],values=[],point,offset=edgeOffset;dataValues=dataValues||this._getDataValuesByCount(count,min,max);for(i=0;i<count;i=i+1)
{dataValue=this._getNumber(dataValues[i]);if(dataValue<=max&&dataValue>=min)
{point={};point[staticCoord]=constantVal;point[dynamicCoord]=this._getCoordFromValue(min,max,layoutLength,dataValue,offset);points.push(point);values.push(dataValue);}}
return{points:points,values:values};}});},'3.15.0',{"requires":["axis","axis-time-base"]});