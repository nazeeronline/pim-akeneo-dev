<?php

/* AkeneoPimEnrichmentBundle:Widget:completeness.html.twig */
class __TwigTemplate_187aeecf45bf72f7aa551c25835e2ce7094d01d80c2027065dcae6b9d8294d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimDashboardBundle:Widget:base.html.twig", "AkeneoPimEnrichmentBundle:Widget:completeness.html.twig", 1);
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
        $context["widgetTitle"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_dashboard.widget.completeness.title");
        // line 5
        $context["widgetContent"] = ('' === $tmp = "    <div id=\"completeness-widget\" class=\"completeness-widget\"></div>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/dashboard/widget-container', 'pim/dashboard/completeness-widget'],
            function (\$, widgetContainer, CompletenessWidget) {
                'use strict';
                \$(function () {
                    var options = {el: '#completeness-widget', alias: 'completeness'};
                    var widget = widgetContainer.getWidget(options, CompletenessWidget);
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
        return "AkeneoPimEnrichmentBundle:Widget:completeness.html.twig";
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
        return new Twig_Source("", "AkeneoPimEnrichmentBundle:Widget:completeness.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Resources/views/Widget/completeness.html.twig");
    }
}
