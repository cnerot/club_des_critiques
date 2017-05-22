<?php

/* salon\index.html.twig */
class __TwigTemplate_824f545025dba69cea2d657e41f5e62ae723ec68381517aa07baf66ef2cf9030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "salon\\index.html.twig", 1);
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
        $__internal_68900ca9b77226507a9e4db8dd6f268f10646fe7a0a9744593b84b60777d1629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68900ca9b77226507a9e4db8dd6f268f10646fe7a0a9744593b84b60777d1629->enter($__internal_68900ca9b77226507a9e4db8dd6f268f10646fe7a0a9744593b84b60777d1629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salon\\index.html.twig"));

        $__internal_375578ec608f733d1ef49f072018eaf53ac76e7ef18fd49a14f97e9e89b5558a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375578ec608f733d1ef49f072018eaf53ac76e7ef18fd49a14f97e9e89b5558a->enter($__internal_375578ec608f733d1ef49f072018eaf53ac76e7ef18fd49a14f97e9e89b5558a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salon\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68900ca9b77226507a9e4db8dd6f268f10646fe7a0a9744593b84b60777d1629->leave($__internal_68900ca9b77226507a9e4db8dd6f268f10646fe7a0a9744593b84b60777d1629_prof);

        
        $__internal_375578ec608f733d1ef49f072018eaf53ac76e7ef18fd49a14f97e9e89b5558a->leave($__internal_375578ec608f733d1ef49f072018eaf53ac76e7ef18fd49a14f97e9e89b5558a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7762278f9d7b237d57aad2a2015e38085c39d1156c75385195f207e605b32825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7762278f9d7b237d57aad2a2015e38085c39d1156c75385195f207e605b32825->enter($__internal_7762278f9d7b237d57aad2a2015e38085c39d1156c75385195f207e605b32825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59be7840d4e85938d5fd662e5561ed23c136b04d8890dd3ade1d7813c0675d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59be7840d4e85938d5fd662e5561ed23c136b04d8890dd3ade1d7813c0675d84->enter($__internal_59be7840d4e85938d5fd662e5561ed23c136b04d8890dd3ade1d7813c0675d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription de nouveau membre
";
        
        $__internal_59be7840d4e85938d5fd662e5561ed23c136b04d8890dd3ade1d7813c0675d84->leave($__internal_59be7840d4e85938d5fd662e5561ed23c136b04d8890dd3ade1d7813c0675d84_prof);

        
        $__internal_7762278f9d7b237d57aad2a2015e38085c39d1156c75385195f207e605b32825->leave($__internal_7762278f9d7b237d57aad2a2015e38085c39d1156c75385195f207e605b32825_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b187146e7b3777f5c69c1843cfc5b28284ee121ee4dc556bc9e732c0660c8465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b187146e7b3777f5c69c1843cfc5b28284ee121ee4dc556bc9e732c0660c8465->enter($__internal_b187146e7b3777f5c69c1843cfc5b28284ee121ee4dc556bc9e732c0660c8465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e7f2ce5516050fccc01501a48bc725170c68cb07b23600e61874c62b1490e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7f2ce5516050fccc01501a48bc725170c68cb07b23600e61874c62b1490e1e->enter($__internal_8e7f2ce5516050fccc01501a48bc725170c68cb07b23600e61874c62b1490e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container\">
    <input type=\"hidden\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new Twig_Error_Runtime('Variable "salon" does not exist.', 9, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" id=\"idSalon\">
\t\t<!-- Modal Trigger -->
\t\t  <a id=\"alert\" class=\"waves-effect waves-light btn hide\" href=\"#modal2\">Modal</a>

\t\t  <!-- Modal Structure -->
\t\t  <div id=\"modal2\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"col s8 rateAbook left\">
\t\t\t\t<div id=\"nameAlert\"></div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t  <a href=\"#!\" class=\"closeWindowRateAbook modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t<!-- Modal Structure -->
\t\t<div id=\"modal1\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div id=\"myContacts\" class=\"col s12 margin-top\">
\t\t\t\t\t<h4>Inviter des contacts</h4>
\t\t\t\t\t<form method=\"POST\" action=\"\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t<tr class=\"<?php echo \$themeApplicated->getPageStat(); ?>\">
\t\t\t\t\t\t\t  <th>Ajouter</th>
\t\t\t\t\t\t\t  <th>Nom</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody class=\"\">
\t\t\t\t\t\t\t  <!--
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" id=\"test5\" name=\"myContacts[]\">
\t\t\t\t\t\t\t\t\t  <label for=\"test5\"></label>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>Paul Durand</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" id=\"test6\" name=\"myContacts[]\">
\t\t\t\t\t\t\t\t\t  <label for=\"test6\"></label>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>Paul Durand</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" id=\"test7\" name=\"myContacts[]\">
\t\t\t\t\t\t\t\t\t  <label for=\"test7\"></label>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>Paul Durand</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t -->
\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" id=\"invitContact\" value=\"Inviter\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t<div class=\"modal-footer\">
\t\t  <a href=\"#!\" class=\"closeWindowRateAbook modal-action modal-close waves-effect waves-green btn-flat\">Annuler</a>
\t\t</div>
\t\t
\t  </div>
\t  
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t<h1>Salon : ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new Twig_Error_Runtime('Variable "salon" does not exist.', 85, $this->getSourceContext()); })()), "titreSalon", array()), "html", null, true);
        echo " - <span id=\"nbParticipants\">6</span> participants</h1>
\t\t\t</div>
\t\t\t<div id=\"chat\" class=\"col l8 m12 s12 margin-top\">
\t\t\t\t<div id=\"posts\" class=\"col s12 margin-top\">
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\tPaul Durand
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\t<a href=\"#\">Signaler un abus</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\tJe trouve votre livre remarquable de part sa tendresse et son attendrissement devant les généalogies évidentes d'une population sincère et désordonnée.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t10/01/2016
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\tPaul Durand
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\t<a href=\"#\">Signaler un abus</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\tJe trouve votre livre remarquable de part sa tendresse et son attendrissement devant les généalogies évidentes d'une population sincère et désordonnée.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t10/01/2016
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\tPaul Durand
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\t<a href=\"#\">Signaler un abus</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\tJe trouve votre livre remarquable de part sa tendresse et son attendrissement devant les généalogies évidentes d'une population sincère et désordonnée.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t10/01/2016
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"message\" class=\"col s12 margin-top\">
\t\t\t\t\t<textarea></textarea>
\t\t\t\t\t
\t\t\t\t\t<button id=\"send\" class=\"col s12 btn-large right darken-3\">
\t\t\t\t\t\tEnvoyer
\t\t\t\t\t</button>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"contacts\" class=\"col l4 m12 s12 margin-top\">
\t\t\t\t<div id=\"participants\" class=\"col s12 margin-top\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t  <thead>
\t\t\t\t\t\t<tr class=\"<?php echo \$themeApplicated->getPageStat(); ?>\">
\t\t\t\t\t\t  <th>Participants</th>
\t\t\t\t\t\t  <th>Ajouter aux contact</th>
\t\t\t\t\t\t  <th>Signaler un abus</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t  </thead>
\t\t\t\t\t  <tbody class=\"\">
\t\t\t\t\t\t  ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new Twig_Error_Runtime('Variable "participants" does not exist.', 160, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 161
            echo "\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <a href=\"#/";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\" title=\"Voir le profil\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "nom", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t  <a href=\"#/";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></a>
\t\t\t\t\t\t\t\t\t\t  <a href=\"#/";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\" title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t\t";
            // line 171
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "ami", array()) == "false")) {
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t  <span title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2 addToContacts\" id=\"idMembre_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
                echo "\"><i class=\"large material-icons\">add</i></span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t\t  <a title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1\" href=\"#/";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\"><i class=\"large material-icons\">block</i></a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t\t\t\t\t\t  <!-- <tr>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Voir le profil\">Paul Durand</a>
\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></a>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2\" href=\"#\"><i class=\"large material-icons\">add</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1\" href=\"#\"><i class=\"large material-icons\">block</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  
\t\t\t\t\t\t  
\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Voir le profil\">Paul Durand</a>
\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></a>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2\" href=\"#\"><i class=\"large material-icons\">add</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1\" href=\"#\"><i class=\"large material-icons\">block</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  </tr> -->
\t\t\t\t\t  </tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div id=\"invitContacts\" class=\"col s12 margin-top\">
\t\t\t\t\t<!-- Modal Trigger -->
\t\t\t\t\t<a id=\"joinSalon\" class=\"waves-effect waves-light\" href=\"#modal1\">
\t\t\t\t\t\tInviter un contact
\t\t\t\t\t\t<div title=\"Inviter un contact\" class=\"btn-floating btn-small red lighten-1\">
\t\t\t\t\t\t\t<i class=\"large material-icons\">add</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>         
    </div>
    <script>
\t\tfunction addtoContacts(idContact, currentElement){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon_addToContacts");
        echo "\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidContact: idContact,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\t\$(\"#nameAlert\").html(\"Contact enregistré\");
\t\t\t\t\$(\"#alert\").click();
\t\t\t\tcurrentElement.css(\"visibility\", \"hidden\");
\t\t\t});
\t\t}
\t\t
\t\tfunction popupInvitContacts(idSalon){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon_chargeContacts");
        echo "\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tconsole.log(msg);
\t\t\t\tvar contacts = \$.parseJSON(msg);
\t\t\t\t\$(\"#myContacts tbody\").html(\"\");\t\t\t
\t\t\t\tfor(var i = 0; i<contacts.length; i++){
\t\t\t\t\t\$(\"#myContacts tbody\").append(\"<tr><td><p><input type='checkbox' id='contact_\"+contacts[i]['id']+\"' name='myContacts[]'><label for='contact_\"+contacts[i]['id']+\"'></label></p></td><td>\"+contacts[i]['nom']+\"</td></tr>\");
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\tfunction invitContacts(idContacts){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon_invitContacts");
        echo "\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tconsole.log(\"contacts invités\");
\t\t\t});
\t\t}
    </script>
";
        
        $__internal_8e7f2ce5516050fccc01501a48bc725170c68cb07b23600e61874c62b1490e1e->leave($__internal_8e7f2ce5516050fccc01501a48bc725170c68cb07b23600e61874c62b1490e1e_prof);

        
        $__internal_b187146e7b3777f5c69c1843cfc5b28284ee121ee4dc556bc9e732c0660c8465->leave($__internal_b187146e7b3777f5c69c1843cfc5b28284ee121ee4dc556bc9e732c0660c8465_prof);

    }

    public function getTemplateName()
    {
        return "salon\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 272,  359 => 255,  342 => 241,  282 => 183,  271 => 178,  265 => 174,  259 => 172,  257 => 171,  249 => 166,  245 => 165,  238 => 163,  234 => 161,  230 => 160,  152 => 85,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    Inscription de nouveau membre
{% endblock %}

{% block body %}
    <div class=\"container\">
    <input type=\"hidden\" value=\"{{ salon.id }}\" id=\"idSalon\">
\t\t<!-- Modal Trigger -->
\t\t  <a id=\"alert\" class=\"waves-effect waves-light btn hide\" href=\"#modal2\">Modal</a>

\t\t  <!-- Modal Structure -->
\t\t  <div id=\"modal2\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t  <div class=\"col s8 rateAbook left\">
\t\t\t\t<div id=\"nameAlert\"></div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t  <a href=\"#!\" class=\"closeWindowRateAbook modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t<!-- Modal Structure -->
\t\t<div id=\"modal1\" class=\"modal\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div id=\"myContacts\" class=\"col s12 margin-top\">
\t\t\t\t\t<h4>Inviter des contacts</h4>
\t\t\t\t\t<form method=\"POST\" action=\"\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t  <thead>
\t\t\t\t\t\t\t<tr class=\"<?php echo \$themeApplicated->getPageStat(); ?>\">
\t\t\t\t\t\t\t  <th>Ajouter</th>
\t\t\t\t\t\t\t  <th>Nom</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t  </thead>
\t\t\t\t\t\t  <tbody class=\"\">
\t\t\t\t\t\t\t  <!--
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" id=\"test5\" name=\"myContacts[]\">
\t\t\t\t\t\t\t\t\t  <label for=\"test5\"></label>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>Paul Durand</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" id=\"test6\" name=\"myContacts[]\">
\t\t\t\t\t\t\t\t\t  <label for=\"test6\"></label>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>Paul Durand</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" id=\"test7\" name=\"myContacts[]\">
\t\t\t\t\t\t\t\t\t  <label for=\"test7\"></label>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>Paul Durand</td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t -->
\t\t\t\t\t\t  </tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-primary\" id=\"invitContact\" value=\"Inviter\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t<div class=\"modal-footer\">
\t\t  <a href=\"#!\" class=\"closeWindowRateAbook modal-action modal-close waves-effect waves-green btn-flat\">Annuler</a>
\t\t</div>
\t\t
\t  </div>
\t  
\t\t<div class=\"row\">
\t\t\t<div class=\"col s12\">
\t\t\t\t<h1>Salon : {{ salon.titreSalon }} - <span id=\"nbParticipants\">6</span> participants</h1>
\t\t\t</div>
\t\t\t<div id=\"chat\" class=\"col l8 m12 s12 margin-top\">
\t\t\t\t<div id=\"posts\" class=\"col s12 margin-top\">
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\tPaul Durand
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\t<a href=\"#\">Signaler un abus</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\tJe trouve votre livre remarquable de part sa tendresse et son attendrissement devant les généalogies évidentes d'une population sincère et désordonnée.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t10/01/2016
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\tPaul Durand
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\t<a href=\"#\">Signaler un abus</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\tJe trouve votre livre remarquable de part sa tendresse et son attendrissement devant les généalogies évidentes d'une population sincère et désordonnée.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t10/01/2016
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\tPaul Durand
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\t<a href=\"#\">Signaler un abus</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\tJe trouve votre livre remarquable de part sa tendresse et son attendrissement devant les généalogies évidentes d'une population sincère et désordonnée.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t10/01/2016
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"message\" class=\"col s12 margin-top\">
\t\t\t\t\t<textarea></textarea>
\t\t\t\t\t
\t\t\t\t\t<button id=\"send\" class=\"col s12 btn-large right darken-3\">
\t\t\t\t\t\tEnvoyer
\t\t\t\t\t</button>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div id=\"contacts\" class=\"col l4 m12 s12 margin-top\">
\t\t\t\t<div id=\"participants\" class=\"col s12 margin-top\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t  <thead>
\t\t\t\t\t\t<tr class=\"<?php echo \$themeApplicated->getPageStat(); ?>\">
\t\t\t\t\t\t  <th>Participants</th>
\t\t\t\t\t\t  <th>Ajouter aux contact</th>
\t\t\t\t\t\t  <th>Signaler un abus</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t  </thead>
\t\t\t\t\t  <tbody class=\"\">
\t\t\t\t\t\t  {% for participant in participants %}
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <a href=\"#/{{ participant.idMembre }}\" title=\"Voir le profil\">{{ participant.nom }}</a>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t  <a href=\"#/{{ participant.idMembre }}\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></a>
\t\t\t\t\t\t\t\t\t\t  <a href=\"#/{{ participant.idMembre }}\" title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t\t{% if participant.ami == \"false\" %}
\t\t\t\t\t\t\t\t\t\t  <span title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2 addToContacts\" id=\"idMembre_{{ participant.idMembre }}\"><i class=\"large material-icons\">add</i></span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t\t  <a title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1\" href=\"#/{{ participant.idMembre }}\"><i class=\"large material-icons\">block</i></a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  {% endfor %}
\t\t\t\t\t\t  <!-- <tr>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Voir le profil\">Paul Durand</a>
\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></a>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2\" href=\"#\"><i class=\"large material-icons\">add</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1\" href=\"#\"><i class=\"large material-icons\">block</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  
\t\t\t\t\t\t  
\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Voir le profil\">Paul Durand</a>
\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></a>
\t\t\t\t\t\t\t\t\t  <a href=\"#\" title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2\" href=\"#\"><i class=\"large material-icons\">add</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t  <a title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1\" href=\"#\"><i class=\"large material-icons\">block</i></a>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  </tr> -->
\t\t\t\t\t  </tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div id=\"invitContacts\" class=\"col s12 margin-top\">
\t\t\t\t\t<!-- Modal Trigger -->
\t\t\t\t\t<a id=\"joinSalon\" class=\"waves-effect waves-light\" href=\"#modal1\">
\t\t\t\t\t\tInviter un contact
\t\t\t\t\t\t<div title=\"Inviter un contact\" class=\"btn-floating btn-small red lighten-1\">
\t\t\t\t\t\t\t<i class=\"large material-icons\">add</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>         
    </div>
    <script>
\t\tfunction addtoContacts(idContact, currentElement){
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('salon_addToContacts') }}\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidContact: idContact,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\t\$(\"#nameAlert\").html(\"Contact enregistré\");
\t\t\t\t\$(\"#alert\").click();
\t\t\t\tcurrentElement.css(\"visibility\", \"hidden\");
\t\t\t});
\t\t}
\t\t
\t\tfunction popupInvitContacts(idSalon){
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('salon_chargeContacts') }}\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tconsole.log(msg);
\t\t\t\tvar contacts = \$.parseJSON(msg);
\t\t\t\t\$(\"#myContacts tbody\").html(\"\");\t\t\t
\t\t\t\tfor(var i = 0; i<contacts.length; i++){
\t\t\t\t\t\$(\"#myContacts tbody\").append(\"<tr><td><p><input type='checkbox' id='contact_\"+contacts[i]['id']+\"' name='myContacts[]'><label for='contact_\"+contacts[i]['id']+\"'></label></p></td><td>\"+contacts[i]['nom']+\"</td></tr>\");
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\tfunction invitContacts(idContacts){
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('salon_invitContacts') }}\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tconsole.log(\"contacts invités\");
\t\t\t});
\t\t}
    </script>
{% endblock %}
", "salon\\index.html.twig", "/var/www/html/esgi-iw1-2017/app/Resources/views/salon/index.html.twig");
    }
}
