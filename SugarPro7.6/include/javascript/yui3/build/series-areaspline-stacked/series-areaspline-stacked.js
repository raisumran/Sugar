/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('series-areaspline-stacked',function(Y,NAME){Y.StackedAreaSplineSeries=Y.Base.create("stackedAreaSplineSeries",Y.AreaSeries,[Y.CurveUtil,Y.StackingUtil],{drawSeries:function()
{this._stackCoordinates();this.drawStackedAreaSpline();}},{ATTRS:{type:{value:"stackedAreaSpline"}}});},'3.15.0',{"requires":["series-stacked","series-areaspline"]});