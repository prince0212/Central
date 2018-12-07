<?php
/**
 * Copyright © 2018 Prince Kumar, LLC. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Central\BestSeller\Api\Data;

/**
 * 
 */
interface BestSellerDataInterface
{
    /**
     * Get product name
     * 
     * @return string
     */
    public function getProductName();
    
    /**
     * Set product name
     * 
     * @param string $name
     */
    public function setProductName($name);
}
