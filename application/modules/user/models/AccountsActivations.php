<?php
class User_Model_AccountsActivations extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_accounts_activations";
	
	protected $_primary = "activation_key";
	
	protected $_sequence = false;
	
	protected $_referenceMap = array(
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_AccountActivation";
	
	protected $_rowsetClass = "User_Model_Rowset_AcountsActivations";
	
	/**
	 * create new activation row
	 *
	 * @param User_Model_Row_Account $account account which will be activated
	 * @param Zend_Date $validTo validity of activation key
	 * @return User_Model_Row_AccountActivation
	 */
	public function createActivation(User_Model_Row_Account $account, Zend_Date $validTo) {
	
	}
	
	/**
	 * find activation by key
	 *
	 * @param string $key activation key
	 * @return User_Model_Row_AccountActivation
	 */
	public function findByKey($key) {
	
	}
	
	/**
	 * returns history of account activations
	 *
	 * @return User_Model_Rowset_AccountsActivations
	 */
	public function getHistory(User_Model_Row_Account $account) {
	
	}
}