/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('event-flick',function(Y,NAME){var GESTURE_MAP=Y.Event._GESTURE_MAP,EVENT={start:GESTURE_MAP.start,end:GESTURE_MAP.end,move:GESTURE_MAP.move},START="start",END="end",MOVE="move",OWNER_DOCUMENT="ownerDocument",MIN_VELOCITY="minVelocity",MIN_DISTANCE="minDistance",PREVENT_DEFAULT="preventDefault",_FLICK_START="_fs",_FLICK_START_HANDLE="_fsh",_FLICK_END_HANDLE="_feh",_FLICK_MOVE_HANDLE="_fmh",NODE_TYPE="nodeType";Y.Event.define('flick',{on:function(node,subscriber,ce){var startHandle=node.on(EVENT[START],this._onStart,this,node,subscriber,ce);subscriber[_FLICK_START_HANDLE]=startHandle;},detach:function(node,subscriber,ce){var startHandle=subscriber[_FLICK_START_HANDLE],endHandle=subscriber[_FLICK_END_HANDLE];if(startHandle){startHandle.detach();subscriber[_FLICK_START_HANDLE]=null;}
if(endHandle){endHandle.detach();subscriber[_FLICK_END_HANDLE]=null;}},processArgs:function(args){var params=(args.length>3)?Y.merge(args.splice(3,1)[0]):{};if(!(MIN_VELOCITY in params)){params[MIN_VELOCITY]=this.MIN_VELOCITY;}
if(!(MIN_DISTANCE in params)){params[MIN_DISTANCE]=this.MIN_DISTANCE;}
if(!(PREVENT_DEFAULT in params)){params[PREVENT_DEFAULT]=this.PREVENT_DEFAULT;}
return params;},_onStart:function(e,node,subscriber,ce){var start=true,endHandle,moveHandle,doc,preventDefault=subscriber._extra.preventDefault,origE=e;if(e.touches){start=(e.touches.length===1);e=e.touches[0];}
if(start){if(preventDefault){if(!preventDefault.call||preventDefault(e)){origE.preventDefault();}}
e.flick={time:new Date().getTime()};subscriber[_FLICK_START]=e;endHandle=subscriber[_FLICK_END_HANDLE];doc=(node.get(NODE_TYPE)===9)?node:node.get(OWNER_DOCUMENT);if(!endHandle){endHandle=doc.on(EVENT[END],Y.bind(this._onEnd,this),null,node,subscriber,ce);subscriber[_FLICK_END_HANDLE]=endHandle;}
subscriber[_FLICK_MOVE_HANDLE]=doc.once(EVENT[MOVE],Y.bind(this._onMove,this),null,node,subscriber,ce);}},_onMove:function(e,node,subscriber,ce){var start=subscriber[_FLICK_START];if(start&&start.flick){start.flick.time=new Date().getTime();}},_onEnd:function(e,node,subscriber,ce){var endTime=new Date().getTime(),start=subscriber[_FLICK_START],valid=!!start,endEvent=e,startTime,time,preventDefault,params,xyDistance,distance,velocity,axis,moveHandle=subscriber[_FLICK_MOVE_HANDLE];if(moveHandle){moveHandle.detach();delete subscriber[_FLICK_MOVE_HANDLE];}
if(valid){if(e.changedTouches){if(e.changedTouches.length===1&&e.touches.length===0){endEvent=e.changedTouches[0];}else{valid=false;}}
if(valid){params=subscriber._extra;preventDefault=params[PREVENT_DEFAULT];if(preventDefault){if(!preventDefault.call||preventDefault(e)){e.preventDefault();}}
startTime=start.flick.time;endTime=new Date().getTime();time=endTime-startTime;xyDistance=[endEvent.pageX-start.pageX,endEvent.pageY-start.pageY];if(params.axis){axis=params.axis;}else{axis=(Math.abs(xyDistance[0])>=Math.abs(xyDistance[1]))?'x':'y';}
distance=xyDistance[(axis==='x')?0:1];velocity=(time!==0)?distance/time:0;if(isFinite(velocity)&&(Math.abs(distance)>=params[MIN_DISTANCE])&&(Math.abs(velocity)>=params[MIN_VELOCITY])){e.type="flick";e.flick={time:time,distance:distance,velocity:velocity,axis:axis,start:start};ce.fire(e);}
subscriber[_FLICK_START]=null;}}},MIN_VELOCITY:0,MIN_DISTANCE:0,PREVENT_DEFAULT:false});},'3.15.0',{"requires":["node-base","event-touch","event-synthetic"]});