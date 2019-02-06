<?php

/* AkeneoPimEnrichmentBundle:CategoryTree:children.json.twig */
class __TwigTemplate_74754fcd1594f68c129db00f8a62eaa8cc12a181855293def8bd9ca57bed65f2 extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('Akeneo\Pim\Enrichment\Bundle\Twig\CategoryExtension')->childrenResponse(($context["categories"] ?? null), ($context["parent"] ?? null), ($context["item_count"] ?? null), ($context["include_sub"] ?? null), ($context["related_entity"] ?? null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "AkeneoPimEnrichmentBundle:CategoryTree:children.json.twig";
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
        return new Twig_Source("", "AkeneoPimEnrichmentBundle:CategoryTree:children.json.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Resources/views/CategoryTree/children.json.twig");
    }
}
