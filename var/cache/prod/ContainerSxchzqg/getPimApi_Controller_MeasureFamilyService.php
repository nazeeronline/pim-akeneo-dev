<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.controller.measure_family' shared service.

return $this->services['pim_api.controller.measure_family'] = new \Akeneo\Tool\Bundle\MeasureBundle\Controller\ExternalApi\MeasureFamilyController(${($_ = isset($this->services['pim_api.converter.measure_family']) ? $this->services['pim_api.converter.measure_family'] : $this->services['pim_api.converter.measure_family'] = new \Akeneo\Tool\Component\Api\Converter\MeasureFamilyConverter()) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.parameter_validator']) ? $this->services['pim_api.pagination.parameter_validator'] : $this->load(__DIR__.'/getPimApi_Pagination_ParameterValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.offset_hal_paginator']) ? $this->services['pim_api.pagination.offset_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_OffsetHalPaginatorService.php')) && false ?: '_'}, $this->parameters['akeneo_measure.measures_config'], $this->parameters['pim_api.configuration']);
