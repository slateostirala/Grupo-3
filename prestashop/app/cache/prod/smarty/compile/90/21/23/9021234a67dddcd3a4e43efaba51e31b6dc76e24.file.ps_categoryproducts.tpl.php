<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:32
         compiled from "/var/www/html/prestashop/themes/classic/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4140649985bd180cc8d9b74-88489958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9021234a67dddcd3a4e43efaba51e31b6dc76e24' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4140649985bd180cc8d9b74-88489958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cc8e2717_48643783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cc8e2717_48643783')) {function content_5bd180cc8e2717_48643783($_smarty_tpl) {?>
<section class="featured-products clearfix m-t-3">
  <h2>
    <?php if (count($_smarty_tpl->tpl_vars['products']->value)==1) {?>
      <?php echo smartyTranslate(array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

    <?php } else { ?>
      <?php echo smartyTranslate(array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

    <?php }?>
  </h2>
  <div class="products">
      <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
          <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

      <?php } ?>
  </div>
</section>
<?php }} ?>
