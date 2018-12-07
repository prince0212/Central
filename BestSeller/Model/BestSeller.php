<?php
/**
 * Copyright © 2018 Prince Kumar, LLC. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace Central\BestSeller\Model;

use Central\BestSeller\Api\BestSellerInterface;
use Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory;

/**
 * 
 */
class BestSeller implements BestSellerInterface
{
    const DEFAULT_PRODUCTS_COUNT = 10;

    /**
     * @var CollectionFactory
     */
    private $resourceCollection;
    
    /**
     * Initialization
     * 
     * @param CollectionFactory $resourceCollection 
     */
    public function __construct(
        CollectionFactory $resourceCollection
    ){
        $this->resourceCollection = $resourceCollection;
    }

    /**
     * {@inheritdoc}
     */
    public function getBestsellersProducts()
    {
        $bestSellerProducts = [];
        $limit = $this->getProductLimit();
        $resourceCollection = $this->resourceCollection->create();
        $resourceCollection->setPageSize($limit);
        foreach ($resourceCollection as $products) {
            $bestSellerProducts[] = $products;
        }
        return $bestSellerProducts;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getProductLimit()
    {
        return self::DEFAULT_PRODUCTS_COUNT;
    }
}
