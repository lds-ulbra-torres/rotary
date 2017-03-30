<br>
<br>
<br>
<div class="row container">
	<div class="col s12 center">
		<div class="card-panel">
			<h4 class="collorTextBtnMenu"><strong>Homenageados</strong></h4>
			<a href="<?php echo base_url('novo-item')."/".$id_category?>" class="collorTextBtnMenu left btn-flat  colorMenu waves-effect waves-yellow"><strong>Novo Item</strong></a>
			<br>
			<br>
			<table class="bordered highlight centered">
				<thead>
					<tr>
						<th data-field="word" class="collorTextBtnMenu"><strong>Foto</strong></th>
						<th data-field="name" class="collorTextBtnMenu"><strong>Nome</strong></th>
						<th data-field="word" class="collorTextBtnMenu"><strong>Ações</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php   foreach ($itens as $item) { ?> 						
					<tr>
					<td><img src="<?php echo base_url('imgs')."/".$item['item_image_path']; ?>" class="responsive-img" style="width: 50px;"> </td>
						<td><?php echo $item['item_name']; ?></td>
						<td><a href="<?php echo base_url('alterar-item')."/".$item['item_id']."/".$id_category;?>" class="collorTextBtnMenu collorTextBtnMenuHover"><strong>Alterar</strong></a>
							<a href="<?php echo base_url('excluir-item')."/".$item['item_id'];?>/<?php echo $item['item_image_path']."/".$id_category;?>" class="collorTextBtnMenu collorTextBtnMenuHover" style="margin-left: 20px;"><strong>Excluir</strong></a></td>
						</tr>
						<?php }  ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

