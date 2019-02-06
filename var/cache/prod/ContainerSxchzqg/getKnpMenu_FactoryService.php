<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_menu.factory' shared service.

$this->services['knp_menu.factory'] = $instance = new \Knp\Menu\MenuFactory();

$instance->addExtension(new \Knp\Menu\Integration\Symfony\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}), 0);

return $instance;
