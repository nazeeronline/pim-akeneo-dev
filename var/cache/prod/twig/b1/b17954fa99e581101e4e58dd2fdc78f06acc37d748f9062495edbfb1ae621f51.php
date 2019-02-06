<?php

/* AkeneoPimEnrichmentBundle:CategoryTree:index.html.twig */
class __TwigTemplate_c3481166ccd6a7baba23f78483b9da09ad41af57aac3c3745d84869b354cffa9 extends Twig_Template
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
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "AkeneoPimEnrichmentBundle:CategoryTree:index.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "
<script>
    window.flashMessages = JSON.parse('";
        // line 35
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
        echo "');

    require(
        [
            'pim/common/breadcrumbs',
            'pim/fetcher-registry',
            'pim/form-builder',
            'pim/menu/resizable'
        ],
        function(
            Breadcrumbs,
            FetcherRegistry,
            FormBuilder,
            Resizable
        ) {
            \$(function() {
                var breadcrumbs = new Breadcrumbs({
                    config: {
                        tab: 'pim-menu-settings',
                        item: 'pim-menu-settings-product-category'
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

                Resizable.set({
                    minWidth: 300,
                    maxWidth: 500,
                    container: '.ui-resizable-container',
                    storageKey: 'category-tree-edit'
                });
            });
        }
    );
</script>
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"AknDefault-mainContent\">
    ";
        // line 5
        $context["title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("category.overview");
        // line 6
        echo "    ";
        echo $context["elements"]->getpage_header(array("title" => ($context["title"] ?? null)));
        echo "

    <div id=\"category-tree-container\" style=\"display:flex; height:100%\">
        <div class=\"ui-resizable-container\">
            <div id=\"tree\" ";
        // line 10
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted((($context["acl"] ?? null) . "_category_edit"))) {
            echo " data-editable=\"true\"";
        }
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted((($context["acl"] ?? null) . "_category_create"))) {
            echo " data-creatable=\"true\"";
        }
        echo "></div>
        </div>

        <div id=\"category-form\" style=\"flex-grow:1\" class=\"AknDefault-mainContent\">
            <div class=\"AknInfoBlock\">
                ";
        // line 15
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted((($context["acl"] ?? null) . "_category_edit"))) {
            // line 16
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.category.suggest_selection"), "html", null, true);
            echo "
                ";
        }
        // line 18
        echo "                ";
        if ($this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted((($context["acl"] ?? null) . "_category_create"))) {
            // line 19
            echo "                    <br/>
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.category.or"), "html", null, true);
            echo "
                    <br/>
                    <a class=\"AknButton AknButton--apply\" href=\"#";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((($context["route"] ?? null) . "_categorytree_create"), array("parent" => 0));
            echo "\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.category.create_new"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 26
        echo "            </div>
        </div>
    </div>

    ";
        // line 30
        $this->loadTemplate("AkeneoPimEnrichmentBundle:CategoryTree:_scripts.html.twig", "AkeneoPimEnrichmentBundle:CategoryTree:index.html.twig", 30)->display($context);
        // line 31
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "AkeneoPimEnrichmentBundle:CategoryTree:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 31,  144 => 30,  138 => 26,  132 => 23,  128 => 22,  123 => 20,  120 => 19,  117 => 18,  111 => 16,  109 => 15,  96 => 10,  88 => 6,  86 => 5,  83 => 4,  80 => 3,  31 => 35,  27 => 33,  25 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AkeneoPimEnrichmentBundle:CategoryTree:index.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Pim/Enrichment/Bundle/Resources/views/CategoryTree/index.html.twig");
    }
}
