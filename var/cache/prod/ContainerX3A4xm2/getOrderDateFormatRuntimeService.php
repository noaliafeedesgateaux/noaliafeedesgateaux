<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderDateFormatRuntimeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Twig\Runtime\OrderDateFormatRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\OrderDateFormatRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Twig\\Runtime\\OrderDateFormatRuntime'] = new \App\Twig\Runtime\OrderDateFormatRuntime();
    }
}
