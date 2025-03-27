<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar Produto</h1>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?= $produto['nome'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $produto['categoria'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="validade" class="form-label">Validade</label>
                <input type="date" class="form-control" id="validade" name="validade" value="<?= $produto['validade'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?= $produto['quantidade'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="preco_unitario" class="form-label">Preço Unitário</label>
                <input type="number" step="0.01" class="form-control" id="preco_unitario" name="preco_unitario" value="<?= $produto['preco_unitario'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="preco_pacote" class="form-label">Preço Pacote</label>
                <input type="number" step="0.01" class="form-control" id="preco_pacote" name="preco_pacote" value="<?= $produto['preco_pacote'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
