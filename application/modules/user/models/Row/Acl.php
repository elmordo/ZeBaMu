<?php
class User_Model_Row_Acl extends Zend_Db_Table_Row_Abstract {

	/**
	 * returns action
	 * if rule is valid for all actions, returns NULL
	 * 
	 * @return string
	 */
	public function getAction() {
		
	}
	
	/**
	 * returs resource of rule
	 * 
	 * @return User_Model_Row_Resource
	 */
	public function getResource() {
		
	}
	
	/**
	 * returns role of rule
	 * 
	 * @return User_Model_Row_Role
	 */
	public function getRole() {
		
	}
	
	/**
	 * if rule allow action, returns TRUE
	 * if rule deny action, returns FALSE
	 * 
	 * @return bool
	 */
	public function isAllowing() {
		
	}
}