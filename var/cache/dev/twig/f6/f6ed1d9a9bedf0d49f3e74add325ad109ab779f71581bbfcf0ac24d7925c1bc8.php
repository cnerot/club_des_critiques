<?php

/* mail\lireMail.html.twig */
class __TwigTemplate_38fed74508f227ed7630d3714002198bb62b3f65021b1303a080e19cdae49dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mail\\lireMail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b56fbbdc5321e7fa990f78d6cba80970ebe23f3f6b331bd89a9dff0100228f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b56fbbdc5321e7fa990f78d6cba80970ebe23f3f6b331bd89a9dff0100228f5->enter($__internal_2b56fbbdc5321e7fa990f78d6cba80970ebe23f3f6b331bd89a9dff0100228f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail\\lireMail.html.twig"));

        $__internal_6697b23cf268d5bbaae12679480d54aadc170a43b85862685ef8534c15df43a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6697b23cf268d5bbaae12679480d54aadc170a43b85862685ef8534c15df43a2->enter($__internal_6697b23cf268d5bbaae12679480d54aadc170a43b85862685ef8534c15df43a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail\\lireMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b56fbbdc5321e7fa990f78d6cba80970ebe23f3f6b331bd89a9dff0100228f5->leave($__internal_2b56fbbdc5321e7fa990f78d6cba80970ebe23f3f6b331bd89a9dff0100228f5_prof);

        
        $__internal_6697b23cf268d5bbaae12679480d54aadc170a43b85862685ef8534c15df43a2->leave($__internal_6697b23cf268d5bbaae12679480d54aadc170a43b85862685ef8534c15df43a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e9393863db6ec7988c0541ac240b2688b384b4819894579cccbc433d1ca7ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9393863db6ec7988c0541ac240b2688b384b4819894579cccbc433d1ca7ea6->enter($__internal_4e9393863db6ec7988c0541ac240b2688b384b4819894579cccbc433d1ca7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe3ec2a9864aa539e205e2c58654869843a6920b215692e25ac2f7031430eb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3ec2a9864aa539e205e2c58654869843a6920b215692e25ac2f7031430eb6f->enter($__internal_fe3ec2a9864aa539e205e2c58654869843a6920b215692e25ac2f7031430eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Message de 
";
        
        $__internal_fe3ec2a9864aa539e205e2c58654869843a6920b215692e25ac2f7031430eb6f->leave($__internal_fe3ec2a9864aa539e205e2c58654869843a6920b215692e25ac2f7031430eb6f_prof);

        
        $__internal_4e9393863db6ec7988c0541ac240b2688b384b4819894579cccbc433d1ca7ea6->leave($__internal_4e9393863db6ec7988c0541ac240b2688b384b4819894579cccbc433d1ca7ea6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_26244fcdfa41cfa310e7f92258201b0523f09f886f5ad19d97c793516873e277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26244fcdfa41cfa310e7f92258201b0523f09f886f5ad19d97c793516873e277->enter($__internal_26244fcdfa41cfa310e7f92258201b0523f09f886f5ad19d97c793516873e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d08e6a3ba30aad3685742ed1a1b3619a151017796eb067d0a82b631023c69f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08e6a3ba30aad3685742ed1a1b3619a151017796eb067d0a82b631023c69f84->enter($__internal_d08e6a3ba30aad3685742ed1a1b3619a151017796eb067d0a82b631023c69f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"col s7\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                    ";
            if (($this->getAttribute($context["m"], "id", array()) == $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id_sender", array()))) {
                // line 14
                echo "                        <p>de : <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
                echo "</b> <span style=\"font-size:11px\">(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "mail", array()), "html", null, true);
                echo ")</span> </p>
                    ";
            }
            // line 16
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                <p>à  : moi</p>
                </div>
                <div class=\"col s4 right-align\">
                    <p> </p>
                    <p style=\"font-size:13px\" class=\"grey-text\">";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "date", array()), "m/d/Y à H:m"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col s1 right-align\">
                    <p></p>
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messagerie_send", array("id" => $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "id_sender", array()))), "html", null, true);
        echo "\" class=\"skin-text\" ><i  class=\"material-icons\">reply</i></a>
                </div>
            </div>
            <div class=\"col s12\"><hr/></div>
             <div class=\"col s12\">
                 <p>";
        // line 30
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "objet", array());
        echo "</p>
                <p>";
        // line 31
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "message", array());
        echo "</p>
             </div>
        </div>
    </div>
</div>
";
        
        $__internal_d08e6a3ba30aad3685742ed1a1b3619a151017796eb067d0a82b631023c69f84->leave($__internal_d08e6a3ba30aad3685742ed1a1b3619a151017796eb067d0a82b631023c69f84_prof);

        
        $__internal_26244fcdfa41cfa310e7f92258201b0523f09f886f5ad19d97c793516873e277->leave($__internal_26244fcdfa41cfa310e7f92258201b0523f09f886f5ad19d97c793516873e277_prof);

    }

    public function getTemplateName()
    {
        return "mail\\lireMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  120 => 30,  112 => 25,  105 => 21,  99 => 17,  93 => 16,  83 => 14,  80 => 13,  76 => 12,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
   Message de 
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s12\">
                <div class=\"col s7\">
                {% for m in membre%}
                    {% if m.id == message.id_sender %}
                        <p>de : <b>{{ m.prenom }} {{ m.nom }}</b> <span style=\"font-size:11px\">({{ m.mail }})</span> </p>
                    {% endif %}
                {% endfor %}
                <p>à  : moi</p>
                </div>
                <div class=\"col s4 right-align\">
                    <p> </p>
                    <p style=\"font-size:13px\" class=\"grey-text\">{{message.date|date(\"m/d/Y à H:m\")}}</p>
                </div>
                <div class=\"col s1 right-align\">
                    <p></p>
                    <a href=\"{{ path(\"messagerie_send\", {'id': message.id_sender})}}\" class=\"skin-text\" ><i  class=\"material-icons\">reply</i></a>
                </div>
            </div>
            <div class=\"col s12\"><hr/></div>
             <div class=\"col s12\">
                 <p>{{message.objet|raw}}</p>
                <p>{{message.message|raw}}</p>
             </div>
        </div>
    </div>
</div>
{% endblock %}
", "mail\\lireMail.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\mail\\lireMail.html.twig");
    }
}
