<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_versioning.serializer.normalizer.flat.family' shared service.

return $this->services['pim_versioning.serializer.normalizer.flat.family'] = new \Akeneo\Pim\Structure\Component\Normalizer\Versioning\FamilyNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.family']) ? $this->services['pim_catalog.normalizer.standard.family'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_FamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_versioning.serializer.normalizer.flat.label_translation']) ? $this->services['pim_versioning.serializer.normalizer.flat.label_translation'] : $this->services['pim_versioning.serializer.normalizer.flat.label_translation'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Versioning\TranslationNormalizer()) && false ?: '_'});