<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.association_type' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.association_type'] = new \Akeneo\Pim\Structure\Component\ArrayConverter\FlatToStandard\AssociationType(${($_ = isset($this->services['pim_connector.array_convertor.checker.fields_requirement']) ? $this->services['pim_connector.array_convertor.checker.fields_requirement'] : $this->services['pim_connector.array_convertor.checker.fields_requirement'] = new \Akeneo\Tool\Component\Connector\ArrayConverter\FieldsRequirementChecker()) && false ?: '_'});
