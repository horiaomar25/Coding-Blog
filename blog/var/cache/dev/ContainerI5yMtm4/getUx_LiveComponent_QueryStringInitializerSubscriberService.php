<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_LiveComponent_QueryStringInitializerSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.live_component.query_string_initializer_subscriber' shared service.
     *
     * @return \Symfony\UX\LiveComponent\EventListener\QueryStringInitializeSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'QueryStringInitializeSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-live-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'QueryStringPropsExtractor.php';

        return $container->privates['ux.live_component.query_string_initializer_subscriber'] = new \Symfony\UX\LiveComponent\EventListener\QueryStringInitializeSubscriber(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['ux.live_component.metadata_factory'] ?? $container->load('getUx_LiveComponent_MetadataFactoryService')), new \Symfony\UX\LiveComponent\Util\QueryStringPropsExtractor(($container->privates['ux.live_component.component_hydrator'] ?? $container->load('getUx_LiveComponent_ComponentHydratorService'))), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')));
    }
}
