<br>
<br>
<br>
<div class="row container">
	<div class="col s12 center">
		<div class="card-panel">
			<h4 class="collorTextBtnMenu"><strong>Novo Item</strong></h4>
			<a href="<?php echo base_url('itens')."/".$id_category;?>" class="collorTextBtnMenu left btn-flat  colorMenu waves-effect waves-yellow"><strong>Voltar</strong></a>
			<br>
			<br>
			<div class="row">
        <form class="col s12" action="<?php echo base_url('novo-item')."/".$id_category; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Nome" id="name" type="text" class="validate" name="name" required>
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Título" id="title" type="text" class="validate" name="title" required>
              <label for="title">Título</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Resumo" id="resumo" type="text" class="validate" name="resumo" required>
              <label for="resumo">Resumo</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Citação" id="citacao" type="text" class="validate" name="citacao" required>
              <label for="citacao">Citação</label>
            </div>
            <div class="input-field col s12">
              <textarea name="desc" id="desc" required style="height: 200px;">

              </textarea>
              <label for="desc" style="margin-top: -3px;">Descrição</label>
            </div>
            <div class="input-field col s12">
              <input id="file" type="file" class="validate" name="userfile" size="1000"  style="margin-top: 15px;">
              <label for="file">Foto do Item</label>
            </div>
          </div>
          <input type="hidden" value="<?php echo $id_category;?>" name="id_category" required></input>
          <b><input type="submit" class=" right btn-flat  colorMenu  waves-yellow"></input></b>
        </form>
      </div>
    </div>
  </div>
</div>



