<?php
/* Smarty version 4.3.4, created on 2025-10-14 22:26:14
  from '/home/app/PrestaShop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ee5d867cefa3_48765763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38e46194180b61920aeea08afbb1f40304037a2e' => 
    array (
      0 => '/home/app/PrestaShop/modules/psxdesign/views/templates/hook/displayModuleTag.tpl',
      1 => 1760451950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ee5d867cefa3_48765763 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
