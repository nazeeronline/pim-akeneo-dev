<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.repository.entity_with_family_variant' shared service.

return $this->services['pim_catalog.repository.entity_with_family_variant'] = new \Akeneo\Pim\Enrichment\Bundle\Doctrine\ORM\Repository\EntityWithFamilyVariantRepository(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->load(__DIR__.'/getPimCatalog_Repository_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.variant_product']) ? $this->services['pim_catalog.repository.variant_product'] : $this->load(__DIR__.'/getPimCatalog_Repository_VariantProductService.php')) && false ?: '_'});