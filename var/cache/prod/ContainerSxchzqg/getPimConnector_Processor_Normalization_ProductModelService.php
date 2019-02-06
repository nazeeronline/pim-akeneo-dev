<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.processor.normalization.product_model' shared service.

return $this->services['pim_connector.processor.normalization.product_model'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Processor\Normalization\ProductProcessor(${($_ = isset($this->services['pim_catalog.normalizer.standard.product_model']) ? $this->services['pim_catalog.normalizer.standard.product_model'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.channel']) ? $this->services['pim_catalog.repository.channel'] : $this->getPimCatalog_Repository_ChannelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.bulk_media_fetcher']) ? $this->services['pim_connector.processor.bulk_media_fetcher'] : $this->load(__DIR__.'/getPimConnector_Processor_BulkMediaFetcherService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.values_filler.entity_with_family_variant']) ? $this->services['pim_catalog.values_filler.entity_with_family_variant'] : $this->load(__DIR__.'/getPimCatalog_ValuesFiller_EntityWithFamilyVariantService.php')) && false ?: '_'});
