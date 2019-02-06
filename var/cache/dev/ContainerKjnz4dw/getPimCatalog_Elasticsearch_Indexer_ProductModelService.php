<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.elasticsearch.indexer.product_model' shared service.

return $this->services['pim_catalog.elasticsearch.indexer.product_model'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Indexer\ProductModelIndexer(${($_ = isset($this->services['pim_indexing_serializer']) ? $this->services['pim_indexing_serializer'] : $this->load(__DIR__.'/getPimIndexingSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_elasticsearch.client.product']) ? $this->services['akeneo_elasticsearch.client.product'] : $this->getAkeneoElasticsearch_Client_ProductService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_elasticsearch.client.product_model']) ? $this->services['akeneo_elasticsearch.client.product_model'] : $this->load(__DIR__.'/getAkeneoElasticsearch_Client_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_elasticsearch.client.product_and_product_model']) ? $this->services['akeneo_elasticsearch.client.product_and_product_model'] : $this->load(__DIR__.'/getAkeneoElasticsearch_Client_ProductAndProductModelService.php')) && false ?: '_'}, 'pim_catalog_product');
