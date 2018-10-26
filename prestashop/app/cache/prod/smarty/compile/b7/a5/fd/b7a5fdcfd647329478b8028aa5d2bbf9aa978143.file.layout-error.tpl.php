<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:33
         compiled from "/var/www/html/prestashop/themes/classic/templates/layouts/layout-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4320109165bd180cd0671a0-04173729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a5fdcfd647329478b8028aa5d2bbf9aa978143' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1540456552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4320109165bd180cd0671a0-04173729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cd06def8_40091393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cd06def8_40091393')) {function content_5bd180cd06def8_40091393($_smarty_tpl) {?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
      <title></title>
      <meta name="description" content="">
      <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
      <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '12106656455bd180ccd5ebf9-27093424');
content_5bd180ccd70118_99116579($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>
    

  </head>

  <body>

    <div id="layout-error">
      
        <p>Hello world! This is HTML5 Boilerplate.</p>
      
    </div>

  </body>

</html>
<?php }} ?>
