<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:34
         compiled from "/var/www/html/prestashop/admin/themes/default/template/controllers/customer_threads/helpers/view/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2138737845bd180ce9bf6a5-47356601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ffb1d956fa77c51ab4101bedddb7a77effaea4a' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/controllers/customer_threads/helpers/view/message.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138737845bd180ce9bf6a5-47356601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'initial' => 0,
    'type' => 0,
    'current_employee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180ce9dad88_87162240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180ce9dad88_87162240')) {function content_5bd180ce9dad88_87162240($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("customer", null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["type"] = new Smarty_variable("employee", null, 0);?>
<?php }?>

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer') {?>
				<i class="icon-user icon-3x"></i>
			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_image'];?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_employee']->value->firstname,'html','UTF-8');?>
" /><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i>
					<?php if ($_smarty_tpl->tpl_vars['type']->value=='customer') {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['message']->value['customer_name'],'html','UTF-8');?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['message']->value['employee_name'],'html','UTF-8');?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl);?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['file_name'])) {?> <span class="message-product">&nbsp;<i class="icon-link"></i> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['message']->value['file_name'],'html','UTF-8');?>
" class="_blank"><?php echo smartyTranslate(array('s'=>"Attachment"),$_smarty_tpl);?>
</a></span><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['product_name'])) {?> <span class="message-attachment">&nbsp;<i class="icon-book"></i> <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['message']->value['product_link'],'html','UTF-8');?>
" class="_blank"><?php echo smartyTranslate(array('s'=>"Product:"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['message']->value['product_name'],'html','UTF-8');?>
 </a></span><?php }?>
		<p class="message-item-text"><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['message']->value['message'],'html','UTF-8'));?>
</p>
	</div>
</div>
<?php }} ?>
