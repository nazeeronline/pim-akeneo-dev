<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.datasource.locale' shared service.

return $this->services['pim_datagrid.datasource.locale'] = new \Oro\Bundle\PimDataGridBundle\Datasource\RepositoryDatasource(${($_ = isset($this->services['pim_enrich.repository.locale']) ? $this->services['pim_enrich.repository.locale'] : $this->load(__DIR__.'/getPimEnrich_Repository_LocaleService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datasource.result_record.hydrator.default']) ? $this->services['pim_datagrid.datasource.result_record.hydrator.default'] : $this->services['pim_datagrid.datasource.result_record.hydrator.default'] = new \Oro\Bundle\PimDataGridBundle\Datasource\ResultRecord\Orm\ResultRecordHydrator()) && false ?: '_'});
