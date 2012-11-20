<?php
class User_Model_Accounts extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_accounts";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_rowClass = "User_Model_Row_Account";
	
	protected $_rowsetClass = "User_Model_Rowset_Accounts";
	
	/**
	 * creates new account
	 * 
	 * @param string $login
	 * @param string $email
	 * @param string $password
	 * 
	 * @return User_Model_Row_Account
	 */
	public function createAccount($login, $email, $password) {
		
	}
	
	/**
	 * finds account by its id
	 * 
	 * @param int $id identification number of accout
	 * @return User_Model_Row_Account
	 */
	public function findById($id) {
		
	}
	
	/**
	 * finds account by its login
	 * 
	 * @param string $login login of account
	 * @return User_Model_Row_Account
	 */
	public function findByLogin($login) {
		
	}
}