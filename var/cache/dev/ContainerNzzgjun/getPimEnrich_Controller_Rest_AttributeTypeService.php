<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.rest.attribute_type' shared service.

return $this->services['pim_enrich.controller.rest.attribute_type'] = new \Akeneo\Pim\Structure\Bundle\Controller\InternalApi\AttributeTypeController(${($_ = isset($this->services['pim_catalog.registry.attribute_type']) ? $this->services['pim_catalog.registry.attribute_type'] : $this->load(__DIR__.'/getPimCatalog_Registry_AttributeTypeService.php')) && false ?: '_'});
