<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:32
         compiled from "/var/www/html/prestashop/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13216255215bd180cc7b4606-07332980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a0dd3082cbd7482f6f1526e488ada67bd129050' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_form.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13216255215bd180cc7b4606-07332980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cc7c9aa1_62208758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cc7c9aa1_62208758')) {function content_5bd180cc7c9aa1_62208758($_smarty_tpl) {?>

<form action="#">
  <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value=""><?php echo smartyTranslate(array('s'=>'All brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
      <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php } ?>
  </select>
</form>
<?php }} ?>
