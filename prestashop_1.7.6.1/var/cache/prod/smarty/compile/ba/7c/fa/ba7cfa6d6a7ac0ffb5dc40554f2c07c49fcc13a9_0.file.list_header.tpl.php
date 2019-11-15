<?php
/* Smarty version 3.1.33, created on 2019-11-15 15:17:53
  from '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dceb3911fe032_61890838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7cfa6d6a7ac0ffb5dc40554f2c07c49fcc13a9' => 
    array (
      0 => '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1571734277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dceb3911fe032_61890838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7646345815dceb3911fd091_51162826', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_7646345815dceb3911fd091_51162826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_7646345815dceb3911fd091_51162826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
