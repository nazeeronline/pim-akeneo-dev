<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.step.change_parent.mass_edit' shared service.

return $this->services['pim_enrich.step.change_parent.mass_edit'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('perform', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.reader.database.grouped_product_and_product_model']) ? $this->services['pim_enrich.reader.database.grouped_product_and_product_model'] : $this->load(__DIR__.'/getPimEnrich_Reader_Database_GroupedProductAndProductModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.connector.processor.mass_edit.product.change_parent']) ? $this->services['pim_enrich.connector.processor.mass_edit.product.change_parent'] : $this->load(__DIR__.'/getPimEnrich_Connector_Processor_MassEdit_Product_ChangeParentService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.writer.database.product_and_product_model_writer']) ? $this->services['pim_enrich.writer.database.product_and_product_model_writer'] : $this->load(__DIR__.'/getPimEnrich_Writer_Database_ProductAndProductModelWriterService.php')) && false ?: '_'});
