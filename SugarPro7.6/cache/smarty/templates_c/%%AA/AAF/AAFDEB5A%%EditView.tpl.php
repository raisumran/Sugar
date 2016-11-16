<?php /* Smarty version 2.6.11, created on 2016-11-16 04:14:50
         compiled from include/SugarFields/Fields/Image/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Image/EditView.tpl', 13, false),)), $this); ?>
{*
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
*}
{if empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'default_value','string' => true), $this);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
 }
{/if}  

<?php ob_start();  echo smarty_function_sugarvar(array('key' => 'name'), $this); $this->_smarty_vars['capture']['idname'] = ob_get_contents();  $this->assign('idname', ob_get_contents());ob_end_clean();  if (! empty ( $this->_tpl_vars['displayParams']['idName'] )): ?>
    <?php $this->assign('idname', $this->_tpl_vars['displayParams']['idName']);  endif; ?>

{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="<?php echo $this->_tpl_vars['idname']; ?>
_duplicate" name="<?php echo $this->_tpl_vars['idname']; ?>
_duplicate" value="{$value}"/>
{/if}

<input 
	type="file" id="<?php echo $this->_tpl_vars['idname']; ?>
" name="<?php echo $this->_tpl_vars['idname']; ?>
" 
	title="" size="30" maxlength="255" value="" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
"
	onchange="SUGAR.image.confirm_imagefile('<?php echo $this->_tpl_vars['idname']; ?>
');" 
	class="imageUploader"
	{if !empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) <?php if (! empty ( $this->_tpl_vars['vardef']['calculated'] )): ?>|| true<?php endif; ?> }
	style="display:none"
	{/if}  <?php if (! empty ( $this->_tpl_vars['displayParams']['accesskey'] )): ?> accesskey='<?php echo $this->_tpl_vars['displayParams']['accesskey']; ?>
' <?php endif; ?>
/>

{if empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
) <?php if (! empty ( $this->_tpl_vars['vardef']['calculated'] )): ?>&& false<?php endif; ?>}
{else}
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_<?php echo $this->_tpl_vars['idname']; ?>
').src)">
<img
	id="img_<?php echo $this->_tpl_vars['idname']; ?>
" 
	name="img_<?php echo $this->_tpl_vars['idname']; ?>
" 	
	<?php if (empty ( $this->_tpl_vars['vardef']['calculated'] )): ?>
	   src='index.php?entryPoint=download&id=<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
&type=SugarFieldImage&isTempFile=1'
	<?php else: ?>
	   src='<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
'
	<?php endif; ?>
	style='
		{if "<?php echo $this->_tpl_vars['vardef']['border']; ?>
" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "<?php echo $this->_tpl_vars['vardef']['width']; ?>
" eq ""}
			width: auto;
		{else}
			width: <?php echo $this->_tpl_vars['vardef']['width']; ?>
px;
		{/if}
		{if "<?php echo $this->_tpl_vars['vardef']['height']; ?>
" eq ""}
			height: auto;
		{else}
			height: <?php echo $this->_tpl_vars['vardef']['height']; ?>
px;
		{/if}
		{if empty(<?php echo smarty_function_sugarvar(array('key' => 'value','string' => true), $this);?>
)} 
		  visibility:hidden;
		{/if}
		'	

></a>
<?php if (empty ( $this->_tpl_vars['vardef']['calculated'] )): ?>
<img
	id="bt_remove_<?php echo $this->_tpl_vars['idname']; ?>
" 
	name="bt_remvoe_<?php echo $this->_tpl_vars['idname']; ?>
" 
	alt="{sugar_translate label='LBL_REMOVE'}"
	title="{sugar_translate label='LBL_REMOVE'}"
	src="{sugar_getimagepath file='delete_inline.gif'}"
	onclick="SUGAR.image.remove_upload_imagefile('<?php echo $this->_tpl_vars['idname']; ?>
');" 	
	/>

<input 
	id="remove_imagefile_<?php echo $this->_tpl_vars['idname']; ?>
" name="remove_imagefile_<?php echo $this->_tpl_vars['idname']; ?>
" 
	type="hidden"  value="" />
<?php endif; ?>
{/if}