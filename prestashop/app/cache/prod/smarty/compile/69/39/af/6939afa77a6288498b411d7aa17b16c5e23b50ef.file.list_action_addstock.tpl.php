<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:33
         compiled from "/var/www/html/prestashop/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20794909915bd180cd2579c7-65854573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6939afa77a6288498b411d7aa17b16c5e23b50ef' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20794909915bd180cd2579c7-65854573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cd25bd98_51927217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cd25bd98_51927217')) {function content_5bd180cd25bd98_51927217($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
