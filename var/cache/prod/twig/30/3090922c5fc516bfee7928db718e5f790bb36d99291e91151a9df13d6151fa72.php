<?php

/* PimDashboardBundle:Widget:last_operations.html.twig */
class __TwigTemplate_4409185579c30d3cd8dc21697265a8aa7a7b2a500b39f0ad8d5c035e05877907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimDashboardBundle:Widget:base.html.twig", "PimDashboardBundle:Widget:last_operations.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimDashboardBundle:Widget:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_dashboard.widget.last_operations.title");
        // line 5
        $context["widgetContent"] = ('' === $tmp = "    <table id=\"last-operations-widget\" class=\"AknGrid AknGrid--unclickable\"></table>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/dashboard/widget-container', 'pim/dashboard/last-operations-widget'],
            function (\$, widgetContainer, LastOperationsWidget) {
                'use strict';
                \$(function () {
                    var options = {el: '#last-operations-widget', alias: 'last_operations'};
                    var widget = widgetContainer.getWidget(options, LastOperationsWidget);
                    widget.render().delayedLoad();
                });
            }
        );
    </script>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Widget:last_operations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  26 => 5,  24 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimDashboardBundle:Widget:last_operations.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/DashboardBundle/Resources/views/Widget/last_operations.html.twig");
    }
}
