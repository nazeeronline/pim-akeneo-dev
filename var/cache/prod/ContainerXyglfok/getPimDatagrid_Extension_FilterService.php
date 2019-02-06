<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_datagrid.extension.filter' shared service.

$this->services['pim_datagrid.extension.filter'] = $instance = new \Oro\Bundle\PimDataGridBundle\Extension\Filter\FilterExtension(${($_ = isset($this->services['oro_datagrid.datagrid.request_params']) ? $this->services['oro_datagrid.datagrid.request_params'] : $this->load(__DIR__.'/getOroDatagrid_Datagrid_RequestParamsService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['pim_datagrid.datasource.adapter_resolver']) ? $this->services['pim_datagrid.datasource.adapter_resolver'] : $this->load(__DIR__.'/getPimDatagrid_Datasource_AdapterResolverService.php')) && false ?: '_'});

$instance->addFilter('string', ${($_ = isset($this->services['oro_filter.string_filter']) ? $this->services['oro_filter.string_filter'] : $this->load(__DIR__.'/getOroFilter_StringFilterService.php')) && false ?: '_'});
$instance->addFilter('search', ${($_ = isset($this->services['oro_filter.search_filter']) ? $this->services['oro_filter.search_filter'] : $this->load(__DIR__.'/getOroFilter_SearchFilterService.php')) && false ?: '_'});
$instance->addFilter('selectrow', ${($_ = isset($this->services['oro_filter.select_row_filter']) ? $this->services['oro_filter.select_row_filter'] : $this->load(__DIR__.'/getOroFilter_SelectRowFilterService.php')) && false ?: '_'});
$instance->addFilter('number', ${($_ = isset($this->services['oro_filter.number_filter']) ? $this->services['oro_filter.number_filter'] : $this->load(__DIR__.'/getOroFilter_NumberFilterService.php')) && false ?: '_'});
$instance->addFilter('percent', ${($_ = isset($this->services['oro_filter.percent_filter']) ? $this->services['oro_filter.percent_filter'] : $this->load(__DIR__.'/getOroFilter_PercentFilterService.php')) && false ?: '_'});
$instance->addFilter('choice', ${($_ = isset($this->services['oro_filter.choice_filter']) ? $this->services['oro_filter.choice_filter'] : $this->load(__DIR__.'/getOroFilter_ChoiceFilterService.php')) && false ?: '_'});
$instance->addFilter('entity', ${($_ = isset($this->services['oro_filter.entity_filter']) ? $this->services['oro_filter.entity_filter'] : $this->load(__DIR__.'/getOroFilter_EntityFilterService.php')) && false ?: '_'});
$instance->addFilter('boolean', ${($_ = isset($this->services['oro_filter.boolean_filter']) ? $this->services['oro_filter.boolean_filter'] : $this->load(__DIR__.'/getOroFilter_BooleanFilterService.php')) && false ?: '_'});
$instance->addFilter('date', ${($_ = isset($this->services['oro_filter.date_range_filter']) ? $this->services['oro_filter.date_range_filter'] : $this->load(__DIR__.'/getOroFilter_DateRangeFilterService.php')) && false ?: '_'});
$instance->addFilter('datetime', ${($_ = isset($this->services['oro_filter.datetime_range_filter']) ? $this->services['oro_filter.datetime_range_filter'] : $this->load(__DIR__.'/getOroFilter_DatetimeRangeFilterService.php')) && false ?: '_'});
$instance->addFilter('ajax_choice', ${($_ = isset($this->services['pim_filter.ajax_choice_filter']) ? $this->services['pim_filter.ajax_choice_filter'] : $this->load(__DIR__.'/getPimFilter_AjaxChoiceFilterService.php')) && false ?: '_'});
$instance->addFilter('product_scope', ${($_ = isset($this->services['pim_filter.product_scope_filter']) ? $this->services['pim_filter.product_scope_filter'] : $this->load(__DIR__.'/getPimFilter_ProductScopeFilterService.php')) && false ?: '_'});
$instance->addFilter('product_category', ${($_ = isset($this->services['pim_filter.product_category_filter']) ? $this->services['pim_filter.product_category_filter'] : $this->load(__DIR__.'/getPimFilter_ProductCategoryFilterService.php')) && false ?: '_'});
$instance->addFilter('product_groups', ${($_ = isset($this->services['pim_filter.product_groups_filter']) ? $this->services['pim_filter.product_groups_filter'] : $this->load(__DIR__.'/getPimFilter_ProductGroupsFilterService.php')) && false ?: '_'});
$instance->addFilter('product_family', ${($_ = isset($this->services['pim_filter.product_family_filter']) ? $this->services['pim_filter.product_family_filter'] : $this->load(__DIR__.'/getPimFilter_ProductFamilyFilterService.php')) && false ?: '_'});
$instance->addFilter('product_completeness', ${($_ = isset($this->services['pim_filter.product_completeness_filter']) ? $this->services['pim_filter.product_completeness_filter'] : $this->load(__DIR__.'/getPimFilter_ProductCompletenessFilterService.php')) && false ?: '_'});
$instance->addFilter('product_and_product_model_completeness', ${($_ = isset($this->services['pim_filter.product_and_product_model_completeness_filter']) ? $this->services['pim_filter.product_and_product_model_completeness_filter'] : $this->load(__DIR__.'/getPimFilter_ProductAndProductModelCompletenessFilterService.php')) && false ?: '_'});
$instance->addFilter('product_date', ${($_ = isset($this->services['pim_filter.product_date_filter']) ? $this->services['pim_filter.product_date_filter'] : $this->load(__DIR__.'/getPimFilter_ProductDateFilterService.php')) && false ?: '_'});
$instance->addFilter('product_enabled', ${($_ = isset($this->services['pim_filter.product_enabled_filter']) ? $this->services['pim_filter.product_enabled_filter'] : $this->load(__DIR__.'/getPimFilter_ProductEnabledFilterService.php')) && false ?: '_'});
$instance->addFilter('product_in_group', ${($_ = isset($this->services['pim_filter.product_in_group_filter']) ? $this->services['pim_filter.product_in_group_filter'] : $this->load(__DIR__.'/getPimFilter_ProductInGroupFilterService.php')) && false ?: '_'});
$instance->addFilter('product_is_associated', ${($_ = isset($this->services['pim_filter.product_is_associated_filter']) ? $this->services['pim_filter.product_is_associated_filter'] : $this->load(__DIR__.'/getPimFilter_ProductIsAssociatedFilterService.php')) && false ?: '_'});
$instance->addFilter('product_value_string', ${($_ = isset($this->services['pim_filter.product_value_string']) ? $this->services['pim_filter.product_value_string'] : $this->load(__DIR__.'/getPimFilter_ProductValueStringService.php')) && false ?: '_'});
$instance->addFilter('product_value_choice', ${($_ = isset($this->services['pim_filter.product_value_choice']) ? $this->services['pim_filter.product_value_choice'] : $this->load(__DIR__.'/getPimFilter_ProductValueChoiceService.php')) && false ?: '_'});
$instance->addFilter('product_value_number', ${($_ = isset($this->services['pim_filter.product_value_number']) ? $this->services['pim_filter.product_value_number'] : $this->load(__DIR__.'/getPimFilter_ProductValueNumberService.php')) && false ?: '_'});
$instance->addFilter('product_value_date', ${($_ = isset($this->services['pim_filter.product_value_date']) ? $this->services['pim_filter.product_value_date'] : $this->load(__DIR__.'/getPimFilter_ProductValueDateService.php')) && false ?: '_'});
$instance->addFilter('product_value_datetime', ${($_ = isset($this->services['pim_filter.product_value_datetime']) ? $this->services['pim_filter.product_value_datetime'] : $this->load(__DIR__.'/getPimFilter_ProductValueDatetimeService.php')) && false ?: '_'});
$instance->addFilter('product_value_boolean', ${($_ = isset($this->services['pim_filter.product_value_boolean']) ? $this->services['pim_filter.product_value_boolean'] : $this->load(__DIR__.'/getPimFilter_ProductValueBooleanService.php')) && false ?: '_'});
$instance->addFilter('product_value_metric', ${($_ = isset($this->services['pim_filter.product_value_metric']) ? $this->services['pim_filter.product_value_metric'] : $this->load(__DIR__.'/getPimFilter_ProductValueMetricService.php')) && false ?: '_'});
$instance->addFilter('product_value_price', ${($_ = isset($this->services['pim_filter.product_value_price']) ? $this->services['pim_filter.product_value_price'] : $this->load(__DIR__.'/getPimFilter_ProductValuePriceService.php')) && false ?: '_'});
$instance->addFilter('label_or_identifier', ${($_ = isset($this->services['pim_filter.product_label_or_identifier_filter']) ? $this->services['pim_filter.product_label_or_identifier_filter'] : $this->load(__DIR__.'/getPimFilter_ProductLabelOrIdentifierFilterService.php')) && false ?: '_'});
$instance->addFilter('product_value_reference_data', ${($_ = isset($this->services['pim_reference_data.filter.reference_data']) ? $this->services['pim_reference_data.filter.reference_data'] : $this->load(__DIR__.'/getPimReferenceData_Filter_ReferenceDataService.php')) && false ?: '_'});

return $instance;