<?php
class User_Model_Accounts extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_accounts";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_rowClass = "User_Model_Row_Account";
	
	protected $_rowsetClass = "User_Model_Rowset_Accounts";
}