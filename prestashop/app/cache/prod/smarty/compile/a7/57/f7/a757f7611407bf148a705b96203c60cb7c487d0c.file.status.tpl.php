<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:34
         compiled from "/var/www/html/prestashop/admin/themes/default/template/controllers/currencies/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5128700595bd180cee59543-77903170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a757f7611407bf148a705b96203c60cb7c487d0c' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/controllers/currencies/status.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5128700595bd180cee59543-77903170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cee61720_50151016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cee61720_50151016')) {function content_5bd180cee61720_50151016($_smarty_tpl) {?>
<div class="row">
	<div class="col-lg-12">
		<div class="panel">
			<div class="panel-heading">
				<?php echo smartyTranslate(array('s'=>'Status'),$_smarty_tpl);?>

				<div id="currencyStatus" class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
					<label>
						<input type="checkbox" <?php echo 1==$_smarty_tpl->tpl_vars['status']->value ? 'checked="checked"' : '';?>
><span></span>
					</label>
				</div>
				<div class="clearfix"></div>
			</div>
			<span class="status disabled <?php echo 0==$_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"This currency is disabled"),$_smarty_tpl);?>
</span>
			<span class="status enabled <?php echo 1==$_smarty_tpl->tpl_vars['status']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"This currency is enabled"),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<?php }} ?>
