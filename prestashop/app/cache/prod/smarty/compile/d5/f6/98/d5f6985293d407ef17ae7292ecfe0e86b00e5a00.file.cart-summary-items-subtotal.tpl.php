<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:32
         compiled from "/var/www/html/prestashop/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3276561115bd180ccc46689-42145121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5f6985293d407ef17ae7292ecfe0e86b00e5a00' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3276561115bd180ccc46689-42145121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180ccc4a2a9_49472599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180ccc4a2a9_49472599')) {function content_5bd180ccc4a2a9_49472599($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
