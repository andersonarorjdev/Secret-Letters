<?php

    //Importacoes de Bibliotecas Externas
    require './vendor/phpmailer/phpmailer/src/POP3.php';
    require './vendor/phpmailer/phpmailer/src/SMTP.php';
    require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require './vendor/phpmailer/phpmailer/src/OAuth.php';
    require './vendor/phpmailer/phpmailer/src/Exception.php';

    //Adicao de Namespaces para uso das classes
    //Use (nome do namespace), (por fim a classe)
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;


    //Fim das Importacoes.

    class Mensagem{
        //Atributos
        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        //Metodos
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function Mensagem_Valida(){
            //Vou usar nesse caso a funcao nativa do php "empty para verificar se os campos estao vazios ou nao";
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return true;
            }
            else{
                return false;
            }
        }
    }
    $mensagem = new Mensagem();
    $mensagem->__set('para',$_POST['para']);
    $mensagem->__set('assunto',$_POST['assunto']);
    $mensagem->__set('mensagem',$_POST['texto']);
    
    if($mensagem->Mensagem_Valida()){
        header('Location:enviaemail.php');
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contadousuario@gmail.com';                     // SMTP username
        $mail->Password   = 'senhadousuario';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('anderson.r.o.r.jr@gmail.com', 'Remetente');
        $mail->addAddress($mensagem->__get('para'));     // Add a recipient // O para poderia ser engessado para poder ser uma forma de contato com a empresa.
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  
        $mail->Subject = $mensagem->__get('assunto');
        $mail->Body    = $mensagem->__get('mensagem');
        $mail->send();
        
        header('Location:sucesso.html');
    } catch (Exception $e) {
        header('Location:naoenviado.html');
    }
   ?>
