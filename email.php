<?php 
    if($_GET['cod'] == "f00dtruck"){
        if($_GET['id'] == 1){

        } else if($_GET['id'] == 2){
            $emailsender = "contato@cadeofoodtruck.com";
            if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
            elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows
            else die("Este script nao esta preparado para funcionar com o sistema operacional de seu servidor");
            $emailremetente    = trim($_GET['email']);
            $emaildestinatario = $emailsender;
            $assunto           = "Mensagem";
            $mensagem          = trim($_GET['msg']); 
            $mensagemHTML = '<p>Nome: '. $_GET['nome'].'</p><p>Mensagem: <b><i>'.$mensagem.'</i></b></p><hr>'; 
            $headers = "MIME-Version: 1.1".$quebra_linha;
            $headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
            $headers .= "From: ".$emailremetente.$quebra_linha;
            $headers .= "Return-Path: " . $emailremetente . $quebra_linha;
            $headers .= "Reply-To: ".$emailremetente.$quebra_linha;
 
            if(mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r". $emailsender)){
                echo 1;
            }
            else{
                echo 0;
            }
        } 

    } else{
        echo -1;
    }
?>