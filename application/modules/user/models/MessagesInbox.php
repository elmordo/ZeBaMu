<?php
class User_Model_MessagesInbox extends Zend_Db_Table_Abstract {
	
	/**
	 * filter all messages
	 * 
	 * @var int
	 */
	const READ_ALL = 0;
	
	/**
	 * filter only read messages
	 * 
	 * @var int
	 */
	const READ_READ = 1;
	
	/**
	 * filter only unread messages
	 * 
	 * @var int
	 */
	const READ_UNREAD = 2;

	protected $_name = "user_messages_inbox";

	protected $_primary = "id";

	protected $_sequence = true;

	protected $_referenceMap = array(
			"target" => array(
					"columns" => "target_account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			),
			
			"sender" => array(
					"columns" => "sender_account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);

	protected $_rowClass = "User_Model_Row_MessageInbox";

	protected $_rowsetClass = "User_Model_Rowset_MessagesInbox";
	
	/**
	 * returns messages by account
	 * messages can be filtered by read/unread/all status
	 * messages can by filtered by fulltext
	 * 
	 * @param User_Model_Row_Account $account owner account
	 * @param unknown_type $order order of result
	 * @param unknown_type $readFilter read/unread/all filter
	 * @param unknown_type $filter fulltext filter
	 * @return User_Model_Rowset_MessagesInbox
	 */
	public function getByAccount(User_Model_Row_Account $account, $order, $readFilter, $filter) {
		
	}
	
	/**
	 * returns message by id
	 * account is given for security reasons
	 * 
	 * @param int $id id of message
	 * @param User_Model_Row_Account $account owner account
	 * @return User_Model_Row_MessageInbox
	 */
	public function getById($id, User_Model_Row_Account $account) {
		
	}
}