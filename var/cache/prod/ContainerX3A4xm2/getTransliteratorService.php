<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransliteratorService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Vich\UploaderBundle\Util\Transliterator' shared service.
     *
     * @return \Vich\UploaderBundle\Util\Transliterator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['Vich\\UploaderBundle\\Util\\Transliterator'] = new \Vich\UploaderBundle\Util\Transliterator(($container->privates['slugger'] ??= new \Symfony\Component\String\Slugger\AsciiSlugger('en')));
    }
}
