<?php
namespace Nipl\CRUD\Block\Adminhtml;
class CustomSlider extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_customSlider';/*block grid.php directory*/
        $this->_blockGroup = 'Nipl_CRUD';
        $this->_headerText = __('CustomSlider');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
