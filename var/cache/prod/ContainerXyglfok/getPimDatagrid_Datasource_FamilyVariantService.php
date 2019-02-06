<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.datasource.family_variant' shared service.

return $this->services['pim_datagrid.datasource.family_variant'] = new \Oro\Bundle\PimDataGridBundle\Datasource\FamilyVariantDatasource(${($_ = isset($this->services['pim_enrich.repository.family_variant']) ? $this->services['pim_enrich.repository.family_variant'] : $this->load(__DIR__.'/getPimEnrich_Repository_FamilyVariantService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datasource.result_record.hydrator.default']) ? $this->services['pim_datagrid.datasource.result_record.hydrator.default'] : $this->services['pim_datagrid.datasource.result_record.hydrator.default'] = new \Oro\Bundle\PimDataGridBundle\Datasource\ResultRecord\Orm\ResultRecordHydrator()) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.normalizer.family_variant']) ? $this->services['pim_datagrid.normalizer.family_variant'] : $this->load(__DIR__.'/getPimDatagrid_Normalizer_FamilyVariantService.php')) && false ?: '_'});
