<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bad901a8a294bce77fca77ffd428f957b758853d61a8f4bc9837f5dae3fa2664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_714e373536d1aebc890696562ce0ed755a85cd44b7ffe1909aeace8b0ff42a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714e373536d1aebc890696562ce0ed755a85cd44b7ffe1909aeace8b0ff42a1b->enter($__internal_714e373536d1aebc890696562ce0ed755a85cd44b7ffe1909aeace8b0ff42a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_714e373536d1aebc890696562ce0ed755a85cd44b7ffe1909aeace8b0ff42a1b->leave($__internal_714e373536d1aebc890696562ce0ed755a85cd44b7ffe1909aeace8b0ff42a1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d0cdba47a0ecf7b63947745a552a3288cf35e60d6ff527f07f449f138507b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0cdba47a0ecf7b63947745a552a3288cf35e60d6ff527f07f449f138507b14->enter($__internal_9d0cdba47a0ecf7b63947745a552a3288cf35e60d6ff527f07f449f138507b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d0cdba47a0ecf7b63947745a552a3288cf35e60d6ff527f07f449f138507b14->leave($__internal_9d0cdba47a0ecf7b63947745a552a3288cf35e60d6ff527f07f449f138507b14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8094dd4d91d8368b8a6782076946c7ce08e13fadd9278ff630a6b19bcabf7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8094dd4d91d8368b8a6782076946c7ce08e13fadd9278ff630a6b19bcabf7d1->enter($__internal_c8094dd4d91d8368b8a6782076946c7ce08e13fadd9278ff630a6b19bcabf7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8094dd4d91d8368b8a6782076946c7ce08e13fadd9278ff630a6b19bcabf7d1->leave($__internal_c8094dd4d91d8368b8a6782076946c7ce08e13fadd9278ff630a6b19bcabf7d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4cd6d73475a20ffe3cd815ee37bf2635f208f17dbac52d35db7554ffa7fff8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cd6d73475a20ffe3cd815ee37bf2635f208f17dbac52d35db7554ffa7fff8f->enter($__internal_e4cd6d73475a20ffe3cd815ee37bf2635f208f17dbac52d35db7554ffa7fff8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4cd6d73475a20ffe3cd815ee37bf2635f208f17dbac52d35db7554ffa7fff8f->leave($__internal_e4cd6d73475a20ffe3cd815ee37bf2635f208f17dbac52d35db7554ffa7fff8f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\ws\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
