<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo.pim.enrichment.query.product_and_product_model_query_builder_from_size_factory.with_product_identifier_cursor' shared service.

return $this->services['akeneo.pim.enrichment.query.product_and_product_model_query_builder_from_size_factory.with_product_identifier_cursor'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductAndProductModelQueryBuilderWithSearchAggregatorFactory('Akeneo\\Pim\\Enrichment\\Bundle\\ProductQueryBuilder\\ProductAndProductModelQueryBuilder', new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Query\\ProductQueryBuilder', ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.filter.product_and_product_model_registry']) ? $this->services['pim_catalog.query.filter.product_and_product_model_registry'] : $this->load(__DIR__.'/getPimCatalog_Query_Filter_ProductAndProductModelRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.sorter.registry']) ? $this->services['pim_catalog.query.sorter.registry'] : $this->getPimCatalog_Query_Sorter_RegistryService()) && false ?: '_'}, new \Akeneo\Pim\Enrichment\Bundle\Storage\ElasticsearchAndSql\ProductGrid\ProductAndProductModelIdentifierCursorFactory(${($_ = isset($this->services['akeneo_elasticsearch.client.product_and_product_model']) ? $this->services['akeneo_elasticsearch.client.product_and_product_model'] : $this->load(__DIR__.'/getAkeneoElasticsearch_Client_ProductAndProductModelService.php')) && false ?: '_'}, 'pim_catalog_product'), ${($_ = isset($this->services['pim_catalog.elasticsearch.product_query_builder_from_size_resolver']) ? $this->services['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] : $this->services['pim_catalog.elasticsearch.product_query_builder_from_size_resolver'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductQueryBuilderFromSizeOptionsResolver()) && false ?: '_'}), ${($_ = isset($this->services['pim_enrich.query.product_and_product_model_search_aggregator']) ? $this->services['pim_enrich.query.product_and_product_model_search_aggregator'] : $this->load(__DIR__.'/getPimEnrich_Query_ProductAndProductModelSearchAggregatorService.php')) && false ?: '_'});
