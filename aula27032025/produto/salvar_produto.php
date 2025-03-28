<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codProduto =$_POST["codProduto"];
    $nomeProduto =$_POST["nomeProduto"];
    $categoria =$_POST["categoria"];
    $validade =$_POST["validade"];
    $quantidade =$_POST["quantidade"];
    $precoUnitario =$_POST["precoUnitario"];
    $precoPacote =$_POST["precoPacote"];
    

    $imagemProduto = $_FILES["imagemProduto"]["name"];
    $imagemDestino = "imagens/". basename($imagemProduto);
    move_uploaded_file($_FILES["imagemProduto"]["tmp_name"], $imagemDestino);

    $sql = "INSERT INTO produtos (Cod, nome, categoria, validade, quantidade, preco_unitario, preco_pacote, imagem)
            Values('$codProduto', '$nomeProduto', '$categoria', '$validade', '$quantidade', '$precoUnitario', '$precoPacote', '$imagemProduto')";

    if ($conn->query($sql) == true) {
        echo "Produto cadastrado com sucesso!";}
    else{
        echo "Erro: ". $sql . "<br />" . $conn->error;
    }

    $conn->close();
}

?>
