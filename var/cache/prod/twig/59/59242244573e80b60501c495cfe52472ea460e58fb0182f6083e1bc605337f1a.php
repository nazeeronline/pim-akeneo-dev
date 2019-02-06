<?php

/* PimAnalyticsBundle:SystemInfo:index.html.twig */
class __TwigTemplate_81adadd14eb3dfac62e711a3e7c18771feac268db24f1d6018ee25135bec550c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimAnalyticsBundle:SystemInfo:index.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"AknDefault-mainContent\">
        ";
        // line 5
        ob_start();
        // line 6
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_analytics_system_info_download");
        echo "\" class=\"AknButton AknButton--grey no-hash\">
                ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_analytics.system_info.download"), "html", null, true);
        echo "
            </a>
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
        ";
        // line 11
        echo $context["elements"]->getpage_header(array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_analytics.system_info.title"), "buttons" =>         // line 14
($context["buttons"] ?? null)));
        // line 16
        echo "

        <table class=\"AknGrid AknGrid--unclickable AknGrid--condensed table\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["infoType"] => $context["info"]) {
            // line 20
            echo "                <tr class=\"AknGrid-bodyRow\">
                    <th class=\"AknGrid-bodyCell\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("pim_analytics.info_type." . $context["infoType"])), "html", null, true);
            echo "</th>
                    <td class=\"AknGrid-bodyCell\">
                        ";
            // line 23
            if (twig_test_iterable($context["info"])) {
                // line 24
                echo "                            ";
                echo twig_join_filter($context["info"], "<br>");
                echo "
                        ";
            } else {
                // line 26
                echo "                            ";
                echo twig_escape_filter($this->env, $context["info"], "html", null, true);
                echo "
                        ";
            }
            // line 28
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['infoType'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </table>
    </div>

    <script>
        require(
            [
                'pim/common/breadcrumbs',
                'pim/fetcher-registry',
                'pim/form-builder'
            ],
            function(
                Breadcrumbs,
                FetcherRegistry,
                FormBuilder
            ) {
                \$(function() {
                    var breadcrumbs = new Breadcrumbs({
                        config: {
                            tab: 'pim-menu-system',
                            item: 'pim-menu-system-info'
                        }
                    });
                    breadcrumbs.configure().then(function () {
                        breadcrumbs.render();
                        \$('*[data-drop-zone=\"breadcrumbs\"]').append(breadcrumbs.\$el);
                    });

                    FetcherRegistry.initialize().done(function () {
                        FormBuilder.build('pim-menu-user-navigation').then(function (form) {
                            \$('.user-menu').append(form.el);
                            form.render();
                        }.bind(this));
                    });
                });
            }
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "PimAnalyticsBundle:SystemInfo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  84 => 28,  78 => 26,  72 => 24,  70 => 23,  65 => 21,  62 => 20,  58 => 19,  53 => 16,  51 => 14,  50 => 11,  47 => 10,  41 => 7,  36 => 6,  34 => 5,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimAnalyticsBundle:SystemInfo:index.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/AnalyticsBundle/Resources/views/SystemInfo/index.html.twig");
    }
}
