<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_pdf_generator.renderer.product_pdf' shared service.

return $this->services['pim_pdf_generator.renderer.product_pdf'] = new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Renderer\ProductPdfRenderer(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_pdf_generator.builder.dompdf']) ? $this->services['pim_pdf_generator.builder.dompdf'] : $this->services['pim_pdf_generator.builder.dompdf'] = new \Akeneo\Pim\Enrichment\Bundle\PdfGeneration\Builder\DompdfBuilder(($this->targetDirs[3].'/app'))) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.data.manager']) ? $this->services['liip_imagine.data.manager'] : $this->load(__DIR__.'/getLiipImagine_Data_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.cache.manager']) ? $this->services['liip_imagine.cache.manager'] : $this->load(__DIR__.'/getLiipImagine_Cache_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.filter.manager']) ? $this->services['liip_imagine.filter.manager'] : $this->load(__DIR__.'/getLiipImagine_Filter_ManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}, 'PimPdfGeneratorBundle:Product:renderPdf.html.twig', ($this->targetDirs[3].'/app/uploads/product'), NULL);
