<?php
/**
 * Hackathon_Blackfireio extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       Hackathon
 * @package        Hackathon_Blackfireio
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Hackathon Blackfire IO Observer
 *
 * @category    Hackathon
 * @package     Hackathon_Blackfireio
 * @author      Sander Mangel <sander@sandermangel.nl>
 */
class Hackathon_Blackfireio_Model_Observer
{
    /**
     * Observe resource_get_tablename event, first event fired in Magento (credits to Ben Marks)
     *
     * @param Varien_Event_Observer $o
     * @return Hackathon_Blackfireio_Model_Observer
     * @access public
     * @author Sander Mangel
     */
    public function resourceGetTablename(Varien_Event_Observer $o)
    {
        $this->_turnOffProbe();
        return $this;
    }

    /**
     * Discard tracked data and disable profiler as a starting point
     *
     * @param Varien_Event_Observer $o
     * @access protected
     * @author Sander Mangel
     */
    protected function _turnOffProbe($o)
    {
        $probe = BlackfireProbe::getMainInstance();
        $probe->discard();
    }
}