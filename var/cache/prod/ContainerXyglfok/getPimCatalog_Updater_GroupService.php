<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.group' shared service.

return $this->services['pim_catalog.updater.group'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\GroupUpdater(${($_ = isset($this->services['pim_catalog.repository.group_type']) ? $this->services['pim_catalog.repository.group_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_GroupTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.product_query_builder_factory']) ? $this->services['pim_catalog.query.product_query_builder_factory'] : $this->load(__DIR__.'/getPimCatalog_Query_ProductQueryBuilderFactoryService.php')) && false ?: '_'});
