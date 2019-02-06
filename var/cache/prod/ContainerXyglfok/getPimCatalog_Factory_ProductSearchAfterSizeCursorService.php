<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.product_search_after_size_cursor' shared service.

return $this->services['pim_catalog.factory.product_search_after_size_cursor'] = new \Akeneo\Tool\Bundle\ElasticsearchBundle\Cursor\SearchAfterSizeCursorFactory(${($_ = isset($this->services['akeneo_elasticsearch.client.product']) ? $this->services['akeneo_elasticsearch.client.product'] : $this->load(__DIR__.'/getAkeneoElasticsearch_Client_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductService.php')) && false ?: '_'}, 'Akeneo\\Tool\\Bundle\\ElasticsearchBundle\\Cursor\\SearchAfterSizeCursor', 100, 'pim_catalog_product');