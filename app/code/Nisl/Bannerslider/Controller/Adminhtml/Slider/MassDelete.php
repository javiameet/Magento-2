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
namespace Nisl\Bannerslider\Controller\Adminhtml\Slider;

use Magento\Framework\Controller\ResultFactory;
/**
 * MassDelete action.
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
class MassDelete extends \Nisl\Bannerslider\Controller\Adminhtml\AbstractAction
{

    public function execute()
    {
        $sliderIds = $this->getRequest()->getParam('slider');
        if (!is_array($sliderIds) || empty($sliderIds)) {
            $this->messageManager->addErrorMessage(__('Please select slider(s).'));
        } else {
            try {
                foreach ($sliderIds as $sliderUd) {
                    $slider = $this->_objectManager->create('Nisl\Bannerslider\Model\Slider')
                        ->load($sliderUd);
                    $slider->delete();
                }
                $this->messageManager->addSuccessMessage(
                    __('A total of %1 record(s) have been deleted.', count($sliderIds))
                );
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            }
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }
}
