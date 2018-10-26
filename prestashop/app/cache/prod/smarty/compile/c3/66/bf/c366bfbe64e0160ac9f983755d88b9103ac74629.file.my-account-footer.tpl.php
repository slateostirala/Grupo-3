<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:32
         compiled from "/var/www/html/prestashop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2676688985bd180cc8cf3a1-43244449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c366bfbe64e0160ac9f983755d88b9103ac74629' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2676688985bd180cc8cf3a1-43244449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cc8d2a11_32341047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cc8d2a11_32341047')) {function content_5bd180cc8d2a11_32341047($_smarty_tpl) {?>

<li>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
    <?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </a>
</li>
<?php }} ?>
