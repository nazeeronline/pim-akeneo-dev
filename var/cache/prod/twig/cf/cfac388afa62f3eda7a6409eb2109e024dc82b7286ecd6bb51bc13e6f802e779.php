<?php

/* PimUserBundle:Security:login.html.twig */
class __TwigTemplate_b910b2971dd03ddf8b9e27d493d89e641f6f33417a339cd842b3803b8a513ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimUserBundle::layout.html.twig", "PimUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "AknLogin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<script type=\"text/javascript\">
    sessionStorage.clear();
    document.title = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login"), "html", null, true);
        echo "';
</script>

<div class=\"AknLogin-mainContainer container\">
    <div class=\"AknLogin-title\">
        ";
        // line 13
        $this->loadTemplate("PimUserBundle:Security:login.html.twig", "PimUserBundle:Security:login.html.twig", 13, "1536516582")->display($context);
        // line 14
        echo "    </div>

    ";
        // line 16
        if (($context["error"] ?? null)) {
            // line 17
            echo "        <div class=\"AknMessageBox AknMessageBox--error\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", array()), $this->getAttribute(($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 21
        echo "
    <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["action_route"] ?? null));
        echo "\" method=\"post\" class=\"form-signin form-inline\">
        <div class=\"AknLogin-form\">
            <div class=\"AknLogin-formCell\">
                <input class=\"AknTextField\" type=\"text\" id=\"prependedInput\" autofocus=\"autofocus\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_user.user.login.username_or_email"), "html", null, true);
        echo "\" size=\"1\"/>
            </div>
            <div class=\"AknLogin-formCell\">
                <input class=\"AknTextField\" type=\"password\" id=\"prependedInput2\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_user.user.fields.password"), "html", null, true);
        echo "\" autocomplete=\"off\" size=\"1\"/>
            </div>
        </div>
        <div class=\"AknLogin-form\">
            <div class=\"AknLogin-formCell\">
                <label class=\"checkbox remember-me\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_user.user.login.remember_me"), "html", null, true);
        echo "
                </label>
            </div>
            <div class=\"AknLogin-formCell AknLogin-formCell--small\">
                <div class=\"signin-help\">
                    <a class=\"AknLogin-link\" href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_user_reset_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_user.user.login.password_forgotten"), "html", null, true);
        echo "</a>
                </div>
                <button class=\"AknButton AknButton--apply AknButton--big\" type=\"submit\" id=\"_submit\" name=\"_submit\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_user.user.login.log_in"), "html", null, true);
        echo "</button>
            </div>
        </div>
        <input type=\"hidden\" name=\"_target_path\" value=\"\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["additional_hidden_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 47
            echo "            <input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "field_name", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => $this->getAttribute($context["field"], "initialized_by", array())), "method"), "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 49,  123 => 47,  119 => 46,  115 => 45,  108 => 41,  101 => 39,  93 => 34,  84 => 28,  76 => 25,  70 => 22,  67 => 21,  61 => 18,  58 => 17,  56 => 16,  52 => 14,  50 => 13,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUserBundle:Security:login.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Resources/views/Security/login.html.twig");
    }
}


/* PimUserBundle:Security:login.html.twig */
class __TwigTemplate_b910b2971dd03ddf8b9e27d493d89e641f6f33417a339cd842b3803b8a513ed6_1536516582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("PimUIBundle::logo.html.twig", "PimUserBundle:Security:login.html.twig", 13);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimUIBundle::logo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 13,  134 => 49,  123 => 47,  119 => 46,  115 => 45,  108 => 41,  101 => 39,  93 => 34,  84 => 28,  76 => 25,  70 => 22,  67 => 21,  61 => 18,  58 => 17,  56 => 16,  52 => 14,  50 => 13,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUserBundle:Security:login.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Resources/views/Security/login.html.twig");
    }
}
