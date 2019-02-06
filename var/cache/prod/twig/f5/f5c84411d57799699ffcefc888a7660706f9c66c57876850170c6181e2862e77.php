<?php

/* PimUIBundle::macros.html.twig */
class __TwigTemplate_a6d6189088329e63f571003dd56a3ffb470563e3b1b40f33931a9647702e4dda extends Twig_Template
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
        // line 24
        echo "
";
        // line 41
        echo "
";
        // line 60
        echo "
";
        // line 104
        echo "
";
        // line 122
        echo "
";
        // line 135
        echo "
";
        // line 153
        echo "
";
        // line 182
        echo "
";
        // line 265
        echo "
";
    }

    // line 9
    public function getattribute_data($__value__ = null, $__additionalData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "        ";
            if ( !$this->getAttribute(($context["value"] ?? null), "value", array(), "any", true, true)) {
                // line 11
                echo "            <div class=\"AknTextField AknTextField--disabled\">";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 13
                echo "            <div class=\"AknTextField AknTextField--disabled\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? null), "value", array()), "html", null, true);
                echo "</div>
            <div class=\"AknFieldContainer-iconsContainer\">";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["value"] ?? null), "hint", array())), "html", null, true);
                echo "</div>
        ";
            }
            // line 16
            echo "        ";
            if (twig_length_filter($this->env, ($context["additionalData"] ?? null))) {
                // line 17
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["additionalData"] ?? null), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 18
                    echo "                <div class=\"AknFieldContainer-iconsContainer\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute(($context["additionalData"] ?? null), "field", array())), "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        ";
            }
            // line 21
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getattibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "    ";
            // line 22
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => ($context["title"] ?? null), 1 => $this->getAttribute($this, "attribute_data", array(0 => ($context["value"] ?? null), 1 => ($context["additionalData"] ?? null)), "method")), "method");
            echo "
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

    // line 31
    public function getrenderAttribute($__title__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    <div class=\"AknFieldContainer\">
        <div class=\"AknFieldContainer-header\">
            <label class=\"AknFieldContainer-label control-label\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
            echo "</label>
        </div>
        <div class=\"AknFieldContainer-inputContainer\">
            ";
            // line 37
            echo ($context["data"] ?? null);
            echo "
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

    // line 53
    public function getbutton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            echo "    <a href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "path", array()), "html", null, true);
            echo "\"
       class=\"AknButton ";
            // line 55
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aClass", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "aClass", array())) : ("")), "html", null, true);
            echo "\"
       title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["parameters"] ?? null), "title", array())), "html", null, true);
            echo "\">
        ";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["parameters"] ?? null), "label", array())), "html", null, true);
            echo "
    </a>
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

    // line 74
    public function getdeleteButton($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "    <a href=\"javascript: void(0);\" class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["parameters"] ?? null), "aCss", array(), "any", true, true)) ? ($this->getAttribute(($context["parameters"] ?? null), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        ";
            // line 76
            if ($this->getAttribute(($context["parameters"] ?? null), "id", array(), "any", true, true)) {
                // line 77
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 79
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "dataId", array(), "any", true, true)) {
                // line 80
                echo "            data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataId", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 82
            echo "   data-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["parameters"] ?? null), "dataMessage", array())), "html", null, true);
            echo "\"
   data-success-message=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["parameters"] ?? null), "successMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["parameters"] ?? null), "successMessage", array()), "Item deleted")) : ("Item deleted"))), "html", null, true);
            echo "\"
        ";
            // line 84
            if ($this->getAttribute(($context["parameters"] ?? null), "dataUrl", array(), "any", true, true)) {
                // line 85
                echo "            data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataUrl", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 87
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array(), "any", true, true)) {
                // line 88
                echo "            data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "dataRedirect", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 90
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "data", array(), "any", true, true)) {
                // line 91
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["parameters"] ?? null), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 92
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo $context["dataItemValue"];
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "        ";
            }
            // line 95
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "title", array(), "any", true, true)) {
                // line 96
                echo "            title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["parameters"] ?? null), "title", array())), "html", null, true);
                echo "\"
        ";
            }
            // line 98
            echo "        ";
            if ($this->getAttribute(($context["parameters"] ?? null), "subTitle", array(), "any", true, true)) {
                // line 99
                echo "            data-subtitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "subTitle", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 101
            echo "        >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["parameters"] ?? null), "label", array())), "html", null, true);
            // line 102
            echo "</a>
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

    // line 114
    public function getbuttonType($__parameters__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 115
            echo "    <button
            type=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "type", array()), "html", null, true);
            echo "\"
            class=\"AknButton";
            // line 117
            if ($this->getAttribute(($context["parameters"] ?? null), "class", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "class", array()), "html", null, true);
            }
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
            ";
            // line 118
            if ($this->getAttribute(($context["parameters"] ?? null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["parameters"] ?? null), "action", array()), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["parameters"] ?? null), "label", array())), "html", null, true);
            echo "
    </button>
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

    // line 123
    public function getsaveAndStayButton($__acl__ = "", $__label__ = "Save", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "acl" => $__acl__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 124
            echo "    ";
            if ((twig_test_empty(($context["acl"] ?? null)) || $this->env->getExtension('Oro\Bundle\SecurityBundle\Twig\OroSecurityExtension')->checkResourceIsGranted(($context["acl"] ?? null)))) {
                // line 125
                echo "        ";
                echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "button", "class" => "AknButton--apply AknButtonList-item", "label" =>                 // line 128
($context["label"] ?? null), "action" => "save_and_stay", "iClass" => "icon-ok")), "method");
                // line 132
                echo "
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

    // line 143
    public function getscrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 144
            echo "    <div class=\"tabsection\">
        ";
            // line 145
            if (twig_length_filter($this->env, ($context["title"] ?? null))) {
                echo "<div class=\"tabsection-title\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["title"] ?? null)), "html", null, true);
                echo "</div>";
            }
            // line 146
            echo "        <div class=\"tabsection-content ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 148
                echo "                ";
                echo $context["dataBlock"];
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "        </div>
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

    // line 168
    public function getscrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null, $__isActive__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "isActive" => $__isActive__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 169
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["blockId"] ?? null), "html", null, true);
            echo "\" class=\"tab-pane ";
            if (($context["isActive"] ?? null)) {
                echo "active";
            }
            echo "\">
        <div class=\"tabsections\">
            ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subblocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 172
                echo "                ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((twig_length_filter($this->env, $this->getAttribute(                // line 173
$context["subblock"], "title", array()))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute(                // line 174
$context["subblock"], "data", array()), 2 =>                 // line 175
($context["isForm"] ?? null), 3 => (($this->getAttribute(                // line 176
$context["subblock"], "class", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "class", array())) : (""))), "method");
                // line 177
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "        </div>
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

    // line 206
    public function getscrollData($__dataTarget__ = null, $__data__ = null, $__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 207
            echo "    ";
            if (((isset($context["form"]) || array_key_exists("form", $context)) && ($context["form"] ?? null))) {
                // line 208
                echo "        ";
                $context["isForm"] = true;
                // line 209
                echo "    ";
            } else {
                // line 210
                echo "        ";
                $context["isForm"] = false;
                // line 211
                echo "    ";
            }
            // line 212
            echo "
    ";
            // line 213
            $context["dataBlocks"] = $this->getAttribute(($context["data"] ?? null), "dataBlocks", array());
            // line 214
            echo "
    <div class=\"AknTabContainer\">
        <div id=\"";
            // line 216
            echo twig_escape_filter($this->env, ($context["dataTarget"] ?? null), "html", null, true);
            echo "\" class=\"AknHorizontalNavtab scrollspy-nav\">
            <div class=\"navbar-inner\">
                <div class=\"row-fluid\">
                    <ul class=\"AknHorizontalNavtab-list nav nav-tabs\">
                        ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataBlocks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 221
                echo "                            <li class=\"AknHorizontalNavtab-item ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " AknHorizontalNavtab-item--active active ";
                }
                echo "\">
                                <a class=\"AknHorizontalNavtab-link\" href=\"#scroll-";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["navElement"], "title", array())), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                    </ul>
                </div>
            </div>
        </div>

        <div class=\"AknTabContainer-content\">
            <div class=\"row-fluid tab-content ";
            // line 231
            if (($context["isForm"] ?? null)) {
                echo " form-container";
            }
            echo "\">
                ";
            // line 232
            if (($this->getAttribute(($context["data"] ?? null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "formErrors", array())))) {
                // line 233
                echo "                    <div class=\"customer-info-actions container-fluid alert-wrap\">
                        <div class=\"alert alert-error\">
                            <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                            ";
                // line 236
                echo $this->getAttribute(($context["data"] ?? null), "formErrors", array());
                echo "
                        </div>
                    </div>
                ";
            }
            // line 240
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dataBlocks"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 241
                echo "                    ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute(                // line 242
$context["loop"], "index", array())), 1 => $this->getAttribute(                // line 243
$context["scrollBlock"], "title", array()), 2 => $this->getAttribute(                // line 244
$context["scrollBlock"], "subblocks", array()), 3 =>                 // line 245
($context["isForm"] ?? null), 4 => (($this->getAttribute(                // line 246
$context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute(                // line 247
$context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true)), 6 => $this->getAttribute(                // line 248
$context["loop"], "first", array())), "method");
                // line 249
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "                ";
            if (($this->getAttribute(($context["data"] ?? null), "hiddenData", array(), "any", true, true) || ($context["isForm"] ?? null))) {
                // line 252
                echo "                    <div class=\"hide\">
                        ";
                // line 253
                if ($this->getAttribute(($context["data"] ?? null), "hiddenData", array(), "any", true, true)) {
                    // line 254
                    echo "                            ";
                    echo $this->getAttribute(($context["data"] ?? null), "hiddenData", array());
                    echo "
                        ";
                }
                // line 256
                echo "                        ";
                if (($context["isForm"] ?? null)) {
                    // line 257
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
                    echo "
                        ";
                }
                // line 259
                echo "                    </div>
                ";
            }
            // line 261
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

    // line 272
    public function getattributes($__attr__ = null, $__excludes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 273
            echo "    ";
            ob_start();
            // line 274
            echo "        ";
            $context["attr"] = (((isset($context["attr"]) || array_key_exists("attr", $context))) ? (_twig_default_filter(($context["attr"] ?? null), array())) : (array()));
            // line 275
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !(isset($context["excludes"]) || array_key_exists("excludes", $context)) ||  !$this->getAttribute(($context["excludes"] ?? null), $context["attrname"], array(), "array", true, true))) {
                    if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), ($context["translation_domain"] ?? null)), "html", null, true);
                        echo "\" ";
                    } else {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "    ";
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

    public function getTemplateName()
    {
        return "PimUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 276,  790 => 275,  787 => 274,  784 => 273,  771 => 272,  753 => 261,  749 => 259,  743 => 257,  740 => 256,  734 => 254,  732 => 253,  729 => 252,  726 => 251,  711 => 249,  709 => 248,  708 => 247,  707 => 246,  706 => 245,  705 => 244,  704 => 243,  703 => 242,  701 => 241,  683 => 240,  676 => 236,  671 => 233,  669 => 232,  663 => 231,  655 => 225,  636 => 222,  629 => 221,  612 => 220,  605 => 216,  601 => 214,  599 => 213,  596 => 212,  593 => 211,  590 => 210,  587 => 209,  584 => 208,  581 => 207,  567 => 206,  550 => 179,  543 => 177,  541 => 176,  540 => 175,  539 => 174,  538 => 173,  536 => 172,  532 => 171,  522 => 169,  504 => 168,  487 => 150,  478 => 148,  474 => 147,  469 => 146,  463 => 145,  460 => 144,  445 => 143,  428 => 132,  426 => 128,  424 => 125,  421 => 124,  408 => 123,  390 => 119,  382 => 118,  372 => 117,  368 => 116,  365 => 115,  353 => 114,  337 => 102,  334 => 101,  328 => 99,  325 => 98,  319 => 96,  316 => 95,  313 => 94,  302 => 92,  297 => 91,  294 => 90,  288 => 88,  285 => 87,  279 => 85,  277 => 84,  273 => 83,  268 => 82,  262 => 80,  259 => 79,  253 => 77,  251 => 76,  246 => 75,  234 => 74,  216 => 57,  212 => 56,  208 => 55,  203 => 54,  191 => 53,  172 => 37,  166 => 34,  162 => 32,  149 => 31,  131 => 22,  129 => 9,  115 => 8,  100 => 21,  97 => 20,  88 => 18,  83 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 11,  61 => 10,  48 => 9,  43 => 265,  40 => 182,  37 => 153,  34 => 135,  31 => 122,  28 => 104,  25 => 60,  22 => 41,  19 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUIBundle::macros.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Resources/views/macros.html.twig");
    }
}
