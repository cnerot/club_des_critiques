<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_0295c586e62f02a05c3a5d4f854b56de2f1359742b03c6636b56608d1d11224f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0295c586e62f02a05c3a5d4f854b56de2f1359742b03c6636b56608d1d11224f->enter($__internal_0295c586e62f02a05c3a5d4f854b56de2f1359742b03c6636b56608d1d11224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3cf1ecdd125b31753bb8da6f4c5152b93c2ca076e62f692499cb51d0c4807c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf1ecdd125b31753bb8da6f4c5152b93c2ca076e62f692499cb51d0c4807c34->enter($__internal_3cf1ecdd125b31753bb8da6f4c5152b93c2ca076e62f692499cb51d0c4807c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0295c586e62f02a05c3a5d4f854b56de2f1359742b03c6636b56608d1d11224f->leave($__internal_0295c586e62f02a05c3a5d4f854b56de2f1359742b03c6636b56608d1d11224f_prof);

        
        $__internal_3cf1ecdd125b31753bb8da6f4c5152b93c2ca076e62f692499cb51d0c4807c34->leave($__internal_3cf1ecdd125b31753bb8da6f4c5152b93c2ca076e62f692499cb51d0c4807c34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f995789fed12c9650e1406a69f59029d84dad1f4e1695224820e52e4fd45084c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f995789fed12c9650e1406a69f59029d84dad1f4e1695224820e52e4fd45084c->enter($__internal_f995789fed12c9650e1406a69f59029d84dad1f4e1695224820e52e4fd45084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a88476be2832910838e9d6162cdfddab4d32631b21b79f3271aa2066354976b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88476be2832910838e9d6162cdfddab4d32631b21b79f3271aa2066354976b1->enter($__internal_a88476be2832910838e9d6162cdfddab4d32631b21b79f3271aa2066354976b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a88476be2832910838e9d6162cdfddab4d32631b21b79f3271aa2066354976b1->leave($__internal_a88476be2832910838e9d6162cdfddab4d32631b21b79f3271aa2066354976b1_prof);

        
        $__internal_f995789fed12c9650e1406a69f59029d84dad1f4e1695224820e52e4fd45084c->leave($__internal_f995789fed12c9650e1406a69f59029d84dad1f4e1695224820e52e4fd45084c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d09cfcf183ba6fa64cc42a319afda2998fa6846f5b75b777a84222db2c40d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d09cfcf183ba6fa64cc42a319afda2998fa6846f5b75b777a84222db2c40d91->enter($__internal_1d09cfcf183ba6fa64cc42a319afda2998fa6846f5b75b777a84222db2c40d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa10f748105882bad144cfd00b91564938d92a24d1400e9e1bb0e1eaaa49bc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa10f748105882bad144cfd00b91564938d92a24d1400e9e1bb0e1eaaa49bc44->enter($__internal_fa10f748105882bad144cfd00b91564938d92a24d1400e9e1bb0e1eaaa49bc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa10f748105882bad144cfd00b91564938d92a24d1400e9e1bb0e1eaaa49bc44->leave($__internal_fa10f748105882bad144cfd00b91564938d92a24d1400e9e1bb0e1eaaa49bc44_prof);

        
        $__internal_1d09cfcf183ba6fa64cc42a319afda2998fa6846f5b75b777a84222db2c40d91->leave($__internal_1d09cfcf183ba6fa64cc42a319afda2998fa6846f5b75b777a84222db2c40d91_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6cc5ddc2462e88fd5619c733a45b85dc2aea1306ec6238ae1ca685374dd1efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cc5ddc2462e88fd5619c733a45b85dc2aea1306ec6238ae1ca685374dd1efa->enter($__internal_f6cc5ddc2462e88fd5619c733a45b85dc2aea1306ec6238ae1ca685374dd1efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95247134616ef0639e64ebf20dfec55fef754b4c48af13a8698cf642743e254c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95247134616ef0639e64ebf20dfec55fef754b4c48af13a8698cf642743e254c->enter($__internal_95247134616ef0639e64ebf20dfec55fef754b4c48af13a8698cf642743e254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_95247134616ef0639e64ebf20dfec55fef754b4c48af13a8698cf642743e254c->leave($__internal_95247134616ef0639e64ebf20dfec55fef754b4c48af13a8698cf642743e254c_prof);

        
        $__internal_f6cc5ddc2462e88fd5619c733a45b85dc2aea1306ec6238ae1ca685374dd1efa->leave($__internal_f6cc5ddc2462e88fd5619c733a45b85dc2aea1306ec6238ae1ca685374dd1efa_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\club_des_critiques\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
