<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // entity_homepage
            if ($pathinfo === '/categorie') {
                return array (  '_controller' => 'EntityBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entity_homepage',);
            }

            // categorie_all
            if ($pathinfo === '/categorie/all') {
                return array (  '_controller' => 'EntityBundle\\Controller\\CategorieController::allAction',  '_route' => 'categorie_all',);
            }

            // categorie_view
            if ($pathinfo === '/categorie/view') {
                return array (  '_controller' => 'EntityBundle\\Controller\\CategorieController::viewAction',  '_route' => 'categorie_view',);
            }

            // categorie_create
            if ($pathinfo === '/categorie/create') {
                return array (  '_controller' => 'EntityBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
            }

            // categorie_remove
            if ($pathinfo === '/categorie/remove') {
                return array (  '_controller' => 'EntityBundle\\Controller\\CategorieController::removeAction',  '_route' => 'categorie_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/attribute')) {
            // attribute_all
            if ($pathinfo === '/attribute/all') {
                return array (  '_controller' => 'EntityBundle\\Controller\\AttributeController::allAction',  '_route' => 'attribute_all',);
            }

            // attribute_create
            if ($pathinfo === '/attribute/create') {
                return array (  '_controller' => 'EntityBundle\\Controller\\AttributeController::createAction',  '_route' => 'attribute_create',);
            }

            // attribute_view
            if ($pathinfo === '/attribute/view') {
                return array (  '_controller' => 'EntityBundle\\Controller\\AttributeController::viewAction',  '_route' => 'attribute_view',);
            }

            // attribute_delete
            if ($pathinfo === '/attribute/delete') {
                return array (  '_controller' => 'EntityBundle\\Controller\\AttributeController::deleteAction',  '_route' => 'attribute_delete',);
            }

        }

        if (0 === strpos($pathinfo, '/entity')) {
            // create
            if ($pathinfo === '/entity/create') {
                return array (  '_controller' => 'EntityBundle\\Controller\\entityController::createAction',  '_route' => 'create',);
            }

            // view
            if ($pathinfo === '/entity/view') {
                return array (  '_controller' => 'EntityBundle\\Controller\\entityController::viewAction',  '_route' => 'view',);
            }

        }

        // frontview
        if ($pathinfo === '/view') {
            return array (  '_controller' => 'EntityBundle\\Controller\\entityController::frontviewAction',  '_route' => 'frontview',);
        }

        // edit
        if ($pathinfo === '/entity/edit') {
            return array (  '_controller' => 'EntityBundle\\Controller\\entityController::editAction',  '_route' => 'edit',);
        }

        // search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'EntityBundle\\Controller\\CategorieController::searchAction',  '_route' => 'search',);
        }

        // administration_siteadmin
        if ($pathinfo === '/administration') {
            return array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::siteadminAction',  '_route' => 'administration_siteadmin',);
        }

        // administration_deleteuser
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'administration_deleteuser')), array (  '_controller' => 'AppBundle\\Controller\\AdministrationController::deleteuserAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // contenu
        if ($pathinfo === '/contenu') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contenuAction',  '_route' => 'contenu',);
        }

        // membre_admin
        if ($pathinfo === '/Administration') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::adminAction',  '_route' => 'membre_admin',);
        }

        // membre_all
        if ($pathinfo === '/all') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::peopleAction',  '_route' => 'membre_all',);
        }

        // membre_profil
        if (0 === strpos($pathinfo, '/profil') && preg_match('#^/profil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_profil')), array (  '_controller' => 'AppBundle\\Controller\\MembreController::profilAction',));
        }

        if (0 === strpos($pathinfo, '/edit')) {
            // membre_editinfo
            if ($pathinfo === '/editinfo') {
                return array (  '_controller' => 'AppBundle\\Controller\\MembreController::editInfoAction',  '_route' => 'membre_editinfo',);
            }

            // membre_edit_pwd
            if ($pathinfo === '/editPwd') {
                return array (  '_controller' => 'AppBundle\\Controller\\MembreController::editPwdAction',  '_route' => 'membre_edit_pwd',);
            }

        }

        // membre_invite
        if (0 === strpos($pathinfo, '/invite') && preg_match('#^/invite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_invite')), array (  '_controller' => 'AppBundle\\Controller\\MembreController::inviteAction',));
        }

        // membre_alerteInvite
        if (0 === strpos($pathinfo, '/alerteInvite') && preg_match('#^/alerteInvite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_alerteInvite')), array (  '_controller' => 'AppBundle\\Controller\\MembreController::alerteInviteAction',));
        }

        // membre_notificationInvit
        if ($pathinfo === '/notificationInvit') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::notificationInvitAction',  '_route' => 'membre_notificationInvit',);
        }

        // membre_setInvitationToVu
        if ($pathinfo === '/setInvitationToVu') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::setInvitationToVuAction',  '_route' => 'membre_setInvitationToVu',);
        }

        // membre_invitationList
        if ($pathinfo === '/invitationList') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::invitationListAction',  '_route' => 'membre_invitationList',);
        }

        // membre_acceptInvitation
        if (0 === strpos($pathinfo, '/acceptInvitation') && preg_match('#^/acceptInvitation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_acceptInvitation')), array (  '_controller' => 'AppBundle\\Controller\\MembreController::acceptInvitationAction',));
        }

        // membre_supprimerInvitation
        if (0 === strpos($pathinfo, '/supprimerInvitation') && preg_match('#^/supprimerInvitation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'membre_supprimerInvitation')), array (  '_controller' => 'AppBundle\\Controller\\MembreController::supprimerInvitationAction',));
        }

        // membre_mesAmis
        if ($pathinfo === '/mesAmis') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::mesAmisAction',  '_route' => 'membre_mesAmis',);
        }

        // membre_picture
        if ($pathinfo === '/editPicture') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::editpictureAction',  '_route' => 'membre_picture',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // membre_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\MembreController::loginAction',  '_route' => 'membre_login',);
            }

            // membre_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\MembreController::logoutAction',  '_route' => 'membre_logout',);
            }

        }

        // membre_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'membre_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MessagerieController::indexAction',  '_route' => 'membre_index',);
        }

        // messagerie_reception
        if ($pathinfo === '/reception') {
            return array (  '_controller' => 'AppBundle\\Controller\\MessagerieController::receptionAction',  '_route' => 'messagerie_reception',);
        }

        // messagerie_lire
        if (0 === strpos($pathinfo, '/lire') && preg_match('#^/lire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messagerie_lire')), array (  '_controller' => 'AppBundle\\Controller\\MessagerieController::lireAction',));
        }

        // messagerie_nouscontacter
        if ($pathinfo === '/nousContacter') {
            return array (  '_controller' => 'AppBundle\\Controller\\MessagerieController::contactAction',  '_route' => 'messagerie_nouscontacter',);
        }

        // messagerie_send
        if (0 === strpos($pathinfo, '/send') && preg_match('#^/send/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'messagerie_send')), array (  '_controller' => 'AppBundle\\Controller\\MessagerieController::sendAction',));
        }

        if (0 === strpos($pathinfo, '/note')) {
            // note
            if ($pathinfo === '/note') {
                return array (  '_controller' => 'AppBundle\\Controller\\NoteController::indexAction',  '_route' => 'note',);
            }

            // note_vote
            if ($pathinfo === '/note/vote') {
                return array (  '_controller' => 'AppBundle\\Controller\\NoteController::voteAction',  '_route' => 'note_vote',);
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/salon')) {
                // salon
                if ($pathinfo === '/salon') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::indexAction',  '_route' => 'salon',);
                }

                // salon_deleteMessage
                if ($pathinfo === '/salon/deleteMessage') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::deleteMessageAction',  '_route' => 'salon_deleteMessage',);
                }

                // salon_recupererDerniersMessages
                if ($pathinfo === '/salon/recupererDerniersMessages') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::recupererDerniersMessagesAction',  '_route' => 'salon_recupererDerniersMessages',);
                }

                if (0 === strpos($pathinfo, '/salon/enlever')) {
                    // salon_enleverMessagesSupprimes
                    if ($pathinfo === '/salon/enleverMessagesSupprimes') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalonController::enleverMessagesSupprimesAction',  '_route' => 'salon_enleverMessagesSupprimes',);
                    }

                    // salon_enleverParticipantsNonActifs
                    if ($pathinfo === '/salon/enleverParticipantsNonActifs') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalonController::enleverParticipantsNonActifsAction',  '_route' => 'salon_enleverParticipantsNonActifs',);
                    }

                }

                // salon_updateListeParticipants
                if ($pathinfo === '/salon/updateListeParticipants') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::updateListeParticipantsAction',  '_route' => 'salon_updateListeParticipants',);
                }

                // salon_envoyerMessage
                if ($pathinfo === '/salon/envoyerMessage') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::envoyerMessageAction',  '_route' => 'salon_envoyerMessage',);
                }

                // salon_banFromSalon
                if ($pathinfo === '/salon/banFromSalon') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::banFromSalonAction',  '_route' => 'salon_banFromSalon',);
                }

                // salon_wantBanFromSalon
                if ($pathinfo === '/salon/wantBanFromSalon') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::wantBanFromSalonAction',  '_route' => 'salon_wantBanFromSalon',);
                }

                // salon_goodMembre
                if ($pathinfo === '/salon/goodMembre') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::goodMembreAction',  '_route' => 'salon_goodMembre',);
                }

                // salon_addToContacts
                if ($pathinfo === '/salon/addToContacts') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::addToContactsAction',  '_route' => 'salon_addToContacts',);
                }

                // salon_chargeContacts
                if ($pathinfo === '/salon/chargeContacts') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::chargeContactsAction',  '_route' => 'salon_chargeContacts',);
                }

                // salon_invitContacts
                if ($pathinfo === '/salon/invitContacts') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::invitContactsAction',  '_route' => 'salon_invitContacts',);
                }

                // salon_historique
                if ($pathinfo === '/salon/historique') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SalonController::historiqueAction',  '_route' => 'salon_historique',);
                }

                if (0 === strpos($pathinfo, '/salons')) {
                    // salons
                    if ($pathinfo === '/salons') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalonsController::indexAction',  '_route' => 'salons',);
                    }

                    if (0 === strpos($pathinfo, '/salons/ajouter')) {
                        // salons_ajouter
                        if ($pathinfo === '/salons/ajouter') {
                            return array (  '_controller' => 'AppBundle\\Controller\\SalonsController::ajouterSalonAction',  '_route' => 'salons_ajouter',);
                        }

                        // salons_ajouterVerif
                        if ($pathinfo === '/salons/ajouterVerif') {
                            return array (  '_controller' => 'AppBundle\\Controller\\SalonsController::ajouterVerifSalonAction',  '_route' => 'salons_ajouterVerif',);
                        }

                    }

                    // salons_popupRejoindre
                    if ($pathinfo === '/salons/popupRejoindre') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalonsController::popupRejoindreAction',  '_route' => 'salons_popupRejoindre',);
                    }

                    // salons_recupIdSalonPossible
                    if ($pathinfo === '/salons/recupIdSalonPossible') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalonsController::recupIdSalonPossibleAction',  '_route' => 'salons_recupIdSalonPossible',);
                    }

                    // salons_vote
                    if ($pathinfo === '/salons/vote') {
                        return array (  '_controller' => 'AppBundle\\Controller\\SalonsController::voteAction',  '_route' => 'salons_vote',);
                    }

                }

            }

            // statistiques_statistique
            if ($pathinfo === '/statistique') {
                return array (  '_controller' => 'AppBundle\\Controller\\StatistiquesController::statistiqueAction',  '_route' => 'statistiques_statistique',);
            }

        }

        // statistiques_articleStat
        if ($pathinfo === '/articleStat') {
            return array (  '_controller' => 'AppBundle\\Controller\\StatistiquesController::ArticleByCategoryAction',  '_route' => 'statistiques_articleStat',);
        }

        // statistiques_nbVisite
        if ($pathinfo === '/nbVisite') {
            return array (  '_controller' => 'AppBundle\\Controller\\StatistiquesController::nbVisiteAction',  '_route' => 'statistiques_nbVisite',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle:Security:login',  '_route' => 'login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
