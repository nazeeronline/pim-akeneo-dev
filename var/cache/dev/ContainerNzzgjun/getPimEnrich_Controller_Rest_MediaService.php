<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.controller.rest.media' shared service.

return $this->services['pim_enrich.controller.rest.media'] = new \Akeneo\Pim\Enrichment\Bundle\Controller\InternalApi\MediaController(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_file_storage.file_storage.path_generator']) ? $this->services['akeneo_file_storage.file_storage.path_generator'] : $this->services['akeneo_file_storage.file_storage.path_generator'] = new \Akeneo\Tool\Component\FileStorage\PathGenerator()) && false ?: '_'}, '/tmp/pim/file_storage');
