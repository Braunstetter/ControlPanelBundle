<?php

namespace ContainerAKVo8xz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_EnvVarProcessorService extends Braunstetter_ControlPanel_Test_app_src_TestKernelDevDebugContainer
{
    /**
     * Gets the private 'container.env_var_processor' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\EnvVarProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessor.php';

        return $container->privates['container.env_var_processor'] = new \Symfony\Component\DependencyInjection\EnvVarProcessor($container, new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['secrets.vault'] ?? ($container->privates['secrets.vault'] = new \Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault((\dirname(__DIR__, 4).'/config/secrets/'.$container->getEnv('string:default:kernel.environment:APP_RUNTIME_ENV')), $container->getEnv('base64:default::SYMFONY_DECRYPTION_SECRET'))));
        }, 1));
    }
}
