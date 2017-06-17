<?php

/* mail/nousContacter.html.twig */
class __TwigTemplate_b4d02a779a70457d0e0c863389b749152077d508d03c34e431a3e713adc6aad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mail/nousContacter.html.twig", 1);
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
        $__internal_5d4da7e6d94b8c3f4dd2770e81b2ab60c35c7290628325934d5f21c8fb3cfdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4da7e6d94b8c3f4dd2770e81b2ab60c35c7290628325934d5f21c8fb3cfdb4->enter($__internal_5d4da7e6d94b8c3f4dd2770e81b2ab60c35c7290628325934d5f21c8fb3cfdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail/nousContacter.html.twig"));

        $__internal_64d3b04599fb0db8a6ed05034eb97a31722d460335ffa70f64e6ea6048566654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d3b04599fb0db8a6ed05034eb97a31722d460335ffa70f64e6ea6048566654->enter($__internal_64d3b04599fb0db8a6ed05034eb97a31722d460335ffa70f64e6ea6048566654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail/nousContacter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d4da7e6d94b8c3f4dd2770e81b2ab60c35c7290628325934d5f21c8fb3cfdb4->leave($__internal_5d4da7e6d94b8c3f4dd2770e81b2ab60c35c7290628325934d5f21c8fb3cfdb4_prof);

        
        $__internal_64d3b04599fb0db8a6ed05034eb97a31722d460335ffa70f64e6ea6048566654->leave($__internal_64d3b04599fb0db8a6ed05034eb97a31722d460335ffa70f64e6ea6048566654_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2e586f56447f6d73235a08d0c39cc6df471753db356040f376129a5b753fbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e586f56447f6d73235a08d0c39cc6df471753db356040f376129a5b753fbdc->enter($__internal_a2e586f56447f6d73235a08d0c39cc6df471753db356040f376129a5b753fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4f78afb292b246b944680e8cc418172f103530c505327543fc5ec3cb7a08b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f78afb292b246b944680e8cc418172f103530c505327543fc5ec3cb7a08b36->enter($__internal_b4f78afb292b246b944680e8cc418172f103530c505327543fc5ec3cb7a08b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Contactez nous
";
        
        $__internal_b4f78afb292b246b944680e8cc418172f103530c505327543fc5ec3cb7a08b36->leave($__internal_b4f78afb292b246b944680e8cc418172f103530c505327543fc5ec3cb7a08b36_prof);

        
        $__internal_a2e586f56447f6d73235a08d0c39cc6df471753db356040f376129a5b753fbdc->leave($__internal_a2e586f56447f6d73235a08d0c39cc6df471753db356040f376129a5b753fbdc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a0b8e593dec67e7818c31ad43a013357afb0e6926a8fe241f2c8bd28d89bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a0b8e593dec67e7818c31ad43a013357afb0e6926a8fe241f2c8bd28d89bc1->enter($__internal_17a0b8e593dec67e7818c31ad43a013357afb0e6926a8fe241f2c8bd28d89bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6a3c288492a0b4783a7e377178dcc562310a1a0430c6945655ec11eee1cd9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a3c288492a0b4783a7e377178dcc562310a1a0430c6945655ec11eee1cd9e6->enter($__internal_f6a3c288492a0b4783a7e377178dcc562310a1a0430c6945655ec11eee1cd9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div>
                    <label>Nom :</label>
                    <input type=\"text\" class=\"\" name=\"nom\"> 
                </div>
                <div>
                    <label>E-mail :</label>
                    <input type=\"text\" class=\"\" name=\"mail\"> 
                </div>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <div class=\"right\">
                    <button class=\"btn-large\" type=\"submit\">Envoyer</button>
                </div>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_f6a3c288492a0b4783a7e377178dcc562310a1a0430c6945655ec11eee1cd9e6->leave($__internal_f6a3c288492a0b4783a7e377178dcc562310a1a0430c6945655ec11eee1cd9e6_prof);

        
        $__internal_17a0b8e593dec67e7818c31ad43a013357afb0e6926a8fe241f2c8bd28d89bc1->leave($__internal_17a0b8e593dec67e7818c31ad43a013357afb0e6926a8fe241f2c8bd28d89bc1_prof);

    }

    public function getTemplateName()
    {
        return "mail/nousContacter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  86 => 19,  74 => 10,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
   Contactez nous
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {{ form_start(form) }}
                <div>
                    <label>Nom :</label>
                    <input type=\"text\" class=\"\" name=\"nom\"> 
                </div>
                <div>
                    <label>E-mail :</label>
                    <input type=\"text\" class=\"\" name=\"mail\"> 
                </div>
                {{ form_rest(form) }}
                <div class=\"right\">
                    <button class=\"btn-large\" type=\"submit\">Envoyer</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "mail/nousContacter.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\mail\\nousContacter.html.twig");
    }
}
