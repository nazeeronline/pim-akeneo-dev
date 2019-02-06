<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.xlsx_family.import' shared service.

return $this->services['pim_connector.step.xlsx_family.import'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('import', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.xlsx_family']) ? $this->services['pim_connector.reader.file.xlsx_family'] : $this->load(__DIR__.'/getPimConnector_Reader_File_XlsxFamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.denormalization.family']) ? $this->services['pim_connector.processor.denormalization.family'] : $this->load(__DIR__.'/getPimConnector_Processor_Denormalization_FamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.family']) ? $this->services['pim_connector.writer.database.family'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_FamilyService.php')) && false ?: '_'});
