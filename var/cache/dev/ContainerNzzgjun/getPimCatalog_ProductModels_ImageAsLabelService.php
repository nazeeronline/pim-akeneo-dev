<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.product_models.image_as_label' shared service.

return $this->services['pim_catalog.product_models.image_as_label'] = new \Akeneo\Pim\Enrichment\Component\Product\ProductModel\ImageAsLabel(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.variant_product']) ? $this->services['pim_catalog.repository.variant_product'] : $this->load(__DIR__.'/getPimCatalog_Repository_VariantProductService.php')) && false ?: '_'});
