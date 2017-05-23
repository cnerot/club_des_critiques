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
        $__internal_be9ccc8292ef88ce740573c296fcdd2615eee665b65d98ee15b670b9c111ae17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9ccc8292ef88ce740573c296fcdd2615eee665b65d98ee15b670b9c111ae17->enter($__internal_be9ccc8292ef88ce740573c296fcdd2615eee665b65d98ee15b670b9c111ae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1b397fe704e7e794ae784d72fdd0e19c34bcb252aa19c6cacce7d4728b2e0c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b397fe704e7e794ae784d72fdd0e19c34bcb252aa19c6cacce7d4728b2e0c7f->enter($__internal_1b397fe704e7e794ae784d72fdd0e19c34bcb252aa19c6cacce7d4728b2e0c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be9ccc8292ef88ce740573c296fcdd2615eee665b65d98ee15b670b9c111ae17->leave($__internal_be9ccc8292ef88ce740573c296fcdd2615eee665b65d98ee15b670b9c111ae17_prof);

        
        $__internal_1b397fe704e7e794ae784d72fdd0e19c34bcb252aa19c6cacce7d4728b2e0c7f->leave($__internal_1b397fe704e7e794ae784d72fdd0e19c34bcb252aa19c6cacce7d4728b2e0c7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_842ae616fe43e59ad87ec0b92b38940e7c79b261f0ce0e4d7ec9b588d57d8709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842ae616fe43e59ad87ec0b92b38940e7c79b261f0ce0e4d7ec9b588d57d8709->enter($__internal_842ae616fe43e59ad87ec0b92b38940e7c79b261f0ce0e4d7ec9b588d57d8709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ac585f2dab9c04238ae81d9752f8e79af6b4666d58f0c6d68e937232429fab83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac585f2dab9c04238ae81d9752f8e79af6b4666d58f0c6d68e937232429fab83->enter($__internal_ac585f2dab9c04238ae81d9752f8e79af6b4666d58f0c6d68e937232429fab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ac585f2dab9c04238ae81d9752f8e79af6b4666d58f0c6d68e937232429fab83->leave($__internal_ac585f2dab9c04238ae81d9752f8e79af6b4666d58f0c6d68e937232429fab83_prof);

        
        $__internal_842ae616fe43e59ad87ec0b92b38940e7c79b261f0ce0e4d7ec9b588d57d8709->leave($__internal_842ae616fe43e59ad87ec0b92b38940e7c79b261f0ce0e4d7ec9b588d57d8709_prof);

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
