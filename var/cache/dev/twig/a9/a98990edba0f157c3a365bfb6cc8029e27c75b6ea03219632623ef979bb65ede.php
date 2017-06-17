<?php

/* membre\membres.html.twig */
class __TwigTemplate_d2c0acbf6f3c2d73c65d1b3a3c46f8d69a61455813db438f6441785824a80b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "membre\\membres.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f7e3ff468522e7584c686effad586bb4daa24478fd0346dc8829b115e8c20cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7e3ff468522e7584c686effad586bb4daa24478fd0346dc8829b115e8c20cc->enter($__internal_0f7e3ff468522e7584c686effad586bb4daa24478fd0346dc8829b115e8c20cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre\\membres.html.twig"));

        $__internal_c79ffaa5417899888e32af25c534ce2ad5457f94180f4332f78077aeaec9b934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79ffaa5417899888e32af25c534ce2ad5457f94180f4332f78077aeaec9b934->enter($__internal_c79ffaa5417899888e32af25c534ce2ad5457f94180f4332f78077aeaec9b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre\\membres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7e3ff468522e7584c686effad586bb4daa24478fd0346dc8829b115e8c20cc->leave($__internal_0f7e3ff468522e7584c686effad586bb4daa24478fd0346dc8829b115e8c20cc_prof);

        
        $__internal_c79ffaa5417899888e32af25c534ce2ad5457f94180f4332f78077aeaec9b934->leave($__internal_c79ffaa5417899888e32af25c534ce2ad5457f94180f4332f78077aeaec9b934_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_398687a9e93d0a28df476bde71718ba2d4a55a5f2f7a24c41431ea60c207eee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398687a9e93d0a28df476bde71718ba2d4a55a5f2f7a24c41431ea60c207eee7->enter($__internal_398687a9e93d0a28df476bde71718ba2d4a55a5f2f7a24c41431ea60c207eee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_463b7c581c9f71258a03e041bc11e886f3399e1dca88fad7968be20a707554eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463b7c581c9f71258a03e041bc11e886f3399e1dca88fad7968be20a707554eb->enter($__internal_463b7c581c9f71258a03e041bc11e886f3399e1dca88fad7968be20a707554eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  
    <h3><center> Tous les utilisateurs</center></h3>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["membres"]) ? $context["membres"] : $this->getContext($context, "membres")));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 10
            echo "                 <div class=\"card-content\">
                     <table>
                         <tr>
                             <td> <a href=\"#\"><img width=\"40\" src=\"images/profil.png\"></a></td>
                             <td> <a href=\"\" class=\"marg-left padd-left black-text left-align\"><b>";
            // line 14
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["membre"], "prenom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["membre"], "nom", array())), "html", null, true);
            echo "</b></a></td>
                             <td width=\"5\"> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messagerie_send", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn waves-effect waves-light right\">Message</a></td>
                             <td width=\"5\"> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_invite", array("id" => $this->getAttribute($context["membre"], "id", array()))), "html", null, true);
            echo "\" class=\"btn waves-effect waves-light right\">Inviter</a></td>
                         </tr>
                     </table>  
                </div>
                <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_463b7c581c9f71258a03e041bc11e886f3399e1dca88fad7968be20a707554eb->leave($__internal_463b7c581c9f71258a03e041bc11e886f3399e1dca88fad7968be20a707554eb_prof);

        
        $__internal_398687a9e93d0a28df476bde71718ba2d4a55a5f2f7a24c41431ea60c207eee7->leave($__internal_398687a9e93d0a28df476bde71718ba2d4a55a5f2f7a24c41431ea60c207eee7_prof);

    }

    public function getTemplateName()
    {
        return "membre\\membres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  76 => 16,  72 => 15,  66 => 14,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
  
    <h3><center> Tous les utilisateurs</center></h3>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"card\">
                {% for membre in membres %}
                 <div class=\"card-content\">
                     <table>
                         <tr>
                             <td> <a href=\"#\"><img width=\"40\" src=\"images/profil.png\"></a></td>
                             <td> <a href=\"\" class=\"marg-left padd-left black-text left-align\"><b>{{ membre.prenom|upper }} {{membre.nom|upper}}</b></a></td>
                             <td width=\"5\"> <a href=\"{{ path(\"messagerie_send\", {'id': membre.id})}}\" class=\"btn waves-effect waves-light right\">Message</a></td>
                             <td width=\"5\"> <a href=\"{{ path(\"membre_invite\", {'id': membre.id})}}\" class=\"btn waves-effect waves-light right\">Inviter</a></td>
                         </tr>
                     </table>  
                </div>
                <hr>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}

", "membre\\membres.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\membre\\membres.html.twig");
    }
}
