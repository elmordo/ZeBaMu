<?php
class User_Model_Row_Role extends Zend_Db_Table_Row_Abstract {
	
	/**
	 * add role to single account
	 * 
	 * @param User_Model_Row_Account $account account
	 * @return User_Model_Row_Role
	 */
	public function addToAccount(User_Model_Row_Account $account) {
	
	}
	
	/**
	 * add role to set of accounts
	 * 
	 * @param User_Model_Rowset_Accounts $accounts set of account
	 * @return User_Model_Row_Role
	 */
	public function addToAccounts(User_Model_Rowset_Accounts $accounts) {
	
	}
	
	/**
	 * add role to single group
	 * 
	 * @param User_Model_Row_Group $group group to add
	 * @return User_Model_Row_Role
	 */
	public function addToGroup(User_Model_Row_Group $group) {
	
	}
	
	/**
	 * add role to set of groups
	 * 
	 * @param User_Model_Rowset_Groups $groups set of groups
	 * @return User_Model_Row_Role
	 */
	public function addToGroups(User_Model_Rowset_Groups $groups) {
	
	}
	
	/**
	 * returns accounts with this role
	 * 
	 * @return User_Model_Rowset_Accounts
	 */
	public function getAccounts() {
	
	}
	
	/**
	 * returns groups with this role
	 * 
	 * @return User_Model_Rowset_Groups
	 */
	public function getGroups() {
	
	}
	
	/**
	 * returns parent of role
	 * if role has not parent, returns null
	 * 
	 * @return User_Model_Row_Role
	 */
	public function getParent() {
	
	}
	
	/**
	 * returns roles with this role
	 * 
	 * @return User_Model_Rowset_Acl
	 */
	public function getRules() {
	
	}
	
	/**
	 * returns TRUE if role is default
	 * if role is default, it is automaticaly appended to new accounts
	 * 
	 * @return bool
	 */
	public function isDefault() {
	
	}
	
	/**
	 * remove role from account
	 *
	 * @param User_Model_Row_Account $account accounts
	 * @return User_Model_Row_Role
	 */
	public function removeFromAccount(User_Model_Row_Account $account) {
	
	}
	
	/**
	 * remove role from set of accounts
	 *
	 * @param User_Model_Rowset_Accounts $accounts set of accounts
	 * @return User_Model_Row_Role
	 */
	public function removeFromAccounts(User_Model_Rowset_Accounts $accounts) {
	
	}
	
	/**
	 * remove role from group
	 *
	 * @param User_Model_Row_Groups $group group
	 * @return User_Model_Row_Role
	 */
	public function removeFromGroup(User_Model_Row_Group $group) {
	
	}
	
	/**
	 * remove role from set of group
	 * 
	 * @param User_Model_Rowset_Groups $groups set of group
	 * @return User_Model_Row_Role
	 */
	public function removeFromGroups(User_Model_Rowset_Groups $groups) {
	
	}
	
	/**
	 * set or unset role as default
	 *
	 * @param bool $isDefault new value of default
	 * @return User_Model_Row_Role
	 */
	public function setDefault($isDefault) {
	
	}
}