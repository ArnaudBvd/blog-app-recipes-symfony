<?php

namespace ContainerFAnxulb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_Command_WarmCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux_icons.command.warm_cache' shared service.
     *
     * @return \Symfony\UX\Icons\Command\WarmCacheCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-icons'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'WarmCacheCommand.php';

        $container->privates['.ux_icons.command.warm_cache'] = $instance = new \Symfony\UX\Icons\Command\WarmCacheCommand(($container->privates['.ux_icons.cache_warmer'] ?? $container->load('get_UxIcons_CacheWarmerService')));

        $instance->setName('ux:icons:warm-cache');
        $instance->setDescription('Warm the icon cache');

        return $instance;
    }
}
