<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 15:37:41
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:275325551aaefae8d84-49125038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a505d744ea3b3fe60a84914387a1433f6439c92' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1431437858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275325551aaefae8d84-49125038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5551aaefcbf9f1_89234116',
  'variables' => 
  array (
    'displayAlert' => 0,
    'alertCssClass' => 0,
    'alertMessage' => 0,
    'blogposts' => 0,
    'blogpost' => 0,
    'user' => 0,
    'isadmin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551aaefcbf9f1_89234116')) {function content_5551aaefcbf9f1_89234116($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\Users\\SyedFayyaz\\git\\v2015.ite1805.prosjketoppgave\\V2015_ITE1805_ProsjketOppgave\\libs\\plugins\\modifier.date_format.php';
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
		<?php if (isset($_smarty_tpl->tpl_vars['blogposts']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['blogpost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogpost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blogpost']->key => $_smarty_tpl->tpl_vars['blogpost']->value) {
$_smarty_tpl->tpl_vars['blogpost']->_loop = true;
?>
				<div id="panel_<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
" class="panel panel-primary margin-left-sm margin-right-sm">
				  <div class="panel-heading">
					<div class="row">
						<div class="col-xs-8">
							<h3 class="panel-title">
								<a href="post.php?postid=<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getTitle();?>
</a>
								<span class="badge"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getReadCounter();?>
</span>								
							</h3>
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
					<div class="blog-post-div-shortened margin-bottom-xs">
						<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getText();?>

					</div>
					<div class="pull-right">
						<a href="post.php?postid=<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
">Les hele innlegg</a>
					</div>
				  </div>
				  <div class="panel-footer">
					<div class="row">
						<div class="col-xs-6">
								
						</div>
						<div class="col-xs-6 text-right">
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
				  </div>
				 </div>				
			<?php } ?>
		<?php }?>
	</div>
	<div class="col-sm-2 hidden-xs">
		<?php if (isset($_smarty_tpl->tpl_vars['blogposts']->value)) {?>
			<ul class="fa-ul">
				<?php  $_smarty_tpl->tpl_vars['blogpost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogpost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blogpost']->key => $_smarty_tpl->tpl_vars['blogpost']->value) {
$_smarty_tpl->tpl_vars['blogpost']->_loop = true;
?>
					<li class="margin-top-xs margin-bottom-xs">
						<a href="#panel_<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getId();?>
">
							<i class="fa-li fa fa-file-text fa-fw"></i>
							<span><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getTitle();?>
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
