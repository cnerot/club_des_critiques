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
        $__internal_89ad4f8562eb114fdd8b99bd9d880655c151079d33ecf0c0bb33c5ec75d3e745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ad4f8562eb114fdd8b99bd9d880655c151079d33ecf0c0bb33c5ec75d3e745->enter($__internal_89ad4f8562eb114fdd8b99bd9d880655c151079d33ecf0c0bb33c5ec75d3e745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3c6322f83b97f91312b054a4f717f3ee739992f786fac67771b871a40ca171b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6322f83b97f91312b054a4f717f3ee739992f786fac67771b871a40ca171b7->enter($__internal_3c6322f83b97f91312b054a4f717f3ee739992f786fac67771b871a40ca171b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ad4f8562eb114fdd8b99bd9d880655c151079d33ecf0c0bb33c5ec75d3e745->leave($__internal_89ad4f8562eb114fdd8b99bd9d880655c151079d33ecf0c0bb33c5ec75d3e745_prof);

        
        $__internal_3c6322f83b97f91312b054a4f717f3ee739992f786fac67771b871a40ca171b7->leave($__internal_3c6322f83b97f91312b054a4f717f3ee739992f786fac67771b871a40ca171b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8a4a6ee641efd3e47a8f3d0c628b5ee9e2bb66817e3ac16b9d27357110140d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a4a6ee641efd3e47a8f3d0c628b5ee9e2bb66817e3ac16b9d27357110140d15->enter($__internal_8a4a6ee641efd3e47a8f3d0c628b5ee9e2bb66817e3ac16b9d27357110140d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2ed04d9432533f161be5935f5d6741cff79c00c617bde74f9e251e748718ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ed04d9432533f161be5935f5d6741cff79c00c617bde74f9e251e748718ad9->enter($__internal_e2ed04d9432533f161be5935f5d6741cff79c00c617bde74f9e251e748718ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2ed04d9432533f161be5935f5d6741cff79c00c617bde74f9e251e748718ad9->leave($__internal_e2ed04d9432533f161be5935f5d6741cff79c00c617bde74f9e251e748718ad9_prof);

        
        $__internal_8a4a6ee641efd3e47a8f3d0c628b5ee9e2bb66817e3ac16b9d27357110140d15->leave($__internal_8a4a6ee641efd3e47a8f3d0c628b5ee9e2bb66817e3ac16b9d27357110140d15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_521f987b9d219fba5ce3365ae892d6da2129194c0be57e3a586b48d4fe2f55b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521f987b9d219fba5ce3365ae892d6da2129194c0be57e3a586b48d4fe2f55b4->enter($__internal_521f987b9d219fba5ce3365ae892d6da2129194c0be57e3a586b48d4fe2f55b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8048e2275d69420be9d672ddddad595469472a70f3cd036951bd66b17a7f20bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8048e2275d69420be9d672ddddad595469472a70f3cd036951bd66b17a7f20bf->enter($__internal_8048e2275d69420be9d672ddddad595469472a70f3cd036951bd66b17a7f20bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8048e2275d69420be9d672ddddad595469472a70f3cd036951bd66b17a7f20bf->leave($__internal_8048e2275d69420be9d672ddddad595469472a70f3cd036951bd66b17a7f20bf_prof);

        
        $__internal_521f987b9d219fba5ce3365ae892d6da2129194c0be57e3a586b48d4fe2f55b4->leave($__internal_521f987b9d219fba5ce3365ae892d6da2129194c0be57e3a586b48d4fe2f55b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b62f64692b1ef56d2f7acb331b511a78098f9ecc0f5d19414e903a436dd4aaea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62f64692b1ef56d2f7acb331b511a78098f9ecc0f5d19414e903a436dd4aaea->enter($__internal_b62f64692b1ef56d2f7acb331b511a78098f9ecc0f5d19414e903a436dd4aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b59033acbfcb6455d2996a35f984df83ea202e7a6ecfa52545860f4e0c001b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b59033acbfcb6455d2996a35f984df83ea202e7a6ecfa52545860f4e0c001b0->enter($__internal_7b59033acbfcb6455d2996a35f984df83ea202e7a6ecfa52545860f4e0c001b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7b59033acbfcb6455d2996a35f984df83ea202e7a6ecfa52545860f4e0c001b0->leave($__internal_7b59033acbfcb6455d2996a35f984df83ea202e7a6ecfa52545860f4e0c001b0_prof);

        
        $__internal_b62f64692b1ef56d2f7acb331b511a78098f9ecc0f5d19414e903a436dd4aaea->leave($__internal_b62f64692b1ef56d2f7acb331b511a78098f9ecc0f5d19414e903a436dd4aaea_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/esgi-iw1-2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
