<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_security.acl.annotation_provider.cache.clearer' shared service.

return $this->services['oro_security.acl.annotation_provider.cache.clearer'] = new \Oro\Bundle\SecurityBundle\Cache\AclAnnotationCacheClearer(${($_ = isset($this->services['oro_security.acl.annotation_provider']) ? $this->services['oro_security.acl.annotation_provider'] : $this->getOroSecurity_Acl_AnnotationProviderService()) && false ?: '_'});
