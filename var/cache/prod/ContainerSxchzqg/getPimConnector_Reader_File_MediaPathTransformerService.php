<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.file.media_path_transformer' shared service.

return $this->services['pim_connector.reader.file.media_path_transformer'] = new \Akeneo\Tool\Component\Connector\Reader\File\MediaPathTransformer(${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'});