<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:32
         compiled from "/var/www/html/prestashop/themes/classic/templates/errors/not-found.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9559729765bd180ccb02c02-67639007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327d507c7d22022f721c76e95d93293e217bd282' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/errors/not-found.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9559729765bd180ccb02c02-67639007',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180ccb089d5_15026444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180ccb089d5_15026444')) {function content_5bd180ccb089d5_15026444($_smarty_tpl) {?>
<section id="content" class="page-content page-not-found">
  

    <h4><?php echo smartyTranslate(array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
    <p><?php echo smartyTranslate(array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl);?>
</p>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNotFound'),$_smarty_tpl);?>

    

  
</section>
<?php }} ?>
