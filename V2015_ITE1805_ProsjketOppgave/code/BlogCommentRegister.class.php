<?php
require_once ('BlogComment.class.php');
class BlogCommentRegister {
	private $db;
	function __construct($db) {
		$this->db = $db;
	}
	function saveComment(BlogComment $comment) {
		if ($comment != null) {
			//echo($comment->getStatus ());
			if ($comment->getId () <= 0) {
				
				$stmt = $this->db->prepare ( "INSERT INTO BlogComment(BlogPostId, CommentText, CreatedById, CreatedByIP, CreatedOn, UpdatedById, UpdatedByIP, UpdatedOn, Status)
															  VALUES (:blogpostid, :commenttext, :creatorid, :creatorip, now(), :updaterid, :updaterip, now(), :status)" );
				
				// $date = date ( 'Y-m-d H:i:s' );
				$stmt->execute ( array (
						':blogpostid' => $comment->getPostId (),
						':commenttext' => $comment->getCommentText (),
						':creatorid' => $comment->getCreatedById (),
						':creatorip' => $comment->getCreatedByIP (),
						/*':creationdate' => $date,*/
						':updaterid' => $comment->getUpdatedById (),
						':updaterip' => $comment->getUpdatedByIP (),
						/*':updationdate' => $date*/
						':status' => $comment->getStatus () 
				) );
				
				$newCommentId = $this->db->lastInsertId ();
				//echo($newCommentId);
				if ($newCommentId > 0) {
				} else if ($stmt->errorCode () != null) {
					// echo($stmt->errorCode());
				}
				
				return $newCommentId;
			} else if ($comment->getId () > 0) {
				
				$stmt = $this->db->prepare ( "UPDATE BlogComment
						SET CommentText = :commenttext, 
						UpdatedById = :updaterid, UpdatedByIP = :updaterip, UpdatedOn = now(),
						Status = :status
						WHERE Id = :id" );
				
				$stmt->execute ( array (
						':commenttext' => $comment->getCommentText (),
						':updaterid' => $comment->getUpdatedById (),
						':updaterip' => $comment->getUpdatedByIP (),
						':status' => $comment->getStatus (),
						':id' => $comment->getId () 
				) );
			}
		}
	}
	function getAllCommentsForPost($postId) {
		try {
			$stmt = $this->db->prepare ( "SELECT bc.*, 
												 CONCAT_WS(' ', bu1.FirstName, bu1.LastName) AS CreatedByName,
												 CONCAT_WS(' ', bu2.FirstName, bu2.LastName) AS UpdatedByName
											FROM BlogComment bc
											INNER JOIN BlogUser bu1 ON bc.CreatedById = bu1.Id
											INNER JOIN BlogUser bu2 ON bc.UpdatedById = bu2.Id
											WHERE bc.BlogPostId = :blogpostid 
											ORDER BY bc.CreatedOn DESC" );
			$stmt->execute ( array (
						':blogpostid' => $postId 
				) );
			
			if ($comments = $stmt->fetchAll ( PDO::FETCH_CLASS, "BlogComment" )) {
				return $comments;
			} else {
				print ("Ingen rader fant!") ;
			}
		} catch ( Exception $e ) {
			// NotifyUser ( "En feil oppstod", $e - getMessage () );
			print ("En feil oppstod. " . $e->getMessage ()) ;
		}
	}
	function deleteComment($id) {
		try {
			$id = htmlspecialchars ( $id );
			
			if ($id != null && $id != '') {
				
				$stmt = $this->db->prepare ( "DELETE FROM BlogComment WHERE Id = :id" );
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
	function getComment($id) {
		try {
			$id = htmlspecialchars ( $id );
			
			if ($id != null && $id != '') {
				
				$stmt = $this->db->prepare ( "SELECT bc.*,
												 CONCAT_WS(' ', bu1.FirstName, bu1.LastName) AS CreatedByName,
												 CONCAT_WS(' ', bu2.FirstName, bu2.LastName) AS UpdatedByName
											FROM BlogComment bc
											INNER JOIN BlogUser bu1 ON bc.CreatedById = bu1.Id
											INNER JOIN BlogUser bu2 ON bc.UpdatedById = bu2.Id
											WHERE bc.Id= :id " );
				$stmt->execute ( array (
						':id' => $id 
				) );
				
				if ($comment = $stmt->fetchObject ( 'BlogComment' )) {
					return $comment;
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