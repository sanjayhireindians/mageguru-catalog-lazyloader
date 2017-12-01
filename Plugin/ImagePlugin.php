<?php

namespace Mageguru\Lazyload\Plugin;

class ImagePlugin
{
	protected $mageguru_helper;

    public function __construct(\Mageguru\Lazyload\Helper\Data $helper) {
        $this->mageguru_helper = $helper;
    }
	
    public function afterToHtml(\Magento\Catalog\Block\Product\Image $block, $img_element)
    {
		if($this->mageguru_helper->isActive()){			
		
			 // Add lazy class into image 
			 $class_regex = '/< *img[^>]*class *= *["\']?([^"\']*)/i';
			 $img_element = preg_replace($class_regex, '<img class="$1 lazy', $img_element);
			 
			 // Add new attribute data-originla into <img> element
			 $img_element = preg_replace('#<img\s+([^>]*)(?:src="([^"]*)")([^>]*)\/?>#isU', '<img  ' .
            'data-original="$2" $1 $3/>', $img_element);			 
		}
		return $img_element;		
    }

   
}
