<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.normalizer.family' shared service.

return $this->services['pim_enrich.normalizer.family'] = new \Akeneo\Pim\Structure\Component\Normalizer\InternalApi\FamilyNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.family']) ? $this->services['pim_catalog.normalizer.standard.family'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_FamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.attribute']) ? $this->services['pim_enrich.normalizer.attribute'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.filter.chained']) ? $this->services['pim_catalog.filter.chained'] : $this->load(__DIR__.'/getPimCatalog_Filter_ChainedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_versioning.manager.version']) ? $this->services['pim_versioning.manager.version'] : $this->load(__DIR__.'/getPimVersioning_Manager_VersionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.version']) ? $this->services['pim_enrich.normalizer.version'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_VersionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.normalizer.standard.translation']) ? $this->services['pim_catalog.normalizer.standard.translation'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_TranslationService.php')) && false ?: '_'});
