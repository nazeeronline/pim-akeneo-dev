<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_datagrid.extension.formatter.field_property' shared service.

return $this->services['oro_datagrid.extension.formatter.field_property'] = new \Oro\Bundle\DataGridBundle\Extension\Formatter\Property\FieldProperty(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
