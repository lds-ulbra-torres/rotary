<br>
<br>
<br>
<div class="row container">
	<div class="col s12 center">
		<div class="card-panel">
			<h4 class="collorTextBtnMenu"><strong>Novo Item</strong></h4>
      <?php foreach ($dados as $item) { ?>
      <a href="<?php echo base_url('itens')."/".$id_category;?>" class="collorTextBtnMenu left btn-flat  colorMenu waves-effect waves-yellow"><strong>Voltar</strong></a>
      <br>
      <br>
      <div class="row">
        <form class="col s12" action="<?php echo base_url('alterar-item')."/".$item['item_id']."/".$id_category; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Nome" id="name" type="text" class="validate" name="name" required value="<?php echo $item['item_name']; ?>">
              <label for="name">Nome</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Título" id="title" type="text" class="validate" name="title" required value="<?php echo $item['item_title']; ?>" >
              <label for="name">Título</label>
            </div>
            <div class="input-field col s6">
            <input placeholder="Resumo" id="resumo" type="text" class="validate" name="resumo" required  value="<?php echo $item['item_abstract']; ?>">
              <label for="resumo">Resumo</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Citação" id="citacao" type="text" class="validate" name="citacao" required value="<?php echo $item['item_quote']; ?>">
              <label for="citacao">Citação</label>
            </div>
            <div class="input-field col s12">
              <textarea name="desc" id="desc" required style="height: 200px;" >
                <?php echo $item['item_description'];?>
              </textarea>
              <label for="desc" style="margin-top: -3px;">Descrição</label>
            </div>
          </div>
          <input type="hidden" value="<?php echo $id_category;?>" name="id_category" required></input>
          <b><input type="submit" class=" right btn-flat  colorMenu  waves-yellow"></input></b>
        </form>
      </div>
      <?php } ?>
    </div>
  </div>
</div>



