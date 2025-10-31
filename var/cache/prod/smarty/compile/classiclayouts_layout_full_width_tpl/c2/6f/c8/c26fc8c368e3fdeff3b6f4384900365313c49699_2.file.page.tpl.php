<?php
/* Smarty version 4.3.4, created on 2025-10-14 22:26:07
  from '/home/app/PrestaShop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ee5d7f8108b6_41621714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c26fc8c368e3fdeff3b6f4384900365313c49699' => 
    array (
      0 => '/home/app/PrestaShop/themes/classic/templates/page.tpl',
      1 => 1758908842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ee5d7f8108b6_41621714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47910315968ee5d7f8098a3_02499428', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_143497041068ee5d7f80acd9_59711345 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_141463432268ee5d7f80a636_62664309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143497041068ee5d7f80acd9_59711345', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_104721735668ee5d7f80de23_05143072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_149004825368ee5d7f80e655_19395230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_60125413968ee5d7f80d757_56739612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104721735668ee5d7f80de23_05143072', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149004825368ee5d7f80e655_19395230', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_108263320168ee5d7f80f432_69032240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_171577687068ee5d7f80f074_69965191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108263320168ee5d7f80f432_69032240', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_47910315968ee5d7f8098a3_02499428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_47910315968ee5d7f8098a3_02499428',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_141463432268ee5d7f80a636_62664309',
  ),
  'page_title' => 
  array (
    0 => 'Block_143497041068ee5d7f80acd9_59711345',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_60125413968ee5d7f80d757_56739612',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_104721735668ee5d7f80de23_05143072',
  ),
  'page_content' => 
  array (
    0 => 'Block_149004825368ee5d7f80e655_19395230',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_171577687068ee5d7f80f074_69965191',
  ),
  'page_footer' => 
  array (
    0 => 'Block_108263320168ee5d7f80f432_69032240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141463432268ee5d7f80a636_62664309', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60125413968ee5d7f80d757_56739612', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171577687068ee5d7f80f074_69965191', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
