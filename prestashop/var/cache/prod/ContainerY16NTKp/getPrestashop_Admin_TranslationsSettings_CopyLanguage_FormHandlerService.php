<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.translations_settings.copy_language.form_handler' shared service.

return $this->services['prestashop.admin.translations_settings.copy_language.form_handler'] = new \PrestaShopBundle\Form\Admin\Improve\International\Translations\TranslationsSettingsFormHandler(($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), 'PrestaShopBundle\\Form\\Admin\\Improve\\International\\Translations\\CopyLanguageType', 'TranslationSettingsPageCopyLanguage');
