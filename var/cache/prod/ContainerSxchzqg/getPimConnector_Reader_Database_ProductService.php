<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.database.product' shared service.

return $this->services['pim_connector.reader.database.product'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Reader\Database\ProductReader(${($_ = isset($this->services['pim_catalog.query.product_query_builder_factory']) ? $this->services['pim_catalog.query.product_query_builder_factory'] : $this->load(__DIR__.'/getPimCatalog_Query_ProductQueryBuilderFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.channel']) ? $this->services['pim_catalog.repository.channel'] : $this->getPimCatalog_Repository_ChannelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.converter.metric']) ? $this->services['pim_catalog.converter.metric'] : $this->load(__DIR__.'/getPimCatalog_Converter_MetricService.php')) && false ?: '_'});
