<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_batch_queue.queue.job_execution_message_repository' shared service.

return $this->services['akeneo_batch_queue.queue.job_execution_message_repository'] = new \Akeneo\Tool\Bundle\BatchQueueBundle\Queue\JobExecutionMessageRepository(${($_ = isset($this->services['akeneo_batch.entity_manager.persisted_connection_entity_manager']) ? $this->services['akeneo_batch.entity_manager.persisted_connection_entity_manager'] : $this->load(__DIR__.'/getAkeneoBatch_EntityManager_PersistedConnectionEntityManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch_queue.hydrator_job_execution_message_hydrator']) ? $this->services['akeneo_batch_queue.hydrator_job_execution_message_hydrator'] : $this->load(__DIR__.'/getAkeneoBatchQueue_HydratorJobExecutionMessageHydratorService.php')) && false ?: '_'});
