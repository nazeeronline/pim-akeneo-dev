<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.normalizer.product' shared service.

return $this->services['pim_api.normalizer.product'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\ExternalApi\ProductNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.product']) ? $this->services['pim_catalog.normalizer.standard.product'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_api.repository.attribute']) ? $this->services['pim_api.repository.attribute'] : $this->load(__DIR__.'/getPimApi_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});