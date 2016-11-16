/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('widget-skin',function(Y,NAME){var BOUNDING_BOX="boundingBox",CONTENT_BOX="contentBox",SKIN="skin",_getClassName=Y.ClassNameManager.getClassName;Y.Widget.prototype.getSkinName=function(skinPrefix){var root=this.get(CONTENT_BOX)||this.get(BOUNDING_BOX),match,search;skinPrefix=skinPrefix||_getClassName(SKIN,"");search=new RegExp('\\b'+skinPrefix+'(\\S+)');if(root){root.ancestor(function(node){match=node.get('className').match(search);return match;});}
return(match)?match[1]:null;};},'3.15.0',{"requires":["widget-base"]});