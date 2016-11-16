/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('app-transitions-native',function(Y,NAME){var AppTransitions=Y.App.Transitions;function AppTransitionsNative(){}
AppTransitionsNative.prototype={initializer:function(){this._transitioning=false;this._viewTransitionQueue=[];Y.Do.before(this._queueActiveView,this,'_uiSetActiveView');},_dequeueActiveView:function(){var queue=this._viewTransitionQueue,transition=queue.shift(),options;if(transition){if(queue.length){options=Y.merge(transition[2],{transition:false});transition.splice(2,1,options);}
this._uiTransitionActiveView.apply(this,transition);}},_getFx:function(newView,oldView,transition){var fx=AppTransitions.FX,transitions=this.get('transitions');if(transition===false||!transitions){return null;}
if(transition){return fx[transition];}
if(this._isChildView(newView,oldView)){return fx[transitions.toChild];}
if(this._isParentView(newView,oldView)){return fx[transitions.toParent];}
return fx[transitions.navigate];},_queueActiveView:function(){var args=Y.Array(arguments,0,true);this._viewTransitionQueue.push(args);if(!this._transitioning){this._dequeueActiveView();}
return new Y.Do.Prevent();},_uiTransitionActiveView:function(newView,oldView,options){options||(options={});var callback=options.callback,container,transitioning,isChild,isParent,prepend,fx,fxConfig,transitions;if(newView===oldView){callback&&callback.call(this,newView);this._transitioning=false;return this._dequeueActiveView();}
fx=this._getFx(newView,oldView,options.transition);isChild=this._isChildView(newView,oldView);isParent=!isChild&&this._isParentView(newView,oldView);prepend=!!options.prepend||isParent;if(!fx){this._attachView(newView,prepend);this._detachView(oldView);callback&&callback.call(this,newView);this._transitioning=false;return this._dequeueActiveView();}
this._transitioning=true;container=this.get('container');transitioning=Y.App.CLASS_NAMES.transitioning;container.addClass(transitioning);this._attachView(newView,prepend);function complete(){this._detachView(oldView);container.removeClass(transitioning);callback&&callback.call(this,newView);this._transitioning=false;return this._dequeueActiveView();}
transitions=new Y.Parallel({context:this});fxConfig={crossView:!!oldView&&!!newView,prepended:prepend};if(newView&&fx.viewIn){newView.get('container').transition(fx.viewIn,fxConfig,transitions.add());}
if(oldView&&fx.viewOut){oldView.get('container').transition(fx.viewOut,fxConfig,transitions.add());}
transitions.done(complete);}};Y.mix(Y.Transition.fx,{'app:fadeIn':{opacity:1,duration:0.3,on:{start:function(data){var styles={opacity:0},config=data.config;if(config.crossView&&!config.prepended){styles.transform='translateX(-100%)';}
this.setStyles(styles);},end:function(){this.setStyle('transform','translateX(0)');}}},'app:fadeOut':{opacity:0,duration:0.3,on:{start:function(data){var styles={opacity:1},config=data.config;if(config.crossView&&config.prepended){styles.transform='translateX(-100%)';}
this.setStyles(styles);},end:function(){this.setStyle('transform','translateX(0)');}}},'app:slideLeft':{duration:0.3,transform:'translateX(-100%)',on:{start:function(){this.setStyles({opacity:1,transform:'translateX(0%)'});},end:function(){this.setStyle('transform','translateX(0)');}}},'app:slideRight':{duration:0.3,transform:'translateX(0)',on:{start:function(){this.setStyles({opacity:1,transform:'translateX(-100%)'});},end:function(){this.setStyle('transform','translateX(0)');}}}});Y.App.TransitionsNative=AppTransitionsNative;Y.Base.mix(Y.App,[AppTransitionsNative]);},'3.15.0',{"requires":["app-transitions","app-transitions-css","parallel","transition"]});