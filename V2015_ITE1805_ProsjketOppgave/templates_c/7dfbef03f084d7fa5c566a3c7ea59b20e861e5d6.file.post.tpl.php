<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 16:52:30
         compiled from ".\templates\post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138915551b383b50b95-12510406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dfbef03f084d7fa5c566a3c7ea59b20e861e5d6' => 
    array (
      0 => '.\\templates\\post.tpl',
      1 => 1431442348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138915551b383b50b95-12510406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5551b383c4a2a8_61000078',
  'variables' => 
  array (
    'displayAlert' => 0,
    'alertCssClass' => 0,
    'alertMessage' => 0,
    'blogpost' => 0,
    'user' => 0,
    'isadmin' => 0,
    'postcomments' => 0,
    'postcomment' => 0,
    'newcomment' => 0,
    'blogposts' => 0,
    'eachblogpost' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551b383c4a2a8_61000078')) {function content_5551b383c4a2a8_61000078($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\Users\\SyedFayyaz\\git\\v2015.ite1805.prosjketoppgave\\V2015_ITE1805_ProsjketOppgave\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['displayAlert']->value)&&$_smarty_tpl->tpl_vars['displayAlert']->value==true) {?> 	
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alertCssClass']->value;?>
 margin-sm fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="alert-message"><?php echo $_smarty_tpl->tpl_vars['alertMessage']->value;?>
</div>
</div>
<?php }?>

<div class="row">
	<div class="col-sm-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['blogpost']->value)) {?>
			<div id="panel_<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
" class="panel panel-primary margin-left-sm margin-right-sm">
			  <div class="panel-heading">
				<div class="row">
					<div class="col-xs-8">
						<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getTitle();?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getReadCounter();?>
</span></h3>
					</div>
					<div class="col-xs-4 text-right">
						<i class="fa fa-user fa-fw" title="<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getCreatedByName();?>
" data-toggle="tooltip" data-placement="body"></i>
							<span class="margin-right-xs hidden-xs1"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getCreatedByName();?>
</span>
							<i class="fa fa-calendar fa-fw" title='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blogpost']->value->getCreatedOn(),"%d.%m.%Y %H:%M");?>
' data-toggle="tooltip" data-placement="body"></i>
							<span class="margin-right-sm"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blogpost']->value->getCreatedOn(),"%d.%m.%Y");?>
</span>
					</div>
				</div>
			  </div>
			  <div class="panel-body">
					<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getText();?>
				
			  </div>
			  <div class="panel-footer text-right">
				<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getId()>0&&isset($_smarty_tpl->tpl_vars['isadmin']->value)&&$_smarty_tpl->tpl_vars['isadmin']->value==true) {?>	
							<a href="addeditpost.php?postid=<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
" class="link-no-underline" title="Rediger" data-toggle="tooltip" data-placement="body">
								<i class="fa fa-pencil fa-lg fa-fw"></i>
								<span class="hidden-xs">Rediger</span>
							</a>
							<a href="addeditpost.php?delid=<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
" class="text-danger link-no-underline" title="Slett" data-toggle="tooltip" data-placement="body">
								<i class="fa fa-times fa-lg fa-fw"></i>
								<span class="hidden-xs">Slett</span>
							</a>
						<?php }?>
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
				<?php if (isset($_smarty_tpl->tpl_vars['postcomments']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['postcomment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['postcomment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postcomments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['postcomment']->key => $_smarty_tpl->tpl_vars['postcomment']->value) {
$_smarty_tpl->tpl_vars['postcomment']->_loop = true;
?>
						<div id="panelComment_<?php echo $_smarty_tpl->tpl_vars['postcomment']->value->getId();?>
" class="panel panel-default">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-8">
										<h3 class="panel-title text-muted">
											<i class="fa fa-user fa-fw text-muted" title="<?php echo $_smarty_tpl->tpl_vars['postcomment']->value->getCreatedByName();?>
" data-toggle="tooltip" data-placement="body"></i>
											<span class="text-muted"><strong><?php echo $_smarty_tpl->tpl_vars['postcomment']->value->getCreatedByName();?>
</strong> sier:</span>
										</h3>
									</div>
									<div class="col-xs-4 text-right">
										<i class="fa fa-calendar fa-fw text-muted" title='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['postcomment']->value->getCreatedOn(),"%d.%m.%Y %H:%M");?>
' data-toggle="tooltip" data-placement="body"></i>
										<span class="text-muted margin-right-sm"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['postcomment']->value->getCreatedOn(),"%d.%m.%Y");?>
</span>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<?php echo $_smarty_tpl->tpl_vars['postcomment']->value->getCommentText();?>
							
							</div>	
						</div>
					<?php } ?>
				<?php } else { ?>
					<div class="col-xs-12" role="alert">
						<h4>Ingen kommentarer ennå ...</h4>
					</div>
				<?php }?>
			</div>			
			<hr/>
			<div id="newcomment" class="comment-form-div col-xs-12 margin-top-md">
				<h3 class="margin-top-xs">Ditt innspill</h3>
				<?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->getId()>0) {?>
					<form class="" enctype="multipart/form-data" method="POST">
						<div class="form-group">
							<!--<label for="commenttext"><h4>Din kommentar:</h4></label>-->
							<textarea rows="6" class="form-control" id="commenttext" name="commenttext" placeholder="Tast inn din kommentar." required></textarea>
							<input type="hidden" id="postid" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
">
							<input type="hidden" id="createdbyid" name="createdbyid" value="<?php echo $_smarty_tpl->tpl_vars['newcomment']->value->getCreatedById();?>
">
							<input type="hidden" id="createdbyip" name="createdbyip" value="<?php echo $_smarty_tpl->tpl_vars['newcomment']->value->getCreatedByIP();?>
">
							<input type="hidden" id="updatedbyid" name="updatedbyid" value="<?php echo $_smarty_tpl->tpl_vars['newcomment']->value->getUpdatedById();?>
">
							<input type="hidden" id="updatedbyip" name="updatedbyip" value="<?php echo $_smarty_tpl->tpl_vars['newcomment']->value->getUpdatedByIP();?>
">
						</div>
						<button type="submit" name="submit" value="savecomment" class="btn btn-primary">Lagre</button>					
					</form>			
				<?php } else { ?>
					<h5><a href="javascript:void(0);" class="" data-toggle="modal" data-target="#modalLogin">Logg inn</a> eller <a href="javascript:void(0);" class="" data-toggle="modal" data-target="#modalRegistration">Registrer deg</a> for å legge igjen en kommentar</h5>
				<?php }?>
			</div>
		<?php }?>
	</div>
	<div class="col-sm-2 hidden-xs">
		<?php if (isset($_smarty_tpl->tpl_vars['blogposts']->value)) {?>
			<ul class="fa-ul">
				<?php  $_smarty_tpl->tpl_vars['eachblogpost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eachblogpost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eachblogpost']->key => $_smarty_tpl->tpl_vars['eachblogpost']->value) {
$_smarty_tpl->tpl_vars['eachblogpost']->_loop = true;
?>
					<li class="margin-top-xs margin-bottom-xs">
						<a href="#panel_<?php echo $_smarty_tpl->tpl_vars['eachblogpost']->value->getId();?>
">
							<i class="fa-li fa fa-file-text fa-fw"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['eachblogpost']->value->getTitle();?>
</span>				  
						</a>
					</li>
				<?php } ?>
			</ul>
		<?php }?>
	</div>	
</div>





<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("registeruser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
