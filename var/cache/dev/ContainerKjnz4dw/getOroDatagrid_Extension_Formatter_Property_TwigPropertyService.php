<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_datagrid.extension.formatter.property.twig_property' shared service.

return $this->services['oro_datagrid.extension.formatter.property.twig_property'] = new \Oro\Bundle\DataGridBundle\Extension\Formatter\Property\TwigTemplateProperty(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
