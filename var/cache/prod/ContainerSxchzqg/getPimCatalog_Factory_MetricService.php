<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.metric' shared service.

return $this->services['pim_catalog.factory.metric'] = new \Akeneo\Pim\Enrichment\Component\Product\Factory\MetricFactory(${($_ = isset($this->services['akeneo_measure.measure_converter']) ? $this->services['akeneo_measure.measure_converter'] : $this->load(__DIR__.'/getAkeneoMeasure_MeasureConverterService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_measure.manager']) ? $this->services['akeneo_measure.manager'] : $this->load(__DIR__.'/getAkeneoMeasure_ManagerService.php')) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\Metric');
