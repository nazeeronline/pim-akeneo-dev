<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oro_datagrid.extension.action' shared service.

$this->services['oro_datagrid.extension.action'] = $instance = new \Oro\Bundle\DataGridBundle\Extension\Action\ActionExtension($this, ${($_ = isset($this->services['oro_security.security_facade']) ? $this->services['oro_security.security_facade'] : $this->getOroSecurity_SecurityFacadeService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});

$instance->registerAction('navigate', 'oro_datagrid.extension.action.type.navigate');
$instance->registerAction('ajax', 'oro_datagrid.extension.action.type.ajax');
$instance->registerAction('delete', 'oro_datagrid.extension.action.type.delete');
$instance->registerAction('revoke', 'oro_datagrid.extension.action.type.revoke');
$instance->registerAction('tab-redirect', 'pim_datagrid.extension.action.type.tab_redirect');
$instance->registerAction('navigate-product-and-product-model', 'pim_enrich.extension.action.type.navigate_product_and_product_model');
$instance->registerAction('edit-in-modal', 'pim_enrich.extension.action.type.edit_in_modal');
$instance->registerAction('delete-product', 'pim_enrich.extension.action.type.delete_product');
$instance->registerAction('toggle-product', 'pim_enrich.extension.action.type.toggle_product');

return $instance;
