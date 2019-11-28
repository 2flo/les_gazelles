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

/* @PrestaShop/Admin/Sell/Customer/edit.html.twig */
class __TwigTemplate_22aa14d96150b5eb5ff35b964503ee171741e0226371e9c572204a51258d8fdf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "@PrestaShop/Admin/Sell/Customer/edit.html.twig", 30);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["fullName"] = sprintf("%s. %s", twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "firstName", []), 0, 1), $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "lastName", []));
        // line 28
        $context["layoutTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Editing customer %name%", ["%name%" => ($context["fullName"] ?? null)], "Admin.Orderscustomers.Feature");
        // line 30
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        // line 33
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col\">
      ";
        // line 35
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Customer/edit.html.twig", 35)->display(twig_array_merge($context, ["isGuest" => $this->getAttribute($this->getAttribute(($context["customerInformation"] ?? null), "personalInformation", []), "guest", [])]));
        // line 36
        echo "    </div>
  </div>
";
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        // line 41
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/edit.html.twig", 43)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  65 => 41,  62 => 40,  56 => 36,  54 => 35,  50 => 33,  47 => 32,  43 => 30,  41 => 28,  39 => 27,  37 => 26,  22 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Customer/edit.html.twig", "/home/popschool/projects/www/les_gazelles/prestashop_1.7.6.1/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/edit.html.twig");
    }
}
