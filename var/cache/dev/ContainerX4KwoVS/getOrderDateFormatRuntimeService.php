<?php

namespace ContainerX4KwoVS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderDateFormatRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Twig\Runtime\OrderDateFormatRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\OrderDateFormatRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twig'.\DIRECTORY_SEPARATOR.'Runtime'.\DIRECTORY_SEPARATOR.'OrderDateFormatRuntime.php';

        return $container->privates['App\\Twig\\Runtime\\OrderDateFormatRuntime'] = new \App\Twig\Runtime\OrderDateFormatRuntime();
    }
}