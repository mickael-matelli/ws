<?php

/* staffs/index.html.twig */
class __TwigTemplate_65fe538ae696e7b29318a151c1650ec1afaf508a3e46630cf324a52c1ffa0957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "staffs/index.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80f0e71a30aca689ac801e0081cb4c80c8c6d6e2a69602d521936df892344000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f0e71a30aca689ac801e0081cb4c80c8c6d6e2a69602d521936df892344000->enter($__internal_80f0e71a30aca689ac801e0081cb4c80c8c6d6e2a69602d521936df892344000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "staffs/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80f0e71a30aca689ac801e0081cb4c80c8c6d6e2a69602d521936df892344000->leave($__internal_80f0e71a30aca689ac801e0081cb4c80c8c6d6e2a69602d521936df892344000_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d34b5c47147aaf1703c410f5d420e27dff18306554ab92cfc7f48304edc1f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d34b5c47147aaf1703c410f5d420e27dff18306554ab92cfc7f48304edc1f28->enter($__internal_8d34b5c47147aaf1703c410f5d420e27dff18306554ab92cfc7f48304edc1f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "    ";
        $this->loadTemplate("::menu.html.twig", "staffs/index.html.twig", 3)->display(array_merge($context, array("selected" => "list_staffs")));
        
        $__internal_8d34b5c47147aaf1703c410f5d420e27dff18306554ab92cfc7f48304edc1f28->leave($__internal_8d34b5c47147aaf1703c410f5d420e27dff18306554ab92cfc7f48304edc1f28_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54d45c64c6b624c62c014a075157cf3df65fb95184aff4157a88e01beae5b701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d45c64c6b624c62c014a075157cf3df65fb95184aff4157a88e01beae5b701->enter($__internal_54d45c64c6b624c62c014a075157cf3df65fb95184aff4157a88e01beae5b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class='container'>
        <h1>Liste des personnels</h1>
        <hr/>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date de naissance</th>
                    <th>Date d'embauche</th>
                    <th>N° Matricule</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staffs"] ?? $this->getContext($context, "staffs")));
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 23
            echo "                <tr>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["staff"], "firstName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["staff"], "lastName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            if ($this->getAttribute($context["staff"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["staff"], "birthDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 27
            if ($this->getAttribute($context["staff"], "hiringDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["staff"], "hiringDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["staff"], "matricule", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["staff"], "netSalary", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staffs_show", array("id" => $this->getAttribute($context["staff"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
    </div>    
";
        
        $__internal_54d45c64c6b624c62c014a075157cf3df65fb95184aff4157a88e01beae5b701->leave($__internal_54d45c64c6b624c62c014a075157cf3df65fb95184aff4157a88e01beae5b701_prof);

    }

    public function getTemplateName()
    {
        return "staffs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  111 => 33,  104 => 29,  100 => 28,  94 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  73 => 22,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
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
{% block body %}
    <div class='container'>
        <h1>Liste des personnels</h1>
        <hr/>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date de naissance</th>
                    <th>Date d'embauche</th>
                    <th>N° Matricule</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for staff in staffs %}
                <tr>
                    <td>{{ staff.firstName }}</td>
                    <td>{{ staff.lastName }}</td>
                    <td>{% if staff.birthDate %}{{ staff.birthDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if staff.hiringDate %}{{ staff.hiringDate|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{{ staff.matricule }}</td>
                    <td>{{ staff.netSalary }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('staffs_show', { 'id': staff.id }) }}\">show</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>    
{% endblock %}
", "staffs/index.html.twig", "C:\\wamp\\www\\ws\\app\\Resources\\views\\staffs\\index.html.twig");
    }
}
