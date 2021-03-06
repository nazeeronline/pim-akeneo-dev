<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.rest.attribute_group' shared service.

$a = ${($_ = isset($this->services['pim_catalog.filter.chained']) ? $this->services['pim_catalog.filter.chained'] : $this->load(__DIR__.'/getPimCatalog_Filter_ChainedService.php')) && false ?: '_'};

return $this->services['pim_enrich.controller.rest.attribute_group'] = new \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\AttributeGroupController(${($_ = isset($this->services['pim_catalog.repository.attribute_group']) ? $this->services['pim_catalog.repository.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.repository.attribute_group.search']) ? $this->services['pim_enrich.repository.attribute_group.search'] : $this->load(__DIR__.'/getPimEnrich_Repository_AttributeGroup_SearchService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_internal_api_serializer']) ? $this->services['pim_internal_api_serializer'] : $this->load(__DIR__.'/getPimInternalApiSerializerService.php')) && false ?: '_'}, $a, ${($_ = isset($this->services['pim_catalog.updater.attribute_group']) ? $this->services['pim_catalog.updater.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Updater_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.attribute_group']) ? $this->services['pim_catalog.saver.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Saver_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.remover.attribute_group']) ? $this->services['pim_catalog.remover.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Remover_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.updater.attribute']) ? $this->services['pim_catalog.updater.attribute'] : $this->load(__DIR__.'/getPimCatalog_Updater_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.attribute']) ? $this->services['pim_catalog.saver.attribute'] : $this->load(__DIR__.'/getPimCatalog_Saver_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.attribute_group']) ? $this->services['pim_catalog.factory.attribute_group'] : $this->services['pim_catalog.factory.attribute_group'] = new \Akeneo\Tool\Component\StorageUtils\Factory\SimpleFactory('Akeneo\\Pim\\Structure\\Component\\Model\\AttributeGroup')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, $a);
