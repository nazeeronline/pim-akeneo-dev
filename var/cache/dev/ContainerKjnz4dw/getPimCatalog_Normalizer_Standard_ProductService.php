<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.normalizer.standard.product' shared service.

return $this->services['pim_catalog.normalizer.standard.product'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\ProductNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.product.properties']) ? $this->services['pim_catalog.normalizer.standard.product.properties'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_Product_PropertiesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.normalizer.standard.product.associations']) ? $this->services['pim_catalog.normalizer.standard.product.associations'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_Product_AssociationsService.php')) && false ?: '_'});