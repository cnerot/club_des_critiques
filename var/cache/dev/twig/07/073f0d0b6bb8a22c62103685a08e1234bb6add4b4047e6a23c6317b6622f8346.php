<?php

/* base.html.twig */
class __TwigTemplate_12a9784906875215e0dff72fbea6a70a80828e4aa3365ff25286dac4ee04c2cf extends Twig_Template
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
        $__internal_dc95af64592a90d2344296bd6003d399e40c1be0ebb11dda97296e19f35bf83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc95af64592a90d2344296bd6003d399e40c1be0ebb11dda97296e19f35bf83a->enter($__internal_dc95af64592a90d2344296bd6003d399e40c1be0ebb11dda97296e19f35bf83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bdc5f2da4bc18eebde694eb35af45e5e125633b438069604f871ebd3da1777e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc5f2da4bc18eebde694eb35af45e5e125633b438069604f871ebd3da1777e6->enter($__internal_bdc5f2da4bc18eebde694eb35af45e5e125633b438069604f871ebd3da1777e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

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
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\">
                </a>
                    <div class=\"right\">
                        <a href=\"#oModal\" id=\"\">
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
<div id=\"oModal\" class=\"oModal\">
  <div>
    <header>
      <a href=\"#fermer\" title=\"Fermer la fenêtre\" class=\"droite\">X</a>
     </header>
     <section>
           ";
        // line 99
        $this->loadTemplate("membre/login.html.twig", "base.html.twig", 99)->display($context);
        // line 100
        echo "     </section>
  </div>
</div>


";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 107
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
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "    </body>
</html>
";
        
        $__internal_dc95af64592a90d2344296bd6003d399e40c1be0ebb11dda97296e19f35bf83a->leave($__internal_dc95af64592a90d2344296bd6003d399e40c1be0ebb11dda97296e19f35bf83a_prof);

        
        $__internal_bdc5f2da4bc18eebde694eb35af45e5e125633b438069604f871ebd3da1777e6->leave($__internal_bdc5f2da4bc18eebde694eb35af45e5e125633b438069604f871ebd3da1777e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3545204dbadc581e2ed90c3c14ce087144d2dac24fb1a3592987d4431321b43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3545204dbadc581e2ed90c3c14ce087144d2dac24fb1a3592987d4431321b43f->enter($__internal_3545204dbadc581e2ed90c3c14ce087144d2dac24fb1a3592987d4431321b43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fd5967bf91028683352b75ec82aba793d66aa5bd4f60444a91c4d08b750878a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd5967bf91028683352b75ec82aba793d66aa5bd4f60444a91c4d08b750878a->enter($__internal_3fd5967bf91028683352b75ec82aba793d66aa5bd4f60444a91c4d08b750878a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club des critiques";
        
        $__internal_3fd5967bf91028683352b75ec82aba793d66aa5bd4f60444a91c4d08b750878a->leave($__internal_3fd5967bf91028683352b75ec82aba793d66aa5bd4f60444a91c4d08b750878a_prof);

        
        $__internal_3545204dbadc581e2ed90c3c14ce087144d2dac24fb1a3592987d4431321b43f->leave($__internal_3545204dbadc581e2ed90c3c14ce087144d2dac24fb1a3592987d4431321b43f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c72b5d8b6f72fd2359dafff8b7bfa856269d31e3851d2f80d2cd4eb537ab2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c72b5d8b6f72fd2359dafff8b7bfa856269d31e3851d2f80d2cd4eb537ab2f2->enter($__internal_1c72b5d8b6f72fd2359dafff8b7bfa856269d31e3851d2f80d2cd4eb537ab2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_016bd01fb707009496096595e61757755ec800050e05d1b342d12e0c51ed918e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016bd01fb707009496096595e61757755ec800050e05d1b342d12e0c51ed918e->enter($__internal_016bd01fb707009496096595e61757755ec800050e05d1b342d12e0c51ed918e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/salons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/salon.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_016bd01fb707009496096595e61757755ec800050e05d1b342d12e0c51ed918e->leave($__internal_016bd01fb707009496096595e61757755ec800050e05d1b342d12e0c51ed918e_prof);

        
        $__internal_1c72b5d8b6f72fd2359dafff8b7bfa856269d31e3851d2f80d2cd4eb537ab2f2->leave($__internal_1c72b5d8b6f72fd2359dafff8b7bfa856269d31e3851d2f80d2cd4eb537ab2f2_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a2efe5f8463796740d3cc47aa6448bffb1af0639bdd31682885be0477f9dfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2efe5f8463796740d3cc47aa6448bffb1af0639bdd31682885be0477f9dfb1->enter($__internal_7a2efe5f8463796740d3cc47aa6448bffb1af0639bdd31682885be0477f9dfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_655f7f1b58369dc60fe16b8d9adc85ff92b230d15c87c17a2cf4c085cffe269e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655f7f1b58369dc60fe16b8d9adc85ff92b230d15c87c17a2cf4c085cffe269e->enter($__internal_655f7f1b58369dc60fe16b8d9adc85ff92b230d15c87c17a2cf4c085cffe269e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "
";
        
        $__internal_655f7f1b58369dc60fe16b8d9adc85ff92b230d15c87c17a2cf4c085cffe269e->leave($__internal_655f7f1b58369dc60fe16b8d9adc85ff92b230d15c87c17a2cf4c085cffe269e_prof);

        
        $__internal_7a2efe5f8463796740d3cc47aa6448bffb1af0639bdd31682885be0477f9dfb1->leave($__internal_7a2efe5f8463796740d3cc47aa6448bffb1af0639bdd31682885be0477f9dfb1_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d953de3fb642db499f3d034619d0b498c297126bef3b319f178a05bf1a7dcbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d953de3fb642db499f3d034619d0b498c297126bef3b319f178a05bf1a7dcbc->enter($__internal_7d953de3fb642db499f3d034619d0b498c297126bef3b319f178a05bf1a7dcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ecf9c1588e7b54ed0b984bafc55af6a83c16695e1743b8fe262b22d28365f934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf9c1588e7b54ed0b984bafc55af6a83c16695e1743b8fe262b22d28365f934->enter($__internal_ecf9c1588e7b54ed0b984bafc55af6a83c16695e1743b8fe262b22d28365f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/init.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/salons.js"), "html", null, true);
        echo "\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
\t\t\t<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
        ";
        
        $__internal_ecf9c1588e7b54ed0b984bafc55af6a83c16695e1743b8fe262b22d28365f934->leave($__internal_ecf9c1588e7b54ed0b984bafc55af6a83c16695e1743b8fe262b22d28365f934_prof);

        
        $__internal_7d953de3fb642db499f3d034619d0b498c297126bef3b319f178a05bf1a7dcbc->leave($__internal_7d953de3fb642db499f3d034619d0b498c297126bef3b319f178a05bf1a7dcbc_prof);

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
        return array (  280 => 134,  276 => 133,  272 => 132,  267 => 131,  258 => 130,  247 => 106,  238 => 105,  226 => 11,  222 => 10,  218 => 9,  214 => 8,  211 => 7,  202 => 6,  184 => 5,  172 => 138,  170 => 130,  145 => 107,  143 => 105,  136 => 100,  134 => 99,  101 => 69,  41 => 13,  39 => 6,  35 => 5,  29 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ asset('css/salons.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/salon.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

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
                    <div class=\"right\">
                        <a href=\"#oModal\" id=\"\">
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
<div id=\"oModal\" class=\"oModal\">
  <div>
    <header>
      <a href=\"#fermer\" title=\"Fermer la fenêtre\" class=\"droite\">X</a>
     </header>
     <section>
           {% include 'membre/login.html.twig'  %}
     </section>
  </div>
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
            <script src=\"{{ asset('js/salons.js') }}\"></script>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.15/css/jquery.dataTables.css\">
\t\t\t<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.15/js/jquery.dataTables.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/club_des_critiques/app/Resources/views/base.html.twig");
    }
}
