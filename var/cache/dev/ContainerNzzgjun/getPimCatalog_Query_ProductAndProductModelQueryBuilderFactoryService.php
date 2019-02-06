<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.query.product_and_product_model_query_builder_factory' shared service.

return $this->services['pim_catalog.query.product_and_product_model_query_builder_factory'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductAndProductModelQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductAndProductModelQueryBuilder', new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductQueryBuilder', ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.filter.product_and_product_model_registry']) ? $this->services['pim_catalog.query.filter.product_and_product_model_registry'] : $this->load(__DIR__.'/getPimCatalog_Query_Filter_ProductAndProductModelRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.sorter.registry']) ? $this->services['pim_catalog.query.sorter.registry'] : $this->getPimCatalog_Query_Sorter_RegistryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.product_and_product_model_cursor']) ? $this->services['pim_catalog.factory.product_and_product_model_cursor'] : $this->load(__DIR__.'/getPimCatalog_Factory_ProductAndProductModelCursorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.product_query_builder_resolver']) ? $this->services['pim_catalog.query.product_query_builder_resolver'] : $this->services['pim_catalog.query.product_query_builder_resolver'] = new \Akeneo\Pim\Enrichment\Component\Product\Query\ProductQueryBuilderOptionsResolver()) && false ?: '_'}));