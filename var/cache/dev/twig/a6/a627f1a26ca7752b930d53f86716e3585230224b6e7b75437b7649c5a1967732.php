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
        $__internal_dc6f44f09d6d4402623f45d0d2301cd1db20266d83aa0c3b20e5edc96a3ebe93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6f44f09d6d4402623f45d0d2301cd1db20266d83aa0c3b20e5edc96a3ebe93->enter($__internal_dc6f44f09d6d4402623f45d0d2301cd1db20266d83aa0c3b20e5edc96a3ebe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7f5c40cd40b550a31f191f9d92ffc0c0fca2a695a542edf999a3d9c7dfefc912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5c40cd40b550a31f191f9d92ffc0c0fca2a695a542edf999a3d9c7dfefc912->enter($__internal_7f5c40cd40b550a31f191f9d92ffc0c0fca2a695a542edf999a3d9c7dfefc912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6f44f09d6d4402623f45d0d2301cd1db20266d83aa0c3b20e5edc96a3ebe93->leave($__internal_dc6f44f09d6d4402623f45d0d2301cd1db20266d83aa0c3b20e5edc96a3ebe93_prof);

        
        $__internal_7f5c40cd40b550a31f191f9d92ffc0c0fca2a695a542edf999a3d9c7dfefc912->leave($__internal_7f5c40cd40b550a31f191f9d92ffc0c0fca2a695a542edf999a3d9c7dfefc912_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9bc87eace3e611ce94d9f3d92b8bc25e45da29b65d1934276d64da5efcd74cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bc87eace3e611ce94d9f3d92b8bc25e45da29b65d1934276d64da5efcd74cc->enter($__internal_c9bc87eace3e611ce94d9f3d92b8bc25e45da29b65d1934276d64da5efcd74cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac4b621bec28e01c0b44ed01a0405b93256ff0a5a9020052017e9c4e01c8bf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4b621bec28e01c0b44ed01a0405b93256ff0a5a9020052017e9c4e01c8bf4d->enter($__internal_ac4b621bec28e01c0b44ed01a0405b93256ff0a5a9020052017e9c4e01c8bf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ac4b621bec28e01c0b44ed01a0405b93256ff0a5a9020052017e9c4e01c8bf4d->leave($__internal_ac4b621bec28e01c0b44ed01a0405b93256ff0a5a9020052017e9c4e01c8bf4d_prof);

        
        $__internal_c9bc87eace3e611ce94d9f3d92b8bc25e45da29b65d1934276d64da5efcd74cc->leave($__internal_c9bc87eace3e611ce94d9f3d92b8bc25e45da29b65d1934276d64da5efcd74cc_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/esgi-iw1-2017/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
