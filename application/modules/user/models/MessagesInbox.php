<?php
class User_Model_MessagesInbox extends Zend_Db_Table_Abstract {

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
}