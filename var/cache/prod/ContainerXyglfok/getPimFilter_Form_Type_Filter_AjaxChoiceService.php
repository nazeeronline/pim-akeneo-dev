<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_filter.form.type.filter.ajax_choice' shared service.

return $this->services['pim_filter.form.type.filter.ajax_choice'] = new \Oro\Bundle\PimFilterBundle\Form\Type\Filter\AjaxChoiceFilterType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
