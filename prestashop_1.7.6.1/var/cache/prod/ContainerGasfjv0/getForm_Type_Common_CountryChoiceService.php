<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.common.country_choice' shared service.

return $this->services['form.type.common.country_choice'] = new \PrestaShopBundle\Form\Admin\Type\CountryChoiceType(${($_ = isset($this->services['prestashop.core.form.choice_provider.country_by_id']) ? $this->services['prestashop.core.form.choice_provider.country_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_CountryByIdService.php')) && false ?: '_'});
