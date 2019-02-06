<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.controller.association_type' shared service.

return $this->services['pim_api.controller.association_type'] = new \Akeneo\Pim\Structure\Bundle\Controller\ExternalApi\AssociationTypeController(${($_ = isset($this->services['pim_api.repository.association_type']) ? $this->services['pim_api.repository.association_type'] : $this->load(__DIR__.'/getPimApi_Repository_AssociationTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_external_api_serializer']) ? $this->services['pim_external_api_serializer'] : $this->load(__DIR__.'/getPimExternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.parameter_validator']) ? $this->services['pim_api.pagination.parameter_validator'] : $this->load(__DIR__.'/getPimApi_Pagination_ParameterValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.offset_hal_paginator']) ? $this->services['pim_api.pagination.offset_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_OffsetHalPaginatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.association_type']) ? $this->services['pim_catalog.factory.association_type'] : $this->services['pim_catalog.factory.association_type'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\AssociationType')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.association_type']) ? $this->services['pim_catalog.updater.association_type'] : $this->load(__DIR__.'/getPimCatalog_Updater_AssociationTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.association_type']) ? $this->services['pim_catalog.saver.association_type'] : $this->load(__DIR__.'/getPimCatalog_Saver_AssociationTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.stream.association_type_partial_update_stream']) ? $this->services['pim_api.stream.association_type_partial_update_stream'] : $this->load(__DIR__.'/getPimApi_Stream_AssociationTypePartialUpdateStreamService.php')) && false ?: '_'}, $this->parameters['pim_api.configuration']);