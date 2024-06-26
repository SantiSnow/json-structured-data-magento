<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Osaka\StructuredData\Model;

class ProductManagement implements \Osaka\StructuredData\Api\ProductManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getProduct($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

