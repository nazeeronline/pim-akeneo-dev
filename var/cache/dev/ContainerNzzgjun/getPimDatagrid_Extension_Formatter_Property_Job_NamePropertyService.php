<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.formatter.property.job.name_property' shared service.

return $this->services['pim_datagrid.extension.formatter.property.job.name_property'] = new \Oro\Bundle\PimDataGridBundle\Extension\Formatter\Property\Job\NameProperty(${($_ = isset($this->services['akeneo_batch.job.job_registry']) ? $this->services['akeneo_batch.job.job_registry'] : $this->load(__DIR__.'/getAkeneoBatch_Job_JobRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
