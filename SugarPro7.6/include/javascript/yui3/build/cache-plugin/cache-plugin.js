/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('cache-plugin',function(Y,NAME){function CachePlugin(config){var cache=config&&config.cache?config.cache:Y.Cache,tmpclass=Y.Base.create("dataSourceCache",cache,[Y.Plugin.Base]),tmpinstance=new tmpclass(config);tmpclass.NS="tmpClass";return tmpinstance;}
Y.mix(CachePlugin,{NS:"cache",NAME:"cachePlugin"});Y.namespace("Plugin").Cache=CachePlugin;},'3.15.0',{"requires":["plugin","cache-base"]});