<?php

$nome=$_POST["nome"];
$email=$_POST["email"];
$assunto=$_POST["assunto"];

         $to = $email;
                $subject = "Ideia | Chega de incomodar seus amigos.";
                $message = "Caro(a), " . $nome . ", \n
                         ".$assunto.".\n
                         Obrigado por usar aos nossos serviços.";
                $header = "MIME-Version: 1.0\n";
                $header = "content-type: text/html; charset=iso-8859-1\n";
                $header = "From Ideia\n";
                mail($to, $subject, $message, $header);

                echo("<script language='javascript' type='text/javascript'> alert('Mensagem enviada com sucesso!');window.location.href='ajuda.php';</script>");
          
?>