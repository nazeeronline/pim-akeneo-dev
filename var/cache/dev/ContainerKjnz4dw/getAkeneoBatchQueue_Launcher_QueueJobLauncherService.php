<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_batch_queue.launcher.queue_job_launcher' shared service.

$a = ${($_ = isset($this->services['akeneo_batch.job.job_registry']) ? $this->services['akeneo_batch.job.job_registry'] : $this->load(__DIR__.'/getAkeneoBatch_Job_JobRegistryService.php')) && false ?: '_'};

if (isset($this->services['akeneo_batch_queue.launcher.queue_job_launcher'])) {
    return $this->services['akeneo_batch_queue.launcher.queue_job_launcher'];
}

return $this->services['akeneo_batch_queue.launcher.queue_job_launcher'] = new \Akeneo\Tool\Bundle\BatchQueueBundle\Launcher\QueueJobLauncher(${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_parameters_factory']) ? $this->services['akeneo_batch.job_parameters_factory'] : $this->load(__DIR__.'/getAkeneoBatch_JobParametersFactoryService.php')) && false ?: '_'}, $a, ${($_ = isset($this->services['akeneo_batch.job.job_parameters_validator']) ? $this->services['akeneo_batch.job.job_parameters_validator'] : $this->load(__DIR__.'/getAkeneoBatch_Job_JobParametersValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch_queue.queue.database_job_execution_queue']) ? $this->services['akeneo_batch_queue.queue.database_job_execution_queue'] : $this->load(__DIR__.'/getAkeneoBatchQueue_Queue_DatabaseJobExecutionQueueService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, 'dev');
