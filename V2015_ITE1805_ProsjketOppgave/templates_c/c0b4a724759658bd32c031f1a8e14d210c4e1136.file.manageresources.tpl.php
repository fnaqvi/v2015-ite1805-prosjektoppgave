<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 22:04:11
         compiled from ".\templates\manageresources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:671355524d18105d16-14066712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b4a724759658bd32c031f1a8e14d210c4e1136' => 
    array (
      0 => '.\\templates\\manageresources.tpl',
      1 => 1431461048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '671355524d18105d16-14066712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55524d18224281_53161198',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55524d18224281_53161198')) {function content_55524d18224281_53161198($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="disabled" disabled><a href="javascript:void(0);" href1="#users" aria-controls="users" role="tab" data-toggle="tab">Brukere</a></li>
    <li role="presentation" class="disabled" disabled><a href="javascript:void(0);" href1="#posts" aria-controls="posts" role="tab" data-toggle="tab">Innleggene</a></li>
    <li role="presentation" class="active"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">Kommentarer</a></li>
    <li role="presentation" class="disabled" disabled><a href="javascript:void(0);" href1="#settings" aria-controls="settings" role="tab" data-toggle="tab">Instillinger</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade" id="users"></div>
    <div role="tabpanel" class="tab-pane fade" id="posts"></div>
    <div role="tabpanel" class="tab-pane fade in active" id="comments"><?php echo $_smarty_tpl->getSubTemplate ("managecomments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
    <div role="tabpanel" class="tab-pane fade" id="settings"></div>
  </div>

</div>

<div class="container-fluid">
	
	
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
