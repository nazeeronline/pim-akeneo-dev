<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.remover.category' shared service.

return $this->services['pim_catalog.remover.category'] = new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\Common\Remover\BaseRemover(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Category\\Model\\Category');
