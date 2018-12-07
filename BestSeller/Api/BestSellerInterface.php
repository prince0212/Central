<?php
/**
 * Copyright © 2018 Prince Kumar, LLC. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Central\BestSeller\Api;

/**
 * 
 */
interface BestSellerInterface
{
    /**
     * Get best selling products
     * 
     * @return Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection
     */
    public function getBestsellersProducts();
    
    /**
     * Get product collection limit
     * 
     * @return int
     */
    public function getProductLimit();
}
