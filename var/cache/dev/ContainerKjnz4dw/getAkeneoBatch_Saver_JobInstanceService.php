<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_batch.saver.job_instance' shared service.

return $this->services['akeneo_batch.saver.job_instance'] = new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Saver\BaseSaver(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, 'Akeneo\\Tool\\Component\\Batch\\Model\\JobInstance');