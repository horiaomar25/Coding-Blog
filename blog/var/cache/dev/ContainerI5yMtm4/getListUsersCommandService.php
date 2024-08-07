<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getListUsersCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\ListUsersCommand' shared autowired service.
     *
     * @return \App\Command\ListUsersCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ListUsersCommand.php';

        $container->privates['App\\Command\\ListUsersCommand'] = $instance = new \App\Command\ListUsersCommand(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), 'anonymous@example.com', ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setName('app:list-users');
        $instance->setAliases(['app:users']);
        $instance->setDescription('Lists all the existing users');

        return $instance;
    }
}
