<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_pdf_generator.controller.product' shared service.

return $this->services['pim_pdf_generator.controller.product'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\ProductPdfController(${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'}, ${($_ = isset($this->services['pim_pdf_generator.renderer.registry']) ? $this->services['pim_pdf_generator.renderer.registry'] : $this->load(__DIR__.'/getPimPdfGenerator_Renderer_RegistryService.php')) && false ?: '_'});
