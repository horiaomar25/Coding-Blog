<?php

namespace ContainerI5yMtm4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlSanitizer_Sanitizer_DefaultService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'html_sanitizer.sanitizer.default' shared service.
     *
     * @return \Symfony\Component\HtmlSanitizer\HtmlSanitizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'html-sanitizer'.\DIRECTORY_SEPARATOR.'HtmlSanitizerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'html-sanitizer'.\DIRECTORY_SEPARATOR.'HtmlSanitizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'html-sanitizer'.\DIRECTORY_SEPARATOR.'HtmlSanitizerConfig.php';

        $a = new \Symfony\Component\HtmlSanitizer\HtmlSanitizerConfig();
        $a = $a->allowSafeElements();
        $a = $a->forceHttpsUrls(false);
        $a = $a->allowLinkHosts(NULL);
        $a = $a->allowRelativeLinks(false);
        $a = $a->allowMediaHosts(NULL);
        $a = $a->allowRelativeMedias(false);

        return $container->privates['html_sanitizer.sanitizer.default'] = new \Symfony\Component\HtmlSanitizer\HtmlSanitizer($a);
    }
}
