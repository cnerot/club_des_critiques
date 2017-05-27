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
        $__internal_5a489c84b08c8b9344cda0a1496a6cff87a39325cf43e6379ebff6d21a92a1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a489c84b08c8b9344cda0a1496a6cff87a39325cf43e6379ebff6d21a92a1b7->enter($__internal_5a489c84b08c8b9344cda0a1496a6cff87a39325cf43e6379ebff6d21a92a1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e2ed698a771e136b4dbca87da6ebd31cfc1556502149f103f7816699f62cadf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ed698a771e136b4dbca87da6ebd31cfc1556502149f103f7816699f62cadf5->enter($__internal_e2ed698a771e136b4dbca87da6ebd31cfc1556502149f103f7816699f62cadf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a489c84b08c8b9344cda0a1496a6cff87a39325cf43e6379ebff6d21a92a1b7->leave($__internal_5a489c84b08c8b9344cda0a1496a6cff87a39325cf43e6379ebff6d21a92a1b7_prof);

        
        $__internal_e2ed698a771e136b4dbca87da6ebd31cfc1556502149f103f7816699f62cadf5->leave($__internal_e2ed698a771e136b4dbca87da6ebd31cfc1556502149f103f7816699f62cadf5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f04c18ece31ccd4b245803ac3f2eddedd3ec2fc20e2cafc3332eb1d86e0510b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04c18ece31ccd4b245803ac3f2eddedd3ec2fc20e2cafc3332eb1d86e0510b0->enter($__internal_f04c18ece31ccd4b245803ac3f2eddedd3ec2fc20e2cafc3332eb1d86e0510b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_190cd79a525abbfe21c1dcbf40d9cc65f26af7811d2b5511f35d8d8fb772984d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190cd79a525abbfe21c1dcbf40d9cc65f26af7811d2b5511f35d8d8fb772984d->enter($__internal_190cd79a525abbfe21c1dcbf40d9cc65f26af7811d2b5511f35d8d8fb772984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_190cd79a525abbfe21c1dcbf40d9cc65f26af7811d2b5511f35d8d8fb772984d->leave($__internal_190cd79a525abbfe21c1dcbf40d9cc65f26af7811d2b5511f35d8d8fb772984d_prof);

        
        $__internal_f04c18ece31ccd4b245803ac3f2eddedd3ec2fc20e2cafc3332eb1d86e0510b0->leave($__internal_f04c18ece31ccd4b245803ac3f2eddedd3ec2fc20e2cafc3332eb1d86e0510b0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2720e17730c7d60d82c6c5cd198abf394b03bd08d7e8437129713ec25d369228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2720e17730c7d60d82c6c5cd198abf394b03bd08d7e8437129713ec25d369228->enter($__internal_2720e17730c7d60d82c6c5cd198abf394b03bd08d7e8437129713ec25d369228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0738eeecb269c1fd18fe57bb1810992cf0669718850feb263f4d8b0d0103ba05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0738eeecb269c1fd18fe57bb1810992cf0669718850feb263f4d8b0d0103ba05->enter($__internal_0738eeecb269c1fd18fe57bb1810992cf0669718850feb263f4d8b0d0103ba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0738eeecb269c1fd18fe57bb1810992cf0669718850feb263f4d8b0d0103ba05->leave($__internal_0738eeecb269c1fd18fe57bb1810992cf0669718850feb263f4d8b0d0103ba05_prof);

        
        $__internal_2720e17730c7d60d82c6c5cd198abf394b03bd08d7e8437129713ec25d369228->leave($__internal_2720e17730c7d60d82c6c5cd198abf394b03bd08d7e8437129713ec25d369228_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12600b94893ed62e250519180118826b753bad975b031a38add197fb1ffdbeb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12600b94893ed62e250519180118826b753bad975b031a38add197fb1ffdbeb7->enter($__internal_12600b94893ed62e250519180118826b753bad975b031a38add197fb1ffdbeb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53776ce6c6ca2007680faa3e61dd93921ffd6a1e8b1ce818126196f64d2c9e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53776ce6c6ca2007680faa3e61dd93921ffd6a1e8b1ce818126196f64d2c9e6d->enter($__internal_53776ce6c6ca2007680faa3e61dd93921ffd6a1e8b1ce818126196f64d2c9e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_53776ce6c6ca2007680faa3e61dd93921ffd6a1e8b1ce818126196f64d2c9e6d->leave($__internal_53776ce6c6ca2007680faa3e61dd93921ffd6a1e8b1ce818126196f64d2c9e6d_prof);

        
        $__internal_12600b94893ed62e250519180118826b753bad975b031a38add197fb1ffdbeb7->leave($__internal_12600b94893ed62e250519180118826b753bad975b031a38add197fb1ffdbeb7_prof);

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
