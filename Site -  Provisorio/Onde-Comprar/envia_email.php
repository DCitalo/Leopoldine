<?php
    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
        $emailsender='admin_leopoldine@leopoldinebolsas.com.br';
        } else {
                $emailsender = "admin_leopoldine@" . $_SERVER[HTTP_HOST];
                //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio',
                // você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
        }
         
        /* Verifica qual é o sistema operacional do servidor para ajustar o cabeçalho de forma correta. Não alterar */
        if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
        elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
        else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
         
        // Passando os dados obtidos pelo formulário para as variáveis abaixo
        $nome              = $_POST['nome'];
        $email             = trim($_POST['email']);
        $telefone          = $_POST['telefone'];
        $emaildestinatario = "atendimento@leopoldine.com.br";
        $cod_estados       = $_POST['cod_estados']; 
        $cod_cidades       = $_POST['cod_cidades']; 
        $assunto           = $_POST['assunto']; 
        $msg               = $_POST['mensagem'];
        $comcopia          = trim($_POST['comcopia']);
        $comcopiaoculta    = trim($_POST['comcopiaoculta']);
        $assunto           = $_POST['assunto'];
        $mensagem          = $_POST['mensagem']; 

        /* Montando a mensagem a ser enviada no corpo do e-mail. */
        $mensagemHTML = '<p>Nome :' .$nome. ' <br> 
                        Email :' .$email. ' <br>
                        Telefone :' .$telefone. ' <br>
                        Estado :' .$cod_estados. ' <br>
                        Cidade :' .$cod_cidades.  ' <br>
                        Mensagem :' .$msg.'</p>';
         
         
        /* Montando o cabeçalho da mensagem */
        $headers = "MIME-Version: 1.1".$quebra_linha;
        $headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
        $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
        $headers .= "Content-type: text/html; charset=utf-8\n";
        // Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
        $headers .= "From: ".$email.$quebra_linha;
        $headers .= "Return-Path: " . $email . $quebra_linha;
        // Esses dois "if's" abaixo são porque o Postfix obriga que se um cabeçalho for especificado, deverá haver um valor.
        // Se não houver um valor, o item não deverá ser especificado.
        if(strlen($comcopia) > 0) $headers .= "Cc: ".$comcopia.$quebra_linha;
        if(strlen($comcopiaoculta) > 0) $headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
        $headers .= "Reply-To: ".$email.$quebra_linha;
        // Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
         

        // Send the email.
        if (mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender)) {
            echo "Muito obrigado! Em breve entraremos em contato.";
        } else {
            echo "Oops! Parece que ocorreu um erro...<button class='btn btn-primary back formBack'>Voltar</button>";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
