<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_api.normalizer.family_variant' shared service.

return $this->services['pim_api.normalizer.family_variant'] = new \Akeneo\Pim\Structure\Component\Normalizer\ExternalApi\FamilyVariantNormalizer(${($_ = isset($this->services['pim_catalog.normalizer.standard.family_variant']) ? $this->services['pim_catalog.normalizer.standard.family_variant'] : $this->load(__DIR__.'/getPimCatalog_Normalizer_Standard_FamilyVariantService.php')) && false ?: '_'});