<?php
/* Smarty version 4.3.4, created on 2025-10-14 22:26:07
  from '/home/app/PrestaShop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ee5d7f85c073_24063865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9023b0149590c7885903c1afdeef78af14fe1549' => 
    array (
      0 => '/home/app/PrestaShop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1758908842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ee5d7f85c073_24063865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/app/PrestaShop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/90/23/b0/9023b0149590c7885903c1afdeef78af14fe1549_2.file.helpers.tpl.php',
    'uid' => '9023b0149590c7885903c1afdeef78af14fe1549',
    'call_name' => 'smarty_template_function_renderLogo_84083948068ee5d7f8540e1_19197387',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_84083948068ee5d7f8540e1_19197387 */
if (!function_exists('smarty_template_function_renderLogo_84083948068ee5d7f8540e1_19197387')) {
function smarty_template_function_renderLogo_84083948068ee5d7f8540e1_19197387(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_84083948068ee5d7f8540e1_19197387 */
}
