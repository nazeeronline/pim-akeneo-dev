<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.writer.database.product_model_descendants' shared service.

return $this->services['pim_connector.writer.database.product_model_descendants'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Writer\Database\ProductModelDescendantsWriter(${($_ = isset($this->services['pim_catalog.saver.product_model_descendants']) ? $this->services['pim_catalog.saver.product_model_descendants'] : $this->load(__DIR__.'/getPimCatalog_Saver_ProductModelDescendantsService.php')) && false ?: '_'});
