<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.form.type.datagrid_product_filter_choice' shared service.

return $this->services['pim_datagrid.form.type.datagrid_product_filter_choice'] = new \Oro\Bundle\PimDataGridBundle\Form\Type\DatagridFilterChoiceType(${($_ = isset($this->services['oro_datagrid.datagrid.manager']) ? $this->services['oro_datagrid.datagrid.manager'] : $this->services['oro_datagrid.datagrid.manager'] = new \Oro\Bundle\DataGridBundle\Datagrid\Manager($this)) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datagrid.configuration.product.filters_configurator']) ? $this->services['pim_datagrid.datagrid.configuration.product.filters_configurator'] : $this->load(__DIR__.'/getPimDatagrid_Datagrid_Configuration_Product_FiltersConfiguratorService.php')) && false ?: '_'}, 'product-grid');