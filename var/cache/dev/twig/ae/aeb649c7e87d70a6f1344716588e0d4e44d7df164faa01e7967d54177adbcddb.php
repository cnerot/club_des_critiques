<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_469bb03d78ae0ef4647fb4225132c5a3d32d7400988420ca5e95cd9d628e3bca extends Twig_Template
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
        $__internal_4541d921f30074e80aa477c37a7c4fa4ce17365160217e49f428f2aff82f04de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4541d921f30074e80aa477c37a7c4fa4ce17365160217e49f428f2aff82f04de->enter($__internal_4541d921f30074e80aa477c37a7c4fa4ce17365160217e49f428f2aff82f04de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_aa49563d686edfd74646d66e28c731be91670b46adee6daa92b40ba5b8a9d600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa49563d686edfd74646d66e28c731be91670b46adee6daa92b40ba5b8a9d600->enter($__internal_aa49563d686edfd74646d66e28c731be91670b46adee6daa92b40ba5b8a9d600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4541d921f30074e80aa477c37a7c4fa4ce17365160217e49f428f2aff82f04de->leave($__internal_4541d921f30074e80aa477c37a7c4fa4ce17365160217e49f428f2aff82f04de_prof);

        
        $__internal_aa49563d686edfd74646d66e28c731be91670b46adee6daa92b40ba5b8a9d600->leave($__internal_aa49563d686edfd74646d66e28c731be91670b46adee6daa92b40ba5b8a9d600_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ed137d50d0250dde8e4879a1c69563b2761c5607ff6c35acafadf62180ed871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed137d50d0250dde8e4879a1c69563b2761c5607ff6c35acafadf62180ed871->enter($__internal_3ed137d50d0250dde8e4879a1c69563b2761c5607ff6c35acafadf62180ed871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7984d3f67db1874e1a1abca8f4ffc2c7a5aaa83b29f64b0671a9e2a7f0bfdf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7984d3f67db1874e1a1abca8f4ffc2c7a5aaa83b29f64b0671a9e2a7f0bfdf23->enter($__internal_7984d3f67db1874e1a1abca8f4ffc2c7a5aaa83b29f64b0671a9e2a7f0bfdf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7984d3f67db1874e1a1abca8f4ffc2c7a5aaa83b29f64b0671a9e2a7f0bfdf23->leave($__internal_7984d3f67db1874e1a1abca8f4ffc2c7a5aaa83b29f64b0671a9e2a7f0bfdf23_prof);

        
        $__internal_3ed137d50d0250dde8e4879a1c69563b2761c5607ff6c35acafadf62180ed871->leave($__internal_3ed137d50d0250dde8e4879a1c69563b2761c5607ff6c35acafadf62180ed871_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/clubCritique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
