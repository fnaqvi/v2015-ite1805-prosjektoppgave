{include file="header.tpl"}

{if isset($displayAlert) && $displayAlert eq true} 	
<div class="alert alert-{$alertCssClass} margin-sm fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="alert-message">{$alertMessage}</div>
</div>
{/if}

<div class="row">
	<div class="col-sm-10 col-xs-12">
		{if isset($blogpost)}
			<div id="panel_{$blogpost->getId()}" class="panel panel-primary margin-left-sm margin-right-sm">
			  <div class="panel-heading">
				<div class="row">
					<div class="col-xs-8">
						<h3 class="panel-title">{$blogpost->getTitle()} <span class="badge">{$blogpost->getReadCounter()}</span></h3>
					</div>
					<div class="col-xs-4 text-right">
						<i class="fa fa-user fa-fw" title="{$blogpost->getCreatedByName()}" data-toggle="tooltip" data-placement="body"></i>
							<span class="margin-right-xs hidden-xs1">{$blogpost->getCreatedByName()}</span>
							<i class="fa fa-calendar fa-fw" title='{$blogpost->getCreatedOn()|date_format:"%d.%m.%Y %H:%M"}' data-toggle="tooltip" data-placement="body"></i>
							<span class="margin-right-sm">{$blogpost->getCreatedOn()|date_format:"%d.%m.%Y"}</span>
					</div>
				</div>
			  </div>
			  <div class="panel-body">
					{$blogpost->getText()}				
			  </div>
			  <div class="panel-footer text-right">
				{if isset($user) && $user->getId() gt 0 && isset($isadmin) && $isadmin == true}	
							<a href="addeditpost.php?postid={$blogpost->getId()}" class="link-no-underline" title="Rediger" data-toggle="tooltip" data-placement="body">
								<i class="fa fa-pencil fa-lg fa-fw"></i>
								<span class="hidden-xs">Rediger</span>
							</a>
							<a href="addeditpost.php?delid={$blogpost->getId()}" class="text-danger link-no-underline" title="Slett" data-toggle="tooltip" data-placement="body">
								<i class="fa fa-times fa-lg fa-fw"></i>
								<span class="hidden-xs">Slett</span>
							</a>
						{/if}
			  </div>
			</div>
			<hr/>
			<div class="col-xs-6">
				<h3 class="margin-top-xs">Kommentarer</h3>
			</div>
			<div class="col-xs-6 text-right">
				<h5><a href="#newcomment">Legg igjen en kommentar</a></h5>
			</div>
			<div class="col-xs-12">
				{if isset($postcomments)}
					{foreach $postcomments as $postcomment}
						<div id="panelComment_{$postcomment->getId()}" class="panel panel-default">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-8">
										<h3 class="panel-title text-muted">
											<i class="fa fa-user fa-fw text-muted" title="{$postcomment->getCreatedByName()}" data-toggle="tooltip" data-placement="body"></i>
											<span class="text-muted"><strong>{$postcomment->getCreatedByName()}</strong> sier:</span>
										</h3>
									</div>
									<div class="col-xs-4 text-right">
										<i class="fa fa-calendar fa-fw text-muted" title='{$postcomment->getCreatedOn()|date_format:"%d.%m.%Y %H:%M"}' data-toggle="tooltip" data-placement="body"></i>
										<span class="text-muted margin-right-sm">{$postcomment->getCreatedOn()|date_format:"%d.%m.%Y"}</span>
									</div>
								</div>
							</div>
							<div class="panel-body">
								{$postcomment->getCommentText()}							
							</div>	
						</div>
					{/foreach}
				{else}
					<div class="col-xs-12" role="alert">
						<h4>Ingen kommentarer ennå ...</h4>
					</div>
				{/if}
			</div>			
			<hr/>
			<div id="newcomment" class="comment-form-div col-xs-12 margin-top-md">
				<h3 class="margin-top-xs">Ditt innspill</h3>
				{if isset($user) && $user->getId() gt 0}
					<form class="" enctype="multipart/form-data" method="POST">
						<div class="form-group">
							<!--<label for="commenttext"><h4>Din kommentar:</h4></label>-->
							<textarea rows="6" class="form-control" id="commenttext" name="commenttext" placeholder="Tast inn din kommentar." required></textarea>
							<input type="hidden" id="postid" name="postid" value="{$blogpost->getId()}">
							<input type="hidden" id="createdbyid" name="createdbyid" value="{$newcomment->getCreatedById()}">
							<input type="hidden" id="createdbyip" name="createdbyip" value="{$newcomment->getCreatedByIP()}">
							<input type="hidden" id="updatedbyid" name="updatedbyid" value="{$newcomment->getUpdatedById()}">
							<input type="hidden" id="updatedbyip" name="updatedbyip" value="{$newcomment->getUpdatedByIP()}">
						</div>
						<button type="submit" name="submit" value="savecomment" class="btn btn-primary">Lagre</button>					
					</form>			
				{else}
					<h5><a href="javascript:void(0);" class="" data-toggle="modal" data-target="#modalLogin">Logg inn</a> eller <a href="javascript:void(0);" class="" data-toggle="modal" data-target="#modalRegistration">Registrer deg</a> for å legge igjen en kommentar</h5>
				{/if}
			</div>
		{/if}
	</div>
	<div class="col-sm-2 hidden-xs">
		{if isset($blogposts)}
			<ul class="fa-ul">
				{foreach $blogposts as $eachblogpost}
					<li class="margin-top-xs margin-bottom-xs">
						<a href="#panel_{$eachblogpost->getId()}">
							<i class="fa-li fa fa-file-text fa-fw"></i>
							<span>{$eachblogpost->getTitle()}</span>				  
						</a>
					</li>
				{/foreach}
			</ul>
		{/if}
	</div>	
</div>





{include file="footer.tpl"}
{include file="registeruser.tpl"}
{include file="login.tpl"}