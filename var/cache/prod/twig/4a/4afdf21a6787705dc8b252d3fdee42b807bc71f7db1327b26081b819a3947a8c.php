<?php

/* PimDashboardBundle:Dashboard:version.html.twig */
class __TwigTemplate_bf694fbc01175a14a95fcbe35e909f84a5ac930820e6b4b5e20a3ec5ed8688fe extends Twig_Template
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
        echo "<div class=\"AknFooter-item current-version\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_dashboard.version"), "html", null, true);
        echo ":</span><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Akeneo\Platform\Bundle\UIBundle\Twig\VersionExtension')->version(), "html", null, true);
        echo "</span></div>
";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:version.html.twig";
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
        return new Twig_Source("", "PimDashboardBundle:Dashboard:version.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/DashboardBundle/Resources/views/Dashboard/version.html.twig");
    }
}
