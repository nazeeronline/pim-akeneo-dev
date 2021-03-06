<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_enrich.provider.form.chained' shared service.

$this->services['pim_enrich.provider.form.chained'] = $instance = new \Akeneo\Platform\Bundle\UIBundle\Provider\Form\FormChainedProvider();

$instance->addProvider(${($_ = isset($this->services['pim_channel.provider.form.job_instance']) ? $this->services['pim_channel.provider.form.job_instance'] : $this->load(__DIR__.'/getPimChannel_Provider_Form_JobInstanceService.php')) && false ?: '_'});
$instance->addProvider(${($_ = isset($this->services['pim_enrich.provider.form.product']) ? $this->services['pim_enrich.provider.form.product'] : $this->services['pim_enrich.provider.form.product'] = new \Akeneo\Pim\Enrichment\Bundle\Provider\Form\ProductFormProvider()) && false ?: '_'});
$instance->addProvider(${($_ = isset($this->services['pim_enrich.provider.form.product_model']) ? $this->services['pim_enrich.provider.form.product_model'] : $this->services['pim_enrich.provider.form.product_model'] = new \Akeneo\Pim\Enrichment\Bundle\Provider\Form\ProductModelFormProvider()) && false ?: '_'});
$instance->addProvider(${($_ = isset($this->services['pim_enrichment.provider.form.job_instance']) ? $this->services['pim_enrichment.provider.form.job_instance'] : $this->load(__DIR__.'/getPimEnrichment_Provider_Form_JobInstanceService.php')) && false ?: '_'});
$instance->addProvider(${($_ = isset($this->services['pim_structure.provider.form.job_instance']) ? $this->services['pim_structure.provider.form.job_instance'] : $this->load(__DIR__.'/getPimStructure_Provider_Form_JobInstanceService.php')) && false ?: '_'});

return $instance;
