<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_LiveComponentStackService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.live_component_stack' shared service.
     *
     * @return \Symfony\UX\LiveComponent\Util\LiveComponentStack
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'LiveComponentStack.php';

        return $container->privates['ux.twig_component.live_component_stack'] = new \Symfony\UX\LiveComponent\Util\LiveComponentStack(($container->privates['ux.twig_component.component_stack'] ??= new \Symfony\UX\TwigComponent\ComponentStack()));
    }
}
