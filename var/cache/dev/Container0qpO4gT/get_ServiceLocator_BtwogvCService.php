<?php

namespace Container0qpO4gT;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BtwogvCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.btwogvC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.btwogvC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'recipeRepository' => ['privates', 'App\\Repository\\RecipeRepository', 'getRecipeRepositoryService', true],
        ], [
            'recipeRepository' => 'App\\Repository\\RecipeRepository',
        ]);
    }
}
