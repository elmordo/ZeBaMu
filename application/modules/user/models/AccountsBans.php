<?php
class User_Model_AccountsBans extends Zend_Db_Table_Abstract {

	protected $_name = "user_accounts_bans";

	protected $_primary = "id";

	protected $_sequence = true;

	protected $_referenceMap = array(
			"account" => array(
					"columns" => "account_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);

	protected $_rowClass = "User_Model_Row_AccountBan";

	protected $_rowsetClass = "User_Model_Rowset_AcountsBans";
	
	/**
	 * filter for all bans
	 * 
	 * @var int
	 */
	const BANS_ALL = 0;
	
	/**
	 * filter for active bans only
	 * 
	 * @var int
	 */
	const BANS_ACTIVE = 1;
	
	/**
	 * filter form expired bans only
	 * 
	 * @var int
	 */
	const BANS_EXPIRED = 2;
	
	/**
	 * ban account
	 * 
	 * @param User_Model_Row_Account $account account to ban
	 * @param User_Model_Row_Account $dealer dealer account of ban
	 * @param unknown_type $reason reason, why account is banned
	 * @param Zend_Date $expired date when ban will expired
	 * @return User_Model_Row_AccountBan
	 */
	public function banAccount(User_Model_Row_Account $account, User_Model_Row_Account $dealer, $reason, Zend_Date $expired) {
		
	}
	
	/**
	 * get bans of account
	 * it can be filtered
	 * 
	 * @param User_Model_Row_Account $account banned account
	 * @param unknown_type $filter filter of bans
	 * @return User_Model_Rowset_AccountsBans
	 */
	public function getBans(User_Model_Row_Account $account, $filter = null) {
		
	}
	
	/**
	 * returns currently expired bans which wasn't been procesed
	 * 
	 * @return User_Model_Rowset_AccountsBans
	 */
	public function getExpired() {
		
	}
}