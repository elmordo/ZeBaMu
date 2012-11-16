<?php
class User_Model_Resources extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_resources";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_rowClass = "User_Model_Row_Resource";
	
	protected $_rowsetClass = "User_Model_Rowset_Resources";
}