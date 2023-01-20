<?php

namespace ContainerX3A4xm2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationPushService extends App_KernelProdContainer
{
    /*
     * Gets the private 'console.command.translation_push' shared service.
     *
     * @return \Symfony\Component\Translation\Command\TranslationPushCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_push'] = $instance = new \Symfony\Component\Translation\Command\TranslationPushCommand(($container->privates['translation.provider_collection'] ?? $container->load('getTranslation_ProviderCollectionService')), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), [], []);

        $instance->setName('translation:push');
        $instance->setDescription('Push translations to a given provider.');

        return $instance;
    }
}
