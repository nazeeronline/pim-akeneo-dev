<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'akeneo_measure.measure_converter' shared service.

return $this->services['akeneo_measure.measure_converter'] = new \Akeneo\Tool\Bundle\MeasureBundle\Convert\MeasureConverter($this->parameters['akeneo_measure.measures_config']);
