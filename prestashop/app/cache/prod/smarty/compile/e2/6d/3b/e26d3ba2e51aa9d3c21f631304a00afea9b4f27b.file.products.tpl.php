<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:32
         compiled from "/var/www/html/prestashop/themes/classic/templates/catalog/_partials/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4049326625bd180cce9ba00-50650247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e26d3ba2e51aa9d3c21f631304a00afea9b4f27b' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/catalog/_partials/products.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4049326625bd180cce9ba00-50650247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180ccea34e8_84726724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180ccea34e8_84726724')) {function content_5bd180ccea34e8_84726724($_smarty_tpl) {?>
<div id="js-product-list">
  <div class="products row">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      
        <?php echo $_smarty_tpl->getSubTemplate ('catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

      
    <?php } ?>
  </div>

  
    <?php echo $_smarty_tpl->getSubTemplate ('_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0);?>

  

  <div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      <?php echo smartyTranslate(array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php }} ?>
