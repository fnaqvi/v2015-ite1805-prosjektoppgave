<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 09:25:35
         compiled from ".\templates\registeruser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4755551aaefdf0580-53073494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5e34e3ca11d069529c7b70455090daeee676ab' => 
    array (
      0 => '.\\templates\\registeruser.tpl',
      1 => 1430855084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4755551aaefdf0580-53073494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modalRegisterTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5551aaefdffdc7_75304863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551aaefdffdc7_75304863')) {function content_5551aaefdffdc7_75304863($_smarty_tpl) {?><!-- Modal -->
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
