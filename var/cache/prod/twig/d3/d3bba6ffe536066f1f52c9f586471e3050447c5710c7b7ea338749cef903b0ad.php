<?php

/* PimUIBundle:Form:pim-fields.html.twig */
class __TwigTemplate_6c914a244d446838e05642029c944a2630851649fd66235f71cdb31a052f500c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "PimUIBundle:Form:pim-fields.html.twig", 1);
        $this->blocks = array(
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_row_field' => array($this, 'block_form_row_field'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_info' => array($this, 'block_form_info'),
            'form_errors' => array($this, 'block_form_errors'),
            'pim_translatable_field_row' => array($this, 'block_pim_translatable_field_row'),
            'pim_enrich_media_row' => array($this, 'block_pim_enrich_media_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'switch_widget' => array($this, 'block_switch_widget'),
            'pim_ajax_entity_row' => array($this, 'block_pim_ajax_entity_row'),
            'pim_ajax_reference_data_row' => array($this, 'block_pim_ajax_reference_data_row'),
            'pim_date_widget' => array($this, 'block_pim_date_widget'),
            'pim_number_widget' => array($this, 'block_pim_number_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
            'pim_acl_access_level_selector_widget' => array($this, 'block_pim_acl_access_level_selector_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
            'pim_async_select_widget' => array($this, 'block_pim_async_select_widget'),
            'select_family_type_row' => array($this, 'block_select_family_type_row'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " error")) : ("error"))));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_date_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        $context["type"] = "text";
        // line 13
        echo "        ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 14
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 16
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 17
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 18
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 19
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 20
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 21
            echo "
            </div>
        ";
        }
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($this->getAttribute(($context["attr"] ?? null), "class", array()) . " validate-group")));
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($this->getAttribute(($context["attr"] ?? null), "class", array()) . " AknChoicesField")));
        // line 32
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 34
            echo "                <div class=\"AknChoicesField-choiceItem\">
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 46
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 47
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                    ";
                // line 48
                $context["options"] = $context["choice"];
                // line 49
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 52
                echo "                ";
                $context["label"] = (((($context["choice_translation_domain"] ?? null) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? null))));
                // line 53
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute(($context["configs"] ?? null), "is_safe", array(), "any", true, true) && $this->getAttribute(($context["configs"] ?? null), "is_safe", array()))) {
                    echo ($context["label"] ?? null);
                } else {
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 55
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        ob_start();
        // line 61
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["choice"] ?? null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["choice"] ?? null), "label", array()), "attr", array())) > 0))) {
            // line 62
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["choice"] ?? null), "label", array()), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        ";
        }
        // line 64
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_form_start($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 70
        echo "    ";
        if (twig_in_filter(($context["method"] ?? null), array(0 => "GET", 1 => "POST"))) {
            // line 71
            echo "        ";
            $context["form_method"] = ($context["method"] ?? null);
            // line 72
            echo "    ";
        } else {
            // line 73
            echo "        ";
            $context["form_method"] = "POST";
            // line 74
            echo "    ";
        }
        // line 75
        echo "    ";
        $context["formClass"] = (((isset($context["class"]) || array_key_exists("class", $context))) ? (($context["class"] ?? null)) : ("form-horizontal"));
        // line 76
        echo "    ";
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            // line 77
            echo "        ";
            $context["class"] = (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ") . ($context["formClass"] ?? null));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        ";
            $context["class"] = ($context["formClass"] ?? null);
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($context["class"] ?? null)));
        // line 82
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 83
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 84
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_form_end($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "_token", array()), 'row');
        echo "
</form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 96
    public function block_form_row_field($context, array $blocks = array())
    {
        // line 97
        echo "    <div class=\"AknFieldContainer";
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attr"] ?? null), "class", array()), "html", null, true);
        }
        echo "\">
        <div class=\"AknFieldContainer-header\">
            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("label_attr" => twig_array_merge(($context["label_attr"] ?? null), array("class" => "AknFieldContainer-label control-label"))));
        echo "
        </div>
        <div class=\"AknFieldContainer-inputContainer field-input";
        // line 101
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " validation-error";
        }
        echo "\">
            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 103
        if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())) == 0)) {
            // line 104
            echo "                ";
            $this->displayBlock("form_info", $context, $blocks);
            echo "
            ";
        }
        // line 106
        echo "        </div>
    </div>
";
    }

    // line 110
    public function block_form_row($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "        ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 116
    public function block_form_label($context, array $blocks = array())
    {
        // line 117
        ob_start();
        // line 118
        echo "    ";
        if ( !(($context["label"] ?? null) === false)) {
            // line 119
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " AknFieldContainer-label"))));
            // line 120
            echo "        ";
            if ( !($context["compound"] ?? null)) {
                // line 121
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                // line 122
                echo "        ";
            }
            // line 123
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 124
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(($this->getAttribute(($context["label_attr"] ?? null), "class", array()) . " required"))));
                // line 125
                echo "        ";
            }
            // line 126
            echo "        ";
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 127
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 128
                echo "        ";
            }
            // line 129
            echo "        ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && (isset($context["checked"]) || array_key_exists("checked", $context)));
            // line 130
            echo "        ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null));
            // line 131
            echo "        ";
            if (($this->getAttribute(($context["label_attr"] ?? null), "truncate", array(), "any", true, true) && $this->getAttribute(($context["label_attr"] ?? null), "truncate", array()))) {
                // line 132
                echo "            ";
                $context["label_attr"] = twig_array_merge(array("title" => ($context["label"] ?? null)), ($context["label_attr"] ?? null));
                // line 133
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["label_attr"] ?? null), "class", array()) . " ")) : ("")) . "truncate")));
                // line 134
                echo "        ";
            }
            // line 135
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (($context["attrname"] != "truncate")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 136
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "mode", array())))) {
                // line 137
                echo "                <input type=\"checkbox\" class=\"comparisonSelection exclude\" />
            ";
            } else {
                // line 139
                echo "                ";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                if ((($context["required"] ?? null) &&  !($context["isRadioLabel"] ?? null))) {
                    echo " <em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("required"), "html", null, true);
                    echo "</em>";
                }
                // line 140
                echo "            ";
            }
            // line 141
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 146
    public function block_form_info($context, array $blocks = array())
    {
        // line 147
        echo "    ";
        ob_start();
        // line 148
        echo "        ";
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || (($context["type"] ?? null) != "hidden"))) {
            // line 149
            echo "            <div class=\"AknFieldContainer-iconsContainer icons-container\">
                ";
            // line 150
            if ((isset($context["help"]) || array_key_exists("help", $context))) {
                // line 151
                echo "                    <i class=\"AknIconButton icon-info-sign\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["help"] ?? null)), "html", null, true);
                echo "\"></i>
                ";
            }
            // line 153
            echo "                ";
            if ((isset($context["from_variant"]) || array_key_exists("from_variant", $context))) {
                // line 154
                echo "                    <i class=\"AknIconButton icon-lock\" data-trigger=\"hover\" data-toggle=\"popover\" data-placement=\"right\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.product_value.tooltip.from_variant.title"), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.product_value.tooltip.from_variant.content"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["from_variant"] ?? null), "code", array()), "html", null, true);
                echo "\" data-container=\"body\"></i>
                ";
            }
            // line 156
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
            </div>
            ";
            // line 158
            if ((isset($context["info"]) || array_key_exists("info", $context))) {
                // line 159
                echo "                <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["info"] ?? null)), "html", null, true);
                echo "</div>
            ";
            }
            // line 161
            echo "        ";
        }
        // line 162
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 169
    public function block_form_errors($context, array $blocks = array())
    {
        ob_start();
        // line 170
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 171
            echo "        <script type=\"text/javascript\">
            var el = document.getElementById('";
            // line 172
            echo $this->getAttribute($this, "getRootId", array(0 => ($context["form"] ?? null)), "method");
            echo "');

            if (el) {
                el.dispatchEvent(new Event('change'));
            }

        </script>
        ";
            // line 179
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                // line 180
                echo "            ";
                $context["combinedError"] = "";
                // line 181
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 182
                    echo "                ";
                    $context["error"] = (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 183
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 184
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")));
                    // line 185
                    echo "                ";
                    $context["combinedError"] = (((($context["combinedError"] ?? null) != "")) ? (((($context["combinedError"] ?? null) . "; ") . $context["error"])) : ($context["error"]));
                    // line 186
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "            <i class=\"AknIconButton AknIconButton--important icon-warning-sign validation-tooltip\" data-placement=\"right\" data-toggle=\"tooltip\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["combinedError"] ?? null)), "html", null, true);
                echo "\"></i>
        ";
            } else {
                // line 189
                echo "            ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
        ";
            }
            // line 191
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 194
    public function block_pim_translatable_field_row($context, array $blocks = array())
    {
        // line 195
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 197
            echo "    <div class=\"AknFieldContainer\">
        <div class=\"AknFieldContainer-header\">
            ";
            // line 199
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'label');
            echo "
        </div>
        <div class=\"AknFieldContainer-inputContainer field-input";
            // line 201
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                echo " validation-error";
            }
            echo "\">
            ";
            // line 202
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            echo "
            ";
            // line 203
            if ((twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? null), "children", array())) == 0)) {
                // line 204
                echo "                ";
                $this->displayBlock("form_info", $context, $blocks);
                echo "
            ";
            }
            // line 206
            echo "        </div>
        <div class=\"AknFieldContainer-footer\">
            ";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translation"], 'errors');
            echo "
        </div>
    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 214
    public function block_pim_enrich_media_row($context, array $blocks = array())
    {
        // line 215
        echo "    ";
        ob_start();
        // line 216
        echo "    ";
        $context["empty"] = ( !$this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()) ||  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "key", array()));
        // line 217
        echo "    ";
        if ( !((($context["empty"] ?? null) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true)) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "mode", array())))) {
            // line 218
            echo "        <div class=\"AknFormContainer AknFormContainer--withPadding AknFormContainer--centered control-group upload-zone-container\">
            <div class=\"controls AknMediaField\">
                <label class=\"upload-zone file";
            // line 220
            if (($context["empty"] ?? null)) {
                echo " empty";
            }
            if (($context["disabled"] ?? null)) {
                echo " disabled";
            }
            echo "\">
                    ";
            // line 221
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) || ("comparison" != $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "mode", array())))) {
                // line 222
                echo "                        <a class=\"AknMediaField-trashIcon no-hash remove-upload";
                if (($context["empty"] ?? null)) {
                    echo " hide";
                }
                if (($context["disabled"] ?? null)) {
                    echo " disabled";
                }
                echo "\">
                            <i class=\"icon-trash\"></i>
                        </a>
                    ";
            }
            // line 226
            echo "                    <div class=\"upload-info\">
                        ";
            // line 227
            if ( !($context["empty"] ?? null)) {
                // line 228
                echo "                            <a class=\"no-hash upload-preview\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_enrich_media_show", array("filename" => twig_urlencode_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "key", array())))), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "originalFilename", array()), "html", null, true);
                echo "\">
                                <img src=\"/bundles/pimui/images/upload.png\" alt=\"upload icon\" class=\"AknMediaField-uploadIcon upload-preview\">
                            </a>
                            ";
                // line 231
                $context["filename"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "originalFilename", array());
                // line 232
                echo "                            ";
                if ((twig_length_filter($this->env, ($context["filename"] ?? null)) > 20)) {
                    // line 233
                    echo "                                ";
                    $context["filename"] = (twig_slice($this->env, ($context["filename"] ?? null), 0, 17) . "...");
                    // line 234
                    echo "                            ";
                }
                // line 235
                echo "                            <span class=\"upload-filename\" data-empty-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drag and drop a file or click here"), "html", null, true);
                echo "\">";
                if (($context["empty"] ?? null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drag and drop a file or click here"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
                }
                echo "</span>
                        ";
            } else {
                // line 237
                echo "                            <div class=\"AknMediaField-emptyContainer\">
                                <img src=\"/bundles/pimui/images/upload.png\" alt=\"upload icon\" class=\"AknMediaField-uploadIcon upload-preview\">
                                <span class=\"upload-filename\" data-empty-title=\"";
                // line 239
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drag and drop a file or click here"), "html", null, true);
                echo "\">";
                if (($context["empty"] ?? null)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drag and drop a file or click here"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, ($context["filename"] ?? null), "html", null, true);
                }
                echo "</span>
                            </div>
                        ";
            }
            // line 242
            echo "                    </div>
                    ";
            // line 243
            if (($context["empty"] ?? null)) {
                // line 244
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "uploadedFile", array()), 'widget', array("attr" => array("class" => "AknTextField--fileDropZone")));
                echo "
                    ";
            } else {
                // line 246
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "uploadedFile", array()), 'widget', array("attr" => array("class" => "hide", "disabled" => "disabled")));
                echo "
                        ";
                // line 247
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removed", array()), 'widget', array("attr" => array("class" => "hide")));
                echo "
                    ";
            }
            // line 249
            echo "                </label>
                ";
            // line 250
            $this->displayBlock("form_info", $context, $blocks);
            echo "
                ";
            // line 251
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", array()), 'widget');
            echo "
            </div>
        </div>
        <script type=\"text/javascript\">
            require(
                ['pim/fileinput'],
                function(fileinput) {
                    fileinput.init('";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "uploadedFile", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                }
            );
        </script>
    ";
        } else {
            // line 263
            echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <label class=\"upload-zone file empty\">
                    <div class=\"upload-info\">
                        <span class=\"upload-filename\">
                            ";
            // line 268
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_enrich.product.no_compared_media"), "html", null, true);
            echo "
                        </span>
                    </div>
                </label>
            </div>
        </div>
    ";
        }
        // line 275
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 279
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 280
        ob_start();
        // line 281
        echo "    id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($this->getAttribute(($context["attr"] ?? null), "read_only", array(), "any", true, true) && ($this->getAttribute(($context["attr"] ?? null), "read_only", array()) == true))) {
            echo " readonly=\"readonly\"";
        }
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getAttribute(($context["attr"] ?? null), "max_length", array(), "any", true, true)) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, ($context["max_length"] ?? null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) || array_key_exists("pattern", $context))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, ($context["pattern"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 282
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 286
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 287
        ob_start();
        // line 288
        echo "    ";
        $context["originalId"] = ($context["id"] ?? null);
        // line 289
        echo "    ";
        $context["id"] = ("input-" . ($context["originalId"] ?? null));
        // line 290
        echo "    ";
        $context["switchId"] = ("switch-" . ($context["originalId"] ?? null));
        // line 291
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, ($context["switchId"] ?? null), "html", null, true);
        echo "\" class=\"switch switch-";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["attr"] ?? null), "size", array(), "any", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "size", array())) : ("small")), "html", null, true);
        echo "\" data-on-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["attr"] ?? null), "data-on-label", array(), "array", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "data-on-label", array(), "array")) : ("switch_on"))), "html", null, true);
        echo "\" data-off-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["attr"] ?? null), "data-off-label", array(), "array", true, true)) ? ($this->getAttribute(($context["attr"] ?? null), "data-off-label", array(), "array")) : ("switch_off"))), "html", null, true);
        echo "\">
        ";
        // line 292
        if (($context["required"] ?? null)) {
            $context["required"] = false;
        }
        // line 293
        echo "        <input id=\"";
        echo twig_escape_filter($this->env, ($context["originalId"] ?? null), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo ">
        <input type=\"hidden\" ";
        // line 294
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((($context["checked"] ?? null) || ($this->getAttribute(($context["attr"] ?? null), "checked", array(), "any", true, true) && $this->getAttribute(($context["attr"] ?? null), "checked", array())))) {
            echo " value=\"1\"";
        }
        echo ">
    </div>
    <script type=\"text/javascript\">
    require(
        ['jquery'],
        function (\$) {
            'use strict';
            \$(function() {
                \$('#";
        // line 302
        echo twig_escape_filter($this->env, ($context["switchId"] ?? null), "html", null, true);
        echo "').closest('form').on('switch-change', '#";
        echo twig_escape_filter($this->env, ($context["switchId"] ?? null), "html", null, true);
        echo "', function (e, data) {
                    \$('#";
        // line 303
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').val(+data.value);
                });
            });
        }
    );
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 312
    public function block_pim_ajax_entity_row($context, array $blocks = array())
    {
        // line 313
        echo "    ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
";
    }

    // line 316
    public function block_pim_ajax_reference_data_row($context, array $blocks = array())
    {
        // line 317
        echo "    ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
";
    }

    // line 320
    public function block_pim_date_widget($context, array $blocks = array())
    {
        // line 321
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (($this->getAttribute(($context["attr"] ?? null), "class", array()) . " ")) : ("")) . "datepicker add-on"), "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null))));
        // line 322
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "disabled", array())) {
            // line 323
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("disabled" => "disabled"));
            // line 324
            echo "    ";
        }
        // line 325
        echo "
    ";
        // line 326
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
    }

    // line 329
    public function block_pim_number_widget($context, array $blocks = array())
    {
        // line 330
        echo "    ";
        $this->displayBlock("number_widget", $context, $blocks);
        echo "
";
    }

    // line 333
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 334
        echo "    ";
        ob_start();
        // line 335
        echo "        ";
        if (("groups" == $this->getAttribute(($context["privileges_config"] ?? null), "view_type", array()))) {
            // line 336
            echo "            ";
            if ((("entity" == $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "extensionKey", array())) && ("(default)" != $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "identity", array()), "name", array())))) {
                // line 337
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "identity", array()), "id", array()), 'widget');
                echo "
                ";
                // line 338
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "permissions", array()), 'widget');
                echo "
            ";
            } else {
                // line 340
                echo "                <div class=\"AknAcl AknAcl-item acl-permission";
                echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) ? (" default-field AknAcl--hide hide") : (""));
                echo "\">
                    ";
                // line 341
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "permissions", array()), 'widget');
                echo "
                    ";
                // line 342
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "identity", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 345
            echo "        ";
        } else {
            // line 346
            echo "            <tr class=\"acl-permission";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) ? (" default-field hide") : (""));
            echo "\">
                <td>
                    ";
            // line 348
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "identity", array()), 'widget');
            echo "
                </td>
                ";
            // line 350
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "permissions", array()), 'widget');
            echo "
            </tr>
        ";
        }
        // line 353
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 356
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 357
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget');
        echo "
    ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "accessLevel", array()), 'widget');
        echo "
";
    }

    // line 361
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 362
        echo "    ";
        if (("entity" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "extensionKey", array()))) {
            // line 363
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["privileges_config"] ?? null), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 364
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                        // line 365
                        echo "                ";
                        $context["additionalClass"] = (((($context["field"] == "ASSIGN") || ("(default)" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array())))) ? (" default-field hide") : (""));
                        // line 366
                        echo "                ";
                        if (("entity:Akeneo\\UserManagement\\Component\\Model\\Role" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "id", array()))) {
                            // line 367
                            echo "                    ";
                            $context["additionalClass"] = (($context["additionalClass"] ?? null) . " default-field-toggle");
                            // line 368
                            echo "                ";
                        }
                        // line 369
                        echo "                <div class=\"acl-permission";
                        echo twig_escape_filter($this->env, ($context["additionalClass"] ?? null), "html", null, true);
                        echo "\" data-permission=\"";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\">
                    <span>";
                        // line 370
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_lower_filter($this->env, ((("oro_security.acl." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array())) . ".") . $context["field"]))), "html", null, true);
                        echo "</span>
                    ";
                        // line 371
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["permission"], 'widget');
                        echo "
                </div>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "    ";
        } else {
            // line 376
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["privileges_config"] ?? null), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 377
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                        // line 378
                        echo "                ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["permission"], 'widget');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 380
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 381
            echo "    ";
        }
    }

    // line 384
    public function block_pim_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 385
        echo "    ";
        $context["iconClass"] = "";
        // line 386
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "checked", array())) {
            // line 387
            echo "        ";
            $context["iconClass"] = "AknSelectButton--selected granted";
            // line 388
            echo "    ";
        } else {
            // line 389
            echo "        ";
            $context["iconClass"] = "non-granted";
            // line 390
            echo "    ";
        }
        // line 391
        echo "    <div class=\"select-button AknAcl-icon AknSelectButton ";
        echo twig_escape_filter($this->env, ($context["iconClass"] ?? null), "html", null, true);
        echo " acl-permission-toggle\"></div>
    ";
        // line 392
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => "hide"));
        // line 393
        echo "    ";
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
";
    }

    // line 396
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        // line 397
        echo "    <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? null)), "html", null, true);
        echo "</span>
";
    }

    // line 400
    public function block_pim_async_select_widget($context, array $blocks = array())
    {
        // line 401
        echo "    ";
        if ($this->getAttribute(($context["attr"] ?? null), "data-placeholder", array(), "array", true, true)) {
            // line 402
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["attr"] ?? null), "data-placeholder", array(), "array"))));
            // line 403
            echo "    ";
        }
        // line 404
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
";
    }

    // line 407
    public function block_select_family_type_row($context, array $blocks = array())
    {
        // line 408
        echo "    ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
";
    }

    // line 411
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 412
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 413
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            // line 414
            echo "        ";
            if (!twig_in_filter("input-", $this->getAttribute(($context["attr"] ?? null), "class", array()))) {
                // line 415
                echo "            ";
                $context["class"] = ($this->getAttribute(($context["attr"] ?? null), "class", array()) . " AknTextField");
                // line 416
                echo "        ";
            } else {
                // line 417
                echo "            ";
                $context["class"] = $this->getAttribute(($context["attr"] ?? null), "class", array());
                // line 418
                echo "        ";
            }
            // line 419
            echo "    ";
        } else {
            // line 420
            echo "        ";
            $context["class"] = " AknTextField";
            // line 421
            echo "    ";
        }
        // line 422
        echo "    ";
        if (("file" == ($context["type"] ?? null))) {
            // line 423
            echo "        ";
            $context["class"] = (($context["class"] ?? null) . " AknTextField--file");
            // line 424
            echo "    ";
        }
        // line 425
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => ($context["class"] ?? null)));
        // line 426
        echo "    ";
        // line 427
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if (((($context["value"] ?? null) == "\\") ||  !twig_test_empty(($context["value"] ?? null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 430
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 431
        echo "<textarea class=\"AknTextareaField\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 165
    public function getgetRootId($__form__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "parent", array())) ? ($this->getAttribute($this, "getRootId", array(0 => $this->getAttribute(($context["form"] ?? null), "parent", array())), "method")) : ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))), "html", null, true);
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
        return "PimUIBundle:Form:pim-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1377 => 166,  1365 => 165,  1357 => 431,  1354 => 430,  1340 => 427,  1338 => 426,  1335 => 425,  1332 => 424,  1329 => 423,  1326 => 422,  1323 => 421,  1320 => 420,  1317 => 419,  1314 => 418,  1311 => 417,  1308 => 416,  1305 => 415,  1302 => 414,  1300 => 413,  1298 => 412,  1295 => 411,  1288 => 408,  1285 => 407,  1278 => 404,  1275 => 403,  1272 => 402,  1269 => 401,  1266 => 400,  1259 => 397,  1256 => 396,  1249 => 393,  1247 => 392,  1242 => 391,  1239 => 390,  1236 => 389,  1233 => 388,  1230 => 387,  1227 => 386,  1224 => 385,  1221 => 384,  1216 => 381,  1210 => 380,  1200 => 378,  1194 => 377,  1189 => 376,  1186 => 375,  1180 => 374,  1170 => 371,  1166 => 370,  1159 => 369,  1156 => 368,  1153 => 367,  1150 => 366,  1147 => 365,  1141 => 364,  1136 => 363,  1133 => 362,  1130 => 361,  1124 => 358,  1119 => 357,  1116 => 356,  1111 => 353,  1105 => 350,  1100 => 348,  1094 => 346,  1091 => 345,  1085 => 342,  1081 => 341,  1076 => 340,  1071 => 338,  1066 => 337,  1063 => 336,  1060 => 335,  1057 => 334,  1054 => 333,  1047 => 330,  1044 => 329,  1038 => 326,  1035 => 325,  1032 => 324,  1029 => 323,  1026 => 322,  1023 => 321,  1020 => 320,  1013 => 317,  1010 => 316,  1003 => 313,  1000 => 312,  988 => 303,  982 => 302,  968 => 294,  951 => 293,  947 => 292,  936 => 291,  933 => 290,  930 => 289,  927 => 288,  925 => 287,  922 => 286,  899 => 282,  877 => 281,  875 => 280,  872 => 279,  866 => 275,  856 => 268,  849 => 263,  841 => 258,  831 => 251,  827 => 250,  824 => 249,  819 => 247,  814 => 246,  808 => 244,  806 => 243,  803 => 242,  791 => 239,  787 => 237,  775 => 235,  772 => 234,  769 => 233,  766 => 232,  764 => 231,  755 => 228,  753 => 227,  750 => 226,  737 => 222,  735 => 221,  726 => 220,  722 => 218,  719 => 217,  716 => 216,  713 => 215,  710 => 214,  690 => 208,  686 => 206,  680 => 204,  678 => 203,  674 => 202,  668 => 201,  663 => 199,  659 => 197,  642 => 196,  637 => 195,  634 => 194,  628 => 191,  622 => 189,  616 => 187,  610 => 186,  607 => 185,  605 => 184,  604 => 183,  602 => 182,  597 => 181,  594 => 180,  592 => 179,  582 => 172,  579 => 171,  576 => 170,  572 => 169,  567 => 162,  564 => 161,  558 => 159,  556 => 158,  550 => 156,  540 => 154,  537 => 153,  531 => 151,  529 => 150,  526 => 149,  523 => 148,  520 => 147,  517 => 146,  510 => 141,  507 => 140,  499 => 139,  495 => 137,  493 => 136,  475 => 135,  472 => 134,  469 => 133,  466 => 132,  463 => 131,  460 => 130,  457 => 129,  454 => 128,  451 => 127,  448 => 126,  445 => 125,  442 => 124,  439 => 123,  436 => 122,  433 => 121,  430 => 120,  427 => 119,  424 => 118,  422 => 117,  419 => 116,  411 => 112,  408 => 111,  405 => 110,  399 => 106,  393 => 104,  391 => 103,  387 => 102,  381 => 101,  376 => 99,  367 => 97,  364 => 96,  355 => 91,  353 => 90,  350 => 89,  341 => 84,  339 => 83,  314 => 82,  311 => 81,  308 => 80,  305 => 79,  302 => 78,  299 => 77,  296 => 76,  293 => 75,  290 => 74,  287 => 73,  284 => 72,  281 => 71,  278 => 70,  275 => 69,  273 => 68,  270 => 67,  265 => 64,  262 => 63,  249 => 62,  246 => 61,  243 => 60,  240 => 59,  235 => 56,  221 => 55,  203 => 53,  200 => 52,  193 => 49,  191 => 48,  186 => 47,  183 => 46,  165 => 45,  162 => 44,  159 => 43,  153 => 39,  144 => 36,  140 => 35,  137 => 34,  133 => 33,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  116 => 28,  113 => 27,  108 => 24,  103 => 21,  101 => 20,  100 => 19,  99 => 18,  98 => 17,  93 => 16,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  68 => 7,  65 => 6,  62 => 5,  59 => 4,  56 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUIBundle:Form:pim-fields.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/UIBundle/Resources/views/Form/pim-fields.html.twig");
    }
}
