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
        $__internal_e57c38cc8e75479cd756913c50d825a5c3aa779fcb73e0bb500b3dc698668d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57c38cc8e75479cd756913c50d825a5c3aa779fcb73e0bb500b3dc698668d37->enter($__internal_e57c38cc8e75479cd756913c50d825a5c3aa779fcb73e0bb500b3dc698668d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7a6217bf58c2df175a25bbe9d617c93880a1bc80e6d33d7d8f25b71871ae8f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6217bf58c2df175a25bbe9d617c93880a1bc80e6d33d7d8f25b71871ae8f50->enter($__internal_7a6217bf58c2df175a25bbe9d617c93880a1bc80e6d33d7d8f25b71871ae8f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e57c38cc8e75479cd756913c50d825a5c3aa779fcb73e0bb500b3dc698668d37->leave($__internal_e57c38cc8e75479cd756913c50d825a5c3aa779fcb73e0bb500b3dc698668d37_prof);

        
        $__internal_7a6217bf58c2df175a25bbe9d617c93880a1bc80e6d33d7d8f25b71871ae8f50->leave($__internal_7a6217bf58c2df175a25bbe9d617c93880a1bc80e6d33d7d8f25b71871ae8f50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09fd520a32ad2ef645777ca61593b7ea0acd152d739c9f3cf594b656365f8b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fd520a32ad2ef645777ca61593b7ea0acd152d739c9f3cf594b656365f8b89->enter($__internal_09fd520a32ad2ef645777ca61593b7ea0acd152d739c9f3cf594b656365f8b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f76ac95b4f97b2989c6cb2732ad4015ae3f33016fddd96fe8d17aa591714a341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76ac95b4f97b2989c6cb2732ad4015ae3f33016fddd96fe8d17aa591714a341->enter($__internal_f76ac95b4f97b2989c6cb2732ad4015ae3f33016fddd96fe8d17aa591714a341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Club des critiques";
        
        $__internal_f76ac95b4f97b2989c6cb2732ad4015ae3f33016fddd96fe8d17aa591714a341->leave($__internal_f76ac95b4f97b2989c6cb2732ad4015ae3f33016fddd96fe8d17aa591714a341_prof);

        
        $__internal_09fd520a32ad2ef645777ca61593b7ea0acd152d739c9f3cf594b656365f8b89->leave($__internal_09fd520a32ad2ef645777ca61593b7ea0acd152d739c9f3cf594b656365f8b89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fd757792a1d7f5c4d0e0929b4a7dd43d465b25b43685dc3d7c238bb674f023b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd757792a1d7f5c4d0e0929b4a7dd43d465b25b43685dc3d7c238bb674f023b->enter($__internal_3fd757792a1d7f5c4d0e0929b4a7dd43d465b25b43685dc3d7c238bb674f023b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_295648236ac7056949f9f3d55e377e82bc4e381ddd9a258678b39f3dd37fc8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295648236ac7056949f9f3d55e377e82bc4e381ddd9a258678b39f3dd37fc8a6->enter($__internal_295648236ac7056949f9f3d55e377e82bc4e381ddd9a258678b39f3dd37fc8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_295648236ac7056949f9f3d55e377e82bc4e381ddd9a258678b39f3dd37fc8a6->leave($__internal_295648236ac7056949f9f3d55e377e82bc4e381ddd9a258678b39f3dd37fc8a6_prof);

        
        $__internal_3fd757792a1d7f5c4d0e0929b4a7dd43d465b25b43685dc3d7c238bb674f023b->leave($__internal_3fd757792a1d7f5c4d0e0929b4a7dd43d465b25b43685dc3d7c238bb674f023b_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c460bdf43f171788fbfc582f309fca65b9dc12527cb178133a24ecc51541330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c460bdf43f171788fbfc582f309fca65b9dc12527cb178133a24ecc51541330->enter($__internal_1c460bdf43f171788fbfc582f309fca65b9dc12527cb178133a24ecc51541330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50cca80837a17cd1c700f6a9cb9415072c8d2ffe003ad47e64ecc2b6bfdf8f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cca80837a17cd1c700f6a9cb9415072c8d2ffe003ad47e64ecc2b6bfdf8f92->enter($__internal_50cca80837a17cd1c700f6a9cb9415072c8d2ffe003ad47e64ecc2b6bfdf8f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "
";
        
        $__internal_50cca80837a17cd1c700f6a9cb9415072c8d2ffe003ad47e64ecc2b6bfdf8f92->leave($__internal_50cca80837a17cd1c700f6a9cb9415072c8d2ffe003ad47e64ecc2b6bfdf8f92_prof);

        
        $__internal_1c460bdf43f171788fbfc582f309fca65b9dc12527cb178133a24ecc51541330->leave($__internal_1c460bdf43f171788fbfc582f309fca65b9dc12527cb178133a24ecc51541330_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddc709085ed3eb6f07ecdcbe23ab943df3239d75506e6fdf3a0f2e889707868d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc709085ed3eb6f07ecdcbe23ab943df3239d75506e6fdf3a0f2e889707868d->enter($__internal_ddc709085ed3eb6f07ecdcbe23ab943df3239d75506e6fdf3a0f2e889707868d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_537863d9abd13f6fe888a9b0167dd6ea76fe95b7ddf3f44aa9dd609e9f7fa8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537863d9abd13f6fe888a9b0167dd6ea76fe95b7ddf3f44aa9dd609e9f7fa8ca->enter($__internal_537863d9abd13f6fe888a9b0167dd6ea76fe95b7ddf3f44aa9dd609e9f7fa8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_537863d9abd13f6fe888a9b0167dd6ea76fe95b7ddf3f44aa9dd609e9f7fa8ca->leave($__internal_537863d9abd13f6fe888a9b0167dd6ea76fe95b7ddf3f44aa9dd609e9f7fa8ca_prof);

        
        $__internal_ddc709085ed3eb6f07ecdcbe23ab943df3239d75506e6fdf3a0f2e889707868d->leave($__internal_ddc709085ed3eb6f07ecdcbe23ab943df3239d75506e6fdf3a0f2e889707868d_prof);

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
", "base.html.twig", "/var/www/html/esgi-iw1-2017/app/Resources/views/base.html.twig");
    }
}
