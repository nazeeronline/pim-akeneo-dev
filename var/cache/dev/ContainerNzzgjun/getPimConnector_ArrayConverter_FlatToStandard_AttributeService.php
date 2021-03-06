<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.array_converter.flat_to_standard.attribute' shared service.

return $this->services['pim_connector.array_converter.flat_to_standard.attribute'] = new \Akeneo\Pim\Structure\Component\ArrayConverter\FlatToStandard\Attribute(${($_ = isset($this->services['pim_connector.array_convertor.checker.fields_requirement']) ? $this->services['pim_connector.array_convertor.checker.fields_requirement'] : $this->services['pim_connector.array_convertor.checker.fields_requirement'] = new \Akeneo\Tool\Component\Connector\ArrayConverter\FieldsRequirementChecker()) && false ?: '_'}, array(0 => 'localizable', 1 => 'useable_as_grid_filter', 2 => 'unique', 3 => 'required', 4 => 'scopable', 5 => 'wysiwyg_enabled', 6 => 'decimals_allowed', 7 => 'negative_allowed', 8 => 'auto_option_sorting', 9 => 'is_read_only'));
