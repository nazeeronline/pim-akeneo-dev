<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'pim_comment.form.attribute_group' shared service.

return $this->services['pim_comment.form.attribute_group'] = ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->load(__DIR__.'/getForm_FactoryService.php')) && false ?: '_'}->createNamed('pim_comment_comment_form', 'Akeneo\\Pim\\Enrichment\\Bundle\\Form\\Type\\CommentType');
