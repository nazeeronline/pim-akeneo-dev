<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.reader.database.channel' shared service.

return $this->services['pim_connector.reader.database.channel'] = new \Akeneo\Tool\Component\Connector\Reader\Database\Reader(${($_ = isset($this->services['pim_catalog.repository.channel']) ? $this->services['pim_catalog.repository.channel'] : $this->getPimCatalog_Repository_ChannelService()) && false ?: '_'});