<?php

/* MablaeDatetimepickerBundle:Form:div_layout.html.twig */
class __TwigTemplate_765029439f6673fb1dd70002e8727895e1dfbdcfddaa96c74f08597232fbffea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'mablae_datetime_widget' => array($this, 'block_mablae_datetime_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb56a34cafbc0dc0277a77f7f960d1d9278482ebbf3923667ba9d6b299cb882d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb56a34cafbc0dc0277a77f7f960d1d9278482ebbf3923667ba9d6b299cb882d->enter($__internal_fb56a34cafbc0dc0277a77f7f960d1d9278482ebbf3923667ba9d6b299cb882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MablaeDatetimepickerBundle:Form:div_layout.html.twig"));

        // line 1
        $this->displayBlock('mablae_datetime_widget', $context, $blocks);
        // line 25
        echo "

";
        
        $__internal_fb56a34cafbc0dc0277a77f7f960d1d9278482ebbf3923667ba9d6b299cb882d->leave($__internal_fb56a34cafbc0dc0277a77f7f960d1d9278482ebbf3923667ba9d6b299cb882d_prof);

    }

    // line 1
    public function block_mablae_datetime_widget($context, array $blocks = array())
    {
        $__internal_3c7a30c0ccb3fe18dbd2b7ed5af7ae04a54e92de4a79dccfd837315d306462eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7a30c0ccb3fe18dbd2b7ed5af7ae04a54e92de4a79dccfd837315d306462eb->enter($__internal_3c7a30c0ccb3fe18dbd2b7ed5af7ae04a54e92de4a79dccfd837315d306462eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mablae_datetime_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 4
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 6
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 7
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 8
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 9
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 10
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 11
            echo "
\t
            ";
            // line 13
            $context["attr"] = twig_array_merge(array("size" => 10), ($context["attr"] ?? $this->getContext($context, "attr")));
            // line 14
            echo "            ";
            $context["id"] = ("datepicker_" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 15
            echo "            ";
            $context["value"] = "";
            // line 16
            echo "            ";
            $context["full_name"] = ("datepicker_" . ($context["full_name"] ?? $this->getContext($context, "full_name")));
            // line 17
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
\t\t\t<span class=\"input-group-addon\">
\t\t\t\t<span class=\"glyphicon glyphicon-calendar\"></span>
\t\t\t</span>
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3c7a30c0ccb3fe18dbd2b7ed5af7ae04a54e92de4a79dccfd837315d306462eb->leave($__internal_3c7a30c0ccb3fe18dbd2b7ed5af7ae04a54e92de4a79dccfd837315d306462eb_prof);

    }

    public function getTemplateName()
    {
        return "MablaeDatetimepickerBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  73 => 16,  70 => 15,  67 => 14,  65 => 13,  61 => 11,  59 => 10,  58 => 9,  57 => 8,  56 => 7,  51 => 6,  45 => 4,  42 => 3,  40 => 2,  34 => 1,  25 => 25,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block mablae_datetime_widget %}
{% spaceless %}
    {% if widget == \"single_text\" %}
        {{ block(\"form_widget_simple\") }}
    {% else %}
        <div {{ block(\"widget_container_attributes\") }}>
            {{ date_pattern|replace({
                \"{{ year }}\":  form_widget(form.year),
                \"{{ month }}\": form_widget(form.month),
                \"{{ day }}\":   form_widget(form.day),
            })|raw }}
\t
            {% set attr = {\"size\": 10}|merge(attr) %}
            {% set id = \"datepicker_\" ~ id %}
            {% set value = '' %}
            {% set full_name = \"datepicker_\" ~ full_name %}
            {{ block(\"hidden_widget\") }}
\t\t\t<span class=\"input-group-addon\">
\t\t\t\t<span class=\"glyphicon glyphicon-calendar\"></span>
\t\t\t</span>
        </div>
    {% endif %}
{% endspaceless %}
{% endblock mablae_datetime_widget %}


", "MablaeDatetimepickerBundle:Form:div_layout.html.twig", "C:\\wamp\\www\\ws\\vendor\\mablae\\datetimepicker-bundle\\src/Resources/views/Form/div_layout.html.twig");
    }
}
