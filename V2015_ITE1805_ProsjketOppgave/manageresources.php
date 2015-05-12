<?php
header ( 'Content-Type: text/html; charset=utf-8' );
require_once ('code/auth_pdo.php');
require_once ('code/BlogUserRegister.class.php');
require_once ('code/BlogPostRegister.class.php');
include ('libs/Smarty.class.php'); // create object

session_start ();

// Taken from http://stackoverflow.com/questions/520237/how-do-i-expire-a-php-session-after-30-minutes/1270960#1270960
if (isset ( $_SESSION ['LAST_ACTIVITY'] ) && (time () - $_SESSION ['LAST_ACTIVITY'] > 1800)) {
	// last request was more than 30 minutes ago
	session_unset (); // unset $_SESSION variable for the run-time
	session_destroy (); // destroy session data in storage
	header ( "Location: index.php" );
	die ();
}
$_SESSION ['LAST_ACTIVITY'] = time (); // update last activity time stamp

$smarty = new Smarty (); // assign options arrays
$smarty->assign ( 'websiteTitle', 'HiN Blogg' );
// $smarty->assign ( 'pageTitle', 'Legg til/rediger post' );

$blogUserRegister = new BlogUserRegister ( $db );
$blogPostRegister = new BlogPostRegister ( $db );

// echo($_SESSION ['userauthentication']);
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
	
	if (isset ( $_GET ['postid'] ) && $_GET ['postid'] > 0) {
		// Edit mode
		$smarty->assign ( 'mode', 'edit' );
		$smarty->assign ( 'pageTitle', 'Rediger post' );
		
		$postId = $_GET ['postid'];
		
		$blogPost = $blogPostRegister->getPost ( $postId, false );
		$smarty->assign ( 'post', $blogPost );
	} else if (isset ( $_GET ['delid'] ) && $_GET ['delid'] > 0) {
		// Edit mode
		$smarty->assign ( 'mode', 'delete' );
		$smarty->assign ( 'pageTitle', 'Slett post' );
		
		$delId = $_GET ['delid'];
		
		$blogPost = $blogPostRegister->deletePost ( $delId );
		header ( "Location: index.php" );
		die ();
	} else {
		// Insert mode
		$smarty->assign ( 'mode', 'insert' );
		$smarty->assign ( 'pageTitle', 'Legg til post' );
		
		$newPost = new BlogPost ();
		$newPost->populate ( - 1, '', '', $user->getId (), $user->getFullName (), $_SERVER ['REMOTE_ADDR'], '', $user->getId (), $user->getFullName (), $_SERVER ['REMOTE_ADDR'], '' );
		$smarty->assign ( 'post', $newPost );
	}
} else {
	session_unset ();
	$_SESSION ['userauthentication'] = 'anonymous';
	header ( "Location: index.php" );
	die ();
}

$smarty->assign ( "links_cssClasses", array (
		array (
				"link" => "home",
				"cssClass" => "" 
		),
		array (
				"link" => "addeditpost",
				"cssClass" => "" 
		),
		array (
				"link" => "manageresources",
				"cssClass" => "active" 
		) 
) );

$blogposts = array ();

$blogposts = $blogPostRegister->getAllPosts ();

$smarty->assign ( 'blogposts', $blogposts );

$smarty->display ( 'manageresources.tpl' );
?>