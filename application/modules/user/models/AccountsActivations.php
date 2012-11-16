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
}