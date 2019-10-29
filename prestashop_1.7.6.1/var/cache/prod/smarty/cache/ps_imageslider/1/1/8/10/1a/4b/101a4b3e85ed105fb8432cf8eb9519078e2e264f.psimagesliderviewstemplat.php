<?php
/* Smarty version 3.1.33, created on 2019-10-29 16:26:38
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db85a2e264a43_21979191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1571734278,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5db85a2e264a43_21979191 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/les_gazelles/prestashop_1.7.6.1/modules/ps_imageslider/images/b837c3a735a0c431fefdbc9cfbf55431b3c7ed0d_interieur_gazelle.JPG" alt="intérieur">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Intérieur</h2>
                  <div class="caption-description"><p>Première image de l'intérieur de la boutique</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-FR&amp;utm_content=download">
            <figure>
              <img src="http://localhost/les_gazelles/prestashop_1.7.6.1/modules/ps_imageslider/images/4a281a601cd72f54eafa28a658e84baaae5926e3_interieur_gazelle_two.JPG" alt="intérieur deux">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Deuxième</h2>
                  <div class="caption-description"><p>Deuxième photo de l'intérieur de la boutique</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </div>
<?php }
}
