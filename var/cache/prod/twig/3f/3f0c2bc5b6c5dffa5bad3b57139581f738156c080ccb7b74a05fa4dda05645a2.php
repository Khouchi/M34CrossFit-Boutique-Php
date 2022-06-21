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

/* @PrestaShop/Admin/Sell/Order/Order/index.html.twig */
class __TwigTemplate_03ace96d6840e8ff7ca4c0ea37bb85dc62d336f9674bc9693e6fd4bcd21e987a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'orders_kpi' => [$this, 'block_orders_kpi'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "PrestaShopBundle:Admin/Sell/Order/Order:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Sell/Order/Order:index.html.twig", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_orders_kpi($context, array $blocks = [])
    {
        echo " ";
        if (($context["nativeStatsModulesEnabled"] ?? null)) {
            echo " ";
            $this->displayParentBlock("orders_kpi", $context, $blocks);
            echo "   ";
        }
        echo " ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  29 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/index.html.twig", "C:\\wamp64\\www\\test-boutique\\modules\\ps_metrics\\views\\PrestaShop\\Admin\\Sell\\Order\\Order\\index.html.twig");
    }
}
