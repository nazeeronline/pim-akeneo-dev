<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.helper.static' shared service.

return $this->services['assetic.helper.static'] = new \Symfony\Bundle\AsseticBundle\Templating\StaticAsseticHelper(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->load(__DIR__.'/getAssets_PackagesService.php')) && false ?: '_'}, ${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->load(__DIR__.'/getAssetic_AssetFactoryService.php')) && false ?: '_'});
