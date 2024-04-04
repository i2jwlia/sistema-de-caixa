<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
</head>
<body>
    <h2>Nota Fiscal</h2>
    <?php
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $nome_cliente = $_POST["nome_cliente"];
        $valor_total = $_POST["valor_total"];
        $valor_pago = $_POST["valor_pago"];
        
     
        $troco = $valor_pago - $valor_total;
        
        
        echo "<p>Nome do Cliente: $nome_cliente</p>";
        echo "<p>Quanto Gastou: R$ $valor_total</p>";
        echo "<p>Valor do Troco: R$ $troco</p>";
    }
    ?>
</body>
</html>