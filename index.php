<?php
// FUENTES
// https://www.php.net/manual/es/book.password.php
// https://www.php.net/manual/es/mysqli.quickstart.stored-procedures.php
// https://paragonie.com/blog/2015/05/using-encryption-and-authentication-correctly
// http://blog.agencialanave.com/las-mejores-formas-para-encriptar-las-claves/
/**
 * Insertar: Introduce un usuario y su contraseña encriptada.
 * Comprobar: Ejecuta un procedimiento almacenado para encontrar el password
 * y después comprueba si coincide con el introducido
 * son correctos
 *
 * @author Karmele 2020-2021
 */
require_once 'modelo/conexion.php';
require_once 'helper/utilidades.php';

//comprobar si se dispone del algoritmo de encriptación
if (defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH) {
    echo "Si, tengo CRYPT_BLOWFISH! <br />";
}

if (isset($_GET['opcion']) && $_GET['opcion'] == 'comprobar') {
    //Se debería introducir mediante un formulario u otro dispositivo.
    $passwordIntro = 'lacontrasenaqueyoquiera1234';

    //Primera consulta
    $sql = "CALL ----------COMPLETAR------------";
    $resul = mysqli_query($conexion, $sql);
    
    //COMPLETAR

    //Segunda consulta para recoger el password
    $sql = "SELECT @p1 as salida";
    
    //COMPLETAR

    //Un valor
    $fila = mysqli_fetch_array($resul);
    //$fila = $resultado->fetch_assoc();
    echo 'Esta es la salida ' . $fila['salida'] . ' BUENA';
    $passwordenBD = $fila['salida'];  // un valor

    if (crypt($passwordIntro, $passwordenBD) == $passwordenBD) {
        $error = 'Si existe el usuario';
        include "vistas/vista_error.php";
        exit();
    } else {
        $error = 'No existe el usuario';
        include "vistas/vista_error.php";
        exit();
    }
    //Varios valores Otro programa
}
if (isset($_GET['opcion']) && $_GET['opcion'] == 'insertar') {


    $passwordIntro = 'lacontrasenaqueyoquiera1234';

    $password = crypt_blowfish_mipswd($passwordIntro, $digito = 7); //función para encriptar y la semilla
    $sql = "INSERT ---------------COMPLETAR------------";
    consultaAction($conexion, $sql);
}

// se ha hecho click en el enlace Listar
if (isset($_GET['opcion']) && $_GET['opcion'] == 'listar') {

    $sql = 'SELECT * FROM usuarios';
    $personas = obtenerRegistros($conexion, $sql);
    include "vistas/vista_listar.php";
    exit();
}

// vale para click en Inicio o cuando se solicita el script index.php la primera vex
$sql = 'SELECT nombre, password FROM usuarios';
$personas = obtenerRegistros($conexion, $sql);
include "vistas/vista_inicio.php";
