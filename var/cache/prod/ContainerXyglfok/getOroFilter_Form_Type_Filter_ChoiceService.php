<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_filter.form.type.filter.choice' shared service.

return $this->services['oro_filter.form.type.filter.choice'] = new \Oro\Bundle\FilterBundle\Form\Type\Filter\ChoiceFilterType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
