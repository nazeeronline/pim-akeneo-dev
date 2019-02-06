<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_import_export.controller.import_profile' shared service.

return $this->services['pim_import_export.controller.import_profile'] = new \Akeneo\Platform\Bundle\ImportExportBundle\Controller\ImportProfileController(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->getTemplatingService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job.job_registry']) ? $this->services['akeneo_batch.job.job_registry'] : $this->load(__DIR__.'/getAkeneoBatch_Job_JobRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_import_export.form.type.job_instance']) ? $this->services['pim_import_export.form.type.job_instance'] : $this->load(__DIR__.'/getPimImportExport_Form_Type_JobInstanceService.php')) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_instance_factory']) ? $this->services['akeneo_batch.job_instance_factory'] : $this->services['akeneo_batch.job_instance_factory'] = new \Akeneo\Tool\Bundle\BatchBundle\Job\JobInstanceFactory('Akeneo\\Tool\\Component\\Batch\\Model\\JobInstance')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['akeneo_batch.job_parameters_factory']) ? $this->services['akeneo_batch.job_parameters_factory'] : $this->load(__DIR__.'/getAkeneoBatch_JobParametersFactoryService.php')) && false ?: '_'}, 'import');
