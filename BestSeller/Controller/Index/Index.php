<?php

namespace Central\BestSeller\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Central\BestSeller\Api\BestSellerInterface;

class Index extends \Magento\Framework\App\Action\Action 
{
    const DEFAULT_PRODUCTS_COUNT = 10;

    /**
     * @var BestSellerInterface
     */
    private $bsetSellerProducts;

    /**
     * @var PageFactory
     */
    private $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        BestSellerInterface $bsetSellerProducts
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->bsetSellerProducts = $bsetSellerProducts;
    }
    
    public function execute()
    {
        $resourceCollection = $this->bsetSellerProducts->getBestsellersProducts();
        print_r($resourceCollection);
    }
}
