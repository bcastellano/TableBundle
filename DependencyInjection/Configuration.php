<?php

namespace PZAD\TableBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
/**
 * Configuration for the TableBundle.
 * 
 * @author Jan Mühlig <mail@janmuehlig.de>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder(); 
		$rootNode = $treeBuilder->root('pzad_table');

		$rootNode
			->children()
				->arrayNode('columns')->prototype('scalar')->end()->end()
				->arrayNode('filters')->prototype('scalar')->end()->end()
			->end();

        return $treeBuilder;
    }
	
	public function getDefaultColumns() 
	{
		return array(
			'content'	=> 'PZAD\TableBundle\Table\Column\ContentColumn',
			'entity'	=> 'PZAD\TableBundle\Table\Column\EntityColumn',
			'date'		=> 'PZAD\TableBundle\Table\Column\DateColumn',
			'text'		=> 'PZAD\TableBundle\Table\Column\TextColumn',
			'number'	=> 'PZAD\TableBundle\Table\Column\NumberColumn',
			'counter'	=> 'PZAD\TableBundle\Table\Column\CounterColumn',
			'boolean'	=> 'PZAD\TableBundle\Table\Column\BooleanColumn'
		);
	}
	
	public function getDefaultFilters()
	{
		return array(
			'text'		=> 'PZAD\TableBundle\Table\Filter\TextFilter',
			'entity'	=> 'PZAD\TableBundle\Table\Filter\EntityFilter',
			'boolean'	=> 'PZAD\TableBundle\Table\Filter\BooleanFilter',
			'valued'	=> 'PZAD\TableBundle\Table\Filter\ValuedFilter',
			'date'		=> 'PZAD\TableBundle\Table\Filter\DateFilter'
		);
	}
			
}
