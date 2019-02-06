<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.xlsx_attribute.import' shared service.

return $this->services['pim_connector.step.xlsx_attribute.import'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('import', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.xlsx_attribute']) ? $this->services['pim_connector.reader.file.xlsx_attribute'] : $this->load(__DIR__.'/getPimConnector_Reader_File_XlsxAttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.denormalization.attribute']) ? $this->services['pim_connector.processor.denormalization.attribute'] : $this->load(__DIR__.'/getPimConnector_Processor_Denormalization_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.attribute']) ? $this->services['pim_connector.writer.database.attribute'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_AttributeService.php')) && false ?: '_'});