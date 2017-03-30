<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_49724a11344ed7d9c9fe1b070059783ae798ac139d045f9f30338ff808ea116c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49724a11344ed7d9c9fe1b070059783ae798ac139d045f9f30338ff808ea116c->enter($__internal_49724a11344ed7d9c9fe1b070059783ae798ac139d045f9f30338ff808ea116c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0e86e8d2f9e94a47c27f832b881106158abd9ea83855e0793b3b501270e6cbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e86e8d2f9e94a47c27f832b881106158abd9ea83855e0793b3b501270e6cbce->enter($__internal_0e86e8d2f9e94a47c27f832b881106158abd9ea83855e0793b3b501270e6cbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49724a11344ed7d9c9fe1b070059783ae798ac139d045f9f30338ff808ea116c->leave($__internal_49724a11344ed7d9c9fe1b070059783ae798ac139d045f9f30338ff808ea116c_prof);

        
        $__internal_0e86e8d2f9e94a47c27f832b881106158abd9ea83855e0793b3b501270e6cbce->leave($__internal_0e86e8d2f9e94a47c27f832b881106158abd9ea83855e0793b3b501270e6cbce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_181f8c9a28f7c3fc43e1e6ea9c78c7a904faf504f2916ef68fcec4d9a900b74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181f8c9a28f7c3fc43e1e6ea9c78c7a904faf504f2916ef68fcec4d9a900b74f->enter($__internal_181f8c9a28f7c3fc43e1e6ea9c78c7a904faf504f2916ef68fcec4d9a900b74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17dbe82cc7f29aafa5ffda0d6e027e400fad5167336a4a24ba035b55ede72761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dbe82cc7f29aafa5ffda0d6e027e400fad5167336a4a24ba035b55ede72761->enter($__internal_17dbe82cc7f29aafa5ffda0d6e027e400fad5167336a4a24ba035b55ede72761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17dbe82cc7f29aafa5ffda0d6e027e400fad5167336a4a24ba035b55ede72761->leave($__internal_17dbe82cc7f29aafa5ffda0d6e027e400fad5167336a4a24ba035b55ede72761_prof);

        
        $__internal_181f8c9a28f7c3fc43e1e6ea9c78c7a904faf504f2916ef68fcec4d9a900b74f->leave($__internal_181f8c9a28f7c3fc43e1e6ea9c78c7a904faf504f2916ef68fcec4d9a900b74f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24d6f2e9a50a740acfde4d0f8a31f8f2b995d62edddfd2eb56323038ad94cd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d6f2e9a50a740acfde4d0f8a31f8f2b995d62edddfd2eb56323038ad94cd85->enter($__internal_24d6f2e9a50a740acfde4d0f8a31f8f2b995d62edddfd2eb56323038ad94cd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e5fe46b83caeeddf169d59972ed235e7e2fc63897e0b7de4d9cf5aef3b91a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5fe46b83caeeddf169d59972ed235e7e2fc63897e0b7de4d9cf5aef3b91a92->enter($__internal_7e5fe46b83caeeddf169d59972ed235e7e2fc63897e0b7de4d9cf5aef3b91a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e5fe46b83caeeddf169d59972ed235e7e2fc63897e0b7de4d9cf5aef3b91a92->leave($__internal_7e5fe46b83caeeddf169d59972ed235e7e2fc63897e0b7de4d9cf5aef3b91a92_prof);

        
        $__internal_24d6f2e9a50a740acfde4d0f8a31f8f2b995d62edddfd2eb56323038ad94cd85->leave($__internal_24d6f2e9a50a740acfde4d0f8a31f8f2b995d62edddfd2eb56323038ad94cd85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5beb0c55a7c681354fb1aefa19484b607dd1b7eca75110139c558ad63cd9a335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5beb0c55a7c681354fb1aefa19484b607dd1b7eca75110139c558ad63cd9a335->enter($__internal_5beb0c55a7c681354fb1aefa19484b607dd1b7eca75110139c558ad63cd9a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d1724fd7407d3b1d61997d139154b8b47c03befa2a15972659048767e9ee1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1724fd7407d3b1d61997d139154b8b47c03befa2a15972659048767e9ee1ee->enter($__internal_7d1724fd7407d3b1d61997d139154b8b47c03befa2a15972659048767e9ee1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d1724fd7407d3b1d61997d139154b8b47c03befa2a15972659048767e9ee1ee->leave($__internal_7d1724fd7407d3b1d61997d139154b8b47c03befa2a15972659048767e9ee1ee_prof);

        
        $__internal_5beb0c55a7c681354fb1aefa19484b607dd1b7eca75110139c558ad63cd9a335->leave($__internal_5beb0c55a7c681354fb1aefa19484b607dd1b7eca75110139c558ad63cd9a335_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/clubCritique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
