<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.datasource.group' shared service.

return $this->services['pim_datagrid.datasource.group'] = new \Oro\Bundle\PimDataGridBundle\Datasource\RepositoryDatasource(${($_ = isset($this->services['pim_enrich.repository.group']) ? $this->services['pim_enrich.repository.group'] : $this->load(__DIR__.'/getPimEnrich_Repository_GroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datasource.result_record.hydrator.default']) ? $this->services['pim_datagrid.datasource.result_record.hydrator.default'] : $this->services['pim_datagrid.datasource.result_record.hydrator.default'] = new \Oro\Bundle\PimDataGridBundle\Datasource\ResultRecord\Orm\ResultRecordHydrator()) && false ?: '_'});
