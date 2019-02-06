<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.csv_product_model.import_associations' shared service.

return $this->services['pim_connector.step.csv_product_model.import_associations'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('import_model_associations', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.csv_product_model_association']) ? $this->services['pim_connector.reader.file.csv_product_model_association'] : $this->load(__DIR__.'/getPimConnector_Reader_File_CsvProductModelAssociationService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.denormalization.product_model_association']) ? $this->services['pim_connector.processor.denormalization.product_model_association'] : $this->load(__DIR__.'/getPimConnector_Processor_Denormalization_ProductModelAssociationService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.product_model_association']) ? $this->services['pim_connector.writer.database.product_model_association'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_ProductModelAssociationService.php')) && false ?: '_'}, 1);
