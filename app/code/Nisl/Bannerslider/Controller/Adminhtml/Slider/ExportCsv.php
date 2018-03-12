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

use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * Export Csv action
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
class ExportCsv extends \Nisl\Bannerslider\Controller\Adminhtml\Slider
{
    public function execute()
    {
        $fileName = 'sliders.csv';

        /** @var \\Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $content = $resultPage->getLayout()->createBlock('Nisl\Bannerslider\Block\Adminhtml\Slider\Grid')->getCsv();

        return $this->_fileFactory->create($fileName, $content, DirectoryList::VAR_DIR);
    }
}
