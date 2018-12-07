<?php
/**
 * Copyright © 2018 Prince Kumar, LLC. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Central\BestSeller\Model\Data;

use Central\BestSeller\Api\Data\BestSellerDataInterface;

/**
 * 
 */
class BestSellerData implements BestSellerDataInterface
{
    /**
     *
     * @var string
     */
    private $name;


    public function setProductName($name)
    {
        $this->name = $name;
    }
    
    public function getProductName()
    {
        return $this->name;
    }
}
