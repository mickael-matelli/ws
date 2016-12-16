<?php

/* MablaeDatetimepickerBundle:Form:js_layout.html.twig */
class __TwigTemplate_255357562bb193b0ac4dd4f7be55d25bdb2502de927464806eb9437fdc75fa7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'mablae_datetime_javascript' => array($this, 'block_mablae_datetime_javascript'),
            'mablae_datetime_javascript_prototype' => array($this, 'block_mablae_datetime_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d5ac78f6bbf1a6c9933c0b4556e9975bf0b692548ef91d1beb25d2dd6df00d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5ac78f6bbf1a6c9933c0b4556e9975bf0b692548ef91d1beb25d2dd6df00d4->enter($__internal_3d5ac78f6bbf1a6c9933c0b4556e9975bf0b692548ef91d1beb25d2dd6df00d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MablaeDatetimepickerBundle:Form:js_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('mablae_datetime_javascript', $context, $blocks);
        
        $__internal_3d5ac78f6bbf1a6c9933c0b4556e9975bf0b692548ef91d1beb25d2dd6df00d4->leave($__internal_3d5ac78f6bbf1a6c9933c0b4556e9975bf0b692548ef91d1beb25d2dd6df00d4_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        $__internal_dc489b280e6ab201ef8e82e544aac1da3fbbb3596c8a1e09b01a194c7cfbcf1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc489b280e6ab201ef8e82e544aac1da3fbbb3596c8a1e09b01a194c7cfbcf1e->enter($__internal_dc489b280e6ab201ef8e82e544aac1da3fbbb3596c8a1e09b01a194c7cfbcf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('Mablae\DatetimepickerBundle\Twig\Extension\FormExtension')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dc489b280e6ab201ef8e82e544aac1da3fbbb3596c8a1e09b01a194c7cfbcf1e->leave($__internal_dc489b280e6ab201ef8e82e544aac1da3fbbb3596c8a1e09b01a194c7cfbcf1e_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        $__internal_a5d8dd093a398d71bc6f594a4afa2feda58d0a4d43e17dc0c78f994624c71d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d8dd093a398d71bc6f594a4afa2feda58d0a4d43e17dc0c78f994624c71d2d->enter($__internal_a5d8dd093a398d71bc6f594a4afa2feda58d0a4d43e17dc0c78f994624c71d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_a5d8dd093a398d71bc6f594a4afa2feda58d0a4d43e17dc0c78f994624c71d2d->leave($__internal_a5d8dd093a398d71bc6f594a4afa2feda58d0a4d43e17dc0c78f994624c71d2d_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        $__internal_8d24faea91ceafa83e70bab9264d5ac4c316b82f8aea544e737842997bc150fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d24faea91ceafa83e70bab9264d5ac4c316b82f8aea544e737842997bc150fe->enter($__internal_8d24faea91ceafa83e70bab9264d5ac4c316b82f8aea544e737842997bc150fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_8d24faea91ceafa83e70bab9264d5ac4c316b82f8aea544e737842997bc150fe->leave($__internal_8d24faea91ceafa83e70bab9264d5ac4c316b82f8aea544e737842997bc150fe_prof);

    }

    // line 13
    public function block_mablae_datetime_javascript($context, array $blocks = array())
    {
        $__internal_8aedddef17019d6a676883bafa8ea598a2e6fb5c9f2812822d1c49154b530aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aedddef17019d6a676883bafa8ea598a2e6fb5c9f2812822d1c49154b530aa7->enter($__internal_8aedddef17019d6a676883bafa8ea598a2e6fb5c9f2812822d1c49154b530aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mablae_datetime_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(\$) {
            var \$field = \$('#";
        // line 18
        if ((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "');
\t\t\t\$.fn.datepicker.defaults.language = 'fr';
            ";
        // line 20
        $this->displayBlock('mablae_datetime_javascript_prototype', $context, $blocks);
        // line 24
        echo "        });
    </script>
    
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8aedddef17019d6a676883bafa8ea598a2e6fb5c9f2812822d1c49154b530aa7->leave($__internal_8aedddef17019d6a676883bafa8ea598a2e6fb5c9f2812822d1c49154b530aa7_prof);

    }

    // line 20
    public function block_mablae_datetime_javascript_prototype($context, array $blocks = array())
    {
        $__internal_b65175956d3f97712a38d5e649e0b3d9d715143a2af554b55316a041e697dad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65175956d3f97712a38d5e649e0b3d9d715143a2af554b55316a041e697dad7->enter($__internal_b65175956d3f97712a38d5e649e0b3d9d715143a2af554b55316a041e697dad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mablae_datetime_javascript_prototype"));

        // line 21
        echo "                \$field.datepicker(";
        echo twig_jsonencode_filter(($context["pickerOptions"] ?? $this->getContext($context, "pickerOptions")));
        echo ");  

            ";
        
        $__internal_b65175956d3f97712a38d5e649e0b3d9d715143a2af554b55316a041e697dad7->leave($__internal_b65175956d3f97712a38d5e649e0b3d9d715143a2af554b55316a041e697dad7_prof);

    }

    public function getTemplateName()
    {
        return "MablaeDatetimepickerBundle:Form:js_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  135 => 20,  124 => 24,  122 => 20,  114 => 18,  109 => 15,  107 => 14,  101 => 13,  89 => 11,  77 => 9,  62 => 4,  57 => 3,  55 => 2,  49 => 1,  42 => 13,  39 => 12,  37 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_javascript %}
{% spaceless %}
    {% for child in form %}
        {{ form_javascript(child) }}
    {% endfor %}
{% endspaceless %}
{% endblock form_javascript %}

{% block field_javascript \"\" %}

{% block button_javascript \"\" %}

{% block mablae_datetime_javascript %}
{% spaceless %}

    <script type=\"text/javascript\">
        \$(document).ready(function(\$) {
            var \$field = \$('#{% if widget != \"single_text\" %}datepicker_{% endif %}{{ id }}');
\t\t\t\$.fn.datepicker.defaults.language = 'fr';
            {% block mablae_datetime_javascript_prototype %}
                \$field.datepicker({{ pickerOptions|json_encode|raw }});  

            {% endblock %}
        });
    </script>
    
{% endspaceless %}
{% endblock %}
", "MablaeDatetimepickerBundle:Form:js_layout.html.twig", "C:\\wamp\\www\\ws\\vendor\\mablae\\datetimepicker-bundle\\src/Resources/views/Form/js_layout.html.twig");
    }
}
