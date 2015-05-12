<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once ('code/auth_pdo.php');
require_once ('code/BlogUserRegister.class.php');
require_once ('code/BlogPostRegister.class.php');
require_once ('code/BlogCommentRegister.class.php');
include ('libs/Smarty.class.php'); // create object

session_start ();

$smarty = new Smarty (); // assign options arrays
$smarty->assign ( 'websiteTitle', 'HiN Blogg' );
$smarty->assign ( 'pageTitle', 'Post' );
$smarty->assign ( 'modalRegisterTitle', 'Registrering som ny bruker' );
$smarty->assign ( 'modalLoginTitle', 'Logg inn' );

$smarty->assign ( "links_cssClasses", array (
		array (
				"link" => "home",
				"cssClass" => "" 
		),
		array (
				"link" => "addeditpost",
				"cssClass" => "" 
		) 
) );

$blogUserRegister = new BlogUserRegister ( $db );
$blogPostRegister = new BlogPostRegister ( $db );
$blogCommentRegister = new BlogCommentRegister ( $db );

if (isset ( $_POST ['submit'] )) {
if ($_POST ['submit'] == 'register') {
		
		$newUser = new BlogUser ();
		$newUser->populate ( htmlspecialchars ( $_POST ['userid'] ), htmlspecialchars ( $_POST ['password'] ), htmlspecialchars ( $_POST ['fornavn'] ), htmlspecialchars ( $_POST ['etternavn'] ), htmlspecialchars ( $_POST ['epost'] ), htmlspecialchars ( $_POST ['telefon'] ), htmlspecialchars ( $_POST ['mobil'] ), htmlspecialchars ( $_POST ['www'] ) );
		$newUserId = $blogUserRegister->saveUser ( $newUser );
		if ($newUserId > 0) {
			
			$_SESSION ['userauthentication'] = 'authenticated';
			$_SESSION ['userid'] = $newUserId;
			$_SESSION ['username'] = $newUser->getFullName ();
			//$_SESSION ['isadmin'] = $blogUserRegister->hasUserAdminRole ( $newUserId );
			
			$smarty->assign ( 'displayAlert', true );
			$smarty->assign ( 'alertCssClass', 'success' );
			$smarty->assign ( 'alertMessage', 'Takk for din interesse! En administrator skal se gjennom din profil og tildele en rolle til deg om aktuelt.' );
		} else {
			
			$smarty->assign ( 'displayAlert', false );
			$smarty->assign ( 'alertCssClass', 'danger' );
			$smarty->assign ( 'alertMessage', 'Oops! Det skjedde noe galt, vennligst prøv igjen senere.' );
		}
	} else if ($_POST ['submit'] == 'login') {
		
		try {
			
			$user = $blogUserRegister->getUserByUId_Pwd ( htmlspecialchars ( $_POST ['userid'] ), htmlspecialchars ( $_POST ['password'] ) );
			
			if ($user != null && $user->getId () > 0) {
				
				$_SESSION ['userauthentication'] = 'authenticated';
				$_SESSION ['userid'] = $user->getId ();
				$_SESSION ['username'] = $user->getFullName ();
				//$_SESSION ['isadmin'] = $blogUserRegister->hasUserAdminRole ( $user->getId () );
				
				$smarty->assign ( 'user', $user );
				$smarty->assign ( 'displayAlert', true );
				$smarty->assign ( 'alertCssClass', 'success' );
				$smarty->assign ( 'alertMessage', 'Paaloggingen var vellykket.' );
			} else {
				
				session_unset ();
				$_SESSION ['userauthentication'] = 'anonymous';
				
				$smarty->assign ( 'displayAlert', true );
				$smarty->assign ( 'alertCssClass', 'danger' );
				$smarty->assign ( 'alertMessage', 'Feil brukerid og/eller passord.' );
			}
		} catch ( Exception $e ) {
			
			session_unset ();
			$_SESSION ['userauthentication'] = 'anonymous';
			
			$smarty->assign ( 'displayAlert', true );
			$smarty->assign ( 'alertCssClass', 'danger' );
			$smarty->assign ( 'alertMessage', $e->getMessage () );
		}
	} else if ($_POST ['submit'] == 'logout') {
		
		session_unset ();
		$_SESSION ['userauthentication'] = 'anonymous';
		
		$smarty->assign ( 'user', null );
	} else if ($_POST ['submit'] == 'savecomment') {
		
		$newComment = new BlogComment ();
		$newComment->populate ( -1, htmlspecialchars ( $_POST ['postid'] ), htmlspecialchars ( $_POST ['commenttext'] ), htmlspecialchars ( $_POST ['createdbyid'] ), '', htmlspecialchars ( $_POST ['createdbyip'] ), '', htmlspecialchars ( $_POST ['updatedbyid'] ), '', htmlspecialchars ( $_POST ['updatedbyip'] ), '' );
		$newCommentId = $blogCommentRegister->saveComment( $newComment );
	}
}

if (isset ( $_GET ['postid'] ) && $_GET ['postid'] > 0) {

	$postId = $_GET ['postid'];
	// echo ($postId);

	$blogPost = $blogPostRegister->getPost ( $postId, true );

	$smarty->assign ( 'pageTitle', $blogPost->getTitle () );
	$smarty->assign ( 'blogpost', $blogPost );

	$postComments = array ();
	$postComments = $blogCommentRegister->getAllCommentsForPost ( $postId );

	$smarty->assign ( 'postcomments', $postComments );

} else {
	header ( "Location: index.php" );
	die ();
}

if (isset ( $_SESSION ['userauthentication'] ) && $_SESSION ['userauthentication'] == 'authenticated' && isset ( $_SESSION ['userid'] ) && $_SESSION ['userid'] != '') {
	$user = $blogUserRegister->getUserById ( $_SESSION ['userid'] );
	if ($user != null) {
		$_SESSION ['username'] = $user->getFullName ();
		$_SESSION ['isadmin'] = $blogUserRegister->hasUserAdminRole ( $user->getId () );
		
		$smarty->assign ( 'user', $user );
		$smarty->assign ( 'isadmin', $_SESSION ['isadmin'] );
		
		$newComment = new BlogComment();
		$newComment->populate ( -1, $postId, '', $user->getId (), $user->getFullName (), $_SERVER ['REMOTE_ADDR'], '', $user->getId (), $user->getFullName (), $_SERVER ['REMOTE_ADDR'], '' );
		$smarty->assign ( 'newcomment', $newComment );
	} else {
		session_unset ();
		$_SESSION ['userauthentication'] = 'anonymous';
		$smarty->assign ( 'user', null );
		$smarty->assign ( 'newcomment', null);
	}
} else {
	session_unset ();
	$_SESSION ['userauthentication'] = 'anonymous';
	$smarty->assign ( 'user', null );
}


// Taken from http://stackoverflow.com/questions/520237/how-do-i-expire-a-php-session-after-30-minutes/1270960#1270960
if (isset ( $_SESSION ['LAST_ACTIVITY'] ) && (time () - $_SESSION ['LAST_ACTIVITY'] > 1800)) {
	// last request was more than 30 minutes ago
	session_unset (); // unset $_SESSION variable for the run-time
	session_destroy (); // destroy session data in storage
}
$_SESSION ['LAST_ACTIVITY'] = time (); // update last activity time stamp
                                       
// echo ($_SESSION ['userauthentication']);
if (isset ( $_SESSION ['userauthentication'] ) && $_SESSION ['userauthentication'] == 'authenticated' && isset ( $_SESSION ['userid'] ) && $_SESSION ['userid'] != '') {
	$user = $blogUserRegister->getUserById ( $_SESSION ['userid'] );
	if ($user != null) {
		$_SESSION ['username'] = $user->getFullName ();
		$_SESSION ['isadmin'] = $blogUserRegister->hasUserAdminRole ( $user->getId () );
		
		$smarty->assign ( 'user', $user );
		$smarty->assign ( 'isadmin', $_SESSION ['isadmin'] );
	} else {
		session_unset ();
		$_SESSION ['userauthentication'] = 'anonymous';
		$smarty->assign ( 'user', null );
	}
} else {
	session_unset ();
	$_SESSION ['userauthentication'] = 'anonymous';
	$smarty->assign ( 'user', null );
}

$blogposts = array ();
$blogposts = $blogPostRegister->getAllPosts ();

$smarty->assign ( 'blogposts', $blogposts );

$smarty->display ( 'post.tpl' );
?>