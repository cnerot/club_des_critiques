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
        $__internal_b2856529ad08a7e532fc6789fa7b49355985dd33494a10f4681f873de8221d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2856529ad08a7e532fc6789fa7b49355985dd33494a10f4681f873de8221d0e->enter($__internal_b2856529ad08a7e532fc6789fa7b49355985dd33494a10f4681f873de8221d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_564ac61026ebd3eb86b985e8f89d5c5a453ae530452086971c34c2bc026b7f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564ac61026ebd3eb86b985e8f89d5c5a453ae530452086971c34c2bc026b7f68->enter($__internal_564ac61026ebd3eb86b985e8f89d5c5a453ae530452086971c34c2bc026b7f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2856529ad08a7e532fc6789fa7b49355985dd33494a10f4681f873de8221d0e->leave($__internal_b2856529ad08a7e532fc6789fa7b49355985dd33494a10f4681f873de8221d0e_prof);

        
        $__internal_564ac61026ebd3eb86b985e8f89d5c5a453ae530452086971c34c2bc026b7f68->leave($__internal_564ac61026ebd3eb86b985e8f89d5c5a453ae530452086971c34c2bc026b7f68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f19b726287a426b7acf88c94b2a800446bfd130ffe8f93950aec830cdcb7e7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19b726287a426b7acf88c94b2a800446bfd130ffe8f93950aec830cdcb7e7a3->enter($__internal_f19b726287a426b7acf88c94b2a800446bfd130ffe8f93950aec830cdcb7e7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aa9dfee7e3fc5fac50d599df3ea3f2335cf5f6c899a734bd5922d6e52343aaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9dfee7e3fc5fac50d599df3ea3f2335cf5f6c899a734bd5922d6e52343aaee->enter($__internal_aa9dfee7e3fc5fac50d599df3ea3f2335cf5f6c899a734bd5922d6e52343aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aa9dfee7e3fc5fac50d599df3ea3f2335cf5f6c899a734bd5922d6e52343aaee->leave($__internal_aa9dfee7e3fc5fac50d599df3ea3f2335cf5f6c899a734bd5922d6e52343aaee_prof);

        
        $__internal_f19b726287a426b7acf88c94b2a800446bfd130ffe8f93950aec830cdcb7e7a3->leave($__internal_f19b726287a426b7acf88c94b2a800446bfd130ffe8f93950aec830cdcb7e7a3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_466162d4b9f024ff35860c99c76a7dcc6cf79990e10daf065d1d6b854af4d36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466162d4b9f024ff35860c99c76a7dcc6cf79990e10daf065d1d6b854af4d36c->enter($__internal_466162d4b9f024ff35860c99c76a7dcc6cf79990e10daf065d1d6b854af4d36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dacbdda4e803d1e4a28be6aee58bc96df71627ae8f445d15d379b001af91fa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dacbdda4e803d1e4a28be6aee58bc96df71627ae8f445d15d379b001af91fa5b->enter($__internal_dacbdda4e803d1e4a28be6aee58bc96df71627ae8f445d15d379b001af91fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_dacbdda4e803d1e4a28be6aee58bc96df71627ae8f445d15d379b001af91fa5b->leave($__internal_dacbdda4e803d1e4a28be6aee58bc96df71627ae8f445d15d379b001af91fa5b_prof);

        
        $__internal_466162d4b9f024ff35860c99c76a7dcc6cf79990e10daf065d1d6b854af4d36c->leave($__internal_466162d4b9f024ff35860c99c76a7dcc6cf79990e10daf065d1d6b854af4d36c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3af056e045085366d08792d2f8e131d4258781d217a1a4e82fd6fab26e42bb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af056e045085366d08792d2f8e131d4258781d217a1a4e82fd6fab26e42bb5e->enter($__internal_3af056e045085366d08792d2f8e131d4258781d217a1a4e82fd6fab26e42bb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bcef1dbdd22dca2be0ea7c10cf41d8defb683cb1956fde3a382936501d38f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bcef1dbdd22dca2be0ea7c10cf41d8defb683cb1956fde3a382936501d38f40->enter($__internal_4bcef1dbdd22dca2be0ea7c10cf41d8defb683cb1956fde3a382936501d38f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4bcef1dbdd22dca2be0ea7c10cf41d8defb683cb1956fde3a382936501d38f40->leave($__internal_4bcef1dbdd22dca2be0ea7c10cf41d8defb683cb1956fde3a382936501d38f40_prof);

        
        $__internal_3af056e045085366d08792d2f8e131d4258781d217a1a4e82fd6fab26e42bb5e->leave($__internal_3af056e045085366d08792d2f8e131d4258781d217a1a4e82fd6fab26e42bb5e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
