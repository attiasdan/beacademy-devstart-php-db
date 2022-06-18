<h1>Adicionar Produtos</h1>

<form action="" method="post" class="container-form">
    <select name="category" id="category" class="form-select mb-3">
        <option selected> -- Selecione uma categoria --</option>

        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC))
            {
                extract($category);

                echo "<option value='{$id}'>{$name}</option>";
            }
        ?>
    </select>

    <input type="text" id="name" name="name" class="form-control mb-3" placeholder="Nome do produto">

    <textarea name="description" class="form-control mb-3" style="resize: none;" placeholder="Descrição do produto"></textarea>

    <input type="text" id="value" name="value" class="form-control mb-3" placeholder="Preço">

    <input type="text" id="quantity" name="quantity" class="form-control mb-3" placeholder="Quantidade">

    <input type="text" id="photo" name="photo" class="form-control mb-3" placeholder="URL da Foto">

    <button class="btn btn-outline-dark btn-sm">Adicionar</button>

</form>