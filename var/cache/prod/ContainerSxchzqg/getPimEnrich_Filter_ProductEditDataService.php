<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.filter.product_edit_data' shared service.

return $this->services['pim_enrich.filter.product_edit_data'] = new \Akeneo\Pim\Enrichment\Bundle\Filter\ProductEditDataFilter(${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.filter.product_values_edit_data']) ? $this->services['pim_enrich.filter.product_values_edit_data'] : $this->load(__DIR__.'/getPimEnrich_Filter_ProductValuesEditDataService.php')) && false ?: '_'});
