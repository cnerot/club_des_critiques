<?php

/* mail/mail.html.twig */
class __TwigTemplate_9a58f5f5a3bf23cdd98073d03f8415686933583d5868c7c7659236a46f025e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mail/mail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e528200fae4e70c4bb3b55c8614f7a36f8f01774f8b86fcdf191ed7d886c4a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e528200fae4e70c4bb3b55c8614f7a36f8f01774f8b86fcdf191ed7d886c4a0b->enter($__internal_e528200fae4e70c4bb3b55c8614f7a36f8f01774f8b86fcdf191ed7d886c4a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail/mail.html.twig"));

        $__internal_ff429f2320260546537595ca6dce8650e3c3a3adb090fa9d816a4984c97756ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff429f2320260546537595ca6dce8650e3c3a3adb090fa9d816a4984c97756ce->enter($__internal_ff429f2320260546537595ca6dce8650e3c3a3adb090fa9d816a4984c97756ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mail/mail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e528200fae4e70c4bb3b55c8614f7a36f8f01774f8b86fcdf191ed7d886c4a0b->leave($__internal_e528200fae4e70c4bb3b55c8614f7a36f8f01774f8b86fcdf191ed7d886c4a0b_prof);

        
        $__internal_ff429f2320260546537595ca6dce8650e3c3a3adb090fa9d816a4984c97756ce->leave($__internal_ff429f2320260546537595ca6dce8650e3c3a3adb090fa9d816a4984c97756ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b43bd748a244d4ba8893601bf6be8a99c7226daea60a6318949d12f51e3a136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b43bd748a244d4ba8893601bf6be8a99c7226daea60a6318949d12f51e3a136->enter($__internal_5b43bd748a244d4ba8893601bf6be8a99c7226daea60a6318949d12f51e3a136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ee81fa9d10315e9d71b5e7d596e4fbd64bcbf1cbd9744972c605a7e4e77fd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee81fa9d10315e9d71b5e7d596e4fbd64bcbf1cbd9744972c605a7e4e77fd70->enter($__internal_5ee81fa9d10315e9d71b5e7d596e4fbd64bcbf1cbd9744972c605a7e4e77fd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "   Envoyer un message
";
        
        $__internal_5ee81fa9d10315e9d71b5e7d596e4fbd64bcbf1cbd9744972c605a7e4e77fd70->leave($__internal_5ee81fa9d10315e9d71b5e7d596e4fbd64bcbf1cbd9744972c605a7e4e77fd70_prof);

        
        $__internal_5b43bd748a244d4ba8893601bf6be8a99c7226daea60a6318949d12f51e3a136->leave($__internal_5b43bd748a244d4ba8893601bf6be8a99c7226daea60a6318949d12f51e3a136_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c69fad8f5272539617a8cadccd5e70591691ea22dd953f8d706d555bbfd02d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69fad8f5272539617a8cadccd5e70591691ea22dd953f8d706d555bbfd02d5f->enter($__internal_c69fad8f5272539617a8cadccd5e70591691ea22dd953f8d706d555bbfd02d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d15f9caaffb0a32f33632ae005a75a86effe1c2948c62cba305a5d4cd2c5d0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15f9caaffb0a32f33632ae005a75a86effe1c2948c62cba305a5d4cd2c5d0bb->enter($__internal_d15f9caaffb0a32f33632ae005a75a86effe1c2948c62cba305a5d4cd2c5d0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <div class=\"right\">
                    <button class=\"btn-large\" type=\"submit\">Envoyer</button>
                </div>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_d15f9caaffb0a32f33632ae005a75a86effe1c2948c62cba305a5d4cd2c5d0bb->leave($__internal_d15f9caaffb0a32f33632ae005a75a86effe1c2948c62cba305a5d4cd2c5d0bb_prof);

        
        $__internal_c69fad8f5272539617a8cadccd5e70591691ea22dd953f8d706d555bbfd02d5f->leave($__internal_c69fad8f5272539617a8cadccd5e70591691ea22dd953f8d706d555bbfd02d5f_prof);

    }

    public function getTemplateName()
    {
        return "mail/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 15,  78 => 11,  74 => 10,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
   Envoyer un message
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {{ form_start(form) }}
                {{ form_rest(form) }}
                <div class=\"right\">
                    <button class=\"btn-large\" type=\"submit\">Envoyer</button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "mail/mail.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\mail\\mail.html.twig");
    }
}
