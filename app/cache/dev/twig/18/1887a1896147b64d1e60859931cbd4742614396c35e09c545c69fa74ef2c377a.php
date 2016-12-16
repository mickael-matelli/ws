<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_140db267aba2fec760f1b40aac84ee9aa12bc831fb9c42d8da97139a1260c4f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed63aac5da538a3fc04574fe169b14ada7797721bc58adad02450c41f4f2959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed63aac5da538a3fc04574fe169b14ada7797721bc58adad02450c41f4f2959->enter($__internal_bed63aac5da538a3fc04574fe169b14ada7797721bc58adad02450c41f4f2959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bed63aac5da538a3fc04574fe169b14ada7797721bc58adad02450c41f4f2959->leave($__internal_bed63aac5da538a3fc04574fe169b14ada7797721bc58adad02450c41f4f2959_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea53efb68364142dd2b18c617a1fdf30fe082d27160505641453592764ed009d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea53efb68364142dd2b18c617a1fdf30fe082d27160505641453592764ed009d->enter($__internal_ea53efb68364142dd2b18c617a1fdf30fe082d27160505641453592764ed009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
";
        
        $__internal_ea53efb68364142dd2b18c617a1fdf30fe082d27160505641453592764ed009d->leave($__internal_ea53efb68364142dd2b18c617a1fdf30fe082d27160505641453592764ed009d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24a021eef2e5f2adee2f0ad1b779081f70009e30a37911511ff7c656cf79a65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a021eef2e5f2adee2f0ad1b779081f70009e30a37911511ff7c656cf79a65c->enter($__internal_24a021eef2e5f2adee2f0ad1b779081f70009e30a37911511ff7c656cf79a65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class='row'>
        <div class='col-md-4 col-md-offset-8'>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["error"] ?? $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        // line 13
        echo "
<div class='container'>
    <div class=\"row login-form-position\">
        <div class=\"col-md-offset-5 col-md-5\">
            <div class=\"form-login\">
                <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role='form' class='form-horizontal'>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" class='form-control' />
                    <h4>Bienvenue</h4>
                    <br>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class='form-control input-sm chat-input' placeholder=\"Nom d'utilisateur\" />
                    <br/>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class='form-control input-sm chat-input' placeholder='Mot de passe' />
                    <br/>
                    <div class=\"wrapper\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
                    </div>
                </form>
            </div>    
        </div>    
    </div>    
</div>    
";
        
        $__internal_24a021eef2e5f2adee2f0ad1b779081f70009e30a37911511ff7c656cf79a65c->leave($__internal_24a021eef2e5f2adee2f0ad1b779081f70009e30a37911511ff7c656cf79a65c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  85 => 22,  79 => 19,  75 => 18,  68 => 13,  61 => 9,  57 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
{% block stylesheets %}
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
{% endblock %}
{% block fos_user_content %}
{% if error %}
    <div class='row'>
        <div class='col-md-4 col-md-offset-8'>
            {{ error|trans({}, 'FOSUserBundle') }}
        </div>
    </div>
{% endif %}

<div class='container'>
    <div class=\"row login-form-position\">
        <div class=\"col-md-offset-5 col-md-5\">
            <div class=\"form-login\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" role='form' class='form-horizontal'>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" class='form-control' />
                    <h4>Bienvenue</h4>
                    <br>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class='form-control input-sm chat-input' placeholder=\"Nom d'utilisateur\" />
                    <br/>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class='form-control input-sm chat-input' placeholder='Mot de passe' />
                    <br/>
                    <div class=\"wrapper\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-primary\" />
                    </div>
                </form>
            </div>    
        </div>    
    </div>    
</div>    
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp\\www\\ws\\src\\AppBundle/Resources/views/Security/login.html.twig");
    }
}
