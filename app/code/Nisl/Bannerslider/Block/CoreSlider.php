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
namespace Nisl\Bannerslider\Block\Adminhtml;

/**
 * core slider grid container.
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
class CoreSlider extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor.
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_coreSlider';
        $this->_blockGroup = 'Nisl_Bannerslider';
        $this->_headerText = __('Preview Slider Styles');
        $this->_addButtonLabel = __('Add New Slider');
        parent::_construct();
        $this->removeButton('add');
    }
}
