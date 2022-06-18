<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ProductController extends AbstractController
{
    public function listAction(): void
    {
        $con = Connection::getConnection();

        $result = $con->prepare('SELECT * FROM tb_product');
        $result->execute();

        parent::render('product/list', $result);
    }
    public function addAction(): void
    {
        $con = Connection::getConnection();

        if ($_POST) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $value = $_POST['value'];
            $photo = $_POST['photo'];
            $quantity = $_POST['quantity'];
            $categoryId = $_POST['category'];
            $createdAt = date('Y-m-d H:i:s');

            $query = "INSERT INTO tb_product
                    (name, description, value, photo, quantity, category_id, created_at)
                VALUES
                    ('{$name}', '{$description}', '{$value}', '{$photo}', '{$quantity}', '{$categoryId}', '{$createdAt}')";

            $result = $con->prepare($query);
            $result->execute();

            echo 'Pronto, produto adicionado';
        }

        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        parent::render('product/add', $result);
    }
    public function removeAction(): void
    {
        $con = Connection::getConnection();

        $id = $_GET['id'];

        $query = "DELETE FROM tb_product WHERE id='{$id}'";

        $result = $con->prepare($query);
        $result->execute();

        parent::renderMessage('Pronto, produto excluído');
    }
    public function updateAction(): void
    {
        $id = $_GET['id'];

        $con = Connection::getConnection();

        if ($_POST)
        {
            $category = $_POST['categoryId'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $value = $_POST['value'];
            $photo = $_POST['photo'];
            $quantity = $_POST['quantity'];
            $createdAt = date("Y-m-d H:m:s");
            
            $queryUpdate = "
                UPDATE tb_product SET 
                name='{$name}',
                description='{$description}',
                value='{$value}',
                photo='{$photo}',
                quantity='{$quantity}',
                category_id='{$category}',
                created_at='{$createdAt}' 
                WHERE id='{$id}'
            ";
            
            $resultUpdate = $con->prepare($queryUpdate);
            $resultUpdate->execute();

            parent::renderMessage('Pronto, produto atualizado.');
        }
        $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
        $product->execute();
        // $data = $product->fetch(\PDO::FETCH_ASSOC);

        $categories = $con->prepare('SELECT * FROM tb_category');
        $categories->execute();

        parent::render('product/edit', [
                'product' => $product->fetch(\PDO::FETCH_ASSOC),
                'category' => $categories
        ]);
    }
}