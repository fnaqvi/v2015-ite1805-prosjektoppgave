<?php
class BlogPost {
	private $Id;
	private $Title;
	private $Text;
	private $CreatedById;
	private $CreatedByName;
	private $CreatedByIP;
	private $CreatedOn;
	private $UpdatedById;
	private $UpdatedByName;
	private $UpdatedByIP;
	private $UpdatedOn;
	function __construct() {
	}
	function populate($id = '', $title = '', $text = '', $creatorid = '', $creatorname = '', $creatorip = '', $createddate = '', $updaterid = '', $updatername = '', $updaterip = '', $updateddate = '') {
		$this->Id = htmlspecialchars ( $id );
		$this->Title = htmlspecialchars ( $title );
		$this->Text = htmlspecialchars ( $text );
		
		$this->CreatedById = htmlspecialchars ( $creatorid );
		$this->CreatedByName = htmlspecialchars ( $creatorname );
		$this->CreatedByIP = htmlspecialchars ( $creatorip );
		$this->CreatedOn = htmlspecialchars ( $createddate );
		
		$this->UpdatedById = htmlspecialchars ( $updaterid );
		$this->UpdatedByName = htmlspecialchars ( $updatername );
		$this->UpdatedByIP = htmlspecialchars ( $updaterip );
		$this->UpdatedOn = htmlspecialchars ( $updateddate );
	}
	function getId() {
		return $this->Id;
	}
	function getTitle() {
		return $this->Title;
	}
	function getText() {
		return $this->Text;
	}
	function getCreatedById() {
		return $this->CreatedById;
	}
	function getCreatedByName() {
		return $this->CreatedByName;
	}
	function getCreatedByIP() {
		return $this->CreatedByIP;
	}
	function getCreatedOn() {
		return $this->CreatedOn;
	}
	function getUpdatedById() {
		return $this->UpdatedById;
	}
	function getUpdatedByName() {
		return $this->UpdatedByName;
	}
	function getUpdatedByIP() {
		return $this->UpdatedByIP;
	}
	function getUpdatedOn() {
		return $this->UpdatedOn;
	}
}
?>

