<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.constraint_validator.clean_html_validator' shared service.

return $this->services['prestashop.core.constraint_validator.clean_html_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\CleanHtmlValidator(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->getBoolean("PS_ALLOW_HTML_IFRAME"));
