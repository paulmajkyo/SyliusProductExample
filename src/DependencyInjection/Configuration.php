<?php

declare(strict_types=1);

namespace Wiseb2b\SyliusProductPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('wiseb2b_sylius_product_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
