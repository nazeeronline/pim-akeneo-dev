<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.setter.association_field' shared service.

return $this->services['pim_catalog.updater.setter.association_field'] = new \Akeneo\Pim\Enrichment\Component\Product\Updater\Setter\AssociationFieldSetter(${($_ = isset($this->services['pim_catalog.repository.product']) ? $this->services['pim_catalog.repository.product'] : $this->getPimCatalog_Repository_ProductService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.product_model']) ? $this->services['pim_catalog.repository.product_model'] : $this->getPimCatalog_Repository_ProductModelService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.group']) ? $this->services['pim_catalog.repository.group'] : $this->getPimCatalog_Repository_GroupService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.association.missing_association_adder']) ? $this->services['pim_catalog.association.missing_association_adder'] : $this->load(__DIR__.'/getPimCatalog_Association_MissingAssociationAdderService.php')) && false ?: '_'}, array(0 => 'associations'));
