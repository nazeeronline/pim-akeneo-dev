<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.job.job_parameters.constraint_collection_provider.product_model_xlsx_import' shared service.

return $this->services['pim_connector.job.job_parameters.constraint_collection_provider.product_model_xlsx_import'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Job\JobParameters\ConstraintCollectionProvider\ProductModelCsvImport(${($_ = isset($this->services['akeneo_pim_enrichment.job.job_parameters.constraint_collection_provider.simple_xlsx_import']) ? $this->services['akeneo_pim_enrichment.job.job_parameters.constraint_collection_provider.simple_xlsx_import'] : $this->services['akeneo_pim_enrichment.job.job_parameters.constraint_collection_provider.simple_xlsx_import'] = new \Akeneo\Tool\Component\Connector\Job\JobParameters\ConstraintCollectionProvider\SimpleXlsxImport(array(0 => 'xlsx_group_import', 1 => 'xlsx_category_import'))) && false ?: '_'}, array(0 => 'xlsx_product_model_import'));
