<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.query.sorter.registry' shared service.

$this->services['pim_catalog.query.sorter.registry'] = $instance = new \Akeneo\Pim\Enrichment\Component\Product\Query\Sorter\SorterRegistry();

$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.datetime']) ? $this->services['pim_catalog.query.elasticsearch.sorter.datetime'] : $this->services['pim_catalog.query.elasticsearch.sorter.datetime'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Sorter\Field\BaseFieldSorter(array(0 => 'updated', 1 => 'created'))) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.family']) ? $this->services['pim_catalog.query.elasticsearch.sorter.family'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_FamilyService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.identifier']) ? $this->services['pim_catalog.query.elasticsearch.sorter.identifier'] : $this->services['pim_catalog.query.elasticsearch.sorter.identifier'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Sorter\IdentifierSorter(array(0 => 'identifier'), array(0 => 'pim_catalog_identifier'))) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.completeness']) ? $this->services['pim_catalog.query.elasticsearch.sorter.completeness'] : $this->services['pim_catalog.query.elasticsearch.sorter.completeness'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Sorter\Field\CompletenessSorter(array(0 => 'completeness'))) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.status']) ? $this->services['pim_catalog.query.elasticsearch.sorter.status'] : $this->services['pim_catalog.query.elasticsearch.sorter.status'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Sorter\Field\BaseFieldSorter(array(0 => 'enabled'))) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.id']) ? $this->services['pim_catalog.query.elasticsearch.sorter.id'] : $this->services['pim_catalog.query.elasticsearch.sorter.id'] = new \Akeneo\Pim\Enrichment\Bundle\Elasticsearch\Sorter\Field\BaseFieldSorter(array(0 => 'id'))) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.metric']) ? $this->services['pim_catalog.query.elasticsearch.sorter.metric'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_MetricService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.boolean']) ? $this->services['pim_catalog.query.elasticsearch.sorter.boolean'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_BooleanService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.text']) ? $this->services['pim_catalog.query.elasticsearch.sorter.text'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_TextService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.text_area']) ? $this->services['pim_catalog.query.elasticsearch.sorter.text_area'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_TextAreaService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.number']) ? $this->services['pim_catalog.query.elasticsearch.sorter.number'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_NumberService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.option']) ? $this->services['pim_catalog.query.elasticsearch.sorter.option'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_OptionService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.date']) ? $this->services['pim_catalog.query.elasticsearch.sorter.date'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_DateService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim.reference_data.query.sorter.attribute.reference_data']) ? $this->services['pim.reference_data.query.sorter.attribute.reference_data'] : $this->load(__DIR__.'/getPim_ReferenceData_Query_Sorter_Attribute_ReferenceDataService.php')) && false ?: '_'});
$instance->register(${($_ = isset($this->services['pim_catalog.query.elasticsearch.sorter.in_group']) ? $this->services['pim_catalog.query.elasticsearch.sorter.in_group'] : $this->load(__DIR__.'/getPimCatalog_Query_Elasticsearch_Sorter_InGroupService.php')) && false ?: '_'});

return $instance;
