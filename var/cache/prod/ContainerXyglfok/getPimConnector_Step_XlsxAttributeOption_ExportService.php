<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.xlsx_attribute_option.export' shared service.

return $this->services['pim_connector.step.xlsx_attribute_option.export'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('export', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.database.attribute_option']) ? $this->services['pim_connector.reader.database.attribute_option'] : $this->load(__DIR__.'/getPimConnector_Reader_Database_AttributeOptionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.normalization.attribute_option']) ? $this->services['pim_connector.processor.normalization.attribute_option'] : $this->load(__DIR__.'/getPimConnector_Processor_Normalization_AttributeOptionService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.xlsx_attribute_option']) ? $this->services['pim_connector.writer.file.xlsx_attribute_option'] : $this->load(__DIR__.'/getPimConnector_Writer_File_XlsxAttributeOptionService.php')) && false ?: '_'}, 10);
