<?php
/**
 * Rotaryview Adminhtml Block
 *
 * @category    Rotaryview
 * @package     Rotaryview_Productview
 * @copyright   Gev Rotem (http://rotaryview.com/)
 */
class Rotaryview_Productview_Block_Adminhtml_Catalog_Product_Edit_Tabs extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tabs
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $product = $this->getProduct();

        if($product->getEntityId()) {
        	$this->addTab('productview', array(
                        'label' => Mage::helper('rotaryview_productview')->__('RotaryView'),
                        'url'   => $this->getUrl('*/productview/index', array('_current' => true)),
                        'class' => 'ajax',
            ));
        }
        return parent::_prepareLayout();
    }
}