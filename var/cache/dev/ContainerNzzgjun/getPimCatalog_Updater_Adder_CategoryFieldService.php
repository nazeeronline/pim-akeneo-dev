<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.adder.category_field' shared service.

return $this->services['pim_catalog.updater.adder.category_field'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Adder\CategoryFieldAdder(${($_ = isset($this->services['pim_catalog.repository.cached_category']) ? $this->services['pim_catalog.repository.cached_category'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedCategoryService.php')) && false ?: '_'}, array(0 => 'categories'));