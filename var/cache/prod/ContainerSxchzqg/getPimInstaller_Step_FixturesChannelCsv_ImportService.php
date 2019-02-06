<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_installer.step.fixtures_channel_csv.import' shared service.

return $this->services['pim_installer.step.fixtures_channel_csv.import'] = new \Akeneo\Tool\Component\Batch\Step\ItemStep('import', ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_repository']) ? $this->services['akeneo_batch.job_repository'] : $this->load(__DIR__.'/getAkeneoBatch_JobRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.csv_channel']) ? $this->services['pim_connector.reader.file.csv_channel'] : $this->load(__DIR__.'/getPimConnector_Reader_File_CsvChannelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.processor.denormalization.channel']) ? $this->services['pim_connector.processor.denormalization.channel'] : $this->load(__DIR__.'/getPimConnector_Processor_Denormalization_ChannelService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.writer.database.channel']) ? $this->services['pim_connector.writer.database.channel'] : $this->load(__DIR__.'/getPimConnector_Writer_Database_ChannelService.php')) && false ?: '_'});
