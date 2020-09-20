<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function login()
    {
        //Conexión a la DB.
        $dbhost = "31.170.166.58";
        $dbuser = "u118334447_test";
        $dbpass = "Inicio00";
        $dbname = "u118334447_test";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        //Si no se conecta..
        if (!$conn)
        {
            die("No hay conexión: " . mysqli_connect_error());
        }

        //Valores del formulario.
        $dni = $_POST['dni'];
        $clave = $_POST['clave'];

        //Consulta a la DB.
        $query = mysqli_query($conn, "SELECT * FROM llx_cliente WHERE dni =  '". $dni ."' and clave = '". $clave ."' ");
        $nr = mysqli_num_rows($query);

        //Si encuentra resultados..
        if ($nr == 1)
        {
            echo "Adentro";
        } 
        //Si no encuentra resultados..
        else if ($nr == 0)
        {
            echo "No ingreso";
        }
    }
}
