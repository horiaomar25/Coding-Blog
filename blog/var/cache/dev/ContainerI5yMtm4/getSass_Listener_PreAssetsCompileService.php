<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_Listener_PreAssetsCompileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sass.listener.pre_assets_compile' shared service.
     *
     * @return \Symfonycasts\SassBundle\Listener\PreAssetsCompileEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'sass-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Listener'.\DIRECTORY_SEPARATOR.'PreAssetsCompileEventListener.php';

        return $container->privates['sass.listener.pre_assets_compile'] = new \Symfonycasts\SassBundle\Listener\PreAssetsCompileEventListener(($container->privates['sass.builder'] ?? $container->load('getSass_BuilderService')));
    }
}
