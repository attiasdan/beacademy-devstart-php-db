<div class="container">
    <h1>Editar Produto</h1>
    <form action="" method="post" class="container-form">
        <input value="<?php echo $data['name'];?>" type="text" id="name" name="name" class="form-control mb-3" placeholder="Nome do produto">

        <textarea name="description" class="form-control mb-3" style="resize: none;" placeholder="Descrição do produto">
            <?php echo $data['description'];?>
        </textarea>

        <input value="<?php echo $data['value'];?>" type="text" id="value" name="value" class="form-control mb-3" placeholder="Preço">

        <input value="<?php echo $data['quantity'];?>" type="text" id="quantity" name="quantity" class="form-control mb-3" placeholder="Quantidade">

        <input value="<?php echo $data['photo'];?>" type="text" id="photo" name="photo" class="form-control mb-3" placeholder="URL da Foto">

        <button class="btn btn-outline-dark btn-sm">Salvar</button>
    </form>
</div>