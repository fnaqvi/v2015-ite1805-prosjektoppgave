<?php
require_once ('BlogUser.class.php');
class BlogUserRegister {
	private $db;
	function __construct($db) {
		$this->db = $db;
	}
	function saveUser(BlogUser $user) {
		$stmt = $this->db->prepare ( "INSERT INTO BlogUser (UserId, Password, FirstName, LastName, EmailAddress, Telephone, Mobile, Website)
								VALUES (:uid, :pwd, :fname, :lname, :email, :tlf, :mobil, :web)" );
		// $stmt->bindParam(1, $id);
		$stmt->execute ( array (
				':uid' => $user->getUserId (),
				':pwd' => $user->getPasswordHash (),
				':fname' => $user->getFirstName (),
				':lname' => $user->getLastName (),
				':email' => $user->getEmailAddress (),
				':tlf' => $user->getTelephone (),
				':mobil' => $user->getMobile (),
				':web' => $user->getWebsiteAddress () 
		) );
		
		$newUserId = $this->db->lastInsertId ();
		
		if ($newUserId > 0) {
		}
		
		return $newUserId;
	}
	function getUserByUId_Pwd($uid, $pwd) {
		try {
			$uid = htmlspecialchars ( $uid );
			$pwd = htmlspecialchars ( $pwd );
			
			if ($uid != null && $uid != '' && $pwd != null && $pwd != '') {
				
				$stmt = $this->db->prepare ( "SELECT Id, UserId, Password, FirstName, LastName, EmailAddress, Telephone, Mobile, Website
												FROM BlogUser u
									      		WHERE u.UserId= :uid And u.Password = :pwd" );
				$stmt->execute ( array (
						':uid' => $uid,
						':pwd' => md5 ( $pwd ) 
				) );
				// $stmt->bindParam ( 1, $uid );
				// $stmt->bindParam ( 2, md5 ( $pwd ) );
				// $stmt->execute ();
				
				if ($user = $stmt->fetchObject ( 'BlogUser' )) {
					return $user;
				} else {
					// Ingen poster å vise
					throw new Exception ( "Feil brukerid eller passord" );
				}
			} else
				throw new Exception ( 'Id eller Passord er null eller tomt.' );
		} catch ( Exception $e ) {
			throw new Exception ( $e->getMessage () );
		}
	}
	function getUserById($id) {
		try {
			$id = htmlspecialchars ( $id );
			
			if ($id != null && $id > 0) {
				
				$stmt = $this->db->prepare ( "SELECT Id, UserId, Password, FirstName, LastName, EmailAddress, Telephone, Mobile, Website
												FROM BlogUser u
									      		WHERE u.Id= :id " );
				$stmt->execute ( array (
						':id' => $id 
				) );
				
				if ($user = $stmt->fetchObject ( 'BlogUser' )) {
					return $user;
				} else {
					// Ingen poster å vise
					throw new Exception ( "Feil bruker id" );
				}
			} else
				throw new Exception ( 'Id er null eller mindre enn 0.' );
		} catch ( Exception $e ) {
			throw new Exception ( $e->getMessage () );
		}
	}
	function hasUserAdminRole($id) {
		try {
			$id = htmlspecialchars ( $id );
			
			if ($id != null && $id > 0) {
				
				$stmt = $this->db->prepare ( "SELECT *
												FROM BlogUser_Role ur
									      		WHERE ur.UserId= :uid 
												  AND ur.RoleId = 1 " );
				$stmt->execute ( array (
						':uid' => $id 
				) );
				
				$row = $stmt->fetch ( PDO::FETCH_ASSOC );
				if (! $row) {
					return false;
				} else {
					return true;
				}
			} else
				throw new Exception ( 'Id er null eller mindre enn 0.' );
		} catch ( Exception $e ) {
			throw new Exception ( $e->getMessage () );
		}
	}
	function getAllUsers() {
		try {
			$stmt = $this->db->prepare ( "SELECT * FROM BlogUser" );
			$stmt->execute ();
			
			if ($users = $stmt->fetchAll ( PDO::FETCH_CLASS, "BlogUser" )) {
				return $users;
			} else {
				throw new Exception ( "Ingen rader fant!" );
			}
		} catch ( Exception $e ) {
			// NotifyUser ( "En feil oppstod", $e - getMessage () );
			print ("En feil oppstod" . $e - getMessage ()) ;
		}
	}
}
?>