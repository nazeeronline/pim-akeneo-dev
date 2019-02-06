<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.tasklet.xlsx_family.compute_data_related_to_family_root_product_models' shared service.

return $this->services['pim_connector.tasklet.xlsx_family.compute_data_related_to_family_root_product_models'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Job\ComputeDataRelatedToFamilyRootProductModelsTasklet(${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->getPimCatalog_Repository_FamilyService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.query.product_model_query_builder_factory']) ? $this->services['pim_catalog.query.product_model_query_builder_factory'] : $this->load(__DIR__.'/getPimCatalog_Query_ProductModelQueryBuilderFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.xlsx_family']) ? $this->services['pim_connector.reader.file.xlsx_family'] : $this->load(__DIR__.'/getPimConnector_Reader_File_XlsxFamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.entity_with_family_variant.keep_only_values_for_variation']) ? $this->services['pim_catalog.entity_with_family_variant.keep_only_values_for_variation'] : $this->services['pim_catalog.entity_with_family_variant.keep_only_values_for_variation'] = new \Akeneo\Pim\Enrichment\Component\Product\EntityWithFamilyVariant\KeepOnlyValuesForVariation()) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.product_model']) ? $this->services['pim_catalog.saver.product_model'] : $this->load(__DIR__.'/getPimCatalog_Saver_ProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.doctrine.cache_clearer']) ? $this->services['pim_connector.doctrine.cache_clearer'] : $this->load(__DIR__.'/getPimConnector_Doctrine_CacheClearerService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, 100);
