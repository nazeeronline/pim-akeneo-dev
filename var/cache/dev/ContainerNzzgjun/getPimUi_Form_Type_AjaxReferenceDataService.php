<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_ui.form.type.ajax_reference_data' shared service.

return $this->services['pim_ui.form.type.ajax_reference_data'] = new \Akeneo\Platform\Bundle\UIBundle\Form\Type\AjaxReferenceDataType(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['pim_ui.form.transformer.ajax_reference_data.factory']) ? $this->services['pim_ui.form.transformer.ajax_reference_data.factory'] : $this->load(__DIR__.'/getPimUi_Form_Transformer_AjaxReferenceData_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_user.context.user']) ? $this->services['pim_user.context.user'] : $this->getPimUser_Context_UserService()) && false ?: '_'});
