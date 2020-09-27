<?php
  // Adiciona o arquivo class.phpmailer.php - voc deve especificar corretamente o caminho da pasta com o este arquivo.
  require_once("autenvio/PHPMailerAutoload.php");

  //Recebe as variaveis
  $arquivo = $_FILES['arquivo'];

  // Inicia a classe PHPMailer
  $mail = new PHPMailer();
  // DEFINI��O DOS DADOS DE AUTENTICA��O - Voc� deve auterar conforme o seu dom�nio!
  $mail->IsSMTP(); // Define que a mensagem ser� SMTP
  $mail->Host = "	smtp.hostinger.com.br"; // Seu endere�o de host SMTP  smtp.seudominio.com.br
  $mail->SMTPAuth = true; // Define que ser� utilizada a autentica��o -  Mantenha o valor "true"
  $mail->Username = 'contato@gabrielbsouzadeveloper.online'; // Conta de email existente e ativa em seu dom�nio
  $mail->Password = '723507pO*'; // Senha da sua conta de email
  $mail->SMTPSecure = false; // Define se � utilizado SSL/TLS - Mantenha o valor "false"
  $mail->SMTPAutoTLS = false; // Define se, por padr�o, ser� utilizado TLS - Mantenha o valor "false"
  $mail->Port = 587; // Porta de comunica��o SMTP - Mantenha o valor "587"

  // DADOS DO REMETENTE
  $mail->Sender = "contato@gabrielbsouzadeveloper.online"; // Conta de email existente e ativa em seu dom�nio
  $mail->From = "contato@gabrielbsouzadeveloper.online"; // Sua conta de email que ser� remetente da mensagem
  $mail->FromName = "Sapatada Records"; // Nome da conta de email
  // DADOS DO DESTINAT�RIO
  $mail->AddAddress('sapatadarecords@gmail.com', 'Nome - Recebe1'); // Define qual conta de email receber� a mensagem
  //$mail->AddAddress('recebe2@dominio.com.br'); // Define qual conta de email receber� a mensagem
  //$mail->AddCC('copia@dominio.net'); // Define qual conta de email receber� uma c�pia
  //$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receber� uma c�pia oculta
  // Defini��o de HTML/codifica��o

  // Attachments
  $mail->addAttachment($arquivo['tmp_name'], $arquivo['name']);
  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  $mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
  $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
  // DEFINI��O DA MENSAGEM
  $mail->Subject  = "Contato via Formulario Sapatada Records"; // Assunto da mensagem
  $mail->Body .= " Nome: " . $_POST['nome'] . "
  "; // Texto da mensagem
  $mail->Body .= " E-mail: " . $_POST['email'] . "
  "; // Texto da mensagem
  $mail->Body .= " Assunto: " . $_POST['assunto'] . "
  "; // Texto da mensagem
  $mail->Body .= " Mensagem: " . nl2br($_POST['mensagem']) . "
  "; // Texto da mensagem
  // ENVIO DO EMAIL
  $enviado = $mail->Send();
  // Limpa os destinat�rios e os anexos
  $mail->ClearAllRecipients();
  // Exibe uma mensagem de resultado do envio (sucesso/erro)
  if ($enviado) {
    echo "E-mail enviado com sucesso!";
    header('Location: http://www.gabrielbsouzadeveloper.online/index.php');
    exit;
  } else {
    echo "N�o foi poss�vel enviar o e-mail.";
    echo "Detalhes do erro: " . $mail->ErrorInfo;
  }
?>