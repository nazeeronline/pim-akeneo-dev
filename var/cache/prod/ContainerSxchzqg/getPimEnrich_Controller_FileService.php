<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.file' shared service.

return $this->services['pim_enrich.controller.file'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\Ui\FileController(${($_ = isset($this->services['liip_imagine.controller']) ? $this->services['liip_imagine.controller'] : $this->load(__DIR__.'/getLiipImagine_ControllerService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_file_storage.file_storage.filesystem_provider']) ? $this->services['akeneo_file_storage.file_storage.filesystem_provider'] : $this->load(__DIR__.'/getAkeneoFileStorage_FileStorage_FilesystemProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_file_storage.repository.file_info']) ? $this->services['akeneo_file_storage.repository.file_info'] : $this->load(__DIR__.'/getAkeneoFileStorage_Repository_FileInfoService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.guesser.file_type']) ? $this->services['pim_enrich.guesser.file_type'] : $this->services['pim_enrich.guesser.file_type'] = new \Akeneo\Pim\Enrichment\Bundle\File\FileTypeGuesser()) && false ?: '_'}, ${($_ = isset($this->services['pim_enrich.provider.default_image']) ? $this->services['pim_enrich.provider.default_image'] : $this->load(__DIR__.'/getPimEnrich_Provider_DefaultImageService.php')) && false ?: '_'}, array(0 => 'catalogStorage'));
