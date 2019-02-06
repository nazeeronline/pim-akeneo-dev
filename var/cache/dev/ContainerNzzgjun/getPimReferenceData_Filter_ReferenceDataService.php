<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_reference_data.filter.reference_data' shared service.

return $this->services['pim_reference_data.filter.reference_data'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductValue\ReferenceDataFilter(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_filter.product_utility']) ? $this->services['pim_filter.product_utility'] : $this->services['pim_filter.product_utility'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductFilterUtility()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->getPimCatalog_Repository_AttributeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_reference_data.registry']) ? $this->services['pim_reference_data.registry'] : $this->services['pim_reference_data.registry'] = new \Akeneo\Pim\Structure\Component\ReferenceData\ConfigurationRegistry()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute_option']) ? $this->services['pim_catalog.repository.attribute_option'] : $this->getPimCatalog_Repository_AttributeOptionService()) && false ?: '_'});
