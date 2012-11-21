<?php
class User_Model_Row_MessageInbox extends Zend_Db_Table_Row_Abstract {

	/**
	 * creates forward outbox message and returns it
	 * 
	 * @return User_Model_Row_MessageOutbox
	 */
	public function forward() {
		
	}
	
	/**
	 * returns TRUE if messsage is marked as read
	 * 
	 * @return bool
	 */
	public function getRead() {
		
	}
	
	/**
	 * returns sender of message
	 * 
	 * @return User_Model_Row_Account
	 */
	public function getSender() {
		
	}
	
	/**
	 * creates reply outbox message and returns it
	 * 
	 * @return User_Model_Row_MessageOutbox
	 */
	public function reply() {
		
	}
	
	/**
	 * set read status
	 * 
	 * @param bool $read new read status
	 * @return User_Model_Row_MessageInbox
	 */
	public function setRead($read) {
		
	}
}