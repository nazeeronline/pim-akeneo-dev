<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.controller.currency' shared service.

return $this->services['pim_api.controller.currency'] = new \Akeneo\Channel\Bundle\Controller\ExternalApi\CurrencyController(${($_ = isset($this->services['pim_api.repository.currency']) ? $this->services['pim_api.repository.currency'] : $this->load(__DIR__.'/getPimApi_Repository_CurrencyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_external_api_serializer']) ? $this->services['pim_external_api_serializer'] : $this->load(__DIR__.'/getPimExternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.parameter_validator']) ? $this->services['pim_api.pagination.parameter_validator'] : $this->load(__DIR__.'/getPimApi_Pagination_ParameterValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.offset_hal_paginator']) ? $this->services['pim_api.pagination.offset_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_OffsetHalPaginatorService.php')) && false ?: '_'}, $this->parameters['pim_api.configuration']);
