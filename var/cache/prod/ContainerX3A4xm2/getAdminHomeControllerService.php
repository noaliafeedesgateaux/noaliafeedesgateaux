<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminHomeControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\AdminHomeController' shared autowired service.
     *
     * @return \App\Controller\Admin\AdminHomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'));
        $b = ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService'));

        $container->services['App\\Controller\\Admin\\AdminHomeController'] = $instance = new \App\Controller\Admin\AdminHomeController(new \App\Services\DashboardService(($container->privates['App\\Repository\\CakeRepository'] ?? $container->load('getCakeRepositoryService')), ($container->privates['App\\Repository\\OrderRepository'] ?? $container->load('getOrderRepositoryService')), ($container->privates['App\\Repository\\VisitRepository'] ?? $container->load('getVisitRepositoryService')), $a), $b, new \App\Persister\AdminDetailsUpdater($b, ($container->privates['validator'] ?? $container->load('getValidatorService')), $a));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Admin\\AdminHomeController', $container));

        return $instance;
    }
}
