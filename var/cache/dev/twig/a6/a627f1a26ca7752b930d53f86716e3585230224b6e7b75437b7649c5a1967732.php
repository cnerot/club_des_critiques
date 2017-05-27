<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_491d5853a96629e58d52ecc633bb16e5a88480f3bee41d89b781a0d49240981a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab4ae5808ed53884ad269be7fa15214639b08c4eb6003e09373220e52410aad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4ae5808ed53884ad269be7fa15214639b08c4eb6003e09373220e52410aad3->enter($__internal_ab4ae5808ed53884ad269be7fa15214639b08c4eb6003e09373220e52410aad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f3c41679c1562208ff8feb2959bf9403487cba2aa3a5d85ee8c3b8629666366d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c41679c1562208ff8feb2959bf9403487cba2aa3a5d85ee8c3b8629666366d->enter($__internal_f3c41679c1562208ff8feb2959bf9403487cba2aa3a5d85ee8c3b8629666366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4ae5808ed53884ad269be7fa15214639b08c4eb6003e09373220e52410aad3->leave($__internal_ab4ae5808ed53884ad269be7fa15214639b08c4eb6003e09373220e52410aad3_prof);

        
        $__internal_f3c41679c1562208ff8feb2959bf9403487cba2aa3a5d85ee8c3b8629666366d->leave($__internal_f3c41679c1562208ff8feb2959bf9403487cba2aa3a5d85ee8c3b8629666366d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9696a2dfa22f5661e7152f4049ad59a2a5232d5d305be71565175bae6fdd744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9696a2dfa22f5661e7152f4049ad59a2a5232d5d305be71565175bae6fdd744->enter($__internal_b9696a2dfa22f5661e7152f4049ad59a2a5232d5d305be71565175bae6fdd744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59be69e4aad61caa630658bbb985c54281fa50f62da8805f5d5ba495a0dbb1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59be69e4aad61caa630658bbb985c54281fa50f62da8805f5d5ba495a0dbb1b7->enter($__internal_59be69e4aad61caa630658bbb985c54281fa50f62da8805f5d5ba495a0dbb1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_59be69e4aad61caa630658bbb985c54281fa50f62da8805f5d5ba495a0dbb1b7->leave($__internal_59be69e4aad61caa630658bbb985c54281fa50f62da8805f5d5ba495a0dbb1b7_prof);

        
        $__internal_b9696a2dfa22f5661e7152f4049ad59a2a5232d5d305be71565175bae6fdd744->leave($__internal_b9696a2dfa22f5661e7152f4049ad59a2a5232d5d305be71565175bae6fdd744_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
