<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_user.form.handler.group.api' shared service.

return $this->services['pim_user.form.handler.group.api'] = new \Akeneo\UserManagement\Bundle\Form\Handler\GroupHandler(${($_ = isset($this->services['pim_user.form.group.api']) ? $this->services['pim_user.form.group.api'] : $this->load(__DIR__.'/getPimUser_Form_Group_ApiService.php')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
