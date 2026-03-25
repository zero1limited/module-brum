<?php

namespace Zero1\Brum\Block;

use Magento\Framework\View\Element\Template;

class Script extends Template
{
    private const PAGE_TYPE_MAP = [
        'cms_index_index'             => 'homepage',
        'catalog_category_view'       => 'category',
        'catalog_product_view'        => 'product',
        'catalogsearch_result_index'  => 'search',
        'checkout_cart_index'         => 'cart',
    ];

    public function getPageType(): string
    {
        $action = $this->getRequest()->getFullActionName();
        return self::PAGE_TYPE_MAP[$action] ?? 'other';
    }
}
