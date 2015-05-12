<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 22:02:11
         compiled from ".\templates\managecomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783955525bb2043db7-83399269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f5f42d95c0597e49f07099125dbdfd7ebafdd7' => 
    array (
      0 => '.\\templates\\managecomments.tpl',
      1 => 1431460927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783955525bb2043db7-83399269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55525bb2078e24_49150463',
  'variables' => 
  array (
    'blogposts' => 0,
    'modalRegisterTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55525bb2078e24_49150463')) {function content_55525bb2078e24_49150463($_smarty_tpl) {?><div class="table-responsive">
  <table class="table table-striped table-hover">
	<thead>
		<tr>
			<td>Status</td>
			<td>Kommentar</td>
			<td>Skrevet av</td>
			<td>Skrevet på</td>
			<td>Sist oppdatert av</td>
			<td>Sist oppdatert på</td>
			<td>Valg</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td>Status</td>
			<td>Kommentar</td>
			<td>Skrevet av</td>
			<td>Skrevet på</td>
			<td>Sist oppdatert av</td>
			<td>Sist oppdatert på</td>
			<td>Valg</td>
		</tr>
	</tfoot>
	<tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['blogposts']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['blogpost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogpost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blogpost']->key => $_smarty_tpl->tpl_vars['blogpost']->value) {
$_smarty_tpl->tpl_vars['blogpost']->_loop = true;
?>
				<tr>
					<td>Status</td>
					<td>Kommentar</td>
					<td>Skrevet av</td>
					<td>Skrevet på</td>
					<td>Sist oppdatert av</td>
					<td>Sist oppdatert på</td>
					<td>Valg</td>
				</tr>
			<?php } ?>
		<?php }?>
	<tbody>
  </table>
</div>

<!-- Modal -->
<form enctype="multipart/form-data" method="POST" >
	<div class="modal fade" id="modalRegistration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['modalRegisterTitle']->value)===null||$tmp==='' ? "Registration Form" : $tmp);?>
</h4>
		  </div>
		  <div class="modal-body">
			<div class="container-fluid">			
					<div class="form-group">
						<label for="fornavn">Brukerid:</label>
						<input type="text" class="form-control" id="userid" name="userid" placeholder="Tast inn ønsket brukerid, som skal brukes for å logge inn" maxlength="15" required>
					</div>
					<div class="form-group">
						<label for="etternavn">Passord:</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Tast inn ønsket passord, som skal brukes for å logge inn" required>
					</div>
					<div class="form-group">
						<label for="fornavn">Fornavn:</label>
						<input type="text" class="form-control" id="fornavn" name="fornavn" placeholder="Tast inn fornavn"  maxlength="50" required>
					</div>
					<div class="form-group">
						<label for="etternavn">Etternavn:</label>
						<input type="text" class="form-control" id="etternavn" name="etternavn" placeholder="Tast inn etternavn"  maxlength="50" required>
					</div>
					<div class="form-group">
						<label for="epost">E-post:</label>
						<input type="email" class="form-control" id="epost" name="epost" placeholder="Tast inn e-postadresse"  maxlength="50" required>
					</div> 		
					<div class="form-group">
						<label for="mobil">Telefon:</label>
						<input type="tel" class="form-control" id="telefon" name="telefon" placeholder="Tast inn telefonnummer"  maxlength="20">
					</div>				
					<div class="form-group">
						<label for="mobil">Mobil:</label>
						<input type="tel" class="form-control" id="mobil" name="mobil" placeholder="Tast inn mobilnummer"  maxlength="20">
					</div>
					<div class="form-group">
						<label for="www">Web:</label>
						<input type="url" class="form-control" id="www" name="www" placeholder="Tast inn webside"  maxlength="50">
					</div>							
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Avbryte</button>
			<button type="submit" name="submit" value="register" class="btn btn-primary">Lagre</button>
		  </div>
		</div>
	  </div>
	</div>
</form><?php }} ?>
