<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.step.xlsx_product.export' shared service.

return $this->services['pim_connector.step.xlsx_product.export'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('export', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.database.product']) ? $this->services['pim_connector.reader.database.product'] : $this->load(__DIR__.'/getPimConnector_Reader_Database_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.normalization.product']) ? $this->services['pim_connector.processor.normalization.product'] : $this->load(__DIR__.'/getPimConnector_Processor_Normalization_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.xlsx_product']) ? $this->services['pim_connector.writer.file.xlsx_product'] : $this->load(__DIR__.'/getPimConnector_Writer_File_XlsxProductService.php')) && false ?: '_'}, 100);