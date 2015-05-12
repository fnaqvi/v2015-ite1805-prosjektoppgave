{include file="header.tpl"}

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
    <div role="tabpanel" class="tab-pane fade in active" id="comments">{include file="managecomments.tpl"}</div>
    <div role="tabpanel" class="tab-pane fade" id="settings"></div>
  </div>

</div>

<div class="container-fluid">
	
	
</div>

{include file="footer.tpl"}