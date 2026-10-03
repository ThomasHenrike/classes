<?php
    require_once "conta.php";
    require_once "administrador.php";

    $conta = new Conta(1,"patati@patata.com","123456");
    echo $conta->login("123456") ? "login realizado com sucesso" : "Senha incorreta <br>";

    //criando uma instancia de classe administrador
    $admin = new administrador("moderador");
    $admin ->banirJogador("Patati");

?>