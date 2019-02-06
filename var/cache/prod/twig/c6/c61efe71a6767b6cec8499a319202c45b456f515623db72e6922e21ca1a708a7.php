<?php

/* PimDashboardBundle:Widget:base.html.twig */
class __TwigTemplate_c63a3f257c2f8853106643a3d8d96f37296ad624cb40eb61c2d881af93f910bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_outer' => array($this, 'block_widget_outer'),
            'widget_inner' => array($this, 'block_widget_inner'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('widget_outer', $context, $blocks);
    }

    public function block_widget_outer($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"AknWidget\">
        ";
        // line 3
        $this->displayBlock('widget_inner', $context, $blocks);
        // line 16
        echo "    </div>
";
    }

    // line 3
    public function block_widget_inner($context, array $blocks = array())
    {
        // line 4
        echo "            ";
        if ((isset($context["widgetTitle"]) || array_key_exists("widgetTitle", $context))) {
            // line 5
            echo "                <div class=\"AknWidget-header widget-header\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, ($context["widgetTitle"] ?? null), "html", null, true);
            echo "
                    <div class=\"AknButtonList AknButtonList--right widget-actions\"></div>
                </div>
            ";
        }
        // line 10
        echo "            ";
        if ((isset($context["widgetContent"]) || array_key_exists("widgetContent", $context))) {
            // line 11
            echo "                <div class=\"AknWidget-content widget-content\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, ($context["widgetContent"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 15
        echo "        ";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Widget:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  59 => 12,  56 => 11,  53 => 10,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  32 => 16,  30 => 3,  27 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimDashboardBundle:Widget:base.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/DashboardBundle/Resources/views/Widget/base.html.twig");
    }
}
