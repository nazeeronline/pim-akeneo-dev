<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_file_storage.file_storage.file.file_fetcher' shared service.

return $this->services['akeneo_file_storage.file_storage.file.file_fetcher'] = new \Akeneo\Tool\Component\FileStorage\File\FileFetcher(${($_ = isset($this->services['oneup_flysystem.tmp_storage_filesystem']) ? $this->services['oneup_flysystem.tmp_storage_filesystem'] : $this->load(__DIR__.'/getOneupFlysystem_TmpStorageFilesystemService.php')) && false ?: '_'});