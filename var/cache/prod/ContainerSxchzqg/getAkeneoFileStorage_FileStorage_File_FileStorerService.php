<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_file_storage.file_storage.file.file_storer' shared service.

return $this->services['akeneo_file_storage.file_storage.file.file_storer'] = new \Akeneo\Tool\Component\FileStorage\File\FileStorer(${($_ = isset($this->services['oneup_flysystem.mount_manager']) ? $this->services['oneup_flysystem.mount_manager'] : $this->load(__DIR__.'/getOneupFlysystem_MountManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_file_storage.saver.file']) ? $this->services['akeneo_file_storage.saver.file'] : $this->load(__DIR__.'/getAkeneoFileStorage_Saver_FileService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_file_storage.file_storage.file_info_factory']) ? $this->services['akeneo_file_storage.file_storage.file_info_factory'] : $this->load(__DIR__.'/getAkeneoFileStorage_FileStorage_FileInfoFactoryService.php')) && false ?: '_'});
