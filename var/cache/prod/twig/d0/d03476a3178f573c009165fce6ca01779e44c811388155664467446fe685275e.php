<?php

/* OroAsseticBundle:Assets:oro_css.html.twig */
class __TwigTemplate_110d2e32fa0453d9f5c9ed04af0243a30607ab81500ace184780d6b058f87209 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["hasLess"] = false;
        // line 4
        echo "
";
        // line 5
        // asset "15df054"
        $context["asset_url"] = $this->env->getExtension('asset')->getAssetUrl("css/pim.css");
        // line 6
        echo "    ";
        $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, ($context["asset_url"] ?? null), "."));
        // line 7
        echo "    ";
        $context["hasLess"] = ((($context["isLess"] ?? null)) ? (true) : (($context["hasLess"] ?? null)));
        // line 8
        echo "
    <link rel=\"";
        // line 9
        if (($context["isLess"] ?? null)) {
            echo "stylesheet/less";
        } else {
            echo "stylesheet";
        }
        echo "\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["asset_url"] ?? null), "frontend"), "html", null, true);
        echo "\" />
";
        unset($context["asset_url"]);
        // line 11
        echo "
";
        // line 12
        if (($context["hasLess"] ?? null)) {
            // line 13
            echo "    <script type=\"text/javascript\">localStorage.clear();</script>
    <script type=\"text/javascript\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oroassetic/lib/less-1.3.3.min.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">less.watch();</script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroAsseticBundle:Assets:oro_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  55 => 13,  53 => 12,  50 => 11,  39 => 9,  36 => 8,  33 => 7,  30 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OroAsseticBundle:Assets:oro_css.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Oro/Bundle/AsseticBundle/Resources/views/Assets/oro_css.html.twig");
    }
}
