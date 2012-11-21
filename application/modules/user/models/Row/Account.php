<?php
class User_Model_Row_Account extends Zend_Db_Table_Row_Abstract {
	
	/**
	 * filter for all bans
	 * @var int
	 */
	const BANS_ALL = 0;
	
	/**
	 * filter for active bans
	 * 
	 * @var int
	 */
	const BANS_ACTIVE = 1;
	
	/**
	 * filter for expired bans
	 * 
	 * @var int
	 */
	const BANS_EXPIRED = 2;
	
	/**
	 * returns bans
	 * bans can be filtered
	 * 
	 * @param int $filter filter type
	 * @return User_Model_Rowset_AccountsBans
	 */
	public function getBans($filter = null) {
		
	}
	
	/**
	 * returns groups appended to account
	 * 
	 * @return User_Model_Rowset_Groups
	 */
	public function getGroups() {
		
	}
	
	/**
	 * returns bans dealed by this account to another
	 * 
	 * @param int $filter filter type
	 * @return User_Model_Rowset_AccountsBans
	 */
	public function getDealedBans($filter = null) {
		
	}
	
	/**
	 * returns roles of account
	 * if $includeGroupRoles = TRUE, roles provides by groups are included
	 * 
	 * @param bool $includeGroupRoles switch to include group roles
	 * @return User_Model_Roles
	 */
	public function getRoles($includeGroupRoles) {
		
	}
	
	/**
	 * check password validity
	 * 
	 * @param string $psw password
	 * @return bool
	 */
	public function checkPassword($psw) {
		
	}
	
	/**
	 * returns TRUE if account is active
	 * 
	 * @return bool
	 */
	public function isActive() {
		
	}
	
	/**
	 * set new password to account
	 * 
	 * @param string $psw new password
	 * @return User_Model_Row_Account
	 */
	public function setPassword($psw) {
		
	}
	
	/**
	 * set new active role
	 * 
	 * @param User_Model_Row_Role $role role to set
	 * @return User_Model_Row_Account
	 */
	public function setRole(User_Model_Row_Role $role) {
		
	}
	
	/**
	 * hash pasword
	 * 
	 * @param stirng $psw password to hash
	 * @return string
	 * @param unknown_type $psw
	 */
	public function _hashPassword($psw) {
		
	}
}