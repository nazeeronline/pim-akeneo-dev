<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.connector.job.job_parameters.default_values_provider.product_xlsx_quick_export' shared service.

return $this->services['pim_enrich.connector.job.job_parameters.default_values_provider.product_xlsx_quick_export'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Job\JobParameters\DefaultValueProvider\ProductQuickExport(${($_ = isset($this->services['akeneo_pim_enrichment.job.job_parameters.default_values_provider.simple_xlsx_export']) ? $this->services['akeneo_pim_enrichment.job.job_parameters.default_values_provider.simple_xlsx_export'] : $this->services['akeneo_pim_enrichment.job.job_parameters.default_values_provider.simple_xlsx_export'] = new \Akeneo\Tool\Component\Connector\Job\JobParameters\DefaultValuesProvider\SimpleXlsxExport(array(0 => 'xlsx_group_export', 1 => 'xlsx_category_export'))) && false ?: '_'}, array(0 => 'xlsx_product_quick_export', 1 => 'xlsx_product_grid_context_quick_export'));