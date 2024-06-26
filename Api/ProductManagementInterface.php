<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Osaka\StructuredData\Api;

interface ProductManagementInterface
{

    /**
     * GET for Product api
     * @param string $param
     * @return string
     */
    public function getProduct($param);
}

