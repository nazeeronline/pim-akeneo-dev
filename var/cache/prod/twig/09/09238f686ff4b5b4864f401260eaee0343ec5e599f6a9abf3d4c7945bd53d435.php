<?php

/* PimAnalyticsBundle:Update:last_patch.html.twig */
class __TwigTemplate_ec29f9b6cce5e53b376766d2edefd4cff172cc150c1497cc9200acdfb9b047fa extends Twig_Template
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
        if ($this->env->getExtension('Akeneo\Platform\Bundle\AnalyticsBundle\Twig\UpdateExtension')->isLastPatchEnabled()) {
            // line 2
            echo "    <div class=\"AknFooter-item last-version\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_analytics.new_patch_available"), "html", null, true);
            echo ":</span><span></span></div>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/patch-fetcher'],
            function (\$, Fetcher) {
                \$(function() {
                    try {
                        var updateServerUrl = '";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Akeneo\Platform\Bundle\AnalyticsBundle\Twig\UpdateExtension')->getUpdateServerUrl(), "html", null, true);
            echo "';
                        Fetcher.fetch(updateServerUrl).then(function (patch) {
                            var currentVersionName = \$('.current-version:first span:last').text();
                            var currentVersion = currentVersionName.split(' ')[0];
                            if (patch !== null && currentVersion < patch) {
                                \$('.last-version span:last').text(patch);
                            } else {
                                \$('.last-version').remove();
                            }
                        });
                    } catch (err) {
                        \$('.last-version').remove();
                    }
                });
            }
        );
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "PimAnalyticsBundle:Update:last_patch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimAnalyticsBundle:Update:last_patch.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/AnalyticsBundle/Resources/views/Update/last_patch.html.twig");
    }
}
