<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_ui.form.transformer.ajax_creatable_entity.factory' shared service.

return $this->services['pim_ui.form.transformer.ajax_creatable_entity.factory'] = new \Akeneo\Platform\Bundle\UIBundle\Form\Transformer\AjaxCreatableEntityTransformerFactory(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});