<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.updater.channel' shared service.

return $this->services['pim_catalog.updater.channel'] = new \Akeneo\Channel\Component\Updater\ChannelUpdater(${($_ = isset($this->services['pim_catalog.repository.category']) ? $this->services['pim_catalog.repository.category'] : $this->getPimCatalog_Repository_CategoryService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.locale']) ? $this->services['pim_catalog.repository.locale'] : $this->getPimCatalog_Repository_LocaleService()) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.currency']) ? $this->services['pim_catalog.repository.currency'] : $this->load(__DIR__.'/getPimCatalog_Repository_CurrencyService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.repository.attribute']) ? $this->services['pim_catalog.repository.attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeService.php')) && false ?: '_'}, ${($_ = isset($this->services['channel.updater.translatable']) ? $this->services['channel.updater.translatable'] : $this->services['channel.updater.translatable'] = new \Akeneo\Tool\Component\Localization\TranslatableUpdater()) && false ?: '_'});
