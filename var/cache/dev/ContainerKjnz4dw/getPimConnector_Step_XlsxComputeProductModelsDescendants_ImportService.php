<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.xlsx_compute_product_models_descendants.import' shared service.

return $this->services['pim_connector.step.xlsx_compute_product_models_descendants.import'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('import_product_model_descendants', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.xlsx_product_model']) ? $this->services['pim_connector.reader.file.xlsx_product_model'] : $this->load(__DIR__.'/getPimConnector_Reader_File_XlsxProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.denormalization.product_model_loader']) ? $this->services['pim_connector.processor.denormalization.product_model_loader'] : $this->load(__DIR__.'/getPimConnector_Processor_Denormalization_ProductModelLoaderService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.product_model_descendants']) ? $this->services['pim_connector.writer.database.product_model_descendants'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_ProductModelDescendantsService.php')) && false ?: '_'}, 100);