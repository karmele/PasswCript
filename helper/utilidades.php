<?php

function obtenerRegistros($conexion, $sql)
{
   //COMPLEAR
}

function siExiste ($conexion,$sql){
    
    //COMPLETAR

}
function consultaAction($conexion, $sql)
{

    //COMPLETAR
}

//El salt para Blowfish debe ser escrito de la siguiente manera: $2a$, $2x$ o $2y$ + 2 números 
//de iteración entre 04 y 31 + 22 caracteres que pueden ser ./1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz. 
//Ejemplo: $2x$07$./f4af7kJi1jdaxlswE34$
function crypt_blowfish_mipswd($password, $digito = 7)
{
    $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; //caracteres posibles
    $salt = sprintf('$2a$%02d$', $digito);
    for ($i = 0; $i < 22; $i++) {
        $salt .= $set_salt[mt_rand(0, 22)];
    }
    return crypt($password, $salt);
}
