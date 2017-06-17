<?php

/* home/index.html.twig */
class __TwigTemplate_fe23e003a66ed5f8d47f1196c0464274db6d7515d06939465ca2b9cafd9d3dc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $__internal_b70372a18450708ff77fe933c3253f0c5a37ae3759aa36bfc1f4a4e22a3b40ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b70372a18450708ff77fe933c3253f0c5a37ae3759aa36bfc1f4a4e22a3b40ba->enter($__internal_b70372a18450708ff77fe933c3253f0c5a37ae3759aa36bfc1f4a4e22a3b40ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_7db70fc49359a8f24e8a18642830153613366b46902af88be67cb5aa9d4043c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db70fc49359a8f24e8a18642830153613366b46902af88be67cb5aa9d4043c2->enter($__internal_7db70fc49359a8f24e8a18642830153613366b46902af88be67cb5aa9d4043c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70372a18450708ff77fe933c3253f0c5a37ae3759aa36bfc1f4a4e22a3b40ba->leave($__internal_b70372a18450708ff77fe933c3253f0c5a37ae3759aa36bfc1f4a4e22a3b40ba_prof);

        
        $__internal_7db70fc49359a8f24e8a18642830153613366b46902af88be67cb5aa9d4043c2->leave($__internal_7db70fc49359a8f24e8a18642830153613366b46902af88be67cb5aa9d4043c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_48a545623d38bcfd4f807b14aaf48157efefb0e342f577f28aef8e86056c92ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a545623d38bcfd4f807b14aaf48157efefb0e342f577f28aef8e86056c92ba->enter($__internal_48a545623d38bcfd4f807b14aaf48157efefb0e342f577f28aef8e86056c92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_233c56a2d363282e7d6b0186b3cce72de16c29b03efbcca208c3c6e1ef6762c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233c56a2d363282e7d6b0186b3cce72de16c29b03efbcca208c3c6e1ef6762c5->enter($__internal_233c56a2d363282e7d6b0186b3cce72de16c29b03efbcca208c3c6e1ef6762c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"card\">
                <div class=\"card-content\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), 'form_start');
        echo "
                        <div class=\"left-align\">
                            <p>Inscrez-vous :</p><br>
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), 'rest');
        echo "
                        </div>
                        <div class=\"right-align\">
                            <button class=\"btn waves-effect waves-light\" type=\"submit\">Ok</button>
                        </div>
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_233c56a2d363282e7d6b0186b3cce72de16c29b03efbcca208c3c6e1ef6762c5->leave($__internal_233c56a2d363282e7d6b0186b3cce72de16c29b03efbcca208c3c6e1ef6762c5_prof);

        
        $__internal_48a545623d38bcfd4f807b14aaf48157efefb0e342f577f28aef8e86056c92ba->leave($__internal_48a545623d38bcfd4f807b14aaf48157efefb0e342f577f28aef8e86056c92ba_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  72 => 22,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
            <div class=\"card\">
                <div class=\"card-content\">
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
        </div>
    </div>
    
{% endblock %}

", "home/index.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\home\\index.html.twig");
    }
}
