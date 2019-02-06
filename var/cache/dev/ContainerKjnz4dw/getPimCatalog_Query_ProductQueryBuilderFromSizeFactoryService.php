<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.query.product_query_builder_from_size_factory' shared service.

return $this->services['pim_catalog.query.product_query_builder_from_size_factory'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductQueryBuilder', ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.filter.product_registry']) ? $this->services['pim_catalog.query.filter.product_registry'] : $this->getPimCatalog_Query_Filter_ProductRegistryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.sorter.registry']) ? $this->services['pim_catalog.query.sorter.registry'] : $this->getPimCatalog_Query_Sorter_RegistryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.product_from_size_cursor']) ? $this->services['pim_catalog.factory.product_from_size_cursor'] : $this->load(__DIR__.'/getPimCatalog_Factory_ProductFromSizeCursorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.elasticsearch.product_query_builder_from_size_resolver']) ? $this->services['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] : $this->services['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFromSizeOptionsResolver()) && false ?: '_'});
