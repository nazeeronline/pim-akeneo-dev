<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.connector.processor.mass_edit.product.remove_value' shared service.

return $this->services['pim_enrich.connector.processor.mass_edit.product.remove_value'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\MassEdit\RemoveProductValueProcessor(${($_ = isset($this->services['pim_catalog.updater.property_remover']) ? $this->services['pim_catalog.updater.property_remover'] : $this->load(__DIR__.'/getPimCatalog_Updater_PropertyRemoverService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.validator.product']) ? $this->services['pim_catalog.validator.product'] : $this->load(__DIR__.'/getPimCatalog_Validator_ProductService.php')) && false ?: '_'});
