<?php
/**
 * Rotaryview Adminhtml Block
 *
 * @category    Rotaryview
 * @package     Rotaryview_Productview
 * @copyright   Gev Rotem (http://rotaryview.com/)
 */

class Rotaryview_Productview_Block_Adminhtml_Catalog_Product_Edit_Tab_Productview extends Mage_Adminhtml_Block_Widget
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('rotaryview/rotaryviewadmin.phtml');
    }

    public function getProduct()
    {
        $request = Mage::app()->getRequest()->getParams();
        $productModel = Mage::getModel('catalog/product');
        $pid = (isset($request['id']) ? $request['id'] : '');
        $product = $productModel->load($pid);
        return $product;
    }

    public function getStoreId()
    {
        $request = Mage::app()->getRequest()->getParams();
        $storeId = (isset($request['store']) ? $request['store'] : 0);

        return $storeId;
    }
}
