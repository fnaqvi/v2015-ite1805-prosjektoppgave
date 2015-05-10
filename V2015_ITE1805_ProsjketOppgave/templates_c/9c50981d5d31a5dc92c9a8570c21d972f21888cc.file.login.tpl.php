<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 02:01:24
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145505535986f3643d4-05494972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c50981d5d31a5dc92c9a8570c21d972f21888cc' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1429660821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145505535986f3643d4-05494972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5535986f369990_90007127',
  'variables' => 
  array (
    'modalLoginTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5535986f369990_90007127')) {function content_5535986f369990_90007127($_smarty_tpl) {?><!-- Modal -->
<form enctype="multipart/form-data" method="POST" >
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['modalLoginTitle']->value)===null||$tmp==='' ? "Login Form" : $tmp);?>
</h4>
		  </div>
		  <div class="modal-body">
			<div class="container-fluid">			
					<div class="form-group">
						<label for="fornavn">Brukerid:</label>
						<input type="text" class="form-control" id="userid" name="userid" placeholder="Tast inn din brukerid" maxlength="15" required>
					</div>
					<div class="form-group">
						<label for="etternavn">Passord:</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Tast inn ditt passord" required>
					</div>					
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Avbryte</button>
			<button type="submit" name="submit" value="login" class="btn btn-primary">Logg inn</button>
		  </div>
		</div>
	  </div>
	</div>
</form><?php }} ?>
