<?php
/**
 * Nisl
 *
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Nisl
 * @package     Nisl_Bannerslider  
*/
namespace Nisl\Bannerslider\Controller\Adminhtml;

/**
 * CoreSlider Abstract Action
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
abstract class CoreSlider extends \Nisl\Bannerslider\Controller\Adminhtml\AbstractAction
{
    /**
     * Check if admin has permissions to visit related pages.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Nisl_Bannerslider::bannerslider_coreslider');
    }
}
