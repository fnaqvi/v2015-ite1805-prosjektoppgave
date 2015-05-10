<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 22:19:18
         compiled from ".\templates\addstudent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240705532bc465b4a26-07997868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f6cf292c6d8f3e6e9840feffaf5f281e5876730' => 
    array (
      0 => '.\\templates\\addstudent.tpl',
      1 => 1427242968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240705532bc465b4a26-07997868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'classOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5532bc46640db1_67958266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5532bc46640db1_67958266')) {function content_5532bc46640db1_67958266($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "Registration Form" : $tmp);?>
</h3>
  </div>
  <div class="panel-body">
    <form enctype="multipart/form-data" method="POST" action="StudentRegister.php" >
    	<div class="form-group">
    		<label for="fornavn">Fornavn:</label>
    		<input type="text" class="form-control" id="fornavn" name="fornavn" placeholder="Enter first name.">
  		</div>
  		<div class="form-group">
    		<label for="etternavn">Etternavn:</label>
    		<input type="text" class="form-control" id="etternavn" name="etternavn" placeholder="Enter last name.">
  		</div>
  		<div class="form-group">
    		<label for="klasse">Klasse:</label>
    		<!--<select name=\"klasse\">" . $options . "</select><br/>-->
    		<select type="text" class="form-control" id="klasse" name="klasse" placeholder="Enter class.">
    		<?php echo $_smarty_tpl->tpl_vars['classOptions']->value;?>

    		</select>
  		</div>
  		<div class="form-group">
    		<label for="mobil">Mobil:</label>
    		<input type="text" class="form-control" id="mobil" name="mobil" placeholder="Enter cell. phone.">
  		</div>
  		<div class="form-group">
    		<label for="www">Web:</label>
    		<input type="text" class="form-control" id="www" name="www" placeholder="Enter website address.">
  		</div>  		
  		<div class="form-group">
    		<label for="epost">E-post:</label>
    		<input type="email" class="form-control" id="epost" name="epost" placeholder="Enter email address.">
  		</div> 
  		<div class="form-group">
    		<label for="studentimage">Bilde:</label>
    		<input type="file" class="form-control" id="studentimage" name="studentimage" placeholder="Upload an image.">
    		<p class="help-block">Bilde-fil kan vaere opp til 1 MB (1024 KB).</p>
    		<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1024">
  		</div>
  		 		
  		<button type="submit" name="submit" class="btn btn-primary">Lagre</button>
  		<a href="index.php" class="btn btn-default">Avbryte</a>
						
	</form>
  </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
