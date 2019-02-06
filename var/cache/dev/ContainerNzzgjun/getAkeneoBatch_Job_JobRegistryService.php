<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_batch.job.job_registry' shared service.

$this->services['akeneo_batch.job.job_registry'] = $instance = new \Akeneo\Tool\Component\Batch\Job\JobRegistry();

$a = ${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'};
$b = ${($_ = isset($this->services['pim_connector.doctrine.cache_clearer']) ? $this->services['pim_connector.doctrine.cache_clearer'] : $this->load(__DIR__.'/getPimConnector_Doctrine_CacheClearerService.php')) && false ?: '_'};
$c = ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'};
$d = ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'};
$e = ${($_ = isset($this->services['pim_catalog.saver.product']) ? $this->services['pim_catalog.saver.product'] : $this->load(__DIR__.'/getPimCatalog_Saver_ProductService.php')) && false ?: '_'};

$instance->register(${($_ = isset($this->services['pim_connector.job.csv_locale_import']) ? $this->services['pim_connector.job.csv_locale_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvLocaleImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_locale_export']) ? $this->services['pim_connector.job.csv_locale_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvLocaleExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_locale_import']) ? $this->services['pim_connector.job.xlsx_locale_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxLocaleImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_locale_export']) ? $this->services['pim_connector.job.xlsx_locale_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxLocaleExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_channel_import']) ? $this->services['pim_connector.job.csv_channel_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvChannelImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_channel_export']) ? $this->services['pim_connector.job.csv_channel_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvChannelExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_channel_import']) ? $this->services['pim_connector.job.xlsx_channel_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxChannelImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_channel_export']) ? $this->services['pim_connector.job.xlsx_channel_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxChannelExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_currency_import']) ? $this->services['pim_connector.job.csv_currency_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvCurrencyImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_currency_export']) ? $this->services['pim_connector.job.csv_currency_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvCurrencyExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_currency_import']) ? $this->services['pim_connector.job.xlsx_currency_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxCurrencyImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_currency_export']) ? $this->services['pim_connector.job.xlsx_currency_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxCurrencyExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(new \Akeneo\Tool\Component\Batch\Job\Job('compute_product_models_descendants', $c, $d, array(0 => new \Akeneo\Tool\Component\Connector\Step\TaskletStep('compute_product_models_descendants', $c, $d, new \Akeneo\Pim\Enrichment\Component\Product\Job\ComputeProductModelsDescendantsTasklet($a, ${($_ = isset($this->services['pim_catalog.saver.product_model_descendants']) ? $this->services['pim_catalog.saver.product_model_descendants'] : $this->load(__DIR__.'/getPimCatalog_Saver_ProductModelDescendantsService.php')) && false ?: '_'}, $b)))), 'compute_product_models_descendants', 'compute descendants completeness');
$instance->register(new \Akeneo\Tool\Component\Batch\Job\Job('compute_completeness_of_products_family', $c, $d, array(0 => new \Akeneo\Tool\Component\Connector\Step\TaskletStep('compute_completeness_of_products_family', $c, $d, new \Akeneo\Pim\Enrichment\Component\Product\Job\ComputeCompletenessOfProductsFamilyTasklet(${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->getPimCatalog_Repository_FamilyService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.product_query_builder_factory']) ? $this->services['pim_catalog.query.product_query_builder_factory'] : $this->getPimCatalog_Query_ProductQueryBuilderFactoryService()) && false ?: '_'}, $e, $b)))), 'compute_completeness_of_products_family', 'compute completeness of products family');
$instance->register(new \Akeneo\Tool\Component\Batch\Job\Job('compute_family_variant_structure_changes', $c, $d, array(0 => new \Akeneo\Tool\Component\Connector\Step\TaskletStep('compute_family_variant_structure_changes', $c, $d, new \Akeneo\Pim\Enrichment\Component\Product\Job\ComputeFamilyVariantStructureChangesTasklet(${($_ = isset($this->services['pim_catalog.repository.family_variant']) ? $this->services['pim_catalog.repository.family_variant'] : $this->getPimCatalog_Repository_FamilyVariantService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'}, $a, $e, ${($_ = isset($this->services['pim_catalog.saver.product_model']) ? $this->services['pim_catalog.saver.product_model'] : $this->load(__DIR__.'/getPimCatalog_Saver_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.entity_with_family_variant.keep_only_values_for_variation']) ? $this->services['pim_catalog.entity_with_family_variant.keep_only_values_for_variation'] : $this->services['pim_catalog.entity_with_family_variant.keep_only_values_for_variation'] = new \Akeneo\Pim\Enrichment\Component\Product\EntityWithFamilyVariant\KeepOnlyValuesForVariation()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, 100)))), 'compute_family_variant_structure_changes', 'compute_family_variant_structure_changes');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_group_import']) ? $this->services['pim_connector.job.csv_group_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvGroupImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_group_export']) ? $this->services['pim_connector.job.csv_group_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvGroupExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_product_import']) ? $this->services['pim_connector.job.csv_product_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvProductImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_product_model_import']) ? $this->services['pim_connector.job.csv_product_model_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvProductModelImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_product_export']) ? $this->services['pim_connector.job.csv_product_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvProductExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_product_model_export']) ? $this->services['pim_connector.job.csv_product_model_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvProductModelExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_product_import']) ? $this->services['pim_connector.job.xlsx_product_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxProductImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_product_model_import']) ? $this->services['pim_connector.job.xlsx_product_model_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxProductModelImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_product_export']) ? $this->services['pim_connector.job.xlsx_product_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxProductExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_product_model_export']) ? $this->services['pim_connector.job.xlsx_product_model_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxProductModelExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_category_import']) ? $this->services['pim_connector.job.csv_category_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvCategoryImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_category_export']) ? $this->services['pim_connector.job.csv_category_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvCategoryExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_category_import']) ? $this->services['pim_connector.job.xlsx_category_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxCategoryImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_category_export']) ? $this->services['pim_connector.job.xlsx_category_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxCategoryExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_group_import']) ? $this->services['pim_connector.job.xlsx_group_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxGroupImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_group_export']) ? $this->services['pim_connector.job.xlsx_group_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxGroupExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.csv_product_quick_export']) ? $this->services['pim_enrich.job.csv_product_quick_export'] : $this->load(__DIR__.'/getPimEnrich_Job_CsvProductQuickExportService.php')) && false ?: '_'}, 'quick_export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.csv_product_grid_context_quick_export']) ? $this->services['pim_enrich.job.csv_product_grid_context_quick_export'] : $this->load(__DIR__.'/getPimEnrich_Job_CsvProductGridContextQuickExportService.php')) && false ?: '_'}, 'quick_export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.xlsx_product_quick_export']) ? $this->services['pim_enrich.job.xlsx_product_quick_export'] : $this->load(__DIR__.'/getPimEnrich_Job_XlsxProductQuickExportService.php')) && false ?: '_'}, 'quick_export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.xlsx_product_grid_context_quick_export']) ? $this->services['pim_enrich.job.xlsx_product_grid_context_quick_export'] : $this->load(__DIR__.'/getPimEnrich_Job_XlsxProductGridContextQuickExportService.php')) && false ?: '_'}, 'quick_export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.update_product_value']) ? $this->services['pim_enrich.job.update_product_value'] : $this->load(__DIR__.'/getPimEnrich_Job_UpdateProductValueService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.add_product_value']) ? $this->services['pim_enrich.job.add_product_value'] : $this->load(__DIR__.'/getPimEnrich_Job_AddProductValueService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.add_to_group']) ? $this->services['pim_enrich.job.add_to_group'] : $this->load(__DIR__.'/getPimEnrich_Job_AddToGroupService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.remove_product_value']) ? $this->services['pim_enrich.job.remove_product_value'] : $this->load(__DIR__.'/getPimEnrich_Job_RemoveProductValueService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.move_to_category']) ? $this->services['pim_enrich.job.move_to_category'] : $this->load(__DIR__.'/getPimEnrich_Job_MoveToCategoryService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.add_to_category']) ? $this->services['pim_enrich.job.add_to_category'] : $this->load(__DIR__.'/getPimEnrich_Job_AddToCategoryService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.remove_from_category']) ? $this->services['pim_enrich.job.remove_from_category'] : $this->load(__DIR__.'/getPimEnrich_Job_RemoveFromCategoryService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.add_association']) ? $this->services['pim_enrich.job.add_association'] : $this->load(__DIR__.'/getPimEnrich_Job_AddAssociationService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.edit_common_attributes']) ? $this->services['pim_enrich.job.edit_common_attributes'] : $this->load(__DIR__.'/getPimEnrich_Job_EditCommonAttributesService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.add_attribute_value']) ? $this->services['pim_enrich.job.add_attribute_value'] : $this->load(__DIR__.'/getPimEnrich_Job_AddAttributeValueService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.add_to_existing_product_model']) ? $this->services['pim_enrich.job.add_to_existing_product_model'] : $this->load(__DIR__.'/getPimEnrich_Job_AddToExistingProductModelService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.delete_products_and_product_models']) ? $this->services['pim_enrich.job.delete_products_and_product_models'] : $this->load(__DIR__.'/getPimEnrich_Job_DeleteProductsAndProductModelsService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.change_parent']) ? $this->services['pim_enrich.job.change_parent'] : $this->load(__DIR__.'/getPimEnrich_Job_ChangeParentService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_attribute_import']) ? $this->services['pim_connector.job.csv_attribute_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAttributeImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_attribute_option_import']) ? $this->services['pim_connector.job.csv_attribute_option_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAttributeOptionImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_attribute_group_import']) ? $this->services['pim_connector.job.csv_attribute_group_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAttributeGroupImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_attribute_export']) ? $this->services['pim_connector.job.csv_attribute_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAttributeExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_attribute_option_export']) ? $this->services['pim_connector.job.csv_attribute_option_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAttributeOptionExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_attribute_group_export']) ? $this->services['pim_connector.job.csv_attribute_group_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAttributeGroupExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_attribute_import']) ? $this->services['pim_connector.job.xlsx_attribute_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAttributeImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_attribute_option_import']) ? $this->services['pim_connector.job.xlsx_attribute_option_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAttributeOptionImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_attribute_group_import']) ? $this->services['pim_connector.job.xlsx_attribute_group_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAttributeGroupImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_attribute_export']) ? $this->services['pim_connector.job.xlsx_attribute_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAttributeExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_attribute_option_export']) ? $this->services['pim_connector.job.xlsx_attribute_option_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAttributeOptionExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_attribute_group_export']) ? $this->services['pim_connector.job.xlsx_attribute_group_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAttributeGroupExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_association_type_import']) ? $this->services['pim_connector.job.csv_association_type_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAssociationTypeImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_association_type_export']) ? $this->services['pim_connector.job.csv_association_type_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvAssociationTypeExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_association_type_import']) ? $this->services['pim_connector.job.xlsx_association_type_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAssociationTypeImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_association_type_export']) ? $this->services['pim_connector.job.xlsx_association_type_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxAssociationTypeExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_family_import']) ? $this->services['pim_connector.job.csv_family_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvFamilyImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_family_variant_import']) ? $this->services['pim_connector.job.csv_family_variant_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvFamilyVariantImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_family_export']) ? $this->services['pim_connector.job.csv_family_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvFamilyExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_family_variant_export']) ? $this->services['pim_connector.job.csv_family_variant_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvFamilyVariantExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_family_import']) ? $this->services['pim_connector.job.xlsx_family_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxFamilyImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_family_variant_import']) ? $this->services['pim_connector.job.xlsx_family_variant_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxFamilyVariantImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job_name.xlsx_family_export']) ? $this->services['pim_connector.job_name.xlsx_family_export'] : $this->load(__DIR__.'/getPimConnector_JobName_XlsxFamilyExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job_name.xlsx_family_variant_export']) ? $this->services['pim_connector.job_name.xlsx_family_variant_export'] : $this->load(__DIR__.'/getPimConnector_JobName_XlsxFamilyVariantExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_group_type_import']) ? $this->services['pim_connector.job.csv_group_type_import'] : $this->load(__DIR__.'/getPimConnector_Job_CsvGroupTypeImportService.php')) && false ?: '_'}, 'import', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.csv_group_type_export']) ? $this->services['pim_connector.job.csv_group_type_export'] : $this->load(__DIR__.'/getPimConnector_Job_CsvGroupTypeExportService.php')) && false ?: '_'}, 'export', 'Akeneo CSV Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_group_type_import']) ? $this->services['pim_connector.job.xlsx_group_type_import'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxGroupTypeImportService.php')) && false ?: '_'}, 'import', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_connector.job.xlsx_group_type_export']) ? $this->services['pim_connector.job.xlsx_group_type_export'] : $this->load(__DIR__.'/getPimConnector_Job_XlsxGroupTypeExportService.php')) && false ?: '_'}, 'export', 'Akeneo XLSX Connector');
$instance->register(${($_ = isset($this->services['pim_enrich.job.set_attribute_requirements']) ? $this->services['pim_enrich.job.set_attribute_requirements'] : $this->load(__DIR__.'/getPimEnrich_Job_SetAttributeRequirementsService.php')) && false ?: '_'}, 'mass_edit', 'Akeneo Mass Edit Connector');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_category_csv']) ? $this->services['pim_installer.job.fixtures_category_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesCategoryCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_attribute_group_csv']) ? $this->services['pim_installer.job.fixtures_attribute_group_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesAttributeGroupCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_channel_csv']) ? $this->services['pim_installer.job.fixtures_channel_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesChannelCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_locale_csv']) ? $this->services['pim_installer.job.fixtures_locale_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesLocaleCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_currency_csv']) ? $this->services['pim_installer.job.fixtures_currency_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesCurrencyCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_group_type_csv']) ? $this->services['pim_installer.job.fixtures_group_type_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesGroupTypeCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_association_type_csv']) ? $this->services['pim_installer.job.fixtures_association_type_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesAssociationTypeCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_attribute_csv']) ? $this->services['pim_installer.job.fixtures_attribute_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesAttributeCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_attribute_options_csv']) ? $this->services['pim_installer.job.fixtures_attribute_options_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesAttributeOptionsCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_family_csv']) ? $this->services['pim_installer.job.fixtures_family_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesFamilyCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_family_variant_csv']) ? $this->services['pim_installer.job.fixtures_family_variant_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesFamilyVariantCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_product_model_csv']) ? $this->services['pim_installer.job.fixtures_product_model_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesProductModelCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_product_csv']) ? $this->services['pim_installer.job.fixtures_product_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesProductCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_user_csv']) ? $this->services['pim_installer.job.fixtures_user_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesUserCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_user_role_csv']) ? $this->services['pim_installer.job.fixtures_user_role_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesUserRoleCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_user_group_csv']) ? $this->services['pim_installer.job.fixtures_user_group_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesUserGroupCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_group_csv']) ? $this->services['pim_installer.job.fixtures_group_csv'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesGroupCsvService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');
$instance->register(${($_ = isset($this->services['pim_installer.job.fixtures_job_yml']) ? $this->services['pim_installer.job.fixtures_job_yml'] : $this->load(__DIR__.'/getPimInstaller_Job_FixturesJobYmlService.php')) && false ?: '_'}, 'fixtures', 'Data fixtures');

return $instance;
