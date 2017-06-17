<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
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
        $__internal_4f8e9b21531990f5753fb33b6b14572476b1b63a3d4f5bb0d07763e7eb113571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8e9b21531990f5753fb33b6b14572476b1b63a3d4f5bb0d07763e7eb113571->enter($__internal_4f8e9b21531990f5753fb33b6b14572476b1b63a3d4f5bb0d07763e7eb113571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2f671d796d580ef14f52cc089672693339a965a6013499b499e93ccba1e6c316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f671d796d580ef14f52cc089672693339a965a6013499b499e93ccba1e6c316->enter($__internal_2f671d796d580ef14f52cc089672693339a965a6013499b499e93ccba1e6c316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8e9b21531990f5753fb33b6b14572476b1b63a3d4f5bb0d07763e7eb113571->leave($__internal_4f8e9b21531990f5753fb33b6b14572476b1b63a3d4f5bb0d07763e7eb113571_prof);

        
        $__internal_2f671d796d580ef14f52cc089672693339a965a6013499b499e93ccba1e6c316->leave($__internal_2f671d796d580ef14f52cc089672693339a965a6013499b499e93ccba1e6c316_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45aafc7a7dee3500969371edcecfae7217e999fc5d3148ee242c8a499603cb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45aafc7a7dee3500969371edcecfae7217e999fc5d3148ee242c8a499603cb6a->enter($__internal_45aafc7a7dee3500969371edcecfae7217e999fc5d3148ee242c8a499603cb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5003dd181f8fadf5937b13209f699e1d852af1f94fee2237ade9ec7a1c5c9e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5003dd181f8fadf5937b13209f699e1d852af1f94fee2237ade9ec7a1c5c9e85->enter($__internal_5003dd181f8fadf5937b13209f699e1d852af1f94fee2237ade9ec7a1c5c9e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5003dd181f8fadf5937b13209f699e1d852af1f94fee2237ade9ec7a1c5c9e85->leave($__internal_5003dd181f8fadf5937b13209f699e1d852af1f94fee2237ade9ec7a1c5c9e85_prof);

        
        $__internal_45aafc7a7dee3500969371edcecfae7217e999fc5d3148ee242c8a499603cb6a->leave($__internal_45aafc7a7dee3500969371edcecfae7217e999fc5d3148ee242c8a499603cb6a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f16775c748fb4c66a23988570c32fa57bfedb54d52845d323673ab6d8b7fc792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16775c748fb4c66a23988570c32fa57bfedb54d52845d323673ab6d8b7fc792->enter($__internal_f16775c748fb4c66a23988570c32fa57bfedb54d52845d323673ab6d8b7fc792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2533b6b052d5fb61c4ea7f8372f17aa60ea09330ae08fb825f7c104231ffe599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2533b6b052d5fb61c4ea7f8372f17aa60ea09330ae08fb825f7c104231ffe599->enter($__internal_2533b6b052d5fb61c4ea7f8372f17aa60ea09330ae08fb825f7c104231ffe599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2533b6b052d5fb61c4ea7f8372f17aa60ea09330ae08fb825f7c104231ffe599->leave($__internal_2533b6b052d5fb61c4ea7f8372f17aa60ea09330ae08fb825f7c104231ffe599_prof);

        
        $__internal_f16775c748fb4c66a23988570c32fa57bfedb54d52845d323673ab6d8b7fc792->leave($__internal_f16775c748fb4c66a23988570c32fa57bfedb54d52845d323673ab6d8b7fc792_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_989afed9f52f959a05350f599a51562c217b1fc53a3e4a0770791583e7fd83bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989afed9f52f959a05350f599a51562c217b1fc53a3e4a0770791583e7fd83bb->enter($__internal_989afed9f52f959a05350f599a51562c217b1fc53a3e4a0770791583e7fd83bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc28f33ce546a40fc24a9a2570288adb5e34ff7e389e5e5c465d144355c408b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc28f33ce546a40fc24a9a2570288adb5e34ff7e389e5e5c465d144355c408b9->enter($__internal_fc28f33ce546a40fc24a9a2570288adb5e34ff7e389e5e5c465d144355c408b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fc28f33ce546a40fc24a9a2570288adb5e34ff7e389e5e5c465d144355c408b9->leave($__internal_fc28f33ce546a40fc24a9a2570288adb5e34ff7e389e5e5c465d144355c408b9_prof);

        
        $__internal_989afed9f52f959a05350f599a51562c217b1fc53a3e4a0770791583e7fd83bb->leave($__internal_989afed9f52f959a05350f599a51562c217b1fc53a3e4a0770791583e7fd83bb_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\club_des_critiques\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
