<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_connector.tasklet.csv_attribute_group_import.ensure_attribute_group_order' shared service.

return $this->services['pim_connector.tasklet.csv_attribute_group_import.ensure_attribute_group_order'] = new \Akeneo\Pim\Enrichment\Component\Product\Connector\Job\EnsureConsistentAttributeGroupOrderTasklet(${($_ = isset($this->services['pim_catalog.repository.attribute_group']) ? $this->services['pim_catalog.repository.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Repository_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_connector.reader.file.csv_attribute_group']) ? $this->services['pim_connector.reader.file.csv_attribute_group'] : $this->load(__DIR__.'/getPimConnector_Reader_File_CsvAttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.saver.attribute_group']) ? $this->services['pim_catalog.saver.attribute_group'] : $this->load(__DIR__.'/getPimCatalog_Saver_AttributeGroupService.php')) && false ?: '_'}, ${($_ = isset($this->services['pim_catalog.doctrine.query.find_attribute_group_orders_equal_or_superior_to']) ? $this->services['pim_catalog.doctrine.query.find_attribute_group_orders_equal_or_superior_to'] : $this->load(__DIR__.'/getPimCatalog_Doctrine_Query_FindAttributeGroupOrdersEqualOrSuperiorToService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});
