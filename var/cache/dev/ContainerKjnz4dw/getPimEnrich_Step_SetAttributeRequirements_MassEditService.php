<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.step.set_attribute_requirements.mass_edit' shared service.

return $this->services['pim_enrich.step.set_attribute_requirements.mass_edit'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('perform', ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->getAkeneoBatch_JobRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.connector.reader.mass_edit.family']) ? $this->services['pim_enrich.connector.reader.mass_edit.family'] : $this->load(__DIR__.'/getPimEnrich_Connector_Reader_MassEdit_FamilyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.connector.processor.mass_edit.family.set_requirements']) ? $this->services['pim_enrich.connector.processor.mass_edit.family.set_requirements'] : $this->load(__DIR__.'/getPimEnrich_Connector_Processor_MassEdit_Family_SetRequirementsService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.family']) ? $this->services['pim_connector.writer.database.family'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_FamilyService.php')) && false ?: '_'}, 100);
