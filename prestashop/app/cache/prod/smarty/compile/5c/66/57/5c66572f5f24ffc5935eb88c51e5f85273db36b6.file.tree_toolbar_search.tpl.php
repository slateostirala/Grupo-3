<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:33
         compiled from "/var/www/html/prestashop/admin/themes/default/template/helpers/tree/tree_toolbar_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15426029425bd180cd9340f8-93100459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c66572f5f24ffc5935eb88c51e5f85273db36b6' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/helpers/tree/tree_toolbar_search.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15426029425bd180cd9340f8-93100459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'typeahead_source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180cd943dd3_99350722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180cd943dd3_99350722')) {function content_5bd180cd943dd3_99350722($_smarty_tpl) {?>

<!-- <label for="node-search"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>
</label> -->
<div class="pull-right">
	<input type="text"
		<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?>name="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
"<?php }?>
		class="search-field<?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['class']->value,'html','UTF-8');?>
<?php }?>"
		placeholder="<?php echo smartyTranslate(array('s'=>'search...'),$_smarty_tpl);?>
" />
</div>

<?php if (isset($_smarty_tpl->tpl_vars['typeahead_source']->value)&&isset($_smarty_tpl->tpl_vars['id']->value)) {?>

<script type="text/javascript">
	$(document).ready(
		function()
		{
			$("#<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
").typeahead(
			{
				name: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['name']->value,'html','UTF-8');?>
",
				valueKey: 'name',
				local: [<?php echo $_smarty_tpl->tpl_vars['typeahead_source']->value;?>
]
			});

			$("#<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['id']->value,'html','UTF-8');?>
").keypress(function( event ) {
				if ( event.which == 13 ) {
					event.stopPropagation();
				}
			});
		}
	);
</script>
<?php }?>
<?php }} ?>
