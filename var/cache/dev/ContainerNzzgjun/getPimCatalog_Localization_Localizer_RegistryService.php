<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.localization.localizer.registry' shared service.

$this->services['pim_catalog.localization.localizer.registry'] = $instance = new \Akeneo\Pim\Enrichment\Component\Product\Localization\Localizer\LocalizerRegistry();

$instance->register(${($_ = isset($this->services['pim_catalog.localization.localizer.number']) ? $this->services['pim_catalog.localization.localizer.number'] : $this->load(__DIR__.'/getPimCatalog_Localization_Localizer_NumberService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.localization.localizer.price']) ? $this->services['pim_catalog.localization.localizer.price'] : $this->load(__DIR__.'/getPimCatalog_Localization_Localizer_PriceService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.localization.localizer.metric']) ? $this->services['pim_catalog.localization.localizer.metric'] : $this->load(__DIR__.'/getPimCatalog_Localization_Localizer_MetricService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.localization.localizer.date']) ? $this->services['pim_catalog.localization.localizer.date'] : $this->load(__DIR__.'/getPimCatalog_Localization_Localizer_DateService.php')) && false ?: '_'});

return $instance;
