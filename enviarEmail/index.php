<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mail.php" method="POST" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Formulario de envio</td>
            </tr>
            <tr>
                <td>nome</td>
                <td><input type="text" name="nome" id=""></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Arquivo pdf</td>
                <td><input type="file" name="arquivo" id=""></td>
            </tr>
            <!-- <tr>
                <td>Mensagem</td>
                <td><textarea name="mensagem" id="" cols="30" rows="10"></textarea></td>
            </tr> -->
            <tr><td><input type="submit" name="button" value="Enviar"></td></tr>
        </table>
    </form>
</body>
</html>