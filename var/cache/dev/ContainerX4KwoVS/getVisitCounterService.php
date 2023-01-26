<?php

namespace ContainerX4KwoVS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVisitCounterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\VisitCounter' shared autowired service.
     *
     * @return \App\Services\VisitCounter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'VisitCounter.php';

        return $container->privates['App\\Services\\VisitCounter'] = new \App\Services\VisitCounter(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['App\\Repository\\VisitRepository'] ?? $container->load('getVisitRepositoryService')));
    }
}