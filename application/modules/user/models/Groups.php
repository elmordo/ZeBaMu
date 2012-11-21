<?php
class User_Model_Groups extends Zend_Db_Table_Abstract {
	
	protected $_name = "user_groups";
	
	protected $_primary = "id";
	
	protected $_sequence = true;
	
	protected $_referenceMap = array(
			"account" => array(
					"columns" => "owner_id",
					"refTableClass" => "User_Model_Accounts",
					"refColumns" => "id"
			)
	);
	
	protected $_rowClass = "User_Model_Row_Group";
	
	protected $_rowsetClass = "User_Model_Rowset_Groups";
	
	/**
	 * creates new group
	 * 
	 * @param string $name name of group 
	 * @param User_Model_Row_Account $owner owner account
	 * @return User_Model_Row_Group
	 */
	public function createGroup($name, User_Model_Row_Account $owner) {
		
	}
	
	/**
	 * finds group by its id
	 * 
	 * @param int $id id of group
	 * @return User_Model_Row_Group
	 */
	public function findById($id) {
		
	}
}