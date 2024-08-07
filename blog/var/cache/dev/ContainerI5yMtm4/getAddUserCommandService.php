<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\AddUserCommand' shared autowired service.
     *
     * @return \App\Command\AddUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'AddUserCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Utils'.\DIRECTORY_SEPARATOR.'Validator.php';

        $container->privates['App\\Command\\AddUserCommand'] = $instance = new \App\Command\AddUserCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['App\\Utils\\Validator'] ??= new \App\Utils\Validator()), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setName('app:add-user');
        $instance->setDescription('Creates users and stores them in the database');

        return $instance;
    }
}
