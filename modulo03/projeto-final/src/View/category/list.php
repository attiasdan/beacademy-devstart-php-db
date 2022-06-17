<h1>Listar Categorias</h1>

<table class="table table-hover table-stripped">
    <div class="mb-3 text-end">
        <a href="/categorias/novo" class="btn btn-outline-primary btn-sm">Nova Categoria</a>
    </div>
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($category = $data->fetch(\PDO::FETCH_ASSOC)){

                extract($category);

                echo "<tr>
                        <td>{$id}</td>
                        <td>{$name}</td>
                        <td>{$description}</td>
                        <td>
                            <a href='/categorias/editar?id={$id}' class='btn btn-outline-success btn-sm'>Editar</a>
                            <a href='/categorias/excluir?id={$id}' class='btn btn-outline-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>";

            }
        ?>
    </tbody>
</table>