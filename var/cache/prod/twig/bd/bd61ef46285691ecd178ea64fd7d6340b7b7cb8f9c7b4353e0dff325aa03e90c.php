<?php

/* PimUserBundle:Role:update.html.twig */
class __TwigTemplate_275173ce186d2ad06055a7ffc45bbedcfe14286d5600f50a661db42434292409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimUserBundle:Role:update.html.twig", 1);
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimUserBundle:Role:update.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("PimUIBundle::macros.html.twig", "PimUserBundle:Role:update.html.twig", 3);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('head_script', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "id", array());
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('content', $context, $blocks);
    }

    // line 5
    public function block_head_script($context, array $blocks = array())
    {
        // line 6
        echo "    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/security-context'],
            function (\$, securityContext) {
                'use strict';

                securityContext.initialize();
                \$(function() {
                    var decorateTabs = function() {
                        \$('.AknVerticalNavtab').find('.AknVerticalNavtab-link').each(function() {
                            var \$target = \$(\$(this).attr('href'));
                            var hasGranted = \$target.find('.acl-permission:not(.default-field) .select-button.granted').length;
                            var hasNonGranted = \$target.find('.acl-permission:not(.default-field) .select-button.non-granted').length;
                            var iconClass = 'non-granted'
                            if (hasGranted && 0 === hasNonGranted) {
                                iconClass = 'AknSelectButton--selected granted';
                            } else if (hasGranted) {
                                iconClass = 'AknSelectButton--partial partial';
                            }
                            var \$icon = \$(this).find('.select-button').first();
                            \$icon.removeClass('AknSelectButton--selected AknSelectButton--partial granted partial non-granted').addClass(iconClass);
                        });
                    };

                    var togglePermission = function(\$icon, callback) {
                        if (\$icon.parent().hasClass('default-field-toggle')) {
                            var permission = \$icon.parent().data('permission');
                            var \$defaultIcon = \$('.default-field[data-permission=\"' + permission + '\"]').find('.' + (\$icon.hasClass('granted') ? 'granted' : 'non-granted'));
                            \$defaultIcon.toggleClass('icon-ok granted').toggleClass('icon-remove non-granted');
                            var \$defaultInput = \$defaultIcon.siblings('input[type=\"checkbox\"]').eq(0);
                            \$defaultInput.prop('checked', !\$defaultInput.is(':checked'));
                        }

                        \$icon.toggleClass('AknSelectButton--selected granted non-granted');
                        var \$input = \$icon.siblings('input[type=\"checkbox\"]').eq(0);
                        \$input.prop('checked', !\$input.is(':checked')).trigger('change');
                        (callback || \$.noop)();
                    };

                    \$('.acl-permission .select-button').on('click', function() {
                        togglePermission(\$(this), decorateTabs)
                    });

                    \$('.AknVerticalNavtab').on('click', '.select-button', function() {
                        var classToToggle = \$(this).hasClass('AknSelectButton--selected') ? 'granted' : 'non-granted';
                        var \$target = \$(\$(this).closest('.AknVerticalNavtab-link').attr('href'));
                        \$target.find('.acl-permission:not(.default-field) .' + classToToggle).each(function() {
                            togglePermission(\$(this));
                        });
                        decorateTabs();
                    });

                    decorateTabs();
                });
            }
        );
        require('pim/page-title').set({'role': '";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "label", array()), "html", null, true);
        echo "'});
    </script>
";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "<div class=\"AknDefault-mainContent\">
    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => ((        // line 71
($context["entityId"] ?? null)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_user_role_update", array("id" => ($context["entityId"] ?? null)))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_user_role_create"))), "attr" => array("class" => "form-tabbed", "data-updated-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("role.title"))))));
        // line 77
        echo "

        ";
        // line 79
        $context["title"] = ((($context["entityId"] ?? null)) ? ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_common.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "value", array()), "label", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_common.create")));
        // line 80
        echo "
        ";
        // line 81
        ob_start();
        // line 82
        echo "            ";
        if (($context["entityId"] ?? null)) {
            // line 83
            echo "                <div class=\"AknSecondaryActions AknDropdown AknButtonList-item secondary-actions\">
                    <div class=\"AknSecondaryActions-button dropdown-button\" data-toggle=\"dropdown\"></div>
                    <div class=\"AknDropdown-menu AknDropdown-menu--right\">
                        <div class=\"AknDropdown-menuTitle\">";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("other_actions"), "html", null, true);
            echo "</div>
                        ";
            // line 87
            echo $context["elements"]->getdeleteLink($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_user_role_delete", array("id" =>             // line 88
($context["entityId"] ?? null))), "pim_user_role_remove", $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pim_user_role_index"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_user_management.entity.role.module.delete.confirm"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("flash.role.removed"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirmation.delete"), "AknDropdown-menuLink delete", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Roles"));
            // line 96
            echo "
                    </div>
                </div>
            ";
        }
        // line 100
        echo "            ";
        echo $context["elements"]->getsubmitBtn("", "ok", "AknButtonList-item");
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "
        ";
        // line 103
        echo $context["elements"]->getpage_header(array("title" =>         // line 105
($context["title"] ?? null), "buttons" =>         // line 106
($context["buttons"] ?? null), "state" =>         // line 107
$context["elements"]->getupdated($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()))));
        // line 109
        echo "

        ";
        // line 111
        $context["tabs"] = array(0 => "pim_user.roles.tab.general");
        // line 112
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["privilegesConfig"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            echo "            ";
            $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => ("pim_user.roles.tab." . $context["item"])));
            // line 114
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        ";
        $context["tabs"] = twig_array_merge(($context["tabs"] ?? null), array(0 => "pim_user.roles.tab.users"));
        // line 116
        echo "
            ";
        // line 117
        echo $context["elements"]->getform_navbar(($context["tabs"] ?? null), "");
        echo "
            <div class=\"tab-content oro-tab-form\">

                ";
        // line 120
        echo $context["elements"]->getform_errors(($context["form"] ?? null));
        echo "

                <div class=\"tab-pane active\" id=\"pim_user-roles-tab-general\">
                    <div class=\"tabsections\">
                        <div class=\"tabsection\">
                            <div class=\"AknTabContainer-content tabsection-content\">
                                <div class=\"AknFormContainer AknFormContainer--withPadding\">
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'row');
        echo "
                                    ";
        // line 128
        if ($this->getAttribute(($context["form"] ?? null), "owner", array(), "any", true, true)) {
            // line 129
            echo "                                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "owner", array()), 'row', array("attr" => array("class" => "hide")));
            echo "
                                    ";
        }
        // line 131
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 137
        $context["groups"] = $this->env->getExtension('Akeneo\UserManagement\Bundle\Twig\AclGroupsExtension')->getAclGroups();
        // line 138
        echo "                ";
        $context["groupNames"] = $this->env->getExtension('Akeneo\UserManagement\Bundle\Twig\AclGroupsExtension')->getAclGroupNames();
        // line 139
        echo "
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["privilegesConfig"] ?? null));
        foreach ($context['_seq'] as $context["privilegeBlock"] => $context["privilegeConfig"]) {
            // line 141
            echo "                    ";
            if ($this->getAttribute(($context["groups"] ?? null), $context["privilegeBlock"], array(), "array", true, true)) {
                // line 142
                echo "                        <div class=\"tab-pane\" id=\"pim_user-roles-tab-";
                echo twig_escape_filter($this->env, $context["privilegeBlock"], "html", null, true);
                echo "\">
                        <div class=\"tabs-left\">
                            ";
                // line 144
                if (("groups" == $this->getAttribute($context["privilegeConfig"], "view_type", array()))) {
                    // line 145
                    echo "                                <ul class=\"AknVerticalNavtab AknVerticalNavtab--condensed\">
                                    <li class=\"AknVerticalNavtab-item AknVerticalNavtab-header\"></li>
                                    ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groups"] ?? null), $context["privilegeBlock"], array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 148
                        echo "                                        <li class=\"AknVerticalNavtab-item tab";
                        echo ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? (" active") : (""));
                        echo "\">
                                            <a class=\"AknVerticalNavtab-link\" href=\"#tabs-";
                        // line 149
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["group"], "name", array()), array(" " => "-", "." => "-"))), "html", null, true);
                        echo "\" data-toggle=\"tab\">
                                                <span class=\"AknAcl\">
                                                    <div class=\"select-button AknAcl-icon AknSelectButton AknSelectButton--selected granted\"></div>
                                                    <span>";
                        // line 152
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "name", array())), "html", null, true);
                        echo "</span>
                                                </span>
                                            </a>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["privilegeBlock"], array(), "array"), "children", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        if (((!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()), $this->getAttribute(($context["groups"] ?? null), $context["privilegeBlock"], array(), "array")) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "extensionKey", array()) == "entity")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array()) != "(default)"))) {
                            // line 158
                            echo "                                        ";
                            $context["groupName"] = ("oro_security.acl_group." . twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array())));
                            // line 159
                            echo "                                        <li class=\"AknVerticalNavtab-item tab\">
                                            <a class=\"AknVerticalNavtab-link\" href=\"#tabs-";
                            // line 160
                            echo twig_escape_filter($this->env, twig_replace_filter(($context["groupName"] ?? null), array(" " => "-", "." => "-")), "html", null, true);
                            echo "\" data-toggle=\"tab\">
                                                <span class=\"AknAcl\">
                                                    <div class=\"select-button AknAcl-icon AknSelectButton AknSelectButton--selected granted\"></div>
                                                    <span>";
                            // line 163
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["groupName"] ?? null)), "html", null, true);
                            echo "</span>
                                                </span>
                                            </a>
                                        </li>
                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                                    ";
                    if (("action" == $context["privilegeBlock"])) {
                        // line 169
                        echo "                                        <li class=\"AknVerticalNavtab-item tab\">
                                            <a class=\"AknVerticalNavtab-link\" href=\"#tabs-group-system\" data-toggle=\"tab\">
                                                <span class=\"AknAcl\">
                                                    <div class=\"select-button AknAcl-icon AknSelectButton AknSelectButton--selected granted\"></div>
                                                    <span>";
                        // line 173
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("System"), "html", null, true);
                        echo "</span>
                                                </span>
                                            </a>
                                        </li>
                                    ";
                    }
                    // line 178
                    echo "                                </ul>
                                <div class=\"AknTabContainer-content AknTabContainer-withPadding tab-content\">
                                    ";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groups"] ?? null), $context["privilegeBlock"], array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 181
                        echo "                                        <div id=\"tabs-";
                        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["group"], "name", array()), array(" " => "-", "." => "-"))), "html", null, true);
                        echo "\" class=\"tab-pane fullheight\">
                                            <div class=\"AknTabHeader\">
                                                <h3 class=\"AknTabHeader-title AknTabHeader-small\">";
                        // line 183
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "name", array())), "html", null, true);
                        echo "</h3>
                                            </div>
                                            <div class=\"AknFormContainer AknFormContainer--withPadding acl-group\">
                                                ";
                        // line 186
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["privilegeBlock"], array(), "array"), "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()) == $this->getAttribute($context["group"], "name", array()))) {
                                // line 187
                                echo "                                                    ";
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                                echo "
                                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 189
                        echo "                                            </div>
                                        </div>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 192
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["privilegeBlock"], array(), "array"), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        if (((!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()), ($context["groups"] ?? null)) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "extensionKey", array()) == "entity")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array()) != "(default)"))) {
                            // line 193
                            echo "                                        ";
                            $context["groupName"] = ("oro_security.acl_group." . twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array())));
                            // line 194
                            echo "                                        <div id=\"tabs-";
                            echo twig_escape_filter($this->env, twig_replace_filter(($context["groupName"] ?? null), array(" " => "-", "." => "-")), "html", null, true);
                            echo "\" class=\"tab-pane fullheight\">
                                            <div class=\"AknTabHeader\">
                                                <h3 class=\"AknTabHeader-title\">";
                            // line 196
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["groupName"] ?? null)), "html", null, true);
                            echo "</h3>
                                            </div>
                                            <div class=\"AknFormContainer AknFormContainer--withPadding acl-group\">
                                                ";
                            // line 199
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                            echo "
                                            </div>
                                        </div>
                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo "                                    ";
                    if (("action" == $context["privilegeBlock"])) {
                        // line 204
                        echo "                                        <div id=\"tabs-group-system\" class=\"tab-pane fullheight\">
                                            <div class=\"AknTabHeader\">
                                                <h3 class=\"AknTabHeader-title\">";
                        // line 206
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("System"), "html", null, true);
                        echo "</h3>
                                            </div>
                                            <div class=\"AknFormContainer AknFormContainer--withPadding acl-group\">
                                                ";
                        // line 209
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), $context["privilegeBlock"], array(), "array"), "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            if ((!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()), ($context["groupNames"] ?? null)) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "extensionKey", array()) != "entity") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")))) {
                                // line 210
                                echo "                                                    ";
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                                echo "
                                                ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 212
                        echo "                                            </div>
                                        </div>
                                    ";
                    }
                    // line 215
                    echo "                                </div>
                            </div>
                        ";
                } else {
                    // line 218
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), $context["privilegeBlock"], array(), "array"), 'widget');
                    echo "
                        ";
                }
                // line 220
                echo "                    </div>
                    ";
            }
            // line 222
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['privilegeBlock'], $context['privilegeConfig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "
                <div class=\"AknTabContainer-content tab-pane\" id=\"pim_user-roles-tab-users\">
                    ";
        // line 225
        echo $context["dataGrid"]->getrenderGrid("pim-role-user-grid", array("role_id" => ($context["entityId"] ?? null)));
        echo "
                    ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "appendUsers", array()), 'widget', array("id" => "roleAppendUsers"));
        echo "
                    ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "removeUsers", array()), 'widget', array("id" => "roleRemoveUsers"));
        echo "
                </div>
        </div>

    ";
        // line 231
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

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
                            item: 'pim-menu-system-user-role'
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
</div>
";
    }

    public function getTemplateName()
    {
        return "PimUserBundle:Role:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 231,  491 => 227,  487 => 226,  483 => 225,  479 => 223,  473 => 222,  469 => 220,  463 => 218,  458 => 215,  453 => 212,  443 => 210,  438 => 209,  432 => 206,  428 => 204,  425 => 203,  414 => 199,  408 => 196,  402 => 194,  399 => 193,  393 => 192,  385 => 189,  375 => 187,  370 => 186,  364 => 183,  358 => 181,  354 => 180,  350 => 178,  342 => 173,  336 => 169,  333 => 168,  321 => 163,  315 => 160,  312 => 159,  309 => 158,  303 => 157,  284 => 152,  278 => 149,  273 => 148,  256 => 147,  252 => 145,  250 => 144,  244 => 142,  241 => 141,  237 => 140,  234 => 139,  231 => 138,  229 => 137,  221 => 131,  215 => 129,  213 => 128,  209 => 127,  199 => 120,  193 => 117,  190 => 116,  187 => 115,  181 => 114,  178 => 113,  173 => 112,  171 => 111,  167 => 109,  165 => 107,  164 => 106,  163 => 105,  162 => 103,  159 => 102,  153 => 100,  147 => 96,  145 => 88,  144 => 87,  140 => 86,  135 => 83,  132 => 82,  130 => 81,  127 => 80,  125 => 79,  121 => 77,  119 => 71,  118 => 70,  115 => 69,  112 => 68,  105 => 62,  47 => 6,  44 => 5,  40 => 68,  37 => 67,  35 => 66,  32 => 65,  30 => 5,  27 => 4,  25 => 3,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimUserBundle:Role:update.html.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/UserManagement/Bundle/Resources/views/Role/update.html.twig");
    }
}
