<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.rest.family_variant' shared service.

return $this->services['pim_enrich.controller.rest.family_variant'] = new \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\FamilyVariantController(${($_ = isset($this->services['pim_catalog.repository.family_variant']) ? $this->services['pim_catalog.repository.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Repository_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_internal_api_serializer']) ? $this->services['pim_internal_api_serializer'] : $this->load(__DIR__.'/getPimInternalApiSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.family_variant']) ? $this->services['pim_catalog.factory.family_variant'] : $this->services['pim_catalog.factory.family_variant'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\FamilyVariant')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.family_variant']) ? $this->services['pim_catalog.updater.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Updater_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load(__DIR__.'/getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.violation']) ? $this->services['pim_enrich.normalizer.violation'] : $this->services['pim_enrich.normalizer.violation'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\InternalApi\ViolationNormalizer()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.family_variant']) ? $this->services['pim_catalog.saver.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Saver_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.remover.family_variant']) ? $this->services['pim_catalog.remover.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Remover_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.repository.family_variant.search']) ? $this->services['pim_enrich.repository.family_variant.search'] : $this->load(__DIR__.'/getPimEnrich_Repository_FamilyVariant_SearchService.php')) && false ?: '_'});