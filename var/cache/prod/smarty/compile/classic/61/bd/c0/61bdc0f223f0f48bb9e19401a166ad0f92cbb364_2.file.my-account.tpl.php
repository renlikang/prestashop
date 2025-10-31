<?php
/* Smarty version 4.3.4, created on 2025-10-14 22:29:24
  from '/home/app/PrestaShop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ee5e44208ab5_84611151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61bdc0f223f0f48bb9e19401a166ad0f92cbb364' => 
    array (
      0 => '/home/app/PrestaShop/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account.tpl',
      1 => 1758908842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ee5e44208ab5_84611151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="emailsalerts"
   href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
  <span class="link-item">
  <i class="material-icons">&#xE151;</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </span>
</a>
<?php }
}
