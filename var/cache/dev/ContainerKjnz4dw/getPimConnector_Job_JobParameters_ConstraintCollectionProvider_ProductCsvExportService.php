<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.job.job_parameters.constraint_collection_provider.product_csv_export' shared service.

return $this->services['pim_connector.job.job_parameters.constraint_collection_provider.product_csv_export'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Job\JobParameters\ConstraintCollectionProvider\ProductCsvExport(${($_ = isset($this->services['akeneo_pim_enrichment.job.job_parameters.constraint_collection_provider.simple_csv_export']) ? $this->services['akeneo_pim_enrichment.job.job_parameters.constraint_collection_provider.simple_csv_export'] : $this->services['akeneo_pim_enrichment.job.job_parameters.constraint_collection_provider.simple_csv_export'] = new \Akeneo\Tool\Component\Connector\Job\JobParameters\ConstraintCollectionProvider\SimpleCsvExport(array(0 => 'csv_group_export', 1 => 'csv_category_export'))) && false ?: '_'}, array(0 => 'csv_product_export'));
