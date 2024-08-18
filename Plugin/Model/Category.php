<?php

namespace SR\UnicodeUrl\Plugin\Model;

class Category
{
    // Declare the property explicitly
    private \Magento\Framework\Filter\FilterManager $filter;

    public function __construct(
        \Magento\Framework\Filter\FilterManager $filter
    ) {
        $this->filter = $filter;
    }

    public function aroundFormatUrlKey(
        \Magento\Catalog\Model\Category $subject,
        callable $proceed,
        $str
    ) {
        return $this->filter->translitUrlCategory($str);
    }
}
