<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $msg_if = '';
     if($_POST['periodo'] == 1) {
         $msg_if = 'Bom Dia ';
     } elseif ($_POST['periodo'] == 2) {
         $msg_if = 'Boa Tarde ';
     } elseif ($_POST['periodo'] == 3) {
         $msg_if = 'Boa Noite ';
     }
     $msg_if .= $_POST['nome'];

     $msg_switch = '';
     switch($_POST['periodo']) {
         case 1:
            $msg_switch = 'Bom Dia ';
         break;
         case 2:
            $msg_switch = 'Boa Tarde ';
         break;
         case 3:
            $msg_switch = 'Boa Noite ';
         break;
     }
     $msg_switch .= $_POST['nome'];

     $msg = ($_POST['periodo'] == 1) ? 'Bom' : 'Boa';
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Estruturas de Controle</title>
    </head>
    <body>
        <h1>Estruturas de Controle</h1>
        <form acrion="mensagem.php" method="POST">
            <label for="periodo">Período</label>
            <select name="periodo">
                <option value="1">Manhã</option>
                <option value="2">Tarde</option>
                <option value="3">Noite</option>
            </select>
            <label for="nome">Nome</label>
            <input type="text" name="nome" />
            <button type="submit">Enviar</button>
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <hr />
                <p><?= $msg_if ?></p>
                <p><?= $msg_switch ?></p>
                <p><?= $msg ?></p>
            <?php endif ?>
        </form>
    </body>
</html>