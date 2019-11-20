<?php
/* Smarty version 3.1.33, created on 2019-11-20 16:03:33
  from '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/themes/classic/templates/catalog/_partials/quickview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd555c5d43891_03491610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa625c39a84a76f39509c7ba8ae5413ff7c2d65f' => 
    array (
      0 => '/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/themes/classic/templates/catalog/_partials/quickview.tpl',
      1 => 1571734278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_5dd555c5d43891_03491610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18708050765dd555c5d3a059_08227552', 'product_cover_thumbnails');
?>

          <div class="arrows js-arrows">
            <i class="material-icons arrow-up js-arrow-up">&#xE316;</i>
            <i class="material-icons arrow-down js-arrow-down">&#xE313;</i>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6859783645dd555c5d3c666_57645918', 'product_prices');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4379117765dd555c5d3d489_50104995', 'product_description_short');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2484093515dd555c5d3e4f1_68812283', 'product_buy');
?>

        </div>
      </div>
     </div>
     <div class="modal-footer">
       <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>
   </div>
 </div>
</div>
<?php }
/* {block 'product_cover_thumbnails'} */
class Block_18708050765dd555c5d3a059_08227552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_18708050765dd555c5d3a059_08227552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'product_prices'} */
class Block_6859783645dd555c5d3c666_57645918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_6859783645dd555c5d3c666_57645918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_4379117765dd555c5d3d489_50104995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_4379117765dd555c5d3d489_50104995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_19035513185dd555c5d403b5_76065381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_add_to_cart'} */
class Block_4259069035dd555c5d41136_18692475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_12149727135dd555c5d41fb8_80862863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_2484093515dd555c5d3e4f1_68812283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_2484093515dd555c5d3e4f1_68812283',
  ),
  'product_variants' => 
  array (
    0 => 'Block_19035513185dd555c5d403b5_76065381',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_4259069035dd555c5d41136_18692475',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_12149727135dd555c5d41fb8_80862863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-actions">
              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19035513185dd555c5d403b5_76065381', 'product_variants', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4259069035dd555c5d41136_18692475', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12149727135dd555c5d41fb8_80862863', 'product_refresh', $this->tplIndex);
?>

            </form>
          </div>
        <?php
}
}
/* {/block 'product_buy'} */
}
