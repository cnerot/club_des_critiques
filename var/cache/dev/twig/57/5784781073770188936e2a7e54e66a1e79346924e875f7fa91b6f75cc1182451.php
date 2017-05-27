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
        $__internal_d9a68a72da82c816aee966ad5046c592d52b4322102361d1d7848202899e63a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a68a72da82c816aee966ad5046c592d52b4322102361d1d7848202899e63a5->enter($__internal_d9a68a72da82c816aee966ad5046c592d52b4322102361d1d7848202899e63a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salon\\index.html.twig"));

        $__internal_904ced285ac814a98ad540b4923c8923c51abb7cf59304778194f22697cecf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_904ced285ac814a98ad540b4923c8923c51abb7cf59304778194f22697cecf47->enter($__internal_904ced285ac814a98ad540b4923c8923c51abb7cf59304778194f22697cecf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "salon\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a68a72da82c816aee966ad5046c592d52b4322102361d1d7848202899e63a5->leave($__internal_d9a68a72da82c816aee966ad5046c592d52b4322102361d1d7848202899e63a5_prof);

        
        $__internal_904ced285ac814a98ad540b4923c8923c51abb7cf59304778194f22697cecf47->leave($__internal_904ced285ac814a98ad540b4923c8923c51abb7cf59304778194f22697cecf47_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab09ebc834918815abe8c30b1659164775e004c291b920206cf507a86b36a63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab09ebc834918815abe8c30b1659164775e004c291b920206cf507a86b36a63f->enter($__internal_ab09ebc834918815abe8c30b1659164775e004c291b920206cf507a86b36a63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a369b18bdb611ee2b578cb2800625b09a754a8e262fe7e057fc3aa02e6f2e7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a369b18bdb611ee2b578cb2800625b09a754a8e262fe7e057fc3aa02e6f2e7d->enter($__internal_6a369b18bdb611ee2b578cb2800625b09a754a8e262fe7e057fc3aa02e6f2e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription de nouveau membre
";
        
        $__internal_6a369b18bdb611ee2b578cb2800625b09a754a8e262fe7e057fc3aa02e6f2e7d->leave($__internal_6a369b18bdb611ee2b578cb2800625b09a754a8e262fe7e057fc3aa02e6f2e7d_prof);

        
        $__internal_ab09ebc834918815abe8c30b1659164775e004c291b920206cf507a86b36a63f->leave($__internal_ab09ebc834918815abe8c30b1659164775e004c291b920206cf507a86b36a63f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dbcfa237a2f6e0270814e46d2b5d45a79bfb0ff851b8658365e9b7598645fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dbcfa237a2f6e0270814e46d2b5d45a79bfb0ff851b8658365e9b7598645fd4->enter($__internal_7dbcfa237a2f6e0270814e46d2b5d45a79bfb0ff851b8658365e9b7598645fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e7ff7bf7e1f61c50a6241e48ed0f82b1302be97b866a273f8dea1e8d5a2c2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7ff7bf7e1f61c50a6241e48ed0f82b1302be97b866a273f8dea1e8d5a2c2bb->enter($__internal_9e7ff7bf7e1f61c50a6241e48ed0f82b1302be97b866a273f8dea1e8d5a2c2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["salon"]) || array_key_exists("salon", $context) ? $context["salon"] : (function () { throw new Twig_Error_Runtime('Variable "salon" does not exist.', 85, $this->getSourceContext()); })()), "titreSalon", array()));
        echo " - <span id=\"nbParticipants\">6</span> participants</h1>
\t\t\t</div>
\t\t\t<div id=\"chat\" class=\"col l8 m12 s12 margin-top\">
\t\t\t\t<div id=\"posts\" class=\"col s12 margin-top\">
\t\t\t\t";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 89, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            echo "\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" value=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "idMembre", array()), "html", null, true);
            echo "\" class=\"idMembreMessage\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\t";
            // line 93
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "idMembre", array()) == (isset($context["idMembre"]) || array_key_exists("idMembre", $context) ? $context["idMembre"] : (function () { throw new Twig_Error_Runtime('Variable "idMembre" does not exist.', 93, $this->getSourceContext()); })()))) {
                // line 94
                echo "\t\t\t\t\t\t\t\t<span style=\"color: #0000ec\">
\t\t\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "prenom_et_nom", array()));
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 99
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "idMembre", array()) == (isset($context["idMembre"]) || array_key_exists("idMembre", $context) ? $context["idMembre"] : (function () { throw new Twig_Error_Runtime('Variable "idMembre" does not exist.', 99, $this->getSourceContext()); })()))) {
                // line 100
                echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\tSignaler un abus
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\t";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "msg", array()));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "date", array()), "date", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t<input type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_last($this->env, (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 116, $this->getSourceContext()); })())), "id", array()), "html", null, true);
        echo "\" id=\"lastIdMsg\">
\t\t\t\t</div>
\t\t\t\t<div id=\"message\" class=\"col s12 margin-top\">
\t\t\t\t\t<textarea id=\"msg\"></textarea>
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
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new Twig_Error_Runtime('Variable "participants" does not exist.', 138, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 139
            echo "\t\t\t\t\t\t\t  <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\" class=\"idMembreParticipant\">
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <a href=\"#/";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\" title=\"Voir le profil\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "nom", array()));
            echo "</a>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t  <span href=\"#/";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
            echo "\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></span>
\t\t\t\t\t\t\t\t\t\t  <span title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></span>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t\t";
            // line 150
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "ami", array()) == "false")) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t  <span title=\"Ajouter aux contact\" class=\"btn-floating btn-small orange lighten-2 addToContacts\" id=\"idMembre_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "idMembre", array()), "html", null, true);
                echo "\"><i class=\"large material-icons\">add</i></span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <div class=\"\">
\t\t\t\t\t\t\t\t\t\t  <span title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1 banFromSalon\"><i class=\"large material-icons\">block</i></span>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
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
        // line 220
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
        // line 234
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
\t\t\t\t\t\$(\"#myContacts tbody\").append(\"<tr><td><p><input type='checkbox' id='contact_\"+contacts[i]['id']+\"' name='myContacts[]'><label for='contact_\"+contacts[i]['id']+\"'></label></p></td><td>\"+htmlEntities(contacts[i]['nom'])+\"</td></tr>\");
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\tfunction invitContacts(idContacts){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 251
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
\t\t
\t\tfunction sendMessage(idSalon, message){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon_envoyerMessage");
        echo "\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\tmessage: message,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tif(msg == \"banni\")
\t\t\t\t\tdocument.location.href = \"/?ban=1\";
\t\t\t\tconsole.log(\"Message enregistré en bdd\");
\t\t\t\t\$(\"#msg\").val(\"\");
\t\t\t});
\t\t}
\t\t
\t\tfunction wantBanFromSalon(idSalon, idMembreParticipant){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon_wantBanFromSalon");
        echo "\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\tidMembreParticipant: idMembreParticipant,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tif(msg == \"ok\"){
\t\t\t\t\t\$(\"#nameAlert\").html(\"Demande de bannissement effectuée\");\t\t\t\t\t
\t\t\t\t}else{
\t\t\t\t\t\$(\"#nameAlert\").html(msg);
\t\t\t\t}
\t\t\t\t\$(\"#alert\").click();
\t\t\t});
\t\t}
\t\t
\t\tfunction receiveLastMessages(idSalon, lastIdMsg){
\t\t\t\$.ajax({
\t\t\t\turl: \"";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salon_recupererDerniersMessages");
        echo "\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\tlastIdMsg: lastIdMsg,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tconsole.log(msg);
\t\t\t\tif(msg != \"no changement\"){
\t\t\t\t\tvar message = \$.parseJSON(msg);
\t\t\t\t\tvar a;
\t\t\t\t\tfor(var i = 0; i<message.length; i++){
\t\t\t\t\t\ta = '<div class=\"post\">';
\t\t\t\t\t\ta += '<input type=\"hidden\" value=\"'+message[i]['idMembre']+'\" class=\"idMembreMessage\">';
\t\t\t\t\t\ta += '<span class=\"name\">';
\t\t\t\t\t\tif(message[i]['me'] == \"true\")
\t\t\t\t\t\t\ta += '<span style=\"color: #0000ec\">';
\t\t\t\t\t\ta += htmlEntities(message[i]['prenom_et_nom']);
\t\t\t\t\t\tif(message[i]['me'] == \"true\")
\t\t\t\t\t\t\ta += '</span>';
\t\t\t\t\t\ta += '</span>';
\t\t\t\t\t\ta += '<span class=\"alertAbuse right\">';
\t\t\t\t\t\ta += 'Signaler un abus';
\t\t\t\t\t\ta += '</span>';
\t\t\t\t\t\ta += '<div class=\"clearfix\"></div>';
\t\t\t\t\t\ta += '<div class=\"text\">&nbsp;&nbsp;&nbsp;';
\t\t\t\t\t\ta += htmlEntities(message[i]['msg']);
\t\t\t\t\t\ta += '</div>';
\t\t\t\t\t\ta += '<div class=\"date right\">';
\t\t\t\t\t\ta += message[i]['date'];
\t\t\t\t\t\ta += '</div>';
\t\t\t\t\t\ta += '<hr>';
\t\t\t\t\t\ta += '</div>';
\t\t\t\t\t\t\$(\"#posts\").append(a);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tvar lastIdMsg = message[message.length-1]['id'];
\t\t\t\t\tconsole.log(lastIdMsg);
\t\t\t\t\t
\t\t\t\t\t\$(\"#lastIdMsg\").val(lastIdMsg);
\t\t\t\t}
\t\t\t});
\t\t}
    </script>
";
        
        $__internal_9e7ff7bf7e1f61c50a6241e48ed0f82b1302be97b866a273f8dea1e8d5a2c2bb->leave($__internal_9e7ff7bf7e1f61c50a6241e48ed0f82b1302be97b866a273f8dea1e8d5a2c2bb_prof);

        
        $__internal_7dbcfa237a2f6e0270814e46d2b5d45a79bfb0ff851b8658365e9b7598645fd4->leave($__internal_7dbcfa237a2f6e0270814e46d2b5d45a79bfb0ff851b8658365e9b7598645fd4_prof);

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
        return array (  443 => 297,  422 => 279,  403 => 263,  388 => 251,  368 => 234,  351 => 220,  291 => 162,  277 => 153,  271 => 151,  269 => 150,  260 => 144,  253 => 142,  246 => 139,  242 => 138,  216 => 116,  205 => 111,  199 => 108,  191 => 102,  187 => 100,  185 => 99,  180 => 97,  177 => 96,  173 => 94,  171 => 93,  166 => 91,  163 => 90,  159 => 89,  152 => 85,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
\t\t\t\t<h1>Salon : {{ salon.titreSalon|e }} - <span id=\"nbParticipants\">6</span> participants</h1>
\t\t\t</div>
\t\t\t<div id=\"chat\" class=\"col l8 m12 s12 margin-top\">
\t\t\t\t<div id=\"posts\" class=\"col s12 margin-top\">
\t\t\t\t{% for message in messages %}
\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t<input type=\"hidden\" value=\"{{ message.idMembre }}\" class=\"idMembreMessage\">
\t\t\t\t\t\t<span class=\"name\">
\t\t\t\t\t\t\t{% if message.idMembre == idMembre  %}
\t\t\t\t\t\t\t\t<span style=\"color: #0000ec\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{{ message.prenom_et_nom|e }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if message.idMembre == idMembre %}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"alertAbuse right\">
\t\t\t\t\t\t\tSignaler un abus
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t<div class=\"text\">&nbsp;&nbsp;&nbsp; <!-- alinéa -->
\t\t\t\t\t\t\t{{ message.msg|e }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"date right\">
\t\t\t\t\t\t\t{{ message.date.date|date('d/m/Y H:i:s') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t<input type=\"hidden\" value=\"{{ messages|last.id }}\" id=\"lastIdMsg\">
\t\t\t\t</div>
\t\t\t\t<div id=\"message\" class=\"col s12 margin-top\">
\t\t\t\t\t<textarea id=\"msg\"></textarea>
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
\t\t\t\t\t\t\t  <input type=\"hidden\" value=\"{{ participant.idMembre }}\" class=\"idMembreParticipant\">
\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t\t  <a href=\"#/{{ participant.idMembre }}\" title=\"Voir le profil\">{{ participant.nom|e }}</a>
\t\t\t\t\t\t\t\t\t  <div>
\t\t\t\t\t\t\t\t\t\t  <span href=\"#/{{ participant.idMembre }}\" title=\"Participant pertinent dans ses propos\" class=\"thumb_up\"><i class=\"tiny material-icons\">thumb_up</i></span>
\t\t\t\t\t\t\t\t\t\t  <span title=\"Participant non pertinent dans ses propos\" class=\"thumb_down\"><i class=\"verticalMiddle tiny material-icons\">thumb_down</i></span>
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
\t\t\t\t\t\t\t\t\t\t  <span title=\"Demande de bannissement\" class=\"btn-floating btn-small red lighten-1 banFromSalon\"><i class=\"large material-icons\">block</i></span>
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
\t\t\t\t\t\$(\"#myContacts tbody\").append(\"<tr><td><p><input type='checkbox' id='contact_\"+contacts[i]['id']+\"' name='myContacts[]'><label for='contact_\"+contacts[i]['id']+\"'></label></p></td><td>\"+htmlEntities(contacts[i]['nom'])+\"</td></tr>\");
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
\t\t
\t\tfunction sendMessage(idSalon, message){
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('salon_envoyerMessage') }}\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\tmessage: message,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tif(msg == \"banni\")
\t\t\t\t\tdocument.location.href = \"/?ban=1\";
\t\t\t\tconsole.log(\"Message enregistré en bdd\");
\t\t\t\t\$(\"#msg\").val(\"\");
\t\t\t});
\t\t}
\t\t
\t\tfunction wantBanFromSalon(idSalon, idMembreParticipant){
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('salon_wantBanFromSalon') }}\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\tidMembreParticipant: idMembreParticipant,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tif(msg == \"ok\"){
\t\t\t\t\t\$(\"#nameAlert\").html(\"Demande de bannissement effectuée\");\t\t\t\t\t
\t\t\t\t}else{
\t\t\t\t\t\$(\"#nameAlert\").html(msg);
\t\t\t\t}
\t\t\t\t\$(\"#alert\").click();
\t\t\t});
\t\t}
\t\t
\t\tfunction receiveLastMessages(idSalon, lastIdMsg){
\t\t\t\$.ajax({
\t\t\t\turl: \"{{ path('salon_recupererDerniersMessages') }}\",
\t\t\t\tmethod: \"post\",
\t\t\t\tdata: {
\t\t\t\t\tidSalon: idSalon,
\t\t\t\t\tlastIdMsg: lastIdMsg,
\t\t\t\t\t}\t\t\t
\t\t\t}).done(function(msg){
\t\t\t\tconsole.log(msg);
\t\t\t\tif(msg != \"no changement\"){
\t\t\t\t\tvar message = \$.parseJSON(msg);
\t\t\t\t\tvar a;
\t\t\t\t\tfor(var i = 0; i<message.length; i++){
\t\t\t\t\t\ta = '<div class=\"post\">';
\t\t\t\t\t\ta += '<input type=\"hidden\" value=\"'+message[i]['idMembre']+'\" class=\"idMembreMessage\">';
\t\t\t\t\t\ta += '<span class=\"name\">';
\t\t\t\t\t\tif(message[i]['me'] == \"true\")
\t\t\t\t\t\t\ta += '<span style=\"color: #0000ec\">';
\t\t\t\t\t\ta += htmlEntities(message[i]['prenom_et_nom']);
\t\t\t\t\t\tif(message[i]['me'] == \"true\")
\t\t\t\t\t\t\ta += '</span>';
\t\t\t\t\t\ta += '</span>';
\t\t\t\t\t\ta += '<span class=\"alertAbuse right\">';
\t\t\t\t\t\ta += 'Signaler un abus';
\t\t\t\t\t\ta += '</span>';
\t\t\t\t\t\ta += '<div class=\"clearfix\"></div>';
\t\t\t\t\t\ta += '<div class=\"text\">&nbsp;&nbsp;&nbsp;';
\t\t\t\t\t\ta += htmlEntities(message[i]['msg']);
\t\t\t\t\t\ta += '</div>';
\t\t\t\t\t\ta += '<div class=\"date right\">';
\t\t\t\t\t\ta += message[i]['date'];
\t\t\t\t\t\ta += '</div>';
\t\t\t\t\t\ta += '<hr>';
\t\t\t\t\t\ta += '</div>';
\t\t\t\t\t\t\$(\"#posts\").append(a);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tvar lastIdMsg = message[message.length-1]['id'];
\t\t\t\t\tconsole.log(lastIdMsg);
\t\t\t\t\t
\t\t\t\t\t\$(\"#lastIdMsg\").val(lastIdMsg);
\t\t\t\t}
\t\t\t});
\t\t}
    </script>
{% endblock %}
", "salon\\index.html.twig", "/var/www/html/club_des_critiques/app/Resources/views/salon/index.html.twig");
    }
}
