{include file="header.tpl"}

<div class="container-fluid">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{$pageTitle|default:"Add/edit Blog Post"}</h3>
  </div>
  <div class="panel-body">
    <form enctype="multipart/form-data" method="POST" action="index.php" >
    	<div class="form-group">
    		<label for="title">Tittel:</label>
    		<input type="text" class="form-control" id="title" name="title" placeholder="Tast inn postens tittel." maxlength="100" required value="{$post->getTitle()}">
			<input type="hidden" id="postid" name="postid" value="{$post->getId()}">
  		</div>
  		<div class="form-group">
    		<label for="posttext">Text:</label>
    		<textarea rows="6" class="form-control" id="posttext" name="posttext" placeholder="Tast inn postens innhold." required>{$post->getText()}</textarea>
  		</div>
  		<div class="form-group">
    		<label for="control-label">Forfatter:</label>
			<p class="form-control-static" >{$post->getCreatedByName()}</p>
			<input type="hidden" id="createdbyid" name="createdbyid" value="{$post->getCreatedById()}">
			<input type="hidden" id="createdbyip" name="createdbyip" value="{$post->getCreatedByIP()}">
  		</div>
		<div class="form-group">
    		<label for="control-label">Sist oppdatert av:</label>
			<p class="form-control-static" >{$post->getUpdatedByName()}</p>
			<input type="hidden" id="updatedbyid" name="updatedbyid" value="{$post->getUpdatedById()}">
			<input type="hidden" id="updatedbyip" name="updatedbyip" value="{$post->getUpdatedByIP()}">
  		</div>
  		  		 		
  		<button type="submit" name="submit" value="savepost" class="btn btn-primary">Lagre</button>
  		<a href="index.php" class="btn btn-default">Avbryte</a>
						
	</form>
  </div>
</div>
</div>

{include file="footer.tpl"}