<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_import_export.normalizer.job_execution' shared service.

return $this->services['pim_import_export.normalizer.job_execution'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Normalizer\JobExecutionNormalizer(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.normalizer.standard.job_instance']) ? $this->services['pim_catalog.normalizer.standard.job_instance'] : $this->services['pim_catalog.normalizer.standard.job_instance'] = new \Akeneo\Tool\Component\Batch\Normalizer\Standard\JobInstanceNormalizer()) && false ?: '_'});
