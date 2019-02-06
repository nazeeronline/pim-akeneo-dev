<?php

/* PimNotificationBundle:Notification:list.json.twig */
class __TwigTemplate_0d56f0b534a5ae51d34228e48845c63fed90876e10b87d94b66f7be888968998 extends Twig_Template
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
        $context["notifications"] = array();
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userNotifications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "notification", array(), "any", false, true), "context", array(), "any", false, true), "gridParameters", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($context["item"], "notification", array()), "route", array())))) {
                // line 4
                echo "        ";
                $context["generatedUrl"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "route", array())) . "|g/") . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "context", array()), "gridParameters", array()));
                // line 5
                echo "    ";
            } elseif ( !(null === $this->getAttribute($this->getAttribute($context["item"], "notification", array()), "route", array()))) {
                // line 6
                echo "        ";
                $context["generatedUrl"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "route", array()), $this->getAttribute($this->getAttribute($context["item"], "notification", array()), "routeParams", array()));
                // line 7
                echo "    ";
            } else {
                // line 8
                echo "        ";
                $context["generatedUrl"] = null;
                // line 9
                echo "    ";
            }
            // line 10
            echo "
    ";
            // line 11
            $context["sanitizedMessageParams"] = array();
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "messageParams", array()));
            foreach ($context['_seq'] as $context["labelKey"] => $context["value"]) {
                // line 13
                echo "        ";
                $context["sanitizedMessageParams"] = twig_array_merge(($context["sanitizedMessageParams"] ?? null), array(("" . $context["labelKey"]) => twig_escape_filter($this->env, $context["value"])));
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['labelKey'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
    ";
            // line 16
            $context["notifications"] = twig_array_merge(($context["notifications"] ?? null), array(0 => array("id" => $this->getAttribute(            // line 17
$context["item"], "id", array()), "type" => $this->getAttribute($this->getAttribute(            // line 18
$context["item"], "notification", array()), "type", array()), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(            // line 19
$context["item"], "notification", array()), "message", array()), ($context["sanitizedMessageParams"] ?? null)), "viewed" => $this->getAttribute(            // line 20
$context["item"], "viewed", array()), "url" =>             // line 21
($context["generatedUrl"] ?? null), "createdAt" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(            // line 22
$context["item"], "notification", array()), "created", array()), "Y-m-d H:i:s", ($context["userTimezone"] ?? null)), "actionType" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
$context["item"], "notification", array()), "context", array()), "actionType", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "context", array()), "actionType", array())) : (null)), "buttonLabel" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
$context["item"], "notification", array(), "any", false, true), "context", array(), "any", false, true), "buttonLabel", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "context", array()), "buttonLabel", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("pim_notification.report"))), "showReportButton" => (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 25
$context["item"], "notification", array(), "any", false, true), "context", array(), "any", false, true), "showReportButton", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "context", array()), "showReportButton", array())) : (true)), "comment" => (($this->getAttribute($this->getAttribute(            // line 26
$context["item"], "notification", array()), "comment", array())) ? ($this->getAttribute($this->getAttribute($context["item"], "notification", array()), "comment", array())) : (null)))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context["data"] = array("notifications" => ($context["notifications"] ?? null), "unreadCount" => $this->env->getExtension('Akeneo\Platform\Bundle\NotificationBundle\Twig\NotificationExtension')->countNotifications());
        // line 30
        echo twig_jsonencode_filter(($context["data"] ?? null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimNotificationBundle:Notification:list.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  84 => 29,  78 => 26,  77 => 25,  76 => 24,  75 => 23,  74 => 22,  73 => 21,  72 => 20,  71 => 19,  70 => 18,  69 => 17,  68 => 16,  65 => 15,  59 => 14,  56 => 13,  51 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PimNotificationBundle:Notification:list.json.twig", "/srv/pim/vendor/akeneo/pim-community-dev/src/Akeneo/Platform/Bundle/NotificationBundle/Resources/views/Notification/list.json.twig");
    }
}
