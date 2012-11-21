<?php
class User_Model_MessagesOutbox extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_messages_outbox";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_referenceMap = array(
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_MessageOutbox";
	
	protected $_rowsetClass = "User_Model_Rowset_MessagesOutbox";
	
	/**
	 * gets message by its id
	 * account is given for security reason
	 * 
	 * @param int $id id of message
	 * @param User_Model_Row_Account $account account of owner
	 * @return User_Model_Row_MessageOutbox
	 */
	public function getById($id, User_Model_Row_Account $account) {
		
	}
	
	/**
	 * get concepts of messages (not sent) of account
	 * 
	 * @param User_Model_Row_Account $account owner account
	 * @param string $order order rule
	 * @param string $filter fulltext filter
	 * @return User_Model_Rowset_MessagesOutbox
	 */
	public function getConcepts(User_Model_Row_Account $account, $order, $filter = null) {
		
	}
	
	/**
	 * get sent messages of account
	 * 
	 * @param User_Model_Row_Account $account owner account
	 * @param string $order order rule
	 * @param string $filter fulltext filter
	 */
	public function getOutbox(User_Model_Row_Account $account, $order, $filter = null) {
		
	}
}