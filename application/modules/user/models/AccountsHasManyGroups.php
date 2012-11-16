<?php
class User_Model_AccountsHaveManyGroups extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_accounts_has_many_groups";
	
	protected $_primary = array("account_id", "group_id");
	
	protected $_sequence = false;
	
	protected $_referenceMap = array(
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_AccountHaveManyGroup";
	
	protected $_rowsetClass = "User_Model_Rowset_AccountsHaveManyGroups";
}