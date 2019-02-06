<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.values_filler.entity_with_family_variant' shared service.

return $this->services['pim_catalog.values_filler.entity_with_family_variant'] = new \Akeneo\Pim\Enrichment\Component\Product\ValuesFiller\EntityWithFamilyVariantValuesFiller(${($_ = isset($this->services['pim_catalog.builder.entity_with_values']) ? $this->services['pim_catalog.builder.entity_with_values'] : $this->load(__DIR__.'/getPimCatalog_Builder_EntityWithValuesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.resolver.attribute_values']) ? $this->services['pim_catalog.resolver.attribute_values'] : $this->load(__DIR__.'/getPimCatalog_Resolver_AttributeValuesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.currency']) ? $this->services['pim_catalog.repository.currency'] : $this->load(__DIR__.'/getPimCatalog_Repository_CurrencyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.family_variant.provider.entity_with_family_variant_attributes']) ? $this->services['pim_catalog.family_variant.provider.entity_with_family_variant_attributes'] : $this->services['pim_catalog.family_variant.provider.entity_with_family_variant_attributes'] = new \Akeneo\Pim\Enrichment\Component\Product\EntityWithFamilyVariant\EntityWithFamilyVariantAttributesProvider()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'});
