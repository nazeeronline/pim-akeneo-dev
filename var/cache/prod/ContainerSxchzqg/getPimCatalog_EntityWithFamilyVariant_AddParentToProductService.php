<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.entity_with_family_variant.add_parent_to_product' shared service.

return $this->services['pim_catalog.entity_with_family_variant.add_parent_to_product'] = new \Akeneo\Pim\Enrichment\Component\Product\EntityWithFamilyVariant\AddParent(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
