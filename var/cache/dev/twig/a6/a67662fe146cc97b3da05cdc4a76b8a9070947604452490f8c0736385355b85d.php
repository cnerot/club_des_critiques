<?php

/* membre\profil.html.twig */
class __TwigTemplate_b1f221edb6c7eaa764fee5b2e6ebc068e4dc2015bf872d408956ffd93039a9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "membre\\profil.html.twig", 1);
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
        $__internal_0e8ab93302c4e88c5be4c25bfce6c6a875639e689b74720806ead5d77504fee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8ab93302c4e88c5be4c25bfce6c6a875639e689b74720806ead5d77504fee5->enter($__internal_0e8ab93302c4e88c5be4c25bfce6c6a875639e689b74720806ead5d77504fee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre\\profil.html.twig"));

        $__internal_394322c097fea74db4c05321f34c15806e2b1bdaa3a044e801408c2e847b4971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_394322c097fea74db4c05321f34c15806e2b1bdaa3a044e801408c2e847b4971->enter($__internal_394322c097fea74db4c05321f34c15806e2b1bdaa3a044e801408c2e847b4971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "membre\\profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8ab93302c4e88c5be4c25bfce6c6a875639e689b74720806ead5d77504fee5->leave($__internal_0e8ab93302c4e88c5be4c25bfce6c6a875639e689b74720806ead5d77504fee5_prof);

        
        $__internal_394322c097fea74db4c05321f34c15806e2b1bdaa3a044e801408c2e847b4971->leave($__internal_394322c097fea74db4c05321f34c15806e2b1bdaa3a044e801408c2e847b4971_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d3470fc6d6504d1e7925bd84274cac13092772784fb2faba5da192958af33d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d3470fc6d6504d1e7925bd84274cac13092772784fb2faba5da192958af33d->enter($__internal_06d3470fc6d6504d1e7925bd84274cac13092772784fb2faba5da192958af33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ff13e0cad412f1c71c0727b0fea178eb6df3398f0125a1304660f3ef26e8534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff13e0cad412f1c71c0727b0fea178eb6df3398f0125a1304660f3ef26e8534->enter($__internal_2ff13e0cad412f1c71c0727b0fea178eb6df3398f0125a1304660f3ef26e8534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"wrapper\">
            <div id=\"status\">
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </p>
            </div>
    </div>

";
        
        $__internal_2ff13e0cad412f1c71c0727b0fea178eb6df3398f0125a1304660f3ef26e8534->leave($__internal_2ff13e0cad412f1c71c0727b0fea178eb6df3398f0125a1304660f3ef26e8534_prof);

        
        $__internal_06d3470fc6d6504d1e7925bd84274cac13092772784fb2faba5da192958af33d->leave($__internal_06d3470fc6d6504d1e7925bd84274cac13092772784fb2faba5da192958af33d_prof);

    }

    public function getTemplateName()
    {
        return "membre\\profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"wrapper\">
            <div id=\"status\">
                <p>
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </p>
            </div>
    </div>

{% endblock %}

", "membre\\profil.html.twig", "/var/www/html/esgi-iw1-2017/app/Resources/views/membre/profil.html.twig");
    }
}
