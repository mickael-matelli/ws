<?php

/* staffs/new.html.twig */
class __TwigTemplate_3b4cc087452c6b24d424594bac102bf0dbbc7924c1227663e3d656577910d711 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "staffs/new.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5aa461bbb143161bb8c503035774492a62468453b6977b078201447cd32fbb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aa461bbb143161bb8c503035774492a62468453b6977b078201447cd32fbb0->enter($__internal_c5aa461bbb143161bb8c503035774492a62468453b6977b078201447cd32fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "staffs/new.html.twig"));

        // line 6
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5aa461bbb143161bb8c503035774492a62468453b6977b078201447cd32fbb0->leave($__internal_c5aa461bbb143161bb8c503035774492a62468453b6977b078201447cd32fbb0_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f0b4bfb282e9a0d7e3923117fb2addd5e29bc4079c6acae722de4207aee1d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0b4bfb282e9a0d7e3923117fb2addd5e29bc4079c6acae722de4207aee1d35->enter($__internal_6f0b4bfb282e9a0d7e3923117fb2addd5e29bc4079c6acae722de4207aee1d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        $this->loadTemplate("::menu.html.twig", "staffs/new.html.twig", 3)->display(array_merge($context, array("selected" => "list_staffs")));
        
        $__internal_6f0b4bfb282e9a0d7e3923117fb2addd5e29bc4079c6acae722de4207aee1d35->leave($__internal_6f0b4bfb282e9a0d7e3923117fb2addd5e29bc4079c6acae722de4207aee1d35_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5906a0a7a905bf98324805a9b5007b7a6af69cb95c2283ba1e3339fa1d063990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5906a0a7a905bf98324805a9b5007b7a6af69cb95c2283ba1e3339fa1d063990->enter($__internal_5906a0a7a905bf98324805a9b5007b7a6af69cb95c2283ba1e3339fa1d063990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class='container new-staff'>
        <h1>Nouveau</h1>
        <hr/>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staffs_new"), "method" => "POST", "attr" => array("role" => "form", "enctype" => "multipart/form-data")));
        echo "
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div> 
";
        
        $__internal_5906a0a7a905bf98324805a9b5007b7a6af69cb95c2283ba1e3339fa1d063990->leave($__internal_5906a0a7a905bf98324805a9b5007b7a6af69cb95c2283ba1e3339fa1d063990_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48923cc7325c81eee6a72f1df0f02e94b2132d143710e5dce2c160c6e9067924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48923cc7325c81eee6a72f1df0f02e94b2132d143710e5dce2c160c6e9067924->enter($__internal_48923cc7325c81eee6a72f1df0f02e94b2132d143710e5dce2c160c6e9067924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo $this->env->getExtension('Mablae\DatetimepickerBundle\Twig\Extension\FormExtension')->renderJavascript($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthDate", array()));
        echo "
";
        // line 18
        echo $this->env->getExtension('Mablae\DatetimepickerBundle\Twig\Extension\FormExtension')->renderJavascript($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hiringDate", array()));
        echo "
";
        
        $__internal_48923cc7325c81eee6a72f1df0f02e94b2132d143710e5dce2c160c6e9067924->leave($__internal_48923cc7325c81eee6a72f1df0f02e94b2132d143710e5dce2c160c6e9067924_prof);

    }

    public function getTemplateName()
    {
        return "staffs/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  84 => 17,  78 => 16,  68 => 13,  64 => 12,  59 => 9,  53 => 8,  45 => 3,  39 => 2,  32 => 1,  30 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block menu %}
    {%include '::menu.html.twig' with {'selected':'list_staffs'} %}
{% endblock %}
{#{% form_theme form 'bootstrap_3_layout.html.twig' %}#}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block body %}
    <div class='container new-staff'>
        <h1>Nouveau</h1>
        <hr/>
        {{form_start(form,{'action':path('staffs_new'),'method':'POST','attr':{'role':'form','enctype':'multipart/form-data'}})}}
        {{form_end(form)}}
    </div> 
{% endblock %}
{% block javascripts %}
{{ form_javascript(form.birthDate) }}
{{ form_javascript(form.hiringDate) }}
{% endblock %}
", "staffs/new.html.twig", "C:\\wamp\\www\\ws\\app\\Resources\\views\\staffs\\new.html.twig");
    }
}
