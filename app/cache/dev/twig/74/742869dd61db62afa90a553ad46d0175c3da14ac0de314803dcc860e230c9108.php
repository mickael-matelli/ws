<?php

/* ::menu.html.twig */
class __TwigTemplate_00ced8ffb74a3e5ac0ed4cb28be1f01487b68f95e8b9d78d6fab7c45c7acb9a5 extends Twig_Template
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
        $__internal_0641e9fbf158d91e6349940a9758a7a554633ea60997a58d7425157260d8cc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0641e9fbf158d91e6349940a9758a7a554633ea60997a58d7425157260d8cc5a->enter($__internal_0641e9fbf158d91e6349940a9758a7a554633ea60997a58d7425157260d8cc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

        // line 1
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> Accueil</a></li>
              <li><a href='#'><span class=\"glyphicon glyphicon-user\"></span> Utilisateur</a></li>
              <li class=\"dropdown\" ";
            // line 9
            if ((($context["selected"] ?? $this->getContext($context, "selected")) == "list_staffs")) {
                echo " class='active'";
            }
            echo ">
                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-hand-down\"></span> Personnel <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staffs_index");
            echo "\">Listes</a></li>
                  <li><a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staffs_new");
            echo "\">Nouveau</a></li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
               <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span> Deconnecté</a></li>
            </ul>
          </div>
        </div>
    </nav>
";
        }
        
        $__internal_0641e9fbf158d91e6349940a9758a7a554633ea60997a58d7425157260d8cc5a->leave($__internal_0641e9fbf158d91e6349940a9758a7a554633ea60997a58d7425157260d8cc5a_prof);

    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  45 => 13,  41 => 12,  33 => 9,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-thumbs-up\"></span> Accueil</a></li>
              <li><a href='#'><span class=\"glyphicon glyphicon-user\"></span> Utilisateur</a></li>
              <li class=\"dropdown\" {%if selected=='list_staffs' %} class='active'{%endif%}>
                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-hand-down\"></span> Personnel <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"{{path('staffs_index')}}\">Listes</a></li>
                  <li><a href=\"{{path('staffs_new')}}\">Nouveau</a></li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
               <li><a href=\"{{ path('fos_user_security_logout') }}\"><span class=\"glyphicon glyphicon-off\"></span> Deconnecté</a></li>
            </ul>
          </div>
        </div>
    </nav>
{%endif%}
", "::menu.html.twig", "C:\\wamp\\www\\ws\\app/Resources\\views/menu.html.twig");
    }
}
