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
        $__internal_ef495303da09c3675be97f802360e05abd51471686e23821422c91252cfd0d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef495303da09c3675be97f802360e05abd51471686e23821422c91252cfd0d95->enter($__internal_ef495303da09c3675be97f802360e05abd51471686e23821422c91252cfd0d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4fb4931b853968531b3b89e5f033635341b1c183542eaa6df0e252a99176561e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb4931b853968531b3b89e5f033635341b1c183542eaa6df0e252a99176561e->enter($__internal_4fb4931b853968531b3b89e5f033635341b1c183542eaa6df0e252a99176561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef495303da09c3675be97f802360e05abd51471686e23821422c91252cfd0d95->leave($__internal_ef495303da09c3675be97f802360e05abd51471686e23821422c91252cfd0d95_prof);

        
        $__internal_4fb4931b853968531b3b89e5f033635341b1c183542eaa6df0e252a99176561e->leave($__internal_4fb4931b853968531b3b89e5f033635341b1c183542eaa6df0e252a99176561e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72e6dca3ed10123993178d3e4749bdf3f85a9526e2f6eedc855449fc09ad3a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e6dca3ed10123993178d3e4749bdf3f85a9526e2f6eedc855449fc09ad3a01->enter($__internal_72e6dca3ed10123993178d3e4749bdf3f85a9526e2f6eedc855449fc09ad3a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b9c8dd53880d3ba25ec5cf379818db9fa65a7e05bd6b8a6b5743e25f80be4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9c8dd53880d3ba25ec5cf379818db9fa65a7e05bd6b8a6b5743e25f80be4ae->enter($__internal_2b9c8dd53880d3ba25ec5cf379818db9fa65a7e05bd6b8a6b5743e25f80be4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2b9c8dd53880d3ba25ec5cf379818db9fa65a7e05bd6b8a6b5743e25f80be4ae->leave($__internal_2b9c8dd53880d3ba25ec5cf379818db9fa65a7e05bd6b8a6b5743e25f80be4ae_prof);

        
        $__internal_72e6dca3ed10123993178d3e4749bdf3f85a9526e2f6eedc855449fc09ad3a01->leave($__internal_72e6dca3ed10123993178d3e4749bdf3f85a9526e2f6eedc855449fc09ad3a01_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23dd4ec030f124f4f9b90cd3fe17f9e152442adad69819b706ef8c577ea4c4e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dd4ec030f124f4f9b90cd3fe17f9e152442adad69819b706ef8c577ea4c4e1->enter($__internal_23dd4ec030f124f4f9b90cd3fe17f9e152442adad69819b706ef8c577ea4c4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_daccd8b559d9eb62644f90b86b8b4e4cdde9412d21515a88787485ee239fbfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daccd8b559d9eb62644f90b86b8b4e4cdde9412d21515a88787485ee239fbfdc->enter($__internal_daccd8b559d9eb62644f90b86b8b4e4cdde9412d21515a88787485ee239fbfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_daccd8b559d9eb62644f90b86b8b4e4cdde9412d21515a88787485ee239fbfdc->leave($__internal_daccd8b559d9eb62644f90b86b8b4e4cdde9412d21515a88787485ee239fbfdc_prof);

        
        $__internal_23dd4ec030f124f4f9b90cd3fe17f9e152442adad69819b706ef8c577ea4c4e1->leave($__internal_23dd4ec030f124f4f9b90cd3fe17f9e152442adad69819b706ef8c577ea4c4e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11faebef0c04085c3eee6cb3ce73f4862c99a7b6086eed88066849a7bd22ef49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11faebef0c04085c3eee6cb3ce73f4862c99a7b6086eed88066849a7bd22ef49->enter($__internal_11faebef0c04085c3eee6cb3ce73f4862c99a7b6086eed88066849a7bd22ef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10413b5890dac44672bb961efa75e199d10f45c49a561db0731dceddba583b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10413b5890dac44672bb961efa75e199d10f45c49a561db0731dceddba583b3c->enter($__internal_10413b5890dac44672bb961efa75e199d10f45c49a561db0731dceddba583b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_10413b5890dac44672bb961efa75e199d10f45c49a561db0731dceddba583b3c->leave($__internal_10413b5890dac44672bb961efa75e199d10f45c49a561db0731dceddba583b3c_prof);

        
        $__internal_11faebef0c04085c3eee6cb3ce73f4862c99a7b6086eed88066849a7bd22ef49->leave($__internal_11faebef0c04085c3eee6cb3ce73f4862c99a7b6086eed88066849a7bd22ef49_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
