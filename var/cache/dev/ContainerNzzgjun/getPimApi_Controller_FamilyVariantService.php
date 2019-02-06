<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.controller.family_variant' shared service.

return $this->services['pim_api.controller.family_variant'] = new \Akeneo\Pim\Structure\Bundle\Controller\ExternalApi\FamilyVariantController(${($_ = isset($this->services['pim_api.repository.family']) ? $this->services['pim_api.repository.family'] : $this->load(__DIR__.'/getPimApi_Repository_FamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.repository.family_variant']) ? $this->services['pim_api.repository.family_variant'] : $this->load(__DIR__.'/getPimApi_Repository_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_external_api_serializer']) ? $this->services['pim_external_api_serializer'] : $this->load(__DIR__.'/getPimExternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.offset_hal_paginator']) ? $this->services['pim_api.pagination.offset_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_OffsetHalPaginatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.parameter_validator']) ? $this->services['pim_api.pagination.parameter_validator'] : $this->load(__DIR__.'/getPimApi_Pagination_ParameterValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.family_variant']) ? $this->services['pim_catalog.factory.family_variant'] : $this->services['pim_catalog.factory.family_variant'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.updater.family_variant']) ? $this->services['pim_api.updater.family_variant'] : $this->load(__DIR__.'/getPimApi_Updater_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.family_variant']) ? $this->services['pim_catalog.saver.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Saver_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['pim_api.stream.family_variant_partial_update_stream']) ? $this->services['pim_api.stream.family_variant_partial_update_stream'] : $this->load(__DIR__.'/getPimApi_Stream_FamilyVariantPartialUpdateStreamService.php')) && false ?: '_'}, $this->parameters['pim_api.configuration']);
