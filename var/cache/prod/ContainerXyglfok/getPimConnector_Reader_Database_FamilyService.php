<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.database.family' shared service.

return $this->services['pim_connector.reader.database.family'] = new \Akeneo\Tool\Component\Connector\Reader\Database\Reader(${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->load(__DIR__.'/getPimCatalog_Repository_FamilyService.php')) && false ?: '_'});
