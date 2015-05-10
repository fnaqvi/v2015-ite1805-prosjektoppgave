<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
    <TITLE>{$websiteTitle|default:"Website"} :: {$pageTitle|default:"Page"}</TITLE>
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
	        <li class="{$links_cssClasses[0].cssClass|default:""}">
	        	<a href="index.php"><i class="fa fa-home fa-lg fa-fw"></i> Hjem <span class="sr-only">Hjem</span></a>
        	</li>
			{if isset($user) && $user->getId() gt 0 && isset($isadmin) && $isadmin == true}			
			<li class="{$links_cssClasses[1].cssClass|default:""}">
	        	<a href="addeditpost.php"><i class="fa fa-file-text-o fa-lg fa-fw"></i> Ny blogg post <span class="sr-only">Ny blogg post</span></a>
        	</li>
			{/if}
	      </ul>
		  
	      <form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Søk i blogg poster.">
	        </div>
	        <button type="submit" class="btn btn-default">Søk</button>
	      </form>
		  
		  <ul class="nav navbar-nav navbar-right">
			{if isset($user) && $user->getId() gt 0}
			<form enctype="multipart/form-data" method="POST" >
				<li class="margin-top-xs">
					<span>Pålogget som <strong>{$user->getFullName()}</strong></span>
					<button class="btn btn-link btn-link-no-underline" type="submit" name="submit" value="logout">
						<i class="fa fa-chain fa-lg"></i>
						<span>Logg ut</span>
						<span class="sr-only">Logg ut</span>
					</button>
				</li>			
			</form>			
			{else}
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
			{/if}
		  </ul>	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>	
	