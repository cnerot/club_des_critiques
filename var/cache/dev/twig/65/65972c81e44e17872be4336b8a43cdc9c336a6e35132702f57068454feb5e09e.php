<?php

/* salons\index.html.twig */
class __TwigTemplate_b16dc0289501a56d6c42dfe314eec1e5e628375df5391dbee5d44ccc2554d264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "salons\\index.html.twig", 1);
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
        $__internal_cb891916d09c5fa6adc1183a795eac91ba9162b5b618a3590307f9fa0b74143e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb891916d09c5fa6adc1183a795eac91ba9162b5b618a3590307f9fa0b74143e->enter($__internal_cb891916d09c5fa6adc1183a795eac91ba9162b5b618a3590307f9fa0b74143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salons\\index.html.twig"));

        $__internal_014698cf27e1f4b6b36ea3db3fcabe598bf0150042254fc83b26a5991d0e33a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014698cf27e1f4b6b36ea3db3fcabe598bf0150042254fc83b26a5991d0e33a4->enter($__internal_014698cf27e1f4b6b36ea3db3fcabe598bf0150042254fc83b26a5991d0e33a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salons\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb891916d09c5fa6adc1183a795eac91ba9162b5b618a3590307f9fa0b74143e->leave($__internal_cb891916d09c5fa6adc1183a795eac91ba9162b5b618a3590307f9fa0b74143e_prof);

        
        $__internal_014698cf27e1f4b6b36ea3db3fcabe598bf0150042254fc83b26a5991d0e33a4->leave($__internal_014698cf27e1f4b6b36ea3db3fcabe598bf0150042254fc83b26a5991d0e33a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9e8bd1e6e849a2285287ebfd1dd5ecde6f73e50e5270f0bee009c5bb920ebe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e8bd1e6e849a2285287ebfd1dd5ecde6f73e50e5270f0bee009c5bb920ebe6->enter($__internal_c9e8bd1e6e849a2285287ebfd1dd5ecde6f73e50e5270f0bee009c5bb920ebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48d9d3dd36fa44ea46ae8d54f2bc63b3ede360595167834c997cd909b16e9a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d9d3dd36fa44ea46ae8d54f2bc63b3ede360595167834c997cd909b16e9a7e->enter($__internal_48d9d3dd36fa44ea46ae8d54f2bc63b3ede360595167834c997cd909b16e9a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription de nouveau membre
";
        
        $__internal_48d9d3dd36fa44ea46ae8d54f2bc63b3ede360595167834c997cd909b16e9a7e->leave($__internal_48d9d3dd36fa44ea46ae8d54f2bc63b3ede360595167834c997cd909b16e9a7e_prof);

        
        $__internal_c9e8bd1e6e849a2285287ebfd1dd5ecde6f73e50e5270f0bee009c5bb920ebe6->leave($__internal_c9e8bd1e6e849a2285287ebfd1dd5ecde6f73e50e5270f0bee009c5bb920ebe6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa7ec962b858106cb6715b0e755e3f607b4d3f0a10b1091ffa1df12b4f5b51bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7ec962b858106cb6715b0e755e3f607b4d3f0a10b1091ffa1df12b4f5b51bd->enter($__internal_fa7ec962b858106cb6715b0e755e3f607b4d3f0a10b1091ffa1df12b4f5b51bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c311357c25f9466c6ef7d28abbe24c7ad703f7624d20b48e85ac7fb1605d3c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c311357c25f9466c6ef7d28abbe24c7ad703f7624d20b48e85ac7fb1605d3c24->enter($__internal_c311357c25f9466c6ef7d28abbe24c7ad703f7624d20b48e85ac7fb1605d3c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container\">
\t\t<!-- Modal Trigger -->
\t\t  <a id=\"joinSalon\" class=\"waves-effect waves-light btn hide\" href=\"#modal1\">Modal</a>

\t\t  <!-- Modal Structure -->
\t\t  <div id=\"modal1\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"col s8 rateAbook left\">
\t\t\t\t<h4 id=\"nomSalon\"></h4>
\t\t\t\t
\t\t\t\t<!-- <div class=\"col s12 center\">
\t\t\t\t\tNote 
\t\t\t\t</div> -->
\t\t\t\t
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/star_white.png"), "html", null, true);
        echo "\" id=\"star_1\" class=\"star starNotSelected\">
\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/star_white.png"), "html", null, true);
        echo "\" id=\"star_2\" class=\"star starNotSelected\">
\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/star_white.png"), "html", null, true);
        echo "\" id=\"star_3\" class=\"star starNotSelected\">
\t\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/star_white.png"), "html", null, true);
        echo "\" id=\"star_4\" class=\"star starNotSelected\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"center\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" id=\"rejoindreSalon\" value=\"Rejoindre\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t  <a href=\"#!\" class=\"closeWindowRateAbook modal-action modal-close waves-effect waves-green btn-flat\">Annuler</a>
\t\t\t</div>
\t\t  </div>
\t\t  \t\t
\t\t<div class=\"row\">\t\t
\t\t\t<div class=\"col s12\">
\t\t\t\t<h1>Salons</h1>
\t\t\t</div>
\t\t\t<div id=\"cat\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t<option disabled selected>Catégorie</option>
\t\t\t\t\t<option>Toutes</option>
\t\t\t\t\t<option>Livre</option>
\t\t\t\t\t<option>Exposition</option>
\t\t\t\t\t<option>Film</option>
\t\t\t\t\t<option>Théâtre</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"sub_cat\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t<option disabled selected>Sous-catégorie</option>
\t\t\t\t\t<option>Toutes</option>
\t\t\t\t\t<option>Policer</option>
\t\t\t\t\t<option>Poésie</option>
\t\t\t\t\t<option>Politique</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"containerTitleArtwork\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<input id=\"titleArtwork\" class=\"validate\" type=\"text\"> <!-- autocomplétion -->
\t\t\t\t<label for=\"titleArtwork\">Titre</label>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"containerAuthorArtwork\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<input id=\"authorArtwork\" type=\"text\"> <!-- autocomplétion -->
\t\t\t\t<label for=\"authorArtwork\">Auteur</label>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div id=\"salons\" class=\"col s12 margin-top\">
\t\t\t\t<table class=\"listing table\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr class=\"<?php echo \$themeApplicated->getPageStat(); ?>\">
\t\t\t\t\t  <th>Titre</th>
\t\t\t\t\t  <th>Date Début</th>
\t\t\t\t\t  <th>Date Fin</th>
\t\t\t\t\t  <th>Action</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["salons"]) || array_key_exists("salons", $context) ? $context["salons"] : (function () { throw new Twig_Error_Runtime('Variable "salons" does not exist.', 89, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salon"]) {
            // line 90
            echo "\t\t\t\t\t\t";
            if ((twig_date_format_filter($this->env, "now", "Ymd") > twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "dateFin", array()), "date", array()), "Ymd"))) {
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 91
                $context["period"] = "past";
                echo "\t\t\t\t\t\t\t  
\t\t\t\t\t\t";
            } elseif ((twig_date_format_filter($this->env, "now", "Ymd") < twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 92
$context["salon"], "dateDebut", array()), "date", array()), "Ymd"))) {
                // line 93
                echo "\t\t\t\t\t\t\t";
                $context["period"] = "next";
                // line 94
                echo "\t\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t\t";
                $context["period"] = "current";
                // line 96
                echo "\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<tr class=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new Twig_Error_Runtime('Variable "period" does not exist.', 98, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "titreSalon", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t <abbr title=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "dateDebut", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t  ";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "dateDebut", array()), "date", array()), "Y/m/d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t  </abbr>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t <abbr title=\"";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "dateFin", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t  ";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "dateFin", array()), "date", array()), "Y/m/d"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t  </abbr>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<div class=\"col s12 input-field action no-margin\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["salon"], "id", array()), "html", null, true);
            echo "\" name=\"idSalon\">
\t\t\t\t\t\t\t\t\t\t<select class=\"hide browser-default\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"selected\" disabled selected>Action</option>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new Twig_Error_Runtime('Variable "period" does not exist.', 117, $this->getSourceContext()); })()) == "past")) {
                // line 118
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"historiqueSalon\">Voir</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 119
(isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new Twig_Error_Runtime('Variable "period" does not exist.', 119, $this->getSourceContext()); })()) == "next")) {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option>Thème</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option>Thème</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"join\">Rejoindre</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 125
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 127
            if (((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new Twig_Error_Runtime('Variable "period" does not exist.', 127, $this->getSourceContext()); })()) == "past")) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary historiqueSalon\" value=\"Voir\">
\t\t\t\t\t\t\t\t\t\t";
            } elseif ((            // line 129
(isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new Twig_Error_Runtime('Variable "period" does not exist.', 129, $this->getSourceContext()); })()) == "next")) {
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" value=\"Thème\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" value=\"Thème\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary join\" value=\"Rejoindre\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  </tr>
\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t  \t\t\t\t\t  
\t\t\t\t  </tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>        
    </div>    
    <input type=\"hidden\" id=\"idSalon\">
    <input type=\"hidden\" id=\"noteChosen\">
    <script>
    
    function refreshStars(idSalon, noteChosen){
\t\twindow.location = \"/salons/vote?idSalon=\"+idSalon+\"&noteChosen=\"+noteChosen;
\t\t/*\$.ajax({
\t\t\turl: \"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salons_vote");
        echo "\",
\t\t\tmethod: \"post\",
\t\t\tdata: {
\t\t\t\tidSalon: idSalon,
\t\t\t\tnoteChosen: noteChosen,
\t\t\t\t}\t\t\t
\t\t}).done(function(msg){
\t\t\tconsole.log(\"Vote effectué\");
\t\t});*/
\t}
\t
\tfunction popupRejoindre(idSalon){
\t\t\$.ajax({
\t\t\turl: \"";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salons_popupRejoindre");
        echo "\",
\t\t\tmethod: \"post\",
\t\t\tdata: {
\t\t\t\tidSalon: idSalon,
\t\t\t\t}\t\t\t
\t\t}).done(function(msg){
\t\t\t\$('#nomSalon').html(msg);
\t\t});
\t}
\t
\tfunction historiqueSalon(idSalon){
\t\twindow.location = \"/salon/historique?idSalon=\"+idSalon;
\t}
\t</script>
";
        
        $__internal_c311357c25f9466c6ef7d28abbe24c7ad703f7624d20b48e85ac7fb1605d3c24->leave($__internal_c311357c25f9466c6ef7d28abbe24c7ad703f7624d20b48e85ac7fb1605d3c24_prof);

        
        $__internal_fa7ec962b858106cb6715b0e755e3f607b4d3f0a10b1091ffa1df12b4f5b51bd->leave($__internal_fa7ec962b858106cb6715b0e755e3f607b4d3f0a10b1091ffa1df12b4f5b51bd_prof);

    }

    public function getTemplateName()
    {
        return "salons\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 164,  296 => 151,  281 => 138,  271 => 134,  266 => 132,  262 => 130,  260 => 129,  257 => 128,  255 => 127,  251 => 125,  246 => 122,  242 => 120,  240 => 119,  237 => 118,  235 => 117,  229 => 114,  221 => 109,  217 => 108,  210 => 104,  206 => 103,  200 => 100,  195 => 98,  192 => 97,  189 => 96,  186 => 95,  183 => 94,  180 => 93,  178 => 92,  174 => 91,  169 => 90,  165 => 89,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Inscription de nouveau membre
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<!-- Modal Trigger -->
\t\t  <a id=\"joinSalon\" class=\"waves-effect waves-light btn hide\" href=\"#modal1\">Modal</a>

\t\t  <!-- Modal Structure -->
\t\t  <div id=\"modal1\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"col s8 rateAbook left\">
\t\t\t\t<h4 id=\"nomSalon\"></h4>
\t\t\t\t
\t\t\t\t<!-- <div class=\"col s12 center\">
\t\t\t\t\tNote 
\t\t\t\t</div> -->
\t\t\t\t
\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t<div class=\"col s12 center\">
\t\t\t\t\t\t<img src=\"{{ asset('images/star_white.png') }}\" id=\"star_1\" class=\"star starNotSelected\">
\t\t\t\t\t\t<img src=\"{{ asset('images/star_white.png') }}\" id=\"star_2\" class=\"star starNotSelected\">
\t\t\t\t\t\t<img src=\"{{ asset('images/star_white.png') }}\" id=\"star_3\" class=\"star starNotSelected\">
\t\t\t\t\t\t<img src=\"{{ asset('images/star_white.png') }}\" id=\"star_4\" class=\"star starNotSelected\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"center\">
\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" id=\"rejoindreSalon\" value=\"Rejoindre\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t  <a href=\"#!\" class=\"closeWindowRateAbook modal-action modal-close waves-effect waves-green btn-flat\">Annuler</a>
\t\t\t</div>
\t\t  </div>
\t\t  \t\t
\t\t<div class=\"row\">\t\t
\t\t\t<div class=\"col s12\">
\t\t\t\t<h1>Salons</h1>
\t\t\t</div>
\t\t\t<div id=\"cat\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t<option disabled selected>Catégorie</option>
\t\t\t\t\t<option>Toutes</option>
\t\t\t\t\t<option>Livre</option>
\t\t\t\t\t<option>Exposition</option>
\t\t\t\t\t<option>Film</option>
\t\t\t\t\t<option>Théâtre</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"sub_cat\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<select class=\"browser-default\">
\t\t\t\t\t<option disabled selected>Sous-catégorie</option>
\t\t\t\t\t<option>Toutes</option>
\t\t\t\t\t<option>Policer</option>
\t\t\t\t\t<option>Poésie</option>
\t\t\t\t\t<option>Politique</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"containerTitleArtwork\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<input id=\"titleArtwork\" class=\"validate\" type=\"text\"> <!-- autocomplétion -->
\t\t\t\t<label for=\"titleArtwork\">Titre</label>
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"containerAuthorArtwork\" class=\"col l6 m6 s12 input-field margin-top\">
\t\t\t\t<input id=\"authorArtwork\" type=\"text\"> <!-- autocomplétion -->
\t\t\t\t<label for=\"authorArtwork\">Auteur</label>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div id=\"salons\" class=\"col s12 margin-top\">
\t\t\t\t<table class=\"listing table\">
\t\t\t\t  <thead>
\t\t\t\t\t<tr class=\"<?php echo \$themeApplicated->getPageStat(); ?>\">
\t\t\t\t\t  <th>Titre</th>
\t\t\t\t\t  <th>Date Début</th>
\t\t\t\t\t  <th>Date Fin</th>
\t\t\t\t\t  <th>Action</th>
\t\t\t\t\t</tr>
\t\t\t\t  </thead>
\t\t\t\t  <tbody>
\t\t\t\t\t{% for salon in salons %}
\t\t\t\t\t\t{% if \"now\"|date('Ymd') > salon.dateFin.date|date('Ymd') %}\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% set period = 'past' %}\t\t\t\t\t\t\t  
\t\t\t\t\t\t{% elseif \"now\"|date('Ymd') < salon.dateDebut.date|date('Ymd') %}
\t\t\t\t\t\t\t{% set period = 'next' %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% set period = 'current' %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t<tr class=\"{{ period }}\">
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t{{ salon.titreSalon }}
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t <abbr title=\"{{ salon.dateDebut.date|date('d/m/Y') }}\">
\t\t\t\t\t\t\t\t\t  {{ salon.dateDebut.date|date('Y/m/d') }}
\t\t\t\t\t\t\t\t  </abbr>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t <abbr title=\"{{ salon.dateFin.date|date('d/m/Y') }}\">
\t\t\t\t\t\t\t\t\t  {{ salon.dateFin.date|date('Y/m/d') }}
\t\t\t\t\t\t\t\t  </abbr>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<div class=\"col s12 input-field action no-margin\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ salon.id }}\" name=\"idSalon\">
\t\t\t\t\t\t\t\t\t\t<select class=\"hide browser-default\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"selected\" disabled selected>Action</option>
\t\t\t\t\t\t\t\t\t\t\t{% if period == \"past\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"historiqueSalon\">Voir</option>
\t\t\t\t\t\t\t\t\t\t\t{% elseif period == \"next\" %}
\t\t\t\t\t\t\t\t\t\t\t\t<option>Thème</option>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<option>Thème</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option class=\"join\">Rejoindre</option>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% if period == \"past\" %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary historiqueSalon\" value=\"Voir\">
\t\t\t\t\t\t\t\t\t\t{% elseif period == \"next\" %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" value=\"Thème\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" value=\"Thème\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary join\" value=\"Rejoindre\">
\t\t\t\t\t\t\t\t\t\t{% endif %}\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  </tr>
\t\t\t\t  {% endfor %}\t\t\t\t\t  \t\t\t\t\t  
\t\t\t\t  </tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>        
    </div>    
    <input type=\"hidden\" id=\"idSalon\">
    <input type=\"hidden\" id=\"noteChosen\">
    <script>
    
    function refreshStars(idSalon, noteChosen){
\t\twindow.location = \"/salons/vote?idSalon=\"+idSalon+\"&noteChosen=\"+noteChosen;
\t\t/*\$.ajax({
\t\t\turl: \"{{ path('salons_vote') }}\",
\t\t\tmethod: \"post\",
\t\t\tdata: {
\t\t\t\tidSalon: idSalon,
\t\t\t\tnoteChosen: noteChosen,
\t\t\t\t}\t\t\t
\t\t}).done(function(msg){
\t\t\tconsole.log(\"Vote effectué\");
\t\t});*/
\t}
\t
\tfunction popupRejoindre(idSalon){
\t\t\$.ajax({
\t\t\turl: \"{{ path('salons_popupRejoindre') }}\",
\t\t\tmethod: \"post\",
\t\t\tdata: {
\t\t\t\tidSalon: idSalon,
\t\t\t\t}\t\t\t
\t\t}).done(function(msg){
\t\t\t\$('#nomSalon').html(msg);
\t\t});
\t}
\t
\tfunction historiqueSalon(idSalon){
\t\twindow.location = \"/salon/historique?idSalon=\"+idSalon;
\t}
\t</script>
{% endblock %}
", "salons\\index.html.twig", "/var/www/html/club_des_critiques/app/Resources/views/salons/index.html.twig");
    }
}
