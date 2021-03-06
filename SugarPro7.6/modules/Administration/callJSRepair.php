<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
    /*
    **this is the ajax call that is called from RebuildJSLang.php.  It processes
    **the Request object in order to call correct methods for repairing/rebuilding JSfiles
    *Note that minify.php has already been included as part of index.php, so no need to include again.
    */ 

 
    //set default root directory
    $from = getcwd();
    if(isset($_REQUEST['root_directory'])  && !empty($_REQUEST['root_directory'])){
        $from = $_REQUEST['root_directory'];
    }
    //this script can take a while, change max execution time to 10 mins
    $tmp_time = ini_get('max_execution_time');
    ini_set('max_execution_time','600');
        
        //figure out which commands to call.  
        if($_REQUEST['js_admin_repair'] == 'concat' ){
            //concatenate mode, call the files that will concatenate javascript group files
            $_REQUEST['js_rebuild_concat'] = 'rebuild';
            require_once('jssource/minify.php');

        } else if ($_REQUEST['js_admin_repair'] === 'sidecar') {

            $dir = getcwd();

            chdir('sidecar');
            shell_exec('php -f build.php p');
            chdir($dir);

        }else{
            $_REQUEST['root_directory'] = getcwd();
            require_once('jssource/minify.php');
            $minifyUtils = new SugarMinifyUtils();
            if($_REQUEST['js_admin_repair'] == 'replace'){
                //should replace compressed JS with source js
                $minifyUtils->reverseScripts("$from/jssource/src_files","$from");    
    
            }elseif($_REQUEST['js_admin_repair'] == 'mini'){
                //should replace compressed JS with minified version of source js
                $minifyUtils->reverseScripts("$from/jssource/src_files","$from");
                $minifyUtils->BackUpAndCompressScriptFiles("$from","",false);
                $minifyUtils->ConcatenateFiles("$from");
    
            }elseif($_REQUEST['js_admin_repair'] == 'repair'){
             //should compress existing javascript (including changes done) without overwriting original source files
                $minifyUtils->BackUpAndCompressScriptFiles("$from","",false);
                $minifyUtils->ConcatenateFiles("$from");
            }
        }
    //set execution time back to what it was   
    ini_set('max_execution_time',$tmp_time);

    
 
?>
