<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.datasource.job_execution' shared service.

return $this->services['pim_datagrid.datasource.job_execution'] = new \Oro\Bundle\PimDataGridBundle\Datasource\RepositoryDatasource(${($_ = isset($this->services['pim_enrich.repository.job_execution']) ? $this->services['pim_enrich.repository.job_execution'] : $this->load(__DIR__.'/getPimEnrich_Repository_JobExecutionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datasource.result_record.hydrator.default']) ? $this->services['pim_datagrid.datasource.result_record.hydrator.default'] : $this->services['pim_datagrid.datasource.result_record.hydrator.default'] = new \Oro\Bundle\PimDataGridBundle\Datasource\ResultRecord\Orm\ResultRecordHydrator()) && false ?: '_'});
