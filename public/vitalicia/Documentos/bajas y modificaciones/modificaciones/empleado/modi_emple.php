<?php
$con = mysql_connect("localhost","root","");
   if (!$con){die('ERROR DE CONEXION CON LA BASE: ' . mysql_error());}
   $database = mysql_select_db("netitsolutions",$con);
   if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
   $sql ="UPDATE empleados SET nombre='".$_POST['nom']."', localidad='".$_POST['loca']."', telefono='".$_POST['tel']."'  WHERE id_emp='".$_POST['idemp']."'";
   $result = mysql_query ($sql);
   if (! $result){
   echo "La consulta SQL contiene errores.".mysql_error();
   exit();
}else {
	print ("La modificacion fue exitosa");
   }
?>