<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.database.group_type' shared service.

return $this->services['pim_connector.reader.database.group_type'] = new \Akeneo\Tool\Component\Connector\Reader\Database\Reader(${($_ = isset($this->services['pim_catalog.repository.group_type']) ? $this->services['pim_catalog.repository.group_type'] : $this->load(__DIR__.'/getPimCatalog_Repository_GroupTypeService.php')) && false ?: '_'});
