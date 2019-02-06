<?php

/* PimUserBundle::layout.html.twig */
class __TwigTemplate_ef544f0a4f10053da999190cdf88fc8f8aedaef36d4be8fc7253a103f802a8ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'main' => array($this, 'block_main'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "</head>
<body class=\"";
        // line 16
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <div id=\"top-page\">
            ";
        // line 19
        $this->displayBlock('main', $context, $blocks);
        // line 34
        echo "        </div>
    </div>
    ";
        // line 37
        echo "    <script type=\"text/javascript\">
        const tooltip = document.querySelector('[data-toggle=\"tooltip\"]');
        if (null !== tooltip) {
            tooltip.addEventListener('mouseover', function(event){
                var html =`
                    <div class=\"tooltip-arrow\" style=\"top: 19.2982%;\"></div>
                    <div class=\"tooltip-inner\">\${event.currentTarget.dataset.originalTitle}</div>`
                var tooltip = document.createElement('div');
                tooltip.className = 'tooltip fade right in';
                tooltip.style = `top: 0px; left: \${event.currentTarget.offsetLeft + event.currentTarget.offsetWidth}px; display: block;`;

                tooltip.innerHTML = html;
                event.currentTarget.parentNode.appendChild(tooltip);
            });

            tooltip.addEventListener('mouseout', function(event){
                event.currentTarget.parentNode.querySelectorAll('.tooltip').forEach((tooltip) => tooltip.remove());
            });
        }

    </script>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 10
        $this->displayBlock('head_style', $context, $blocks);
        // line 14
        echo "    ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "            ";
    }

    // line 10
    public function block_head_style($context, array $blocks = array())
    {
        // line 11
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            ";
        // line 12
        $this->loadTemplate("OroAsseticBundle:Assets:oro_css.html.twig", "PimUserBundle::layout.html.twig", 12)->display($context);
        // line 13
        echo "        ";
    }

    // line 16
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "                ";
        $this->displayBlock('messages', $context, $blocks);
        // line 31
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            ";
    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        // line 21
        echo "                    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 22
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 23
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 24
                    echo "                            <div class=\"alert";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ((" alert-" . $context["type"])) : ("")), "html", null, true);
                    echo "\">
                            ";
                    // line 25
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"]);
                    echo "
                            </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    ";
        }
        // line 30
        echo "                ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PimUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  178 => 32,  175 => 31,  171 => 30,  168 => 29,  162 => 28,  153 => 25,  148 => 24,  143 => 23,  138 => 22,  135 => 21,  132 => 20,  128 => 33,  125 => 31,  122 => 20,  119 => 19,  114 => 16,  110 => 13,  108 => 12,  103 => 11,  100 => 10,  96 => 7,  93 => 6,  89 => 14,  87 => 10,  83 => 8,  81 => 6,  78 => 5,  75 => 4,  48 => 37,  44 => 34,  42 => 19,  36 => 16,  33 => 15,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUserBundle::layout.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Resources/views/layout.html.twig");
    }
}
