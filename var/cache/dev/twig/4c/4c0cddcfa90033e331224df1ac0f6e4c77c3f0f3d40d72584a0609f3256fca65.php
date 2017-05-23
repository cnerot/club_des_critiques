<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_04632e9cdd3f4b597a4bdf4bb157655342a98a23a2b1c1f1f7c715276ea3384c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04632e9cdd3f4b597a4bdf4bb157655342a98a23a2b1c1f1f7c715276ea3384c->enter($__internal_04632e9cdd3f4b597a4bdf4bb157655342a98a23a2b1c1f1f7c715276ea3384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fabb4eb6c8195e8bbcf76512f6e8baf66b2f34c1a418f7c808dbe1c581eb1094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabb4eb6c8195e8bbcf76512f6e8baf66b2f34c1a418f7c808dbe1c581eb1094->enter($__internal_fabb4eb6c8195e8bbcf76512f6e8baf66b2f34c1a418f7c808dbe1c581eb1094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04632e9cdd3f4b597a4bdf4bb157655342a98a23a2b1c1f1f7c715276ea3384c->leave($__internal_04632e9cdd3f4b597a4bdf4bb157655342a98a23a2b1c1f1f7c715276ea3384c_prof);

        
        $__internal_fabb4eb6c8195e8bbcf76512f6e8baf66b2f34c1a418f7c808dbe1c581eb1094->leave($__internal_fabb4eb6c8195e8bbcf76512f6e8baf66b2f34c1a418f7c808dbe1c581eb1094_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a740b24263f0037469612be6b42c8dc2f2e9513ff6d3e25e58b2e15970d09ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a740b24263f0037469612be6b42c8dc2f2e9513ff6d3e25e58b2e15970d09ef->enter($__internal_3a740b24263f0037469612be6b42c8dc2f2e9513ff6d3e25e58b2e15970d09ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2089335c54c560595bc198989d2b8a048a8eb0a0333fcdd9c389563b8172bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2089335c54c560595bc198989d2b8a048a8eb0a0333fcdd9c389563b8172bd2->enter($__internal_e2089335c54c560595bc198989d2b8a048a8eb0a0333fcdd9c389563b8172bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e2089335c54c560595bc198989d2b8a048a8eb0a0333fcdd9c389563b8172bd2->leave($__internal_e2089335c54c560595bc198989d2b8a048a8eb0a0333fcdd9c389563b8172bd2_prof);

        
        $__internal_3a740b24263f0037469612be6b42c8dc2f2e9513ff6d3e25e58b2e15970d09ef->leave($__internal_3a740b24263f0037469612be6b42c8dc2f2e9513ff6d3e25e58b2e15970d09ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17fc7796e056e246b25c4451a7379e065ff30de0bd8a3231ce770025001374a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fc7796e056e246b25c4451a7379e065ff30de0bd8a3231ce770025001374a3->enter($__internal_17fc7796e056e246b25c4451a7379e065ff30de0bd8a3231ce770025001374a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_82f469e697cd6e16586a1ca16804b3a5584d88921c482aa40197883c2b8ccd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f469e697cd6e16586a1ca16804b3a5584d88921c482aa40197883c2b8ccd8c->enter($__internal_82f469e697cd6e16586a1ca16804b3a5584d88921c482aa40197883c2b8ccd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_82f469e697cd6e16586a1ca16804b3a5584d88921c482aa40197883c2b8ccd8c->leave($__internal_82f469e697cd6e16586a1ca16804b3a5584d88921c482aa40197883c2b8ccd8c_prof);

        
        $__internal_17fc7796e056e246b25c4451a7379e065ff30de0bd8a3231ce770025001374a3->leave($__internal_17fc7796e056e246b25c4451a7379e065ff30de0bd8a3231ce770025001374a3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c30bbc59cfe7ff0628524313f941964d782b09200cba2bc9b2cc978e3827b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c30bbc59cfe7ff0628524313f941964d782b09200cba2bc9b2cc978e3827b1f->enter($__internal_7c30bbc59cfe7ff0628524313f941964d782b09200cba2bc9b2cc978e3827b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_633e7d44b3f845ea54e793427c447eb87318cbf9cca56bad6250302368d8c425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633e7d44b3f845ea54e793427c447eb87318cbf9cca56bad6250302368d8c425->enter($__internal_633e7d44b3f845ea54e793427c447eb87318cbf9cca56bad6250302368d8c425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_633e7d44b3f845ea54e793427c447eb87318cbf9cca56bad6250302368d8c425->leave($__internal_633e7d44b3f845ea54e793427c447eb87318cbf9cca56bad6250302368d8c425_prof);

        
        $__internal_7c30bbc59cfe7ff0628524313f941964d782b09200cba2bc9b2cc978e3827b1f->leave($__internal_7c30bbc59cfe7ff0628524313f941964d782b09200cba2bc9b2cc978e3827b1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/club_des_critiques/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
