<?php
/**
 * Cybage Marketplace Plugin
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * It is available on the World Wide Web at:
 * http://opensource.org/licenses/osl-3.0.php
 * If you are unable to access it on the World Wide Web, please send an email
 * To: Support_Magento@cybage.com.  We will send you a copy of the source file.
 *
 * @category   Marketplace Plugin
 * @package    Cybage_Marketplace
 * @copyright  Copyright (c) 2014 Cybage Software Pvt. Ltd., India
 *             http://www.cybage.com/pages/centers-of-excellence/ecommerce/ecommerce.aspx
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Cybage Software Pvt. Ltd. <Support_Magento@cybage.com>
 */

class Cybage_Marketplace_Model_Seller_Attribute_Source_Product_Status extends Cybage_Marketplace_Model_System_Config_Source_Product_Status
{
    /**
     * Get value from the store configuration settings
     */
    const ENABLE_USE_CONFIG = 0;

    /**
     * Retrieve all attribute options with Use config
     *
     * @return array
     */
    public function toOptionArray()
    {
         $optionArray = array();
         $optionArray = $this->getAllOptions();
       
        $optionArray[] = array(
                'value' => self::ENABLE_USE_CONFIG,
                'label' => Mage::helper('marketplace')->__('Use config')
            );
        return $optionArray;  
    }
}
