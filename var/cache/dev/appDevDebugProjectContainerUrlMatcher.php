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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // membre_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'membre_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::indexAction',  '_route' => 'membre_index',);
        }

        // membre_profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::showAction',  '_route' => 'membre_profil',);
        }

        // membre_edit
        if ($pathinfo === '/edit') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::editAction',  '_route' => 'membre_edit',);
        }

        // membre_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\MembreController::loginAction',  '_route' => 'membre_login',);
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

        if (0 === strpos($pathinfo, '/salon')) {
            // salon
            if ($pathinfo === '/salon') {
                return array (  '_controller' => 'AppBundle\\Controller\\SalonController::indexAction',  '_route' => 'salon',);
            }

            // salon_recupererDerniersMessages
            if ($pathinfo === '/salon/recupererDerniersMessages') {
                return array (  '_controller' => 'AppBundle\\Controller\\SalonController::recupererDerniersMessagesAction',  '_route' => 'salon_recupererDerniersMessages',);
            }

            // salon_envoyerMessage
            if ($pathinfo === '/salon/envoyerMessage') {
                return array (  '_controller' => 'AppBundle\\Controller\\SalonController::envoyerMessageAction',  '_route' => 'salon_envoyerMessage',);
            }

            // salon_wantBanFromSalon
            if ($pathinfo === '/salon/wantBanFromSalon') {
                return array (  '_controller' => 'AppBundle\\Controller\\SalonController::wantBanFromSalonAction',  '_route' => 'salon_wantBanFromSalon',);
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

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle:Security:login',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/membre_profil') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
