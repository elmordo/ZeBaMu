<?php
class User_Model_Row_AccountBan extends Zend_Db_Table_Row_Abstract {

	/**
	 * returns banned account
	 * 
	 * @return User_Model_Row_Account
	 */
	public function getAccount() {
		
	}
	
	/**
	 * returns dealer of this ban
	 * 
	 * @return User_Model_Row_Account
	 */
	public function getDealer() {
		
	}
	
	/**
	 * cancel ban
	 * 
	 * @param string $reason reason of cancel
	 * @return User_Model_Row_AccountBan
	 */
	public function cancel($reason) {
		
	}
	
	/**
	 * marks ban as expired
	 * 
	 * @return User_Model_Row_AccountBan
	 */
	public function expire() {
		
	}
	
	/**
	 * returns TRUE, if ban is still active
	 * 
	 * @return bool
	 */
	public function isActive() {
		
	}
}