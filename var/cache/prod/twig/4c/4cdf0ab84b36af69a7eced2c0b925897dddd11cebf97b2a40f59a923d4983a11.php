<?php

/* AkeneoPimEnrichmentBundle:CategoryTree:listTree.json.twig */
class __TwigTemplate_e7b7bbd4abf7b49ccc839089a2f5ba92555cef824512481cf471cde14c9d7450 extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('Akeneo\Pim\Enrichment\Bundle\Twig\CategoryExtension')->listTreesResponse(($context["trees"] ?? null), ($context["selectedTreeId"] ?? null), ($context["item_count"] ?? null), ($context["include_sub"] ?? null), ($context["related_entity"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "AkeneoPimEnrichmentBundle:CategoryTree:listTree.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AkeneoPimEnrichmentBundle:CategoryTree:listTree.json.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Resources/views/CategoryTree/listTree.json.twig");
    }
}
