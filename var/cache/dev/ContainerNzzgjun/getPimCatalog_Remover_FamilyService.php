<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.remover.family' shared service.

return $this->services['pim_catalog.remover.family'] = new \Akeneo\Pim\Structure\Component\Remover\FamilyRemover(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.doctrine.query.count_products_with_family']) ? $this->services['pim_catalog.doctrine.query.count_products_with_family'] : $this->load(__DIR__.'/getPimCatalog_Doctrine_Query_CountProductsWithFamilyService.php')) && false ?: '_'});
