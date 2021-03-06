<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.archiver.file_reader_archiver' shared service.

$a = ${($_ = isset($this->services['akeneo_batch.job.job_registry']) ? $this->services['akeneo_batch.job.job_registry'] : $this->load(__DIR__.'/getAkeneoBatch_Job_JobRegistryService.php')) && false ?: '_'};

if (isset($this->services['pim_connector.archiver.file_reader_archiver'])) {
    return $this->services['pim_connector.archiver.file_reader_archiver'];
}

return $this->services['pim_connector.archiver.file_reader_archiver'] = new \Akeneo\Tool\Component\Connector\Archiver\FileReaderArchiver(${($_ = isset($this->services['oneup_flysystem.archivist_filesystem']) ? $this->services['oneup_flysystem.archivist_filesystem'] : $this->load(__DIR__.'/getOneupFlysystem_ArchivistFilesystemService.php')) && false ?: '_'}, $a);
