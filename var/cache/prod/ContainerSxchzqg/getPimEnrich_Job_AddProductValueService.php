<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.job.add_product_value' shared service.

return $this->services['pim_enrich.job.add_product_value'] = new \Akeneo\Tool\Component\Batch\Job\Job('add_product_value', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_enrich.step.add_product_value.mass_edit']) ? $this->services['pim_enrich.step.add_product_value.mass_edit'] : $this->load(__DIR__.'/getPimEnrich_Step_AddProductValue_MassEditService.php')) && false ?: '_'}));
