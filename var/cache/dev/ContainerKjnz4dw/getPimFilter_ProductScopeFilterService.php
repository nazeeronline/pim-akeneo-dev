<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_filter.product_scope_filter' shared service.

return $this->services['pim_filter.product_scope_filter'] = new \Oro\Bundle\PimFilterBundle\Filter\Product\ScopeFilter(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_filter.product_utility']) ? $this->services['pim_filter.product_utility'] : $this->services['pim_filter.product_utility'] = new \Oro\Bundle\PimFilterBundle\Filter\ProductFilterUtility()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.context.catalog']) ? $this->services['pim_catalog.context.catalog'] : $this->services['pim_catalog.context.catalog'] = new \Akeneo\Pim\Enrichment\Bundle\Context\CatalogContext()) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'});
