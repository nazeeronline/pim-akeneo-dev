<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.attribute' shared service.

return $this->services['pim_catalog.factory.attribute'] = new \Akeneo\Pim\Structure\Component\Factory\AttributeFactory(${($_ = isset($this->services['pim_catalog.registry.attribute_type']) ? $this->services['pim_catalog.registry.attribute_type'] : $this->load(__DIR__.'/getPimCatalog_Registry_AttributeTypeService.php')) && false ?: '_'}, 'Akeneo\\Pim\\Structure\\Component\\Model\\Attribute', 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Model\\Product');
