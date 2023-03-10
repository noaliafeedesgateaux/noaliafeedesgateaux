<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVisitRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\VisitRepository' shared autowired service.
     *
     * @return \App\Repository\VisitRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService'));

        if (isset($container->privates['App\\Repository\\VisitRepository'])) {
            return $container->privates['App\\Repository\\VisitRepository'];
        }

        return $container->privates['App\\Repository\\VisitRepository'] = new \App\Repository\VisitRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), $a, new \App\Services\DateTimeHelper());
    }
}
