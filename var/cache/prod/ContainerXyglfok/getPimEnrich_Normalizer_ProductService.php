<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.normalizer.product' shared service.

return $this->services['pim_enrich.normalizer.product'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\InternalApi\ProductNormalizer(${($_ = isset($this->services['pim_standard_format_serializer']) ? $this->services['pim_standard_format_serializer'] : $this->load(__DIR__.'/getPimStandardFormatSerializerService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.version']) ? $this->services['pim_enrich.normalizer.version'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_VersionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_versioning.manager.version']) ? $this->services['pim_versioning.manager.version'] : $this->load(__DIR__.'/getPimVersioning_Manager_VersionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.image']) ? $this->services['pim_enrich.normalizer.image'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_ImageService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.locale']) ? $this->services['pim_catalog.repository.locale'] : $this->getPimCatalog_Repository_LocaleService()) && false ?: '_'}, ${($_ = isset($this->services['pim_structure_version.provider.structure_version.product']) ? $this->services['pim_structure_version.provider.structure_version.product'] : $this->load(__DIR__.'/getPimStructureVersion_Provider_StructureVersion_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.provider.form.chained']) ? $this->services['pim_enrich.provider.form.chained'] : $this->load(__DIR__.'/getPimEnrich_Provider_Form_ChainedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.localizer.converter']) ? $this->services['pim_catalog.localization.localizer.converter'] : $this->load(__DIR__.'/getPimCatalog_Localization_Localizer_ConverterService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.converter.standard_to_enrich.product_value']) ? $this->services['pim_enrich.converter.standard_to_enrich.product_value'] : $this->load(__DIR__.'/getPimEnrich_Converter_StandardToEnrich_ProductValueService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.manager.completeness']) ? $this->services['pim_catalog.manager.completeness'] : $this->load(__DIR__.'/getPimCatalog_Manager_CompletenessService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.channel']) ? $this->services['pim_catalog.repository.channel'] : $this->getPimCatalog_Repository_ChannelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.filter.chained']) ? $this->services['pim_catalog.filter.chained'] : $this->load(__DIR__.'/getPimCatalog_Filter_ChainedService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.completeness_collection']) ? $this->services['pim_enrich.normalizer.completeness_collection'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_CompletenessCollectionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.completeness.calculator']) ? $this->services['pim_catalog.completeness.calculator'] : $this->load(__DIR__.'/getPimCatalog_Completeness_CalculatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.values_filler.product']) ? $this->services['pim_catalog.values_filler.product'] : $this->load(__DIR__.'/getPimCatalog_ValuesFiller_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.family_variant.provider.entity_with_family_variant_attributes']) ? $this->services['pim_catalog.family_variant.provider.entity_with_family_variant_attributes'] : $this->services['pim_catalog.family_variant.provider.entity_with_family_variant_attributes'] = new \Akeneo\Pim\Enrichment\Component\Product\EntityWithFamilyVariant\EntityWithFamilyVariantAttributesProvider()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.variant_navigation']) ? $this->services['pim_enrich.normalizer.variant_navigation'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_VariantNavigationService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.doctrine.query.ascendant_categories']) ? $this->services['pim_enrich.doctrine.query.ascendant_categories'] : $this->load(__DIR__.'/getPimEnrich_Doctrine_Query_AscendantCategoriesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.normalizer.incomplete_values']) ? $this->services['pim_enrich.normalizer.incomplete_values'] : $this->load(__DIR__.'/getPimEnrich_Normalizer_IncompleteValuesService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.association.missing_association_adder']) ? $this->services['pim_catalog.association.missing_association_adder'] : $this->load(__DIR__.'/getPimCatalog_Association_MissingAssociationAdderService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.normalizer.standard.product.parent_associations']) ? $this->services['pim_catalog.normalizer.standard.product.parent_associations'] : $this->services['pim_catalog.normalizer.standard.product.parent_associations'] = new \Akeneo\Pim\Enrichment\Component\Product\Normalizer\Standard\Product\ParentsAssociationsNormalizer()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.context.catalog']) ? $this->services['pim_catalog.context.catalog'] : $this->services['pim_catalog.context.catalog'] = new \Akeneo\Pim\Enrichment\Bundle\Context\CatalogContext()) && false ?: '_'});
