<?php

/* ::base.html.twig */
class __TwigTemplate_ae31573e4d8d870db5901d55d90eda27fa3406da2950d8fa363cef837f0c4615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0789d802c59bb97fa2eb19f45cecf43ce9abc91576de94dee5d33795b60f122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0789d802c59bb97fa2eb19f45cecf43ce9abc91576de94dee5d33795b60f122->enter($__internal_a0789d802c59bb97fa2eb19f45cecf43ce9abc91576de94dee5d33795b60f122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ffb9ea2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ffb9ea2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ffb9ea2_part_1.css");
            // line 10
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ffb9ea2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ffb9ea2_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ffb9ea2_part_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ffb9ea2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ffb9ea2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ffb9ea2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        echo "    
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e1c33f0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e1c33f0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e1c33f0_part_1.js");
            // line 22
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "e1c33f0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e1c33f0_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e1c33f0_part_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "e1c33f0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e1c33f0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/e1c33f0.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_a0789d802c59bb97fa2eb19f45cecf43ce9abc91576de94dee5d33795b60f122->leave($__internal_a0789d802c59bb97fa2eb19f45cecf43ce9abc91576de94dee5d33795b60f122_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e5da8069e34066ba2ddc8ccb54006956237da04781a017a7c77101f98f704c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e5da8069e34066ba2ddc8ccb54006956237da04781a017a7c77101f98f704c->enter($__internal_d1e5da8069e34066ba2ddc8ccb54006956237da04781a017a7c77101f98f704c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1e5da8069e34066ba2ddc8ccb54006956237da04781a017a7c77101f98f704c->leave($__internal_d1e5da8069e34066ba2ddc8ccb54006956237da04781a017a7c77101f98f704c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45b83e43d683c27ac4b2858e9b210e2c683cc717ec88cc22a1a156c95baa9cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b83e43d683c27ac4b2858e9b210e2c683cc717ec88cc22a1a156c95baa9cb4->enter($__internal_45b83e43d683c27ac4b2858e9b210e2c683cc717ec88cc22a1a156c95baa9cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_45b83e43d683c27ac4b2858e9b210e2c683cc717ec88cc22a1a156c95baa9cb4->leave($__internal_45b83e43d683c27ac4b2858e9b210e2c683cc717ec88cc22a1a156c95baa9cb4_prof);

    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59287aacbbb4d5da5a4227f8bf60a4160d4c15200bc40002323e6c53de204e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59287aacbbb4d5da5a4227f8bf60a4160d4c15200bc40002323e6c53de204e55->enter($__internal_59287aacbbb4d5da5a4227f8bf60a4160d4c15200bc40002323e6c53de204e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_59287aacbbb4d5da5a4227f8bf60a4160d4c15200bc40002323e6c53de204e55->leave($__internal_59287aacbbb4d5da5a4227f8bf60a4160d4c15200bc40002323e6c53de204e55_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ee2f68a16c08303a94268bdb1e81dad61a596bed055b697918943948c5286bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee2f68a16c08303a94268bdb1e81dad61a596bed055b697918943948c5286bf->enter($__internal_2ee2f68a16c08303a94268bdb1e81dad61a596bed055b697918943948c5286bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ee2f68a16c08303a94268bdb1e81dad61a596bed055b697918943948c5286bf->leave($__internal_2ee2f68a16c08303a94268bdb1e81dad61a596bed055b697918943948c5286bf_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73af03618c747b66ca71da8ca839ba36db32040cebd96104e0f1db6f5748a36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73af03618c747b66ca71da8ca839ba36db32040cebd96104e0f1db6f5748a36b->enter($__internal_73af03618c747b66ca71da8ca839ba36db32040cebd96104e0f1db6f5748a36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_73af03618c747b66ca71da8ca839ba36db32040cebd96104e0f1db6f5748a36b->leave($__internal_73af03618c747b66ca71da8ca839ba36db32040cebd96104e0f1db6f5748a36b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 24,  148 => 17,  137 => 16,  126 => 12,  114 => 5,  105 => 25,  102 => 24,  82 => 22,  77 => 18,  75 => 17,  71 => 16,  64 => 13,  61 => 12,  41 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
\t\t{% stylesheets
\t\t\t'@bootstrap_css'
                        '@main_css'    
        %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block menu %}{% endblock %}    
        {% block body %}{% endblock %}
\t\t{% javascripts
        '@jquery_js'
        '@bootstrap_js'
        %}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\ws\\app/Resources\\views/base.html.twig");
    }
}
