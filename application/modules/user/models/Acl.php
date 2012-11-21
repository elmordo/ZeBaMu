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
	
	/**
	 * create new rule
	 * if action is NULL, rule is valid for all resource
	 * if allow is TRUE, rule allows action/resource
	 * if allow is FALSE, rule denys action/resource
	 * 
	 * @param User_Model_Row_Role $role role for rule
	 * @param User_Model_Row_Resource $resource resource
	 * @param unknown_type $action action name
	 * @param unknown_type $allow allow or deny
	 * @return User_Model_Row_Acl
	 */
	public function createRule(User_Model_Row_Role $role, User_Model_Row_Resource $resource, $action = null, $allow = true) {
		
	}
	
	/**
	 * returns rule by its id
	 * 
	 * @param int $id id of rule
	 * @return User_Model_Row_Acl
	 */
	public function findById($id) {
		
	}
	
	/**
	 * find rules by resource
	 * 
	 * @param User_Model_Row_Resource $resource filter resource
	 * @return User_Model_Rowset_Acl
	 */
	public function findByResource(User_Model_Row_Resource $resource) {
		
	}
	
	/**
	 * find rules by role
	 * 
	 * @param User_Model_Row_Role $role filter role
	 * @return User_Model_Rowset_Acl
	 */
	public function findByRole(User_Model_Row_Role $role) {
		
	}
}