<?php
/**
 * Copyright © 2015 Nipl. All rights reserved.
 */
namespace Nipl\CRUD\Model\ResourceModel;

/**
 * CustomSlider resource
 */
class CustomSlider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('crud_customslider', 'id');
    }

  
}
