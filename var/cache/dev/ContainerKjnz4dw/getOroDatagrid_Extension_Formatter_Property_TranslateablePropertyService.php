<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_datagrid.extension.formatter.property.translateable_property' shared service.

return $this->services['oro_datagrid.extension.formatter.property.translateable_property'] = new \Oro\Bundle\DataGridBundle\Extension\Formatter\Property\TranslateableProperty(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
