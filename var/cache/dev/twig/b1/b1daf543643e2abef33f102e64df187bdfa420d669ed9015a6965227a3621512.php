<?php

/* home\index.html.twig */
class __TwigTemplate_edcff0ee1f4729c11f6df5d1ee3fac3002707f4f1fbee9207ce4c5fac2c08ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home\\index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_051c884b596d61db0048d428fd3990e713f6ca305ce692d5b4538d6dd5dd4d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051c884b596d61db0048d428fd3990e713f6ca305ce692d5b4538d6dd5dd4d84->enter($__internal_051c884b596d61db0048d428fd3990e713f6ca305ce692d5b4538d6dd5dd4d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home\\index.html.twig"));

        $__internal_4205b741b848fcb4d36d3104a96218a44f67f0afa2a4cdae13990257c7a81839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4205b741b848fcb4d36d3104a96218a44f67f0afa2a4cdae13990257c7a81839->enter($__internal_4205b741b848fcb4d36d3104a96218a44f67f0afa2a4cdae13990257c7a81839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_051c884b596d61db0048d428fd3990e713f6ca305ce692d5b4538d6dd5dd4d84->leave($__internal_051c884b596d61db0048d428fd3990e713f6ca305ce692d5b4538d6dd5dd4d84_prof);

        
        $__internal_4205b741b848fcb4d36d3104a96218a44f67f0afa2a4cdae13990257c7a81839->leave($__internal_4205b741b848fcb4d36d3104a96218a44f67f0afa2a4cdae13990257c7a81839_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bec7350789d64b732e6a60f6d3aac368d9b0ad7aebcab32f4460e0927359d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bec7350789d64b732e6a60f6d3aac368d9b0ad7aebcab32f4460e0927359d3f->enter($__internal_0bec7350789d64b732e6a60f6d3aac368d9b0ad7aebcab32f4460e0927359d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9236c09b850d56f3a7a689cdcd186cb3dd043574640e280a373ae1e2ec80304a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9236c09b850d56f3a7a689cdcd186cb3dd043574640e280a373ae1e2ec80304a->enter($__internal_9236c09b850d56f3a7a689cdcd186cb3dd043574640e280a373ae1e2ec80304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"row\">
        <div class=\"col s8\">
           <div class=\"myContainer justify\">
                <div id=\"\">
                    <p>
                       Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                    </p>
                </div>
           </div>
        </div>
        <div  class=\"col s4 right-align\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 17, $this->getSourceContext()); })()), 'form_start');
        echo "
                <div class=\"left-align\">
                    <p>Inscrez-vous :</p><br>
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 20, $this->getSourceContext()); })()), 'rest');
        echo "
                </div>
                <div class=\"right-align\">
                    <button class=\"btn waves-effect waves-light\" type=\"submit\">Ok</button>
                </div>
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new Twig_Error_Runtime('Variable "email" does not exist.', 25, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
    
";
        
        $__internal_9236c09b850d56f3a7a689cdcd186cb3dd043574640e280a373ae1e2ec80304a->leave($__internal_9236c09b850d56f3a7a689cdcd186cb3dd043574640e280a373ae1e2ec80304a_prof);

        
        $__internal_0bec7350789d64b732e6a60f6d3aac368d9b0ad7aebcab32f4460e0927359d3f->leave($__internal_0bec7350789d64b732e6a60f6d3aac368d9b0ad7aebcab32f4460e0927359d3f_prof);

    }

    public function getTemplateName()
    {
        return "home\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  70 => 20,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


    <div class=\"row\">
        <div class=\"col s8\">
           <div class=\"myContainer justify\">
                <div id=\"\">
                    <p>
                       Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                    </p>
                </div>
           </div>
        </div>
        <div  class=\"col s4 right-align\">
            {{ form_start(email) }}
                <div class=\"left-align\">
                    <p>Inscrez-vous :</p><br>
                    {{ form_rest(email)}}
                </div>
                <div class=\"right-align\">
                    <button class=\"btn waves-effect waves-light\" type=\"submit\">Ok</button>
                </div>
            {{ form_end(email)}}
        </div>
    </div>
    
{% endblock %}

", "home\\index.html.twig", "/var/www/html/esgi-iw1-2017/app/Resources/views/home/index.html.twig");
    }
}
