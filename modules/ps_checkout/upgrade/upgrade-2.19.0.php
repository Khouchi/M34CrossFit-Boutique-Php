<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Update main function for module version 2.19.0
 *
 * @param Ps_checkout $module
 *
 * @return bool
 */
function upgrade_module_2_19_0($module)
{
    $shopsList = \Shop::getShops(false, null, true);

    foreach ($shopsList as $shopId) {
        Configuration::updateValue('PS_CHECKOUT_PAY_LATER_HOME_PAGE_BANNER', '0', false, null, (int) $shopId);
        Configuration::updateValue('PS_CHECKOUT_PAY_LATER_CATEGORY_PAGE_BANNER', '0', false, null, (int) $shopId);
        Configuration::updateValue('PS_CHECKOUT_PAY_LATER_PRODUCT_PAGE_BANNER', '0', false, null, (int) $shopId);
        Configuration::updateValue('PS_CHECKOUT_PAY_LATER_ORDER_PAGE_BANNER', '0', false, null, (int) $shopId);
        Configuration::updateValue('PS_CHECKOUT_INTEGRATION_DATE', '2022-05-11', false, null, (int) $shopId);
    }

    return true;
}