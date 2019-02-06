<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.rest.category' shared service.

return $this->services['pim_enrich.controller.rest.category'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\CategoryController(${($_ = isset($this->services['pim_catalog.repository.category']) ? $this->services['pim_catalog.repository.category'] : $this->getPimCatalog_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.twig.category_extension']) ? $this->services['pim_enrich.twig.category_extension'] : $this->getPimEnrich_Twig_CategoryExtensionService()) && false ?: '_'}, ${($_ = isset($this->services['pim_internal_api_serializer']) ? $this->services['pim_internal_api_serializer'] : $this->load(__DIR__.'/getPimInternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.filter.chained']) ? $this->services['pim_catalog.filter.chained'] : $this->load(__DIR__.'/getPimCatalog_Filter_ChainedService.php')) && false ?: '_'});