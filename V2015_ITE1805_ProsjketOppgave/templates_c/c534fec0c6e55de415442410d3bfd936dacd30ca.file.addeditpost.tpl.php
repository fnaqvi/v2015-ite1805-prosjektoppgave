<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 15:55:28
         compiled from ".\templates\addeditpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:227355537a85079c7c3-12941655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c534fec0c6e55de415442410d3bfd936dacd30ca' => 
    array (
      0 => '.\\templates\\addeditpost.tpl',
      1 => 1429663890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227355537a85079c7c3-12941655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5537a850809dc0_99073106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5537a850809dc0_99073106')) {function content_5537a850809dc0_99073106($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "Add/edit Blog Post" : $tmp);?>
</h3>
  </div>
  <div class="panel-body">
    <form enctype="multipart/form-data" method="POST" action="index.php" >
    	<div class="form-group">
    		<label for="title">Tittel:</label>
    		<input type="text" class="form-control" id="title" name="title" placeholder="Tast inn postens tittel." maxlength="100" required value="<?php echo $_smarty_tpl->tpl_vars['post']->value->getTitle();?>
">
			<input type="hidden" id="postid" name="postid" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->getId();?>
">
  		</div>
  		<div class="form-group">
    		<label for="posttext">Text:</label>
    		<textarea rows="6" class="form-control" id="posttext" name="posttext" placeholder="Tast inn postens innhold." required><?php echo $_smarty_tpl->tpl_vars['post']->value->getText();?>
</textarea>
  		</div>
  		<div class="form-group">
    		<label for="control-label">Forfatter:</label>
			<p class="form-control-static" ><?php echo $_smarty_tpl->tpl_vars['post']->value->getCreatedByName();?>
</p>
			<input type="hidden" id="createdbyid" name="createdbyid" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->getCreatedById();?>
">
			<input type="hidden" id="createdbyip" name="createdbyip" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->getCreatedByIP();?>
">
  		</div>
		<div class="form-group">
    		<label for="control-label">Sist oppdatert av:</label>
			<p class="form-control-static" ><?php echo $_smarty_tpl->tpl_vars['post']->value->getUpdatedByName();?>
</p>
			<input type="hidden" id="updatedbyid" name="updatedbyid" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->getUpdatedById();?>
">
			<input type="hidden" id="updatedbyip" name="updatedbyip" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->getUpdatedByIP();?>
">
  		</div>
  		  		 		
  		<button type="submit" name="submit" value="savepost" class="btn btn-primary">Lagre</button>
  		<a href="index.php" class="btn btn-default">Avbryte</a>
						
	</form>
  </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
