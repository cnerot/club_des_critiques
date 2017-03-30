<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd71e4f65de737d2928610f9d876eeb51d0cc44f5eedb31b6712c1cf7dfac75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd71e4f65de737d2928610f9d876eeb51d0cc44f5eedb31b6712c1cf7dfac75->enter($__internal_9cd71e4f65de737d2928610f9d876eeb51d0cc44f5eedb31b6712c1cf7dfac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b234109e78661219739dd7e535d5a9dd388c26a045ddbdd496bce857ddfccc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b234109e78661219739dd7e535d5a9dd388c26a045ddbdd496bce857ddfccc56->enter($__internal_b234109e78661219739dd7e535d5a9dd388c26a045ddbdd496bce857ddfccc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9cd71e4f65de737d2928610f9d876eeb51d0cc44f5eedb31b6712c1cf7dfac75->leave($__internal_9cd71e4f65de737d2928610f9d876eeb51d0cc44f5eedb31b6712c1cf7dfac75_prof);

        
        $__internal_b234109e78661219739dd7e535d5a9dd388c26a045ddbdd496bce857ddfccc56->leave($__internal_b234109e78661219739dd7e535d5a9dd388c26a045ddbdd496bce857ddfccc56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a556a31a1fe0d37d76b4678e7967ca9bdc7724c56d2d8bb5137c6866cd0704c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a556a31a1fe0d37d76b4678e7967ca9bdc7724c56d2d8bb5137c6866cd0704c5->enter($__internal_a556a31a1fe0d37d76b4678e7967ca9bdc7724c56d2d8bb5137c6866cd0704c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_558b31bfd43194c8fe19bbfe1d968f4d24f649f5cfb428700fdaf6a42b90d1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558b31bfd43194c8fe19bbfe1d968f4d24f649f5cfb428700fdaf6a42b90d1bf->enter($__internal_558b31bfd43194c8fe19bbfe1d968f4d24f649f5cfb428700fdaf6a42b90d1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_558b31bfd43194c8fe19bbfe1d968f4d24f649f5cfb428700fdaf6a42b90d1bf->leave($__internal_558b31bfd43194c8fe19bbfe1d968f4d24f649f5cfb428700fdaf6a42b90d1bf_prof);

        
        $__internal_a556a31a1fe0d37d76b4678e7967ca9bdc7724c56d2d8bb5137c6866cd0704c5->leave($__internal_a556a31a1fe0d37d76b4678e7967ca9bdc7724c56d2d8bb5137c6866cd0704c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_556df80758a9eb0ecee8ac68e450ddaa581298a8804b6cd46c11d1de9e1197a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556df80758a9eb0ecee8ac68e450ddaa581298a8804b6cd46c11d1de9e1197a8->enter($__internal_556df80758a9eb0ecee8ac68e450ddaa581298a8804b6cd46c11d1de9e1197a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_40cee0893dd9892dc57d15882ac3e74b796f70b21b860fc16b7cb80c5e807539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40cee0893dd9892dc57d15882ac3e74b796f70b21b860fc16b7cb80c5e807539->enter($__internal_40cee0893dd9892dc57d15882ac3e74b796f70b21b860fc16b7cb80c5e807539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_40cee0893dd9892dc57d15882ac3e74b796f70b21b860fc16b7cb80c5e807539->leave($__internal_40cee0893dd9892dc57d15882ac3e74b796f70b21b860fc16b7cb80c5e807539_prof);

        
        $__internal_556df80758a9eb0ecee8ac68e450ddaa581298a8804b6cd46c11d1de9e1197a8->leave($__internal_556df80758a9eb0ecee8ac68e450ddaa581298a8804b6cd46c11d1de9e1197a8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_12c1202b0453cd0a1734a23a574477101ffb8b6235678c4f79fb754522a1d1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c1202b0453cd0a1734a23a574477101ffb8b6235678c4f79fb754522a1d1e6->enter($__internal_12c1202b0453cd0a1734a23a574477101ffb8b6235678c4f79fb754522a1d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bcdf8fc0d6d777a856fe58c962e7b9f8ea78b759ecba94d22d73ff8a1be3dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcdf8fc0d6d777a856fe58c962e7b9f8ea78b759ecba94d22d73ff8a1be3dd9->enter($__internal_1bcdf8fc0d6d777a856fe58c962e7b9f8ea78b759ecba94d22d73ff8a1be3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1bcdf8fc0d6d777a856fe58c962e7b9f8ea78b759ecba94d22d73ff8a1be3dd9->leave($__internal_1bcdf8fc0d6d777a856fe58c962e7b9f8ea78b759ecba94d22d73ff8a1be3dd9_prof);

        
        $__internal_12c1202b0453cd0a1734a23a574477101ffb8b6235678c4f79fb754522a1d1e6->leave($__internal_12c1202b0453cd0a1734a23a574477101ffb8b6235678c4f79fb754522a1d1e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06ce39c9cf128fa619e6ae091ce31279dbbada3a9e1fdbeffb774eff927c6282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ce39c9cf128fa619e6ae091ce31279dbbada3a9e1fdbeffb774eff927c6282->enter($__internal_06ce39c9cf128fa619e6ae091ce31279dbbada3a9e1fdbeffb774eff927c6282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_baa855a1c6e460518f5595a6e797e6179f62f8863f4857f46406f7e30696ce42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa855a1c6e460518f5595a6e797e6179f62f8863f4857f46406f7e30696ce42->enter($__internal_baa855a1c6e460518f5595a6e797e6179f62f8863f4857f46406f7e30696ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_baa855a1c6e460518f5595a6e797e6179f62f8863f4857f46406f7e30696ce42->leave($__internal_baa855a1c6e460518f5595a6e797e6179f62f8863f4857f46406f7e30696ce42_prof);

        
        $__internal_06ce39c9cf128fa619e6ae091ce31279dbbada3a9e1fdbeffb774eff927c6282->leave($__internal_06ce39c9cf128fa619e6ae091ce31279dbbada3a9e1fdbeffb774eff927c6282_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/clubCritique/app/Resources/views/base.html.twig");
    }
}
