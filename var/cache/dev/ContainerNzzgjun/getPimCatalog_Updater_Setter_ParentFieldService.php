<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.setter.parent_field' shared service.

return $this->services['pim_catalog.updater.setter.parent_field'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\ParentFieldSetter(${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'}, array(0 => 'parent'));
