nv.models.line=function(){var scatter=nv.models.scatter();var margin={top:0,right:0,bottom:0,left:0},width=960,height=500,getX=function(d){return d.x;},getY=function(d){return d.y;},defined=function(d,i){return!isNaN(getY(d,i))&&getY(d,i)!==null;},isArea=function(d){return(d&&d.area)||false;},clipEdge=false,x,y,delay=200,interpolate="linear",color=function(d,i){return nv.utils.defaultColor()(d,d.series);},fill=color,classes=function(d,i){return'nv-group nv-series-'+d.series;};scatter.size(16).sizeDomain([16,256]);var x0,y0;function chart(selection){selection.each(function(data){var availableWidth=width-margin.left-margin.right,availableHeight=height-margin.top-margin.bottom,container=d3.select(this);x=scatter.xScale();y=scatter.yScale();x0=x0||x;y0=y0||y;var wrap=container.selectAll('g.nv-wrap.nv-line').data([data]);var wrapEnter=wrap.enter().append('g').attr('class','nvd3 nv-wrap nv-line');var defsEnter=wrapEnter.append('defs');var gEnter=wrapEnter.append('g');var g=wrap.select('g');chart.gradient=function(d,i,p){return nv.utils.colorLinearGradient(d,chart.id()+'-'+i,p,color(d,i),wrap.select('defs'));};gEnter.append('g').attr('class','nv-groups');gEnter.append('g').attr('class','nv-scatterWrap');wrap.attr('transform','translate('+margin.left+','+margin.top+')');scatter.width(availableWidth).height(availableHeight);var scatterWrap=wrap.select('.nv-scatterWrap');d3.transition(scatterWrap).call(scatter);defsEnter.append('clipPath').attr('id','nv-edge-clip-'+scatter.id()).append('rect');wrap.select('#nv-edge-clip-'+scatter.id()+' rect').attr('width',availableWidth).attr('height',availableHeight);g.attr('clip-path',clipEdge?'url(#nv-edge-clip-'+scatter.id()+')':'');scatterWrap.attr('clip-path',clipEdge?'url(#nv-edge-clip-'+scatter.id()+')':'');var groups=wrap.select('.nv-groups').selectAll('.nv-group').data(function(d){return d;},function(d){return d.key;});groups.enter().append('g').style('stroke-opacity',1e-6).style('fill-opacity',1e-6);d3.transition(groups.exit()).style('stroke-opacity',1e-6).style('fill-opacity',1e-6).remove();groups.classed('hover',function(d){return d.hover;}).attr('class',classes).attr('fill',color).attr('stroke',color);d3.transition(groups).style('stroke-opacity',1).style('fill-opacity',0.5);var areaPaths=groups.selectAll('path.nv-area').data(function(d){return isArea(d)?[d]:[];});areaPaths.enter().append('path').attr('class','nv-area').attr('d',function(d){return d3.svg.area().interpolate(interpolate).defined(defined).x(function(d,i){return x0(getX(d,i));}).y0(function(d,i){return y0(getY(d,i));}).y1(function(d,i){return y0(y.domain()[0]<=0?y.domain()[1]>=0?0:y.domain()[1]:y.domain()[0]);}).apply(this,[d.values]);});areaPaths.exit().remove();d3.transition(groups.exit().selectAll('path.nv-area')).attr('d',function(d){return d3.svg.area().interpolate(interpolate).defined(defined).x(function(d,i){return x0(getX(d,i));}).y0(function(d,i){return y0(getY(d,i));}).y1(function(d,i){return y0(y.domain()[0]<=0?y.domain()[1]>=0?0:y.domain()[1]:y.domain()[0]);}).apply(this,[d.values]);});d3.transition(areaPaths).attr('d',function(d){return d3.svg.area().interpolate(interpolate).defined(defined).x(function(d,i){return x(getX(d,i));}).y0(function(d,i){return y(getY(d,i));}).y1(function(d,i){return y0(y.domain()[0]<=0?y.domain()[1]>=0?0:y.domain()[1]:y.domain()[0]);}).apply(this,[d.values]);});var linePaths=groups.selectAll('path.nv-line').data(function(d){return[d.values];});linePaths.enter().append('path').attr('class','nv-line').attr('d',d3.svg.line().interpolate(interpolate).defined(defined).x(function(d,i){return x0(getX(d,i));}).y(function(d,i){return y0(getY(d,i));}));d3.transition(groups.exit().selectAll('path.nv-line')).attr('d',d3.svg.line().interpolate(interpolate).defined(defined).x(function(d,i){return x0(getX(d,i));}).y(function(d,i){return y0(getY(d,i));}));d3.transition(linePaths).attr('d',d3.svg.line().interpolate(interpolate).defined(defined).x(function(d,i){return x(getX(d,i));}).y(function(d,i){return y(getY(d,i));}));x0=x.copy();y0=y.copy();});return chart;}
chart.dispatch=scatter.dispatch;chart.scatter=scatter;d3.rebind(chart,scatter,'id','interactive','size','xScale','yScale','zScale','xDomain','yDomain','sizeDomain','forceX','forceY','forceSize','useVoronoi','clipVoronoi','clipRadius','padData');chart.color=function(_){if(!arguments.length){return color;}
color=_;scatter.color(color);return chart;};chart.fill=function(_){if(!arguments.length){return fill;}
fill=_;scatter.fill(fill);return chart;};chart.classes=function(_){if(!arguments.length){return classes;}
classes=_;scatter.classes(classes);return chart;};chart.gradient=function(_){if(!arguments.length){return gradient;}
gradient=_;return chart;};chart.margin=function(_){if(!arguments.length){return margin;}
margin.top=typeof _.top!='undefined'?_.top:margin.top;margin.right=typeof _.right!='undefined'?_.right:margin.right;margin.bottom=typeof _.bottom!='undefined'?_.bottom:margin.bottom;margin.left=typeof _.left!='undefined'?_.left:margin.left;return chart;};chart.width=function(_){if(!arguments.length){return width;}
width=_;return chart;};chart.height=function(_){if(!arguments.length){return height;}
height=_;return chart;};chart.x=function(_){if(!arguments.length){return getX;}
getX=_;scatter.x(_);return chart;};chart.y=function(_){if(!arguments.length){return getY;}
getY=_;scatter.y(_);return chart;};chart.delay=function(_){if(!arguments.length){return delay;}
delay=_;return chart;};chart.clipEdge=function(_){if(!arguments.length){return clipEdge;}
clipEdge=_;return chart;};chart.interpolate=function(_){if(!arguments.length){return interpolate;}
interpolate=_;return chart;};chart.defined=function(_){if(!arguments.length){return defined;}
defined=_;return chart;};chart.isArea=function(_){if(!arguments.length){return isArea;}
isArea=d3.functor(_);return chart;};return chart;};