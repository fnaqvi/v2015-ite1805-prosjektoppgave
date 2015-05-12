<?php
class BlogComment {
	private $Id;
	private $PostId;
	private $CommentText;
	private $CreatedById;
	private $CreatedByName;
	private $CreatedByIP;
	private $CreatedOn;
	private $UpdatedById;
	private $UpdatedByName;
	private $UpdatedByIP;
	private $UpdatedOn;
	private $Status;
	function __construct() {
	}
	function populate($id = '', $postId = '', $commentText = '', $creatorid = '', $creatorname = '', $creatorip = '', $createddate = '', $updaterid = '', $updatername = '', $updaterip = '', $updateddate = '', $status = 'waitingapproval') {
		$this->Id = htmlspecialchars ( $id );
		$this->PostId = htmlspecialchars ( $postId );
		$this->CommentText = htmlspecialchars ( $commentText );
		
		$this->CreatedById = htmlspecialchars ( $creatorid );
		$this->CreatedByName = htmlspecialchars ( $creatorname );
		$this->CreatedByIP = htmlspecialchars ( $creatorip );
		$this->CreatedOn = htmlspecialchars ( $createddate );
		
		$this->UpdatedById = htmlspecialchars ( $updaterid );
		$this->UpdatedByName = htmlspecialchars ( $updatername );
		$this->UpdatedByIP = htmlspecialchars ( $updaterip );
		$this->UpdatedOn = htmlspecialchars ( $updateddate );
		
		$this->Status = htmlspecialchars ( $status );
	}
	function getId() {
		return $this->Id;
	}
	function getPostId() {
		return $this->PostId;
	}
	function getCommentText() {
		return $this->CommentText;
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
	function getStatus() {
		return $this->Status;
	}
}
?>

