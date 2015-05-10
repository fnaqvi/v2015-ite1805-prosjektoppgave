<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-24 02:18:32
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307785532bc420c0431-90900005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '794b589f087f06dfa1a76c86f8085f27c3bc4183' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1429834707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307785532bc420c0431-90900005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5532bc42133251_21088728',
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
<?php if ($_valid && !is_callable('content_5532bc42133251_21088728')) {function content_5532bc42133251_21088728($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\Users\\SyedFayyaz\\workspace\\V2015_ITE1805_Oblig3_Blogg\\libs\\plugins\\modifier.date_format.php';
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
" class="panel panel-default margin-left-sm margin-right-sm">
				  <div class="panel-heading">
					<div class="row">
						<div class="col-xs-8">
							<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getTitle();?>
</h3>
						</div>
						<div class="col-xs-4 text-right">
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
				  <div class="panel-body">
					<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getText();?>

				  </div>
				  <div class="panel-footer text-right">
					<i class="fa fa-user fa-lg fa-fw" title="<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getCreatedByName();?>
" data-toggle="tooltip" data-placement="body"></i>
					<span class="margin-right-xs hidden-xs1"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getCreatedByName();?>
</span>
					<i class="fa fa-calendar fa-lg fa-fw" title='<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blogpost']->value->getCreatedOn(),"%d.%m.%Y %H:%M");?>
' data-toggle="tooltip" data-placement="body"></i>
					<span class="margin-right-sm"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['blogpost']->value->getCreatedOn(),"%d.%m.%Y %H:%M");?>
</span>					
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
