<?php
class User_Model_Row_AccountHaveManyGroup extends Zend_Db_Table_Row_Abstract {

	/**
	 * returns account appended to this association
	 * 
	 * @return User_Model_Row_Account
	 */
	public function getAccount() {
		
	}
	
	/**
	 * returns group appended to this association
	 * 
	 * @return User_Model_Row_Group
	 */
	public function getGroup() {
		
	}
	
	/**
	 * returns TRUE if associated
	 * account is account manager
	 * for this group
	 * 
	 * @return bool
	 */
	public function isAccountManager() {
	
	}
	
	/**
	 * returns TRUE if associated
	 * account is group manager
	 * for this group
	 * 
	 * @return bool
	 */
	public function isGroupManager() {
		
	}
	
	/**
	 * set account_manager flag for this association
	 * 
	 * @param bool $isManager new flag value
	 * @return User_Model_Row_AccountHaveManyGroup
	 */
	public function setAccountManager($isManager) {
	
	}
	
	/**
	 * set group_manager flag for this association
	 *
	 * @param bool $isManager new flag value
	 * @return User_Model_Row_AccountHaveManyGroup
	 */
	public function setGroupManager($isManager) {
		
	}
}