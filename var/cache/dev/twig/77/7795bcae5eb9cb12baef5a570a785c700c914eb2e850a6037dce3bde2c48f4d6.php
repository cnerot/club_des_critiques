<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b354ddc65ce00aa3c182e074e9d4f5063311f8f70f432e2dfbc06cbdc4937772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b354ddc65ce00aa3c182e074e9d4f5063311f8f70f432e2dfbc06cbdc4937772->enter($__internal_b354ddc65ce00aa3c182e074e9d4f5063311f8f70f432e2dfbc06cbdc4937772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_121907abe312923d7719da37ba461ecd63ff9b38679f54172a7c78fe78fa2cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121907abe312923d7719da37ba461ecd63ff9b38679f54172a7c78fe78fa2cb7->enter($__internal_121907abe312923d7719da37ba461ecd63ff9b38679f54172a7c78fe78fa2cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b354ddc65ce00aa3c182e074e9d4f5063311f8f70f432e2dfbc06cbdc4937772->leave($__internal_b354ddc65ce00aa3c182e074e9d4f5063311f8f70f432e2dfbc06cbdc4937772_prof);

        
        $__internal_121907abe312923d7719da37ba461ecd63ff9b38679f54172a7c78fe78fa2cb7->leave($__internal_121907abe312923d7719da37ba461ecd63ff9b38679f54172a7c78fe78fa2cb7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e056656b5c1af34f9f18a5debcab8c54ae15f95b8ce1e292dca1bc7d47948ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e056656b5c1af34f9f18a5debcab8c54ae15f95b8ce1e292dca1bc7d47948ba9->enter($__internal_e056656b5c1af34f9f18a5debcab8c54ae15f95b8ce1e292dca1bc7d47948ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6626ef2502db61b86ea4157e9842343e7f85b0964398ba197568f690b2869576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6626ef2502db61b86ea4157e9842343e7f85b0964398ba197568f690b2869576->enter($__internal_6626ef2502db61b86ea4157e9842343e7f85b0964398ba197568f690b2869576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6626ef2502db61b86ea4157e9842343e7f85b0964398ba197568f690b2869576->leave($__internal_6626ef2502db61b86ea4157e9842343e7f85b0964398ba197568f690b2869576_prof);

        
        $__internal_e056656b5c1af34f9f18a5debcab8c54ae15f95b8ce1e292dca1bc7d47948ba9->leave($__internal_e056656b5c1af34f9f18a5debcab8c54ae15f95b8ce1e292dca1bc7d47948ba9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5f8a4317fed7340aa51e00349adb2ca87b22f1b9f77999a77ffe106d4a858f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f8a4317fed7340aa51e00349adb2ca87b22f1b9f77999a77ffe106d4a858f3->enter($__internal_f5f8a4317fed7340aa51e00349adb2ca87b22f1b9f77999a77ffe106d4a858f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d1068ed53a7fedc7814a11628a6befdd0c680e4d438f17348438c0ce2c4d4ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1068ed53a7fedc7814a11628a6befdd0c680e4d438f17348438c0ce2c4d4ee0->enter($__internal_d1068ed53a7fedc7814a11628a6befdd0c680e4d438f17348438c0ce2c4d4ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d1068ed53a7fedc7814a11628a6befdd0c680e4d438f17348438c0ce2c4d4ee0->leave($__internal_d1068ed53a7fedc7814a11628a6befdd0c680e4d438f17348438c0ce2c4d4ee0_prof);

        
        $__internal_f5f8a4317fed7340aa51e00349adb2ca87b22f1b9f77999a77ffe106d4a858f3->leave($__internal_f5f8a4317fed7340aa51e00349adb2ca87b22f1b9f77999a77ffe106d4a858f3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_810468346a51a7ba33e75e8c6e4b3df596816f96550ce4d787b58bebcf044102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810468346a51a7ba33e75e8c6e4b3df596816f96550ce4d787b58bebcf044102->enter($__internal_810468346a51a7ba33e75e8c6e4b3df596816f96550ce4d787b58bebcf044102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1842de0f72a5f938ea5bf482d5a2eb17c4821f8e7bf3a7f387b13850fc1192d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1842de0f72a5f938ea5bf482d5a2eb17c4821f8e7bf3a7f387b13850fc1192d2->enter($__internal_1842de0f72a5f938ea5bf482d5a2eb17c4821f8e7bf3a7f387b13850fc1192d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1842de0f72a5f938ea5bf482d5a2eb17c4821f8e7bf3a7f387b13850fc1192d2->leave($__internal_1842de0f72a5f938ea5bf482d5a2eb17c4821f8e7bf3a7f387b13850fc1192d2_prof);

        
        $__internal_810468346a51a7ba33e75e8c6e4b3df596816f96550ce4d787b58bebcf044102->leave($__internal_810468346a51a7ba33e75e8c6e4b3df596816f96550ce4d787b58bebcf044102_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
