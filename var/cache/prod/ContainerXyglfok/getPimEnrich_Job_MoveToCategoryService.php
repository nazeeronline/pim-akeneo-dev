<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.job.move_to_category' shared service.

$a = ${($_ = isset($this->services['pim_enrich.step.move_to_category.mass_edit']) ? $this->services['pim_enrich.step.move_to_category.mass_edit'] : $this->load(__DIR__.'/getPimEnrich_Step_MoveToCategory_MassEditService.php')) && false ?: '_'};

if (isset($this->services['pim_enrich.job.move_to_category'])) {
    return $this->services['pim_enrich.job.move_to_category'];
}

return $this->services['pim_enrich.job.move_to_category'] = new \Akeneo\Tool\Component\Batch\Job\Job('move_to_category', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, array(0 => $a));
