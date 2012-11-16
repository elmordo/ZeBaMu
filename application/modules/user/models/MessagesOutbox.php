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
}