<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.fos_oauth_server.api' shared service.

return $this->services['security.authentication.listener.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Firewall\OAuthListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->load(__DIR__.'/getFosOauthServer_ServerService.php')) && false ?: '_'});
