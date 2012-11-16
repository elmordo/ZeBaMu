<?php
class User_Model_Roles extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_roles";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_rowClass = "User_Model_Row_Role";
	
	protected $_rowsetClass = "User_Model_Rowset_Roles";
}