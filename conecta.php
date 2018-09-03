<?php
# $conexao = mysqli_connect("mysql.hostinger.com.br", "u548680052_loja", "lojaloja", "u548680052_loja");

$conexao = mysqli_connect("localhost", "root", "aqm0hpv", "loja");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}