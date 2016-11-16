/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('file',function(Y,NAME){var Win=Y.config.win;if(Win&&Win.File&&Win.FormData&&Win.XMLHttpRequest){Y.File=Y.FileHTML5;}
else{Y.File=Y.FileFlash;}},'3.15.0',{"requires":["file-flash","file-html5"]});