<?php
class User_Model_AccountsBans extends Zend_Db_Table_Abstract {

	protected $_name = "user_accounts_bans";

	protected $_primary = "id";

	protected $_sequence = true;

	protected $_referenceMap = array(
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);

	protected $_rowClass = "User_Model_Row_AccountBan";

	protected $_rowsetClass = "User_Model_Rowset_AcountsBans";
}