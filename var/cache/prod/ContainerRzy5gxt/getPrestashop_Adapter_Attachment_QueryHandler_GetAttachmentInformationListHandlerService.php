<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.attachment.query_handler.get_attachment_information_list_handler' shared service.

return $this->services['prestashop.adapter.attachment.query_handler.get_attachment_information_list_handler'] = new \PrestaShop\PrestaShop\Adapter\Attachment\QueryHandler\GetAttachmentInformationListHandler(${($_ = isset($this->services['prestashop.adapter.data_provider.attachment']) ? $this->services['prestashop.adapter.data_provider.attachment'] : ($this->services['prestashop.adapter.data_provider.attachment'] = new \PrestaShop\PrestaShop\Adapter\Product\AttachmentDataProvider())) && false ?: '_'});
