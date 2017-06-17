<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_2c121e000bb4bd716f47265786422721a998ba0de8a11aeb6c58dd461a92609e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c121e000bb4bd716f47265786422721a998ba0de8a11aeb6c58dd461a92609e->enter($__internal_2c121e000bb4bd716f47265786422721a998ba0de8a11aeb6c58dd461a92609e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ce9575899f79d734220b86e15ebd0d397d2d7faa0e6681715f2f32d17871677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce9575899f79d734220b86e15ebd0d397d2d7faa0e6681715f2f32d17871677->enter($__internal_3ce9575899f79d734220b86e15ebd0d397d2d7faa0e6681715f2f32d17871677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c121e000bb4bd716f47265786422721a998ba0de8a11aeb6c58dd461a92609e->leave($__internal_2c121e000bb4bd716f47265786422721a998ba0de8a11aeb6c58dd461a92609e_prof);

        
        $__internal_3ce9575899f79d734220b86e15ebd0d397d2d7faa0e6681715f2f32d17871677->leave($__internal_3ce9575899f79d734220b86e15ebd0d397d2d7faa0e6681715f2f32d17871677_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55b84525e9cb4dc6b053c79a25f931ce25f5932ca4e282b533dc3bb02b5bc7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b84525e9cb4dc6b053c79a25f931ce25f5932ca4e282b533dc3bb02b5bc7d8->enter($__internal_55b84525e9cb4dc6b053c79a25f931ce25f5932ca4e282b533dc3bb02b5bc7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_323294b3d717591bdc0dfdbb4a890f7b0017c416344bb1fa56cba3a1b5431934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323294b3d717591bdc0dfdbb4a890f7b0017c416344bb1fa56cba3a1b5431934->enter($__internal_323294b3d717591bdc0dfdbb4a890f7b0017c416344bb1fa56cba3a1b5431934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_323294b3d717591bdc0dfdbb4a890f7b0017c416344bb1fa56cba3a1b5431934->leave($__internal_323294b3d717591bdc0dfdbb4a890f7b0017c416344bb1fa56cba3a1b5431934_prof);

        
        $__internal_55b84525e9cb4dc6b053c79a25f931ce25f5932ca4e282b533dc3bb02b5bc7d8->leave($__internal_55b84525e9cb4dc6b053c79a25f931ce25f5932ca4e282b533dc3bb02b5bc7d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb49667db323a3e68b8debfe2d229d3e3dfea235a12ff2e2fdf9769cbb79b1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb49667db323a3e68b8debfe2d229d3e3dfea235a12ff2e2fdf9769cbb79b1e6->enter($__internal_cb49667db323a3e68b8debfe2d229d3e3dfea235a12ff2e2fdf9769cbb79b1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b55024e4ca2258e77f5426ea9133cce0930f01e74831552b434ea9d59428d4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55024e4ca2258e77f5426ea9133cce0930f01e74831552b434ea9d59428d4b2->enter($__internal_b55024e4ca2258e77f5426ea9133cce0930f01e74831552b434ea9d59428d4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b55024e4ca2258e77f5426ea9133cce0930f01e74831552b434ea9d59428d4b2->leave($__internal_b55024e4ca2258e77f5426ea9133cce0930f01e74831552b434ea9d59428d4b2_prof);

        
        $__internal_cb49667db323a3e68b8debfe2d229d3e3dfea235a12ff2e2fdf9769cbb79b1e6->leave($__internal_cb49667db323a3e68b8debfe2d229d3e3dfea235a12ff2e2fdf9769cbb79b1e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bff1f97440bd06370684699b39ff7791bcb35d790c70e5f145239c6897d0af33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff1f97440bd06370684699b39ff7791bcb35d790c70e5f145239c6897d0af33->enter($__internal_bff1f97440bd06370684699b39ff7791bcb35d790c70e5f145239c6897d0af33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d30e09dc287be1f508a1ef537bd9239f96f4a10671bc36a58e87a5a31591a1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30e09dc287be1f508a1ef537bd9239f96f4a10671bc36a58e87a5a31591a1e6->enter($__internal_d30e09dc287be1f508a1ef537bd9239f96f4a10671bc36a58e87a5a31591a1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d30e09dc287be1f508a1ef537bd9239f96f4a10671bc36a58e87a5a31591a1e6->leave($__internal_d30e09dc287be1f508a1ef537bd9239f96f4a10671bc36a58e87a5a31591a1e6_prof);

        
        $__internal_bff1f97440bd06370684699b39ff7791bcb35d790c70e5f145239c6897d0af33->leave($__internal_bff1f97440bd06370684699b39ff7791bcb35d790c70e5f145239c6897d0af33_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\club_des_critiques\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
