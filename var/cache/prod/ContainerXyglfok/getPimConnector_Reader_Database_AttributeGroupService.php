<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.database.attribute_group' shared service.

return $this->services['pim_connector.reader.database.attribute_group'] = new \Akeneo\Tool\Component\Connector\Reader\Database\Reader(${($_ = isset($this->services['pim_catalog.repository.attribute_group']) ? $this->services['pim_catalog.repository.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeGroupService.php')) && false ?: '_'});
