<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\OrderRepository' shared autowired service.
     *
     * @return \App\Repository\OrderRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService'));

        if (isset($container->privates['App\\Repository\\OrderRepository'])) {
            return $container->privates['App\\Repository\\OrderRepository'];
        }

        return $container->privates['App\\Repository\\OrderRepository'] = new \App\Repository\OrderRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), $a);
    }
}
