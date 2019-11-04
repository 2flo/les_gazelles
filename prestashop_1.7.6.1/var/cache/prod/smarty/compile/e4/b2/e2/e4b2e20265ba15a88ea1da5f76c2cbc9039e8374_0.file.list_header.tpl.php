<?php
/* Smarty version 3.1.33, created on 2019-11-04 16:38:53
  from '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/template/controllers/addresses/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc0460d673354_01162402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4b2e20265ba15a88ea1da5f76c2cbc9039e8374' => 
    array (
      0 => '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/template/controllers/addresses/helpers/list/list_header.tpl',
      1 => 1571734277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc0460d673354_01162402 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12502422725dc0460d671c36_51009141', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_12502422725dc0460d671c36_51009141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_12502422725dc0460d671c36_51009141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
