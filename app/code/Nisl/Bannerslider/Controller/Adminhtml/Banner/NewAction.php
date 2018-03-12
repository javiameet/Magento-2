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
namespace Nisl\Bannerslider\Controller\Adminhtml\Banner;

/**
 * NewAction
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
class NewAction extends \Nisl\Bannerslider\Controller\Adminhtml\Banner
{
    public function execute()
    {
        $resultForward = $this->_resultForwardFactory->create();

        return $resultForward->forward('edit');
    }
}
