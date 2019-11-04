<?php
/* Smarty version 3.1.33, created on 2019-11-04 16:34:24
  from '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/themes/classic/templates/errors/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc04500a49f52_72212827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f48168de8cb6b92a17c23db116b88fdbaf33c5f' => 
    array (
      0 => '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/themes/classic/templates/errors/404.tpl',
      1 => 1571734278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5dc04500a49f52_72212827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7476428815dc04500a41b96_50277664', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12635316215dc04500a46ba0_80930182', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_7476428815dc04500a41b96_50277664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_7476428815dc04500a41b96_50277664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_12635316215dc04500a46ba0_80930182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12635316215dc04500a46ba0_80930182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
