<?php

/* mail\boiteReception.html.twig */
class __TwigTemplate_bc1373a5fb0e54bd28fb65d2c0b3c8a2c2997ad2c2bcc5a1eef9f9ef9b27c47e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mail\\boiteReception.html.twig", 1);
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
        $__internal_c0f0054463d800650c173d6ddc667fda511ece00fe34bf06ae0f026e9044264d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f0054463d800650c173d6ddc667fda511ece00fe34bf06ae0f026e9044264d->enter($__internal_c0f0054463d800650c173d6ddc667fda511ece00fe34bf06ae0f026e9044264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail\\boiteReception.html.twig"));

        $__internal_e4b1dcf471ce36d6750ffae04c3c7a7b8f1f96641e38d68dfa5d1f6ae9f2d270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b1dcf471ce36d6750ffae04c3c7a7b8f1f96641e38d68dfa5d1f6ae9f2d270->enter($__internal_e4b1dcf471ce36d6750ffae04c3c7a7b8f1f96641e38d68dfa5d1f6ae9f2d270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail\\boiteReception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0f0054463d800650c173d6ddc667fda511ece00fe34bf06ae0f026e9044264d->leave($__internal_c0f0054463d800650c173d6ddc667fda511ece00fe34bf06ae0f026e9044264d_prof);

        
        $__internal_e4b1dcf471ce36d6750ffae04c3c7a7b8f1f96641e38d68dfa5d1f6ae9f2d270->leave($__internal_e4b1dcf471ce36d6750ffae04c3c7a7b8f1f96641e38d68dfa5d1f6ae9f2d270_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b751ee841f4a8352706fe3a9234e229f0a1fce2100afb83a9d40403bd7f77507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b751ee841f4a8352706fe3a9234e229f0a1fce2100afb83a9d40403bd7f77507->enter($__internal_b751ee841f4a8352706fe3a9234e229f0a1fce2100afb83a9d40403bd7f77507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c1fe1668eea24adf74040ac5849936e0c166b87f3ff66ae53043e6f8ac96e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1fe1668eea24adf74040ac5849936e0c166b87f3ff66ae53043e6f8ac96e53->enter($__internal_1c1fe1668eea24adf74040ac5849936e0c166b87f3ff66ae53043e6f8ac96e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Envoyer un message
";
        
        $__internal_1c1fe1668eea24adf74040ac5849936e0c166b87f3ff66ae53043e6f8ac96e53->leave($__internal_1c1fe1668eea24adf74040ac5849936e0c166b87f3ff66ae53043e6f8ac96e53_prof);

        
        $__internal_b751ee841f4a8352706fe3a9234e229f0a1fce2100afb83a9d40403bd7f77507->leave($__internal_b751ee841f4a8352706fe3a9234e229f0a1fce2100afb83a9d40403bd7f77507_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae5090ece5e280738c1bc940b1f80bc88079ab9f6361299ddaee29bb2962aa55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5090ece5e280738c1bc940b1f80bc88079ab9f6361299ddaee29bb2962aa55->enter($__internal_ae5090ece5e280738c1bc940b1f80bc88079ab9f6361299ddaee29bb2962aa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05b64469c64392b2618a5227efcfeaff5f2f9faf25ac9f4d69f4b2183576f5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b64469c64392b2618a5227efcfeaff5f2f9faf25ac9f4d69f4b2183576f5e7->enter($__internal_05b64469c64392b2618a5227efcfeaff5f2f9faf25ac9f4d69f4b2183576f5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "      <div class=\"row\">
    <div class=\"col s12\">
      <ul class=\"tabs center \">
        <li class=\"tab col s3\"><a class=\"active brown-text\" href=\"#recu1\">Boite reception</a></li>
        <li class=\"tab col s3\"><a  href=\"#envoye2\">Message envoyé</a></li>
      </ul>
    </div>
    <div id=\"recu1\" class=\"col s12\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"card\" >
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagerie"]) ? $context["messagerie"] : $this->getContext($context, "messagerie")));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 20
            echo "                 <div class=\"card-content\" style=\"padding: 0; margin: 0\">
                     <table class=\"responsive-table\" style=\"padding: 0; margin: 0\">
                         <tr>
                             ";
            // line 23
            if (($this->getAttribute($context["mail"], "vu", array()) == false)) {
                // line 24
                echo "                                 <td><a href=\"\" class=\" black-text right-align\"><i class=\"material-icons\">email</i></a></td>
                             ";
            } elseif (($this->getAttribute(            // line 25
$context["mail"], "vu", array()) == true)) {
                // line 26
                echo "                                 <td><a href=\"\" class=\" black-text right-align\"><i class=\"material-icons\">drafts</i></a></td>
                             ";
            }
            // line 28
            echo "                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 29
                echo "                                ";
                if (($this->getAttribute($context["m"], "id", array()) == $this->getAttribute($context["mail"], "id_sender", array()))) {
                    // line 30
                    echo "                                    <td><a href=\"\" class=\"marg-left padd-left black-text left-align\"><b> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
                    echo " </b></a></td>
                                ";
                }
                // line 32
                echo "                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                             <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messagerie_lire", array("id" => $this->getAttribute($context["mail"], "id", array()))), "html", null, true);
            echo "\" class=\"marg-left padd-left black-text left-align\"><b>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mail"], "objet", array())), "html", null, true);
            echo "</b></a></td>
                             <td><a href=\"\" class=\"marg-left padd-left black-text\"><b>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mail"], "date", array()), "m/d/Y à H:m"), "html", null, true);
            echo "</b></a></td>
                         </tr>
                     </table>  
                </div>
                <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>
      </div>
    </div>
    <div id=\"envoye2\" class=\"col s12\">
        <div class=\"container\">
           <div class=\"row\">
               <div class=\"card\" >
                   ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagerieSent"]) ? $context["messagerieSent"] : $this->getContext($context, "messagerieSent")));
        foreach ($context['_seq'] as $context["_key"] => $context["mailSent"]) {
            // line 49
            echo "                    <div class=\"card-content\" style=\"padding: 0; margin: 0\">
                        <table style=\"padding-bottom: 0; margin: 0\">
                            <tr>
                                <td><a href=\"\" class=\" black-text right-align\"><i class=\"material-icons\">forward</i></a></td>
                                ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 54
                echo "                                    ";
                if (($this->getAttribute($context["m"], "id", array()) == $this->getAttribute($context["mailSent"], "id_recever", array()))) {
                    // line 55
                    echo "                                        <td width=\"10\"><a href=\"\" class=\"marg-left padd-left black-text left-align\"><b> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenom", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
                    echo " </b></a></td>
                                    ";
                }
                // line 57
                echo "                                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messagerie_lire", array("id" => $this->getAttribute($context["mailSent"], "id", array()))), "html", null, true);
            echo "\" class=\"marg-left padd-left black-text\"><b>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["mailSent"], "objet", array())), "html", null, true);
            echo "</b></a></td>
                                <td><a href=\"\" class=\"marg-left padd-left black-text right-align\"><b>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mailSent"], "date", array()), "m/d/Y à H:m"), "html", null, true);
            echo "</b></a></td>
                            </tr>
                        </table>  
                   </div>
                   <hr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailSent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "               </div>
           </div>
         </div>
    </div>

  </div>
      
";
        
        $__internal_05b64469c64392b2618a5227efcfeaff5f2f9faf25ac9f4d69f4b2183576f5e7->leave($__internal_05b64469c64392b2618a5227efcfeaff5f2f9faf25ac9f4d69f4b2183576f5e7_prof);

        
        $__internal_ae5090ece5e280738c1bc940b1f80bc88079ab9f6361299ddaee29bb2962aa55->leave($__internal_ae5090ece5e280738c1bc940b1f80bc88079ab9f6361299ddaee29bb2962aa55_prof);

    }

    public function getTemplateName()
    {
        return "mail\\boiteReception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 65,  192 => 59,  185 => 58,  179 => 57,  171 => 55,  168 => 54,  164 => 53,  158 => 49,  154 => 48,  144 => 40,  132 => 34,  125 => 33,  119 => 32,  111 => 30,  108 => 29,  103 => 28,  99 => 26,  97 => 25,  94 => 24,  92 => 23,  87 => 20,  83 => 19,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
   Envoyer un message
{% endblock %}

{% block body %}
      <div class=\"row\">
    <div class=\"col s12\">
      <ul class=\"tabs center \">
        <li class=\"tab col s3\"><a class=\"active brown-text\" href=\"#recu1\">Boite reception</a></li>
        <li class=\"tab col s3\"><a  href=\"#envoye2\">Message envoyé</a></li>
      </ul>
    </div>
    <div id=\"recu1\" class=\"col s12\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"card\" >
                {% for mail in messagerie %}
                 <div class=\"card-content\" style=\"padding: 0; margin: 0\">
                     <table class=\"responsive-table\" style=\"padding: 0; margin: 0\">
                         <tr>
                             {% if mail.vu == false %}
                                 <td><a href=\"\" class=\" black-text right-align\"><i class=\"material-icons\">email</i></a></td>
                             {% elseif mail.vu == true %}
                                 <td><a href=\"\" class=\" black-text right-align\"><i class=\"material-icons\">drafts</i></a></td>
                             {% endif %}
                             {% for m in membre %}
                                {% if m.id == mail.id_sender %}
                                    <td><a href=\"\" class=\"marg-left padd-left black-text left-align\"><b> {{m.prenom}} {{ m.nom}} </b></a></td>
                                {% endif %}
                             {% endfor %}
                             <td><a href=\"{{ path(\"messagerie_lire\", {'id': mail.id})}}\" class=\"marg-left padd-left black-text left-align\"><b>{{ mail.objet|upper }}</b></a></td>
                             <td><a href=\"\" class=\"marg-left padd-left black-text\"><b>{{ mail.date|date(\"m/d/Y à H:m\") }}</b></a></td>
                         </tr>
                     </table>  
                </div>
                <hr>
                {% endfor %}
            </div>
        </div>
      </div>
    </div>
    <div id=\"envoye2\" class=\"col s12\">
        <div class=\"container\">
           <div class=\"row\">
               <div class=\"card\" >
                   {% for mailSent in messagerieSent %}
                    <div class=\"card-content\" style=\"padding: 0; margin: 0\">
                        <table style=\"padding-bottom: 0; margin: 0\">
                            <tr>
                                <td><a href=\"\" class=\" black-text right-align\"><i class=\"material-icons\">forward</i></a></td>
                                {% for m in membre %}
                                    {% if m.id == mailSent.id_recever %}
                                        <td width=\"10\"><a href=\"\" class=\"marg-left padd-left black-text left-align\"><b> {{m.prenom}} {{ m.nom}} </b></a></td>
                                    {% endif %}
                                 {% endfor %}
                                <td><a href=\"{{ path(\"messagerie_lire\", {'id': mailSent.id})}}\" class=\"marg-left padd-left black-text\"><b>{{ mailSent.objet|upper }}</b></a></td>
                                <td><a href=\"\" class=\"marg-left padd-left black-text right-align\"><b>{{ mailSent.date|date(\"m/d/Y à H:m\") }}</b></a></td>
                            </tr>
                        </table>  
                   </div>
                   <hr>
                   {% endfor %}
               </div>
           </div>
         </div>
    </div>

  </div>
      
{% endblock %}
", "mail\\boiteReception.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\mail\\boiteReception.html.twig");
    }
}
