<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8edf4c7bd80c75d96468d429edbb8cc73d961580ddd9ee269f332f79ca9191c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ab099ecd419d1ae6b8848009529af84321312cd8758852a745f89ea50dadee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab099ecd419d1ae6b8848009529af84321312cd8758852a745f89ea50dadee4->enter($__internal_0ab099ecd419d1ae6b8848009529af84321312cd8758852a745f89ea50dadee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9cce63a1c8fbccf453af268781f5e8475d4f7f411715f82cfb767af51b493f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cce63a1c8fbccf453af268781f5e8475d4f7f411715f82cfb767af51b493f09->enter($__internal_9cce63a1c8fbccf453af268781f5e8475d4f7f411715f82cfb767af51b493f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ab099ecd419d1ae6b8848009529af84321312cd8758852a745f89ea50dadee4->leave($__internal_0ab099ecd419d1ae6b8848009529af84321312cd8758852a745f89ea50dadee4_prof);

        
        $__internal_9cce63a1c8fbccf453af268781f5e8475d4f7f411715f82cfb767af51b493f09->leave($__internal_9cce63a1c8fbccf453af268781f5e8475d4f7f411715f82cfb767af51b493f09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c44fd7034a7282fa8e315e679b9910df297782b8d5b25bdcf582bdb8b3dd7833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44fd7034a7282fa8e315e679b9910df297782b8d5b25bdcf582bdb8b3dd7833->enter($__internal_c44fd7034a7282fa8e315e679b9910df297782b8d5b25bdcf582bdb8b3dd7833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3dd374dcb7a05823c9e74c3358d8c979f367e48c2eb82355055cc3b0ba79842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dd374dcb7a05823c9e74c3358d8c979f367e48c2eb82355055cc3b0ba79842->enter($__internal_b3dd374dcb7a05823c9e74c3358d8c979f367e48c2eb82355055cc3b0ba79842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b3dd374dcb7a05823c9e74c3358d8c979f367e48c2eb82355055cc3b0ba79842->leave($__internal_b3dd374dcb7a05823c9e74c3358d8c979f367e48c2eb82355055cc3b0ba79842_prof);

        
        $__internal_c44fd7034a7282fa8e315e679b9910df297782b8d5b25bdcf582bdb8b3dd7833->leave($__internal_c44fd7034a7282fa8e315e679b9910df297782b8d5b25bdcf582bdb8b3dd7833_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fc5b537f4a12856c98768ef2a61bead296fb017572481d151047988d4d2baae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc5b537f4a12856c98768ef2a61bead296fb017572481d151047988d4d2baae->enter($__internal_9fc5b537f4a12856c98768ef2a61bead296fb017572481d151047988d4d2baae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_859e242aa071b8bc963853b3ed4d2a125f591a78e9624dc1d415e07080d2a72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859e242aa071b8bc963853b3ed4d2a125f591a78e9624dc1d415e07080d2a72a->enter($__internal_859e242aa071b8bc963853b3ed4d2a125f591a78e9624dc1d415e07080d2a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_859e242aa071b8bc963853b3ed4d2a125f591a78e9624dc1d415e07080d2a72a->leave($__internal_859e242aa071b8bc963853b3ed4d2a125f591a78e9624dc1d415e07080d2a72a_prof);

        
        $__internal_9fc5b537f4a12856c98768ef2a61bead296fb017572481d151047988d4d2baae->leave($__internal_9fc5b537f4a12856c98768ef2a61bead296fb017572481d151047988d4d2baae_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c193294662a5c5f5280d1b0c6be6914ce080e4e1bcca7e07796bcd6b10d0bc49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c193294662a5c5f5280d1b0c6be6914ce080e4e1bcca7e07796bcd6b10d0bc49->enter($__internal_c193294662a5c5f5280d1b0c6be6914ce080e4e1bcca7e07796bcd6b10d0bc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0889452fa1415b3662230db5b573472fa011e285b776af091174d99cf1b80eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0889452fa1415b3662230db5b573472fa011e285b776af091174d99cf1b80eca->enter($__internal_0889452fa1415b3662230db5b573472fa011e285b776af091174d99cf1b80eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0889452fa1415b3662230db5b573472fa011e285b776af091174d99cf1b80eca->leave($__internal_0889452fa1415b3662230db5b573472fa011e285b776af091174d99cf1b80eca_prof);

        
        $__internal_c193294662a5c5f5280d1b0c6be6914ce080e4e1bcca7e07796bcd6b10d0bc49->leave($__internal_c193294662a5c5f5280d1b0c6be6914ce080e4e1bcca7e07796bcd6b10d0bc49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/esgi-iw1-2017/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
