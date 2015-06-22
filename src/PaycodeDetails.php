<?php

namespace Sofort\SofortLib;

/**
 * @copyright 2010-2015 SOFORT AG
 *
 * @license Released under the GNU LESSER GENERAL PUBLIC LICENSE (Version 3)
 * @license http://www.gnu.org/licenses/lgpl.html
 *
 * Paycode Details
 */
class PaycodeDetails extends PaycodeDetailsAbstract {

	/**
	 * Paycode
	 * 
	 * @var string
	 */
	protected $_root = 'paycode';
	
	/**
	 * Root Tag for the XML to be rendered
	 * 
	 * @var string
	 */
	protected $_rootTag = 'paycode_request';
	
	
	/**
	 * Returns the responses paycode
	 *
	 * @return mixed|bool
	 */
	public function getPaycode() {
		return $this->_extractValue('paycode');
	}
	
	
	/**
	 * Setter for the paycode of the request
	 * 
	 * @param string $paycode
	 * @return SofortLibPaycodeDetails
	 */
	public function setPaycode($paycode) {
		$this->_parameters['paycode'] = $paycode;
		
		return $this;
	}
}