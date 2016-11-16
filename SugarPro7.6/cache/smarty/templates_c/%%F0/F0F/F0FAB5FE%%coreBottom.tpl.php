<?php /* Smarty version 2.6.11, created on 2016-11-16 04:37:34
         compiled from modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl', 16, false),array('function', 'html_options', 'modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl', 19, false),array('function', 'sugar_help', 'modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl', 50, false),)), $this); ?>

<?php if ($this->_tpl_vars['hideLevel'] < 5 && $this->_tpl_vars['show_fts']): ?>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_FTS'), $this);?>
:</td>
    <td>
        <?php if (empty ( $this->_tpl_vars['vardef']['full_text_search'] ) || empty ( $this->_tpl_vars['vardef']['full_text_search']['boost'] )): ?>
            <?php echo smarty_function_html_options(array('name' => "full_text_search[boost]",'id' => 'full_text_search','selected' => '0','options' => $this->_tpl_vars['fts_options']), $this);?>

        <?php else: ?>
            <?php echo smarty_function_html_options(array('name' => "full_text_search[boost]",'id' => 'full_text_search','selected' => $this->_tpl_vars['vardef']['full_text_search']['boost'],'options' => $this->_tpl_vars['fts_options']), $this);?>

        <?php endif; ?>
        <img border="0" class="inlineHelpTip" alt="Information" src="themes/Sugar/images/helpInline.png" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $this->_tpl_vars['mod_strings']['LBL_POPHELP_SEARCHABLE']; ?>
','','' );">
    </td>
</tr>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/DynamicFields/templates/Fields/Forms/coreDependent.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['vardef']['type'] != 'bool' && ! $this->_tpl_vars['hideRequired']): ?>
<tr ><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_REQUIRED_OPTION'), $this);?>
:</td><td><input type="checkbox" name="required" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['required'] )): ?>CHECKED<?php endif; ?> <?php if ($this->_tpl_vars['hideLevel'] > 5): ?>disabled<?php endif; ?>/><?php if ($this->_tpl_vars['hideLevel'] > 5): ?><input type="hidden" name="required" value="<?php echo $this->_tpl_vars['vardef']['required']; ?>
"><?php endif; ?></td></tr>
<?php endif; ?>
<tr>
<?php if (! $this->_tpl_vars['hideReportable']): ?>
<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_REPORTABLE'), $this);?>
:</td>
<td>
	<input type="checkbox" name="reportableCheckbox" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['reportable'] )): ?>CHECKED<?php endif; ?> <?php if ($this->_tpl_vars['hideLevel'] > 5): ?>disabled<?php endif; ?> 
	onClick="if(this.checked) document.getElementById('reportable').value=1; else document.getElementById('reportable').value=0;"/>
	<input type="hidden" name="reportable" id="reportable" value="<?php if (! empty ( $this->_tpl_vars['vardef']['reportable'] )):  echo $this->_tpl_vars['vardef']['reportable'];  else: ?>0<?php endif; ?>">
</td>
</tr>
<?php endif; ?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_AUDIT'), $this);?>
:</td><td><input type="checkbox" name="audited" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['audited'] )): ?>CHECKED<?php endif; ?> <?php if ($this->_tpl_vars['hideLevel'] > 5): ?>disabled<?php endif; ?>/><?php if ($this->_tpl_vars['hideLevel'] > 5): ?><input type="hidden" name="audited" value="<?php echo $this->_tpl_vars['vardef']['audited']; ?>
"><?php endif; ?></td></tr>


<?php if (! $this->_tpl_vars['hideImportable']): ?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_IMPORTABLE'), $this);?>
:</td><td>
    <?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
        <?php echo smarty_function_html_options(array('name' => 'importable','id' => 'importable','selected' => $this->_tpl_vars['vardef']['importable'],'options' => $this->_tpl_vars['importable_options']), $this);?>

        <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_IMPORTABLE'],'FIXX' => 250,'FIXY' => 80), $this);?>

    <?php else: ?>
        <?php if (isset ( $this->_tpl_vars['vardef']['importable'] )):  echo $this->_tpl_vars['importable_options'][$this->_tpl_vars['vardef']['importable']]; ?>

        <?php else:  echo $this->_tpl_vars['importable_options']['true'];  endif; ?>
    <?php endif; ?>
</td></tr>
<?php endif;  if (! $this->_tpl_vars['hideDuplicatable']): ?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module' => 'DynamicFields','label' => 'COLUMN_TITLE_DUPLICATE_MERGE'), $this);?>
:</td><td>
<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
    <?php echo smarty_function_html_options(array('name' => 'duplicate_merge','id' => 'duplicate_merge','selected' => $this->_tpl_vars['vardef']['duplicate_merge_dom_value'],'options' => $this->_tpl_vars['duplicate_merge_options']), $this);?>

    <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_DUPLICATE_MERGE'],'FIXX' => 250,'FIXY' => 80), $this);?>

<?php else: ?>
    <?php if (isset ( $this->_tpl_vars['vardef']['duplicate_merge_dom_value'] )):  echo $this->_tpl_vars['vardef']['duplicate_merge_dom_value']; ?>

    <?php else:  echo $this->_tpl_vars['duplicate_merge_options'][0];  endif;  endif; ?>
</td></tr>
<?php endif; ?>
</table>

<?php if (! empty ( $this->_tpl_vars['vardef']['group'] )): ?>
    <input type="hidden" name="group" value="<?php echo $this->_tpl_vars['vardef']['group']; ?>
">
<?php endif; ?>