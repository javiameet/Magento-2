<?php
namespace Nipl\CRUD\Block\Adminhtml\CustomSlider\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_customslider_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('CustomSlider Information'));
    }
}