{include file="header.tpl"}

{if isset($displayAlert) && $displayAlert eq true} 	
<div class="alert alert-{$alertCssClass} margin-sm fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="alert-message">{$alertMessage}</div>
</div>
{/if}

<div class="row">
	<div class="col-sm-10 col-xs-12">
		{if isset($blogposts)}
			{foreach $blogposts as $blogpost}
				<div id="panel_{$blogpost->getId()}" class="panel panel-default margin-left-sm margin-right-sm">
				  <div class="panel-heading">
					<div class="row">
						<div class="col-xs-8">
							<h3 class="panel-title">{$blogpost->getTitle()}</h3>
						</div>
						<div class="col-xs-4 text-right">
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
				  </div>
				  <div class="panel-body">
					{$blogpost->getText()}
				  </div>
				  <div class="panel-footer text-right">
					<i class="fa fa-user fa-lg fa-fw" title="{$blogpost->getCreatedByName()}" data-toggle="tooltip" data-placement="body"></i>
					<span class="margin-right-xs hidden-xs1">{$blogpost->getCreatedByName()}</span>
					<i class="fa fa-calendar fa-lg fa-fw" title='{$blogpost->getCreatedOn()|date_format:"%d.%m.%Y %H:%M"}' data-toggle="tooltip" data-placement="body"></i>
					<span class="margin-right-sm">{$blogpost->getCreatedOn()|date_format:"%d.%m.%Y %H:%M"}</span>					
				  </div>
				 </div>				
			{/foreach}
		{/if}
	</div>
	<div class="col-sm-2 hidden-xs">
		{if isset($blogposts)}
			<ul class="fa-ul">
				{foreach $blogposts as $blogpost}
					<li class="margin-top-xs margin-bottom-xs">
						<a href="#panel_{$blogpost->getId()}">
							<i class="fa-li fa fa-file-text fa-fw"></i>
							<span>{$blogpost->getTitle()}</span>				  
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