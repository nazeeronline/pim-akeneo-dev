<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.imagine.loader.flysystem' shared service.

return $this->services['pim_enrich.imagine.loader.flysystem'] = new \Akeneo\Platform\Bundle\UIBundle\Imagine\FlysystemLoader(${($_ = isset($this->services['akeneo_file_storage.file_storage.filesystem_provider']) ? $this->services['akeneo_file_storage.file_storage.filesystem_provider'] : $this->load(__DIR__.'/getAkeneoFileStorage_FileStorage_FilesystemProviderService.php')) && false ?: '_'}, array(0 => 'catalogStorage'));
