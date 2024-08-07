<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_BuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sass.builder' shared service.
     *
     * @return \Symfonycasts\SassBundle\SassBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'sass-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SassBuilder.php';

        return $container->privates['sass.builder'] = new \Symfonycasts\SassBundle\SassBuilder([(\dirname(__DIR__, 4).'/assets/styles/app.scss')], (\dirname(__DIR__, 4).'/var/sass'), \dirname(__DIR__, 4), NULL, true);
    }
}
