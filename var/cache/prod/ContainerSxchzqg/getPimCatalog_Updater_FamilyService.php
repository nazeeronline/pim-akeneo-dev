<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.family' shared service.

return $this->services['pim_catalog.updater.family'] = new \Akeneo\Pim\Structure\Component\Updater\FamilyUpdater(${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->load(__DIR__.'/getPimCatalog_Repository_FamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.channel']) ? $this->services['pim_catalog.repository.channel'] : $this->getPimCatalog_Repository_ChannelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.factory.attribute_requirement']) ? $this->services['pim_catalog.factory.attribute_requirement'] : $this->services['pim_catalog.factory.attribute_requirement'] = new \Akeneo\Pim\Structure\Component\Factory\AttributeRequirementFactory('Akeneo\\Pim\\Structure\\Component\\Model\\AttributeRequirement')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute_requirement']) ? $this->services['pim_catalog.repository.attribute_requirement'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeRequirementService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_structure.updater.translatable']) ? $this->services['pim_structure.updater.translatable'] : $this->services['pim_structure.updater.translatable'] = new \Akeneo\Tool\Component\Localization\TranslatableUpdater()) && false ?: '_'});
