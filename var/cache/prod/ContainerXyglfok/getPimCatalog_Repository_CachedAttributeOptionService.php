<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.repository.cached_attribute_option' shared service.

return $this->services['pim_catalog.repository.cached_attribute_option'] = new \Akeneo\Tool\Component\StorageUtils\Repository\BaseCachedObjectRepository(${($_ = isset($this->services['pim_catalog.repository.attribute_option']) ? $this->services['pim_catalog.repository.attribute_option'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeOptionService.php')) && false ?: '_'});
