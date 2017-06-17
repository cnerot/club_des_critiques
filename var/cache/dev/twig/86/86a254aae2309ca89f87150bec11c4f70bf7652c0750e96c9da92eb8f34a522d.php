<?php

/* membre\profil.html.twig */
class __TwigTemplate_94001591f1e6e8061d4271c0fadb5ff8561e7387b53927e0708be93b5f1ef50c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "membre\\profil.html.twig", 1);
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
        $__internal_c91ace63a72970fceec7292fcffd767d0e6cb3f03325c590b512a1bcf3c339e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c91ace63a72970fceec7292fcffd767d0e6cb3f03325c590b512a1bcf3c339e4->enter($__internal_c91ace63a72970fceec7292fcffd767d0e6cb3f03325c590b512a1bcf3c339e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre\\profil.html.twig"));

        $__internal_613459ea23c891afe1040ecb863f7f282a722b887344e56a5ea9452891d17be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613459ea23c891afe1040ecb863f7f282a722b887344e56a5ea9452891d17be7->enter($__internal_613459ea23c891afe1040ecb863f7f282a722b887344e56a5ea9452891d17be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre\\profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c91ace63a72970fceec7292fcffd767d0e6cb3f03325c590b512a1bcf3c339e4->leave($__internal_c91ace63a72970fceec7292fcffd767d0e6cb3f03325c590b512a1bcf3c339e4_prof);

        
        $__internal_613459ea23c891afe1040ecb863f7f282a722b887344e56a5ea9452891d17be7->leave($__internal_613459ea23c891afe1040ecb863f7f282a722b887344e56a5ea9452891d17be7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_499b2a3a3ccad5a07eea8a179055f8a270a96b381c9d22c7b83971667d94a0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499b2a3a3ccad5a07eea8a179055f8a270a96b381c9d22c7b83971667d94a0d1->enter($__internal_499b2a3a3ccad5a07eea8a179055f8a270a96b381c9d22c7b83971667d94a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8168e3a5938f36bfb5289baaad25927fd94587d094918193d9a10807ab04869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8168e3a5938f36bfb5289baaad25927fd94587d094918193d9a10807ab04869d->enter($__internal_8168e3a5938f36bfb5289baaad25927fd94587d094918193d9a10807ab04869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  
    <h3><center> Profil Utilisateur</center></h3>
   
      <div class=\"row\">
        <div class=\"col s3 m3\">
          <div class=\"card\">
            <div class=\"centerer\">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_picture");
        echo "\">
                    <a href=\"\">
                        <img width=\"150\" class=\"centerer\" src=\"images/profil.png\"><input type=\"file\" nom=\"picture\" placeholder=\"Modifier votre photo\">
                    </a>
                    <input type=\"submit\">
                <form>
            </div>
          </div>
        </div>
        <div class=\"col s5 m5\">
          <div class=\"card\">
            <div class=\"card-content\">
                <div><b>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "prenom", array()), "html", null, true);
        echo "</b></div>
                <div>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "mail", array()), "html", null, true);
        echo " </div>
                <div>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["membre"]) ? $context["membre"] : $this->getContext($context, "membre")), "description", array()), "html", null, true);
        echo "</div>
            </div>
          </div>
        </div>
        <div class=\"col s4 m4\">
          <div class=\"card\">
            <div class=\"card-content\">
                <a href=\"#\">Modifier mis information</a>
                <a href=\"#\">Modifier mon mot de passe</a>
                <a href=\"#\">Gérer mes contacts</a>
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-content\">
                <a href=\"#\" class=\"btn waves-effect waves-light centerer\">Contacter</a>
            </div>
          </div>
        </div>
      </div>

";
        
        $__internal_8168e3a5938f36bfb5289baaad25927fd94587d094918193d9a10807ab04869d->leave($__internal_8168e3a5938f36bfb5289baaad25927fd94587d094918193d9a10807ab04869d_prof);

        
        $__internal_499b2a3a3ccad5a07eea8a179055f8a270a96b381c9d22c7b83971667d94a0d1->leave($__internal_499b2a3a3ccad5a07eea8a179055f8a270a96b381c9d22c7b83971667d94a0d1_prof);

    }

    public function getTemplateName()
    {
        return "membre\\profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  79 => 24,  73 => 23,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
  
    <h3><center> Profil Utilisateur</center></h3>
   
      <div class=\"row\">
        <div class=\"col s3 m3\">
          <div class=\"card\">
            <div class=\"centerer\">
                <form action=\"{{ path(\"membre_picture\")}}\">
                    <a href=\"\">
                        <img width=\"150\" class=\"centerer\" src=\"images/profil.png\"><input type=\"file\" nom=\"picture\" placeholder=\"Modifier votre photo\">
                    </a>
                    <input type=\"submit\">
                <form>
            </div>
          </div>
        </div>
        <div class=\"col s5 m5\">
          <div class=\"card\">
            <div class=\"card-content\">
                <div><b>{{ membre.nom }} {{ membre.prenom }}</b></div>
                <div>{{ membre.mail }} </div>
                <div>{{ membre.description }}</div>
            </div>
          </div>
        </div>
        <div class=\"col s4 m4\">
          <div class=\"card\">
            <div class=\"card-content\">
                <a href=\"#\">Modifier mis information</a>
                <a href=\"#\">Modifier mon mot de passe</a>
                <a href=\"#\">Gérer mes contacts</a>
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-content\">
                <a href=\"#\" class=\"btn waves-effect waves-light centerer\">Contacter</a>
            </div>
          </div>
        </div>
      </div>

{% endblock %}

", "membre\\profil.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\membre\\profil.html.twig");
    }
}
