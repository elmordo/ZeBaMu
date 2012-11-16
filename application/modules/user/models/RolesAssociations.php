<?php
class User_Model_RolesAssociations extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_roles_associations";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_referenceMap = array(
			"role" => array(
					"columns" => "role_id",
					"refTableClass" => "User_Model_Roles",
					"refColumns" => "id"
			),
			
			"group" => array(
					"columns" => "group_id",
					"refTableClass" => "User_Model_Groups",
					"refColumns" => "id"
			),
			
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_RoleAssociation";
	
	protected $_rowsetClass = "User_Model_Rowset_RolesAssociations";
}