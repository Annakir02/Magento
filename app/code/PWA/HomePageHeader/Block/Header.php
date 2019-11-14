<?php

namespace PWA\HomePageHeader\Block;

use Magento\Framework\View\Element\Template;

class Header extends Template
{

    protected $_scopeConfig;

    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getHeaderText()
    {
        $text = $this->_scopeConfig->getValue('headersection/headergroup/headertext');

        return  $text;
    }

}
