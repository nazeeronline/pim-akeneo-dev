<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.exception_listener' shared service.

return $this->services['fos_rest.exception_listener'] = new \FOS\RestBundle\EventListener\ExceptionListener('fos_rest.exception.twig_controller:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'});
