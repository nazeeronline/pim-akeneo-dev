<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.job.add_association' shared service.

return $this->services['pim_enrich.job.add_association'] = new \Akeneo\Tool\Component\Batch\Job\Job('add_association', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['pim_enrich.step.add_association.mass_edit']) ? $this->services['pim_enrich.step.add_association.mass_edit'] : $this->load(__DIR__.'/getPimEnrich_Step_AddAssociation_MassEditService.php')) && false ?: '_'}));
