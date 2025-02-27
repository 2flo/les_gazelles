<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__9bf7ae04fd7a62e45dd280658e90c51fdd7bc0990b839be63b9516b12e8ad1b0 */
class __TwigTemplate_cae1a7cbdd56b29e8251bce723a86cecffb29cb25878448152113528d7b81b6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/les_gazelles/prestashop_1.7.6.1/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/les_gazelles/prestashop_1.7.6.1/img/app_icon.png\" />

<title>Gestionnaire de modules • Les Gazelles</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.6.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '3f69c1377790aa54c19809ef7971adc6';
    var token_admin_orders = '80553d3de526f7b2834d5aeb67090726';
    var token_admin_customers = '084efc47d6ee08b11e6f9db13026fcf9';
    var token_admin_customer_threads = '344867849fb4356d031f0544bc0f9af2';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '2f71817702ba2dc9ffb4571d3f720d9a';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/catalog/recommended?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg';
    var admin_notification_get_link = '/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/common/notifications?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg';
    var admin_notification_push_link = '/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/common/notifications/ack?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/les_gazelles/prestashop_1.7.6.1/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/les_gazelles/prestashop_1.7.6.1/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/les_gazelles/prestashop_1.7.6.1/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/les_gazelles\\/prestashop_1.7.6.1\\/admin248bfvfcr\\/\";
var baseDir = \"\\/les_gazelles\\/prestashop_1.7.6.1\\/\";
var changeFormLanguageUrl = \"\\/les_gazelles\\/prestashop_1.7.6.1\\/admin248bfvfcr\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/js/admin.js?v=1.7.6.1\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/js/tools.js?v=1.7.6.1\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/les_gazelles/prestashop_1.7.6.1/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminAjaxFaviconBO&amp;token=8f78c9cbfcec8105109d95b44925ea44\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/les_gazelles\\/prestashop_1.7.6.1\\/admin248bfvfcr\\/index.php?controller=AdminGamification&token=5445ef80e3b4c96b8f744f9f6c102ceb\";
            var current_id_tab = 45;
        </script>

";
        // line 174
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-fr adminmodulesmanage\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminDashboard&amp;token=a56e39a68665d455ddc7a415f88a0c01\"></a>
      <span id=\"shop_version\">1.7.6.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminOrders&amp;token=80553d3de526f7b2834d5aeb67090726\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=eaa658b9390a245b6addbc2efaa2bc9b\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item active\"
         href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/manage?token=69da318e86a0538f165028839982b996\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=989ea0e58859166ece9792ebc8d09465\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/catalog/products/new?token=69da318e86a0538f165028839982b996\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCategories&amp;addcategory&amp;token=1985a1b2bc9ef7c72b4c3d646bd6a8b2\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"5\"
        data-rand=\"115\"
        data-icon=\"icon-AdminModulesSf\"
        data-url=\"index.php/improve/modules/manage\"
        data-post-link=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminQuickAccesses&token=70abdace82ed55dc4e8e882ae8dfbdf6\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Supprimer de l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminQuickAccesses&token=70abdace82ed55dc4e8e882ae8dfbdf6\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminSearch&amp;token=c6c10a39541e28e3ce11f7fb8a1a4661\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=aa407ab4f37d898734d24bdef7f9cf8a\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous pensé à vendre sur les places de marché ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/dianeflozin%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Floriane</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/employees/1/edit?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\">
      <i class=\"material-icons\">settings</i>
      Votre profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminLogin&amp;logout=1&amp;token=2afc2391c67119b15b6fc51778441de6\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/employees/toggle-navigation?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminDashboard&amp;token=a56e39a68665d455ddc7a415f88a0c01\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminOrders&amp;token=80553d3de526f7b2834d5aeb67090726\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminOrders&amp;token=80553d3de526f7b2834d5aeb67090726\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/orders/invoices/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminSlip&amp;token=49e364f0ac003b2fb89ee8b35ffbeea1\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/orders/delivery-slips/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCarts&amp;token=aa407ab4f37d898734d24bdef7f9cf8a\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/catalog/products?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/catalog/products?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/catalog/categories?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminTracking&amp;token=e549bac6bdadca370c9ca27e607aac06\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminAttributesGroups&amp;token=0be81572ffa2b8968eb3e43b0839aae5\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/catalog/brands/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminAttachments&amp;token=7657a12bc44d5f0dce552030ba69fc26\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCartRules&amp;token=989ea0e58859166ece9792ebc8d09465\" class=\"link\"> Réductions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/stocks/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/customers/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/sell/customers/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminAddresses&amp;token=651697c7e5559bf6c7a3612beb4c667d\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCustomerThreads&amp;token=344867849fb4356d031f0544bc0f9af2\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCustomerThreads&amp;token=344867849fb4356d031f0544bc0f9af2\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminOrderMessage&amp;token=e606064ccf6340e6d1086c7b4d864d06\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminReturn&amp;token=1a3bf27784ef0245ce34962881f7b990\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminStats&amp;token=eaa658b9390a245b6addbc2efaa2bc9b\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/manage?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/manage?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminPsMboModule&amp;token=9fa3d65b53e4593ef4baec66eb24c80f\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/design/themes/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/design/themes/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminPsMboTheme&amp;token=bb4ead0e0cdce72721d5beee61e7f163\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminMailThemeParent\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/design/mail_theme/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Thème d&#039;email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/design/cms-pages/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/design/modules/positions/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminImages&amp;token=89390d083458fa92913bae7081c0ca87\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/modules/link-widget/list?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCarriers&amp;token=e8d9bf25b9a9cf09565671b0eef239a1\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminCarriers&amp;token=e8d9bf25b9a9cf09565671b0eef239a1\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/shipping/preferences?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/payment/payment_methods?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/payment/payment_methods?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/payment/preferences?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/international/localization/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/international/localization/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminZones&amp;token=6a803364d8898ee11a7b3fe36e337989\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/international/taxes/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/international/translations/settings?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/preferences/preferences?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/preferences/preferences?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/order-preferences/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/product-preferences/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/customer-preferences/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/contacts/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/shop/seo-urls/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminSearchConf&amp;token=e084a93166cddde6f0e603dfb71be7aa\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminGamification&amp;token=5445ef80e3b4c96b8f744f9f6c102ceb\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/system-information/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/system-information/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/performance/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/administration/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/emails/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/import/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/employees/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/sql-requests/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/logs/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/configure/advanced/webservice-keys/?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/manage?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminPsMboModule&token=9fa3d65b53e4593ef4baec66eb24c80f';
    var controller = 'AdminModulesManage';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Se connecter à la marketplace Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Se connecter à la marketplace Addons
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.6.1%2526country%253Dfr/Aide?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/manage?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/alerts?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php/improve/modules/updates?_token=1kqLjKeskZOwI7Ra9J5E6yU75ZZpnn4UWVvIn_MgSKg\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1257
        $this->displayBlock('content_header', $context, $blocks);
        // line 1258
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1259
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1260
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1261
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Modules et services recommandés</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/index.php?controller=AdminDashboard&amp;token=a56e39a68665d455ddc7a415f88a0c01\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=dianeflozin%40gmail.com&amp;firstname=Floriane&amp;lastname=Dazin&amp;website=http%3A%2F%2Flocalhost%2Fles_gazelles%2Fprestashop_1.7.6.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/les_gazelles/prestashop_1.7.6.1/admin248bfvfcr/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=dianeflozin%40gmail.com&amp;firstname=Floriane&amp;lastname=Dazin&amp;website=http%3A%2F%2Flocalhost%2Fles_gazelles%2Fprestashop_1.7.6.1%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1382
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 174
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1257
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1258
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1259
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1260
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1382
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__9bf7ae04fd7a62e45dd280658e90c51fdd7bc0990b839be63b9516b12e8ad1b0";
    }

    public function getDebugInfo()
    {
        return array (  1472 => 1382,  1467 => 1260,  1462 => 1259,  1457 => 1258,  1452 => 1257,  1443 => 174,  1435 => 1382,  1312 => 1261,  1309 => 1260,  1306 => 1259,  1303 => 1258,  1301 => 1257,  214 => 174,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9bf7ae04fd7a62e45dd280658e90c51fdd7bc0990b839be63b9516b12e8ad1b0", "");
    }
}
