<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 14:53:44
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1420553799d8437cf4-77760039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4bd8c952ff08243ad905ad3b005f6ecb761c2a' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1429578849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420553799d8437cf4-77760039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayAlert' => 0,
    'alertCssClass' => 0,
    'alertMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553799d85b2b73_27112243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553799d85b2b73_27112243')) {function content_553799d85b2b73_27112243($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['displayAlert']->value)&&$_smarty_tpl->tpl_vars['displayAlert']->value==true) {?> 	
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alertCssClass']->value;?>
 margin-sm fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <div class="alert-message"><?php echo $_smarty_tpl->tpl_vars['alertMessage']->value;?>
</div>
</div>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("registeruser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
