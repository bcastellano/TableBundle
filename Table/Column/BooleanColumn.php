<?php

namespace PZAD\TableBundle\Table\Column;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use PZAD\TableBundle\Table\Row\Row;

/**
 * Rendering a boolean value.
 *
 * @author Jan Mühlig
 */
class BooleanColumn extends AbstractColumn
{
	protected function setDefaultOptions(OptionsResolverInterface $optionsResolver)
	{
		parent::setDefaultOptions($optionsResolver);
		
		$optionsResolver->setDefaults(array(
			'true' => '<input type="checkbox" checked="checked" readonly="readonly" />',
			'false' => '<input type="checkbox" readonly="readonly" />'
		));
	}
	
	public function getContent(Row $row)
	{
		$value = $row->get($this->getName());
		
		if($value == 1)
		{
			return $this->options['true'];
		}
		
		return $this->options['false'];
	}
}