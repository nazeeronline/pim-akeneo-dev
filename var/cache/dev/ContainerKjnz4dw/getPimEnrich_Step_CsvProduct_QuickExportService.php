<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.step.csv_product.quick_export' shared service.

return $this->services['pim_enrich.step.csv_product.quick_export'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('quick_export', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.reader.database.product']) ? $this->services['pim_enrich.reader.database.product'] : $this->load(__DIR__.'/getPimEnrich_Reader_Database_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.connector.processor.quick_export.product']) ? $this->services['pim_enrich.connector.processor.quick_export.product'] : $this->load(__DIR__.'/getPimEnrich_Connector_Processor_QuickExport_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.file.csv_product_quick_export']) ? $this->services['pim_connector.writer.file.csv_product_quick_export'] : $this->load(__DIR__.'/getPimConnector_Writer_File_CsvProductQuickExportService.php')) && false ?: '_'}, 100);
