<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.remover.completeness' shared service.

return $this->services['pim_catalog.remover.completeness'] = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\CompletenessRemover(${($_ = isset($this->services['pim_catalog.query.product_query_builder_factory']) ? $this->services['pim_catalog.query.product_query_builder_factory'] : $this->getPimCatalog_Query_ProductQueryBuilderFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.elasticsearch.indexer.product']) ? $this->services['pim_catalog.elasticsearch.indexer.product'] : $this->load(__DIR__.'/getPimCatalog_Elasticsearch_Indexer_ProductService.php')) && false ?: '_'}, 'pim_catalog_completeness', ${($_ = isset($this->services['akeneo_storage_utils.doctrine.object_detacher']) ? $this->services['akeneo_storage_utils.doctrine.object_detacher'] : $this->load(__DIR__.'/getAkeneoStorageUtils_Doctrine_ObjectDetacherService.php')) && false ?: '_'});