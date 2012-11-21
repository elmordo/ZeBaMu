<?php
class User_Model_Row_Group extends Zend_Db_Table_Row_Abstract {

	/**
	 * adds account to group
	 * 
	 * @param User_Model_Row_Accounts $account account to add
	 * @return User_Model_Row_Group
	 */
	public function addAccount(User_Model_Row_Accounts $account) {
		
	}
	
	/**
	 * adds more accounts to group
	 * 
	 * @param User_Model_Rowset_Accounts $accounts accounts to add
	 * @return User_Model_Row_Group
	 */
	public function addAccounts(User_Model_Rowset_Accounts $accounts) {
		
	}
	
	/**
	 * returns accounts in group
	 * 
	 * @return User_Model_Rowset_Accounts
	 */
	public function getAccounts() {
		
	}
	
	/**
	 * returns account persmision in stdClass
	 * members are:
	 * - accountManager - can manage accounts?
	 * - groupManager - can change group name and manage permisions?
	 * 
	 * @param User_Model_Row_Account $account account to check
	 * @return stdClass
	 */
	public function getAccountPermisions(User_Model_Row_Account $account) {
		
	}
	
	/**
	 * returns owner of group
	 * 
	 * @return User_Model_Row_Account
	 */
	public function getOwner() {
		
	}
	
	/**
	 * changes owner of group
	 * 
	 * @param User_Model_Row_Account $owner new owner
	 * @return User_Model_Row_Account
	 */
	public function changeOwner(User_Model_Row_Account $owner) {
		
	}
	
	/**
	 * removes one account from group
	 * 
	 * @param User_Model_Row_Account $account account to remove
	 * @return User_Model_Row_Group
	 */
	public function removeAccount(User_Model_Row_Account $account) {
		
	}
	
	/**
	 * removes more accounts from group
	 * @param User_Model_Rowset_Accounts $accounts
	 * @return User_Model_Row_Group
	 */
	public function removeAccoutns(User_Model_Rowset_Accounts $accounts) {
		
	}
	
	/**
	 * set permisions to account
	 * 
	 * @param User_Model_Row_Account $account account to set
	 * @param bool $allowChangePermision cans manage group?
	 * @param bool $allowManageUsers cans manage accounts?
	 * @return User_Model_Row_Group 
	 */
	public function setPermisions(User_Model_Row_Account $account, $allowChangePermision = null, $allowManageUsers = null) {
		
	}
}