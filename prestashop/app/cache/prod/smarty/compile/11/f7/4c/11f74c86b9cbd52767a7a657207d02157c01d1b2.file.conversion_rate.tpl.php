<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:34
         compiled from "/var/www/html/prestashop/admin/themes/default/template/controllers/currencies/conversion_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8360468675bd180cee388c8-10644332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11f74c86b9cbd52767a7a657207d02157c01d1b2' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/controllers/currencies/conversion_rate.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8360468675bd180cee388c8-10644332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PS_ACTIVE_CRONJOB_EXCHANGE_RATE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cee579c1_36620976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cee579c1_36620976')) {function content_5bd180cee579c1_36620976($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-12">
		<?php if (Module::isInstalled("cronjobs")) {?>
			<?php $_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE'] = new Smarty_variable(Configuration::get('PS_ACTIVE_CRONJOB_EXCHANGE_RATE'), null, 0);?>
			<div id="currencyCronjobLiveExchangeRate" class="panel">
				<div class="panel-heading">
					<?php echo smartyTranslate(array('s'=>'Live exchange rates'),$_smarty_tpl);?>

					<div class="pull-right checkbox titatoggle unchecked-red checkbox-slider--b-flat">
						<label>
							<input type="checkbox" <?php echo 0!=$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? 'checked="checked"' : '';?>
><span></span>
						</label>
					</div>
					<div class="clearfix"></div>
				</div>
				<span class="status disabled <?php echo 0==$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"The exchange rates are not automatically updated"),$_smarty_tpl);?>
</span>
				<span class="status enabled <?php echo 0!=$_smarty_tpl->tpl_vars['PS_ACTIVE_CRONJOB_EXCHANGE_RATE']->value ? '' : 'hide';?>
"><?php echo smartyTranslate(array('s'=>"The exchange rates are automatically updated"),$_smarty_tpl);?>
</span>
			</div>
		<?php }?>
		<div class="panel">
			<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Update exchange rates'),$_smarty_tpl);?>
</div>
			<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCurrencies'),'html','UTF-8');?>
" id="currency_form" method="post">
				<button type="submit" class="btn btn-default col-lg-12 col-xs-4" name="SubmitExchangesRates"><?php echo smartyTranslate(array('s'=>"Update"),$_smarty_tpl);?>
</button>
			</form>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php }} ?>
