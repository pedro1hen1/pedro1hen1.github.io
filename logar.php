<?php
    session_start();    
    $login=$_GET['user'];
    $senha=$_GET['senha'];    
    $local="35.192.93.89:3306";
    $usuarioBD="root";
    $senhaBD="982669923";
    $base="contas";
   
    $tenta_conectar =  new mysqli($local,$usuarioBD,$senhaBD,$base);
    if($tenta_conectar->connect_error === TRUE)
    {    die("Deu erro na conexão ". $tenta_conectar->connect_error);}
        
    $tenta_achar = "SELECT * FROM contas WHERE username='$login' AND password='$senha'" ;
    $resultado = $tenta_conectar->query($tenta_achar);
    if ($resultado->num_rows > 0) {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('location:testadorbeta/index.html');
    }
    else{
        session_unset();
        session_destroy();
        echo "<script> 
                alert('Tente de novo,login ou senha incorreto');
                window.location.href = 'index.html';
            </script>";
      }
      