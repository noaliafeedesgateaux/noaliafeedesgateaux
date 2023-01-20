<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.access.decision_manager'] ?? $container->getSecurity_Access_DecisionManagerService()), ($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), false);
    }
}
