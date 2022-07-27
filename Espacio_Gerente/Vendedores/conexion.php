<?php
function conectar()
{

        $host1 = "ec2-3-224-251-47.compute-1.amazonaws.com";
        $dbname1 = "d4vsis3t9kovb3";
        $username1= "taohgtxxgicbzh";
        $password1 = "d9b817e2f550b0704bcf2a5b85133771ea8883951854de76c702abd45eb946d9";


        $host = "localhost";
        $dbname = "parcial2";
        $username= "tj";
        $password = "Bootgear1";

        try{
            $conn = pg_connect("host=$host1 dbname=$dbname1 user=$username1 password=$password1");
        } catch (Exception $exp) {
            echo("Ta perdido socio $exp");
        }
        return $conn;
}

?>

