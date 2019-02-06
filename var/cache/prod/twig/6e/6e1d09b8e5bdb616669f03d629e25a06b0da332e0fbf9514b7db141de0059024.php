<?php

/* PimUIBundle:Default:page_elements.html.twig */
class __TwigTemplate_2ad4f56bc6bea2bf11b2bed7c1c27cb56406ea694d0c0b238859227b3bae172c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'image' => array($this, 'block_image'),
            'navButtons' => array($this, 'block_navButtons'),
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 29
        echo "
";
        // line 38
        echo "
";
        // line 55
        echo "
";
        // line 62
        echo "
";
        // line 71
        echo "
";
        // line 81
        echo "
";
        // line 138
        echo "
";
        // line 160
        echo "
";
        // line 170
        echo "
";
        // line 185
        echo "
";
        // line 204
        echo "
";
        // line 243
        echo "
";
        // line 257
        echo "
";
    }

    // line 93
    public function block_image($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
    }

    // line 101
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 110
    public function block_title($context, array $blocks = array())
    {
        // line 111
        echo "                                ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
                            ";
    }

    // line 125
    public function block_meta($context, array $blocks = array())
    {
        // line 126
        echo "                                ";
        echo twig_escape_filter($this->env, ($context["meta"] ?? null), "html", null, true);
        echo "
                            ";
    }

    // line 1
    public function getcreateBtn($__entity__ = null, $__url__ = null, $__attr__ = null, $__acl__ = null, $__icon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "url" => $__url__,
            "attr" => $__attr__,
            "acl" => $__acl__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "    ";
            if (((null === ($context["acl"] ?? null)) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted(($context["acl"] ?? null)))) {
                // line 4
                echo "        ";
                if ((($context["attr"] ?? null) == "dialog")) {
                    // line 5
                    echo "            ";
                    $context["buttonId"] = ("create-" . twig_lower_filter($this->env, twig_replace_filter(($context["entity"] ?? null), array(" " => "-", "." => "-"))));
                    // line 6
                    echo "            ";
                    $context["attr"] = array("id" => ($context["buttonId"] ?? null), "data-form-url" => ($context["url"] ?? null));
                    // line 7
                    echo "            ";
                    $context["url"] = null;
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                $context["title"] = twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("pim_enrich.create." . ($context["entity"] ?? null))));
                // line 10
                echo "        <a class=\"AknButton AknButton--apply";
                if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ((($context["url"] ?? null)) ? (("#" . ($context["url"] ?? null))) : ("javascript:void(0);")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "\"";
                if (($context["attr"] ?? null)) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        if (($context["key"] != "class")) {
                            echo " ";
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo ">
          ";
                // line 11
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "
        </a>
        ";
                // line 13
                if ((isset($context["buttonId"]) || array_key_exists("buttonId", $context))) {
                    // line 14
                    echo "            <script type=\"text/javascript\">
                require(
                    ['jquery', 'pim/dialogform'],
                    function (\$, DialogForm) {
                        'use strict';
                        \$(function() {
                            new DialogForm('#";
                    // line 20
                    echo twig_escape_filter($this->env, ($context["buttonId"] ?? null), "html", null, true);
                    echo "');
                        });
                    }
                );
            </script>
        ";
                }
                // line 26
                echo "    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getsubmitBtn($__text__ = null, $__icon__ = null, $__class__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            ob_start();
            // line 32
            echo "    ";
            $context["text"] = twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter(($context["text"] ?? null), "pim_common.save")) : ("pim_common.save"))));
            // line 33
            echo "    <button type=\"submit\" class=\"AknButton AknButton--apply ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "\">
        ";
            // line 34
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
    </button>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getsubmitDropdownBtn($__actions__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "actions" => $__actions__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            ob_start();
            // line 41
            echo "    <div class=\"btn-group submit-form\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["actionKey"] => $context["action"]) {
                // line 43
                echo "            ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 44
                    echo "                <button type=\"submit\" class=\"btn btn-primary\" title=\"";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "</button>
                <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu right-align\">
            ";
                } else {
                    // line 48
                    echo "                    <li><a href=\"javascript:void(0);\" value=\"";
                    echo twig_escape_filter($this->env, $context["actionKey"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["action"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "text", array()), "")) : ("")))), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 50
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['actionKey'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </ul>
    </div>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 56
    public function getdeleteLinkAttributes($__url__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null, $__subTitle__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "subTitle" => $__subTitle__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 57
            echo "    ";
            $context["message"] = (((isset($context["message"]) || array_key_exists("message", $context))) ? (_twig_default_filter(($context["message"] ?? null), "pim_enrich.entity.fallback.module.delete.item")) : ("pim_enrich.entity.fallback.module.delete.item"));
            // line 58
            echo "    ";
            $context["title"] = (((isset($context["title"]) || array_key_exists("title", $context))) ? (_twig_default_filter(($context["title"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation.delete"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation.delete")));
            // line 59
            echo "    ";
            $context["successMessage"] = (((isset($context["successMessage"]) || array_key_exists("successMessage", $context))) ? (_twig_default_filter(($context["successMessage"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("flash.entity.removed"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("flash.entity.removed")));
            // line 60
            echo "    href=\"javascript:void(0);\" data-dialog=\"delete\" data-title=\"";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "\" data-subtitle=\"";
            echo twig_escape_filter($this->env, ($context["subTitle"] ?? null), "html", null, true);
            echo "\" data-message=\"";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" data-redirect-url=\"";
            echo twig_escape_filter($this->env, ($context["redirectUrl"] ?? null), "html", null, true);
            echo "\" data-method=\"DELETE\" data-error-message=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("The element could not be deleted", array(), "messages");
            echo "\" data-success-message=\"";
            echo twig_escape_filter($this->env, ($context["successMessage"] ?? null), "html", null, true);
            echo "\"
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function getdeleteLink($__url__ = null, $__acl__ = null, $__redirectUrl__ = null, $__message__ = null, $__successMessage__ = null, $__title__ = null, $__class__ = "", $__subTitle__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "acl" => $__acl__,
            "redirectUrl" => $__redirectUrl__,
            "message" => $__message__,
            "successMessage" => $__successMessage__,
            "title" => $__title__,
            "class" => $__class__,
            "subTitle" => $__subTitle__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 64
            echo "    ";
            if (((null === ($context["acl"] ?? null)) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted(($context["acl"] ?? null)))) {
                // line 65
                echo "        ";
                $context["elements"] = $this;
                // line 66
                echo "        <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_common.delete")), "html", null, true);
                echo "\" ";
                echo $context["elements"]->getdeleteLinkAttributes(($context["url"] ?? null), ($context["redirectUrl"] ?? null), ($context["message"] ?? null), ($context["successMessage"] ?? null), ($context["title"] ?? null), ($context["subTitle"] ?? null));
                echo " >
            ";
                // line 67
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_common.delete")), "html", null, true);
                echo "
        </a>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 72
    public function getlink($__text__ = null, $__url__ = null, $__opts__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "url" => $__url__,
            "opts" => $__opts__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 73
            ob_start();
            // line 74
            echo "    ";
            $context["title"] = (($this->getAttribute(($context["opts"] ?? null), "title", array(), "any", true, true)) ? ($this->getAttribute(($context["opts"] ?? null), "title", array())) : (($context["text"] ?? null)));
            // line 75
            echo "    ";
            $context["icon"] = (($this->getAttribute(($context["opts"] ?? null), "icon", array(), "any", true, true)) ? ($this->getAttribute(($context["opts"] ?? null), "icon", array())) : (null));
            // line 76
            echo "    <a";
            if ($this->getAttribute(($context["opts"] ?? null), "id", array(), "any", true, true)) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["opts"] ?? null), "id", array()), "html", null, true);
                echo "\"";
            }
            echo " class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["opts"] ?? null), "class", array(), "any", true, true)) ? (twig_join_filter($this->getAttribute(($context["opts"] ?? null), "class", array()), " ")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ((($context["url"] ?? null)) ? (($context["url"] ?? null)) : ("javascript:void(0);")), "html", null, true);
            echo "\"";
            if (($context["title"] ?? null)) {
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null))), "html", null, true);
                echo "\"";
            }
            if ($this->getAttribute(($context["opts"] ?? null), "attr", array(), "any", true, true)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["opts"] ?? null), "attr", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo ">
        ";
            // line 77
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["text"] ?? null))), "html", null, true);
            echo "
    </a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function getpage_header($__options__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 83
            echo "    ";
            $context["title"] = (($this->getAttribute(($context["options"] ?? null), "title", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "title", array())) : (""));
            // line 84
            echo "    ";
            $context["buttons"] = (($this->getAttribute(($context["options"] ?? null), "buttons", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "buttons", array())) : (""));
            // line 85
            echo "    ";
            $context["meta"] = (($this->getAttribute(($context["options"] ?? null), "meta", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "meta", array())) : (""));
            // line 86
            echo "    ";
            $context["backButton"] = (($this->getAttribute(($context["options"] ?? null), "backButton", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "backButton", array())) : (""));
            // line 87
            echo "    ";
            $context["state"] = (($this->getAttribute(($context["options"] ?? null), "state", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "state", array())) : (""));
            // line 88
            echo "    ";
            $context["image"] = (($this->getAttribute(($context["options"] ?? null), "image", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "image", array())) : (""));
            // line 89
            echo "    ";
            $context["context"] = (($this->getAttribute(($context["options"] ?? null), "context", array(), "any", true, true)) ? ($this->getAttribute(($context["options"] ?? null), "context", array())) : (""));
            // line 90
            echo "
    <header class=\"AknTitleContainer navigation\">
        <div class=\"AknTitleContainer-line\">
            <div class=\"AknTitleContainer-imageContainer\" data-drop-zone=\"main-image\">";
            // line 93
            $this->displayBlock('image', $context, $blocks);
            echo "</div>
            <div class=\"AknTitleContainer-mainContainer\">
                <div>
                    <div class=\"AknTitleContainer-line\">
                        <div class=\"AknTitleContainer-breadcrumbs\" data-drop-zone=\"breadcrumbs\"></div>
                        <div class=\"AknTitleContainer-buttonsContainer\">
                            <div class=\"user-menu\" data-drop-zone=\"user-menu\"></div>
                            <div class=\"AknButtonList\" data-drop-zone=\"buttons\">
                                ";
            // line 101
            $this->displayBlock('navButtons', $context, $blocks);
            // line 102
            echo "                                ";
            if ( !twig_test_empty(($context["buttons"] ?? null))) {
                // line 103
                echo "                                    ";
                echo twig_escape_filter($this->env, ($context["buttons"] ?? null), "html", null, true);
                echo "
                                ";
            }
            // line 105
            echo "                            </div>
                        </div>
                    </div>
                    <div class=\"AknTitleContainer-line\">
                        <div class=\"AknTitleContainer-title\" data-drop-zone=\"title\">
                            ";
            // line 110
            $this->displayBlock('title', $context, $blocks);
            // line 113
            echo "                        </div>
                        <div class=\"AknTitleContainer-state\" data-drop-zone=\"state\">";
            // line 114
            echo twig_escape_filter($this->env, ($context["state"] ?? null), "html", null, true);
            echo "</div>
                    </div>
                </div>
                <div>
                    <div class=\"AknTitleContainer-line\">
                        <div class=\"AknTitleContainer-context AknButtonList\" data-drop-zone=\"context\">
                            ";
            // line 120
            echo twig_escape_filter($this->env, ($context["context"] ?? null), "html", null, true);
            echo "
                        </div>
                    </div>
                    <div class=\"AknTitleContainer-line\">
                        <div class=\"AknTitleContainer-meta\" data-drop-zone=\"meta\">
                            ";
            // line 125
            $this->displayBlock('meta', $context, $blocks);
            // line 128
            echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"AknTitleContainer-line\">
            <div data-drop-zone=\"navigation\"></div>
        </div>
    </header>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getform_navbar($__tabs__ = null, $__translationSuffix__ = ".title", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "tabs" => $__tabs__,
            "translationSuffix" => $__translationSuffix__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    <div id=\"form-navbar\" class=\"AknHorizontalNavtab scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"row-fluid\">
                ";
            // line 143
            if ( !twig_test_empty(($context["tabs"] ?? null))) {
                // line 144
                echo "                    <ul class=\"AknHorizontalNavtab-list nav nav-tabs\">
                        ";
                // line 145
                if (twig_test_iterable(($context["tabs"] ?? null))) {
                    // line 146
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                        // line 147
                        echo "                                <li class=\"AknHorizontalNavtab-item";
                        if ($this->getAttribute($context["loop"], "first", array())) {
                            echo " AknHorizontalNavtab-item--active active";
                        }
                        echo "\">
                                    <a class=\"AknHorizontalNavtab-link\" href=\"#";
                        // line 148
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["tab"], array(" " => "-", "." => "-"))), "html", null, true);
                        echo "\" data-toggle=\"tab\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["tab"] . ($context["translationSuffix"] ?? null))), "html", null, true);
                        echo "</a>
                                </li>
                            ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                        ";
                } else {
                    // line 152
                    echo "                            <li class=\"AknHorizontalNavtab-item AknHorizontalNavtab-item--active active\"><a href=\"#";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter(($context["tabs"] ?? null), array(" " => "-", "." => "-"))), "html", null, true);
                    echo "\" data-toggle=\"tab\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($context["tabs"] ?? null) . ($context["translationSuffix"] ?? null))), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 154
                echo "                    </ul>
                ";
            }
            // line 156
            echo "            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 161
    public function getform_errors($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 162
            echo "    ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "errors", array()))) {
                // line 163
                echo "        <div class=\"AknMessageBox AknMessageBox--error fade in top-messages\">
            <div class=\"message\">
                ";
                // line 165
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                echo "
            </div>
        </div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function gettabSections($__items__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    <div class=\"tabsections\">
        ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["title"] => $context["content"]) {
                // line 174
                echo "            ";
                if ( !twig_test_empty(twig_trim_filter($context["content"]))) {
                    // line 175
                    echo "                <div class=\"tabsection\">
                    <div class=\"tabsection-title\">";
                    // line 176
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["title"]), "html", null, true);
                    echo "</div>
                    <div class=\"tabsection-content\">
                        ";
                    // line 178
                    echo $context["content"];
                    echo "
                    </div>
                </div>
            ";
                }
                // line 182
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['title'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 186
    public function getupdated($__formId__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "formId" => $__formId__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 187
            ob_start();
            // line 188
            echo "    <div id=\"entity-updated\" style=\"opacity: 0\">
        <span class=\"AknState\">";
            // line 189
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.updated"), "html", null, true);
            echo "</span>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/formupdatelistener'],
            function (\$, FormUpdateListener) {
                'use strict';
                \$(function () {
                    new FormUpdateListener(\$('#";
            // line 197
            echo twig_escape_filter($this->env, ($context["formId"] ?? null), "html", null, true);
            echo "'));
                });
            }
        );
    </script>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function getenabledSwitch($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            ob_start();
            // line 207
            echo "    ";
            if ($this->getAttribute(($context["form"] ?? null), "enabled", array(), "any", true, true)) {
                // line 208
                echo "        ";
                $context["switchId"] = "switch_status";
                // line 209
                echo "        ";
                $context["enableLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.product.enable");
                // line 210
                echo "        ";
                $context["disableLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.product.disable");
                // line 211
                echo "        ";
                $context["enabledLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.product.enabled");
                // line 212
                echo "        ";
                $context["disabledLabel"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.product.disabled");
                // line 213
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", array()), 'widget');
                echo "
        <div class=\"btn-group\">
            <button id=\"";
                // line 215
                echo twig_escape_filter($this->env, ($context["switchId"] ?? null), "html", null, true);
                echo "\" type=\"button\" class=\"btn\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "enabled", array()), "vars", array()), "value", array())) ? (($context["disableLabel"] ?? null)) : (($context["enableLabel"] ?? null))), "html", null, true);
                echo "</button>
        </div>
        <script type=\"text/javascript\">
            require(
                ['jquery'],
                function (\$) {
                    'use strict';
                    \$(function () {
                        \$('#";
                // line 223
                echo twig_escape_filter($this->env, ($context["switchId"] ?? null), "html", null, true);
                echo "').on('click', function () {
                            var \$field = \$('#";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "enabled", array()), "vars", array()), "id", array()), "html", null, true);
                echo "'),
                                \$status = \$('.status-enabled').find('.badge');
                            if (+\$field.val()) {
                                \$field.val(0).trigger('change');
                                \$(this).html('";
                // line 228
                echo twig_escape_filter($this->env, ($context["enableLabel"] ?? null), "html", null, true);
                echo "');
                                \$status.html('<i class=\"icon-status-disabled icon-circle\"></i>";
                // line 229
                echo twig_escape_filter($this->env, ($context["disabledLabel"] ?? null), "html", null, true);
                echo "').removeClass('badge-enabled status-enabled').addClass('badge-disabled status-disabled');
                            } else {
                                \$field.val(1).trigger('change');
                                \$(this).html('";
                // line 232
                echo twig_escape_filter($this->env, ($context["disableLabel"] ?? null), "html", null, true);
                echo "');
                                \$status.html('<i class=\"icon-status-enabled icon-circle\"></i>";
                // line 233
                echo twig_escape_filter($this->env, ($context["enabledLabel"] ?? null), "html", null, true);
                echo "').removeClass('badge-disabled status-disabled').addClass('badge-enabled status-enabled');
                            }
                        });
                    });
                }
            );
        </script>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 244
    public function getenabledLabel($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 245
            ob_start();
            // line 246
            echo "    ";
            if ($this->getAttribute(($context["form"] ?? null), "enabled", array(), "any", true, true)) {
                // line 247
                echo "        <div class=\"status-enabled pull-left\">
            ";
                // line 248
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "enabled", array()), "vars", array()), "value", array())) {
                    // line 249
                    echo "                <div class=\"AknBadge AknBadge--enabled status-enabled\"><i class=\"icon-status-enabled icon-circle\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.product.enabled"), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 251
                    echo "                <div class=\"AknBadge AknBadge--disabled status-disabled\"><i class=\"icon-status-disabled icon-circle\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("info.product.disabled"), "html", null, true);
                    echo "</div>
            ";
                }
                // line 253
                echo "        </div>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 258
    public function getform_container($__content__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 259
            echo "    <div class=\"AknFormContainer AknFormContainer--withPadding\">
        ";
            // line 261
            echo "            ";
            echo ($context["content"] ?? null);
            echo "
        ";
            // line 263
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Default:page_elements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1061 => 263,  1056 => 261,  1053 => 259,  1041 => 258,  1023 => 253,  1017 => 251,  1011 => 249,  1009 => 248,  1006 => 247,  1003 => 246,  1001 => 245,  989 => 244,  964 => 233,  960 => 232,  954 => 229,  950 => 228,  943 => 224,  939 => 223,  926 => 215,  920 => 213,  917 => 212,  914 => 211,  911 => 210,  908 => 209,  905 => 208,  902 => 207,  900 => 206,  888 => 205,  866 => 197,  855 => 189,  852 => 188,  850 => 187,  838 => 186,  822 => 183,  816 => 182,  809 => 178,  804 => 176,  801 => 175,  798 => 174,  794 => 173,  791 => 172,  779 => 171,  759 => 165,  755 => 163,  752 => 162,  740 => 161,  722 => 156,  718 => 154,  710 => 152,  707 => 151,  688 => 148,  681 => 147,  663 => 146,  661 => 145,  658 => 144,  656 => 143,  651 => 140,  638 => 139,  614 => 128,  612 => 125,  604 => 120,  595 => 114,  592 => 113,  590 => 110,  583 => 105,  577 => 103,  574 => 102,  572 => 101,  561 => 93,  556 => 90,  553 => 89,  550 => 88,  547 => 87,  544 => 86,  541 => 85,  538 => 84,  535 => 83,  523 => 82,  504 => 77,  471 => 76,  468 => 75,  465 => 74,  463 => 73,  449 => 72,  429 => 67,  420 => 66,  417 => 65,  414 => 64,  394 => 63,  363 => 60,  360 => 59,  357 => 58,  354 => 57,  336 => 56,  318 => 51,  304 => 50,  296 => 48,  286 => 44,  283 => 43,  266 => 42,  263 => 41,  261 => 40,  249 => 39,  230 => 34,  223 => 33,  220 => 32,  218 => 31,  204 => 30,  187 => 26,  178 => 20,  170 => 14,  168 => 13,  163 => 11,  134 => 10,  131 => 9,  128 => 8,  125 => 7,  122 => 6,  119 => 5,  116 => 4,  113 => 3,  111 => 2,  95 => 1,  88 => 126,  85 => 125,  78 => 111,  75 => 110,  70 => 101,  64 => 93,  59 => 257,  56 => 243,  53 => 204,  50 => 185,  47 => 170,  44 => 160,  41 => 138,  38 => 81,  35 => 71,  32 => 62,  29 => 55,  26 => 38,  23 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUIBundle:Default:page_elements.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Resources/views/Default/page_elements.html.twig");
    }
}
