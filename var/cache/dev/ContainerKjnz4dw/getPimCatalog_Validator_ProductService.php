<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_catalog.validator.product' shared service.

$a = new \Akeneo\Pim\Enrichment\Component\Product\Validator\ChainedAttributeConstraintGuesser();
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\EmailGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\FileGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\LengthGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\NotBlankGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\DateGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\NumericGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\StringGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\BooleanGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\RangeGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\RegexGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\NotDecimalGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\UrlGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\UniqueValueGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\PriceCollectionGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\MetricGuesser());
$a->addConstraintGuesser(new \Akeneo\Pim\Enrichment\Component\Product\Validator\ConstraintGuesser\CurrencyGuesser());

$b = new \Akeneo\Pim\Enrichment\Component\Product\Validator\Mapping\DelegatingClassMetadataFactory();
$b->addMetadataFactory(new \Akeneo\Pim\Enrichment\Component\Product\Validator\Mapping\ProductValueMetadataFactory($a, ${($_ = isset($this->services['pim_catalog.repository.cached_attribute']) ? $this->services['pim_catalog.repository.cached_attribute'] : $this->load(__DIR__.'/getPimCatalog_Repository_CachedAttributeService.php')) && false ?: '_'}));
$b->addMetadataFactory(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'});

return $this->services['pim_catalog.validator.product'] = new \Symfony\Component\Validator\Validator\RecursiveValidator(new \Symfony\Component\Validator\Context\ExecutionContextFactory(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, 'validators'), $b, ${($_ = isset($this->services['validator.validator_factory']) ? $this->services['validator.validator_factory'] : $this->getValidator_ValidatorFactoryService()) && false ?: '_'}, array());