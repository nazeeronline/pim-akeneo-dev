<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_filter.form.type.filter.category' shared service.

return $this->services['pim_filter.form.type.filter.category'] = new \Oro\Bundle\PimFilterBundle\Form\Type\Filter\CategoryFilterType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
