<?php
namespace Mageguru\Lazyload\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper {
    public function isActive() {
        return $this->scopeConfig->isSetFlag('mageguru_lazyload/magegurulazyload_generalsetting/mageguru_option', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
