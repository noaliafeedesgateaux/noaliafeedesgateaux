<?php

namespace ContainerX4KwoVS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCakesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CakesController' shared autowired service.
     *
     * @return \App\Controller\CakesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CakesController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Converter'.\DIRECTORY_SEPARATOR.'CakeConverter.php';

        $container->services['App\\Controller\\CakesController'] = $instance = new \App\Controller\CakesController(($container->privates['App\\Repository\\CakeRepository'] ?? $container->load('getCakeRepositoryService')), ($container->privates['App\\Services\\VisitCounter'] ?? $container->load('getVisitCounterService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), new \App\Converter\CakeConverter(($container->privates['App\\Twig\\Runtime\\PicturePathExtensionRuntime'] ?? $container->load('getPicturePathExtensionRuntimeService'))));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CakesController', $container));

        return $instance;
    }
}
