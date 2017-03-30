<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
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
        $__internal_7b229b0e548cf9a9d34a37d46dbc8f9e57993f03cb55eca5b4aa4c9053a724fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b229b0e548cf9a9d34a37d46dbc8f9e57993f03cb55eca5b4aa4c9053a724fb->enter($__internal_7b229b0e548cf9a9d34a37d46dbc8f9e57993f03cb55eca5b4aa4c9053a724fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_78cf95eefb9b67598295edf05ba36fad4097654bc5b4a28379dfa5da7c40c9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cf95eefb9b67598295edf05ba36fad4097654bc5b4a28379dfa5da7c40c9a8->enter($__internal_78cf95eefb9b67598295edf05ba36fad4097654bc5b4a28379dfa5da7c40c9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b229b0e548cf9a9d34a37d46dbc8f9e57993f03cb55eca5b4aa4c9053a724fb->leave($__internal_7b229b0e548cf9a9d34a37d46dbc8f9e57993f03cb55eca5b4aa4c9053a724fb_prof);

        
        $__internal_78cf95eefb9b67598295edf05ba36fad4097654bc5b4a28379dfa5da7c40c9a8->leave($__internal_78cf95eefb9b67598295edf05ba36fad4097654bc5b4a28379dfa5da7c40c9a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1ae96a214eb386f6f38163b8ab6e692ea8da6755ec5c31a86caae859210b438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ae96a214eb386f6f38163b8ab6e692ea8da6755ec5c31a86caae859210b438->enter($__internal_c1ae96a214eb386f6f38163b8ab6e692ea8da6755ec5c31a86caae859210b438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c778314858631080c2ac64753369a26fde38749967d6151b2f791dc10a6289e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c778314858631080c2ac64753369a26fde38749967d6151b2f791dc10a6289e0->enter($__internal_c778314858631080c2ac64753369a26fde38749967d6151b2f791dc10a6289e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c778314858631080c2ac64753369a26fde38749967d6151b2f791dc10a6289e0->leave($__internal_c778314858631080c2ac64753369a26fde38749967d6151b2f791dc10a6289e0_prof);

        
        $__internal_c1ae96a214eb386f6f38163b8ab6e692ea8da6755ec5c31a86caae859210b438->leave($__internal_c1ae96a214eb386f6f38163b8ab6e692ea8da6755ec5c31a86caae859210b438_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_15553f6c620cb635363f7458b2f7c84c3d3d272d206a1415bf0747faf9c6695f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15553f6c620cb635363f7458b2f7c84c3d3d272d206a1415bf0747faf9c6695f->enter($__internal_15553f6c620cb635363f7458b2f7c84c3d3d272d206a1415bf0747faf9c6695f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d8ee805ba8e6f4c07f12a06d336031bde26f77cf327dd7193deb714a01181ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ee805ba8e6f4c07f12a06d336031bde26f77cf327dd7193deb714a01181ad3->enter($__internal_d8ee805ba8e6f4c07f12a06d336031bde26f77cf327dd7193deb714a01181ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d8ee805ba8e6f4c07f12a06d336031bde26f77cf327dd7193deb714a01181ad3->leave($__internal_d8ee805ba8e6f4c07f12a06d336031bde26f77cf327dd7193deb714a01181ad3_prof);

        
        $__internal_15553f6c620cb635363f7458b2f7c84c3d3d272d206a1415bf0747faf9c6695f->leave($__internal_15553f6c620cb635363f7458b2f7c84c3d3d272d206a1415bf0747faf9c6695f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93af91b53e3e7a2c1f300ccebc2313ce094640771d77a44da7a5e04ed1b14060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93af91b53e3e7a2c1f300ccebc2313ce094640771d77a44da7a5e04ed1b14060->enter($__internal_93af91b53e3e7a2c1f300ccebc2313ce094640771d77a44da7a5e04ed1b14060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26641970541b4da6e22166cb02dd5f9431ec418f70c8c95eb4b138d98f101e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26641970541b4da6e22166cb02dd5f9431ec418f70c8c95eb4b138d98f101e7c->enter($__internal_26641970541b4da6e22166cb02dd5f9431ec418f70c8c95eb4b138d98f101e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_26641970541b4da6e22166cb02dd5f9431ec418f70c8c95eb4b138d98f101e7c->leave($__internal_26641970541b4da6e22166cb02dd5f9431ec418f70c8c95eb4b138d98f101e7c_prof);

        
        $__internal_93af91b53e3e7a2c1f300ccebc2313ce094640771d77a44da7a5e04ed1b14060->leave($__internal_93af91b53e3e7a2c1f300ccebc2313ce094640771d77a44da7a5e04ed1b14060_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/clubCritique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
