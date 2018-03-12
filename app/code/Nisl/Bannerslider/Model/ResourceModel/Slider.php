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
namespace Nisl\Bannerslider\Model\ResourceModel;

/**
 * Slider Resource Model
 * @category Nisl
 * @package  Nisl_Bannerslider
 * @module   Bannerslider
 * @author   Nisl Developer
 */
class Slider extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * construct
     * @return void
     */
    protected function _construct()
    {
        $this->_init('nisl_bannerslider_slider', 'slider_id');
    }
}
