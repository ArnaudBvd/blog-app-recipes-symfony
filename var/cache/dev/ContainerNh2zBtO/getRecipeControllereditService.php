<?php

namespace ContainerNh2zBtO;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRecipeControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z59tJ14.App\Controller\RecipeController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.z59tJ14'] ?? $container->load('get_ServiceLocator_Z59tJ14Service'));

        if (isset($container->privates['.service_locator.z59tJ14.App\\Controller\\RecipeController::edit()'])) {
            return $container->privates['.service_locator.z59tJ14.App\\Controller\\RecipeController::edit()'];
        }

        return $container->privates['.service_locator.z59tJ14.App\\Controller\\RecipeController::edit()'] = $a->withContext('App\\Controller\\RecipeController::edit()', $container);
    }
}