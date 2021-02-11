<?php

namespace ContainerUnrpBuh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'mailer.transport_factory' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';

        return $container->privates['mailer.transport_factory'] = new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['mailer.transport_factory.gmail'] ?? $container->load('getMailer_TransportFactory_GmailService'));
            yield 1 => ($container->privates['mailer.transport_factory.sendgrid'] ?? $container->load('getMailer_TransportFactory_SendgridService'));
            yield 2 => ($container->privates['mailer.transport_factory.null'] ?? $container->load('getMailer_TransportFactory_NullService'));
            yield 3 => ($container->privates['mailer.transport_factory.sendmail'] ?? $container->load('getMailer_TransportFactory_SendmailService'));
            yield 4 => ($container->privates['mailer.transport_factory.smtp'] ?? $container->load('getMailer_TransportFactory_SmtpService'));
        }, 5));
    }
}
