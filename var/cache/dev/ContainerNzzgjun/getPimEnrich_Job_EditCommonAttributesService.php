<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.job.edit_common_attributes' shared service.

return $this->services['pim_enrich.job.edit_common_attributes'] = new \Akeneo\Tool\Component\Batch\Job\Job('edit_common_attributes', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_enrich.step.edit_common_attributes.mass_edit']) ? $this->services['pim_enrich.step.edit_common_attributes.mass_edit'] : $this->load(__DIR__.'/getPimEnrich_Step_EditCommonAttributes_MassEditService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['pim_enrich.step.clean']) ? $this->services['pim_enrich.step.clean'] : $this->load(__DIR__.'/getPimEnrich_Step_CleanService.php')) && false ?: '_'}));
