<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.query.product_and_product_model_query_sequential_edit_builder_factory' shared service.

return $this->services['pim_enrich.query.product_and_product_model_query_sequential_edit_builder_factory'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductAndProductModelQueryBuilderWithSearchAggregatorFactory('Akeneo\\Pim\\Enrichment\\Bundle\\ProductQueryBuilder\\ProductAndProductModelQueryBuilder', ${($_ = isset($this->services['pim_enrich.query.product_query_sequential_edit_builder_factory']) ? $this->services['pim_enrich.query.product_query_sequential_edit_builder_factory'] : $this->load(__DIR__.'/getPimEnrich_Query_ProductQuerySequentialEditBuilderFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.query.product_and_product_model_search_aggregator']) ? $this->services['pim_enrich.query.product_and_product_model_search_aggregator'] : $this->load(__DIR__.'/getPimEnrich_Query_ProductAndProductModelSearchAggregatorService.php')) && false ?: '_'});
