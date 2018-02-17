<?php
$server="localhost";
$login="root";
$passwd="";
$dbname="formulaire";


/** @var TYPE_NAME $passwd */
$con = new PDO('mysql:host='.$server.';dbname=,'.$dbname.';charset=utf8',$login,$passwd);

  ?>