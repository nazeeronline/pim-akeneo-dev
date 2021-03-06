<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.factory.value' shared service.

$this->services['pim_catalog.factory.value'] = $instance = new \Akeneo\Pim\Enrichment\Component\Product\Factory\ValueFactory(${($_ = isset($this->services['pim_catalog.validator.helper.attribute']) ? $this->services['pim_catalog.validator.helper.attribute'] : $this->getPimCatalog_Validator_Helper_AttributeService()) && false ?: '_'});

$a = ${($_ = isset($this->services['pim_catalog.repository.cached_attribute_option']) ? $this->services['pim_catalog.repository.cached_attribute_option'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeOptionService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['akeneo_file_storage.repository.file_info']) ? $this->services['akeneo_file_storage.repository.file_info'] : $this->load(__DIR__.'/getAkeneoFileStorage_Repository_FileInfoService.php')) && false ?: '_'};
$c = ${($_ = isset($this->services['pim_reference_data.repository_resolver']) ? $this->services['pim_reference_data.repository_resolver'] : $this->getPimReferenceData_RepositoryResolverService()) && false ?: '_'};

$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ScalarValueFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ScalarValue', 'pim_catalog_text'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ScalarValueFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ScalarValue', 'pim_catalog_textarea'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ScalarValueFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ScalarValue', 'pim_catalog_number'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ScalarValueFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ScalarValue', 'pim_catalog_boolean'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ScalarValueFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ScalarValue', 'pim_catalog_identifier'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\MetricValueFactory(${($_ = isset($this->services['pim_catalog.factory.metric']) ? $this->services['pim_catalog.factory.metric'] : $this->load(__DIR__.'/getPimCatalog_Factory_MetricService.php')) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\MetricValue', 'pim_catalog_metric'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\PriceCollectionValueFactory(${($_ = isset($this->services['pim_catalog.factory.price']) ? $this->services['pim_catalog.factory.price'] : $this->load(__DIR__.'/getPimCatalog_Factory_PriceService.php')) && false ?: '_'}, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\PriceCollectionValue', 'pim_catalog_price_collection', ${($_ = isset($this->services['pim_catalog.query.find_activated_currencies']) ? $this->services['pim_catalog.query.find_activated_currencies'] : $this->load(__DIR__.'/getPimCatalog_Query_FindActivatedCurrenciesService.php')) && false ?: '_'}));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\OptionValueFactory($a, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\OptionValue', 'pim_catalog_simpleselect'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\OptionsValueFactory($a, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\OptionsValue', 'pim_catalog_multiselect'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\MediaValueFactory($b, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\MediaValue', 'pim_catalog_file'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\MediaValueFactory($b, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\MediaValue', 'pim_catalog_image'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\DateValueFactory('Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\DateValue', 'pim_catalog_date'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ReferenceDataValueFactory($c, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ReferenceDataValue', 'pim_reference_data_simpleselect'));
$instance->registerFactory(new \Akeneo\Pim\Enrichment\Component\Product\Factory\Value\ReferenceDataCollectionValueFactory($c, 'Akeneo\\Pim\\Enrichment\\Component\\Product\\Value\\ReferenceDataCollectionValue', 'pim_reference_data_multiselect'));

return $instance;
