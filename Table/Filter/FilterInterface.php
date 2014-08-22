<?php

namespace PZAD\TableBundle\Table\Filter;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Interface for adding filters to the table.
 * 
 * @author Jan Mühlig <mail@janmuehlig.de>
 * @since 1.0.0
 */
interface FilterInterface
{	
	/**
	 * Here are your options. 
	 * Do whatever you want with these.
	 * 
	 * @param array $options	Options.
	 */
	public function setOptions(array $options);
	
	/**
	 * This is your name in the table.
	 * 
	 * @param string $name		Name.
	 */
	public function setName($name);
	
	/**
	 * @return string			Label for this column.
	 */
	public function getLabel();
	
	/**
	 * @return string			Name of this column.
	 */
	public function getName();
	
	/**
	 * @return int				Index of the operator.
	 */
	public function getOperator();
	
	/**
	 * @return array			Columns, the filter will work on.
	 */
	public function getColumns();
	
	/**
	 * @return array			Attributes for every row (tr).
	 */
	public function getAttributes();
	
	/**
	 * @return boolean			Returns True, if this filter needs the <form>-enviroment,
	 *							including the submit und reset buttons. False, otherwise.
	 */
	public function needsFormEnviroment();
	
	/**
	 * Renders the filter.
	 * 
	 * @param ContainerInterface $container
	 */
	public function render(ContainerInterface $container);
}
