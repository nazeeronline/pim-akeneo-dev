<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.controller.product_model' shared service.

return $this->services['pim_api.controller.product_model'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\ExternalApi\ProductModelController(${($_ = isset($this->services['pim_catalog.query.product_model_query_builder_factory']) ? $this->services['pim_catalog.query.product_model_query_builder_factory'] : $this->load(__DIR__.'/getPimCatalog_Query_ProductModelQueryBuilderFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.product_model_query_builder_from_size_factory']) ? $this->services['pim_catalog.query.product_model_query_builder_from_size_factory'] : $this->load(__DIR__.'/getPimCatalog_Query_ProductModelQueryBuilderFromSizeFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.product_model_query_builder_search_after_size_factory']) ? $this->services['pim_catalog.query.product_model_query_builder_search_after_size_factory'] : $this->load(__DIR__.'/getPimCatalog_Query_ProductModelQueryBuilderSearchAfterSizeFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_external_api_serializer']) ? $this->services['pim_external_api_serializer'] : $this->load(__DIR__.'/getPimExternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.repository.channel']) ? $this->services['pim_api.repository.channel'] : $this->load(__DIR__.'/getPimApi_Repository_ChannelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.checker.query_parameters_product_model']) ? $this->services['pim_api.checker.query_parameters_product_model'] : $this->load(__DIR__.'/getPimApi_Checker_QueryParametersProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.parameter_validator']) ? $this->services['pim_api.pagination.parameter_validator'] : $this->load(__DIR__.'/getPimApi_Pagination_ParameterValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.offset_hal_paginator']) ? $this->services['pim_api.pagination.offset_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_OffsetHalPaginatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.pagination.search_after_hal_paginator']) ? $this->services['pim_api.pagination.search_after_hal_paginator'] : $this->load(__DIR__.'/getPimApi_Pagination_SearchAfterHalPaginatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.security.primary_key_encrypter']) ? $this->services['pim_api.security.primary_key_encrypter'] : $this->services['pim_api.security.primary_key_encrypter'] = new \Akeneo\Tool\Component\Api\Security\PrimaryKeyEncrypter('AES-256-OFB', 'ThisTokenIsNotSoSecretChangeIt', 'ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.updater.product_model']) ? $this->services['pim_api.updater.product_model'] : $this->load(__DIR__.'/getPimApi_Updater_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.product_model']) ? $this->services['pim_catalog.factory.product_model'] : $this->services['pim_catalog.factory.product_model'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\ProductModel')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.product_model']) ? $this->services['pim_catalog.saver.product_model'] : $this->load(__DIR__.'/getPimCatalog_Saver_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.validator.product']) ? $this->services['pim_catalog.validator.product'] : $this->load(__DIR__.'/getPimCatalog_Validator_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.filter.product_model_attribute_filter']) ? $this->services['pim_api.filter.product_model_attribute_filter'] : $this->load(__DIR__.'/getPimApi_Filter_ProductModelAttributeFilterService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.stream.product_model_partial_update_stream']) ? $this->services['pim_api.stream.product_model_partial_update_stream'] : $this->load(__DIR__.'/getPimApi_Stream_ProductModelPartialUpdateStreamService.php')) && false ?: '_'}, $this->parameters['pim_api.configuration']);