<br>
<br>
<br>
<div class="row container">
    <div class="col s12 center">
        <div class="card-panel">
            <h4 class="collorTextBtnMenu"><strong>Categorias</strong></h4>
            <a href="<?php echo base_url('nova-categoria'); ?>" class="collorTextBtnMenu left btn-flat  colorMenu waves-effect waves-yellow"><strong>Nova Categoria</strong></a>
            <br>
            <br>
            <table class="bordered highlight centered">
                <thead>
                    <tr>
                        <th data-field="id" class="collorTextBtnMenu"><strong>ID</strong></th>
                        <th data-field="id" class="collorTextBtnMenu"><strong>Foto</strong></th>
                        <th data-field="name" class="collorTextBtnMenu"><strong>Categoria</strong></th>
                        <th data-field="action" class="collorTextBtnMenu"><strong>Ação</strong></th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach ($categorys as $category) { ?>
                    <tr>
                        <td><?php echo $category['category_id']; ?> </td>
                        <td><img src="<?php echo base_url('imgs')."/".$category['category_icon_path']; ?>" class="responsive-img" style="width: 50px;"> </td>
                        <td><?php echo $category['category_name']; ?></td>
                        <td><a href="alterar-categoria/<?php echo $category['category_id']; ?>" class="collorTextBtnMenu buttonCategoria"><strong>Alterar Categoria</strong></a>
                            <a href="excluir-categoria/<?php echo $category['category_id'];?>/<?php echo $category['category_icon_path'];?>" class="collorTextBtnMenu buttonCategoria"><strong>Excluir Categoria</strong></a>
                            <a href="itens/<?php echo $category['category_id']; ?>" class="collorTextBtnMenu buttonCategoria"><strong>Itens</strong></a>
                            </td>
                    </tr>
                    <tr>
                <?php } ?>
                </tbody>
             </table>
        </div>
    </div>
</div>

