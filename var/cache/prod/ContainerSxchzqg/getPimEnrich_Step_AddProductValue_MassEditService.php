<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.step.add_product_value.mass_edit' shared service.

return $this->services['pim_enrich.step.add_product_value.mass_edit'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('perform', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.reader.database.filtered_product_and_product_model']) ? $this->services['pim_enrich.reader.database.filtered_product_and_product_model'] : $this->load(__DIR__.'/getPimEnrich_Reader_Database_FilteredProductAndProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.connector.processor.mass_edit.product.add_value']) ? $this->services['pim_enrich.connector.processor.mass_edit.product.add_value'] : $this->load(__DIR__.'/getPimEnrich_Connector_Processor_MassEdit_Product_AddValueService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.product']) ? $this->services['pim_connector.writer.database.product'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_ProductService.php')) && false ?: '_'}, 100);
