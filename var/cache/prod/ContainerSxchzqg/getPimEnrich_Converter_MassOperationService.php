<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.converter.mass_operation' shared service.

return $this->services['pim_enrich.converter.mass_operation'] = new \Akeneo\Pim\Enrichment\Component\Product\Converter\MassOperationConverter(${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.converter.enrich_to_standard.product_value']) ? $this->services['pim_enrich.converter.enrich_to_standard.product_value'] : $this->load(__DIR__.'/getPimEnrich_Converter_EnrichToStandard_ProductValueService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.localization.localizer.converter']) ? $this->services['pim_catalog.localization.localizer.converter'] : $this->load(__DIR__.'/getPimCatalog_Localization_Localizer_ConverterService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.filter.product_values_edit_data']) ? $this->services['pim_enrich.filter.product_values_edit_data'] : $this->load(__DIR__.'/getPimEnrich_Filter_ProductValuesEditDataService.php')) && false ?: '_'}, ${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'});
