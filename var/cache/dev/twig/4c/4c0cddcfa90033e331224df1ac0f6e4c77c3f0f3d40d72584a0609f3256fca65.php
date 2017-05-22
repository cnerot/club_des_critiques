<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0df8400a31fc8c8d1509c290290cf553514cbc3fe1dd91bc4606a9d0285ee1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0df8400a31fc8c8d1509c290290cf553514cbc3fe1dd91bc4606a9d0285ee1b->enter($__internal_d0df8400a31fc8c8d1509c290290cf553514cbc3fe1dd91bc4606a9d0285ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a64fb00e182686e912161b9d7542cd6efe5d2b26c60a08eb121bced85ed512da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64fb00e182686e912161b9d7542cd6efe5d2b26c60a08eb121bced85ed512da->enter($__internal_a64fb00e182686e912161b9d7542cd6efe5d2b26c60a08eb121bced85ed512da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0df8400a31fc8c8d1509c290290cf553514cbc3fe1dd91bc4606a9d0285ee1b->leave($__internal_d0df8400a31fc8c8d1509c290290cf553514cbc3fe1dd91bc4606a9d0285ee1b_prof);

        
        $__internal_a64fb00e182686e912161b9d7542cd6efe5d2b26c60a08eb121bced85ed512da->leave($__internal_a64fb00e182686e912161b9d7542cd6efe5d2b26c60a08eb121bced85ed512da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae18cf03a0f0fc92c298dbafcd077d8c7950166f028ab66839c79377f6e4a616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae18cf03a0f0fc92c298dbafcd077d8c7950166f028ab66839c79377f6e4a616->enter($__internal_ae18cf03a0f0fc92c298dbafcd077d8c7950166f028ab66839c79377f6e4a616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1844ef555c629f2009cfa0063ad83a942dc3e528ca2d5ea43f5b315613d6f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1844ef555c629f2009cfa0063ad83a942dc3e528ca2d5ea43f5b315613d6f4e->enter($__internal_d1844ef555c629f2009cfa0063ad83a942dc3e528ca2d5ea43f5b315613d6f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d1844ef555c629f2009cfa0063ad83a942dc3e528ca2d5ea43f5b315613d6f4e->leave($__internal_d1844ef555c629f2009cfa0063ad83a942dc3e528ca2d5ea43f5b315613d6f4e_prof);

        
        $__internal_ae18cf03a0f0fc92c298dbafcd077d8c7950166f028ab66839c79377f6e4a616->leave($__internal_ae18cf03a0f0fc92c298dbafcd077d8c7950166f028ab66839c79377f6e4a616_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00dedf58cbf107caed00e4a495726a7ec233cb909371f6b3851c8bfad1abdf5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dedf58cbf107caed00e4a495726a7ec233cb909371f6b3851c8bfad1abdf5f->enter($__internal_00dedf58cbf107caed00e4a495726a7ec233cb909371f6b3851c8bfad1abdf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_53c755b2db67926582f6794967a6eddc2c59a94f83a3ff560da57ba40a47b11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c755b2db67926582f6794967a6eddc2c59a94f83a3ff560da57ba40a47b11f->enter($__internal_53c755b2db67926582f6794967a6eddc2c59a94f83a3ff560da57ba40a47b11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_53c755b2db67926582f6794967a6eddc2c59a94f83a3ff560da57ba40a47b11f->leave($__internal_53c755b2db67926582f6794967a6eddc2c59a94f83a3ff560da57ba40a47b11f_prof);

        
        $__internal_00dedf58cbf107caed00e4a495726a7ec233cb909371f6b3851c8bfad1abdf5f->leave($__internal_00dedf58cbf107caed00e4a495726a7ec233cb909371f6b3851c8bfad1abdf5f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0e55fc12d1fb2275b0fcab7a7e0c39bebcb1b2d527c8145c125564b9175ce41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e55fc12d1fb2275b0fcab7a7e0c39bebcb1b2d527c8145c125564b9175ce41->enter($__internal_f0e55fc12d1fb2275b0fcab7a7e0c39bebcb1b2d527c8145c125564b9175ce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_47ea308007d953617221c1ae20983921f47cec086e8786d40d7e589e4b3e9ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ea308007d953617221c1ae20983921f47cec086e8786d40d7e589e4b3e9ad7->enter($__internal_47ea308007d953617221c1ae20983921f47cec086e8786d40d7e589e4b3e9ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_47ea308007d953617221c1ae20983921f47cec086e8786d40d7e589e4b3e9ad7->leave($__internal_47ea308007d953617221c1ae20983921f47cec086e8786d40d7e589e4b3e9ad7_prof);

        
        $__internal_f0e55fc12d1fb2275b0fcab7a7e0c39bebcb1b2d527c8145c125564b9175ce41->leave($__internal_f0e55fc12d1fb2275b0fcab7a7e0c39bebcb1b2d527c8145c125564b9175ce41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/esgi-iw1-2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
