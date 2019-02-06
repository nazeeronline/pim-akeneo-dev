<?php

/* PimDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_153d2a3ddb64d5196b44ba792481bd6bcd9a9c0664b2c824e0bc7458ba9dad19 extends Twig_Template
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
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"AknDefault-mainContent\">

        ";
        // line 7
        ob_start();
        // line 8
        echo "            <img
                class=\"AknTitleContainer-image\"
                src=\"";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "imagePath", array())) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "imagePath", array()), "thumbnail_small")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pimui/images/info-user.png"))), "html", null, true);
        echo "\"
            >
        ";
        $context["image"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
        ";
        // line 14
        echo $context["elements"]->getpage_header(array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_dashboard.title"), "image" =>         // line 17
($context["image"] ?? null)));
        // line 19
        echo "

        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("pim_dashboard.controller.widget:listAction"));
        echo "

        <div class=\"AknFooter\">
            ";
        // line 24
        $this->loadTemplate("PimDashboardBundle:Dashboard:index.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 24, "882685648")->display($context);
        // line 25
        echo "            ";
        $this->loadTemplate("PimDashboardBundle:Dashboard:index.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 25, "1414656938")->display($context);
        // line 26
        echo "        </div>
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
                            tab: 'pim-menu-activity',
                            item: 'pim-menu-activity-dashboard'
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
        return "PimDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  66 => 25,  64 => 24,  58 => 21,  54 => 19,  52 => 17,  51 => 14,  48 => 13,  42 => 10,  38 => 8,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimDashboardBundle:Dashboard:index.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}


/* PimDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_153d2a3ddb64d5196b44ba792481bd6bcd9a9c0664b2c824e0bc7458ba9dad19_882685648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 24
        $this->parent = $this->loadTemplate("PimDashboardBundle:Dashboard:version.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 24);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimDashboardBundle:Dashboard:version.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 24,  69 => 26,  66 => 25,  64 => 24,  58 => 21,  54 => 19,  52 => 17,  51 => 14,  48 => 13,  42 => 10,  38 => 8,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimDashboardBundle:Dashboard:index.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}


/* PimDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_153d2a3ddb64d5196b44ba792481bd6bcd9a9c0664b2c824e0bc7458ba9dad19_1414656938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PimAnalyticsBundle:Update:last_patch.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 25);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimAnalyticsBundle:Update:last_patch.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 25,  146 => 24,  69 => 26,  66 => 25,  64 => 24,  58 => 21,  54 => 19,  52 => 17,  51 => 14,  48 => 13,  42 => 10,  38 => 8,  36 => 7,  31 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimDashboardBundle:Dashboard:index.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/DashboardBundle/Resources/views/Dashboard/index.html.twig");
    }
}
