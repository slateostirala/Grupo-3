<?php /* Smarty version Smarty-3.1.19, created on 2018-10-25 10:37:34
         compiled from "/var/www/html/prestashop/admin/themes/default/template/controllers/themes/configurelayouts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2178721605bd180cecfcd93-39362053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b3715fca652578688f95cfb5ea3e4dde4aba64' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/controllers/themes/configurelayouts.tpl',
      1 => 1540456545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2178721605bd180cecfcd93-39362053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'pages' => 0,
    'page' => 0,
    'page_layouts' => 0,
    'default_layout' => 0,
    'available_layouts' => 0,
    'key' => 0,
    'defaultKey' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5bd180ced15bb7_12767495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bd180ced15bb7_12767495')) {function content_5bd180ced15bb7_12767495($_smarty_tpl) {?>
<div class="panel" id="">

  <div class="panel-heading">
    <i class="icon-cogs"></i>
    <?php echo smartyTranslate(array('s'=>'Choose layouts'),$_smarty_tpl);?>

  </div>

  <form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes');?>
" method="post">
    <div class="form-wrapper clearfix">
      <div class="form-group">

        <div class="col-lg-12">
          <table class="table table-stripped">

            <tr>
              <th><?php echo smartyTranslate(array('s'=>'Page'),$_smarty_tpl);?>
</th>
              <th><?php echo smartyTranslate(array('s'=>'Description','d'=>'Admin.Global'),$_smarty_tpl);?>
</th>
              <th><?php echo smartyTranslate(array('s'=>'Layout'),$_smarty_tpl);?>
</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
              <tr>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['title']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>

                  <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>

                  <?php }?>
                </td>
                  <td>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>

                  </td>
                <td>
                  <?php $_smarty_tpl->tpl_vars["defaultKey"] = new Smarty_variable('', null, 0);?>
                  <select name="layouts[<?php echo $_smarty_tpl->tpl_vars['page']->value['page'];?>
]" id="">
                    <?php if (!isset($_smarty_tpl->tpl_vars['page_layouts']->value[$_smarty_tpl->tpl_vars['page']->value['page']])) {?>
                      <?php $_smarty_tpl->tpl_vars["defaultKey"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['default_layout']->value['key']), null, 0);?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['default_layout']->value['key'];?>
" selected="selected">
                        <?php echo $_smarty_tpl->tpl_vars['default_layout']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['default_layout']->value['description'];?>

                      </option>
                    <?php }?>
                    <?php  $_smarty_tpl->tpl_vars['layout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['layout']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['layout']->key => $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['layout']->key;
?>
                      <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['defaultKey']->value;?>
<?php $_tmp13=ob_get_clean();?><?php if ($_tmp12!==$_tmp13) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['page_layouts']->value[$_smarty_tpl->tpl_vars['page']->value['page']])&&$_smarty_tpl->tpl_vars['page_layouts']->value[$_smarty_tpl->tpl_vars['page']->value['page']]==$_smarty_tpl->tpl_vars['key']->value) {?>selected="selected"<?php }?>>
                          <?php echo $_smarty_tpl->tpl_vars['layout']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['layout']->value['description'];?>

                        </option>
                      <?php }?>
                    <?php } ?>
                  </select>
                </td>
              </tr>
            <?php } ?>

          </table>
        </div>

      </div>
    </div><!-- /.form-wrapper -->

    <div class="panel-footer">
      <input type="hidden" name="action" value="submitConfigureLayouts">
      <button type="submit" class="btn btn-default pull-right" name="submitConfigureLayouts">
        <i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl);?>

      </button>
    </div>

  </form>


</div>
<?php }} ?>
