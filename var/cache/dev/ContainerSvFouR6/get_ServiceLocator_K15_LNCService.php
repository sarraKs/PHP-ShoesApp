<?php

namespace ContainerSvFouR6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K15_LNCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K15.lNC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K15.lNC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'placard' => ['privates', '.errored..service_locator.K15.lNC.App\\Entity\\Placard', NULL, 'Cannot autowire service ".service_locator.K15.lNC": it needs an instance of "App\\Entity\\Placard" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'placard' => 'App\\Entity\\Placard',
        ]);
    }
}
