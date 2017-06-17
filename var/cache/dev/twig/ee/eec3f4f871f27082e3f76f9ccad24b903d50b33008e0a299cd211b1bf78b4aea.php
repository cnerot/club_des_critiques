<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
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
        $__internal_b9413a268c19d5cb61a9393a43cdcd8f56001a3148d462264b19ea85c3df6b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9413a268c19d5cb61a9393a43cdcd8f56001a3148d462264b19ea85c3df6b7f->enter($__internal_b9413a268c19d5cb61a9393a43cdcd8f56001a3148d462264b19ea85c3df6b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c314d50a1e865ed7d56ee2f594b81fe2d1032c98ddcb67c54e04ca4a1617d0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c314d50a1e865ed7d56ee2f594b81fe2d1032c98ddcb67c54e04ca4a1617d0d2->enter($__internal_c314d50a1e865ed7d56ee2f594b81fe2d1032c98ddcb67c54e04ca4a1617d0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div>
        <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li class=\"divider\"><span class=\"yellow-text text-darken-2\"></span></li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
    </ul>
    <ul id=\"dropdown2\" class=\"dropdown-content \">
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li class=\"divider\"><span class=\"\"></span></li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
    </ul>
    <nav class=\"teal lighten-4\" role=\"navigation\">
        <div class=\"nav-wrapper \">
            <div class=\"nav-wrapper container\">
                <a id=\"logo-container\" href=\"/\" class=\"brand-logo\">
                     <img class=\"logo\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
                </a>
                    <div class=\"right padd-left\">
                        <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_all");
        echo "\" id=\"\">
                            <i class=\"material-icons\">people </i> 
                        </a>
                   </div>
                    <div class=\"right padd-left\">
                        <a href=\"\" id=\"\">
                            <i class=\"material-icons\">public </i> 
                        </a>
                   </div>

                    <div class=\"right padd-left\">
                        <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("messagerie_reception");
        echo "\" id=\"\">
                            <i class=\"material-icons\">chat </i> 
                        </a>
                    </div>
                    <div class=\"right padd-left\">
                        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("membre_login");
        echo "\" id=\"\">
                            <i class=\"material-icons\">perm_identity </i> 
                        </a>
                    </div>

                    <ul class=\"right hide-on-med-and-down\">
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrateur<span><i
                                            class=\"material-icons right\">arrow_drop_down</i></a></li>
                    </ul>
                    <ul id=\"nav-mobile\" class=\"side-nav\">
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Admin<i
                                    class=\"material-icons right\">arrow_drop_down</i></a></li>
                    </ul>
                    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\">
                        <i class=\"material-icons\">menu</i>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </nav>
</div>



";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "                    
<footer class=\"page-footer teal lighten-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s10 \">
            </div>
            <div class=\"col s4 right\">
                <ul>
                    <li><a class=\"\" href=\"#!\">CGU </a></li>
                    <li><a class=\"\" href=\"#!\">POLITIQUE DE CONFIDENTUALITE</a></li>
                    <li><a class=\"\" href=\"#!\">Condition d'utilisation</a></li>
                    <li><a class=\"\" href=\"#!\">Régles générales</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Copyright Text
        </div>
    </div>
</footer>

        ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "    </body>
</html>
";
        
        $__internal_b9413a268c19d5cb61a9393a43cdcd8f56001a3148d462264b19ea85c3df6b7f->leave($__internal_b9413a268c19d5cb61a9393a43cdcd8f56001a3148d462264b19ea85c3df6b7f_prof);

        
        $__internal_c314d50a1e865ed7d56ee2f594b81fe2d1032c98ddcb67c54e04ca4a1617d0d2->leave($__internal_c314d50a1e865ed7d56ee2f594b81fe2d1032c98ddcb67c54e04ca4a1617d0d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c3bee65dc80b0d22aed6e116b5911a6a790ffc0a4e6b70783221cca9293b615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3bee65dc80b0d22aed6e116b5911a6a790ffc0a4e6b70783221cca9293b615->enter($__internal_1c3bee65dc80b0d22aed6e116b5911a6a790ffc0a4e6b70783221cca9293b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_81aa4d6d0016f3e5dcaa14cd0f178df554bdf231f8b9f9b9272b4bd17a059725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81aa4d6d0016f3e5dcaa14cd0f178df554bdf231f8b9f9b9272b4bd17a059725->enter($__internal_81aa4d6d0016f3e5dcaa14cd0f178df554bdf231f8b9f9b9272b4bd17a059725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club des critiques";
        
        $__internal_81aa4d6d0016f3e5dcaa14cd0f178df554bdf231f8b9f9b9272b4bd17a059725->leave($__internal_81aa4d6d0016f3e5dcaa14cd0f178df554bdf231f8b9f9b9272b4bd17a059725_prof);

        
        $__internal_1c3bee65dc80b0d22aed6e116b5911a6a790ffc0a4e6b70783221cca9293b615->leave($__internal_1c3bee65dc80b0d22aed6e116b5911a6a790ffc0a4e6b70783221cca9293b615_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e37b9dd6cd81896909bb0ca3f7b0fe8c068369e729816863c3cd4853563feae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e37b9dd6cd81896909bb0ca3f7b0fe8c068369e729816863c3cd4853563feae->enter($__internal_3e37b9dd6cd81896909bb0ca3f7b0fe8c068369e729816863c3cd4853563feae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77929dcbfaf1f5085a98f3f1349954f18fc98b9566ead1ebfcb62da70524ecd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77929dcbfaf1f5085a98f3f1349954f18fc98b9566ead1ebfcb62da70524ecd3->enter($__internal_77929dcbfaf1f5085a98f3f1349954f18fc98b9566ead1ebfcb62da70524ecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_77929dcbfaf1f5085a98f3f1349954f18fc98b9566ead1ebfcb62da70524ecd3->leave($__internal_77929dcbfaf1f5085a98f3f1349954f18fc98b9566ead1ebfcb62da70524ecd3_prof);

        
        $__internal_3e37b9dd6cd81896909bb0ca3f7b0fe8c068369e729816863c3cd4853563feae->leave($__internal_3e37b9dd6cd81896909bb0ca3f7b0fe8c068369e729816863c3cd4853563feae_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7bac047cdca6c8ea4490632a628f93bb646b98aab2a30a7125701da029f018d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bac047cdca6c8ea4490632a628f93bb646b98aab2a30a7125701da029f018d->enter($__internal_c7bac047cdca6c8ea4490632a628f93bb646b98aab2a30a7125701da029f018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14906a5ba1cf14878c5e08caa1e681bfdd969ecb5748beff4a93fe4fba4b565e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14906a5ba1cf14878c5e08caa1e681bfdd969ecb5748beff4a93fe4fba4b565e->enter($__internal_14906a5ba1cf14878c5e08caa1e681bfdd969ecb5748beff4a93fe4fba4b565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 109
        echo "
";
        
        $__internal_14906a5ba1cf14878c5e08caa1e681bfdd969ecb5748beff4a93fe4fba4b565e->leave($__internal_14906a5ba1cf14878c5e08caa1e681bfdd969ecb5748beff4a93fe4fba4b565e_prof);

        
        $__internal_c7bac047cdca6c8ea4490632a628f93bb646b98aab2a30a7125701da029f018d->leave($__internal_c7bac047cdca6c8ea4490632a628f93bb646b98aab2a30a7125701da029f018d_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b5e9fd07f66a563498414cfd9b106e8091ea2312f63f87d52de88387d9fb819a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e9fd07f66a563498414cfd9b106e8091ea2312f63f87d52de88387d9fb819a->enter($__internal_b5e9fd07f66a563498414cfd9b106e8091ea2312f63f87d52de88387d9fb819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd45598ffc677852c74cef0234da5fedc8539b0f95f2de6afaa255773ed61f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd45598ffc677852c74cef0234da5fedc8539b0f95f2de6afaa255773ed61f29->enter($__internal_dd45598ffc677852c74cef0234da5fedc8539b0f95f2de6afaa255773ed61f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_dd45598ffc677852c74cef0234da5fedc8539b0f95f2de6afaa255773ed61f29->leave($__internal_dd45598ffc677852c74cef0234da5fedc8539b0f95f2de6afaa255773ed61f29_prof);

        
        $__internal_b5e9fd07f66a563498414cfd9b106e8091ea2312f63f87d52de88387d9fb819a->leave($__internal_b5e9fd07f66a563498414cfd9b106e8091ea2312f63f87d52de88387d9fb819a_prof);

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
        return array (  279 => 136,  275 => 135,  270 => 134,  261 => 133,  250 => 109,  241 => 108,  229 => 9,  225 => 8,  222 => 7,  213 => 6,  195 => 5,  183 => 138,  181 => 133,  156 => 110,  154 => 108,  126 => 83,  118 => 78,  104 => 67,  98 => 64,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"utf-8\">
        <title>{% block title %}Club des critiques{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div>
        <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li class=\"divider\"><span class=\"yellow-text text-darken-2\"></span></li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
    </ul>
    <ul id=\"dropdown2\" class=\"dropdown-content \">
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li class=\"divider\"><span class=\"\"></span></li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
        <li>
            <a href=\"\">
                <span class=\"\">label</span>
            </a>
        </li>
    </ul>
    <nav class=\"teal lighten-4\" role=\"navigation\">
        <div class=\"nav-wrapper \">
            <div class=\"nav-wrapper container\">
                <a id=\"logo-container\" href=\"/\" class=\"brand-logo\">
                     <img class=\"logo\" src=\"{{ asset('images/logo.png') }}\">
                </a>
                    <div class=\"right padd-left\">
                        <a href=\"{{ path(\"membre_all\")}}\" id=\"\">
                            <i class=\"material-icons\">people </i> 
                        </a>
                   </div>
                    <div class=\"right padd-left\">
                        <a href=\"\" id=\"\">
                            <i class=\"material-icons\">public </i> 
                        </a>
                   </div>

                    <div class=\"right padd-left\">
                        <a href=\"{{ path(\"messagerie_reception\")}}\" id=\"\">
                            <i class=\"material-icons\">chat </i> 
                        </a>
                    </div>
                    <div class=\"right padd-left\">
                        <a href=\"{{ path(\"membre_login\")}}\" id=\"\">
                            <i class=\"material-icons\">perm_identity </i> 
                        </a>
                    </div>

                    <ul class=\"right hide-on-med-and-down\">
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrateur<span><i
                                            class=\"material-icons right\">arrow_drop_down</i></a></li>
                    </ul>
                    <ul id=\"nav-mobile\" class=\"side-nav\">
                        <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown2\">Admin<i
                                    class=\"material-icons right\">arrow_drop_down</i></a></li>
                    </ul>
                    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\">
                        <i class=\"material-icons\">menu</i>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </nav>
</div>



{% block body %}

{% endblock %}                    
<footer class=\"page-footer teal lighten-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col s10 \">
            </div>
            <div class=\"col s4 right\">
                <ul>
                    <li><a class=\"\" href=\"#!\">CGU </a></li>
                    <li><a class=\"\" href=\"#!\">POLITIQUE DE CONFIDENTUALITE</a></li>
                    <li><a class=\"\" href=\"#!\">Condition d'utilisation</a></li>
                    <li><a class=\"\" href=\"#!\">Régles générales</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Copyright Text
        </div>
    </div>
</footer>

        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
            <script src=\"{{ asset('js/materialize.min.js') }}\"></script>
            <script src=\"{{ asset('js/init.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\club_des_critiques\\app\\Resources\\views\\base.html.twig");
    }
}
