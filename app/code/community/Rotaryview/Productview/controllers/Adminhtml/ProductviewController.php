<?php
/**
 * Rotaryview Adminhtml Controller
 *
 * @category    Rotaryview
 * @package     Rotaryview_Productview
 * @copyright   Gev Rotem (http://rotaryview.com/)
 */

class Rotaryview_Productview_Adminhtml_ProductviewController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}