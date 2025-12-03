<?php
$id = intval($_GET['id']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Agendar Serviço</title>
</head>
<body>

<h2>Agendar Serviço</h2>

<form action="servicoAgendarSalvar.php" method="POST">
    <input type="hidden" name="servico_id" value="<?= $id ?>">

    Data: <br>
    <input type="date" name="data" required><br><br>

    Hora: <br>
    <input type="time" name="hora" required><br><br>

    Observações: <br>
    <textarea name="observacoes"></textarea><br><br>

    <button type="submit">Agendar</button>
</form>

</body>
</html>