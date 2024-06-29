<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Osaka\StructuredData\Block;

use Magento\Catalog\Block\Product\View;

class Product extends View
{

    /**
     * @return string
     */
    public function getStructuredJsonData(): string
    {
        $productBasicInformation = $this->getProduct();

        $shortDescription = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($productBasicInformation['short_description']))))));

        $structuredData = [];
        $structuredData["@context"]= "https://schema.org/";
        $structuredData["@type"]= 'Product';
        $structuredData["name"] = $productBasicInformation->getName();
        $structuredData["sku"] = $productBasicInformation->getSku();
        $structuredData["description"] = $shortDescription;
        $structuredData["image"] = array($productBasicInformation->getMediaConfig()->getMediaUrl($productBasicInformation->getImage()));

        return json_encode($structuredData);
    }

}
