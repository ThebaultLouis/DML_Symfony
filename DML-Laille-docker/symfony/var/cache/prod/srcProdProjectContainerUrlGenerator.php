<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin' => array(array(), array('_controller' => 'App\\Controller\\AdminController::index'), array(), array(array('text', '/admin')), array(), array()),
        'deconnexion' => array(array(), array('_controller' => 'App\\Controller\\AdminController::logout'), array(), array(array('text', '/deconnexion')), array(), array()),
        'dashboard' => array(array(), array('_controller' => 'App\\Controller\\AdminController::dashboard'), array(), array(array('text', '/admin/dashboard')), array(), array()),
        'danceModify' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::danceCreate'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/danse/modify')), array(), array()),
        'danceCreate' => array(array('n'), array('n' => 1, '_controller' => 'App\\Controller\\AdminController::danceCreate'), array(), array(array('variable', '/', '[^/]++', 'n'), array('text', '/admin/danse/add')), array(), array()),
        'manifestationModify' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::manifestationCreate'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/manifestation/modify')), array(), array()),
        'manifestationCreate' => array(array(), array('_controller' => 'App\\Controller\\AdminController::manifestationCreate'), array(), array(array('text', '/admin/manifestation/add')), array(), array()),
        'niveauModify' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::niveauCreate'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/niveau/modify')), array(), array()),
        'niveauCreate' => array(array(), array('_controller' => 'App\\Controller\\AdminController::niveauCreate'), array(), array(array('text', '/admin/niveau/add')), array(), array()),
        'coursSuppModify' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::coursSuppCreate'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/cours/modify')), array(), array()),
        'coursSuppCreate' => array(array(), array('_controller' => 'App\\Controller\\AdminController::coursSuppCreate'), array(), array(array('text', '/admin/cours/add')), array(), array()),
        'danceDelete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::danceDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/danse/delete')), array(), array()),
        'manifestationDelete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::manifestationDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/manifestation/delete')), array(), array()),
        'niveauDelete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::niveauDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/niveau/delete')), array(), array()),
        'coursSuppDelete' => array(array('id'), array('_controller' => 'App\\Controller\\AdminController::coursSuppDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/coursSupp/delete')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\PublicController::index'), array(), array(array('text', '/')), array(), array()),
        'danse' => array(array(), array('_controller' => 'App\\Controller\\PublicController::danse'), array(), array(array('text', '/danse')), array(), array()),
        'danseShow' => array(array('id'), array('_controller' => 'App\\Controller\\PublicController::danseShow'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/danse')), array(), array()),
        'manifestation' => array(array(), array('_controller' => 'App\\Controller\\PublicController::manifestation'), array(), array(array('text', '/manifestation')), array(), array()),
        'adherent' => array(array(), array('_controller' => 'App\\Controller\\PublicController::adherent'), array(), array(array('text', '/adherent')), array(), array()),
        'redirection' => array(array('id', 'iid'), array('_controller' => 'App\\Controller\\PublicController::redirection'), array(), array(array('variable', '/', '[^/]++', 'iid'), array('variable', '/', '[^/]++', 'id')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
