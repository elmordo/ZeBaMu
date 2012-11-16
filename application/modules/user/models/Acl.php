<?php
class User_Model_Acl extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_acl";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_referenceMap = array(
			"role" => array(
					"columns" => "role_id",
					"refTableClass" => "User_Model_Roles",
					"refColumns" => "id"
			),
			
			"resource" => array(
					"columns" => "resource_id",
					"refTableClass" => "User_Model_Resources",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_Acl";
	
	protected $_rowsetClass = "User_Model_Rowset_Acl";
}