<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.xlsx_group_type_export.export' shared service.

return $this->services['pim_connector.step.xlsx_group_type_export.export'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('export', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.database.group_type']) ? $this->services['pim_connector.reader.database.group_type'] : $this->load(__DIR__.'/getPimConnector_Reader_Database_GroupTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.normalization.group_type']) ? $this->services['pim_connector.processor.normalization.group_type'] : $this->load(__DIR__.'/getPimConnector_Processor_Normalization_GroupTypeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.xlsx_group_type']) ? $this->services['pim_connector.writer.file.xlsx_group_type'] : $this->load(__DIR__.'/getPimConnector_Writer_File_XlsxGroupTypeService.php')) && false ?: '_'}, 10);
