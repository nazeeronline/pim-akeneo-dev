<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.query.product_and_product_model_search_aggregator' shared service.

return $this->services['pim_enrich.query.product_and_product_model_search_aggregator'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\ProductAndProductModelSearchAggregator(${($_ = isset($this->services['pim_catalog.repository.category']) ? $this->services['pim_catalog.repository.category'] : $this->getPimCatalog_Repository_CategoryService()) && false ?: '_'});
