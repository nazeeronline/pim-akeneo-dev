<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.completeness.generator' shared service.

return $this->services['pim_catalog.completeness.generator'] = new \Akeneo\Pim\Enrichment\Component\Product\Completeness\CompletenessGenerator(${($_ = isset($this->services['pim_catalog.query.product_query_builder_factory']) ? $this->services['pim_catalog.query.product_query_builder_factory'] : $this->getPimCatalog_Query_ProductQueryBuilderFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.completeness.calculator']) ? $this->services['pim_catalog.completeness.calculator'] : $this->load(__DIR__.'/getPimCatalog_Completeness_CalculatorService.php')) && false ?: '_'});
