<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.database.attribute_option' shared service.

return $this->services['pim_connector.reader.database.attribute_option'] = new \Akeneo\Pim\Structure\Component\Reader\Database\AttributeOptionReader(${($_ = isset($this->services['pim_catalog.repository.attribute_option']) ? $this->services['pim_catalog.repository.attribute_option'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeOptionService.php')) && false ?: '_'});