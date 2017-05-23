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
        $__internal_aefedb5f5adf22741e61142d7e395a23b1433a804b3d4dd19d197af14f2c1975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefedb5f5adf22741e61142d7e395a23b1433a804b3d4dd19d197af14f2c1975->enter($__internal_aefedb5f5adf22741e61142d7e395a23b1433a804b3d4dd19d197af14f2c1975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9342fbb60fd1783124f8b8b98f1bd99a8ab949f805b3763479506ddc12bd36e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9342fbb60fd1783124f8b8b98f1bd99a8ab949f805b3763479506ddc12bd36e2->enter($__internal_9342fbb60fd1783124f8b8b98f1bd99a8ab949f805b3763479506ddc12bd36e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_aefedb5f5adf22741e61142d7e395a23b1433a804b3d4dd19d197af14f2c1975->leave($__internal_aefedb5f5adf22741e61142d7e395a23b1433a804b3d4dd19d197af14f2c1975_prof);

        
        $__internal_9342fbb60fd1783124f8b8b98f1bd99a8ab949f805b3763479506ddc12bd36e2->leave($__internal_9342fbb60fd1783124f8b8b98f1bd99a8ab949f805b3763479506ddc12bd36e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9e5879626dfb935a2e2afe7f9bd394d3d30418fabff51a083df44f2ea719f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e5879626dfb935a2e2afe7f9bd394d3d30418fabff51a083df44f2ea719f67->enter($__internal_b9e5879626dfb935a2e2afe7f9bd394d3d30418fabff51a083df44f2ea719f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3bdb4f6a22c8b5883fa29269b9aec7bfab5fcbfe12c650ed3a4e7288a1fa488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bdb4f6a22c8b5883fa29269b9aec7bfab5fcbfe12c650ed3a4e7288a1fa488->enter($__internal_b3bdb4f6a22c8b5883fa29269b9aec7bfab5fcbfe12c650ed3a4e7288a1fa488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club des critiques";
        
        $__internal_b3bdb4f6a22c8b5883fa29269b9aec7bfab5fcbfe12c650ed3a4e7288a1fa488->leave($__internal_b3bdb4f6a22c8b5883fa29269b9aec7bfab5fcbfe12c650ed3a4e7288a1fa488_prof);

        
        $__internal_b9e5879626dfb935a2e2afe7f9bd394d3d30418fabff51a083df44f2ea719f67->leave($__internal_b9e5879626dfb935a2e2afe7f9bd394d3d30418fabff51a083df44f2ea719f67_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a7115d6df12a91f30f0f3f7c9f85e1b543fbd109cabbe38b8c852cdd3c3c1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a7115d6df12a91f30f0f3f7c9f85e1b543fbd109cabbe38b8c852cdd3c3c1a9->enter($__internal_3a7115d6df12a91f30f0f3f7c9f85e1b543fbd109cabbe38b8c852cdd3c3c1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6205131181635654fc0d342fc741a97eab9e1977d500ad77c08e16b4207ad6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6205131181635654fc0d342fc741a97eab9e1977d500ad77c08e16b4207ad6a2->enter($__internal_6205131181635654fc0d342fc741a97eab9e1977d500ad77c08e16b4207ad6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6205131181635654fc0d342fc741a97eab9e1977d500ad77c08e16b4207ad6a2->leave($__internal_6205131181635654fc0d342fc741a97eab9e1977d500ad77c08e16b4207ad6a2_prof);

        
        $__internal_3a7115d6df12a91f30f0f3f7c9f85e1b543fbd109cabbe38b8c852cdd3c3c1a9->leave($__internal_3a7115d6df12a91f30f0f3f7c9f85e1b543fbd109cabbe38b8c852cdd3c3c1a9_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_039fc2eb224c404825ebc8bebcbc70fe992c8b4ff7d73d9f7407e6c62de45899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039fc2eb224c404825ebc8bebcbc70fe992c8b4ff7d73d9f7407e6c62de45899->enter($__internal_039fc2eb224c404825ebc8bebcbc70fe992c8b4ff7d73d9f7407e6c62de45899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da2f0488f2141717baa37a22cb48bb56bc8ea2de245856e11a5dc3a4b60cebd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2f0488f2141717baa37a22cb48bb56bc8ea2de245856e11a5dc3a4b60cebd2->enter($__internal_da2f0488f2141717baa37a22cb48bb56bc8ea2de245856e11a5dc3a4b60cebd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "
";
        
        $__internal_da2f0488f2141717baa37a22cb48bb56bc8ea2de245856e11a5dc3a4b60cebd2->leave($__internal_da2f0488f2141717baa37a22cb48bb56bc8ea2de245856e11a5dc3a4b60cebd2_prof);

        
        $__internal_039fc2eb224c404825ebc8bebcbc70fe992c8b4ff7d73d9f7407e6c62de45899->leave($__internal_039fc2eb224c404825ebc8bebcbc70fe992c8b4ff7d73d9f7407e6c62de45899_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_baddd32dec4669e5cfca4de180336cd1f8b24d2a3df7ca2d3cc5e70583d0c1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baddd32dec4669e5cfca4de180336cd1f8b24d2a3df7ca2d3cc5e70583d0c1ed->enter($__internal_baddd32dec4669e5cfca4de180336cd1f8b24d2a3df7ca2d3cc5e70583d0c1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aadc0621a579d9b101da861157ada92138bdf5306bea30fb66a0b60a9ff95bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadc0621a579d9b101da861157ada92138bdf5306bea30fb66a0b60a9ff95bd5->enter($__internal_aadc0621a579d9b101da861157ada92138bdf5306bea30fb66a0b60a9ff95bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_aadc0621a579d9b101da861157ada92138bdf5306bea30fb66a0b60a9ff95bd5->leave($__internal_aadc0621a579d9b101da861157ada92138bdf5306bea30fb66a0b60a9ff95bd5_prof);

        
        $__internal_baddd32dec4669e5cfca4de180336cd1f8b24d2a3df7ca2d3cc5e70583d0c1ed->leave($__internal_baddd32dec4669e5cfca4de180336cd1f8b24d2a3df7ca2d3cc5e70583d0c1ed_prof);

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
