<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'pg_gsb_frais_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pg_gsb_frais_validerconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\HomeController::validerconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validerconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pg_gsb_frais_deconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\HomeController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pg_gsb_frais_listefrais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\ListeFraisController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listefrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pg_gsb_frais_saisirfrais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\SaisirFraisController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saisirfrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pg_gsb_frais_validerfraishorsforfais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\SaisirFraisController::validerfraishorsforfaitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validerfraishorsforfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pg_gsb_frais_supprimerfraishorsforfait' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Pg\\GsbFraisBundle\\Controller\\SaisirFraisController::supprimerfraishorsforfaitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimerfraishorsforfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
