<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entrada de Produtos</title>
</head>
<body>
    <h1> Adicionar Produtos </h1>
        <form action="adm.php" method="POST">
        <p>
            <input type="hidden" name="operacao" value="incluir">
        </p>
            <p>
                <strong>Produto</strong><br>
                <input type="text" name="produto">
            </p>
        <p>
                <strong>Valor</strong><br>
                <input type="number" name="valor">
            </p>
            <p>
                <strong>Quantidade</strong><br>
                <input type="number" name="quantidade">
            </p>
        <p>
            <input type="submit" value="Enviar" name="enviar">
        </p>
    </form>
    <h1>Retirar Produtos</h1>
    <form action="adm.php" method="POST">
        <p>
            <input type="hidden" name="operacao" value="excluir">
        </p>
        <p>
            <strong>Produto</strong><br>
            <input type="text" name="produto">

        </p>
        <p>
            <strong>Valor</strong><br>
            <input type="number" name="valor">
        </p>
        <p>
            <strong>Quantidade</strong><br>
            <input type="number" name="quantidade">
        </p>
        <p>
            <input type="submit" value="Enviar" name="enviar"
        </p>
    </form>
    <h1>Mostrar Produtos</h1>
    <form action="adm.php" method="POST">
        <p>
            <input type="hidden" name="produto" value="mostrar">

            <input type="submit" value="Mostrar Produtos" name="enviar>"
        </p>
    </form>
</body>
</html>