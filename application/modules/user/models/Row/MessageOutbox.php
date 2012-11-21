<?php
class User_Model_Row_MessageOutbox extends Zend_Db_Table_Row_Abstract {
	
	/**
	 * clear all targets
	 * 
	 * @var int
	 */
	const CLEAR_ALL = 0;
	
	/**
	 * clear TO targets
	 * 
	 * @var int
	 */
	const CLEAR_TO = 1;
	
	/**
	 * clear copy targets
	 * 
	 * @var int
	 */
	const CLEAR_CC = 2; 
	
	/**
	 * clear hidden copy targets
	 * 
	 * @var int
	 */
	const CLEAR_BCC = 3;
	
	/**
	 * add account to targets
	 * 
	 * @param User_Model_Row_Account $account account to add
	 * @return User_Model_Row_MessageOutbox
	 */
	public function addTo(User_Model_Row_Account $account) {
		
	}
	
	/**
	 * clear targets
	 * 
	 * @param unknown_type $what what targets will be cleared
	 * @return User_Model_Row_MessageOutbox
	 */
	public function clearTargets($what = 0) {
		
	}
	
	/**
	 * forward message and returns new row
	 * 
	 * @return User_Model_Row_MessageOutbox
	 */
	public function forward() {
		
	}
	
	/**
	 * returns rowset of targets
	 * 
	 * @return User_Model_Rowset_MessagesOutboxTargets
	 */
	public function getTargets() {
		
	}
	
	/**
	 * returns TRUE if message was sent
	 * 
	 * @return bool
	 */
	public function isSent() {
		
	}
	
	/**
	 * parses targets from string in targets column
	 * 
	 * @return User_Model_Row_MessageOutbox
	 */
	public function parseTargets() {
		
	}
	
	/**
	 * removes target from message and rebuild target string
	 * 
	 * @param User_Model_Row_Account $account account to remove
	 * @return User_Model_Row_MessageOutbox
	 */
	public function removeTarget(User_Model_Row_Account $account) {
		
	}
	
	/**
	 * send message
	 * 
	 * @return User_Model_Row_MessageOutbox
	 */
	public function send() {
		
	}
}