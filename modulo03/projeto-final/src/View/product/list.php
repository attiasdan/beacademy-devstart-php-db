<h1>Listar Produtos</h1>

<div class="mb-3 text-end">
    <a href="/produtos/novo" class="btn btn-outline-primary btn-sm">Novo Produto</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>IMAGEM</th>
            <th>PREÇO</th>
            <th>QUANTIDADE</th>
            <th>DATA DE CADASTRO</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($product = $data->fetch(\PDO::FETCH_ASSOC)) {
                extract($product);
                echo "
                    <tr>
                        <td>{$id}</td>
                        <td>{$name}</td>
                        <td>{$description}</td>
                        <td><img src='{$photo}' width='100px'></td>
                        <td>{$value}</td>
                        <td>{$quantity}</td>
                        <td>{$created_at}</td>
                        <td>
                            <a href='/produtos/editar?id={$id}' class='btn btn-outline-success btn-sm'>Editar</a>

                            <a href='/produtos/excluir?id={$id}' class='btn btn-outline-danger btn-sm'>Excluir</a>
                        </td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>