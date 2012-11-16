<?php
class User_Model_Groups extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_groups";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_referenceMap = array(
			"account" => array(
					"columns" => "owner_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_Group";
	
	protected $_rowsetClass = "User_Model_Rowset_Groups";
}