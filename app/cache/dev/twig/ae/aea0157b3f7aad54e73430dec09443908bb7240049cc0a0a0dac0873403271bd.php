<?php

/* ::layout.html.twig */
class __TwigTemplate_094c396d8b7e57954865807f88d96fe6e72653ae59003f2978e449b8f8522d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a536c9cc4ce8a8868b7a6e46266d9afc73d40be80d28fa82411c813d5f8fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a536c9cc4ce8a8868b7a6e46266d9afc73d40be80d28fa82411c813d5f8fd1->enter($__internal_d4a536c9cc4ce8a8868b7a6e46266d9afc73d40be80d28fa82411c813d5f8fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a536c9cc4ce8a8868b7a6e46266d9afc73d40be80d28fa82411c813d5f8fd1->leave($__internal_d4a536c9cc4ce8a8868b7a6e46266d9afc73d40be80d28fa82411c813d5f8fd1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b886b7d82544ac0bd56ce77dd665c42de7263ef0bbd584b17ca599255652f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b886b7d82544ac0bd56ce77dd665c42de7263ef0bbd584b17ca599255652f1a->enter($__internal_5b886b7d82544ac0bd56ce77dd665c42de7263ef0bbd584b17ca599255652f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        ";
        // line 13
        echo "
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        <div>
            ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "        </div>
";
        
        $__internal_5b886b7d82544ac0bd56ce77dd665c42de7263ef0bbd584b17ca599255652f1a->leave($__internal_5b886b7d82544ac0bd56ce77dd665c42de7263ef0bbd584b17ca599255652f1a_prof);

    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eec3c9fa73a237ba419eb688dac3e13f908aefbc86bcd37a62d567dfe9461200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec3c9fa73a237ba419eb688dac3e13f908aefbc86bcd37a62d567dfe9461200->enter($__internal_eec3c9fa73a237ba419eb688dac3e13f908aefbc86bcd37a62d567dfe9461200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 24
        echo "            ";
        
        $__internal_eec3c9fa73a237ba419eb688dac3e13f908aefbc86bcd37a62d567dfe9461200->leave($__internal_eec3c9fa73a237ba419eb688dac3e13f908aefbc86bcd37a62d567dfe9461200_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  89 => 23,  81 => 25,  79 => 23,  75 => 21,  69 => 20,  60 => 17,  55 => 16,  50 => 15,  46 => 14,  43 => 13,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"::base.html.twig\"%}
{% block body %}
        {#<div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>#}

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}
", "::layout.html.twig", "C:\\wamp\\www\\ws\\app/Resources\\views/layout.html.twig");
    }
}
