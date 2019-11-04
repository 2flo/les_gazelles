<?php
/* Smarty version 3.1.33, created on 2019-11-04 16:34:25
  from '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc04501b97523_05566604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57db2ee2130fdf71ab92ce53ecb108a4bc033cc7' => 
    array (
      0 => '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/themes/classic/templates/errors/not-found.tpl',
      1 => 1571734278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc04501b97523_05566604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17931025235dc04501b932d8_68847390', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_12165681195dc04501b952d7_07818125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_8824540215dc04501b96388_18513751 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_17931025235dc04501b932d8_68847390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17931025235dc04501b932d8_68847390',
  ),
  'search' => 
  array (
    0 => 'Block_12165681195dc04501b952d7_07818125',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_8824540215dc04501b96388_18513751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12165681195dc04501b952d7_07818125', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8824540215dc04501b96388_18513751', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
