<br>
<br>
<br>
<div class="row container">
	<div class="col s12 center">
		<div class="card-panel">
			<h4 class="collorTextBtnMenu"><strong>Nova Categoria</strong></h4>
			<a href="<?php echo base_url();?>" class="collorTextBtnMenu left btn-flat  colorMenu waves-effect waves-yellow"><strong>Voltar</strong></a>
			<br>
			<br>
			<div class="row">
        <form class="col s12" action="<?php echo base_url('nova-categoria'); ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s12">
              <input placeholder="Nome" id="name" type="text" class="validate" name="name" required>
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s12">
              <input id="desc" type="text" class="validate" name="desc" required="">
              <label for="desc">Descrição</label>
            </div>
            <div class="input-field col s12">
            <input id="file" type="file" class="validate" name="userfile" size="1000"  style="margin-top: 15px;">
              <label for="file">Icon da Categoria</label>
            </div>
          </div>
          <b><input type="submit" class=" right btn-flat  colorMenu  waves-yellow"></input></b>
        </form>
      </div>
    </div>
  </div>
</div>



