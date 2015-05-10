<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 22:19:16
         compiled from ".\templates\studentregister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166095532bc448bbff8-48601414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5163553ba613a835ccb58c23d61c476390a6adb0' => 
    array (
      0 => '.\\templates\\studentregister.tpl',
      1 => 1427240979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166095532bc448bbff8-48601414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayNewStudentMessage' => 0,
    'pageTitle' => 0,
    'students' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5532bc449d1308_55624165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5532bc449d1308_55624165')) {function content_5532bc449d1308_55624165($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container-fluid">
 <?php if (isset($_smarty_tpl->tpl_vars['displayNewStudentMessage']->value)&&$_smarty_tpl->tpl_vars['displayNewStudentMessage']->value==true) {?> 	
 	 <div class="alert alert-success alert-dismissible" role="alert">Student info has been saved successfully.</div> 	
 <?php }?>
 <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageTitle']->value)===null||$tmp==='' ? "Students" : $tmp);?>
</h3>
  </div>
  <!-- Panel body -->
  <table class="table table-bordered table-striped table-hover">
  	<thead>
  		<tr>
  			<th>Navn</th>
  			<th>Klasse</th>
  			<th>Mobil</th>
  			<th>Web</th>
  			<th>E-post</th>
  		</tr>
  	</thead>
  	<tbody>
  	<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['student']->value->hentNavn();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['student']->value->hentKlasse();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['student']->value->hentMobil();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['student']->value->hentWeb();?>
</td><td><?php echo $_smarty_tpl->tpl_vars['student']->value->hentEpost();?>
</td></tr>
	<?php } ?>  		
  	</tbody>
  </table>
 </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
