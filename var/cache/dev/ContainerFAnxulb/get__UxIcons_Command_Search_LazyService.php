<?php

namespace ContainerFAnxulb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get__UxIcons_Command_Search_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '..ux_icons.command.search.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['..ux_icons.command.search.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('ux:icons:search', [], 'Search icons and icon sets from ux.symfony.com', false, #[\Closure(name: '.ux_icons.command.search', class: 'Symfony\\UX\\Icons\\Command\\SearchIconCommand')] fn (): \Symfony\UX\Icons\Command\SearchIconCommand => ($container->privates['.ux_icons.command.search'] ?? $container->load('get_UxIcons_Command_SearchService')));
    }
}
