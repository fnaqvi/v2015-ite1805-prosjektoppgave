<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 15:55:03
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257985537a414aa1702-61230553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b6d4c754fbdd4cdbcddc1eaa150ec525125ba8' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1429710899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257985537a414aa1702-61230553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537a414b0ed33_97264181',
  'variables' => 
  array (
    'displayAlert' => 0,
    'alertCssClass' => 0,
    'alertMessage' => 0,
    'blogposts' => 0,
    'blogpost' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537a414b0ed33_97264181')) {function content_5537a414b0ed33_97264181($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
				<div class="panel panel-default margin-left-sm margin-right-xs">
				  <div class="panel-heading">
					<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getTitle();?>
</h3>
				  </div>
				  <div class="panel-body">
					<?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getText();?>

				  </div>
				  <div class="panel-footer">
				  </div>
				 </div>				
			<?php } ?>
		<?php }?>
	</div>
	<div class="col-sm-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['blogposts']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['blogpost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogpost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blogpost']->key => $_smarty_tpl->tpl_vars['blogpost']->value) {
$_smarty_tpl->tpl_vars['blogpost']->_loop = true;
?>
				<span><?php echo $_smarty_tpl->tpl_vars['blogpost']->value->getTitle();?>
</span>				  
			<?php } ?>
		<?php }?>
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("registeruser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
