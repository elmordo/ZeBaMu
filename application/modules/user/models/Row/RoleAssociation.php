<?php
class User_Model_Row_RoleAssociation extends Zend_Db_Table_Row_Abstract {

	/**
	 * return account associated to row
	 * if this is associated to group, returns null
	 * 
	 * @return User_Model_Row_Account
	 */
	public function getAccount() {
		
	}
	
	/**
	 * returns group associated to this row
	 * if this is associated to account, returns null
	 * 
	 * @return User_Model_Row_Group
	 */
	public function getGroup() {
		
	}
	
	/**
	 * returns role associated to this row
	 * 
	 * @return User_Model_Row_Role
	 */
	public function getRole() {
		
	}
	
	/**
	 * return TRUE if row is associated to account
	 * 
	 * @return bool
	 */
	public function isAccount() {
		
	}
	
	/**
	 * return TRUE if row is associated to group
	 * 
	 * @return bool
	 */
	public function isGroup() {
		
	}
}