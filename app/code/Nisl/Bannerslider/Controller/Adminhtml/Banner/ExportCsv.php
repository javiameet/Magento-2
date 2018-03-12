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

use Magento\Framework\App\Filesystem\DirectoryList;

/**
 * ExportCsv action.
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
class ExportCsv extends \Nisl\Bannerslider\Controller\Adminhtml\Banner
{
    public function execute()
    {
        $fileName = 'banners.csv';

        /** @var \\Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $content = $resultPage->getLayout()->createBlock('Nisl\Bannerslider\Block\Adminhtml\Banner\Grid')->getCsv();

        return $this->_fileFactory->create($fileName, $content, DirectoryList::VAR_DIR);
    }
}
