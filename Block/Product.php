<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Osaka\StructuredData\Block;

use Magento\Backend\Block\Template\Context;
use Magento\Catalog\Helper\Data;
use Magento\Catalog\Block\Product\View;

class Product extends View
{
    public function getStructuredJsonData(): string
    {
        $productBasicInformation = $this->getProduct();

        $shortDescription = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($productBasicInformation['short_description']))))));

        $structuredData = "{";
        $structuredData .= '"@context": "https://schema.org/",' . "\n\r";
        $structuredData .= '"@type": "Product",' . PHP_EOL;
        $structuredData .= '"name": "'.$productBasicInformation->getName().'",' . "\n\r";
        $structuredData .= '"sku": "'.$productBasicInformation->getSku().'",' . "\n\r";
        $structuredData .= '"description": "'.$shortDescription.'",' . "\n\r";
        $structuredData .= '"image": ["'.$productBasicInformation->getMediaConfig()->getMediaUrl($productBasicInformation->getImage()).'"]' . "\n\r";

        $structuredData .= "}";



        return $structuredData;
    }
}
