<?php
class User_Model_Roles extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_roles";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_rowClass = "User_Model_Row_Role";
	
	protected $_rowsetClass = "User_Model_Rowset_Roles";
	
	/**
	 * create new role
	 * 
	 * @param string $name name of role
	 * @param string $comment comment
	 * @param User_Model_Row_Role $parent parent role for inheritence
	 * @return User_Model_Row_Role
	 */
	public function createRole($name, $comment, User_Model_Row_Role $parent = null) {
		
	}
	
	/**
	 * find role by its id
	 * 
	 * @param int $id id of role
	 * @return User_Model_Row_Role
	 */
	public function findById($id) {
		
	}
	
	/**
	 * gets roles appended to account
	 * 
	 * @param User_Model_Row_Account $account account
	 * @return User_Model_Rowset_Roles
	 */
	public function getByAccount(User_Model_Row_Account $account) {
		
	}
	
	/**
	 * gets roles appended to group
	 * 
	 * @param User_Model_Row_Group $group group
	 * @return User_Model_Rowset_Roles
	 */
	public function getByGroup(User_Model_Row_Group $group) {
		
	}
}