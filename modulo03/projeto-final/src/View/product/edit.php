<div class="container">

    <h1>Editar Produto</h1>

    <form action="" method="post" class="container-form">
        <select name="categoryId" class="form-control mb-3" required>
            <option value="" selected>Selecione a Categoria</option>
            <?php

                extract($data);

                while($categories = $category->fetch(\PDO::FETCH_ASSOC)){

                    extract($categories);

                    echo "<option value='{$categories['id']}'>{$categories['name']}</option>";
                }

            ?>
        </select>
        <input value="<?php echo $product['name'];?>" type="text" id="name" name="name" class="form-control mb-3" placeholder="Nome do produto">

        <textarea name="description" class="form-control mb-3" style="resize: none;" placeholder="Descrição do produto">
            <?php echo $product['description'];?>
        </textarea>

        <input value="<?php echo $product['value'];?>" type="text" id="value" name="value" class="form-control mb-3" placeholder="Preço">

        <input value="<?php echo $product['quantity'];?>" type="text" id="quantity" name="quantity" class="form-control mb-3" placeholder="Quantidade">

        <input value="<?php echo $product['photo'];?>" type="text" id="photo" name="photo" class="form-control mb-3" placeholder="URL da Foto">

        <button class="btn btn-outline-dark btn-sm">Salvar</button>
    </form>
</div>