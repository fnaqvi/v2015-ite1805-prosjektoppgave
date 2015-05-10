<?php
class BlogUser {
	private $Id;
	private $UserId;
	private $Password;
	private $FirstName;
	private $LastName;
	private $EmailAddress;
	private $Telephone;
	private $Mobile;
	private $Website;
	function __construct() {
	}
	function populate($uid = '', $pwd = '', $fName = '', $lName = '', $email = '', $tlf = '', $mobil = '', $www = '') {
		//$this->Id = htmlspecialchars ( $id );
		$this->UserId = htmlspecialchars ( $uid );
		$this->Password = htmlspecialchars ( $pwd );
		
		$this->FirstName = htmlspecialchars ( $fName );
		$this->LastName = htmlspecialchars ( $lName );
		$this->EmailAddress = htmlspecialchars ( $email );
		$this->Telephone = htmlspecialchars ( $tlf );
		$this->Mobile = htmlspecialchars ( $mobil );
		$this->Website = htmlspecialchars ( $www );
	}
	function getId() {
		return $this->Id;
	}
	function getUserId() {
		return $this->UserId;
	}
	/*
	 * function getPassword() {
	 * return $this->Password;
	 * }
	 */
	function getPasswordHash() {
		return md5 ( $this->Password );
	}
	function getFirstName() {
		return $this->FirstName;
	}
	function getLastName() {
		return $this->LastName;
	}
	function getFullName() {
		return $this->FirstName . " " . $this->LastName;
	}
	function getEmailAddress() {
		return $this->EmailAddress;
	}
	function getTelephone() {
		return $this->Telephone;
	}
	function getMobile() {
		return $this->Mobile;
	}
	function getWebsiteAddress() {
		return $this->Website;
	}
}
?>

