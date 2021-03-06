<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.controller.locale' shared service.

return $this->services['pim_api.controller.locale'] = new \Akeneo\Channel\Bundle\Controller\ExternalApi\LocaleController(${($_ = isset($this->services['pim_api.repository.locale']) ? $this->services['pim_api.repository.locale'] : $this->load(__DIR__.'/getPimApi_Repository_LocaleService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_external_api_serializer']) ? $this->services['pim_external_api_serializer'] : $this->load(__DIR__.'/getPimExternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.offset_hal_paginator']) ? $this->services['pim_api.pagination.offset_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_OffsetHalPaginatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.parameter_validator']) ? $this->services['pim_api.pagination.parameter_validator'] : $this->load(__DIR__.'/getPimApi_Pagination_ParameterValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.checker.query_parameters_locale']) ? $this->services['pim_api.checker.query_parameters_locale'] : $this->load(__DIR__.'/getPimApi_Checker_QueryParametersLocaleService.php')) && false ?: '_'}, $this->parameters['pim_api.configuration']);
