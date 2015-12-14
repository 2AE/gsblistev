<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // pg_gsb_frais_home
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\HomeController::indexAction',  '_route' => 'pg_gsb_frais_home',);
        }

        // pg_gsb_frais_validerconnexion
        if ($pathinfo === '/validerconnexion') {
            return array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\HomeController::validerconnexionAction',  '_route' => 'pg_gsb_frais_validerconnexion',);
        }

        // pg_gsb_frais_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\HomeController::deconnexionAction',  '_route' => 'pg_gsb_frais_deconnexion',);
        }

        // pg_gsb_frais_listefrais
        if ($pathinfo === '/listefrais') {
            return array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\ListeFraisController::indexAction',  '_route' => 'pg_gsb_frais_listefrais',);
        }

        // pg_gsb_frais_saisirfrais
        if ($pathinfo === '/saisirfrais') {
            return array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\SaisirFraisController::indexAction',  '_route' => 'pg_gsb_frais_saisirfrais',);
        }

        // pg_gsb_frais_validerfraishorsforfais
        if ($pathinfo === '/validerfraishorsforfait') {
            return array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\SaisirFraisController::validerfraishorsforfaitAction',  '_route' => 'pg_gsb_frais_validerfraishorsforfais',);
        }

        // pg_gsb_frais_supprimerfraishorsforfait
        if (0 === strpos($pathinfo, '/supprimerfraishorsforfait') && preg_match('#^/supprimerfraishorsforfait/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pg_gsb_frais_supprimerfraishorsforfait')), array (  '_controller' => 'Pg\\GsbFraisBundle\\Controller\\SaisirFraisController::supprimerfraishorsforfaitAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
