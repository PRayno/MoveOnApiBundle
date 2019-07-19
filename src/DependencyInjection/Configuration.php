<?php


namespace PRayno\MoveOnApiBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('prayno_moveon_api');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
                ->scalarNode('service_url')->info('URL of your MoveOn API gateway instance')->end()
                ->scalarNode('certificate_path')->info('Local path of the X509 certificate')->end()
                ->scalarNode('key_file_path')->info('Local path of the certificate key file')->end()
                ->scalarNode('certificate_password')->info('Certificate password')->end()
            ->end();

        return $treeBuilder;
    }
}