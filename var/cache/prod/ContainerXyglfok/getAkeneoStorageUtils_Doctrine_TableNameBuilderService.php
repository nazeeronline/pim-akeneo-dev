<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_storage_utils.doctrine.table_name_builder' shared service.

return $this->services['akeneo_storage_utils.doctrine.table_name_builder'] = new \Akeneo\Tool\Bundle\StorageUtilsBundle\Doctrine\TableNameBuilder($this, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
