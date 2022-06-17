<div class="container">
    <h1>Editar Categoria</h1>

    <form action="" method="post" class="container-form">

        <div class="mb-4">

            <input value="<?php echo $data['name'];?>" type="text" name="name" class="form-control mb-3" placeholder="Nome da categoria" require>

            <textarea name="description" class="form-control mb-3" style="resize: none;" placeholder="Descrição da categoria" require><?php echo $data['description'];?></textarea>

        </div>

        <button class="btn btn-outline-dark btn-sm">Salvar</button>

    </form>

</div>