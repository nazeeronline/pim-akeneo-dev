<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.filter_manager' shared service.

return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('lessphp' => 'assetic.filter.lessphp', 'cssrewrite' => 'assetic.filter.cssrewrite'));
