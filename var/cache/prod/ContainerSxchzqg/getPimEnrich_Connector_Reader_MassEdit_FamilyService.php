<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.connector.reader.mass_edit.family' shared service.

return $this->services['pim_enrich.connector.reader.mass_edit.family'] = new \Akeneo\Pim\Structure\Component\Reader\Database\MassEdit\FilteredFamilyReader(${($_ = isset($this->services['pim_catalog.repository.family']) ? $this->services['pim_catalog.repository.family'] : $this->load(__DIR__.'/getPimCatalog_Repository_FamilyService.php')) && false ?: '_'});
