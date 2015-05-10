<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-24 01:14:37
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33075532bc42196378-45660618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4b5f6d88ef603215ad3dbe3653576ddfc73417' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1429830869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33075532bc42196378-45660618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5532bc421d7701_81009662',
  'variables' => 
  array (
    'websiteTitle' => 0,
    'pageTitle' => 0,
    'links_cssClasses' => 0,
    'user' => 0,
    'isadmin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5532bc421d7701_81009662')) {function content_5532bc421d7701_81009662($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
    <TITLE><?php echo (($tmp = @$_smarty_tpl->tpl_vars['websiteTitle']->value)===null||$tmp==='' ? "Website" : $tmp);?>
 :: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "Page" : $tmp);?>
</TITLE>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
    <!-- Bootstrap Latest compiled and minified CSS -->
   	<link rel="stylesheet" href="css/bootstrap.min.css">
   	
   	<!-- Font-awesome minified CSS -->
   	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!-- Custom CSS file -->
	<link rel="stylesheet" href="css/sfn_blog_styles.css">
</HEAD>
<BODY bgcolor="#ffffff" style="padding-top: 70px; padding-bottom: 70px;">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">
			<i class="fa fa-cubes fa-lg text-danger"></i>
			<span class="text-danger">SFN Blogg</span>
		  </a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['links_cssClasses']->value[0]['cssClass'])===null||$tmp==='' ? '' : $tmp);?>
">
	        	<a href="index.php"><i class="fa fa-home fa-lg fa-fw"></i> Hjem <span class="sr-only">Hjem</span></a>
        	</li>
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getId()>0&&isset($_smarty_tpl->tpl_vars['isadmin']->value)&&$_smarty_tpl->tpl_vars['isadmin']->value==true) {?>			
			<li class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['links_cssClasses']->value[1]['cssClass'])===null||$tmp==='' ? '' : $tmp);?>
">
	        	<a href="addeditpost.php"><i class="fa fa-file-text-o fa-lg fa-fw"></i> Ny blogg post <span class="sr-only">Ny blogg post</span></a>
        	</li>
			<?php }?>
	      </ul>
		  
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Søk i blogg poster.">
	        </div>
	        <button type="submit" class="btn btn-default">Søk</button>
	      </form>
		  
		  <ul class="nav navbar-nav navbar-right">
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getId()>0) {?>
			<form enctype="multipart/form-data" method="POST" >
				<li class="margin-top-xs">
					<span>Pålogget som <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->getFullName();?>
</strong></span>
					<button class="btn btn-link btn-link-no-underline" type="submit" name="submit" value="logout">
						<i class="fa fa-chain fa-lg"></i>
						<span>Logg ut</span>
						<span class="sr-only">Logg ut</span>
					</button>
				</li>			
			</form>			
			<?php } else { ?>
			<li class="">
	        	<a href="javascript:void(0);" class="" data-toggle="modal" data-target="#modalLogin">
					<i class="fa fa-chain-broken fa-lg"></i>
					<span>Logg inn</span>
					<span class="sr-only">Logg inn</span>
				</a>
        	</li>
			<li class="">
	        	<a href="javascript:void(0);" class="" data-toggle="modal" data-target="#modalRegistration">
					<i class="fa fa-user-plus fa-lg"></i>
					<span>Registrer deg</span>
					<span class="sr-only">Registrer deg</span>
				</a>				
        	</li>
			<?php }?>
		  </ul>	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>	
	<?php }} ?>
