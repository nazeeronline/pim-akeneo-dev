<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_filter.form.type.filter.entity' shared service.

return $this->services['oro_filter.form.type.filter.entity'] = new \Oro\Bundle\FilterBundle\Form\Type\Filter\EntityFilterType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
