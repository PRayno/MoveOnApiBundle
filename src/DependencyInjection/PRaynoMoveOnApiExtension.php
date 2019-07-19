<?php


namespace PRayno\MoveOnApiBundle\DependencyInjection;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class PRaynoMoveOnApiExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');


        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('prayno_moveon_api');
        $definition->setArgument(0,$config['service_url']);
        $definition->setArgument(1,$config['certificate_path']);
        $definition->setArgument(2,$config['key_file_path']);
        $definition->setArgument(3,$config['certificate_password']);
    }

    public function getAlias()
    {
        return 'prayno_moveon_api';
    }
}