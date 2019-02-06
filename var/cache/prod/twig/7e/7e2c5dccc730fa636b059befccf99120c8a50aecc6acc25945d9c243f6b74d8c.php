<?php

/* AkeneoPimEnrichmentBundle:CategoryTree:_scripts.html.twig */
class __TwigTemplate_81d028aba1b87d4b0ff09aaff1a7c3a51338792f966bf5e4d264e08c12e8032d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
    require(
        ['jquery', 'pim/tree/manage', 'jquery.sidebarize', 'bootstrap'],
        function(\$, TreeManage){
            'use strict';
            \$(function() {
                var buttons = [];
                ";
        // line 8
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted((($context["acl"] ?? null) . "_category_create"))) {
            // line 9
            echo "                    buttons.push(\$('<a>', {
                        'class': 'no-hash',
                        'data-toggle': 'tooltip',
                        'data-placement': 'right',
                        'data-original-title': '";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.create.tree")), "html", null, true);
            echo "'
                    }).html(
                        \$('<i>', { 'class': 'icon-plus-sign' })
                    ).on('click', function () {
                        Backbone.history.navigate('#";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($context["route"] ?? null) . "_categorytree_create"));
            echo "', { trigger: true });
                    }).tooltip());
                ";
        }
        // line 20
        echo "                new TreeManage('#tree', '";
        echo twig_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
        echo "');
            });
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "AkeneoPimEnrichmentBundle:CategoryTree:_scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  43 => 17,  36 => 13,  30 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AkeneoPimEnrichmentBundle:CategoryTree:_scripts.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Resources/views/CategoryTree/_scripts.html.twig");
    }
}
