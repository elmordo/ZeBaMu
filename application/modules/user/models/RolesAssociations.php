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
	
	/**
	 * returns assocations by account
	 * 
	 * @param User_Model_Row_Account $account account
	 * @return User_Model_Rowset_RolesAssociations
	 */
	public function findByAccount(User_Model_Row_Account $account) {
		
	}
	
	/**
	 * returns associations by group
	 * 
	 * @param User_Model_Row_Group $group group
	 * @return User_Model_Rowset_RolesAssociations
	 */
	public function findByGroup(User_Model_Row_Group $group) {
		
	}
	
	/**
	 * returns assocations by role
	 * 
	 * @param User_Model_Row_Role $role role
	 * @return User_Model_Rowset_RolesAssociations
	 */
	public function findByRole(User_Model_Row_Role $role) {
		
	}
}