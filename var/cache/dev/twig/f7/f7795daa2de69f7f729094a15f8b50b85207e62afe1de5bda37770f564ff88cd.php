<?php

/* membre/login.html.twig */
class __TwigTemplate_f734c6cdcb2837a86dfcc84260a150d0af6162aa9bb3e29973fba4816b1800b0 extends Twig_Template
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
        $__internal_4bef70312c536b0c25874addf13fb6aac369613ced676993b5fdedb8f4c72b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bef70312c536b0c25874addf13fb6aac369613ced676993b5fdedb8f4c72b40->enter($__internal_4bef70312c536b0c25874addf13fb6aac369613ced676993b5fdedb8f4c72b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre/login.html.twig"));

        $__internal_e527f9f0e2087cb624effa3ca8c2d94f6af69cfb22a4b66ef52880f40d225a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e527f9f0e2087cb624effa3ca8c2d94f6af69cfb22a4b66ef52880f40d225a1b->enter($__internal_e527f9f0e2087cb624effa3ca8c2d94f6af69cfb22a4b66ef52880f40d225a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre/login.html.twig"));

        // line 1
        echo "

<div id=\"oModal\" class=\"oModal\">
  <div>
    <header>
      <a href=\"#fermer\" title=\"Fermer la fenêtre\" class=\"droite\">X</a>
     </header>
     <section>


    <div class=\"row\">
        <div  class=\"col s12 center-align\">
                <div class=\"left-align\">
                       ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"right\">
                                <button class=\"btn-large\" type=\"submit\">Valider</button>
                            </div>
                        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
        </div>
    </div>
    
     </section>
  </div>
</div>

    ";
        
        $__internal_4bef70312c536b0c25874addf13fb6aac369613ced676993b5fdedb8f4c72b40->leave($__internal_4bef70312c536b0c25874addf13fb6aac369613ced676993b5fdedb8f4c72b40_prof);

        
        $__internal_e527f9f0e2087cb624effa3ca8c2d94f6af69cfb22a4b66ef52880f40d225a1b->leave($__internal_e527f9f0e2087cb624effa3ca8c2d94f6af69cfb22a4b66ef52880f40d225a1b_prof);

    }

    public function getTemplateName()
    {
        return "membre/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  44 => 15,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div id=\"oModal\" class=\"oModal\">
  <div>
    <header>
      <a href=\"#fermer\" title=\"Fermer la fenêtre\" class=\"droite\">X</a>
     </header>
     <section>


    <div class=\"row\">
        <div  class=\"col s12 center-align\">
                <div class=\"left-align\">
                       {{ form_start(form) }}
                            {{ form_rest(form) }}
                            <div class=\"right\">
                                <button class=\"btn-large\" type=\"submit\">Valider</button>
                            </div>
                        {{ form_end(form) }}
                </div>
        </div>
    </div>
    
     </section>
  </div>
</div>

    ", "membre/login.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\membre\\login.html.twig");
    }
}
