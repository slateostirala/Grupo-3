<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:34
         compiled from "/var/www/html/prestashop/admin/themes/default/template/controllers/modules/readmore-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5699819595bd180ce538a10-14883553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f717a578b619c0e9e737989df0280d1cc2c2e7d2' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/controllers/modules/readmore-header.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5699819595bd180ce538a10-14883553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayName' => 0,
    'version' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180ce53d157_84025189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180ce53d157_84025189')) {function content_5bd180ce53d157_84025189($_smarty_tpl) {?>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 class="modal-title">
	<div class="module_name">
		<a href="#" class="icon icon-chevron-left" onclick="openModulesList()"></a>
			<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>

			<small class="text-muted"><?php echo smartyTranslate(array('s'=>'v'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 - <?php echo smartyTranslate(array('s'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</small>
	</div>
</h3>
<?php }} ?>
