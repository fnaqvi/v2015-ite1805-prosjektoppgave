<?php
require_once ('BlogPost.class.php');
class BlogPostRegister {
	private $db;
	function __construct($db) {
		$this->db = $db;
	}
	function savePost(BlogPost $post) {
		if ($post != null) {
			
			if ($post->getId () <= 0) {
				
				$stmt = $this->db->prepare ( "INSERT INTO BlogPost(Title, Text, CreatedById, CreatedByIP, CreatedOn, UpdatedById, UpdatedByIP, UpdatedOn, ReadCounter)
								VALUES (:title, :text, :creatorid, :creatorip, now(), :updaterid, :updaterip, now(), 0)" );
				
				// $date = date ( 'Y-m-d H:i:s' );
				$stmt->execute ( array (
						':title' => $post->getTitle (),
						':text' => $post->getText (),
						':creatorid' => $post->getCreatedById (),
						':creatorip' => $post->getCreatedByIP (),
						/*':creationdate' => $date,*/
						':updaterid' => $post->getUpdatedById (),
						':updaterip' => $post->getUpdatedByIP ()/*,
						':updationdate' => $date*/
				) );
				
				$newPostId = $this->db->lastInsertId ();
				// echo($newPostId);
				if ($newPostId > 0) {
				} else if ($stmt->errorCode () != null) {
					// echo($stmt->errorCode());
				}
				
				return $newPostId;
			} else if ($post->getId () > 0) {
				
				$stmt = $this->db->prepare ( "UPDATE BlogPost 
						SET Title = :title, Text = :text, 
						UpdatedById = :updaterid, UpdatedByIP = :updaterip, UpdatedOn = now()
						WHERE Id = :id" );
				
				$stmt->execute ( array (
						':title' => $post->getTitle (),
						':text' => $post->getText (),
						':updaterid' => $post->getUpdatedById (),
						':updaterip' => $post->getUpdatedByIP (),
						':id' => $post->getId () 
				) );
			}
		}
	}
	function getAllPosts() {
		try {
			$stmt = $this->db->prepare ( "SELECT bp.*, 
												 CONCAT_WS(' ', bu1.FirstName, bu1.LastName) AS CreatedByName,
												 CONCAT_WS(' ', bu2.FirstName, bu2.LastName) AS UpdatedByName
											FROM BlogPost bp
											INNER JOIN BlogUser bu1 ON bp.CreatedById = bu1.Id
											INNER JOIN BlogUser bu2 ON bp.UpdatedById = bu2.Id 
											ORDER BY bp.CreatedOn DESC" );
			$stmt->execute ();
			
			if ($posts = $stmt->fetchAll ( PDO::FETCH_CLASS, "BlogPost" )) {
				return $posts;
			} else {
				print ("Ingen rader fant!") ;
			}
		} catch ( Exception $e ) {
			// NotifyUser ( "En feil oppstod", $e - getMessage () );
			print ("En feil oppstod. " . $e->getMessage ()) ;
		}
	}
	function deletePost($id) {
		try {
			$id = htmlspecialchars ( $id );
			
			if ($id != null && $id != '') {
				
				$stmt = $this->db->prepare ( "DELETE FROM BlogPost WHERE Id = :id" );
				$stmt->execute ( array (
						':id' => $id 
				) );
			} else
				throw new Exception ( 'Id er null eller tomt.' );
		} catch ( Exception $e ) {
			throw new Exception ( $e->getMessage () );
		} finally{
		}
	}
	function getPost($id, $updateReadCounter) {
		try {
			$id = htmlspecialchars ( $id );
			
			if ($id != null && $id != '') {
				if ($updateReadCounter == true) {
					$stmt = $this->db->prepare ( "UPDATE BlogPost 
													SET ReadCounter = ReadCounter + 1											
													WHERE Id= :id " );
					$stmt->execute ( array (
							':id' => $id 
					) );
				}
				
				$stmt = $this->db->prepare ( "SELECT bp.*,
												 CONCAT_WS(' ', bu1.FirstName, bu1.LastName) AS CreatedByName,
												 CONCAT_WS(' ', bu2.FirstName, bu2.LastName) AS UpdatedByName
											FROM BlogPost bp
											INNER JOIN BlogUser bu1 ON bp.CreatedById = bu1.Id
											INNER JOIN BlogUser bu2 ON bp.UpdatedById = bu2.Id
											WHERE bp.Id= :id " );
				$stmt->execute ( array (
						':id' => $id 
				) );
				
				if ($post = $stmt->fetchObject ( 'BlogPost' )) {
					return $post;
				} else {
					// Ingen poster å vise
					throw new Exception ( "Feil id." );
				}
			} else
				throw new Exception ( 'Id er null eller tomt.' );
		} catch ( Exception $e ) {
			throw new Exception ( $e->getMessage () );
		}
	}
}

?>