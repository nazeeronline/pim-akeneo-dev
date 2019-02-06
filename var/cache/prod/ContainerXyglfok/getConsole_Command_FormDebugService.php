<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load(__DIR__.'/getForm_RegistryService.php')) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => '', 3 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter', 4 => 'FOS\\OAuthServerBundle\\Form\\Type', 5 => 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type', 6 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type', 7 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type'), array(0 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 3 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType', 4 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\FilterType', 5 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\ChoiceFilterType', 6 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\TextFilterType', 7 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\NumberFilterType', 8 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\DateRangeFilterType', 9 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\DateTimeRangeFilterType', 10 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\BooleanFilterType', 11 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\EntityFilterType', 12 => 'Oro\\Bundle\\FilterBundle\\Form\\Type\\Filter\\SelectRowFilterType', 13 => 'Oro\\Bundle\\SecurityBundle\\Form\\Type\\ObjectLabelType', 14 => 'Akeneo\\Tool\\Bundle\\FileStorageBundle\\Form\\Type\\FileInfoType', 15 => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', 16 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\Filter\\ScopeFilterType', 17 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\Filter\\CategoryFilterType', 18 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\Filter\\MetricFilterType', 19 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\Filter\\PriceFilterType', 20 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\Filter\\AjaxChoiceFilterType', 21 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\Filter\\BooleanFilterType', 22 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\CategoryType', 23 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\DateRangeType', 24 => 'Oro\\Bundle\\PimFilterBundle\\Form\\Type\\DateTimeRangeType', 25 => 'Oro\\Bundle\\PimDataGridBundle\\Form\\Type\\DatagridViewType', 26 => 'Oro\\Bundle\\PimDataGridBundle\\Form\\Type\\DatagridFilterChoiceType', 27 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\RoleApiType', 28 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\GroupType', 29 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\GroupApiType', 30 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\ResetType', 31 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\PrivilegeCollectionType', 32 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\AclAccessLevelSelectorType', 33 => 'Akeneo\\UserManagement\\Bundle\\Form\\Type\\AclRoleType', 34 => 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type\\CommentType', 35 => 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type\\CategoryType', 36 => 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type\\GroupType', 37 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\GroupTypeType', 38 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\AttributeOptionCreateType', 39 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\FamilyType', 40 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\AttributeOptionValueType', 41 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\AttributeOptionType', 42 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\AssociationTypeType', 43 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\AvailableAttributesType', 44 => 'Akeneo\\Pim\\Structure\\Bundle\\Form\\Type\\SelectFamilyType', 45 => 'Akeneo\\Platform\\Bundle\\ImportExportBundle\\Form\\Type\\JobInstanceFormType', 46 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\SwitchType', 47 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\NumberType', 48 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\DateType', 49 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\AjaxEntityType', 50 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\AjaxReferenceDataType', 51 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\ProductGridFilterChoiceType', 52 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\LocalizedCollectionType', 53 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\MediaType', 54 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\LightEntityType', 55 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\ObjectIdentifierType', 56 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\TranslatableFieldType', 57 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\EntityIdentifierType', 58 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\LocaleType', 59 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Type\\AsyncSelectType'), array(0 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 6 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Extension\\FormTypeHelpExtension', 7 => 'Akeneo\\Platform\\Bundle\\UIBundle\\Form\\Extension\\FormTypeSelect2Extension'), array(0 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 1 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser'));

$instance->setName('debug:form');

return $instance;
