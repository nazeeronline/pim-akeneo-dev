<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_file_storage.file_storage.file_info_factory' shared service.

return $this->services['akeneo_file_storage.file_storage.file_info_factory'] = new \Akeneo\Tool\Component\FileStorage\FileInfoFactory(${($_ = isset($this->services['akeneo_file_storage.file_storage.path_generator']) ? $this->services['akeneo_file_storage.file_storage.path_generator'] : $this->services['akeneo_file_storage.file_storage.path_generator'] = new \Akeneo\Tool\Component\FileStorage\PathGenerator()) && false ?: '_'}, 'Akeneo\\Tool\\Component\\FileStorage\\Model\\FileInfo');
