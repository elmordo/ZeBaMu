<?php
class User_Model_MessagesOutboxTargets extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_messages_outbox_targets";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_referenceMap = array(
			"message" => array(
					"columns" => "outbox_id",
					"refTableClass" => "User_Model_MessagesOutbox",
					"refColumns" => "id"
			),
			
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_MessageOutboxTarget";
	
	protected $_rowsetClass = "User_Model_Rowset_MessagesOutboxTargets";
}