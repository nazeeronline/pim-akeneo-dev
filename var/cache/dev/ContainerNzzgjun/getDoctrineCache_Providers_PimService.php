<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine_cache.providers.pim' shared service.

return $this->services['doctrine_cache.providers.pim'] = new \Doctrine\Common\Cache\ChainCache(array(0 => ${($_ = isset($this->services['doctrine_cache.providers.pim_apcu']) ? $this->services['doctrine_cache.providers.pim_apcu'] : $this->services['doctrine_cache.providers.pim_apcu'] = new \Doctrine\Common\Cache\ApcuCache()) && false ?: '_'}, 1 => ${($_ = isset($this->services['doctrine_cache.providers.pim_array']) ? $this->services['doctrine_cache.providers.pim_array'] : $this->services['doctrine_cache.providers.pim_array'] = new \Doctrine\Common\Cache\ArrayCache()) && false ?: '_'}));
